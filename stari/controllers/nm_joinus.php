<?php 

include 'koneksi.php';
session_start();

if (isset($_POST['submit'])) {
	// echo "masuk if iset";
	extract($_POST);
	$isValid = true;
	$pesan = "pendaftaran gagal";

	if (trim($nama) == "") {
		$isValid = false;
		$pesan .= "nama harus diisi<br />";
	}
	if (trim($alamat) == "") {
		$isValid = false;
		$pesan .= "alamat harus diisi<br />";
	}
	if (trim($jenis_kelamin) == "") {
		$isValid = false;
		$pesan .= "jenis kelamin harus diisi<br />";
	}

	if (trim($no_hp) == "") {
		$isValid = false;
		$pesan .= "nomor handphone harus diisi<br />";
	}
	if (trim($email) == "") {
		$isValid = false;
		$pesan .= "email harus diisi<br />";
	}

	if (trim($tgl_lahir) == "") {
		$isValid = false;
		$pesan .= "tanggal lahir harus diisi<br />";
	}
	if (trim($periode) == "") {
		$isValid = false;
		$pesan .= "periode harus diisi<br />";
	}


	if ($isValid) {

		$tgl_lahir = date('Y-m-d', strtotime($tgl_lahir));
		
		$stm = $db->prepare("INSERT INTO anggota (id,nama,jenis_kelamin,alamat_asal,no_hp,email,tgl_lahir,periode,status)
			VALUES(:id,:nama,:jenis_kelamin,:alamat_asal,:no_hp,:email,:tgl_lahir,:periode, :status)");

		$stm->execute(array(
			"ID" => NULL,
			"nama" => $nama,
			"alamat" => $alamat,
			"jenis_kelamin" => $jenis_kelamin,
			"no_hp" => $no_hp,
			"email" => $email,
			"tgl_lahir" => $tgl_lahir,
			"periode" => $periode,
			"status" => 0
			));

		header("Location: ../views/m-schedule.php");
		$_SESSION["pesan"] = "Anda telah terdaftar!";
		
		
	} else {
		
		// $_SESSION["pesan"] = "Terjadi kesalahan saat mendaftar!";
		header("Location: ../views/nm-joinus.php");
		$_SESSION["pesan"] = "Terjadi kesalahan saat mendaftar!";
	}

}
