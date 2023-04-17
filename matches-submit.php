<?PHP 
  // Check if there a value pass to this file, if no, direct user to matches.php 
  if(isset($_GET['name'])){
    $filename = "singles.txt";
    $lines = file($filename);
    $nerd = array();
    //interate through the database and find if the name is inside database, if don't , tell user name does not exist in database
    foreach ($lines as $line) {
      $data = explode(",", $line);
      if ($data[0] == $_GET['name']){
        array_push($nerd, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6]);
      }
    }
    //function to output all the matches result.
    function output(){
      global $nerd;
      global $lines;
      //note: nerd are our user, data are their partner. index 0 is name, 1 is gender, 2 is their age, 3 is their type, 4 is their OS type, 5 is their min desired age, 6 is their max desired age
      $nerd[5] = intval($nerd[5]);
      $nerd[6] = intval($nerd[6]);
      foreach ($lines as $line){
        $data = explode(",", $line);
        if (($data[1] != $nerd[1]) && (intval($data[2]) >= $nerd[5] && $data[2] <= $nerd[6]) && ($data[4] == $nerd[4])){
          $str1 = $data[3];
          $str2 = $nerd[3];
          $common = false;

          for ($i = 0; $i < strlen($str1); $i++) {
            if ($str1[$i] == $str2[$i]) {
              $common = true;
              break;
            }
          }
          //Extra Feature #2. Try to input 'Tran Nguyen' or 'Bill Gates' in the matches.php to see result.
          if ($common) {
            $filename= str_replace(' ', '-', strtolower($data[0]));
            if(file_exists('./image/' . $filename . ".png")){
              ?><img style="width:150px; height:150px;" src="./image/<?= $filename.".png"?>" alt="match logo"><?PHP
            } else if(file_exists('./image/' . $filename . ".jpg")){
              ?><img style="width:150px;height:150px;" src="./image/<?= $filename.".jpg"?>" alt="match logo"><?PHP
            } else {
              ?><img style="height:150px;" src="./image/Default.png" alt="couple logo"><?PHP 
            }
            ?>
            <div>
              <div class="complicated-head"><?= $data[0]?></div>
              <div class="complicated">
                <ul>
                  <li>gender:</li>
                  <li>age:</li>
                  <li>type:</li>
                  <li>OS:</li>
                </ul>
                <ul>
                  <li><?=$data[1]?></li>
                  <li><?=$data[2]?></li>
                  <li><?=$data[3]?></li>
                  <li><?=$data[4]?></li>
                </ul>
              </div>
            </div>
            <?PHP
          }
        };
      }
    }
  } else {
    header("location: matches.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matches Submit</title>
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
  <br>
  <?PHP 
    if (count($nerd)>0){
      ?> <h1>Matches for <?= $nerd[0] ?></h1> <?PHP
    }
  ?>
  <div class="matches-result">
    <?PHP 
      if (count($nerd)>0){
        output();
      } else {
        //Extra feature #1 solve input errors;
        ?> <p style="grid-column: 1/-1;font-size:20px; font-weight:700;color: red;">Your name does not exist in database. Hit the back arrow below to try again</p> <?PHP
      }
    ?>
  </div>
  <main class="main-sign-up matches-submit">
    <p>This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin! Thank you for using our site.</p>
    <p>Results and page (C) Copyright NerdLuv Inc. </p>

    <div class="Links go-back">
      <img style="height: 70px; width: 100px;" class="icon" src="./image/back-icon.png" alt="go back icon">
      <a href="./matches.php">Back to front page</a>
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