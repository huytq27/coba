$(document).ready(function () {
    $('.slide-header')
        .not(".slick-intialized")
        .slick({
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 1,
            prevArrow: ".site-slider .slider-btn .prev",
            nextArrow: ".site-slider .slider-btn .next",
        });
    $('.slide-services') 
    .not(".slick-intialized")
    .slick({
           slidesToShow: 3,
           slidesToScroll: 1,
           prevArrow: ".site-slide-services .slider-services-btn .prev",
            nextArrow: ".site-slide-services .slider-services-btn .next",
        });
});
/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
	var x = screen.width;
	if(x > 990){
  
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("nav-main").style.top = "0%";
  } else {
    document.getElementById("nav-main").style.top = "-100%";
  }
  prevScrollpos = currentScrollPos;
	}
}




