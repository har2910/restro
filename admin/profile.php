<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        h2{
background-color: black;
color:white;
height: 50%;
width:50%;
padding :50px 50px 50px 50px ;




        }

        img
        {
            height: 80px;
            width:80px;
        }
    </style>
</head>
<body>
    


<?php
//include("connection/connect.php");  //include connection file
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "221b";  //database

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname); // connecting 
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed ?


$username1 =$_SESSION['username1'];
$password1 =$_SESSION['password1'];
$sql ="SELECT * FROM admin WHERE username='$username1' and  password='$password1' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br><br><center><h2><img src=\"images\manager.png\"><br><br>Admin Name : " . $row["name"]. "<br><br>Admin ID : " . $row["adm_id"]. "<br><br>Email : " . $row["email"]. "<br></h2></center>";
  }
}



?>







</body>
</html>

