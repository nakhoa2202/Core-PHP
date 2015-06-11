<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Demo/css/styles.css">
</head>
<body>
	<!-- login form -->
	<form class = "form-horizontal form" role="form" method="POST">
		<div class="form-group box" style="padding-left: 20px"> 
			<div>Username :</div><input type="text" value="<?php if(isset($_POST['username']) && $_POST['username'] != NULL){ echo $_POST['username']; } ?>" name="username">
			<div>Password :</div><input type="password" name="password">
			<div style="padding-top: 4px"><button type="submit" name="login" color="blue">Log in</button></div>
		</div>
	</form>

</body>
</html>