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
$sql="CREATE TABLE Userdetails(Username VARCHAR(25) NOT NULL,DOB date NOT NULL,Email VARCHAR(50) PRIMARY KEY NOT NULL,MobileNo VARCHAR(10) ,Password VARCHAR(50))";
if($conn->query($sql)===TRUE)
{
		echo"table Registration created successfully";
}
else
{
		echo"error creating table:".$conn->error;
}
$conn->close();
?>
</body>
</html>