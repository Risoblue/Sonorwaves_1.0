<?php
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account();

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
?>

<html>
<head>
	<meta charset="utf-8">
        <title> Bienvenue à Sonorwaves !</title>
        <link rel="stylesheet" type="text/css" href="assets/css/register.css">
</head>
<body>

    <div id ="background">

		<div id ="loginContainer">

			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST">
					<h2>Se connecter</h2>
					<p>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="eg.aziz_aallam" required>
					</p>
					<p>
						<label for="loginPassword">Mot de passe</label>
						<input id="loginPassword" name="loginPassword" type="password" required>
					</p>

					<button type="submit" name="loginButton">Se connecter</button>

				</form>



				<form id="registerForm" action="register.php" method="POST">
					<h2>S'inscrire gratuitement</h2>
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<label for="username">Username</label>
						<input id="username" name="username" type="text" placeholder="eg.aziz_aallam" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">Prenom</label>
						<input id="firstName" name="firstName" type="text" placeholder="Mohamed Aziz" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Nom</label>
						<input id="lastName" name="lastName" type="text" placeholder="e.g. Aallam" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<label for="email">Email</label>
						<input id="email" name="email" type="email" placeholder="eg:aziz.aallam@gmail.com" required>
					</p>

					<p>
						<label for="email2">Confirmer email</label>
						<input id="email2" name="email2" type="email" required>
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

					<button type="submit" name="registerButton">S'inscrire</button>

				</form>


			</div>
		</div>
	</div>
</body>
</html>
