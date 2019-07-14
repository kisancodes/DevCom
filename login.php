<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#" style="color:#fff;font-weight:bold;font-size:24px;">DevCom</a>
  </div>
  </div>
</nav>

<div class="container mt-5">
    <h3 class="pb-4">Welcome to the &lt;/Dev&gt; community - DevCom</h3>
    <div class="row">
        <div class="col-md-6">
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

<?php require ('includes/footer.php');?>
