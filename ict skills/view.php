<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");


$query = "SELECT * FROM `ict_skills` WHERE  id= $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>


<h3></h3>
<dl>
    <dt>experience_cat</dt>
    <dd><?php echo $row['experience_cat'];?></dd>

    <dt>skill_description</dt>
    <dd><?php echo $row['skill_description'];?></dd>


    <dt>extracurricular</dt>
    <dd><?php echo $row['extracurricular'];?></dd>
</dl>



<a href="list.php">Go to Home</a>