<?php

  $sql = "SELECT survey_id, project_id, status, avg_est  , median_est, participants FROM tb_survey where project_id = :projID";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':projID', $_SESSION['projectid'], PDO::PARAM_STR);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  $participants = $row['participants'];
 ?>
