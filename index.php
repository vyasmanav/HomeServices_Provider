<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- bootstrap jquery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <!-- pooper cdn -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
   <!-- font awesome -->
   <script src="https://kit.fontawesome.com/f8daa07b16.js" crossorigin="anonymous"></script>
    <title>Home Service</title>
</head>
<body>
    <!-- start navigation -->
     <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
        <a href="index.php" class="navbar-brand"><img src="logo.jpg" alt="" style=" width:50px; height:50px;"> Home-<span class="color_titel">Service </span></a>
        <!-- <span class="text">Customer's Happiness is our Main Goal</span> -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav" >
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="service.php" class="nav-link">Services</a></li>
                <!-- <li class="nav-item"><a href="userregister.php" class="nav-link">Registration</a></li> -->
                <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li> 
            </ul>
        </div>
     </nav>
    <!-- end navigation -->
    

    <!-- start header -->
    <!-- style="background-image:url(1.jpg);" -->
    <header class="jambotron back-image" >
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="service.png" alt="First slide" style="width:100%; height: 600px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="service1.png" alt="Second slide" style="width:100%; height: 600px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="hoome.jpg" alt="Third slide" style="width:100%; height: 600px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      
      <div class="myclass mainHeading"> 
         <!-- <h1 style="position:absolute; top:200px;left:50px;" class="text-uppercase text-danger font-weight-bold">Welcom<span class="color">e to Home</span>-Services</h1> -->
         <!-- <p style="position:absolute; top:250px;left:50px;" class="font-italic ">Customer's <span class="colors">&nbsp;Happiness is</span> &nbsp; our Main Goal</p> -->
         <!-- <a style="position:absolute; top:300px;left:80px;" href="login.php" class="btn btn-success mr-4">Login</a> -->
         <!-- <a style="position:absolute; top:300px;left:180px;" href="userregister.php" class="btn btn-danger mr-4">Sign-Up</a> -->
      </div>  

    </header>
    <!-- introduction section start -->
    <div class="container about" id="services">
        <div class="jumbotron">
            <h3 class="text-center">Home Service</h3>
            <p>Our Aim is to help people find the best home, local and lifestyle service(such as Cleaning Service, Pest-Control Service Appliance Service ,Electrical Service and More)online and get the desired type of service at the doorsteps. </p>
</div>
    </div>
    <!-- introduction section end -->

    <!-- start service section -->
          <div class="container text-center border-bottom" >
            <h2>Our Services</h2>
          <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="electronic.php"><img src="electric work.jfif" alt="" style="width: 200px; height: 150px;"></a>
                <h4 class="mt-4">Electrician</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="plumbing.php"><img src="plumber-1.jpg" alt="" style="width: 200px; height: 150px;"></a>
                <h4 class="mt-4">Plumbing</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="pest.php"><img src="psc.jfif" alt="" style="width: 200px; height: 150px;"></a>
                <h4 class="mt-4">Pest-Control</h4> 
            </div>
            <div class="col-sm-4 mb-4">
                <a href="painter.php"><img src="hero.jpg" alt="" style="width: 200px; height: 150px;"></a>
                <h4 class="mt-4">Painter</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="carpanter.php"><img src="carpanter.jpg" alt="" style="width: 200px; height: 150px;"></a>
                <h4 class="mt-4">Carpanter</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="cleaning.php"><img src="cl1.jpg" alt="" style="width: 200px; height: 150px;"></a>
                <h4 class="mt-4">Cleaning</h4>
            </div>
          </div>
          </div>
          <!-- end service section -->
    <!-- Start Registration Form -->

    <?php 
    // include('userregister.php');
    ?> 


    <!-- End Registration Form -->
    <!-- Start Happy Customer -->
<div class="jumbotron bg-dark">
    <div class="container">
        <h2 class="text-center text-white"> Customers</h2>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body">
                        <img src="happy1.jpg" alt="" class="img-fluid" style="border-radius:50%;">
                        <h4 class="card-title mt-3 text-center">Khushboo</h4>
                        <p class="card-text text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor asperiores illum numquam earum, quia architecto mollitia in enim ullam molestias?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body">
                        <img src="happy2.jpg" alt="" class="img-fluid" style="border-radius:50%;">
                        <h4 class="card-title mt-3 text-center">Vivek</h4>
                        <p class="card-text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore quis ducimus eveniet distinctio vero odio, excepturi suscipit veritatis minima dicta!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body">
                        <img src="happy3.jpg" alt="" class="img-fluid" style="border-radius:50%;">
                        <h4 class="card-title mt-3 text-center">Jyotsna</h4>
                        <p class="card-text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore quis ducimus eveniet distinctio vero odio, excepturi suscipit veritatis minima dicta!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body">
                        <img src="happy4.jpg" alt="" class="img-fluid" style="border-radius:50%;">
                        <h4 class="card-title mt-3 text-center">Sakshi</h4>
                        <p class="card-text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore quis ducimus eveniet distinctio vero odio, excepturi suscipit veritatis minima dicta!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- End Happy Customer -->

    <!-- start conactus -->
    <?php include('contact.php')?>

    <!-- end conactus -->

    <!-- start footer  -->
    <footer class="container-fluid bg-dark mt-5 text-white">
        <div class="container">
            <div class="row py-3">
            <div class="col-md-6">
                <!-- start 1st column -->
                <span class="pr-2">Follow Us : </span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google"></i></a>

            </div>
            <!-- End 1st column -->
            <div class="col-md-6 text-right">
                <!-- start 2nd column -->
                <small>Designed By homeservice &copy; 2022</small>
                <small class="ml-2"><a href="admin_login.php">Admin Login</a></small>
                <!-- End 2nd column -->

            </div>
        </div>
        </div>

    </footer>
    <!-- end footer  -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   </body>
</html>