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
    <form class="sign-up-form form" action="index.php?action=register" method="POST">
      <label class="form-label-wrapper">
        <p class="form-label">Nama Lengkap</p>
        <input class="form-input" type="text" name="fullname" placeholder="Enter your fullname" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Tempat Lahir</p>
        <input class="form-input" type="text" name="tmpt_lahir" placeholder="Enter your Tempat Lahir" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Tanggal Lahir</p>
        <input class="form-input" type="date" name="tgl_lahir" placeholder="Enter your Tanggal Lahir" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Alamat</p>
        <textarea class="form-input" name="alamat" id="alamat" cols="30" rows="10" required></textarea>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">No. Whatsapp</p>
        <input class="form-input" type="text" name="notelp" placeholder="Enter your no. whatsapp" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" type="email" name="email" placeholder="Enter your email" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Username</p>
        <input class="form-input" type="text" name="username" placeholder="Enter your username" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" name="password" placeholder="Enter your password" required>
      </label>
      <button type="submit" name="register" class="form-btn mt-1 primary-default-btn transparent-btn">Sign up</button>
    </form>
  </article>
  <p class="mt-1">Already have an account? <a href="index.php?page=login">Log In</a></p>
</main>
<!-- Chart library -->
<script src="assets/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="assets/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="assets/js/script.js"></script>
</body>

</html>