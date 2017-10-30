	<!DOCTYPE html>

	<html>

	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E.Health Organisation</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
	</head>
	<body>

	<div class="main">

		<div class="topnav" id="myTopnav">
			<!-- logo -->
			<div class="homebtnfix">
				<a href="index.html">

					<img src="https://localhost/wp-content/uploads/2017/10/homebutton.jpg" alt="back to homepage" style="width:200px;height:100px;border:2px;">
				</a>
			</div>
			<!-- navigation -->
			<div class="textnav">
				<nav class="site-nav">

					<?php

					$args = array(
						'theme_local' => 'primary'
					);

					?>
					<?php wp_nav_menu( $args );?>

				</nav>

			<!--	<a href="https://localhost/about-us/">
						<h1>About Us</h1>
					</a>
					<a href="https://localhost/hub/">
						<h1>HUB</h1>
					</a>
					<a href="https://localhost/loginregister/">
						<h1>Contact Us</h1>
					</a>
			</div>
						<div class="login">
							<a href="https://localhost/loginregister/">
								<h1>Log In</h1>
							</a>
						</div>
					-->
			</div>

		</div>
