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
$query1 = "SELECT Cust_ID,a.Name,Date_Sold, Amount, Date_Mature, pa.Policy_no, pa.Agent_no
FROM policy p
INNER JOIN policy_agent pa ON p.Policy_no = pa.Policy_no
INNER JOIN agents a ON pa.Agent_no = a.Agent_no
INNER JOIN policy_customers pc ON pc.Policy_no = p.Policy_no";
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		<th> Cust_ID</th>
		     <th>Agent_name</th>
			<th>Date_Sold</th>
                         <th>Amount</th>
                         <th>Date_Mature</th>
                         <th>Policy_no</th>
                        <th>Agent_no</th>
			
			
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
		 <td> ".$result['Cust_ID']."</td>
		<td>".$result['a.Name']."</td>
                
                 <td>".$result['Date_Sold']."</td>
                  <td>".$result['Amount']."</td>
                   <td>".$result['Date_Mature']."</td>
                   <td>".$result['pa.Policy_no']."</td>
                 <td>".$result['pa.Agent_no']."</td>
              
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
