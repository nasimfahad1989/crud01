<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "employment_history");

$query = "select * from employment;";

$result = mysqli_query($link, $query);

?>


<table border="1" width="100%">
    <tr>
        <td>company_name</td>
        <td>company_business</td>
        <td>address</td>
        <td>designation</td>
        <td>department</td>
        <td>from</td>
        <td>duration</td>
        <td>responsibility</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['company_name']?></td>
            <td><?php echo $row['company_business']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['designation']?></td>
            <td><?php echo $row['department']?></td>
            <td><?php echo $row['from']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['responsibility']?></td>

            <td> <a href="view.php?id=<?php echo $row['id']?>">View</a> |<a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>