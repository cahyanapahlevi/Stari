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
                    </div><a class="button-collapse" data-activates="mobile-demo" href="#"><i class="material-icons grey-text">menu</i></a> <!-- buat nampilin menu yg di atas -->
                    <ul class="right hide-on-med-and-down">
                        <ul class="right hide-on-med-and-down">
					<li class="geserkanan  active"><a class="glow" href="admin-schedule.php">SCHEDULE</a></li>
					<li class="geserkanan"><a class="glow" href="admin-partitur.php">PELATIH</a></li>
					<li class="geserkanan"><a class="glow" href="admin-event.php">EVENT</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">ANGGOTA</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">SIGN OUT</a></li>
				</ul>
				<!--   buat menu yg di pinggir -->
				<ul class="side-nav" id="mobile-demo">
					<li class="geserkanan  active"><a class="glow" href="admin-schedule.php">SCHEDULE</a></li>
					<li class="geserkanan"><a class="glow" href="admin-partitur.php">PELATIH</a></li>
					<li class="geserkanan"><a class="glow" href="admin-event.php">EVENT</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">ANGGOTA</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">SIGN OUT</a></li>
					</ul>
			</div>
		</nav>
		<div class="background2">
			<div class="container">
				<div class="row">
					<div class="col s12 kotakputih">
						<div class="col s12 kotak-join"><h5 class="center-align" style="opacity: 1; color: gray"><br>ADD PELATIH</h5></div>

						<form class="col s12" action="../controllers/admin_addformschedule.php" method="post">
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix"></i>
									<input id="icon_prefix" name="nama" type="date" class="datepicker" required>
									<label for="icon_prefix">NAMA</label>
								</div>
								<div class="input-field col s12">
									<i class="material-icons prefix"></i>
									<input id="icon_prefix" name="alamat" type="text" class="validate" required>
									<label for="icon_prefix">ALAMAT</label>
								</div>
								<div class="input-field col s12">
									<i class="material-icons prefix"></i>
									<input id="icon_prefix" name="jenis_kelamin" type="text" class="validate" required>
									<label for="icon_prefix">JENIS KELAMIN</label>
								</div>
								<div class="input-field col s12">
									<i class="material-icons prefix"></i>
									<input id="icon_prefix" name="no_telepon" type="text" class="validate" required>
									<label for="icon_prefix">NO.TELP</label>
								</div>
						
								<button class="btn waves-effect waves-light right" type="submit" name="submit" style="margin-top: 30px">OK
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<br>
		</header>
		<script type="text/javascript" src="assets/custom/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="assets/materialize/js/materialize.js"></script>
		<script type="text/javascript" src="assets/custom/custom.js"></script>
	</body>
	</html>