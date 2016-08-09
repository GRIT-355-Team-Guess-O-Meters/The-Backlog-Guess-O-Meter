<?php
    session_start();
    $_SESSION['qr-url'] = $_SERVER['HTTP_HOST'] . '/guess-o-meter/estimates#/' . $_POST['projectid'] . '/' . $_POST['surveyid'];

    echo json_encode($_SESSION['qr-url']);
 ?>
