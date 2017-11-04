jQuery(document).ready(function($){

$('.slick').slick();

$(".slick img").show();

if ($('.slick img').length === 0) {
$('.display').hide();
}

$('.menu-toggle').click(function() {
     $('.main-navigation').slideToggle('200');
});

$(window).resize(function() {
              var windowWidth = $(window).width();
              if (windowWidth > 849) {                  
                  $('.main-navigation').show();
              } 
          });

});