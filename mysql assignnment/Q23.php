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
$query1 = "SELECT Policy_no, Date_Mature, Amount FROM policy
NATURAL JOIN maturity WHERE 1999-04-01 < Date_Matured <1999-04 -30
GROUP BY ( policy_no ) " ;
$data1 = mysqli_query($conn,$query1);
$total = mysqli_num_rows($data1);


if($total!=0)
{
	?>
	<table border="1">
	    <tr>
		    <th>Policy_No</th>
                      <th>Date_Mature</th>
                    <th>Amount</th>
					
		</tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data1))
    {
        echo "<tr>
                <td>".$result['Policy_no']."</td>                                         <td>".$result['Date_Mature']."</td>     
                  <td>".$result['Amount']."</td>     
              
               	
            </tr>";
    }
}
else
{
      echo "no record found";
}

?>	  
	
