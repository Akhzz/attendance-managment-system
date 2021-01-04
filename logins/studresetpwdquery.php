<?php
include_once '../dbConnection.php';
session_start();

if (isset($_POST['submit'])) {
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
}


$s= "UPDATE studlogin SET password = '$pwd' where username = '$uname'";
if($pwd!=""){
mysqli_query($conn,$s);
header('location:studlogin.php');
}
else{
    header('location:studresetpwd.php?error=Invalid Password');  
}

?>