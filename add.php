<?php


$code = $_POST['code'];
$track = $_POST['track'];
$fullname = $_POST['full_name'];
$fathername = $_POST['father_name'];
$mothername = $_POST['mother_name'];
$religion = $_POST['religion'];
$date_of_birth = $_POST['dob'];
$nationality = $_POST['nationality'];
$gender = $_POST['gender'];
$national_id = $_POST['id'];


$mobile = $_POST['number'];
$present_address = $_POST['present_address'];
$permanent_address = $_POST['permanent_address'];


$district = $_POST['district'];
$home_phone = $_POST['home_phone'];


$contact = $_POST['contact'];
$email = $_POST['email'];
$s.s.c_roll = $_POST['s.s.c_roll'];
$s.s.c_result = $_POST['s.s.c_result'];


$s.s.c_board = $_POST['s.s.c_board'];
$h.s.c_roll = $_POST['h.s.c_roll'];


$h.s.c_result = $_POST['h.s.c_result'];
$h.s.c_board = $_POST['h.s.c_board'];
$bachelor_sub = $_POST['bachelor_sub'];


$bachelor_year = $_POST['bachelor_year'];
$bachelor_result = $_POST['bachelor_result'];


$laptop = $_POST['laptop'];
$exam_center = $_POST['exam_center'];


$link = mysqli_connect("localhost", "root", "lict@2", "ftfl02");


$query = "INSERT INTO `ftfl2nd`.`trainee`(`code`, `track`, `full_name`, `father_name`, `mother_name`, `religion`, `dob`, `nationality`, `gender`, `id`, `mobile`, `present_address`, `permanent_address`, `district`, `home_phone`, `mobile`, `email`, `s.s.s_roll`, `s.s.c_result`, `s.s.c_board`, `h.s.c_roll`, `h.s.c_result`, `h.s.c_board`, `bachelor_sub`, `bachelor_year`, `bachelor_result`, `laptop`, `exam_center`)


VALUES ('$code', '$track', '$full_name', '$father_name', '$mother_name', '$religion', '$dob', '$nationality', '$gender', '$id', '$mobile', '$present_address', '$permanent_address', '$district', '$home_phone', '$mobile', '$email', '$s.s.c_roll', '$s.s.c_result', '$s.s.c_board', '$h.s.c_roll', '$h.s.c_result', '$h.s.c_board', '$bachelor_sub', '$bachelor_year', '$bachelor_result', '$laptop', '$exam_center')";


mysqli_query($link, $query);
header('location:list.php');


?>
