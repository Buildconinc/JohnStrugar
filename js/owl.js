var owl1 = $('#owl1');
owl1.owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:3500,
    autoplayHoverPause:true,
    nav:false,
		navText: ["<img src='assets/images/icons/arrowLeft.png'>","<img src='assets/images/icons/arrowRight.png''>"],
    dots:true,
		animateOut: 'fadeOut',
		responsiveClass:true,
    responsive:{
        0:{
						nav: false,
        },
        960:{
            nav: true
        },
    }
});


var owl2 = $('#owl2');
owl2.owlCarousel({
    loop:false,
		autoplay:false,
		navText: ["<img src='assets/images/icons/arrowLeft.png'>","<img src='assets/images/icons/arrowRight.png''>"],
    dots:false,
		responsiveClass:true,
    responsive:{
        0:{
						items:1,
						nav: false,
						dots: true,
						dotsClass: 'lines',
						dotClass: 'line',
						stagePadding: 0,
        },
        650:{
            items:2,
						nav:false,
						dots: true,
						dotsClass: 'lines',
						dotClass: 'line',
						// navText: ["<img src='assets/images/icons/arrowLeft.png'>","<img src='assets/images/icons/arrowRight.png''>"],
						stagePadding: 0,
				},
				900:{
					items:2,
					nav:true,
					// navText: ["<img src='assets/images/icons/arrowLeft.png'>","<img src='assets/images/icons/arrowRight.png''>"],
					stagePadding: 40,
				},
        1440:{
            items:2,
						nav:true,
						stagePadding: 40,
				},
				1680:{
					items:2,
					nav:true,
					// navText: ["<img src='assets/images/icons/arrowLeft.png'>","<img src='assets/images/icons/arrowRight.png''>"],
					stagePadding: 40,
			},
    }
});
var owl3 = $('#owl3');
owl3.owlCarousel({
    loop:false,
    autoplay:false,
		dotsClass: 'lines',
		dotClass: 'line',
		dots:true,
		responsiveClass:true,
    responsive:{
        0:{
						items:1,
        },
        600:{
            items:2,
        },
        960:{
            items:3,
				},
				1680:{
					items:3,
			},
    }
});