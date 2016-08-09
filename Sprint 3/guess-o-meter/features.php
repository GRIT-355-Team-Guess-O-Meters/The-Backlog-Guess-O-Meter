<?php include_once './includes/checkIfLoggedIn.php';
      include_once './includes/db.inc.php';
      include_once './includes/getProjectNameFromDB.php';
      include_once './includes/header.inc.php'; ?>

<div class="row">
   <div class="card col s10 offset-s1">
      <h3 class="center-align"><?php echo $projectName; ?></h3>
      <ul id="feature-list" class="collection">
         <?php include_once './includes/features/show-features.php';  ?>
      </ul>
      <div class="0 valign-wrapper">
         <div class="col s7 offset-s1">
            <fieldset>
               <legend>Add Feature:</legend>
               <input placeholder="Add Feature Name:" id="featureName" type="text" />
               <textarea placeholder="Add Feature Description:" id="featureDesc"></textarea>
            </fieldset>
            <br>
         </div>
         <button id="submit-feature" class="btn col s2 offset-s1 valign">Add Feature</button>
      </div>
   </div>
</div>

<?php include_once './includes/footer.inc.php'; ?>
