<?php
  session_start();
  require_once('../qr-code/src/QrCode.php');
  use Endroid\QrCode\QrCode;
  $qr = new QrCode();
  $qr->setText($_SESSION['qr-url'])->setSize("600")->render();
?>
