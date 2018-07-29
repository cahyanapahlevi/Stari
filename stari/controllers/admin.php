<?php

class admin{

    function __construct() {
    
        // Auth::handleLogin();
        
    }


    function tampil_schedule(){
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/admin-schedule.php";
        include "views/_script.php";
    }

    function tampil_pelatih(){
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/admin-pelatih.php";
        include "views/_script.php";
    }

    function tampil_event(){
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/admin-event.php";
        include "views/_script.php";
    }

    function tampil_anggota(){
        include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/admin-anggota.php";
        include "views/_script.php";
    }

}