<?php
	include '../config/database.php';
	$pname=$_POST['pname'];
	$price=$_POST['price'];
	$type=$_POST['type'];
	if($type==1)
		$category="stage_decoration";
	else if($type==2)
		$category="car";
	else if($type==3)
		$category="gate";
	else if($type==4)
		$category="reception";
	else if($type==5)
		$category="card";
	else if($type==6)
		$category="dress";
	else if($type==7)
		$category="parlour";
	$image="images/".$category."/".basename($_FILES['image']['name']);
	$target="../".$image;
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
		$res=mysqli_query($link,"insert into product values('','$type','$image','$price','$pname')")or die(mysql_error());
		echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
	}
	else
	{
		echo "File could not be uploaded successfully.";
	}
?>