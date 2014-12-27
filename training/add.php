<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");


$query="INSERT INTO `crud01`.`training_info` (
`id` ,
`training_title` ,
`training_description` ,
`institute` ,
`address` ,
`training_year` ,
`duration` ,
`start_date` ,
`end_date` ,
`course_detail` ,
`trainer_detail`
)

VALUES (NULL,
'".$_POST['training_title']."', '".$_POST['training_description']."',
'".$_POST['institute']."', '".$_POST['address']."', '".$_POST['training_year']."',
'".$_POST['duration']."', '".$_POST['start_date']."', '".$_POST['end_date']."','".$_POST['course_detail']. "', '".$_POST['trainer_detail']. "'
);";


mysqli_query($link, $query);

header('location:list.php');
?>