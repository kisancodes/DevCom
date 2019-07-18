<?php
session_start();
require("includes/index.inc.nav.php");
if(!isset($_SESSION['username'])){
		header("location:./login.php?next=email");
}
?>

<div class="container" style="margin-top:80px;">
 <div class="row">
    <form class="col s12 m12" action="./includes/sendemail.inc.php" method="POST">
      <div class="row">
        <div class="input-field col s12 m6">
        <label>To</label>
				<input id="to" name ="to" type="text" class="validate" value="<?php echo $_GET['to']; ?>">
		
        </div>
			</div>
				<div class="row">
        <div class="input-field col s12 m6">
        <label for="subject">Subject</label>
				<input id="subject" name="subject" type="text" class="validate" value="<?php echo $_GET['subject']; ?>">
          
        </div>
			</div>
				<div class="row">
        <div class="input-field col s12">
         <label for="textarea1">Textarea</label>
				<textarea id="textarea1" class="materialize-textarea" name="message"><?php echo $_GET['message']; ?></textarea>
         
        </div>
<div>
		<a class="btn waves-effect waves-light" href="index.php">Cancel</a>
		<button class="btn waves-effect waves-light" name="sendEmail">Send<i class="material-icons right">send</i></button>
</div>
      </div>
    </form>
  </div>
</div>

<?php include("includes/footer.php"); ?>
