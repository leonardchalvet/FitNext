$(window).on("load",function(){let t=document.querySelector("#section-cover .container-illu .video"),e=new Vimeo.Player(t);e.play(),$("#section-cover p").addClass("bottom"),setTimeout(function(){$("#section-cover p").addClass("active")},1800);let n=!1;setInterval(function(){e.getCurrentTime().then(function(t){t>=8.25?n||($("#section-cover p").removeClass("active").addClass("bottom"),setTimeout(function(){$("#section-cover p").removeClass("bottom").addClass("none")},500),setTimeout(function(){$("#section-cover p").removeClass("none bottom")},750),setTimeout(function(){$("#section-cover p").addClass("active")},1e3),n=!0):t<1&&(n=!1,$("#section-cover p").addClass("anim"))})},50);let o=[1,2,3];for(let t=0;t<o.length;t++)$("#section-cover .container-logo .logo:nth-child("+(t+1)+") img:nth-child("+o[t]+")").addClass("active");setInterval(function(){let t=Math.floor(Math.random()*$("#section-cover .container-logo .logo").length+1),e=1,n=-1;do{e=Math.floor(Math.random()*$("#section-cover .container-logo .logo:nth-child(1) img").length+1),n=jQuery.inArray(e,o)}while(-1!=n);o[t-1]=e,$("#section-cover .container-logo .logo img").removeClass("active");for(let t=0;t<o.length;t++)$("#section-cover .container-logo .logo:nth-child("+(t+1)+") img:nth-child("+o[t]+")").addClass("active")},3e3),$("#section-list .container-text ul.container-nav li").click(function(){$("#section-list .container-text ul.container-nav").removeClass("li-1 li-2 li-3"),$(this).parent().addClass("li-"+($(this).index()+1)),$("body").animate({scrollTop:$(".container-cards .card:nth-child("+($(this).index()+1)+")").offset().top-150},500)}),$window=$(window);let i=!1;function l(){let t=$window.height();$("#section-list .container-cards .card").each(function(){if($window.scrollTop()>=$(this).offset().top-500&&$window.scrollTop()<=$(this).offset().top+($(this).height()-350)){let t=$(this).index()+1;i||$("#section-list .container-text .container-el .el:nth-child("+t+")").hasClass("show")||(i=!0,$("#section-list .container-text .container-el .el").removeClass("show"),setTimeout(function(){$("#section-list .container-text .container-el .el").removeClass("displayBlock").addClass("displayNone"),$("#section-list .container-text .container-el .el:nth-child("+t+")").addClass("displayBlock").removeClass("displayNone"),$("#section-list .container-text ul.container-nav").removeClass("li-1 li-2 li-3").addClass("li-"+t)},200),setTimeout(function(){$("#section-list .container-text .container-el .el:nth-child("+t+")").addClass("show"),i=!1},250))}})}function s(t,e,n,o){n=e+" "+n,o=e+" "+o;var i=0,l=$(n).length,s=1,a;function c(t){"next"===t?s++:"prev"===t&&s--,s<=l&&s>=1?($(n+".active").removeClass("active").addClass("hide"),$(n+":nth-child("+s+")").addClass("active"),setTimeout(function(){$(n+".hide").removeClass("hide")},1e3),clearInterval(d),d=setInterval(function(){c("next")},i)):s<1?(s=l,c()):(s=1,c())}let r=!1;$(o).click(function(){r||(clearInterval(d),c("next"),r=!0,setTimeout(function(){r=!1},900))}),i=t;var d=setInterval(function(){c("next")},i)}$window.scroll(function(){l()}),setTimeout(function(){l()},1e3),$("#section-list .container-text .container-el .el:first-child").addClass("displayBlock show"),$("#section-list .container-text .container-el .el:not(:first-child)").addClass("displayNone"),$("#section-list .container-text .container-nav").addClass("li-1");let a=!1;function c(t,e,n,o){n=e+" "+n,o=e+" "+o;var i=0,l=$(n).length,s=1,a;function c(t){"next"===t?s++:"prev"===t&&s--,s<=l&&s>=1?("next"===t?($(n+":not(.active)").removeClass("left").addClass("right displayNone"),setTimeout(function(){$(n).removeClass("displayNone"),setTimeout(function(){$(n+".active").removeClass("active").addClass("left"),$(n+":nth-child("+s+")").addClass("active").removeClass("right left"),setTimeout(function(){$(n+":not(.active)").removeClass("left").addClass("right displayNone")},400)},50)},50)):"prev"===t&&($(n+":not(.active)").removeClass("right").addClass("left displayNone"),setTimeout(function(){$(n).removeClass("displayNone"),setTimeout(function(){$(n+".active").removeClass("active").addClass("right"),$(n+":nth-child("+s+")").addClass("active").removeClass("right left"),setTimeout(function(){$(n+":not(.active)").removeClass("right").addClass("left displayNone")},400)},50)},50)),setTimeout(function(){$(n).removeClass("displayNone")},1e3),clearInterval(h),h=setInterval(function(){c("next")},i)):s<1?(s=l+1,c(t)):(s=0,c(t))}function r(){$(n+":nth-child(1)").addClass("active"),$(n+".active").nextAll().addClass("right"),$(n+":last-child").removeClass("right").addClass("left")}let d=!1;$(o+":nth-child(1)").click(function(){d||(clearInterval(h),c("prev"),d=!0,setTimeout(function(){d=!1},1e3))}),$(o+":nth-child(2)").click(function(){d||(clearInterval(h),c("next"),d=!0,setTimeout(function(){d=!1},1e3))}),r(),i=t;var h=setInterval(function(){c("next")},i)}$window=$(window),$window.scroll(function(){let t=$window.height();!a&&$window.scrollTop()>=$("#section-photo").offset().top-t&&(s(7e3,"#section-photo",".el",".container-nav"),a=!0)}),$("#section-photo .el:nth-child(1)").addClass("active");let r=!1;$window=$(window),$window.scroll(function(){let t=$window.height();!r&&$window.scrollTop()>=$("#section-photo").offset().top-t&&(c(7e3,"#section-quote",".container-el .el",".container-nav .arrow"),r=!0)})});