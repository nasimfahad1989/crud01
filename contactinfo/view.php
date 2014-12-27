<?php
//This is a crud application with view.php file

$con=mysqli_connect("localhost","root","lict@2","contactinfo") or die("Error: ".mysqli_error($con));

$id = $_GET['id'];
$query = "SELECT * FROM information WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
print_r($row);
?>

<a href="list.php">Go to Home</a>
