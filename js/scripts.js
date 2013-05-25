//Animations on load
$(document).ready(function(){
	$('.thumbnailcontainer').imagesLoaded(function(){
		$(".loading").hide();
		$(".thumbnailcontainer").eq(0).removeClass("loadanimation");
		setTimeout(function(){
			$(".thumbnailcontainer").eq(1).removeClass("loadanimation");
		}, 200);
		setTimeout(function(){
			$(".thumbnailcontainer").eq(2).removeClass("loadanimation");
		}, 400);
		setTimeout(function(){
			$(".thumbnailcontainer").eq(3).removeClass("loadanimation");
		}, 600);
		setTimeout(function(){
			$(".thumbnailcontainer").eq(4).removeClass("loadanimation");
		}, 800);
		setTimeout(function(){
			$(".thumbnailcontainer").eq(5).removeClass("loadanimation");
		}, 1000);
	});
});

//png fallback for svgs
$(document).ready(function(){
	function supportsSVG() {
		return !! document.createElementNS && !! document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;	
	}
	if (supportsSVG()) {
		document.documentElement.className += ' svg';
	} else {
		document.documentElement.className += ' no-svg';
		var imgs = document.getElementsByTagName('img'),
			dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}
});

// functions to make em's=vh(viewport height) if landscape, or vw's(viewport width) if portrait
$(document).ready(function(){
	var selector = $("nav, .socialmedia")//saves on run time
	var h = $(window).height()/100
	var w = $(window).width()/100
	if(w > h) {
		selector.css('font-size',h);
	} 
	else {
		selector.css('font-size',w);
	}
	selector.show();
});
$(window).resize(function(){
	var h = $(window).height()/100
	var w = $(window).width()/100
	if(w > h) {
		$('nav, .socialmedia').css('font-size',h);
	} 
	else {
		$('nav, .socialmedia').css('font-size',w);
	}
});

// nowrap and content spacing fix for browsers not supporting vh units
$(document).ready(function(){
	var height = $(window).height()/100;
	$('.thumbnailcontainer').css('width', (39.15*height));
});
$(window).resize(function(){
	var height = $(window).height()/100;
	$('.thumbnailcontainer').css('width', (39.15*height));
});

//popup window for about, services and contact
$(document).ready(function(){
	$(".windows").hide();//hide just incase display none doesnt work
});
$(document).ready(function(){
	var windows = $(".windows")
	$("#aboutclick").click(function(){
		if ($(".services, .contact").hasClass("openwindow")){
			$(".services, .contact").removeClass("openwindow");
			windows.show(0, function() {
				$(".about").addClass("openwindow");
			});
		}
		else if (windows.is(':visible')){
			$(".about").removeClass("openwindow");
			setTimeout(function(){
				windows.hide();
			},400);
		}
		else {
			windows.show(0, function() {
				$(".about").addClass("openwindow");
			});
		}
	});
	$("#servicesclick, .row1-2").click(function(){
		if ($(".about, .contact").hasClass("openwindow")){
			$(".about, .contact").removeClass("openwindow");
			windows.show(0, function() {
				$(".services").addClass("openwindow");
			});
		}
		else if (windows.is(':visible')){
			$(".services").removeClass("openwindow");
			setTimeout(function(){
				windows.hide();
			},400);
		}
		else {
			windows.show(0, function() {
				$(".services").addClass("openwindow");
			});
		}
	});
	$(".close").click(function(){
		$(".about, .services, .contact").removeClass("openwindow");
		setTimeout(function(){
			windows.hide();
		},400);
	});
});

// for scrollbar to work horizontally instead
$(function(){
	$("html, body").mousewheel(function(event, delta) {
		this.scrollLeft -= (delta * 20);
		event.preventDefault();
	});   
});

// popout gallery on thumbnail click
$(document).ready(function(){
	$('.popout').css('display', 'inline-block').hide();
	//because originally hidden with inline block
});

$('.thumbnailcontainer .top').click(function(){
	var clickedthumbnail = $(this);
	var clicked = clickedthumbnail.parent().next('.top');
	$('.popout').filter(":visible").stop().animate({
		width: 'hide',
		opacity: 'hide'
	}, 400);
	clicked.stop().animate({
		width: 'toggle',
		opacity: 'toggle'
	}, 400, function(){
		var w = $(window).width()
		if(w > 1300){
			$('body').scrollTo( clickedthumbnail, 400);
		} 
		else if(w > 900 && w < 1300){
			$('body').scrollTo( clickedthumbnail, 400, {over:0.5} );
		}
		else {
			$('body').scrollTo( clicked, 400);
		}
	});
});

$('.thumbnailcontainer .bottom').click(function() {
	var clickedthumbnail = $(this);
	var clicked = clickedthumbnail.parent().nextAll('.bottom').first().addClass('clicked');
	$('.popout').filter(":visible").stop().animate({
		width: 'hide',
		opacity: 'hide'
	}, 400);
	clicked.stop().animate({
		width: 'toggle',
		opacity: 'toggle'
	}, 400, function(){
		var w = $(window).width()
		if(w > 1300){
			$('body').scrollTo( clickedthumbnail, 400);
		} 
		else if(w > 900 && w < 1300){
			$('body').scrollTo( clickedthumbnail, 400, {over:0.5} );
		}
		else {
			$('body').scrollTo( clicked, 400);
		}
	});
});

/* close button for popout gallery */
$('.popoutclose').click(function(){
	$('.popout').filter(':visible').animate({
		width: 'hide',
		opacity: 'hide'
	}, 400);
});