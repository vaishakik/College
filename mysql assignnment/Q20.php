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
$query1 = "SELECT Cust_ID , Policy_no , Loans_no from loans natural join policy_customers group by Cust_ID  ";
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		    <th>Policy_No</th>
			<th>Cust_ID</th>
                        <th>Loan_No</th>
                        
                        
			
			
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
                <td>".$result['Policy_no']."</td>
                 <td>".$result['Cust_ID']."</td>
                     <td>".$result['Loans_no']."</td>
                 
               
               
              
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
