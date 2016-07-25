<?php
 include_once './includes/db.inc.php';
   
    $sql = "SELECT * FROM tb_survey WHERE project_id  = :projectid";
     $statement = $dbh->prepare($sql);
    $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    if( $result == NULL ){
        echo "<h4>Total</h4>";
    }else{
    
    echo "<table><tr>

 <th><h5>Survey ID</h5></th>

  <th><h5>Average</h5></th>

 <th><h5>Total Participants</h5></th>

   </tr>";
    foreach ($result as $row) {
      echo
      "<tr>
    <td><h5 >". $row['survey_id'] . "</h5></td>
    <td><h5 >". $row['avg_est'] ."</h5></td>
    <td><h5 >". $row['participants'] ."</h5></td>
  </tr>
";
 
    }
    echo "</table>";
    }
    
 ?>
