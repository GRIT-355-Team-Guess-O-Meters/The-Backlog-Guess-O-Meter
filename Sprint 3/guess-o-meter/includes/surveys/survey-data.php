<?php

$surveyId = isset($_SESSION['surveyid']) ? $_SESSION['surveyid'] : '';
$one = 1;

$sql = "SELECT count(*) as total_participants_started FROM tb_results WHERE survey_id = :surveyid AND participant_started = :one";
$statement = $dbh->prepare($sql);
$statement->bindParam(':surveyid', $surveyId, PDO::PARAM_STR);
$statement->bindParam(':one', $one, PDO::PARAM_STR);
$statement->execute();

$pStarted = $statement->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT count(*) as total_participants_finished FROM tb_results WHERE survey_id = :surveyid AND participant_finished = :one";
$statement = $dbh->prepare($sql);
$statement->bindParam(':surveyid', $surveyId, PDO::PARAM_STR);
$statement->bindParam(':one', $one, PDO::PARAM_STR);
$statement->execute();

$pFinished = $statement->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT start_date, participants, participants_finished, last_ping, survey_name FROM tb_survey WHERE survey_id = :survey_id";
$statement = $dbh->prepare($sql);
$statement->bindParam(':survey_id', $surveyId, PDO::PARAM_STR);
$statement->execute();

$row = $statement->fetch(PDO::FETCH_ASSOC);

$surveyName = isset($row['survey_name']) ? $row['survey_name'] : '';
$dateAndTime = isset($row['start_date']) ? $row['start_date'] : "No data was found";
$participantsStarted = isset($pStarted['total_participants_started']) ? $pStarted['total_participants_started'] : "No data was found";
$participantsFinished = isset($pFinished['total_participants_finished']) ? $pFinished['total_participants_finished'] : "No data was found";
$participantNotFinished = $participantsStarted - $participantsFinished;
date_default_timezone_set('America/Los_Angeles');
$now = date("H:i:s");
$lastPing = isset($row['last_ping']) ? strtotime($now) - strtotime($row['last_ping']) : 0;

//Closing DB Connection
$dbh = null;
$statement = null;
?>
