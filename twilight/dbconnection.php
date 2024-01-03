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
$conn->close();
?>
</body>
</html>