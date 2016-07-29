<?php
/**
* This include files deletes projects form the admin page.
*/

    $sql = "DELETE FROM tb__projects
            WHERE project_name = :project";

    $statement = $dbh->prepare($sql);

    $projectName = $row['project_name'];

    $statement->bindParam(':project', $projectName, PDO::PARAM_STR);

    $statement->execute();
 ?>
