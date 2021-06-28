<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;800;900&display=swap" rel="stylesheet">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/e5b02af0ea.js" crossorigin="anonymous"></script>
  <title><?= $title ?></title>
</head>

<body class="bg-custom">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-6 col-12 m-auto">
        <div class="card p-2">
          <div class="card-body">
            <h1 class="h3 mb-2 fw-normal text-center">Register</h1>
            <form class="row g-3 mt-3" action="<?= base_url('auth/register') ?>" method="post">
              <div class="col-12">
                <input type="text" class="form-control p-3" placeholder="Nama Lengkap" name="nama" value="<?= set_value('nama') ?>">
                <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control p-3" placeholder="Username" name="username" value="<?= set_value('username') ?>">
                <?= form_error('username', '<small class="text-danger">', '</small>') ?>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control p-3" placeholder="No. Telp" name="no_telp" value="<?= set_value('no_telp') ?>">
                <?= form_error('no_telp', '<small class="text-danger">', '</small>') ?>
              </div>
              <div class="col-12">
                <input type="text" class="form-control p-3" placeholder="Email" name="email" value="<?= set_value('email') ?>">
                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
              </div>
              <div class="col-md-6">
                <input type="password" class="form-control p-3" placeholder="Password" name="password">
                <?= form_error('password', '<small class="text-danger">', '</small>') ?>
              </div>
              <div class="col-md-6">
                <input type="password" class="form-control p-3" placeholder="Confirm Password" name="confirm_pass">
                <?= form_error('confirm_pass', '<small class="text-danger">', '</small>') ?>
              </div>
              <div class="col-12">
                <button class="w-100 btn btn-custom p-3" type="submit">Register</button>
              </div>
              <div class="my-2 float-center ">
                <div class="text-center mt-3">
                  Sudah punya Akun?<a href="<?= base_url('auth') ?>" class="text-decoration-none ms-1 text-custom">Login</a>
                </div>
                <div class="text-center mt-2">
                  <a href="<?= base_url('auth/forgot') ?>" class="text-decoration-none text-custom">Lupa Password?</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>