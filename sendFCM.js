
console.log("Node script started"); // add this line at the top

const admin = require("firebase-admin");
const fs = require("fs");
const serviceAccount = require("./serviceAccountKey.json");


admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
});
const args = process.argv.slice(2);
const [title, message, token] = args;
const sendNotification = async () => {
  const payload = {
    notification: {
      title: title || "Default Title",
      body: message || "Default Message",
    },
    // token: 'fD1XtqsrSVKoRaKLXzipHl:APA91bFg2FdTwU5THVoyL84ICrnv2Vz5eq-eoozkknqa_gZJUl4hy7v-EkJS2Aq5jkX_zYVtUkpsdzgMhPpho8dq_fI4RC-zgq7TsxeCzsTgaKDLANKnCZY',
    topic: "all_users"
  };

  try {
    const response = await admin.messaging().send(payload);
    console.log("Successfully sent:", response);
  } catch (error) {
    console.error("Error sending notification:", error);
  }
};

sendNotification();
