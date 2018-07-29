 <?php 
include 'controllers/koneksi.php'; 
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="views/assets/materialize/css/materialize.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="views/assets/custom/custom.css">
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
        <li class="geserkanan active"><a class="glow" href="index.php">HOME</a></li>
        <li class="geserkanan"><a class="glow" href="views/nm-event.php">EVENT</a></li>
        <li class="geserkanan"><a class="glow" href="views/nm-joinus.php">JOIN</a></li>
        <li class="geserkanan"><a class="dropdown-button glow" href="#!" data-activates="dropdown1" data-beloworigin="true">PROFIL<i class="material-icons right">arrow_drop_down</i></a></li>
        <ul id="dropdown1" class="dropdown-content">
         <li><a href="views/nm-vision.php">VISI &<br>MISSI</a></li>
         <li><a href="views/nm-ourstory.php">OUR STORY</a></li>
         <li><a href="views/nm-ourcontact.php">OUR CONTACT</a></li>
       </ul>
       <li class="geserkanan"><a class="glow" href="views/login.php">SIGN IN</a></li>
     </ul>
     <!-- buat menu yg di pinggir -->
     <ul class="side-nav" id="mobile-demo">
       <li class=""><a class="glow" href="index.php">HOME</a></li>
       <li class=""><a class="glow" href="views/nm-event.php">EVENT</a></li>
       <li class=""><a class="glow" href="views/nm-joinus.php">JOIN</a></li>
       <li class=""><a class="dropdown-button glow" href="#!" data-activates="dropdown2" data-beloworigin="true">PROFIL<i class="material-icons right">arrow_drop_down</i></a></li>
       <ul id="dropdown1" class="dropdown-content about-dropdown">
         <li><a href="views/nm-vision.php">VISI &<br>MISSI</a></li>
         <li><a href="views/nm-ourstory.php">OUR STORY</a></li>
         <li><a href="views/nm-ourcontact.php">OUR CONTACT</a></li>
       </ul>
       <li class=""><a class="glow" href="views/login.php">SIGN IN</a></li>
     </ul>
   </div>
 <div class="background">
  <div class="container">
    <div class="kotak" style="margin-top:0px !important;"><h5 class="center-align">Welcome to<br>Sanggar tari Rengganis</h5></div>
  </div>
</div>


</header>

<script type="text/javascript" src="views/assets/custom/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="views/assets/materialize/js/materialize.js"></script>
<script type="text/javascript" src="views/assets/custom/custom.js"></script>
</body>
</html>