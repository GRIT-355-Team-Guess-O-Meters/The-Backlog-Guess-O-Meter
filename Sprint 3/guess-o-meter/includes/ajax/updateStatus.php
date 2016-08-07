<?php
      //this script is used to updata the status of the status on Mysql
      include_once '../db.inc.php';
      session_start();

      // Creates the url of the survey and stores it in the session
      $_SESSION['qr-url'] = $_SERVER['HTTP_HOST'] . '/guess-o-meter/estimates#/' . $_POST['projectid'];
      //Generates a unique value to create a surveyId
      $surveyId = uniqid();
      $status = '';

      //sets the status
      if($_POST['status'] == 'Stop' || $_POST['status'] == ''){
            $status = 'Start';
      }

      //sets the status
      if($_POST['status'] == 'Start'){
            $status = 'Stop';
      }

      //updates the status in the database
      if (!empty($status)){
            $sql = 'UPDATE tb_projects
                    SET status = :status
                    WHERE project_id = :projectid';

            $statement = $dbh->prepare($sql);
            $statement->bindParam(':projectid', $_POST['projectid'], PDO::PARAM_STR);
            $statement->bindParam(':status', $status, PDO::PARAM_STR);
            $statement->execute();
      }

      // if status is stop then then the survey is stopped
      // otherwise the survey is started
      if($_POST['status'] == 'Stop'){
            $surveyId = null;
      }

      $sql = 'UPDATE tb_projects
              SET current_survey_id = :current_survey_id
              WHERE project_id = :project_id';

      $statement = $dbh->prepare($sql);
      $statement->bindParam(':project_id', $_POST['projectid'], PDO::PARAM_STR);
      $statement->bindParam(':current_survey_id', $surveyId, PDO::PARAM_STR);
      $statement->execute();

            //Closing DB Connection
            $dbh = null;
            $statement = null;
 ?>
