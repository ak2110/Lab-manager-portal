

</body>
</html>
    


<?php
	

	if(!empty($_POST['Sys_no'])){

            $no=$_POST['Sys_no'];
    
            $con=mysqli_connect("localhost","root","") or die(mysql_error());  
            mysqli_select_db($con,"project") or die("cannot select DB");  
  
            $query=mysqli_query($con,"SELECT * FROM sys_info natural join software natural join os WHERE Sys_Id='".$no."' ");

            $row=mysqli_fetch_all($query);
            $numrows=mysqli_num_rows($query);  
            }
     else{
        
        header("Location:system.php");
        echo "require field";
    }        

            ?>

<html>
<head>
</head>
<title>
system_out</title>

<body>
    <style>
    body{
        font-size:20px;
        font-family:cursive;
        alignment-baseline: center;
        margin-top: 80px;
        background-image: url("po.jpg");
        background-repeat:no-repeat;
    background-size:cover;
    margin-left:50px;

         
    }
    h1{
       
        color:#191970;
    font-family: Cursive;
    font-size:40px; 
   
    }

  </style>              
            <h1>System Information</h1>
                <table   border= '2'>
                <tr>
                <th>System_id</th>
                <th>Lab_no</th>
                <th>Operating System Name</th>
                <th>Software Name</th>
            </tr>
            <?php
                if($numrows==0){
                echo "No such system exists!!";
                }

                else{
                         
                for($r=0;$r<$numrows;$r++){
                    echo "<tr>";
                    for ($c=2;$c<6;++$c){
                        echo "<td align=center>" .$row[$r][$c]. "</td>";
                        
                    }
                    echo "</tr>";} 
                }

            ?>

</body>
</html>


