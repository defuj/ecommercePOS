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
          <div class="card-body text-center">
            <?php echo form_open("auth/login");?>
              <img class="mb-4" src="<?= base_url('assets/img/logo.png') ?>" alt="" width="80" height="70">
              <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
              <?php if ($message) { ?>
                <div class="alert alert-danger" id="infoMessage"><?php echo $message;?></div>
              <?php } ?>
              <div class="form-floating mb-1">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="identity">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="forgot my-3 float-start ">
                <label class="forgot">
                  <input type="checkbox" value="1" id="remember" name="remember"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-custom p-3" type="submit">Login</button>
              <div class="my-2 float-center ">
                <div class="text-center mt-3">
                  Belum punya akun?<a href="<?= base_url('auth/create_user') ?>" class="text-decoration-none ms-1 text-custom">Daftar</a>
                </div>
                <div class="text-center mt-2">
                  <a href="<?= base_url('auth/forgot_password') ?>" class="text-decoration-none text-custom">Lupa Password?</a>
                </div>
              </div>
            <?php echo form_close();?>
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