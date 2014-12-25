<?php
$link = mysqli_connect("localhost", "root", "lict@2", "ftfl02");
$query = "SELECT * FROM trainee";
$result = mysqli_query($link, $query);
?>
<html>
<head>
    <title></title>
</head>
<body style="text-align: center;">
<ul>
    <li><a href="add.html">New Record</a> </li>
    <li><a href="list.php">View All Participants</a> </li>
</ul>
<table>
    <tr>
        <td>code</td>
        <td>track</td>
        <td>fullname</td>
        <td>fatherName</td>
        <td>mothername</td>
        <td>religion</td>
        <td>dob</td>
        <td>nationality</td>
        <td>gender</td>
        <td>national iD</td>
        <td>email</td>
        <td>mobile</td>
        <td>s.s.c Roll</td>
        <td>s.s.c result</td>
        <td>s.s.c roll</td>
        <td>h.S.C result</td>
        <td>h.S.C board</td>
        <td>bachelor subject</td>
        <td>bachelor Result</td>
        <td>laptop</td>
        <td>exam center</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['code']?></td>
            <td><?php echo $row['track']?></td>
            <td><?php echo $row['fullname']?></td>
            <td><?php echo $row['fathername']?></td>
            <td><?php echo $row['mothername']?></td>
            <td><?php echo $row['religion']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['nationality']?></td>
            <td><?php echo $row['nationalid']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['s.s.c_roll']?></td>
            <td><?php echo $row['s.s.c_board']?></td>
            <td><?php echo $row['s.s.c_result']?></td>
            <td><?php echo $row['h.s.c_roll']?></td>
            <td><?php echo $row['h.s.c_board']?></td>
            <td><?php echo $row['h.s.c_result']?></td>
            <td><?php echo $row['bachelor_sub']?></td>
            <td><?php echo $row['bachelor_result']?></td>
            <td><?php echo $row['laptop']?></td>
            <td><?php echo $row ['exam center']?></td>
            <td> <a href="#">Edit</a> | <a href="delete.php?code=<?php echo $row['code']?>">Delete</a> | <a href="view.php?code=<?php echo $row['code']?>">View</a></td>
        </tr>
    <?php
    }
    ?>
