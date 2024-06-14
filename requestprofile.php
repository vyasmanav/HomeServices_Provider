<?php
include ('dbconnect.php');
session_start();
if($_SESSION['is_login'])
{
    $rEmail =$_SESSION['rEmail'];
}
else{
    echo "<script> location.href='login.php'</script>";
}
$sql ="SELECT r_name,r_email FROM registration WHERE r_email = '$rEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $rName =$row['r_name'];
}

if(isset($_REQUEST['nameupdate']))
{
    if($_REQUEST['rName'] == ""){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill the Data</div>';
    }else{
         $rName = $_REQUEST ['rName'];
         $sql = "UPDATE registration SET r_name = '$rName' WHERE r_Email = '$rEmail'";
         if($conn->query($sql) == TRUE) {
            $passmsg ='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update Successfully</div>';
         }
         else{
            $passmsg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">unable to Update</div>';

         }
    }
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


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- bootstrap jquery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <!-- pooper cdn -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
   <!-- font awesome -->
   <script src="https://kit.fontawesome.com/f8daa07b16.js" crossorigin="anonymous"></script>
   <title>Home Service - User Register</title>
</head>
<body>
<!-- top navbar -->
<nav class="navbar navbar-dark fied-top bg-dark flex-md-nowrap p-0 shadow">
   <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="requestprofile.php"> Home Service</a></nav>

   <!-- side bar 1st col -->
   <div class="container-fluid">
    <div class="row">
        <nav class="col-sm-2 bg-light sidebar py-5 ">
            <div class="sidebar sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="requestprofile.php"><i class="fas fa-user"></i>&nbsp;Profile <ion-icon name="arrow-forward-outline"></ion-icon></a></li>
                    <li class="nav-item"><a class="nav-link" href="submitreq.php"><i class="fab fa-accessible-icon"></i>&nbsp;Submit Request  </a></li>
                    <li class="nav-item"><a class="nav-link" href="service_status.php"><i class="fas fa-align-center"></i>&nbsp;Service Status</a></li>
                    <li class="nav-item"><a class="nav-link" href="changepas.php"><i class="fas fa-key"></i>Change Password</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>          
                </ul>
            </div>
        </nav>        <!-- end side bar  1st col-->
        <!-- profile start 2nd col -->
        <div class="col-sm-6 mt-5">
            <form action="" method="POST" class="mx-5">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" name="rEmail" id="rEmail"
                  value=" <?php echo $rEmail ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="rName">Name</label>
                    <input type="text" class="form-control" name="rName" id="rName" value="<?php echo $rName ?>">
                </div>
                <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
                <?php if(isset($passmsg)) {echo $passmsg;} ?>
            </form>

        </div>
        <!-- profile end 2nd col -->
    </div>
   </div>  <!-- end nav  -->


</body>
</html>