

// NAVBAR 


$(document).ready(function() {
  
  
  $(window).scroll(function () {
    //if you hard code, then use console
    //.log to determine when you want the 
    //nav bar to stick.  
    console.log($(window).scrollTop())
  
      if ($(window).scrollTop() > 1079) {
        $('.nav_bar').addClass('uk-animation-slide-top uk-animation-0,1 navbar-fixed');
      }
      if ($(window).scrollTop() < 1080) {
        $('.nav_bar').removeClass('uk-animation-slide-top uk-animation-0,1 navbar-fixed');
      }
    });
  });





// CARTE REPAS HOVER

$(function() {
  $('#DIVcarteRepas').hover(function() {
    // $('.H3carteRepas').css('color', '#56d495');
    $('#carteFoodSelect').css('background-image', 'url(images/goldLine.jpg)');
    $('#carteFoodSelect').css('background-position', 'center');
    $('#carteFoodSelect').css('background-repeat', 'no-repeat');
    $('#carteFoodSelect').css('width', 'auto');
    $('#carteFoodSelect').css('height', '232px');
  }, function() {
    // on mouseout, reset the background colour
    $('.H3carteRepas').css('color', '#468465');
    $('#carteFoodSelect').css('background-image', 'none');
    $('#carteFoodSelect').css('width', 'auto');
    $('#carteFoodSelect').css('height', '232px');
  });
});




// CARTE BOISSONS HOVER

$(function() {
  $('#DIVcarteDrink').hover(function() {
    // $('.H3carteDrink').css('color', '#56d495');
    $('#carteDrinkSelect').css('background-image', 'url(images/goldLine.jpg)');
    $('#carteDrinkSelect').css('background-position', 'center');
    $('#carteDrinkSelect').css('background-repeat', 'no-repeat');
    $('#carteDrinkSelect').css('width', 'auto');
    $('#carteDrinkSelect').css('height', '232px');
  }, function() {
    // on mouseout, reset the background colour
    $('.H3carteDrink').css('color', '#468465');
    $('#carteDrinkSelect').css('background-image', 'none');
    $('#carteDrinkSelect').css('width', 'auto');
    $('#carteDrinkSelect').css('height', '232px');
  });
});


//MENU AFFAIRE HOVER

// $(function() {
//   $('#menuAffaire').hover(function() {
//     $('#menuAffaire').css('top', '0px');
//     $('#menuAffaire').css('transition', 'all .5s ease-in-out');
//   }, function() {
//     $('#menuAffaire').css('top', '-331px');
//     $('#menuAffaire').css('transition', 'all .5s ease-in-out');
//   });
// });

$(function() {
  $('#titreAffaire').hover(function() {
      $('#menuAffaire').show();
      $('#titreAffaire').hide();
  }, 
  function() {
    $('#menuAffaire').hide();
    $('#titreAffaire').show();
  });
});