<?php

include "koneksi.php";

	function login($username, $password){
		$u = $username;
		$p = $password;
		$stm = $db->prepare("SELECT * FROM login where username = :u and password = :p");
		$stm->bindParam(':username', $username);
		$stm->bindParam(':password', $password);
		$stm->execute();

		if ($stm->rowCount() == 1) {
			echo "Login berhasil";
		}else{
			echo "Login gagal";
		}
	}