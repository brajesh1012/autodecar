<h3 class="mb-4">💬 My Messages</h3>
<div id="chatList" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5"></div>

<!-- Chat Modal -->
<div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="chatModalLabel">Chat</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="chatModalContent">
        Loading chat...
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-firestore-compat.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .hover-shadow:hover {
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        transition: box-shadow 0.3s ease-in-out;
    }
    .msg-preview {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 180px;
        font-size: 13px;
    }
</style>

<script>
const firebaseConfig = {
    apiKey: "AIzaSyD0TUv5KLfBy6qCfVNwOaaf98-AU813x7I",
    authDomain: "autokorb-f0b82.firebaseapp.com",
    projectId: "autokorb-f0b82"
};

firebase.initializeApp(firebaseConfig);
const db = firebase.firestore();

const currentUserId = "<?= $_SESSION['user_id'] ?>";
const chatList = document.getElementById("chatList");

db.collection("chats").onSnapshot(snapshot => {
    chatList.innerHTML = "";

    snapshot.forEach(doc => {
        const data = doc.data();
        const participants = data.participants || [];
        if (!participants.includes(currentUserId)) return;

        const otherUserId = participants.find(id => id !== currentUserId);
        const vehicleId = data.vehicle_id || 0;

        db.collection("chats").doc(doc.id).collection("messages")
            .orderBy("timestamp", "desc").limit(1).get()
            .then(msgs => {
                let lastMsg = "No messages yet";
                let msgTime = "";

                msgs.forEach(m => {
                    const msgData = m.data();
                    lastMsg = msgData.text || "📎 File/Image";
                    if (msgData.timestamp && msgData.timestamp.toDate) {
                        const time = msgData.timestamp.toDate();
                        msgTime = new Intl.DateTimeFormat('en-US', {
                            hour: '2-digit',
                            minute: '2-digit',
                            hour12: true
                        }).format(time);
                    }
                });

                db.collection("chats").doc(doc.id).collection("messages")
                    .where("receiver_id", "==", currentUserId)
                    .where("is_read", "==", false).get()
                    .then(unreadSnap => {
                        const unreadCount = unreadSnap.size;

                        $.ajax({
                            url: "<?= base_url(ADMIN_PATH . '/get-user-info') ?>",
                            method: "GET",
                            data: { id: otherUserId },
                            dataType: "json",
                            success: function(user) {
                                const name = user.username || 'Unknown';
                                const unreadBadge = unreadCount > 0
                                    ? `<span class="badge bg-danger ms-2">Unread: ${unreadCount}</span>`
                                    : '';

                                chatList.innerHTML += `
                                <div class="col">
                                    <div class="card shadow-sm border-0 hover-shadow h-100">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center me-3" 
                                                    style="width: 50px; height: 50px; font-size: 20px;">
                                                    ${name.charAt(0).toUpperCase()}
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">${name} ${unreadBadge}</h6>
                                                    <p class="mb-0 text-muted msg-preview">${lastMsg} • ${msgTime}</p>
                                                </div>
                                            </div>
                                            <button class="btn btn-sm btn-outline-primary open-chat"
                                                data-url="<?= base_url(ADMIN_PATH  . '/view-chat') ?>/${vehicleId}/${otherUserId}">
                                                💬
                                            </button>
                                        </div>
                                    </div>
                                </div>`;
                            },
                            error: function() {
                                console.warn("Could not fetch user info for:", otherUserId);
                            }
                        });
                    });
            });
    });
});

$(document).on("click", ".open-chat", function (e) {
    e.preventDefault();
    const url = $(this).data("url");

    $("#chatModalContent").html("Loading chat...");
    const modal = new bootstrap.Modal(document.getElementById('chatModal'));
    modal.show();

    $.ajax({
        url: url,
        type: "GET",
        success: function (res) {
            $("#chatModalContent").html(res);
        },
        error: function () {
            $("#chatModalContent").html("<p class='text-danger'>Failed to load chat.</p>");
        }
    });
});
</script>
