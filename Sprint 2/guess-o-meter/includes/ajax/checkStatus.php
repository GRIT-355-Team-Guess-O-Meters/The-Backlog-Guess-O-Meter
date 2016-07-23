<?php
      include_once '../db.inc.php';
      session_start();
      $stop = 'Stop';

      $sql = "SELECT project_id, status, current_survey_id
              FROM tb_projects
              WHERE status = :stop";
      $statement = $dbh->prepare($sql);
      $statement->bindParam(':stop', $stop , PDO::PARAM_STR);
      $statement->execute();
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);

      //returns data to ajax
      echo json_encode($result);

      //Closing DB Connection
      $dbh = null;
      $statement = null;
 ?>
