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
	$res1=mysqli_query($link,"select * from cart where uid='$suid' and pid='$pid' and isOrdered='0'")or die(mysql_error());
	$row=mysqli_num_rows($res1);
	if($row==0)
	{
		$res2=mysqli_query($link,"insert into cart values($suid,$pid,'',0,'','')")or die(mysql_error());
	}
	echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
?>
