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
$query1 = "SELECT Cust_ID,Date_Sold,Amount,Date_Mature, count(Policy_no) from policy NATURAL JOIN policy_customers GROUP BY Policy_no having count(Policy_no)=1 ";
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		    <th>Cust_ID</th>
			<th>Date_Sold</th>
                         <th>Amount</th>
                         <th>Date_Mature</th>
                          <th>count(Policy_no)</th>
                        
			
			
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
                <td>".$result['Cust_ID']."</td>
                 <td>".$result['Date_Sold']."</td>
                  <td>".$result['Amount']."</td>
                   <td>".$result['Date_Mature']."</td>
                   <td>".$result['count(Policy_no)']."</td>
               
              
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
