<div id="navBarContainer">
    <nav class="navBar">

        <a href="index.php" class="logo">
            <img src="assets/images/icons/logo.png">
        </a>


        <div class="group">

            <div class="navItem">
                <a href="search.php" class="navItemLink">Rechercher
                    <img src="assets/images/icons/search.png" class="icon" alt="Search">
                </a>
            </div>

        </div>

        <div class="group">
            <div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Explorer</span>
			</div>

           <!--  <div class="navItem">
                <a href="yourMusic.php" class="navItemLink">Your Music</a>
            </div> -->

            <div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
			</div>
        </div>




    </nav>
	</div>