<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");


$query = "SELECT * FROM `employment` WHERE  id= $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>

<h3></h3>
<dl>
    <dt>company_name</dt>
    <dd><?php echo $row['company_name'];?></dd>

    <dt>company_business</dt>
    <dd><?php echo $row['company_business'];?></dd>

    <dt>address</dt>
    <dd><?php echo $row['address'];?></dd>

    <dt>designation</dt>
    <dd><?php echo $row['designation'];?></dd>

    <dt>department</dt>
    <dd><?php echo $row['department'];?></dd>

    <dt>from</dt>
    <dd><?php echo $row['from'];?></dd>

    <dt>duration</dt>
    <dd><?php echo $row['duration'];?></dd>

    <dt>responsibility</dt>
    <dd><?php echo $row['responsibility'];?></dd>

</dl>


<a href="list.php">Go to Home</a>