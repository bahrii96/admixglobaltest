jQuery(document).ready(function ($) {
    var ajaxurl = my_ajax_object.ajaxurl;

    function makeAjaxRequest(taxonomyValue, price) {
        var data = {
            action: 'my_custom_action',
            taxonomy: taxonomyValue,
            price: price,
        };

        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: data,
            success: function (response) {
                $('.cars__item-container').html(response);
            },
            error: function (error) {
                console.log(error);
            },
        });
    }

    $('#taxonomy-filter').on('change', function () {
        var selectedValue = $(this).val();
        var price = $('#price-input').val();
        makeAjaxRequest(selectedValue, price);
    });

    $('#price-input').on('input', function () {
        var price = $(this).val();

        $('#price-range').attr('value', price);
        $('#price-range').css('width', ((price - 1000) / 5000) * 100 + '%');

        makeAjaxRequest($('#taxonomy-filter').val(), price);
    });
});

var priceInput = document.getElementById('price-input');
var selectedValue = document.getElementById('selected-value');
priceInput.addEventListener('input', function () {
    selectedValue.textContent = priceInput.value;
});




