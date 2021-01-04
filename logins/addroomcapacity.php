<?php
session_start();
if(!isset($_SESSION['managerusername'])){
    header('location:managerlogin.php');
}
?>

<html>
<title>Student Administration System</title>
<style>
    #thisbody{
        background:white;
    }
    input:focus {
     outline:none;
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
    background-color: #006600; 
    color: lightgrey;
}
td{
    background-color: #e6ffe6; 
}
 #table1{
    width:350px;
    height:60%;
    background : transparent;
    margin-left:10px;
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

 #addRoom{
        width:400px; 
        background:transparent; 
        border-bottom: white;      
        
    }
        #addCapacity{
        width:400px;
        background:transparent;
        
    }

    #updatetable #addsubmit {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  
    background-color:#483663;
    width:250px; 
     margin-right:95px;
     margin-top:20px; 
     float:right;  
     color: white;              
     font-family:Roboto;
     text-decoration:none;
     display: inline-block;
     border:#483663; 
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
    
    <label style="font-size:35px; margin-left:20%;"> Manager Portal </label>
    <label style="font-size:13px; margin-left:15%;margin-top:-10px;"> Manage Class, Modules & Student Records </label>
    <hr style="color:#e6e6e6;  margin-top:150px;"><br><br><br>
    <img src="attend.png" id="attend" >
    <label style="font-size:20px;margin-right:0px;margin-top:5px;"> A Smart Attendance Portal </label>
    <label style="font-size:12px;margin-top:-25px;margin-left:95px;">Alter Classes & Modules, Update attendace</label><br><br><br>
</div>
<div class="sideright">
    <a href="managerhome.php"><button id="logout"> Home</button></a><br><br>
    <img src="avatar.png" id="avatar" ><br>
    <label style="margin-right:10px;color:black;"><br><?php echo $_SESSION['managerusername']; ?> </label><br><br>
    <label style="font-size:30px;float:left;margin-left:30px;font-weight:bold;color:black;"> Manage Classes & Capacity </label>
    <hr style="border:0.2px solid black;  float:right;margin-right:30px;width:900px;margin-top:-10px;"><br><br><br>
    
    <label style="font-size:18px;float:left;margin-left:30px;margin-top:-10px;font-weight:bold;color:black;"><u> List of Rooms & its Capacities </u></label><br><br>
    <div id="table1" >
    <?php 
    include_once '../dbConnection.php';       
    $s= "select * from classcapacity ";
    $result= mysqli_query($conn,$s);
    echo "<table id='classcapacity' name='classcapacity'><tr><th>Class</th><th>Capacity</th></tr>";
    while($row = $result->fetch_assoc()){
    echo "<tr><td >".$row["class"]."</td><td>".$row["capacity"]."</td></tr>";
    } 
    echo "</table>";
    ?>
 </div>
 
 <div id="updatetable">
 <label style="font-size:18px;float:left;margin-left:-30px;margin-top:10px;font-weight:bold;color:black;"> <u>Add/Update/Delete Rooms & Capacity</u> </label><br><br><br>
 <form action="manageroomusagequery.php" method="post">
 <label style="float:left;margin-left:10px;color:black;"><b>Room :</b></label>
 <select class="w3-input" id="addRoom" name ="addRoom" style="float:right;margin-right:176px;border-bottom:1px solid black;margin-top:20px;width:250px;width:200px;background:transparent;">
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
    </select><br><br><br><br>
<label style="float:left;margin-left:10px;color:black;"><b>Capacity :</b> </label><br>
<input type="text" class="w3-input" id="addCapacity" name ="addCapacity" style="margin-top:-15px;width:200px;float:left;margin-left:30px;border-bottom:1px solid black;"><br><br><br>
<input type="submit" name="addsubmit" id="addsubmit" value="Add Details" >
<input type="submit" name="updatesubmit" id="updatesubmit" value="Update Details"  >
<input type="submit" name="deletesubmit" id="deletesubmit" value="Delete Details" >
</form>

</div>
</div>
</div>
</body>
</html>