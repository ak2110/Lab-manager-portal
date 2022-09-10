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
    background-size:1400px 700px;
    background-repeat:no-repeat;
             
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color:lightblue ;  
    color:#DAA520 ;  
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
    color: ;
    text-align:center;  
    font-family: cursive;  
    font-size: 30px;  
}
h4 {  
    color:black;
    text-align:center;  
    font-family: cursive;  
    font-size: 20px;  
}

h5{
    text-align: center;

}
</style>  
</head>  
<body>  
     <center><h1>Computer System Management Portal</h1></center>  
   <p></p>  
<h3>Login </h3>  
<form action="" method="POST">  
	<center>
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />   
<input type="submit" value="Login" name="submit" />  
</form> 
<p>Or</p>
</center>
<h4><a href="register.php ">Create Account</a></h4>
<p>
<h5><a href="labman1.php">Login (for lab manager)</a>
</p></h5>
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
  
    $query=mysqli_query($con,"SELECT * FROM users WHERE Reg_ID='".$user."' AND Password='".$pass."'");  
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
    header("Location: member.php");  
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