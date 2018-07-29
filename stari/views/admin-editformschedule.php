<?php 

include '../controllers/koneksi.php';


	if (isset($_GET['id'])) {

		$id = $_GET['id'];

		$stm = $db->prepare("SELECT * FROM jadwal where id_jadwal = :id_jadwal");
		$stm->bindParam(':id_jadwal', $id);
		$stm->execute();
		$result = $stm->fetch();
	} else{
		echo "error";
	}


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
                    </div><a class="button-collapse" data-activates="mobile-demo" href="#"><i class="material-icons grey-text">menu</i></a> <!-- buat nampilin menu yg di atas -->
                    <ul class="right hide-on-med-and-down">
                        <ul class="right hide-on-med-and-down">
					<li class="geserkanan  active"><a class="glow" href="admin-schedule.php">SCHEDULE</a></li>
					<li class="geserkanan"><a class="glow" href="admin-pelatih.php">PAKET</a></li>
					<li class="geserkanan"><a class="glow" href="admin-event.php">EVENT</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">ANGGOTA</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">SIGN OUT</a></li>
				</ul>
				<!--   buat menu yg di pinggir -->
				<ul class="side-nav" id="mobile-demo">
					<li class="geserkanan  active"><a class="glow" href="admin-schedule.php">SCHEDULE</a></li>
					<li class="geserkanan"><a class="glow" href="admin-partitur.php">PAKET</a></li>
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
						<div class="col s12 kotak-join"><h5 class="center-align" style="opacity: 1; color: gray"><br>EDIT FORM SCHEDULE</h5></div>

						<form class="col s12" action="../controllers/admin_proses_edit_schedule.php" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="id_schedule" value="<?php echo $_GET['id'];?>">
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix"></i>
									<input id="icon_prefix" name="paket" type="text" class="validate" required>
									<label for="icon_prefix">paket</label>
								</div>

								<div class="input-field col s12">
									<i class="material-icons prefix"></i>
									<input id="icon_prefix" name="hari" type="text" class="validate" required>
									<label for="icon_prefix">hari</label>
								</div>
								<div class="input-field col s12">
									<i class="material-icons prefix"></i>
									<input id="icon_prefix" name="jam" type="text" class="validate" required>
									<label for="icon_prefix">jam mulai</label>
								</div>
								<div class="input-field col s12">
									<i class="material-icons prefix"></i>
									<input id="icon_prefix" name="tempat" type="text" class="validate" required>
									<label for="icon_prefix">jam selesai</label>
								</div>
								<button class="btn waves-effect waves-light right" type="submit" name="submit" style="margin-top: 30px">EDIT
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