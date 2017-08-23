<?php

// Inialize session
session_start();

// Include database connection settings
	include '../config/database.php';
	$suid=$_SESSION['suid'];
	$pid=$_REQUEST['subject'];
	echo "$suid $pid";
	$res=mysqli_query($link,"delete from wishlist where uid='$suid' and pid='$pid'")or die(mysql_error());
	echo "<meta http-equiv='refresh' content='0;URL=../wishlist.php'>";
?>
