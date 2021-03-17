

// NAVBAR 


$(document).ready(function() {
  
    $(window).scroll(function () {
        //if you hard code, then use console
        //.log to determine when you want the 
        //nav bar to stick.  
        //console.log($(window).scrollTop())
      if ($(window).scrollTop() > 1079) {
        $('.nav_bar').addClass('uk-animation-slide-top uk-animation-0,1 navbar-fixed');
      }
      if ($(window).scrollTop() < 1080) {
        $('.nav_bar').removeClass('uk-animation-slide-top uk-animation-0,1 navbar-fixed');
      }
    });
  });



// CARTE BOISSONS HOVER

$(function() {
  $('#DIVcarteDrink').hover(function() {
    $('.H3carteDrink').css('color', '#56d495');
  }, function() {
    // on mouseout, reset the background colour
    $('.H3carteDrink').css('color', '#468465');
  });
});