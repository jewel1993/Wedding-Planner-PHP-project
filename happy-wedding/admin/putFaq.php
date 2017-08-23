<?php
	include '../config/database.php';
	$id=$_POST['putFaq'];
	$res=mysqli_query($link,"update feedback set faq='1' where id='$id'")or die(mysql_error());
	echo "<meta http-equiv='refresh' content='0;URL=../inbox.php'>";
?>