<?php
	ob_start();

	$timezone = date_default_timezone_set("Europe/Paris");

	$con = mysqli_connect( "localhost", "root" , "" , "Sonorwaves" );

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
