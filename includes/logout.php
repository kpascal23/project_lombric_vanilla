<?php
	//détruit la session et redirige
	session_start();
	session_destroy();
	header('location:../page/home.php');

?>