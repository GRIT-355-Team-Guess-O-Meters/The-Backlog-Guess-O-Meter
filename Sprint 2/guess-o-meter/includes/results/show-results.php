<?php



    $sql = "SELECT survey_id, participants_cnt, avg_est, median_est, feature_name, tb_features.project_id FROM tb_survey_features join tb_features on tb_survey_features.feature_id = tb_features.feature_id WHERE tb_features.project_id  = :projectid";



    $statement = $dbh->prepare($sql);



    $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);



    $statement->execute();



    $result = $statement->fetchAll(PDO::FETCH_ASSOC);



    foreach ($result as $row) {

      echo

      "<li class='collection-item row valign-wrapper'><div class='col s10 valign'><h4>" . $row['feature_name'] . "</h4><h6>Average Estimation: " .$row['avg_est'] ."</h6><h6>Total Participants: ". $row['participants_cnt'] . "</h6></div>
      ";

    }



 ?>
