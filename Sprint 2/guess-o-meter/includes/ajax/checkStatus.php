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

      echo json_encode($result);

      $dbh = null;
      $statement = null;
 ?>
