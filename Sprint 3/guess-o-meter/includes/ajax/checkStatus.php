<?php
      include_once '../db.inc.php';
      session_start();
      $stop = 'Stop';

      $sql = "SELECT status
              FROM tb_survey
              WHERE survey_id = :surveyid";

      $statement = $dbh->prepare($sql);
      $statement->bindParam(':surveyid', $_SESSION['surveyid'] , PDO::PARAM_STR);
      $statement->execute();
      $result = $statement->fetch(PDO::FETCH_ASSOC);

       if($result['status'] == 0){
             $bool = true;
      } else {
            $bool = false;
      }

      //returns data to ajax
      echo json_encode($bool);

      //Closing DB Connection
      $dbh = null;
      $statement = null;
 ?>
