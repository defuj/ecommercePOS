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
              <img src="<?= base_url('assets/img/solid-1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url('assets/img/solid-2.jpg') ?>" class="d-block w-100" alt="...">
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
          <img src="<?= base_url('assets/img/solid-1.jpg') ?>" class="d-block w-100 mb-2 mb-md-0" alt="...">
          <img src="<?= base_url('assets/img/solid-2.jpg') ?>" class="d-block w-100 mb-2 mb-md-0" alt="...">
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
        <form action="">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Produk" aria-label="Cari Produk" aria-describedby="button-addon2">
            <button class="btn btn-custom" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
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
                <img src="<?= base_url('assets/img/kategori/laptop-40.svg') ?>" class="d-block m-auto mt-3" alt="...">
                <p class="mt-3 text-center"><a href="<?= base_url('index.php/pages/kategori') ?>" class="text-decoration-none text-dark">Notebook</a></p>
              </div>
              <div class="owl-item">
                <img src="<?= base_url('assets/img/kategori/microchip.svg') ?>" class="d-block m-auto mt-3" alt="...">
                <p class="mt-3 text-center"><a href="" class="text-decoration-none text-dark">Perangkat PC</a></p>
              </div>
              <div class="owl-item">
                <img src="<?= base_url('assets/img/kategori/computer-1.svg') ?>" class="d-block m-auto mt-3" alt="...">
                <p class="mt-3 text-center"><a href="" class="text-decoration-none text-dark">PC</a></p>
              </div>
              <div class="owl-item">
                <img src="<?= base_url('assets/img/kategori/monitor-1.svg') ?>" class="d-block m-auto mt-3" alt="...">
                <p class="mt-3 text-center"><a href="" class="text-decoration-none text-dark">LCD</a></p>
              </div>
              <div class="owl-item">
                <img src="<?= base_url('assets/img/kategori/keyboard.svg') ?>" class="d-block m-auto mt-3" alt="...">
                <p class="mt-3 text-center"><a href="" class="text-decoration-none text-dark">Aksesoris</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="owl-carousel slide-show-kategori owl-theme owl-loaded my-4">
          <div class="owl-stage-outer">
            <div class="owl-stage m-auto border-top border-bottom">
              <div class="owl-item">
                <img src="<?= base_url('assets/img/kategori/storage-drive.svg') ?>" class="d-block m-auto mt-3" alt="...">
                <p class="mt-3 text-center"><a href="" class="text-decoration-none text-dark">UPS</a></p>
              </div>
              <div class="owl-item">
                <img src="<?= base_url('assets/img/kategori/printer.svg') ?>" class="d-block m-auto mt-3" alt="...">
                <p class="mt-3 text-center"><a href="" class="text-decoration-none text-dark">Printer</a></p>
              </div>
              <div class="owl-item">
                <img src="<?= base_url('assets/img/kategori/compact-discs.svg') ?>" class="d-block m-auto mt-3" alt="...">
                <p class="mt-3 text-center"><a href="" class="text-decoration-none text-dark">Storage</a></p>
              </div>
              <div class="owl-item">
                <img src="<?= base_url('assets/img/kategori/router-1.svg') ?>" class="d-block m-auto mt-3" alt="...">
                <p class="mt-3 text-center"><a href="" class="text-decoration-none text-dark">Networking</a></p>
              </div>
              <div class="owl-item">
                <img src="<?= base_url('assets/img/kategori/webcam.svg') ?>" class="d-block m-auto mt-3" alt="...">
                <p class="mt-3 text-center"><a href="" class="text-decoration-none text-dark">Proyektor</a></p>
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
        <div class="col-md-4 col-sm-6 col-12 mb-4">
          <div class="card shadow <?= ($data->stok == 0) ? 'border border-danger' : ''; ?>">
            <a href="<?= base_url('index.php/pages/detail/'.$data->kode_item) ?>">
              <img src="<?= base_url('assets/img/'.$data->cover_img) ?>" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h6 class="card-subtitle mb-2 nama-produk"><a href="<?= base_url('index.php/pages/detail/'.$data->kode_item) ?>" class="text-muted text-decoration-none"><?= $data->nama_item ?></a></h6>
              <h5 class="card-title">Rp.&nbsp;<?= number_format(($data->satuan_dasar), 0,',','.') ?></h5>
              <footer class="blockquote-footer mt-2">
                <span>Terjual <?= $data->status_jual ?></span>
                <?php if ($data->stok == 0) { ?>
                  <span class="text-danger ms-2 fw-bold"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                <?php } ?>
              </footer>
              <?php if ($data->stok == 0) { ?>
                <button class="btn btn-sm btn-secondary text-white">Tambah Keranjang <i class="fas fa-cart-plus"></i></button>
              <?php } else { ?>
                <a class="btn btn-sm btn-custom text-white add-cart" data-kode="<?= $data->kode_item ?>" href="<?= base_url('index.php/cart/insert') ?>">Tambah Keranjang <i class="fas fa-cart-plus"></i></a>
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
            <div class="card <?= ($data->stok == 0) ? 'border border-danger' : ''; ?>">
              <a href="<?= base_url('index.php/pages/detail/'.$data->kode_item) ?>">
                <img src="<?= base_url('assets/img/'.$data->cover_img) ?>" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 nama-produk"><a href="<?= base_url('index.php/pages/detail/'.$data->kode_item) ?>" class="text-muted text-decoration-none"><?= $data->nama_item ?></a></h6>
                <h5 class="card-title">Rp.&nbsp;<?= number_format(($data->satuan_dasar), 0,',','.') ?></h5>
                <footer class="blockquote-footer mt-2">
                  <span>Terjual <?= $data->status_jual ?></span>
                  <?php if ($data->stok == 0) { ?>
                    <span class="text-danger ms-2 fw-bold"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                  <?php } ?>
                </footer>
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
              <img src="<?= base_url('assets/img/img-thumb-1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url('assets/img/img-thumb-2.jpg') ?>" class="d-block w-100" alt="...">
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
              <img src="<?= base_url('assets/img/img-thumb-3.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url('assets/img/img-thumb-4.jpg') ?>" class="d-block w-100" alt="...">
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
              <img src="<?= base_url('assets/img/img-thumb-5.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url('assets/img/img-thumb-6.jpg') ?>" class="d-block w-100" alt="...">
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
            <div class="card <?= ($data->stok == 0) ? 'border border-danger' : ''; ?>">
              <a href="<?= base_url('index.php/pages/detail/'.$data->kode_item) ?>">
                <img src="<?= base_url('assets/img/'.$data->cover_img) ?>" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 nama-produk"><a href="<?= base_url('index.php/pages/detail/'.$data->kode_item) ?>" class="text-muted text-decoration-none"><?= $data->nama_item ?></a></h6>
                <h5 class="card-title">Rp.&nbsp;<?= number_format(($data->satuan_dasar), 0,',','.') ?></h5>
                <footer class="blockquote-footer mt-2">
                  <span>Terjual <?= $data->status_jual ?></span>
                  <?php if ($data->stok == 0) { ?>
                    <span class="text-danger ms-2 fw-bold"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                  <?php } ?>
                </footer>
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