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
        <div class="card p-4">
          <div class="card-body">
            <form action="<?= base_url('auth') ?>" method="post">
              <img class="mb-4 d-block m-auto" src="<?= base_url('assets/img/logo.png') ?>" alt="" width="80" height="70">
              <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
              <?= $this->session->flashdata('message') ?>
              <div class="form-group mb-1">
                <input type="text" name="email" class="form-control p-3" placeholder="Email" value="<?= set_value('email') ?>">
                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control p-3" placeholder="Password">
                <?= form_error('password', '<small class="text-danger">', '</small>') ?>
              </div>
              <div class="forgot my-3 float-start ">
                <label class="forgot">
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-custom p-3" type="submit">Login</button>
              <div class="my-2 float-center ">
                <div class="text-center mt-3">
                  Belum punya akun?<a href="<?= base_url('auth/register') ?>" class="text-decoration-none ms-1 text-custom">Daftar</a>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>