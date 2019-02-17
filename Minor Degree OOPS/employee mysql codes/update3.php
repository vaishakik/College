<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "employeenew"; 
// Create connection    
$conn = new mysqli($servername, $username, 
$password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " 
	. $conn->connect_error);
} 
$sql = "UPDATE emp_data SET 
emp_id=$_POST[newempid] 
WHERE emp_id=$_POST[oldempid]";
if ($conn->query($sql) === TRUE)
{
    echo "New record updated successfully";
} 
else
{ 
    echo "Error: " . $sql . "<br>"
	. $conn->error;
} 
$conn->close();
?>

