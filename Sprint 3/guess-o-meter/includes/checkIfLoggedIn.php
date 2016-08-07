<?php
  session_start();
  if($_SESSION['logged-in'] != true) {
    header('Location: index.php');
  }
 ?>
