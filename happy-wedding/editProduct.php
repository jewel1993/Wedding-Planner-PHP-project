<?php
	include 'includes/header.php';
	include 'includes/left-bar.php';
	include 'config/database.php';
?>
	<div class="col-md-10" style="background: url('images/10.jpg') no-repeat;background-size: 100%;">
		<br/>
		<div class="col-md-11" style="min-height:570px;">
		<br/><br/><br/>
		<div style="background:#191970;">	
		<br/><br/><br/>
			
		<?php
			echo "<form action='admin/editProduct.php' method='post' enctype='multipart/form-data'>";
			echo "<center><table>";
			echo "<tr><td>Product ID : </td><td><input type='textbox' style='color:black;margin-top:10px;' name='pid'/></td></tr>";
			echo "<tr><td>Product Name : </td><td><input type='textbox' style='color:black;margin-top:10px;' name='pname'/></td></tr>";
			echo "<tr><td>Price :</td><td><input type='textbox' style='color:black;margin-top:10px;' name='price'/></td></tr>";
			echo "<tr><td>Type :</td><td><select style='color:black;margin-top:10px;' name='type'>";
				echo "<option value='1'>Wedding Stage</option><option value='2'>Car Decoration</option><option value='3'>Gate Decoration</option><option value='4'>Reception Party</option><option value='5'>Invitation Card</option><option value='6'>Wedding Dress</option><option value='7'>Parlour</option>";
			echo "</select></td></tr>";
			echo "<tr><td>Item Image :</td><td><input style='color:black;margin-top:10px;' type='file' name='image' size='30'/></td></tr>";
			echo "</table>";
			echo "<br/>";
			echo "<input type='submit' style='color:black;margin-top:10px;' class='btn btn1' value='Add Product'/>";
			echo "</form></center>";
		?>	
		
		<br/><br/><br/>
		</div>
		</div>
	</div>
	<?php include 'includes/adminDashboardMenu.php';?>
<?php include 'includes/footer.php'?>			

