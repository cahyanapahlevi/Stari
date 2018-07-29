<?php 
include '../controllers/koneksi.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="assets/materialize/css/materialize.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/custom/custom.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous|Sacramento" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a class="brand-logo" href="#!">
                    <div class="custom-logo"></div></a>
                    <div class="tulisanlogo">
                     <h4>Sanggar Tari RENGGANIS</h4>
                    </div><a class="button-collapse" data-activates="mobile-demo" href="#"><i class="material-icons grey-text">menu</i></a> <!-- buat nampilin menu yg di atas -->
                    <ul class="right hide-on-med-and-down">
                        <ul class="right hide-on-med-and-down">
					<li class="geserkanan "><a class="glow" href="admin-schedule.php">SCHEDULE</a></li>
					<li class="geserkanan active"><a class="glow" href="admin-pelatih.php">PELATIH</a></li>
					<li class="geserkanan"><a class="glow" href="admin-event.php">EVENT</a></li>
					<li class="geserkanan"><a class="glow" href="admin-anggota.php">ANGGOTA</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">SIGN OUT</a></li>
				</ul>
				<!--   buat menu yg di pinggir -->
				<ul class="side-nav" id="mobile-demo">
					<li class="geserkanan  active"><a class="glow" href="admin-schedule.php">SCHEDULE</a></li>
					<li class="geserkanan"><a class="glow" href="admin-pelatih.php">PELATIH</a></li>
					<li class="geserkanan"><a class="glow" href="admin-event.php">EVENT</a></li>
					<li class="geserkanan"><a class="glow" href="anggota.php">ANGGOTA</a></li>
					<li class="geserkanan"><a class="glow" href="login.php">SIGN OUT</a></li>
					</ul>
			</div>
		</nav>
            <div class="background2">
                <div class="container">
                    <div class="row">
                        <div class="col s12 kotakputih">
                            <div class="col s12 kotak-join">
                                <h5 class="center-align" style="opacity: 1; color: gray"><br>DAFTAR PELATIH</h5>
                                </div><a class="btn waves-effect waves-light" href="admin-addformschedule.php" id="action" name="action" style="margin-top: 20px; margin-left: 20px;" type="submit">ADD <i class="material-icons right"></i></a> 
                       
          <div align="center" class="tabel">
            <table class="bordered responsive-table centered">
                <thead>
                    <tr>
										<th data-field="nama">Nama Paket</th>
										<th data-field="alamat">Pelatih</th>
										<th data-field="jenis_kelamin">Deskripsi</th>
										<th data-field="jenis_kelamin">Tgl Mulai</th>
										<th data-field="jenis_kelamin">Tgl Selesai</th>
									</tr>
								</thead>
								<?php 
								$sql = "SELECT * FROM paket";
								          foreach ($db->query($sql) as $row) {
            ?>
									<tbody>
										<tr>
											<td><?=$row['nama_paket']?></td>
											<td><?=$row['pelatih']?></td>
											<td><?=$row['deskripsi']?></td>
											<td><?=$row['tgl_mulai']?></td>
											<td><?=$row['tgl_selesai']?></td>
											
                                <a class="btn-floating btn-small waves-effect waves-light btn" href="admin-editformschedule.php?id=<?php echo $row['id_schedule'] ?>" id="action" name="action" style="width: 65px; height: 45px">
                                    <i class="tiny material-icons">edit</i>
                                </a>
                            </td>
                        </tr><?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</header> 


<script src="assets/custom/jquery-3.1.1.min.js" type="text/javascript"></script> 
<script src="assets/materialize/js/materialize.js" type="text/javascript"></script> 
<script src="assets/custom/custom.js" type="text/javascript"></script> 

</body>
</html>