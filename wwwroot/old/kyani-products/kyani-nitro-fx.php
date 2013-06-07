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
<title>尼多乐 - Kyani金三角健康俱乐部 - 助您体验新的人生！</title>
<meta name="description" content="Kyani尼多乐的原料取自南太平洋大溪地的野生诺丽，Kyani突破性的研究揭开了诺丽神奇功效的秘密，尼多乐将诺丽一氧化氮的效果提升到一个崭新的境界。尼多乐即以最安全最天然的方式促使我们的身体产生足量的一氧化氮，改善身体的健康状况而且无副作用。"/>
<meta name="keywords" content="尼多乐,Kyani,诺丽,一氧化氮"/>
<link rel="canonical" href="http://www.hykyani.com/kyani-products/kyani-nitro-fx" />
<meta property='og:locale' content='zh_CN'/>
<meta property='og:title' content='尼多乐 - Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:description' content='Kyani尼多乐的原料取自南太平洋大溪地的野生诺丽，Kyani突破性的研究揭开了诺丽神奇功效的秘密，尼多乐将诺丽一氧化氮的效果提升到一个崭新的境界。尼多乐即以最安全最天然的方式促使我们的身体产生足量的一氧化氮，改善身体的健康状况而且无副作用。'/>
<meta property='og:url' content='http://www.hykyani.com/kyani-products/kyani-nitro-fx'/>
<meta property='og:site_name' content='Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:type' content='article'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/kyani-nitro-Fx.jpg'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/Kyani-Nitro-FX-1.jpg'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/tahiti.jpg'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/tahiti-in-the-world.jpg'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/noni-plant.jpg'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/noni.jpg'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/1998-Nobel-on-Nitric-Oxide.jpg'/>
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
var duoshuoQuery = {"short_name":"hykyani","sso":{"login":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=duoshuo_login","logout":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=logout&_wpnonce=ba771b1d9e"},"remote_auth":"W10= f49fe4252604bbe4fc68a650f39454169cd82923 1364036714"};
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
<body class="page page-id-1971 page-child parent-pageid-2042 page-template page-template-page-FullWidth-php   no_title_section">
<?php require '../header.php'; ?>
	<!-- end top-wrapper -->

	<div class="clear"></div>


            <div id="page-content-title">
                <div id="page-content-header" class="container_24">
              
                    <div id="page-title">
                            <h1>尼多乐</h1>
                    </div>
                    <!-- end page-title -->
                </div>
                <!-- end page-content-header -->
            </div>
            <!-- end page-content-title -->
	    <div class="clear"></div>

	    <div id="page-content">
			<div class="container_24">
<p class="breadcrumbs"><a href="../index.php">首页</a><span class="breadarrow"> &rarr; </span><a href="../kyani-products.php">Kyani产品</a><span class="breadarrow"> &rarr; </span><span class='current_crumb'>尼多乐 </span></p>			</div>



<div id="content-container" class="container_24">
    <div id="main-content" class="grid_24">
	<div class="main-content-padding">
		<div class="post" id="post-1971">
		    <div class="entry">
<p><!--:zh--><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/kyani-nitro-Fx.jpg" alt="Kyani尼多乐" title="Kyani尼多乐" width="920" height="369" class="aligncenter" /></p>
<h2><strong>尼多乐——全面滋养我们的每一个细胞</strong></h2>
<p>您准备把身体提升到更好的状态吗？尼多乐(Kyani Nitro FX)能够帮助您的身体产生一氧化氮，修复、滋养和保护每一个细胞！</p>
<p><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/Kyani-Nitro-FX-1.jpg" alt="尼多乐Kyani Nitro FX" title="尼多乐Kyani Nitro FX" width="260" height="339"  class="alignright" /></p>
<p>尼多乐的原料取自南太平洋大溪地的野生诺丽，2000多年来玻利尼西亚人一直使用药用植物诺丽来改善他们的健康，维持苗条体态及美容护肤。但您如果问他们是什么让诺丽这么有效时，玻利尼西亚人只会说他们不知道。现代研究证实尼多乐的主要成分诺丽含有天然的维生素、微量元素、抗氧化剂和各种酶，此外，诺丽叶中饱和脂肪含量低而且含有丰富的膳食纤维，但这些研究还仅仅是开始。直到一氧化氮的作用被发现后我们才了解诺丽如此强效的真正原因，这一发现让我们开发出了全新的革命性主导产品尼多乐。</p>
<p>Kyani突破性的研究揭开了诺丽神奇功效的秘密，将诺丽的效果提升到一个崭新的境界。2001年，一间独立实验室对诺丽进行研究，实验人员在试管进行内皮测试，发现稀释的诺丽果汁可产生一氧化氮作用。而Kyani的研究发现，诺丽叶还能比稀释的诺丽果汁产生多4倍的一氧化氮。于是，尼多乐采用诺丽植物中最精华的部分，将根、茎、叶和果实一起正确地配方组合，经过高度浓缩制成精华液，产生的一氧化氮比稀释诺丽果汁更高达50倍！</p>
<p>一氧化氮被称为“生命的分子”，可以修复、滋养及保护人体的每一个细胞。经过学者和医师对一氧化氮进行了大量的研究，成千上万的论文将其推为一种强力的健康保护分子。</p>
<p>近代的医学和科学史中，一氧化氮于人体内发挥的功能是最重要的发现之一。在1998年三名药理学家因一氧化氮的研究而获得了诺贝尔生理学奖和医学奖。研究发现，一氧化氮一种可在体内自然产生的高度反应气体，它是最重要的信号分子，影响各种生理功能包括血液循环、免疫、以及氧气在红血球的释放等。在身体内，一氧化氮是由蛋白质和小肠里的小肽释放，然后吸收结合其他的氨基酸，进入血液循环，传递到人体细胞中的每个系统。离开了一氧化氮我们的免疫系统将崩溃，只需5-10秒人就会死亡。</p>
<h4><strong>使用尼多乐野生诺丽精华的原因</strong></h4>

<ul class="list-1">
<li>防治心脑血管疾病如：心肌梗死、心绞痛、中风等；净化血液，显著降低胆固醇、甘油三脂</li>
<li>增强心肌功能，扩张血管，促进血液循环。防治高血压、心肌梗塞，改善心律不整，防止动脉硬化</li>
<li>改善胰岛素分泌，降低血糖；改善糖尿病及其并发症</li>
<li>调节内分泌，提高性功能。改善夫妻生活质量，防治阳痿、早泄</li>
<li>提高免疫力，免疫清除自由基，抗发炎，消肿胀，防止病毒入侵，抑制癌细胞</li>
<li>改善脑部小脑供血，改善睡眠质量；增强记忆力，延缓大脑细胞衰老，防治老年痴呆症</li>
<li>推迟更年期的早到，减轻更年期症状，消除面部斑块</li>
<li>促进营养吸收，迅速补充体力</li>
</ul>

<blockquote><h6>成千上万的研究结果已经证明了一氧化氮对人体健康的重要作用，它几乎对身体各大系统和细胞的健康有作用，大量的临床试验支持了这些结论。我强烈推荐尼多乐诺丽精华，它会给你和家人带来健康的生活。</h6>
<h6 style="text-align:right">——阿巴斯博士</h6>
</blockquote>
<h2><strong>来自南太平洋岛屿的神奇植物——诺丽</strong></h2>
<p><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/tahiti.jpg" alt="大溪地tahiti" title="大溪地tahiti" width="522" height="247" class="aligncenter" /></p>
<div class="wp-caption alignright" style="width: 297px"><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/tahiti-in-the-world.jpg" alt="大溪地在地球上的位置" title="大溪地在地球上的位置" width="287" height="160"  /><p class="wp-caption-text">大溪地在地球上的位置</p></div>
<p><span class="zw_color">大溪地</span>，是南太平洋中部法属玻里尼西亚社会群岛中向风群岛的最大岛屿。这里风景优美，气候宜人，空气清新，有着湛蓝的海水、细软的沙滩和青翠欲滴的绿色，没有工业，没有污染，四季温暖如春、物产丰富。衣食无忧的人们常常无所事事地望着大海远处凝思，静待日落天亮。阳光跟着太平洋上吹来的风一同到来，海水的颜色也由幽深到清亮。他们管自己叫“上帝的人”，人们管那里叫“最接近天堂的地方”。</p>
<p>而在这被世界誉为最后的“人间天堂”的土地上，生长着一种更为神奇的果子——诺丽(Noni)。</p>
<p><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/noni-plant.jpg" alt="诺丽植物noni" title="诺丽植物noni" width="150" height="277"  class="alignleft" /></p>
<p><span class="zw_color">热带水果皇后</span>——诺丽果是檄（音“习”）树的果实，诺丽果实是中空的，故可以浮在水面上，利用海潮传播种子。在太平洋周边岛屿的海边可看到自然生长的檄树群落。檄树的适应力很强，对土壤的要求不高，甚至可以忍受含盐度高的土壤，且耐旱力强，因此可以生长在许多不同的环境里。阴蔽的森林里、土壤肥沃的火山周边地区，干旱的次生土地区、贫瘠的海岸熔岩地、光秃的石灰岩地甚至沙质海岸都可以生长。而大溪地的土壤肥沃，非常适合檄树的生长。植株为常绿小乔木，可以生长至九米以上。叶片大，单叶，暗绿色，叶面光亮；诺丽果由开花至成熟期需时90天，<span class="zw_color">同一株诺丽果树结有不同成熟程度的果实</span>，而且一年365天，天天可以采到成熟的果实；花小，白色；果实为复合果，卵形，约4-7厘米大，果实刚开始时为绿色，后转变为黄色，成熟时几乎变为白色，果实内有很多种子。<br />
诺丽用途甚广：叶可外敷消炎；根部可降血压；树皮有强烈收敛功效；种子有催泻作用；花朵可治眼疾；果实具有很高的营养价值。早在公元前，大溪地群岛上的土著民族就发现了诺丽果实具有天然的健康功效和医药功效，经常将诺丽果实发醇以后，再经过滤，作为日常饮品和治疗疾病。虽然岛上没有现代的医疗设备，但<span class="zw_color">当地人没有三高、没有癌症，寿命很长，平均达到80.2岁</span>，而同纬度的人平均年龄只有40岁！</p>
<p>诺丽的营养成分丰富得让人难以置信，富含抗氧化成分、植物营养素和生物黄酮类化合物等。诺丽的根、茎、叶、果都含有丰富的氨基酸、维生素和矿物质。例如维生素C、维生素E、钙、镁、锌等<span class="zw_color">200多种营养成分</span>。 </p>
<p><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/noni.jpg" alt="诺丽noni" title="诺丽noni" width="183" height="105"  class="alignright" /></p>
<p>诺丽可以促进细胞再生，令体内受损的细胞及组织重新活跃起来，甚至能够恢复到原来的程度！诺丽除了可以帮助人体产生一氧化氮，还含有<span class="zw_color">丰富的赛洛宁原（Proxeronine）及赛洛宁转化酶（Proxeronase）</span>。这二种成分是赛洛宁（Xeronine）的先驱物质。塞洛宁可以中和大多数对人体有害的物质，有神奇的促进再生能力。常食诺丽，能为身体提供足够的赛洛宁，保护身体细胞组织，防止病痛；若有病痛发生，它则会迅速修补受伤的细胞，并将代谢残渣及毒素排出体外，使之恢复正常。科学实验证明，赛洛宁可以令肿瘤及癌细胞表现得像正常细胞一样。由于人体不会对付恶性细胞，因此如果肿瘤及癌细胞表现得像正常细胞一样，身体便会如同代谢正常细胞一样用新的健康细胞去取代肿瘤及癌细胞，使肿瘤及癌细胞自然死去！</p>
<h2><strong>一氧化氮——生命的分子</strong></h2>
<p>在历史上有很多巧合，诺贝尔因发现了硝酸甘油而成名，后来当他患上了冠心病，医生建议用硝酸甘油来治疗，但他固执地认为用自己做炸药的成分来治疗自己的病很荒唐，因而延误了病情。一百多年后的1998年，路易斯J•伊格纳罗等三位美国科学家因发现了一氧化氮的作用而阐明了硝酸甘油治疗冠心病的作用机理而获得了所有科学家梦寐以求的诺贝尔奖。</p>
<p><img src="http://i1162.photobucket.com/albums/q529/hykyanicom/1998-Nobel-on-Nitric-Oxide.jpg" alt="因一氧化氮的发现获诺贝尔奖的科学家" title="因一氧化氮的发现获诺贝尔奖的科学家" width="503" height="333" class="aligncenter" /></p>
<p>尼多乐即以最安全最天然的方式促使我们的身体产生足量的一氧化氮，改善身体的健康状况而且无副作用。</p>
<h5><strong>一氧化氮与心脑血管健康</strong></h5>
<p>一氧化氮可降血压，改善血液循环，增加血管弹性，防止血栓的形成。血管内皮细胞是控制血管松弛和扩张的平滑肌，而一氧化氮对于这些平滑肌细胞发挥功能起着重要的作用。一氧化氮通过扩张血管来增强氧气运输，保护心脏不受损伤，防止细胞死亡。一氧化氮确保规律的心脏电脉冲和正常的心率。对于大脑一氧化氮在大脑神经细胞间传递信息，这些细胞与学习、记忆、睡眠有关。一氧化氮可以刺激大脑，调节大量的功能，从行为举止到胃肠蠕动都有一氧化氮的参与。</p>
<h5><strong>一氧化氮与性功能</strong></h5>
<p>1998年获得诺贝尔奖的路易斯J•伊格纳罗博士促使了伟哥的研发，因此他被称为“伟哥之父”。伟哥就是通过一氧化氮效应起作用的。不同的是，尼多乐不是人工合成的，而是用纯天然的植物促使身体自身产生一氧化氮，没有任何副作用！很多的性功能问题是由于血液循环中的一氧化氮不足引起的。一氧化氮是引起阴茎勃起的化学信使，勃起组织内的神经细胞产生一氧化氮舒张血管而使阴茎勃起，从而延长性生活时间，提升性生活质量。一氧化氮不仅适用于男性，同样适用于女性，它也能够帮助女性增加生殖器充血，使女性更易获得快感。另外一氧化氮能够很好的改善肾动脉硬化，增加肾血流量，达到养肾、改善性生活质量的目的。</p>
<h5><strong>一氧化氮与免疫</strong></h5>
<p>一氧化氮能抑制血小板聚集与黏附，减少白细胞的聚集，防止血栓的形成；还能抑制淋巴细胞增殖，抑制肥大细胞的活性，抑制巨噬细胞的氧化产物；在慢性感染和炎症时，激活巨噬细胞和白细胞产生的一氧化氮，参与杀灭细菌、病毒、寄生虫、真菌、肿瘤细胞的作用，以及参与其他一系列的免疫过程。由于一氧化氮能够诱导细胞的死亡和凋亡过程，故一氧化氮能很好的抑制肿瘤的生长，达到了防癌抗癌的目的。</p>
<h5><strong>一氧化氮与脑功能</strong></h5>
<p>在中枢神经系统中，一氧化氮促进递质释放，参与突触可逆性过程，参与视觉、痛觉及嗅觉的气味区分等方面，调节血脑屏障的通透性，参与脑的高级功能活动，如学习、记忆功能，还可以改善睡眠质量。事实上，从老年痴呆症到糖尿病，痔疮等，一氧化氮的产量不足都会导致病情恶化。</p>
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