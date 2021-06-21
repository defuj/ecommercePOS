      <!-- Main Content -->
      <main id="cart-items" data-href="<?= base_url('cart/loadItems') ?>">
        
      </main>
      <!-- End Main Content -->

      <!-- CheckOut -->
      <div class="container">
        <div class="card shadow border-white mt-4 mb-4">
          <div class="card-body">
            <div class="row justify-content-md-end">
              <div class="col-md-3 col-sm-12 mt-3">
                <a class="btn btn-custom-2 btn-sm" id="destroy-all-cart" href="<?= base_url('cart/destroy') ?>"><i class="fas fa-trash me-2"></i>Hapus Semua</a>
              </div>
              <div class="col-md-3 col-sm-12 mt-3">
                <p class="card-text">Total Jumlah</p>
                <h2 class="text-custom fw-bold"><span class="cart-cost" data-href="<?= base_url('cart/loadCost') ?>"><?= $this->cart->total_items() ?></span></h2>
              </div>
              <div class="col-md-3 col-sm-12 mt-3">
                <p class="card-text">Total Harga</p>
                <h2 class="text-custom fw-bold">Rp.&nbsp;<span class="cart-price" data-href="<?= base_url('cart/loadPrice') ?>"><?= number_format(($this->cart->total()), 0,',','.') ?></span></h2>
              </div>
              <div class="col-md-3 col-sm-12 mt-3">
                <a class="btn btn-custom btn-lg w-100" href="<?= base_url('cart/checkout') ?>">Checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Checkout -->

      <!-- Btn Back -->
      <div class="container mt-3">
        <a class="btn btn-custom shadow w-100 text-center" href="<?= base_url('pages') ?>"><i class="fas fa-arrow-left m-3"></i>Kembali</a>
      </div>
      <!-- Btn Back -->