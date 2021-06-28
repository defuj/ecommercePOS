      
      <?php if ($this->cart->total_items() == 0) { ?>

        <!-- Produk Lain -->
        <div class="container">
          <div class="card shadow mt-4 border-white">
            <div class="card-body">
              <div class="d-flex bd-highlight">
                <div class="me-auto p-2 bd-highlight my-2"><h4>Produk Lain</h4></div>
                <div class="p-2 bd-highlight"><a href="<?= base_url('pages/index/#produk') ?>" class="text-decoration-none">Lihat Semua</a></div>
              </div>
              <!-- Slider -->
              <div id="slider" class="owl-carousel slide-show owl-theme owl-loaded mt-5">
                <div class="owl-stage-outer">
                  <div class="owl-stage">

                    <?php foreach ($produkLimit as $data) { ?>
                    <div class="owl-item">
                      <div class="card <?= ($data->status_jual == 0) ? 'border border-danger' : ''; ?>">
                        <a href="<?= base_url('pages/detail/'.$data->slug) ?>">
                          <img src="<?= base_url('assets/img/'.$data->nama_file) ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                          <h6 class="card-subtitle mb-2 text-hidden"><a href="<?= base_url('pages/detail/'.$data->slug) ?>" class="text-muted text-decoration-none"><?= $data->nama_item ?></a></h6>
                          <?php if ($data->tipe_diskon == 'persen') { ?>
                          <h5 class="card-title">Rp.&nbsp;<?= number_format((($data->diskon/100)*$data->harga_akhir), 0,',','.') ?>
                            <span class="badge rounded-pill bg-danger"><?= $data->diskon ?>%</span>
                          </h5>
                          <?php } elseif ($data->tipe_diskon == 'nominal') { ?>
                          <h5 class="card-title">Rp.&nbsp;<?= number_format(($data->harga_akhir-($data->diskon)), 0,',','.') ?>
                          </h5>
                          <?php } elseif ($data->tipe_diskon == 'no_diskon') { ?>
                            <h5 class="card-title">Rp.&nbsp;<?= number_format(($data->harga_akhir), 0,',','.') ?></h5>
                          <?php } ?>
                          <?php if ($data->status_jual == 0) { ?>
                            <span class="text-danger fw-bold"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                          <?php } else { ?>
                            <span class="text-success fw-bold"><i class="fas fa-check-circle me-1"></i>Stok Tersedia</span>
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
      <?php } ?>

      <?php foreach ($this->cart->contents() as $data) { ?>
        <div class="container mt-5">
          <div class="card shadow border-white">
            <div class="card-body">
              <div class="row g-2">
                <div class="col-lg-6">
                  <div class="product-image me-lg-3 me-0">
                    <a href="<?= base_url('pages/detail/'.$data['slug']) ?>">
                      <img src="<?= base_url('assets/img/'.$data['nama_file']) ?>" class="img-fluid rounded w-100 thumb">
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 ms-none">
                  <?php if ($data['status_jual'] == 0) { ?>
                    <span class="text-danger fw-bold d-inline d-sm-none"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                  <?php } else { ?>
                    <span class="text-success fw-bold d-inline d-sm-none"><i class="fas fa-check-circle me-1"></i>Stok Tersedia</span>
                  <?php } ?>
                  <div class="d-flex flex-column bd-highlight product-box">
                    <h3 class="card-title mt-3 mb-2 mt-lg-0 text-hidden">
                      <a href="<?= base_url('pages/detail/'.$data['slug']) ?>" class="text-decoration-none text-dark"><?= $data['name']; ?></a>
                      <a class="float-end btn-close remove-cart" href="<?= base_url('cart/remove') ?>" data-id="<?= $data['rowid']; ?>"></a>
                    </h3>
                    <?php if ($data['tipe_diskon'] == 'persen') { ?>
                    <h4 class="text-hidden">Rp.&nbsp;<?= number_format((($data['diskon']/100)*$data['price']), 0,',','.') ?>
                      <span class="badge rounded-pill bg-danger"><?= $data['diskon'] ?>%</span>
                      <sub><s>Rp.&nbsp;<?= number_format(($data['price']), 0,',','.') ?></s></sub>
                    </h4>
                    <?php } elseif ($data['tipe_diskon'] == 'nominal') { ?>
                    <h4 class="text-hidden">Rp.&nbsp;<?= number_format(($data['price']-($data['diskon'])), 0,',','.') ?>
                      <sub><s>Rp.&nbsp;<?= number_format(($data['price']), 0,',','.') ?></s></sub>
                    </h4>
                    <?php } elseif ($data['tipe_diskon'] == 'no_diskon') { ?>
                      <h4 class="text-hidden">Rp.&nbsp;<?= number_format(($data['price']), 0,',','.') ?></h5>  
                    <?php } ?>
                    <div class="bd-highlight">
                      <span class="text-warning me-1">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                      <?php if ($data['status_jual'] == 0) { ?>
                        <span class="text-danger ms-2 fw-bold d-none d-sm-inline"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</span>
                      <?php } else { ?>
                        <span class="text-success ms-2 fw-bold d-none d-sm-inline"><i class="fas fa-check-circle me-1"></i>Stok Tersedia</span>
                      <?php } ?>
                    </div>
                    <hr/>
                    <p class="card-text"><?= $data['ket'] ?></p>
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
                      <input type="text" class="form-number" data-id="<?= $data['rowid'] ?>" data-stok="99" data-kode="<?= $data['id'] ?>" data-href="<?= base_url('cart/changeCost') ?>" value="<?= $data['qty'] ?>"/>
                      <button class="btn btn-sm btn-custom plus">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php  }?>

      <script type="text/javascript">
          $(document).ready(function () {

            function loadCost() {
              const href = $('.cart-cost').data('href');

              $.get(href, function (data) {
                $('.cart-cost').html(data);
              })
            }

            // Load Price Cart
            function loadPrice() {

              const href = $('.cart-price').data('href');

              $.get(href, function (data) {
                $('.cart-price').html(data);
              })

            }

            function loadItems() {

              const href = $('#cart-items').data('href');

              $.ajax({
                url: href,
                type: 'get',
                dataType: 'html',
                berforeSend:function () {
                  $('.loading').show();
                },
                complete:function () {
                  $('.loading').hide();
                },
                success:function (data) {
                  $('#cart-items').html(data);
                }
              })
              
            }

            $('.remove-cart').click(function (e) {
              e.preventDefault();

              Swal.fire({
                title: 'Apakah Kamu Yakin?',
                text: "Ingin menghapus produk ini dari keranjang anda?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#06207e',
                cancelButtonColor: '#dc0000',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Tidak'
              }).then((result) => {
                if (result.isConfirmed) {

                  const href = $(this).attr('href');
                  const cartId = $(this).data('id');

                  $.ajax({
                    url: href,
                    type: 'post',
                    data: {id: cartId}, 
                    dataType: 'html',
                    success:function (data) {
                      loadCost();
                      loadItems();
                      loadPrice();
                    }
                  })

                  Swal.fire({
                    icon: 'success',
                    title: 'Berhasil Dihapus',
                    showConfirmButton: false,
                    timer: 1500
                  })
                }
              }) 
            })
          })
      </script>
      <!-- Number Js -->
      <script type="text/javascript" src="<?= base_url('assets/js/number-script.js'); ?>"></script>
      <!-- Owl Carousel Js -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
      <!-- My Js -->
      <script type="text/javascript" src="<?= base_url('assets/js/script.js'); ?>"></script>