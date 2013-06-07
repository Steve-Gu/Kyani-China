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
<title>博客|Kyani金三角健康俱乐部 - 助您体验新的人生！</title>
<link rel="canonical" href="http://www.hykyani.com/blog" />
<link rel="next" href="http://www.hykyani.com/blog/page/2" />
<meta property='og:locale' content='zh_CN'/>
<meta property='og:title' content='博客|Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:url' content='http://www.hykyani.com/blog'/>
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
var duoshuoQuery = {"short_name":"hykyani","sso":{"login":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=duoshuo_login","logout":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=logout&_wpnonce=ba771b1d9e"},"remote_auth":"W10= aea66cada704752f0ceda264de680481e0dadc1d 1364037773"};
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
<body class="archive category category-blog category-10   no_title_section">
<?php require '../header.php'; ?>
	<!-- end top-wrapper -->

	<div class="clear"></div>


            <div id="page-content-title">
                <div id="page-content-header" class="container_24">
              
                    <div id="page-title">
                                <h1 class="pagetitle">博客</h1>
                    </div>
                    <!-- end page-title -->
                </div>
                <!-- end page-content-header -->
            </div>
            <!-- end page-content-title -->
	    <div class="clear"></div>

	    <div id="page-content">
			<div class="container_24">
<p class="breadcrumbs"><a href="../index.php">首页</a><span class="breadarrow"> &rarr; </span><span class='current_crumb'>博客 </span></p>			</div>




<div id="content-container" class="container_24">
    <div id="main-content" class="grid_16">
	<div class="main-content-padding">

	    
		  
						    <div class="post-2372 post type-post status-publish format-standard hentry category-kyani_product tag-61 tag-65" id="post-2372">
				<div class="entry">
                                    <div class="post-top">
                                        <h2><a href="../archives/2372.php" rel="bookmark" title="蓝莓的功效">蓝莓的功效</a></h2>
                                        <div class="postmetadata">
                                            <span>
 2013 年 3 月 22 日                                             </span> &nbsp; / &nbsp; <span><a href="../blog/kyani_product.php" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp; 
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
<span class="custom-frame alignleft"><a href="../archives/2372.php" title="蓝莓的功效"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/blueberry575-200.jpg&amp;w=575&amp;h=200&amp;zc=1&amp;q=100" alt="蓝莓的功效" /></a></span><p>                                    
<p>编者按：蓝莓的功效已被科学界广泛认可，其营养价值也被人们所知，并广泛接受。如今在国内已经掀起了蓝莓热潮，蓝莓汁、蓝莓果酱、蓝莓冰淇淋，虽然种植的蓝莓并没有阿拉斯加野生蓝莓那样的强大效果，但是，其口感和营养价值仍被人称道，那么本文将为您揭开蓝莓这个小小的谜团，谈谈蓝莓的功效。</p>
</p><a class="read-more-align-left" href="../archives/2372.php" title="阅读全文"><span>阅读全文</span> &rarr;</a><div class="clear"></div>
				</div>
			    </div>
<div class="divider top-of-page"><a href="#top" title="页面顶部">回到顶部</a></div>						    <div class="post-2368 post type-post status-publish format-standard hentry category-kyani_product tag-57 tag-63 tag-64" id="post-2368">
				<div class="entry">
                                    <div class="post-top">
                                        <h2><a href="../archives/2368.php" rel="bookmark" title="Kyani金三角组合与各种疼痛问题">Kyani金三角组合与各种疼痛问题</a></h2>
                                        <div class="postmetadata">
                                            <span>
 2013 年 3 月 21 日                                             </span> &nbsp; / &nbsp; <span><a href="../blog/kyani_product.php" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp; 
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
<span class="custom-frame alignleft"><a href="../archives/2368.php" title="Kyani金三角组合与各种疼痛问题"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/anypain.jpg&amp;w=575&amp;h=200&amp;zc=1&amp;q=100" alt="Kyani金三角组合与各种疼痛问题" /></a></span><p>                                    
<p>Kyani健康金三角产品有很好的止痛效果，可以最大程度地缓解疼痛程度。Kyani健康三角组合是三个食用简单、对血流提升效果显著的产品，三款同时使用可以缓解任何疼痛问题，无论是急性的还是慢性的。</p>
</p><a class="read-more-align-left" href="../archives/2368.php" title="阅读全文"><span>阅读全文</span> &rarr;</a><div class="clear"></div>
				</div>
			    </div>
<div class="divider top-of-page"><a href="#top" title="页面顶部">回到顶部</a></div>						    <div class="post-2364 post type-post status-publish format-standard hentry category-kyani_product tag-33 tag-34 tag-62" id="post-2364">
				<div class="entry">
                                    <div class="post-top">
                                        <h2><a href="../archives/2364.php" rel="bookmark" title="Kyani尼多乐与性健康">Kyani尼多乐与性健康</a></h2>
                                        <div class="postmetadata">
                                            <span>
 2013 年 3 月 20 日                                             </span> &nbsp; / &nbsp; <span><a href="../blog/kyani_product" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp; 
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
<span class="custom-frame alignleft"><a href="../archives/2364.php" title="Kyani尼多乐与性健康"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/Kyani-sex.jpg&amp;w=575&amp;h=200&amp;zc=1&amp;q=100" alt="Kyani尼多乐与性健康" /></a></span><p>                                    
<p>Kyani尼多乐是天然诺丽根、茎、叶、果实的浓缩而成的精华液，它能够帮助人体自主产生一氧化氮，改善性健康。与处方药的区别是它没有任何副作用，是帮助人体恢复本能而非暂时性的替代，更重要的是男女皆可食用。使用Kyani尼多乐，可以延缓衰老过程，增强性刺激，改善性生活，使用Kyani尼多乐，伴随Kyani享受更好的生活！</p>
</p><a class="read-more-align-left" href="../archives/2364.php" title="阅读全文"><span>阅读全文</span> &rarr;</a><div class="clear"></div>
				</div>
			    </div>
<div class="divider top-of-page"><a href="#top" title="页面顶部">回到顶部</a></div>						    <div class="post-2350 post type-post status-publish format-standard hentry category-kyani_product tag-33 tag-34 tag-35 tag-61 tag-39" id="post-2350">
				<div class="entry">
                                    <div class="post-top">
                                        <h2><a href="../archives/2350.php" rel="bookmark" title="Kyani健康三角组合与心脑血管健康">Kyani健康三角组合与心脑血管健康</a></h2>
                                        <div class="postmetadata">
                                            <span>
 2013 年 3 月 19 日                                             </span> &nbsp; / &nbsp; <span><a href="http://www.hykyani.com/blog/kyani_product" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp; 
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
<span class="custom-frame alignleft"><a href="../archives/2350.php" title="Kyani健康三角组合与心脑血管健康"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/bloodheart.jpg&amp;w=575&amp;h=200&amp;zc=1&amp;q=100" alt="Kyani健康三角组合与心脑血管健康" /></a></span><p>                                    
<p>以心脏病、高血压、中风为代表的当今第一号杀手心脑血管疾病困扰了无数人，Kyani健康三角组合——新乐思、新舒康、尼多乐是Kyani的专利产品，全面解决心脑血管的健康，让我们拥有洁净的内环境，让毒垢和自由基无处藏身。本文将为大家介绍三款产品保护心脏健康的原理。</p>
</p><a class="read-more-align-left" href="../archives/2350.php" title="阅读全文"><span>阅读全文</span> &rarr;</a><div class="clear"></div>
				</div>
			    </div>
<div class="divider top-of-page"><a href="#top" title="页面顶部">回到顶部</a></div>						    <div class="post-2346 post type-post status-publish format-standard hentry category-kyani_product tag-33 tag-60" id="post-2346">
				<div class="entry">
                                    <div class="post-top">
                                        <h2><a href="../archives/2346.php" rel="bookmark" title="Kyani健康三角组合与骨骼健康">Kyani健康三角组合与骨骼健康</a></h2>
                                        <div class="postmetadata">
                                            <span>
 2013 年 3 月 18 日                                             </span> &nbsp; / &nbsp; <span><a href="http://www.hykyani.com/blog/kyani_product" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp; 
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
<span class="custom-frame alignleft"><a href="../archives/2346.php" title="Kyani健康三角组合与骨骼健康"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/bone.jpg&amp;w=575&amp;h=200&amp;zc=1&amp;q=100" alt="Kyani健康三角组合与骨骼健康" /></a></span><p>                                    
<p>我们要用最好的食物来滋养我们的骨骼。Kyani健康三角组合产品提供了非常丰富的成分修复、滋养、保护我们的细胞，让我们远离骨折、骨质疏松、酸中毒等症的痛苦，伴随Kyani，让我们和家人的骨骼健康一生！</p>
</p><a class="read-more-align-left" href="../archives/2346.php" title="阅读全文"><span>阅读全文</span> &rarr;</a><div class="clear"></div>
				</div>
			    </div>
<div class="divider top-of-page"><a href="#top" title="页面顶部">回到顶部</a></div>						    <div class="post-2344 post type-post status-publish format-standard hentry category-kyani_product tag-33 tag-59" id="post-2344">
				<div class="entry">
                                    <div class="post-top">
                                        <h2><a href="../archives/2344.php" rel="bookmark" title="Kyani健康金三角产品——全面解决呼吸问题">Kyani健康金三角产品——全面解决呼吸问题</a></h2>
                                        <div class="postmetadata">
                                            <span>
 2013 年 3 月 17 日                                             </span> &nbsp; / &nbsp; <span><a href="http://www.hykyani.com/blog/kyani_product" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp; 
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
<span class="custom-frame alignleft"><a href="../archives/2344.php" title="Kyani健康金三角产品——全面解决呼吸问题"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/hale.jpg&amp;w=575&amp;h=200&amp;zc=1&amp;q=100" alt="Kyani健康金三角产品——全面解决呼吸问题" /></a></span><p>                                    
<p>吸入，呼出&#8230;一般来说这样的生理活动实在是简单得不值一提。但是，如果你患上了哮喘、慢性阻塞性肺病、睡眠呼吸中止症或者打鼾，那么简单的呼吸活动也会变得困难起来。患上这些疾病的人通常会感到不同程度的劳累感，因为他们无法吸入足够的氧气进入肺中。哮喘是呼吸道炎症，患者常需要吸入类固醇药物来减轻炎症，缓解病情。针对炎症Kyani健康三角组合产品中含有大量的抗氧化成分，对哮喘等呼吸道疾病的康复有很好的效果。</p>
</p><a class="read-more-align-left" href="../archives/2344.php" title="阅读全文"><span>阅读全文</span> &rarr;</a><div class="clear"></div>
				</div>
			    </div>
<div class="divider top-of-page"><a href="#top" title="页面顶部">回到顶部</a></div>						    <div class="post-2339 post type-post status-publish format-standard hentry category-kyani_product" id="post-2339">
				<div class="entry">
                                    <div class="post-top">
                                        <h2><a href="../archives/2339.php" rel="bookmark" title="Kyani新舒康的主要成分——生育三烯酚与心理健康！">Kyani新舒康的主要成分——生育三烯酚与心理健康！</a></h2>
                                        <div class="postmetadata">
                                            <span>
 2013 年 3 月 16 日                                             </span> &nbsp; / &nbsp; <span><a href="http://www.hykyani.com/blog/kyani_product" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp; 
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
<span class="custom-frame alignleft"><a href="../archives/2339.php" title="Kyani新舒康的主要成分——生育三烯酚与心理健康！"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/psychology1.jpg&amp;w=575&amp;h=200&amp;zc=1&amp;q=100" alt="Kyani新舒康的主要成分——生育三烯酚与心理健康！" /></a></span><p>                                    
<p>生育三烯酚对轻度认知功能障碍（相关率92%）和老年痴呆症（相关率94%）有很好的保护效果，大大提高认知水平，维护心理健康，减轻糖尿病引起的神经损伤。</p>
</p><a class="read-more-align-left" href="../archives/2339.php" title="阅读全文"><span>阅读全文</span> &rarr;</a><div class="clear"></div>
				</div>
			    </div>
<div class="divider top-of-page"><a href="#top" title="页面顶部">回到顶部</a></div>						    <div class="post-2333 post type-post status-publish format-standard hentry category-kyani_product" id="post-2333">
				<div class="entry">
                                    <div class="post-top">
                                        <h2><a href="../archives/2333.php" rel="bookmark" title="Kyani健康三角组合对情绪与认知健康的影响">Kyani健康三角组合对情绪与认知健康的影响</a></h2>
                                        <div class="postmetadata">
                                            <span>
 2013 年 3 月 15 日                                             </span> &nbsp; / &nbsp; <span><a href="http://www.hykyani.com/blog/kyani_product" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp; 
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
<span class="custom-frame alignleft"><a href="../archives/2333.php" title="Kyani健康三角组合对情绪与认知健康的影响"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/happy.jpg&amp;w=575&amp;h=200&amp;zc=1&amp;q=100" alt="Kyani健康三角组合对情绪与认知健康的影响" /></a></span><p>                                    
<p>生理医学研究表明营养的摄取认知能力和情绪等大脑功能起着至关重要的作用，这种作用是复杂且全方位的。Kyani健康三角组合提供了上文提到的所有成分，有丰富的欧米伽3维生素、矿物质、微量元素黄酮类化合物及抗氧化成分，能够有效地改善和保持大脑功能的健康，保护我们的身体。</p>
</p><a class="read-more-align-left" href="../archives/2333.php" title="阅读全文"><span>阅读全文</span> &rarr;</a><div class="clear"></div>
				</div>
			    </div>
<div class="divider top-of-page"><a href="#top" title="页面顶部">回到顶部</a></div>						    <div class="post-2302 post type-post status-publish format-standard hentry category-success-mentality tag-kyani tag-48" id="post-2302">
				<div class="entry">
                                    <div class="post-top">
                                        <h2><a href="../archives/2302.php" rel="bookmark" title="Kyani家人,全力以赴ALL IN!">Kyani家人,全力以赴ALL IN!</a></h2>
                                        <div class="postmetadata">
                                            <span>
 2013 年 3 月 12 日                                             </span> &nbsp; / &nbsp; <span><a href="http://www.hykyani.com/blog/success-mentality" title="查看 成功心态 中的全部文章" rel="category tag">成功心态</a></span> &nbsp; 
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
<span class="custom-frame alignleft"><a href="../archives/2302.php" title="Kyani家人,全力以赴ALL IN!"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/kyani2013-all-in.jpg&amp;w=575&amp;h=200&amp;zc=1&amp;q=100" alt="Kyani家人,全力以赴ALL IN!" /></a></span><p>                                    
<p>虽然Kyani2013拉斯维加斯全球国际大会已经过去了近一个月，但我还是很开心终于能和大家分享Kyani2013的精神，每年的Kyani美国年会和国际年会都会提出新的口号来激励作为Kyani合作人的我们。这些口号正是公司的发展方向，我们顺势而行，必定能够迎来我们和伙伴的成功！正如去年8月的美国年会提出的STEP UP一样，今年董事会主席汉森先生给我们的新口号也只有两个单词：ALL IN（全力以赴）！下面我就给大家讲讲这个口号背后的故事。</p>
</p><a class="read-more-align-left" href="../archives/2302.php" title="阅读全文"><span>阅读全文</span> &rarr;</a><div class="clear"></div>
				</div>
			    </div>
<div class="divider top-of-page"><a href="#top" title="页面顶部">回到顶部</a></div>						    <div class="post-2292 post type-post status-publish format-standard hentry category-kyani_product tag-39 tag-57" id="post-2292">
				<div class="entry">
                                    <div class="post-top">
                                        <h2><a href="../archives/2292.php" rel="bookmark" title="Kyani新舒康的消炎效果研究">Kyani新舒康的消炎效果研究</a></h2>
                                        <div class="postmetadata">
                                            <span>
 2013 年 3 月 11 日                                             </span> &nbsp; / &nbsp; <span><a href="http://www.hykyani.com/blog/kyani_product" title="查看 产品相关 中的全部文章" rel="category tag">产品相关</a></span> &nbsp;
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
<span class="custom-frame alignleft"><a href="../archives/2292.php" title="Kyani新舒康的消炎效果研究"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2013/03/kyani-sunset-report.jpg&amp;w=575&amp;h=200&amp;zc=1&amp;q=100" alt="Kyani新舒康的消炎效果研究" /></a></span><p>                                    
<p>Kyani新舒康：已被证明可减少90%以上炎症<br />
最近，第三方实验机构崔尼蒂生物实验室（Trinity Bioactives）对Kyani新舒康的消炎效果进行了研究。结果表明Kyani新舒康对炎症的减少率高达90%以上，而且，这个数据的考查对象还是稀释量的Kyani新舒康。这个数据意味着Kyani新舒康已经达到了世界知名的药品氯喹（Chloroquine）的消炎效果。</p>
</p><a class="read-more-align-left" href="../archives/2292.php" title="阅读全文"><span>阅读全文</span> &rarr;</a><div class="clear"></div>
				</div>
			    </div>
<div class="divider top-of-page"><a href="#top" title="页面顶部">回到顶部</a></div>			
			<div class="clear"></div>

<div class='wp-pagenavi'>
<span class='pages'>第 1 页，共 3 页</span><span class='current'>1</span><a href='../blog/page2.php' class='page larger'>2</a>
<a href='../blog/page3.php' class='page larger'>3</a><a href='../blog/page2.php' class='nextpostslink'>&raquo;</a>
</div>
	    	</div><!-- end main-content-padding -->
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