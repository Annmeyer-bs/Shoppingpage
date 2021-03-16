new	Swiper('.swiper-container',{
	navigation:{
		nextE1:'.swiper-button-next',
		prevE1:'.swiper-button-prev'
	},
	pagination:{
		el:'.swiper-pagination',
		clickable:true,
	},
	slidesPerView:4,
	spaceBetween:111,
	loop:true,
	autoplay:{
		delay:3000,
	},
	breakpoints:{
320:{
	slidesPerView:1,
	},	
480:{
	slidesPerView:3,
	},
992:{
	slidesPerView:4,
	}
	},
});
$(document).ready(function(){
	$('.slideyml').slick({
		dots:true,
		infinite: true,
		slidesToShow: 3,
		autoplay: true,
		autoplaySpeed: 2000,
		adaptiveHeight: true,
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		  ]
	});
  });