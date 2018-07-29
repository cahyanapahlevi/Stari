<?php 
include 'koneksi.php';

if (isset($_POST['submit'])) {

	extract($_POST);
	$isValid = true;
	$pesan = "gagal menginputkan";

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
		
		$stm = $db->prepare("UPDATE jadwal SET id_paket = :id_paket, hari = :hari,jam_mulai = :jam_mulai,jam_selesai = :jam_selesai where id_jadwal = :id_jadwal");
		$stm->bindParam(':id_jadwal', $id_jadwal);
		$stm->bindParam(':id_paket', $id_paket);
		$stm->bindParam(':hari', $hari);
		$stm->bindParam(':jam_mulai', $jam_mulai);
		$stm->bindParam(':jam_selesai', $jam_selesai);
		$stm->execute() ;
		

		header("Location: ../views/admin-schedule.php");
	} else {
		echo $pesan;
	}

}