<?php
	include '../config/database.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['message'];
	$query="insert into feedback values('','$name', '$email', '$msg','0',CURDATE(),CURTIME(),'')";
	$res=mysqli_query($link,$query)or die(mysql_error());
	header("Location: ../index.php");	
?>
