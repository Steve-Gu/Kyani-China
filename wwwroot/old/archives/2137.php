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
<title>生育三烯醇与心脏健康|Kyani金三角健康俱乐部 - 助您体验新的人生！</title>
<meta name="description" content="译者按：生育三烯醇是Kyani新舒康的主要成分之一，也叫“生育三烯酚”。新舒康含有取自胭脂树种子的纯生育三烯醇维生素E，非常的强效。我们可以阅读新舒康相关内容先简单了解生育三烯醇。总结一下说，维生素E有两大分支，一种是生育三烯醇，一种是生育醇。作为维生素E家族中两大分支之一，生育三烯醇虽然后被发现，但它的功能远远高于我们平时讲的维生素E，市面上的维生素E基本都是以生育醇或两者的混合物为主，而纯生育三烯醇的抗氧化能力是生育醇的275倍。医学界的大量实验都有力地证明生育三烯醇对心脑血管疾病有很强的预防和修复作用，下面，我们就来看看这些实验结果。"/>
<meta name="keywords" content="生育三烯醇,最好的维生素E,新舒康"/>
<link rel="canonical" href="http://www.hykyani.com/archives/2137" />
<meta property='og:locale' content='zh_CN'/>
<meta property='og:title' content='生育三烯醇与心脏健康|Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:description' content='译者按：生育三烯醇是Kyani新舒康的主要成分之一，也叫“生育三烯酚”。新舒康含有取自胭脂树种子的纯生育三烯醇维生素E，非常的强效。我们可以阅读新舒康相关内容先简单了解生育三烯醇。总结一下说，维生素E有两大分支，一种是生育三烯醇，一种是生育醇。作为维生素E家族中两大分支之一，生育三烯醇虽然后被发现，但它的功能远远高于我们平时讲的维生素E，市面上的维生素E基本都是以生育醇或两者的混合物为主，而纯生育三烯醇的抗氧化能力是生育醇的275倍。医学界的大量实验都有力地证明生育三烯醇对心脑血管疾病有很强的预防和修复作用，下面，我们就来看看这些实验结果。'/>
<meta property='og:url' content='http://www.hykyani.com/archives/2137'/>
<meta property='og:site_name' content='Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:type' content='article'/>
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
var duoshuoQuery = {"short_name":"hykyani","sso":{"login":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=duoshuo_login","logout":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=logout&_wpnonce=33b0d005cf"},"remote_auth":"W10= a5cddf512690d15e09a27062802fb7d8b36e9849 1364046521"};
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
<body class="single single-post postid-2137 single-format-standard   no_title_section">
<?php require '../header.php'; ?>
	<!-- end top-wrapper -->

	<div class="clear"></div>


            <div id="page-content-title">
                <div id="page-content-header" class="container_24">
              
                    <div id="page-title">
                            <h1>生育三烯醇与心脏健康</h1>
                    </div>
                    <!-- end page-title -->
                </div>
                <!-- end page-content-header -->
            </div>
            <!-- end page-content-title -->
	    <div class="clear"></div>

	    <div id="page-content">
			<div class="container_24">
<p class="breadcrumbs"><a href="../index.php">首页</a><span class="breadarrow"> &rarr; </span><a href="../blog/blog.php" title="查看 博客 中的全部文章">博客</a><span class="breadarrow"> &rarr; </span><a href="../blog/kyani_product.php" title="查看 产品相关 中的全部文章">产品相关</a><span class="breadarrow"> &rarr; </span><span class='current_crumb'>生育三烯醇与心脏健康 </span></p>			</div>



    <div id="content-container" class="container_24">
	<div id="main-content" class="grid_16">
	    <div class="main-content-padding">
			<div class="post-2137 post type-post status-publish format-standard hentry category-kyani_product tag-35 tag-39 tag-38" id="post-2137">
			    <div class="entry">
<p><strong>译者按：</strong>生育三烯醇是Kyani新舒康的主要成分之一，也叫“生育三烯酚”。新舒康含有取自胭脂树种子的纯生育三烯醇维生素E，非常的强效。我们可以阅读<a href="http://www.hykyani.com/kyani-products/kyani-the-sunset" target="_blank">新舒康</a>相关内容先简单了解生育三烯醇。总结一下说，维生素E有两大分支，一种是生育三烯醇，一种是生育醇。作为维生素E家族中两大分支之一，生育三烯醇虽然后被发现，但它的功能远远高于我们平时讲的维生素E，市面上的维生素E基本都是以生育醇或两者的混合物为主，而纯生育三烯醇的抗氧化能力是生育醇的275倍。医学界的大量实验都有力地证明生育三烯醇对心脑血管疾病有很强的预防和修复作用，下面，我们就来看看这些实验结果。</p>
<h2><strong>调节血脂：生育三烯醇的“成名曲”</strong></h2>
<p>在19世纪80年代，威斯康星大学的研究员最先发现了生育三烯醇的降血压效果，这也是第一次发现生育三烯醇也可以离开它的孪生兄弟生育醇独立工作。其实，生育三烯醇的降血压机理是相当复杂的，简单地说，它影响酶和蛋白质（3羟基-3甲基-戊二酰-辅酶还原酶 简写：HMGR）的产生，这些酶与蛋白质在肝脏中作用，开始降血压过程[1,2]。德耳塔和伽马生育三烯醇是对血脂调节作用效果最为显著的维生素E形式。</p>
<p>至今，对于生育三烯醇降胆固醇的的临床试验还不多，但是两个开放性试验显示，75mg的不含生育醇的德耳塔和伽马生育三烯醇可以降低15-20%的总固醇和低密度脂蛋白胆固醇。相应地，它们还可以降低同量的甘油三酯。一直以来，我们平时用的补维生素E的营养品中基本都是阿尔法生育醇形式的维生素E，然而，研究表明这种形式的维生素E是和生育三烯醇的作用有冲突的。打个比方，生育三烯醇与生育醇的混合物中，如果阿尔法生育醇的含量超过20%，那么调节血脂的作用就微乎其微了[3,4]，然而，不含生育醇或低生育醇的降血脂作用相当明显[5-7]。</p>
<h2><strong>生育三烯醇对心脑血管疾病的效果芳名远扬</strong></h2>
<p><strong>生育三烯醇与颈动脉硬化</strong>：脑部和颈部的主动脉产生斑块会导致颈动脉硬化，如果这种斑块变得不稳定甚至产生破裂，那么就会导致中风。一个长达4年的对颈动脉硬化的研究表明，生育三烯醇补充品对颈动脉硬化的治愈率为88%。当然研究中还有一组没有用补充品的病人做实验对照，结果是60%的病人病情恶化，只有8%的病人好转[8,9]。在这四年中使用生育三烯醇补充品的病人平均总固醇降低14%，低密度脂蛋白胆固醇降低21%[10]。</p>
<p><strong>生育三烯醇与单核细胞内皮细胞粘附</strong>：动脉粥样硬化的特点是动脉中形成的脂质条纹，它的起因是血液循环中的单核细胞（一种白细胞）粘附在动脉血管内皮上，而实验表明生育三烯醇对减少这种细胞粘连有很大的作用[11,12]。</p>
<p>德耳塔生育三烯醇对防止单细胞的粘连作用效果比生育醇和其他形式的生育三烯醇都好得多。德耳塔和伽马生育三烯醇比生育醇的作用效果分别是60倍和30倍[13]。VCAM-1蛋白质能够造成白细胞粘连在动脉壁，而德耳塔生育三烯醇能很好地抑制这种蛋白质的表达，因而效果很好[13]。</p>
<p>实际上，德耳塔生育三烯醇可以在动脉斑块形成的萌芽阶段就产生作用，所以还能很好地预防粥样动脉硬化。</p>
<p><strong>生育三烯醇与高血压</strong>：大约33%的美国成年人都有高血压症(&gt;140/90mm毫米汞柱)，25%的人处于高血压前兆(收缩压120-139mm毫米汞柱，舒张压80-89mm毫米汞柱)[15]。一些对动物的实验表明，生育三烯醇可以降血压，减少血浆和血管中的脂类过氧化物，改善抗氧化水平[16]。伽马生育三烯醇减少收缩压，增强一氧化氮合酶的活性，这两种因素都与原发性高血压的产生息息相关[17]。当然，也有许多实验也充分地证明生育三烯醇对人类也有很好的疏通动脉，降血压效果[18,19]。</p>
<h2><strong>生育三烯醇对代谢紊乱的效果非凡</strong></h2>
<p>糖尿病人比普通人群的心脏病发病率要高出3倍。通过对36%的美国成人进行统计评估，美国大概有2400万的糖尿病人和6000万预备糖尿病人，7400万人有新陈代谢障碍[20-23]。新陈代谢的紊乱反映了美国普遍肥胖的现状，三分之二的成人都超重[24,25]！这里有一些美国心脏协会和美国国立卫生研究院定义的新陈代谢紊乱标志：</p>

<ul class="list-7">
<li>血清三油甘脂过高（高于150mg/dL）</li>
<li>血压过高(高于130/85mmHg)</li>
<li>血糖过高(100 mg/dL及以上)</li>
<li>有益的高密度脂蛋白过少(男性低于40mg/dL，女性低于50mg/dL)</li>
<li>腰围过粗(男性超过102cm/40in，女性超过88cm/35in)</li>
</ul>

<p>典型的2型糖尿病人患动脉粥样硬化的风险很大，80%的糖尿病人最终都死于动脉粥样硬化。除此之外，用来降低低密度脂蛋白的处方一般对糖尿病人都不太适合，因为它会引起各种各样的副作用。<br />
临床实验表明生育三烯醇非常的安全，而且对代谢紊乱综合征有很好的调节效果。一些科研论文报告了生育三烯醇在60天内就可以针对糖尿病人降低23%的血清总脂肪指标，30%的总固醇指标，以及42%的低密度脂蛋白指标[28]。在一些开放性研究中[7]，使用胭脂树中的生育三烯醇补充品2个月之后（每天75mg），血脂明显降低，新陈代谢功能有显著提升，甘油三酯水平降低了20-30%。低密度脂蛋白与高密度脂蛋白的比值减少了12-21%，由此可见，生育三烯醇可以很好地降低心脑血管发病风险。</p>
<h2><strong>最近发现</strong></h2>
<p>在第二届国际生育三烯醇座谈会中（举办于美国加州长滩，2012年4月29日），研究者们展示了他们对生育三烯醇的最新研究成果，研究领域涉及癌症、皮肤健康、抗辐射、修复脑部功能、延缓寿命以及骨骼健康等。专注研究心脑血管健康和代谢紊乱综合征的发言人向我们提供了如下信息：</p>
<p>从胭脂树种子提取的对德耳塔生育三烯醇很大程度地缓解了经常用高脂肪高碳水化合物食物喂养的老鼠的代谢症候。此外，还减少了总脂肪含量和腹围，同时，葡萄糖和胰岛素水平也基本正常。</p>
<p>对于动物，生育三烯醇可以减少动脉粥样硬化、血管组织炎症，激活内皮细胞。研究含表明胭脂树生育三烯醇可以降血脂(富含德耳塔和伽马生育三烯醇)，在其他原料中提取的生育三烯醇是没有如此好的效果的。</p>
<div class="divider"></div>

<p><!--:--></p>
<div class="wumii-hook">
    <input type="hidden" name="wurl" value="http://www.hykyani.com/archives/2137" /><br />
    <input type="hidden" name="wtitle" value="生育三烯醇与心脏健康" /><br />
    <input type="hidden" name="wpic" value="" />
</div>
                                <div class="divider"></div>                                <div class="postmetadata">
                                    <span>
发表于 2012 年 7 月 30 日                                     </span> &nbsp; / &nbsp; <span><a href="../blog/kyani_product.php" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp; 
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