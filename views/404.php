<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik Mahasiswa</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/custome.css">
</head>

<body>
    <div class="layer"></div>
    <main class="page-center">
        <article class="sign-up">
            <h1 class="sign-up__title">404 Page Not Found</h1>
        </article>
        <?php if (isset($_SESSION['uniq_id_user'])) : ?>
            <p class="mt-1"><a href="index.php?page=home">Back to Home</a></p>
        <?php else : ?>
            <p class="mt-1">Already have an account? <a href="index.php?page=login">Log In</a></p>
        <?php endif; ?>
    </main>
    <!-- Chart library -->
    <script src="assets/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="assets/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="assets/js/script.js"></script>
</body>

</html>