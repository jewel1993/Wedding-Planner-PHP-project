<?php
	include 'includes/header.php';
	include 'includes/left-bar.php';
	include 'config/database.php';
?>
	<div class="col-md-10" style="background:#D5D8DC;min-height:570px;">
		<br/>
		<?php
		echo "<div class='col-md-2 game'>";
			echo "<center><h4 style='color:black;'><u>Date and Time</u></h4></center>";
		echo "</div>";
		echo "<div class='col-md-3 game'>";
			echo "<center><h4 style='color:black;'><u>Name and Email</u></h4></center>";
		echo "</div>";
		echo "<div class='col-md-4 game'>";
			echo "<center><h4 style='color:black;'><u>Message and Answer</u></h4></center>";
		echo "</div>";
		echo "<div class='col-md-2 game'>";
			echo "<center><h4 style='color:black;'><u>Options</u></h4></center>";
		echo "</div>";
		echo "<div class='col-md-1 game'>";
			echo "<center><h4 style='color:black;'><u>Null</u></h4></center>";
		echo "</div>";
			$res=mysqli_query($link,"select * from feedback")or die(mysql_error());
			while($arr1=mysqli_fetch_row($res))
			{
					echo "<div class='col-md-2 game' style='height:120px;top:45px'>";
						echo "<div class='game-add'><button name='add' value='$arr1[5]' class='btn btn2' style='width:100px;' type='submit'>$arr1[5]</button></div>";
						echo "<div class='game-add'><button name='add' value='$arr1[6]' class='btn btn2' style='width:100px;' type='submit'>$arr1[6]</button></div>";
					echo "</div>";
					echo "<div class='col-md-3 game' style='height:120px;top:50px'>";
						echo "<div class='game-title'>$arr1[1]</div><br/>";
						echo "<div class='game-title'>$arr1[2]</div>";
					echo "</div>";
					echo "<div class='col-md-4 game' style='height:120px;top:50px;'>";
						echo "<div class='game-title'>$arr1[3]</div><br/>";
						echo "<form action='admin/saveFeedback.php' method='post'>";
						echo "<input type='text'  name='answer' placeholder='$arr1[7]' style='color:black;width:100%;'/>";
					echo "</div>";
					echo "<div class='col-md-1 game' style='height:120px;top:45px'>";
						echo "<div class='game-add'><button name='save' value='$arr1[0]' style='width:80px;' class='btn btn2' type='submit'>Save</button></div>";
						echo "</form>";
						echo "<form action='admin/putFaq.php' method='post'>";
						echo "<div class='game-add'><button name='putFaq' value='$arr1[0]' class='btn btn2' type='submit'>Put FAQ</button></div>";
					echo "</div></form>";
					echo "<div class='col-md-1 game' style='height:120px;top:45px'>";
						echo "<form action='admin/removeFaq.php' method='post'>";
						echo "<div class='game-add'><button name='removeFaq' value='$arr1[0]' class='btn btn2' type='submit'>DeleteFAQ</button></div>";
						echo "</form>";
						echo "<form action='admin/removeFeedback.php' method='post'>";
						echo "<div class='game-add'><button name='removeFeedback' value='$arr1[0]' class='btn btn2' type='submit'>Delete</button></div>";
					echo "</div></form>";
					echo "<div class='col-md-1 game' style='height:120px;top:45px'></div>";
			}
			
			echo "</div>";	
		?>
	<?php
		include 'includes/adminDashboardMenu.php';
	?> 
<?php include 'includes/footer.php'?>	

