<?php
session_start();

include 'conn.php';

// Retrieve values from session
$EventName = $_SESSION["EventName"];
$EventType = $_SESSION["EventType"];
$Date_of_Event = $_SESSION["Date_of_Event"];
$Venue_Location = $_SESSION["Venue_Location"];
$username=$_SESSION["username"];
$venue_id=$_SESSION["venue_id"];

$qry = "INSERT INTO Eventdetails (Username, Eventname, Eventtype, DateofEvent, VenueLocation, venue_id) VALUES ('$username', '$EventName', '$EventType', '$Date_of_Event', '$Venue_Location', '$venue_id')";

$res = mysqli_query($conn, $qry);

if ($res) {
	session_destroy();
    header("location:booking_success.html");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
