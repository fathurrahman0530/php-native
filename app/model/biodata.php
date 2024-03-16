<?php

$table = 'tb_biodata';

// for cek email biodata
// $cekEmailBio = $conn->prepare("SELECT * FROM '$table' WHERE email = ?");
// $cekEmailBio->bind_param('s', $email);
// $cekEmailBio->execute();
// $resultCekEmailBio = $cekEmailBio->get_result();

// for cek notelp biodata
// $cekNotelpBio = $conn->prepare("SELECT * FROM '$table' WHERE notelp = ?");
// $cekNotelpBio->bind_param('s', $notelp);
// $cekNotelpBio->execute();
// $resultCekNotelpBio = $cekNotelpBio->get_result();

// for insert data biodata
$queryBio = "INSERT INTO `tb_biodata` VALUES (NULL, '$uniqIdBio', '$fullname', '$tmptLahir', '$tglLahir', '$alamat', '$notelp', '$email', '$uniqIdUser')";