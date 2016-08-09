<?php
    session_start();
    unset($_SESSION['logged-in']);
    session_destroy();
?>
