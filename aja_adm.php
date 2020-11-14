<?php
include 'db2.php';
if (isset($_POST["submit"]))
{
	$usrname = $_POST['usrnm'];
	$password = $_POST['pswd'];





    if($query)
{
	echo "<br>Successful";
}
else
{
	echo "Failed";
}
}
    ?>