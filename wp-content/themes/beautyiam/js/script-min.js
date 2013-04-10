/* Author: 

*/// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function(e){e("li.dropdown > a").addClass("dropdown-toggle");e("li.dropdown > a").attr("data-toggle","dropdown");e("a.dropdown-toggle").append('<b class="caret"></b>');e("#sg-tab a").click(function(){e("#support-group-details").slideDown()});e("#support-group-details span.close a").click(function(){e("#support-group-details").slideUp()});e(".landing .headline").show("slide",{direction:"left"},1e3)});