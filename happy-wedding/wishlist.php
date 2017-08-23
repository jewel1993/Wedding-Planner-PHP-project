<?php
		include 'includes/header.php';
		include 'includes/left-bar.php';
		include 'config/database.php';
?>
	<div class="col-md-10" style="background:#D5D8DC;min-height:570px;">
		<br/>
		<?php
			$uid=$_SESSION['suid'];
			$res=mysqli_query($link,"select * from wishlist where uid='$uid'")or die(mysql_error());
			while($arr1=mysqli_fetch_row($res))
			{
				$pid=$arr1[1];
				$res1=mysqli_query($link,"select * from product where id='$pid'")or die(mysql_error());
				while($arr=mysqli_fetch_row($res1))
				{
					echo "<div class='col-md-3 game'>";
					echo "<div class='game-price'>$$arr[3]</div>";
					echo "<a href='$arr[2]'><img src='$arr[2]'/></a>";
					echo "<div class='game-title'>$arr[4]</div>";
					echo "<form action='user/addToCart.php'>";
						echo "<div class='game-add' style='float:left;'><button name='subject' value='$arr[0]' class='btn btn2' type='submit'>Add To Cart</button></div>";
					echo "</form>";
					echo "<form action='user/removeFromWishlist.php'>";
						echo "<div class='game-add' style='float:right;'><button name='subject' value='$arr[0]' class='btn btn2' type='submit'>Remove</button></div>";
					echo "</form>";
				echo "</div>";
				}
			}
		?>
		
	</div>
	<?php
		include 'includes/dashboardMenu.php';
	?>
<?php include 'includes/footer.php'?>						

