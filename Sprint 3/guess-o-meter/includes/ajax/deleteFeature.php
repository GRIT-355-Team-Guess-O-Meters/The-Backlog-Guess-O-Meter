<?php
        //This script deletess single features from the database
        include_once '../db.inc.php';
        session_start();

        $sql = "DELETE FROM tb_features
                WHERE feature_id = :featureid";
        $statement = $dbh->prepare($sql);
        $statement->bindParam(':featureid', $_SESSION['featureid'], PDO::PARAM_STR);
        $statement->execute();

        //Closing DB Connection
        $dbh = null;
        $statement = null;

 ?>
