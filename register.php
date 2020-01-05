<?php
    include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);


	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
	function getInputValue($name) {
	if(isset($_POST[$name])) {
		echo $_POST[$name];
	}
}
?>

<html>
<head>
	<meta charset="utf-8">
        <title> Bienvenue à Sonorwaves !</title>
        <link rel="stylesheet" type="text/css" href="assets/css/register.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
</head>
<body>

<?php
/*
if(isset($_POST['registerButton'])) {
	echo '<script>
			$(document).ready(function() {
				$("#loginForm").hide();
				$("#registerForm").show();
			});
		</script>';
}
else {
	echo '<script>
			$(document).ready(function() {
				$("#loginForm").show();
				$("#registerForm").hide();
			});
		</script>';
}
*/
?>


<div id ="background">

 <div id ="loginContainer">

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Se connecter</h2>
			<p>
		
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="eg.aziz_aallam"  value="<?php getInputValue('loginUsername') ?>" required>
					</p>
					<p>
		<label for="loginPassword">Mot de passe</label>
		<input id="loginPassword" name="loginPassword" type="password" required>
		</p>
		<button  id="seconnecter" type="submit" name="loginButton">Se connecter</button>
		<div class="hasAccountText">
		<span id="hideLogin">Vous n'avez pas encore de compte? Inscrivez-vous ici.</span>
					</div>

				</form>



	<form id="registerForm" action="register.php" method="POST">
		<h2>S'inscrire gratuitement</h2>
		<p>
		<?php echo $account->getError(Constants::$usernameCharacters); ?>
		<label for="username">Username</label>
		<input id="username" name="username" type="text" placeholder="eg.aziz_aallam" value="<?php getInputValue('username') ?>" required>
		</p>

		<p>
			<?php echo $account->getError(Constants::$firstNameCharacters); ?>
			<label for="firstName">Prenom</label>
			<input id="firstName" name="firstName" type="text" placeholder="Mohamed Aziz"  value="<?php getInputValue('firstName') ?>" required>
		</p>

		<p>
		<?php echo $account->getError(Constants::$lastNameCharacters); ?>
		<label for="lastName">Nom</label>
		<input id="lastName" name="lastName" type="text" placeholder="e.g. Aallam" value="<?php getInputValue('lastName') ?>" required>
	</p>

		<p>
	<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
	<?php echo $account->getError(Constants::$emailInvalid); ?>
			<label for="email">Email</label>
			<input id="email" name="email" type="email" placeholder="eg:aziz.aallam@gmail.com" value="<?php getInputValue('email') ?>"  required>
		</p>

		<p>
			<label for="email2">Confirmer email</label>
			<input id="email2" name="email2" type="email" value="<?php getInputValue('email2') ?>"  required>
		</p>

		<p>
			<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
			<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
			<?php echo $account->getError(Constants::$passwordCharacters); ?>
			<label for="password">Password</label>
			<input id="password" name="password" type="password" required>
		</p>

		<p>
			<label for="password2">Confirmer mot de passe</label>
			<input id="password2" name="password2" type="password"  required>
		</p>

		<button  id="sinscrire" type="submit" name="registerButton">S'inscrire</button>

		<div class="hasAccountText">
		<span id="hideRegister">Vous avez déjà un compte? Connectez-vous ici.</span>
	</div>
	
	</form>


	</div>

	<div id="loginText">
		<h1>Obtenez de la bonne musique dès maintenant</h1>
		<h2>
Écoutez des tas de chansons gratuitement</h2>
		<ul>
			<li>Découvrez la musique dont vous tomberez amoureux</li>
			<li>Créez vos propres playlists</li>
			<li>Suivez les artistes pour rester à jour</li>
		</ul>


			</div>
		</div>
	</div>
</body>
</html>
