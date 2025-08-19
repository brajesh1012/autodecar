<!DOCTYPE html>
<html>
<head>
    <title>Live Chat</title>
      <!-- 🔹 Firebase SDKs FIRST -->
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-firestore-compat.js"></script>
</head>
<body>
<h6 style="margin-bottom: 15px; font-size: 15px; color: #00856a;"><a href="<?= base_url(); ?>" style="color: #00856a; text-decoration: none;">Back To Home</a></h6>
<h3 style="margin-bottom: 15px; font-size: 22px; color: #00856a;">💬 Live Chat - <?php echo $username = $this->db->where('id', $receiver_id)->get('users')->row('username'); ?> (<?= $receiver_role ?>) </h3>

<!-- <h3 style="margin-bottom: 15px; font-size: 15px; color:rgb(57, 100, 92);">💬 <?php echo $username = $this->db->where('id', $receiver_id)->get('users')->row('username'); ?> (<?= $receiver_role ?>)</h3> -->

<!-- 🔹 Chat box -->
<div id="chat-box" style="
    border: 1px solid #ddd;
    height: 400px;
    overflow-y: auto;
    padding: 15px;
    margin-bottom: 15px;
    background-color: #fdfdfd;
    border-radius: 10px;
    box-shadow: inset 0 0 8px rgba(0,0,0,0.05);
"></div>

<!-- 🔹 Input area -->
<div style="
    display: flex;
    gap: 10px;
    align-items: center;
">
  <input type="text" id="message" placeholder="Type a message..." style="
      flex-grow: 1;
      padding: 10px 15px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 25px;
      outline: none;
      transition: 0.2s;
  " onfocus="this.style.borderColor='#00856a'" onblur="this.style.borderColor='#ccc'">

  <button onclick="sendMessage()" style="
      background-color: #00856a;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      font-size: 14px;
      transition: 0.2s ease;
  " onmouseover="this.style.backgroundColor='#006f57'" onmouseout="this.style.backgroundColor='#00856a'">
    Send
  </button>
</div>




<!-- 🔹 Session/User Data + chatDocId -->
<script>
  const vehicleId = "<?= $vehicle_id ?>";
  const senderId = "<?= (string)$_SESSION['user_id'] ?>";
  const senderRole = "<?= $_SESSION['role_name'] ?>";
  const receiverId = "<?= (string)$receiver_id ?>";
  const receiverRole = "<?= $receiver_role ?>";


  // 🔁 Make ID consistent
const participants = [senderId, receiverId].sort();
const chatDocId = `chat_${vehicleId}_${participants[0]}_${participants[1]}`;

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


 function markMessagesAsRead() {
  console.log("Marking messages as read for:", senderId);
  db.collection("chats")
    .doc(chatDocId)
    .collection("messages")
    .where("receiver_id", "==", senderId)
    .where("is_read", "==", false)
    .get()
    .then((querySnapshot) => {
      if (querySnapshot.empty) {
        console.log("No unread messages found for this user.");
      } else {
        querySnapshot.forEach((doc) => {
          console.log("Marking message as read:", doc.id);
          // console.log("Checking to mark as read:", {
          //   msgId: doc.id,
          //   receiver_id: doc.data().receiver_id,
          //   senderId: senderId,
          //   is_read: doc.data().is_read
          // });
          doc.ref.update({ is_read: true });
        });
      }
    })
    .catch((error) => {
      console.error("Error updating read status:", error);
    });
}

</script>

<!-- 🔹 sendMessage() Function -->
<script>
  // function sendMessage() {
  //   const text = document.getElementById("message").value.trim();
  //   if (text === "") return;

  //   db.collection("chats").doc(chatDocId).collection("messages").add({
  //     sender_id: senderId,
  //     sender_role: senderRole,
  //     receiver_id: receiverId,
  //     receiver_role: receiverRole,
  //     vehicle_id: vehicleId,
  //     text: text,
  //     timestamp: firebase.firestore.FieldValue.serverTimestamp()
  //   });

  //   document.getElementById("message").value = "";
  // }


  function sendMessage() {
  const text = document.getElementById("message").value.trim();
  if (text === "") return;

  // Save the message
  db.collection("chats").doc(chatDocId).collection("messages").add({
    sender_id: senderId,
    sender_role: senderRole,
    receiver_id: receiverId,
    receiver_role: receiverRole,
    vehicle_id: vehicleId,
    text: text,
    timestamp: firebase.firestore.FieldValue.serverTimestamp(),
    is_read: false
  });

  // 🔥 Update parent chat doc with participants & last message
  db.collection("chats").doc(chatDocId).set({
    participants: [senderId, receiverId],
    vehicle_id: vehicleId,
    last_message: text,
    last_updated: firebase.firestore.FieldValue.serverTimestamp()
  }, { merge: true });

  // Clear input
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

        chatBox.innerHTML += `
          <div style="text-align:${alignment}; margin:5px 0;">
            <div style="display:inline-block; background:${bgColor}; padding:8px 12px; border-radius:10px; max-width:60%;">
              <strong>${msg.sender_role}:</strong> ${msg.text}
            </div>
          </div>
        `;
      });
      chatBox.scrollTop = chatBox.scrollHeight;
          markMessagesAsRead();
    });
</script>

</body>
</html>
