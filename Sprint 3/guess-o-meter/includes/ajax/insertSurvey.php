<?php
      include_once '../db.inc.php';
      session_start();

      $projectId = isset($_SESSION['projectid']) ? $_SESSION['projectid'] : "";
      $surveyName = isset($_POST['surveyname']) ? $_POST['surveyname'] : "";
      $surveyId = uniqid();

      $sql = "INSERT INTO tb_survey(survey_id, survey_name, project_id)
              VALUES (:surveyid, :surveyname, :projectid)";

      $statement = $dbh->prepare($sql);

      $statement->bindParam(':surveyid', $surveyId, PDO::PARAM_STR);
      $statement->bindParam(':surveyname', $surveyName, PDO::PARAM_STR);
      $statement->bindParam(':projectid', $projectId, PDO::PARAM_STR);
      $statement->execute();

      echo json_encode($dbh->errorInfo());

      //Closing DB Connection
      $dbh = null;
      $statement = null;
 ?>
