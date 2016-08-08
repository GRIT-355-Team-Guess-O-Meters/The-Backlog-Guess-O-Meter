<?php

    include_once './includes/db.inc.php';
    $sql = "SELECT * FROM tb_survey WHERE project_id = :projectid";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

	if( $result == NULL ){
        echo "<h4 class='center'>There is not results to display for this survey.</h4>";
    }else{

    echo "<table><tr>
     <th><h4>Survey Name</h4></th>
  <th><h4>Start Date</h4></th>
     <th><h4>End Date</h4></th>
     <th><h4> </h4></th>
   </tr>";

    foreach ($result as $row) {
      echo
        "<tr>
          <td><button survey-id='" . $row['survey_id'] . "' class='survey-detail btn' >". $row['survey_name'] . "</button>
		  </td>
          <td><h6 class='center'>". $row['start_date'] ."</h6></td>
          <td><h6 class='center'>". $row['end_date'] ."</h6></td>

        </tr>";
      }

    echo "</table>";
    }

    //Closing DB Connection
    $dbh = null;
    $statement = null;
 ?>
