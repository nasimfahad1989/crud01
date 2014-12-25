
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<html>
<head>
    <title></title>
</head>
<body style="text-align: center;">
<ul>
    <li><a href="add.html">New Record</a> </li>
    <li><a href="list.php">View All Participant</a> </li>
</ul>
<table>
    <tr>
        <td>Code</td>
        <td>Track</td>
        <td>Name</td>
        <td>father_name</td>
        <td>mother_name</td>
        <td>religion</td>
        <td>dob</td>
        <td>gender</td>
        <td>nationality</td>
        <td>ational_id</td>
        <td>email</td>
        <td>mobile</td>
        <td>s.s.c_roll</td>
        <td>s.s.c_roard</td
        <td>S.S.C result</td>
        <td>h.s.c roll</td>
        <td>h.s.c_board</td>
        <td>h.s.c_result</td>
        <td>bachelor_sub</td>
        <td>bachelor_result</td>
        <td>laptop</td>
        <td>exam_center</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
    ?>
    <tr>
        <td><?php echo $row['code']?></td>
        <td><?php echo $row['track']?></td>
        <td><?php echo $row['full-name']?></td>
        <td><?php echo $row['father-name']?></td>
        <td><?php echo $row['mother-name']?></td>
        <td><?php echo $row['religion']?></td>
        <td><?php echo $row['dob']?></td>
        <td><?php echo $row['gender']?></td>
        <td><?php echo $row['nationality']?></td>
        <td><?php echo $row['national_id']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['mobile']?></td>
        <td><?php echo $row['s.s.c_roll']?></td>
        <td><?php echo $row['s.s.c_result']?></td>
        <td><?php echo $row['s.s.c_board']?></td>
        <td><?php echo $row['h.s.c_roll']?></td>
        <td><?php echo $row['h.s.c_result']?></td>
	<td><?php echo $row['h.s.c_board']?></td>
        <td><?php echo $row['bachelor_sub']?></td>
        <td><?php echo $row['bachelor_result']?></td>
        <td><?php echo $row['laptop']?></td>
        <td><?php echo $row['exam_center']?></td>
        <td> <a href="#">Edit</a> | <a href="delete.php?code=<?php echo $row['code']?>">Delete</a></td>
    </tr>
<?php
}
?>
