/* Author: 

*/// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function(e){e("li.dropdown > a").addClass("dropdown-toggle");e("li.dropdown > a").attr("data-toggle","dropdown");e("a.dropdown-toggle").append('<b class="caret"></b>');e("#sg-tab span").click(function(){e("#support-group-details").slideDown()});e("#support-group-details span.close a").click(function(){e("#support-group-details").slideUp()});e("#headlines").show("slide",{direction:"left"},2e3);e(".slides-container2 a").hover(function(){e(".slide-bg").addClass("hide");e(".class-icon").addClass("hover")},function(){e(".slide-bg").removeClass("hide");e(".class-icon").removeClass("hover")});e("#slide-classes1 a").hover(function(){e("#slide-classes1 h1").css("color","#000");e("img.layer-img").hide()},function(){e("#slide-classes1 h1").css("color","#4d3c76");e("img.layer-img").show()});e("#slide-classes2 a").hover(function(){e("li.white-bg").css("background-color","#285775");e("#slide-classes2 h1").css("color","#000");e("img.broccoli, img.lemon, img.tomatoes").addClass("hide")},function(){e("li.white-bg").css("background-color","#fff");e("#slide-classes2 h1").css("color","#285775");e("img.broccoli, img.lemon, img.tomatoes").removeClass("hide")});e("#slide-classes3 a").hover(function(){e("#slide-classes3 h1").css("color","#000");e("#slide-classes3 h3, #slide-classes3 a, .nav li a").css("text-shadow","1px 1px 1px rgba(0,0,0,0.6)")},function(){e("#slide-classes3 h1").css("color","#fcecb1");e("#slide-classes3 h3, #slide-classes3 a, .nav li a").css("text-shadow","none")});e("#slide-classes4 a").hover(function(){e("#slide-classes4 h1").css({color:"#000","text-shadow":"none"})},function(){e("#slide-classes4 h1").css({color:"#d086a7","text-shadow":"6px 6px 5px rgba(0,0,0,0.4)"})});var t=e("#secret-nav"),n=e("#secret-nav nav"),r=35,i=400;t.waypoint({handler:function(e,s){if(s=="down"){t.css({height:n.outerHeight()});n.stop().addClass("sticky").css("top",-n.outerHeight()).animate({top:r})}else{t.css({height:"auto"});n.stop().removeClass("sticky").css("top",n.outerHeight()+i).animate({top:""})}},offset:function(){return-n.outerHeight()-i}});e("ul#testy").cycleThru({delay:1e3});e("form.wpcf7-form").addClass("form-inline");e(".too").jCarouselLite({vertical:!0,auto:1e3})});