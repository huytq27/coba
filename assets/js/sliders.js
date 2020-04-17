var prevScrollpos = window.pageYOffset;
  var x;

$(document).ready(function () {
  x = screen.width


  $('.slide-header')
    .not(".slick-intialized")
    .slick({
      dots: true,
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 1,
      prevArrow: ".site-slider .prev",
      nextArrow: ".site-slider .next",
    });
  if (x > 567 && x <= 768) {
    $(".regular").slick({

      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1
    });
  }else if(x <= 567){
    $(".regular").slick({

      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  }else{
    $(".regular").slick({

      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1
    });
  }


});
/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// 	var x = screen.width;
// 	if(x > 991){

//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("nav-main").style.top = "0%";
//   } else {
//     document.getElementById("nav-main").style.top = "-100%";
//   }
//   prevScrollpos = currentScrollPos;
// 	}
// }




