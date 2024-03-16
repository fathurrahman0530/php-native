<?php
require('app/config/database.php');
session_start();

isset($_REQUEST['page']) ? $page = $_REQUEST['page'] : '';

if (isset($_SESSION['uniq_id_user'])) {
    header('Location: index.php?page=home');
} else {
    // jika request page not found
    if (!isset($_REQUEST['page']) && !isset($_REQUEST['action'])) {
        header('Location: index.php?page=login');
    } elseif(isset($_REQUEST['action'])) {
        include('app/controller/AuthController.php');
    }
}

if(isset($_REQUEST['page'])){
    include('app/controller/PageController.php');
}