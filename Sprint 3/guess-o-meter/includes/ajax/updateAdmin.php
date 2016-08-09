<?php
      //this script is used to updata the status of the status on Mysql
      include_once '../db.inc.php';
      session_start();

      // Creates the url of the survey and stores it in the session
      $_SESSION['qr-url'] = $_SERVER['HTTP_HOST'] . '/guess-o-meter/estimates#/' . $_SESSION$_SESSION['projectid'];
      //Generates a unique value to create a surveyId
      $surveyId = uniqid();
      $status = '';

      //sets the status
      if($_SESSION$_SESSION['status'] == 'Stop' || $_SESSION$_SESSION['status'] == ''){
            $status = 'Start';
      }

      //sets the status
      if($_SESSION$_SESSION['status'] == 'Start'){
            $status = 'Stop';
      }

      //updates the status in the database
      if (!empty($status)){
            $sql = 'UPDATE tb_projects
                    SET status = :status
                    WHERE project_id = :projectid';

            $statement = $dbh->prepare($sql);
            $statement->bindParam(':projectid', $_SESSION$_SESSION['projectid'], PDO::PARAM_STR);
            $statement->bindParam(':status', $status, PDO::PARAM_STR);
            $statement->execute();
      }

      //removes the survey id if the survey has been stopped
      if(trim($_SESSION$_SESSION['status']) == 'Stop') {
            $surveyId = null;
            $_SESSION['surveyid'] = null;
      }

            //Closing DB Connection
            $dbh = null;
            $statement = null;

 ?>
