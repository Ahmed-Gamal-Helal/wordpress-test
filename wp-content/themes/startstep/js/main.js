


$(document).ready(function(){

    $('.open-menu').click(function(){
        $('.menu2').css({"width":"60%",})
        $('.side-menu-header').css({"left":"40%",})
        $(this).toggle();
        $('.side-menu-headerspan').toggle();

    });
    $('.close-menu').click(function(){
        $(this).parent().css({"width":"0",})
        $('.side-menu-header').css({"left":"0",})
        $('.open-menu').toggle();
        $('.side-menu-header span').toggle();
    });

    $('.new-added .item, .most-viewed .item, .login-side .item').hover(function(){
        $(this).children('.add-to-cart, .flaticon-visibility').toggle(2000);
    });

    //main  owl-carousle
    $('.main-carousle-details .owl-carousel').owlCarousel({
        // loop:true,
        // margin:10,
        rtl:true,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        navText:["",""],
        responsive:{
            0:{
                items:1
            }
        }
    });
    // plus - minus
    $('.pp').click(function(){
        var x=$(this).parent().find(".cc").val()
           x++;
        $(this).parent().find(".cc").val(x)
    });
 
    $('.mm').click(function(){
        var x=$(this).parent().find(".cc").val()
          if(x>1){
         x--;
        }
       $(this).parent().find(".cc").val(x)
    });

    $('a.remove').click(function(){
        $(this).parent().parent().parent().remove();
    });
    //view product
    
    $('.replace-img .owl-carousel').owlCarousel({
        // loop:true,
        margin:10,
        rtl:true,
        nav:false,
        dots:false,
        // autoplay:true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    // images in product
    $(".product-details .images .item a img").click(function(){
        $smalimg=$(this).attr('src');
        $(".product-details .product-img img").attr("src", $smalimg);
    });

    
    $('.new-added .owl-carousel').owlCarousel({
        // loop:true,
        margin:40,
        rtl:true,
        nav:true,
        dots:false,
        // autoplay:true,
        autoplayTimeout:3000,
        navText:["<i class='flaticon-next'></i>","<i class='flaticon-back'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $('.our-clients .owl-carousel').owlCarousel({
        // loop:true,
        margin:40,
        rtl:true,
        dots:false,
        // autoplay:true,
        // autoplayTimeout:3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });


    $('.most-viewed .owl-carousel').owlCarousel({
        // loop:true,
        margin:40,
        rtl:true,
        nav:true,
        dots:false,
        // autoplay:true,
        autoplayTimeout:3000,
        navText:["<i class='flaticon-next-page'></i>","<i class='flaticon-next-page'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });
    $('.login-side .owl-carousel').owlCarousel({
        // loop:true,
        // margin:40,
        rtl:true,
        nav:true,
        dots:false,
        // autoplay:true,
        autoplayTimeout:3000,
        navText:["<i class='flaticon-next-page'></i>","<i class='flaticon-next-page'></i>"],
        responsive:{
            0:{
                items:1
            }
        }
    });

    // offers
    $('.discounts-offers .owl-carousel').owlCarousel({
        rtl:true,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    // sponsors
    $('.sponsors .owl-carousel').owlCarousel({
        loop:true,
        rtl:true,
        nav:false,
        dots:false,
        // margin: 120,
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
    });
    window.FontAwesomeConfig = {
        searchPseudoElements: true
      };
    // rate
    $('.rate-details h6 ').hover(function(){
        $(".rate-details h6 span").toggle(3000);
        $(".rate-details h6 a").toggle(3000);
    });
});
