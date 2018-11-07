$('.slider-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: true,
    nav: true,
    navText: ["<i class='fa fa-long-arrow-left' aria-hidden='true'></i>","<i class='fa fa-long-arrow-right' aria-hidden='true'></i>" ] ,
    autoplaySpeed: 1000,
    responsive: {
        0: {
            items:1
        },
        600: {
            items:1
        },
        1000: {
            items:1
        }
    }
});

$('.seller-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: true,
    nav: true,
    margin: 30,
    navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>" ] ,
    autoplaySpeed: 1000,
    responsive: {
        0: {
            items:1
        },
        600: {
            items:2
        },
        1000: {
            items:4
        }
    }
});

$('.partner-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: false,
    nav: false,
    margin: 50,
    autoWidth: true,
    autoplaySpeed: 1000,
    responsive: {
        0: {
            items:2
        },
        600: {
            items:4
        },
        1000: {
            items:6
        }
    }
});

wow = new WOW(
    {
        mobile: false,
    }
  )
wow.init();


$('document').ready(function() {
    var url = window.location.href; 
    $(".main-menu a").each(function() {
        if (url == (this.href)) { 
            $(this).closest("li a").addClass("active");
            $(this).closest("li li a").removeClass("active");
        }
    });

    $('.toggleMenu').click(function() {
        $(this).css('display','none');
        $('.menu .nav').css('transform','translateX(0)');
        $('.menu-close').css('display','block');
    });

    $('.menu-close').click(function() {
        $(this).css('display','none');
        $('.toggleMenu').css('display','block');
        $('.menu .nav').css('transform','translateX(-150%)');
    });

    $('.menu .nav li i').click(function() {
        $('.menu .nav li ul').css('position','relative').css('display','block')
    });
    var ww = document.body.clientWidth;

    if (ww < 1200) {
        $('.menu .nav').mouseleave(function(){
            $('.menu .nav li ul').css('position','absolute').css('display','none')
        });
    }

    if (ww < 992) {
        $('.footer-bottom .collapse').removeClass('show');
    }

    $(window).scroll(function() { 
        if ($(this).scrollTop() > 20) { 
            $('.menu').css('background','rgba(0, 0, 0, 0.8)'); 
            $('.menu').css('border-bottom','1px solid #383838'); 
            $('.menu').css('right','15px');            
        } else { 
            $('.menu').css('background','none'); 
            $('.menu').css('border-bottom','0'); 
        } 
    }); 

    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 400) { 
            $('#goTop').fadeIn(); 
            
        } else { 
            $('#goTop').fadeOut(); 
        } 
    }); 

    $('#goTop').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 

    $('.list-cate-title').on('click', function() {
        $('.list-cate-title').removeClass('active');
        $(this).addClass('active');
    });

});

