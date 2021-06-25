
		    	<div class="bd-highlight">
                    <h4 class="mt-3">Profile Saya</h4>
                    <p class="mt-3">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan
                    akun
                    </p>
                </div>
                <hr>
                <form action="<?= base_url('user/updateProfile') ?>" method="post" id="form-profile">	
                	<span id="message-profile"></span> 
                	<input type="hidden" name="id" value="<?= $user['id'] ?>">   
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
						  <input type="text" class="form-control" placeholder="Username" value="<?= ($user['username']) ? $user['username'] : set_value('username') ?>" name="username">
						  <span id="username_error"></span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= ($user['name']) ? $user['name'] : set_value('name') ?>" placeholder="Masukan Nama Lengkap Anda" name="name">
                            <span id="name_error"></span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label ">Email</label>
                        <div class="col-sm-9">
							<div class="input-group mb-3">
							  <input id="email-profile" type="text" class="form-control" placeholder="Email" value="<?= $user['email'] ?>" readonly>
							  <button class="btn btn-outline-custom" type="button" id="button-addon2" data-bs-toggle="modal" data-bs-target="#modal-email"><i class="fas fa-user-edit "></i></button>
							</div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">No. Telp</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= ($user['no_telp']) ? $user['no_telp'] : set_value('no_telp') ?>" placeholder="Masukan No. Telp Anda" name="no_telp">
                            <span id="noTelp_error"></span>
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
                    	<button class="btn btn-custom" id="btn-loading-profile" type="button" disabled>
						  <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
						  Loading
						</button>
                    	<button class="btn btn-custom shadow text-center p-2" type="submit" id="btn-profile"><i class="fas fa-cloud-download-alt me-2"></i>Simpan</button>
                    </div>
                </form>


                <script type="text/javascript">

                	$(document).ready(function () {

                		$('#btn-loading-profile').hide();

                		$('#form-profile').on('submit', function(e){
						    e.preventDefault();

						    const href = $(this).attr('action');

						     Swal.fire({
						        title: 'Apakah Kamu Yakin?',
						        text: "Ingin meyimpan data ini?",
						        icon: 'warning',
						        showCancelButton: true,
						        confirmButtonColor: '#06207e',
						        cancelButtonColor: '#dc0000',
						        confirmButtonText: 'Pesan',
						        cancelButtonText: 'Tidak'
						    }).then((result) => {

						    	if (result.isConfirmed) {

						          $.ajax({
								      url: href,
								      method:"POST",
								      data: $(this).serialize(),
								      dataType: "json",
								      beforeSend:function(){
								        $('#btn-profile').hide();
								        $('#btn-loading-profile').show();
								      },
								      complete:function() {
								      	$('#btn-loading-profile').hide();
								      	$('#btn-profile').show();
								      },
								      success:function(data) {
								        // Form validation error
								        if(data.error) {
								      

								          if (data.username_error != '') {

								            $('#username_error').html(data.username_error);

								          }

								          if (data.name_error != '') {

								            $('#name_error').html(data.name_error);

								          }


								          if (data.noTelp_error != '') {

								            $('#noTelp_error').html(data.noTelp_error);

								          }

								        }

								        // Form validation success
								        if(data.success) {
								          $('#message-profile').html(data.success);
								          $('#username_error').html('');
								          $('#name_error').html('');
								          $('#noTelp_error').html('');
								        }

								      }
								    })
						        }
							    
							})
						})

                	})

                	
                </script>