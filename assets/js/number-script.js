$(document).ready(function () {

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

    // Change Cost Cart
    $('.form-number').on('change', function () {

        const href = $(this).data('href');
        const id = $(this).data('id');
        const kode = $(this).data('kode');
        const cost = $(this).val();
        const stok = $(this).data('stok');

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

    // Batasan Qty
    $('.form-number').on('keyup', function () {
      const cost = $(this).val();
      const stok = $(this).data('stok');

      if (cost > stok) {
        alert('Kuantitas melebihi batas stok!');
        $(this).val(stok);
      }

      if (cost == 0) {
        $(this).val(1);
      }
    })


    
    // Btn Minus
    $(".minus").click(function () {
        var $input = $(this).parent().find("input");
        var count = parseInt($input.val()) - 1;

        count = count < 1 ? 1 : count;

        $input.val(count);
        $input.change();
        return false;
    });


    // Btn Plus
    $(".plus").click(function () {
        var $input = $(this).parent().find("input");
        var stok = $('.form-number').data('stok');

        var count = parseInt($input.val()) + 1;
        count = count > stok ? stok : count;

        $input.val(count);
        $input.change();
        return false;
    });

});