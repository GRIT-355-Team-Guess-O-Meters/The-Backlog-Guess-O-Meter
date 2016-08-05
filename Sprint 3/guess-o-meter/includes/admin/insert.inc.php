<?php
  /**
  * This code inserts projects entered
  * from the admin page into the database.
  */

  //if a user goes back to the projects page
  //the session for the project id is ueset
  if(isset($_SESSION['projectid'])){
    unset($_SESSION['projectid']);
  }

  if(isset($_SESSION['submit'])){
    if(isset($_SESSION['project']) && !empty($_SESSION['project'])){

      $sql = "INSERT INTO tb_projects(project_name)
              VALUES (:project)";

      $statement = $dbh->prepare($sql);
      $projectName = $_SESSION['project'];

      $statement->bindParam(':project', $projectName, PDO::PARAM_STR);
      $statement->execute();

      $sql = "SELECT project_id FROM tb_projects WHERE project_name = :pname";
      $statement = $dbh->prepare($sql);
      $statement->bindParam(':pname', $projectName, PDO::PARAM_STR);
      $statement->execute();
      $row = $statement->fetch(PDO::FETCH_ASSOC);
      $projectId = $row['project_id'];
      $_SESSION['projectid'] = $projectId;

      //Closing DB Connection
      $dbh = null;
      $statement = null;

      header('Location: features.php#/' . $projectId . '');
      exit;
    }
  }
 ?>
