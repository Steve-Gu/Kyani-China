<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="zh-CN" prefix="og: http://ogp.me/ns#">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="show-menu-auto-arrows" content="0" />
<meta name="show-menu-drop-shadows" content="1" />
<meta name="google-site-verification" content="Bu7FHKTF6SSqHfhDc-Tj5NHjDls4SFMwYfbcwu9L2IE" />
<meta name="msvalidate.01" content="EAB7E791BFBF8B6A1EAFB4B5DA973C7A" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type='text/javascript' src='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/cbox/js/jquery.colorbox.js'></script>
<script type="text/javascript" src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/coinslider/coin-slider.min.js"></script>

<script type="text/javascript">
function H$(i) {return document.getElementById(i)}
function H$$(c, p) {return p.getElementsByTagName(c)}
var slider = function () {
	function init (o) {
		this.id = o.id;
		this.at = o.auto ? o.auto : 3;
		this.o = 0;
		this.pos();
	}
	init.prototype = {
		pos : function () {
			clearInterval(this.__b);
			this.o = 0;
			var el = H$(this.id), li = H$$('li', el), l = li.length;
			var _t = li[l-1].offsetHeight;
			var cl = li[l-1].cloneNode(true);
			cl.style.opacity = 0; cl.style.filter = 'alpha(opacity=0)';
			el.insertBefore(cl, el.firstChild);
			el.style.top = -_t + 'px';
			this.anim();
		},
		anim : function () {
			var _this = this;
			this.__a = setInterval(function(){_this.animH()}, 20);
		},
		animH : function () {
			var _t = parseInt(H$(this.id).style.top), _this = this;
			if (_t >= -1) {
				clearInterval(this.__a);
				H$(this.id).style.top = 0;
				var list = H$$('li',H$(this.id));
				H$(this.id).removeChild(list[list.length-1]);
				this.__c = setInterval(function(){_this.animO()}, 20);
				//this.auto();
			}else {
				var __t = Math.abs(_t) - Math.ceil(Math.abs(_t)*.07);
				H$(this.id).style.top = -__t + 'px';
			}
		},
		animO : function () {
			this.o += 2;
			if (this.o == 100) {
				clearInterval(this.__c);
				H$$('li',H$(this.id))[0].style.opacity = 1;
				H$$('li',H$(this.id))[0].style.filter = 'alpha(opacity=100)';
				this.auto();
			}else {
				H$$('li',H$(this.id))[0].style.opacity = this.o/100;
				H$$('li',H$(this.id))[0].style.filter = 'alpha(opacity='+this.o+')';
			}
		},
		auto : function () {
			var _this = this;
			this.__b = setInterval(function(){_this.pos()}, this.at*1000);
		}
	}
	return init;
}();
</script>

<script type="text/javascript">
	$(document).ready(function(){
	//Examples of how to assign the ColorBox event to elements
	$(".group1").colorbox({rel:'group1'});
	$(".group2").colorbox({rel:'group2', transition:"fade"});
	$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
	$(".group4").colorbox({rel:'group4', slideshow:true});
	$(".ajax").colorbox();
	$(".youtube").colorbox({iframe:true, innerWidth:"80%", innerHeight:"70%"});
	$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	$(".inline").colorbox({inline:true, width:"50%", height:"100%"});
	$(".callbacks").colorbox({
	onOpen:function(){ alert('onOpen: colorbox is about to open'); },
	onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
	onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
	onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
	onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
	});
	//Example of preserving a JavaScript event for inline calls.
	$("#click").click(function(){
	$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
	return false;
	});
	}); 
</script><link rel="stylesheet" href="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/cbox/colorbox.css" />
<link rel="pingback" href="http://www.hykyani.com/hykyani.com/xmlrpc.php" />
<link rel="stylesheet" href="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/coinslider/coin-slider-styles.css" type="text/css" />
<link rel="icon" href="http://www.hykyani.com/hykyani.com/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://www.hykyani.com/hykyani.com/favicon.ico" type="image/x-icon">


<!--[if IE 6]>
    <script  type="text/javascript" src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/DD_belatedPNG_0.0.8a-min.js"></script>
    <script  type="text/javascript">
    // <![CDATA[
	DD_belatedPNG.fix('.pngfix, img, #home-page-content li, #page-content li, #bottom li, #footer li, #recentcomments li span');
    // ]]>
    </script>
<![endif]-->


<!-- This site is optimized with the Yoast WordPress SEO plugin v1.4.4 - http://yoast.com/wordpress/seo/ -->
<title>伊格纳罗博士的著作《一氧化氮让你远离心脑血管病》|Kyani金三角健康俱乐部 - 助您体验新的人生！</title>
<meta name="description" content="在尼多乐的介绍中已经提及到一氧化氮对心脑血管疾病的强大作用，现在我向大家介绍一本书——《一氧化氮让你远离心脑血管病》，它的作者是“伟哥之父”伊格纳罗博士，非常有权威。该书深入浅出地描述了一氧化氮对心脑血管病的功效及理论，适合我们所有人阅读。本文最后部分是对这本书的几段摘录，你可以点击自己感兴趣的内容进行阅读，了解一氧化氮的魅力。"/>
<meta name="keywords" content="一氧化氮,功效,作用,产品"/>
<link rel="canonical" href="http://www.hykyani.com/archives/2125" />
<meta property='og:locale' content='zh_CN'/>
<meta property='og:title' content='伊格纳罗博士的著作《一氧化氮让你远离心脑血管病》|Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:description' content='在尼多乐的介绍中已经提及到一氧化氮对心脑血管疾病的强大作用，现在我向大家介绍一本书——《一氧化氮让你远离心脑血管病》，它的作者是“伟哥之父”伊格纳罗博士，非常有权威。该书深入浅出地描述了一氧化氮对心脑血管病的功效及理论，适合我们所有人阅读。本文最后部分是对这本书的几段摘录，你可以点击自己感兴趣的内容进行阅读，了解一氧化氮的魅力。'/>
<meta property='og:url' content='http://www.hykyani.com/archives/2125'/>
<meta property='og:site_name' content='Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:type' content='article'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/28b5efb9.jpg'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg'/>
<!-- / Yoast WordPress SEO plugin. -->

<link rel='stylesheet' id='rs-settings-css'  href='http://www.hykyani.com/hykyani.com/wp-content/plugins/revslider/rs-plugin/css/settings.css?ver=3.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='rs-captions-css'  href='http://www.hykyani.com/hykyani.com/wp-content/plugins/revslider/rs-plugin/css/captions.css?ver=3.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-pagenavi-css'  href='http://www.hykyani.com/hykyani.com/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' type='text/css' media='all' />
<link rel='stylesheet' id='ubermenu-basic-css'  href='http://www.hykyani.com/hykyani.com/wp-content/plugins/ubermenu/styles/basic.css?ver=2.2.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='reset-css'  href='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/styles/common-css/reset.css?ver=1.0' type='text/css' media='screen' />
<link rel='stylesheet' id='text-css'  href='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/styles/style1/css/text.css?ver=1.0' type='text/css' media='screen' />
<link rel='stylesheet' id='grid-960-css'  href='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/styles/common-css/960.css?ver=1.0' type='text/css' media='screen' />
<link rel='stylesheet' id='superfish_menu-css'  href='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/superfish-1.4.8/css/superfish.css?ver=1.0' type='text/css' media='screen' />
<link rel='stylesheet' id='style-css'  href='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/styles/style1/css/style.css?ver=1.9.1' type='text/css' media='screen' />
<link rel='stylesheet' id='custom-style-css'  href='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/styles/custom/custom_style.php?ver=3.4.2' type='text/css' media='screen' />
<link rel='stylesheet' id='style-orig-css'  href='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design-child/style.css?ver=1.0' type='text/css' media='screen' />
<script type="text/javascript">
var duoshuoQuery = {"short_name":"hykyani","sso":{"login":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=duoshuo_login","logout":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=logout&_wpnonce=33b0d005cf"},"remote_auth":"W10= 1d39e310f1f166778a913e81a635fc955dd00779 1364046575"};
duoshuoQuery.sso.login += '&redirect_to=' + encodeURIComponent(window.location.href);
duoshuoQuery.sso.logout += '&redirect_to=' + encodeURIComponent(window.location.href);
</script>
<script type='text/javascript' src='http://www.hykyani.com/hykyani.com/wp-includes/js/jquery/jquery.js?ver=1.7.2'></script>
<script type='text/javascript' src='http://www.hykyani.com/hykyani.com/wp-includes/js/comment-reply.js?ver=3.4.2'></script>
<script type='text/javascript' src='http://www.hykyani.com/hykyani.com/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.plugins.min.js?ver=3.4.2'></script>
<script type='text/javascript' src='http://www.hykyani.com/hykyani.com/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js?ver=3.4.2'></script>
<script type='text/javascript' src='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/superfish-1.4.8/js/superfish.combined.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/script.js?ver=1.0'></script>
<script type='text/javascript' src='http://static.duoshuo.com/embed.js'></script>

<!-- UberMenu CSS - Controlled through UberMenu Options Panel 
================================================================ -->
<style type="text/css" id="ubermenu-style-generator-css">
/* Style Generator Styles */
#megaMenu {
  border:none;
  border-bottom:;
  background-color:transparent;
  background:-webkit-gradient(linear,left top,left bottom,from(transparent),to(transparent));
  background:-webkit-linear-gradient(top,transparent,transparent);
  background:-moz-linear-gradient(top,transparent,transparent);
  background:-ms-linear-gradient(top,transparent,transparent);
  background:-o-linear-gradient(top,transparent,transparent);
  -webkit-border-radius:0px;
  -moz-border-radius:0px;
  border-radius:0px;
  -moz-background-clip:padding;
  -webkit-background-clip:padding-box;
  background-clip:padding-box;
  -webkit-box-shadow:inset 0px 1px 0px 0px rgba(255,255,255,0.9);
  -moz-box-shadow:inset 0px 1px 0px 0px rgba(255,255,255,0.9);
  box-shadow:inset 0px 1px 0px 0px rgba(255,255,255,0.9);
}
#megaMenu ul.megaMenu > li > a, #megaMenu ul.megaMenu > li > span.um-anchoremulator {
  font-size:14px;
  color:#555555;
  padding:16px 18px;
  font-weight:normal;
}
#megaMenu.megaMenuHorizontal ul.megaMenu > li > a, #megaMenu.megaMenuHorizontal ul.megaMenu > li > span.um-anchoremulator {
  border-left:1px solid transparent;
  -webkit-box-shadow:inset 1px 0px 0px 0px rgba(255,255,255,0.9);
  -moz-box-shadow:inset 1px 0px 0px 0px rgba(255,255,255,0.9);
  box-shadow:inset 1px 0px 0px 0px rgba(255,255,255,0.9);
}
#megaMenu.megaMenuVertical ul.megaMenu > li > a, #megaMenu.megaMenuVertical ul.megaMenu > li > span.um-anchoremulator {
  border-top:1px solid transparent;
  -webkit-box-shadow:inset 0px 1px 0px 0px rgba(255,255,255,0.9);
  -moz-box-shadow:inset 0px 1px 0px 0px rgba(255,255,255,0.9);
  box-shadow:inset 0px 1px 0px 0px rgba(255,255,255,0.9);
}
#megaMenu ul li.ss-nav-menu-reg li.megaReg-with-sub > a, #megaMenu ul li.ss-nav-menu-reg li.megaReg-with-sub > span.um-anchoremulator, #megaMenu ul li.mega-with-sub > a, #megaMenu ul li.mega-with-sub > span.um-anchoremulator, #megaMenu ul li.ss-nav-menu-mega > a, #megaMenu ul li.ss-nav-menu-mega > span.um-anchoremulator { padding-right:23px; }
#megaMenu ul.megaMenu > li > a span.wpmega-link-title, #megaMenu ul.megaMenu > li > span.um-anchoremulator span.wpmega-link-title {
  text-transform:none;
  text-shadow:0 -1px 1px transparent;
}
#megaMenu ul.megaMenu > li:hover > a, #megaMenu ul.megaMenu > li > a:hover, #megaMenu ul.megaMenu > li.megaHover > a, #megaMenu ul.megaMenu > li:hover > span.um-anchoremulator, #megaMenu ul.megaMenu > li > span.um-anchoremulator:hover, #megaMenu ul.megaMenu > li.megaHover > span.um-anchoremulator {
  color:#aaaaaa aa !important;
  border-bottom-color:transparent !important;
  background-color:transparent;
  background:-webkit-gradient(linear,left top,left bottom,from(transparent),to(transparent));
  background:-webkit-linear-gradient(top,transparent,transparent);
  background:-moz-linear-gradient(top,transparent,transparent);
  background:-ms-linear-gradient(top,transparent,transparent);
  background:-o-linear-gradient(top,transparent,transparent);
  -webkit-box-shadow:inset 1px 1px 0px 0px rgba(255,255,255,0.9);
  -moz-box-shadow:inset 1px 1px 0px 0px rgba(255,255,255,0.9);
  box-shadow:inset 1px 1px 0px 0px rgba(255,255,255,0.9);
}
#megaMenu ul.megaMenu > li:hover > a span.wpmega-link-title, #megaMenu ul.megaMenu > li:hover > span.um-anchoremulator span.wpmega-link-title, #megaMenu ul.megaMenu > li > a:hover span.wpmega-link-title, #megaMenu ul.megaMenu > li > span.um-anchoremulator:hover span.wpmega-link-title, #megaMenu ul.megaMenu > li.megaHover > a span.wpmega-link-title, #megaMenu ul.megaMenu > li.megaHover > span.um-anchoremulator span.wpmega-link-title { text-shadow:0 -1px 1px transparent; }
#megaMenu ul.megaMenu > li.current-menu-item > a, #megaMenu ul.megaMenu > li.current-menu-parent > a, #megaMenu ul.megaMenu > li.current-menu-ancestor > a { color:#000000; }
#megaMenu ul.megaMenu > li.ss-nav-menu-mega > ul.sub-menu-1, #megaMenu ul.megaMenu li.ss-nav-menu-reg ul.sub-menu {
  border-color:transparent;
  color:#000000;
  text-shadow:0px 1px 1px transparent;
  -webkit-box-shadow:1px 1px 1px transparent;
  -moz-box-shadow:1px 1px 1px transparent;
  box-shadow:1px 1px 1px transparent;
  background-color:#f9f9f9;
  background:-webkit-gradient(linear,left top,left bottom,from(#f9f9f9),to(#f9f9f9));
  background:-webkit-linear-gradient(top,#f9f9f9,#f9f9f9);
  background:-moz-linear-gradient(top,#f9f9f9,#f9f9f9);
  background:-ms-linear-gradient(top,#f9f9f9,#f9f9f9);
  background:-o-linear-gradient(top,#f9f9f9,#f9f9f9);
}
#megaMenu ul.megaMenu ul.sub-menu .wpmega-postlist a { color:#000000; }
#megaMenu.megaMenuHorizontal ul.megaMenu > li.ss-nav-menu-mega > ul.sub-menu-1, #megaMenu.megaMenuHorizontal ul.megaMenu li.ss-nav-menu-reg > ul.sub-menu { border-top:; }
#megaMenu ul.megaMenu > li.ss-nav-menu-mega > ul.sub-menu-1 > li { min-width:100px; }
#megaMenu ul li.ss-nav-menu-mega ul.sub-menu-1 > li > a, #megaMenu ul li.ss-nav-menu-mega ul.sub-menu-1 > li:hover > a, #megaMenu ul li.ss-nav-menu-mega ul ul.sub-menu .ss-nav-menu-header > a, #megaMenu ul li.ss-nav-menu-mega ul.sub-menu-1 > li > span.um-anchoremulator, #megaMenu ul li.ss-nav-menu-mega ul ul.sub-menu .ss-nav-menu-header > span.um-anchoremulator, .wpmega-widgetarea h2.widgettitle {
  color:#777777;
  font-size:14px;
  font-weight:bold;
  text-shadow:0px 1px 1px transparent;
  padding-bottom:.4em;
  border-bottom:1px dotted transparent;
  margin-bottom:.6em;
}
#megaMenu ul li.ss-nav-menu-mega ul.sub-menu-1 > li:hover > a { color:#777777; }
#megaMenu ul li.ss-nav-menu-mega ul ul.sub-menu li > a, #megaMenu ul li.ss-nav-menu-mega ul ul.sub-menu li > span.um-anchoremulator, #megaMenu ul ul.sub-menu li > a, #megaMenu ul ul.sub-menu li > span.um-anchoremulator {
  color:#888888;
  font-size:14px;
  text-shadow:0px 1px 1px transparent;
  background-color:transparent;
}
#megaMenu ul li.ss-nav-menu-mega ul ul.sub-menu li a:hover, #megaMenu ul ul.sub-menu > li:hover > a {
  color:#000000;
  background-color:transparent;
}
#megaMenu ul.megaMenu > li.menu-item > .wpmega-nonlink > form#searchform { padding-top:6px; }
#megaMenu ul.megaMenu li.menu-item.ss-nav-menu-highlight > a, #megaMenu ul.megaMenu li.menu-item.ss-nav-menu-highlight > span.um-anchoremulator { color:#8f0000 !important; }
#megaMenu .ss-nav-menu-with-img > a > .wpmega-link-title, #megaMenu .ss-nav-menu-with-img > a > .wpmega-link-description, #megaMenu .ss-nav-menu-with-img > a > .wpmega-item-description, #megaMenu .ss-nav-menu-with-img > span.um-anchoremulator > .wpmega-link-title, #megaMenu .ss-nav-menu-with-img > span.um-anchoremulator > .wpmega-link-description, #megaMenu .ss-nav-menu-with-img > span.um-anchoremulator > .wpmega-item-description { padding-left:30px; }
.ss-nav-menu-with-img { min-height:25px; }
#megaMenu ul.megaMenu li a span.wpmega-item-description, #megaMenu ul.megaMenu li span.um-anchoremulator span.wpmega-item-description {
  font-size:10px;
  line-height:1.4em;
  color:#bbbbbb;
  text-transform:none;
}
#megaMenu ul li.mega-with-sub > a:after, #megaMenu ul li.ss-nav-menu-mega > a:after, #megaMenu ul li.mega-with-sub > span.um-anchoremulator:after, #megaMenu ul li.ss-nav-menu-mega > span.um-anchoremulator:after { border-top-color:#888888; }
#megaMenu ul li.ss-nav-menu-reg li.megaReg-with-sub > a:after, #megaMenu ul li.ss-nav-menu-reg li.megaReg-with-sub > span.um-anchoremulator:after { border-left-color:transparent; }
#megaMenu .wpmega-divider {
  border-top:1px solid transparent;
  border-bottom:1px solid rgba(255,255,255,0.05);
}
#megaMenu.megaMenuVertical > ul > li > a, #megaMenu.megaMenuVertical > ul > li > span.um-anchoremulator {
  background-color:transparent;
  background:-webkit-gradient(linear,left top,left bottom,from(transparent),to(transparent));
  background:-webkit-linear-gradient(top,transparent,transparent);
  background:-moz-linear-gradient(top,transparent,transparent);
  background:-ms-linear-gradient(top,transparent,transparent);
  background:-o-linear-gradient(top,transparent,transparent);
}
#megaMenu.megaMenuVertical ul li.ss-nav-menu-reg li.megaReg-with-sub > a:after, #megaMenu.megaMenuVertical ul li.mega-with-sub > a:after, #megaMenu.megaMenuVertical ul li.ss-nav-menu-mega > a:after, #megaMenu.megaMenuVertical ul li.ss-nav-menu-reg li.megaReg-with-sub > span.um-anchoremulator:after, #megaMenu.megaMenuVertical ul li.mega-with-sub > span.um-anchoremulator:after, #megaMenu.megaMenuVertical ul li.ss-nav-menu-mega > span.um-anchoremulator:after { border-left-color:#888888; }
#megaMenu.megaMenuVertical ul.megaMenu > li.ss-nav-menu-mega > ul.sub-menu-1, #megaMenu.megaMenuVertical ul.megaMenu li.ss-nav-menu-reg > ul.sub-menu { border-left:; }
#megaMenu.megaMenuHorizontal ul.megaMenu { *border-bottom:none; }
#megaMenu.megaMenuVertical ul.megaMenu { *border-right:none; }



/* Image Text Padding */
#megaMenu .ss-nav-menu-with-img > a > .wpmega-link-title, #megaMenu .ss-nav-menu-with-img > a > .wpmega-link-description, #megaMenu .ss-nav-menu-with-img > a > .wpmega-item-description, #megaMenu .ss-nav-menu-with-img > span.um-anchoremulator > .wpmega-link-title, #megaMenu .ss-nav-menu-with-img > span.um-anchoremulator > .wpmega-link-description, #megaMenu .ss-nav-menu-with-img > span.um-anchoremulator > .wpmega-item-description{
  padding-left: 32px;
}	
</style>
<!-- end UberMenu CSS -->
		
			
<!--[if lte IE 9]>
    <link rel="stylesheet" href="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/styles/common-css/ie-all.css" media="screen" type="text/css" />
<![endif]-->
<!--[if lte IE 7]>
    <link rel="stylesheet" href="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/styles/common-css/ie6-7.css" media="screen" type="text/css" />
<![endif]-->
<!--[if IE 6]>
    <link rel="stylesheet" href="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/styles/common-css/ie6.css" media="screen" type="text/css" />
    <style type="text/css">
	body{ behavior: url("http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/csshover3.htc"); }
    </style>
<![endif]-->

</head>
<body class="single single-post postid-2125 single-format-standard   no_title_section">
 <?php require '../header.php'; ?>
	<!-- end top-wrapper -->

	<div class="clear"></div>


            <div id="page-content-title">
                <div id="page-content-header" class="container_24">
              
                    <div id="page-title">
                            <h1>伊格纳罗博士的著作《一氧化氮让你远离心脑血管病》</h1>
                    </div>
                    <!-- end page-title -->
                </div>
                <!-- end page-content-header -->
            </div>
            <!-- end page-content-title -->
	    <div class="clear"></div>

	    <div id="page-content">
			<div class="container_24">
<p class="breadcrumbs"><a href="../index.php">首页</a><span class="breadarrow"> &rarr; </span><a href="../blog/blog.php" title="查看 博客 中的全部文章">博客</a><span class="breadarrow"> &rarr; </span><a href="../blog/kyani_product.php" title="查看 产品相关 中的全部文章">产品相关</a><span class="breadarrow"> &rarr; </span><span class='current_crumb'>伊格纳罗博士的著作《一氧化氮让你远离心脑血管病》 </span></p>			</div>



    <div id="content-container" class="container_24">
	<div id="main-content" class="grid_16">
	    <div class="main-content-padding">
			<div class="post-2125 post type-post status-publish format-standard hentry category-kyani_product tag-33 tag-34" id="post-2125">
			    <div class="entry">
<p>在尼多乐的介绍中已经提及到一氧化氮对心脑血管疾病的强大作用，现在我向大家介绍一本书——《一氧化氮让你远离心脑血管病》，它的作者是“伟哥之父”伊格纳罗博士，非常有权威。该书深入浅出地描述了一氧化氮对心脑血管病的功效及理论，适合我们所有人阅读。本文最后部分是对这本书的几段摘录，你可以点击自己感兴趣的内容进行阅读，了解一氧化氮的魅力。今天我在当当网和亚马逊网看了一下书的价格，打好七五折是14.9元，喜欢的朋友可以在网上进行购买。</p>
<h2><strong>背景</strong></h2>
<div class="wp-caption alignleft" style="width: 210px"><img title="伊格纳罗博士接受颁奖" src="http://i1162.photobucket.com/albums/q529/hykyanicom/28b5efb9.jpg" alt="伊格纳罗博士接受颁奖" width="200" height="271" data-pinit="registered" /><p class="wp-caption-text">伊格纳罗博士接受颁奖</p></div>
<p>心血管医学的新篇章是从硝酸甘油炸药开始的。在诺贝尔时代，科学家们就知道小量的硝酸甘油可以用于缓解心绞痛，但他们并不知道硝酸甘油是如何发挥作用的。</p>
<p>1970年，费里德·穆拉德博士（1998年诺贝尔医学奖得主之一）通过其在弗吉尼亚大学及后在斯坦福大学的工作，发现硝酸甘油进入血管后，它就转化为一种叫一氧化氮的瞬间存在的气体，一氧化氮刺激产生环磷酸鸟苷，环磷酸鸟苷起信使作用，使血管松弛和扩张;血流加快，心脏供血增加，缓解胸痛和降低血压。</p>
<p>1980年罗伯特·佛契哥特博士和他的同事们发现在血管内皮细胞内存在一些使血管松弛的信号和信使分子。而该分子存在时间非常短，仅存活不足1秒，所以没有人能分析其化学成分或把它分离出来，当时这个分子被罗伯特·佛契哥特博士称为内皮源性舒张因子，缩写为EDFR。</p>
<p>1986年，伊格纳罗博士开始想到内皮源性传张因子（EDRF）可能是一氧化氮，并在罗伯特·佛契特博士研究的基础上，通过大量的实验证明了EDRF就是一氧化氮，并且发现血管内皮组织能产生一氧化氮以控制血压。</p>
<p>1998年10月12日美国布鲁克林南方卫生科学中心教授罗伯特·佛契哥特（Robert F.Furchgott.）、加利福尼亚大学洛杉矶分校医学院教授路易斯J·伊格纳罗（Louis J.Ignarro.）和得克萨斯大学卫生推中心教授里德·穆拉德（Freid Murad），由于发现一氧化氮在机体中可以作为许多细胞的信使而获得诺贝尔奖。</p>
<p>我们熟知的“伟哥”(Viagra)本是通过一氧化氮效应治疗心脑血管病，可是临床发现，它对性功能有很大的改善作用，不久，这种药物风靡全球，伊格纳罗博士也因此被成为“伟哥之父”。</p>
<h2><strong>路易斯J·伊格纳罗的著作《一氧化氮让你远离心脑血管病》</strong></h2>
<div class="wp-caption alignleft" style="width: 210px"><img title="一氧化氮让你远离心脑血管疾病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管疾病" width="200" height="300" data-pinit="registered" /><p class="wp-caption-text">一氧化氮让你远离心脑血管疾病</p></div>
<div style="margin-top: 22px;">
<ul class="list-11">
<li><a class="inline cboxElement" href="#NOdisease1"><span class="zw_lmd2">我的人生旅程：从诺贝尔到诺贝尔奖</span></a></li>
<li><a class="inline cboxElement" href="#NOdisease2"><span class="zw_lmd2">一氧化氮时期</span></a></li>
<li><a class="inline cboxElement" href="#NOdisease3"><span class="zw_lmd2">诺贝尔委员会认识到一氧化氮的巨大作用</span></a></li>
<li><a class="inline cboxElement" href="#NOdisease4"><span class="zw_lmd2">心血管系统的重要组成及功能</span></a></li>
<li><a class="inline cboxElement" href="#NOdisease5"><span class="zw_lmd2">一氧化氮与高血压</span></a></li>
<li><a class="inline cboxElement" href="#NOdisease6"><span class="zw_lmd2">一氧化氮与动脉粥样硬化</span></a></li>
<li><a class="inline cboxElement" href="#NOdisease7"><span class="zw_lmd2">一氧化氮与心脏病、卒中</span></a></li>
<li><a class="inline cboxElement" href="#NOdisease8"><span class="zw_lmd2">一氧化氮与胆固醇</span></a></li>
<li><a class="inline cboxElement" href="#NOdisease9"><span class="zw_lmd2">一氧化氮与高血糖</span></a></li>
<li><a class="inline cboxElement" href="#NOdisease10"><span class="zw_lmd2">一氧化氮科学：神奇分子产生难以置信的效果</span></a></li>
<li><a class="inline cboxElement" href="#NOdisease11"><span class="zw_lmd2">一氧化氮在体内四个重要生理过程中的作用</span></a></li>
<li><a class="inline cboxElement" href="#NOdisease12"><span class="zw_lmd2">一氧化氮找到人类更健康更长寿的钥匙</span></a></li>
</ul>

</div>
<div style="display: none;">
<div id="NOdisease1">
<h2><strong>我的人生旅程：从诺贝尔到诺贝尔奖</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》第一章</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<p>当我和Robert F. Furchgott、Ferid Murad,共同获得1998年诺贝尔奖时，我特别高兴，这个荣誉将引起世界前沿科学对一氧化氮的关注。荣获诺贝尔奖也把我从一个充满好奇心的纽约男孩推向世界闻名的科学奖顶峰。科学和工业的巨人——Alfred Nobel(诺贝尔)引导了我成长的每一步。我获得诺贝尔奖一个最引人注目的原因就是我的研究与Nobel的生活和工作圈子围绕着同一个分子。是Nobel本人的经历为我对这鲜为人知物质的困惑播下种子。</p>
<h4><strong>Alfred Nobel的工作和生活</strong></h4>
<p>Alfred Nobel是19世纪才华横溢的瑞典化学家、发明家和一个富有技能的实业家。他拥有355项专利，其中一项是炸药，用硝化甘油为活性粉末混合物。在20世纪，Alfred Nobel建立了几个工厂，为建筑工地、采矿公司和军队生产和销售大量炸药。这些炸药的威力改变了建筑业，以为用炸药能炸开山丘和大山，能为修路、建桥、开通隧道和筑坝开辟道路。</p>
<p>Nobel 非常清楚，液体硝化甘油受热或加压后有事会发生爆炸。他21岁的弟弟Emil和四位工人就是在在自己的工厂被炸死的。几年前，曾经在1846年发明硝化甘油的一位意大利化学家Asciano Sobrero也是由于一次硝化甘油爆炸而毁了容。</p>
<p>自从斯德哥尔摩政府禁止在城市内进行硝化甘油的实验研究，Nobel 被迫在湖泊的一艘驳船上进行实验。最终，他发现硝化甘油和一种类似于沙土的添加剂——硅土——一起即可安全地使用而不会发生可怕的爆炸。</p>
<p>Nobel对细节的关注使他认识到了在他的工厂发生的一种不同寻常的现象。很多工人抱怨说，当他们度过周末，周一回到工厂上班后就会出现剧烈的头痛，而周末才会消失。头痛的原因追溯到工厂使用的硝化甘油。硝化甘油是一种挥发型物质，它挥发的气体可以扩张血管，增加脑部的血流。由于这种气体造成脑血管不稳定的扩张收缩，因而引起搏动性头痛。Alfred Nobebl本人也患有周期性偏头痛。这可能与他接触硝化甘油 有关。</p>
<p>同时，Alfred Nobel工厂的员工报告说，当他们接近硝化甘油时，他们的心绞痛会缓解。离开工厂时就会头痛加重。反复验证后认为，一定是硝化甘油挥发气体对缓解胸痛起了作用。</p>
<p>很巧合，在19世纪晚期，内科医生发现小剂量的硝化甘油对治疗胸部不适的患者有效，虽然没有人确切知道它是如何起作用的。19世纪90年代，Alfred Nobel患上了心脏病和心绞痛，并且非常严重，以至于常常卧床。医生建议他服用硝化甘油，但他却固执地不予理睬，不相信这个有威力的炸药能有医学价值。1896年Alfred Nobel死前几个月，他在给朋友的一封信中写道：“用不了几天，我的心脏病将会在巴黎夺去我的生命。医生让我服用硝化甘油，这不是命运的讽刺吧!医生们把硝化甘油称为三硝酸甘油，好让化学家和公众们不会感到害怕”。</p>
<p>如果 Nobel相信硝化甘油可以用作血管扩张剂，他的生命可以得到延长。他在辞世前设立了诺贝尔基金奖，希望历史把他不仅仅只作为当时最具毁灭性的东西——炸药的发明人而记住他。</p>
<h4><strong>从布鲁克林到斯德哥尔摩</strong></h4>
<p>Alfred Nobel的生命似乎与我的经历有非常密切的关系。毫无疑问，我们有不同的开端，生活在不同年代。但如果没有Nobel的天赋和他的工作，我的生活和工作将会完全不同的历程。结果是命运在科学上把Nobel和我联系在了一起。</p>
<p>我是意大利移民的儿子，在20世纪20年代我的父母来到美国，他们缺乏教育，但他们却富有希望。20世纪30年代我和我的哥哥Angelo生长在一个被称为“长沙滩”的长岛南部的海滨小镇。我的父亲是一名木匠，靠他养活全家。</p>
<p>父亲偶尔会带我一起去工作，所以我能看他干活。但我从10岁起他就不带我去了。我想他是会担心我会选择不去念大学，而像他一样成为体力劳动者。父亲一定注意到我从8岁开始就酷爱上专为青少年射击的化学实验装置，这已经说明我很有可能会选择不需要过分体力的行业。当我的实验做得越来越娴熟后，这类化学实验装置成了我最心爱的所有。</p>
<p>当我逐步有了大型的化学仪器，做了些更具有挑战性的的试验，我决定要做一个像爆竹一样的小型炸弹。不久后，我满怀抱负来到公众图书馆，读了书架上每一本关于爆炸和燃料方面的书籍并逐页做了笔记，我经常读到Alfred Nobel名字和他所做的工作。我被所从事的爆炸工作及硝化甘油与缓解心绞痛之间的联系迷住了。</p>
<p>当我读到Nobel的职业生涯时，我备受鼓舞，想创造一些爆炸性的东西。我进行了好几个月的实验，除了利用自己手里的化学药品，我还说服邻居家的小孩从当地药店获取了一些化学药品。我本想制造鞭炮，但我无意间做成了管式炸弹使房子里的家具被损坏，使妈妈非常伤心。</p>
<p>不久以后，我从制造炸药转向制造火箭。我在后院发射了一个自制火箭，火箭飞行了一段距离后落在我家的屋顶上，由于着陆过猛，砸碎了屋顶的瓦。父亲非常生气，但我对科学上的进步使他感触尤深。因而父亲虽然非常生气，但对我在科学上的进步使他感触尤深。因而父亲对我的宽恕态度使我保持了继续追求的热情，最终为我指明了一生方向。</p>
<p>我在哥伦比亚大学读书时，虽然只有药理学这门课真正激发了我的兴趣，但我还是选修了我所知道的每一门化学课。在明尼苏达大学的研究生院，我的主攻方向为药理学第二专业为心血管生理学——我在读有关Alfred Nobel的书籍时就开始感兴趣的。获得药学博士后，我开始从事识别和解决药剂和药学上的一些秘密。</p>
<p>当我致力与药理学研究工作时，我孩童时读到的关于硝化甘油与心绞痛缓解的故事又浮现在我的眼前。不久以后，虽然我的研究进展缓慢，但明确了一氧化氮的研究方向。我那时在研究一个叫环磷酸鸟苷(GMP)的分子，该分子对血管平滑肌的舒张起重要作用，休士顿的药理学家 Ferid Murad 的研究引起了我的兴趣。当时，Murad正从事一氧化氮的早期研究。直到那时，好像只有化学家把一氧化氮当作活性化学药品才会感兴趣。他和我的同事们写的一片论文引起我的注意。因为该论文表明一氧化氮不仅能激活产生环磷酸鸟苷分子的酶，而且能数百倍地增加人体组织内环磷酸鸟苷的浓度。与此同时，纽约药理学家 Robert F. Furchgott得出的结论与我和Murad的正好相吻合。</p>
<p>问题在于一氧化氮是否对机体产生有益的作用。几乎一个世纪后，科学家和内科医生们仍受 Alfref Nobel 对硝化甘油以及类似的陈旧悲观看法的影响，难以想像一氧化氮在体内具有正面作用。毕竟，一氧化氮是一种有毒物质——汽车尾气和香烟烟雾中的一种成分。总之，一氧化氮是一种污染环境的主要成分，它怎能治病呢?我也没有找到全部的答案，但我想继续探寻下去。</p>
</div>
</div>
<div style="display: none;">
<div id="NOdisease2">
<h2><strong>一氧化氮时期</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<p>另一个关键性问题必须回答，如硝化甘油的复合物能通过一氧化氮机制减轻胸痛吗?虽然用消化甘油扩张缺氧心肌血管已有100多年的历史了，但其作用机制仍然无人所知。当然，药物不可能通过引起血管内微小的爆炸而起作用。那么一氧化氮作用机制是什么呢?</p>
<p>Ferid Murad 猜想硝化甘油中的“硝基”可能是血管壁的平滑肌内转化为一氧化氮，而一氧化氮又能使血管平滑肌舒张。我们不能确定这个猜想是否能在实验室里得到验证，但对此我想检验一下，看一看Murad 这个猜想是否正确。我以惊人的速度进行实验并广泛收集数据。虽然研究做的很细致，但并没有立刻取得预期性的突破。最终我们用实验证实了这个曾被认为不可能的机制并清楚地描述了硝化甘油是如何起作用的。</p>
<p>从一开始，一氧化氮的研究就是具有挑战性。我必须购买罐装的一氧化氮，实验时要带防毒面罩和风帽以免这种腐蚀性物质的伤害。由于一氧化氮非常不稳定，而且在几秒钟内就可转化为硝酸盐和亚硝酸盐，所以我们必须用氮或氩来稀释，这样会防止它在1ms的时间内被分解掉。我们使用一个密闭注射器，注入一氧化氮气体，开始我们的实验好像是一部科幻小说，在我们测出血管平滑肌有明显的舒张作用之前，科学界大多数人也一直认为这是科幻小说。但这是一氧化氮起作用的第一个证据，也成为我从事24年研究的起点。</p>
<p>我的研究表明，当一个心绞痛的患者服用硝化甘油时，硝化甘油将引起体内一个不可逆转的多米诺效应(Domino Effect)。硝化甘油进入人血管后，他就会被转化为一种叫一氧化氮的瞬间存在的气体。一氧化氮刺激产生环磷酸鸟苷，环磷酸鸟苷起信使的作用，使血管松弛和扩张；血流加快，心脏供氧增加，缓解胸痛。</p>
<h4><strong>体内的信号系统</strong></h4>
<p>一氧化氮的重要作用已经阐明，但随着科研工作的进展，新的问题随之而来。例如，为什么机体生来就是这样的机制或为什么受体对体外硝化甘油这种化学物质起反应?机体是怎么知道以及如何作用反应呢?一种理论认为，在一定程度上人类可以自然生产一氧化氮——作我们自身的硝化甘油，它作为一个信号分子专门控制血压。我一直相信，如果自身对体外的化学药品产生反应，那体内一定存在这类化学物质。如果真是这样的话，人体受到刺激后就能产生我们所需的全部一氧化氮，难道我们还会需要硝化甘油这类物质来治病吗?</p>
<p>我认为这个猜想有道理，但我感到我的同事们却不相信。大多数人对从不相信一氧化氮是一种自然生成的分子，而且在适当的水平只对心血管有益而无害处。于是我集中精力去证实或否定这个观点——人体自身尤其自身血管能产生一氧化氮。</p>
<p>不久以后，一个研究结果令我兴奋不已。我们第一次研究证实了硝化甘油在试管和人体内能转化为一氧化氮。我们体内的硝化甘油以一氧化氮的形式储存并调节血压和血凝。虽然一氧化氮的水平异常增高是有毒的。但不管是从食物和补品中摄取的，还是通过运动产生的一氧化氮都无法达到有毒水平。如果体内一氧化氮的水平低，可以从食物、补品中通过运动达到正常水平。一氧化氮以有益的方式会对我们的健康产生巨大的影响。</p>
<h4><strong>另一项相关的科学研究</strong></h4>
<p>我在前面章节中提到的另一个振奋人心的突破就是一氧化氮的一个关键迷点，这个迷点就是与我同时获得诺贝尔奖的Robert Furchgott 所研究的课题。</p>
<p>虽然在1978年一氧化氮就成为我的研究重点，但直到1986年我们才对一氧化氮的疗效有了突破性认识。直到那时，我建立了一系列研究方法对一氧化氮疗效进行评估并试图解决一些没有答案的问题。其中包括体内为什么会有一个内源机制来回应这种气体的反应。与此同时，一个相关的研究正在纽约州立大学布鲁克林分校的Robert Furchgott 博士的实验室进行，虽然他并没有特别针对一氧化氮进行研究。</p>
<p>1980年， Furchgott 和他的同事们发现在血管内皮细胞内存在一些能使血管松弛的信号或信使分子。由于内皮细胞在此之前并没有被认为在血管舒张方面起主要作用，所以Furchgott 的发现引起了像我这样的研究人员的兴趣。有好长一段时间人们都不知道这个分子的什么。就像一氧化氮一样，该分子研究起来很困难。因为它存在时间非常短暂，仅存活不足1秒，所以没人能分析其化学结构或把它分离出来。</p>
<p>Furchgott 感觉他必须给这个神秘的物质取一个名字，把它称为内源性舒张因子，缩写为EDRF。我们一旦能破译它的分子结构，我们就能够设计试验，找出心血管疾病的原因，并且有可能帮我们预防甚至逆转心血管疾病。</p>
<p>到1986年，我开始想到内皮源性舒张因子(EDRF)可能是一氧化氮。但在那时，没有任何理由会想到EDRF就是一氧化氮。我设计了一系列试验比较EDRF与一氧化氮的特性。我反复总结我的试验记录并反复对数据进行分析。我把实验室的其他事情推到一边，24小时待在实验室对一氧化氮与EDRF相似之处进行了分析。</p>
<p>所有实验让我得出相同的结论;实际上，一氧化氮就是EDRF。两者都能舒张血管，性质非常不稳定，存活时间非常短。我深知一氧化氮和EDRF为同一种物质在临床上的价值。根据我对EDRF了解，一氧化氮在体内的作用就更清楚了：一氧化氮的确的一种信号分子，对心血管起着至关重要的作用。</p>
<p>在得出结论的几周后，在Mayo Clinic著名血管专家组成的会议上我发表了一氧化氮与EDRF的资料，但是反应默然。与会者无疑对此表示怀疑。此时我似乎感到在这个大厅里我是惟一一位相信这个实验结果的人。我做完报告后，一些人取笑我说也许我在走上讲台之前吸入了过多的一氧化氮。我不理解他们的怀疑，因为我的这些实验数据是千真万确的。</p>
<h4><strong>科学见到了曙光</strong></h4>
<p>让人们接受我们的一氧化氮的这一发现决不是一个简单的过程。当我们开始尝试将硝化甘油通过一氧化氮的形式发挥作用的论文发表时，我们的论文不只被一家重要的科学杂志拒登。幸运的是，很多科学家认识到此项研究的重要性。由于我自己对一氧化氮的进一步研究，最终我的研究还是被出版了。</p>
<p>在那时，持怀疑态度的人仍然吹毛求疵，但是他们所持的反对态度的性质已经改变。他们认为尽管已证明一氧化氮是硝酸甘油的有效成分，但这并不能证明在其他方面的重要性。当我的研究工作进一步证实一氧化氮可以抑制引发心脏病和卒中的血液凝固而且能降低血压时，即使持否定观点的人最终也不得不承认一氧化氮对健康有多方面的作用。</p>
<p>到1986年，我们反复研究证明机体能自己产生一氧化氮。我的假设被证明是真实的，即血管内皮细胞能产生一氧化氮以控制血压。现在我的发现结合Furchgott的发现证实EDRF就是一氧化氮，科学界开始相信我的结论是正确的。</p>
<p>1990年，我们的实验提示一氧化氮也是引起阴茎勃起的化学信使，勃起组织内的神经细胞释放一氧化氮舒张血管而使阴茎勃起。这个发现不久就被辉瑞制药公司应用并导致“伟哥”的开发和投放市场。这一项发明全球收入即为18亿美元。药品的成功使我赢得了“伟哥之父”的美誉(我也被称为一氧化氮博士)。</p>
<p>我们关于血压、卒中、勃起障碍的研究仅仅是一个开始。一氧化氮水平的降低与人类多常见疾病诸如传染病、恶性肿瘤、糖尿病等有关。我们发现一氧化氮影响着整个机体的功能和健康。</p>
</div>
</div>
<div style="display: none;">
<div id="NOdisease3">
<h2><strong>诺贝尔委员会认识到一氧化氮的巨大作用</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<p><strong>诺贝尔委员会于1998年把医学诺贝尔奖授予在一氧化氮上有突破性的研究。委员会发布的新闻概述了一氧化氮这一“神奇分子”的多功能，下面是新闻发布内容的摘录：</strong></p>
<p>心脏：动脉硬化症患者内皮细胞产生一氧化氮的能力下降。然而一氧化氮可由硝酸甘油所供应。当前，药物发明的重点在与应用信息分子一氧化氮的知识研制出更有效果和更有选择行的治疗心脏病的药物。</p>
<p>肺：通过吸入一氧化氮气体可以治疗重症患者，并且取得很好的效果。甚至可以挽救患者的生命。例如，人们通过使用一氧化氮可以降低高危新生儿肺动脉压，但由于高浓度的一氧化氮可能有毒性，所以剂量是至关重要的。</p>
<p>癌：白细胞利用一氧化氮不仅可以杀死一系列细菌、真菌和支原体等病原体，而且对肿瘤也有对抗作用，由于一氧化氮能诱导细胞死亡和凋亡过程，目前科学家们正在试验一氧化氮能否用于抑制肿瘤的生长</p>
<p>阳痿：一氧化氮通过舒张勃起组织内的血管而使阴茎勃起。这方面知识已经被用来研制治疗阳痿的新药。</p>
<p>诊断分析：通过对肺、小肠内一氧化氮含量分析可以明确炎性疾病。用于诊断哮喘、结肠炎和其他疾病。</p>
<p>其他功能：一氧化氮对嗅觉具有重要作用。可以识别不同的气味。一氧化氮对我们的记忆力也有很重要的作用。</p>
<p><strong>——1998年10月12日卡若林斯卡(Karolibska)学院诺贝尔委员会宣布1998年医学诺贝尔奖时发布。</strong></p>
<h4><strong>这是否有人在开玩笑?</strong></h4>
<p>1998年8月，我离开法国南部去意大利的那不勒斯(Naples)大学去做了一个应邀演讲。当我正在尼斯机场排队检票时，被人叫住了。航空公司的一个员工递给我一个手机，告诉我有一个从美国打来的电话，并提醒我要快点，因为仅有不到一分钟是时间我就要上飞机了。我接通电话听到一个非常熟悉的声音说：“lou, 我是Roin。” Robin Farias—Eisner 是加州大学洛杉矶分校的一位肿瘤外科专家，我的一位密友。但我还是非常纳闷，为什么在洛杉矶时间的清晨3时30分给我打电话?他怎么会知道我在这儿?我首先想到我家出事了，然后是洛杉矶发生了严重的地震。但Robin听起来一点也不难过。闲聊几秒后，他停了片刻，用特别大的声音喊道：“lou , 我有话要告诉你，你刚刚获得了诺贝尔医学奖!”</p>
<p>“什么?”当robin想详细告诉我时电话被挂断了，检票员通知我立刻上飞机。</p>
<p>在飞往那不勒斯的途中，我的思绪飞转，试图回想刚才通话的全过程。我知道在每年的10月份宣布诺贝尔奖，而10月12日那天。我认为Robin不会仅为开一个玩笑而跟踪我到尼斯机场。当飞机抵达那不勒斯时我惊奇地发现我的朋友Giuseppe Cirino , 一位药理学家，是他邀请我来那不勒斯来的，他正站在飞机舷梯旁。在他旁边还有一群摄影记者，所有的镜头都对着飞机。当我开始走下舷梯时一束束闪光灯把我包围。我奇怪地想是谁安排的这一切呢?</p>
<p>我刚走到Giuseppe Cirino跟前，他问我：“Lou,你听到新闻了吗?”</p>
<p>Giuseppe Cirino递给我一份卡若林斯卡学院的学报，诺贝尔医学奖的选举即在此中心进行。虽然这个文件是用瑞士语写的，但是我看到“NOBEL”这五个字母，浏览了几页后，我认出了我的名字。我太兴奋了，可能是受到疑惑和吃惊这样的打击，我双腿跪在了停机坪的地上，我在Giuseppe Cirino和几个机场工作人员帮助下才走进机场大厅。</p>
<p>当我自己最终平静下来时，又想起我是在那不勒斯获得诺贝尔奖，那不勒斯是我已故父亲的出生地，是我父亲一直鼓励我，使我对科学产生的好奇心。想到这儿，我热泪盈眶。</p>
<p>1998年12月的我一个寒冷飘雪的晚上，这天是Alfref Nobel 逝世102年的纪念日，在斯德哥尔摩音乐大厅里我与国王卡尔16世Gustaf 一起分享喜悦。卡尔16世国王身着燕尾服，上面挂满了勋章，Slivia 王后穿了一件桃色的长裙，在身旁还有两位与我同时获奖的科学家。由于每一名获诺贝尔奖的人可以邀请15-20名客人，所以我邀请了许多在我实验室和我一起工作的科学家和研究人员共同出席了这个庆典。当轮到我时，奏响了乐曲，我从一个很大的红椅子上站起来向国王行礼同时接受了一枚金质奖章和一份证书。</p>
<p>虽然在斯德哥尔摩的10天里经历了很多非凡的时刻，但是诺贝尔奖对我重大的震撼是在最后一天。我应邀在一本书上签名，这本书内记录了每个领域所有诺贝尔奖获得者的签名，一直追溯到1901年。签名之前，我用了几分钟时间慢慢翻阅书页当我认识而来一个又一个著名的名字时——事实上这些人是在医院、物理化学和文学领域作出贡献的科学家，我不禁感到我自己是那么的渺小。</p>
<p>我读到的诺贝尔获奖人包括：Ivab Pavlov获1904年奖;Rudyard Kipling 获1907年将;Madame Curie获1903年和1911年奖：Al-bert Einstein 获1921年奖;George Bernard Shaw 获1945年奖;Sinclair Lewis获1950年奖;Sir Winsron Churchill获1953年奖;Ernest Hemingway获1954年奖;Linus Pauling 获1954年奖和1962年奖;Johon Steinbeck 获1962年奖。当我逐页翻看时，我问自己：“我真的属于这些伟人中的一员吗?”我感到荣幸地是诺贝尔委员会 相信我所做的。</p>
<p>由于开始时，很少有人相信我的学说，所以在70年代末期和80年代早期我就 开始研究一氧化氮时，很难得到资金。国家卫生部和其他基金组织告诉我说，虽然我的研究在生化方面有意义，但他们不懂我如何把这个分子与医学联系起来。由于经费有限，如果我的研究没有重要的医学意义，他们很难给我钱。</p>
<p>那时， 关于一氧化氮大大小小的发现大约是以每周一篇的文章速度问世。到2001年，由于诺贝尔奖的原因，每年关于一氧化氮的研究论文数高达7500篇。随着进入这个就在几年前还被忽视的领域的科学家们数量增加，论文的数量继续飙升。甚至诞生了一本一氧化氮研究的专刊。这本杂志的名称就叫《一氧化氮》，我为自己作为杂志的第一位编辑而感到骄傲。</p>
<p>固然，获诺贝尔奖和看到一氧化氮研究领域的发展令人兴奋。但是更令人兴奋的是我们的研究已被用来增进人类健康。我想Al-fred Nobel 会为之高兴的，甚至会被感动：硝化甘油——他认为仅仅是一种破坏性质——结果成为了能使全世界人民更健康更长寿的发现的钥匙。</p>
</div>
</div>
<div style="display: none;">
<div id="NOdisease4">
<h2><strong>心血管系统的重要组成及功能</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<p>为了理解如何保护心脑血管系统，必须首先了解有关这一系统是如何工作，同时应知道当其发生疾病的表现。如果你和大多数人一样，那就很可能只有在心血管系统发生疾病时才给予更多的关注，机体的每一部分都需要氧气和营养物质，而且每天24小时心血管系统都以完美、高效的方式供应这些物质。</p>
<p>既然一氧化氮对心血管系统的健康至关重要，因此有必要了解一氧化氮对维持心脏和血管细胞营养和健康的重要性。</p>
<h4><strong>心血管系统的重要组成及功能</strong></h4>
<p>心血管系统由心脏和血管组成，心脏是该系统的重要器官。心脏是由四个腔构成的肌肉泵，比人的拳头稍微大。他像工作狂人一样，从不休息。对于70岁、80岁或更高年龄的人来说，心率较前稍有增加，每次心跳时心脏收缩并将约90ml的新鲜氧合血液射入主动脉，后者为与心脏相连的大血管。之后血液进入机体的血管系统，包括位于心脏表面供应心脏自身血流的冠状动脉。</p>
<p>动脉输送含氧的血液离开心脏，除动脉外，血管网还包括静脉和毛细管。静脉将乏氧的血液输送回心脏以便氧合。毛细血管连接动脉和静脉。如果把所有动脉和静脉的末端连接起来，将其展开后就会长达160 900KM，循环的血液好像一条河，在如此错综复杂的动脉和静脉中流动。仔细算一算，血管网的长度可饶地球两周之多，而血液在体内完成一次循环仅需1分钟。</p>
<p>很显然，心血管系统对机体的每项重要功能、器官、甚至每一个细胞都具有很强的调节作用。如果该系统受损，血管变得窄且血管内形成硬化斑块，虽然无明显症状，但随时可能发生心脏病和卒中。</p>
<p>只要心脏跳动，每天就持续不断地搏动100 000次左右，每24小时泵出近9092L的血液在体内循环。锻炼时心跳加速，休息时心率减缓。然而他永不停息。当心脏功能最佳时，心血管系统可以准确无误地工作以满足机体的需求。那只是最理想的状态。对于数百万人来讲，其心脏功能远远达不到这种状态。</p>
<h4><strong>令人深省的心血管疾病(CVD)统计数据来自国家健康研究院和疾病控制中心</strong></h4>

<ul class="list-7">
<li>在美国，自1900年以来心血管疾病已成为每年的第一位杀手，1918年因大规模流感除外。</li>
<li>心血管疾病每年夺去的生命相当于位列其后7种疾病的死亡数量总和。</li>
<li>在1999年，有65 827 000人次 因心血管疾病而在内科门诊就医。</li>
<li>近62 000 000的美国人至少患有一种心血管疾病，其中包括高血压、冠心病、心绞痛(由于心脏供血不足而至胸痛)和卒中。</li>
<li>每29秒，就有一名美国人患医生所说的“冠脉事件”。如心脏病发作。在这些事件中大约每一分钟就会有一人死亡。</li>
<li>在美国，每53秒就会有一人发生卒中，每3分钟就有一人死于卒中。</li>
<li>因为高血压病或血压升高而就诊的患者比以其他任何原因就诊的患者都多。</li>
<li>心血管疾病对女性的影响和对男性的影响相同，实际上在该病的流行程度和相关死亡方面，女性人数更多。死于心血管疾病的患者中约53%为女性。尽管多次研究显示，女性更担心的是患乳腺癌而不是心血管疾病，但每2.4名死亡女性中就有一名死于心血管疾病，而每30名死亡妇女中才有一名死于乳腺癌。</li>
<li>2001年，所有心血管疾病的费用约为2980亿美元，其中包括健身费用和生产力损失。心血管药物的费用超过280多亿美元。</li>
<li>在美国，为了预防卒中的发生，每年心脏病专家完成900 000多例血管成形手术，外科医师完成121000例颈动脉内膜切除手术。</li>
<li>卒中和心脏病发作是长期慢性致残的主要原因。</li>
<li>在所有丧失劳动能力的病例中，目前发现近90%与“血管功能不全”直接相关。</li>
</ul>

<h4><strong>大多数心血管疾病可以避免</strong></h4>
<p>Woody Allen 曾经评论说没有人会活在离开这个世界。正如你看到的，许多人由于心血管疾病正在过早地离开这个地球。根据疾病控制和预防中心数据，如果所有的心血管疾病都有被消除，美国人的平均寿命将延长近7年。想像一下你的预期寿命增加7年将会怎么样。当然，一氧化氮有助于达到这个目的。最好的防御就是主动出击。如果能提高机体的一氧化氮水平，就会增加你更加健康和长寿的机会，采用本书中提到的方法提高一氧化氮水平，大部分心血管疾病都能预防。</p>
</div>
</div>
<div style="display: none;">
<div id="NOdisease5">
<h2><strong>一氧化氮与高血压</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<p>当听到“心血管疾病”这个词时，你会自然联想到心脏病发作吗?尽管我已经解释，心血管疾病包括许多严重的心脏疾病，而心脏病发作仅仅是心血管疾病的一种类型，但是大多人仍然会这样认为。幸运的是，一氧化氮几乎对所有心血管疾病都有肯定的疗效。</p>
<p>下面是一些常见的心血管疾病的效果情况。</p>
<h4><strong>高血压</strong></h4>
<p>你可能测量过许多次血压。当医生在你的上臂包裹袖带测量血压时，他测量的是血液在循环过程中对动脉壁产生的压力。医生对两个重要数字感兴趣：收缩压，即当心脏搏动或心脏收缩射血时血液对动脉壁产生的压力，此时血压达到最高值。相反，舒张压是当心脏在搏动期间舒张并充满血液时血液对动脉壁的压力。</p>
<h4><strong>高血压的流行病学</strong></h4>
<p>以高血压病(高血压)就诊的患者比以其他原因就诊的患者多。事实上，美国有5000万人患高血压，这一数字令人震惊。即使这样，仍有约32%的高血压患者不知道自己患了高血压，另外26%的患者正在服用药物，而这些药物都有副作用且不能使他们的血压得到有效控制。</p>
<h4><strong>为什么血压升高</strong></h4>
<p>为了理解高血压机制，可以把它想像作为一个末端带有喷嘴的花园水管。有两种方法可以提高水的压力。可以打开水龙头并通过水管泵出更多的水，也可以拧紧喷嘴以提高水流出的阻力。血压的作用原理与这种方式相似，血压取决于心脏泵出的血量和血流的阻力，血流的阻力与动脉直径相关，动脉与花园水管的喷嘴一样，既能收缩又能舒张。收缩的动脉使血管流受阻从而使血压升高，相反，如果动脉舒张管径变宽，血液就更容易流动且血压下降。</p>
<h4><strong>为什么我们的心血管系统状况与年龄有关</strong></h4>
<p>著名的Framingham 心脏研究：对Masschusetts、Framingham州镇的几代居民随访40余年，对每个人每两年进行一次详细的心血管健康状况评估。其中比较有趣的发现是：在开始调查时，在30岁左右的血压正常人群，有2/3的人后来发生了高血压。根据国家健康研究院的调查结果，每年约700 000人死亡与高血压有关。</p>
<p>血压用毫米汞柱表示(缩写为“mmHg”)用一个分数来表示：例如，160/100mmHg或130/85mmHg。如下表示，血压值可进行分级。如果血压≥140/90mmHg(分子收缩压，分母为舒张压)，即被认为是血压增高。医生将告诉你患了高血压，这仅仅意味着由心脏泵出的血流对动脉管壁产生了更大的压力。即使血压是在“正常高限”范围，也将增加你患与高血压的相关疾病的风险。</p>
<p style="text-align: center;"><strong>表2-1 确认你的血压等级</strong></p>

<table class="custom-table"  class="custom-table" summary="确认你的血压等级">
<thead>
<tr>
<th scope="col">血压(mmHg)</th>
<th scope="col">理想</th>
<th scope="col">正常</th>
<th scope="col">正常高值</th>
<th scope="col">高血压</th>
</tr>
</thead>
<tbody>
<tr>
<td>收缩压</td>
<td>&lt;120</td>
<td>120~129</td>
<td>130~139</td>
<td>≥140</td>
</tr>
<tr>
<td>舒张压</td>
<td>80~8485~89≥90</td>
</tr>
</tbody>
</table>

<p>高血压是“寂静”的，但却是致命的，你感觉不到高血压的存在，没有症状表现使得高血压非常危险。只有测量了血压，你才会发现是否增高。尽管高血压不会表现出可能正在发生的损害，但可能正在通过损伤内皮产生严重的机体损害，内皮的损伤影响了机体本身生成了一氧化氮的能力。这一系列变化逐渐导致动脉的炎症，继而使动脉粥样硬化。高血压也可使心脏扩大，诱发心脏病发作或卒中，并可引起肾功能不全。</p>
<h4><strong>高血压的危险性</strong></h4>
<p>根据Franmingham心脏研究的结果，约为1/2首次发作的心脏病患者和2/3首次卒中患者的血压值在160/95mmHg以上。如果你和5000万美国人一样已经患有高血压，那么发生卒中的危险将是血压正常人群的7倍。</p>
<p>一氧化氮如何降低高血压 与体内其他任何因素相比，一氧化氮能更好地舒张血管平滑肌，随着平滑肌的舒张，血管被扩张并使血流更容易通过，从而可以降低血压。</p>
<h4><strong>令人惊奇是事实</strong></h4>
<p>“在一氧化氮治疗仅仅3周后，我的血压下了15%。”</p>
<p>——Joe，45，St. louis</p>
<h4><strong>一氧化氮时代的降压治疗</strong></h4>
<p>“我丈夫去年一直被高血压所困，并服用降压药物治疗，但是今年的血压水平更高，药量也有所增加。他工作压力很大。后来，我从6月10日晚开始给他服用促进一氧化氮生成的保健品，下面是一些令人吃惊的数字：</p>
<table width="40%" border="0">
<tbody>
<tr>
<th scope="col" colspan="2" align="left">一氧化氮治疗前</th>
</tr>
<tr>
<td>日期</td>
<td>血压值(mmHg)</td>
</tr>
<tr>
<td>6/7</td>
<td>150/82</td>
</tr>
<tr>
<td>6/8</td>
<td>145/94</td>
</tr>
<tr>
<td>6/9</td>
<td>146/96</td>
</tr>
<tr>
<td>6/10</td>
<td>141/97</td>
</tr>
<tr>
<th scope="col" colspan="2" align="left">一氧化氮治疗后</th>
</tr>
<tr>
<td>6/17</td>
<td>127/87</td>
</tr>
<tr>
<td>7/17</td>
<td>121/87</td>
</tr>
</tbody>
</table>
<p>这些结果难道难以置信吗?从现在起我们成了忠实的一氧化氮友好家庭!</p>
<p>——Patricia,53,Boston</p>
</div>
</div>
<div style="display: none;">
<div id="NOdisease6">
<h2><strong>一氧化氮与动脉粥样硬化</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<p>当你年轻时，心脏周围的血管弹性良好，血管内径3mm，但是没有人能永远年轻。当大多数人变老时，光滑的动脉内壁逐渐变厚并失去部分弹性。同时，脂质(或称斑块)在动脉壁上逐渐沉积，这一过被称作动脉粥样硬化或动脉硬化，当其发生时，使中年人的记忆减退并促使老年人形成老年痴呆。动脉粥样硬化还是引起外周动脉疾病的一个因素，可使下肢的动脉变窄从而导致血流量不足，特别是60岁或60岁以上的吸烟者。</p>
<h4><strong>动脉斑块 </strong></h4>
<p>可以想象健康的内皮细胞像特氟隆一样光滑，而不健康的内皮细胞像尼龙胶带一样富有粘性并引致斑块附着。动脉粥样硬化的斑块不仅包含低密度脂蛋白或称之为纤维蛋白的凝血物质。当这些物质在冠状动脉上的沉积明显增多时，将阻止心脏从血液中获取足够的氧，引发心绞痛发作或胸痛，特别是在锻炼或其他类型的体力劳动而导致心脏负荷增加时更易发生。</p>
<p>一旦斑块变大变脆，他们会裂变、破裂，并从动脉上脱落。当伴有其他损害时，可引起机体的反应而使血液凝结成血栓。当动脉内有血栓形成时，后果非常严重。血栓可堵塞血管通道，阻碍血液流入心脏和大脑，从而引起心脏病发作和卒中。</p>
<p>一氧化氮如何防治动脉粥样硬化，动脉粥样硬化和高血压一样与内皮的损伤密切相关。内皮的损伤能减少一氧化氮的生成。为了保持心血管的健康，机体需要产生有益于健康的足量的一氧化氮。事实上，当机体在生成足量甚至过量的一氧化氮时，不可能形成斑块和动脉粥样硬化，甚至可逆转这些情况。</p>
<h4><strong>一氧化氮治疗循环障碍</strong></h4>
<p>我丈夫的一条腿患有循环障碍，夜间经常由于疼痛醒来4-5次，自从使用促进一氧化氮生成的保健品后，他夜间从未醒过，整夜睡眠无任何不适，这使他精力充沛，并对一氧化氮的防治作用充满信心。</p>
<p>——Dee,48, Idaho</p>
</div>
</div>
<div style="display: none;">
<div id="NOdisease7">
<h2><strong>一氧化氮与心脏病、卒中</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<h4><strong>心脏病发作</strong></h4>
<p>冠撞动脉内的血凝块也许只有几分之一英寸厚，重不足一盎司，但是如果它部分或者完全剥夺了心脏供氧，就将中断心肌细胞所需要的营养，从而引起心脏病发作。医生会用一个医学术语来描述心脏病发作——心肌梗死，心肌即心脏的肌肉，梗死即由于缺氧而致的组织坏死。</p>
<h4><strong>心脏病的症状</strong></h4>
<p>如何判断心脏病正在发作?在大部分病例，可能出席下列一种或一种以上的症状：</p>
<p>胸骨后压榨样疼痛或不适，持续数分钟后，症状减轻并缓解。</p>
<p>疼痛发散至手臂、肩部或颈部。</p>
<p>胸部不适时伴有恶心、气短或头晕。</p>
<p>不典型症状：心脏病患者无胸痛症状而表现为恶心、头晕、无法解释的焦虑、抑郁或疲劳。</p>
<p>心脏病发作的不良后果 心脏病发作不仅可由血凝块引起。也可由动脉的突然收缩或痉挛。因缺少氧气，部分心肌组织会“饥饿”并开始死亡，很快引起一系列的严重的损害。根据美国心脏协会的研究，大部分心脏病患者永远不能完全恢复。在65岁以下的心脏病发作患者中，约有一半在心脏病发作开始后8年内死亡。因此更有理由保持机体较高的一氧化氮水平以减少患心脏病的机会。</p>
<p>心脏病发作是可以防治的 不是每次心脏病发作都是致命的。事实上，在急诊科给予及时监护和溶栓药物治疗，部分心脏病患者可以存活。每年1100000美国人出现心脏病发作，其中2/3的人能活下来。记住，一氧化氮能减少心脏病再次发作的机会，因此，即使你是一个心脏病患者，你也可以从中获益。</p>
<h4><strong>一氧化氮如何防止心脏病发作</strong></h4>
<p>一氧化氮通过降低血压和胆固醇，改善血液循环来防止心脏病发作。</p>
<h4><strong>卒中</strong></h4>
<p>虽然心脏病累及心脏，卒中影响大脑，但它们有很多相同之处，并超出了你的想象。尽管卒中发生时，血栓附着的部位是脑的供血血管而不是心脏的供血血管，但两者均由血栓诱发。当血栓形成时，血栓影响血流，减少了脑细胞的供氧。结果脑组织受损，功能丧失，甚至脑死亡。</p>
<p>颈动脉是血栓形成最常见的部位，位于颈部是两侧。当血管壁一氧化氮生成减少时，更容易形成斑块和卒中。</p>
<h4><strong>一氧化氮如何预防卒中</strong></h4>
<p>一氧化氮的两个关键功能即防止血栓形成和避免动脉壁斑块附着，对预防卒中的发生有非常重要的作用。</p>
<h4><strong>生活方式，生活方式，生活方式</strong></h4>
<p>医生可能已经和你谈论过有关心血管疾病的高危因素。目前尽管某些危险因素尚不能控制，如心血管疾病的家族史、衰老和性别，但是通过选择不同的生活方式，你可以改变其他多种危险因素，因为心血管疾病的预防常常取决于你所选择的生活方式。既然本书是有关预防和治疗心血管疾病的书，所以一些常用的降低危险因素的方法应该提及。</p>
<h4><strong>你必须选择的生活方式</strong></h4>
<p>戒烟 如果你吸烟，那么患心血管疾病和心脏病发作的危险将至少增加一倍。每天吸的烟越多，你的危险性越高，此外，吸烟会损伤动脉的内皮细胞，破坏机体生成一氧化氮的能力。</p>
</div>
</div>
<div style="display: none;">
<div id="NOdisease8">
<h2><strong>一氧化氮与胆固醇</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<h4><strong>降低血胆固醇水平</strong></h4>
<p>当胆固醇水平升高时，心脏病发作的危险也增加，胆固醇有两部分构成：低密度脂蛋白或称“坏”胆固醇和高密度脂蛋白或称“好”胆固醇。当血流中存在过多的低密度脂蛋白时，他将逐渐在动脉壁的内膜上沉积，从而促进动脉粥样硬化斑块的形成。高水平的低密度脂蛋白显然具有潜在的危险，从而获得“坏”这个绰号。另一方面，高密度脂蛋白之所以称为“好”，是因为他对清除动脉壁上的胆固醇和减慢斑块的形成作用。</p>
<p>低密度脂蛋白水平的高低是预测心脏病发作和卒中的最好指标，较高的数值显示较高危险。低密度蛋白水平可被分为以下几级：</p>
<table width="40%" border="0">
<tbody>
<tr>
<td>低密度脂蛋白胆固醇水平(mg/dl)</td>
<td>状态</td>
</tr>
<tr>
<td>&lt;100</td>
<td>理想水平</td>
</tr>
<tr>
<td>100~129</td>
<td>接近或高于理想水平</td>
</tr>
<tr>
<td>130~159</td>
<td>高限</td>
</tr>
<tr>
<td>160~189</td>
<td>高</td>
</tr>
<tr>
<td>≥190</td>
<td>过高</td>
</tr>
</tbody>
</table>
<p>另一种经常采用的测量胆固醇方法是 胆固醇比。胆固醇比的计算方法为总胆固醇(LDL加HDL)除以HDL。例如，一位患者的LDL为150，HDL为50，那么总胆固醇比为目的，理想的比值被规定为3.5，推荐的水平在5.0以下。</p>
<h4><strong>胆固醇水平的控制取决于你自己</strong></h4>
<p>表中所列的低密度脂蛋白水平可能比你进去看到的数值偏高，但我仍然坚持使用。因为该书将促使美国健康机构进行有关修改这些数值的讨论。美国心脏协会、美国心脏学院以及国家心脏、肺和血液 中心对这种修改已经认可。这将导致理想的LDL水平从100mg/dl降至70mm/dl，这种修改的意义是把更多的人列为高LDL胆固醇血症范围，需要应用他汀类药治疗。</p>
<p>推荐的修改意见已经引起了一些争议，我认为科学对待建议的方法是你应该记住近年来行之有效的数值，即表中的数值。我最想表达的是你应该尽力做好每一件事情来降低自己的LDL水平。</p>
<p>如果采用我的一氧化氮养生法，把饮食和生活方式作仔细调整，医生可能会告诉你减少他汀类药物的用量或停用。我不想让你仅仅依靠药物和随时变化的指南生活，而不对自己的健康负责。大自然已经给予了你有益于心血管健康的神奇药物——一氧化氮，它恰好在你体内生成。创造出一个让一氧化氮发挥作用的最佳环境取决于你自己。</p>
<h4><strong>一氧化氮疗法促进了他汀类药物的疗效!</strong></h4>
<p>随着数千万患者服用降低LDL的他汀类降脂药物，你可能很想知道为什么一氧化氮疗法对降低胆固醇必不可少这一事实。事实上，一氧化氮疗法是减少或停用他汀类药物的自然方法而没有任何副作用。</p>
<p>他汀类药物不只是降低胆固醇。即使是小剂量，他们也能刺激血管内皮细胞生成一氧化氮，从而有助于逆转动脉粥样硬化的形成。更重要的是，一氧化氮本身也有助于降低胆固醇水皮。总之，他汀类药物和一氧化氮对心血管的健康能产生协同作用。</p>
<p>随着一氧化氮治疗心脏疾病文章的出版，我们对一氧化氮和他汀类药物协同作用的进一步理解实际上刚刚被报道。我的有关这个课题的研究论文也刚刚发表在2004年美国最具权威性杂志《美国国立科学院研究汇编》上。在这次重要的研究中，我发现一氧化氮和他汀类药物联合应用时其降低胆固醇的效果是单独使用他汀类药物的几倍。在这项研究中，我的合作者试着合成了一种新药，这种药由一氧化氮和他汀两种成分组成，其疗效比单用其中任何一种成分都好。一氧化氮和他汀类药物协同作用能降低胆固醇并预防动脉粥样硬化，对此我非常感兴趣。从这个讨论中你得到这样最重要的信息：如果服用他汀类药物，同时也应该采取一氧化氮疗法以增强疗效;如果没有服用他汀类药物，一氧化氮疗法也能帮你预防动脉粥样硬化。采用上述任何一种方法，一氧化氮在预防高胆固醇血症中的作用都非常重要且不能忽视。因此不要犹豫——立即开始采用一氧化氮疗法。</p>
<h4><strong>控制高血压</strong></h4>
<p>控制高血压时必须克服心脏负荷的增加才能保证全身的血液循环，从而加速了血管的损害。因此保持血压正常或低于正常范围是非常必要的，早期的正常范围是120/80~129/84mmHg。血压值&lt;120/80mmHg 最理想的。</p>
<p>当然，血压是机体重要的生命体征，其数值不是恒定不变的。而且与测量时的环境密切相关。体力活动、就诊时的焦虑心情甚至摄入的食物和饮料都能人为的增加血压值。一次的血压值不能绝对反应心血管的健康状况。最好请医生对你的血压测量值做一个全面的解释。</p>
</div>
</div>
<div style="display: none;">
<div id="NOdisease9">
<h2><strong>一氧化氮与高血糖</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<h4><strong>控制血糖</strong></h4>
<p>高血糖是指血液中含有过多的葡萄糖，这可由疾病、进食过多、缺乏锻炼、糖尿病或许多其他不利因素引起。高血糖是危险的，因为它增加了你患心血管疾病、神经损害、循环障碍、视力损害、肾脏疾病和性功能障碍的危险。有关高血糖的触目惊心的统计学数据显示：女性糖尿病患者患高血压的危险增加5倍，男性患者增加2倍。</p>
<p>高血糖有许多症状，包括烦渴、饥饿、多尿、皮肤干燥瘙痒、疲乏或困倦、视物模糊、恶心和呼吸障碍。常用血糖仪测量血糖，该仪器需要一滴血，这滴血通过刺破患者的皮肤采集。不得用针连续刺破皮肤是一件令人很不愉快的事情，所以如果你还没有患糖尿病应该设法采用一种有利于一氧化氮生成的生活方式，保持血糖水平正常，这样就会避免这种测量。美国糖尿病协会的血糖标准：</p>
<p>早餐前血糖为80~120mg/dl</p>
<p>白天盒睡前血糖为100~140mg/dl</p>
<p>餐后1~2小时血糖小于180mg/dl</p>
<h4><strong>不要饮酒过量</strong></h4>
<p>每天一杯红酒对心脏健康有益，因为红酒中富含抗氧化剂，这有利于保障机体一氧化氮的供应。如果你饮酒过量，反而会减少一氧化氮的生成，引起血管收缩，最终导致多种心血管疾病，更不用说严重的肝脏损害了。大量饮酒比每日两次的中度饮酒后果更严重。</p>
<p>如果你担心无法减少自己的饮酒量，我建议你加入匿名嗜酒者组织。这个组织通过采用团体帮助和个人谈心的方式，可使数百万人摆脱酒瘾并健康地生活。</p>
<h4><strong>保持体重正常</strong></h4>
<p>如果过度肥胖，你的血压和血脂可能升高，患糖尿病的机会也可能增加。心血管疾病与超重的相关性已被证实。几乎一打开电视新闻频道你就能听到有关于过度的肥胖和超重与疾病关系最新研究。通过健康饮食来控制体重，改善你的心血管状况，低脂饮食是最基本的一部。在这本书后面“一氧化氮养生法”一章，你将学习这种饮食方案。</p>
<p>根据不同性别、年龄和身高的理想体重对你的体重进行评估可能有点主观性。实际上，理想体重不是简单地看一个表，因为体重的标准测量——体质指数(BMI)，不考虑像体形这样的因素。当然，一个经过高度训练、肌肉丰富的健美运动者与普通人相比，相对于他的身高将会超重，然而BMI的范围不考虑这些体型上的差异，这些健美运动者将被列为超重人群。</p>
<p>在这里，我给你的最好告诫是：如果你的体重比医生告诉你的标准体重超出至少15%~20%，那么过度肥胖将会增加心脏和血管的负荷。内皮细胞生成的一氧化氮将减少，对疾病的易感性会增加。如果你不知道是否超过了医生建议的体重，那么去看医生，确定你的标准体重并发现有关健康的其他方面问题是非常必要的。</p>
<h4><strong>规律的锻炼</strong></h4>
<p>改善心血管健康并减少患者心脏疾病危险的非常有效方法是有氧运动。锻炼有助于降低肥胖、高血压、高血糖和高胆固醇的危险，因而减少发生心脏病和卒中的危险。如散步、跑步、游泳和跳舞这样的有氧运动是有效的，因为这些运动可以使机体变得更强壮、更健康而对这些应激发生反应。锻炼是“一氧化氮养生法’方案的一部分，后面将会更详细讨论。</p>
<h4><strong>减少压力、焦虑、孤独和抑郁</strong></h4>
<p>这听起来容易，然而实际上很难，因为这些情绪性疾病很难定量。我们确实知道，这些情绪性疾病可通过减少一氧化氮的生成使血管收缩，增加心血管疾病和心脏病发作的可能性。如果这种情况变为慢性，那么机体一氧化氮的生成将持续减少。</p>
<p>许多长期经受压力、孤独和悲伤的人喜欢应用情绪调整药物改善自己的心情——从安定到马提尼酒到咖啡因。因为暂时的情绪升高可导致宿醉效应，甚至会使人比以前更难受，所以这些做法是有害的，如果你想自己治疗，就必须和医生公开探讨，医生可能为你用一种抗抑郁药物或建议你看精神科专家。为了享受最理想的健康和快乐，这当然是我对你的期望，你不应使自己的身体和精神长期处于压力、焦虑、孤独和抑郁状态中。</p>
<h4><strong>医生预防心血管疾病的方法</strong></h4>
<p>如果医生发现你患了或可能患了心血管疾病，他可能提出一些治疗方法。可能采用他汀类药物来降低血胆固醇或利尿剂、β受体阻滞剂来降低血压。也可能认为你需要做血管成形术，用一个末端带有球囊的导管穿过被阻塞的动脉，用球囊压缩斑块使动脉扩张恢复血流。医生甚至可能鼓励你行冠状动脉搭桥手术，即取用自身其他部位的血管在已阻塞的心脏血管周围重建血流。</p>
<p>所有的这些方法都有副作用。例如，血管成形手术可使动脉扩张，但是疗效可能只是暂时的，再狭窄率很高，使动脉像手术之前一样再次被阻塞。根据施行搭桥手术的医生和医院不同，其成功率各异，但有少部分病人可再这项侵袭性手术的过程中或手术后死于并发症。</p>
<p>在所推荐的方法中，你可能发现有一点被忽视了。大部分医院忽略了一氧化氮，即本书的重点谈论的一种有益于改善健康的物质。</p>
<h4><strong>一氧化氮的作用</strong></h4>
<p>如果是以心血管的健康为目标，那么应该把一氧化氮治愈心脏健康方案的第一线。许多心脏病发作和卒中是可以预防的。即使已经患了心血管疾病，你仍可以阻止其进展。</p>
</div>
</div>
<div style="display: none;">
<div id="NOdisease10">
<h2><strong>一氧化氮的科学：神奇分子产生的难以置信的效果</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<p>一氧化氮是生物学中最简单的分子之一，仅由两个原子组成——一个氮原子(N)和一个氧原子(O)。尽管一氧化氮的结构简单，但目前一氧化氮被认为是体内最重要的分子，对机体健康至关重要。我确信一氧化氮能防止心血管系统的老化，使其比实际年龄所应具备的健康状况更好。</p>
<p>在过去20年里，我把所有的心血都倾注与这一小分子的研究方面。年复一年，每天12小时、14小时、16小时——我对证明他的重要性很痴迷。我已经得出结论：健康和疾病的差别就在于机体一氧化氮活性的不同。一氧化氮确实是生死攸关的重要物质，让我告诉你其中的原因。</p>
<h4><strong>你究竟有多年轻?</strong></h4>
<p>如果50多岁并已患了与年龄相关的疾病，如心脏病或糖尿病，那么很可能正经历着由于衰老所产生的机体变化。如果你20多岁、30多岁或40多岁，很显然你应采取各种可能的措施来确保在未来的数年里你的心脏和血管仍处于健康状态。</p>
<p>无论你是老年还是青年，从现在开始采用预防机体老化的方案都还不算晚。</p>
<h4><strong>保持脉搏正常</strong></h4>
<p>在开始采用一种新的健康方案前与医生进行沟通很重要。当你和医生谈话时，他肯定会问你及你体检时所测定的两个最重要的生命特征：休息时的脉率和血压。大多数40岁以上的美国人队自己的血压和脉搏一无所知，也不知道多少是高多少是正常和多少是低。其中大多数人知道自己的体重是多少斤，但却不知道这些与生命息息相关的数值。</p>
<h4><strong>你必须知道的重要数值</strong></h4>
<p>正常休息时的脉率(每分钟心跳的次数)为65~75。正常的血压为125/80mmHg左右。尽管2003年9月《美国医学会杂志》上发表的一片文章把正常血压修改为115/75mmHg援引研究显示在这个血压水平时动脉可开始受损。</p>
<h4><strong>一氧化氮：机体自身合成的神奇的心血管药物</strong></h4>
<p>在和医生谈论生命体征数值的过程中，你可能发现，为了让血管在体内正常循环，你必须降低自己的血压和脉率，并通过减轻血管狭窄调整血管状态。如果你明白一氧化氮具有恢复健康特性这一点，那么这些问题的解决就不会令人望而生畏。一氧化氮在动脉内生成，因为它是一种信号分子，可使血管舒张或扩张，所以它有助于保护所有血管的弹性。</p>
<p>长久以来，只能采用危险且常常无效的手术方法治疗心血管疾病所致的损害，而采用其他方法一直被认为是不可能的事情。我因为做了人们认为不可能的事情而获得了医学诺贝尔奖。我们现在知道，一氧化氮能够逆转心血管的损伤——利用体内生成的“神奇药物”，即一氧化氮。</p>
<h4><strong>一氧化氮改变了我的状况</strong></h4>
<p>“我有三个4岁以下的孩子，多种维生素使我和他们一样健康，但是因为我提高了机体的一氧化氮水平，所以孩子们如我健康。”</p>
<p>——Elaine,31.New jersey</p>
<p>一氧化氮是一种很强的信号分子，存在与心血管系统、神经系统乃至全身。一氧化氮可以透过细胞膜并传递特定的信息或生物信号以及调整细胞的活动，并指导机体完成某种功能。一氧化氮几乎可影响机体的每一个器官，包括肺、肝、肾脏、胃、生殖器，当然还有心脏。</p>
<p>在一氧化氮的诸多作用中，以血管舒张作用最为重要，这有助于调整血流至全身的每一个部位。一氧化氮可舒张和扩张血管以确保心脏的足够供血。一氧化氮也可阻止血栓形成，血栓可诱发卒中和心脏病发作，同时一氧化氮可调节血压。</p>
<p>一氧化氮的另一个重要作用就是减慢动脉粥样样硬化斑块在血管壁的沉积。在冠状动脉内，胆固醇和脂肪逐渐增多并形成vdongmai硬化斑块，结果使动脉变窄、甚至阻塞动脉，从而使心脏血液供应减少，一氧化氮可以消除这种斑块。我的研究强烈提示利用一氧化氮的这种作用可拮抗动脉粥样硬化斑块的形成。一氧化氮和他汀类常用药物如立普妥和洛伐他汀类合用不仅安全，而且可以提高药物的疗效。其重要的机制之一是这些药物可提高和维持一氧化氮的生成，而一氧化氮疗法也具有同样的效果，只不过前者是自然生成的。</p>
<p>免疫系统利用一氧化氮来抵御传染性细菌、病毒和寄生虫的侵袭，甚至以此抑制某种癌细胞的增殖。对于中、重度糖尿病患者，一氧化氮能防止多种常见而严重的并发症，特别是那些与血供减少相关的并发症。因为大脑利用一氧化氮来储存和恢复长期记忆，并传递信息，所以一氧化氮对记忆功能非常重要。目前我们正在研究一氧化氮对预防阿尔茨海默病所起的重要作用。</p>
<p>一氧化氮作为一种抗炎物质，可以明显减轻关节炎的关节肿胀和疼痛，这种作用正在研究之中。一氧化氮通过保护胃肠道黏膜血流正常以防止胃溃疡的形成。作为一种神经递质，一氧化氮能增加生殖器的血流，这对维持正常性功能发挥重要作用。我在这一领域的研究成果为处方药“伟哥”的研制奠定了基础。一氧化氮是一种强抗氧化剂，他可使机体内常被称作氧自由基的物质失活，而这种自由基可促使美国四种主要致死性疾病，即癌、糖尿病、心脏病和卒中的发生。</p>
<p>机体内一氧化氮的作用似乎还不只这些。随着在科研中对一氧化氮关注程度的提高，这种独特分子显示出的重要作用越来越多。一氧化氮的许多作用将在以后各章汇总全面讨论。但在这里我想让你了解是的他几乎对全身各方面都有着广泛的作用。</p>
<h4><strong>内皮生成一氧化氮</strong></h4>
<p>机体自身是一氧化氮的最佳来源，一氧化氮主要由内皮生成。内皮是位于血管内膜的细胞层。内皮组织非常薄而且容易损伤，他将血液与血管平滑肌层分隔开。当内皮营养良好时，一氧化氮水平正常且血流畅通，心脏和其他每个器官的供血也会良好。当机体剧烈活动时，对于像消化这样的生理过程，都会增加对血液的需求，而一氧化氮也能满足机体的这种需要。当机体处于休息状态时，一氧化氮产生则较少，这是血流速度也即减慢。</p>
<p>内皮组织只由一层内皮细胞构成，因此你可能认为内皮细胞间的连接不够紧密，而无法保证机体的健康。尽管将血液和组织机体负荷过重，内皮细胞分隔开的内皮层很薄，但其在机体内的持续作用无可置疑。如果机体负荷过重，内皮组织仍可保证一氧化氮的供应，在内皮一氧化氮合成酶的帮助下，内皮细胞就像制造和生产一氧化氮工厂，源源不断地生成一氧化氮以满足机体对健康的需要。</p>
<p>只需利用少量的一氧化氮即可发挥其强大的治疗作用，但大部分人却不能产生足量的一氧化氮来保证心血管系统的功能。当内皮组织由于年龄、不良生活习惯、疾病、有害环境或遗传而受到损失时，会加重一氧化氮的生成不足，结果使一氧化氮减少。机体对各种严重疾病的易感性增加。本书着重于心血管疾病，特别是对一氧化氮不足如何影响6200万血压升高、动脉粥样化、心脏病、高血压病、心衰或卒中患者的病情进展进行了几种探讨。我们知道，如果机体内一氧化氮缺乏，可以用促进一氧化氮生成的饮食、补品和适量运动来补偿。</p>
<h4><strong>杜绝心血管疾病的发生</strong></h4>
<p>在人一生中，不健康的生活方式、环境毒素和与年龄相关的机体老化均可损失内皮。当这些情况发生时，内皮细胞生成的一氧化氮量降减少或根本不能生成一氧化氮，这使你对心血管疾病的易感性增加。</p>
<p>尽管内皮细胞适应能力很强，但是健康状况的变化也可损伤这些细胞，从而削弱机体产生一氧化氮的能力。例如，如果你患中、重度高血压多年，作用于血管壁的压力可能已经损伤了血管内皮，从而引起心、脑重要器官的损害。加上内皮损伤的其他高危因素——高胆固醇、高血糖、吸烟和长期食用富含饱和脂肪的高胆固醇饮食，内皮系统的损伤会明显加重。</p>
<h4><strong>我是个一氧化氮迷</strong></h4>
<p>我父亲58岁时死于心脏病，我想让我的孩子们长寿。我对促进一氧化氮生成的补品、饮食习惯和规律锻炼很有信心。我已经注意到一氧化氮除对长期健康有益外，还有其他方面的积极作用。首先，我睡眠改善了。最近，在锻炼之前我服用一氧化氮补品，在锻炼期间我发现自己更有耐力且心率下降了。最后，我注意到呼吸能力有很大改善。我是一个户外活动过敏者，一氧化氮疗法让我吸入了更多的新鲜空气，且呼吸比以前更轻松。</p>
<p>——Wayne,38,Oregon</p>
<h4><strong>分享财富</strong></h4>
<p>作为一名研究人员，我的一生都在不断地经历着挑战和惊喜。在我身边的研究生、博士后、访问学者、医学工作者、技术员和同事的支持下，在新发现时的兴奋驱动下，我常常早晨5时到达办公室，并工作到深夜，这种兴奋常伴随着坎坷和欢乐。我写《一氧化氮让你远离心脑血管病》这本书，以期望并相信全世界的人们能从我20多年的研究中获益，从而避免不健康因素，使自己和自己所爱的人享受更长、更健康的生命。</p>
</div>
</div>
<div style="display: none;">
<div id="NOdisease11">
<h2><strong>一氧化氮在体内四个重要生理过程中的作用</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<p>人体内有四个重要的生理过程：血管紧张度调节、凝血过程、炎症反应和氧化作用。每一过程在机体内均发挥着积极或消极的作用。在本章，我将阐述一氧化氮疗法如何提高其积极作用，消除消极作用，来挽救生命这一问题。</p>
<h4><strong>血管紧张度的调节：有利于降低血压</strong></h4>
<h5><strong>血管紧张度调节的益处</strong></h5>
<p>如果血管平滑肌不能有效地收缩和舒张血管将会产生什么后果呢?其结果是无法调节血流。切记，收缩压是指心室收缩时泵出血液对动脉壁产生的压力。相反，舒张压是指心室舒张时血液对血管壁的压力，此时为心室收缩和射血做准备。如果没有足够的血管紧张度，将导致血管不能有效地收缩和舒张，我们体内的血液将无法循环。</p>
<h5><strong>血管紧张度调节和血管收缩的害处</strong></h5>
<p>如果血压升高，表明血管被收缩或阻塞。如果血液不能正常流动，内皮细胞迟早将被完全迫坏。一旦影响一氧化氮的生成，患心脏病和卒中的危险将大大提高。</p>
<h5><strong>一氧化氮的作用</strong></h5>
<p>通过促进体内血液循环，一氧化氮能够保护血管平滑肌组织，从而防止有害的血管收缩，同时保护内皮细胞致使血压不会太高。</p>
<h4><strong>凝血过程：防止过度凝血</strong></h4>
<p>一氧化氮如何精确地防止血液中血凝块的形成呢?这与降低血压的机制不同。一氧化氮能够阻止卒中的病因——血小板聚集和细胞碎片形成，这些碎片易在血流形成斑块。</p>
<h5><strong>凝血过程的益处</strong></h5>
<p>在正常情况下，凝血是机体重要的生理过程。如果你被割伤或刺破了手，这时不仅损害了皮肤，而且损伤了皮下血管。当开始出血时，机体的凝血机制立即发挥作用。血小板聚集并粘附在一起，形成止血栓堵塞血管破裂口，最终结痂愈合。</p>
<h5><strong>凝血过程的害处</strong></h5>
<p>如果血管壁被损伤——那可能因为动脉壁有斑块形成——此时血小板开始成簇地再损伤部位聚集。如果局部形成血栓或破裂的异常血凝块进入血流，最终将阻塞或阻止血液流动，诱发心脏病和卒中。当血栓发生在冠状动脉时，称之为冠脉血栓；当血栓发生在脑血管时，即脑血栓。</p>
<h5><strong>一氧化氮的作用</strong></h5>
<p>一氧化氮通过保证心血管系统的规律泵血，以维持血管和动脉壁的清洁。切记：不正常的血管和动脉就像尼龙绳，可吸附外来有害物质，而一氧化氮的血管网络作用就像特氟隆，可使斑块和血小板脱落，抑制、延长或阻止在初始位置形成血栓。</p>
<h4><strong>炎症反应：防止动脉粥样硬化症形成</strong></h4>
<p>下面，让我们集中讨论另外一种重要的心血管疾病：动脉粥样硬化。动脉粥样硬化的形成是一个渐进地动态炎性过程，需经历数年才形成斑块。一氧化氮在这个过程的早期即能发挥作用预防动脉壁增厚和脂质的沉积。</p>
<h5><strong>炎症反应的益处</strong></h5>
<p>在可控水平内，炎症反应常常不是坏事，而是机体内对抗感染的一种重要方式，像一支强大的军队参加保卫祖国的战争，机体的免疫或防御系统能抵御外来者的侵袭，防止感染和疾病的发生。</p>
<h5><strong>炎症反应的害处</strong></h5>
<p>当炎症过程变为慢性并累及动脉时，将促进动脉粥样硬化的形成。具有正常杀菌作用的细胞开始对抗机体。当血管内发生炎症反应时，这一过程必须被阻止。</p>
<h5><strong>一氧化氮的作用</strong></h5>
<p>下面详细讲述了足量的一氧化氮在预防动脉粥样硬化过程中非常重要的原因。如果血管内膜的内皮细胞以任何形式被破坏，血液中的其他细胞、单核细胞和白细胞可透过血管壁，聚集和渗透至平滑肌层。这些细胞释放一种叫做炎症介质的化学物质，引发平滑肌的炎症反应，导致动脉粥样硬化过程中斑块的形成、发展，并最终阻碍血液流动。</p>
<p>一旦斑块在动脉形成，欲在形成部位避免其损害比预防发生要困难的多。虽然如此，本书中提到的方法至少能终止或者减缓其发展过程，其中一氧化氮能起到关键的预防作用。一旦斑块在动脉内形成后，体积增加、变脆并随时破裂，当发生与脑动脉或冠状动脉时可出现卒中和心脏病。</p>
<p>同时，斑块能损伤内皮细胞生成一氧化氮的能力，增加更多斑块形成的可能性。这是一个使人生命处于危险境地的恶性循环。在一氧化氮的帮助下，抑制斑块聚集非常重要。事实上，除了最大限度的生成一氧化氮外，可能没有更好的方法来维持动脉的清洁和弹性。</p>
<h5><strong>永远不晚</strong></h5>
<p>Sherry的父亲，72岁，来自丹佛市，患有动脉硬化。因为该病他已经失去了一条腿，由于持续的肿胀和疼痛面临着失去另一条腿的可能性。经过5天的一氧化氮治疗，肿胀减少了一半，并且几乎不再疼痛。</p>
<h4><strong>氧化作用 ：防止氧化应激</strong></h4>
<p>心血管研究人员把越来越多的注意力集中于被称之为“氧化应激”的研究方面。当然，氧气对生命本身是必不可少的，从呼吸到维持心脏跳动，在每个环节都极其重要。当机体利用氧时，在氧化过程中产生一些产物，这些产物可能有利也可能有害。</p>
<h5><strong>氧化的益处</strong></h5>
<p>没有此过程，机体的细胞将不能利用葡萄糖为我们提供能量。</p>
<h5><strong>氧化的害处</strong></h5>
<p>机体氧化的有害产物被称为自由基，自由基通过中和一氧化氮而损害机体。不仅易导致心血管疾病的发生，而且导致机体的老化，从皮肤起皱到骨质疏松。</p>
<p>在本书的后面部分谈论“一氧化氮养生法”时，我将会更加详细地讨论氧化应激。现在，这里有必要记住一些重要事实尤其是关于一氧化氮在阻止疾病的过程汇总的作用。</p>
<p>为了使氧化自由基的概念更加清晰，可以想象汽车燃烧汽油产生能量的情景，在这个过程中，汽车排出含有大量有害污染物质的尾气，这些物质可使蓝天变成棕色。同样，人体依赖氧气产生能量，但是当这些能量被利用时，将产生许多有害物质——即自由基。</p>
<p>尽管氧化与机体的正常生化过程相联系，有时候在这一过程中也产生自由基。当这种情况发生时，这种氧化应激明显地对人体有害，损害正常细胞和组织，包括动脉壁的细胞和组织。自由基能损伤内皮细胞。例如，当低密度脂蛋白(坏胆固醇)被氧化时，它的化学结构发生变化并浸润动脉壁，严重损伤内皮细胞，虽然内皮细胞有一定程度的自我修复能力，但持续的氧化应激能破坏有利于自我修复的时机。</p>
<h5><strong>一氧化氮的作用</strong></h5>
<p>一氧化氮能使有引发心血管疾病发生的氧化应激降到最低。氧化应激是一个复杂但非难以克服的因素。当大量存在的自由基未被清除之前，他们会抑制机体生成一氧化氮。当机体处于氧化应激时，机体比正常产生较少的一氧化氮。当机体处于氧化应激时，机体比正常产生较少的一氧化氮。抗氧化剂对改善这种情况有帮助。机体的抗氧化剂类似清道夫。在自由基产生损伤前寻找并中和他们。在“一氧化氮养生法”中的许多保健品都是抗氧化剂，他能破坏存在血管及遍布全身的自由基。</p>
<h5><strong>更安全可靠的…….</strong></h5>
<p>Ethan，29岁，高大强壮，芝加哥股票经纪人。自我保健意识很强，每周进行5天的身体锻炼，因为其父母双方均由心血管病家族史，所以他虽然体质很好，但一直为健康担忧。事实上，他的父亲Gerald,在55岁时酒患上有轻度心脏病。Ethan通过诺贝尔奖的故事了解了一氧化氮，从此对其产生了极大兴趣。通过网上，他发现一种保健品能够提高机体一氧化氮的水平，之后，为其父亲订购了心康信使一氧化氮。其结果令人惊讶。</p>
<p>几周后，Gerald,的血压和胆固醇水平接近正常。睡眠良好，并且心脏病明显好转。””我喜欢这种东西，”他说，“他的确能挽救生命。”</p>
<p>和父亲一样，Ethan开始作为预防措施服用这种保健品。他说，两个月后，其体力增加了一倍，并且用一半的时间完成比服用一氧化氮以前更多的工作。</p>
<h4><strong>一氧化氮的作用部位：皮内细胞</strong></h4>
<p>在血管内皮细胞生成一氧化氮的同时，身体其他部位也能生成。尽管内皮细胞是一氧化氮的主要生成部位，但某些神经细胞也能生成一氧化氮。例如，刺激支配阴茎海绵体的神经时，激活一氧化氮合成酶，可立即生成一氧化氮，一氧化氮进入阴茎平滑肌，使其舒张。随着阴茎平滑肌的舒张，阴茎血管血容量增加，阴茎勃起。我在这一领域的研究为“伟哥”的研制奠定了基础。</p>
<p>大脑和肺脏的神经细胞也能生成一氧化氮。当肺脏神经细胞释放一氧化氮时，气道舒张，即支气管扩张。在大脑中，与改善学习和记忆、影响人们行为相关区域的脑神经细胞也可以产生一氧化氮。</p>
<p>另一个生成一氧化氮的重要部位是白细胞。这些细胞大小和形态不同，调节着机体的免疫系统。这些细胞能够杀死多种外源行致病微生物，从细菌到病毒到寄生虫。作为该防御系统的一部分，这些白细胞能够生成大量的一氧化氮，这些一氧化氮有助于杀伤病原微生物。</p>
<p>一氧化氮对多种疾病有益——从癌症到消化系统疾病，从结核到学习障碍。因为一氧化氮作为信号分子遍及整个神经系统，所以它能在心脏、肺、肾、大脑、生殖器和其他器官之间传递信息。虽然一氧化氮发挥作用时间短，但正常的内皮细胞可不断地生成更多的一氧化氮。</p>
<p>在后面的章节中，我将鼓励你采用简单但已被证明能后改变生命 类型的生活方式，改变你的健康状况。饮食改变、应用保健品和锻炼身体都非常简单，但它们将以安全和健康的方式 有效地提高机体的一氧化氮水平。</p>
<p>我们对一氧化氮的了解的越来越多，这促使我开始了“一氧化氮养生法”这一项，这也是近几年来医学方面的重大成就。现在你已经有机会充分利用这些我们已经学到的相关知识，并且你的身体将从中受益。</p>
</div>
</div>
<div style="display: none;">
<div id="NOdisease12">
<h2><strong>一氧化氮找到人类更健康更长寿的钥匙</strong></h2>
<h5>摘自《一氧化氮让你远离心脑血管病》</h5>
<h5>原著 Louis J. lgnarro 北京大学医学出版社出版</h5>
<p><img class="alignleft" title="一氧化氮让你远离心脑血管病" src="http://i1162.photobucket.com/albums/q529/hykyanicom/241e04b6.jpg" alt="一氧化氮让你远离心脑血管病" width="200" height="300" data-pinit="registered" /></p>
<h4><strong>一氧化氮找到人类更健康更长寿的钥匙</strong></h4>
<p>“荣获1998年诺贝尔医学奖是我职业生涯中的顶点。这证明我的几十年的研究出现了突破性进展，而这一进展意义深远，将对医药科技产生持久的影响。我和我的同时Ferid Nurad 和Robert Furchgott 发现了心血管健康的“原子”——称为一氧化氮的微小分子。一氧化氮一个曾经只有化学家熟悉的分子——原来可以由人体自身产生，它被人体用来防止引发卒中的动脉粥样硬化斑块的形成。它同时通过舒张动脉维持血压正常，从而调整血流和预防冠心病。一氧化氮是体内天然的心血管奇药。</p>
<p>如同对我们健康的价值一样，对一氧化氮的认定也存在危机。如果我问像你一样的各位读者，一氧化氮是什么？其中大多数人可能会告诉我，一氧化氮是在牙医诊所使用的笑气，是一种含氮的氧化物。另外一些人可能会告诉我，一氧化氮是炸药的关键成分，此时他们可能把一氧化氮和硝酸混淆了。还有的人认为香烟的烟雾中含有一氧化氮，而且是汽车尾气中能导致烟雾和酸雨的有害成分。这最后一种回答虽然没错，但这些秒速只是人们对一氧化氮的了解。而我的研究已经完全改变了科学界对一氧化氮的认识。我写的《一氧化氮让你远离心脑血管疾病》这本书将帮助你了解有关一氧化氮的最新知识。</p>
<p>我们的研究成果能帮助数百万人，甚至能帮助那些已经患有心脑血管疾病的患者维持心血管系统的健康。因此，在不久的将来，如果我们能根治心脏疾病，就可以挽救许多人的生命。</p>
<p>我写的《一氧化氮让你远离心脑血管疾病》一书将传递这一非常重要的信息，以帮助你长寿且享受高质量的生活。按照我提出的有助于促进机体一氧化氮生成的“一氧化氮养生法”，你将在治愈心脏病和卒中的过程中迈出第一步。我相信，在不久的将来我的研究成果可以减少心脑血管疾病的发病，其减少的程度会远远超过10年前医学界最乐观的推测。</p>
</div>
</div>
<div class="clear"></div>
<h2><strong>路易斯J·伊格纳罗的采访节目</strong></h2>
<p class="center"><object width="480" height="405" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"><param name="src" value="http://player.56.com/v_NzA0NTYzNDc.swf" /><param name="allowfullscreen" value="true" /><param name="allownetworking" value="all" /><param name="allowscriptaccess" value="always" /><embed width="480" height="405" type="application/x-shockwave-flash" src="http://player.56.com/v_NzA0NTYzNDc.swf" allowfullscreen="true" allownetworking="all" allowscriptaccess="always" /></object></p>
<div class="divider"></div>

<div class="wumii-hook">
    <input type="hidden" name="wurl" value="http://www.hykyani.com/archives/2125" /><br />
    <input type="hidden" name="wtitle" value="伊格纳罗博士的著作《一氧化氮让你远离心脑血管病》" /><br />
    <input type="hidden" name="wpic" value="" />
</div>
                                <div class="divider"></div>                                <div class="postmetadata">
                                    <span>
发表于 2012 年 7 月 27 日                                     </span> &nbsp; / &nbsp; <span><a href="../blog/kyani_product.php" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp; 
                                </div>
                                <div class="divider"></div>			    </div>
			</div>
<a name="comments"></a>

<script type="text/javascript">
	if (typeof DUOSHUO !== 'undefined')
		DUOSHUO.EmbedThread('.ds-thread');
</script>
	<div id="ds-ssr">

		
            <ol id="commentlist">
                            </ol>

		            
    </div>	    </div><!-- end main-content-padding -->
	</div><!-- end main-content -->
<?php require '../blog/sidebar.php'; ?>
	</div><!-- end sidebar -->
    </div><!-- end content-container -->
<div class="clear"></div>

<?php require '../footer.php'; ?>

<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=0&amp;pos=left&amp;uid=6464100" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config={"bdTop":190};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>

</body>
</html>