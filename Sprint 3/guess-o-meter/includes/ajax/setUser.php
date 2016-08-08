<?php
     include_once '../db.inc.php';
     session_start();

     $user = isset($_POST['user']) ? $_POST['user'] : "";
     $pass = isset($_POST['pass']) ? $_POST['pass'] : "";

    $sql = "SELECT password FROM tb_users WHERE username = :username";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(':username', $user, PDO::PARAM_STR);
    // $statement->bindParam(':password', $pass, PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    $hash = isset($result['password']) ? $result['password'] : "";

    // if(password_verify($pass, $hash)) {
    //     $_SESSION['logged-in'] = true;
    // } else {
    //     $_SESSION['logged-in'] = false;
    // }

    if(crypt($pass, $hash) === $hash) {
        $_SESSION['logged-in'] = true;
    } else {
        $_SESSION['logged-in'] = false;
    }

    echo json_encode($_SESSION['logged-in']);
    // $statement->rowCount()
    //Closing DB Connection
    $dbh = null;
    $statement = null;
     ?>
