$(function(){$("a.page-scroll").bind("click",function(l){var s=$(this);$("html, body").stop().animate({scrollTop:$(s.attr("href")).offset().top-50},1250,"easeInOutExpo"),l.preventDefault()}),$(".nav-toggle").click(function(){$("nav ul").toggleClass("on"),$(".span-1").toggleClass("x-1"),$(".span-2").toggleClass("x-2"),$(".span-3").toggleClass("x-3")}),$("a, section, footer").on("click",function(){$("nav ul").removeClass("on"),$(".span-1").removeClass("x-1"),$(".span-2").removeClass("x-2"),$(".span-3").removeClass("x-3")}),$(window).scroll(function(){var l=$(this).scrollTop();$(".logo").css({transform:"translate(0px, "+l/4+"%)"}),l>=100?($("nav").addClass("scrolled"),$("nav ul").addClass("ul-scrolled")):($("nav").removeClass("scrolled"),$("nav ul").removeClass("ul-scrolled"))}),$(".lyrics-carousel").flickity({cellAlign:"left",contain:!0,arrowShape:{x0:10,x1:60,y1:50,x2:60,y2:40,x3:20}}),$(".photos-carousel").flickity({wrapAround:!0,imagesLoaded:!0,percentPosition:!1,initialIndex:2,arrowShape:{x0:15,x1:60,y1:45,x2:70,y2:45,x3:25}})});