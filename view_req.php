<?php
require('conn.php');
session_start();
$Username = $_SESSION['username'];

// Check for errors in the query execution
$s = "SELECT eventdetails.Eventname, eventdetails.Eventtype, eventdetails.DateofEvent, venue.venue_name
FROM eventdetails
JOIN venue ON eventdetails.venue_id = venue.venue_id ";
$rs = mysqli_query($conn, $s);

if (!$rs) {
    // If there's an error in the query, you can log or display the error
    die('Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
    <title>Booking Dashboard</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            // Your existing script for handling Approve and Delete buttons
            $(".approve-btn").click(function () {
                // ... (unchanged)
            });

            $(".delete-btn").click(function () {
                // ... (unchanged)
            });
        });
    </script>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Events</h2>
                    </div>
                    <?php
                    if (mysqli_num_rows($rs) > 0) {
                        echo '<div class="card-body">';
                        echo '<table class="table table-bordered text-center">';
                        echo '<tr class="bg-dark">';
                        echo '<td>Event Name</td>';
                        echo '<td>Event Type</td>';
                        echo '<td>Date of Event</td>';
                        echo '<td>Venue Name</td>';
                        echo '</tr>';

                        while ($row = mysqli_fetch_assoc($rs)) {
                            echo '<tr>';
                            echo '<td>' . $row['Eventname'] . '</td>';
                            echo '<td>' . $row['Eventtype'] . '</td>';
                            echo '<td>' . $row['DateofEvent'] . '</td>';
                            echo '<td>' . $row['venue_name'] . '</td>';
                            echo '</tr>';
                        }

                        echo '</div>';
                        echo '</table>';
                    } else {
                        // Display Bootstrap container with alert box when no events are found
                        echo '<div class="container mt-3">';
                        echo '<div class="alert alert-warning" role="alert">';
                        echo 'No events found.';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
