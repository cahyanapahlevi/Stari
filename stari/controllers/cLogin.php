<?php 

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stm = $db->prepare("SELECT * FROM login where username = :username and password = :password");
$stm->bindParam(':username', $username);
$stm->bindParam(':password', $password);
$stm->execute();

if ($stm->rowCount() == 1) 
{
	$idLevel = $stm->fetch();

	if ($idLevel['id_level'] == 0) 
	{
		header("Location: ../views/admin_anggota.php");
	} 

	elseif ($idLevel['id_level'] == 1)
	{
		header("Location: ../views/m-pelatih.php");
	}

} 
else
{
	header("Location: ../../index.php");
}