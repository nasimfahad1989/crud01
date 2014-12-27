<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "Reference");

$query = "select * from reference;";

$result = mysqli_query($link, $query);

?>


<table border="1" width="100%">
    <tr>
        <td>name</td>
        <td>organization</td>
        <td>address</td>
        <td>relation</td>
        <td>phone_office</td>
        <td>phone_home</td>
        <td>mobile</td>
        <td>email</td>

    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['organization']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['relation']?></td>
            <td><?php echo $row['phone_office']?></td>
            <td><?php echo $row['phone_home']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>
            <

            <td> <a href="view.php?id=<?php echo $row['id']?>">View</a> |<a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>