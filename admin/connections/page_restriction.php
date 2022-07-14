<?php ob_start();
	if ($_SESSION['username']==""){
		echo "<script type='text/javascript'>window.top.location='index.php';</script>";
	}
?>

 <?php ob_flush(); ?>