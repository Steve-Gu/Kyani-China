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
<title>公司发展 - Kyani金三角健康俱乐部 - 助您体验新的人生！</title>
<meta name="description" content="Kyani凯安尼公司为美独资电子商务公司，在美国合法注册并在短短的2年成为美国DSA会员。在中国拥有国家工商行政管理局颁发的证书。生产的产品通过正红印印证，进口中国时有检疫证明。事实证明Kyani凯安尼在国际的声誉很高，如今大力发展中国市场。"/>
<meta name="keywords" content="Kyani公司,凯安尼公司,Kyani发展,Kyani合法"/>
<link rel="canonical" href="http://www.hykyani.com/kyani-company/development-of-company" />
<meta property='og:locale' content='zh_CN'/>
<meta property='og:title' content='公司发展 - Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:description' content='Kyani凯安尼公司为美独资电子商务公司，在美国合法注册并在短短的2年成为美国DSA会员。在中国拥有国家工商行政管理局颁发的证书。生产的产品通过正红印印证，进口中国时有检疫证明。事实证明Kyani凯安尼在国际的声誉很高，如今大力发展中国市场。'/>
<meta property='og:url' content='http://www.hykyani.com/kyani-company/development-of-company'/>
<meta property='og:site_name' content='Kyani金三角健康俱乐部 - 助您体验新的人生！'/>
<meta property='og:type' content='article'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/Certificate-of-founding-in-Idaho.jpg&#038;h=266&#038;w=190&#038;zc=1'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/DSA.jpg&#038;h=266&#038;w=190&#038;zc=1'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/Beijing1.jpg&#038;h=266&#038;w=190&#038;zc=1'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/Beijing2.jpg&#038;h=266&#038;w=190&#038;zc=1'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/正红印标志.jpg&#038;h=266&#038;w=190&#038;zc=1'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/出入境检疫证.jpg&#038;h=266&#038;w=190&#038;zc=1'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/06/alexa.jpg'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/06/BBB-rating-A.jpg'/>
<meta property='og:image' content='http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/06/Kyani北京代表处开业.jpg'/>
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
var duoshuoQuery = {"short_name":"hykyani","sso":{"login":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=duoshuo_login","logout":"http:\/\/www.hykyani.com\/hykyani.com\/wp-login.php?action=logout&_wpnonce=ba771b1d9e"},"remote_auth":"W10= 9cd1828fa062388dbe3aaa88a42030e19a17fdcf 1364032727"};
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
<body class="page page-id-1903 page-child parent-pageid-1901 page-template page-template-page-PageTemplate3-php   no_title_section">
<?php require '../header.php'; ?>
	<!-- end top-wrapper -->

	<div class="clear"></div>


            <div id="page-content-title">
                <div id="page-content-header" class="container_24">
              
                    <div id="page-title">
                            <h1>公司发展</h1>
                    </div>
                    <!-- end page-title -->
                </div>
                <!-- end page-content-header -->
            </div>
            <!-- end page-content-title -->
	    <div class="clear"></div>

	    <div id="page-content">
			<div class="container_24">
<p class="breadcrumbs"><a href="../index.php">首页</a><span class="breadarrow"> &rarr; </span><a href="../kyani-company.php">Kyani公司</a><span class="breadarrow"> &rarr; </span><span class='current_crumb'>公司发展 </span></p>			</div>




<div id="content-container" class="container_24">
    <div id="main-content" class="grid_18 push_6">
	<div class="main-content-padding">

		<div class="post" id="post-1903">
		    <div class="entry">
<p><!--:zh--><br />
<h2><strong>公司概述</strong></h2>

<ul class="list-1">
<li><span style="font-size:14px;">Kyani凯安尼公司成立于2005年12月，总部位于美国爱达荷州。性质是复合式电子商务公司。</span></li>
<li><span style="font-size:14px;">由美国三大杰出的贵族企业家建立,以提供健康、回报社会及提供商业机会为宗旨。</span></li>
<li><span style="font-size:14px;">2007年投放市场和建立销售团队，管理团队中多人身家过亿。</span></li>
<li><span style="font-size:14px;">垄断阿拉斯加野生蓝莓商业用地50年，南太平洋大溪地诺丽大部分资源70年。</span></li>
<li><span style="font-size:14px;">研发生产纯天然有机健康补充品，原料均为野生，无化学添加。均已通过国际认证。</span></li>
<li><span style="font-size:14px;">短短的2年就成为了美国DSA协会的会员。</span></li>
<li><span style="font-size:14px;">在短短的5年间，已发展了42个国家并获得了较高知名度和信誉度。开业首年营业额超过2亿美元，现年营业额15亿美元。</span></li>
<li><span style="font-size:14px;">目标：十年内做到全球最大的电子商务服务型贸易公司。</span></li>
</ul>

<div class="divider"></div>
<h2><strong>公司资质</strong></h2>
<p>Kyani凯安尼公司为美独资企业，在美国合法注册并在短短的2年成为美国DSA会员。在中国拥有国家工商行政管理局颁发的证书。生产的产品通过正红印印证，进口中国时有检疫证明。</p>
<p><span class="zw_color">请点击下面的图片将其放大观看</span></p>
<div id="attachment_1916" class="wp-caption alignleft" style="width: 200px"><a href="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/Certificate-of-founding-in-Idaho.jpg" class="group1 cboxElement" title="Kyani公司美国登记注册证书"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/Certificate-of-founding-in-Idaho.jpg&#038;h=266&#038;w=190&#038;zc=1" title="Kyani公司美国登记注册证书" /></a><p class="wp-caption-text">Kyani公司美国登记注册证书</p></div>
<div id="attachment_1910" class="wp-caption alignleft" style="width: 200px"><a href="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/DSA.jpg" class="group1 cboxElement" title="DSA会员证书"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/DSA.jpg&#038;h=266&#038;w=190&#038;zc=1" alt="DSA会员证书" title="DSA会员证书" /></a><p class="wp-caption-text">DSA会员证书</p></div>
<div id="attachment_1914" class="wp-caption alignleft" style="width: 200px"><a href="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/Beijing1.jpg" class="group1 cboxElement" title="获批中华人民共和国国家工商行政管理局证书"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/Beijing1.jpg&#038;h=266&#038;w=190&#038;zc=1" alt="获批中华人民共和国国家工商行政管理局证书" title="获批中华人民共和国国家工商行政管理局证书" /></a><p class="wp-caption-text">获批中国国家工商行政管理局证书</p></div>
<div id="attachment_1915" class="wp-caption alignleft" style="width: 200px"><a href="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/Beijing2.jpg" class="group1 cboxElement" title="获批中华人民共和国国家工商行政管理局证书"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/Beijing2.jpg&#038;h=266&#038;w=190&#038;zc=1" alt="获批中华人民共和国国家工商行政管理局证书" title="获批中华人民共和国国家工商行政管理局证书" /></a><p class="wp-caption-text">获批中国国家工商行政管理局证书</p></div>
<div id="attachment_1913" class="wp-caption alignleft" style="width: 200px"><a href="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/正红印标志.jpg" class="group1 cboxElement" title="Kyani产品荣获“正”印标志"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/正红印标志.jpg&#038;h=266&#038;w=190&#038;zc=1" alt="Kyani产品荣获“正”印标志" title="Kyani产品荣获“正”印标志" /></a><p class="wp-caption-text">Kyani产品荣获“正”印标志</p></div>
<div id="attachment_1911" class="wp-caption alignleft" style="width: 200px"><a href="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/出入境检疫证.jpg" class="group1 cboxElement" title="Kyani产品出入境检疫证"><img src="http://www.hykyani.com/hykyani.com/wp-content/themes/u-design/scripts/timthumb.php?src=http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/04/出入境检疫证.jpg&#038;h=266&#038;w=190&#038;zc=1" alt="Kyani产品出入境检疫证" title="Kyani产品出入境检疫证" /></a><p class="wp-caption-text">Kyani产品出入境检疫证</p></div>
<div class="clear"></div>
<p>同时，作为复合式电子商务公司，Kyani承诺遵守2001年互联网八国首脑会议（中国参加）共同达成的</span></p>
<h4 class="slide_toggle"><a href="#">国际互联网公约</a></h4><div class="slide_toggle_content" style="display: none;">
<p><strong>国际互联网公约</strong>：世界任何国家不能干涉网上交易。任何一家电子商务公司（网站）在任何国家注册都是合法的，但是他们开展其它的国家语言业务时必须做到：不准攻击该语言国家政府；不散布黄色淫秽的内容；不涉及伤害人身财产安全；不传播病毒；在中国不传播非法信息。</p>
<p>2001年互联网八国首脑会议（中国参加）指出：任何国家不能以任何形式和理由干涉和阻碍网上交易和电子商务的发展进程。2007年6月9日开始，国际互联网公约正式在中国实施。</p>
<p><strong>电子商务</strong>：是以”电子”为手段，以商务为主体．将原来传统销售和购物渠道移到互联网上来，打破国家有形与无形的壁垒，使生产企业达到全球化，网络化，无形化，个性化。互联网和电子商务是一个全球性的行为，它面对的是全球任何一个国家和地区的任何一个人。打破国家有形与无形的壁垒。所以任何国家都无权以本国名义（法律）限制全球性的行为。 </p>
</div>
<div class="divider"></div>
<h2><strong>Kyani在国际上的认可</strong></h2>
<p><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/06/alexa.jpg" alt="alexa" title="alexa" width="200" height="68" class="alignright" /></p>
<p>Kyani在世界上受到了广泛的关注和认可，首先，至2012年6月，全球会员已超过51万，主要分布在欧美发达国家，这可以通过分析Kyani的官方网站www.kyani.net的访问流量来源以及世界访问排名来获得证明。请<a target="_blank" href="http://alexa.chinaz.com/?domain=kyani.net">点击这里看国内Alexa对官网的流量分析</a>，懂英文的朋友也可以<a class="iframe cboxElement" href="http://www.alexa.com/siteinfo/kyani.net">点击这里看国际Alexa对官网的流量分析</a>，结果基本相同，下面我们以国内Alexa为例简单分析一下。第一部分是网站的综合排名，我们可以看到Kyani官网在全球几亿的网站中排名是非常靠前的，说明Kyani有很多人去访问、去关注，而这些人几乎都是会员和准会员；第二、三部分是网站排名的变化趋势和子站点访问比例，没有重要的内容；第四部分是IP和PV值，简单说分别是每天访问此网站的人数(不同IP，可以理解为净人数)及每天访问此网站的人次(一个人访问多次也被统计)；最有价值的是最后一个部分，就是不同国家的访问量的排名，我们可以看到这些国家大多是欧美的发达国家，可见欧美对Kyani的认可度。一家公司，在欧美发达国家如此认可，我们也就不用担心其信誉问题，而且，Kyani作为一家以天然食品为经营对象的公司为这些国家认可，我们更不用担心产品的质量问题，因为Kyani产品全球统一价，统一由UPS发货，所有会员享受的是同样的优质产品。<img class="alignleft" title="BBB rating A" src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/06/BBB-rating-A.jpg" alt="BBB rating A" width="120" height="150" />如今Kyani在中国市场的营业额占全球营业额的比例还非常的小，这对于能在了解Kyani的您来说是幸运的，因为您在那么多人还没了解到时早早地就把握了这个信息，享受这么优质的产品，同样重要的是，如果您是一个敏锐的商人，一定会说“这是一个巨大的商机”，当一个好公司、好产品还仅有为数不多的人在经营时那么当市场真正打开时他们就是为公司贡献最大力量的一批人，也是离成功最近的人。对官网流量进行分析之后我们再<a class="iframe cboxElement" href="http://www.bbb.org/boise/business-reviews/vitamins-and-food-supplements/ky-ani-sun-corporation-in-idaho-falls-id-1000005633">点击这里看看美国商业促进会（BBB）对Kyani的信用评级</a>。这个非常简单，我们可以看到BBB对Kyani的评价是A+，最高级，这也直观地说明了国际团体对Kyani的信用评价是很高的。</p>
<div class="divider"></div>
<h2><strong>重点发展中国市场</strong></h2>
<p>2009年9月28号在中国北京、广州成立了办事处，香港、台湾成立了分公司。在北京、深圳、大连建立了物流中心。现筹备中国总部，将于2012年底设立于上海。</p>
<p><a class="youtube cboxElement" title="Kyani北京代表处开业" href="http://player.56.com/v_NjkwNjgzMzc.swf"><img src="http://www.hykyani.com/hykyani.com/wp-content/uploads/2012/06/Kyani北京代表处开业.jpg" alt="Kyani北京代表处开业" class="aligncenter" /></a></p>
<p>Kyani的董事会主席柯克汉森和总裁米迦勒多次来到中国并表态要把重点开发中国市场，这意味着Kyani公司将为中国市场投入更多的资源，事实证明他们做到了。首先公司大力促销，使Kyani产品更加优惠。这一点对中国会员来说体会无疑是最深刻的。同时，公司对推广积极的中国会员有更多更刺激的奖励，日本旅游、IPAD等奖励让会员感受到了Kyani的轻松。</p>
<p>就像我们看到的一样，Kyani公司不断在中国投入分公司及代表机构、物流中心，为会员提供更好的支持和服务。</p>
<div class="clear"></div><!--:--></p>
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
<li class="page_item page-item-1881"><a href="../kyani-company/powerful-company.php">财团背景及管理研发团队</a></li>
<li class="page_item page-item-1903 current_page_item"><a href="../kyani-company/development-of-company.php">公司发展</a></li>
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