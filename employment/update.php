<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "employment_history");

$query = "UPDATE `employment_history`.`employment` SET `company_name`='".$_POST['company_name']."',`company_business`='".$_POST['company_business']."',
`address`='".$_POST['address']."',`designation`='".$_POST['designation']."',`department`='".$_POST['department']."',`from`='".$_POST['from']."',
`duration`='".$_POST['duration']."',`responsibility`='".$_POST['responsibility']."' WHERE `employment`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');