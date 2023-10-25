<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-image: url("background.gif");
            background-size: cover;
            color: white;
            margin: 0;
            padding: 0;
        }

        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
        * {
            font-family: 'Oswald';
        }

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

        .reservation-form {
            background: linear-gradient(45deg, #ff7979, #ffbe76, #3bd7e8, #1e6f80);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .reservation-form input[type="text"],
        .reservation-form input[type="date"],
        .reservation-form select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: white;
        }

        .reservation-form button {
            background-color: #ffbe76;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }

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
    $name = $_GET['name'];
    $customer = $_GET['number'];
    $time = $_GET['time'];
    $c = mysqli_connect('localhost', 'root', '', 'reservation');
    
    if (!$c) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $q = "INSERT INTO `reservations` (`name`, `number`, `time`) VALUES ('$name', '$customer', '$time')";
    $a = mysqli_query($c, $q);

    if ($a) {
        echo "<h2><center>Arora's Cafe</center></h2>";
        echo "<h2><center>Shapath 4 SG Highway</center></h2>";
        echo "<h2><center>Opp. Karanavati Club</center></h2>";
        echo "<br>";
        echo "<div class='reservation-form'>";
        echo "<h2>Name: " . $name . "</h2>";
        echo "<h2>Booked For Today " . date("Y/m/d") . "</h2>";
        echo "<h2>Time: " . $time . "</h2>";
        echo "<h2>Total Number Of Customer: " . $customer . "</h2>";
        echo "<h2>Table Number Booked: 32</h2>";
        echo "<br>";
        echo "<h3>Take A Screenshot For Further Use At Cafe</h3>";
        echo "</div>";
        echo "<br>";
    } else {
        echo "Error: " . mysqli_error($c);
    }

    mysqli_close($c);
    ?>
</body>

</html>