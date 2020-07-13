$(document).ready(function(){
    $('#banner-area .owl-carousel').owlCarousel({
        dots:true,
        items:1
    })
    //TOP SELL
    $('#top-sale .owl-carousel').owlCarousel({
        dots:false,
        loop:true,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
    //ISOTOPE FILTER
    var $grid = $('.grid').isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    })
    //filter items on button click
    $('.button-group').on('click','button',function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter:filterValue})
    })
    // INCREASE QUANTITY
    $('.qty-up').on('click',function(e){
        let $input = $(`.qty-input[data-id=${$(this).data("id")}]`);
        $input.val(function(index,value){
            return parseInt(value)+1;
        });
    })
    //DECREASE QUANTITY
    $('.qty-down').on('click',function(e){
        let $input = $(`.qty-input[data-id=${$(this).data("id")}]`);
        $input.val(function(index,value){
            if(parseInt(value)>1){
                return parseInt(value)-1;
            }
            else{
                return value;
            }

        });
    })







})