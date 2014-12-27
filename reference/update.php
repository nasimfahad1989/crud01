<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "UPDATE `crud01`.`reference` SET `name`='".$_POST['name']."',`organization`='".$_POST['organization']."',
`address`='".$_POST['address']."',`relation`='".$_POST['relation']."',`phone_office`='".$_POST['phone_office']."',`phone_home`='".$_POST['phone_home']."',
`mobile`='".$_POST['mobile']."',`email`='".$_POST['email']."' WHERE `reference`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');