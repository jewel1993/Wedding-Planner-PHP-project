<?php
		include 'includes/header.php';
		if(isset($_SESSION['suname']))
		{
			header("Location: http://localhost/happy-wedding/index.php");
		}
		include 'includes/left-bar.php';
?>
	<div class="col-md-10" style="background: url('images/7.jpg') no-repeat;background-size: 100%;min-height:570px;">
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<center>
			<h1>Invalid Username or Password</h1>
			<a href="login.php"><h3>Go back to the login page . </h3></a>
	  </center>
	</div>
	</div>
<?php include 'includes/footer.php'?>