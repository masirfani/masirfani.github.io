// Your web app's Firebase configuration
var firebaseConfig = {
  apiKey: "AIzaSyD3mYuRV43RXiM3Du3_sEVDZSuoNluX24o",
  authDomain: "portfolio-8d52d.firebaseapp.com",
  databaseURL: "https://portfolio-8d52d.firebaseio.com",
  projectId: "portfolio-8d52d",
  storageBucket: "portfolio-8d52d.appspot.com",
  messagingSenderId: "451307387628",
  appId: "1:451307387628:web:f132aba1fa4fbde85583c9",
  measurementId: "G-T4JBZJRFG4"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

// // CREATE
// firebase.database().ref('users/' + userId).set({
//   username : name,
//   email : email,
//   profile_picture : profile_picture,
// });

// // READ
// var comentsRef = firebase.database().ref('post-comments' + postId);
// commentsRef.on('child_added', function(data){
//   addCommentElement(postElement, data.key, data.val().text, data.val().author);
// });

// commentsRef.on('child_changed', function(data){
//   addCommentValues(postElement, data.key, data.val().text, data.val().author);
// });

// commentsRef.on('child_removed', function(data){
//   deleteComment(postElement, data.key);
// });

// // UPDATE
// var updates = {};
// updates['/post/' + newPostKey] = postData;
// updates['/user-posts/' + uid + '/' + newPostKey] = postData;
// return firebase.database().ref().update(updates);

// // DELETE
// firebase.database().ref().remove();
