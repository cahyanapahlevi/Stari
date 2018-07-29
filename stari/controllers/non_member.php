<?php

class non_member {

    function __construct() {
        // parent::__construct();
        // Auth::handleLogin();
        // $this->model = new nm_joinus_model();
        
    }

    function tampil_event() {
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/nm-event.php";
        include "views/_script.php";
    }

    function tampil_joinus(){
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/nm-joinus.php";
        include "views/_script.php";
    }

    function createJoinUs(){
        // $id_audition = $_POST['id_audition'];
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat_asal = $_POST['alamat_asal'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];
        $fakultas = $_POST['fakultas'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $this->model->createJoinUs($nama, $nim, $jenis_kelamin, $alamat_asal, $no_hp, $email, $fakultas, $tgl_lahir);
        // header("location:admin-audition.php");
        header('location: ' . URL . 'admin_audition');
    }

    function tampil_OS(){
        // $this->view->aboutusactive = 'active';
        // $this->view->render('_head');
        // $this->view->render('_navigasi-nm');
        // $this->view->render('nm-OS');
        // $this->view->render('_script');
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/nm-OS.php";
        include "views/_script.php";
    }

    

    function tampil_ourstory(){
        // $this->view->aboutusactive = 'active';
        // $this->view->render('_head');
        // $this->view->render('_navigasi-nm');
        // $this->view->render('nm-ourstory');
        // $this->view->render('_script');
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/nm-ourstory.php";
        include "views/_script.php";
    }

    function tampil_vision(){
        // $this->view->aboutusactive = 'active';
        // $this->view->render('_head');
        // $this->view->render('_navigasi-nm');
        // $this->view->render('nm-vision');
        // $this->view->render('_script');
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/nm-vision.php";
        include "views/_script.php";
    }


