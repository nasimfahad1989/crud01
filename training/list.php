<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "select * from training_info;";
$result = mysqli_query($link, $query);

?>

<table border="1" width="100%">
    <tr>
        <td>training_title</td>
        <td>training_description</td>
        <td>institute</td>
        <td>address</td>
        <td>training_year</td>
        <td>duration</td>
        <td>start_date</td>
        <td>end_date</td>
        <td>course_detail</td>
        <td>trainer_detail</td>
    </tr>


    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['training_title']?></td>
            <td><?php echo $row['training_description']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['training_year']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['start_date']?></td>
            <td><?php echo $row['end_date']?></td>
            <td><?php echo $row['course_detail']?></td>
            <td><?php echo $row['trainer_detail']?></td>
            <td><a href="view.php?id=<?php echo $row['id']?>">View</a>|
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>|
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>
</table>

