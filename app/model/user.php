<?php

$table = 'tb_user';

// for check account
$cekUser = $conn->prepare("SELECT * FROM `tb_user` WHERE `username` = '$username'");
// $cekUser->bindParam(':username', $username);
$cekUser->execute();
$resultCek = $cekUser->get_result();

// for insert account
$queryUser = "INSERT INTO `tb_user` VALUEs (NULL, '$uniqId', '$username', '$password', '$role', '$status')";