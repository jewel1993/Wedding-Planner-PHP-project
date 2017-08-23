<?php
	include '../config/database.php';
	$id=$_POST['save'];
	$msg=$_POST['answer'];
	$res=mysqli_query($link,"update feedback set answer='$msg' where id='$id'")or die(mysql_error());
	echo "<meta http-equiv='refresh' content='0;URL=../inbox.php'>";
?>