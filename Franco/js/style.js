$(document).ready(function(){

  $('.dot3').click(function(e){
    e.preventDefault();
    var x = $('.header-menu-search');
    x.addClass('seach__active');
  });

  $('.Cart').click(function(e){
    e.preventDefault();
    var y = $('.header-mini-cart');
    y.addClass('mini-cart-active')
  });

  var a= $('.blog-container').width();
      var tam =a;
      $(".point-two").click(function(){
        tam+=a;
        $('.blog-container').css('margin-left', '-'+tam+'px');
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
  "Java",
  "JavaScript",
  "Lisp",
  "Perl",
  "PHP",
  "Python",
  "Ruby",
  "Scala",
  "Scheme"
  ];
  $( "#tk" ).autocomplete({
    source: availableTags
  });
} );