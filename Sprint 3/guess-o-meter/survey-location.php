<?php include_once './includes/checkIfLoggedIn.php';
      include_once './includes/header.inc.php'; ?>

       <h4 id="surveyUrl" class="center-align"><?php echo $_SESSION['qr-url']; ?></h4>
       <div  class="center-align">
             <div class="row">
                   <img src="./includes/getQRCode.php" alt="qr code"/>
             </div>

             <button survey-id="<?php echo $_SESSION['surveyid'] ?>"  id="start-survey" class="btn">Start Survey</button>
             <h3 id="survey-started-msg"></h3>
       </div>

<?php include_once './includes/footer.inc.php'; ?>
