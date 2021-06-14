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

    // Add Cart
    $('.add-cart-qty').on('click', function (e) {

        e.preventDefault();

        const href = $(this).data('href');
        const kode = $(this).data('kode');

        $.ajax({
          url: href,
          type: 'post',
          dataType: 'html',
          data: {id: kode},
          success:function (data) {
            loadCost();
            loadPrice();
          }
        })

    })

    // Change Cost Cart
    $('.form-number').on('change', function () {

        const href = $(this).data('href');
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
        $input.val(parseInt($input.val()) + 1);

        $input.change();
        return false;
    });

});