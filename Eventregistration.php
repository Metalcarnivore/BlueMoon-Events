<?php
session_start();

// Check if the username session variable is not set
if (!isset($_SESSION['username'])) {
    echo '<script>alert("Please login to register for the event.");
                window.location.href = "Login.html";
                </script>';
    exit(); // Stop further execution of the page
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Recipient registration</title>
        <link rel="stylesheet" href="css/nreg.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" type='text/css'>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet" type='text/css'>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--Header with navbar-->
        <section class="header">
            <div class="logo">
                <a href="index.html"><strong>twilight events.</strong></a>
            </div>
                <ul class="navbar">
                    <a href="index.html"><li>Home</li></a>
                    <a href="http://localhost/Twilight%20Events/index.html#aboutUs"><li>About</li></a>
                    <a href="http://localhost/Twilight%20Events/index.html#contactUs"><li>Contact</li></a>
                </ul>
        </section>
        <div class="background"></div>
        <section class="container">
            <h1>Event Registration</h1>
            <form action="property.php" class="form" method="post">
                <div class="input-box">
                    <label for="Name">Event Name</label>
                    <input type="text" placeholder="Enter full name" id="EventName" name="EventName" required/>
                </div>    
                <div class="input-box">
                    <label for="dob">Date of Event</label>
                    <input type="date" placeholder="Enter birth date" id="Date_of_Event" name="Date_of_Event" required/>
                </div>
                <div class="column">
                    <div class="select-box">
                        <select name="EventType" id="EventType" required>
                            <option>Event Type</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Engagement">Engagement</option>
                            <option value="Birthday">Birthday</option>
                        </select>
                    </div>
                </div>
                <div class="column">
                    <div class="select-box">
                        <select name="Venue_Location" id="Venue_Location" required>
                            <option>District</option>
                            <option value="alappuzha">Alappuzha</option>
                            <option value="ernakulam">Ernakulam</option>
                            <option value="kottayam">Kottayam</option>
                            <option value="Thrissur">Thrissur</option>
                            <option value="Palakkad">Palakkad</option>
                        </select>
                    </div>
                </div>
               <input type="submit" value="REGISTER"/>     
            </form>       
        </section>
    </body>
</html>