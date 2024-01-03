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
$conn=mysqli_connect($dbhost,$dbuser,"");
if($conn->connect_error)
{
		die("connection failed".$conn->connect_error);
}
echo"connected successfully<br>";
$sql="CREATE DATABASE Twilight";
if($conn->query($sql)===TRUE)
{
		echo"database created successfully";
}
else
{
		echo"error creating database:".$conn->error;
}
$conn->close();
?>
</body>
</html>