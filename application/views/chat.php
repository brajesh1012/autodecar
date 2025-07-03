<!DOCTYPE html>
<html>
<head>
    <title>Live Chat</title>
      <!-- 🔹 Firebase SDKs FIRST -->
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-firestore-compat.js"></script>
</head>
<body>

<h3>Live Chat</h3>

<!-- 🔹 Chat box -->
<div id="chat-box" style="border:1px solid #ccc; height:300px; overflow:auto; padding:10px; margin-bottom:10px;"></div>

<!-- 🔹 Message input -->
<input type="text" id="message" placeholder="Type message..." style="width:70%;" />
<button onclick="sendMessage()">Send</button>




<!-- 🔹 Session/User Data + chatDocId -->
<script>
  const vehicleId = "<?= $vehicle_id ?>";
  const senderId = "<?= $_SESSION['user_id'] ?>";
  const senderRole = "<?= $_SESSION['role_name'] ?>";
  const receiverId = "<?= $receiver_id ?>";
  const receiverRole = "<?= $receiver_role ?>";


  // 🔁 Make ID consistent
// const participants = [senderId, receiverId].sort();
// const chatDocId = `chat_${vehicleId}_${participants[0]}_${participants[1]}`;

//   const chatDocId = `chat_${vehicleId}_${senderId}_${receiverId}`;
</script>

<!-- 🔹 Firebase Initialize -->
<script>
           const firebaseConfig = {
        apiKey: "AIzaSyD0TUv5KLfBy6qCfVNwOaaf98-AU813x7I",
        authDomain: "autokorb-f0b82.firebaseapp.com",
        projectId: "autokorb-f0b82",
        storageBucket: "autokorb-f0b82.firebasestorage.app",
        messagingSenderId: "979800739404",
        appId: "1:979800739404:web:3632b6182108f8fd40aee9"
    };
  firebase.initializeApp(firebaseConfig);
  const db = firebase.firestore();

   const participants = [senderId, receiverId].sort();
  const chatDocId = `chat_${vehicleId}_${participants[0]}_${participants[1]}`;
  const chatBox = document.getElementById("chat-box");
</script>

<!-- 🔹 sendMessage() Function -->
<script>
  function sendMessage() {
    const text = document.getElementById("message").value.trim();
    // if (text === "") return;
     if (!text) return;

    db.collection("chats").doc(chatDocId).collection("messages").add({
      sender_id: senderId,
      sender_role: senderRole,
      receiver_id: receiverId,
      receiver_role: receiverRole,
      vehicle_id: vehicleId,
      text: text,
      timestamp: firebase.firestore.FieldValue.serverTimestamp()
    });

    document.getElementById("message").value = "";
  }
</script>


<!-- 🔹 Real-time Message Display -->
<script>
  const chatBox = document.getElementById("chat-box");

  db.collection("chats")
    .doc(chatDocId)
    .collection("messages")
    .orderBy("timestamp")
    .onSnapshot((snapshot) => {
      chatBox.innerHTML = "";
      snapshot.forEach((doc) => {
        const msg = doc.data();
        const isSender = msg.sender_id === senderId;
        const alignment = isSender ? "right" : "left";
        const bgColor = isSender ? "#dcf8c6" : "#f1f0f0";


             // Mark as read if message is for me
        if (msg.receiver_id === senderId && !msg.is_read) {
          doc.ref.update({ is_read: true });
        }


        chatBox.innerHTML += `
          <div style="text-align:${alignment}; margin:5px 0;">
            <div style="display:inline-block; background:${bgColor}; padding:8px 12px; border-radius:10px; max-width:60%;">
              <strong>${msg.sender_role}:</strong> ${msg.text}
            </div>
          </div>
        `;
      });
      chatBox.scrollTop = chatBox.scrollHeight;
    });
</script>

</body>
</html>
