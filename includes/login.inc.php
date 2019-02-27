<?php
	if(isset($_POST['login-submit'])){
		require 'db.inc.php';

		echo $_POST['login'];
	}
	else{
		header("Location:../index.php");
		exit();
	}

?>