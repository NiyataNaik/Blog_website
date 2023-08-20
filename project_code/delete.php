<?php
$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "foodorder";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

$sql="DELETE FROM FOOD";
if(mysqli_query($conn,$sql))
{
  echo "deleted successfully";
}

mysqli_close($conn);
?>