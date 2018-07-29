<?php 

include 'koneksi.php';
session_start();

$directory_gambar = "../views/assets/custom/gambar/";
$target_file = $directory_gambar . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (isset($_POST['submit'])) {

	extract($_POST);
	if (trim($namaevent) == "") {
		$_SESSION["pesan"] = "Masukkan nama event terlebih dahulu!";
		header("Location: ../views/admin-event.php");
	} else {
		if (trim($deskripsi) == "") {
			$_SESSION["pesan"] = "Masukkan deskripsi terlebih dahulu!";
			header("Location: ../views/admin-event.php");
		} else {
			if ($_FILES["file"]["error"] > 0){
				echo "Return Code: " . $_FILES["partitur"]["error"] . "<br>";
			} else {
				$check = getimagesize($_FILES["partitur"]["tmp_name"]);
				if($check == false){
					$uploadOk = 0;
					$_SESSION["pesan"] = "File yang Anda masukkan bukan file image";
					header("Location: ../views/admin-event.php");
				} else {
					if ($_FILES["partitur"]["size"] > 1000000) {
						$_SESSION["pesan"] = "Ukuran file terlalu besar";
						$uploadOk = 0;
						header("Location: ../views/admin-event.php");
					} else {
						if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
							$_SESSION["pesan"] = "Maaf, hanya menerima file JPG, JPEG, dan GIF";
							$uploadOk = 0;
							header("Location: ../views/admin-event.php");
						} else {		
							if (file_exists($target_file)) {
								$_SESSION["pesan"] = "File sudah ada";
								$uploadOk = 0;
								header("Location: ../views/admin-event.php");
							} else {
								$uploadOk = 1;
							}
						}
					}
				}
			}
		}
	}

// if (isset($_POST['submit'])) {
	

// 	if (isset($_POST['deskripsi'])) {
// 		$_SESSION["pesan"] = "Masukkan deskripsi terlebih dahulu!";
// 	}

// 	if ($_FILES["file"]["error"] > 0)
// 	{
// 		echo "Return Code: " . $_FILES["foto"]["error"] . "<br>";
// 	}

// 	$check = getimagesize($_FILES["foto"]["tmp_name"]);
// 	if($check !== false){
// 		$uploadOk = 1;
// 	} else {
// 		$uploadOk = 0;
// 	}
// }

// if (file_exists($target_file)) {
// 	$_SESSION["pesan"] = "File sudah ada";
// 	$uploadOk = 0;
// }

// if ($_FILES["foto"]["size"] > 1000000) {
// 	$_SESSION["pesan"] = "Ukuran file terlalu besar";
// 	$uploadOk = 0;
// }

// if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
// 	$_SESSION["pesan"] = "Maaf, hanya menerima file JPG, JPEG, dan GIF";
// 	$uploadOk = 0;
// }

	if ($uploadOk == 0) {
		header("Location: ../views/admin-event.php");
	} else {
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
			$_SESSION["pesan"] = "File ". basename( $_FILES["foto"]["name"]). " berhasil diupload";
			$nama_gambar = $_FILES["foto"]["name"];
			$stm = $db->prepare("INSERT INTO tb_event (id_event, foto, namaevent, deskripsi) VALUES (:id_event, :foto, :namaevent, :deskripsi)");
			$stm->execute(array(
				"id_event" => NULL,
				"foto" => $nama_gambar,
				"namaevent" => $_POST['namaevent'],
				"deskripsi" => $_POST['deskripsi']
				));
			header("Location: ../views/admin-event.php");
		} else {
			$_SESSION["pesan"] = "Terjadi kesalahan saat mengupload file";
		}
	}
}
