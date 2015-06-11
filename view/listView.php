<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Demo/css/styles.css">
</head>
<body>
	<?php include("personalView.php"); ?>
	<table style="width:40%; margin: 5px">
	<? foreach ($list as $email => $account) 
	{ 
	?>
	<tr>
		<td><?php echo $account->username; ?></td>
		<td><?php echo $account->email; ?></td>
		<td><?php echo $account->phone; ?></td>
	</tr>
	<?php
	}
	?>
	</table>
</body>
</html>  
