<?php
      include_once './includes/checkIfLoggedIn.php';
      include_once './includes/db.inc.php';
      include_once './includes/getProjectNameFromDB.php';
      include_once './includes/surveys/survey-data.php';
      include_once './includes/header.inc.php';
      ?>


      <h3 class="center-align">Project - <?php echo $projectName; ?></h3>
      <h4 class="center-align">Survey - <?php echo $surveyName; ?></h4>


<div class="row">
       <table class="col s8 offset-s2 card striped bordered">
            <tr>
                <th>Feature Name</th>
                <th>Average</th>
                <th>Median</th>
                <th>Participants</th>
            </tr>
            <?php include_once './includes/surveys/show-results.php'; ?>
       </table>
</div>

<h3 class="center-align">Total Average: <?php echo $totalAvg['total_avg'] . " <br /><br /> " .   $participantsFinished['total_finished']   . " out of " . $participantsCount['total_participants'] . "<br /><br /> Participants Completed The Survey" ; ?></h3>
<?php include_once './includes/footer.inc.php'; ?>
