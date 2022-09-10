<!doctype html>  
<html>  
<head>  
<title>Register</title>  
    <style>   
        body{  
    background-image: 
        url("b10.jpg");
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
         h2 {  
    color: ;  
    font-family: cursive;  
    font-size: 30px; 
    text-align: center; 
}</style>  
</head>  
<body>  
     
    <center><h1>Computer System Management Portal</h1></center>  
   
    <h2>Register</h2>
<form action="" method="POST">  
    <legend>  
    
   <center>       
Username(registration no.): <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br /> 
First Name: <input type="text" name="fname"><br />  
Last Name: <input type="text" name="lname"><br />  
Registration No.: <input type="text" name="regno"><br />  
Branch:   <input type="text" name="branch"><br />  
<input type="submit" value="Register" name="submit" />  
              
       
        </legend>  
</form>  
</center>

<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];
    $regno=$_POST['regno']; $fname=$_POST['fname']; $lname=$_POST['lname']; $branch=$_POST['branch']; 

    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,"project") or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM users WHERE Reg_ID='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($query)  
    {  
    $sql="INSERT INTO users(Reg_ID,Password) VALUES('$user','$pass')";
    $sql1="INSERT INTO student(reg_no,f_name,l_name,branch) VALUES ('$regno','$fname','$lname','$branch')";  
  
    $result=mysqli_query($con,$sql);
    $result1= mysqli_query($con,$sql1);
        if($result1 and $result){  
    echo "Account Successfully Created";
    header("Location:login.php"); 
     header("Location: member.php");   
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    } } 
  
 else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>