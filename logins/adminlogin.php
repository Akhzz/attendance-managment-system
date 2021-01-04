<html>
<title>Student Administration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
<body>
    <div class="loginarea" >
    <img src="avatar.png" class="avatar" >
        <h1> Admin Login</h1>
        <form action="adminloginquery.php" method="post">
        <p> Username</p>
            <input type="text" id="uname" class="uname" name="uname" placeholder="Enter Username">
        <p> Password</p>
            <input type="password" id="pwd" class="pwd" name="pwd" placeholder="Enter Password"><br><br>
            <input type="submit" id="submit" class="submit" name="submit" value="Login">
            <a href="../index.php"> Change Avatar</a><br>
        <a href="#"> Forgot Password?</a><br>
        
        </form>
    </div>
</body>
</html>