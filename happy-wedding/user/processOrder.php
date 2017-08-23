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
	$res=mysqli_query($link,"update cart set isOrdered='1',date=CURDATE(),time=CURTIME() where isOrdered='0' and uid='$suid' and quantity!='0'")or die(mysql_error());
	$res=mysqli_query($link,"delete from cart where uid='$suid' and quantity='0'")or die(mysql_error());
	echo "<meta http-equiv='refresh' content='0;URL=../cart.php'>";
?>
