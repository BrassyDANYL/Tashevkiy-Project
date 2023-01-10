$('.close-form').click(function () {
   $('.wpcf7-form').css("transition", "0.5s");
   $('.wpcf7-form').css("margin-top", "-1000px");
});   
$('.header-button').click(function(){
$('.wpcf7-form').css("transition", "0.5s");
$('.wpcf7-form').css("margin-top", "0px");
});
$(document).ready(function(){
  $('.poster').slick({
	infinite: true,
    slidesToShow: 1,
	 autoplay: true,
	speed: 500,
  	fade: true,
	arrows: false,
	adaptiveHeight: true
	  
  });
});