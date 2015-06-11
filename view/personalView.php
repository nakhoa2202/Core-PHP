<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Demo/css/styles.css">
</head>
<body>

	<form class = "form-horizontal form" role="form" method="POST">
		<div class="form-group box" style="padding-left: 20px"> 
			<h1>This is your page!!!!</h1>
			<?php session_start(); ?>
			<p>Welcome <b style="color: green"><?php echo $_SESSION['username']?></b>.</p>
			<p>You can do any actions in here.</p>
			<p>Please select function : </p>
			<ul style="list-style-type:circle"> 
			<li><a href="index.php?changepass">Change your password</a></li>
			<li><a href="index.php?showlist">List of all users</a></li>
			<li><a href="index.php?logout">Log out</a></li>
			</ul>
		</div>
	</form>

</body>
</html>