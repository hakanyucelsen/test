function plugins() {
    $('.full-screen .fullscreenbanner').revolution({
        delay: 9000,
        startwidth: $(document).height(),
        fullScreen: 'on'
    });
}

function homePage () {
	var sayi = $('.ease-section').length;
	for (var i = 1; i < sayi; i++) {
		$('.ease-section:eq('+i+')').css({
			top: $(window).height()
		});
	};

	var sure = 2000;
	var effect = 'easeOutQuart'
	$('.menu ul li').click(function() {
		$('.home').removeClass('active');
		$('.menu ul li').removeClass('active');
		$(this).addClass('active');
		var link = $(this).find('a').data('link');
		
		$('.ease-section[data-link="'+(link + 1)+'"]').animate({
			top: ($(window).height())
		}, sure, effect);
		
		$('.ease-section[data-link="'+link+'"]').animate({
			top: 0
		}, sure, effect);

		$('.ease-section[data-link="'+link+'"] .text-bg').animate({
			top: 100
		}, sure, effect);

		if (link != 1) {
			$('.ease-section[data-link="'+(link - 1)+'"]').animate({
				top: -($(window).height())
			}, sure, effect);
		}

		$('.ease-section[data-link="'+link+'"] .text-bg').animate({
			top: 100
		}, 3000, 'easeOutQuart');

	});

	$('.home').click(function() {
		$('.ease-section[data-link="2"] , .ease-section[data-link="3"]').animate({
			top: ($(window).height())
		}, sure, effect);

		$('.ease-section[data-link="1"]').animate({
			top: 0
		}, sure, effect);

		$('.menu ul li').removeClass('active');
		$(this).addClass('active');
	});
}



$(document).ready(function() {
	plugins();
	homePage();
});

$(window).load(function() {
    
});

$(window).resize(function() {});
