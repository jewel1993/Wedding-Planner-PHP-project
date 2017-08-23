<?php include 'includes/header.php'?>	
<?php include 'includes/left-bar.php'?>
<?php include 'config/database.php';?>
<?php 
	$query="select * from comment";
	$chats=mysqli_query($con,$query);
?>
	<div class="col-md-10" style="background: pink;min-height:570px;">
		<br/>
		<div id="header" class="centered">
			<h1>Feedbacks</h1>
		</div>
		<div id="chatbox">
			<ul>
				<?php while($row=mysqli_fetch_assoc($chats)) : ?>
					<li class="chat"><font color="red" size="5px"><?php echo $row['time'] ?>:</font><font color="Green" size="5px"><?php echo $row['user'] ?>></font><?php echo $row['msg'] ?></li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div id="input" class="centered">
			<form action="user/process.php" method="post">
				<input type="text" name="user" placeholder="Enter your name"/>
				<input type="text" name="comment" placeholder="Enter your comment"/></br>
				<input type="Submit" name="submit" value="Send"/>
			</form>
		</div>
		<div>
			<div id="footer" class="centered">
				Acharya Institute Of Technology
			</div>
		</div>
	</div>
<?php include 'includes/footer.php'?>