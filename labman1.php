<?php
session_start();

?>
<!doctype html>  
<html>  
<head>  
<title>Login</title>  
    
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
    color: #Daa520;  
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
      
}  
        h3 {  
    color: #daa520;
    text-align:center;  
    font-family: cursive;  
    font-size: 30px;  
}
</style>  
</head>  
<body>  
     <center><h1>Lab Manager Portal</h1></center>  
   <p></p>  
<h3>Login Form</h3>
<center>  
<form action="" method="POST">  
Lab_manager_username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />   
<input type="submit" value="Login" name="submit" />  
</form> 
<p></p>


</center> 
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) { 
    $_SESSION['id']=$_POST['user'];
    $_SESSION['pass']=$_POST['pass']; 
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
  $host="localhost";
$user1="root";
$password="";
$con=mysqli_connect($host,$user1,$password);
    //$con=mysql_connect('127.0.0.0','root','') or die(mysql_error());  
    mysqli_select_db($con,"project") or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM labman WHERE Reg_ID='".$user."' AND Password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['Reg_ID'];  
    $dbpassword=$row['Password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: labman2.php");  
    }  
    } 
    else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}
else{
    session_unset();
    session_destroy();
    
} 
?>  
</body>  
</html>   