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
$query1 = "SELECT * FROM products";
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		    <th>Product_ID</th>
			<th>Product_name</th>
			<th>Money_type</th>
			<th>Min_premium</th>
			<th>Min_period</th>
			<th>Min_Mat_years</th>
			<th>Inaugural_year</th>
			<th>Loans</th>
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
                <td>".$result['Product_ID']."</td>
                <td>".$result['Product_name']."</td>
                <td>".$result['Money_type']."</td>
                <td>".$result['Min_premium']."</td>
                <td>".$result['Min_period']."</td>
                <td>".$result['Min_Mat_years']."</td>
                <td>".$result['Inaugural_year']."</td>
                <td>".$result['Loans']."</td>	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	