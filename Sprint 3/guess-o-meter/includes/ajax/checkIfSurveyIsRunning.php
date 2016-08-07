<?php
  session_start();
  include_once '../db.inc.php';

  $sql = "SELECT current_survey_id FROM tb_projects WHERE project_id = :project_id";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':project_id', $_POST['projectid'], PDO::PARAM_STR);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);

  echo json_encode($row['current_survey_id']);

  //Closing DB Connection
  $dbh = null;
  $statement = null;

 ?>
