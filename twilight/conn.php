<?php
    $conn = new mysqli("localhost","root", "","Twilight");
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>