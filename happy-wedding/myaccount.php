<?php
		include 'includes/header.php';
		if(!isset($_SESSION['suname']))
		{
			header("Location: http://localhost/happy-wedding/index.php");
		}
		include 'includes/left-bar.php';
?>
	<div class="col-md-10" style="background: url('images/7.jpg') no-repeat;background-size: 100%;min-height:570px;">
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<center>
		<?php 
		if(isset($_SESSION['sadmin']))
		{
			echo "<h1>Welcome Admin .</h1><br/>";
			echo "<h4>1) You can control this website from the right side menu</h4>";
			echo "<h4>2) You can see all the products from the left side categories</h4>";
		}
		else
		{
			$name=$_SESSION['suname'];
			echo "<h1>Welcome $name</h1><br/>";
			echo "<h4>1) You can see all the products from the left side categories</h4>";
			echo "<h4>2) You can see your profile , wishlist , order history , more other options from the right side menu </h4>";
		}
		?>
	  </center>
	</div>
	<?php
		if(isset($_SESSION['sadmin']) && $_SESSION['sadmin']==1)
		{	
			include 'includes/adminDashboardMenu.php';
		}
		else
		{
			include 'includes/dashboardMenu.php';
		}
	?>
<?php include 'includes/footer.php'?>