<?php
// Variables
$venue_name = $_POST['venue_name'];
$venue_location = $_POST['venue_location'];
$venue_rate=$_POST['venue_rate'];
$venue_capacity=$_POST['venue_capacity'];
$venue_classification=$_POST['venue_classification'];
$venue_dis = $_POST['venue_dis'];


// Image upload handling
$targetDirectory = "uploads/";  // Specify the directory where you want to store images
$targetFile = $targetDirectory . basename($_FILES["venue_image"]["name"]);
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if the image file is valid
if (move_uploaded_file($_FILES["venue_image"]["tmp_name"], $targetFile)) {
    // Image was successfully uploaded, now insert data into the database
    include 'conn.php'; // Include your database connection code here

    $sql = "INSERT INTO venue (venue_name, venue_location,venue_rate,venue_capacity,venue_classification, venue_dis, venue_image) 
            VALUES ('$venue_name', '$venue_location','$venue_rate','$venue_capacity','$venue_classification', '$venue_dis', '$targetFile');";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting into database: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Error uploading image.";
}
?>
