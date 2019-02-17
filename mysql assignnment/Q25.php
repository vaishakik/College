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
$query1 = "SELECT Date_Paid, Amount,m.Policy_no,Name
FROM mat_payments mp
INNER JOIN maturity m ON m.Maturity_no = mp.Maturity_no
inner join policy_customers pa on m.Policy_no=pa.Policy_no
inner join customers c on c.Cust_ID=pa.Cust_ID";
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		<th> Date_Paid</th>
		     
                         
                         <th>Date_Mature</th>
                         <th>Policy_no</th>
                        <th>Name</th>
			
			
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
		 <td> ".$result['Date_Paid']."</td>
		
                
             
                  <td>".$result['Amount']."</td>
                   
                   <td>".$result['m.Policy_no']."</td>
                 <td>".$result['Name']."</td>
              
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
