<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
$dbhost='localhost';
$dbuser='root';
$db='Twilight';
$conn=mysqli_connect($dbhost,$dbuser,"",$db);
if($conn->connect_error)
{
		die("connection failed".$conn->connect_error);
}
echo"connected successfully<br>";
$sql="CREATE TABLE Eventdetails(Eventname VARCHAR(50) NOT NULL,Eventtype VARCHAR(20) NOT NULL,DateofEvent date,VenueLocation VARCHAR(50) NOT NULL)";
if($conn->query($sql)===TRUE)
{
		echo"table Eventregistration created successfully";
}
else
{
		echo"error creating table:".$conn->error;
}
$conn->close();
?>
</body>
</html>