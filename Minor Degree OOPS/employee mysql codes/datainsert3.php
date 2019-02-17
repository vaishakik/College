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
$sql = "INSERT INTO emp_data 
(emp_id,salary,name)
VALUES ('$_POST[empid]', '$_POST[salary]',
'$_POST[name]')";
if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
} 
else
{ 
    echo "Error: " . $sql . "<br>"
	. $conn->error;
} 
$conn->close();
?>

