<?php
include('connection.php');

if(isset($_POST['update'])){
    $update_id=$_GET['id'];
    if(isset($update_id)){
        $sql = "UPDATE `academic_info`.`information` SET `academic` = '$_POST[academic]', `exam_title` = '$_POST[exam_title]', `subject` = '$_POST[subject]', `institution` = '$_POST[institution]', `result_type` = '$_POST[result_type]', `result` = '$_POST[result]', `scale` = '$_POST[scale]', `year` = '$_POST[year]', `duration` = '$_POST[duration]', `achievement` = '$_POST[achievement]' WHERE `information`.`id` = $update_id";
        mysqli_query($con,$sql);
    }
}

$query="SELECT * FROM `information`";
$result=mysqli_query($con,$query);
?>

    <!DOCTYPE html>
    <html>
    <head>
        <style>
            thead {color:red;}
            tbody {color:blue;}
            tfoot {color:black;}
            table,th,td
            {border:1px solid black;}
        </style>
    </head>
    <body>
    <table border="1" align="center" width="100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Level of Education</th>
            <th>Exam Title</th>
            <th>Group/Subject</th>
            <th>Institution</th>
            <th>Result Type</th>
            <!--<th>Result</th>
            <th>Scale</th>-->
            <th>Passing Year</th>
            <th>Duration</th>
            <th>Achievement</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row){ ?>
            <tr align="center">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['academic'] ?></td>
                <td><?php echo $row['exam_title'] ?></td>
                <td><?php echo $row['subject'] ?></td>
                <td><?php echo $row['institution'] ?></td>
                <td><?php echo $row['result_type']."<br />"."Result: ".$row['result']."<br />"."Scale: ".$row['scale'] ?></td>
                <td><?php echo $row['year'] ?></td>
                <td><?php echo $row['duration'] ?></td>
                <td><?php echo $row['achievement'] ?></td>
                <td><a href="view.php?id=<?php echo $row['id']?>">View</a> | <a href="update.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>

            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td align="center" colspan="12"><a href="academic.html"><b>Goto add Record</b></a></td>
        </tr>
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($con);?>