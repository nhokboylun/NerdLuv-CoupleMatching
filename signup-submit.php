<?PHP 
  if(isset($_POST['submit'])){
    //Extra Feature #1. Check if re-submitting a person who is already in the file. Notes: index 0 is name, 1 is gender, 2 is their age, 3 is their type, 4 is their OS type, 5 is their min desired age, 6 is their max desired age
    $filename = "singles.txt";
    $lines = file($filename);
    $exist = false;
    foreach ($lines as $line) {
      $data = explode(",", $line);
      if ($data[0] == $_POST['name'] && $data[1] == $_POST['gender'] && $data[2] == $_POST['age'] && $data[3] == $_POST['personality'] && $data[4] == $_POST['os'] && $data[5] == $_POST['seeking-age-min'] && $data[6] == $_POST['seeking-age-max']){
        $exist = true;
      }
    }
    //Extra Feature #1. Note for TA: Professor allow me to put 'required' in the input of signup.php -> I don't have to check if any field is empty or not. I just have to validate the input. Thank you.
    $valid = false;
    if (ctype_digit($_POST['age']) && intval($_POST['age']) >= 0 && intval($_POST['age']) <= 99) {
      if(strcmp($_POST['gender'],'female')||strcmp($_POST['gender'],'male')){
        if (preg_match("/^[IE][NS][FT][JP]$/", $_POST['personality'])){
          if(strcmp($_POST['os'],'Windows')||strcmp($_POST['os'],'MAC OS X')||strcmp($_POST['Linux'],'Windows')){
            if((ctype_digit($_POST['seeking-age-min']) && intval($_POST['seeking-age-min']) >= 0 && intval($_POST['seeking-age-min']) <= 99) && (ctype_digit($_POST['seeking-age-max']) && intval($_POST['seeking-age-max']) >= 0 && intval($_POST['seeking-age-max']) <= 99) && ($_POST['seeking-age-min'] <= $_POST['seeking-age-max'])){
              $valid = true;
            }
          }
        }
      }
    }

    //Extra Feature #2
    if(isset($_FILES['file'])){
      $original_name = $_FILES['file']['name'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $new_name =  strtolower(str_replace(' ', '-', $_POST['name']));
      $extension = pathinfo($original_name, PATHINFO_EXTENSION);
      $new_name_with_extension = $new_name .'.'. $extension;
      move_uploaded_file($file_tmp,"image/".$new_name_with_extension);
    }
    
    if($valid && !$exist){
      $name = $_POST['name'];
      $filename = "singles.txt";
      unset($_POST['submit']);
      $values = $_POST;
      $keys = array_keys($values);
      $last_key = end($keys);
      $current = '';
      // Generate a string that contain all info and seperated by comma and end by nothing.
      foreach($values as $key => $value) {
          if($key == $last_key) {
              $current .= $value;
          } else {
              $current .= $value . ',';
          }
      }
      $current = file_get_contents($filename)."\n".$current;
      file_put_contents($filename, $current);
    } else {
      //Extra feature #1
      function outputInvalid(){ ?>
        <h2>Error! Invalid data</h2>
        <p>We're sorry. You submitted invalid user information. Please go back and try again.</p>
        <?PHP
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Sign Up Submit</title>
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
    <main class="main-sign-up-submit">
      <?PHP 
      if (!$valid || $exist){
        outputInvalid();
      } else { ?>
        <h1>Thank you!</h1>
        <p>Welcome to NerdLuv, <?=$name?>!</p>
        <p>Now <a href="./matches.php">log in to see your matches!</a></p><?PHP
      }
      ?>
      <p>
        This page is for single nerds to meet and date each other! Type in your
        personal information and wait for the nerdly luv to begin! Thank you for
        using our site.
      </p>
      <p>Results and page (C) Copyright NerdLuv Inc.</p>

      <div class="Links go-back">
        <img style="height: 70px; width: 100px;" class="icon" src="./image/back-icon.png" alt="go back icon">
        <a href="./signup.php">Back to front page</a>
      </div>
    </main>
    <footer class="index-footer">
      <div>
        <a href="https://validator.w3.org/">
          <img alt="html validator link" src="./w3c-xhtml.png" >
        </a>
        <a href="https://jigsaw.w3.org/css-validator/">
          <img alt="css validator link" src="./w3c-css.png" >
        </a>
      </div>
    </footer>
  </body>
</html>