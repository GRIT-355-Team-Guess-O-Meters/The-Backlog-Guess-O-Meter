<?php
    include_once './includes/db.inc.php';
    $sql = "SELECT * FROM tb_survey WHERE project_id = :projectid";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

	if( $result == NULL ){
        echo "<h4 class='center'>There is no results to display for this survey.</h4>";
    }else{

    foreach ($result as $row) {
      echo
        "<tr>
          <td>" . $row['survey_name'] . "</td>
          <td>" . $row['start_date'] . "</td>
          <td>" . $row['end_date'] . "</td>
          <td><button project-id='" . $_SESSION['projectid'] . "' survey-id='" . $row['survey_id'] . "' class='qr-code btn'>QR Code</button></td>
          <td><button survey-id='" . $row['survey_id'] . "' class='show-results btn'>Results</button></td>
          <td><button survey-id='" . $row['survey_id'] . "' class='delete-survey btn'>Delete</button></td>
        </tr>";
      }
    }

    //Closing DB Connection
    $dbh = null;
    $statement = null;
 ?>
