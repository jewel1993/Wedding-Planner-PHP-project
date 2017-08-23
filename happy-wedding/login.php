<!--<script language="javascript">
    function validate()
	{
	   var uname=document.reg.uname.value;
	   var pass=document.reg.pass.value;

		if(uname=='')
		  {
			window.alert("Please Enter Username!");
			document.reg.uname.focus();
			return false;
		 }
		if(pass=='')
		  {
			window.alert("Please Enter Password!");
			document.reg.pass.focus();
			return false;
		 }
}
</script>-->
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
		<form action="user/loginHandler.php" name="reg" onSubmit="return validate()">
			<p><input type="text" required name="uname" style="color:black;font-weight:bold;" placeholder="Username or Email"></p>
			<p><input type="password" required name="pass" style="color:black;font-weight:bold;" placeholder="Password"></p>
			<p class="remember_me">
			<a href="register.php">
			  <label>
					don't have an account
			  </label>
			 </a>
			</p>
			<p class="submit"><input class="btn btn1" type="submit" name="commit" style="color:black;font-weight:bold;" value="Login"></p>
		</form>
	  </center>
	</div>
	</div>
<?php include 'includes/footer.php'?>