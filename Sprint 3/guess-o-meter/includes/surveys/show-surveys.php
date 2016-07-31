<?php

    include_once './includes/db.inc.php';
    $sql = "SELECT * FROM tb_survey WHERE project_id = :projectid";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
      echo
      "<li class='collection-item row valign-wrapper'><div class='col s10 valign'><h6>" . $row['survey_name'] . "</h6> <p>" . $row['survey_desc'] . "</p></div>
      <div class='col s2'><button survey-id='" . $row['survey_id'] . "' class='delete btn' >Delete</button></div></li>";
    }

    //Closing DB Connection
    $dbh = null;
    $statement = null;
 ?>
