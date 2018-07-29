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
					<li class="geserkanan"><a class="glow" href="../index.php">HOME</a></li>
					<li class="geserkanan"><a class="glow" href="nm-event.php">EVENT</a></li>
					<li class="geserkanan active"><a class="glow" href="nm-joinus.php">JOIN</a></li>
					<li class="geserkanan"><a class="dropdown-button glow" href="#!" data-activates="dropdown1" data-beloworigin="true">PROFIL<i class="material-icons right">arrow_drop_down</i></a></li>
					<ul id="dropdown1" class="dropdown-content about-dropdown">
						<li><a href="nm-vision.php">VISI &<br>MISSI</a></li>
						<li><a href="nm-ourstory.php">OUR STORY</a></li>
						<li><a href="nm-OS.php">OUR<br>CONTACT</a></li>
					</ul>
					<li class="geserkanan"><a class="glow" href="login.php">SIGN IN</a></li>
				</ul>
				<!-- buat menu yg di pinggir -->
				<ul class="side-nav" id="mobile-demo">
					<li class="geserkanan"><a class="glow" href="../index.php">HOME</a></li>
					<li class="geserkanan"><a class="glow" href="nm-event.php">EVENT</a></li>
					<li class="geserkanan active"><a class="glow" href="nm-joinus.php">JOIN</a></li>
					<li class="geserkanan"><a class="dropdown-button glow" href="#!" data-activates="dropdown1" data-beloworigin="true">PROFIL<i class="material-icons right">arrow_drop_down</i></a></li>
					 <ul id="dropdown2" class="dropdown-content">
						<li><a href="nm-vision.php">VISI &<br>MISSI</a></li>
						<li><a href="nm-ourstory.php">OUR STORY</a></li>
						<li><a href="nm-OS.php">OUR<br>CONTACT</a></li>
					</ul>
					<li class="geserkanan"><a class="glow" href="login.php">SIGN IN</a></li>
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
							echo $_SESSION['pesan'];
							echo '<i class="close material-icons">close</i>';
							echo '</div>';
							unset($_SESSION['pesan']);
						} ?>
						
						<div class="container" style="width:98%">
							<div class="row">
								<div class="col s12 kotak-join"><h5 class="center-align" style="opacity: 1; color: gray">Untuk bergabung dengan kami</br>Silahkan isi form berikut!</h5></div>
							</div>
						</div>

						<div class="container" style="width:70%">
							<div class="row">
								<form class="col s12" action="../controllers/nm_joinus.php" method="post">
									<div class="row">
										<div class="input-field col s12">
											<i class="material-icons">account_circle</i>
											<input id="icon_prefix" name="nama" type="text" class="validate" required>
											<label for="icon_prefix">Nama</label>
										</div>
										<div class="input-field col s12 m12 l6" style="margin-top: 40px">
											<i class="material-icons prefix"></i>
											<input id="icon_alamat" name="alamat_asal" type="text" class="validate" required>
											<label for="icon_alamat">Alamat</label>
										</div>

										<div class="input-field col s12 m12 l6">
											<i class="material-icons prefix"></i>
											<label for="icon_jk">Jenis Kelamin</label>
											<br>
											<p>
												<input name="jenis_kelamin" type="radio" id="test1" value="L" required>
												<label for="test1">Laki-laki</label>
												<input name="jenis_kelamin" type="radio" id="test2" value="P" required>
												<label for="test2">Perempuan</label>
											</p>
										</div>
										<div class="input-field col s12 m12 l6" style="margin-top: 40px">
											<i class="material-icons prefix"></i>
											<input id="icon_nohp" name="no_hp" type="text" class="validate" required>
											<label for="icon_nohp">Nomor Handphone</label>
										</div>
										<div class="input-field col s12 m12 l6">
											<i class="material-icons prefix"></i>
											<input id="icon_email" name="email" type="email" class="validate" required>
											<label for="icon_email">Email</label>
										</div>
										
										<div class="input-field col s12 m12 l6">
											<i class="material-icons prefix"></i>
											<input id="icon_tanggal" name="tgl_lahir" type="date" class="datepicker" required>
											<label for="icon_tanggal">Tanggal Lahir</label>
										</div>
										<div class="input-field col s12 m12 l6">
											<i class="material-icons prefix"></i>
											<input id="icon_periode" name="periode" type="text" class="validate" required>
											<label for="icon_periode">Periode (ex: 2015/2016)</label>
										</div>
										
										<p class="center-align">
											<input class="btn waves-effect waves-light" name="submit" type="submit" style="margin-top: 30px">
											<!-- <i class="material-icons right">send</i> -->
										</p>
									</div>
								</form>
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