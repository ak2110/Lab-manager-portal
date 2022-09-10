<?php
session_start();

if(!(isset($_SESSION['id']))){
    header("Location:labman1.php");
}
?>
<!doctype html>  
<html>  
<head>  
<title>Add System Entry</title>  
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
    color:#daa520 ;  
    font-family: Cursive;  
    font-size: 30px;
      
        }  
           
            h1 {  
    color:#F0FFFF;
    font-family: Cursive;
    font-size:40px; 
    text-shadow:3px 2px #2F4F4F; 
      
}  
         h4 {  
    color:#F0FFFF ;  
    font-family: cursive;  
    font-size: 30px; 
    text-align: center; 
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
    <center><h4>System Information Form</h4></center> 
    <center> 
<form action="" method="POST">  
    <legend>  
   
System_Id: <input type="text" name="sys_id"><br />  
Lab_No: <input type="text" name="lab_no"><br /> 
Software_Name: <input type="text" name="soft_name"><br />
Operating System_Name: <input type="text" name="os_name"><br /> 
<input type="submit" value="Submit" name="submit" />  
              
        
        </legend>  
</form>  
</center>
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['sys_id']) && !empty($_POST['lab_no']) && !empty($_POST['soft_name']) && !empty($_POST['os_name'])) {  
    $sys_id=$_POST['sys_id'];  
    $lab_no=$_POST['lab_no'];
    $soft_name=$_POST['soft_name'];
    $os_name=$_POST['os_name'];  
    $con=mysqli_connect("localhost","root","") or die(mysql_error());  
    mysqli_select_db($con,"project") or die("cannot select DB");  
  
    $q1=mysqli_query($con,"SELECT Soft_Id FROM software WHERE Soft_Name='".$soft_name."'");
    $row1= $q1->fetch_row(); 
    $q2=mysqli_query($con,"SELECT OS_Id FROM os WHERE OS_Name='".$os_name."'");
    $row2 = $q2->fetch_row();
    //$query=mysqli_query($con,"SELECT * FROM  WHERE Reg_ID='".$user."' AND Password='".$pass."'");   
    //$numrows=mysql_num_rows($query);  
    //if($numrows==0)    
    $sql="INSERT INTO sys_info(Sys_Id,Lab_No,Soft_Id,OS_Id) VALUES ('$sys_id','$lab_no','$row1[0]','$row2[0]')";  
  
    $result=mysqli_query($con,$sql);  
        if($result!=0){  
    echo "Entry Successfully Created";  
    } else {  
    echo "Failure!"; 
    }  
    } else {  
    echo "All fields are required!";  

  }
}
?>  

</body>  
</html>
