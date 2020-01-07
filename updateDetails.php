<?php
include("includes/includedFiles.php");
?>

<div class="userDetails">

	<div class="container borderBottom">
		<h2>EMAIL</h2>
		<input type="text" class="email" name="email" placeholder="Addresse email..." value="<?php echo $userLoggedIn->getEmail(); ?>">
		<span class="message"></span>
		<button class="button" onclick="updateEmail('email')">SAUVEGARDER</button>
	</div>

	<div class="container">
		<h2>MOT DE PASSE</h2>
		<input type="password" class="oldPassword" name="oldPassword" placeholder="Mot de passe actuel">
		<input type="password" class="newPassword1" name="newPassword1" placeholder="Nouveau mot de passe">
		<input type="password" class="newPassword2" name="newPassword2" placeholder="Confirmer mot de passe">
		<span class="message"></span>
		<button class="button" onclick="updatePassword('oldPassword', 'newPassword1', 'newPassword2')">SAUVEGARDER</button>
	</div>

</div>