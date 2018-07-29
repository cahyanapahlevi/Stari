<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/materialize/css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/custom/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous|Sacramento" rel="stylesheet">
</head>
<body>

	<header>
		
		
		<nav>
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo"><div class="custom-logo"></div></a>
				<div class="tulisanlogo">
					<h4>Sanggar Tari Rengganis</h4>
				</div>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons grey-text">menu</i></a>
				<!-- buat nampilin menu yg di atas -->
				<ul class="right hide-on-med-and-down">
					<li class="geserkanan"><a class="glow" href="../index.php">HOME</a></li>
					<li class="geserkanan"><a class="glow" href="nm-event.php">EVENT</a></li>
					<li class="geserkanan"><a class="glow" href="nm-joinus.php">JOIN</a></li>
					<li class="geserkanan"><a class="dropdown-button glow" href="#!" data-activates="dropdown1" data-beloworigin="true">PROFIL<i class="material-icons right">arrow_drop_down</i></a></li>
					<ul id="dropdown1" class="dropdown-content">
						<li><a href="nm-vision.php">VISI &<br>MISSI</a></li>
						<li><a href="nm-ourstory.php">OUR STORY</a></li>
						<li><a href="nm-ourcontact.php">OUR<br>CONTACT</a></li>
					</ul>
					<li class="geserkanan active"><a class="glow" href="login.php">SIGN IN</a></li>
				</ul>
				<!-- buat menu yg di pinggir -->
				<ul class="side-nav" id="mobile-demo">
					<li class="geserkanan"><a class="glow" href="../index.php">HOME</a></li>
					<li class="geserkanan"><a class="glow" href="nm-event.php">EVENT</a></li>
					<li class="geserkanan"><a class="glow" href="nm-joinus.php">JOIN</a></li>
					<li class="geserkanan"><a class="dropdown-button glow" href="#!" data-activates="dropdown1" data-beloworigin="true">PROFIL<i class="material-icons right">arrow_drop_down</i></a></li>
					<ul id="dropdown1" class="dropdown-content about-dropdown">
						<li><a href="nm-vision.php">VISI &<br>MISSI</a></li>
						<li><a href="nm-ourstory.php">OUR STORY</a></li>
						<li><a href="nm-ourcontact.php">OUR<br>CONTACT</a></li>
					</ul>
					<li class="geserkanan active"><a class="glow" href="login.php">SIGN IN</a></li>
				</ul>
			</div>
		</nav>
		
		<div class="background">
			<div class="container" style="width: 300px; height: 500px; 	margin-top: 0px; padding-top: 100px !important;">
				<div class="login">
					<form method="post" action="<?php echo $this->config['router']->getBaseURL().'?c=clogin&f=login'?>">
						<h4 class="center-align" style="font-family: Montserrat; color: white">SIGN IN</h1>   
							<br>    
							<p class="center-align">
								<input type="text" name="username" class="login-custom" placeholder="username" style="width: 70%; color: white">
							</p>
							<p class="center-align">
								<input type="password" name="password" class="login-custom" placeholder="password" style="width: 70%; color: white">
							</p>
							<p class="center-align">
								<button class="btn waves-effect waves-light" type="submit" name="action" style="margin-top: 30px">SIGN IN
									<i class="material-icons right"></i>
								</button>
								
							</p>
						</form>
						
					</div>
				</div>
			</div>

		</header>
		
		<script type="text/javascript" src="assets/custom/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="assets/materialize/js/materialize.js"></script>
		<script type="text/javascript" src="assets/custom/custom.js"></script>
	</body>
	</html>