<?php
  if(!isset($_SESSION)) { 
    session_start();
  }
  $my_password = '{aMf*V8k2T{)RPSf';
  if ($_POST) {
    if (isset($_POST['password'])) {
      $password = $_POST['password'];
      if ($password != $my_password) {
        header("Location: /");
      } else {
        $_SESSION['active'] = true;
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css"/>

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <div class="container">
      <iframe src="manager.php"></iframe>
      <iframe>
        <div><h1>points here</h1></div>
      </iframe>
    </div>
  </body>

  <?php
      }
    }
  }
?>
