<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "select * from employment WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>
<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>company_name</label><span>*</span>
    <input type="text" name="company_name" value="<?php echo $row['company_name'];?>" /></br>
    </br>

    <label>company_business</label>
    <input type="text" name="company_business" value="<?php echo $row['company_business'];?>"/></br>
    </br>

    <label>address</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>"/></br>
    </br>

    <label>designation</label><span>*</span>
    <input type="text" name="designation" value="<?php echo $row['designation'];?>"/></br>
    </br>

    <label>department</label>
    <input type="text" name="department" value="<?php echo $row['department'];?>"/></br>
    </br>

    <label>from</label>
    <input type="text" name="from" value="<?php echo $row['from'];?>"/></br>
    </br>


    <label>duration</label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>"/></br>
    </br>

    <label>responsibility</label><span>*</span>
    <input type="text" name="responsibility" value="<?php echo $row['responsibility'];?>"/></br>
    </br>

    </br>

    <button type="submit" align="right">Update</button>

</form>