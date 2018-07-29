<?php 

include 'koneksi.php';
session_start();

$directory_gambar = "../views/assets/custom/gambar/";
$target_file = $directory_gambar . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (isset($_POST['submit'])) {
	if (isset($_POST['nama'])) {
		$_SESSION["pesan"] = "Masukkan nama terlebih dahulu!";
	}

	if (isset($_POST['jenis_suara'])) {
		$_SESSION["pesan"] = "Masukkan jenis suara terlebih dahulu!";
	}

	if (isset($_POST['jenis_kelamin'])) {
		$_SESSION["pesan"] = "Masukkan jenis kelamin terlebih dahulu!";
	}

	if (isset($_POST['email'])) {
		$_SESSION["pesan"] = "Masukkan email terlebih dahulu!";
	}

	if (isset($_POST['alamat'])) {
		$_SESSION["pesan"] = "Masukkan alamat terlebih dahulu!";
	}

	if (isset($_POST['fakultas'])) {
		$_SESSION["pesan"] = "Masukkan fakultas terlebih dahulu!";
	}

	if (isset($_POST['no_hp'])) {
		$_SESSION["pesan"] = "Masukkan nomor handphone terlebih dahulu!";
	}

	if (isset($_POST['tgl_lahir'])) {
		$_SESSION["pesan"] = "Masukkan tanggal lahir terlebih dahulu!";
	}


	if ($_FILES["file"]["error"] > 0)
	{
		echo "Return Code: " . $_FILES["foto"]["error"] . "<br>";
	}

	$check = getimagesize($_FILES["foto"]["tmp_name"]);
	if($check !== false){
		$uploadOk = 1;
	} else {
		$uploadOk = 0;
	}
}

if (file_exists($target_file)) {
	$_SESSION["pesan"] = "File sudah ada";
	$uploadOk = 0;
}

if ($_FILES["foto"]["size"] > 2000000) {
	$_SESSION["pesan"] = "Ukuran file terlalu besar";
	$uploadOk = 0;
}

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
	$_SESSION["pesan"] = "Maaf, hanya menerima file JPG, JPEG, dan GIF";
	$uploadOk = 0;
}

if ($uploadOk == 0) {
	$_SESSION["pesan"] = "File tidak terupload";
} else {
	if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
		$_SESSION["pesan"] = "File ". basename( $_FILES["foto"]["name"]). " berhasil diupload";
		$tgl_lahir = date('Y-m-d', strtotime($tgl_lahir));
		$nama_gambar = $_FILES["foto"]["name"];
		$stm = $db->prepare("INSERT INTO tb_singer (id_singer, nama, jenis_suara, jenis_kelamin, email, alamat, fakultas, no_hp, tgl_lahir, foto) VALUES (:id_singer, :nama, :jenis_suara, :jenis_kelamin, :email, :alamat, :fakultas, :no_hp, :tgl_lahir, :foto)");
		$stm->execute(array(
			"id_singer" => NULL,
			"nama" => $_POST['nama'],
			"jenis_suara" => $_POST['jenis_suara'],
			"jenis_kelamin" => $_POST['jenis_kelamin'],
			"email" => $_POST['email'],
			"alamat" => $_POST['alamat'],
			"fakultas" => $_POST['fakultas'],
			"no_hp" => $_POST['no_hp'],
			"tgl_lahir" => $_POST['tgl_lahir'],
			"foto" => $nama_gambar
			));
		header("Location: ../views/admin-singer.php");
	} else {
		$_SESSION["pesan"] = "Terjadi kesalahan saat mengupload file";
	}
}


