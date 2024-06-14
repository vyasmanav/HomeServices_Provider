<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <style>
        body{
            background: ghostwhite;
        }
    </style>
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
                <li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
                <li class="nav-item"><a href="#services" class="nav-link text-white">Services</a></li>
                <!-- <li class="nav-item"><a href="userregister.php" class="nav-link">Registration</a></li> -->
                <li class="nav-item"><a href="login.php" class="nav-link text-white">Login</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link text-white">Contact Us</a></li> 
            </ul>
        </div>
     </nav>
    <!-- end navigation -->

     <!-- start service section -->
     <div class="container ">
     <div class="row mt-5 ">
    <!-- <div class="col-md-4 mt-5"> -->
     <div class="container text-center border-bottom " style="margin-top: 80px;" >
            <h2>Our Services</h2>
          <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="electronic.php"><img src="electric work.jfif" alt="" style="width: 200px; height: 150px;"></a>
                <h4 class="mt-4">Electronic Appliances</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="plumbing.php"><img src="plumber-1.jpg" alt="" style="width: 200px; height: 150px;"></a>
                <h4 class="mt-4">Plumbing</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="pest.php"><img src="psc.jfif" alt="" style="width: 200px; height: 150px;"></a>
                <h4 class="mt-4">Pest-control</h4> 
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
          </div>
</div>
</div>
          <!-- end service section -->

           <!-- start footer  -->
    <footer class="container-fluid bg-dark mt-5 text-white" style="padding:10px;">
        <div class="container">
            <div class="row py-3">
            <div class="col-md-6">
                <!-- start 1st column -->
                <span class="pr-2">Follow Us : </span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f text-white"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter text-white"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube text-white"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google text-white"></i></a>

            </div>
            <!-- End 1st column -->
            <div class="col-md-6 text-right">
                <!-- start 2nd column -->
                <small>Designed By homeservice &copy; 2022</small>
                <!-- <small class="ml-2"><a href="admin_login.php">Admin Login</a></small> -->
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