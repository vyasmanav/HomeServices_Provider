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
    <title>Home Service - Register</title>

   <style>
      body{
         background: ghostwhite;
      }
    
   </style>

</head>
<body> 
 
 <?php    
 include('dbconnect.php');
 if(isset($_REQUEST['rSignup'])){
    if(($_REQUEST['rName']=="") || ($_REQUEST['rEmail'] == "" ) || ( $_REQUEST['rPassword'] == "")){
        $regmsg = '<div class="alert alert-warning mt-2 text-center" role="alert">All Fields are Required</div>';
    
    }else{
 $sql1 = "SELECT r_email FROM registration WHERE r_email = '".$_REQUEST['rEmail']."'";

 $result = $conn->query($sql1);
 if($result->num_rows==1){
   $regmsg = '<div class="alert alert-danger mt-2 text-center" role="alert">Email Id Already Registered</div>';
 }
 else{
    
 $rName = $_REQUEST['rName'];
 $rEmail = $_REQUEST['rEmail'];
 $rPassword = $_REQUEST['rPassword'];
 $rMoblie=$_REQUEST['rMoblie'];
 $rGender=$_REQUEST['rGender'];
 $rAddress=$_REQUEST['rAddress'];

 $sql =" INSERT INTO registration(r_name,r_email,r_password,r_Mobile,r_Gender,r_Address) VAlUES('$rName','$rEmail','$rPassword','$rMoblie','$rGender','$rAddress')";

 if($conn ->query($sql) == TRUE)
 {
    $regmsg = '<div class="alert alert-success mt-2 text-center" role="alert" >Register Successfully</div>';
    header('Location:Login.php');
 }
 else{
    $regmsg = '<div class="alert alert-danger mt-2 text-center" role="alert" >Unable Register</div>';
    
 }
    }
}

 }

 ?>
 <!-- Start Registration Form -->

    <div class="container pt-5" id="registration">
    <h2 class="text-center">Create an Account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="POST"style="background: darkgray; border-radius:5px;">
                <div class="form-group">
                   <i class="fas fa-user"></i> <label for="" class="font-weight-bold pl-2">Name</label>
                   <input type="text" class="form-control" placeholder="Name" name="rName">                     
                </div>
                <div class="form-group">
                   <i class="fas fa-envelope"></i> <label for="" class="font-weight-bold pl-2">Email</label>
                   <input type="email" class="form-control" placeholder="Email" name="rEmail">
                   <small class="font text">We'll never share your email with anyone else</small>                     
                </div>

                <div class="form-group">
                   <i class="fas fa-home"></i> <label for="" class="font-weight-bold pl-2">Address</label>
                   <input type="text" class="form-control" placeholder="Address" name="rAddress">                     
                </div>

                

                <div class="form-group">
                   <i class="fas fa-phone"></i> <label for="" class="font-weight-bold pl-2">Contact No.</label>
                   <input type="text" class="form-control" placeholder="contact no" name="rMoblie">                     
                </div>

                <div class="form-group">
                   <i class="fas fa-person"></i> <label for="" class="font-weight-bold pl-2">Gender :</label>&nbsp;&nbsp;
                   <input type="radio" name="rGender" value="male"> Male &nbsp;
                   <input type="radio" name="rGender" value="female"> Female &nbsp;   
                   <input type="radio" name="rGender" value="Other"> Other &nbsp;             
                </div>

                <div class="form-group">
                   <i class="fas fa-key"></i> <label for="" class="font-weight-bold pl-2">Password</label>
                   <input type="password" class="form-control" placeholder="Password" name="rPassword">                     
                </div>


                <button type="submit" class="btn btn-dark mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                
                <em style="font-size:10px;">Note - By clicking Sign Up , you agree to our Terms, Data Policy and Cookie Policy</em>
                <br>
      
           <?php 
        if(isset($regmsg)) {echo $regmsg;}
           ?>
           
            </form>
        </div>
    </div>
</div>




    <!-- End Registration Form -->


</body>
</html>