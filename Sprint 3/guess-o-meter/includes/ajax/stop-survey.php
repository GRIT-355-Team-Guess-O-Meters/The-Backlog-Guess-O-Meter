<?php
//This ajax script stops the current survey and also updates the survey table with a date and time survey ended
include_once '../db.inc.php';
session_start();

//TEST DATA REMOVE AND REPLACE WITH COMMENTED CODE WHEN OTHER USERSTORIES ARE DONE//
$surveyId = "test-id"; /*isset($_SESSION['survey_id']) ?  $_SESSION['survey_id'] : "";*/
$status = 0;
$now = date("Y-m-d H:i:s");

$sql = 'UPDATE tb_survey
        SET status = :status, end_date = :end_date
        WHERE survey_id = :survey_id';

$statement = $dbh->prepare($sql);
$statement->bindParam(':survey_id', $surveyId, PDO::PARAM_STR);
$statement->bindParam(':status', $status, PDO::PARAM_STR);
$statement->bindParam(':end_date', $now, PDO::PARAM_STR);
$statement->execute();
?>
