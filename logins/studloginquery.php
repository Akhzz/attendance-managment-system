<?php
include_once '../dbConnection.php';
session_start();

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
}

$s= "select * from studlogin where username = '$uname' and password= '$pwd'";
$result= mysqli_query($conn,$s);
$numofrows= mysqli_num_rows($result);

if($numofrows ==1){ 
    $_SESSION['studusername']=$uname;
    $_SESSION['studname']=$name;
    header("location:studhome.php");    
}
else{    
    header('location:studlogin.php?error=Invalid Credentials');
}
?>