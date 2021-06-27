$(document).ready(function () {

  $('.loading').hide();
  $('#btn-loading-email').hide();
  $('#btn-loading-add-alamat').hide();
  $('#btn-loading-update-alamat').hide();
  $('#btn-loading-change-pass').hide();

  // Load Form profile
  function loadProfile() {

    const href = $('#v-pills-profile').data('href');

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
        $('#v-pills-profile').html(data);
      }
    })

  }

  // Load Form aalamat
  function loadAlamat() {

    const href = $('#v-pills-alamat').data('href');

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
        $('#v-pills-alamat').html(data);
      }
    })

  }

  $('#form-email').on('submit', function(e){
      e.preventDefault();

      const href = $(this).attr('action');

      Swal.fire({
        title: 'Apakah Kamu Yakin?',
        text: "Ingin mengubah email anda?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#06207e',
        cancelButtonColor: '#dc0000',
        confirmButtonText: 'Ubah',
        cancelButtonText: 'Tidak'
      }).then((result) => {

        if (result.isConfirmed) {

          $.ajax({
            url: href,
            method:"POST",
            data: $(this).serialize(),
            dataType: "json",
            beforeSend:function(){
              $('#btn-email').hide();
              $('#btn-loading-email').show();
            },
            complete:function() {
              $('#btn-loading-email').hide();
              $('#btn-email').show();
            },
            success:function(data) {
              // Form validation error
              if(data.error) {
            
                if (data.email_error != '') {

                  $('#email_error').html(data.email_error);

                }

                if (data.password_error != '') {

                  $('#password_error').html(data.password_error);

                }


                if (data.confirm_error != '') {

                  $('#confirm_error').html(data.confirm_error);

                }

              }

              // Form validation success
              if(data.success) {
                $('#email_error').html('');
                $('#password_error').html('');
                $('#confirm_error').html('');
                $('#form-email')[0].reset();
                loadProfile();
                Swal.fire({
                  icon: 'success',
                  title: 'Berhasil Diubah',
                  showConfirmButton: false,
                  timer: 1500
                })

                // const href = $('#form-email').data('href');

                // document.location.href = href;
                
              }

            }
          });
        }

      })
 
  });

  $('#form-add-alamat').on('submit', function(e){
      e.preventDefault();

      const href = $(this).attr('action');

      Swal.fire({
        title: 'Apakah Kamu Yakin?',
        text: "Ingin menambahkan alamat ini?",
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
            method:"POST",
            data: $(this).serialize(),
            dataType: "json",
            beforeSend:function(){
              $('#btn-add-alamat').hide();
              $('#btn-loading-add-alamat').show();
            },
            complete:function() {
              $('#btn-loading-add-alamat').hide();
              $('#btn-add-alamat').show();
            },
            success:function(data) {
              // Form validation error
              if(data.error) {

                if (data.provinsi_add_alamat_error != '') {

                  $('#provinsi_add_alamat_error').html(data.provinsi_add_alamat_error);

                }

                if (data.kota_add_alamat_error != '') {

                  $('#kota_add_alamat_error').html(data.kota_add_alamat_error);

                }

                if (data.kecamatan_add_alamat_error != '') {

                  $('#kecamatan_add_alamat_error').html(data.kecamatan_add_alamat_error);

                }

                if (data.desa_add_alamat_error != '') {

                  $('#desa_add_alamat_error').html(data.desa_add_alamat_error);

                }

                if (data.alamat_add_alamat_error != '') {

                  $('#alamat_add_alamat_error').html(data.alamat_add_alamat_error);

                }

                if (data.kode_pos_add_alamat_error != '') {

                  $('#kode_pos_add_alamat_error').html(data.kode_pos_add_alamat_error);

                }

              }

              // Form validation success
              if(data.success) {
                $('#provinsi_add_alamat_error').html('');
                $('#kota_add_alamat_error').html('');
                $('#kecamatan_add_alamat_error').html('');
                $('#desa_add_alamat_error').html('');
                $('#alamat_add_alamat_error').html('');
                $('#kode_pos_add_alamat_error').html('');
                $('#form-add-alamat')[0].reset();
                loadAlamat();
                Swal.fire({
                  icon: 'success',
                  title: 'Berhasil Ditambahkan',
                  showConfirmButton: false,
                  timer: 1500
                })
              }

            }
          });

        }

      }) 

  });


  $('#form-update-alamat').on('submit', function(e){
      e.preventDefault();

      const href = $(this).attr('action');

      Swal.fire({
        title: 'Apakah Kamu Yakin?',
        text: "Ingin mengubah alamat ini?",
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
            method:"POST",
            data: $(this).serialize(),
            dataType: "json",
            beforeSend:function(){
              $('#btn-update-alamat').hide();
              $('#btn-loading-update-alamat').show();
            },
            complete:function() {
              $('#btn-loading-update-alamat').hide();
              $('#btn-update-alamat').show();
            },
            success:function(data) {
              // Form validation error
              if(data.error) {

                console.log(data.status);

                if (data.provinsi_update_alamat_error != '') {

                  $('#provinsi_update_alamat_error').html(data.provinsi_update_alamat_error);

                }

                if (data.kota_update_alamat_error != '') {

                  $('#kota_update_alamat_error').html(data.kota_update_alamat_error);

                }

                if (data.kecamatan_update_alamat_error != '') {

                  $('#kecamatan_update_alamat_error').html(data.kecamatan_update_alamat_error);

                }

                if (data.desa_update_alamat_error != '') {

                  $('#desa_update_alamat_error').html(data.desa_update_alamat_error);

                }

                if (data.alamat_update_alamat_error != '') {

                  $('#alamat_update_alamat_error').html(data.alamat_update_alamat_error);

                }

                if (data.kode_pos_update_alamat_error != '') {

                  $('#kode_pos_update_alamat_error').html(data.kode_pos_update_alamat_error);

                }

              }

              // Form validation success
              if(data.success) {
                $('#provinsi_update_alamat_error').html('');
                $('#kota_update_alamat_error').html('');
                $('#kecamatan_update_alamat_error').html('');
                $('#desa_update_alamat_error').html('');
                $('#alamat_update_alamat_error').html('');
                $('#kode_pos_update_alamat_error').html('');
                loadAlamat();
                Swal.fire({
                  icon: 'success',
                  title: 'Berhasil Diubah',
                  showConfirmButton: false,
                  timer: 1500
                })
              }

            }
          });

        }

      }) 

  });


  $('#form-change-pass').on('submit', function(e){
      e.preventDefault();

      const href = $(this).attr('action');

      Swal.fire({
        title: 'Apakah Kamu Yakin?',
        text: "Ingin mengubah password ini?",
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
            method:"POST",
            data: $(this).serialize(),
            dataType: "json",
            beforeSend:function(){
              $('#btn-change-pass').hide();
              $('#btn-loading-change-pass').show();
            },
            complete:function() {
              $('#btn-loading-change-pass').hide();
              $('#btn-change-pass').show();
            },
            success:function(data) {
              // Form validation error
              if(data.error) {

                console.log(data.status);

                if (data.passwordOld_change_error != '') {

                  $('#passwordOld_change_error').html(data.passwordOld_change_error);

                }

                if (data.confirm_pass1_change_error != '') {

                  $('#confirm_pass1_change_error').html(data.confirm_pass1_change_error);

                }

                if (data.passwordNew_change_error != '') {

                  $('#passwordNew_change_error').html(data.passwordNew_change_error);

                }

                if (data.confirm_pass2_change_error != '') {

                  $('#confirm_pass2_change_error').html(data.confirm_pass2_change_error);

                }

              }

              // Form validation success
              if(data.success) {
                $('#passwordOld_change_error').html('');
                $('#confirm_pass1_change_error').html('');
                $('#passwordNew_change_error').html('');
                $('#confirm_pass2_change_error').html('');
                $('#form-change-pass')[0].reset();
                Swal.fire({
                  icon: 'success',
                  title: 'Berhasil Diubah',
                  showConfirmButton: false,
                  timer: 1500
                })
              }

            }
          });

        }

      }) 

  });




  loadProfile();
  loadAlamat();

});