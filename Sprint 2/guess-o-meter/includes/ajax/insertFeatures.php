<?php
        include_once '../db.inc.php';
        session_start();

        $mergedArray = [];

        for($i = 0; $i < count($_POST['featuresNameArr']); $i++){
                $mergedArray[$_POST['featuresNameArr'][$i]] = $_POST['featuresDescArr'][$i];
        }

        foreach ($mergedArray as $key => $value) {

                $sql = "INSERT INTO tb_features(project_id, feature_name, feature_desc)
                        VALUES (:projectid, :featurename, :featuredesc)";

                         $statement = $dbh->prepare($sql);

                         $statement->bindParam(':projectid', $_SESSION['projectid'] , PDO::PARAM_STR);
                         $statement->bindParam(':featurename', $key, PDO::PARAM_STR);
                         $statement->bindParam(':featuredesc', $value, PDO::PARAM_STR);

                         $statement->execute();
        }

        $dbh = null;
        $statement = null;

 ?>
