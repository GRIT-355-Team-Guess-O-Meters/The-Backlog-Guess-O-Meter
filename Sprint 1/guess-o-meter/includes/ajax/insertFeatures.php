<?php
        include_once '../db.inc.php';
        session_start();

foreach( $_POST['featuresArr'] as $featureName){

        $sql = "INSERT INTO tb_features(project_id, feature_name)
                VALUES (:projectid, :featurename)";

        $statement = $dbh->prepare($sql);

        $statement->bindParam(':projectid', $_SESSION['projectid'] , PDO::PARAM_STR);
        $statement->bindParam(':featurename', $featureName, PDO::PARAM_STR);

        $statement->execute();
}

 ?>
