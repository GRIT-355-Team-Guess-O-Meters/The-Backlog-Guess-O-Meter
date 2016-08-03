<?php
  session_start();

  $currentSession = isset($_SESSION['logged-in']) ? true : false;
  echo json_encode($currentSession);
 ?>
