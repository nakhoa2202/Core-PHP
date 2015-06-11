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
			<div>Username :</div><input type="text" name="regname" value="<?php if(isset($_POST['regname']) && $_POST['regname'] != NULL){ echo $_POST['regname']; } ?>">
			<div>Password :</div><input type="password" name="regpass1">
			<div>Retype password :</div><input type="password" name="regpass2">
			<div>Your email :</div><input type="text" name="regemail" value="<?php if(isset($_POST['regemail']) && $_POST['regemail'] != NULL){ echo $_POST['regemail']; } ?>">
			<div>Your phone :</div><input type="text" name="regphone" value="<?php if(isset($_POST['regphone']) && $_POST['regphone'] != NULL){ echo $_POST['regphone']; } ?>">
			<div style="padding-top: 4px">
				<button type="submit" name="register" style="float: right,color: blue">Register</button>
			</div>	
		</div>
	</form>

</body>
</html>