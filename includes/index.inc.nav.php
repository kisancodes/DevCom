<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevCom, A developer community to share knowledge and  ask question</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
  
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top mb-5">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php" style="color:#fff;font-weight:bold;font-size:24px;">DevCom</a>
    <ul class="navbar-nav ml-5 mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fa fa-user"></i> Profile</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>
      </li>
      <?php 
      if(isset($_SESSION['username'])){
        echo '
        <li class="nav-item">
        <a class="nav-link" href="./includes/logout.inc.php?logout"><i class="fa fa-sign-out"></i> Logout</a>
      </li>';
      }
      ?>
    </ul>

    <!-- post--============ -->
    <form class="form-inline my-2 my-lg-0" action="./includes/search.php" method="post">
    <button  type="button" class="btn btn-outline-light  my-sm-0 post_button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" name="write" style="height:35px;margin-left:20px;" id=><i class="fa fa-paper-plane"></i> Write Post</button>

<!-- ''''''search''''''''''' -->
      <input class="form-control mr-sm-2" type="text" placeholder="Search tags" aria-label="Search" name="tag-name">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="search-btn">Search</button>
    </form>
  </div>
  </div>
</nav>