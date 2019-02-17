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
$query1 = "SELECT Date_Loaned, Amount,Sanctioned_By,count(Policy_no),Cust_ID from loans natural join policy_customers where Sanctioned_By = 'p06'  group by Policy_no ";
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		    <th>Date_Loaned</th>
			<th>Amount</th>
                        <th>Sanctioned_By</th>
                        <th>count(Policy_no)</th>
                        <th>Cust_ID</th>
			
			
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
                <td>".$result['Date_Loaned']."</td>
                 <td>".$result['Amount']."</td>
                     <td>".$result['Sanctioned_By']."</td>
                 <td>".$result['count(Policy_no)']."</td>
<td>".$result['Cust_ID']."</td>
               
               
              
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
