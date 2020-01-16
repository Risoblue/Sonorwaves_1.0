<?php
include("../../config.php");

if(!isset($_POST['username'])) {
	echo "ERREUR: Impossible de définir le nom d'utilisateur";
	exit();
}

if(!isset($_POST['oldPassword']) || !isset($_POST['newPassword1'])  || !isset($_POST['newPassword2'])) {
	echo "Tous les mots de passe n'ont pas été définis";
	exit();
}

if($_POST['oldPassword'] == "" || $_POST['newPassword1'] == ""  || $_POST['newPassword2'] == "") {
	echo "Merci de remplir tous les champs";
	exit();
}

$username = $_POST['username'];
$oldPassword = $_POST['oldPassword'];
$newPassword1 = $_POST['newPassword1'];
$newPassword2 = $_POST['newPassword2'];

$passwordCheck = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$oldPassword'");
if(mysqli_num_rows($passwordCheck) != 1) {
	echo "Le mot de passe est incorrect";
	exit();
}

if($newPassword1 != $newPassword2) {
	echo "Vos nouveaux mots de passe ne correspondent pas";
	exit();
}

if(preg_match('/[^A-Za-z0-9]/', $newPassword1)) {
	echo "Votre mot de passe ne doit contenir que des lettres et / ou des chiffres";
	exit();
}

if(strlen($newPassword1) > 30 || strlen($newPassword1) < 5) {
	echo "Votre nom d'utilisateur doit comprendre entre 5 et 30 caractères";
	exit();
}
$query = mysqli_query($con, "UPDATE users SET password='$newPassword1' WHERE username='$username'");
echo "Mise à jour réussie";

?>