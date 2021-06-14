$(window).scroll(function(){
    $('.navbar').toggleClass('scrolling-active', $(this).scrollTop() > 0);
    if ($(this).scrollTop() > 500) {
        $('.gobtn').fadeIn();
    } else {
        $('.gobtn').fadeOut();
    }
});

// Arrow Page Scroll
$('.page-scroll').on('click', function(){
    
    var tujuan = $(this).attr('href');
    var elemenTujuan = $(tujuan);
    
    $('html, body').animate({
        scrollTop: elemenTujuan.offset().top - 100
    }, 500);
    
});

$('.gobtn').click(function(){
    $('html, body').animate({scrollTop: 0},800);
});

$(document).ready(function(){

  $(".slide-show").owlCarousel();
});


$('.slide-show').owlCarousel({
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:false
        },
        600:{
            items:2,
            nav:true
        },
        700:{
            items:3,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
        }
    }
})

$(document).ready(function(){
  $(".slide-show-kategori").owlCarousel();
});


$('.slide-show-kategori').owlCarousel({
  responsiveClass: true,
  responsive: {
    0: {
      items: 3
    },
    700: {
      items: 4
    },
    1000: {
      items: 5
    }
  }
});

$(document).ready(function () {

    // Form Ubah Data Diri
    $('#btn-ubah').on('click', function() {
      const noTelp = $('#noTelp-dr').text();
      const nama = $('#nama-dr').text();
      const kodePos = $('#kodePos-dr').text();
      const alamat = $('#alamat-dr').text();

      $('#noTelp-form').val(noTelp);
      $('#nama-form').val(nama);
      $('#kodePos-form').val(kodePos);
      $('#alamat-form').html(alamat);
    });


    // Hapus Invoice
    $('.hapus-invoice').on('click', function (e) {
      e.preventDefault();

      const href = $(this).attr('href');

      Swal.fire({
        title: 'Apakah Kamu Yakin?',
        text: "Ingin membuat pesanan produk ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#06207e',
        cancelButtonColor: '#dc0000',
        confirmButtonText: 'Pesan',
        cancelButtonText: 'Tidak'
      }).then((result) => {
        if (result.isConfirmed) {

          const href = $(this).attr('href');

          document.location.href = href;
        }
      }) 

    });


    // Batalkan Pesanan
    $('#batalkan').on('click', function (e) {
      e.preventDefault();

      const href = $(this).attr('href');

      Swal.fire({
        title: 'Apakah Kamu Yakin?',
        text: "Ingin membuat pesanan produk ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#06207e',
        cancelButtonColor: '#dc0000',
        confirmButtonText: 'Pesan',
        cancelButtonText: 'Tidak'
      }).then((result) => {
        if (result.isConfirmed) {

          const href = $(this).attr('href');

          document.location.href = href;
        }
      }) 

    });
    // Ubah Gambar Upload
    $('.upload').change(function(){
       readImage(this);
    });

    function readImage(input) {
       if (input.files && input.files[0]) {
          var reader = new FileReader();
     
          reader.onload = function (e) {
            $('.img-profile').attr('src', e.target.result);
          }
     
          reader.readAsDataURL(input.files[0]);
       }
    }
});

$(document).ready(function () {
    $("#img-pruduct-slider").owlCarousel({
        items: 4,
        navigation: false,
        autoPlay: true
    });
});

$('.img-thumb').on('click', function(){
    var src = $(this).attr('src');
     $('.thumb').attr('src', src);
});

    











