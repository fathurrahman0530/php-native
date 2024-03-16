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
    <h1 class="sign-up__title">Welcome back!</h1>
    <form class="sign-up-form form" action="index.php?action=login" method="POST">
      <label class="form-label-wrapper">
        <p class="form-label">Username</p>
        <input class="form-input" type="text" name="username" placeholder="Enter your username" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" name="password" placeholder="Enter your password" required>
      </label>
      <button type="submit" class="form-btn mt-1 primary-default-btn transparent-btn">Sign in</button>
    </form>
  </article>
  <p class="mt-1">Don't have an account? <a href="index.php?page=register">Create an account</a></p>
</main>
<!-- Chart library -->
<script src="assets/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="assets/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="assets/js/script.js"></script>
</body>

</html>