
<?php
session_start();
if(!isset($_SESSION['adminusername'])){
    header('location:adminlogin.php');
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
    input:focus {
     outline:none;
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
    .sideright #submit{
        border: none;
    background-color: inherit;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    display: inline-block;
    }

    .sideright #submit:hover{
    cursor: pointer;
    color: lightgrey;
}
#t02 table{
  border: 1px solid black;
  border-collapse:separate;
  font-family: "Open Sans"; 
}
td{
    width:150px;
    text-align:center;
}
th{
    background-color: #285371; 
    color: lightgrey;
}
td{
    background-color: #d9e8f2;
    font-size: 14px;
    width : 210;
}
 #table1{
    width:95%;
    height:30%;
    background : transparent;
    margin-left:20px;
    overflow:auto;
    margin-top:-20px;
 }
    #updatetable{
        margin-left:10px;
        background:transparent;
        margin-top:10px;
        width:95%;
        height:35%;
        
        
    }

 #username{
        width:400px; 
        background:transparent;       
        
    }
        #percent{
        width:400px;
        background:transparent;
        
    }
    #class{
        width:400px;
        background:transparent;
        
    }

#updatetable #updatesubmit {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  
    background-color:#FF8800;
    width:250px; 
     margin-right:200px;
     margin-top:-50px; 
     float:right;  
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
  #updatetable   #updatesubmit:hover{
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
    <a href="adminhome.php"><button id="logout"> Home</button></a><br><br>
    <img src="avatar.png" id="avatar" ><br>
    <label style="margin-right:10px;"><br><?php echo $_SESSION['adminusername']; ?> </label><br><br>
    <label style="font-size:30px;float:left;margin-left:30px;font-weight:bold;"> Manage Classes & Modules </label>
    <hr style="color:#e6e6e6;  float:right;margin-right:30px;width:900px;margin-top:-10px;"><br><br><br>
    
    <label style="font-size:18px;float:left;margin-left:30px;margin-top:-10px;font-weight:bold;"><u> List of Classes & Modules </u></label><br><br>
    <div id="table1">
    <?php 
    include_once '../dbConnection.php';       
    $s= "select distinct username,name,class,COUNT(username) from recordattend group by username,class";
    $result= mysqli_query($conn,$s);
    echo "<table id='t02'''><tr><th>Student User Id</th><th>Student Name</th><th>Class</th><th>Class Count per Student</th></tr>";
    while($row = $result->fetch_assoc()){
    echo "<tr><td >".$row["username"]."</td><td>".$row["name"]."</td><td >".$row["class"]."</td><td>".$row["COUNT(username)"]."</td></tr>";        
    } 
    echo "</table>";
    ?>    
 </div>
 <div id="updatetable">
 <form action="updatepercentquery.php" method="post">
 <label style="font-size:18px;float:left;margin-left:10px;margin-top:10px;font-weight:bold;"> <u>Adjust Class Count </u> </label><br><br><br>
 <label style="float:left;margin-left:30px;color:black;"><b>Student User Id :</b></label><br><br>
<input type="text" class="w3-input" id="username" name ="username" style="margin-top:-40px;width:250px;float:left;margin-left:50px;">
<label style="float:right;margin-right:450px;margin-top:-60px;color:black;"><b>Class :</b> </label><br>
<input type="text" class="w3-input" id="class" name ="class" style="margin-top:-60px;width:250px;float:right;margin-right:220px;"><br><br><br>
<label style="float:left;margin-left:30px;margin-top:-60px;color:black;"><b>Updated Class Count :</b> </label><br>
<input type="text" class="w3-input" id="percent" name ="percent" style="margin-top:-60px;width:250px;float:left;margin-left:50px;">
<input type="submit" name="updatesubmit" id="updatesubmit" value="Update Details" >
</form>

</div>
</div>
</body>
</html>