<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="./images/fav.png"/>
    <link rel="stylesheet" href="./css/Boot.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Rented</title>
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
      <!--Container-->
      <div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="./images/Slider1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Rented</h5>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./images/Slider2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Rented</h5>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./images/Slider3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Rented</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/Slider4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Rented</h5>
            </div>
          </div>
        <div class="carousel-item">
          <img src="./images/Slider5.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Rented</h5>
          </div>
        </div>
      </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
   <hr>
      <div class="container-fluid" >
         <!-- tagline -->
         <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-5" style="transition: 1.5s;" onmouseenter="mouseenter1()" onmouseleave="mouseleave1()" id="main-text">"<b><span style="color:red">R</span>ented</b> is future of Renting Services"</h3>
            </div>
         </div>

          <!-- feature -->
            <div class="row justify-content-evenly" style=" background: linear-gradient(#EF0B42,#F09764, #A3E5F5);">
                <div class="col-md-3 text-center mt-5" id="pro-lan"> 
                   <img src="./images/rent1.jpg" width="200px" height="150px">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse reiciendis deserunt, eum facere at aliquid.</p>
                   <p><i class="bi bi-geo-fill"></i><code>bhaisepati</code></p>
                   <ul id="detail_info1"  style="display:none;">
                    <li>speed Internet Connection</li>
                    <li>premium Quality food</li>
                    <li>Homely and family Environment</li>
                    <li>Washing services</li>
                    <li>Hold water Available</li>
                   </ul>
                   <button type="button" id ="detail_btn" onclick="toggle1()" style="background-color:black;color:white;">Show More Details</button>
                 </div>
                <div class="col-md-3 text-center mt-5" id="pro-lan">
                    <img src="./images/rent2.jpg" width="200px" height="150px">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quas quaerat dolorem totam a ad!</p>
                    <p><i class="bi bi-geo-fill"></i><code>bhaktapur</code></p>
                    <ul id="detail_info2" style="display:none;">
                      <li>speed Internet Connection</li>
                      <li>premium Quality food</li>
                      <li>Homely and family Environment</li>
                      <li>Washing services</li>
                      <li>Hold water Available</li>
                     </ul>
                    <button type="button" id ="detail_btn" onclick="toggle2()" style="background-color:black;color:white;">Show More Details</button>
                </div>
                <div class="col-md-3 text-center mt-5"  id="pro-lan">
                    <img src="./images/rent3.jpg" width="200px" height="150px">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos quia quis laboriosam harum. Et, accusantium!</p>
                    <p><i class="bi bi-geo-fill"></i><code>Patan</code></p>
                    <ul id="detail_info3"  style="display:none;" >
                      <li>speed Internet Connection</li>
                      <li>premium Quality food</li>
                      <li>Homely and family Environment</li>
                      <li>Washing services</li>
                      <li>Hold water Available</li>
                     </ul>
                    <button type="button" id ="detail_btn" onclick="toggle3()" style="background-color:black;color:white;">Show More Details</button>
                </div>
            </div>
      <div class="row justify-content-evenly pb-5" style="background: linear-gradient(#A3E5F5,#F09764,#EF0B42);" >
        <div class="col-md-3 text-center mt-5"   id="pro-lan">
           <img src="./images/rent4.jpg" width="200px" height="150px">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse reiciendis deserunt, eum facere at aliquid.</p>
           <p><i class="bi bi-geo-fill"></i><code>Chapagaun</code></p>
           <ul id="detail_info4"  style="display:none;">
            <li>speed Internet Connection</li>
            <li>premium Quality food</li>
            <li>Homely and family Environment</li>
            <li>Washing services</li>
            <li>Hold water Available</li>
           </ul>
           <button type="button" id ="detail_btn" onclick="toggle4()" style="background-color:black;color:white;">Show More Details</button>
        </div>
        <div class="col-md-3 text-center mt-5"   id="pro-lan">
            <img src="./images/rent5.jpg" width="200px" height="150px">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quas quaerat dolorem totam a ad!</p>
            <p><i class="bi bi-geo-fill"></i><code>kirtipur</code></p>
            <ul id="detail_info5"  style="display:none;">
              <li>speed Internet Connection</li>
              <li>premium Quality food</li>
              <li>Homely and family Environment</li>
              <li>Washing services</li>
              <li>Hold water Available</li>
             </ul>
            <button type="button" id ="detail_btn" onclick="toggle5()" style="background-color:black;color:white;">Show More Details</button>
          </div>
        <div class="col-md-3 text-center mt-5"  id="pro-lan">
          <img src="./images/rent6.jpg" width="200px" height="150px">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos quia quis laboriosam harum. Et, accusantium!</p>
            <p><i class="bi bi-geo-fill"></i><code>Durbarmarg</code></p>
            <ul id="detail_info6"  style="display:none;">
              <li>speed Internet Connection</li>
              <li>premium Quality food</li>
              <li>Homely and family Environment</li>
              <li>Washing services</li>
              <li>Hold water Available</li>
             </ul>
            <button type="button" id ="detail_btn" onclick="toggle6()" style="background-color:black;color:white;">Show More Details</button>
          </div>
    </div>
</div>
<hr>
      <div class="row  pt-3 pb-4 justify-content-evenly" style=" background: linear-gradient(#64F0BB,#83b9e2, #0D6645 );">
        <h2 style="text-align: center;"><span style="color:red">R</span>ented Statistics</h2>
        <div class="col-md-5 pt-4">
           <img src="./images/body.png" class="img-fluid rounded-5" alt="">
        </div>
        <div class="col-md-5">
            <h5 class="mt-3">Rented Rooms</h5>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <h5 class="mt-3">Land Rent</h5>
              <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <h5 class="mt-3">Rented House</h5>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" aria-label="Warning example" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <h5 class="mt-3">Buy Land</h5>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h5 class="mt-3">Buy house</h5>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" aria-label="primary example" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h5 class="mt-3">Rented Flat </h5>
              <div class="progress">
                <div class="progress-bar bg-secondary" role="progressbar" aria-label="secondary example" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h5 class="mt-3">Searched page clients</h5>
              <div class="progress">
                <div class="progress-bar bg-dark" role="progressbar" aria-label="dark example" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
        </div>
      </div>
      <hr>
      <div class="row justify-content-evenly pb-5" style="background: linear-gradient(#6b03c0,#83b9e2, #A3E5F5);">
        <div class="col-md-5">
            <h3 class="mb-4">Contact Form</h3>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">First Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Last Name">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput4" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput4" class="form-label">Password</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="password">
              </div>   
              <button type="button" class="btn btn-dark mt-3">Submit</button>        
        </div>
        <div class="col-md-5 ms-5">
           <H3><span style="color:red">R</span>ented Founder</H3>
            <img src="./images/profile.jpg" class="img-fluid rounded-5" width="400px" height="500px">
            <a href="./CV.php"><button type="button" class="btn btn-info mt-2 ms-2">Founder Details</button></a>
        </div>
      </div>
      <hr>
                <!-- About-->
                <div class="row p-5 mt-5" style=" background: linear-gradient(#6b03c0,#83b9e2, #A3E5F5);">
        <div class="col-md-12 card pt-5" style="width: 70%;margin-left: 20%; background:#03194A;color:white;">
            <h3 style="text-align:center;">About <span style="color:red">R</span>ented</h3>
            <img src="images/renthouse.jpeg" class="img-fluid ps-5" alt="Our team" style="width:80%;margin-left:5%;height:400px">
        <p style="padding:2% 10%;">Welcome to our website, where we offer a comprehensive solution for booking empty rooms and finding the perfect accommodation for your needs. Whether you are looking for a private room, a shared space, or a full apartment, we have got you covered. Our platform provides a seamless and easy-to-use interface that helps you find the right room in just a few clicks.

Our vast network of rooms available is constantly updated to ensure that you have access to the latest and most accurate information. With a focus on quality and affordability, we strive to provide you with the best possible experience when booking your room. Our team of experts is dedicated to ensuring that you find the perfect room that meets your needs and fits your budget.

<details style="padding:2% 10%;"><summary>Read More...</summary>We understand that booking a room can be a hassle, which is why we make it as simple and straightforward as possible. All you have to do is select your desired location, budget, and room type, and we will do the rest. Our platform is designed to provide you with all the information you need to make an informed decision, including photos, reviews, and detailed descriptions of the rooms available.

Whether you are a student, a professional, or just looking for a short-term stay, we have a room for you. We offer flexible booking options that cater to your specific needs, so you can book your room for as long as you need it. 
In conclusion, our website provides you with a simple and convenient solution for booking empty rooms and finding the perfect accommodation. With a focus on quality, affordability, and customer satisfaction, we strive to make your room booking experience as hassle-free as possible. So why wait? Book your room today and start enjoying the benefits of our platform.</details>
</p>
</div>
 </div>

                <!-- footer -->
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
    <script src="index.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>