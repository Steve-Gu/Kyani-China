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
<title>财团背景及管理研发团队 - Kyani金三角健康俱乐部 - 助您体验新的人生！</title>
<meta name="description" content="美国三大贵族共同创建了Kyani凯安尼，并用他们的诚信和爱心吸引了更多的人才。Kyani凯安尼公司的管理团队汇聚了各界精英，七位高管全部身价过亿，这在电子商务行业是非常罕见的。"/>
<meta name="keywords" content="Kyani公司,凯安尼公司,Kyani创办人,Kyani实力"/>
<link rel="canonical" href="http://www.hykyani.com/kyani-company/powerful-company" />
<meta property='og:locale' content='zh_CN'/>
<meta property='og:title' content='财团背景及管理研发团队 - Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:description' content='美国三大贵族共同创建了Kyani凯安尼，并用他们的诚信和爱心吸引了更多的人才。Kyani凯安尼公司的管理团队汇聚了各界精英，七位高管全部身价过亿，这在电子商务行业是非常罕见的。'/>
<meta property='og:url' content='http://www.hykyani.com/kyani-company/powerful-company'/>
<meta property='og:site_name' content='Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:type' content='article'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/Kirk-Hansen.jpg'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/Carl-Taylor.jpg'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/DickGayle-Powell.jpg'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/06/汉森及泰勒的产业.jpg'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/Michael-Breshears.jpg'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/Steven-Hatch.jpg'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/05/Scott-Seedall.jpg'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/Abbas-Qutab.jpg'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/05/Tan.jpg'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/05/Burke.jpg'/>
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
var duoshuoQuery = {"short_name":"hykyani","sso":{"login":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=duoshuo_login","logout":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=logout&_wpnonce=ba771b1d9e"},"remote_auth":"W10= acda29c4000a982555a788550b9a9d8b56059562 1364028934"};
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
<body class="page page-id-1881 page-child parent-pageid-1901 page-template page-template-page-PageTemplate3-php   no_title_section">
<?php require '../header.php'; ?>
	<!-- end top-wrapper -->

	<div class="clear"></div>


            <div id="page-content-title">
                <div id="page-content-header" class="container_24">
              
                    <div id="page-title">
                            <h1>财团背景及管理研发团队</h1>
                    </div>
                    <!-- end page-title -->
                </div>
                <!-- end page-content-header -->
            </div>
            <!-- end page-content-title -->
	    <div class="clear"></div>

	    <div id="page-content">
			<div class="container_24">
<p class="breadcrumbs"><a href="../index.htm">首页</a><span class="breadarrow"> &rarr; </span>
	<a href="../kyani-company.php">Kyani公司</a><span class="breadarrow"> &rarr; </span><span class='current_crumb'>财团背景及管理研发团队 </span></p>			</div>




<div id="content-container" class="container_24">
    <div id="main-content" class="grid_18 push_6">
	<div class="main-content-padding">

		<div class="post" id="post-1881">
		    <div class="entry">
<p><!--:zh--><br />
<h2><strong>Kyani的创办人</strong></h2>
<p>Kyani国际公司由<span class="zw_color">美国三大贵族共同创建</span>，每个家族有过百亿的资产，在美国当地倍受尊崇。他们为Kyani提供了雄厚的资金支持、丰富的成功经验；此外，他们的诚信和爱心吸引了更多的人才，帮助了许多人。</p>
<div style="margin-left: 47px">
<div id="attachment_1887" class="wp-caption alignleft" style="width: 170px"><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/Kirk-Hansen.jpg" alt="Kyani创办人兼董事会主席Kirk Hansen" title="Kyani创办人兼董事会主席Kirk Hansen" width="160" height="200" class="size-full wp-image-1887" /><p class="wp-caption-text">董事会主席创办人Kirk Hansen</p></div>
<div id="attachment_1885" class="wp-caption alignleft" style="width: 170px"><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/Carl-Taylor.jpg" alt="Kyani创办人Carl Taylor" title="Kyani创办人Carl Taylor" width="160" height="200" class="size-full wp-image-1885" /><p class="wp-caption-text">创办人Carl Taylor</p></div>
<div id="attachment_1886" class="wp-caption alignleft" style="width: 170px"><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/DickGayle-Powell.jpg" alt="Kyani创办人Dick&#038;Gayle Powell" title="Kyani创办人Dick&#038;Gayle Powell" width="160" height="200" class="size-full wp-image-1886" /><p class="wp-caption-text">创办人Dick&#038;Gayle Powell</p></div>
</div>
<div class="clear"></div>
<p>柯克汉森任Kyani的董事会主席，他是美国第二大石油大王，率先引入了计算机石油分析系统，后来又创造性地把旗下的加油站升级为综合服务商店，正确及时的决策奠定了事业的成功。汉森家族拥有覆盖美国九个州的66加油站、超豪华五星级酒店——万豪酒店，业务涉及房地产、重工业、物业管理等众多领域。</p>
<p>卡尔泰勒是美国爱达荷州(Idaho)第二大的马铃薯生产商及最大牛牧场的拥有者，常年为麦当劳等提供原料。美国人和中国人的饮食习惯不同，他们的餐桌上以马铃薯牛肉为主食。爱达荷州又是全美马铃薯产量最高的州，更有“马铃薯州”之称，泰勒的地位和实力可见一斑。</p>
<p>迪克鲍威尔与妻子盖尔鲍威尔建立了一个全国连锁特许经营网。由于开阔的经营理念获得了很大的成功。同时，他们也是成功的房地产商。</p>
<div class="clear"></div>
<img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/06/汉森及泰勒的产业.jpg" alt="汉森及泰勒的产业" title="汉森及泰勒的产业" width="555" height="363" class="aligncenter" /></p>
<h2><strong>Kyani的管理团队</strong></h2>
<p>Kyani公司的管理团队汇聚了各界精英，<span class="zw_color">七位高管全部身价过亿</span>，这在电子商务行业是非常罕见的。</p>
<div style="margin-left: 47px">
<div id="attachment_1890" class="wp-caption alignleft" style="width: 170px"><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/Michael-Breshears.jpg" alt="Kyani总裁Michael Breshears" title="Kyani总裁Michael Breshears" width="160" height="200" class="size-full wp-image-1890" /><p class="wp-caption-text">总裁Michael Breshears</p></div>
<div id="attachment_1889" class="wp-caption alignleft" style="width: 170px"><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/Steven-Hatch.jpg" alt="Kyani国际运营副总裁Steven Hatch" title="Kyani国际运营副总裁Steven Hatch" width="160" height="200" class="size-full wp-image-1889" /><p class="wp-caption-text">国际运营副总裁:Steven Hatch</p></div>
<div id="attachment_2038" class="wp-caption alignleft" style="width: 170px"><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/05/Scott-Seedall.jpg" alt="Scott Seedall" title="Kyani副总裁及法律总顾问Scott Seedall" width="160" height="200" class="size-full wp-image-2038" /><p class="wp-caption-text">副总裁及法律总顾问Scott Seedall</p></div>
</div>
<div class="clear"></div>
<p>米迦勒任Kyani的CEO，他已年过古稀，曾于多家公司担任CEO，有三十多年的网络营销经验。他是行业组织直销协会(DSA)的常任理事，在业界享有盛誉，是教父级的人物。他为Kyani公司安排了一流的管理团队运作。</p>
<p>史提芬任Kyani公司全球高级营运副总裁，曾担任爱达荷州房地产协会主席，年销售额超过三亿美元。他有丰富的培训经验，影响国际，还是一位作家和摄影家。他说过放弃房地产从事Kyani的理由：“作为房地产商，我只能帮助我身边的人，而作为Kyani的副总裁，我能够帮助全球成千上万的伙伴”。</p>
<p>史葛西多拥有超过十六年法律界经验, 范畴包括美国联邦政府, 美国州政府, 国际税务, 商业税, 税务诉讼, 资产分配, 业务重组和慈善团体。作为副总裁及总法律顾问, 史葛领导所有与法律有关的事务。</p>
<h2><strong>Kyani的研发团队</strong></h2>
<p>Kyani医疗与科学委员会是Kyani产品的研发机构，其成员都是<span class="zw_color">心脑血管病、糖尿病、癌症等研究领域的专家</span>，他们引领着各自领域的发展，他们的研究及配方保证了Kyani产品的天然有效。</p>
<div style="margin-left: 47px">
<div id="attachment_1898" class="wp-caption alignleft" style="width: 170px"><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/03/Abbas-Qutab.jpg" alt="Kyani医疗与科学委员会主席Abbas Qutab" title="Abbas Qutab" width="160" height="200" class="size-full wp-image-1898" /><p class="wp-caption-text">医疗与科学委员会主席Abbas Qutab</p></div>
<div id="attachment_2039" class="wp-caption alignleft" style="width: 170px"><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/05/Tan.jpg" alt="Barrie Tan" title="Barrie Tan" width="160" height="200" class="size-full wp-image-2039" /><p class="wp-caption-text">巴里谭Barrie Tan</p></div>
<div id="attachment_2040" class="wp-caption alignleft" style="width: 170px"><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/05/Burke.jpg" alt="Thomas Burke" title="Thomas Burke" width="160" height="200" class="size-full wp-image-2040" /><p class="wp-caption-text">伯克Thomas Burke</p></div>
</div>
<div class="clear"></div>
<p>阿巴斯博士任Kyani医疗与科学委员会主席，推崇“补充和替代医学”(CAM)。替代医学的典型是中医，也就是说阿巴斯博士注重用生命来滋养和净化生命，在肯定西医救急的前提下强调食物对疾病的预防和调理作用，这符合Kyani产品的核心价值。他曾获多个补充医学的领导大奖，于2003年获得美国国会颁发的“年度医生奖”。阿巴斯博士还广泛研究一氧化氮在人体内的功效，他撰写的《一氧化氮——生命分子》已被翻译成多国语言。</p>
<p>巴里谭博士曾撰文于超过40本专题期刊和学术性书籍。1998年，他创立了美国营养品公司American River Nutrition。他是研究生育三烯酚(Tocotrienols)的先驱之一，他把生育三烯酚定义为一种独特的营养素。他的研究集中在生育三烯酚与生育酚 (公认的维生素E化合物) 的关系。他的研究结果指出，生育三烯酚较生育酚的抗氧化能力多50 倍。这项发现促使巴里谭博士开发生育三烯酚，成为丰富植物营养和抗氧化能力的食物补充成分。</p>
<p>伯克博士曾是梅约医学中心及耶鲁大学等校的专家访问学者，在多次国际国内科学论坛中演讲，他早在20世纪90年代就开始研究一氧化氮，他创立的公司专门研究生物科技，最先发现了诺丽的一氧化氮效应，在一氧化氮的应用领域贡献巨大。</p>
<p><!--:--></p>
		    </div>
		</div>
	    <div class="clear"></div>
	</div><!-- end main-content-padding -->
    </div><!-- end main-content -->


	<div id="sidebar" class="grid_6 pull_18 sidebar-box">
	    <div id="sidebarSubnav">

<div id="subpages-widget-8" class="widget widget_subpages custom-formatting">			    <h3>Kyani公司</h3>
		    <ul>
<li class="page_item page-item-1919"><a href="../kyani-company/kyani-story.php">Kyani的故事</a></li>
<li class="page_item page-item-1881 current_page_item"><a href="../kyani-company/powerful-company.php">财团背景及管理研发团队</a></li>
<li class="page_item page-item-1903"><a href="../kyani-company/development-of-company.php">公司发展</a></li>
<li class="page_item page-item-2067"><a href="../kyani-company/kyani-caring-hands.php">Kyani全球慈善</a></li>
		    </ul>

</div>	    </div>
	    <!-- end sidebarSubnav -->
	</div>
	<!-- end sidebar -->



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