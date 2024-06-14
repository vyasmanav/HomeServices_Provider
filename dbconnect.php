<?php

$db_host ="localhost";
$db_user ="root";
$db_password = "";
$db_name ="homeserviceprovider";

//  create connection

$conn = new mysqli($db_host,$db_user,$db_password,$db_name);
//  checking connection

if($conn -> connect_error){
    die("connection Failed");
}
// else{
//     echo "Connect";
// }

?>