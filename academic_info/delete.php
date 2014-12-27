<?php
include('connection.php');

$id=$_GET['id'];
$query="DELETE FROM `academic_info`.`information` WHERE `information`.`id` = $id";
mysqli_query($con,$query);
header('location: list.php');
mysqli_close($con);
?>