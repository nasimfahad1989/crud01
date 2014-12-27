<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "employment_history");

$query = "DELETE FROM `employment_history`.`employment` WHERE `employment`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');