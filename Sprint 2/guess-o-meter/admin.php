<?php
      // Start the session
      session_start();
      /**
      * Include files
      */

      include_once './includes/db.inc.php';
      include_once './includes/admin/insert.inc.php';
      include_once './includes/admin/select.inc.php';
      //include_once './includes/admin/delete.inc.php';
?>
<?php include_once './includes/header.inc.php'; ?>

      <h1>Projects</h1>
      <div class="row">
        <div class="col s12">
              <form action="" method="post">
                <div class="input-field">
                  <label for="create_project">Create New Projet:</label>
                  <input class="col s9" id="create_project" type="text" name="project" />
                  <input class="col s2 offset-s1 btn lime darken-3" type="submit" value="Add Project" name="submit" />
                </div>
              </form>
        </div>
      </div>

      <div class="row">
        <div class="card col s12">
          <h3 class="center-align">Existing Projects</h3>
          <hr />
            <table id="project-list" class="striped bordered centered">
              <!--Dynamicly displays table from database-->
              <?php include_once "./includes/admin/show-table.inc.php"; ?>
            </table>
            <br />
        </div>
      </div>

      <?php include_once './includes/footer.inc.php'; ?>
