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
        <li class="geserkanan "><a class="glow" href="index.php">HOME</a></li>
        <li class="geserkanan active"><a class="glow" href="nm-event.php">EVENT</a></li>
        <li class="geserkanan"><a class="glow" href="nm-joinus.php">JOIN</a></li>
        <li class="geserkanan"><a class="dropdown-button glow" href="#!" data-activates="dropdown1" data-beloworigin="true">PROFIL<i class="material-icons right">arrow_drop_down</i></a></li>
        <ul id="dropdown1" class="dropdown-content about-dropdown">
         <li><a href="nm-vision.php">VISI &<br>MISSI</a></li>
         <li><a href="nm-ourstory.php">OUR STORY</a></li>
         <li><a href="nm-OS.php">OUR CONTACT</a></li>
       </ul>
       <li class="geserkanan"><a class="glow" href="login.php">SIGN IN</a></li>
     </ul>
     <!-- buat menu yg di pinggir -->
     <ul class="side-nav" id="mobile-demo">
       <li class=""><a class="glow" href="index.php">HOME</a></li>
       <li class=""><a class="glow" href="views/nm-event.php">EVENT</a></li>
       <li class=""><a class="glow" href="views/nm-joinus.php">JOIN</a></li>
       <li class=""><a class="dropdown-button glow" href="#!" data-activates="dropdown2" data-beloworigin="true">PROFIL<i class="material-icons right">arrow_drop_down</i></a></li>
       <ul id="dropdown2" class="dropdown-content about-dropdown">
         <li><a href="views/nm-vision.php">VISI &<br>MISSI</a></li>
         <li><a href="views/nm-ourstory.php">OUR STORY</a></li>
         <li><a href="views/nm-OS.php">OUR CONTACT</a></li>
       </ul>
       <li class=""><a class="glow" href="views/login.php">SIGN IN</a></li>
     </ul>
   </div>
 </nav>
		<div class="background2">
			<div class="container" style="width: 100%">
				<?php 
				$sql = "SELECT * FROM tb_event";
				foreach ?>
					<div class="row" style="padding-top: 10px">
						<div class="col s12 kotakputih">
							<div class="col s12 judulevent">
								<p class="flow-text"><b><?=$row['namaevent']?></b></p>
							</div>
							<div class="col s4" style="padding-left: 65px; padding-top:25px;">
								<img src="assets/custom/gambar/<?=$row['sewa']?>" width="80%">
							</div>
							
							<div class="col s8" style="font-size:20px; width: 800px;background-color: rgba(255, 89, 128, 0.4); border-radius: 25px;">
								<p class="flow-text"><?=$row['deskripsi']?></p>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>

		</header>



		<script type="text/javascript" src="assets/custom/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="assets/materialize/js/materialize.js"></script>
		<script type="text/javascript" src="assets/custom/custom.js"></script>
	</body>
	</html>