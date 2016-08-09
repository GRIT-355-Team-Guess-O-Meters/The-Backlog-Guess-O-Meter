<?php
  //this script deletes projects and all features releated to the project from the database.
  include_once '../db.inc.php';
  session_start();

  $sql = "DELETE FROM tb_surveys
                WHERE survey_id = :surveyid";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':projectid', $_POST['surveyid'], PDO::PARAM_STR);
  $statement->execute();

  $sql = "DELETE FROM tb_features
          WHERE survey_id = :surveyid";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':surveyid', $_POST['surveyid'], PDO::PARAM_STR);
  $statement->execute();

  //Closing DB Connection
  $dbh = null;
  $statement = null;
 ?>
