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
<title>运动员的福音</title>
<meta name="description" content="一氧化氮对于提高运动员的成绩有很大的作用，2010年的一篇论文报告中写道：50岁以上的自行车运动员在食用了有助人体产生一氧化氮的营养补充品后能够骑得更远更快。一氧化氮能够提高人体的自然运动力。另一个论文，也是发表于2010，证实了一氧化氮营养补充品对运动员的作用。研究对象能够运动更久而不劳累。Kyani尼多乐能够提高人体自身产生一氧化氮的能力。同时Kyani新乐思中的一些强力的抗氧化混合物也可以在一氧化氮释放后保护一氧化氮，防止其分解。"/>
<meta name="keywords" content="Kyani尼多乐,Kyani金三角,凯安尼,kyani新乐思,一氧化氮"/>
<link rel="canonical" href="http://www.hykyani.com/archives/2208" />
<meta property='og:locale' content='zh_CN'/>
<meta property='og:title' content='运动员的福音'/>
<meta property='og:description' content='一氧化氮对于提高运动员的成绩有很大的作用，2010年的一篇论文报告中写道：50岁以上的自行车运动员在食用了有助人体产生一氧化氮的营养补充品后能够骑得更远更快。一氧化氮能够提高人体的自然运动力。另一个论文，也是发表于2010，证实了一氧化氮营养补充品对运动员的作用。研究对象能够运动更久而不劳累。Kyani尼多乐能够提高人体自身产生一氧化氮的能力。同时Kyani新乐思中的一些强力的抗氧化混合物也可以在一氧化氮释放后保护一氧化氮，防止其分解。'/>
<meta property='og:url' content='http://www.hykyani.com/archives/2208'/>
<meta property='og:site_name' content='Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:type' content='article'/>
<meta property='og:image' content='http://i1162.photobucket.com/albums/q529/hykyanicom/Kyani5F3A592776849EC491D16DB24F53_zpsa586d8f3.jpg'/>
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
var duoshuoQuery = {"short_name":"hykyani","sso":{"login":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=duoshuo_login","logout":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=logout&_wpnonce=33b0d005cf"},"remote_auth":"W10= b8670ee475c12dcb9c0122b75b85a10dcdbb13b3 1364046352"};
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
<body class="single single-post postid-2208 single-format-standard   no_title_section">
<?php require '../header.php'; ?>
	<!-- end top-wrapper -->

	<div class="clear"></div>


            <div id="page-content-title">
                <div id="page-content-header" class="container_24">
              
                    <div id="page-title">
                            <h1>运动员的福音</h1>
                    </div>
                    <!-- end page-title -->
                </div>
                <!-- end page-content-header -->
            </div>
            <!-- end page-content-title -->
	    <div class="clear"></div>

	    <div id="page-content">
			<div class="container_24">
<p class="breadcrumbs"><a href="../index.php">首页</a><span class="breadarrow"> &rarr; </span><a href="../blog/blog.php" title="查看 博客 中的全部文章">博客</a><span class="breadarrow"> &rarr; </span><a href="../blog/kyani_product.php" title="查看 产品相关 中的全部文章">产品相关</a><span class="breadarrow"> &rarr; </span><span class='current_crumb'>运动员的福音 </span></p>			</div>



    <div id="content-container" class="container_24">
	<div id="main-content" class="grid_16">
	    <div class="main-content-padding">
			<div class="post-2208 post type-post status-publish format-standard hentry category-kyani_product tag-33 tag-34 tag-45" id="post-2208">
			    <div class="entry">
<p><img class="alignleft" title="Kyani黄金液体尼多乐" src="http://i1162.photobucket.com/albums/q529/hykyanicom/Kyani5F3A592776849EC491D16DB24F53_zpsa586d8f3.jpg" alt="Kyani黄金液体尼多乐" width="600" height="370" data-pinit="registered" /><br />
<div class="clear"></div>
<p>一氧化氮对于提高运动员的成绩有很大的作用，2010年的一篇论文报告中写道：50岁以上的自行车运动员在食用了有助人体产生一氧化氮的营养补充品后能够骑得更远更快。一氧化氮能够提高人体的自然运动力。</p>
<p>另一个论文，也是发表于2010，证实了一氧化氮营养补充品对运动员的作用。研究对象能够运动更久而不劳累。</p>
<p>Kyani尼多乐能够提高人体自身产生一氧化氮的能力。同时Kyani新乐思中的一些强力的抗氧化混合物也可以在一氧化氮释放后保护一氧化氮，防止其分解。</p>
<p>健美运动员一直努力塑造更清晰更健壮的肌肉，而一氧化氮补充品能够很有效地帮助他们达到目的。你也许听过健美运动员常提到的一个词“充电”(pump)。这个术语指的是不断积累的血液大量流向肌肉，达到肌肉充血的效果。这些血流使葡萄糖和氧气进入肌肉组织，葡萄糖是细胞用来产生ATP的原料，提供收紧、锻炼肌肉的能量。一氧化氮能够在跑步、竞走甚至普拉提训练时提供给身体足够的能量，经过一氧化氮强化改善的血流会给运动的持久产生很有利的影响。</p>
<p>不仅仅对健美运动员是这样，一氧化氮对以所有进行定期训练的人都有很大的益处，无论强度如何。运动本身就可以提高一氧化氮的水平，然而，此时如果我们一氧化氮的补充品，就能够显著地提升锻炼效果。我们只要运动就能产生比平时更多的一氧化氮，即使每天只走30分钟也会有助一氧化氮的产生。这种运动对于心脑血管的健康是非常有益的，一氧化氮在其中的重要作用现在在医学界已经众所周知。董事会主席汉森提倡大家的“Step up”（前进）不仅是个口号，而是让我们切实地能够通过运动促进我们的身体自然地产生一样化氮。</p>
<p class="zw_lmd2">—— Kyani科学与医疗委员会委员</p>
<p><strong>托马斯伯克博士</strong></p>
<p class="zw_lmd2">参考文献：</p>
<p class="zw_lmd2">1. J Int Soc Sports Nutr. 2010; 7: 13.</p>
<p class="zw_lmd2">2. Journal of Applied Physiology 2010; 109: 135.</p>
<p class="zw_lmd2">3. American Journal of Hypertension 2007; 20: 825.</p>
<div class="divider"></div>

<div class="wumii-hook">
    <input type="hidden" name="wurl" value="http://www.hykyani.com/archives/2208" /><br />
    <input type="hidden" name="wtitle" value="运动员的福音" /><br />
    <input type="hidden" name="wpic" value="" />
</div>
                                <div class="divider"></div>                                <div class="postmetadata">
                                    <span>
发表于 2013 年 1 月 27 日                                     </span> &nbsp; / &nbsp; <span><a href="../blog/kyani_product.php" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp; 
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