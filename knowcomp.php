<?php
session_start();

if(!(isset($_SESSION['id']))){
    header("Location:login.php");
}
?>
<!doctype html>  
<html>  
<head>  
<title>Change Complaint Status</title>  
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
    color: palevioletred;  
    font-family: cursive;  
    font-size: 30px;
    color:#DAA520;  
      
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
</head>  
<body>  
      <h3><?php echo" User ID:";print_r($_SESSION['id']);?></h3> 
      <h2><a href="member.php">Main Menu</a></h2>
    <h2><a href="login.php">Logout</a></h2>  
    <center><h1>Find Complaint Status</h1></center>  
 <center>    
<form action="" method="POST">  
    <legend>  
    
         
Complaint_Id: <input type="text" name="comp_id"><br />   
<input type="submit" value="Submit" name="submit" />  
              
          
        </legend>  
</form> 
</center>
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['comp_id'])) {  
    $comp_id=$_POST['comp_id'];  
    $con=mysqli_connect("localhost","root","") or die(mysql_error());  
    mysqli_select_db($con,"project") or die("cannot select DB");  
  
    $q=mysqli_query($con,"SELECT status FROM complaint WHERE comp_Id ='".$comp_id."'");
    
     $numrows=mysqli_num_rows($q);

    if($numrows!=0) 
    {
    while ($row = $q->fetch_row()) {
    echo "Complaint_ID $comp_id has Status-> ";
        print_r($row[0]);
        echo "<br>";
    }
    
   }
   else
   {
    echo "No such complaint with Complaint_ID $comp_id found!";
   }
}
}
?>

</body>  
</html>