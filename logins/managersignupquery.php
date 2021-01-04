<?php
include_once '../dbConnection.php';
session_start();



if (isset($_POST['submit'])) {
$name = $_POST['name'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
}

$s= "select * from managerlogin where username = '$uname'";
$result= mysqli_query($conn,$s);
$numofrows= mysqli_num_rows($result);

if($numofrows ==1){  
    header("location:managersignup.php?error=Username Already Exists....!!!");
    
}
else{
    $reg = "insert into managerlogin (username, password, name) values ('$uname' , '$pwd', '$name')";
   mysqli_query($conn,$reg); 
    echo "usrname success";
    echo '<script>alert("Registration Successful")</script>';
    header('location:managerlogin.php');
}
?>