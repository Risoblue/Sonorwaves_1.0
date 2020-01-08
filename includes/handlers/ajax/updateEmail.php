<?php
include("../../config.php");

if(!isset($_POST['username'])) {
	echo "ERREUR: Impossible de définir le nom d'utilisateur";
	exit();
}

if(isset($_POST['email']) && $_POST['email'] != "") {

	$username = $_POST['username'];
	$email = $_POST['email'];

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "L'email est invalide";
		exit();
	}

	$emailCheck = mysqli_query($con, "SELECT email FROM users WHERE email='$email' AND username != '$username'");
	if(mysqli_num_rows($emailCheck) > 0) {
		echo "cet email est déjà utilisé
";
		exit();
	}

	$updateQuery = mysqli_query($con, "UPDATE users SET email = '$email' WHERE username='$username'");
	echo "Mise à jour réussie";

}
else {
	echo "Vous devez fournir un e-mail";
}

?>