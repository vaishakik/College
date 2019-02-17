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
$query1 = "select Policy_No ,Date_Mature,Amount,Date_Sold from policy order by Date_Sold ";
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		    <th>Policy_No/th>
			<th>Date_Mature</th>
                         <th>Amount</th>
			<th>Date_Sold </th>
			
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
                <td>".$result['Policy_No']."</td>
                 <td>".$result['Date_Mature']."</td>
                <td>".$result['Amount']."</td>
                <td>".$result['Date_Sold']."</td>
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
