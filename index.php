<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link href="./css/nerdieluv.css" rel="stylesheet">
</head>
<body>
  <main class="index">
    <img src="./Logo.png" alt="company logo">
    <h1>Welcome!</h1>
    <div class="Links">
      <img style="height: 70px; width: 100px;" class="icon" src="./image/signup-icon.png" alt="sign up icon">
      <a href="./signup.php">Sign up for a new account</a>
    </div>
    <div class="Links">
      <img style="height: 70px; width: 100px;" src="./image/heart-icon.jpg" alt="check matches icon">
      <a href="./matches.php">Check your matches</a>
    </div> 
    <p>This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin! Thank you for using our site.</p>
    <p>Results and page (C) Copyright NerdLuv Inc. </p>
    <div class="Links go-back">
      <img style="height: 70px; width: 100px;" class="icon" src="./image/back-icon.png" alt="go back icon">
      <a href="./logout.php">Back to front page</a>
    </div> 
  </main>
  <footer class="index-footer">
    <div>
      <a href="https://validator.w3.org/">
        <img
          alt="html validator link"
          src="./w3c-xhtml.png"
        >
      </a>
      <a href="https://jigsaw.w3.org/css-validator/">
        <img
          alt="css validator link"
          src="./w3c-css.png"
        >
      </a>
    </div>
  </footer>
</body>
</html>