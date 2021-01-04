<html>
<title>Student Administration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
<body>
    <div class="loginarea" >
    <img src="avatar.png" class="avatar" >
        <h1> Lecturer Login</h1>
        <form action="lectloginquery.php" method="post">
        <p> Username</p>
            <input type="text" id="username" class="username" name="uname" placeholder="Enter Username">
        <p> Password</p>
            <input type="password" id="password" class="password" name="pwd" placeholder="Enter Password"><br><br>
            <input type="submit" id="login" class="login" name="submit" value="Login">
            <a href="../index.php"> Change Avatar or Go back to Home Page</a><br>
        <a href="#"> Forgot Password?</a><br>
        <a href="lectsignup.php"> Don't have account? Create one</a>
        </form>
    </div>
</body>
</html>