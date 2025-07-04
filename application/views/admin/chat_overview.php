<!DOCTYPE html>
<html>

<head>
    <title>Chat Overview</title>

    <!-- ✅ DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css">

    <!-- ✅ jQuery First -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- ✅ DataTables after jQuery -->
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>

    <!-- ✅ Firebase -->
    <script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-firestore-compat.js"></script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</head>

<body>
    <h2>Message List</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-area">
                    <main id="main" class="main-content">
                        <div class="tfcl-dashboard">
                            <div class="tfcl-dashboard-middle mt-2">
                                <div class="row">
                                    <div class="tfcl-dashboard-middle-left col-md-12">
                                        <div class="tfcl-dashboard-listing">
                                            <div class="row">



                                                <div class="tfcl-table-listing">
                                                    <div class="table-responsive">
                                                        <!-- ✅ Chat Table -->
                                                        <table id="chatTable" class="display" border="1"
                                                            style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Mobile</th>
                                                                    <th>Email</th>
                                                                    <th>Role</th>
                                                                    <th>Last Msg</th>
                                                                    <th>Unread</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="chatListBody"></tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script>
    const currentUserId = "<?= (string)$_SESSION['user_id'] ?>";
    const currentUserRole = "<?= $_SESSION['role_name'] ?>";

    const firebaseConfig = {
        apiKey: "AIzaSyD0TUv5KLfBy6qCfVNwOaaf98-AU813x7I",
        authDomain: "autokorb-f0b82.firebaseapp.com",
        projectId: "autokorb-f0b82",
    };

    firebase.initializeApp(firebaseConfig);
    const db = firebase.firestore();

    const chatListBody = document.getElementById("chatListBody");
    let rows = [];
    let totalChats = 0;
    let processed = 0;

    db.collection("chats").onSnapshot((snapshot) => {
        rows = [];
        totalChats = snapshot.size;
        processed = 0;
        chatListBody.innerHTML = "";

        if (totalChats === 0) {
            const tableRef = document.querySelector('#chatTable');
            if (DataTable.get(tableRef)) {
                DataTable.get(tableRef).destroy();
            }
            new DataTable(tableRef);
            return;
        }

        snapshot.forEach((chatDoc) => {
            const chatId = chatDoc.id;
            const data = chatDoc.data();
            const participants = data.participants || [];

            if (!Array.isArray(participants) || !participants.includes(currentUserId)) {
                processed++;
                if (processed === totalChats) renderTable();
                return;
            }

            const otherUserId = participants.find((id) => id !== currentUserId);

            db.collection("chats")
                .doc(chatId)
                .collection("messages")
                .orderBy("timestamp", "desc")
                .get()
                .then((msgs) => {
                    let unreadCount = 0;
                    let lastMsg = "";

                    msgs.forEach((msg) => {
                        const m = msg.data();
                        if (m.receiver_id === currentUserId && m.is_read === false) {
                            unreadCount++;
                        }
                        if (!lastMsg) {
                            lastMsg = m.text;
                        }
                    });

                    $.ajax({
                        url: "<?= base_url(ADMIN_PATH . '/get-user-info') ?>",
                        method: "GET",
                        data: {
                            id: otherUserId
                        },
                        dataType: "json",
                        success: function(user) {
                            const row = `
                                    <tr>
                                        <td>${user.username || '-'}</td>
                                        <td>${user.mobile || '-'}</td>
                                        <td>${user.email || '-'}</td>
                                        <td>${user.role_name || '-'}</td>
                                        <td style="color: green;"><strong>${lastMsg}</strong></td>
                                        <td style="color: red;"><strong>${unreadCount}</strong></td>
                                        <td><a href="/autodecar/view-chat/${data.vehicle_id}/${otherUserId}" 
                                        class="open-chat-modal"  target="_blank"
                                        data-vehicle="${data.vehicle_id}" 
                                        data-user="${otherUserId}">
                                        Open Chat
                                        </a></td>
                                    </tr>
                                `;
                            rows.push(row);
                            processed++;
                            if (processed === totalChats) renderTable();
                        },
                        error: function() {
                            processed++;
                            if (processed === totalChats) renderTable();
                        }
                    });
                });
        });
    });

    function renderTable() {
        chatListBody.innerHTML = rows.join("");

        const tableRef = document.querySelector('#chatTable');

        if (DataTable.get(tableRef)) {
            DataTable.get(tableRef).destroy();
        }

        new DataTable(tableRef, {
            pageLength: 10,
            lengthChange: false
        });
    }
    </script>

</body>

</html>