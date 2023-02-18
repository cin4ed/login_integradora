// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAuth,onAuthStateChanged } from "firebase/auth"
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCVqCLA24KBo-py5oh6-SvSQ9IgO_yqzak",
  authDomain: "prueba1-861c1.firebaseapp.com",
  databaseURL: "https://prueba1-861c1-default-rtdb.firebaseio.com",
  projectId: "prueba1-861c1",
  storageBucket: "prueba1-861c1.appspot.com",
  messagingSenderId: "92530808507",
  appId: "1:92530808507:web:7082d44939fb1a66d9bb9e",
  measurementId: "G-J3KZSJ44G5"
};

const auth= getAuth(firebaseApp);
// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

//Detect auth state
onAuthStateChanged(auth, user =>{
    if(user =! null){
        console.log('logged in! ');
    } else {
        console.log('No user');
    }
})