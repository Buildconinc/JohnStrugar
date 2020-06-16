var owl1 = $('#owl1');
owl1.owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:3500,
    autoplayHoverPause:true,
    nav:true,
		navText: ["<img src='assets/images/icons/arrowLeft.png'>","<img src='assets/images/icons/arrowRight.png''>"],
    dots:true,
    animateOut: 'fadeOut',
});


var owl2 = $('#owl2');
owl2.owlCarousel({
    // items: 2,
		stagePadding: 40,
    loop:false,
    autoplay:false,
    nav:true,
		navText: ["<img src='assets/images/icons/arrowLeft.png'>","<img src='assets/images/icons/arrowRight.png''>"],
    dots:false,
		responsiveClass:true,
    responsive:{
        0:{
						items:1,
						nav: true
        },
        960:{
            items:2,
            nav:true
        },
        1440:{
            items:2,
            nav:true
				},
				1680:{
					items:2,
					nav:true
			},
    }
});