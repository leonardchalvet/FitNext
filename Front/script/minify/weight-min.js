$(window).on("load",function(){if($("#section-cover-1").length){function e(){$("#section-cover-1 .container-illu .illu-1 .first-line").addClass("active"),setTimeout(function(){$("#section-cover-1 .container-illu .illu-1 .first-rect").addClass("active")},750),setTimeout(function(){$("#section-cover-1 .container-illu .illu-1 .second-line").addClass("active")},1250),setTimeout(function(){$("#section-cover-1 .container-illu .illu-1 .second-rect").addClass("active")},2250),setTimeout(function(){$("#section-cover-1 .container-illu .illu-1").removeClass("active")},5500),setTimeout(function(){$("#section-cover-1 .container-illu .illu-2").addClass("active"),$("#section-cover-1 .container-illu .illu-1 .first-line").removeClass("active"),$("#section-cover-1 .container-illu .illu-1 .first-rect").removeClass("active"),$("#section-cover-1 .container-illu .illu-1 .second-line").removeClass("active"),$("#section-cover-1 .container-illu .illu-1 .second-rect").removeClass("active")},5750),setTimeout(function(){$("#section-cover-1 .container-illu .illu-2 .first-line").addClass("active")},6e3),setTimeout(function(){$("#section-cover-1 .container-illu .illu-2 .first-rect").addClass("active")},6750),setTimeout(function(){$("#section-cover-1 .container-illu .illu-2 .second-line").addClass("active")},7250),setTimeout(function(){$("#section-cover-1 .container-illu .illu-2 .second-rect").addClass("active")},8250),setTimeout(function(){$("#section-cover-1 .container-illu .illu-2").removeClass("active")},11500),setTimeout(function(){$("#section-cover-1 .container-illu .illu-1").addClass("active"),$("#section-cover-1 .container-illu .illu-2 .first-line").removeClass("active"),$("#section-cover-1 .container-illu .illu-2 .first-rect").removeClass("active"),$("#section-cover-1 .container-illu .illu-2 .second-line").removeClass("active"),$("#section-cover-1 .container-illu .illu-2 .second-rect").removeClass("active")},11750)}setTimeout(function(){e(),setInterval(function(){e()},12e3)},2500)}if($("#section-logos").length){let e=[1,2,3,4,5];for(let t=0;t<e.length;t++)$("#section-logos .container-logo .logo:nth-child("+(t+1)+") img:nth-child("+e[t]+")").addClass("active");setInterval(function(){let t=Math.floor(Math.random()*$("#section-logos .container-logo .logo").length+1),i=1,o=-1;do{i=Math.floor(Math.random()*$("#section-logos .container-logo .logo:nth-child(1) img").length+1),o=jQuery.inArray(i,e)}while(-1!=o);e[t-1]=i,$("#section-logos .container-logo .logo img").removeClass("active");for(let t=0;t<e.length;t++)$("#section-logos .container-logo .logo:nth-child("+(t+1)+") img:nth-child("+e[t]+")").addClass("active")},3e3)}function t(e,t,i,o,n){i=t+" "+i,o=t+" "+o,n=t+" "+n;var l=0,c=$(i).length,s=1,a;function r(e){if("next"===e?s++:"prev"===e&&s--,s<=c&&s>=1){if("next"===e){function t(e){$(e+":not(.active)").removeClass("left").addClass("right"),setTimeout(function(){setTimeout(function(){$(e+".active").removeClass("active").addClass("left"),$(e+":nth-child("+s+")").addClass("active").removeClass("right left"),setTimeout(function(){$(e+":not(.active)").removeClass("left").addClass("right")},0)},0)},0)}t(i),t(o)}else if("prev"===e){function n(e){$(e+":not(.active)").removeClass("right").addClass("left"),setTimeout(function(){setTimeout(function(){$(e+".active").removeClass("active").addClass("right"),$(e+":nth-child("+s+")").addClass("active").removeClass("right left"),setTimeout(function(){$(e+":not(.active)").removeClass("right").addClass("left")},0)},0)},0)}n(i),n(o)}setTimeout(function(){$(i).removeClass("displayNone"),$(o).removeClass("displayNone")},1e3),clearInterval(d),d=setInterval(function(){r("next")},l)}else s<1?(s=c+1,r(e)):(s=0,r(e))}function u(){$(i+":nth-child(1)").addClass("active"),$(i+".active").nextAll().addClass("right"),$(i+":last-child").removeClass("right").addClass("left"),$(o+":nth-child(1)").addClass("active"),$(o+".active").nextAll().addClass("right"),$(o+":last-child").removeClass("right").addClass("left")}let v=!1;$(n+":nth-child(1)").click(function(){v||(clearInterval(d),r("prev"),v=!0,setTimeout(function(){v=!1},1e3))}),$(n+":nth-child(2)").click(function(){v||(clearInterval(d),r("next"),v=!0,setTimeout(function(){v=!1},1e3))}),u(),l=e;var d=setInterval(function(){r("next")},l)}if($("#common-section-quote-1").length){let e=!1;$window=$(window),$window.scroll(function(){let i=$window.height();!e&&$window.scrollTop()>=$("#common-section-quote-1").offset().top-i&&(t(7e3,"#common-section-quote-1",".container-img .el",".container-text .el",".container-nav .arrow"),e=!0)})}if($("#common-section-quote-2").length){let e=!1;$window=$(window),$window.scroll(function(){let i=$window.height();!e&&$window.scrollTop()>=$("#common-section-quote-2").offset().top-i&&(t(7e3,"#common-section-quote-2",".container .video .el",".container-quote .container-el .el",".container-nav .arrow"),e=!0)})}});