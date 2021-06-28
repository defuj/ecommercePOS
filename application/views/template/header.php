<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style-2.css') ?>">

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;800;900&display=swap" rel="stylesheet">

  <!-- Owl Carousel -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/e5b02af0ea.js" crossorigin="anonymous"></script>
  <!-- FancyBox -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link rel="stylesheet" href="<?= base_url('assets/fancybox/dist/jquery.fancybox.min.css') ?>">
  <title><?= $title ?></title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="<?= base_url() ?>">
        <img src="<?= base_url('assets/img/logo.png') ?>" class="me-2" alt="" width="50" height="50">
        <span class="d-sm-inline d-none">Megakomputer</span>
      </a>
      <form class="d-md-block d-none" method="get" action="<?= base_url('pages/kategori') ?>">
        <div class="input-group">
          <input type="text" class="form-control" name="key" placeholder="Cari Produk">
          <button class="btn btn-outline-custom me-2" type="submit"><i class="fas fa-search"></i></button>
          <?php if ($user) { ?>
          <a class="btn btn-custom text-decoration-none me-2" href="<?= base_url('cart') ?>">
            <i class="fas fa-shopping-cart me-2"></i>
            <span class="cart-cost" data-href="<?= base_url('cart/loadCost') ?>"><?= $this->cart->total_items() ?></span>
          </a>
          <!-- <button class="btn btn-custom me-2">Daftar</button> -->
          <!-- <button class="btn btn-custom-2">Login</button> -->
          <div class="dropdown">
            <a class="text-decoration-none text-custom dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="<?= base_url('assets/img/'.$user['img']) ?>" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item mb-2" href="<?= base_url('user') ?>"><i class="fas fa-user me-2"></i>Profile</a></li>
              <li><a class="dropdown-item my-2" href="<?= base_url('user/pesanan') ?>"><i class="fas fa-list me-2"></i></i>Daftar Pesanan</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
            </ul>
          </div>
          <?php } else { ?>
          <a href="<?= base_url('auth') ?>" class="btn btn-custom-2">Login</a >
          <?php } ?>
        </div>
      </form>
      <div class="d-flex d-md-none d-block">
        <?php if ($user) { ?>
        <a class="btn btn-custom me-2" href="<?= base_url('cart') ?>">
          <i class="fas fa-shopping-cart me-2"></i>
          <span class="cart-cost" data-href="<?= base_url('cart/loadCost') ?>"><?= $this->cart->total_items() ?></span>
        </a>
        <!-- <button class="btn btn-custom me-2">Daftar</button> -->
        <!-- <button class="btn btn-custom-2 me-2">Login</button> -->
        <div class="dropdown">
          <a class="text-decoration-none text-custom dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?= base_url('assets/img/'.$user['img']) ?>" alt="mdo" width="40" height="40" class="rounded-circle">
          </a>
          <ul class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item mb-2" href="<?= base_url('user') ?>"><i class="fas fa-user me-2"></i>Profile</a></li>
            <li><a class="dropdown-item my-2" href="<?= base_url('user/pesanan') ?>"><i class="fas fa-list me-2"></i></i>Daftar Pesanan</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
          </ul>
        </div>
        <?php } else { ?>
        <a href="<?= base_url('auth') ?>" class="btn btn-custom-2 d-inline">Login</a>
        <?php } ?>
      </div>
    </div>
  </nav>
  <!--End Navbar -->