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
<title>Kyani金三角健康俱乐部 - 助您体验新的人生！</title>
<meta name="description" content="凯安尼Kyani金三角健康俱乐部网站:旨在让全世界的朋友全面地了解凯安尼Kyani的真实信息。加入凯安尼Kyani的大家庭中来，享受Kyani新乐思、新舒康、尼多乐带来的健康，创造财富，体验生活的乐趣！"/>
<meta name="keywords" content="kyani,凯安尼,蓝莓,三文鱼,一氧化氮保健,Kyani团队,kyani哪个团队做得最好,创业项目,心脑血管"/>
<link rel="canonical" href="http://www.kaianni.net/" />
<link rel="next" href="http://www.kaianni.net/page/2" />
<meta property='og:locale' content='zh_CN'/>
<meta property='og:title' content='Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:description' content='凯安尼Kyani金三角健康俱乐部网站:旨在让全世界的朋友全面地了解凯安尼Kyani的真实信息。加入凯安尼Kyani的大家庭中来，享受Kyani新乐思、新舒康、尼多乐带来的健康，创造财富，体验生活的乐趣！'/>
<meta property='og:url' content='http://www.kaianni.net/'/>
<meta property='og:site_name' content='Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:type' content='website'/>
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
var duoshuoQuery = {"short_name":"hykyani","sso":{"login":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=duoshuo_login","logout":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=logout&_wpnonce=ba771b1d9e"},"remote_auth":"W10= 3582c16625303b14a825a63ef03cc9bf1ba2eed4 1364022541"};
duoshuoQuery.sso.login += '&redirect_to=' + encodeURIComponent(window.location.href);
duoshuoQuery.sso.logout += '&redirect_to=' + encodeURIComponent(window.location.href);
</script>
<script type='text/javascript' src='http://www.hykyani.com/hykyani.com/wp-includes/js/jquery/jquery.js?ver=1.7.2'></script>
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
<body class="home blog   no_title_section">
<?php require './header2.php'; ?>
	<!-- end top-wrapper -->
<!-- end header ------------------------>

	<div class="clear"></div>

        
		<div id="rev-slider-header">
				
				<!-- START REVOLUTION SLIDER 2.2 -->
				
								
								<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:5px;margin-top:0px;margin-bottom:0px;max-height:400px;">
					<div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;max-height:400px;height:400;">						
										<ul>
								<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
						<img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/slide-rev-bg2.jpg" alt="slide-rev-bg2" data-fullwidthcentering="true">
														
				<div class="tp-caption big_orange lfl"  
					 data-x="62" 
					 data-y="139" 
					 data-speed="1000" 
					 data-start="800" 
					 data-easing="easeOutElastic"  >尽在Kyani健康三角组合</div>
								
				<div class="tp-caption black sfb"  
					 data-x="68" 
					 data-y="194" 
					 data-speed="1500" 
					 data-start="1000" 
					 data-easing="easeOutExpo"  ><p class="zw_lmd2">全面针对心脑血管疾病、糖尿病、抗癌抗氧化,清除体内的自由基</p>
<p class="zw_lmd2">修复、滋养、保护身体的每一个细胞</p>
</div>
								
				<div class="tp-caption medium_grey lfr"  
					 data-x="69" 
					 data-y="286" 
					 data-speed="1500" 
					 data-start="5600" 
					 data-easing="easeInOutElastic"  ><a style="color:#FFF; text-decoration:none;" href="./kyani-products/kyani-health-triangle.htm" target="_self">了解更多</a></div>
								
				<div class="tp-caption randomrotate"  
					 data-x="637" 
					 data-y="293" 
					 data-speed="300" 
					 data-start="1800" 
					 data-easing="easeOutExpo"  ><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/1_0001s_0007_aloe-vera.png" alt="Image 11"></div>
								
				<div class="tp-caption randomrotate"  
					 data-x="799" 
					 data-y="31" 
					 data-speed="300" 
					 data-start="2100" 
					 data-easing="easeOutExpo"  ><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/1_0001s_0005_grape.png" alt="Image 13"></div>
								
				<div class="tp-caption randomrotate"  
					 data-x="644" 
					 data-y="59" 
					 data-speed="300" 
					 data-start="2400" 
					 data-easing="easeOutExpo"  ><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/1_0001s_0004_sockeye.png" alt="Image 14"></div>
								
				<div class="tp-caption randomrotate"  
					 data-x="794" 
					 data-y="295" 
					 data-speed="300" 
					 data-start="2700" 
					 data-easing="easeOutExpo"  ><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/1_0001s_0003_rasberry.png" alt="Image 15"></div>
								
				<div class="tp-caption randomrotate"  
					 data-x="516" 
					 data-y="148" 
					 data-speed="300" 
					 data-start="3000" 
					 data-easing="easeOutExpo"  ><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/1_0001s_0002_pomegranate.png" alt="Image 16"></div>
								
				<div class="tp-caption randomrotate"  
					 data-x="794" 
					 data-y="153" 
					 data-speed="300" 
					 data-start="3300" 
					 data-easing="easeOutExpo"  ><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/1_0001s_0008_noni.png" alt="Image 20"></div>
								
				<div class="tp-caption randomrotate"  
					 data-x="646" 
					 data-y="160" 
					 data-speed="300" 
					 data-start="1500" 
					 data-easing="easeOutExpo"  ><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/1_0001s_0006_blueberry.png" alt="Image 21"></div>
								
				<div class="tp-caption randomrotate"  
					 data-x="485" 
					 data-y="246" 
					 data-speed="300" 
					 data-start="3600" 
					 data-easing="easeOutExpo"  ><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/1_0001s_0000_anatto.png" alt="Image 22"></div>
								
				<div class="tp-caption randomrotate"  
					 data-x="510" 
					 data-y="31" 
					 data-speed="300" 
					 data-start="3900" 
					 data-easing="easeOutExpo"  ><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/1_0001s_0001_cranberry.png" alt="Image 23"></div>
								
				<div class="tp-caption randomrotate"  
					 data-x="479" 
					 data-y="-28" 
					 data-speed="3000" 
					 data-start="4400" 
					 data-easing="easeOutExpo"  ><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/1_0000s_0001_water1.png" alt="Image 17"></div>
								
				<div class="tp-caption sfb"  
					 data-x="618" 
					 data-y="40" 
					 data-speed="1500" 
					 data-start="4800" 
					 data-easing="easeInOutBack"  ><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/1_0000s_0000_triangle-pack.png" alt="Image 9"></div>
								
				<div class="tp-caption big_black fade"  
					 data-x="60" 
					 data-y="79" 
					 data-speed="1000" 
					 data-start="500" 
					 data-easing="easeOutExpo"  >天然食物</div>
												</li>
								</ul>
									<div class="tp-bannertimer"></div>					</div>
				</div>				
							
			<script type="text/javascript">

				var tpj=jQuery;
				
									tpj.noConflict();
								
				var revapi3;
				
				tpj(document).ready(function() {
				
				if (tpj.fn.cssOriginal != undefined)
					tpj.fn.css = tpj.fn.cssOriginal;
				
				if(tpj('#rev_slider_3_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_3_1');
				else
				   revapi3 = tpj('#rev_slider_3_1').show().revolution(
					{
						delay:9000,
						startwidth:960,
						startheight:400,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:1,
						
						navigationType:"none",
						navigationArrows:"nexttobullets",
						navigationStyle:"round",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						navOffsetHorizontal:0,
						navOffsetVertical:20,
						
						shadow:2,
						fullWidth:"on",

						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0					});
				
				});	//ready
				
			</script>
			
							<!-- END REVOLUTION SLIDER -->
						</div>
		<!-- end rev-slider-header -->

	    <div class="clear"></div>
                <div id="before-content">
                    <div id="before-content-column" class="container_24">
                        <div class="home-page-divider pngfix"></div>
<div id='before-cont-box-1' class='column_3_of_3 home-cont-box'><div class='column-content-wrapper'><div class="cont_col_1 php_widget substitute_widget_class"><code language="xhtml" gutter="false" tabsize="4" toolbar="true"> 

<div class="three_third"> <h2 style="color:#333;margin-top:0;font-size:28px !important;">我们在做的事业……</h2>
<p>这是一个真正的<strong>健康事业</strong>。</p>
<p>健康发展的美国独资公司，拥有史无前例的财团背景，以<span class="zw_color">复合式电子商务的模式</span>迅速发展，为实现一个美好的愿景：<strong>把健康的生活方式带到世界的每一个角落，以及为更多的人创造一个良好的事业平台</strong>。</p>
<p>健康运作的会员团队，以产品的效果为导向，以公司中的愿景为目标，把<span class="zw_color">最真实</span>的Kyani信息带给身边的朋友。相互扶持，共同进步，亲切地把每一个Kyani人称作“家人”。</p>
<p>如果说寻找事业平台的朋友看中的是<span class="zw_color">公司的实力和公平优厚的激励制度</span>，那么比起这些更能成就他事业和人格的就是<span class="zw_color">Kyani优质的产品</span>。我们身边有许多寻找健康的朋友在自己和家人被产品的效果所感动后，感激把产品介绍给他的人，并不倦地向身边的人分享自己的见证。</p>
<p>您来到这里是幸运的，接下来请认真了解这个爱的事业，<strong>和我们一起享受Kyani带给我们的全新生活方式</strong>！</p>
</div> 
<!--
<div class="one_third last_column"> 

<h2 style="color:#333;margin-top:0;font-size:28px !important;">公告</h2>

<div id="gonggao">
<ul id="slider" class="slider">	
    
		
			<li><a href="http://www.hykyani.com/archives/bulletin/2013%e5%b9%b4%e7%ac%ac%e5%8d%81%e4%ba%8c%e5%91%a8%e5%ae%89%e6%8e%92" rel="bookmark" title="详细阅读2013年第十二周安排"><p>kyani健康俱乐部为了帮助大家更好的健康服务和事业指导！从本周开始课程表：19号周二下午13.00-16.00点健康养生讲座，欢迎大家带领咨询健康的朋友参加，21...</a></li>
		
        
		
			<li><a href="http://www.hykyani.com/archives/bulletin/kyani%e9%87%91%e4%b8%89%e8%a7%92%e5%81%a5%e5%ba%b7%e4%bf%b1%e4%b9%90%e9%83%a8%e8%93%9d%e8%8e%93%e4%b9%8b%e6%98%a5%e6%ad%8c%e8%88%9e%e8%81%94%e8%b0%8a%e6%b4%bb%e5%8a%a8" rel="bookmark" title="详细阅读Kyani金三角健康俱乐部蓝莓之春歌舞联谊活动">Kyani金三角健康俱乐部蓝莓之春歌舞联谊活动，于3月16号周六下午13:00--17:30在上海召开，活动地址：徐汇区交通大学广元西路55号（华山路口）浩然高科技大厦1...</a></li>
		
        
		
			<li><a href="http://www.hykyani.com/archives/bulletin/happy-womens-day" rel="bookmark" title="详细阅读妇女节快乐">今天是国际妇女节，Kyani金三角健康俱乐部祝愿天下所有的妈妈健康、开心！</a></li>
		
        
		
			<li><a href="http://www.hykyani.com/archives/bulletin/web_modification_notice" rel="bookmark" title="详细阅读网站修改通知">Kyani金三角健康俱乐部的家人们，本站在紧锣密鼓地修改中，为的是更好地为大家服务，请联系我们提出您的建议，我们会根据建议的质量给予大家奖励，加油哦~</a></li>
		
        </ul>
</div>
 -->
<script type="text/javascript">
new slider({id:'slider'})
</script>
<!--
</div>
-->
</div> 
</code> 
</div></div></div><!-- end before-cont-box-1 -->                        <div class="home-page-divider pngfix"></div>
                    </div>
                    <!-- end before-content-column -->
                </div>
                <!-- end before-content -->

		<div class="clear"></div>


	    <div id="home-page-content">


	    <div id="content-container" class="container_24">
		<div id="main-content" class="grid_24">
		    <div class="main-content-padding">
<div id='cont-box-1' class='full_width home-cont-box'><div class='column-content-wrapper'><div class="cont_col_1 widget_text substitute_widget_class"><h3 class="cont_col_1_title">凯安尼是您的最佳选择</h3>			<div class="textwidget"><code language="xhtml" gutter="false" tabsize="4" toolbar="true"> <div class="one_third"> <h3><strong>强大的公司带来的是保障</strong></h3>
<span class="custom-frame alignleft"><a title="Kyani公司" href="./kyani-company/kyani-story.htm"><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/Kyani_Company_zpsacffc303.jpg" width="258" height="120" alt="Kyani公司"/></a></span> <p style="margin-top: 10px; float: left;">Kyani凯安尼公司总部位于美国爱达荷州，由美国三大财团创办，七大亿万富翁管理全球运营，是一家独特的复合式电子商务公司。Kyani公司把中国作为战略重点，为中国会员投入许多优惠政策。在发展事业的同时，Kyani作为国际慈善机构Ascend的最大合作伙伴之一，正帮助着无数需要温暖的家庭。</p>
<a class="read-more-align-right" title="Read More..." href="./kyani-company/kyani-story.htm">
<span>了解Kyani国际公司</span>
→
</a>

</div> <div class="one_third"> <h3><strong>正确的食物放入身体就会有效</strong></h3>
<span class="custom-frame alignleft"><a title="Kyani金三角组合" href="./kyani-products/kyani-health-triangle.htm"><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/Kyani_Product_zpsd3056225.jpg" width="258" height="120" alt="Kyani产品" /></a></span> <p style="margin-top: 10px; float: left;">Kyani凯安尼秉承药食同源的理念，将世界公认的三大健康食物——阿拉斯加野生蓝莓、野生红三文鱼、南太平洋大溪地野生诺丽正确配方组合成为最佳的浓缩精华，美味且极易吸收。每款产品成分都有诺贝尔医学奖做支持，效果显著。Kyani公司垄断产品的原料产地保证了产品的价格稳定和强大竞争力。</p>
<a class="read-more-align-right" title="Read More..." href="./kyani-products/kyani-health-triangle.htm">
<span>了解Kyani三角组合产品</span>
→
</a>
</div> <div class="one_third last_column"> <h3><strong>最佳的时机 最佳的事业平台</strong></h3>
<span class="custom-frame alignleft"><a title="Kyani商机" href="./kyani-opportunity.htm"><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/Kyani_Opportunity_zps91061528.jpg" width="258" height="120" alt="Kyani商机" /></a></span> <p style="margin-top: 10px; float: left;">Kyani凯安尼虽为健康产业，却不同于我们熟知的一些直销品牌，是真正的零备货、小投资、大回报的复合式电子商务模式。刚进入中国不久，处于快速发展时期，此天时；产品远销40多个国家，拥有50多万会员，而中国会员比例很少，有很大的发展空间，此地利；公平的运营模式使会员之间互帮互助，此人和。</p>
<a class="read-more-align-right" title="Read More..." href="./kyani-opportunity.htm">
<span>了解Kyani事业商机</span>
→
</a>
</div> <div class="divider"></div> <blockquote>Kyani的使命是让人们体验更精彩的人生，更健康，更富有，更快乐！</blockquote>
<div class="divider"></div> </code>

<div class="clear"> </div>
 
<div class="one_third">
<h3>和我们一起享受</h3>

<ul class="list-1">
    <li>
<p style="margin-top:7px;color:#777;">最健康的生活方式</h5>
</li>
    <li>
<p style="margin-top:7px;color:#777;">最有效的产品组合</h5>
</li>
    <li>
<p style="margin-top:7px;color:#777;">最真实的见证分享</h5>
</li>
    <li>
<p style="margin-top:7px;color:#777;">最稳定的事业机会</h5>
</li>
    <li>
<p style="margin-top:7px;color:#777;">最默契的团队合作</h5>
</li>
    <li>
<p style="margin-top:7px;color:#777;">最专业的培训支持</h5>
</li>
    
</ul>
</div>
<div class="two_third last_column">
<div class="widget widget_latest_posts"><h3 class="widgettitle">健康的事业</h3>		    <div class="latest_posts">
			<ul class="small-thumb">
				<li>
<span class="small-custom-frame alignleft"><a href="./archives/2372.htm" title="蓝莓的功效"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/blueberry.jpg&amp;w=140&amp;h=85&amp;zc=1&amp;q=100" width="140" height="85" alt="蓝莓" /></a></span>				    <a class="teaser-title" title="蓝莓的功效" href="./archives/2372.htm">蓝莓的功效</a>
				    <div class="teaser-content">编者按：蓝莓的功效已被科学界广泛认可，其营养价值也被人们所知，并广泛接受。如今在国内已经掀起了蓝莓热潮，蓝莓汁、蓝莓果酱、蓝莓冰淇淋，虽然种植的蓝莓并没有阿拉斯加野生蓝莓那样的强大效果，但是，其口感和营养价值仍被人称道，那么本文将为您揭开蓝莓这个小小的谜团，谈谈蓝莓的功效。</div>
                                        <a title="蓝莓的功效" href="./archives/2372.htm" class="read-more-align-right"><span>阅读更多</span> &rarr;</a>
				    <div class="clear"></div>
				</li>
				<li>
<span class="small-custom-frame alignleft"><a href="./archives/2368.htm" title="Kyani金三角组合与各种疼痛问题"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/PainManagement.jpg&amp;w=140&amp;h=85&amp;zc=1&amp;q=100" width="140" height="85" alt="Kyani健康三角组合与疼痛" /></a></span>				    <a class="teaser-title" title="Kyani金三角组合与各种疼痛问题" href="./archives/2368.htm">Kyani金三角组合与各种疼痛问题</a>
				    <div class="teaser-content">Kyani健康金三角产品有很好的止痛效果，可以最大程度地缓解疼痛程度。Kyani健康三角组合是三个食用简单、对血流提升效果显著的产品，三款同时使用可以缓解任何疼痛问题，无论是急性的还是慢性的。</div>
                                        <a title="Kyani金三角组合与各种疼痛问题" href="./archives/2368.htm" class="read-more-align-right"><span>阅读更多</span> &rarr;</a>
				    <div class="clear"></div>
				</li>
			</ul>
		    </div><!-- end widget_recent_posts -->
</div>
</div></div>
		</div></div></div><!-- end cont-box-1 -->		      </div>
		      <!-- end main-content-padding -->
		  </div>
		  <!-- end main-content -->
	    </div>
	    <!-- end content-container -->

	    <div class="clear"></div>

<?php require './footer2.php'; ?>

<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=0&amp;pos=left&amp;uid=6464100" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config={"bdTop":190};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
</body>
</html>