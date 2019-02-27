<?php
	if(isset($_POST['signup-submit'])){
		require 'db.inc.php';

		$uID = $_POST['uID'];
		$email = $_POST['email'];
		$pwd1 = $_POST['pwd1'];
		$pwd2 = $_POST['pwd2'];

		if (empty($uID) || empty($email) || empty($pwd1) || empty($pwd2)) {
			header("Location: ../index.php?emptyfields&uid=".$uID."&email=".$email);
			exit();
		}
		else if (filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/*[a-zA-Z0-9]*/", $uID)) {
			header("Location: ../index.php?incorrectemail&uid");
			exit();
		}
		else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../index.php?incorrectemail");
			exit();
		}
		else if (preg_match("/*[a-zA-Z0-9]*/", $uID)) {
			header("Location: ../index.php?incorrectuid");
			exit();
		}
		else if ($pwd1 !== $pwd2) {
			header("Location: ../index.php?passwordnotmatches");
			exit();
		}
	}
	else{
		header("Location:../index.php");
		exit();
	}
?>