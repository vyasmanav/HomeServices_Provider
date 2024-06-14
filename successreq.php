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
        <title>HomeService-Register</title>
    </head>
    <body>
    <nav class="navbar navbar-dark fied-top bg-danger flex-md-nowrap p-0 shadow">
       <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="requestprofile.php"> Home Service</a></nav>
    
       <!-- side bar 1st col -->
       <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="requestprofile.php"><i class="fas fa-user"></i>&nbsp;Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="submitreq.php"><i class="fab fa-accessible-icon"></i>&nbsp;Submit Request</a></li>
                        <li class="nav-item"><a class="nav-link" href="service_status.php"><i class="fas fa-align-center"></i>&nbsp;Service Status</a></li>
                        <li class="nav-item"><a class="nav-link" href="changepass.php"><i class="fas fa-key"></i>Change Password</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>          
                    </ul>
                </div>
            </nav>        <!-- end side bar  1st col-->



<?php 

include('dbconnect.php');

session_start();
if($_SESSION['is_login'])
{
    $rEmail =$_SESSION['rEmail'];
}
else{
    echo "<script> location.href='successreq.php'</script>";
}

$sql = "SELECT * FROM submitrequest WHERE request_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row =$result->fetch_assoc();
    echo "
   
       <div class='ml-5 mt-5'>
       <table class='table'>
       <tbody>
       <tr>
       <th>Request ID</th>
       <td>".$row['request_id']."</td>
       </tr>
       <tr>
       <th>Name</th>
       <td>".$row['request_name']."</td>
       </tr>
       <tr>
       <th>Email</th>
       <td>".$row['request_email']."</td>
       </tr>
       <tr>
       <th>Info</th>
       <td>".$row['request_info']."</td>
       </tr>
       <tr>
       <th>REQ DESC</th>
       <td>".$row['request_desc']."</td>
       </tr>
       <tr>
       <td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='print' onclick='window.print()'></form></td>
       </tr>
       </tbody>
       </table>
       </div>
    
    ";
}

else{
echo "Failed";
}

?>