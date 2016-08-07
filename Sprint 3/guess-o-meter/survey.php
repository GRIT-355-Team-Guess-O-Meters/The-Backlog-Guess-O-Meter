<?php include_once './includes/checkIfLoggedIn.php';
      include_once './includes/header.inc.php'; ?>

       <h4 id="surveyUrl" class="center-align"><?php echo $_SESSION['qr-url']; ?></h4>
       <div  class="center-align">
             <img src="./includes/getQRCode.php" alt="qr code"/>
       </div>
<?php include_once './includes/footer.inc.php'; ?>
