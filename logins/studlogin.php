<html>
<title>Student Administration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
<body>
    <div class="loginarea" >
    <img src="avatar.png" class="avatar" >
        <h1> Student Login</h1>
        <form action="studloginquery.php" method="post">
        <p> Username</p>
            <input type="text" id="uname" name="uname"class="uname" placeholder="Enter Username">
        <p> Password</p>
            <input type="password" id="pwd" name="pwd" class="pwd" placeholder="Enter Password"><br><br>
            <input type="submit" id="submit" name="submit" class="submit" value="Login">
            <a href="../index.php"> Change Avatar or Go back to Home Page</a><br>
        <a href="studresetpwd.php"> Forgot Password?</a><br>
        <a href="studsignup.php"> Don't have account? Create one</a>
        </form>
    </div>
</body>
</html>