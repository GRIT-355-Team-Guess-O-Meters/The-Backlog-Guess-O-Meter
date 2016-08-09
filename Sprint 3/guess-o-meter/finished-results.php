<?php include_once './includes/db.inc.php';
      include_once './includes/checkIfLoggedIn.php';
      include_once './includes/getProjectNameFromDB.php';
      include_once './includes/surveys/survey-data.php';
      include_once './includes/header.inc.php';?>


      <h3 class="center-align">Project - <?php echo $projectName ?></h3>
      <h4 class="center-align">Survey - <?php echo $surveyName ?></h4>


<div class="row">
      <div class="col s4 offset-s2">
            <h5 class="card center-align">Participants: 20</h5>
      </div>

      <div class="col s4">
            <h5 class="card center-align">Participants Finished: 19</h5>
      </div>


       <table class="col s8 offset-s2 card striped bordered">
            <tr>
                <th>Feature Name</th>
                <th>Average</th>
                <th>Median</th>
                <th>Participants</th>
            </tr>
            <?php include_once '.includes/surveys/show-results.php'; ?>
       </table>
</div>

<h3 class="center-align">Total Average: XXX</h3>
<?php include_once './includes/footer.inc.php'; ?>
