<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "assignnment";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
{
     die("connection failed :" .$conn->connect_error);
}	 
	
error_reporting(0);
$query1 = "SELECT * FROM customers WHERE Name NOT IN (SELECT Introducer FROM customers WHERE '1' )";
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		    
			<th>Name</th>
                         
			
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
               
                 <td>".$result['Name']."</td>
               
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
