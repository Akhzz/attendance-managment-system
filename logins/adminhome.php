
<?php
session_start();
if(!isset($_SESSION['adminusername'])){
    header('location:adminlogin.php');
}
?>

<html>
<title>Student Administration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
    #thisbody{
        background:white;
    }

    .sideleft{
        background:#285371;
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
        background: url(hr.jpg);
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
    margin-top:-40px;
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

#manageclassmodule {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  
    background-color:#fb2525;
    width:350px; 
     margin-left:35%;
     margin-top:10px; 
     float:left;  
     color: white;              
     font-family:Roboto;
     text-decoration:none;
     display: inline-block;
     border:#fb2525; 
     border-radius:12px;
     font-size:16px; 
     padding:6px 12px;
     cursor:pointer;
}
  #manageclassmodule:hover{
  background-color:#66abff;
  background-image:none;
}

#adjustattend {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  
    background-color:#FF8800;
    width:350px; 
    margin-left:35%;
     margin-top:20px; 
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
  #adjustattend:hover{
  background-color:#66abff;
  background-image:none;
}

</style>    
<body id="thisbody">
<div class="studhomepage">
    <div class="sideleft">
    <img src="../ruskinlogo1.png" class="ruskinlogo">
    <label style="font-size:20px;"> Welcome to <br>Student Administration System </label><br><br><br><br><br><br><br><br><br>
    
    <label style="font-size:35px; margin-left:20%;"> Admin Portal </label>
    <label style="font-size:13px; margin-left:15%;margin-top:-10px;"> Manage Class, Modules & Student Records </label>
    <hr style="color:#e6e6e6;  margin-top:150px;"><br><br><br>
    <img src="attend.png" id="attend" >
    <label style="font-size:20px;margin-right:0px;margin-top:5px;"> A Smart Attendance Portal </label>
    <label style="font-size:12px;margin-top:-25px;margin-left:95px;">Alter Classes & Modules, Update attendace</label><br><br><br>
</div>
<div class="sideright">
    <a href="adminlogout.php"><button id="logout"> Logout</button></a><br><br>
    <img src="avatar.png" id="avatar" ><br>
    <label><br><?php echo $_SESSION['adminusername']; ?> </label><br><br><br><br><br><br><br><br><br><br>
    <p id="chooseavatar" style="margin-left:50px;font-size:30px;font-family:Open Sans"> Select your option to proceed</p>
        <form action="manageclassmodule.php"><input type="submit" id="manageclassmodule" class="manageclassmodule" value="Manage Classes & Modules"><br><br><br></form>
        <form action="adjustattend.php"><input type="submit" id="adjustattend" class="adjustattend" value="Adjust Attendance"><br><br><br></form>
   
</div>
</div>
</body>
</html>