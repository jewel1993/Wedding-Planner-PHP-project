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
	$pid=$_REQUEST['add'];
	$quantity=$_POST['quantity'];
	$res=mysqli_query($link,"update cart set quantity='$quantity' where uid='$suid' and pid='$pid' and isOrdered='0'")or die(mysql_error());
	echo "<meta http-equiv='refresh' content='0;URL=../cart.php'>";
?>
