<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query="INSERT INTO `crud01`.`ict_skills` (
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
