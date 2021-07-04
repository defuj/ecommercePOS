				
				<div class=" bd-highlight">
                    <h4 class="mt-3 mb-0">Alamat Saya
                        <button type="button" class="btn btn-sm btn-custom float-end"
                        data-bs-toggle="modal" data-bs-target="#modal-tambah"><i class="fas fa-plus-circle me-2"></i>Tambah Alamat</button>
                    </h4>
                    <hr>
                </div>

                <?php if (empty($alamat)): ?>
                	<div class="mt-5">
        				<p class="text-center text-muted">Tidak ada alamat</p>	
                	</div>
                <?php endif ?>

                <?php foreach ($alamat as $data): ?>
                	<div class="card border-0 shadow position-relative mb-3">
                    	<div class="card-body">
                    		<div class="row mt-2">
                        		<div class="col-md-3">
                        			<p class="text-md-end text-muted">Nama Lengkap</p>
                        		</div>
                        		<div class="col-md-9">
                        			<p class="name-alamat"><?= $data['nama'] ?></p>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-md-3">
                        			<p class="text-md-end text-muted">No. Telp</p>
                        		</div>
                        		<div class="col-md-9">
                        			<p class="no-telp-alamat"><?= $data['telepon'] ?></p>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-md-3">
                        			<p class="text-md-end text-muted">Alamat Lengkap</p>
                        		</div>
                        		<div class="col-md-9">
                        			<p class="alamat"><?= $data['alamat'] ?></p>
                        			<p class="provinsi"><?= $data['provinsi'] ?></p>
                        			<p><span class="kota"><?= $data['kota'] ?></span> - <span class="kecamatan"><?= $data['kecamatan'] ?></span> - <span class="desa"><?= $data['desa'] ?></span></p>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-md-3">
                        			<p class="text-md-end text-muted">Kode Pos</p>
                        		</div>
                        		<div class="col-md-9">
                        			<p class="kode-pos"><?= $data['kode_pos'] ?></p>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-12">
                        			<div class="float-md-end">
                        				<a href="<?= base_url('user/editAlamat') ?>" class="text-decoration-none text-success ubah-alamat" data-bs-toggle="modal" data-bs-target="#modal-ubah" data-id="<?= $data['id'] ?>">Ubah</a>&nbsp;|&nbsp;
                        				<a href="<?= base_url('user/deleteAlamat') ?>" class="text-decoration-none text-danger hapus-alamat" data-id="<?= $data['id'] ?>">Hapus</a>&nbsp;
                        				<button class="btn btn-custom btn-sm atur-alamat" data-id="<?= $data['id'] ?>" <?= ($data['is_active'] == 1) ? 'disabled' : '' ?> data-href="<?= base_url('user/activeAlamat') ?>">Atur Sebagai Utama</button>
                        			</div>
                        		</div>
                        	</div>
                    	</div>
                    </div>
                <?php endforeach ?>

                <script type="text/javascript">
                	
                	$(document).ready(function () {

                        function load_city_pesan() {
                            $.ajax({
                              url : '<?= base_url('user/loadCity'); ?>',
                              type : 'get',
                              dataType : 'json',
                              error : function (e) {
                                $('.city_pesan').html('<option>'+e.status+' '+e.statusText+'</option>')
                              },
                              success : function (e) {
                                 if (e.rajaongkir.status.code==400) {
                                  $('.city_pesan').html('<option>'+e.rajaongkir.status.description+'</option>')
                                 } else {
                                  $('.city_pesan').html('');
                                  $.each(e.rajaongkir.results,function(i,value){
                                    $('.city_pesan').append('<option value="'+value.city_id+'">'+value.city_name+'</option>');
                                  });
                                 }
                              }
                            })
                        }

                        load_city_pesan();

                		// Load Form aalamat
						function loadAlamat() {

						    const href = $('#v-pills-alamat').data('href');

						    $.ajax({
						      url: href,
						      type: 'get',
						      dataType: 'html',
						      berforeSend:function () {
						        $('.loading-alamat').show();
						      },
						      complete:function () {
						        $('.loading-alamat').hide();
						      },
						      success:function (data) {
						        $('#v-pills-alamat').html(data);
						      }
						    })

						}

                		$('.hapus-alamat').on('click', function (e) {
					      e.preventDefault();
					      const id = $(this).data('id');
					      const href = $(this).attr('href');


					      Swal.fire({
					        title: 'Apakah Kamu Yakin?',
					        text: "Ingin menghapus Alamat ini?",
					        icon: 'warning',
					        showCancelButton: true,
					        confirmButtonColor: '#06207e',
					        cancelButtonColor: '#dc0000',
					        confirmButtonText: 'Ya!',
					        cancelButtonText: 'Tidak'
					      }).then((result) => {

					        if (result.isConfirmed) {

							    $.ajax({
							        url: href,
							        type: "POST",
							        dataType: "html",
							        data:{id: id},
							        beforeSend:function () {
							          $(this).prop('disabled', true);
							        },
							        complete:function () {
							          $(this).prop('disabled', false);
							        },
							        success:function () {
							          loadAlamat();
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


                		$('.atur-alamat').on('click', function (e) {
                			e.preventDefault();

                			const id = $(this).data('id');
                			const href = $(this).data('href');

                			$.ajax({
                				url: href,
                				type: "POST",
                				dataType: "html",
                				data:{id: id},
                				success:function () {
                					loadAlamat();
                				}
                			})

                			Swal.fire({
				              icon: 'success',
				              title: 'Berhasil Diubah',
				              showConfirmButton: false,
				              timer: 1500
				            })

                		})


                        $('.ubah-alamat').on('click', function (e) {
    
                            const id = $(this).data('id');
                            const href = $(this).attr('href');

                            var input_id = $('#form-update-alamat').find('input[name="id"]');
                            var input_provinsi = $('#form-update-alamat').find('option').parent('select[name="provinsi"]');
                            var input_kota = $('#form-update-alamat').find('option').parent('select[name="kota"]');
                            var input_kecamatan = $('#form-update-alamat').find('input[name="kecamatan"]');
                            var input_desa = $('#form-update-alamat').find('input[name="desa"]');
                            var input_alamat = $('#form-update-alamat').find('textarea[name="alamat"]');
                            var input_kode_pos = $('#form-update-alamat').find('input[name="kode_pos"]');

                            input_id.val(id);

                            $.ajax({
                                url: href,
                                type: 'post',
                                dataType: 'json',
                                data: {id: id},
                                beforeSend:function(){
                                  $('#btn-update-alamat').hide();
                                  $('#btn-loading-update-alamat').show();
                                },
                                complete:function() {
                                  $('#btn-loading-update-alamat').hide();
                                  $('#btn-update-alamat').show();
                                },
                                success:function (data) {
                                    
                                    if (data.error) {
                                        console.log(data.status);
                                        Swal.fire({
                                          icon: 'error',
                                          title: 'Alamat gagal di load'
                                        })
                                    } 

                                    if (data.success) {

                                        input_kota.each(function (i) {
                                            if ($(this).val(data.kota) == data.kota) {
                                                $(this).prop('selected', true);
                                            } else {
                                                $(this).prop('selected', false);
                                            }
                                        })

                                        input_kecamatan.val(data.kecamatan);
                                        input_desa.val(data.desa);
                                        input_alamat.val(data.alamat);
                                        input_kode_pos.val(data.kode_pos);
                                    }

                                }
                            })

                        })



                	})


                </script>