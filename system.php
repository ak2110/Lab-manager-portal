<?php
session_start();
?>

<html>
<head>
</head>
<title>
SYSTEM ENQUIRY 
</title>

<body>
<style>   
        body{  
    background-image: 
    	url("p11.jpeg");
    background-repeat:no-repeat;
    background-size:1400px 700px;	          
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color:lightblue ;  
    color:#DAA520;  
    font-family: Cursive;  
    font-size: 30px;
    
      
        } 
        a{
        	color:#F0FFFF;
        }


            h1 {  
    color:#F0FFFF;
    font-family: Cursive;
    font-size:40px; 
    text-shadow:3px 2px #2F4F4F;
    text-align: :center; 
      
}  a{
        color:#daa520;
    }
    h3{margin-top: 10px;
        text-align:right;
        font-family: serif;
        color: black;
        font-size: 30px;
    }
    h2{
        text-align:right;
         font-size: 30px;
    }
        
</style>
<center> 
<h3><?php echo" User ID:";print_r($_SESSION['id']);?></h3> 
<h2><a href="member.php">Main Menu</a></h2>
    <h2><a href="login.php">Logout</a></h2>    
<h1>SYSTEM ENQUIRY PORTAL </h1>
	<br>
 <form action="system_out.php" method="POST">
  
   
    System number:<input type="number" name="Sys_no" ><br/><br>
    
    <input type="submit" name="Submit" value="Submit">
 
</form> 

</center>

</body>

</html>