<?php
include 'db2.php';
$su_id=$_GET['s_id'];
mysqli_query($con,"UPDATE `leave_db` SET `result`='Approved' WHERE leave_id='$su_id'");
header('location: leave.php');
?>
