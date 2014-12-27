<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");


$query = "SELECT * FROM `training_info` WHERE  id= $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>


<h3></h3>
<dl>
    <dt>training_title</dt>
    <dd><?php echo $row['training_title'];?></dd>

    <dt>training_description</dt>
    <dd><?php echo $row['training_description'];?></dd>


    <dt>institute</dt>
    <dd><?php echo $row['institute'];?></dd>

    <dt>address</dt>
    <dd><?php echo $row['address'];?></dd>


    <dt>training_yeare</dt>
    <dd><?php echo $row['training_year'];?></dd>

    <dt>duration</dt>
    <dd><?php echo $row['duration'];?></dd>

    <dt>start_date</dt>
    <dd><?php echo $row['start_date'];?></dd>

    <dt>end_date</dt>
    <dd><?php echo $row['end_date'];?></dd>

    <dt>course_detail</dt>
    <dd><?php echo $row['course_detail'];?></dd>

    <dt>trainer_detail</dt>
    <dd><?php echo $row['trainer_detail'];?></dd>

</dl>


<a href="list.php">Go to Home</a>
