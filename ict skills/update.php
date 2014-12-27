<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ictskill");

$query = "UPDATE `ict_skills`.`ict_skills` SET `experience_cat`='".$_POST['experience_cat']."',`skill_description`='".$_POST['skill_description']."',
`extracurricular`='".$_POST['extracurricular']."' WHERE `ict_skills`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');