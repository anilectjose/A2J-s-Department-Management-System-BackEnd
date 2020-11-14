<?php
include 'db2.php';
$su_id=$_GET['s_id'];
$logid=mysqli_query($con,"SELECT * FROM `complaint_db` WHERE complaint_id='$su_id'");
/*$login=mysqli_fetch_asssoc($logid);*/
mysqli_query($con,"UPDATE `complaint_db` SET `reply`='Meet me TODAY' WHERE complaint_id='$su_id'");
header('location: complait.php');
?>
