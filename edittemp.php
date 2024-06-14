<?php
 
include('dbconnect.php');

session_start();
if(isset($_SESSION['is_admin_login'])){
    $aEmail = $_SESSION['aEmail'];
}
else{
    echo "<script>location.href='admin_login.php'</script>";
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
    <title>HomeService-Update</title>
</head>
<body>
<nav class="navbar navbar-dark fied-top bg-dark flex-md-nowrap p-0 shadow">
   <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="requestprofile.php">Home Service</a></nav>

   <!-- side bar 1st col -->
   <div class="container-fluid">
    <div class="row">
        <nav class="col-sm-2 bg-light sidebar py-5 ">
            <div class="sidebar sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="dashboard.php"><i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="work.php"><i class="fab fa-accessible-icon"></i>&nbsp;Work Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="req.php"><i class="fas fa-align-center"></i>&nbsp;Request </a></li>
                    <li class="nav-item"><a class="nav-link" href="assets.php"><i class="fas fa-list"></i>&nbsp;Assets</a></li>
                    <li class="nav-item"><a class="nav-link" href="technician.php"><i class="fa-brands fa-hire-a-helper"></i>&nbsp;Technician</a></li>
                    <li class="nav-item"><a class="nav-link" href="rquester.php"><i class="fas fa-user"></i>&nbsp;Rquester</a></li>
                    <li class="nav-item"><a class="nav-link" href="sellreport.php"><i class="fa-solid fa-thumbtack"></i>&nbsp;Sell Report</a></li>
                    <li class="nav-item"><a class="nav-link" href="workreport.php"><i class="fas fa-table"></i>&nbsp;Work Report</a></li>
                    <li class="nav-item"><a class="nav-link" href="changepass.php"><i class="fas fa-key"></i>Change Password</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>               
                </ul>
            </div>
        </nav>
        
<!-- start second col -->

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Technician Details</h3>
    <?php

     if(isset($_REQUEST['id'])){
        // $updd=$_REQUEST['id'];
        // echo $updd;
        // die;
        $sql ="SELECT * FROM  technician_tb WHERE empid ={$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
     }
     if(isset($_REQUEST['empupdate']))
     {
        
        // if(( $_REQUEST['empCity']="") || ($_REQUEST['eName'] =="") || ($_REQUEST['empEmail'] ==""))
        // // if(($row['empCity'] =="") || ($row['eName'] =="") || ($row['empEmail'] ==""))
        // {
        //     $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fileds </div>';
        // }
        // else{
            $rid =$_REQUEST['empid'];
            $rname = $_REQUEST['empName'];
            $rcity =$_REQUEST['empCity'];
            $rmobile =$_REQUEST['empMobile'];
            $remail = $_REQUEST['empEmail'];
            $sql = "UPDATE technician_tb SET  empid ='$rid', empName = '$rname',empcity='$rcity',empMobile='$rmobile', empEmail = '$remail' WHERE empid ='$rid'";
            
            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update Successfully </div>';
           
            }
            else{
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Update Unable </div>';
            }

        }
    

    ?>
     <form action="<?php $_SELF_PHP ?>" method="POST">
     <div class="form-group">
            <label for="empid">ID</label>
            <input type="text" class="form-control" name="empid" id="empid" Value="<?php if(isset($row['empid'])) { echo $row['empid'];} ?>" readonly>
        </div>       
     <div class="form-group">
            <label for="empName">Name</label>
            <input type="text" class="form-control" name="empName" id="empName" Value="<?php if(isset($row['empName'])) { echo $row['empName'];} ?>">
        </div>
        <div class="form-group">
            <label for="empCity">City</label>
            <input type="text" class="form-control" name="empCity" id="empCity" Value="<?php if(isset($row['empCity'])) { echo $row['empCity'];} ?>">
        </div>
        <div class="form-group">
            <label for="empMobile">Mobile</label>
            <input type="number" class="form-control" name="empMobile" id="empMobile" Value="<?php if(isset($row['empMobile'])) { echo $row['empMobile'];} ?>">
        </div>
     

        <div class="form-group">
            <label for="empEmail">Email</label>
            <input type="text" class="form-control" name="empEmail" id="empEmail" Value="<?php if(isset($row['empEmail'])) { echo $row['empEmail'];} ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="empupdate" name="empupdate">Update</button>
            <a href="technician.php" class="btn btn-secondary">Close</a>
        </div>
       <?php if(isset($msg)) {echo $msg;} ?>
     </form>

</div>
<!-- end second col -->


        
        </div>
   </div>  

</body>
</html>