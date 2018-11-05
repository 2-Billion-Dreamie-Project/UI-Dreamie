$('.slider-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: true,
    nav: false,
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

$('document').ready(function() {
    var url = window.location.href; 
    $(".main-menu a").each(function() {
        if(url == (this.href)) { 
            $(this).closest("li a").addClass("active");
        }
    });

    $('.toggleMenu').click(function() {
        $(this).css('display','none');
        $('.nav').css('transform','translateX(0)');
        $('.menu-close').css('display','block');
    });

    $('.menu-close').click(function() {
        $(this).css('display','none');
        $('.toggleMenu').css('display','block');
        $('.nav').css('transform','translateX(-150%)');
    });

    $('.nav li i').click(function() {
        $('.nav li ul').css('position','relative').css('display','block')
    });
});

