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
    <title>Document</title>
   
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
 <br><br>
       <!-- start conactus -->
<div class="container mt-5" id="contact" >
 <h2 class="text-center mb-4">Contact Us</h2>
 <div class="row">
    <div class="col-md-8">
        <br>
    <form action="" class="shadow-lg p-4" method="POST"style="background: darkgrey; border-radius:5px;">
            <input type="text" class="form-control" name="name" placeholder="Name"> <br>
            <input type="text" class="form-control" name="subject" placeholder="Subject"> <br>
            <input type="text" class="form-control" name="email" placeholder="Email"> <br>
            <textarea name="message" class="form-control" placeholder="How can we help you ?" id="" cols="30" rows="5"></textarea><br>
            <input type="submit" value="Send" class="btn btn-primary" name="submit">
            <input type="submit" value="Back" class="btn btn-primary" name="submit"> 
            <br><br>
        </form> 
    </div>
    <!-- start 2nd column -->
    <div class="col-md-4 text-center">
        <strong>HeadQuarter:</strong><br>
        Home Service Pvt Ltd ,<br>
        Maninagar,Ahmedabad<br>
        Gujarat -382745<br>
        Phone : +0000000000<br>
        <a href="#" target="_blank">www.homeservice.com</a><br><br><br>
    
        <strong>Branch:</strong><br>
        Home Service Pvt Ltd ,<br>
        Vatva,Ahmedabad<br>
        Gujarat -382440<br>
        Phone : +1111111111<br>
        <a href="#" target="_blank">www.homeservice.com</a><br><br><br>
    </div>
 </div>
    <!-- end 2nd column -->

</div>
    <!-- end conactus -->
</body>
</html>