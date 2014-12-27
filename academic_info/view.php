<?php
$id = $_GET['id'];
include('connection.php');


$query = "SELECT * FROM `academic_info`.`information` WHERE `information`.`id`=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
print_r($row);
//var_dump($row);
?>
<br />
<a href="list.php">Goto List</a>