<?php error_reporting(0);
@session_start();
	include("config.php");
	 	
	

@session_destroy();
header("location:index.php");
exit;
?>