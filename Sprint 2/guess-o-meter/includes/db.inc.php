<?php
/**
* Database Connection
*
* This include file connects a page
* to the database using PDO.
*/

  try {
    //Instantiate a database object
    $host = "localhost";
    $dBName = "guestome_data";
    $user = "guestome_user";
    $pass = "Ron355";

    $dbh = new PDO("mysql:host=" . $host ."; dbname=" . $dBName . "", "" . $user . "", "" . $pass . "");

  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }
?>
