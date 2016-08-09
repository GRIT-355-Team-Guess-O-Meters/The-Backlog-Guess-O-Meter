<?php
        include_once '../db.inc.php';
        session_start();
		 $surveyId = uniqid();
		 $_SESSION["surveyid"] = $surveyId;
        $sql = "INSERT INTO tb_survey(survey_id , project_id, survey_name, survey_desc, start_date)
                VALUES (:surveyid, :projectid, :surveyname, :surveydesc, now())";
				
        $statement = $dbh->prepare($sql);
		$statement->bindParam(':surveyid', $_SESSION['surveyid'] , PDO::PARAM_STR);
        $statement->bindParam(':projectid', $_SESSION['projectid'] , PDO::PARAM_STR);
        $statement->bindParam(':surveyname', $_POST['surveyName'], PDO::PARAM_STR);
        $statement->bindParam(':surveydesc', $_POST['surveyDesc'], PDO::PARAM_STR);
        $statement->execute();

        //Closing DB Connection
        $dbh = null;
        $statement = null;
 ?>
