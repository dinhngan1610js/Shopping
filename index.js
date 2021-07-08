// section id="cart"
let $qty_minus = $(".qty .qty-minus");
let $qty_plus = $(".qty .qty-plus");
let $input = $(".qty .qty_input");


// click on qty plus button
$qty_plus.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() >= 1 && $input.val() <= 9){
        $input.val(function(i,oldval){
            return ++oldval;
        });
    }
});
// click on qty minus button
$qty_minus.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() > 1 && $input.val() <= 10){
        $input.val(function(i,oldval){
            return --oldval;
        });
    }
});