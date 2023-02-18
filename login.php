<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-analytics.js";
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

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <section class="container">
        <div class="login-container">
            <div class="circle circle-oine"></div>
            <div class="form-container">
                <!--imagen de github   
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                -->
                <h1>LOGIN</h1>
                <form>
                    <input type="text" placeholder="USERNAME" />
                    <input type="password" placeholder="PASSWORD" />
                    <button class="opacity">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <a href="register.php">REGISTER</a>
                    <!--<a href="">FORGOT PASSWOORD</a>-->
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn container"> </div>
    </section>

</body>

</html>