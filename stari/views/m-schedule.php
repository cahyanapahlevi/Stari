<?php 
include '../controllers/koneksi.php'; 
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
					<li class="geserkanan active"><a class="glow" href="m-schedule.php">SCHEDULE</a></li>
					<li class="geserkanan"><a class="glow" href="m-pelatih.php">PAKET</a></li>
					<li class="geserkanan"><a class="glow" href="m-anggota.php">ANGGOTA</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">SIGN OUT</a></li>
				</ul>
				<!-- buat menu yg di pinggir -->
				<ul class="side-nav" id="mobile-demo">
					<li class="geserkanan active"><a class="glow" href="m-schedule.php">SCHEDULE</a></li>
					<li class="geserkanan"><a class="glow" href="m-pelatih.php">PELATIH</a></li>
					<li class="geserkanan"><a class="glow" href="m-anggota.php">ANGGOTA</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">SIGN OUT</a></li>
				</ul>
			</div>
		</nav>
		<div class="background2">
			<div class="container">
				<div class="row">
					<div class="col s12 kotakputih">
						<div class="col s12 kotak-join"><h5 class="center-align" style="opacity: 1; color: gray"><br>JADWAL LATIHAN</h5></div>

						<br>
						<div class="tabel" align="center">
							<table class="bordered responsive-table centered">
								<thead>
									<tr>
										<th data-field="id_paket">Paket</th>
										<th data-field="hari">Hari</th>
										<th data-field="jam_mulai">Jam mulai</th>
										<th data-field="jam_selesai">jam selesai</th>
									</tr>
								</thead>
								<?php 
								$sql = "SELECT * FROM jadwal;";
								foreach ($db->query($sql) as $row) {
									?>
									<tbody>
										<tr>
											<td><?=$row['id_paket']?></td>
											<td><?=$row['hari']?></td>
											<td><?=$row['jam_mulai']?></td>
											<td><?=$row['jam_selesai']?></td>
										</tr>
										<?php } ?>
									</tbody>
								</table> 
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