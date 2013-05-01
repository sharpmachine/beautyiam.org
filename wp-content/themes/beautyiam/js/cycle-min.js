/**
 * jQuery random background changer
 * @name Random Background Changer
 * @author Charles Harvey - http://www.charles-harvey.co.uk
 * @version 0.1
 * @date September 4 2009
 * @category jQuery plugin
 * @copyright (c) 2009 Charles Harvey
 */jQuery(document).ready(function(e){e.cycleThru={defaults:{delay:3e3}};e.fn.extend({cycleThru:function(t){var t=e.extend({},e.cycleThru.defaults,t);return this.each(function(){function o(){e("ul#"+r+" li:eq("+i+")").animate({opacity:"1"},400).animate({opacity:"1"},n).animate({opacity:"0"},400,function(){i==s?i=0:i++;o()})}var n=t.delay,r=e(this).attr("id"),i=0,s=e(this).children("li").length-1;o()})}})});