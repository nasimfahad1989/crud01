<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "Reference");


$query = "SELECT * FROM `reference` WHERE  id= $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>

<h3></h3>
<dl>
    <dt>name</dt>
    <dd><?php echo $row['name'];?></dd>

    <dt>organization</dt>
    <dd><?php echo $row['organization'];?></dd>


    <dt>address</dt>
    <dd><?php echo $row['address'];?></dd>

    <dt>relation</dt>
    <dd><?php echo $row['relation'];?></dd>


    <dt>phone_office</dt>
    <dd><?php echo $row['phone_office'];?></dd>

    <dt>phone_home</dt>
    <dd><?php echo $row['phone_home'];?></dd>

    <dt>mobile</dt>
    <dd><?php echo $row['mobile'];?></dd>

    <dt>email</dt>
    <dd><?php echo $row['email'];?></dd>

</dl>

<a href="list.php">Go to Home</a>