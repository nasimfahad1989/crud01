<?php
include('connection.php');

$query="INSERT INTO `academic_info`.`information` (`id` ,`academic` ,`exam_title` ,`subject` ,`institution` ,`result_type` ,`result` ,`scale` ,`year` ,`duration` ,`achievement`)
            VALUES ('', '$_POST[academic]', '$_POST[exam_title]', '$_POST[subject]', '$_POST[institution]', '$_POST[result_type]', '$_POST[result]', '$_POST[scale]', '$_POST[year]', '$_POST[duration]', '$_POST[achievement]');";

if(mysqli_query($con,$query))
    echo "Successfully added 1 data into database";
else
    die("Error: ".mysqli_error($con));
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
    <br />
    <a href="academic.html"><b>Add Another Information</b></a>
    </body>
    </html>

<?php mysqli_close($con);?>