<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeenew";
$empid=$_POST['id1']; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM emp_data where emp_id=$empid";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc())
	{
        echo "  empid: " . $row["emp_id"]. 
		" Salary: " . $row["salary"]. "  name: " 
		. $row["name"]."<br>";
       
	}
} 
else 
{
    echo "No results found";
}
$conn->close();
?>