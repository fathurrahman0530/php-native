<?php
switch ($page) {
    case 'login':
        include('views/login.php');
        break;

    case 'register':
        include('views/register.php');
        break;

    default:
        include('views/404.php');
        break;
}
