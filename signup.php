<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link href="./css/nerdieluv.css" rel="stylesheet">
</head>
<body>
  <header>
    <img src="./Logo.png" alt="company logo">
  </header>
  <main class="main-sign-up">
    <form class="form-sign-up" action="signup-submit.php" method="POST" enctype="multipart/form-data">
      <div class="special-sign-up">
        <strong>New User Signup:</strong>
      </div>

      <div>
        <label>Name: </label>
        <input type="text" name="name" maxlength="16" size="16" required>
      </div>

      <div>
        <label>Gender: </label>
        <input type="radio" name="gender" value="male">
        <label>Male</label>
        <input type="radio" name="gender" value="female" checked>
        <label>Female</label>
      </div>

      <div>
        <label>Age: </label>
        <input type="text" name="age" maxlength="2" size="6" required>
      </div>

      <div>
        <label>Personality type: </label>
        <input type="text" name="personality" maxlength="4" size="6" required>
        <label>(<a href="https://www.humanmetrics.com/personality">Don't know your type?</a>)</label>
      </div>

      <div>
        <label>Favorite OS: </label>
        <select id="type" name="os">
          <option value="Windows" selected>Windows</option>
          <option value="MAC OS X">MAC OS X</option>
          <option value="Linux">Linux</option>
        </select>
      </div>

      <div>
        <label>Seeking age: </label>
        <input type="text" name="seeking-age-min" maxlength="2" size="6" placeholder="min" required>
        <label>to</label>
        <input type="text" name="seeking-age-max" maxlength="2" size="6" placeholder="max" required>
      </div>

      <div>
        <label>Photo:</label>
        <input type="file" name="file">
      </div>

      <div>
        <button type="submit" name="submit">Sign Up</button>
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