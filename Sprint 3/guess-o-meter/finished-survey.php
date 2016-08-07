<?php include_once './includes/checkIfLoggedIn.php';
      include_once './includes/header.inc.php';
      include_once './includes/surveys/survey-data.php'; ?>


      <h3 class="center-align">Project - <?php echo $projectName ?></h3>
      <h4 class="center-align">Survey - <?php echo $surveyName ?></h4>


<div class="row">
      <div class="col s4 offset-s2">
            <h5 class="card center-align">Participants: 20</h5>
      </div>

      <div class="col s4">
            <h5 class="card center-align">Participants Finished: 19</h5>
      </div>


       <table class="col s8 offset-s2 card striped bordered">
            <tr>
                <th>Feature Name</th>
                <th>Average</th>
                <th>Median</th>
                <th>Participants</th>
            </tr>
            <tr>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
            </tr>
            <tr>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
            </tr>
            <tr>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
            </tr>
            <tr>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
                <td>XXX-XXX-XXX</td>
            </tr>
       </table>
</div>

<h3 class="center-align">Total Average: XXX</h3>
<?php include_once './includes/footer.inc.php'; ?>
