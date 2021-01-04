<html>
<title>Student Administration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
<body>
    <div class="loginarea" >
    <img src="avatar.png" class="avatar" >
        <h1> Manager Login</h1>
        <form action="managerloginquery.php" method="post">
        <p> Username</p>
            <input type="text" id="username" name="uname" class="username" placeholder="Enter Username">
        <p> Password</p>
            <input type="password" id="password" name="pwd" class="password" placeholder="Enter Password"><br><br>
            <input type="submit" id="login" name ="submit" class="login" value="Login">
            <a href="../index.php"> Change Avatar or Go back to Home Page</a><br>
        <a href="#"> Forgot Password?</a><br>
        <a href="managersignup.php"> Don't have account? Create one</a>
        </form>
    </div>
</body>
</html>