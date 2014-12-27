<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "training");

$query = "DELETE FROM `training`.`training_info` WHERE `training_info`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
?>

