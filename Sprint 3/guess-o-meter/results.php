
<?php include_once './includes/checkIfLoggedIn.php';
      include_once './includes/db.inc.php';
      include_once './includes/features/select.inc.php';
      include_once './includes/header.inc.php'; ?>

    <div class="row">
       <h4 class="col s5">Survery Results</h4>
    </div>

    <div class="row">
       <div class="card col s10 offset-s1">
          <h2 class="center-align">Project: <?php echo $projectName; ?></h2>
          <ul id="feature-list" class="collection">
             <?php include_once './includes/results/show-results.php';
                   include_once './includes/results/show-total.php';?>
          </ul>
          <div>
          </div>
       </div>
    </div>

<?php include_once './includes/footer.inc.php'; ?>
