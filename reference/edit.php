<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "select * from reference WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>
<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>name</label><span>*</span>
    <input type="text" name="name" value="<?php echo $row['name'];?>" /></br>

    <label>organization</label><span>*</span>
    <input type="text" name="organization" value="<?php echo $row['organization'];?>"/></br>

    <label>address</label><span>*</span>
    <input type="text" name="address" value="<?php echo $row['address'];?>"/></br>

    <label>relation</label><span>*</span>
    <input type="text" name="relation" value="<?php echo $row['relation'];?>"/></br>

    <label>phone_office</label><span>*</span>
    <input type="text" name="phone_office" value="<?php echo $row['phone_office'];?>"/></br>

    <label>phone_home</label><span>*</span>
    <input type="text" name="phone_home" value="<?php echo $row['phone_home'];?>"/></br>

    <label>mobile</label>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>"/></br>

    <label>email</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>"/></br>

    </br>


    <button type="submit" align="right">Update</button>

</form>