$(document).ready(function () {

    // Banner Owl caresol
    $("#banner-area .owl-carousel").owlCarousel({
         dots: true,
        items: 1,
        loop: true,
        nav:true
    });

     $("#top-sale .owl-carousel").owlCarousel({
        dots: false,
         loop: true,
         nav: true,
         responsive: {
             0: {
                 items:2
             },
             600: {
                 items:3
             },
             1000: {
                 items:6
             },
         }
     });
    
    // Isotope filter

    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode:'fitRows'
    })
    //filter items on click
    $(".button-group").on("click", "button", function () { 
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    })


    // New Phones
    $("#new-phones .owl-carousel").owlCarousel({
        dots: true,
         loop: true,
         nav: false,
         responsive: {
             0: {
                 items:2
             },
             600: {
                 items:3
             },
             1000: {
                 items:6
             },
         }
     });

    // blog portion
    $("#blogs .owl-carousel").owlCarousel({
        dots: false,
         loop: true,
         nav: true,
         responsive: {
             0: {
                 items:2
             },
             600: {
                 items:3
             }
            
         }
    });
    

// Quantity Setion  
    
//     let $qty_up = $(".qty .qty-up");
//     let $qty_down = $(".qty .qty-down");
//     let $deal_price = $("#deal-price");
//     // let $input = $(".qty .qty_input");

// //     $qty_up.click(function (e) {

// //         // changing product price using ajax
// //         $.ajax({
// //             url: "Template/ajax.php", type: 'post', data: { itemid: $(this).data("id") }, success: function (result) {
// //                 console.log(result);
// //             }
// //         });
// //         let $input=$(`.qty_input[data-id='${$(this).data("id")}']`)
// //         if ($input.val() >= 1 && $input.val() <= 9) {
// //             $input.val(function (i, oldval) {
// //                 return ++oldval;
// //             })
// //         }
// //     });
// //     $qty_down.click(function (e) {
// //          let $input=$(`.qty_input[data-id='${$(this).data("id")}']`)
// //         if ($input.val() > 1 && $input.val() <= 10) {
// //             $input.val(function (i, oldval) {
// //                 return --oldval;
// //             })
// //         }
// //     });
// // });
    
    
    
    
    
//        // click on qty up button
//     $qty_up.click(function(e){

//         let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
//         let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

//         // change product price using ajax call
//         $.ajax({url: "Template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
//                 let obj = JSON.parse(result);
//                 let item_price = obj[0]['item_price'];

//                 if($input.val() >= 1 && $input.val() <= 1){
//                     $input.val(function(i, oldval){
//                         return ++oldval;
//                     });

//                     // increase price of the product
//                     $price.text(parseInt(item_price * $input.val()).toFixed(2));

//                     // set subtotal price
//                     let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
//                     $deal_price.text(subtotal.toFixed(2));
//                 }

//             }}); // closing ajax request
//     }); // closing qty up button

//     // click on qty down button
//     $qty_down.click(function(e){

//         let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
//         let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

//         // change product price using ajax call
//         $.ajax({url: "Template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
//                 let obj = JSON.parse(result);
//                 let item_price = obj[0]['item_price'];

//                 if($input.val() > 1 && $input.val() <= 1){
//                     $input.val(function(i, oldval){
//                         return --oldval;
//                     });


//                     // increase price of the product
//                     $price.text(parseInt(item_price * $input.val()).toFixed(2));

//                     // set subtotal price
//                     let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
//                     $deal_price.text(subtotal.toFixed(2));
//                 }

//             }}); // closing ajax request
//     }); // closing qty down button


});

// $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     dots: true,
//     item:1
// })