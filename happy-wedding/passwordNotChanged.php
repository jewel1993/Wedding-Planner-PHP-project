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
			<h1>Your Entered Old Password is not Correct</h1>
			<a href="changePassword.php"><h3>Try Again</h3></a>
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