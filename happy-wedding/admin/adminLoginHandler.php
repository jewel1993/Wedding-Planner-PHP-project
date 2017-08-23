<?php

// Inialize session
session_start();

// Include database connection settings
include '../config/database.php';

	$uname=$_GET['uname'];
	$pass=$_GET['pass'];
	$res1=mysqli_query($link,"select * from admin where uname='$uname' and pass='$pass'")or die(mysql_error());
	
// Check username and password match
if(mysqli_num_rows($res1) == 1){
	//for admin login
	while($arr=mysqli_fetch_row($res1))
	{
		$_SESSION['suid']=$arr[0];
		$_SESSION['suname']=$arr[2];
	}
	$_SESSION['sid']=1;
	$_SESSION['sadmin']=1;
	// Jump to secured page
	header("Location: ../myaccount.php");
}
else {
   header("Location: ../invalidLogin.php");	
}
?>