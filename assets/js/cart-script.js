$(document).ready(function () {

    // Load Cost Cart
    function loadCost() {

      const href = $('.cart-cost').data('href');

      $.get(href, function (data) {
        $('.cart-cost').html(data);
      })

    }

    // Load Price Cart
    function loadPrice() {

      const href = $('.cart-price').data('href');

      $.get(href, function (data) {
        $('.cart-price').html(data);
      })

    }

    // Add Cart
    $('.add-cart').on('click', function (e) {

        e.preventDefault();

        const href = $(this).attr('href');
        const kode = $(this).data('kode');

        $.ajax({
          url: href,
          type: 'post',
          dataType: 'html',
          data: {id: kode},
          success:function (data) {
            loadCost();
          }
        })

        Swal.fire({
          icon: 'success',
          title: 'Berhasil Ditambahkan',
          showConfirmButton: false,
          timer: 1500
        })

    })

    // Change Cost Cart
    $('.form-number').on('change', function () {

        const href = $(this).attr('href');
        const id = $(this).data('id');
        const kode = $(this).data('kode');
        const cost = $(this).val();

        $.ajax({
          url: href,
          type: 'post',
          dataType: 'html',
          data: {id: id, cost: cost, kode: kode},
          success:function (data) {
            loadCost();
            loadPrice();
          }
        })

    })


    // Load Items Cart
    function loadItems() {

      const href = $('#cart-items').data('href');

      $.get(href, function (data) {
        $('#cart-items').html(data);
      })

    }

    $('#destroy-all-cart').click(function (e) {
        e.preventDefault();

        Swal.fire({
          title: 'Apakah Kamu Yakin?',
          text: "Ingin menghapus semua produk ini dari keranjang anda?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#06207e',
          cancelButtonColor: '#dc0000',
          confirmButtonText: 'Ya, Hapus!',
          cancelButtonText: 'Tidak'
        }).then((result) => {
          if (result.isConfirmed) {

            const href = $('#destroy-all-cart').attr('href');

            $.ajax({
              url: href,
              type: 'post',
              dataType: 'html',
              success:function (data) {
                loadCost();
                loadItems();
                loadPrice();
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


    // Konfirmasi Tombol Pesanan
    $('#pesanan').on('click', function (e) {
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

    })


    $('input[value="bayar-ditempat"]').click(function () {
      $('input[name="bank"]').prop('checked', false);
    })

    loadItems();
    loadCost();
})