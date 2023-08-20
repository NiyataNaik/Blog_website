<?php
$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "foodorder";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

$sql="ALTER TABLE FOOD MODIFY COLUMN description varchar(10000000)";
if(mysqli_query($conn,$sql))
{
  echo "altered successfully";
}

mysqli_close($conn);
?>