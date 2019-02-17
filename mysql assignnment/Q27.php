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
$query1 = "SELECT Policy_no, Cust_ID, Date_Matured FROM policy_customers
NATURAL JOIN maturity GROUP BY Policy_no 
HAVING Date_Matured  > '2005-01-01' " ;
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		    <th>Policy_No</th>
			<th>Cust_ID</th>                       
                        <th>Date_Mature</th>
                        
			
			
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
                <td>".$result['Policy_no']."</td>
                 <td>".$result['Cust_ID']."</td>                     
                 <td>".$result['Date_Matured']."</td>

               
               
              
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
