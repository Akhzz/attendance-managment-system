<?php
?>
<html>
<title>Student Administration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
<body>
    <div class="loginarea" >
    <img src="avatar.png" class="avatar" >
        <h1> Student SignUp</h1>
        <form action="studsignupquery.php" method="post">
        <p> Name</p>
            <input type="text" id="name" name="name" class="name" placeholder="Enter Name " method="post">
        <p> Username</p>
            <input type="text" id="uname" name="uname" class="uname" placeholder="Enter Username" method="post">
        <p> Password</p>
            <input type="password" id="pwd" name="pwd" class="pwd" placeholder="Enter Password" method="post"><br><br>
            <input type="submit" id="submit" name="submit" class="submit" value="Sign Up " style="margin-top:-20px;">
            <a href="studlogin.php" ><p style="margin-top:-13px;"> Go back to login page</p></a><br>
        
        </form>
    </div>
</body>
</html>
