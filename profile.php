<?php
session_start();
  if(!$_SESSION['username']){
    header("location:login.php?login&next=profile");
  }
?>

<?php require ('includes/profile.nav.inc.php'); ?>
<div class="container profile_body" style="margin-top:80px;">
  <div class="row">
    <div class="col-md-3 dasboard-nav" style="background: rgb(207, 205, 205);border:1px solid #fefefe;">
    <img src="img/kisan.png" alt="profile-picture">
    <h3>Kisan Tamang</h3>
    </div>
  </div>
</div>



<?php require ('includes/footer.php'); ?>  
</body>
</html>