<?php
  include 'connection.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    body{
      background-image: url('./images/bgimg.jpg');
    }
    .nav-item .icon-link {
    font-size:20px;
    margin-top: 5px;
    margin-left: 5px;
   }
   .icon-link i{
    padding:5px;
    color: #fff;
}
  </style>
</head>
  <body>
          <!-- Nav Bar -->
          <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background:#000;">
        <div class="container-fluid">
          <a class="navbar-brand" href="">
            <img src="./images/logo.jpg" height="40px;" width="90px;" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./Rented.php"><i class="bi bi-house-door-fill"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Register.php"><i class="bi bi-r-square-fill"></i>Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="client.php"><i class="bi bi-people-fill"></i>Client</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="display.php"><i class="bi bi-person-bounding-box"></i>Display</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-lines-fill"></i>Our Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Rented Rooms</a></li>
                  <li><a class="dropdown-item" href="#">Land Rent</a></li>
                  <li><a class="dropdown-item" href="#">Rented House</a></li>
                  <li><a class="dropdown-item" href="#">Buy Land</a></li>
                  <li><a class="dropdown-item" href="#">Buy House</a></li>
                  <li><a class="dropdown-item" href="#">Rented Flat</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">page viewers</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./login.php"><i class="bi bi-box-arrow-in-right"></i>Logout</a>
              </li>   
              <li class="nav-item">
                <div class="icon-link">
                <a href="https://www.facebook.com/raju.timalsina.245/" target="_blank"><i class="bi bi-facebook"></i></a>
              </div>
              </li>
              <li class="nav-item">
                <div class="icon-link">
                <a href="https://www.youtube.com/channel/UCACyfHzcCbOPi2T_a6-FYDA" target="_blank"><i class="bi bi-youtube"></i></a>
              </div>
              </li>
              <li class="nav-item">
                <div class="icon-link">
                <a href="https://github.com/RazuTimal45" target="_blank"><i class="bi bi-github"></i></a>
              </div>
              </li>
              <li class="nav-item">
                <div class="icon-link">
                <a href="https://www.linkedin.com/in/razu-timalsina-3a2a3b1b9/" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="row mt-5 justify-content-center pb-4">
            <div class="col-md-5 mt-5">
                <img src="./images/left.jpg" style="border-radius:20px;" class="img-fluid" alt="">
            </div>
            <div class="col-md-5 mt-5">
                <form  action="#" method="post" style="color:rgb(208, 226, 231);">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Accept terms and condition</label>
                    </div>
                      <div class="row justify-content-between">
                        <div class="col-md-2">
                            <a href="Register.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">Signup</a>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="login" class="btn btn-success " tabindex="-1" role="button" value="login" aria-disabled="true">
                        </div>
                      </div>
                  </form>
            </div>
        </div>
      </div>

      <!--footer-->
      <div class="row justify-content-evenly text-white pt-1 pb-1" style="background:#390511;font-family:Arial, Helvetica, sans-serif">
                    <div class="col-md-3 pt-3">
                     <h5><span style="color:red">R</span>ented</h5>
                     <hr>
                     <div class="icon-link">
                      <a href="https://www.facebook.com/raju.timalsina.245/" target="_blank"><i class="bi bi-facebook"></i></a>
                      <a href="https://www.youtube.com/channel/UCACyfHzcCbOPi2T_a6-FYDA" target="_blank"><i class="bi bi-youtube"></i></a>
                     <a href="https://github.com/RazuTimal45" target="_blank"><i class="bi bi-github"></i></a>
                     <a href="https://www.linkedin.com/in/razu-timalsina-3a2a3b1b9/" target="_blank"><i class="bi bi-linkedin"></i></a>
                    </div>
                    </div>
                    <div class="col-md-3 pt-3">
                        <h6>All Right Reserved</h6>
                        <Small>&copy; Raju</Small>
                        <hr>
                      </div>
                    <div class="col-md-3 pt-3">
                        <h6>Contact Us</h6>
                        <p><i class="bi bi-geo-fill"></i><code>Bhaisepati</code><br><small><i class="bi bi-telephone-outbound-fill"></i>9808000000</small></p>
                        <small>Email: razutimalsina@gmail.com</small>
                        <hr>
                    </div>
                </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $insertquery = "INSERT INTO `login` (`emailaddress`,`password`) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $insertquery);
  }
?>