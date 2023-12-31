<?php

$current_page = basename($_SERVER['PHP_SELF']);

?>

<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

	<div class="container">

		<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">

			<span class="navbar-toggler-icon"></span>

		</button>


		<div class="collapse navbar-collapse" id="navbarsFurni">

			<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">

				<li class="<?php if ($current_page == "index.php") {
								echo "nav-item active";
							} ?>">
					<a class="nav-link" href="index.php">Home</a>
				</li>

				<?php
				if (!empty($_SESSION)) {

				if ($_SESSION['power'] == 1) { ?>

					<li class="<?php if ($current_page == "creation.php") {
									echo "nav-item active";
								} ?>">
						<a class="nav-link" href="creation.php">Créer un Produit</a>
					</li>
				<?php }
				} ?>
				
				<li class="<?php if ($current_page == "shop.php") {
								echo "nav-item active";
							} ?>">
					<a class="nav-link" href="shop.php">Shop</a>
				</li>

				<li class="<?php if ($current_page == "about.php") {
								echo "nav-item active";
							} ?>">
					<a class="nav-link" href="about.php">About us</a>
				</li>

				<li class="<?php if ($current_page == "services.php") {
								echo "nav-item active";
							} ?>">
					<a class="nav-link" href="services.php">Services</a>
				</li>

				<li class="<?php if ($current_page == "blog.php") {
								echo "nav-item active";
							} ?>">
					<a class="nav-link" href="blog.php">Blog</a>
				</li>

				<li class="<?php if ($current_page == "contact.php") {
								echo "nav-item active";
							} ?>">
					<a class="nav-link" href="contact.php">Contact us</a>
				</li>

				<li class="<?php if ($current_page == "register.php") {
								echo "nav-item active";
							} ?>">
					<a class="nav-link" href="register.php">S'inscrire</a>
				</li>

				<?php if (!empty($_SESSION)) { ?>

					<li class="<?php if ($current_page == "") {
									echo "nav-item active";
								} ?>">
						<a class="nav-link" href="php/deconnect.php">Déconnexion</a>
					</li>

				<?php } else { ?>

					<li class="<?php if ($current_page == "login.php") {
									echo "nav-item active";
								} ?>">
						<a class="nav-link" href="login.php">Se Connecter</a>
					</li>

				<?php }  ?>


			</ul>

			<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">

				<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>

				<li><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li>

			</ul>

		</div>

	</div>



</nav>