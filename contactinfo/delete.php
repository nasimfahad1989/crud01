<?php
////This is a crud application with delete.php file

$con=mysqli_connect("localhost","root","lict@2","contactinfo") or die("Error: ".mysqli_error($con));

$id=$_GET['id'];
$query="DELETE FROM `contactinfo`.`information` WHERE `information`.`id` = $id";
mysqli_query($con,$query);
header('location: list.php');
mysqli_close($con);
?>