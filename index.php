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
    <!-- custom css -->
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
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <button class="btn btn-outline-light my-2 my-sm-0 mr-5" name="write" style="height:35px;margin-left:20px;" id=><i class="fa fa-paper-plane"></i> Write Post</button>

      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  
  </div>
  </div>
</nav>
<!-- nav ends here -->

    <div class="container body_section">
        <div class="row">
            <div class="col-md-2 profile_section">
                <h6 class="mb-3">Your Profile</h6>
                 <div class="media">
                <img src = "img/kisan.png" alt="profile_picture" class="profile_picture" style="width:32px;height:32px;">
                <div class="media-body">
                <p class="mt-0 ml-2" style="font-size:14px;">Kisan Tamang
                <small id="emailHelp" class="form-text text-muted">Web Developer</small></p>
                </div>
                </div>
                

            </div>
            <div class="col-md-8 post_wrapper">
            <!-- post -->
                <div class="post">
                <div class="media">
                <img src = "img/kisan.png" alt="profile_picture" class="profile_picture">
                <div class="media-body">
                <h6 class="mt-3 ml-2">Kisan Tamang</h6>
               <?php echo date("d M"); ?>
                </div>
                </div>
                    <h5 class="mt-3">What is prototype in JavaScript and How important is this?</h5>
                </div>

                  <div class="post">
                <div class="media">
                <img src = "img/kisan.png" alt="profile_picture" class="profile_picture">
                <div class="media-body">
                <h6 class="mt-3 ml-2">Kisan Tamang</h6>
                </div>
                </div>
                    <h5 class="mt-3">What is prototype in JavaScript and How important is this?</h5>
                </div>

            </div>

            <div class="col-md-2">
                <h4>tags</h4>
               <ul class="list-group list-group-flush">
                <li class="list-group-item">#JavaScript</li>
                <li class="list-group-item">#PHP</li>
                <li class="list-group-item">#CSS</li>
                <li class="list-group-item">#HTML</li>
                <li class="list-group-item">#Node.js</li>
                <li class="list-group-item">#ReactJS</li>
                <li class="list-group-item">#coding</li>
                <li class="list-group-item">#design</li>
            </ul>
            </div>
        </div>
    </div>

    <!-- bootstrap javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>