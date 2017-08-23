<?php
	include 'includes/header.php';
	include 'includes/left-bar.php';
	include 'config/database.php';
?>
	<div class="col-md-10" style="background:#4682B4;min-height:570px;">
		<br/>
		<div class="col-md-11" style="background:#4682B4;min-height:570px;">
		<br/>
		
			
		<?php
			$res=mysqli_query($link,"select * from user")or die(mysql_error());
			while($arr=mysqli_fetch_row($res))
			{
					echo "<div class='col-md-4 game'>";
					if($arr[6]!='')
						echo "<img src='$arr[6]'/>";
					else
						echo "<img src='images/icons/3.jpg'/>";
					echo "<div class='game-title' style='background:green;'>$arr[2] $arr[3]</div>";
						echo "<br/>";
						echo "<div class='col-md-4 game'>";
						echo "<form action='profile.php'>";
							echo "<button name='profile' value='$arr[0]' class='btn btn2' type='submit'>Profile</button>&nbsp;&nbsp;";
						echo "</form>";	
						echo "</div>";
						echo "<div class='col-md-4 game'>";
						echo "<form action='orderHistory.php'>";	
							echo "<button name='orders' value='$arr[0]' class='btn btn2' type='submit'>Orders</button>&nbsp;&nbsp;";
						echo "</form>";	
						echo "</div>";
						echo "<div class='col-md-4 game'>";
						echo "<form action='cart.php'>";	
							echo "<button name='cart' value='$arr[0]' class='btn btn2' type='submit' style='float:right;'>Cart</button>&nbsp;&nbsp;";
						echo "</form>";	
						echo "</div>";
				echo "</div>";
			}
		?>	
	</div>
	</div>
	<?php include 'includes/adminDashboardMenu.php';?>
<?php include 'includes/footer.php'?>			
