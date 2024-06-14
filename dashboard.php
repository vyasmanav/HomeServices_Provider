
<?php include('dbconnect.php'); 
session_start();
if(isset($_SESSION['is_admin_login'])){
    $aEmail = $_SESSION['aEmail'];
}
else{
    echo "<script>location.href='admin_login.php'</script>";
}
$sql ="SELECT max(request_id) FROM submitrequest";
$result=$conn->query($sql);
$row =mysqli_fetch_row($result);
$submitrequest=$row[0];

$sql ="SELECT max(rno) FROM  assignwork";
$result=$conn->query($sql);
$row =mysqli_fetch_row($result);
$assignwork=$row[0];

$sql ="SELECT * FROM technician_tb";
$result=$conn->query($sql);
$totaltech=$result->num_rows;

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
    <title>HomeService-Dashboard</title>
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
                    <li class="nav-item"><a class="nav-link active" href="dashboard.php"><i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard <ion-icon name="arrow-forward-outline"></ion-icon></a></li>
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

        <!--start dashbord -->

         <div class ="col-sm-9 col-md-10">
            <div class = "row text-center mx-5">
               <div class="col-sm-4 mt-5">

               <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                   <div class="card-header">Requests Received</div>
                   <div class="card-body">
                   <h4 class="card-title"><?php echo $submitrequest?></h4>
                   <a class="btn text-white" href="req.php">View</a>
                   </div>
               </div>
               </div>
               <div class="col-sm-4 mt-5">

               <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                   <div class="card-header">Assigned Work</div>
                   <div class="card-body">
                   <h4 class="card-title"><?php echo $assignwork ?></h4>
                   <a class="btn text-white" href="work.php">View</a>
                   </div>
               </div>
               </div>
               <div class="col-sm-4 mt-5">

               <div class="card text-white bg-info mb-3" style="max-width:18rem;">
                   <div class="card-header">No of Technician</div>
                   <div class="card-body">
                   <h4 class="card-title"><?php echo $totaltech ?></h4>
                   <a class="btn text-white" href="technician.php">View</a>
                   </div>
               </div>
               </div>
            </div>
            <div class="mx-5 mt-5 text-center">
                <p class="bg-dark text-white p-2">List of Requester</p>
                <?php

                $sql ="SELECT * FROM registration";
                $result =$conn->query($sql);
                if($result->num_rows > 0){
                    echo '<table class="table">
                    <thead>
                 <tr>
                 <th scope="col">Requester id</th>
                 <th scope="col">Name</th>
                 <th scope="col">Email</th>
                 </tr>
                    </thead>
                    <tbody>';
                  while($row =$result->fetch_assoc()){
                   echo '<tr>';
                  echo '<td>'.$row["r_login_id"].'</td>';
                  echo '<td>'.$row["r_name"].'</td>';
                  echo '<td>'.$row["r_email"].'</td>';

                    echo '</tr>';
                  }
                  
                  echo '</tbody>
                    </table>';

                }
                else{
                    echo '0 Result';
                }
                ?>
            </div>
         </div>
    
    <!-- end dashbord -->
    
    
        </div>
   </div>  

</body>
</html>