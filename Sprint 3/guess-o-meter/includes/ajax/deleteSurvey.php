<?php
  //this script deletes surveys and results associated with that survey.
  include_once '../db.inc.php';
  session_start();

  $sql = "DELETE FROM tb_survey
                WHERE survey_id = :surveyid";
  $statement = $dbh->prepare($sql);

  $statement->bindParam(':surveyid', $_POST['surveyid'], PDO::PARAM_STR);

  $statement->execute();

  //Closing DB Connection
  $dbh = null;
  $statement = null;
 ?>
