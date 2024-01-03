<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listing</title>
    <link rel="stylesheet" href="css/hall_styles.css">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <header>
        <h1>Hall Listing</h1>
    </header>

    <?php
    include 'conn.php';

    $EventName = $_POST["EventName"];
    $EventType = $_POST["EventType"];
    $Date_of_Event = $_POST["Date_of_Event"];
    $Venue_Location = $_POST["Venue_Location"];

    $s = "SELECT * FROM venue WHERE venue_location = '$Venue_Location'";
    $rs = mysqli_query($conn, $s);

    if (mysqli_num_rows($rs) > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
    ?>
            <section class="property-listing">
                <div class="property">
                    <img src="<?php echo $row['venue_image']; ?>" alt="Property Image">
                    <h2><?php echo $row['venue_name']; ?></h2>
                    <p>Location: <?php echo $row['venue_location']; ?></p>
                    <p>Rate: ₹<?php echo $row['venue_rate']; ?>/hr</p>
                    <p>Capacity: <?php echo $row['venue_capacity']; ?></p>
                    <p>Classification: <?php echo $row['venue_classification']; ?></p>                    
                    <!-- Add a form with method="post" and action="payment.php" -->
                    <form action="payment.php" method="post">
                        <!-- Hidden input fields to pass data to payment.php -->
                        <input type="hidden" name="EventName" value="<?php echo $EventName; ?>">
                        <input type="hidden" name="EventType" value="<?php echo $EventType; ?>">
                        <input type="hidden" name="Date_of_Event" value="<?php echo $Date_of_Event; ?>">
                        <input type="hidden" name="Venue_Location" value="<?php echo $Venue_Location; ?>">
                        <input type="hidden" name="venue_id" value="<?php echo $row['venue_id']; ?>">
                        
                        <!-- Bootstrap "Book" button inside the form -->
                        <button type="submit" class="btn btn-primary">Book</button>
                    </form>
                </div>
            </section>
    <?php
        }
    } else {
    ?>
        <div class="message">
            <h2>No Halls Found</h2>
            <p>If an emergency, kindly check with your nearest blood bank at the earliest.<br> <a href="https://www.google.com/maps/search/blood+bank+near+me/">More details...</a></p>
        </div>
    <?php
    }
    ?>

    <footer>
        <p>&copy; 2023 Your Real Estate Company</p>
    </footer>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
