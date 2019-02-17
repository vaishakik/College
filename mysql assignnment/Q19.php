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
$query1 = "SELECT Name,Cust_ID, count(Policy_no) from customers natural join policy_customers group by Policy_no order by Cust_ID desc ";
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		    <th>Name</th>
			<th>Cust_ID</th>                       
                        <th>count(Policy_No)</th>
                        
			
			
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
                <td>".$result['Name']."</td>
                 <td>".$result['Cust_ID']."</td>                     
                 <td>".$result['count(Policy_no)']."</td>

               
               
              
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
