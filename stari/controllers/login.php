<?php

include '../../models/mLogin.php';

class login {

    function __construct() {
        
        // Auth::handleLogin();
        // $this->model = new login_model();
    }

    function tampil_login() {
    	include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/login.php";
        include "views/_script.php";  
    }

    function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($this->model->cek($username, $password)) {
            $data = $this->model->getIdLevel($username);
            switch ($data['id_level']) {
                case 0 :
                    header('location: '. URL .'admin_anggota');
                    break;
                case 1 :
                    header('location: '. URL .'m_pelatih');
                    break;
                default:
                    header('location: '. URL .'login');
                    break;
            }
        } else {
            header('location: '. URL .'login');
        }


// include 'koneksi.php';

// class login{

//     function __construct() {
        
//         // Auth::handleLogin();
//         // $this->model = new login_model();
//     }

//     function tampil_login() {
//         include "views/_head.php";
//         include "views/_navigasi-nm.php";
//         include "views/login.php";
//         include "views/_script.php";  
//     }

//     function login(){
//         $username = $_POST['username'];
//         $password = $_POST['password'];

//         $stm = $db->prepare("SELECT * FROM member where Username = :username and Password = :password");
//         $stm->bindParam(':username', $username);
//         $stm->bindParam(':password', $password);
//         $stm->execute();

//         if ($stm->rowCount() == 1) {
//             echo "Login berhasil";
//         } else {
//             echo "Login gagal";
//         }
//     }
// }
    }
}