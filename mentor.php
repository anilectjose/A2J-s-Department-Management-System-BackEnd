<?php
include 'db2.php';
$su_id=$_GET['s_id'];
$mentor=$_POST['ment'];
echo $mentor;
$logid=mysqli_query($con,"SELECT * FROM `stud_detail` WHERE stu_id='$su_id'");
/*$login=mysqli_fetch_asssoc($logid);*/
mysqli_query($con,"UPDATE `stud_detail` SET `year`='$mentor' WHERE stu_id='$su_id'");
header('location: view-teachers.php');
?>
