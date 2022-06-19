<?php 


namespace App\Controllers;

// Autoloader
require_once '../vendor/autoload.php';

// Load Config
require_once '../config/config.php';

// Routes
require_once '../routes/web.php';
require_once '../app/Router.php';

function index(){
    require_once APP_ROOT . '/views/index_view.php';
}