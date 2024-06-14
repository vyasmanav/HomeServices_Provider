<?php 

include('dbconnect.php');
session_start();
if(!isset($_SESSION['is_admin_login'])){
 if(isset($_REQUEST['aEmail'])) {
$aEmail =mysqli_real_escape_string($conn,trim($_REQUEST['aEmail']));
$aPassword =mysqli_real_escape_string($conn,trim($_REQUEST['aPassword']));
$sql = "SELECT a_email, a_password FROM admin_login WHERE a_email = '".$aEmail."' AND a_password = '".$aPassword."' limit 1";

  $result = $conn->query($sql);
  if($result->num_rows == 1){
    $_SESSION['is_admin_login']=true;
    $_SESSION['aEmail']=$aEmail;
  echo "<script> location.href='dashboard.php';</script>";
  } else{
    $msg = '<div class="alert alert-warning mt-2">Enter valiid Email and Password</div>';
  }
}
}
else{
    echo "<script> location.href='dashboard.php';</script>";
}
?>





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


<style>
    .custom-margin{
        margin-top: 8vh;
    }
    .admin{
        background: lightgray;
    }
</style>

    <title>Home Service - Login</title>
</head>
<body> 
 
<div class="mb-3 mt-5 text-center" style="font-size:30px;">
   <!-- <i class="fas fa-stethoscope"></i> -->
    <span>Online-Service-Management System</span>

</div>
<p class="text-center" style="font-size:20px;"><i class="fas fa-user-secret text-dark"></i> &nbsp; Admin Login</p>
<div class="container-fluid">
    <div class="row justify-content-center custom-margin">
        <div class="col-sm-6 col-md-4">
            <form action="" class="shadow-lg p-4 admin" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="aEmail">
                    <small class="form-text ">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                <i class="fas fa-key"></i><label for="password" class="font-weight-bold pl-2">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="aPassword">
                </div>
                <button type="submit" class="btn btn-outline-dark mt-3 font-weight-bold btn-block shadow-sm">Login</button>
                <?php 
                if(isset($msg)) {echo $msg;}
                ?>
            </form>
            <div class="text-center"><a href="index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a></div>
        </div>
    </div>

</div>

</body>
</html>