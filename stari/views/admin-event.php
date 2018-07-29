<?php 
include '../controllers/koneksi.php'; 
session_start();
?>
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
					<h4>Sanggar Tari RENGGANIS</h4>
				</div>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons grey-text">menu</i></a>
				<!-- buat nampilin menu yg di atas -->
				<ul class="right hide-on-med-and-down">
					<li class="geserkanan"><a class="glow" href="admin-schedule.php">SCHEDULE</a></li>
					<li class="geserkanan"><a class="glow" href="admin-pelatih.php">PELATIH</a></li>
					<li class="geserkanan active"><a class="glow" href="admin-event.php">EVENT</a></li>
					<li class="geserkanan"><a class="glow" href="admin-anggota.php">ANGGOTA</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">SIGN OUT</a></li>
				</ul>
				<!--   buat menu yg di pinggir -->
				<ul class="side-nav" id="mobile-demo">
					<li class="geserkanan"><a class="glow" href="admin-schedule.php">SCHEDULE</a></li>
					<li class="geserkanan"><a class="glow" href="admin-partitur.php">PELATIH</a></li>
					<li class="geserkanan active"><a class="glow" href="admin-event.php">EVENT</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">ANGGOTA</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">SIGN OUT</a></li>
					</ul>
			</div>
		</nav>
		<div class="background2">
			<div class="container">
				
				<div class="row">

					<div class="col s12 kotakputih">
						<br>
						<?php if(isset($_SESSION['pesan'])){
							echo '<div class="chip">';
							echo '</div>';
						} ?>
						<div class="col s12 kotak-join"><h5 class="center-align" style="opacity: 1; color: gray"><br>EVENT</h5></div>
						<form class="col s12" action="../controllers/admin_event.php" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix"></i>
									<input id="icon_prefix" name="namaevent" type="text" class="validate" required>
									<label for="icon_prefix">Nama Event</label>
								</div>
								<div class="input-field col s12">
									<i class="material-icons prefix"></i>
									<textarea id="icon_prefix" name="deskripsi" class="materialize-textarea" required></textarea>
									<label for="icon_prefix">Deskripsi Event</label>

										<div class="row">
											<div class="file-field input-field">
												<div class="btn">
													<span>File</span>
													<input name="foto" type="file">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" required>
												</div>
											</div>
										</div>
										<button class="btn waves-effect waves-light right" type="submit" name="submit" style="margin-top: 30px">OK
										</button>
									</form>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	


	<script type="text/javascript" src="assets/custom/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="assets/materialize/js/materialize.js"></script>
	<script type="text/javascript" src="assets/custom/custom.js"></script>
</body>
</html>