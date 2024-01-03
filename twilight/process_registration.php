<?php
    $username = $_POST["username"];
	$DOB = $_POST["DOB"];
    $email = $_POST["email"];
	$MobileNo = $_POST["MobileNo"];
    $password = md5($_POST["password"]);
	$conn=mysqli_connect("localhost","root","",'Twilight');
	$qry="insert into Userdetails(Username,DOB,Email,MobileNo,Password)values('$username','$DOB','$email','$MobileNo','$password')";
		$res=mysqli_query($conn,$qry);
		if($res)
		{
			header("location:Login.html");
		}
?>
























