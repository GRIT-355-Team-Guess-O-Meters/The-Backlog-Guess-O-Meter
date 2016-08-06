<?php
/**
* This include file displays all the data in the projects list.
*/

  foreach ($result as $row) {

    $color = '';
    if($row['status'] == 'Start'){
      $color = 'green darken-3';
    }

    if($row['status'] == 'Stop'){
      $color = 'red accent-3';
    }

    echo
    "<tr>
      <td> <a href = #>".$row['project_name']."</a></td>
      <td>".$row['date_created']."</td>
      <td><a class='openBtn waves-effect waves-light btn lime darken-4' project-id='" . $row['project_id'] . "'>Edit Features</a></td>
      <td><a class='deleteProject waves-effect waves-light btn lime darken-3' project-id='" . $row['project_id'] . "'>Delete</a></td>
    </tr>";
  }
?>
