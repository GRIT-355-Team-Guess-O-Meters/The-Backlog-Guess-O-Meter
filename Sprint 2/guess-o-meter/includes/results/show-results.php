<?php

    include_once './includes/db.inc.php';

   
    $sql = "SELECT survey_id, participants_cnt, avg_est, median_est, feature_name,

    tb_features.project_id FROM tb_survey_features join tb_features on tb_survey_features.feature_id

    = tb_features.feature_id WHERE tb_features.project_id  = :projectid";

     $statement = $dbh->prepare($sql);

    $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);

    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if( $result == NULL ){

        echo "<h4 class='center'>There is not results to display for this survey.</h4>";

    }else{

    

    echo "<table><tr>

 <th><h4>Feature Name</h4></th>

  <th><h4>Average Estimation</h4></th>

 <th><h4># of Participants</h4></th>

   </tr>";

    foreach ($result as $row) {

      echo

      "<tr>

    <td><h5>". $row['feature_name'] . "</h5></td>

    <td><h5 class='center'>". $row['avg_est'] ."</h5></td>

    <td><h5 class='center'>". $row['participants_cnt'] ."</h5></td>

  </tr>

";

 

    }

    echo "</table>";

    }

    

    

 ?>

