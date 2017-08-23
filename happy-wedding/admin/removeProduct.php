<?php
	include '../config/database.php';
	$pname=$_POST['pname'];
	$pid=$_POST['pid'];
	$res=mysqli_query($link,"delete from product where id='$pid' and name='$pname'")or die(mysql_error());
	echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
?>