<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "UPDATE `crud01`.`training_info` SET `training_title`='".$_POST['training_title']."',`training_description`='".$_POST['training_description']."',
`institute`='".$_POST['institute']."',`address`='".$_POST['address']."',`training_year`='".$_POST['training_year']."',`duration`='".$_POST['duration']."',
`start_date`='".$_POST['start_date']."',`end_date`='".$_POST['end_date']."',`course_detail`='".$_POST['course_detail']."',
`trainer_detail`='".$_POST['trainer_detail']."' WHERE `training_info`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');

