    
    <main>
        <div class="container"> 
            <div class="card mt-5 h-100 shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-center align-self-center">
                                <img src="<?= base_url('assets/img/user.png') ?>" height="200" width="200"
                                    class="img-thumbnail rounded-circle img-profile">
                            </div>
                            <div class="d-grid d-md-flex mt-3 justify-content-center">
                                <form class="inline" action="" method="post" enctype="multipart/form-data">
                                    <div class="fileUpload btn btn-custom">
                                        <span>Pilih Gambar</span>
                                        <input type="file" class="upload"/>
                                    </div>
                                    <button class="btn btn-custom-2 push-upload d-none" type="submit"><i class="fas fa-cloud-upload-alt me-2"></i>Upload</button>
                                </form>
                            </div>
                            <div class="accordion mb-lg-0 mt-3 mb-3" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <i class="fas fa-user me-2 mb-1"></i>Akun Saya
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    	<div class="nav flex-column nav-tabs me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active list-group-item border-0" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</a>
                                            <a class="nav-link list-group-item border-0" id="v-pills-alamat-tab" data-bs-toggle="pill" data-bs-target="#v-pills-alamat" type="button" role="tab" aria-controls="v-pills-alamat" aria-selected="false">Alamat</a>
                                            <a class="nav-link list-group-item border-0" id="v-pills-bank-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bank" type="button" role="tab" aria-controls="v-pills-bank" aria-selected="false">Bank Kartu</a>
                                            <a class="nav-link list-group-item border-0" id="v-pills-change-pass-tab" data-bs-toggle="pill" data-bs-target="#v-pills-change-pass" type="button" role="tab" aria-controls="v-pills-change-pass" aria-selected="false">Ubah Password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                        	<div class="tab-content" id="v-pills-tabContent">
							    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" data-href="<?= base_url('user/loadProfile') ?>">
							    	<div class="text-center loading mt-3">
									  <div class="spinner-border text-custom" role="status" style="width: 3rem; height: 3rem;">
									    <span class="visually-hidden">Loading...</span>
									  </div>
									</div>

							    </div>

							    <div class="tab-pane fade" id="v-pills-alamat" role="tabpanel" aria-labelledby="v-pills-alamat-tab" data-href="<?= base_url('user/loadAlamat') ?>">

							    	<div class="text-center loading mt-3">
									  <div class="spinner-border text-custom" role="status" style="width: 3rem; height: 3rem;">
									    <span class="visually-hidden">Loading...</span>
									  </div>
									</div>

							    </div>
							    <div class="tab-pane fade" id="v-pills-bank" role="tabpanel" aria-labelledby="v-pills-bank-tab">
							    	<div class="row">
							    		<div class="col-md-9">
	                                    	<h4 class="mt-3 mb-0">Rekening Bank Saya</h4>
	                                    </div>
	                                    <div class="col-md-3 justify-content-end mt-3">
	                                    	<button type="button" class="btn btn-custom btn-sm float-end"
	                                            data-bs-toggle="modal" data-bs-target="#modal-tambah-rekening">Tambah Rekening<i class="fas fa-plus-circle ms-2"></i>
	                                        </button>
	                                    </div>
	                                </div>
	                                <hr>
	                                <div class="card shadow border-0 w-100">
	                                	<a class="btn-close btn-close-card p-3 rounded-circle bg-white shadow"></a>
	                                    <div class="card-body">
	                                    	<form action="" method="">
		                                        <div class="row">
		                                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
		                                            <div class="col-sm-9">
		                                                <input class="form-control my-2" type="text" name="nama" placeholder="Masukan Nama Lengkap" value="Andi Muhyi Mayapada">
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <label class="col-sm-3 col-form-label">Nomor Rekening</label>
		                                            <div class="col-sm-9">
		                                                <input class="form-control my-2" type="text" name="no-rekening" placeholder="Masukan Nama Lengkap" value="0437827">
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <label class="col-sm-3 col-form-label">Bank</label>
		                                            <div class="col-sm-9">
		                                                <select class="form-select my-2">
							                                <option value="bri">Bank Rakyat Indonesia</option>
							                            </select>
		                                            </div>
		                                        </div>
		                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
				                                	<button class="btn btn-custom shadow text-center p-2" type="submit"><i class="fas fa-cloud-download-alt me-2"></i>Simpan</button>
				                                </div>
				                            </form>
	                                    </div>
	                                </div>
							    </div>
							    <div class="tab-pane fade" id="v-pills-change-pass" role="tabpanel" aria-labelledby="v-pills-change-pass-tab">

							    	<div class=" bd-highlight">
					                    <h4 class="mt-3 mb-3">Atur Password</h4>
					                    <p>Untuk keamanan akun Anda, mohon untuk tidak menyebarkan password Anda ke orang lain.</p>
					                </div>
					                <hr>
					                <form action="<?= base_url('user/changePass') ?>" method="post" id="form-change-pass">
						                <div class="mb-3 row">
						                   	<label class="col-sm-4 col-form-label">Password Lama</label>
						                    <div class="col-sm-8">
						                    	<input type="password" class="form-control" placeholder="Masukan Password lama Anda" name="passwordOld">
						                    	<span id="passwordOld_change_error"></span>
						                    </div>
						                </div>
						                <div class="mb-3 row">
						                    <label class="col-sm-4 col-form-label">Konfirmasi Password Lama</label>
						                    <div class="col-sm-8">
						                      <input type="password" class="form-control" placeholder="Ulang Password" name="confirm_pass1">
						                      <span id="confirm_pass1_change_error"></span>
						                    </div>
						                </div>
						                <div class="mb-3 row">
						                    <label class="col-sm-4 col-form-label ">Password Baru</label>
						                    <div class="col-sm-8">
						                      <input type="password" class="form-control" placeholder="Masukan Password baru anda" name="passwordNew">
						                      <span id="passwordNew_change_error"></span>
						                    </div>
						                </div>
						                <div class="mb-3 row">
						                    <label class="col-sm-4 col-form-label">Konfirmasi Password Baru</label>
						                    <div class="col-sm-8">
						                      <input type="password" class="form-control" placeholder="Ulang Password" name="confirm_pass2">
						                      <span id="confirm_pass2_change_error"></span>
						                    </div>
						                </div>
						                <div class="d-grid d-md-block">
						                	<button class="btn btn-custom float-end" id="btn-loading-change-pass" type="button" disabled>
												<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>Loading
											</button>
							                <button type="submit" class="btn btn-custom float-end" id="btn-change-pass"><i class="fas fa-share me-2"></i>Ubah</button>
						                </div>
						            </form>
							    </div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Email Modal -->
	    <div class="modal fade" id="modal-email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	        <div class="modal-dialog modal-lg">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h4 class="modal-title" id="exampleModalLabel">
	                        Ubah Email
	                    </h4>
	                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                </div>
	                <form action="<?= base_url('user/changeEmail') ?>" method="post" id="form-email" data-href="<?= base_url('user') ?>">
	                	<input type="hidden" name="id">
	                	<input type="hidden" name="emailOld">    
		                <div class="modal-body">
		                    <p>Untuk mengubah email, silahkan masukkan password akun Anda.</p>
		                    <hr> 
		                    <div class="row my-3">
		                        <label class="col-md-4 col-form-label ">Email Baru</label>
		                        <div class="col-md-8">
		                            <input type="text" class="form-control" placeholder="Masukan email baru Anda" value="<?= set_value('email') ?>" name="emailNew">
		                            <span id="email_error"></span>
		                        </div>
		                    </div>
		                    <div class="row my-3">
		                        <label class="col-md-4 col-form-label ">Password</label>
		                        <div class="col-md-8">
		                            <input type="password" class="form-control" name="password" placeholder="Masukan password Anda">
		                            <span id="password_error"></span>
		                        </div>
		                    </div>
		                    <div class="row my-3">
		                        <label class="col-md-4 col-form-label ">Confirm Password</label>
		                        <div class="col-md-8">
		                            <input type="password" class="form-control" name="confirm_pass" placeholder="Ulang password">
		                            <span id="confirm_error"></span>
		                        </div>
		                    </div>
		                </div>
		                <div class="modal-footer">
		                	<button class="btn btn-custom" id="btn-loading-email" type="button" disabled>
							  <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
							  Loading
							</button>
		                    <button type="submit" class="btn btn-custom" id="btn-email"><i class="fas fa-cloud-download-alt me-2"></i>Simpan</button>
		                </div>
		            </form>
	            </div>
	        </div>
	    </div>
	    

	    <!-- Tambah Alamat  -->
	    <div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	        <div class="modal-dialog modal-lg">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="modal-title" id="exampleModalLabel">
	                        Tambah Alamat
	                    </h5>
	                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                </div>
	                <form class="row g-3" action="<?= base_url('user/addAlamat') ?>" method="post" id="form-add-alamat">
		                <div class="modal-body">
		                	<div class="row g-3">
		                        <div class="col-lg-3">
		                            <label class="form-label">Provinsi</label>
		                            <select class="form-select" name="provinsi" id="add-provinsi">
		                                <option value="">...</option>
		                                <option value="Jawa Barat">Jawa Barat</option>
		                                <option value="Jawa Timur">Jawa Timur</option>
		                            </select>
		                            <span id="provinsi_add_alamat_error"></span>
		                        </div>
		                        <div class="col-lg-3">
		                            <label class="form-label">Kota/Kabupaten</label>
		                            <select class="form-select" name="kota" id="add-kota">
		                                <option value="">...</option>
		                                <option value="Sumedang">Sumedang</option>
		                                <option value="Bandung">Bandung</option>
		                            </select>
		                            <span id="kota_add_alamat_error"></span>
		                        </div>
		                        <div class="col-lg-3">
		                            <label class="form-label">Kecamatan</label>
		                            <input class="form-control" type="text" name="kecamatan" id="add-kecamatan" placeholder="...">
		                            <span id="kecamatan_add_alamat_error"></span>
		                        </div>
		                        <div class="col-lg-3">
		                            <label class="form-label">Desa</label>
		                            <input class="form-control" type="text" name="desa" id="add-desa" placeholder="...">
		                            <span id="desa_add_alamat_error"></span>
		                        </div>
		                        <div class="col-md-12">
		                            <label class="form-label">Alamat Lengkap</label>
		                            <textarea name="alamat" id="add-alamat" class="form-control" placeholder="Nama Jalan, Blok, No.Rumah, Gedung"></textarea>
		                            <span id="alamat_add_alamat_error"></span>
		                        </div>
		                        <div class="col-md-12">
		                            <label class="form-label">Kode Pos</label>
		                            <input type="text" class="form-control" name="kode-pos" id="add-kode-pos" placeholder="Masukan Kode Pos">
		                            <span id="kode_pos_add_alamat_error"></span>
		                        </div>
		                    </div>
		                </div>
		                <div class="modal-footer">
		                	<button class="btn btn-custom" id="btn-loading-add-alamat" type="button" disabled>
								  <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
								  Loading
							</button>
		                    <button type="submit" class="btn btn-custom" id="btn-add-alamat"><i class="fas fa-share me-2"></i>Kirim</button>
		                </div>
		            </form>
	            </div>
	        </div>
	    </div>


	    <!-- Ubah Alamat  -->
	    <div class="modal fade" id="modal-ubah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	        <div class="modal-dialog modal-lg">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="modal-title" id="exampleModalLabel">
	                        Ubah Alamat
	                    </h5>
	                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                </div>
	                <form action="<?= base_url('user/updateAlamat') ?>" method="pos" id="form-update-alamat">
	                	<input type="hidden" name="id">
	                	<div class="modal-body">
	                		<div class="row g-3">
		                        <div class="col-lg-3">
		                            <label class="form-label">Provinsi</label>
		                            <select class="form-select" name="provinsi">
		                                <option value="">...</option>
		                                <option value="Jawa Barat">Jawa Barat</option>
		                                <option value="Jawa Timur">Jawa Timur</option>
		                            </select>
		                            <span id="provinsi_update_alamat_error"></span>
		                        </div>
		                        <div class="col-lg-3">
		                            <label class="form-label">Kota/Kabupaten</label>
		                            <select class="form-select" name="kota">
		                                <option value="">...</option>
		                                <option value="Sumedang">Sumedang</option>
		                                <option value="Bandung">Bandung</option>
		                            </select>
		                            <span id="kota_update_alamat_error"></span>
		                        </div>
		                        <div class="col-lg-3">
		                            <label class="form-label">Kecamatan</label>
		                            <input class="form-control" type="text" name="kecamatan" placeholder="...">
		                            <span id="kecamatan_update_alamat_error"></span>
		                        </div>
		                        <div class="col-lg-3">
		                            <label class="form-label">Desa</label>
		                            <input class="form-control" type="text" name="desa" placeholder="...">
		                            <span id="desa_update_alamat_error"></span>
		                        </div>
		                        <div class="col-md-12">
		                            <label class="form-label">Alamat Lengkap</label>
		                            <textarea class="form-control" placeholder="Nama Jalan, Blok, No.Rumah, Gedung" name="alamat"><?= set_value('alamat') ?></textarea>
		                            <span id="alamat_update_alamat_error"></span>
		                        </div>
		                        <div class="col-md-12">
		                            <label for="inputZip" class="form-label">Kode Pos</label>
		                            <input type="text" class="form-control" name="kode_pos" placeholder="Masukan Kode Pos">
		                            <span id="kode_pos_update_alamat_error"></span>
		                        </div>
		                    </div>
	                	</div>
		                <div class="modal-footer">
		                	<button class="btn btn-custom" id="btn-loading-update-alamat" type="button" disabled>
								  <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
								  Loading
							</button>
		                    <button type="submit" class="btn btn-custom" id="btn-update-alamat"><i class="fas fa-cloud-download-alt me-2"></i>Simpan</button>
		                </div>
		            </form>
	            </div>
	        </div>
	    </div>


	    <!-- Rekening Bank  -->
	    <div class="modal fade" id="modal-tambah-rekening" tabindex="-1" aria-labelledby="exampleModalLabel"
	        aria-hidden="true">
	        <div class="modal-dialog modal-md">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="modal-title" id="exampleModalLabel">
	                        Tambah Rekening Bank
	                    </h5>
	                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                </div>
	                <div class="modal-body">
	                    <form class="row g-3">
	                        <div class="col-md-12">
	                            <label class="form-label">Nama Lengkap </label>
	                            <input type="text" class="form-control" placeholder="Nama harus sama dengan rekening bank">
	                        </div>
	                        <div class="col-md-12">
	                            <label class="form-label">Nomor Rekeninng</label>
	                            <input type="text" class="form-control">
	                        </div>
	                        <div class="col-md-12">
	                            <label class="form-label">Bank</label>
	                            <select class="form-select">
	                                <option></option>
	                                <option value="bri">Bank Rakyat Indonesia</option>
	                            </select>
	                        </div>
	                    </form>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-custom">Simpan</button>
	                </div>
	            </div>
	        </div>
	    </div>

	    <!-- Btn Back -->
	    <div class="container mt-3">
	      <a class="btn btn-custom shadow w-100 text-center p-3" href="<?= base_url('index.php/pages') ?>"><i class="fas fa-arrow-left me-2"></i>Beranda</a>
	    </div>
	    <!-- Btn Back -->
	</main>