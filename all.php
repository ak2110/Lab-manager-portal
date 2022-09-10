

</body>
</html>
    


<?php
	

	
    
            $con=mysqli_connect("localhost","root","") or die(mysql_error());  
            mysqli_select_db($con,"project") or die("cannot select DB");  
  
            $query=mysqli_query($con,"SELECT * FROM complaint WHERE status='NC' ");

            $row=mysqli_fetch_all($query);
            $numrows=mysqli_num_rows($query);  
            
     
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
          margin-left: 50px;
    }
    h1{
       
        color:#191970;
    font-family: Cursive;
    font-size:40px; 
   
    }

  </style>              
            <h1>Complaints</h1>
                <table   border= '2'>
                <tr>
                <th>Complaint_id</th>
                <th>Status</th>
                <th>Registartion No.</th>
                <th>System Id</th>
                <th>Type Id</th>
                <th>Remark</th>

            </tr>
            <?php
                if($numrows==0){
                echo "No system with active complaints exists!!";
                }

                else{
                         
                for($r=0;$r<$numrows;$r++){
                    echo "<tr>";
                    for ($c=0;$c<6;++$c){
                        echo "<td align=center>" .$row[$r][$c]. "</td>";
                        
                    }
                    echo "</tr>";} 
                }

            ?>

</body>
</html>


