<?php
session_start();

if(!(isset($_SESSION['id']))){
    header("Location:labman1.php");
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
    color:#DAA520 ;  
    font-family: Cursive;  
    font-size: 30px;
    
      
        } 
        
    h1 {  
    color:#F0FFFF;
    font-family: Cursive;
    font-size:40px; 
    text-shadow:3px 2px #2F4F4F;  
}


        a{
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
</head>  
<body>  
       <h3><?php echo" User ID:";print_r($_SESSION['id']);?></h3> 
    <h2><a href="labman2.php">Main Menu</a></h2>
    <h2><a href="login.php">Logout</a></h2>  
    <center><h1>Know About Complaint</h1></center>  
<center>
<form action="" method="POST">  
    <legend>  
    
Complaint_Id: <input type="text" name="comp_id"><br />   
<input type="submit" value="Submit" name="submit" />  
<p><a href="all.php" > View all complaints </a ></p>           
          
        </legend>  
</form> 
</center>
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['comp_id'])) {  
    $comp_id=$_POST['comp_id'];  
    $con=mysqli_connect("localhost","root","") or die(mysql_error());  
    mysqli_select_db($con,"project") or die("cannot select DB");  
  
     $query=mysqli_query($con,"SELECT * FROM complaint WHERE comp_Id ='".$comp_id."'");

            $row=mysqli_fetch_assoc($query);
            $numrows=mysqli_num_rows($query);  
            if($numrows==0){
                 echo "No such complaint with Complaint_ID $comp_id found!";
            }  
    else 
    {
    echo "Complaint_ID $comp_id has Status-> ";
        print_r($row['status']);
        echo"<br>";
        echo " Is filed by->";
        print_r($row['reg_no']);
        echo "<br>";
        echo" With remarks-> ";
        print_r($row['remark']);
    }
}
}
?>

</body>
</html>