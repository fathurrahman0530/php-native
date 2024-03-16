<?php

$action = $_REQUEST['action'];

switch ($action) {
    case 'login':
        include('app/model');

        header('Location: index.php?page=home');
        break;

    case 'register':
        if (isset($_POST['register'])) {
            // generate uniq_id
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomStringUser = '';
            $randomStringBio  = '';

            // uniq id for table user
            for ($i = 0; $i < 10; $i++) {
                $randomStringUser .= $characters[rand(0, $charactersLength - 1)];
            }

            // uniq id for table biodata
            for ($i = 0; $i < 10; $i++) {
                $randomStringBio .= $characters[rand(0, $charactersLength - 1)];
            }

            // for credential table user
            $uniqId   = $randomStringUser;
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $role     = 3;
            $status   = 'T';

            // for credential table bio
            $uniqIdBio  = $randomStringBio;
            $fullname   = $_POST['fullname'];
            $tmptLahir  = $_POST['tmpt_lahir'];
            $tglLahir   = $_POST['tgl_lahir'];
            $alamat     = $_POST['alamat'];
            $notelp     = $_POST['notelp'];
            $email      = $_POST['email'];
            $uniqIdUser = $uniqId;

            include('app/model/user.php');
            include('app/model/biodata.php');

            if ($resultCek->num_rows > 0) {
                echo "
                    <script>
                        alert('Username telah terdaftar silahkan lakukan login...!!!')
                    </script>
                ";

                header('Location: index.php?page=login');
            } else {
                if ($conn->query($queryUser) == true) {
                    if ($conn->query($queryBio) == true) {
                        echo "
                            <script>
                                alert('Pendaftaran anda berhasil')
                            </script>
                        ";

                        header('Location: index.php?page=login');
                    } else {
                        echo "
                            <script>
                                alert('Error : " . $queryBio . " || " . $conn->error . "')
                            </script>
                        ";

                        header('Location: index.php?page=register');
                    }
                } else {
                    echo "
                        <script>
                            alert('Error : " . $queryUser . " || " . $conn->error . "')
                        </script>
                    ";

                    header('Location: index.php?page=register');
                }

            }
        } else {
            header('Location: index.php?page=register');
        }
        break;

    default:
        # code...
        break;
}
