/* Author: 

*/

// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function($) {
	
	// Forces WordPress to place nice with dropdowns
 	$("li.dropdown > a").addClass('dropdown-toggle');
	$("li.dropdown > a").attr('data-toggle','dropdown');
	$("a.dropdown-toggle").append('<b class="caret"></b>');

	$("#sg-tab a").click(function(){
		$("#support-group-details").slideDown();
		// $(".navbar").css("marginTop" , "130px");
	});

	$("#support-group-details span.close a").click(function(){
		$("#support-group-details").slideUp();
		// $(".navbar").css("marginTop" , "30px");
	});

	$("#headlines").show("slide", { direction: "left" }, 2000);

	// $("header").fadeIn();
	
});























