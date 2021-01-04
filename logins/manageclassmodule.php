
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
table{
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
}
 #table1{
    width:350px;
    height:60%;
    background : transparent;
    margin-left:30px;
    overflow:auto;
    margin-top:-20px;
 }
 #updatetable{
     float:right;
     background:transparent;
     width:400px;
     height:70%;
     margin-top:-430px;
     margin-right:30px;
 }   

 #addClass{
        width:400px; 
        background:transparent;       
        
    }
        #addModule{
        width:400px;
        background:transparent;
        
    }

    #updatetable #addsubmit {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  
    background-color:#00b300;
    width:250px; 
     margin-right:95px;
     margin-top:20px; 
     float:right;  
     color: white;              
     font-family:Roboto;
     text-decoration:none;
     display: inline-block;
     border:#00b300; 
     border-radius:12px;
     font-size:16px; 
     padding:6px 12px;
     cursor:pointer;
}
  #updatetable   #addsubmit:hover{
  background-color:#66abff;
  background-image:none;
}

#updatetable #updatesubmit {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  
    background-color:#FF8800;
    width:250px; 
     margin-right:95px;
     margin-top:20px; 
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

#updatetable #deletesubmit {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  
    background-color:#fb2525;
    width:250px; 
     margin-right:95px;
     margin-top:20px; 
     float:right;  
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
  #updatetable   #deletesubmit:hover{
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
    $s= "select * from classmodule ";
    $result= mysqli_query($conn,$s);
    echo "<table id='classmodule' name='classmodule'><tr><th>Class</th><th>Module</th></tr>";
    while($row = $result->fetch_assoc()){
    echo "<tr><td >".$row["class"]."</td><td>".$row["modules"]."</td></tr>";
    } 
    echo "</table>";
    ?>
 </div>
 
 <div id="updatetable">
 <label style="font-size:18px;float:left;margin-left:-30px;margin-top:10px;font-weight:bold;"> <u>Add/Update/Delete Classes & Modules</u> </label><br><br><br>
 <form action="classmodulequery.php" method="post">
 <label style="float:left;margin-left:10px;color:black;"><b>Class :</b></label><br><br>
<input type="text" class="w3-input" id="addClass" name ="addClass" style="margin-top:-40px;width:250px;float:left;margin-left:30px;"><br><br><br>
<label style="float:left;margin-left:10px;color:black;"><b>Module :</b> </label><br>
<input type="text" class="w3-input" id="addModule" name ="addModule" style="margin-top:-15px;width:250px;float:left;margin-left:30px;"><br><br><br>
<input type="submit" name="addsubmit" id="addsubmit" value="Add Details" >
<input type="submit" name="updatesubmit" id="updatesubmit" value="Update Details"  >
<input type="submit" name="deletesubmit" id="deletesubmit" value="Delete Details" >
</form>

</div>
</div>
</div>
</body>
</html>