
$(document).ready(function () {
    $("#lightSlider").lightSlider({
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 6,
        gallery: true,
    });
    // $(".select_variation_option").on("change", function(event) {
    //     // var option = event.target.value;
    //     let product_id = document.getElementById("product_id").value;
    //     var select_length = document.getElementsByClassName('select_variation_option');
    //     let length = select_length.length;
    //     let attribute_value = event.target.value;
    //     console.log(attribute_value , product_id , length );

    //     $.ajax({
    //         URL:"{{ route('getPrice') }}",
    //         type:'GET',
    //         data: {
    //             product_id:product_id,
    //             attribute_value:attribute_value,
    //         },
    //         success:function (response) {
    //             $('#price').text('$' + response.price);
    //         },
    //         error: function(xhr, status, error) {
    //             console.error(xhr.responseText);
    //         }

    //     });

    // });
    $(".select_variation_option").on("change", function(event) {
        let product_id = document.getElementById("product_id").value;
        let select_length = document.getElementsByClassName('select_variation_option').length;
        let attribute_value = event.target.value;
    
        console.log(select_length , product_id , attribute_value)
        $.ajax({
            url:'/getPrice',
            type: 'GET',
            data: {
                product_id: product_id,
                attribute_value: attribute_value,
            },
            success: function(response) {
                console.log(response);
                $('#price').text('Price: $' + response.prices);
            },
            error: function(xhr, status, error) {
                console.error(error.responseText);
            }
        });
    });
});

