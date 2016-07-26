<?php
     include_once '../db.inc.php';
     session_start();
     
     $user = $_POST['user'];
     $pass = $_POST['pass'];
    
    
    $sql = "SELECT username, password FROM tb_users WHERE username = :username AND password = :password";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(':username', $user, PDO::PARAM_STR);
    $statement->bindParam(':password', $pass, PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($result)) {
        $_SESSION['logged-in'] = true;
        
        
    }    
    echo json_encode($result);

    //Closing DB Connection
    $dbh = null;
    $statement = null;
     
     ?>