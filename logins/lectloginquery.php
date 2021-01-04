<html>
<body>

<form action="new 1.php" method="post">
Total Day: <input type="text" name="name"><br>

<input type="submit">
</form>

</body>
</html>
<?php
include_once '../dbConnection.php';
session_start();

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
}

$s= "select * from lectlogin where username = '$uname' and password= '$pwd'";
$result= mysqli_query($conn,$s);
$numofrows= mysqli_num_rows($result);

if($numofrows ==1){ 
    $_SESSION['lectusername']=$uname;
    header("location:lecthome.php");    
}
else{    
    header('location:lectlogin.php?error=Invalid Credentials');
}
?>