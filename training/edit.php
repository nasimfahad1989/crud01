<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "select * from training_info WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<h4>Contact Information</h4>
<hr>

<form action="update.php" method="post">


    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>training_title</label><span>*</span>
    <input type="text" name="training_title" value="<?php echo $row['training_title'];?>" /></br>

    <label>training_description</label><span>*</span>
    <input type="text" name="training_description" value="<?php echo $row['training_description'];?>" /></br>

    <label>institute</label><span>*</span>
    <input type="text" name="institute" value="<?php echo $row['institute'];?>" /></br>

    <label>address</label><span>*</span>
    <input type="text" name="address" value="<?php echo $row['address'];?>" /></br>

    <label>training_year</label><span>*</span>
    <input type="text" name="training_year" value="<?php echo $row['training_year'];?>" /></br>

    <label>duration</label><span>*</span>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" /></br>

    <label>start_date</label><span>*</span>
    <input type="text" name="start_date" value="<?php echo $row['start_date'];?>" /></br>

    <label>end_date</label><span>*</span>
    <input type="text" name="end_date" value="<?php echo $row['end_date'];?>" /></br>

    <label>course_detail</label><span>*</span>
    <input type="text" name="course_detail" value="<?php echo $row['course_detail'];?>" /></br>

    <label>trainer_detail</label><span>*</span>
    <input type="text" name="trainer_detail" value="<?php echo $row['trainer_detail'];?>" /></br>



    <button type="submit" align="right">Update</button>

</form>
