<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Title</title>

    <!--Materialize CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!--Materialize Icons CSS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Google Font CSS-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fredericka+the+Great">
    <!--Project CSS-->
    <link rel="stylesheet" href="./css/main.css">
  </head>
  <body>

    <div class="container center-align">
        <h1 class="center-align">Survey Page</h1>

        <h2 id="surveyUrl" class="center-align">Go here to take survey: <br /> <?php echo $_SESSION['qr-url']; ?></h2>

        <img src="./includes/getQRCode.php" alt="qr code"/>


    </div>
  <!--jQuery JS-->
  <script   src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <!--Angular JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <!--Materialize JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  <!--Project JS-->
  <script src="./js/main.js"></script>
  </body>
</html>
