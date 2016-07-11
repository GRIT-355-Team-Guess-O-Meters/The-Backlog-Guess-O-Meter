<?php
      include_once '../db.inc.php';
      session_start();

      $status = '';

      if($_POST['status'] == 'Stop' || $_POST['status'] == ''){
            $status = 'Start';
      }

      if($_POST['status'] == 'Start'){
            $status = 'Stop';
      }

      echo $_POST['status'];

      if (!empty($status)){

            $sql = 'UPDATE tb_projects
                    SET status = :status
                    WHERE project_id = :projectid';

            $statement = $dbh->prepare($sql);

            $statement->bindParam(':projectid', $_POST['projectid'], PDO::PARAM_STR);
            $statement->bindParam(':status', $status, PDO::PARAM_STR);

            $statement->execute();

      }

 ?>
