<?php
include_once './includes/db.inc.php';

// TEST DATA CURRENTLY USED
$projectName = "Test Project" /*isset($_SESSION['project-name']) ? $_SESSION['project-name'] : ''*/;
$surveyName = "Test Survey"/*isset($_SESSION['survey-name']) ? $_SESSION['survey-name'] : ''*/;
$surveyId = "test-id" /*isset($_SESSION['survey-id']) ? $_SESSION['survey-id'] : ''*/;

$sql = "SELECT start_date, participants, participants_finished, last_ping FROM tb_survey WHERE survey_id = :survey_id";
$statement = $dbh->prepare($sql);
$statement->bindParam(':survey_id', $surveyId, PDO::PARAM_STR);
$statement->execute();

$row = $statement->fetch(PDO::FETCH_ASSOC);

$dateAndTime = isset($row['start_date']) ? $row['start_date'] : "No data was found";
$participantsStarted = isset($row['participants']) ? $row['participants'] : "No data was found";
$participantsFinished = isset($row['participants_finished']) ? $row['participants_finished'] : "No data was found";
$participantNotFinished = $participantsStarted - $participantsFinished;
$lastPing = isset($row['last_ping']) ? $row['last_ping'] : "No data was found";

//Closing DB Connection
$dbh = null;
$statement = null;
?>
