<?php include_once './includes/checkIfLoggedIn.php';
      include_once './includes/db.inc.php';
      include_once './includes/getProjectNameFromDB.php';
      include_once './includes/header.inc.php'; ?>

      <div class="row">
         <div class="card col s10 offset-s1">
            <h3 class="center-align">Project: <?php echo $projectName; ?></h3>
            <table class="centered bordered highlight">
               <thead>
                  <tr>
                     <th>Survey Name</th>
                     <th>Start Date</th>
                     <th>End Date</th>
                  </tr>
               </thead>
               <tbody>
                  <?php include_once './includes/surveys/show-surveys.php';  ?>
               </tbody>
            </table>
            <div class="add-div valign-wrapper">
               <div class="col s7 offset-s1">
                  <fieldset>
                     <legend>Add Survey:</legend>
                     <input placeholder="Add Survey Name:" id="survey-name" type="text" />
                  </fieldset>
                  <br>
               </div>
               <button id="add-survey" class="btn col s2 offset-s1 valign">Add Survey</button>
            </div>
         </div>
      </div>

<?php include_once './includes/footer.inc.php'; ?>
