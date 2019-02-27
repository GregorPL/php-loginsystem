<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
	require 'body.php';
?>
	<form method="POST" action="includes/signup.inc.php">
		<input type="text" name="uID" placeholder="Login..">
		<input type="text" name="email" placeholder="E-mail..">
		<input type="password" name="pwd1" placeholder="Password..">
		<input type="password" name="pwd2" placeholder="Repeat password..">
		<button type="submit" name="signup-submit">Signup</button>
	</form>
</html>