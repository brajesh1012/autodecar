<!DOCTYPE html>
<html>
<head>
    <title>Chat Overview</title>
    <script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-firestore-compat.js"></script>

</head>
<body>
    <h2>Message List</h2>
    <div id="chatList"></div>

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

        // const chatListDiv = document.getElementById("chatList");

        // db.collection("chats").onSnapshot((snapshot) => {
        //     chatListDiv.innerHTML = "";
        //     snapshot.forEach((chatDoc) => {
        //         const chatId = chatDoc.id;
        //         const data = chatDoc.data();

        //         // const participants = data.participants;
        //         // if (!participants.includes(currentUserId)) return;

        //         const participants = data.participants || [];
        //         console.log(participants);
        //     if (!Array.isArray(participants) || !participants.includes(currentUserId)) return;

        //         // Get messages subcollection
        //         db.collection("chats")
        //             .doc(chatId)
        //             .collection("messages")
        //             .orderBy("timestamp", "desc")
        //             .get()
        //             .then((msgs) => {
        //                 let unreadCount = 0;
        //                 let lastMsg = "";
        //                 let senderName = "";

        //                 msgs.forEach((msg) => {
        //                     const m = msg.data();
        //                     if (m.receiver_id === currentUserId.toString() && m.is_read === false) {
        //                         unreadCount++;
        //                     }
        //                     if (!lastMsg) {
        //                         lastMsg = m.text;
        //                         senderName = m.sender_role;
        //                     }
        //                 });

        //                 const otherUserId = participants.find((id) => id !== currentUserId);
        //                 chatListDiv.innerHTML += `
        //                     <div style="border:1px solid #ccc; padding:10px; margin:10px;">
        //                         <strong>Chat with User ID: ${otherUserId}</strong><br>
        //                         Last Message: ${lastMsg}<br>
        //                         Unread: <strong>${unreadCount}</strong><br>
        //                         <a href="/autodecar/view-chat/${data.vehicle_id}/${otherUserId}" target="_blank">Open Chat</a>
        //                     </div>
        //                 `;
        //             });
        //     });
        // });


        const chatListBody = document.getElementById("chatList");

db.collection("chats").onSnapshot((snapshot) => {
    chatListBody.innerHTML = "";

    snapshot.forEach((chatDoc) => {
        const chatId = chatDoc.id;
        const data = chatDoc.data();
        const participants = data.participants || [];

        if (!Array.isArray(participants) || !participants.includes(currentUserId)) return;

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

                // ✅ AJAX call to get user details
                $.ajax({
                    url: "<?= base_url(ADMIN_PATH  . '/get-user-info') ?>",
                    method: "GET",
                    data: { id: otherUserId },
                    dataType: "json",
                    success: function(user) {
                        chatListBody.innerHTML += `
                            <tr>
                                <td>${user.username || '-'}</td>
                                <td>${user.mobile || '-'}</td>
                                <td>${user.email || '-'}</td>
                                <td>${user.role_name || '-'}</td>
                                <td style="color: green;"><strong>${lastMsg}</strong></td>
                                <td style="color: red;"><strong>${unreadCount}</strong></td>
                                <td><a href="/autodecar/view-chat/${data.vehicle_id}/${otherUserId}" target="_blank">Open Chat</a></td>
                            </tr>
                        `;
                        $('#chatTable').DataTable(); // initialize
                    }
                });
            });
    });
});

    </script>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css">
<script>
// new DataTable('#example');
</script>