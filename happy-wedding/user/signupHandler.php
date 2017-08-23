<?php
	include '../config/database.php';
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$image="images/users/".basename($_FILES['image']['name']);
	$target="../".$image;
	if($image=='images/users/')
	{
		$query="insert into user values('','$uname', '$fname', '$lname', '$email', '$pass','')";
		$res=mysqli_query($link,$query)or die(mysql_error());
	}
	else
	{
		$query="insert into user values('','$uname', '$fname', '$lname', '$email', '$pass','$image')";
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
		$res=mysqli_query($link,$query)or die(mysql_error());
		}	
	}
	header("Location: ../validSignup.php");	
?>
