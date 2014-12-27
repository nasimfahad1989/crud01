<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ictskill");

$query = "DELETE FROM `ictskill`.`ict_skills` WHERE `ict_skills`.`id` = $id";


mysqli_query($link, $query);

header('location:list.php');
?>