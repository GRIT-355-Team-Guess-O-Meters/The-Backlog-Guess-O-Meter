<?php
        include_once '../db.inc.php';
        session_start();

        $sql = "INSERT INTO tb_features(project_id, feature_name, feature_desc)
                        VALUES (:projectid, :featurename, :featuredesc)";

        $statement = $dbh->prepare($sql);
        $statement->bindParam(':projectid', $_SESSION['projectid'] , PDO::PARAM_STR);
        $statement->bindParam(':featurename', $_POST['featureName'], PDO::PARAM_STR);
        $statement->bindParam(':featuredesc', $_POST['featureDesc'], PDO::PARAM_STR);
        $statement->execute();

        //Closing DB Connection
        $dbh = null;
        $statement = null;

 ?>
