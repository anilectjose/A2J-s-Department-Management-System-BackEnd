<?php
include 'db2.php';
$su_id=$_GET['s_id'];
$logid=mysqli_query($con,"SELECT * FROM `notification_db` WHERE notification_id='$su_id'");
/*$login=mysqli_fetch_asssoc($logid);*/
mysqli_query($con,"DELETE FROM `notification_db` WHERE notification_id='$su_id'");
header('location: noti_view.php');
?>
