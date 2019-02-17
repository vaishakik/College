<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeenew";
$empid=$_POST['id1'];
// Create connection
$conn = new mysqli($servername, $username, 
$password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
// sql to delete a record
$sql = "DELETE FROM emp_data where 
emp_id=$empid";
if ($conn->query($sql) === TRUE) 
{
    echo "Record deleted successfully";
} 
else 
{
    echo "Error deleting record: " 
	. $conn->error;
}
$conn->close();
?>
