
    // section id="cart"

    let $qty_minus = $(".qty .qty-minus");
    let $qty_plus = $(".qty .qty-plus");
    let $deal_price = $("#deal-price");
let subtotal = 0;
// click on qty plus button
    $qty_plus.click(function (e) {

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({url: "Template/ajax.php", type: 'post', data: {itemid: $(this).data("id")}, success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['price'];

                if ($input.val() >= 1 && $input.val() <= 9) {
                    $input.val(function (i, oldval) {
                        return ++oldval;
                    });
                    // increase price using ajax
                    // value of each product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));
                    // total
                    subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }
            }});
    });
// click on qty minus button

    $qty_minus.click(function (e) {

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({
            url: "Template/ajax.php", type: 'post', data: {itemid: $(this).data("id")}, success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['price'];

                if ($input.val() > 1 && $input.val() <= 10) {
                    $input.val(function (i, oldval) {
                        return --oldval;
                    });

                    // increase price using ajax
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));
                    subtotal = parseInt($deal_price) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }
            }});
    });



// show less/more toggle
//     $(".show").click(function () {
//         $(this).prev().toggle();
//         $(this).siblings('.show').toggle();
//         if ($(this).text() == 'Show More') {
//             $(this).text('Show Less');
//         } else {
//             $(this).text('Show More');
//         }
//     });
