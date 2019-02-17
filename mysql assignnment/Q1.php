
<html>
<body>
<label>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<div>
<h1>
<center>
QUERY 1
<br>
</center>
</div>
</h1>
</label>


<br>

<a href="http://localhost/assignnment/home.html"><input type="submit" value="HOME"></a>
<br>
<a href="http://localhost/assignnment/Q2.php"><input type="submit" value="NEXT"></a>
</body>
</html>

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
			<th>Inaugral_year</th>
			
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
                <td>".$result['Product_ID']."</td>
                <td>".$result['Product_name']."</td>
                <td>".$result['Inaugral_year']."</td>
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	