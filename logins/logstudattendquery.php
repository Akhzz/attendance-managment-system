<?php
include_once '../dbConnection.php';
session_start();

if (isset($_POST['logattend'])) {
$class = $_POST['chooseClass'];
$module = $_POST['chooseModule'];
$date = $_POST['chooseDate'];
$uname = $_SESSION['studusername'];
}

echo '<script>console.log('.$_SESSION['studusername'].')</script>';

$s= "select * from recordattend where username = '$uname' and class='$class' and module='$module' and date='$date'";
$result= mysqli_query($conn,$s);
$numofrows= mysqli_num_rows($result);

if($numofrows ==1){  
    header("location:logstudattend.php?error=Attendace already recorded for today's class, module & date");
    
}
else{
    
    $reg = "insert into recordattend (username, class, module, date,attendCount, name ) select '$uname' , '$class', '$module','$date',1,name from studlogin WHERE username='$uname'";
    mysqli_query($conn,$reg); 
    echo "username success";
    echo '<script>alert("Attendance recorded successfully.")</script>';
    header('location:logstudattend.php?success=Attendance recorded successfully.');
}
?>