  <!-- Main Content -->
  <main>
  	<div class="container">
	    <div class="card shadow border-white mt-4 mb-4">
	      <div class="card-body">
	        <nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			    <button class="nav-link text-dark active" id="nav-semua-tab" data-bs-toggle="tab" data-bs-target="#nav-semua" type="button" role="tab" aria-controls="nav-semua" aria-selected="true">Semua</button>
			    <button class="nav-link text-dark" id="nav-dikemas-tab" data-bs-toggle="tab" data-bs-target="#nav-dikemas" type="button" role="tab" aria-controls="nav-dikemas" aria-selected="false">Dikemas</button>
			    <button class="nav-link text-dark" id="nav-dikirim-tab" data-bs-toggle="tab" data-bs-target="#nav-dikirim" type="button" role="tab" aria-controls="nav-dikirim" aria-selected="false">Dikirim</button>
			    <button class="nav-link text-dark" id="nav-selesai-tab" data-bs-toggle="tab" data-bs-target="#nav-selesai" type="button" role="tab" aria-controls="nav-selesai" aria-selected="false">Selesai</button>
			    <button class="nav-link text-dark" id="nav-dibatalkan-tab" data-bs-toggle="tab" data-bs-target="#nav-dibatalkan" type="button" role="tab" aria-controls="nav-dibatalkan" aria-selected="false">Dibatalkan</button>
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">

			  <!-- Status Semua -->
			  <div class="tab-pane fade show active" id="nav-semua" role="tabpanel" aria-labelledby="nav-semua-tab">
			  	<div class="row mt-3">
	              <div class="col-md-2 col-sm-12 mt-3">
	                <img src="<?= base_url('assets/img/card-2.jpg') ?>" class="img-fluid rounded">
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Nama Produk</p>
	                <h6 class="card-subtitle nama-produk">Headset</h6>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Harga</p>
	                <p class="card-text">Rp. 483400</p>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Status</p>
	                <p class="card-text"><span class="badge bg-primary">Selesai</span></p>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Jumlah</p>
	                <p class="card-text ">2</p>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Sub Total</p>
	                <p class="card-text ">Rp. 57400</p>
	              </div>
	            </div>
	            <hr>
		        <div class="row justify-content-end">
		          <div class="col-md-2 col-sm-12">
		            <p class="text-muted">Total Jumlah</p>
		            <p class="card-text ">2</p>
		          </div>
		          <div class="col-md-2 col-sm-12 mt-md-0 mt-3">
		            <p class="text-muted">Total Harga</p>
		            <p class="card-text ">Rp. 57400</p>
		          </div>
		        </div>
		        <hr>
		        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a class="btn btn-custom me-md-2" href="<?= base_url('index.php/user/rincian') ?>">Rincian Pesanan</a>
                  <a class="btn btn-custom-2 hapus-invoice" href="">Hapus Invoice</a>
                </div>
                <hr>
			  </div>
			  <!-- End Status Semua -->

			  <!-- Status Dikemas -->
			  <div class="tab-pane fade" id="nav-dikemas" role="tabpanel" aria-labelledby="nav-dikemas-tab">
			  	<div class="row mt-3">
	              <div class="col-md-2 col-sm-12 mt-3">
	                <img src="<?= base_url('assets/img/card-2.jpg') ?>" class="img-fluid rounded">
	              </div>
	              <div class="col-md-3 col-sm-12 mt-3">
	                <p class="text-muted">Nama Produk</p>
	                <h6 class="card-subtitle nama-produk">Headset</h6>
	              </div>
	              <div class="col-md-3 col-sm-12 mt-3">
	                <p class="text-muted">Harga</p>
	                <p class="card-text">Rp. 483400</p>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Jumlah</p>
	                <p class="card-text ">2</p>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Sub Total</p>
	                <p class="card-text ">Rp. 57400</p>
	              </div>
	            </div>
	            <hr>
		        <div class="row justify-content-end">
		          <div class="col-md-2 col-sm-12">
		            <p class="text-muted">Total Jumlah</p>
		            <p class="card-text ">2</p>
		          </div>
		          <div class="col-md-2 col-sm-12 mt-md-0 mt-3">
		            <p class="text-muted">Total Harga</p>
		            <p class="card-text ">Rp. 57400</p>
		          </div>
		        </div>
		        <hr>
		        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a class="btn btn-custom me-md-2" href="<?= base_url('index.php/user/rincian') ?>">Rincian Pesanan</a>
                  <a class="btn btn-custom-2" id="batalkan" href="">Batalkan</a>
                </div>
                <hr>
			  </div>
			  <!-- End Status Dikemas -->

			  <!-- Status Dikirim -->
			  <div class="tab-pane fade" id="nav-dikirim" role="tabpanel" aria-labelledby="nav-dikirim-tab">
			  	<div class="row mt-3">
	              <div class="col-md-2 col-sm-12 mt-3">
	                <img src="<?= base_url('assets/img/card-2.jpg') ?>" class="img-fluid rounded">
	              </div>
	              <div class="col-md-3 col-sm-12 mt-3">
	                <p class="text-muted">Nama Produk</p>
	                <h6 class="card-subtitle nama-produk">Headset</h6>
	              </div>
	              <div class="col-md-3 col-sm-12 mt-3">
	                <p class="text-muted">Harga</p>
	                <p class="card-text">Rp. 483400</p>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Jumlah</p>
	                <p class="card-text ">2</p>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Sub Total</p>
	                <p class="card-text ">Rp. 57400</p>
	              </div>
	            </div>
	            <hr>
		        <div class="row justify-content-end">
		          <div class="col-md-2 col-sm-12">
		            <p class="text-muted">Total Jumlah</p>
		            <p class="card-text ">2</p>
		          </div>
		          <div class="col-md-2 col-sm-12 mt-md-0 mt-3">
		            <p class="text-muted">Total Harga</p>
		            <p class="card-text ">Rp. 57400</p>
		          </div>
		        </div>
		        <hr>
		        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a class="btn btn-custom me-md-2" href="<?= base_url('index.php/user/rincian') ?>">Rincian Pesanan</a>
                </div>
                <hr>
			  </div>
			  <!-- End Status Dikirim -->

			  <!-- Status Selesai -->
			  <div class="tab-pane fade" id="nav-selesai" role="tabpanel" aria-labelledby="nav-selesai-tab">
			  	<div class="row mt-3">
	              <div class="col-md-2 col-sm-12 mt-3">
	                <img src="<?= base_url('assets/img/card-2.jpg') ?>" class="img-fluid rounded">
	              </div>
	              <div class="col-md-3 col-sm-12 mt-3">
	                <p class="text-muted">Nama Produk</p>
	                <h6 class="card-subtitle nama-produk">Headset</h6>
	              </div>
	              <div class="col-md-3 col-sm-12 mt-3">
	                <p class="text-muted">Harga</p>
	                <p class="card-text">Rp. 483400</p>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Jumlah</p>
	                <p class="card-text ">2</p>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Sub Total</p>
	                <p class="card-text ">Rp. 57400</p>
	              </div>
	            </div>
	            <hr>
		        <div class="row justify-content-end">
		          <div class="col-md-2 col-sm-12">
		            <p class="text-muted">Total Jumlah</p>
		            <p class="card-text ">2</p>
		          </div>
		          <div class="col-md-2 col-sm-12 mt-md-0 mt-3">
		            <p class="text-muted">Total Harga</p>
		            <p class="card-text ">Rp. 57400</p>
		          </div>
		        </div>
		        <hr>
		        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a class="btn btn-custom me-md-2" href="<?= base_url('index.php/user/rincian') ?>">Rincian Pesanan</a>
                  <a class="btn btn-custom-2 hapus-invoice" href="">Hapus Invoice</a>
                </div>
                <hr>
			  </div>
			  <!-- End Status Selesai -->

			  <!-- Status Dibatalkan -->
			  <div class="tab-pane fade" id="nav-dibatalkan" role="tabpanel" aria-labelledby="nav-dibatalkan-tab">
			  	<div class="row mt-3">
	              <div class="col-md-2 col-sm-12 mt-3">
	                <img src="<?= base_url('assets/img/card-2.jpg') ?>" class="img-fluid rounded">
	              </div>
	              <div class="col-md-3 col-sm-12 mt-3">
	                <p class="text-muted">Nama Produk</p>
	                <h6 class="card-subtitle nama-produk">Headset</h6>
	              </div>
	              <div class="col-md-3 col-sm-12 mt-3">
	                <p class="text-muted">Harga</p>
	                <p class="card-text">Rp. 483400</p>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Jumlah</p>
	                <p class="card-text ">2</p>
	              </div>
	              <div class="col-md-2 col-sm-12 mt-3">
	                <p class="text-muted">Sub Total</p>
	                <p class="card-text ">Rp. 57400</p>
	              </div>
	            </div>
	            <hr>
		        <div class="row justify-content-end">
		          <div class="col-md-2 col-sm-12">
		            <p class="text-muted">Total Jumlah</p>
		            <p class="card-text ">2</p>
		          </div>
		          <div class="col-md-2 col-sm-12 mt-md-0 mt-3">
		            <p class="text-muted">Total Harga</p>
		            <p class="card-text ">Rp. 57400</p>
		          </div>
		        </div>
		        <hr>
		        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a class="btn btn-custom me-md-2" href="<?= base_url('index.php/user/rincian') ?>">Rincian Pesanan</a>
                  <a class="btn btn-custom-2 hapus-invoice" href="">Hapus Invoice</a>
                </div>
                <hr>
			  </div>
			  <!-- End Status Dibatalkan -->
			</div>
	        
	      </div>
	    </div>
	</div>

	<!-- Btn Back -->
    <div class="container mt-3">
      <a class="btn btn-custom shadow w-100 text-center" href="<?= base_url('index.php/pages') ?>"><i class="fas fa-arrow-left m-3"></i>Beranda</a>
    </div>
    <!-- Btn Back -->
    
  </main>
  <!-- End Main Content -->