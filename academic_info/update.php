<?php
include('connection.php');

$id=$_GET['id'];
$query="SELECT * FROM `academic_info`.`information` WHERE `information`.`id` = $id";
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_array($result);

$academic=$rows['academic'];
$institution=$rows['institution'];
$result_type=$rows['result_type'];
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Academic Information</title>
    </head>
    <body>
    <h1>Academic Information</h1>

    <form action="list.php?id=<?php echo $_GET['id'] ?>" method="post">
        <input type="hidden" id="update_id" value="<?php echo $id ?>" />
        <div>
            <label>Level of Education</label>
            <select name="academic">
                <option <?php if ($academic == 'Diploma' ) echo 'selected'; ?> value="Diploma" selected="selected">Diploma</option>
                <option <?php if ($academic == 'Bachelor/Honors' ) echo 'selected'; ?> value="Bachelor/Honors">Bachelor/Honors</option>
                <option <?php if ($academic == 'Masters' ) echo 'selected'; ?> value="Masters">Masters</option>
                <option <?php if ($academic == 'Doctoral' ) echo 'selected'; ?> value="Doctoral">Doctoral</option>
            </select>
        </div>

        <div>
            <label>Exam Title* </label>
            <input type="text" name="exam_title" value="<?php echo $rows['exam_title']?>" />
        </div>
        <div>
            <label>Group/Subject* </label>
            <input type="text" name="subject" value="<?php echo $rows['subject']?>" />
        </div>
        <div>
            <label>Institution* </label>
            <select name="institution">
                <option value="1" selected="selected">--Select Institute--</option>
                <option <?php if ($institution == 'A One Computer Proskikkon Kendra' ) echo 'selected'; ?> value="A One Computer Proskikkon Kendra">A One Computer Proskikkon Kendra</option>
                <option <?php if ($institution == 'ASA University Bangladesh' ) echo 'selected'; ?> value="ASA University Bangladesh">ASA University Bangladesh</option>
                <option <?php if ($institution == 'Asian University for Women' ) echo 'selected'; ?> value="Asian University for Women">Asian University for Women</option>
                <option <?php if ($institution == 'Bangladesh University' ) echo 'selected'; ?> value="Bangladesh University">Bangladesh University</option>
                <option <?php if ($institution == 'Daffodil International University' ) echo 'selected'; ?> value="Daffodil International University">Daffodil International University</option>
            </select>
        </div>
        <div>
            <label>Result Type* </label>
            <select name="result_type">
                <option <?php if ($result_type == 'Grade' ) echo 'selected'; ?> value="Grade" selected="selected">Grade</option>
                <!--<option value="Others">Others</option>-->
            </select>
            <br />
            <label>Result* </label>
            <input type="number" name="result" value="<?php echo $rows['result']?>" />
            <label>Scale* </label>
            <input type="number" name="scale" value="<?php echo $rows['scale']?>" />
        </div>
        <div>
            <label>Passing Year* </label>
            <input type="number" name="year" value="<?php echo $rows['year']?>" />
        </div>
        <div>
            <label>Duration (in Year) </label>
            <input type="number" name="duration" value="<?php echo $rows['duration']?>" />
        </div>
        <div>
            <label>Achievement </label>
            <input type="text" name="achievement" value="<?php echo $rows['achievement']?>" />
        </div>
        <div>
            <br />
            <input type="submit" value="Update" name="update" />
        </div>
    </form>
    <a href="list.php">Goto List</a>
    </body>
    </html>

<?php mysqli_close($con);?>