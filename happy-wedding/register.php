<script language="javascript">
    function validate()
	{
	   var pass=document.reg.password.value;
	   var cpass=document.reg.password_confirmation.value;
		if(pass!=cpass)
		{
			window.alert("Password and Confirmed password are not same!");
			document.reg.password.focus();
			return false;
		}
	}
</script>
<?php
		include 'includes/header.php';
		if(isset($_SESSION['suname']))
		{
			header("Location: http://localhost/happy-wedding/index.php");
		}
		include 'includes/left-bar.php';
?>
	<div class="col-md-10" style="background: url('images/8.jpg') no-repeat;background-size: 100%;min-height:570px;">
		<br/>
		<br/><br/><br/><br/><br/>
		<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title" style="color:black;font-weight:bold;">Register in Happy Wedding</small></h3>
			 			</div>
			 			<div class="panel-body" style="background-color:#F6DDCC">
			    		<form role="form" action="user/signupHandler.php" name="reg" onSubmit="return validate()" method="post" enctype="multipart/form-data">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                			<input type="text" required name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" style="color:black;font-weight:bold;">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" required name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" style="color:black;font-weight:bold;">
			    					</div>
			    				</div>
			    			</div>
						<div class="form-group">
			    				<input type="text" name="uname" required id="email" class="form-control input-sm" placeholder="User Name" style="color:black;font-weight:bold;">
			    			</div>
			    			<div class="form-group">
			    				<input type="email" name="email" required id="email" class="form-control input-sm" placeholder="Email Address" style="color:black;font-weight:bold;">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" required name="password" id="password" class="form-control input-sm" placeholder="Password" style="color:black;font-weight:bold;">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" required name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" style="color:black;font-weight:bold;">
			    					</div>
			    				</div>
								
			    			</div>
							<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="file" name="image"/>
			    					</div>
			    				</div>
								
			    			</div>
			    			<input type="submit" value="Register" class="btn btn-info btn-block" style="color:black;font-weight:bold;">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
			
    	</div>
    </div>
	</div>
<?php include 'includes/footer.php'?>			

