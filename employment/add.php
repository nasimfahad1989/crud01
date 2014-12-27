<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query="INSERT INTO `crud01`.`employment` (
`id` ,
`company_name` ,
`company_business` ,
`address` ,
`designation` ,
`department` ,
`from` ,
`duration` ,
`responsibility`
)
VALUES (NULL,
'".$_POST['company_name']."', '".$_POST['company_business']."', '".$_POST['address']."',
'".$_POST['designation']."', '".$_POST['department']."', '".$_POST['from']."',
'".$_POST['duration']."', '".$_POST['responsibility']."'
);";



mysqli_query($link, $query);

header('location:list.php');