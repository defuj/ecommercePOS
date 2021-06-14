    <!-- Main Content -->
    <main>

      <form class="d-inline" method="post" action="">
	      <!-- Address -->
	      <div class="container">
	        <div class="row">
	          <div class="col-md-5">
	            <div class="d-flex justify-content-center align-self-center">
	              <img src="https://github.com/mdo.png" height="300" width="300" class="img-thumbnail shadow rounded-circle img-profile">
	            </div>
	            <div class="d-grid d-md-flex mt-3 justify-content-center">
	              <form class="inline" action="" method="post" enctype="multipart/form-data">
	                <div class="fileUpload btn btn-custom">
	                  <span><i class="fas fa-edit me-2"></i></i>Ganti Foto</span>
	                  <input type="file" class="upload"/>
	                </div>
	              </form>
	            </div>
	          </div>
	          <div class="col-md-7 mt-md-0 mt-5">
	            <div class="card h-100 w-100 shadow border-0">
	              <div class="card-body">
	                <div class="row">
	                  <div class="col-sm-12">
	                    <div class="p-2 bd-highlight bg-light">Data Diri</div>
	                    <div class="row pt-3">
	                      <div class="col-12">
	                        <p class="card-text text-muted mt-3">No Telp</p>
	                        <input class="form-control" type="text" name="no_telp" value="085524569631">
	                      </div>
	                      <div class="col-12">
	                        <p class="card-text text-muted mt-3">Nama</p>
	                        <input class="form-control" type="text" name="nama" value="Cep Imam">
	                      </div>
	                      <div class="col-12">
	                        <p class="card-text text-muted mt-3">Kode Pos</p>
	                       	<input class="form-control" type="text" name="kode_pos" value="45363">
	                      </div>
	                      <div class="col-12">
	                        <p class="card-text text-muted mt-3">Alamat</p>
	                        <textarea class="form-control" rows="3" name="alamat">Dusun. Gunung tanjung RT01 RW08, Desa. Cinangsi, Kec. Cisitu, Kab. Sumedang</textarea>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <!-- End Address -->

	      <!-- Selector -->
	      <div class="container">
	        <div class="card h-100 w-100 shadow mt-3 border-0">
	          <div class="card-body">
	            <div class="row ">
	              <div class="col-sm-6 mb-3 mb-sm-0">
	                <select class="form-select" >
	                  <option selected>Pilih Provinsi</option>
	                  <option value="jawa-barat">Jawa Barat</option>
	                </select>
	              </div>
	              <div class="col-sm-6">
	                <select class="form-select" >
	                  <option selected>Pilih Kota/Kabupaten</option>
	                  <option value="sumedang">Sumedang</option>
	                </select>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <!-- End Selector -->

	      <!-- Btn Submit -->
	      <div class="container mt-3">
	        <button class="btn btn-custom shadow w-100 text-center p-3" type="submit"><i class="fas fa-cloud-download-alt me-2"></i>Simpan</button>
	      </div>
	      <!-- Btn Submit -->

	  </form>

      <!-- Btn Back -->
      <div class="container mt-3">
        <a class="btn btn-custom-2 shadow w-100 text-center p-3" href="<?= base_url('index.php/pages') ?>"><i class="fas fa-arrow-left me-2"></i>Beranda</a>
      </div>
      <!-- Btn Back -->

    </main>
    <!-- End Main Content -->