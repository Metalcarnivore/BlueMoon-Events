<?php
    session_start();
    $username = $_POST['username'];                         
    $password = md5($_POST['password']);
    $con = mysqli_connect("localhost","root","","Twilight");
    $query = "select * from Userdetails where type='admin' AND Username = '$username' AND password = '$password'";
    $res = mysqli_query($con,$query);
    $result = mysqli_fetch_array($res);
    if($res->num_rows== 1)
    {
        $_SESSION['username'] = $result['Username']; // Assuming your 'Userdetails' table has a column named 'username'
        header("location:admin_dashboard.php");
    }
    else
    {
        echo '<script>alert("Inncorrect password. Please try again");
                    window.location.href = "admin_login.html";
                    </script>';
    }
?>