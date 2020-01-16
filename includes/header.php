<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");
include("includes/classes/User.php");


//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = new User($con,$_SESSION['userLoggedIn']);
	$utilisateur=$userLoggedIn->getUsername();
	echo "<script>userLoggedIn = '$utilisateur';</script>";
}
else {
	header("Location: register.php");
}

?>
<html>
<head>
	<title>Bienvenue à Sonorwaves!</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">

			<?php include("includes/navBarContainer.php");?>
			<div id="mainViewContainer">
				<div id="mainContent">