<?php

  $serverName = $_SERVER['PHP_SELF'];

  $titleIndicator = substr($serverName, 15, -4);

  switch ($titleIndicator) {
    case 'index':
      $title = "Fast Forcaster";
      break;

    case 'admin':
      $title = "Projects";
      break;

    case 'features':
      $title = "Edit Features";
      break;

    case 'survey':
      $title = "Survey";
      break;

    case 'surveys':
      $title = "Surveys";
      break;

    case 'results':
      $title = "Results";
      break;

    default:
      $title = "";
      break;
  }
 ?>
