<?php 

include 'koneksi.php';
session_start();

$directory_gambar = "../views/assets/custom/gambar/";
$target_file = $directory_gambar . basename($_FILES["partitur"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (isset($_POST['submit'])) {
	if (!isset($_POST['judul_lagu'])) {
		$_SESSION["pesan"] = "Masukkan judul lagu terlebih dahulu!";
	} else {
		if ($_FILES["file"]["error"] > 0){
			echo "Return Code: " . $_FILES["partitur"]["error"] . "<br>";
		} else {
			$check = getimagesize($_FILES["partitur"]["tmp_name"]);
			if($check == false){
				$uploadOk = 0;
				$_SESSION["pesan"] = "File yang Anda masukkan bukan file image";
			} else {
				if ($_FILES["partitur"]["size"] > 1000000) {
					$_SESSION["pesan"] = "Ukuran file terlalu besar";
					$uploadOk = 0;
					header("Location: ../views/admin-partitur.php");
				} else {
					if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
						$_SESSION["pesan"] = "Maaf, hanya menerima file JPG, JPEG, dan GIF";
						$uploadOk = 0;
						header("Location: ../views/admin-partitur.php");
					} else {		
						if (file_exists($target_file)) {
							$_SESSION["pesan"] = "File sudah ada";
							$uploadOk = 0;
							header("Location: ../views/admin-partitur.php");
						} else {
							$uploadOk = 1;
						}
					}
				}
			}
		}
	}
}


if ($uploadOk == 0) {
	header("Location: ../views/admin-partitur.php");
} else {
	if (move_uploaded_file($_FILES["partitur"]["tmp_name"], $target_file)) {
		$_SESSION["pesan"] = "File ". basename( $_FILES["partitur"]["name"]). " berhasil diupload";
		$nama_partitur = $_FILES["partitur"]["name"];
		$stm = $db->prepare("INSERT INTO tb_partitur (id_partitur, judul_lagu, partitur) VALUES (:id_partitur, :judul_lagu, :partitur)");
		$stm->execute(array(
			"id_partitur" => NULL,
			"judul_lagu" => $_POST['judul_lagu'],
			"partitur" => $nama_partitur
			));
		header("Location: ../views/admin-partitur.php");
	} else {
		$_SESSION["pesan"] = "Terjadi kesalahan saat mengupload file";
		header("Location: ../views/admin-event.php");
	}
}




