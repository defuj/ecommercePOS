    <!-- Main Content -->
    <main>
      <!-- Address -->
      <div class="container">
        <div class="card h-100 w-100 shadow mt-5 border-0">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col">
                <div class="p-2 bd-highlight bg-light">Data Diri</div>
              </div>
            </div>
            <?php if (!$alamat){ ?>
              <p class="text-center mt-3 text-muted">Belum ada alamat yang dipilih. <a class="text-decoration-none" href="<?= base_url('user') ?>">Pilih alamat</a></p>
            <?php }else { ?>
            <div class="row mt-2">
              <div class="col-lg-2 col-md-3">
                <p class="text-md-end text-muted">Nama Lengkap</p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p class="name-alamat"><?= $alamat['name'] ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-3">
                <p class="text-md-end text-muted">No. Telp</p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p class="no-telp-alamat"><?= $alamat['no_telp'] ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-3">
                <p class="text-md-end text-muted">Alamat Lengkap</p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p class="alamat"><?= $alamat['alamat'] ?></p>
                <p class="provinsi"><?= $alamat['provinsi'] ?></p>
                <p><span class="kota"><?= $alamat['kota'] ?></span> - <span class="kecamatan"><?= $alamat['kecamatan'] ?></span> - <span class="desa"><?= $alamat['desa'] ?></span></p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-3">
                <p class="text-md-end text-muted">Kode Pos</p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p class="kode-pos"><?= $alamat['kode_pos'] ?></p>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- End Address -->

      <!-- List Produk -->
      <div class="container">
        <div class="card shadow border-white mt-4 mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="p-2 bd-highlight bg-light">Produk Dipesan</div>
              </div>
            </div>
            <?php
              if ($produk) {
                foreach ($produk as $data) {
             ?>
              <div class="row">
                <div class="col-md-2 col-sm-12 mt-3">
                  <img src="<?= base_url('assets/img/'.$data->cover_img) ?>" class="img-fluid rounded">
                </div>
                <div class="col-md-3 col-sm-12 mt-3">
                  <p class="text-muted">Nama Produk</p>
                  <h6 class="card-subtitle nama-produk"><?= $data->nama_item ?></h6>
                </div>
                <div class="col-md-3 col-sm-12 mt-3">
                  <p class="text-muted">Harga</p>
                  <p class="card-text"><?= $data->satuan_dasar ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-3">
                  <p class="text-muted">Jumlah</p>
                  <p class="card-text"><?= $qty ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-3">
                  <p class="text-muted">Sub Total</p>
                  <p class="card-text ">Rp.&nbsp;<?= number_format(($data->satuan_dasar * $qty), 0,',','.') ?></p>
                </div>
              </div>
            <?php 
                }
              } else {
                foreach ($this->cart->contents() as $data) {
            ?>
              <div class="row">
                <div class="col-md-2 col-sm-12 mt-3">
                  <img src="<?= base_url('assets/img/'.$data['img']) ?>" class="img-fluid rounded">
                </div>
                <div class="col-md-3 col-sm-12 mt-3">
                  <p class="text-muted">Nama Produk</p>
                  <h6 class="card-subtitle nama-produk"><?= $data['name'] ?></h6>
                </div>
                <div class="col-md-3 col-sm-12 mt-3">
                  <p class="text-muted">Harga</p>
                  <p class="card-text"><?= $data['price'] ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-3">
                  <p class="text-muted">Jumlah</p>
                  <p class="card-text "><?= $data['qty'] ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-3">
                  <p class="text-muted">Sub Total</p>
                  <p class="card-text">Rp.&nbsp;<?= number_format(($data['price'] * $data['qty']), 0,',','.') ?></p>
                </div>
              </div>
            <?php
                } 
              }
            ?>
            <?php if (!$produk | !$this->cart->contents()) { ?>
            <div class="row">
              <div class="col">
                <p class="text-muted text-center mt-3">Tidak ada produk yang ingin dipesan</p>
              </div>
            </div>
            <?php } ?>
            <hr>
            <?php 
              if ($produk) {
                foreach ($produk as $data) {
             ?>
              <div class="row justify-content-end">
                <div class="col-md-2 col-sm-12">
                  <p class="text-muted">Total Jumlah</p>
                  <p class="card-text "><?= $qty ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-md-0 mt-3">
                  <p class="text-muted">Total Harga</p>
                  <p class="card-text ">Rp.&nbsp;<?= number_format(($data->satuan_dasar * $qty), 0,',','.') ?></p>
                </div>
              </div>
            <?php
                }
              } else { 
             ?>
              <div class="row justify-content-end">
                <div class="col-md-2 col-sm-12">
                  <p class="text-muted">Total Jumlah</p>
                  <p class="card-text "><?= $this->cart->total_items() ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-md-0 mt-3">
                  <p class="text-muted">Total Harga</p>
                  <p class="card-text ">Rp.&nbsp;<?= number_format(($this->cart->total()), 0,',','.') ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- List Produk -->

      <?php if ($produk | $this->cart->contents()) { ?>
      <!-- Voucher -->
      <div class="container">
        <div class="card h-100 w-100 shadow mt-3 border-0">
          <div class="card-body">
            <div class="row ">
              <div class="col-sm-12">
                <form class="d-flex align-items-center">
                  <label  class="d-flex p-2 bd-highlight bg-light">Diskon</label>
                  <input class="form-control me-2" type="text" placeholder="Masukan Kode Diskon">
                  <button class="btn btn-custom-2" type="button">Reedem</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <!-- End Voucher -->


      <?php if ($produk | $this->cart->contents()) { ?>
      <!-- Method Payment -->
      <div class="container">
        <div class="card h-100 w-100 shadow mt-3 border-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="p-2 bd-highlight bg-light">Metode Pembayaran</div>
              </div>
            </div>
            <div class="row ">
              <div class="col-sm-12">
                <div class="my-3">
                  <input type="radio" class="btn-check" name="transaksi" id="primary-outlined" value="transfer-bank" autocomplete="off" data-bs-toggle="collapse" data-bs-target="#transfer-bank" aria-expanded="false" aria-controls="">
                  <label class="btn btn-outline-primary me-2 lh-base" for="primary-outlined">Transfer Bank</label>

                  <input type="radio" class="btn-check" name="transaksi" value="bayar-ditempat" id="dark-outlined-2" autocomplete="off">
                  <label class="btn btn-outline-dark lh-base" for="dark-outlined-2">Bayar Ditempat</label>
                </div>
                <div class="collapse" id="transfer-bank">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bank" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Bank BCA
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bank" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Bank BNI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bank" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Bank Mandiri
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bank" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Bank Mega
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <hr/>
            <div class="row justify-content-md-end">
              <div class="col-lg-3 col-md-3 col-6">
                <p class="text-muted">Subtotal Produk</p>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-5 text-end col-6 mt-md-0">
                <p class="card-text ">Rp.120.000</p>
              </div>
            </div>
            <div class="row justify-content-md-end">
              <div class="col-lg-3 col-md-3 col-6">
                <p class="text-muted">Ongkos Kirim</p>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-5 text-end col-6 mt-md-0">
                <p class="card-text ">Rp.120.000</p>
              </div>
            </div>
            <div class="row justify-content-md-end">
              <div class="col-lg-3 col-md-3 col-6">
                <p class="text-muted">Total Pembayaran</p>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-5 text-end col-6 mt-md-0">
                <p class="card-text ">Rp.120.000</p>
              </div>
            </div>
            <hr/>
            <div class="row">
              <div class="col">
                <a class="btn btn-custom float-end" href="<?= base_url('user/pesanan') ?>" id="pesanan">Buat Pesanan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Method Payment -->
    <?php } ?>

    <!-- Btn Back -->
    <div class="container mt-3">
      <a class="btn btn-custom shadow w-100 text-center" href="<?= base_url('cart/index') ?>"><i class="fas fa-arrow-left m-3"></i>Back to Cart</a>
    </div>
    <!-- Btn Back -->

  </main>
  <!-- End Main Content -->