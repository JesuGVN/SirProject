$(document).ready(function(){
	$('.slider').slick({
		slidesToShow:1,
		slidesToScroll:1,
		arrows:false,
		autoplay:true,
		autoplaySpeed:1000,
		speed:1000,
	});
	$('.slider__cities').slick({
		slidesToShow:3,
		slidesToScroll:3,
		arrows:false,
		infinite:true,
		centerMode:true,
		centerPadding:"0px",
		speed:1000,
		autoplay:true,
		autoplaySpeed:1000,
		responsive: [{
			breakpoint:767,
			settings: {
				slidesToShow:1,
				centerMode:false,
				slidesToScroll:2,
				centerPadding:"10px",
			}
		}]
	});
});


$(document).ready(function() {
	$('.header__burger').click(function(event) {
		$('.header__burger,.header__menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
});