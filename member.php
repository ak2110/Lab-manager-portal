<?php
session_start();

if(!(isset($_SESSION['id']))){
    header("Location:login.php");
}
?>

<html>
<head>
</head>
<title>
	Computer System Management Portal
</title>
<body>
	 <style>   
        body{  
     background-image: url("p.jpg");
    background-repeat:no-repeat;
    
    background-size:cover;         
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color:lightblue ;  
    color: palevioletred;  
    font-family: cursive;  
    font-size: 30px;  
      
        } 
        
        h2 {  
    color:#F0FFFF;
    font-family: Cursive;
    font-size:40px; 
    text-shadow:3px 2px #2F4F4F; 
      
}  

h1{
    font-size:30px;
    font-family: serif;
    text-align: right;
    

}
    h3{
    font-size:30px;
    font-family: serif;
    text-align: right;
    color:white;
    

}
   
    a{
             color:#DAA520;
    }

           </style>
 <h3><?php echo" User ID:";print_r($_SESSION['id']);?></h3>           
 <h1><a href="login.php">Logout</a></h1>       
<h2> COMPUTER SYSTEM ENQUIRY PORTAL</h2>
<p>
<a href="system.php" >System Enquiry</a>
</p>

<p>
<a href="comp.php">Register Complaint</a>
</p>
<p>
<a href="knowcomp.php" >Know about your Complaint</a>
</p>


</body>
</html>


