<?php
include_once '../dbConnection.php';
session_start();

$class = $_POST['addClass'];
$module = $_POST['addModule'];

if (isset($_POST['addsubmit'])) 
{
$s= "select * from classmodule where class = '$class' and modules ='$module'";
$result= mysqli_query($conn,$s);
$numofrows= mysqli_num_rows($result);

if($numofrows ==1){  
    header("location:manageclassmodule.php?error=Class Name & Module Already Exists....!!!");
    echo "Class Name & Module Already Exists....!!!";    
}
else{
    $reg = "insert into classmodule (class, modules) values ('$class' , '$module')";
   mysqli_query($conn,$reg); 
    echo "Record updated successfully";
    header('location:manageclassmodule.php');
}
}

if (isset($_POST['updatesubmit'])) 
{  
    $s= "UPDATE classmodule SET modules = '$module' WHERE class = '$class'";
    $result = mysqli_query($conn,$s);  
    echo "Record successfully ";
    header('location:manageclassmodule.php');
}


if (isset($_POST['deletesubmit'])) 
{  
    $count = "select * from classmodule where class = '$class' and modules ='$module'";
    $result = mysqli_query($conn,$count);
    $numofrows= mysqli_num_rows($result);
    if($numofrows ==1){ 
    $s= "DELETE from classmodule WHERE class = '$class' and modules ='$module'";
    mysqli_query($conn,$s);  
    echo "Record Deleted successfully";
    header('location:manageclassmodule.php?success=Record deleted successfully');
    }
    else{
    header('location:manageclassmodule.php?error=Record doesnot exist.'); 
    }
}

?>