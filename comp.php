<?php
session_start();

if(!(isset($_SESSION['id']))){
    header("Location:login.php");
}
?>

<!doctype html>  
<html>  
<head>  
<title>Add System Entry</title>  
    <style>   
        body{  
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-image: 
        url("p11.jpeg");
    background-repeat:no-repeat;
    background-size:1400px 900px;              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color:lightblue ;  
    color:#DAA520;  
    font-family: Cursive;  
    font-size: 30px;
      
        }  
            h1 {  
    color:#F0FFFF;
    font-family: Cursive;
    font-size:40px; 
    text-shadow:3px 2px #2F4F4F;
    text-align: center;  
}  
        
    h4{
        font-family: cursive;
        color:#7FFF00;
        font-size: 20px;
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
    <h2><a href="member.php">Main Menu</a></h2>
    <h2><a href="login.php">Logout</a></h2>   
    <center><h1>Register Complaint</h1></center>  
<form action="comp.php" method="POST">
<center>  
    <legend>  
     
          
Registration_No.: <input type="text" name="regno"><br />
System_Id.: <input type="text" name="sysid"><br />
Type_Id.: <input type="text" name="typeid"><br />
Remark: <input type="text" name="remark"><br />

<input type="submit" value="Submit" name="submit" />


              
         
        </legend>  
</form> 
</center>
<h4> 
Note:
<br></br>
for Type_Id use 1 for hardware and 2 for software
</h4>
<?php  
if(isset($_POST["submit"])){ 

if(!empty($_POST['sysid']) && !empty($_POST['regno']) && !empty($_POST['typeid'])  &&!empty($_POST['remark'])) {  
if($_SESSION['id']!=$_POST['regno']){echo "Invalid access.Can't register complaint.";}
    
    else{ 
    
    $sys_id=$_POST['sysid'];
    $regno=$_POST['regno'];
    $typeid=$_POST['typeid'];
    $remark=$_POST['remark'];

    $con=mysqli_connect("localhost","root","") or die(mysql_error());  
    mysqli_select_db($con,"project") or die("cannot select DB");  
    
   
     
  
    $result=mysqli_query($con,"INSERT INTO complaint(status,reg_no,sys_Id,type_Id,remark) VALUES ('NC','$regno','$sys_id','$typeid','$remark')");
    //$numrows=mysqli_num_rows($result);   
        if($result!=0){  
    echo "Entry Successfully Created";
    $r= mysqli_query($con,"Select comp_Id from complaint where sys_Id='".$sys_id."'");
    $rr=$r->fetch_row();
    echo "<br>";
    echo "your complaint id is:";
    print_r($rr[0]);
    } else {  
    echo "Failure!"; 
    }  
    }}
    else {  
    echo "All fields are required!"; }
}
?>  

</body>  
</html>
