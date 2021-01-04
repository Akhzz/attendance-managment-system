<?php
include_once '../dbConnection.php';
session_start();

if (isset($_POST['logattend'])) {
$group = $_POST['grpname'];
$class = $_POST['chooseClass'];
$module = $_POST['chooseModule'];
$date = $_POST['chooseDate'];
}

$s= "select * from recordattend where username = '$group' and class='$class' and module='$module' and date='$date'";
$result= mysqli_query($conn,$s);
$numofrows= mysqli_num_rows($result);

if($numofrows ==1){  
    header("location:recordgrpattend.php?error=Group Attendace already recorded for today's class, module & date");
    
}
else{
    
    $reg = "insert into recordattend (username, class, module, date,attendCount, name ) values ('$group' , '$class', '$module','$date',1,'$group')";
    mysqli_query($conn,$reg); 
    echo "username success";
    echo '<script>alert("Attendance recorded successfully.")</script>';
    header('location:recordgrpattend.php?success=Attendance recorded successfully.');
}
?>