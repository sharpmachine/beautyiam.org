/* Author: 

*/

// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function($) {
	
	// Forces WordPress to place nice with dropdowns
 	$("li.dropdown > a").addClass('dropdown-toggle');
	$("li.dropdown > a").attr('data-toggle','dropdown');
	$("a.dropdown-toggle").append('<b class="caret"></b>');

	$("#sg-tab span").click(function(){
		$("#support-group-details").slideDown();
		// $(".navbar").css("marginTop" , "130px");
	});

	$("#support-group-details span.close a").click(function(){
		$("#support-group-details").slideUp();
		// $(".navbar").css("marginTop" , "30px");
	});

	$("#headlines").show("slide", { direction: "left" }, 2000);

	//Classes Slider
	$(".slides-container2 a").hover(function(){
		$(".slide-bg").addClass("hide");
		$(".class-icon").addClass("hover");
	},
	function(){
		$(".slide-bg").removeClass("hide");
		$(".class-icon").removeClass("hover");
	});

	//Fitness slide
	$("#slide-classes1 a").hover(function(){
		$("#slide-classes1 h1").css("color", "#000");
		// $("img.layer-img").addClass("hide");
		$("img.layer-img").hide();
	},
	function(){
		$("#slide-classes1 h1").css("color", "#4d3c76");
		// $("img.layer-img").removeClass("hide");
		$("img.layer-img").show();
	});

	//Wellness slide
	$("#slide-classes2 a").hover(function(){
		$("li.white-bg").css("background-color", "#285775");
		$("#slide-classes2 h1").css("color", "#000");
		$("img.broccoli, img.lemon, img.tomatoes").addClass("hide");
	},
	function(){
		$("li.white-bg").css("background-color", "#fff");
		$("#slide-classes2 h1").css("color", "#285775");
		$("img.broccoli, img.lemon, img.tomatoes").removeClass("hide");
	});

	//Spirit Care slide
	$("#slide-classes3 a").hover(function(){
		$("#slide-classes3 h1").css("color", "#000");
		$("#slide-classes3 h3, #slide-classes3 a, .nav li a").css("text-shadow", "1px 1px 1px rgba(0,0,0,0.6)");
	},
	function(){
		$("#slide-classes3 h1").css("color", "#fcecb1");
		$("#slide-classes3 h3, #slide-classes3 a, .nav li a").css("text-shadow", "none");
	});

	//Spirit Care slide
	$("#slide-classes4 a").hover(function(){
		$("#slide-classes4 h1").css({"color": "#000", "text-shadow": "none"});
	},
	function(){
		$("#slide-classes4 h1").css({"color": "#d086a7", "text-shadow": "1px 1px 1px rgba(0,0,0,0.8)"});
	});

	//	Secret Menu
	var nav_container = $("#secret-nav");
	var nav = $("#secret-nav nav");
	var top_spacing = 35;
	var waypoint_offset = 400;

	nav_container.waypoint({
		handler: function(event, direction) {

			if (direction == 'down') {

				nav_container.css({'height':nav.outerHeight() });
				nav.stop().addClass("sticky").css("top",-nav.outerHeight()).animate({"top":top_spacing});

			} else {

				nav_container.css({'height':'auto' });
				nav.stop().removeClass("sticky").css("top",nav.outerHeight()+waypoint_offset).animate({"top":""});
			}

		},
		offset: function() {
			return -nav.outerHeight()-waypoint_offset;
		}
	});

	//Too cycle
	$("ul#testy").cycleThru({delay: 1000});

	$('form.wpcf7-form').addClass('form-inline');

	 $(".too").jCarouselLite({
        vertical: true,
        auto: 1000,
        // visible: 1
    });

	 $('#models-slides').superslides({
			play: 7000,
			slide_easing: 'easeInOutCubic',
			slide_speed: 900,
			pagination: true,
			hashchange: false,
			scrollable: true,
			classes: {
				nav: 'slides-navigation',
				container: 'slides-container',
				pagination: 'slides-pagination'
			}
		});

		$('#featured-classes-slides').superslides({
			play: false,
			slide_easing: 'easeInOutCubic',
			slide_speed: 800,
			pagination: true,
			hashchange: false,
			scrollable: true,
			classes: {
				preserve: 'preserve',
				nav: 'slides-navigation2',
				container: 'slides-container2',
				pagination: 'slides-pagination2'
			}

		});

		$('#classes-menu').onePageNav();
		$('.down').onePageNav();
});