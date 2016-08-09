<?php
  /**
  * This include file is for
  * reading the database and dispaying
  * all the data on the features page.
  */

  $sql = "SELECT project_name FROM tb_projects WHERE project_id = :projectid";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);
  $statement->execute();
  $rowItem = $statement->fetch(PDO::FETCH_ASSOC);
  $projectName = $rowItem['project_name'];


 ?>
