
<?php
session_start();
if(!isset($_SESSION['studusername'])){
    header('location:atudlogin.php');
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
        background:#483663;
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
        background: url(studattenda.jpg);
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
    <a href="studhome.php"><button id="logout"> Home</button></a><br><br>
    <img src="avatar.png" id="avatar" ><br>
    <label style="color:black;margin-right:7px;margin-top:-30px;"><br><?php echo $_SESSION['studusername']; ?> </label><br><br><br><br><br><br><br><br><br><br>
    <p id="chooseavatar" style="margin-left:50px;font-size:30px;font-family:Open Sans"> Fill in details and log you attendace</p>
    <form action="logstudattendquery.php" method="POST">
    <div id="fillin">
    <label style="float:left;color:black;margin-top:20px;font-weight:bold;"> Class : </label>
    <select class="w3-input" id="chooseClass" name ="chooseClass" style="margin-left:160px;border-bottom:1px solid grey;margin-top:10px;width:250px;width:200px;background:transparent;">
    <?php 
    include_once '../dbConnection.php';     
    $s= "select DISTINCT(class) from classmodule group by class";    
    $result= mysqli_query($conn,$s);
        while ($row=mysqli_fetch_array($result)){
            echo '<option value="'.$row["class"].'">';
            echo $row["class"]; 
            echo "</option>";
        }    
    ?>
    </select><br><br><br>
    <label style="float:left;color:black;font-weight:bold;"> Module : </label>
    <select class="w3-input" id="chooseModule" name ="chooseModule" style="margin-left:160px;border-bottom:1px solid grey;margin-top:-25px;width:250px;width:200px;background:transparent;">
    <?php 
    include_once '../dbConnection.php';
     
    $s= "SELECT DISTINCT(modules) FROM classmodule group by modules";    
    $result= mysqli_query($conn,$s);
        while ($row=mysqli_fetch_array($result)){
            echo '<option value="'.$row["modules"].'">';
            echo $row["modules"]; 
            echo "</option>";
        }    
    ?>
</select><br><br><br>
    <label style="float:left;color:black;font-weight:bold;"> Today's Date : </label>
    <input type="date" id="chooseDate" name="chooseDate" value="<?php echo date('Y-m-d'); ?>" readonly style="background:transparent;margin-left:170px;border-bottom:1px solid grey;margin-top:-15px;"/>
        
    <br><br><br><input type="submit" id="logattend" class="logattend" name="logattend" value="Record Attendace"><br><br><br>
</form>

</div>   
   
</div>
</div>
</body>
</html>