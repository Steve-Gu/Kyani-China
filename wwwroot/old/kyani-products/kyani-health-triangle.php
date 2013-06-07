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
<title>Kyani健康三角组合 - Kyani金三角健康俱乐部 - 助您体验新的人生！</title>
<meta name="description" content="Kyani产品有三种：新乐思、新舒康、尼多乐，称作“健康三角组合”。这三种产品为您和家人提供阿拉斯加野生蓝莓、阿拉斯加野生三文鱼、太平洋大溪地的野生诺丽等十几种顶级食物的营养。它们可以保护我们的免受自由基的伤害，全面解决血液健康问题，从而消除疾病。"/>
<meta name="keywords" content="Kyani健康三角组合,Kyani新舒康,Kyani新乐思,Kyani尼多乐"/>
<link rel="canonical" href="http://www.kaianni.net/kyani-products/kyani-health-triangle.php" />
<meta property='og:locale' content='zh_CN'/>
<meta property='og:title' content='Kyani健康三角组合 - Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:description' content='Kyani产品有三种：新乐思、新舒康、尼多乐，称作“健康三角组合”。这三种产品为您和家人提供阿拉斯加野生蓝莓、阿拉斯加野生三文鱼、太平洋大溪地的野生诺丽等十几种顶级食物的营养。它们可以保护我们的免受自由基的伤害，全面解决血液健康问题，从而消除疾病。'/>
<meta property='og:url' content='http://www.kaianni.net/kyani-products/kyani-health-triangle.php'/>
<meta property='og:site_name' content='Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:type' content='article'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/KyaniHealthTriangle.jpg'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/219ccfd6.jpg'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/54484c15.jpg'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/e04d9e82.jpg'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/94e07933.jpg'/>
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
var duoshuoQuery = {"short_name":"hykyani","sso":{"login":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=duoshuo_login","logout":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=logout&_wpnonce=ba771b1d9e"},"remote_auth":"W10= f85d49f70324d41f2136d0a004bf242217e8316f 1364021614"};
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
<body class="page page-id-1924 page-child parent-pageid-2042 page-template page-template-page-FullWidth-php   no_title_section">
<?php require '../header.php'; ?>
	<!-- end top-wrapper -->

	<div class="clear"></div>


            <div id="page-content-title">
                <div id="page-content-header" class="container_24">
              
                    <div id="page-title">
                            <h1>Kyani健康三角组合</h1>
                    </div>
                    <!-- end page-title -->
                </div>
                <!-- end page-content-header -->
            </div>
            <!-- end page-content-title -->
	    <div class="clear"></div>

	    <div id="page-content">
			<div class="container_24">
<p class="breadcrumbs"><a href="../index.php">首页</a><span class="breadarrow"> &rarr; </span><a href="../kyani-products.php">Kyani产品</a><span class="breadarrow"> &rarr; </span><span class='current_crumb'>Kyani健康三角组合 </span></p>			</div>



<div id="content-container" class="container_24">
    <div id="main-content" class="grid_24">
	<div class="main-content-padding">
		<div class="post" id="post-1924">
		    <div class="entry">
<p><!--:zh--><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/KyaniHealthTriangle.jpg" alt="健康金三角组合" title="健康金三角组合" width="900" height="344" class="aligncenter" /></p>
<h2><strong>世界顶级的三角组合</strong></h2>
<p>Kyani独特的产品采用最前沿的医学科技，将纯天然的原料正确地配方，为身体带来全面、天然的营养。Kyani产品有三种：<span class="zw_color">新乐思（Kyani sunrise）</span>、<span class="zw_color">新舒康（Kyani sunset）</span>、<span class="zw_color"> 尼多乐（Kyani Nitro FX）</span>，称作“健康三角组合”。这三种产品为您和家人提供阿拉斯加野生蓝莓、阿拉斯加野生三文鱼、太平洋大溪地的野生诺丽等十几种顶级食物的营养。我们的身体一直进行着自我修复，维持平衡，抵御疾病，我们感受到的各种症状正是身体与我们的沟通方式，让我们知道身体缺了些什么，或者是多了些什么。Kyani健康三角组合便是用大自然中具有生命的草本精华组合，补充生 命、净化生命，让生命充满生机，让身体的抵抗力、免疫力、自愈力和本能发挥到最佳状态，对于健康人群保持健康非常有益，对于亚健康人群恢复健康必不可少， 对于病人在依靠医疗手段的同时加上健康三角组合的食物疗法能够给予病情最大程度的改善。Kyani的三款产品均获得<span class="zw_color">正红印标识，全球免检</span>；另外，Kyani三角组合产品适用于各种人群，<span class="zw_color"> 无副作用</span>。</p>
<h2><strong>Kyani三角组合是顶级的抗氧化剂</strong></h2>
<p><a class="youtube cboxElement" title="自由基及抗氧化 " href="http://player.56.com/v_NjkzNjgxMTM.swf"><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/219ccfd6.jpg" alt="自由基侵害细胞" title="自由基侵害细胞" width="200" height="150" class="alignright" /></a></p>
<p>说到抗氧化，不得不先谈谈“自由基”，自由基也称“游离基”，会在我们的身体里抢夺、攻击正常的细胞或者组织，引起连锁性的过氧反应，从而给细胞带来氧化压力，当这种压力高到防御系统无法抵抗和平衡调节时，就会导致身体的伤害。就像铁生锈一样，当身体损害到一定程度无法修复的时候，人体就会出现明显的老化以及疾病的产生。自由基可以通过外界直接攻击人体（由阳光辐射、空气污染、吸烟、农药、电磁辐射等产生），也可以通过新陈代谢和生命活动（包括摄取不正确的食物、内环境的污染、紧张、忧愁、剧烈运动）产生而直接从体内攻击。所以，自由基的产生是无法避免的。而80%-90%的慢性病都是自由基产生的，如癌症、中风、心脏病、高血压、动脉硬化、糖尿病、老年痴呆症、帕金森氏症等等。<span class="zw_color">自由基被称为万病之源，是人体衰老和疾病的主要原因</span>。空气负离子能够有效消减自由基，但现在的都市生活中很难做到，加上抗氧化食物的摄取过少，自由基对身体的损害就会很严重了。</p>
<p>Kyani三角组合产品由世界顶级的天然抗氧化剂浓缩而成，能够有效消除自由基，阻止自由基对人体的伤害，修复细胞和DNA，从而避免许多疾病的产生，恢复人体健康的内环境，消除疾病。</p>
<h2><strong>Kyani三角组合秉承药食同源的理念</strong></h2>
<p><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/54484c15.jpg" alt="食疗胜于药疗" title="食疗胜于药疗" width="160" height="150" class="alignleft" /></p>
<p>Kyani健康三角组合产品不是药品，但是能够消除疾病，这一点也不矛盾。举个简单的例子，非典时期山东的传染病例极少，经调查发现这与山东人喜欢生吃大葱大蒜有关，可以说大蒜就是地里面长出来的青霉素，抗菌效果非常好，那么能够讲大蒜是药吗？我们的祖先非常有智慧，药王孙思邈告诉我们“安身之本必须食，救急之道在于药”，也就是说药是用来救急的，而天然的食物才是“安身之本”、治病之法。要知道是药三分毒，而食物却不会对身体产生负担。尤其当今的药物几乎都是替代哲理，替代身体的细胞工作，用进废退，原来健康的细胞也会由于长期被替代而失去原有的能力。而Kyani的三角组合是再生的，非替代的。本质上是多种具有药用价值的珍稀水果和最优质的三文鱼品种红三文鱼，可以随时随量食用，秉承药食同源的理念，通过天然的食物滋养和净化细胞，<span class="zw_color">运用再生哲理，激发细胞本身的功能，恢复身体最原始的本能</span>。我们应该摒弃“有病就该吃药”的错误观念，建立正确的养生观念。</p>
<h2><strong>Kyani三角组合不同于传统的保健品</strong></h2>
<p><a class="youtube cboxElement" title="Kyani三角组合介绍 " href="http://player.56.com/v_Njg5MDE5MDU.swf"><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/e04d9e82.jpg" alt="复方的新乐思" title="复方的新乐思" width="267" height="150" class="alignright" /></a></p>
<p>Kyani健康三角组合产品区别于传统的保健品，主要有两点：<span class="zw_color">它是复方的，非单一的；是天然的，非化合的</span>。首先，我们知道物有所长，必有所短，我们都知道人参是好东西，大补，但多吃会上火流鼻血，对人体反而是伤害，而Kyani产品的研发体现的完全食物的概念，新乐思主要成分是阿拉斯加野生蓝莓，但不是单一的“蓝莓果汁”，而是结合了十种野生食物互补，从而达到五色五味的调和；尼多乐也不是纯粹的“诺丽果汁”，而是诺丽的根茎叶提取的精华液，意义就像把橘子皮和橘子肉一起吃不会上火一样；新舒康也是由野生三文鱼和胭脂树种子的成分结合一起，从而互相强化，达到最好的效果。相比之下，如今的保健品，什么蛋白粉、钙片、硒片，都是单一的提取物，在补的同时会造成其他成分的缺失。举个例子，我们知道橙子维C含量高，除此之外还有其他许多营养成分，我们可以叫它完全食物，但把橙子的维C提取出来做成维C片给我们吃，就成了单一成分，吃了橙子我们的身体吸收了有用的成分，也能代谢出剩余的废物，因为我们的身体对生物的废物是有代谢能力的；但是，吃了维C片，我们的身体为了吸收这种单一的维C，就会消耗体内的铁离子，严重时会造成缺铁性贫血，同时，很多补品没有吸收掉的成分身体无法代谢出去，造成沉积，引起结石。而Kyani三角组合全部保留天然植物中的精华部分，并非单一、化合的提取合成，而是把植物中的最精华部分直接配方、浓缩成天然果汁，让我们的身体最好最有效的吸收营养。此外，我们看到的市面补品都是从种植的植物中提取出来的，而Kyani公司承诺只用野生的食物做原料，其营养价值及药用价值不是一般保健品能比的。</p>
<h2><strong>Kyani三角组合的滋养迫在眉睫</strong></h2>
<p><a class="youtube cboxElement" title="Kyani三角组合介绍 " href="http://player.youku.com/player.php/sid/XNTI3NzkzODYw/v.swf"><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/94e07933.jpg" alt="全面解决血液问题" title="全面解决血液问题" width="200" height="150" class="alignleft" /></a></p>
<p>Kyani三角组合可以消除自由基，清除体内的毒垢，全面解决血液质量问题。医学上有一句话：谁能解决血液问题，谁就能带来真正的健康。美容界也讲，若想皮肤颜如玉，就要血液清如水。所以可以看到，血液问题是真正解决内在和外在健康的关键。卫生部于《2012年中国卫生统计提要》中对2011年部分市县前十位疾病死亡率及死亡构成的统计数据显示，<span class="zw_color">恶性肿瘤、心脏病、脑血管疾病占总死亡率的65%以上</span>！当今的人们都生活在一个大染缸里，食物、水乃至空气都受到了严重的污染，再加上工作任务繁重、生活压力大，无疑对身心都产生了巨大的挑战。我们急迫需要一种产品来排除体内的毒垢，给予我们必需的营养，同时减轻压力，把我们从远离大自然的身体恢复到原本的健康状态。所以我们需要Kyani三角组合的滋养，让我们自己有更好的状态去工作，身心愉快的生活；让我们的孩子更加聪明，远离各种伤害；让我们的父母没有机会患上心脏病、糖尿病、老年痴呆和癌症，一家人健健康康，享受更好的生活！</p>
<p><clear></p>
<blockquote><h6>“Kyani健康三角组合”维持、保护及修复身体内的每一个细胞，三款产品同时使用有叠加效果，Kyani是在健康产业领域是独特的，为全世界的人带来了健康。</h6>
<h6 style="text-align:right"> ——阿巴斯博士</h6>
</blockquote>
<p><!--:--></p>
		    </div>
		</div>
	    <div class="clear"></div>

	</div><!-- end main-content-padding -->
    </div><!-- end main-content -->
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