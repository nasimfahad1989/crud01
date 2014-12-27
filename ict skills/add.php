<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ictskill");

$query="INSERT INTO `ictskill`.`ict_skills` (
`id` ,
`experience_cat` ,
`skill_description` ,
`extracurricular`
)
VALUES (NULL,
'".$_POST['experience_cat']."', '".$_POST['skill_description']."', '".$_POST['extracurricular']."'
);";



mysqli_query($link, $query);

header('location:list.php');
