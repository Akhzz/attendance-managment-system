
<?php
session_start();
if(!isset($_SESSION['studusername'])){
    header('location:studlogin.php');
}
?>

<html>
<title>Student Administration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
<body>
<div class="studhomepage">
<a href="studlogout.php"><button id="logout"> Logout</button></a><br><br>
   <p> Welcome <?php echo $_SESSION['studusername']; ?> </p>
</div>
</body>
</html>