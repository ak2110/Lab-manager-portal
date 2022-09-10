<?php
session_start();

if(!(isset($_SESSION['id']))){
    header("Location:labman1.php");
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
     background-image: 
        url("p.jpg");
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
        
        h1 {  
    color:#F0FFFF;
    font-family: Cursive;
    font-size:40px; 
    text-shadow:3px 2px #2F4F4F; 
      
}  
    a{
        color:#DAA520;

    }
    a{
        color:#daa520;
    }
    h3{margin-top: 10px;
        text-align:right;
        font-family: serif;
        color: white;
        font-size: 30px;
    }
    h2{
        text-align:right;
         font-size: 30px;
    }
           </style> 
           <h3><?php echo" User ID:";print_r($_SESSION['id']);?></h3> 
    <h2><a href="login.php">Logout</a></h2>   
<h1>Lab Manager Portal</h1>
<br>

<p>
<a href="labman3.php">Add System Information</a>
</p>

<p>
<a href="labman4.php">Know about Complaints</a>
</p>

<p>
<a href="labman5.php">Change complaint status</a>
</p>

</body>
</html>


