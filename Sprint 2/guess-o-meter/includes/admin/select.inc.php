<?php
  /**
  * This code reads all projects
  * in the database and posts them on the admin page.
  */

    $sql = "SELECT project_id, project_name, date_created, status FROM tb_projects ORDER BY date_created ASC";

    $statement = $dbh->prepare($sql);

    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $dbh = null;
    $statement = null;

  ?>
