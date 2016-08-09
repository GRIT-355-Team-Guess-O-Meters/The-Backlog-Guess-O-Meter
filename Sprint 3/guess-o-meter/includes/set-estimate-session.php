<?php
  session_start();
  $postdata = file_get_contents('php://input');
  $request = json_decode($postdata);

  include_once './db.inc.php';

  $data = [];

  //database query that gets the feature table
  $sql = "SELECT project_name FROM tb_projects WHERE project_id = :projectid";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':projectid', $request->projectid, PDO::PARAM_STR);
  $statement->execute();

  $result = $statement->fetch(PDO::FETCH_ASSOC);
  $data[0] = $result['project_name'];

  //database query that gets the feature table
  $sql = "SELECT feature_name, feature_desc, feature_id FROM tb_features WHERE project_id = :projectid";
  $statement = $dbh->prepare($sql);
  $statement->bindParam(':projectid', $request->projectid, PDO::PARAM_STR);
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);

  $i = 1;
  //convert table row into multidiminsional array and stored into a data.
  foreach ($result as $row) {
    $rows = [];
    $rows[0] = $row['feature_name'];
    $rows[1] = $row['feature_desc'];
    $rows[2] = $row['feature_id'];
    $data[$i] = $rows;
    $i++;
  }



  echo json_encode($data);
  //Closing the DB Connection
  $dbh = null;
  $statement = null;
 ?>
