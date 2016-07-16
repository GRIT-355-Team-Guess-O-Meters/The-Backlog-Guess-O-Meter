<?php
  // Start the session
  session_start();
  include_once './includes/db.inc.php';
  include_once './includes/features/select.inc.php';

?>
<!DOCTYPE html>
<html ng-app="featuresPage">
  <head>
    <title>Features</title>

    <!--Materialize CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!--Materialize Icons CSS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Google Font CSS-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fredericka+the+Great">
    <!--Project CSS-->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
  </head>
  <body>
    <div class="container" ng-controller="featuresController">
      <div class="row">
        <h1 class="col s5">Features</h1>
        <a class="backToAdmin col s3 btn right" href="admin.php">Return to Admin Page</a>
      </div>

      <div class="row">

        <div class="card col s10 offset-s1">
          <h2 class="center-align">Project: <?php echo $projectName; ?></h2>

          <ul id="feature-list" class="collection">
            <?php include_once './includes/features/show-features.php';  ?>
          </ul>

          <div class="0 valign-wrapper">
            <div class="col s7 offset-s1">
              <fieldset>
                 <legend>Add Feature:</legend>
                 <input placeholder="Add Feature Name:" class="featureName" type="text" />
                <textarea placeholder="Add Feature Description:" class="featureDesc"></textarea>
              </fieldset>
              <br>
            </div>
            <button class="btn col s2 offset-s1 removeInput valign" counter="0">Remove</button>
          </div>

            <div id="dynamicInput"></div>

            <div class="col s6 offset-s3">
                <input id="addmore" class="col s5 btn deep-purple darken-2" value="Add More" />
                <input id="submit" class="col s5 offset-s1 btn teal darken-2" value="Submit" />
                <br />
                <br />
            </div>

        </div>
      </div>
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
