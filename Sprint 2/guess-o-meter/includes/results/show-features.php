<?php

    $sql = "SELECT feature_name, feature_desc, feature_id FROM tb_features WHERE project_id = :projectid";

    $statement = $dbh->prepare($sql);

    $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);

    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
      echo
      "<li class='collection-item row valign-wrapper'><div class='col s10 valign'><h6>" . $row['feature_name'] . "</h6> <p>" . $row['feature_desc'] . "</p></div>

      <div class='col s2'><button feature-id='" . $row['feature_id'] . "' class='delete btn' >Delete</button></div></li>";
    }

 ?>
