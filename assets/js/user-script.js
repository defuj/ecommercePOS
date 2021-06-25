$(document).ready(function () {

  $('.loading').hide();
  $('#btn-loading-email').hide();

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
                $('#message-email').html(data.success);
                $('#email_error').html('');
                $('#password_error').html('');
                $('#confirm_error').html('');

                const href = $('#form-email').data('href');

                document.location.href = href;
                
              }

            }
          });
        }

      })

      
  });

  loadProfile();

});