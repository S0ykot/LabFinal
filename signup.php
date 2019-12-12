<?php


error_reporting(0);
if ($_GET['msg']) {
	$msg = $_GET['msg'];
}


?>
<html>
<head>
	<title>Reg</title>
</head>
<body>
<h3><?=$msg;?>></h3>
<fieldset>
	<legend>REGISTRATION</legend>
	<form>
		<table>
			<tr><td>
				ID <br>
				<input type="text" name="id" id="id">
			</td></tr>
			<tr><td>
				Password <br>
				<input type="password" name="pass1">
			</td></tr>
			<tr><td>
				Confirm Password <br>
				<input type="password" name="pass2">
			</td></tr>
			<tr><td>
				Name <br>
				<input type="text" name="name">
			</td></tr>
			<tr><td>
				Email <br>
				<input type="text" name="email">
			</td></tr>
			<tr><td>
				User Type [Users/Admin]<br>
				<select name="type">
					<option value="users">Users</option>
					<option value="admin">Admin</option>
				</select>
			</td></tr>
			<tr><td>
				<hr>
			</td></tr>
			<tr><td>
				<input type="button" name="submit" value="Register"> <a href="login.php">Login</a>
			</td></tr>
		</table>
	</form>
</fieldset>
</body>
</html>