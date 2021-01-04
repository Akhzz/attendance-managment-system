<?php
include_once '../dbConnection.php';
session_start();



if (isset($_POST['submit'])) {
$name = $_POST['name'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
}

$s= "select * from studlogin where username = '$uname'";
$result= mysqli_query($conn,$s);
$numofrows= mysqli_num_rows($result);

if($numofrows ==1){  
    header("location:studsignup.php?error=Username Already Exists....!!!");
    
}
else{
    $reg = "insert into studlogin (username, password, name) values ('$uname' , '$pwd', '$name')";
   mysqli_query($conn,$reg); 
    echo "usrname success";
    echo '<script>alert("Registration Successful")</script>';
    header('location:studlogin.php');
}
?>