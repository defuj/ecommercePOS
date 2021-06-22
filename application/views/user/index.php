    
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                        	<div class="tab-content" id="v-pills-tabContent">
							    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							    	<div class="bd-highlight">
	                                    <h4 class="mt-3">Profile Saya</h4>
	                                    <p class="mt-3">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan
	                                    akun
	                                    </p>
	                                </div>
	                                <hr>
	                                <form action="<?= base_url('user') ?>" method="post">	
	                                	<?= $this->session->flashdata('message') ?> 
	                                	<input type="hidden" name="id" value="<?= $user['id'] ?>">   
		                                <div class="mb-3 row">
		                                    <label class="col-sm-3 col-form-label">Username</label>
		                                    <div class="col-sm-9">
											  <input type="text" class="form-control" placeholder="Username" value="<?= ($user['username']) ? $user['username'] : set_value('username') ?>" name="username">
											  <?= form_error('username', '<small class="text-danger">', '</small>') ?>
		                                    </div>
		                                </div>
		                                <div class="mb-3 row">
		                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
		                                    <div class="col-sm-9">
		                                        <input type="text" class="form-control" value="<?= ($user['name']) ? $user['name'] : set_value('name') ?>" placeholder="Masukan Nama Lengkap Anda" name="name">
		                                        <?= form_error('name', '<small class="text-danger">', '</small>') ?>
		                                    </div>
		                                </div>
		                                <div class="mb-3 row">
		                                    <label class="col-sm-3 col-form-label ">Email</label>
		                                    <div class="col-sm-9">
												<div class="input-group mb-3">
												  <input type="text" class="form-control" placeholder="Email" value="<?= $user['email'] ?>" readonly>
												  <button class="btn btn-outline-custom" type="button" id="button-addon2" data-bs-toggle="modal" data-bs-target="#modal-email"><i class="fas fa-user-edit "></i></button>
												</div>
		                                    </div>
		                                </div>
		                                <div class="mb-3 row">
		                                    <label class="col-sm-3 col-form-label">No. Telp</label>
		                                    <div class="col-sm-9">
		                                        <input type="text" class="form-control" value="<?= ($user['no_telp']) ? $user['no_telp'] : set_value('no_telp') ?>" placeholder="Masukan No. Telp Anda" name="no_telp">
		                                        <?= form_error('no_telp', '<small class="text-danger">', '</small>') ?>
		                                    </div>
		                                </div>
		                                <div class="mb-3 row">
		                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
		                                    <div class="col-sm-9 mt-2">
		                                        <div class="form-check  form-check-inline">
		                                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
		                                            <label class="form-check-label">Laki - laki</label>
		                                        </div>
		                                        <div class="form-check  form-check-inline">
		                                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
		                                            <label class="form-check-label">Perempuan</label>
		                                        </div>
		                                        <div class="form-check  form-check-inline">
		                                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="lainnya">
		                                            <label class="form-check-label">Lainnya</label>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="mb-3 row">
		                                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
		                                    <div class="col-sm-9">
		                                        <input type="date" class="form-control" value="<?= ($user['tgl_lahir']) ? $user['tgl_lahir'] : set_value('tgl_lahir') ?>" name="tgl_lahir">
		                                    </div>
		                                </div>
		                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
		                                	<button class="btn btn-custom shadow text-center p-2" type="submit"><i class="fas fa-cloud-download-alt me-2"></i>Simpan</button>
		                                </div>
		                            </form>
							    </div>

							    <div class="tab-pane fade" id="v-pills-alamat" role="tabpanel" aria-labelledby="v-pills-alamat-tab">
							    	<div class=" bd-highlight">
	                                    <h4 class="mt-3 mb-0">Alamat Saya
	                                        <button type="button" class="btn btn-custom btn-sm float-end"
                                            data-bs-toggle="modal" data-bs-target="#modal-tambah">Tambah Alamat<i class="fas fa-plus-circle ms-2"></i>
                                        </button>
	                                    </h4>
	                                    <hr>
	                                </div>
	                                <div class="card border-0 shadow position-relative">
					                    <a class="btn-close btn-close-card p-3 rounded-circle bg-white shadow"></a>
	                                	<div class="card-body">
	                                		<form class="row g-3">
						                        <div class="col-md-6">
						                            <label class="form-label">Nama</label>
						                            <input type="text" class="form-control" placeholder="Masukan Nama" value="Cep Imam">
						                        </div>
						                        <div class="col-md-6">
						                            <label class="form-label">No. Telp</label>
						                            <input type="text" class="form-control" placeholder="Masukan No. Telp" value="085524569631">
						                        </div>
						                        <div class="col-lg-3">
						                            <label for="inputAddress" class="form-label">Provinsi</label>
						                            <select class="form-select">
						                                <option value="jawa-barat">Jawa Barat</option>
						                            </select>
						                        </div>
						                        <div class="col-lg-3">
						                            <label for="inputAddress" class="form-label">Kota/Kabupaten</label>
						                            <select class="form-select">
						                                <option value="sumedang">Sumedang</option>
						                            </select>
						                        </div>
						                        <div class="col-lg-3">
						                            <label for="inputAddress" class="form-label">Kecamatan</label>
						                            <input class="form-control" type="text" name="kecamatan" placeholder="..." value="Darmaraja">
						                        </div>
						                        <div class="col-lg-3">
						                            <label for="inputAddress" class="form-label">Desa</label>
						                            <input class="form-control" type="text" name="desa" placeholder="..." value="Cikeusi">
						                        </div>
						                        <div class="col-md-12">
						                            <label for="inputAddress" class="form-label">Alamat Lengkap</label>
						                            <textarea name="alamat" class="form-control" placeholder="Nama Jalan, Blok, No.Rumah, Gedung" rows="5">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</textarea>
						                        </div>
						                        <div class="col-md-12">
						                            <label for="inputZip" class="form-label">Kode Pos</label>
						                            <input type="text" class="form-control" placeholder="Masukan Kode Pos" value="45363">
						                        </div>
						                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
				                                	<button class="btn btn-custom shadow text-center p-2" type="submit"><i class="fas fa-cloud-download-alt me-2"></i>Simpan</button>
				                                </div>
						                    </form>
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
	                <form action="<?= base_url('user/changeEmail') ?>" method="post">
		                <div class="modal-body">
		                    <p>Untuk mengubah email, silahkan masukkan password akun Anda.</p>
		                    <hr>
		                    <div class="row my-3">
		                        <label class="col-md-4 col-form-label ">Email Baru</label>
		                        <div class="col-md-8">
		                            <input type="text" class="form-control" placeholder="Masukan Email baru Anda" value="<?= set_value('email') ?>" name="email">
		                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
		                        </div>
		                    </div>
		                    <div class="row my-3">
		                        <label class="col-md-4 col-form-label ">Password</label>
		                        <div class="col-md-8">
		                            <input type="password" class="form-control" name="password">
		                            <?= form_error('password', '<small class="text-danger">', '</small>') ?>
		                        </div>
		                    </div>
		                    <div class="row my-3">
		                        <label class="col-md-4 col-form-label ">Confirm Password</label>
		                        <div class="col-md-8">
		                            <input type="password" class="form-control" name="confirm_pass">
		                            <?= form_error('confirm_pass', '<small class="text-danger">', '</small>') ?>
		                        </div>
		                    </div>
		                </div>
		                <div class="modal-footer">
		                    <button type="submit" class="btn btn-custom">Simpan</button>
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
	                <div class="modal-body">
	                    <form class="row g-3">
	                        <div class="col-md-6">
	                            <label class="form-label">Nama</label>
	                            <input type="text" class="form-control" placeholder="Masukan Nama">
	                        </div>
	                        <div class="col-md-6">
	                            <label class="form-label">No. Telp</label>
	                            <input type="text" class="form-control" placeholder="Masukan No. Telp">
	                        </div>
	                        <div class="col-lg-3">
	                            <label for="inputAddress" class="form-label">Provinsi</label>
	                            <select class="form-select">
	                                <option>...</option>
	                                <option value="jawa-barat">Jawa Barat</option>
	                            </select>
	                        </div>
	                        <div class="col-lg-3">
	                            <label for="inputAddress" class="form-label">Kota/Kabupaten</label>
	                            <select class="form-select">
	                                <option>...</option>
	                                <option value="jawa-barat">Jawa Barat</option>
	                            </select>
	                        </div>
	                        <div class="col-lg-3">
	                            <label for="inputAddress" class="form-label">Kecamatan</label>
	                            <input class="form-control" type="text" name="kecamatan" placeholder="...">
	                        </div>
	                        <div class="col-lg-3">
	                            <label for="inputAddress" class="form-label">Desa</label>
	                            <input class="form-control" type="text" name="desa" placeholder="...">
	                        </div>
	                        <div class="col-md-12">
	                            <label for="inputAddress" class="form-label">Alamat Lengkap</label>
	                            <textarea name="" id="" class="form-control"
	                                placeholder="Nama Jalan, Blok, No.Rumah, Gedung"></textarea>
	                        </div>
	                        <div class="col-md-12">
	                            <label for="inputZip" class="form-label">Kode Pos</label>
	                            <input type="text" class="form-control" placeholder="Masukan Kode Pos">
	                        </div>
	                    </form>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-custom">Simpan</button>
	                </div>
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
	                            <label for="inputAddress" class="form-label">Bank</label>
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