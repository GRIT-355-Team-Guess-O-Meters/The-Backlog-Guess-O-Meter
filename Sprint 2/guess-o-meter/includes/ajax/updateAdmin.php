<?php

      //this script is used to updata the status of the status on Mysql

      include_once '../db.inc.php';
      session_start();

      $_SESSION['qr-url'] = $_SERVER['HTTP_HOST'] . '/guess-o-meter/estimates#/' . $_POST['projectid'];

      $surveyId = uniqid();

      $status = '';

      if($_POST['status'] == 'Stop' || $_POST['status'] == ''){
            $status = 'Start';
      }

      if($_POST['status'] == 'Start'){
            $status = 'Stop';
      }

      if (!empty($status)){

            $sql = 'UPDATE tb_projects
                    SET status = :status
                    WHERE project_id = :projectid';

            $statement = $dbh->prepare($sql);

            $statement->bindParam(':projectid', $_POST['projectid'], PDO::PARAM_STR);
            $statement->bindParam(':status', $status, PDO::PARAM_STR);

            $statement->execute();

      }

      if(trim($_POST['status']) == 'Stop') {
            $surveyId = null;
            $_SESSION['surveyid'] = null;
      }


            $dbh = null;
            $statement = null;

 ?>
