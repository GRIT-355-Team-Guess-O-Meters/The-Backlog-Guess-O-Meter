<?php

/**

* This include file displays all the data in the projects list.

*/



  foreach ($result as $row) {
//get the status
//if($status = "Open") {

/*echo '<div class="switch">
    <label>
      Off
      <input type="checkbox" checked>
      <span class="lever"></span>
      On
    </label>
  </div>
';
}else{
echo '<div class="switch">
    <label>
      Off
      <input type="checkbox">
      <span class="lever"></span>
      On
    </label>
  </div>';
}*/


    echo

    "<tr>

      <td>".$row['project_name']."</td>

      <td>".$row['date_created']."</td>

      <td><a class='openBtn waves-effect waves-light btn lime darken-4' project-id='" . $row['project_id'] . "'>Open</a></td>

      <td><button class='waves-effect waves-light btn lime darken-4'>" . $row['status'] . "</button></td>

    </tr>";

  }

?>
