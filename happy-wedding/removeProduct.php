<?php
	include 'includes/header.php';
	include 'includes/left-bar.php';
	include 'config/database.php';
?>
	<div class="col-md-10" style="background: url('images/10.jpg') no-repeat;background-size: 100%;">
		<br/>
		<div class="col-md-11" style="min-height:570px;">
		<br/><br/><br/><br/><br/>
		<div style="background:#191970;">	
		<br/><br/><br/>	
		<?php
			echo "<form action='admin/removeProduct.php' method='post'>";
			echo "<center><table>";
			echo "<tr><td>Product ID</td><td><input type='textbox' style='color:black;' name='pid'/></td></tr>";
			echo "<tr><td>Product Name</td><td><input type='textbox' style='color:black;margin-top:10px;' name='pname'/></td></tr>";
			echo "</table><br/>";
			echo "<input type='submit' class='btn btn1' value='Remove Product'/>";
			echo "</form></center>";
		?>	
		<br/><br/><br/>
		</div>
		</div>
	</div>
	<?php include 'includes/adminDashboardMenu.php';?>
<?php include 'includes/footer.php'?>			

