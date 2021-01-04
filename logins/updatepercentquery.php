<?php
include_once '../dbConnection.php';
session_start();

$uname = $_POST['username'];
$percent = $_POST['percent'];
$class = $_POST['class'];




if (isset($_POST['updatesubmit']) and isset($_POST['percent']) and isset($_POST['username']) and isset($_POST['class'])) 
{ 
$count = "select * from recordattend where class='$class' and username='$uname'";
$result = mysqli_query($conn,$count);
$numofrows= mysqli_num_rows($result);
$newcount = $percent-$numofrows;
while($newcount!=0){ 
    $s= "insert into recordattend (username, class, module, date,attendCount, name ) select '$uname' , '$class', 'XXXXXXXX','XXXX-XX-XX',1,name from studlogin WHERE username='$uname'";
    mysqli_query($conn,$s); 
    echo "Record successfully added";
    header('location:adjustattend.php?success=Record updated');
    $newcount = $newcount-1;
}
}
else{
    header('location:adjustattend.php?error=Record doesnot exist.');   
}


?>