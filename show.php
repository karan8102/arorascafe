<?php
$c = mysqli_connect('localhost', 'root', '', 'reservation');

if (!$c) {
  die("Connection failed: " . mysqli_connect_error());
}

$b = "SELECT * FROM `reservations`"; // Remove the extra backtick
$d = mysqli_query($c, $b);

if ($d) {
  echo "<table border='1' align='center'><tr><th>Name</th><th>Number</th><th>Time</th></tr>";

  while ($x = mysqli_fetch_array($d)) {
    echo "<tr><td>" . $x['name'] . "</td><td>" . $x['number'] . "</td><td>" . $x['time'] . "</td></tr>";
  }

  echo "</table>";
} else {
  echo "Error: " . mysqli_error($c);
}

mysqli_close($c);
?>
