$(document).ready(function(){
  $('.toggle').click(function(){
    $('#nav').toggleClass('open');
    $('.container-master').toggleClass('menu-open');
  });
});