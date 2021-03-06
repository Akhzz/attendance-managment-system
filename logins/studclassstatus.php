
<?php
session_start();
if(!isset($_SESSION['managerusername'])){
    header('location:managerlogin.php');
}
?>

<html>
<title>Student Administration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<script type="text/javascript" src= 
        "https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" > 
        </script>
<style>
    #thisbody{
        background:white;
    }

    .sideleft{
        background:#006600;
        height:100%;
        width:30%;
    }
    .sideright label{
        text-align: center;   
        padding: 0 0 20px;
        color: #fff;
        font-family: "Montserrat";
        font-size: 17px;
        text-shadow: 0 0 10px 4px;
        float:right;
        margin-right:-190px;
        margin-top:-15px;
        
    }

    .sideright #avatar{
        float:right;
        width : 40px;
        height : 40px;
        border-radius: 50%;
        left: calc(50% - 50px);
        margin-top:-20px;
        margin-right:10px;
    }
    
    .sideright{
        float:right;
        margin:0;
        padding:0;
        background: url(manageimg.jpg);
        background-size: cover;
        background-position: center;
        height:100%;
        width:70%;
        margin-top:-657px;
        
        
    }

    .sideleft label{
        text-align: center;   
        padding: 0 0 20px;
        color: lightgrey;
        font-family: "Open Sans";
        font-size: 40px;
        text-shadow: 0 0 10px 4px;
        float:left;
        margin-left:10px;
        margin-top:15px;
    }
    .ruskinlogo{
        width : 60px;
        height : 60px;
        border-radius: 50%;
        float:left;
        margin-top:10px;
        margin-left:10px;        
    }

    .sideleft #attend{
        width : 60px;
        height : 60px;
        float:left;
        margin-left:25px;
        
    }

.sideright #assignmenttitle{    
    text-align: center;   
    padding: 0 0 20px;
    font-weight: bold;
    color: #ffff66;
    font-family: "Montserrat";
    font-size: 50px;
    
}

.sideright #chooseavatar{    
    text-align: center;   
    padding: 0 0 20px;
    font-weight: bold;
    color: #000;
    font-family: "Montserrat";
    font-size: 25px;
    margin-top:-240px;
}

.sideright input[type="submit"]{
    border: 2px solid white;
    outline: none;
    height: 40px;
    background: transparent;
    color: white;
    font-size: 18px;
    border-radius: 20px;
    width:500px;
    margin-left:23%;
    margin-top:-30px;
}

.sideright input[type="submit"]:hover{
    cursor: pointer;
    background: #0474ff;
    color: #000;
}

#logattend {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  
    background-color:#FF8800;
    width:200px; 
     margin-left:20%;
     margin-top:10px; 
     float:left;  
     color: white;              
     font-family:Roboto;
     text-decoration:none;
     display: inline-block;
     border:#FF8800; 
     border-radius:12px;
     font-size:16px; 
     padding:6px 12px;
     cursor:pointer;
}
  #logattend:hover{
  background-color:#66abff;
  background-image:none;
}

#fillin{
    background:transparent;
    float:left;
    width : 90%;
    height: 70%;
    margin-left:30px;
}
select:focus {
             outline:none;
        }

        table{
  border: 1px solid black;
  border-collapse:separate;
  font-family: "Open Sans"; 
}
td{
    width:150px;
    background-color: #e6ffe6; 
    text-align:center;
}
th{
    background-color: #006600; 
    color: lightgrey;
}

 #table1{
    width:470px;
    height:60%;
    background : transparent;
    margin-left:30px;
    overflow:auto;
    margin-top:-20px;
 }

 #table2{
    width:470px;
    height:60%;
    background : transparent;
    margin-right:-90px;
    overflow:auto;
    margin-top:-440px;
    float:right;
 }


</style>    
<body id="thisbody">
<div class="studhomepage">
    <div class="sideleft">
    <img src="../ruskinlogo1.png" class="ruskinlogo">
    <label style="font-size:20px;"> Welcome to <br>Student Administration System </label><br><br><br><br><br><br><br><br><br>
    
    <label style="font-size:35px; margin-left:20%;"> Student Portal </label>
    <label style="font-size:13px; margin-left:15%;margin-top:-10px;"> Record your attendance. View overall reports </label>
    <hr style="color:#e6e6e6;  margin-top:150px;"><br><br><br>
    <img src="attend.png" id="attend" >
    <label style="font-size:20px;margin-right:0px;margin-top:5px;"> A Smart Attendance Portal </label>
    <label style="font-size:12px;margin-top:-25px;margin-left:95px;">Select Classes & Modules, Record attendace</label><br><br><br>
</div>
<div class="sideright">
    <a href="managerhome.php"><button id="logout"> Home</button></a><br><br>
    <img src="avatar.png" id="avatar" ><br>
    <label style="color:black;margin-right:7px;margin-top:-30px;"><br><?php echo $_SESSION['managerusername']; ?> </label><br>
    <label style="font-size:30px;float:left;margin-left:30px;font-weight:bold;color:black"> View Attendance Reports </label>
    <hr style="border:0.3px solid black; float:right;margin-right:30px;width:900px;margin-top:-10px;"><br><br><br>
    
    <label style="font-size:18px;float:left;margin-left:30px;margin-top:-10px;color:black;font-weight:bold;"><u> Overall Reports </u></label><br><br>
    <div id="table1">
    <?php 
    include_once '../dbConnection.php'; 
         
    $s= "SELECT name,username, count(class) from recordattend group by username";
    $result= mysqli_query($conn,$s);
    echo "<table><tr><th>Name</th><th>Username<th>Total Classes Attended</th></tr>";
    while($row = $result->fetch_assoc()){
    echo "<tr><td >".$row["name"]."</td><td >".$row["username"]."</td><td>".$row["count(class)"]."</td></tr>";
    } 
    echo "</table>";
    ?>    
    </div>
    <label style="font-size:18px;float:left;margin-right:200px;margin-top:-430px;color:black;float:right;font-weight:bold;"><u> Reports based on Class </u></label><br><br>
    <div id="table2">
    <?php 
    include_once '../dbConnection.php';     
    $s= "select class,count(class) from recordattend group by class";
    $result= mysqli_query($conn,$s);
    echo "<table id='classmodule' name='classmodule'><tr><th>Class</th><th>Count per Class</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td >".$row["class"]."</td><td>".$row["count(class)"]."</td></tr>";   
        } 
     
    echo "</table>";
    ?>
    </div>
</div>   
   
</div>
</div>
</body>
</html>