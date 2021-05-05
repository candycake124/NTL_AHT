$(document).ready(function(){
//---------------------------------------------search-------------
  $('.dot3').click(function(e){
    e.preventDefault();
    var x = $('.header-menu-search');
    x.addClass('seach__active');
  });
//-------------------------------------------mini-cart----------------
  $('.Cart').click(function(e){
    e.preventDefault();
    var y = $('.header-mini-cart');
    y.addClass('mini-cart-active')
  });

//-----------------------------------------slider----------------------
  var a= $('.slider li').width();
  var margin;
  if ($( window ).width()< 321 ) {
    margin=10;
  }
  else if ($( window ).width()< 1025) {
    margin=15;
  }
  else margin=20 + 10;
  
  $(".point-one").click(function(e){
    e.preventDefault();
    $('.blog-list').css('margin-left', '0px');
  });


  $(".point-two").click(function(e){
    var tam2=a*3+margin*2;
    e.preventDefault();
    $('.blog-list').css('margin-left','-'+tam2+'px');
  });


  $(".bbbbbb").click(function(e){
    e.preventDefault();
    var tam3=a*3+margin*2;
    $('.blog-list').css('margin-left', '-'+tam3*2+'px');
  });

//-----------------------------------------menu-bar---------------------
  $('.menubarrrrr').click(function(e){
    e.preventDefault();
    var header_menu = $(".header-menu-menu");
    header_menu.addClass('menu_man1');
  });
});
function cls() {
 var x = $('.header-menu-search');
 x.removeClass('seach__active');
}  
function clscart() {
  var x = $('.header-mini-cart');
  x.removeClass('mini-cart-active');
}
$( function() {
  var availableTags = [
  "ActionScript",
  "AppleScript",
  "Asp",
  "BASIC",
  "C",
  "C++",
  "Clojure",
  "COBOL",
  "ColdFusion",
  "Erlang",
  "Fortran",
  "Groovy",
  "Haskell",
  "Java"
  ];
  $( "#tk" ).autocomplete({
    source: availableTags
  });
} );