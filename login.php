
<?php require('includes/header.inc.php'); ?>

<div class="container" style="margin-top:100px;">
    <div class="row">
        <div class="col-md-6">
        <h3 class="pb-1">Join the Developers community</h3>
            <h5>Share you Dev Knowledge and Experiences</h5>
            <img src="img/login.png" alt="developers_world">
        </div>
        <div class="com-md-6">
<form action="./includes/login_engine.php" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email Or Username" name="username">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
			</div>
			<input type="submit" class="btn btn-success" name="login" value="Login"></button><br>
			<span>Not member yet? <a href="register.php">Register here</a></span>
</form>
        </div>
    </div>
	</div>

<?php require ('includes/footer.php');?>
