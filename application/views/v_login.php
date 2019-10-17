<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
</head>
<body>
	<center><h2>Login</h2></center>
	<form action="<?php echo base_url('login/login') ?>" method="post">
		<table style="margin: 20px auto">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" class="form-control"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" class="form-control"></td>
			</tr>
		</table>
		<center><input type="submit" value="Login" class="btn btn-primary"></center>
	</form>
</body>
</html>