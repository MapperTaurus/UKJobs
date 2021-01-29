$(document).ready(function () {
	$('.btn1').click(function () {
		$('.img1').css("marginLeft", "0");
	});
	$('.btn2').click(function () {
		$('.img1').css("marginLeft", "-20%");
	});
	$('.btn3').click(function () {
		$('.img1').css("marginLeft", "-40%");
	});
	$('.btn4').click(function () {
		$('.img1').css("marginLeft", "-60%");
	});
	$('a').click(function () {
		$(this).addClass('active').siblings()
			.removeClass('active');
	})
});
/*
Image Slider Button with Slideshow Animation - credits to "CodingNepal" https://www.youtube.com/watch?v=f__ykT47lBQ 
Used on the home page
*/