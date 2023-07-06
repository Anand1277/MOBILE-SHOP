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
    
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty_input");

    $qty_up.click(function (e) {
        let $input=$(`.qty_input[data-id='${$(this).data("id")}']`)
        if ($input.val() >= 1 && $input.val() <= 9) {
            $input.val(function (i, oldval) {
                return ++oldval;
            })
        }
    });
    $qty_down.click(function (e) {
         let $input=$(`.qty_input[data-id='${$(this).data("id")}']`)
        if ($input.val() > 1 && $input.val() <= 10) {
            $input.val(function (i, oldval) {
                return --oldval;
            })
        }
    });
});

// $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     dots: true,
//     item:1
// })