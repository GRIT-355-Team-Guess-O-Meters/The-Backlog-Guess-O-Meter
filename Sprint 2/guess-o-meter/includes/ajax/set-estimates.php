<?php

    session_start();

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    include_once '../db.inc.php';

    $sql = "SELECT current_survey_id
            FROM tb_projects
            WHERE project_id = :projectid";

    $statement = $dbh->prepare($sql);

    $statement->bindParam(':projectid', $request->projectid, PDO::PARAM_STR);

    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);


    $sql = "INSERT INTO tb_results(project_id, survey_id, participant_id, feature_id, estimate)
                        VALUES (:projectid, :surveyid, :participantid, :featureid, :estimate)";


                            $statement = $dbh->prepare($sql);

                            $statement->bindParam(':projectid', $request->projectid, PDO::PARAM_STR);
                            $statement->bindParam(':surveyid', $result['current_survey_id'], PDO::PARAM_STR);
                            $statement->bindParam(':participantid', $request->participantid, PDO::PARAM_STR);
                            $statement->bindParam(':featureid', $request->featureid, PDO::PARAM_STR);
                            $statement->bindParam(':estimate', $request->estimatevalue, PDO::PARAM_STR);

                            $statement->execute();

                            $dbh = null;
                            $statement = null;


 ?>
