<?php
 include_once './includes/db.inc.php';
   
    $sql = "SELECT * FROM tb_survey WHERE project_id  = 13";
     $statement = $dbh->prepare($sql);
    $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    if( $result == NULL ){
        echo "<h4>Total</h4>";
    }else{
    
    echo "<table><tr>
    <h5>Total</h5>
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
