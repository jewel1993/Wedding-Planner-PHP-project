<?php

// Inialize session
session_start();

// Include database connection settings
	include '../config/database.php';
	$suid=$_SESSION['suid'];
	$pid=$_REQUEST['subject'];
	echo "$suid $pid";
	$res=mysqli_query($link,"delete from cart where uid='$suid' and pid='$pid' and quantity='0'")or die(mysql_error());
	echo "<meta http-equiv='refresh' content='0;URL=../cart.php'>";
?>
