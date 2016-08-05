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

    case 'unfinished-survey':
      $title = 'Suvery Running...';
      break;

    case 'finished-survey':
      $title = 'Suvery Complete';
      break;

    default:
      $title = '';
      break;
  }
 ?>
