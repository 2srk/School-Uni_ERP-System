<?php  

$sname = "localhost";
$uname = "plak3_Kucon";
$password = "^+8oenZm_~86";

$db_name = "plak3_kucon";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}