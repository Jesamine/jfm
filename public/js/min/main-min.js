!function(){function e(){i(),n(),t(),a(),o(),$(window).resize(function(){n(),a()}),s()}function t(){var e=document.querySelector("main"),t=e.className;if(!t){var o=document.getElementById("header");o.className+="red"}}function o(){$(".swipebox").swipebox()}function i(){$(document).ready(function(){var e=new slidebars;e.init(),$(".js-toggle-mobile-menu").on("click",function(t){t.stopPropagation(),t.preventDefault(),e.toggle("mobile-menu")}),$(document).on("click",".js-close-any",function(t){e.getActiveSlidebar()&&(t.preventDefault(),t.stopPropagation(),e.close())}),$(e.events).on("opening",function(e){$("[canvas]").addClass("js-close-any"),$(".overlay").css({opacity:"0.5",display:"block"})}),$(e.events).on("closing",function(e){$("[canvas]").removeClass("js-close-any"),$(".overlay").css({opacity:"0",display:"none"})})})}function n(){var e=[];$("[data-equal-height]").each(function(t,o){var i=$(o).attr("data-equal-height");jQuery.inArray(i,e)==-1&&e.push(i)}),$.each(e,function(e,t){var o=0;$('[data-equal-height="'+t+'"]').each(function(e,t){$(t).height("auto"),$(t).height()>o&&(o=$(t).height())}),$(window).width()>767&&$('[data-equal-height="'+t+'"]').height(o)})}function a(){var e=!1;$('[canvas="container"]').scroll(function(){if($(window).width()>767){var t=$('[canvas="container"]').scrollTop();t>=100?e&&(e=!1,$("header").stop().fadeIn(100),$("header").stop().animate({top:"0",height:"70px"},300),$("header").addClass("smallNav")):e||(e=!0,$("header").stop().fadeOut(100),$("header").stop().animate({height:"180px",overflow:"initial"},300),$("header").removeClass("smallNav"))}else $("header").css({height:"70px"})})}function s(){$(document).ready(function(){var e=$("#slide-recent");e.owlCarousel({navigation:!1,responsiveClass:!0,items:3,autoHeight:!0,itemsDesktoplarg:[1e3,2],itemsDesktop:[700,2],itemsDesktopSmall:[660,2],itemsTablet:[650,2],itemsMobile:[480,1]}),$(".next").click(function(){e.trigger("next.owl.carousel",[300])}),$(".prev").click(function(){e.trigger("prev.owl.carousel",[300])});var t=$("#slide-history");t.owlCarousel({navigation:!1,responsiveClass:!0,items:1,autoHeight:!0,itemsDesktoplarg:[1e3,1],itemsDesktop:[700,1],itemsDesktopSmall:[660,1],itemsTablet:[650,1],itemsMobile:[480,1]}),$(".next").click(function(){t.trigger("next.owl.carousel",[300])}),$(".prev").click(function(){t.trigger("prev.owl.carousel",[300])});var o=$("#slide-links");o.owlCarousel({navigation:!1,items:4,responsive:{480:{items:2},768:{items:3},1024:{items:4}}}),$(".next").click(function(){console.log("next"),o.trigger("next.owl.carousel",[300])}),$(".prev").click(function(){o.trigger("prev.owl.carousel",[300])})})}e(),$(document).ready(function(){$("#popup").length>0&&$("#popup").modal("show")})}();