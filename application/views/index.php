
  <!-- Carousel -->
  <section id="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 mb-2 mb-md-0">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url($direktori->banner_direktori.'solid-1.jpg') ?>" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url($direktori->banner_direktori.'solid-2.jpg') ?>" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-md-4 d-md-block d-none">
          <div class="image-header">
            <img src="<?= base_url($direktori->banner_direktori.'solid-1.jpg') ?>" class="d-block w-100 mb-2 mb-md-0" alt="...">
            <img src="<?= base_url($direktori->banner_direktori.'solid-2.jpg') ?>" class="d-block w-100 mb-2 mb-md-0" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Search -->
  <section id="add-on" class="d-md-none d-block mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <form method="get" action="<?= base_url('pages/kategori') ?>">
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="key" placeholder="Cari Produk">
              <button class="btn btn-custom" type="submit"><i class="fas fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Slider -->
  <section id="kategori" class="mt-5">
    <div class="container">
      <div class="card shadow border-white">
        <div class="card-body">
          <div class="owl-carousel slide-show-kategori owl-theme owl-loaded my-4">
            <div class="owl-stage-outer">
              <div class="owl-stage m-auto border-top border-bottom">
                <div class="owl-item">
                  <a class="text-decoration-none text-dark" href="<?= base_url('pages/kategori/notebook') ?>">
                    <img src="<?= base_url('assets/img/kategori/laptop-40.svg') ?>" class="d-block m-auto mt-3" alt="...">
                    <p class="mt-3 text-center">Notebook</p>
                  </a>
                </div>
                <div class="owl-item">
                  <a class="text-decoration-none text-dark" href="<?= base_url('pages/kategori/perangkat pc') ?>">
                    <img src="<?= base_url('assets/img/kategori/microchip.svg') ?>" class="d-block m-auto mt-3" alt="...">
                    <p class="mt-3 text-center">Perangkat PC</p>
                  </a>
                </div>
                <div class="owl-item">
                  <a class="text-decoration-none text-dark" href="<?= base_url('pages/kategori/pc') ?>">
                    <img src="<?= base_url('assets/img/kategori/computer-1.svg') ?>" class="d-md-blockock m-auto mt-3" alt="...">
                    <p class="mt-3 text-center">PC</p>
                  </a>
                </div>
                <div class="owl-item">
                  <a class="text-decoration-none text-dark" href="<?= base_url('pages/kategori/lcd') ?>">
                    <img src="<?= base_url('assets/img/kategori/monitor-1.svg') ?>" class="d-block m-auto mt-3" alt="...">
                    <p class="mt-3 text-center">LCD</p>
                  </a>
                </div>
                <div class="owl-item">
                  <a class="text-decoration-none text-dark" href="<?= base_url('pages/kategori/aksesoris') ?>">
                    <img src="<?= base_url('assets/img/kategori/keyboard.svg') ?>" class="d-block m-auto mt-3" alt="...">
                    <p class="mt-3 text-center">Aksesoris</p>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="owl-carousel slide-show-kategori owl-theme owl-loaded my-4">
            <div class="owl-stage-outer">
              <div class="owl-stage m-auto border-top border-bottom">
                <div class="owl-item">
                  <a class="text-decoration-none text-dark" href="<?= base_url('pages/kategori/ups') ?>">
                    <img src="<?= base_url('assets/img/kategori/storage-drive.svg') ?>" class="d-block m-auto mt-3" alt="...">
                    <p class="mt-3 text-center">UPS</p>
                  </a>
                </div>
                <div class="owl-item">
                  <a class="text-decoration-none text-dark" href="<?= base_url('pages/kategori/printer') ?>">
                    <img src="<?= base_url('assets/img/kategori/printer.svg') ?>" class="d-block m-auto mt-3" alt="...">
                    <p class="mt-3 text-center">Printer</p>
                  </a>
                </div>
                <div class="owl-item">
                  <a class="text-decoration-none text-dark" href="<?= base_url('pages/kategori/storage') ?>">
                    <img src="<?= base_url('assets/img/kategori/compact-discs.svg') ?>" class="d-block m-auto mt-3" alt="...">
                    <p class="mt-3 text-center">Storage</p>
                  </a>
                </div>
                <div class="owl-item">
                  <a class="text-decoration-none text-dark" href="<?= base_url('pages/kategori/networking') ?>">
                    <img src="<?= base_url('assets/img/kategori/router-1.svg') ?>" class="d-block m-auto mt-3" alt="...">
                    <p class="mt-3 text-center">Networking</p>
                  </a>
                </div>
                <div class="owl-item">
                  <a class="text-decoration-none text-dark" href="<?= base_url('pages/kategori/proyektor') ?>">
                    <img src="<?= base_url('assets/img/kategori/webcam.svg') ?>" class="d-block m-auto mt-3" alt="...">
                    <p class="mt-3 text-center">Proyektor</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Card -->
  <section id="produk" class="bg-flat py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Produk</h2>
        </div>
        <hr>
        <div class="row my-5">

          <?php foreach ($produk as $data) { ?>
          <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
            <div class="card shadow <?= ($data->status_jual == 0) ? 'border border-danger' : ''; ?>">
              <a href="<?= base_url('pages/detail/'.$data->slug) ?>" class="position-relative">
                <img src="<?= base_url($direktori->produk_direktori.$data->nama_file) ?>" class="card-img-top" alt="...">
              </a>
              <div class="card-body position-relative">
                <h6 class="card-subtitle mb-2 text-hidden"><a href="<?= base_url('pages/detail/'.$data->slug) ?>" class="text-muted text-decoration-none"><?= $data->nama_item ?></a></h6>
                <?php if ($data->tipe_diskon == 'persen') { ?>
                <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format((($data->diskon/100)*$data->harga_akhir), 0,',','.') ?>
                  <span class="badge rounded-pill bg-danger"><?= $data->diskon ?>%</span>
                  <sub><s>Rp.&nbsp;<?= number_format(($data->harga_akhir), 0,',','.') ?></s></sub>
                </h5>
                <?php } elseif ($data->tipe_diskon == 'nominal') { ?>
                <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir-($data->diskon)), 0,',','.') ?>
                  <sub><s>Rp.&nbsp;<?= number_format(($data->harga_akhir), 0,',','.') ?></s></sub>
                </h5>
                <?php } elseif ($data->tipe_diskon == 'no_diskon') { ?>
                  <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir), 0,',','.') ?></h5>  
                <?php } ?>
                <footer class="blockquote-footer mt-2">
                  <?php if ($data->status_jual == 0) { ?>
                    <span class="text-danger ms-2 fw-bold"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                  <?php } else { ?>
                    <span class="text-success ms-2 fw-bold"><i class="fas fa-check-circle me-1"></i>Stok Tersedia</span>
                  <?php } ?>
                </footer>
                <?php if ($data->status_jual == 0) { ?>
                  <button class="btn btn-sm btn-secondary text-white">Tambah Keranjang <i class="fas fa-cart-plus"></i></button>
                <?php } elseif($user) { ?>
                  <a class="btn btn-sm btn-custom text-white add-cart" data-kode="<?= $data->kode_item ?>" href="<?= base_url('cart/insert') ?>">Tambah Keranjang <i class="fas fa-cart-plus"></i></a>
                <?php } else { ?>
                  <a class="btn btn-sm btn-custom text-white" href="<?= base_url('auth') ?>">Tambah Keranjang <i class="fas fa-cart-plus"></i></a>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
  </section>

  <!-- Slider -->
  <section id="slider" class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Produk Unggulan</h2>
        </div>
      </div>
      <hr>
      <div class="owl-carousel slide-show owl-theme owl-loaded mt-5">
        <div class="owl-stage-outer">
          <div class="owl-stage">

            <?php foreach ($produkLimit as $data) { ?>
            <div class="owl-item">
              <div class="card <?= ($data->status_jual == 0) ? 'border border-danger' : ''; ?>">
                <a href="<?= base_url('pages/detail/'.$data->slug) ?>">
                  <img src="<?= base_url($direktori->produk_direktori.$data->nama_file) ?>" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h6 class="card-subtitle mb-2 text-hidden"><a href="<?= base_url('pages/detail/'.$data->slug) ?>" class="text-muted text-decoration-none"><?= $data->nama_item ?></a></h6>
                  <?php if ($data->tipe_diskon == 'persen') { ?>
                  <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format((($data->diskon/100)*$data->harga_akhir), 0,',','.') ?>
                    <span class="badge rounded-pill bg-danger"><?= $data->diskon ?>%</span>
                  </h5>
                  <?php } elseif ($data->tipe_diskon == 'nominal') { ?>
                  <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir-($data->diskon)), 0,',','.') ?>
                  </h5>
                  <?php } elseif ($data->tipe_diskon == 'no_diskon') { ?>
                    <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir), 0,',','.') ?></h5>
                  <?php } ?>
                  <?php if ($data->status_jual == 0) { ?>
                    <h6 class="text-danger fw-bold text-hidden"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</h6>
                  <?php } else { ?>
                    <h6 class="text-success fw-bold text-hidden"><i class="fas fa-check-circle me-1"></i>Stok Tersedia</h6>
                  <?php } ?>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>
        </div>
        <div class="owl-nav d-md-block d-none">
          <div class="owl-prev"></div>
          <div class="owl-next"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Promo -->
  <section id="promo" class="mt-5 py-5 bg-flat">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div id="carouselExampleIndicators-3" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators-3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators-3" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url($direktori->banner_direktori.'img-thumb-1.jpg') ?>" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url($direktori->banner_direktori.'img-thumb-2.jpg') ?>" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div id="carouselExampleIndicators-4" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators-4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators-4" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url($direktori->banner_direktori.'img-thumb-3.jpg') ?>" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url($direktori->banner_direktori.'img-thumb-4.jpg') ?>" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div id="carouselExampleIndicators-5" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators-5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators-5" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url($direktori->banner_direktori.'img-thumb-5.jpg') ?>" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url($direktori->banner_direktori.'img-thumb-6.jpg') ?>" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Slider -->
  <section id="slider" class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Produk Lain</h2>
        </div>
      </div>
      <hr>
      <div class="owl-carousel slide-show owl-theme owl-loaded mt-5">
        <div class="owl-stage-outer">
          <div class="owl-stage">

            <?php foreach ($produkLimit as $data) { ?>
            <div class="owl-item">
              <div class="card <?= ($data->status_jual == 0) ? 'border border-danger' : ''; ?>">
                <a href="<?= base_url('pages/detail/'.$data->slug) ?>">
                  <img src="<?= base_url($direktori->produk_direktori.$data->nama_file) ?>" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h6 class="card-subtitle mb-2 text-hidden"><a href="<?= base_url('pages/detail/'.$data->slug) ?>" class="text-muted text-decoration-none"><?= $data->nama_item ?></a></h6>
                  <?php if ($data->tipe_diskon == 'persen') { ?>
                  <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format((($data->diskon/100)*$data->harga_akhir), 0,',','.') ?>
                    <span class="badge rounded-pill bg-danger"><?= $data->diskon ?>%</span>
                  </h5>
                  <?php } elseif ($data->tipe_diskon == 'nominal') { ?>
                  <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir-($data->diskon)), 0,',','.') ?>
                  </h5>
                  <?php } elseif ($data->tipe_diskon == 'no_diskon') { ?>
                    <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir), 0,',','.') ?></h5>
                  <?php } ?>
                  <?php if ($data->status_jual == 0) { ?>
                    <h6 class="text-danger fw-bold text-hidden"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</h6>
                  <?php } else { ?>
                    <h6 class="text-success fw-bold text-hidden"><i class="fas fa-check-circle me-1"></i>Stok Tersedia</h6>
                  <?php } ?>
                </div>
              </div>
            </div>
            <?php } ?>
            
          </div>
        </div>
        <div class="owl-nav d-md-block d-none">
          <div class="owl-prev"></div>
          <div class="owl-next"></div>
        </div>
      </div>
    </div>
  </section>
  