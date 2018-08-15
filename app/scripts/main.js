$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

		}
	});
});


$(document).on('ready', function() {

  $('.center').slick({
    infinite: true,
    centerMode: true,
    slidesToShow: 2,
    autoplay: true,
  	autoplaySpeed: 2000,
    slidesToScroll: 1
  });

});
