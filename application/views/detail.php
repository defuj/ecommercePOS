<?php if ($produk) { ?>
  <!-- Main Content -->
  <main>

    <div class="container">
      <?php foreach ($produk as $data) { ?>
        <div class="card shadow border-white">
          <div class="card-body pb-5">
            <div class="row g-2">
              <div class="col-lg-6">
                <div class="productimg">
                  <a href="<?= base_url($direktori->produk_direktori . $data->nama_file) ?>" id="single_image">
                    <img src="<?= base_url($direktori->produk_direktori . $data->nama_file) ?>" class="img-fluid rounded thumb d-block m-auto">
                  </a>
                  <div id="img-pruduct-slider" class="owl-carousel pt-2 ">
                    <?php

                    $this->load->model('produk');

                    $dataImg = $this->produk->getDataImg($data->id)->result();

                    foreach ($dataImg as $img) { ?>
                      <div class="grid-image ms-1">
                        <img src="<?= base_url($direktori->produk_direktori . $img->nama_file) ?>" class="img-fluid img-thumb rounded">
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 ms-none">
                <?php if ($data->status_jual == 0) { ?>
                  <span class="text-danger fw-bold d-inline d-sm-none"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                <?php } else { ?>
                  <span class="text-success fw-bold d-inline d-sm-none"><i class="fas fa-check-circle me-1"></i>Stok Tersedia</span>
                <?php } ?>
                <div class="d-flex flex-column bd-highlight product-box">
                  <h3 class="card-title mt-3 mt-lg-0 text-hidden"><?= $data->nama_item ?> <a href=""><i class="fas fa-share-alt float-end text-custom pe-2"></i></a></h3>
                  <?php if ($data->tipe_diskon == 'persen') { ?>
                    <h4 class="text-hidden">Rp.&nbsp;<?= number_format((($data->diskon / 100) * $data->harga_akhir), 0, ',', '.') ?>
                      <span class="badge rounded-pill bg-danger"><?= $data->diskon ?>%</span>
                      <sub><s>Rp.&nbsp;<?= number_format(($data->harga_akhir), 0, ',', '.') ?></s></sub>
                    </h4>
                  <?php } elseif ($data->tipe_diskon == 'nominal') { ?>
                    <h4 class="text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir - ($data->diskon)), 0, ',', '.') ?>
                      <sub><s>Rp.&nbsp;<?= number_format(($data->harga_akhir), 0, ',', '.') ?></s></sub>
                    </h4>
                  <?php } elseif ($data->tipe_diskon == 'no_diskon') { ?>
                    <h4 class="text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir), 0, ',', '.') ?></h5>
                    <?php } ?>
                    <div class="bd-highlight">
                      <span class="text-warning me-1">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                      <?php if ($data->status_jual == 0) { ?>
                        <span class="text-danger ms-2 fw-bold d-none d-sm-inline"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                      <?php } else { ?>
                        <span class="text-success ms-2 fw-bold d-none d-sm-inline"><i class="fas fa-check-circle me-1"></i>Stok Tersedia</span>
                      <?php } ?>
                    </div>
                    <hr />
                    <p class="card-text mb-3"><?= $data->deskripsi_ecommerce ?></p>
                    <!-- Varian -->
                    <!-- <div class="d-flex mb-3" id="varian">
                    <input type="radio" class="btn-check" name="varian" id="danger-outlined" autocomplete="off">
                    <label class="btn btn-outline-danger me-2 lh-base" for="danger-outlined">Hitam</label>
                    <input type="radio" class="btn-check" name="varian" id="danger-outlined-2" autocomplete="off">
                    <label class="btn btn-outline-danger lh-base" for="danger-outlined-2">Putih</label>
                  </div> -->
                    <!-- End Varian -->
                    <div class="number">
                      <label class="me-2">Kuantitas</label>
                      <button type="button" class="btn btn-sm btn-custom minus">
                        <i class="fas fa-minus"></i>
                      </button>
                      <input type="text" data-stok="99" class="form-number" value="1" />
                      <button type="button" class="btn btn-sm btn-custom plus">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <hr />
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <?php if ($data->status_jual == 0) { ?>
                        <button class="btn btn-secondary text-white"><i class="fas fa-cart-plus me-2"></i> Masukan Keranjang</button>
                        <a class="btn btn-secondary"><i class="fas fa-share me-1"></i> Beli Sekarang</a>
                      <?php } elseif ($user) { ?>
                        <a class="btn btn-custom text-white add-cart" data-kode="<?= $data->kode_item ?>" href="<?= base_url('cart/insert') ?>"><i class="fas fa-cart-plus me-1"></i> Masukan Keranjang</a>
                        <form action="<?= base_url('cart/checkout') ?>" method="post" class="d-grid">
                          <input type="hidden" id="input-qty" name="qty" value="1">
                          <input type="hidden" name="slug" value="<?= $data->slug ?>">
                          <button class="btn btn-custom-2" type="submit"><i class="fas fa-share me-1"></i> Beli Sekarang</button>
                        </form>
                      <?php } else { ?>
                        <a href="<?= base_url('auth') ?>" class="btn btn-custom"><i class="fas fa-cart-plus me-2"></i> Masukan Keranjang</a>
                        <a href="<?= base_url('auth') ?>" class="btn btn-custom-2"><i class="fas fa-share me-1"></i> Beli Sekarang</a>
                      <?php } ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </main>
  <!-- End Main Content -->



  <!-- Spesification Box -->
  <div class="container">
    <div class="card shadow border-white mb-4">
      <div class="card-body">
        <div class="d-flex p-2 bd-highlight bg-light">Spesifikasi Produk</div>
        <div class="ms-2">
          <table class="table table-borderless">
            <tr>
              <td class="col-2">Tipe</td>
              <td><?= $data->tipe ?></td>
            </tr>
            <tr>
              <td class="col-2">Berat</td>
              <td><?= $data->berat ?></td>
            </tr>
            <tr>
              <td class="col-2">Panjang</td>
              <td><?= $data->panjang ?></td>
            </tr>
            <tr>
              <td class="col-2">Lebar</td>
              <td><?= $data->lebar ?></td>
            </tr>
            <tr>
              <td class="col-2">Tinggi</td>
              <td><?= $data->tinggi ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End Spesification Box -->

  <!--  Description Box -->
  <!-- <div class="container">
    <div class="card shadow border-white mt-4">
      <div class="card-body">
        <div class="d-flex p-2 bd-highlight bg-light">Deskripsi Produk</div>
        <div class="ms-2">
          <p class="mt-3"><?= $data->deskripsi_ecommerce ?></p>
        </div>
      </div>
    </div>
  </div> -->
  <!-- End Description Box -->

  <!-- Reviews -->
  <!-- <div class="container">
    <div class="card shadow border-white mt-4 ">
      <div class="card-body">
        <div class="d-flex bd-highlight">
          <div class="me-auto p-2 bd-highlight my-2 ">Penilaian Produk</div>
          <div class="p-2 bd-highlight"><a href="" class="text-decoration-none">Lihat Semua</a></div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-1 mb-lg-0 mb-3"><img src="<?= base_url('assets/img/user.png') ?>" width="75px" height="75px" class="image-rating"></div>
          <div class="col-lg-11">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/21</small><span class="text-warning ms-5 me-1">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-1 mb-lg-0 mb-3"><img src="<?= base_url('assets/img/user.png') ?>" width="75px" height="75px" class="image-rating"></div>
          <div class="col-lg-11">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/21</small><span class="text-warning ms-5 me-1">&#9733; &#9733; &#9733; &#9734; &#9734;</span>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-1 mb-lg-0 mb-3"><img src="<?= base_url('assets/img/user.png') ?>" width="75px" height="75px" class="image-rating"></div>
          <div class="col-lg-11">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/21</small><span class="text-warning ms-5 me-1">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-1 mb-lg-0 mb-3"><img src="<?= base_url('assets/img/user.png') ?>" width="75px" height="75px" class="image-rating"></div>
          <div class="col-lg-11">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/21</small><span class="text-warning ms-5 me-1">&#9733; &#9733; &#9733; &#9734; &#9734;</span>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-1 mb-lg-0 mb-3"><img src="<?= base_url('assets/img/user.png') ?>" width="75px" height="75px" class="image-rating"></div>
          <div class="col-lg-11">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/21</small><span class="text-warning ms-5 me-1">&#9733; &#9733; &#9733; &#9734; &#9734;</span>
          </div>
        </div>
        <hr />
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div> -->
  <!-- End Reviews -->
<?php } else { ?>
  <main>
    <div class="container">
      <div class="card border-0 shadow">
        <div class="card-body text-center">
          <span>Barang tidak ditemukan</span>
        </div>
      </div>
    </div>
  </main>
<?php } ?>

<!-- Produk Lain -->
<div class="container">
  <div class="card shadow mt-4 border-white">
    <div class="card-body">
      <div class="d-flex bd-highlight">
        <div class="me-auto p-2 bd-highlight my-2">Produk Lain</div>
        <div class="p-2 bd-highlight"><a href="<?= base_url('pages/index/#produk') ?>" class="text-decoration-none">Lihat Semua</a></div>
      </div>
      <!-- Slider -->
      <div id="slider" class="owl-carousel slide-show owl-theme owl-loaded mt-5">
        <div class="owl-stage-outer">
          <div class="owl-stage">

            <?php foreach ($produkLimit as $data) { ?>
              <div class="owl-item">
                <div class="card <?= ($data->status_jual == 0) ? 'border border-danger' : ''; ?>">
                  <a href="<?= base_url('pages/detail/' . $data->slug) ?>">
                    <img src="<?= base_url($direktori->produk_direktori . $data->nama_file) ?>" class="card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-hidden"><a href="<?= base_url('pages/detail/' . $data->slug) ?>" class="text-muted text-decoration-none"><?= $data->nama_item ?></a></h6>
                    <?php if ($data->tipe_diskon == 'persen') { ?>
                      <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format((($data->diskon / 100) * $data->harga_akhir), 0, ',', '.') ?>
                        <span class="badge rounded-pill bg-danger"><?= $data->diskon ?>%</span>
                      </h5>
                    <?php } elseif ($data->tipe_diskon == 'nominal') { ?>
                      <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir - ($data->diskon)), 0, ',', '.') ?>
                      </h5>
                    <?php } elseif ($data->tipe_diskon == 'no_diskon') { ?>
                      <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir), 0, ',', '.') ?></h5>
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
      </div>
      <!-- End Slider -->
    </div>
  </div>
</div>

<!-- Btn Back -->
<div class="container mt-3">
  <a class="btn btn-custom shadow w-100 text-center" href="<?= base_url('pages') ?>"><i class="fas fa-arrow-left m-3"></i>Kembali</a>
</div>
<!-- Btn Back -->