<?php
$cname=$_GET['cname'];
$cphone=$_GET['cphone'];
$c=mysqli_connect('localhost','root','','disha');
$q="INSERT INTO `res`(`name`, `number`) VALUES
('$cname','$cphone')";
$a=mysqli_query($c,$q);
$b="SELECT * FROM `res`";
$d=mysqli_query($c,$b);
?> 
