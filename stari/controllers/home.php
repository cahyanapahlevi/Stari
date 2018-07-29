<?php

class home {

    function __construct() {
        // parent::__construct();
        // Auth::handleLogin();
        
    }

    function index() {
    	include "views/_head.php";
        include "views/_navigasi-nm.php";
        include "views/index.php";
        include "views/_script.php";
        
    }

}