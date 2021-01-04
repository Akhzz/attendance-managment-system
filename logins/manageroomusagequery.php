<?php
include_once '../dbConnection.php';
session_start();

$class = $_POST['addRoom'];
$capacity = $_POST['addCapacity'];

if (isset($_POST['addsubmit'])) 
{
$s= "select * from classcapacity where class = '$class'";
$result= mysqli_query($conn,$s);
$numofrows= mysqli_num_rows($result);

if($numofrows ==1){  
    header("location:addroomcapacity.php?error=Class Name & capacity Already Exists....!!!");
    echo "Class Name & capacity Already Exists....!!!";    
}
else{
    $reg = "insert into classcapacity (class, capacity) values ('$class' , '$capacity')";
   mysqli_query($conn,$reg); 
    echo "Record updated successfully";
    header('location:addroomcapacity.php');
}
}

if (isset($_POST['updatesubmit'])) 
{  
    $s= "UPDATE classcapacity SET capacity = '$capacity' WHERE class = '$class'";
    $result = mysqli_query($conn,$s);  
    echo "Record successfully ";
    header('location:addroomcapacity.php');
}


if (isset($_POST['deletesubmit'])) 
{  
    $count = "select * from classcapacity where class = '$class'";
    $result = mysqli_query($conn,$count);
    $numofrows= mysqli_num_rows($result);
    if($numofrows ==1){ 
    $s= "DELETE from classcapacity WHERE class = '$class'";
    mysqli_query($conn,$s);  
    echo "Record Deleted successfully";
    header('location:addroomcapacity.php?success=Record deleted successfully');
    }
    else{
    header('location:addroomcapacity.php?error=Record doesnot exist.'); 
    }
}

?>