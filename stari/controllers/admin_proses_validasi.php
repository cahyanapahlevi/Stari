<?php

include 'koneksi.php';

if (isset($_GET['id']) && isset($_GET['status'])) {

	extract($_GET);
	if ($_GET['status']) {
		
		$stm = $db->prepare("UPDATE tb_audition SET status = :status where id_audition = :id_audition");
		$stm->bindParam(':id_audition', $id);
		$stm->bindParam(':status', $status);
		$stm->execute() ;
		

		header("Location: ../views/admin-audition.php");
	} else {
		echo $pesan;
	}

}