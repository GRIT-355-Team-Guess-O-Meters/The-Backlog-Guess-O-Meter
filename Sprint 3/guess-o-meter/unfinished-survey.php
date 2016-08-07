<?php include_once './includes/checkIfLoggedIn.php';
      include_once './includes/header.inc.php';
      include_once './includes/surveys/survey-data.php'; ?>

      <div class"space-out">
            <h3 class="center-align">Project - <?php echo $projectName ?></h3>
            <h4 class="center-align">Survey - <?php echo $surveyName ?></h4>
      </div>

    <div class="row">
        <table class="col s6 offset-s3 card striped bordered">
            <tr>
                <td>Survey Started: </td>
                <td><?php echo $dateAndTime; ?></td>
            </tr>
            <tr>
                <td># participants started:</td>
                <td><?php echo $participantsStarted;  ?></td>
            </tr>
            <tr>
                <td># Finished:</td>
                <td><?php echo $participantsFinished; ?></td>
            </tr>
            <tr>
                <td># Not Finished:</td>
                <td><?php echo $participantNotFinished; ?></td>
            </tr>
            <tr>
                <td>Last Ping:</td>
                <td><?php echo $lastPing; ?></td>
            </tr>
        </table>
        <button id="stop-survey" class="red accent-3 btn col s6 offset-s3">STOP</button>
    </div>

<?php include_once './includes/footer.inc.php'; ?>
