<?php
session_start();
if(!isset($_SESSION['managerusername'])){
    header('location:managerlogin.php');
}
?>

<html>
<body>

<link rel="stylesheet" type="text/css" href="style.css">    
<form method="post" action="">

<table align="center">
<td>

Total Working Days<input type="text" name="mbv"></td>
<td>
<input type="submit">
</td>

</form>

</body>

</html>
<?php
	 ini_set('display_errors',0);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "studsystem";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$n=$_POST["mbv"];
	
	$sql = "SELECT name, class, module FROM recordattend WHERE attendCount<$n";
	$result = $conn->query($sql);
	if($sql=True)
	{
		if ($result->num_rows > 0)
			{
		// output data of each row
				while($row = $result->fetch_assoc())
					{
						echo $row["name"]. "  " . $row["class"]. " " . $row["module"]. "<br>";
					}
			} 
		else
			{
				echo "0 results found";
			}
	$conn->close();
	}
?>
