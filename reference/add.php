<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query="INSERT INTO `crud01`.`reference` (
`id` ,
`name` ,
`organization` ,
`address` ,
`relation` ,
`phone_office` ,
`phone_home` ,
`mobile` ,
`email`
)

VALUES (NULL,
'".$_POST['name']."', '".$_POST['organization']."', '".$_POST['address']."',
'".$_POST['relation']."', '".$_POST['phone_office']."', '".$_POST['phone_home']."',
'".$_POST['mobile']."', '".$_POST['email']."'
);";



mysqli_query($link, $query);

header('location:list.php');
