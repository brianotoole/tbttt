!function(){var e,n,s;if(e=document.getElementById("site-navigation"),e&&(n=e.getElementsByTagName("button")[0],"undefined"!=typeof n)){if(s=e.getElementsByTagName("ul")[0],"undefined"==typeof s)return void(n.style.display="none");-1===s.className.indexOf("nav-menu")&&(s.className+=" nav-menu"),n.onclick=function(){-1!==e.className.indexOf("toggled")?e.className=e.className.replace(" toggled",""):e.className+=" toggled"}}}(),function(){var e=navigator.userAgent.toLowerCase().indexOf("webkit")>-1,n=navigator.userAgent.toLowerCase().indexOf("opera")>-1,s=navigator.userAgent.toLowerCase().indexOf("msie")>-1;(e||n||s)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var e=document.getElementById(location.hash.substring(1));e&&(/^(?:a|select|input|button|textarea)$/i.test(e.tagName)||(e.tabIndex=-1),e.focus())},!1)}(),jQuery(function($){$(document).ready(function(){$window=$(window),$('section[data-type="background"]').each(function(){var e=$(this);$(window).scroll(function(){var n=-($window.scrollTop()/e.data("speed")),s="50% "+n+"px";e.css({backgroundPosition:s})})}),$('header[data-type="background"]').each(function(){var e=$(this);$(window).scroll(function(){var n=-($window.scrollTop()/e.data("speed")),s="50% "+n+"px";e.css({backgroundPosition:s})})})})}),document.createElement("article"),document.createElement("section"),function($){$.fn.jPushMenu=function(e){var n=$.extend({},$.fn.jPushMenu.defaultOptions,e);$("body").addClass(n.bodyClass),$(this).addClass("jPushMenuBtn"),$(this).click(function(){var e="",s="";return $(this).is("."+n.showLeftClass)?(e=".cbp-spmenu-left",s="toright"):$(this).is("."+n.showRightClass)?(e=".cbp-spmenu-right",s="toleft"):$(this).is("."+n.showTopClass)?e=".cbp-spmenu-top":$(this).is("."+n.showBottomClass)&&(e=".cbp-spmenu-bottom"),$(this).toggleClass(n.activeClass),$(e).toggleClass(n.menuOpenClass),$(this).is("."+n.pushBodyClass)&&$("body").toggleClass("cbp-spmenu-push-"+s),$(".jPushMenuBtn").not($(this)).toggleClass("disabled"),!1});var s={close:function(e){$(".jPushMenuBtn,body,.cbp-spmenu").removeClass("disabled active cbp-spmenu-open cbp-spmenu-push-toleft cbp-spmenu-push-toright")}};n.closeOnClickInside&&($(document).click(function(){s.close()}),$(".cbp-spmenu,.toggle-menu").click(function(e){e.stopPropagation()})),n.closeOnClickOutside&&($(document).click(function(){s.close()}),$(".cbp-spmenu,.toggle-menu").click(function(e){e.stopPropagation()})),n.closeOnClickLink&&$(".cbp-spmenu a").on("click",function(){s.close()})},$.fn.jPushMenu.defaultOptions={bodyClass:"cbp-spmenu-push",activeClass:"menu-active",showLeftClass:"menu-left",showRightClass:"menu-right",showTopClass:"menu-top",showBottomClass:"menu-bottom",menuOpenClass:"cbp-spmenu-open",pushBodyClass:"push-body",closeOnClickOutside:!0,closeOnClickInside:!0,closeOnClickLink:!0}}(jQuery),jQuery(function($){$(document).ready(function(){$(".toggle-menu").jPushMenu()})}),$("#member-login").click(function(){$("#loginform").toggleClass("open"),$("#member-login").toggleClass("open")});