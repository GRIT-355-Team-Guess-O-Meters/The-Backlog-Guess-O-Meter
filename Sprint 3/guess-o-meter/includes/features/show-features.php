<?php

    include_once './includes/db.inc.php';
    $sql = "SELECT feature_name, feature_desc, feature_id FROM tb_features WHERE project_id = :projectid";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
      echo
      "<li class='collection-item row valign-wrapper'><div class='col s10 valign'><b>" . $row['feature_name'] . "</b> <p>" . $row['feature_desc'] . "</p></div>
      <div class='col s2'><button feature-id='" . $row['feature_id'] . "' class='delete-feature btn' >Delete</button></div></li>";
    }

    //Closing DB Connection
    $dbh = null;
    $statement = null;
 ?>
