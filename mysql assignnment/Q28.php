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
$query1 = "SELECT Product_name, Product_ID, Inaugral_year
FROM products ORDER BY Inaugral_year ASC   ";
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		    <th>Product_Name</th>
			<th>Product_ID</th>                       
                        <th>Inaugral_Year</th>
                        
			
			
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
                <td>".$result['Product_name']."</td>
                 <td>".$result['Product_ID']."</td>                     
                 <td>".$result['Inaugral_year']."</td>

               
               
              
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
