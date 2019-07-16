<?php
session_start();
  if(!$_SESSION['username']){
    header("location:login.php?login&next=profile");
  }
?>

<?php require ('includes/profile.nav.inc.php'); ?>


<div class="container profile_body">
  <div class="row">
    <div class="col-md-3 dasboard-nav">
    <img src="img/kisan.png" alt="profile-picture" class="profile_pic" >
    
    <button class="btn btn-secondary">Edit Profile</button>
    <p>
      <p class="social text-center">
        <i class="fa fa-facebook"></i>
        <i class = "fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-github"></i>
      </p>
    Name:Kisan Tamang<br>
    Email:kisantamang@gmail.com<br>
    Total Likes: 3550<br>
    Total Shares: 434
    </p>
    </div>
  
    <div class="col-md-6" st>
        <h3>Statistics</h3>
        <h5>Your Activity</h5>
        <div class="statistics" style="padding:5px;">
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
              <span class="skill">PHP <i class="val">95%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              <span class="skill">Python / Django <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
              <span class="skill">Javascript <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
              <span class="skill">React <i class="val">85%</i></span>
            </div>
          </div>
           <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;">
              <span class="skill">React Native <i class="val">87%</i></span>
            </div>
          </div>
           <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
              <span class="skill">NodeJs <i class="val">75%</i></span>
            </div>
          </div>
            <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
              <span class="skill">Wordpress <i class="val">95%</i></span>
            </div>
          </div>
            <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
              <span class="skill">HTML5/CSS3 <i class="val">95%</i></span>
            </div>
          </div>
        </div>
    </div>

      <div class="col-md-3">
        <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit" class="btn btn-success" name="submit">
        </form>
    </div>
  </div>
</div>




<?php require ('includes/footer.php'); ?>  
