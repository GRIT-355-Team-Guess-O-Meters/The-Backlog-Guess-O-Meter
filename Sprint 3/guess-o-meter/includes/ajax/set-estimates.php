<?php
    session_start();
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    include_once '../db.inc.php';


     if($request->index == 0){

         $statusStart = 1;
         $statusFinish = 0;

                $sql = "INSERT INTO tb_results(project_id, survey_id, participant_id, feature_id, participant_started, participant_finished, estimate)
                        VALUES (:projectid, :surveyid, :participantid, :featureid, :participantstarted, :participantfinished, :estimate)";

                $statement = $dbh->prepare($sql);
                $statement->bindParam(':projectid', $request->projectid, PDO::PARAM_STR);
                $statement->bindParam(':surveyid', $request->surveyid, PDO::PARAM_STR);
                $statement->bindParam(':participantid', $request->participantid, PDO::PARAM_STR);
                $statement->bindParam(':featureid', $request->featureid, PDO::PARAM_STR);
                $statement->bindParam(':participantstarted', $statusStart , PDO::PARAM_STR);
                $statement->bindParam(':participantfinished', $statusFinish , PDO::PARAM_STR);
                $statement->bindParam(':estimate', $request->estimatevalue, PDO::PARAM_STR);
                $statement->execute();

     }else if($request->index == $request->lastindex - 1){
         $statusStart = 0;
         $statusFinish = 1;

                 $sql = "INSERT INTO tb_results(project_id, survey_id, participant_id, feature_id, participant_started, participant_finished, estimate)
                         VALUES (:projectid, :surveyid, :participantid, :featureid, :participantstarted, :participantfinished, :estimate)";

                 $statement = $dbh->prepare($sql);
                 $statement->bindParam(':projectid', $request->projectid, PDO::PARAM_STR);
                 $statement->bindParam(':surveyid', $request->surveyid, PDO::PARAM_STR);
                 $statement->bindParam(':participantid', $request->participantid, PDO::PARAM_STR);
                 $statement->bindParam(':featureid', $request->featureid, PDO::PARAM_STR);
                 $statement->bindParam(':participantstarted', $statusStart , PDO::PARAM_STR);
                 $statement->bindParam(':participantfinished', $statusFinish , PDO::PARAM_STR);
                 $statement->bindParam(':estimate', $request->estimatevalue, PDO::PARAM_STR);
                 $statement->execute();

    } else {
        $statusStart = 0;
        $statusFinish = 0;

                $sql = "INSERT INTO tb_results(project_id, survey_id, participant_id, feature_id, participant_started, participant_finished, estimate)
                        VALUES (:projectid, :surveyid, :participantid, :featureid, :participantstarted, :participantfinished, :estimate)";

                $statement = $dbh->prepare($sql);
                $statement->bindParam(':projectid', $request->projectid, PDO::PARAM_STR);
                $statement->bindParam(':surveyid', $request->surveyid, PDO::PARAM_STR);
                $statement->bindParam(':participantid', $request->participantid, PDO::PARAM_STR);
                $statement->bindParam(':featureid', $request->featureid, PDO::PARAM_STR);
                $statement->bindParam(':participantstarted', $statusStart , PDO::PARAM_STR);
                $statement->bindParam(':participantfinished', $statusFinish , PDO::PARAM_STR);
                $statement->bindParam(':estimate', $request->estimatevalue, PDO::PARAM_STR);
                $statement->execute();

    }

    date_default_timezone_set('America/Los_Angeles');
    $now = date("H:i:s");

    $sql = "UPDATE tb_survey
            SET last_ping = :lastping
            WHERE survey_id = :surveyid";

    $statement = $dbh->prepare($sql);
    $statement->bindParam(':lastping', $now, PDO::PARAM_STR);
    $statement->bindParam(':surveyid', $request->surveyid, PDO::PARAM_STR);

    $statement->execute();



    //Closing DB Connection
    $dbh = null;
    $statement = null;
 ?>
