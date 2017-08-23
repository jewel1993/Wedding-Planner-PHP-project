<script language="javascript">
    function validate()
	{
	   var opass=document.reg.opass.value;
	   var npass=document.reg.npass.value;
	   var cpass=document.reg.cpass.value;

		if(opass=='')
		  {
			window.alert("Please Enter Old Password!");
			document.reg.opass.focus();
			return false;
		 }
		if(npass=='')
		  {
			window.alert("Please Enter New Password!");
			document.reg.npass.focus();
			return false;
		 }
		 if(cpass=='')
		  {
			window.alert("Please Enter Confirm Password!");
			document.reg.cpass.focus();
			return false;
		 }
		 if(cpass!=npass)
		  {
			window.alert("New Password and Confirm Password are not same!");
			document.reg.npass.focus();
			return false;
		 }
}
</script>
<?php
	include 'includes/header.php';
	include 'includes/left-bar.php';
	include 'config/database.php';
?>
	<div class="col-md-10" style="background: url('images/7.jpg') no-repeat;background-size: 100%;min-height:570px;">
		<br/><br/><br/><br/><br/><br/><br/>
		<?php
			echo "<form action='user/passwordHandler.php' method='post' name='reg' onSubmit='return validate()'>";
			echo "<center><table>";
			echo "<tr><td>Old password</td><td><input type='textbox' style='color:black;margin-top:10px;' name='opass'/></td></tr>";
			echo "<tr><td>New Password</td><td><input type='textbox' style='color:black;margin-top:10px;' name='npass'/></td></tr>";
			echo "<tr><td>Confirm Password &nbsp;</td><td><input type='textbox' style='color:black;margin-top:10px;' name='cpass'/></td></tr>";
			echo "</table>";
			echo "<input type='submit' class='btn btn1' style='color:black;margin-top:10px;' value='Change Password'/>";
			echo "</form></center>";
		?>	
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

