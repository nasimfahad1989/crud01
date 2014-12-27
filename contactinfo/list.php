<?php
//This is a crud application with list.php file

$con=mysqli_connect("localhost","root","lict@2","contactinfo") or die("Error: ".mysqli_error($con));

if(isset($_POST['update'])){
    $update_id=$_GET['id'];
    if(isset($update_id)){
        //$_POST[mobile]', '$_POST[h_phone]', '$_POST[e_contact]', '$_POST[email]', '$_POST[a_email]', '$_POST[c_location]', '$_POST[p_address]', '$_POST[per_address]'
        $sql = "UPDATE information SET mobile='$_POST[mobile]',h_phone='$_POST[h_phone]',e_contact='$_POST[e_contact]',email='$_POST[email]',c_location='$_POST[c_location]',p_address='$_POST[p_address]',per_address='$_POST[per_address]',laptop='$_POST[laptop]' WHERE id=$update_id";
        mysqli_query($con,$sql);
    }
}

$query="SELECT * FROM information";
$result=mysqli_query($con,$query);
//print_r($result);
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
            <th>Mobile</th>
            <th>Home Phone</th>
            <th>Emergency Contact</th>
            <th>Email</th>
            <th>Alternate Email</th>
            <th>Current Location</th>
            <th>Present Address</th>
            <th>Permanent Address</th>
            <th>Laptop</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row){ ?>
            <tr align="center">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['mobile'] ?></td>
                <td><?php echo $row['h_phone'] ?></td>
                <td><?php echo $row['e_contact'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['a_email'] ?></td>
                <td><?php echo $row['c_location'] ?></td>
                <td><?php echo $row['p_address'] ?></td>
                <td><?php echo $row['per_address'] ?></td>
                <td><?php echo $row['laptop'] ?></td>
                <td><a href="view.php?id=<?php echo $row['id']?>">View</a> / <a href="update.php?id=<?php echo $row['id']?>">Edit</a> / <a href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td align="center" colspan="10"><a href="info.html"><b>Goto Entry New Record</b></a></td>
        </tr>
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($con);?>