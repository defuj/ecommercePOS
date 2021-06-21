<?php if ($produk) { ?>
  <!-- Main Content -->
  <main>
    <div class="container">
      <?php foreach ($produk as $data) { ?>
        <div class="card shadow border-white">
          <div class="card-body pb-5">
            <div class="row g-2">
              <div class="col-lg-6">
                <div class="productimg ">
                  <img src="<?= base_url('assets/img/'.$data->cover_img) ?>" class="img-fluid rounded w-100 thumb">
                  <div id="img-pruduct-slider" class="owl-carousel pt-2 " height="100px">
                    <div class="grid-image ms-1">
                      <img src="<?= base_url('assets/img/card-1.jpg') ?>" class="img-fluid img-thumb rounded" width="10px" height="10px">
                    </div>
                    <div class="grid-image ms-1">
                      <img src="<?= base_url('assets/img/card-2.jpg') ?>" class="img-fluid img-thumb rounded" width="10px" height="10px">
                    </div>
                    <div class="grid-image ms-1">
                      <img src="<?= base_url('assets/img/card-3.jpg') ?>" class="img-fluid img-thumb rounded" width="10px" height="10px">
                    </div>
                    <div class="grid-image ms-1">
                      <img src="<?= base_url('assets/img/card-4.jpg') ?>" class="img-fluid img-thumb rounded" width="10px" height="10px">
                    </div>
                    <div class="grid-image ms-1">
                      <img src="<?= base_url('assets/img/card-5.jpg') ?>" class="img-fluid img-thumb rounded" width="10px" height="10px">
                    </div>
                    <div class="grid-image ms-1">
                      <img src="<?= base_url('assets/img/card-6.jpg') ?>" class="img-fluid img-thumb rounded" width="10px" height="10px">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 ms-none">
                <?php if ($data->stok == 0) { ?>
                  <span class="text-danger fw-bold d-inline d-sm-none"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                <?php } else { ?>
                  <span class="text-success fw-bold d-inline d-sm-none"><i class="fas fa-check-circle me-1"></i>Stok Barang <?= $data->stok ?></span>
                <?php } ?>
                <div class="d-flex flex-column bd-highlight product-box">
                  <h3 class="card-title mt-3 mt-lg-0 text-hidden"><?= $data->nama_item ?> <a href=""><i class="fas fa-share-alt float-end text-custom pe-2"></i></a></h3>
                  <h4 class="text-hidden">Rp.&nbsp;<?= number_format(($data->satuan_dasar), 0,',','.') ?></h4>
                  <div class="bd-highlight">
                    <span>Terjual <small class="badge badge-sm bg-warning"><?= $data->status_jual ?></small></span>
                    <span class="text-warning ms-5 me-1">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                    <?php if ($data->stok == 0) { ?>
                      <span class="text-danger ms-2 fw-bold d-none d-sm-inline"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                    <?php } else { ?>
                      <span class="text-success ms-2 fw-bold d-none d-sm-inline"><i class="fas fa-check-circle me-1"></i>Stok Barang <?= $data->stok ?></span>
                    <?php } ?>
                  </div>
                  <hr />
                  <p class="card-text"><?= $data->ket ?></p>
                  <!-- Varian -->
                  <div class="d-flex mb-3" id="varian">
                    <input type="radio" class="btn-check" name="varian" id="danger-outlined" autocomplete="off">
                    <label class="btn btn-outline-danger me-2 lh-base" for="danger-outlined">Hitam</label>
                    <input type="radio" class="btn-check" name="varian" id="danger-outlined-2" autocomplete="off">
                    <label class="btn btn-outline-danger lh-base" for="danger-outlined-2">Putih</label>
                  </div>
                  <!-- End Varian -->
                  <div class="number">
                    <label class="me-2">Kuantitas</label>
                    <button type="button" class="btn btn-sm btn-custom minus">
                      <i class="fas fa-minus"></i>
                    </button>
                    <input type="text" data-stok="<?= $data->stok ?>" class="form-number" value="1" />
                    <button type="button" class="btn btn-sm btn-custom plus">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <hr />
                                <div ></div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <?php if ($data->stok == 0) { ?>
                      <button class="btn btn-secondary text-white"><i class="fas fa-cart-plus me-2"></i> Masukan Keranjang</button>
                      <a class="btn btn-secondary"><i class="fas fa-share me-1"></i> Beli Sekarang</a>
                    <?php } else { ?>
                      <a class="btn btn-custom text-white add-cart" data-kode="<?= $data->kode_item ?>" href="<?= base_url('cart/insert') ?>"><i class="fas fa-cart-plus me-1"></i> Masukan Keranjang</a>
                      <form action="<?= base_url('cart/checkout') ?>" method="post" class="d-grid">
                        <input type="hidden" id="input-qty" name="qty" value="1">
                        <input type="hidden" name="slug" value="<?= $data->slug ?>">
                        <button class="btn btn-custom-2" type="submit"><i class="fas fa-share me-1"></i> Beli Sekarang</button>
                      </form>
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
            <tr>
              <td class="col-2">Stok</td>
              <td><?= $data->stok ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End Spesification Box -->

  <!--  Description Box -->
  <div class="container">
    <div class="card shadow border-white mt-4">
      <div class="card-body">
        <div class="d-flex p-2 bd-highlight bg-light">Deskripsi Produk</div>
        <div class="ms-2">
          <p><?= $data->deskripsi_ecommerce ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Description Box -->

  <!-- Reviews -->
  <div class="container">
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
  </div>
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
              <div class="card <?= ($data->stok == 0) ? 'border border-danger' : ''; ?>">
                <a href="<?= base_url('pages/detail/'.$data->slug) ?>">
                  <img src="<?= base_url('assets/img/'.$data->cover_img) ?>" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h6 class="card-subtitle mb-2 text-hidden"><a href="<?= base_url('pages/detail/'.$data->slug) ?>" class="text-muted text-decoration-none"><?= $data->nama_item ?></a></h6>
                  <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format(($data->satuan_dasar), 0,',','.') ?></h5>
                  <footer class="blockquote-footer mt-2">
                    <?php if ($data->stok == 0) { ?>
                      <span class="text-danger ms-2 fw-bold"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                    <?php } else { ?>
                      <span>Terjual <?= $data->status_jual ?></span>
                    <?php } ?>
                  </footer>
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