<?php

  include_once './includes/db.inc.php';
  $one = 1;

  $sql = "SELECT feature_id FROM tb_features WHERE project_id = :projectid";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);

  $sql = "SELECT avg(estimate) as total_avg FROM tb_results WHERE survey_id = :surveyid";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':surveyid', $_SESSION['surveyid'], PDO::PARAM_STR);
  $statement->execute();
  $totalAvg = $statement->fetch(PDO::FETCH_ASSOC);

  $sql = "SELECT count(participant_started) as total_participants FROM tb_results WHERE survey_id = :surveyid AND participant_started = :one";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':surveyid', $_SESSION['surveyid'], PDO::PARAM_STR);
  $statement->bindParam(':one', $one, PDO::PARAM_STR);
  $statement->execute();
  $participantsCount = $statement->fetch(PDO::FETCH_ASSOC);

  $sql = "SELECT count(participant_finished) as total_finished FROM tb_results WHERE survey_id = :surveyid AND participant_finished = :one";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':surveyid', $_SESSION['surveyid'], PDO::PARAM_STR);
  $statement->bindParam(':one', $one, PDO::PARAM_STR);
  $statement->execute();
  $participantsFinished = $statement->fetch(PDO::FETCH_ASSOC);

  function calculate_median($arr) {
  $count = count($arr); //total numbers in array
  $middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
  if($count % 2) { // odd number, middle is the median
      $median = $arr[$middleval];
  } else { // even number, calculate avg of 2 medians
      $low = $arr[$middleval];
      $high = $arr[$middleval+1];
      $median = (($low+$high)/2);
  }
  return $median;
}


  foreach ($result as $row) {

    $sql = "SELECT feature_name FROM tb_features WHERE feature_id = :featureid";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(':featureid', $row['feature_id'], PDO::PARAM_STR);
    $statement->execute();
    $featureName = $statement->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT avg(estimate) as feature_avg FROM tb_results WHERE feature_id = :featureid AND survey_id = :surveyid";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(':featureid', $row['feature_id'], PDO::PARAM_STR);
    $statement->bindParam(':surveyid', $_SESSION['surveyid'], PDO::PARAM_STR);
    $statement->execute();
    $featureAvg = $statement->fetch(PDO::FETCH_ASSOC);

    $one = 1;
    $sql = "SELECT count(*) as participants_started_this_feature FROM tb_results WHERE feature_id = :featureid AND survey_id = :surveyid";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(':featureid', $row['feature_id'], PDO::PARAM_STR);
    $statement->bindParam(':surveyid', $_SESSION['surveyid'], PDO::PARAM_STR);
    $statement->execute();
    $featurePartCount = $statement->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT estimate FROM tb_results WHERE feature_id = :featureid AND survey_id = :surveyid";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(':featureid', $row['feature_id'], PDO::PARAM_STR);
    $statement->bindParam(':surveyid', $_SESSION['surveyid'], PDO::PARAM_STR);
    $statement->execute();

    $medianResult = $statement->fetchAll(PDO::FETCH_ASSOC);
    $medianResult = is_array($medianResult) ? $medianResult : array($medianResult);

    $counter = 0;
    $featureMedianArr = [];
    $featureMedian = 0;

    foreach ($medianResult as $estimate) {

      $featureMedianArr[$counter] = $estimate['estimate'];
      $counter++;
    }

    $featureMedian = calculate_median($featureMedianArr);


     echo "<tr>
     <td>" .     $featureName['feature_name'] . "</td>
     <td>" .     $featureAvg['feature_avg'] . "</td>
     <td>" .     $featureMedian . "</td>
     <td>" .     $featurePartCount['participants_started_this_feature'] . "</td>

     </tr>";
  }

 ?>
