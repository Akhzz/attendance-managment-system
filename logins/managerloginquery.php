<?php
include_once '../dbConnection.php';
session_start();

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
}

$s= "select * from managerlogin where username = '$uname' and password= '$pwd'";
$result= mysqli_query($conn,$s);
$numofrows= mysqli_num_rows($result);

if($numofrows ==1){ 
    $_SESSION['managerusername']=$uname;
    header("location:managerhome.php");    
}
else{    
    header('location:managerlogin.php?error=Invalid Credentials');
}
?>