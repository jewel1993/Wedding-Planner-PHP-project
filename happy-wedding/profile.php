<?php
		include 'includes/header.php';
		/*if(!isset($_SESSION['suname']))
		{
			header("Location: http://localhost/happy-wedding/login.php");
		}*/
		include 'includes/left-bar.php';
		// Include database connection settings
		include 'config/database.php';
?>
<div class="col-md-10" style="background: url('images/7.jpg') no-repeat;background-size: 100%;min-height:570px;"">
		<br/><br/><br/><br/><br/>
		<div class="col-md-11">
		<br/>
		<?php
			
			if(isset($_REQUEST['profile']))
			{
				$profile=$_REQUEST['profile'];
			}
			else
			{
				$profile=$_SESSION['suid'];
			}
			$res=mysqli_query($link,"select * from user where id='$profile'")or die(mysql_error());
			while($arr=mysqli_fetch_row($res))
			{
				echo "<div class='col-md-3 game'>";
				if($arr[6]!='')
					echo "<img src='$arr[6]'/>";
				else
					echo "<img src='images/icons/3.jpg'/>";
				echo "</div>";
				echo "<div class='col-md-1 game'>";
					
				echo "</div>";
				echo "<div class='col-md-6 game' style='background:#f5deb3;'>";
					echo "<table><tr><td><h3 style='color:black;'>Name : </h3></td><td><h3 style='color:green;'>$arr[2] $arr[3]</h3></td></tr>";
					echo "<tr><td><h3 style='color:black;'>Email : </h3></td><td><h3 style='color:green;'>$arr[4]</h3></td></tr>";
					echo "<tr><td><h3 style='color:black;'>Username : &nbsp;&nbsp;&nbsp;</h3></td><td><h3 style='color:green;'>$arr[1]</h3></td></tr>";
					if(isset($_SESSION['sadmin']) && $_SESSION['sadmin']==1)
					{	
						echo "<tr><td><h3 style='color:black;'>User ID : </h3></td><td><h3 style='color:green;'>$arr[0]</h3></td></tr>";
						echo "<tr><td><h3 style='color:black;'>Password : </h3></td><td><h3 style='color:green;'>$arr[5]</h3></td></tr>";
					}
					echo "</table>";
				echo "</div>";
			}
		?>
	</div>
	</div>
	<?php	
		if(isset($_SESSION['sadmin']))
		{
			include 'includes/adminDashboardMenu.php';
		}
		else
		{
			include 'includes/dashboardMenu.php';
		}
	?>
<?php include 'includes/footer.php'?>	
		

