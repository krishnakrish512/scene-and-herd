$(document).ready(function() {
    wow = new WOW({}).init();

    $('.close-div span').click(function () {
        $('#quote-form').animate({
            right: "-700px"
        }, 500);

    });

    if ($(window).width() < 1200) {
        $(".menu-item-has-children > a").click(function (event) {
            event.preventDefault();
            $(this).toggleClass("on");
            $(this).next(".sub-menu").slideToggle();
        });
    }
    $('.site-toggle i').click(function() {
        $('body').toggleClass('on');

    });
    $('.nav-close').click(function() {
        $('body').removeClass('on');

    });
   
    $('.close-btn button').click(function() {
        $('body').addClass('menu-on-removed');
        // alert('hello');

    });

 // float image scroll animation
 $(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    $('.hero-img img').css({
    'transform' : 'translate(0px, '+ wScroll /15 +'%)'
    });
    
    });


});



