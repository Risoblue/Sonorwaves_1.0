<?php
include("includes/config.php");

//session_destroy(); LOGOUT
/*
if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}
*/
?>
<html>
<head>
	<title>Welcome to Sonorwaves!</title>
	<link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>


<div id="mainContainer">

<div id="topContainer">

	<?php include("includes/navBarContainer.php");?>

</div>

<?php include("includes/nowPlayingBarContainer.php");?>
</div>



</body>

</html>
