<?php
?>
<html>
<title>Student Administration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
<body>
    <div class="loginarea" >
    <img src="avatar.png" class="avatar" >
        <h1> Reset Password</h1>
        <form action="studresetpwdquery.php" method="post">
        <p> Username</p>
            <input type="text" id="uname" name="uname" class="uname" placeholder="Enter Username" method="post">
        <p> Enter New Password</p>
            <input type="password" id="pwd" name="pwd" class="pwd" placeholder="Enter New Password" method="post"><br><br><br>
            <input type="submit" id="submit" name="submit" class="submit" value="Reset" style="margin-top:-20px;">
            <a href="studlogin.php" ><p style="margin-top:1px;"> Go back to login page</p></a><br>
        
        </form>
    </div>
</body>
</html>
