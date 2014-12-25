<?php
$code = $_GET['code'];
$link = mysqli_connect("localhost", "root", "lict@2", "ftfl02");
$query = "DELETE FROM `ftfl02`.`trainee` WHERE `trainee`.`code` = $code";
mysqli_query($link, $query);
?>