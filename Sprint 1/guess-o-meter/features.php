<?php include_once './includes/db.inc.php';
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
    <link rel="stylesheet" href="./css/main.css">
  </head>
  <body>
    <div class="container" ng-controller="featuresController">
      <h1>Features</h1>
      <div class="row">

        <div class="card col s10 offset-s1">
          <h2 class="center-align">Project: cats</h2>

          <ul class="collection">
            <li class="collection-item">As a user I want to be able to loginAs a user I want to be able to loginAs a user I want to be able to loginAs a user I want to be able to login <br /></li>
            <li class="collection-item">As a user I want to be able to buy thingsAs a user I want to be able to loginAs a user I want to be able to loginAs a user I want to be able to login  <br /></li>
            <li class="collection-item">As a user I want to be able to logoutAs a user I want to be able to loginAs a user I want to be able to loginAs a user I want to be able to loginAs a user I want to be able to loginAs a user I want to be able to login  <br /></li>
          </ul>

          <form class="input-field" action="" method="post">
            <label for="add_feature">Add Feature:</label>
            <input id="add_feature" class="col s10 offset-s1" type="text" />
            <div class="col s6 offset-s3">
                <input class="col s5 btn deep-purple darken-2" type="submit" value="Add More Features" name="submit" />
                <input class="col s5 offset-s1 btn teal darken-2" type="submit" value="Submit Feature List" name="submit" />
                <br />
                <br />
            </div>
          </form>
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
