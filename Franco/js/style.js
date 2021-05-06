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
var a= $('.blog-list-item').width();

var margin;
var tam;
if ($( window ).width()< 436 ) {
  margin=10;
}
else if ($( window ).width()< 1025) {
  margin=15;
}
else margin=20 + 10;
if($( window ).width()< 436)
{
  var tam=a*2+margin;
  $(".point-one").click(function(e){
    e.preventDefault();
    $('.blog-list').css('margin-left', '0px');

    add_active($(".pt1"));

    non_active($(".pt2"));
    non_active($(".pt3"));
    non_active($(".pt4"));
    non_active($(".pt5"));
  });


  $(".point-two").click(function(e){
    e.preventDefault();
    $('.blog-list').css('margin-left','-'+tam+'px');

    add_active($(".pt2"));

    non_active($(".pt1"));
    non_active($(".pt3"));
    non_active($(".pt4"));
    non_active($(".pt5"));
  });

  $(".bbbbbb").click(function(e){
    e.preventDefault();
    $('.blog-list').css('margin-left', '-'+tam*2+'px');

    add_active($(".pt3"));

    non_active($(".pt1"));
    non_active($(".pt2"));
    non_active($(".pt4"));
    non_active($(".pt5"));
  });

  $(".a1").click(function(e){
    e.preventDefault();
    $('.blog-list').css('margin-left', '-'+tam*3+'px');

    add_active($(".pt4"));

    non_active($(".pt1"));
    non_active($(".pt3"));
    non_active($(".pt2"));
    non_active($(".pt5"));
  });

  $(".a2").click(function(e){
    e.preventDefault();
    $('.blog-list').css('margin-left', '-'+tam*4+'px');

    add_active($(".pt5"));

    non_active($(".pt1"));
    non_active($(".pt3"));
    non_active($(".pt4"));
    non_active($(".pt2"));
  });


}else{
  $(".point-one").click(function(e){
    e.preventDefault();
    $('.blog-list').css('margin-left', '0px');

    add_active($(".pt1"));

    non_active($(".pt3"));
    non_active($(".pt2"));
  });


  $(".point-two").click(function(e){
    var tam2=a*3+margin*2;
    e.preventDefault();
    $('.blog-list').css('margin-left','-'+tam2+'px');
    add_active($(".pt2"));

    non_active($(".pt1"));
    non_active($(".pt3"));
  });


  $(".bbbbbb").click(function(e){
    e.preventDefault();
    var tam3=a*3+margin*2;
    $('.blog-list').css('margin-left', '-'+tam3*2+'px');

    add_active($(".pt3"));

    non_active($(".pt1"));
    non_active($(".pt2"));
  });

}

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
function clsclsmenubarrr() {
  alert('jhbdcbsd');
  var x = $('.header-menu-menu');
  x.removeClass('menu_man1');
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
function non_active($a){
  $a.removeClass('active-point');
  $a.addClass('non-active-point');
}
function add_active($a){
  $a.addClass('active-point');
  $a.removeClass('non-active-point');
}