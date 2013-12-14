$(document).ready(function() {
	$('ul.menu').superfish({
		delay:       800,                            // one second delay on mouseout
		animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
		speed:       'normal',                          // faster animation speed
		autoArrows:  false,                           // disable generation of arrow mark-up
		dropShadows: false                            // disable drop shadows
	});

	$('.menu ul li')
		.hover(function(){
			th=$(this).find('a');
				th.stop().animate({
					paddingLeft:'25px'},500,'easeOutBounce')
				},
				function(){
					th.stop().animate({
					paddingLeft:'15px'},500,'easeOutBounce')}
				);

	$('.menu li a.item')
		.live('mouseenter',function(){
			$(this)
				.stop()
				.animate({
					paddingTop:12,
					marginBottom:-12,
					top:-12
				},{
					easing:'easeOutBounce'
				})
		})
		.live('mouseleave',function(){
			$(this)
				.stop()
				.animate({
					paddingTop:0,
					marginBottom:0,
					top:0
				},{
					easing:'easeOutBounce'
				})
		})

	$(".gallery .jCarouselLite").jCarouselLite({
		btnNext: ".gallery .next",
		btnPrev: ".gallery .prev",
		scroll: 1,
		mouseWheel: true,
        auto: 6000,

        speed: 600,
        easing: 'easeOutExpo',

        vertical: false,
        circular: true,
        visible: 3,
        start: 0
	});

	$(".box div").click(function(){
    	window.location=$(this).find("a").attr("href");
		return false;
	});

	$(".box").hover(function(){
		$(this).addClass("alt");
		Cufon.refresh();
	}, function(){
		$(this).removeClass("alt");
		Cufon.refresh();
	});

	$('.list-services li a').hover(function(){
			$(this).stop(true,false).animate({marginTop:"-8px"}, {easing:"easeOutBounce", duration: 500});
			$(this).css('paddingBottom','8px');
		},function(){
			$(this).stop(true,false).animate({marginTop:"0"}, {easing:"easeOutBounce", duration: 500});
			$(this).css('paddingBottom','0');
	});

});
