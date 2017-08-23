<?php

// Inialize session
session_start();

// Include database connection settings
include '../config/database.php';

	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$cpass=$_POST['cpass'];
	$uid=$_SESSION['suid'];
	echo $uid;
	if($uid!=1)
	{
		$res=mysqli_query($link,"select * from user where id='$uid' and pass='$opass'")or die(mysql_error());
	}
	else
	{
		$res=mysqli_query($link,"select * from admin where id='$uid' and pass='$opass'")or die(mysql_error());
	}
// Check username and password match
if (mysqli_num_rows($res) == 1) {
	// Set username session variable
	while($arr=mysqli_fetch_row($res))
	{
		if($uid!=1)
		{
			$res1=mysqli_query($link,"update user set pass='$npass' where id='$uid'")or die(mysql_error());
		}
		else
		{
			echo "hhh";
			$res1=mysqli_query($link,"update admin set pass='$npass' where id='$uid'")or die(mysql_error());
		}
		
	}	
	// Jump to secured page
	 header("Location: ../passwordChanged.php");
}
else {
   header("Location: ../passwordNotChanged.php");	
}
?>