<?php
/**
* This include file displays all the data in the projects list.
*/

  foreach ($result as $row) {
    echo

    "<tr>
      <td> <a class='project-link' href='#' project-id='" . $row['project_id'] . "'>".$row['project_name']."</a></td>
      <td>".$row['date_created']."</td>
      <td><a class='edit-feature waves-effect waves-light btn lime darken-4' project-id='" . $row['project_id'] . "'>Edit Features</a></td>
      <td><a class='delete-project waves-effect waves-light btn lime darken-3' project-id='" . $row['project_id'] . "'>Delete</a></td>
    </tr>";

  }
?>
