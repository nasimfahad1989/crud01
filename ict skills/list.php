<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "select * from ict_skills;";

$result = mysqli_query($link, $query);

?>


<table border="1" width="100%">
    <tr>
        <td>experience_cat</td>
        <td>skill_description</td>
        <td>extracurricular</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['experience_cat']?></td>
            <td><?php echo $row['skill_description']?></td>
            <td><?php echo $row['extracurricular']?></td>

            <td> <a href="view.php?id=<?php echo $row['id']?>">View</a> |<a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>