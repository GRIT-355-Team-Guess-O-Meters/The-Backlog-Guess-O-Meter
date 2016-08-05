<?php session_start();
      include_once './includes/header.inc.php';
      include_once './includes/surveys/survey-data.php'; ?>

    <h1 class="center-align">Project - <?php echo $projectName ?></h1>
    <h2 class="center-align">Survey - <?php echo $surveyName ?></h2>

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
