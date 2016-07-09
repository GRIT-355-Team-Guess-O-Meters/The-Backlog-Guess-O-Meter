<?php

    $sql = "SELECT feature_name FROM tb_features WHERE project_id = :projectid";

    $statement = $dbh->prepare($sql);

    $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);

    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
      echo
      "<li class='collection-item'>" . $row['feature_name'] . "</li>";
    }

 ?>
