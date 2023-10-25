<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookings";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user input from the form
$name = $_POST['name'];
$phone = $_POST['phone'];

// Insert the booking data into the database
$sql = "INSERT INTO booking (name, phone) VALUES ('$name', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Booking created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
