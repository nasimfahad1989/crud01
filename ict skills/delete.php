<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "DELETE FROM `crud01`.`ict_skills` WHERE `ict_skills`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');