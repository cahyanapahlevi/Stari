<?php 

include 'koneksi.php';

if (isset($_POST['submit'])) {

	extract($_POST);
	$isValid = true;
	$pesan = "gagal menginputkan";

	if (trim($tanggal) == "") {
		$isValid = false;
		$pesan .= "tanggal harus diisi<br />";
	}
	if (trim($hari) == "") {
		$isValid = false;
		$pesan .= "hari harus diisi<br />";
	}
	if (trim($jam) == "") {
		$isValid = false;
		$pesan .= "jam harus diisi<br />";
	}
	if (trim($tempat) == "") {
		$isValid = false;
		$pesan .= "tempat harus diisi<br />";
	}
	if (trim($keterangan) == "") {
		$isValid = false;
		$pesan .= "keterangan harus diisi<br />";
	}


	if ($isValid) {

		$tanggal = date('Y-m-d', strtotime($tanggal));
		
		$stm = $db->prepare("INSERT INTO jadwal(id_jadwal, id_paket, hari, jam_mulai, jam_selesai)
			VALUES(:id_jadwal,:id_paket, :hari,:jam_mulai,:jam_selesai)");
		$stm->execute(array(
			"id_jadwal" => NULL,
			"id_paket" => $id_paket,
			"hari" => $hari,
			"jam_mulai" => $jam_mulai,
			"jam_selesai" => $jam_selesai
			
			));

		header("Location: ../views/admin-schedule.php");
	} else {
		echo $pesan;
	}

}
