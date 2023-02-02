<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .icon-link i{
        padding:5px;
        color: #fff;
        }
        body{
    font-family: Arial, Helvetica, sans-serif;
    background: #0B6623;
}
table th, table td{
    font-size:14px;
    border:2px solid rgb(96, 96, 225);
    padding:4px 2px 4px 10px;
    border-radius:3px;
    color:#002244;
}
table tr{
    margin-bottom:5px;
}
table {
   border:2px solid white;
   background:#ccc;
   border-radius:10px;
   width:100%;
}
.center-div{
    margin:8% 20%;
    padding:20px;
    background-color: rgb(96, 96, 225);
    border-radius:5px;
}
#updt{
    color:#03C03C;
    font-size:15px;
}
#del{
    color:red;
    font-size:15px;
}
.nav-item .icon-link {
    color:white !important;
    font-size:20px;
    margin-top: 5px;
    margin-left: 5px;
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
    <div class="center-div">
        <div class="table-representation">
            <table>
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email Address</th>
                    <th>Password</th>                 
                    <th colspan="2">Operation</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                      include 'connection.php';

                      $selecttable= "select * from signup";
                      $query = mysqli_query($conn, $selecttable);

                      $num = mysqli_num_rows($query);
                      while($res= mysqli_fetch_array($query)){
                      
                      ?>
                    <tr>
                    <td><?php echo $res['S.NO.']; ?></td>
                    <td><?php echo $res['username']; ?></td>
                    <td><?php echo $res['emailaddress']; ?></td>
                    <td><?php echo $res['password']; ?></td>
                    <td><a href="update.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="update"><i id="updt" class="bi bi-pencil-square"></i></a></td>
                    <td>  <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="delete"><i id="del" class="bi bi-trash3-fill"></i></a></td>
                </tr>
                <?php
                      }
                      ?>
                </tbody>
            </table>
        </div>
    </div>
          <!--footer-->
          <div class="row justify-content-evenly text-white pt-1" style="background:#390511;font-family:Arial, Helvetica, sans-serif">
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
    <script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</body>
</html>