<?php
// Establish a database connection using mysqli
$host = 'localhost';
$username = 'root';
$password = '';  // Replace with your actual database password
$database = 'project';

$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Use prepared statements to insert data into the database
$name = $_GET['name'];
$phone = $_GET['phone'];

// Prepare the SQL statement
if ($stmt = $conn->prepare("INSERT INTO `res` (`name`, `number`) VALUES (?, ?)")) {
    // Bind the parameters and execute the query
    $stmt->bind_param("ss", $name, $phone);

    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Select and display data from the database
$query = "SELECT * FROM `res`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . ", Phone: " . $row["number"] . "<br>";
    }
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>
