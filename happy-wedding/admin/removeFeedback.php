<?php
	include '../config/database.php';
	$id=$_POST['removeFeedback'];
	$res=mysqli_query($link,"delete from feedback where id='$id'")or die(mysql_error());
	echo "<meta http-equiv='refresh' content='0;URL=../inbox.php'>";
?>