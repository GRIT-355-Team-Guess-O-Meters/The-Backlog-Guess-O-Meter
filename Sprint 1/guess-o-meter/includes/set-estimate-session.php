<?php
  session_start();

  $postdata = file_get_contents('php://input');
  $request = json_decode($postdata);

  $_SESSION['projectid'] = $request->projectid;

  include_once './db.inc.php';
  include_once './features/select.inc.php';

  $sql = "SELECT feature_name, feature_desc, feature_id FROM tb_features WHERE project_id = :projectid";

  $statement = $dbh->prepare($sql);

  $statement->bindParam(':projectid', $_SESSION['projectid'], PDO::PARAM_STR);

  $statement->execute();

  $result = $statement->fetchAll(PDO::FETCH_ASSOC);

  $data = [];

  $data[0] = $projectName;

  $i = 1;

  foreach ($result as $row) {

    $rows = [];

    $rows[0] = $row['feature_name'];

    $rows[1] = $row['feature_desc'];

    $rows[2] = $row['feature_id'];

    $data[$i] = $rows;

    $i++;

  }

  echo json_encode($data);

 ?>
