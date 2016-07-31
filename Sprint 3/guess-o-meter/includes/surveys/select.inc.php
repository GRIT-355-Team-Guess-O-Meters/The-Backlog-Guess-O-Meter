<?php
  /**
  * This include file is for
  * reading the database and dispaying
  * all the data on the features page.
  */

  $sql = "SELECT project_name FROM tb_projects WHERE project_id = :projID";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':projID', $_SESSION['projectid'], PDO::PARAM_STR);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  $projectName = $row['project_name'];

 ?>
