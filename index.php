<?php

require('database/conn.php');

if (isset($_SESSION['uniq_id_user'])) {
    include('layouts/master.php');
} else {
    echo "Maaf anda belum melakukan login.., Silahkan login terlebih dahulu...!!!";
    /* include('login.php'); */
}