<?php
      // Start the session
      session_start();

      /**
      * Include files
      */

      include_once './includes/db.inc.php';
      include_once './includes/admin/insert.inc.php';
      include_once './includes/admin/select.inc.php';
      include_once './includes/admin/delete.inc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>

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
    <div class="container">
      <h1>Projects</h1>
      <div class="row">
        <div class="col s12">
              <form action="" method="post">
                <div class="input-field">
                  <label for="create_project">Create New Projet:</label>
                  <input class="col s10" id="create_project" type="text" name="project" />
                  <input class=" col s2 btn lime darken-3" type="submit" value="Add Project" name="submit" />
                </div>
              </form>
        </div>
      </div>

      <div class="row">
        <div class="card col s12">
          <h3 class="center-align">Existing Projects</h3>
          <hr />
            <table class="striped bordered centered">
              <!--Dynamicly displays table from database-->
              <?php include_once "./includes/admin/show-table.inc.php"; ?>
            </table>
            <br />
        </div>
      </div>

    </div>
    <!--jQuery JS-->
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <!--Angular JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <!--Materialize JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <!--Project JS-->
    <script src="./js/main.js"></script>
  </body>
</html>
