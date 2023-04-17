<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Matches</title>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link href="./css/nerdieluv.css" rel="stylesheet" >
  </head>
  <body>
    <header>
      <img src="./Logo.png" alt="company logo">
    </header>
    <main class="main-sign-up">
      <form class="form-sign-up" action="matches-submit.php" method="GET">
        <div class="special-sign-up">
          <strong>Returning User:</strong>
        </div>

        <div>
        <!-- Extra Feature #1. Note for TA: Professor allow me to put 'required' in the input below -> I don't have to check if name is empty or not, Thank you. -->
          <label>Name: </label>
          <input type="text" name="name" maxlength="16" size="16" required>
        </div>

        <div>
          <button type="submit">View My Matches</button>
        </div>
      </form>
      <p>This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin! Thank you for using our site.</p>
      <p>Results and page (C) Copyright NerdLuv Inc. </p>

      <div class="Links go-back">
        <img style="height: 70px; width: 100px;" class="icon" src="./image/back-icon.png" alt="go back icon">
        <a href="./index.php">Back to front page</a>
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