<?php
/**
* This include file displays all the data in the projects list.
*/

  foreach ($result as $row) {
    echo
    "<tr>
      <td>".$row['project_name']."</td>
      <td>".$row['date_created']."</td>
      <td><a class='openBtn waves-effect waves-light btn lime darken-4' project-id='" . $row['project_id'] . "'>Open</a></td>
    </tr>";
  }

?>
