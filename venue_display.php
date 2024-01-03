<html>
    <head>
        <title>Recipient Dashboard</title>
        <link rel="stylesheet" href="css\userdisplay.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" type='text/css'>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet" type='text/css'>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <main>
            <?php
                include 'conn.php';
                $EventName = $_POST["EventName"];
                $EventType = $_POST["EventType"];
                $Date_of_Event = $_POST["Date_of_Event"];
                $Venue_Location = $_POST["Venue_Location"];
                $venue_location = 'kottayam';
                $s = "select * from venue where venue_location = '$Venue_Location'";
                $rs = mysqli_query($conn, $s);
                
                if (mysqli_num_rows($rs) > 0) 
                {
                    // Loop through the database results and create cards for each donor
                    while ($row = mysqli_fetch_assoc($rs)) 
                    {
                        $image = $row['venue_image']; // Replace 'username' with the actual column name in your donor table
                        $name = $row['venue_name'];
                        $loc= $row['venue_location'];
                        $desc = $row['venue_dis'];
                        echo '<form action="request.php" method="post">';
                        echo '<div class="card">';
                        echo '<div class="image">';
                        echo '<img src="' . $image . '">';
                        echo '</div>';
                        echo '<div class="caption">';
                        echo '<p class="name">' . $name . '</p>';
                        echo '<p class="district">' . $loc . '</p>';
                        echo '<p class="bloodgroup">' . $desc . '</p>'; // Added blood group
                        echo '</div>';
                        echo '<button class="request" type="submit">Request</button>';
                        echo '</div>';
                        echo '</form>';

                    }
                }
                else
                {
                    echo '<div class="message">
                            <h2>No Donors Found</h2>
                            <p>If an emergency, kindly check with your nearest blood bank at the earliest.<br> <a href="https://www.google.com/maps/search/blood+bank+near+me/">More details...</a></p>
                        </div>';
                }
            ?>
        </main>
    </body>
</html>