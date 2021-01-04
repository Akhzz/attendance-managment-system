<?php
include_once '../dbConnection.php';
session_start();

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
}

$s= "select * from adminlogin where username = '$uname' and password= '$pwd'";
$result= mysqli_query($conn,$s);
$numofrows= mysqli_num_rows($result);

if($numofrows ==1){ 
    $_SESSION['adminusername']=$uname;
    header("location:adminhome.php");    
}
else{    
    header('location:adminlogin.php?error=Invalid Credentials');
}
?>