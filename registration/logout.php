<?php
	// STARTING SESSION, THEN DESTROYING
	session_start();
	session_destroy();
	header("location: /mes/registration/login.php");
?>
