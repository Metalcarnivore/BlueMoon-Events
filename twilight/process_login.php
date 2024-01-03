<?php
session_start();

$Email = $_POST['Email'];                                   //filter_var($_REQUEST['uname'],FILTER_SANITIZE_STRING);  
$password = md5($_POST['password']);
$con = mysqli_connect("localhost","root","","Twilight");
$query = "select * from Userdetails where Email = '$Email' AND password = '$password'";
$res = mysqli_query($con,$query);
$result = mysqli_fetch_array($res);
if($res->num_rows== 1)
{
    $_SESSION['username'] = $result['Username']; // Assuming your 'Userdetails' table has a column named 'username'
    header("location:index.html");
}
else
{
    echo '<script>alert("Inncorrect password. Please try again");
                window.location.href = "Login.html";
                </script>';
}
?>