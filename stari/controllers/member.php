<?php

class member {

    function __construct() {
        // parent::__construct();
        // Auth::handleLogin();
        
    }

    function tampil_schedule() {
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/m-schedule.php";
        include "views/_script.php";
    }

    function tampil_pelatih() {
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/m-pelatih.php";
        include "views/_script.php";
        
    }

    function tampil_anggota(){
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/m-anggota.php";
        include "views/_script.php";
        
    }