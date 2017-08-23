<?php

// Inialize session
session_start();
if(!isset($_SESSION['suname']))
	{
			header("Location: http://localhost/happy-wedding/login.php");
	}
// Include database connection settings
	include '../config/database.php';
	$suid=$_SESSION['suid'];
	$pid=$_REQUEST['subject'];
	$res=mysqli_query($link,"insert into wishlist values($suid,$pid)")or die(mysql_error());
	echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
?>
