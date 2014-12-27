<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "Reference");

$query = "DELETE FROM `Reference`.`reference` WHERE `reference`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');