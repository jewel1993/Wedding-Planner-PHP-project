<?php
	include 'includes/header.php';
	include 'includes/left-bar.php';
?>
	<div class="col-md-6" style="background: url('images/11.jpg') no-repeat;background-size: 100%;min-height:570px;">
		<br/>
		<br/><br/><br/><br/><br/>
		<center>
        <form id="contact_form" action="user/feedbackHandler.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<label for="name">Your name:</label><br />
				<input id="name" required class="input" name="name" type="text" value="" size="30" style="color:black;font-weight:bold;" /><br />
			</div>
			<div class="row">
				<label for="email">Your email:</label><br />
				<input id="email" required class="input" name="email" type="text" value="" size="30" style="color:black;font-weight:bold;" /><br />
			</div>
			<div class="row">
				<label for="message">Your message:</label><br />
				<textarea id="message" required class="input" name="message" rows="7" cols="30" style="color:black;font-weight:bold;"></textarea><br />
			</div>
			<input id="submit_button" style="color:black;font-weight:bold;" type="submit" value="Send email" />
		</form>		
		</center>
	</div>
	<div class="col-md-4" style="background: url('images/5.jpg') no-repeat;background-size: 100%;min-height:570px;">
	</div>
<?php include 'includes/footer.php'?>			

