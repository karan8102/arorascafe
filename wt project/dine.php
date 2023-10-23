<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-image: url("background.gif");
            background-size: cover; /* Make the background image cover the entire screen */
            color: white; /* Set the font color to white for all text on the page */
            margin: 0; /* Remove default body margin */
            padding: 0; /* Remove default body padding */
        }

        /* Define the animation for the background */
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Apply the background animation to the reservation form */
        .reservation-form {
            background: linear-gradient(45deg, #ff7979, #ffbe76, #3bd7e8, #1e6f80);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        /* Style the form elements */
        .reservation-form input[type="text"],
        .reservation-form input[type="date"],
        .reservation-form select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: white; /* Set the font color to white for form elements inside .reservation-form */
        }

        .reservation-form button {
            background-color: #ffbe76;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            color: white; /* Set the font color to white for buttons inside .reservation-form */
        }

        /* Additional styles can be added to make it more visually appealing */

        /* Example: Center the form */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <?php
    echo "<h2><center>Arora's Cafe</center></h2>";
    echo "<h2><center>Shapath 4 SG Highway</center></h2>";
    echo "<h2><center>Opp. Karanavati Club</center></h2>";
    echo "<br>";
    echo "<div class='reservation-form'>";
    echo "<h2>Name: " . $_GET['name'] . "</h2>";
    echo "<h2>Booked For Today " . date("Y/m/d") . "</h2>";
    echo "<h2>Time: " . $_GET['time'] . "</h2>";
    echo "<h2>Total Number Of Customer: " . $_GET['val'] . "</h2>";
    echo "<h2>Table Number Booked: 32</h2>";
    echo "<br>";
    echo "<h3>Take A Screenshot For Further Use At Cafe</h3>";
    echo "</div>";
    echo "<br>";
    ?>
</body>

</html>

