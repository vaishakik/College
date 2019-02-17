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
$query1 = "SELECT Name,City FROM customers WHERE Name IN (SELECT Introducer FROM customers WHERE '1' )  ";
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		    
			<th>Name</th>
			
		    <th>City</th>
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
               
                 <td>".$result['Name']."</td>
                 
               	  <td>".$result['City']."</td>
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
