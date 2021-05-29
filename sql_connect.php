<?php
 
$dbServername = "localhost";
$dbUsername = "yourusername";
$dbPassword = "yourpassword";
$dbName = "solarnexus";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if(mysqli_connect_error()){
      die("Not connected to MySQL Database. Error! :("."<br>");
    }

?>