    <!-- Main Content -->
    <main>
      <!-- Address -->
      <div class="container">
        <span id="alert-ongkir"></span>
      </div>

      <div class="container">
        <div class="card h-100 w-100 shadow border-0">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col">
                <div class="p-2 bd-highlight bg-light">Data Diri</div>
              </div>
            </div>
            <?php if (!$alamat) { ?>
              <p class="text-center mt-3 text-muted">Belum ada alamat yang dipilih. <a class="text-decoration-none" href="<?= base_url('user') ?>">Pilih alamat</a></p>
            <?php } else { ?>
              <div class="row mt-2">
                <div class="col-lg-2 col-md-3">
                  <p class="text-md-end text-muted">Nama Lengkap</p>
                </div>
                <div class="col-lg-10 col-md-9">
                  <p class="name-alamat"><?= $alamat['nama'] ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2 col-md-3">
                  <p class="text-md-end text-muted">No. Telp</p>
                </div>
                <div class="col-lg-10 col-md-9">
                  <p class="no-telp-alamat"><?= $alamat['telepon'] ?></p>
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
            <?php if ($produk) { ?>
              <?php
                if ($produk->tipe_diskon == 'persen') {
                  $harga = ($produk->diskon / 100) * $produk->harga_akhir;
                } elseif ($produk->tipe_diskon == 'nominal') {
                  $harga = $produk->harga_akhir - ($produk->diskon);
                } elseif ($produk->tipe_diskon == 'no_diskon') {
                  $harga = $produk->harga_akhir;
                }
              ?>
              <div class="row">
                <div class="col-md-2 col-sm-12 mt-3">
                  <img src="<?= base_url($direktori->produk_direktori . $produk->nama_file) ?>" class="img-fluid rounded">
                </div>
                <div class="col-md-3 col-sm-12 mt-3">
                  <p class="text-muted text-hidden">Nama Produk</p>
                  <p class="card-text text-hidden"><?= $produk->nama_item ?></p>
                </div>
                <div class="col-md-3 col-sm-12 mt-3">
                  <p class="text-muted text-hidden">Harga</p>
                  <p class="card-text text-hidden">Rp.&nbsp;<?= number_format(($harga), 0, ',', '.') ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-3">
                  <p class="text-muted text-hidden">Jumlah</p>
                  <p class="card-text text-hidden"><?= $qty ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-3">
                  <p class="text-muted text-hidden">Sub Total</p>
                  <p class="card-text text-hidden ">Rp.&nbsp;<?= number_format(($harga * $qty), 0, ',', '.') ?></p>
                </div>
              </div>
            <?php } elseif ($this->cart->contents()) {
              foreach ($this->cart->contents() as $data) { ?>
              <div class="row">
                <div class="col-md-2 col-sm-12 mt-3">
                  <img src="<?= base_url($direktori->produk_direktori . $data['nama_file']) ?>" class="img-fluid rounded">
                </div>
                <div class="col-md-3 col-sm-12 mt-3">
                  <p class="text-muted text-hidden">Nama Produk</p>
                  <p class="card-text text-hidden"><?= $data['name'] ?></p>
                </div>
                <div class="col-md-3 col-sm-12 mt-3">
                  <p class="text-muted text-hidden">Harga</p>
                  <p class="card-text text-hidden">Rp.&nbsp;<?= number_format(($data['price']), 0, ',', '.') ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-3">
                  <p class="text-muted text-hidden">Jumlah</p>
                  <p class="card-text text-hidden"><?= $data['qty'] ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-3">
                  <p class="text-muted text-hidden">Sub Total</p>
                  <p class="card-text text-hidden">Rp.&nbsp;<?= number_format(($data['price'] * $data['qty']), 0, ',', '.') ?></p>
                </div>
              </div>
            <?php }
            } else { ?>
              <div class="row">
                <div class="col">
                  <p class="text-muted text-center mt-3">Tidak ada produk yang ingin dipesan</p>
                </div>
              </div>
            <?php } ?>

            <hr>

            <?php if ($produk) { ?>
              <?php
                if ($produk->tipe_diskon == 'persen') {
                  $harga = ($produk->diskon / 100) * $produk->harga_akhir;
                } elseif ($produk->tipe_diskon == 'nominal') {
                  $harga = $produk->harga_akhir - ($produk->diskon);
                } elseif ($produk->tipe_diskon == 'no_diskon') {
                  $harga = $produk->harga_akhir;
                }
              ?>
              <div class="row justify-content-end">
                <div class="col-md-3 col-sm-12">
                  <p class="text-muted text-hidden">Total Berat</p>
                  <p class="card-text text-hidden"><span id="berat"><?= $produk->berat * $qty ?></span>gram</p>
                </div>
                <div class="col-md-2 col-sm-12 mt-3">
                  <p class="text-muted text-hidden">Total Jumlah</p>
                  <p class="card-text text-hidden"><?= $qty ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-md-0 mt-3">
                  <p class="text-muted text-hidden">Total Harga</p>
                  <p class="card-text text-hidden">Rp.&nbsp;<?= number_format(($harga * $qty), 0, ',', '.') ?></p>
                </div>
              </div>
            <?php } elseif ($this->cart->contents()) { 
              foreach ($this->cart->contents() as $data) { 
                $total_berat = 0;
                $berat = $data['berat'] * $this->cart->total_items();
                $total_berat += $berat;
              } ?>
              <div class="row justify-content-end">
                <div class="col-md-3 col-sm-12">
                  <p class="text-muted text-hidden">Total Berat</p>
                  <p class="card-text text-hidden"><span id="berat"><?= $total_berat ?></span>gram</p>
                </div>
                <div class="col-md-2 col-sm-12 mt-md-0 mt-3">
                  <p class="text-muted text-hidden">Total Jumlah</p>
                  <p class="card-text text-hidden"><?= $this->cart->total_items() ?></p>
                </div>
                <div class="col-md-2 col-sm-12 mt-md-0 mt-3">
                  <p class="text-muted text-hidden">Total Harga</p>
                  <p class="card-text text-hidden">Rp.&nbsp;<?= number_format(($this->cart->total()), 0, ',', '.') ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- List Produk -->

      <?php if (!empty($produk) | !empty($this->cart->contents())) { ?>
        <!-- Voucher -->
        <div class="container">
          <div class="card h-100 w-100 shadow mt-3 border-0">
            <div class="card-body">
              <div class="row ">
                <div class="col-sm-12">
                  <form class="d-flex align-items-center">
                    <label class="d-flex p-2 bd-highlight bg-light">Diskon</label>
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


      <?php if (!empty($produk) | !empty($this->cart->contents())) { ?>
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
              <hr />
              <div class="row justify-content-md-end">
                <div class="col-lg-3 col-md-3 col-6">
                  <p class="text-muted">Subtotal Produk</p>
                </div>
                <?php if ($produk) { ?>
                  <?php
                    if ($produk->tipe_diskon == 'persen') {
                      $harga = ($produk->diskon / 100) * $produk->harga_akhir;
                    } elseif ($produk->tipe_diskon == 'nominal') {
                      $harga = $produk->harga_akhir - ($produk->diskon);
                    } elseif ($produk->tipe_diskon == 'no_diskon') {
                      $harga = $produk->harga_akhir;
                    }
                  ?>
                  <div class="col-lg-3 col-md-4 col-sm-5 text-end col-6 mt-md-0">
                    <p class="card-text">
                      Rp.&nbsp;<?= number_format(($harga * $qty), 0, ',', '.') ?>
                      <span class="visually-hidden" id="sub_total"><?= $harga * $qty ?></span>
                    </p>
                  </div>
                <?php } else { ?>
                  <div class="col-lg-3 col-md-4 col-sm-5 text-end col-6 mt-md-0">
                    <p class="card-text">
                      Rp.&nbsp;<?= number_format(($this->cart->total()), 0, ',', '.') ?>
                      <span class="visually-hidden" id="sub_total"><?= $this->cart->total() ?></span>
                    </p>
                  </div>
                <?php } ?>
              </div>
              <div class="row justify-content-md-end">
                <div class="col-lg-3 col-md-3 col-6">
                  <p class="text-muted">Ongkos Kirim</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 text-end col-6 mt-md-0">
                  <div class="loading-ongkir">
                    <div class="spinner-border text-custom" role="status" style="width: 2rem; height: 2rem;">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                  </div>
                  <p class="card-text" id="ongkir"></p>
                </div>
              </div>
              <div class="row justify-content-md-end">
                <div class="col-lg-3 col-md-3 col-6">
                  <p class="text-muted">Total Pembayaran</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 text-end col-6 mt-md-0">
                  <div class="loading-ongkir">
                    <div class="spinner-border text-custom" role="status" style="width: 2rem; height: 2rem;">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                  </div>
                  <p class="card-text" id="grand_total"></p>
                </div>
              </div>
              <div class="row justify-content-md-end">
                <div class="col-lg-3 col-md-3 col-6">
                  <p class="text-muted">Kurir</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 text-end col-6 mt-md-0">
                  <select class="form-select" id="kurir">
                    <option value="jne">Jalur Nugraha Ekakurir (JNE)</option>
                    <option value="pos">POS Indonesia (POS)</option>
                    <option value="tiki">Citra Van Titipan Kilat (TIKI)</option>
                  </select>
                </div>
              </div>
              <hr />
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
        <a class="btn btn-custom shadow w-100 text-center" href="<?= base_url('cart') ?>"><i class="fas fa-arrow-left m-3"></i>Back to Cart</a>
      </div>
      <!-- Btn Back -->

    </main>

    <script type="text/javascript">
      $(document).ready(function () {

        $('.loading-ongkir').hide();
        
        function loadOngkir() {

          var kurir = $('#kurir').val();
          var berat = $('#berat').html();

          $.ajax({
            url : '<?= base_url('cart/loadOngkir'); ?>',
            type : 'POST',
            data : {weight : berat, kurir : kurir},
            dataType : 'json',
            berforeSend : function () {
              $('.loading-ongkir').show();
            },
            complete : function () {
              $('.loading-ongkir').hide();
            },
            error : function (e) {
              if (e.status == 200) {
                $('#alert-ongkir').html('<div class="alert alert-danger text-center" role="alert">Ongkir tidak ditemukan</div>');
              }
            },
            success : function (e) {
               if (e.rajaongkir.status.code == 400) {
                $('#alert-ongkir').html('<div class="alert alert-danger text-center" role="alert">'+e.rajaongkir.status.description+'</div>');
               } else {
                $('#ongkir').html('');
                var a = e.rajaongkir.results;
                var text = ""
                for (var i = 0; i < a.length; i++) {
                  var b = e.rajaongkir.results[i].costs;
                  $('#ongkir').append('Rp.&nbsp;'+(b[0].cost[0].value/1000).toFixed(3));
                  var ongkirnya = parseInt(b[0].cost[0].value);
                  var sub_total = parseInt($('#sub_total').html());
                  var grand_total = ongkirnya + sub_total;
                  grand_total = (grand_total/1000).toFixed(3);
                  $('#grand_total').html('Rp.&nbsp;'+grand_total);
                  
                }
               }
            }
          })
        }

        $('#kurir').on('change', function () {
          loadOngkir();
        })

        loadOngkir();

      })
    </script>




    

    