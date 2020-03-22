<?php
require 'conexion.php';

$sql = "SELECT * FROM products";
$exc = $pdo->prepare($sql);
$exc->execute();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=10.0, user-scalable=yes">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Ofertas gastronómicas – Caracas – Experiencias BOD</title>
<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
<link rel="dns-prefetch" href="https://s.w.org/">
<link rel="alternate" type="application/rss+xml" title="Experiencias BOD » Feed" href="https://localhost/feed/">
<link rel="alternate" type="application/rss+xml" title="Experiencias BOD » Feed de los comentarios" href="https://localhost/comments/feed/">
		<script type="text/javascript" async="" src="<?php echo '/wp-content/themes/customify/v1/assets/'; ?>analytics.js"></script><script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/localhost\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.3.2"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="/wp-content/themes/customify/v1/assets/wp-emoji-release.js" type="text/javascript" defer="defer"></script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel="stylesheet" id="login-with-ajax-css" href="/wp-content/themes/customify/v1/assets/widget.css" type="text/css" media="all">
<link rel="stylesheet" id="mo_openid_admin_settings_style-css" href="/wp-content/themes/customify/v1/assets/mo_openid_style.css" type="text/css" media="all">
<link rel="stylesheet" id="mo_openid_admin_settings_phone_style-css" href="/wp-content/themes/customify/v1/assets/phone.css" type="text/css" media="all">
<link rel="stylesheet" id="mo-wp-bootstrap-social-css" href="/wp-content/themes/customify/v1/assets/bootstrap-social.css" type="text/css" media="all">
<link rel="stylesheet" id="mo-wp-bootstrap-main-css" href="/wp-content/themes/customify/v1/assets/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" id="mo-openid-sl-wp-font-awesome-css" href="/wp-content/themes/customify/v1/assets/mo-font-awesome.css" type="text/css" media="all">
<link rel="stylesheet" id="bootstrap_style_ass-css" href="/wp-content/themes/customify/v1/assets/mo_openid_bootstrap-tour-standalone.css" type="text/css" media="all">
<link rel="stylesheet" id="dashicons-css" href="/wp-content/themes/customify/v1/assets/dashicons.css" type="text/css" media="all">
<link rel="stylesheet" id="admin-bar-css" href="/wp-content/themes/customify/v1/assets/admin-bar_002.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-css" href="/wp-content/themes/customify/v1/assets/elementor-icons.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-common-css" href="/wp-content/themes/customify/v1/assets/common.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-block-library-css" href="/wp-content/themes/customify/v1/assets/style_003.css" type="text/css" media="all">
<style id="wp-block-library-inline-css" type="text/css">
.has-text-align-justify{text-align:justify;}
</style>
<link rel="stylesheet" id="wc-block-style-css" href="/wp-content/themes/customify/v1/assets/style_002.css" type="text/css" media="all">
<link rel="stylesheet" id="wpbforwpbakery-main-css" href="/wp-content/themes/customify/v1/assets/main.css" type="text/css" media="all">
<style id="wpbforwpbakery-main-inline-css" type="text/css">

  			.wpbforwpbakery_archive .vc_row.wpb_row.vc_row-fluid,
  			.wpbforwpbakery-single-product .vc_row.wpb_row.vc_row-fluid,
  			.wpbforwpbakery-page-template .vc_row.wpb_row.vc_row-fluid{
  				max-width: 1170px;
  				margin: 0 auto;
  			}
  			.wpbforwpbakery_archive .vc_row.wpb_row.vc_row-fluid[data-vc-full-width='true'],
  			.wpbforwpbakery-single-product .vc_row.wpb_row.vc_row-fluid[data-vc-full-width='true'],
  			.wpbforwpbakery-page-template .vc_row.wpb_row.vc_row-fluid[data-vc-full-width='true']{
				max-width:100%;
  			}
   	   
</style>
<link rel="stylesheet" id="woocommerce-general-css" href="/wp-content/themes/customify/v1/assets/woocommerce.css" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="/wp-content/themes/customify/v1/assets/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)">
<style id="woocommerce-inline-inline-css" type="text/css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel="stylesheet" id="duplicate-post-css" href="/wp-content/themes/customify/v1/assets/duplicate-post.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-animations-css" href="/wp-content/themes/customify/v1/assets/animations.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-frontend-css" href="/wp-content/themes/customify/v1/assets/frontend.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-global-css" href="/wp-content/themes/customify/v1/assets/global.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-1070-css" href="/wp-content/themes/customify/v1/assets/post-1070.css" type="text/css" media="all">
<link rel="stylesheet" id="popup-maker-site-css" href="/wp-content/themes/customify/v1/assets/pum-site-styles.css" type="text/css" media="all">
<link rel="stylesheet" id="woorousell-css" href="/wp-content/themes/customify/v1/assets/core.css" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-css" href="/wp-content/themes/customify/v1/assets/font-awesome.css" type="text/css" media="all">
<link crossorigin="anonymous" rel="stylesheet" id="customify-google-font-css" href="/wp-content/themes/customify/v1/assets/css_002.css" type="text/css" media="all">
<link rel="stylesheet" id="customify-style-css" href="/wp-content/themes/customify/v1/assets/style.css" type="text/css" media="all">
<style id="customify-style-inline-css" type="text/css">
.customify-container, .layout-contained, .site-framed .site, .site-boxed .site { max-width: 1200px; } .main-layout-content .entry-content > .alignwide { width: calc( 1200px - 4em ); max-width: 100vw;  }.header-top .header--row-inner,.button,button,button.button,input[type="button"],input[type="reset"],input[type="submit"],.button:not(.components-button):not(.customize-partial-edit-shortcut-button), input[type="button"]:not(.components-button):not(.customize-partial-edit-shortcut-button),input[type="reset"]:not(.components-button):not(.customize-partial-edit-shortcut-button), input[type="submit"]:not(.components-button):not(.customize-partial-edit-shortcut-button),.pagination .nav-links > *:hover,.pagination .nav-links span,.nav-menu-desktop.style-full-height .primary-menu-ul > li.current-menu-item > a, .nav-menu-desktop.style-full-height .primary-menu-ul > li.current-menu-ancestor > a,.nav-menu-desktop.style-full-height .primary-menu-ul > li > a:hover,.posts-layout .readmore-button:hover{    background-color: #333333;}.posts-layout .readmore-button {color: #333333;}.pagination .nav-links > *:hover,.pagination .nav-links span,.entry-single .tags-links a:hover, .entry-single .cat-links a:hover,.posts-layout .readmore-button,.posts-layout .readmore-button:hover{    border-color: #333333;}                 .wc-svg-btn.active,        .woocommerce-tabs.wc-tabs-horizontal ul.tabs li.active,        #review_form {            border-color: #333333;        }                .wc-svg-btn.active,        .wc-single-tabs ul.tabs li.active a,        .wc-single-tabs .tab-section.active .tab-section-heading a {            color: #333333;        }.customify-builder-btn{    background-color: #7baa39;}                 .add_to_cart_button        {            background-color: #7baa39;        }a                   {                    color: #1c1c1c;} .woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a,        .woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover {            color: #1c1c1c;        }a:hover, a:focus,.link-meta:hover, .link-meta a:hover{    color: #6b6b6b;}.site-content .widget-title { color: #7baa39;}body {font-family: "Roboto";font-weight: 300;font-size: 15px;letter-spacing: 1px;}h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {font-family: "Roboto";font-weight: normal;text-transform: uppercase;}.site-branding .site-title, .site-branding .site-title a {font-weight: 200;font-size: 30px;letter-spacing: 6px;}.entry-content h1, .wp-block h1, .entry-single .entry-title {font-family: "Roboto";font-weight: normal;}#page-cover {background-image: url("https://customifysites.com/outfit/wp-content/uploads/sites/15/2018/09/pexels-photo-341003.jpeg?t=1540195082961");}#page-cover {-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}#page-cover {background-position: center;}#page-cover {background-repeat: no-repeat;}.header--row:not(.header--transparent).header-top .header--row-inner  {background-color: #000000;} .header--row:not(.header--transparent).header-main .header--row-inner  {background-color: #000000;} .header--row:not(.header--transparent).header-bottom .header--row-inner  {background-color: #ffffff;} .sub-menu .li-duplicator {display:none !important;}.builder-header-html-item.item--html p, .builder-header-html-item.item--html {font-weight: 400;text-transform: none;font-size: 14px;}.header-search_icon-item .header-search-modal  {border-style: solid;} .header-search_icon-item .search-field  {border-style: solid;} .dark-mode .header-search_box-item .search-form-fields, .header-search_box-item .search-form-fields  {border-style: solid;} .builder-item--primary-menu .nav-menu-desktop .primary-menu-ul > li > a  {color: #000000; text-decoration-color: #000000;} .header--row:not(.header--transparent) .builder-item--primary-menu .nav-menu-desktop .primary-menu-ul > li > a:hover, .header--row:not(.header--transparent) .builder-item--primary-menu .nav-menu-desktop .primary-menu-ul > li.current-menu-item > a, .header--row:not(.header--transparent) .builder-item--primary-menu .nav-menu-desktop .primary-menu-ul > li.current-menu-ancestor > a, .header--row:not(.header--transparent) .builder-item--primary-menu .nav-menu-desktop .primary-menu-ul > li.current-menu-parent > a  {color: #7baa39; text-decoration-color: #7baa39;} .builder-item--primary-menu .nav-menu-desktop .primary-menu-ul > li > a,.builder-item-sidebar .primary-menu-sidebar .primary-menu-ul > li > a {font-family: "Montserrat";font-weight: 500;text-transform: uppercase;font-size: 15px;letter-spacing: 0.5px;}.footer-social-icons.customify-builder-social-icons.color-custom li a {background-color: #7baa39;}.footer-social-icons.customify-builder-social-icons.color-custom li a {color: #ffffff;}.footer-social-icons.customify-builder-social-icons.color-custom li a:hover {color: #595959;}.site-content .content-area  {background-color: #FFFFFF;} .woocommerce .button.add_to_cart_button, .woocommerce .button.alt,.woocommerce .button.added_to_cart, .woocommerce .button.checkout, .woocommerce .button.product_type_variable,.item--wc_cart .cart-icon .cart-qty .customify-wc-total-qty{    background-color: #7baa39;}.comment-form-rating a, .star-rating,.comment-form-rating a:hover, .comment-form-rating a:focus, .star-rating:hover, .star-rating:focus{    color: #111111;}/* CSS for desktop */#page-cover {text-align: center;}#page-cover .page-cover-inner {min-height: 320px;}.header--row.header-top .customify-grid, .header--row.header-top .style-full-height .primary-menu-ul > li > a {min-height: 100px;}.header--row.header-bottom .customify-grid, .header--row.header-bottom .style-full-height .primary-menu-ul > li > a {min-height: 100px;}.header--row .builder-first--html {text-align: left;}.site-header .site-branding img { max-width: 400px; } .site-header .cb-row--mobile .site-branding img { width: 400px; }.header--row .builder-item--logo, .builder-item.builder-item--group .item--inner.builder-item--logo {margin-top: 10px;margin-right: 0px;margin-bottom: 10px;margin-left: 0px;}.header--row .builder-first--logo {text-align: center;}.header--row .builder-first--nav-icon {text-align: right;}.header-search_icon-item .search-submit {margin-left: -40px;}.header--row .builder-first--search_icon {text-align: right;}.header-search_box-item .search-submit{margin-left: -40px;} .header-search_box-item .woo_bootster_search .search-submit{margin-left: -40px;} .header-search_box-item .header-search-form button.search-submit{margin-left:-40px;}.builder-item--primary-menu .nav-menu-desktop .primary-menu-ul > li  {margin-right: -5px;margin-left: -5px;} .header--row .builder-first--primary-menu {text-align: center;}.header-social-icons.customify-builder-social-icons li a { font-size: 16px; }.header--row .builder-first--social-icons {text-align: right;}.header--row .builder-first--wc_cart {text-align: right;}.footer-social-icons.customify-builder-social-icons li a { font-size: 17px; }.footer-social-icons.customify-builder-social-icons li a {padding: 0.5em;}.footer-social-icons.customify-builder-social-icons li {margin-left: 3px; margin-right: 3px;}.footer--row .builder-first--footer-social-icons {text-align: right;}/* CSS for tablet */@media screen and (max-width: 1024px) { #page-cover .page-cover-inner {min-height: 250px;}.header-menu-sidebar-inner {text-align: center;}.header--row .builder-first--html {text-align: center;}.header--row .builder-first--nav-icon {text-align: left;}.header-search_icon-item .search-submit {margin-left: -40px;}.header--row .builder-first--search_icon {text-align: right;}.header-search_box-item .search-submit{margin-left: -40px;} .header-search_box-item .woo_bootster_search .search-submit{margin-left: -40px;} .header-search_box-item .header-search-form button.search-submit{margin-left:-40px;} }/* CSS for mobile */@media screen and (max-width: 568px) { .site-branding .site-title, .site-branding .site-title a {font-size: 23px;}#page-cover .page-cover-inner {min-height: 150px;}.header--row.header-top .customify-grid, .header--row.header-top .style-full-height .primary-menu-ul > li > a {min-height: 60px;}.header--row.header-main .customify-grid, .header--row.header-main .style-full-height .primary-menu-ul > li > a {min-height: 50px;}.builder-header-html-item.item--html p, .builder-header-html-item.item--html {font-size: 13px;}.header--row .builder-first--nav-icon {text-align: center;}.header-search_icon-item .search-submit {margin-left: -40px;}.header--row .builder-first--search_icon {text-align: right;}.header-search_box-item .search-submit{margin-left: -40px;} .header-search_box-item .woo_bootster_search .search-submit{margin-left: -40px;} .header-search_box-item .header-search-form button.search-submit{margin-left:-40px;}.header--row .builder-first--wc_cart {text-align: right;} }
</style>
<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css" href="/wp-content/themes/customify/v1/assets/css.css" type="text/css" media="all">
<link rel="stylesheet" id="wpappninja-admin-bar-css" href="/wp-content/themes/customify/v1/assets/admin-bar.css" type="text/css" media="all">
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/jquery_003.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/jquery-migrate.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var LWA = {"ajaxurl":"https:\/\/localhost\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/login-with-ajax.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/jquery_002.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/social_login.js"></script>
<link rel="https://api.w.org/" href="https://localhost/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://localhost/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://localhost/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 5.3.2">
<meta name="generator" content="WooCommerce 4.0.0">
<link rel="canonical" href="https://localhost/ofertas-gastronomicas-caracas/">
<link rel="shortlink" href="https://localhost/?p=1070">
<link rel="alternate" type="application/json+oembed" href="https://localhost/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flocalhost%2Fofertas-gastronomicas-caracas%2F">
<link rel="alternate" type="text/xml+oembed" href="https://localhost/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flocalhost%2Fofertas-gastronomicas-caracas%2F&amp;format=xml">
<script async="" src="/wp-content/themes/customify/v1/assets/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-46199837-2');
</script>
 


<!-- start Simple Custom CSS and JS -->
<style type="text/css">
.woorousell_sc .button {

    background-color: transparent !important;
    border-color: #fff !important;
    border-style: solid !important;
    border-radius: 1em !important;
}
.wrsl-prosingle-heading{
 text-transform: none !important; 
  color: #000 !important;
  font-weight: 700 !important;
	font-family: Montserrat, "Open Sans", Helvetica, Arial, sans-serif !important;
}

.woorousell_sc .lugarBold {
  font-size: .8em !important;
  color: #000 !important;
  font-weight: 700 !important;
	font-family: Montserrat, "Open Sans", Helvetica, Arial, sans-serif !important;
  line-height: 25px !important;
 
 
  display: -webkit-box !important;
    height: 20px !important;
    -webkit-line-clamp: 1 !important;
    -webkit-box-orient: vertical !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
}
.woorousell_sc .lugarBoldTitulo {
  font-size: .8em !important;
  color: #000 !important;
  font-weight: 700 !important;
	font-family: Montserrat, "Open Sans", Helvetica, Arial, sans-serif !important;
  line-height: 25px !important;
 
 
  display: -webkit-box !important;
    height: 50px !important;
    -webkit-line-clamp: 2 !important;
    -webkit-box-orient: vertical !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
}
.woorousell_sc .lugarLight {
  font-size: .8em;
  color: #b1b1b1 !important;
  font-weight: 300 !important;
	font-family: Montserrat, "Open Sans", Helvetica, Arial, sans-serif !important;
  line-height: 20px;
  
  display: -webkit-box !important;
    height: 50px !important;
    -webkit-line-clamp: 2 !important;
    -webkit-box-orient: vertical !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
  
}
.wrsl-carousel-item{
 border: 1px #b1b1b1 solid;
 border-radius: 10px;
  margin-right: 15px !important;
  width:246px !important;
  height: 360px!important;
}
.bx-viewport{
	height: 370px!important;
}

.wrsl-prosingle-wrapper{
  border-radius: 10px;
  height: 358px!important;
}
.wrsl-prosingle-thumbnail .woocommerce-Price-amount{
  	color: #000 !important;
  font-weight: 700 !important;
  font-size: 1.5em;
	font-family: Montserrat, "Open Sans", Helvetica, Arial, sans-serif !important;
  justify-content: center;
   align-items: center;
	vertical-align: middle !important;
  line-height: 50px;
}

.imgThumbnail{
  margin-top: -15% !important;
}

.wrsl-carousel-to-next{
  background-color: #7faa39 !important;
    right: -20px !important;
    height: 25px !important;
    width: 25px !important;
    padding: 0 !important;
    border-radius: 50% !important;
    opacity: .5 !important;
    line-height: 0 !important;
    min-height: 0 !important;
}

.wrsl-carousel-to-prev{
  background-color: #7faa39 !important;
    left: -20px !important;
    height: 25px !important;
    width: 25px !important;
    padding: 0 !important;
    border-radius: 50% !important;
    opacity: .5 !important;
    line-height: 0 !important;
    min-height: 0 !important;
}
.button:not(.components-button):not(.customize-partial-edit-shortcut-button), button:not(.components-button):not(.customize-partial-edit-shortcut-button), input[type=button]:not(.components-button):not(.customize-partial-edit-shortcut-button), input[type=reset]:not(.components-button):not(.customize-partial-edit-shortcut-button), input[type=submit]:not(.components-button):not(.customize-partial-edit-shortcut-button) {
  border: none;
}
.wrsl-prosingle-button .button {
      
  border: 1px !important;
  padding: 0 1.5em !important;
    line-height: 1.8em !important;
    min-height: 1.8em !important;
  border-radius:10px !important;
  
}

.wrsl-prosingle-button .button:hover {
    opacity: 1 !important;
}

</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
.woocommerce div.product form.cart div.quantity:before {
    content: "" !important;
}

.input-qty-pm {
    flex-wrap: nowrap !important;
}

@media only screen and (max-width: 550px) {
   .woocommerce-page .coupon .button, .woocommerce-page .input-group-text-button .button {
    	width: 15em !important;
   }
}

</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
.nav-menu-desktop.style-border-top .nav-menu>li>a .link-before:before {
    height: 1px;
}

body.page-id-1666 #cb-row--header-bottom {
    display: none;
}
</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
div.product div.summary {
  	margin-top: 0px !important;
    padding: 40px;
}

.related.products, .upsells.products {
    padding: 40px;
}

.page-titlebar {
    padding: 20px;
}

.woocommerce ul.products {
    padding: 20px;
}

.wc-product-inner .wc-product-contents {
    text-align: center;
}

.page-breadcrumb-list {
    margin: 0 0em;
}</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
.woocommerce-Price-amount {
  	font-weight: 400 !important;
	font-size: 30px;
  	color: #7baa39 !important;
}

.wrsl-prosingle-price .woocommerce-Price-amount{
  	color: #fff !important;
  font-weight: 700 !important;
	font-family: Montserrat, "Open Sans", Helvetica, Arial, sans-serif !important;
}</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
div.product div.summary {
    margin-top: 40px;
}

</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
.woocommerce-product-gallery__trigger {
	display: none;
}
</style>
<!-- end Simple Custom CSS and JS -->


<!-- WPMobile.App -->
<meta name="theme-color" content="#ffffff">
<meta name="msapplication-navbutton-color" content="#ffffff">
<meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
<meta property="al:ios:url" content="appexperienciasbodcomwpapp://localhost/ofertas-gastronomicas-caracas/">
<meta property="al:ios:app_store_id" content="1495444288">
<meta property="al:ios:app_name" content="Experiencias BOD ">
<meta name="apple-itunes-app" content="app-id=1495444288, app-argument=appexperienciasbodcomwpapp://localhost/ofertas-gastronomicas-caracas/">
<meta name="twitter:app:name:iphone" content="Experiencias BOD ">
<meta name="twitter:app:id:iphone" content="1495444288">
<meta name="twitter:app:url:iphone" content="appexperienciasbodcomwpapp://localhost/ofertas-gastronomicas-caracas/">
<meta name="twitter:app:name:ipad" content="Experiencias BOD ">
<meta name="twitter:app:id:ipad" content="1495444288">
<meta name="twitter:app:url:ipad" content="appexperienciasbodcomwpapp://localhost/ofertas-gastronomicas-caracas/">
<meta property="al:android:url" content="appexperienciasbodcomwpapp://localhost/ofertas-gastronomicas-caracas/">
<meta property="al:android:package" content="appexperienciasbodcom.wpapp">
<meta property="al:android:app_name" content="Experiencias BOD ">
<meta name="twitter:app:name:googleplay" content="Experiencias BOD ">
<meta name="twitter:app:id:googleplay" content="appexperienciasbodcom.wpapp">
<meta name="twitter:app:url:googleplay" content="appexperienciasbodcomwpapp://localhost/ofertas-gastronomicas-caracas/">
<!-- / WPMobile.App -->

	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="amphtml" href="https://localhost/ofertas-gastronomicas-caracas/?amp"><style type="text/css" media="print">#wpadminbar { display:none; }</style>
	<style type="text/css" media="screen">
	@media screen and ( max-width: 782px ) {
	}
</style>
	<script>try{window.webkit.messageHandlers.wpmobile.postMessage('resetbadge');} catch(err) {}</script><link rel="icon" href="https://localhost/wp-content/uploads/2020/01/cropped-fav-icon-grand-32x32.png" sizes="32x32">
<link rel="icon" href="https://localhost/wp-content/uploads/2020/01/cropped-fav-icon-grand-192x192.png" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="https://localhost/wp-content/uploads/2020/01/cropped-fav-icon-grand-180x180.png">
<meta name="msapplication-TileImage" content="https://localhost/wp-content/uploads/2020/01/cropped-fav-icon-grand-270x270.png">
		<style type="text/css"></style>
		<script type="text/javascript"></script>
	</head>

<body data-rsssl="1" class="page-template-default page page-id-1070 logged-in admin-bar wp-custom-logo theme-customify woocommerce-js content main-layout-content site-full-width menu_sidebar_dropdown woocommerce later-wc-version elementor-default elementor-kit-3414 elementor-page elementor-page-1070 not-touch-screen customize-support" data-elementor-device-mode="desktop">
<div id="page" class="site box-shadow">
	<a class="skip-link screen-reader-text" href="#site-content">Ir al contenido</a>
	<a class="close is-size-medium  close-panel close-sidebar-panel" href="#">
        <span class="hamburger hamburger--squeeze is-active">
            <span class="hamburger-box">
              <span class="hamburger-inner"><span class="screen-reader-text">Menú</span></span>
            </span>
        </span>
        <span class="screen-reader-text">Cerrar</span>
        </a><header id="masthead" class="site-header header-v2"><div id="masthead-inner" class="site-header-inner">							<div class="header-top header--row layout-full-contained" id="cb-row--header-top" data-row-id="top" data-show-on="mobile">
								<div class="header--row-inner header-top-inner dark-mode">
									<div class="customify-container">
										<div class="cb-row--mobile hide-on-desktop customify-grid customify-grid-middle"><div class="row-v2 row-v2-top no-left no-right"><div class="col-v2 col-v2-left"></div><div class="col-v2 col-v2-center"><div class="item--inner builder-item--logo" data-section="title_tagline" data-item-id="logo">		<div class="site-branding logo-bottom">
						<a href="https://localhost/" class="logo-link" rel="home" itemprop="url">
				<img class="site-img-logo" src="/wp-content/themes/customify/v1/assets/cropped-experiencias-bod-eslogan.png" alt="Experiencias BOD">
							</a>
					</div><!-- .site-branding -->
		</div></div><div class="col-v2 col-v2-right"></div></div></div>									</div>
								</div>
							</div>
														<div class="header-main header--row layout-fullwidth" id="cb-row--header-main" data-row-id="main" data-show-on="desktop mobile">
								<div class="header--row-inner header-main-inner dark-mode">
									<div class="customify-container">
										<div class="customify-grid  cb-row--desktop hide-on-mobile hide-on-tablet customify-grid-middle"><div class="row-v2 row-v2-main no-left no-right"><div class="col-v2 col-v2-left"></div><div class="col-v2 col-v2-center"><div class="item--inner builder-item--logo" data-section="title_tagline" data-item-id="logo">		<div class="site-branding logo-bottom">
						<a href="https://localhost/" class="logo-link" rel="home" itemprop="url">
				<img class="site-img-logo" src="/wp-content/themes/customify/v1/assets/cropped-experiencias-bod-eslogan.png" alt="Experiencias BOD">
							</a>
					</div><!-- .site-branding -->
		</div></div><div class="col-v2 col-v2-right"></div></div></div><div class="cb-row--mobile hide-on-desktop customify-grid customify-grid-middle"><div class="row-v2 row-v2-main no-left no-right"><div class="col-v2 col-v2-left"></div><div class="col-v2 col-v2-center"><div class="item--inner builder-item--nav-icon" data-section="header_menu_icon" data-item-id="nav-icon">		<a class="menu-mobile-toggle item-button is-size-desktop-medium is-size-tablet-medium is-size-mobile-medium">
			<span class="hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</span>
			<span class="nav-icon--label hide-on-tablet hide-on-mobile">Menú</span></a>
		</div></div><div class="col-v2 col-v2-right"></div></div></div>									</div>
								</div>
							</div>
														<div class="header-bottom header--row layout-fullwidth" id="cb-row--header-bottom" data-row-id="bottom" data-show-on="desktop">
								<div class="header--row-inner header-bottom-inner light-mode">
									<div class="customify-container">
										<div class="customify-grid  cb-row--desktop hide-on-mobile hide-on-tablet customify-grid-middle"><div class="row-v2 row-v2-bottom no-left no-right"><div class="col-v2 col-v2-left"></div><div class="col-v2 col-v2-center"><div class="item--inner builder-item--primary-menu has_menu" data-section="header_menu_primary" data-item-id="primary-menu"><nav id="site-navigation-bottom-desktop" class="site-navigation primary-menu primary-menu-bottom nav-menu-desktop primary-menu-desktop style-border-top hide-arrow-active"><ul id="menu-menu-caracas" class="primary-menu-ul menu nav-menu"><li id="menu-item--bottom-desktop-1671" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1671"><a href="https://localhost/"><span class="link-before">Inicio</span></a></li>
<li id="menu-item--bottom-desktop-1672" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1672"><a href="https://localhost/reserva-en-restaurantes-caracas/"><span class="link-before">Reserva en Restaurantes</span></a></li>
<li id="menu-item--bottom-desktop-1673" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1673"><a href="https://www.experienciasgourmet.com/eventos/?Ciudad=634&amp;Pais=1&amp;Especialidad=&amp;event=1&amp;experienciasBod=1"><span class="link-before">Eventos</span></a></li>
<li id="menu-item--bottom-desktop-1674" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1674"><a href="https://localhost/regalate-gastronomia-caracas/"><span class="link-before">Tus Regalos</span></a></li>
<li id="menu-item--bottom-desktop-1675" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1070 current_page_item menu-item-1675"><a href="https://localhost/ofertas-gastronomicas-caracas/" aria-current="page"><span class="link-before">Ofertas gastronómicas</span></a></li>
<li id="menu-item--bottom-desktop-1676" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1676"><a href="https://centroculturalbod.com/"><span class="link-before">Centro Cultural Bod</span></a></li>
</ul></nav></div></div><div class="col-v2 col-v2-right"></div></div></div>									</div>
								</div>
							</div>
							<div id="header-menu-sidebar" class="header-menu-sidebar menu-sidebar-panel light-mode"><div id="header-menu-sidebar-bg" class="header-menu-sidebar-bg"><div id="header-menu-sidebar-inner" class="header-menu-sidebar-inner"><div class="builder-item-sidebar mobile-item--primary-menu mobile-item--menu "><div class="item--inner" data-item-id="primary-menu" data-section="header_menu_primary" style="transition-delay: 0.2s;"><nav id="site-navigation-sidebar-mobile" class="site-navigation primary-menu primary-menu-sidebar nav-menu-mobile primary-menu-mobile style-border-top hide-arrow-active"><ul id="menu-menu-caracas" class="primary-menu-ul menu nav-menu"><li id="menu-item--sidebar-mobile-1671" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1671"><a href="https://localhost/"><span class="link-before">Inicio</span></a></li>
<li id="menu-item--sidebar-mobile-1672" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1672"><a href="https://localhost/reserva-en-restaurantes-caracas/"><span class="link-before">Reserva en Restaurantes</span></a></li>
<li id="menu-item--sidebar-mobile-1673" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1673"><a href="https://www.experienciasgourmet.com/eventos/?Ciudad=634&amp;Pais=1&amp;Especialidad=&amp;event=1&amp;experienciasBod=1"><span class="link-before">Eventos</span></a></li>
<li id="menu-item--sidebar-mobile-1674" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1674"><a href="https://localhost/regalate-gastronomia-caracas/"><span class="link-before">Tus Regalos</span></a></li>
<li id="menu-item--sidebar-mobile-1675" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1070 current_page_item menu-item-1675"><a href="https://localhost/ofertas-gastronomicas-caracas/" aria-current="page"><span class="link-before">Ofertas gastronómicas</span></a></li>
<li id="menu-item--sidebar-mobile-1676" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1676"><a href="https://centroculturalbod.com/"><span class="link-before">Centro Cultural Bod</span></a></li>
</ul></nav></div></div></div></div></div></div></header>		<div id="page-titlebar" class="page-header--item page-titlebar ">
			<div class="page-titlebar-inner customify-container">
				<h1 class="titlebar-title h4">Ofertas gastronómicas – Caracas</h1>			</div>
		</div>
			<div id="site-content" class="site-content">
		<div class="customify-container">
			<div class="customify-grid">
				<main id="main" class="content-area customify-col-12">
						<div class="content-inner">
		<article id="post-1070" class="post-1070 page type-page status-publish hentry">
	
	<div class="entry-content">
				<div data-elementor-type="wp-page" data-elementor-id="1070" class="elementor elementor-1070" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-26fab73 elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="26fab73" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1579px; left: -219.367px;">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-e2c3ed9 elementor-column elementor-col-100 elementor-top-column" data-id="e2c3ed9" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-f0ae9f6 elementor-widget elementor-widget-heading" data-id="f0ae9f6" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Una nueva Oferta Gastronómica Todos los días</h2>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="elementor-element elementor-element-a3d6761 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="a3d6761" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1579px; left: -219.367px;">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-5350596 elementor-column elementor-col-100 elementor-top-column" data-id="5350596" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-d00fda4 elementor-widget elementor-widget-image" data-id="d00fda4" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
										<img src="/wp-content/themes/customify/v1/assets/cintillo-de-paso-a-paso-ofertasgastronomicas.png" class="attachment-full size-full" alt="" srcset="https://localhost/wp-content/uploads/2020/01/cintillo-de-paso-a-paso-ofertasgastronomicas.png 1420w, https://localhost/wp-content/uploads/2020/01/cintillo-de-paso-a-paso-ofertasgastronomicas-300x38.png 300w, https://localhost/wp-content/uploads/2020/01/cintillo-de-paso-a-paso-ofertasgastronomicas-1024x131.png 1024w, https://localhost/wp-content/uploads/2020/01/cintillo-de-paso-a-paso-ofertasgastronomicas-768x98.png 768w, https://localhost/wp-content/uploads/2020/01/cintillo-de-paso-a-paso-ofertasgastronomicas-600x76.png 600w" sizes="(max-width: 1420px) 100vw, 1420px" width="1420" height="181">											</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="elementor-element elementor-element-acd9375 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="acd9375" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-917a5a1 elementor-column elementor-col-100 elementor-top-column" data-id="917a5a1" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-820a3de elementor-widget elementor-widget-heading" data-id="820a3de" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Los más Nuevos</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-6bd1659 elementor-widget elementor-widget-divider" data-id="6bd1659" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-fc94158 elementor-widget elementor-widget-shortcode" data-id="fc94158" data-element_type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
					<div class="elementor-shortcode">		<div id="woorousell-1748" class="woorousell_sc">
					<div class="wrsl-carousel-container carousel-loaded" data-mode="horizontal" data-speed="500" data-maxslides="4" data-moveslides="1" data-slidemargin="15" data-randomstart="false" data-adaptiveheight="false" data-adaptiveheightspeed="0" data-touchenabled="true" data-auto="false" data-pause="0" data-autohover="false" data-autodelay="0" data-ticker="false" data-tickerhover="false">
							<div class="bx-wrapper" style="max-width: 1121px; margin: 0px auto;"><div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 360px;"><div class="wrsl-carousel" style="width: 4215%; position: relative; transition-duration: 0s; transform: translate3d(-1044px, 0px, 0px);"><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-2395" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTAlmuerzoLaMascara-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTAlmuerzoLaMascara-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTAlmuerzoLaMascara-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTAlmuerzoLaMascara-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/almuerzo-para-dos-en-la-mascara/">ALMUERZO PARA DOS EN LA MÁSCARA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=2395" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2395" data-product_sku="" aria-label="Añade “ALMUERZO PARA DOS EN LA MÁSCARA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-1657" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTnuevaCenaxchivata-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-para-dos-en-chivata-bistro/">CENA PARA DOS<br>Chivata Bistró</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1657" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1657" data-product_sku="" aria-label="Añade “CENA PARA DOSChivata Bistró” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-1512" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaLaMascara-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-la-mascara/">CENA EN LA MÁSCARA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>16.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1512" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1512" data-product_sku="" aria-label="Añade “CENA EN LA MÁSCARA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-1058" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/AfterNourBOD-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/AfterNourBOD-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/after-office-nour/">AFTER OFFICE NOUR</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1058" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1058" data-product_sku="" aria-label="Añade “AFTER OFFICE NOUR” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div>
									<div class="wrsl-carousel-item" aria-hidden="false" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-2395" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTAlmuerzoLaMascara-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTAlmuerzoLaMascara-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTAlmuerzoLaMascara-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTAlmuerzoLaMascara-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/almuerzo-para-dos-en-la-mascara/">ALMUERZO PARA DOS EN LA MÁSCARA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=2395" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2395" data-product_sku="" aria-label="Añade “ALMUERZO PARA DOS EN LA MÁSCARA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><!-- .wrsl-carousel-item -->
									<div class="wrsl-carousel-item" aria-hidden="false" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-1657" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTnuevaCenaxchivata-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-para-dos-en-chivata-bistro/">CENA PARA DOS<br>Chivata Bistró</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1657" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1657" data-product_sku="" aria-label="Añade “CENA PARA DOSChivata Bistró” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><!-- .wrsl-carousel-item -->
									<div class="wrsl-carousel-item" aria-hidden="false" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-1512" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaLaMascara-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-la-mascara/">CENA EN LA MÁSCARA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>16.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1512" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1512" data-product_sku="" aria-label="Añade “CENA EN LA MÁSCARA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><!-- .wrsl-carousel-item -->
									<div class="wrsl-carousel-item" aria-hidden="false" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-1058" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/AfterNourBOD-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/AfterNourBOD-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/after-office-nour/">AFTER OFFICE NOUR</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1058" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1058" data-product_sku="" aria-label="Añade “AFTER OFFICE NOUR” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><!-- .wrsl-carousel-item -->
								<div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-2395" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTAlmuerzoLaMascara-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTAlmuerzoLaMascara-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTAlmuerzoLaMascara-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTAlmuerzoLaMascara-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/almuerzo-para-dos-en-la-mascara/">ALMUERZO PARA DOS EN LA MÁSCARA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=2395" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2395" data-product_sku="" aria-label="Añade “ALMUERZO PARA DOS EN LA MÁSCARA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-1657" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTnuevaCenaxchivata-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-para-dos-en-chivata-bistro/">CENA PARA DOS<br>Chivata Bistró</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1657" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1657" data-product_sku="" aria-label="Añade “CENA PARA DOSChivata Bistró” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-1512" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaLaMascara-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-la-mascara/">CENA EN LA MÁSCARA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>16.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1512" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1512" data-product_sku="" aria-label="Añade “CENA EN LA MÁSCARA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 269px; margin-right: 15px;">
							<div id="woorousell-1748-1058" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/AfterNourBOD-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/AfterNourBOD-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/after-office-nour/">AFTER OFFICE NOUR</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1058" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1058" data-product_sku="" aria-label="Añade “AFTER OFFICE NOUR” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div></div></div></div>
					<div class="wrsl-carousel-controller-center">
			<button id="#woorousell-1748-prev" class="wrsl-carousel-to-prev"><i class="fa fa-chevron-left"></i></button>
			<button id="#woorousell-1748-next" class="wrsl-carousel-to-next"><i class="fa fa-chevron-right"></i></button>
		</div>
				</div><!-- .wrsl-carousel-container -->
				</div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="elementor-element elementor-element-c81047c elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="c81047c" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1579px; left: -219.367px;">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-70a0bdc elementor-column elementor-col-100 elementor-top-column" data-id="70a0bdc" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-60fee60 elementor-widget elementor-widget-heading" data-id="60fee60" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Cenas</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-a06bc11 elementor-widget elementor-widget-divider" data-id="a06bc11" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-be52c13 elementor-widget elementor-widget-shortcode" data-id="be52c13" data-element_type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
					<div class="elementor-shortcode">		<div id="woorousell-1779" class="woorousell_sc">
					<div class="wrsl-carousel-container carousel-loaded" data-mode="horizontal" data-speed="500" data-maxslides="4" data-moveslides="1" data-slidemargin="10" data-randomstart="false" data-adaptiveheight="false" data-adaptiveheightspeed="0" data-touchenabled="true" data-auto="false" data-pause="0" data-autohover="false" data-autodelay="0" data-ticker="false" data-tickerhover="false">
							<div class="bx-wrapper" style="max-width: 1122px; margin: 0px auto;"><div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 360px;"><div class="wrsl-carousel" style="width: 5215%; position: relative; transition-duration: 0s; transform: translate3d(-1044px, 0px, 0px);"><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1514" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaBistrotDeLaCuadra-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaBistrotDeLaCuadra-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaBistrotDeLaCuadra-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaBistrotDeLaCuadra-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-bistrot-de-la-cuadra/">CENA EN BISTROT DE LA CUADRA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1514" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1514" data-product_sku="" aria-label="Añade “CENA EN BISTROT DE LA CUADRA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1512" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaLaMascara-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-la-mascara/">CENA EN LA MÁSCARA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>16.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1512" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1512" data-product_sku="" aria-label="Añade “CENA EN LA MÁSCARA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1510" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaCasaLia-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaCasaLia-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaCasaLia-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaCasaLia-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-casa-lia/">CENA EN CASA LÍA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1510" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1510" data-product_sku="" aria-label="Añade “CENA EN CASA LÍA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1076" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaNour-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaNour-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaNour-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaNour-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-nour/">CENA EN NOUR</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>18.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1076" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1076" data-product_sku="" aria-label="Añade “CENA EN NOUR” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div>
									<div class="wrsl-carousel-item" aria-hidden="false" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1657" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTnuevaCenaxchivata-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-para-dos-en-chivata-bistro/">CENA PARA DOS<br>Chivata Bistró</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1657" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1657" data-product_sku="" aria-label="Añade “CENA PARA DOSChivata Bistró” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><!-- .wrsl-carousel-item -->
									<div class="wrsl-carousel-item" aria-hidden="false" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1514" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaBistrotDeLaCuadra-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaBistrotDeLaCuadra-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaBistrotDeLaCuadra-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaBistrotDeLaCuadra-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-bistrot-de-la-cuadra/">CENA EN BISTROT DE LA CUADRA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1514" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1514" data-product_sku="" aria-label="Añade “CENA EN BISTROT DE LA CUADRA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><!-- .wrsl-carousel-item -->
									<div class="wrsl-carousel-item" aria-hidden="false" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1512" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaLaMascara-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-la-mascara/">CENA EN LA MÁSCARA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>16.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1512" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1512" data-product_sku="" aria-label="Añade “CENA EN LA MÁSCARA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><!-- .wrsl-carousel-item -->
									<div class="wrsl-carousel-item" aria-hidden="false" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1510" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaCasaLia-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaCasaLia-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaCasaLia-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaCasaLia-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-casa-lia/">CENA EN CASA LÍA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1510" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1510" data-product_sku="" aria-label="Añade “CENA EN CASA LÍA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><!-- .wrsl-carousel-item -->
									<div class="wrsl-carousel-item" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1076" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaNour-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaNour-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaNour-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaNour-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-nour/">CENA EN NOUR</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>18.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1076" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1076" data-product_sku="" aria-label="Añade “CENA EN NOUR” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><!-- .wrsl-carousel-item -->
								<div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1657" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTnuevaCenaxchivata-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTnuevaCenaxchivata-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-para-dos-en-chivata-bistro/">CENA PARA DOS<br>Chivata Bistró</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1657" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1657" data-product_sku="" aria-label="Añade “CENA PARA DOSChivata Bistró” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1514" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaBistrotDeLaCuadra-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaBistrotDeLaCuadra-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaBistrotDeLaCuadra-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaBistrotDeLaCuadra-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-bistrot-de-la-cuadra/">CENA EN BISTROT DE LA CUADRA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1514" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1514" data-product_sku="" aria-label="Añade “CENA EN BISTROT DE LA CUADRA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1512" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaLaMascara-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaLaMascara-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-la-mascara/">CENA EN LA MÁSCARA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>16.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1512" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1512" data-product_sku="" aria-label="Añade “CENA EN LA MÁSCARA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1779-1510" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/GIFTVentaCenaCasaLia-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaCasaLia-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaCasaLia-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/GIFTVentaCenaCasaLia-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/cena-de-cortesia-casa-lia/">CENA EN CASA LÍA</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1510" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1510" data-product_sku="" aria-label="Añade “CENA EN CASA LÍA” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div></div></div></div>
					<div class="wrsl-carousel-controller-center">
			<button id="#woorousell-1779-prev" class="wrsl-carousel-to-prev"><i class="fa fa-chevron-left"></i></button>
			<button id="#woorousell-1779-next" class="wrsl-carousel-to-next"><i class="fa fa-chevron-right"></i></button>
		</div>
				</div><!-- .wrsl-carousel-container -->
				</div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="elementor-element elementor-element-b727ebb elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="b727ebb" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1579px; left: -219.367px;">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-f635e68 elementor-column elementor-col-100 elementor-top-column" data-id="f635e68" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-3d95f4f elementor-widget elementor-widget-heading" data-id="3d95f4f" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">After Office</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-3434d1f elementor-widget elementor-widget-divider" data-id="3434d1f" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-1c64b22 elementor-widget elementor-widget-shortcode" data-id="1c64b22" data-element_type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
					<div class="elementor-shortcode">		<div id="woorousell-1780" class="woorousell_sc">
					<div class="wrsl-carousel-container carousel-loaded" data-mode="horizontal" data-speed="500" data-maxslides="4" data-moveslides="1" data-slidemargin="10" data-randomstart="false" data-adaptiveheight="false" data-adaptiveheightspeed="0" data-touchenabled="true" data-auto="false" data-pause="0" data-autohover="false" data-autodelay="0" data-ticker="false" data-tickerhover="false">
							<div class="bx-wrapper" style="max-width: 273px; margin: 0px auto;"><div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 360px;"><div class="wrsl-carousel" style="width: 1215%; position: relative; transition-duration: 0s; transform: translate3d(-261px, 0px, 0px);"><div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1780-1058" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/AfterNourBOD-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/AfterNourBOD-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/after-office-nour/">AFTER OFFICE NOUR</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1058" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1058" data-product_sku="" aria-label="Añade “AFTER OFFICE NOUR” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div>
									<div class="wrsl-carousel-item" aria-hidden="false" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1780-1058" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/AfterNourBOD-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/AfterNourBOD-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/after-office-nour/">AFTER OFFICE NOUR</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1058" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1058" data-product_sku="" aria-label="Añade “AFTER OFFICE NOUR” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div><!-- .wrsl-carousel-item -->
								<div class="wrsl-carousel-item bx-clone" aria-hidden="true" style="float: left; list-style: outside none none; position: relative; width: 273px; margin-right: 10px;">
							<div id="woorousell-1780-1058" class="wrsl-prosingle-wrapper wrsl-prosingle-style-2 wrsl-has-thumbnail wrsl-text-left wrsl-with-overlay ">
					<div class="wrsl-prosingle-salesbadge">
					</div>
				<div class="wrsl-prosingle-thumbnail">
			<img src="/wp-content/themes/customify/v1/assets/AfterNourBOD-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://localhost/wp-content/uploads/2020/01/AfterNourBOD-300x300.png 300w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-150x150.png 150w, https://localhost/wp-content/uploads/2020/01/AfterNourBOD-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="300">					</div>
				<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

						<h4 class="wrsl-prosingle-heading"><a href="https://localhost/producto/after-office-nour/">AFTER OFFICE NOUR</a></h4>
		
				
						<div class="wrsl-prosingle-ratings">
					</div>
				<div class="wrsl-prosingle-price">
			
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13.00</span></span>
		</div>
		
				
						<div class="wrsl-prosingle-button">
			<a href="https://localhost/ofertas-gastronomicas-caracas/?add-to-cart=1058" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1058" data-product_sku="" aria-label="Añade “AFTER OFFICE NOUR” a tu carrito" rel="nofollow"><span class="button-label">Comprar</span></a>		</div>
					</div>
		</div>
				</div><!-- .wrsl-prosingle -->
							</div></div></div></div>
					<div class="wrsl-carousel-controller-center">
			<button id="#woorousell-1780-prev" class="wrsl-carousel-to-prev"><i class="fa fa-chevron-left"></i></button>
			<button id="#woorousell-1780-next" class="wrsl-carousel-to-next"><i class="fa fa-chevron-right"></i></button>
		</div>
				</div><!-- .wrsl-carousel-container -->
				</div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
						</div>
			</div>
		</div>
			</div><!-- .entry-content -->

</article><!-- #post-1070 -->
	</div><!-- #.content-inner -->
              			</main><!-- #main -->
					</div><!-- #.customify-grid -->
	</div><!-- #.customify-container -->
</div><!-- #content -->
<footer class="site-footer" id="site-footer">							<div class="footer-main footer--row layout-full-contained" id="cb-row--footer-main" data-row-id="main" data-show-on="desktop">
								<div class="footer--row-inner footer-main-inner light-mode">
									<div class="customify-container">
										<div class="customify-grid  customify-grid-top"><div class="customify-col-3_md-3_sm-6_xs-12 builder-item builder-first--footer-1" data-push-left="_sm-0"><div class="item--inner builder-item--footer-1" data-section="sidebar-widgets-footer-1" data-item-id="footer-1"><div class="widget-area"><section id="nav_menu-1" class="widget widget_nav_menu"><h4 class="widget-title">Secciones</h4><div class="menu-menu-primario-container"><ul id="menu-menu-primario" class="menu"><li id="menu-item-1718" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1718"><a href="https://localhost/">Inicio</a></li>
</ul></div></section></div></div></div><div class="customify-col-3_md-3_sm-6_xs-12 builder-item builder-first--footer-2" data-push-left="_sm-0"><div class="item--inner builder-item--footer-2" data-section="sidebar-widgets-footer-2" data-item-id="footer-2"><div class="widget-area"><section id="nav_menu-2" class="widget widget_nav_menu"><h4 class="widget-title">Servicios</h4><div class="menu-servicios-container"><ul id="menu-servicios" class="menu"><li id="menu-item-1238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1238"><a href="https://localhost/beneficios/">Beneficios</a></li>
<li id="menu-item-1249" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1249"><a href="https://localhost/preguntas-frecuentes/">Preguntas frecuentes</a></li>
<li id="menu-item-1248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1248"><a href="https://localhost/terminos-y-condiciones/">Términos y condiciones</a></li>
<li id="menu-item-1379" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1379"><a href="#popup-contact" class="pum-trigger" style="cursor: pointer;">Contacto</a></li>
</ul></div></section></div></div></div><div class="customify-col-3_md-3_sm-6_xs-12 builder-item builder-first--footer-3" data-push-left="_sm-0"><div class="item--inner builder-item--footer-3" data-section="sidebar-widgets-footer-3" data-item-id="footer-3"><div class="widget-area"><section id="media_image-2" class="widget widget_media_image"><h4 class="widget-title">Tus pagos están seguros</h4><img src="/wp-content/themes/customify/v1/assets/LOGOS-PAGOS.png" class="image wp-image-1417  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" width="300" height="64"></section></div></div></div><div class="customify-col-3_md-3_sm-6_xs-12 builder-item builder-first--footer-4" data-push-left="_sm-0"><div class="item--inner builder-item--footer-4" data-section="sidebar-widgets-footer-4" data-item-id="footer-4"><div class="widget-area"></div></div></div></div>									</div>
								</div>
							</div>
														<div class="footer-bottom footer--row layout-full-contained" id="cb-row--footer-bottom" data-row-id="bottom" data-show-on="desktop">
								<div class="footer--row-inner footer-bottom-inner light-mode">
									<div class="customify-container">
										<div class="customify-grid  customify-grid-top"><div class="customify-col-12_md-12_sm-12_xs-12 builder-item builder-first--footer_copyright" data-push-left="_sm-0"><div class="item--inner builder-item--footer_copyright" data-section="footer_copyright" data-item-id="footer_copyright"><div class="builder-footer-copyright-item footer-copyright"><p>Copyright © 2020 Experiencias BOD </p>
</div></div></div></div>									</div>
								</div>
							</div>
							</footer></div><!-- #page -->

<div id="pum-1371" class="pum pum-overlay pum-theme-1365 pum-theme-tema-por-defecto popmake-overlay click_open" data-popmake="{&quot;id&quot;:1371,&quot;slug&quot;:&quot;contacto&quot;,&quot;theme_id&quot;:1365,&quot;cookies&quot;:[],&quot;triggers&quot;:[{&quot;type&quot;:&quot;click_open&quot;,&quot;settings&quot;:{&quot;cookie_name&quot;:&quot;&quot;,&quot;extra_selectors&quot;:&quot;a[href=\&quot;#popup-contact\&quot;]&quot;}}],&quot;mobile_disabled&quot;:null,&quot;tablet_disabled&quot;:null,&quot;meta&quot;:{&quot;display&quot;:{&quot;stackable&quot;:false,&quot;overlay_disabled&quot;:false,&quot;scrollable_content&quot;:false,&quot;disable_reposition&quot;:false,&quot;size&quot;:&quot;medium&quot;,&quot;responsive_min_width&quot;:&quot;0%&quot;,&quot;responsive_min_width_unit&quot;:false,&quot;responsive_max_width&quot;:&quot;100%&quot;,&quot;responsive_max_width_unit&quot;:false,&quot;custom_width&quot;:&quot;640px&quot;,&quot;custom_width_unit&quot;:false,&quot;custom_height&quot;:&quot;380px&quot;,&quot;custom_height_unit&quot;:false,&quot;custom_height_auto&quot;:false,&quot;location&quot;:&quot;center top&quot;,&quot;position_from_trigger&quot;:false,&quot;position_top&quot;:&quot;100&quot;,&quot;position_left&quot;:&quot;0&quot;,&quot;position_bottom&quot;:&quot;0&quot;,&quot;position_right&quot;:&quot;0&quot;,&quot;position_fixed&quot;:false,&quot;animation_type&quot;:&quot;fade&quot;,&quot;animation_speed&quot;:&quot;350&quot;,&quot;animation_origin&quot;:&quot;center top&quot;,&quot;overlay_zindex&quot;:false,&quot;zindex&quot;:&quot;1999999999&quot;},&quot;close&quot;:{&quot;text&quot;:&quot;&quot;,&quot;button_delay&quot;:&quot;0&quot;,&quot;overlay_click&quot;:false,&quot;esc_press&quot;:false,&quot;f4_press&quot;:false},&quot;click_open&quot;:[]}}" role="dialog" aria-hidden="true" aria-labelledby="pum_popup_title_1371">

	<div id="popmake-1371" class="pum-container popmake theme-1365 pum-responsive pum-responsive-medium responsive size-medium">

				

				            <div id="pum_popup_title_1371" class="pum-title popmake-title">
				Contacto			</div>
		

		

				<div class="pum-content popmake-content">
			<div class="wpforms-container wpforms-container-full" id="wpforms-1374"><form id="wpforms-form-1374" class="wpforms-validate wpforms-form" data-formid="1374" method="post" enctype="multipart/form-data" action="/ofertas-gastronomicas-caracas/" novalidate="novalidate"><noscript class="wpforms-error-noscript">Por favor, activa JavaScript en tu navegador para completar este formulario.</noscript><div class="wpforms-field-container"><div id="wpforms-1374-field_1-container" class="wpforms-field wpforms-field-name" data-field-id="1"><label class="wpforms-field-label" for="wpforms-1374-field_1">Nombre <span class="wpforms-required-label">*</span></label><div class="wpforms-field-row wpforms-field-medium"><div class="wpforms-field-row-block wpforms-first wpforms-one-half"><input type="text" id="wpforms-1374-field_1" class="wpforms-field-name-first wpforms-field-required" name="wpforms[fields][1][first]" required=""><label for="wpforms-1374-field_1" class="wpforms-field-sublabel after ">Nombre</label></div><div class="wpforms-field-row-block wpforms-one-half"><input type="text" id="wpforms-1374-field_1-last" class="wpforms-field-name-last wpforms-field-required" name="wpforms[fields][1][last]" required=""><label for="wpforms-1374-field_1-last" class="wpforms-field-sublabel after ">Apellidos</label></div></div></div><div id="wpforms-1374-field_2-container" class="wpforms-field wpforms-field-number" data-field-id="2"><label class="wpforms-field-label" for="wpforms-1374-field_2">Cédula <span class="wpforms-required-label">*</span></label><input type="number" pattern="\d*" id="wpforms-1374-field_2" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][2]" required=""></div><div id="wpforms-1374-field_3-container" class="wpforms-field wpforms-field-number" data-field-id="3"><label class="wpforms-field-label" for="wpforms-1374-field_3">Número de teléfono <span class="wpforms-required-label">*</span></label><input type="number" pattern="\d*" id="wpforms-1374-field_3" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][3]" required=""></div><div id="wpforms-1374-field_4-container" class="wpforms-field wpforms-field-text" data-field-id="4"><label class="wpforms-field-label" for="wpforms-1374-field_4">Ciudad <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-1374-field_4" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][4]" required=""></div><div id="wpforms-1374-field_5-container" class="wpforms-field wpforms-field-text" data-field-id="5"><label class="wpforms-field-label" for="wpforms-1374-field_5">Asunto <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-1374-field_5" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][5]" required=""></div><div id="wpforms-1374-field_6-container" class="wpforms-field wpforms-field-textarea" data-field-id="6"><label class="wpforms-field-label" for="wpforms-1374-field_6">Mensaje <span class="wpforms-required-label">*</span></label><textarea id="wpforms-1374-field_6" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][6]" required=""></textarea></div><div id="wpforms-1374-field_7-container" class="wpforms-field wpforms-field-checkbox" data-field-id="7"><ul id="wpforms-1374-field_7"><li class="choice-1 depth-1"><input type="checkbox" id="wpforms-1374-field_7_1" name="wpforms[fields][7][]" value="Acepto los términos y condiciones"><label class="wpforms-field-label-inline" for="wpforms-1374-field_7_1">Acepto los términos y condiciones</label></li></ul></div></div><div class="wpforms-field wpforms-field-hp"><label for="wpforms-1374-field-hp" class="wpforms-field-label">Website</label><input type="text" name="wpforms[hp]" id="wpforms-1374-field-hp" class="wpforms-field-medium"></div><div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="1374"><input type="hidden" name="wpforms[author]" value="0"><input type="hidden" name="wpforms[post_id]" value="1070"><button type="submit" name="wpforms[submit]" class="wpforms-submit " id="wpforms-submit-1374" value="wpforms-submit" aria-live="assertive" data-alt-text="Enviando..." data-submit-text="Enviar">Enviar</button></div><input type="hidden" name="pum_form_popup_id" value="1371"></form></div>  <!-- .wpforms-container --><div></div>
		</div>


				

				            <button type="button" class="pum-close popmake-close" aria-label="Cerrar">
			CERRAR            </button>
		
	</div>

</div>

	<span class="wpappninja wpmobileapp" style="display:none"></span>

	<script type="text/template" id="tmpl-elementor-templates-modal__header">
	<div class="elementor-templates-modal__header__logo-area"></div>
	<div class="elementor-templates-modal__header__menu-area"></div>
	<div class="elementor-templates-modal__header__items-area">
		<# if ( closeType ) { #>
			<div class="elementor-templates-modal__header__close elementor-templates-modal__header__close--{{{ closeType }}} elementor-templates-modal__header__item">
				<# if ( 'skip' === closeType ) { #>
				<span>Saltar</span>
				<# } #>
				<i class="eicon-close" aria-hidden="true" title="Cerrar"></i>
				<span class="elementor-screen-only">Cerrar</span>
			</div>
		<# } #>
		<div id="elementor-template-library-header-tools"></div>
	</div>
</script>

<script type="text/template" id="tmpl-elementor-templates-modal__header__logo">
	<span class="elementor-templates-modal__header__logo__icon-wrapper elementor-gradient-logo">
		<i class="eicon-elementor"></i>
	</span>
	<span class="elementor-templates-modal__header__logo__title">{{{ title }}}</span>
</script>
<script type="text/template" id="tmpl-elementor-finder">
	<div id="elementor-finder__search">
		<i class="eicon-search"></i>
		<input id="elementor-finder__search__input" placeholder="Teclea para encontrar lo que sea en Elementor">
	</div>
	<div id="elementor-finder__content"></div>
</script>

<script type="text/template" id="tmpl-elementor-finder-results-container">
	<div id="elementor-finder__no-results">Ningún resultado</div>
	<div id="elementor-finder__results"></div>
</script>

<script type="text/template" id="tmpl-elementor-finder__results__category">
	<div class="elementor-finder__results__category__title">{{{ title }}}</div>
	<div class="elementor-finder__results__category__items"></div>
</script>

<script type="text/template" id="tmpl-elementor-finder__results__item">
	<a href="{{ url }}" class="elementor-finder__results__item__link">
		<div class="elementor-finder__results__item__icon">
			<i class="eicon-{{{ icon }}}"></i>
		</div>
		<div class="elementor-finder__results__item__title">{{{ title }}}</div>
		<# if ( description ) { #>
			<div class="elementor-finder__results__item__description">- {{{ description }}}</div>
		<# } #>
	</a>
	<# if ( actions.length ) { #>
		<div class="elementor-finder__results__item__actions">
		<# jQuery.each( actions, function() { #>
			<a class="elementor-finder__results__item__action elementor-finder__results__item__action--{{ this.name }}" href="{{ this.url }}" target="_blank">
				<i class="eicon-{{{ this.icon }}}"></i>
			</a>
		<# } ); #>
		</div>
	<# } #>
</script>
	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<link rel="stylesheet" id="wrslb-inline-styles-css" href="/wp-content/themes/customify/v1/assets/inline.css" type="text/css" media="all">
<style id="wrslb-inline-styles-inline-css" type="text/css">

 #woorousell-1748 .wrsl-prosingle-wrapper:not(.wrsl-with-overlay){ background-color: #F5F5F5; } 
 #woorousell-1748 .button{ background-color: #454545; } 
 #woorousell-1748 .button{ border-color: #454545;} 
 #woorousell-1748 .button:hover{ opacity: 0.75;} 
 #woorousell-1748 .button{ color: #fff;} 
 #woorousell-1748 button.wrsl-carousel-to-prev,  #woorousell-1748  button.wrsl-carousel-to-next{ background-color: #7faa39; } 
 #woorousell-1748 button.wrsl-carousel-to-prev,  #woorousell-1748  button.wrsl-carousel-to-next{ color: #ffffff;} 
 #woorousell-1779 .wrsl-prosingle-wrapper:not(.wrsl-with-overlay){ background-color: #F5F5F5; } 
 #woorousell-1779 .button{ background-color: #454545; } 
 #woorousell-1779 .button{ border-color: #454545;} 
 #woorousell-1779 .button:hover{ opacity: 0.75;} 
 #woorousell-1779 .button{ color: #fff;} 
 #woorousell-1779 button.wrsl-carousel-to-prev,  #woorousell-1779  button.wrsl-carousel-to-next{ background-color: #373737; } 
 #woorousell-1779 button.wrsl-carousel-to-prev,  #woorousell-1779  button.wrsl-carousel-to-next{ color: #ffffff;} 
 #woorousell-1780 .wrsl-prosingle-wrapper:not(.wrsl-with-overlay){ background-color: #F5F5F5; } 
 #woorousell-1780 .button{ background-color: #454545; } 
 #woorousell-1780 .button{ border-color: #454545;} 
 #woorousell-1780 .button:hover{ opacity: 0.75;} 
 #woorousell-1780 .button{ color: #fff;} 
 #woorousell-1780 button.wrsl-carousel-to-prev,  #woorousell-1780  button.wrsl-carousel-to-next{ background-color: #373737; } 
 #woorousell-1780 button.wrsl-carousel-to-prev,  #woorousell-1780  button.wrsl-carousel-to-next{ color: #ffffff;} 
</style>
<link rel="stylesheet" id="wpforms-full-css" href="/wp-content/themes/customify/v1/assets/wpforms-full.css" type="text/css" media="all">
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/hoverintent-js.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/admin-bar.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/jquery_005.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Ver carrito","cart_url":"https:\/\/localhost\/carrito\/","is_cart":"","cart_redirect_after_add":"yes"};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/add-to-cart.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/js.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","qty_pm":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/woocommerce_002.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_d89d1729627bc48a2823cde395c03b0e","fragment_name":"wc_fragments_d89d1729627bc48a2823cde395c03b0e","request_timeout":"5000"};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/cart-fragments.js"></script>
<script type="text/javascript">

		jQuery( 'body' ).bind( 'wc_fragments_refreshed', function() {
			jQuery( 'body' ).trigger( 'jetpack-lazy-images-load' );
		} );
	
</script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/core.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/widget.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/mouse.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/draggable.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/underscore.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/backbone.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/backbone_003.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/backbone_002.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/common-modules.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/position.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/dialog.js"></script>
<script type="text/javascript">
var elementorCommonConfig = {"version":"2.9.6","isRTL":false,"isDebug":false,"activeModules":["ajax","finder","connect"],"urls":{"assets":"https:\/\/localhost\/wp-content\/plugins\/elementor\/assets\/"},"ajax":{"url":"https:\/\/localhost\/wp-admin\/admin-ajax.php","nonce":"e6dd9b2dbf"},"finder":{"data":{"edit":{"title":"Editar","dynamic":true,"name":"edit"},"general":{"title":"General","dynamic":false,"items":{"saved-templates":{"title":"Plantillas guardadas","icon":"library-save","url":"https:\/\/localhost\/wp-admin\/edit.php?post_type=elementor_library&tabs_group=library","keywords":["template","section","page","library"]},"system-info":{"title":"Informaci\u00f3n del sistema","icon":"info-circle-o","url":"https:\/\/localhost\/wp-admin\/admin.php?page=elementor-system-info","keywords":["system","info","environment","elementor"]},"role-manager":{"title":"Gestor de perfiles","icon":"person","url":"https:\/\/localhost\/wp-admin\/admin.php?page=elementor-role-manager","keywords":["role","manager","user","elementor"]},"knowledge-base":{"title":"Base de conocimiento","url":"https:\/\/localhost\/wp-admin\/admin.php?page=go_knowledge_base_site","keywords":["help","knowledge","docs","elementor"]}},"name":"general"},"create":{"title":"Crear","dynamic":false,"items":{"post":{"title":"A\u00f1adir nueva Entrada","icon":"plus-circle-o","url":"https:\/\/localhost\/wp-admin\/edit.php?action=elementor_new_post&post_type=post&_wpnonce=e0afd2e9d1","keywords":["post","page","template","new","create"]},"page":{"title":"A\u00f1adir nueva P\u00e1gina","icon":"plus-circle-o","url":"https:\/\/localhost\/wp-admin\/edit.php?action=elementor_new_post&post_type=page&_wpnonce=e0afd2e9d1","keywords":["post","page","template","new","create"]},"elementor_library":{"title":"A\u00f1adir nueva Plantilla","icon":"plus-circle-o","url":"https:\/\/localhost\/wp-admin\/edit.php?post_type=elementor_library#add_new","keywords":["post","page","template","new","create"]}},"name":"create"},"site":{"title":"Sitio","dynamic":false,"items":{"homepage":{"title":"P\u00e1gina de inicio","url":"https:\/\/localhost","icon":"home-heart","keywords":["home","page"]},"wordpress-dashboard":{"title":"Escritorio","icon":"dashboard","url":"https:\/\/localhost\/wp-admin\/","keywords":["dashboard","wordpress"]},"wordpress-menus":{"title":"Men\u00fas","icon":"wordpress","url":"https:\/\/localhost\/wp-admin\/nav-menus.php","keywords":["menu","wordpress"]},"wordpress-themes":{"title":"Temas","icon":"wordpress","url":"https:\/\/localhost\/wp-admin\/themes.php","keywords":["themes","wordpress"]},"wordpress-customizer":{"title":"Personalizador","icon":"wordpress","url":"https:\/\/localhost\/wp-admin\/customize.php","keywords":["customizer","wordpress"]},"wordpress-plugins":{"title":"Plugins","icon":"wordpress","url":"https:\/\/localhost\/wp-admin\/plugins.php","keywords":["plugins","wordpress"]},"wordpress-users":{"title":"Usuarios","icon":"wordpress","url":"https:\/\/localhost\/wp-admin\/users.php","keywords":["users","profile","wordpress"]}},"name":"site"},"settings":{"title":"Ajustes","dynamic":false,"items":{"general-settings":{"title":"Ajustes generales","url":"https:\/\/localhost\/wp-admin\/admin.php?page=elementor","keywords":["general","settings","elementor"]},"style":{"title":"Estilo","url":"https:\/\/localhost\/wp-admin\/admin.php?page=elementor#tab-style","keywords":["style","settings","elementor"]},"advanced":{"title":"Avanzado","url":"https:\/\/localhost\/wp-admin\/admin.php?page=elementor#tab-advanced","keywords":["advanced","settings","elementor"]}},"name":"settings"},"tools":{"title":"Herramientas","dynamic":false,"items":{"tools":{"title":"Herramientas","icon":"tools","url":"https:\/\/localhost\/wp-admin\/admin.php?page=elementor-tools","keywords":["tools","regenerate css","safe mode","debug bar","sync library","elementor"]},"replace-url":{"title":"Reemplazar URL","icon":"tools","url":"https:\/\/localhost\/wp-admin\/admin.php?page=elementor-tools#tab-replace_url","keywords":["tools","replace url","domain","elementor"]},"version-control":{"title":"Control de versiones","icon":"time-line","url":"https:\/\/localhost\/wp-admin\/admin.php?page=elementor-tools#tab-versions","keywords":["tools","version","control","rollback","beta","elementor"]},"maintenance-mode":{"title":"Modo de mantenimiento","icon":"tools","url":"https:\/\/localhost\/wp-admin\/admin.php?page=elementor-tools#tab-maintenance_mode","keywords":["tools","maintenance","coming soon","elementor"]}},"name":"tools"}},"i18n":{"finder":"Buscador"}},"connect":[]};
</script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/common.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var pum_vars = {"version":"1.9.1","ajaxurl":"https:\/\/localhost\/wp-admin\/admin-ajax.php","restapi":"https:\/\/localhost\/wp-json\/pum\/v1","rest_nonce":"9152b46174","default_theme":"1365","debug_mode":"","disable_tracking":"","home_url":"\/","message_position":"top","core_sub_forms_enabled":"1","popups":[]};
var ajaxurl = "https:\/\/localhost\/wp-admin\/admin-ajax.php";
var pum_sub_vars = {"ajaxurl":"https:\/\/localhost\/wp-admin\/admin-ajax.php","message_position":"top"};
var pum_popups = {"pum-1371":{"disable_on_mobile":false,"disable_on_tablet":false,"custom_height_auto":false,"scrollable_content":false,"position_from_trigger":false,"position_fixed":false,"overlay_disabled":false,"stackable":false,"disable_reposition":false,"close_on_form_submission":false,"close_on_overlay_click":false,"close_on_esc_press":false,"close_on_f4_press":false,"disable_form_reopen":false,"disable_accessibility":false,"triggers":[{"type":"click_open","settings":{"cookie_name":"","extra_selectors":"a[href=\"#popup-contact\"]"}}],"theme_id":"1365","size":"medium","responsive_min_width":"0%","responsive_max_width":"100%","custom_width":"640px","custom_height":"380px","animation_type":"fade","animation_speed":"350","animation_origin":"center top","location":"center top","position_top":"100","position_bottom":"0","position_left":"0","position_right":"0","zindex":"1999999999","close_button_delay":"0","cookies":[],"theme_slug":"tema-por-defecto","id":1371,"slug":"contacto"}};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/pum-site-scripts.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var Customify_JS = {"is_rtl":"","css_media_queries":{"all":"%s","desktop":"%s","tablet":"@media screen and (max-width: 1024px) { %s }","mobile":"@media screen and (max-width: 568px) { %s }"},"sidebar_menu_no_duplicator":"1","wc_open_cart":""};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/theme.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/woocommerce.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/wp-embed.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/jquery_004.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var WRSLL = {"MobileWidth":"380","tablet1Width":"550","tablet2Width":"730","LaptopWidth":"910"};
var WRSLL = {"MobileWidth":"380","tablet1Width":"550","tablet2Width":"730","LaptopWidth":"910"};
var WRSLL = {"MobileWidth":"380","tablet1Width":"550","tablet2Width":"730","LaptopWidth":"910"};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/plugin.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/frontend-modules.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/waypoints.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/swiper.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/share-link.js"></script>
<script type="text/javascript">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Compartir en Facebook","shareOnTwitter":"Compartir en Twitter","pinIt":"Pinear","downloadImage":"Descargar imagen"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.9.6","urls":{"assets":"https:\/\/localhost\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_lightbox_enable_counter":"yes","elementor_lightbox_enable_fullscreen":"yes","elementor_lightbox_enable_zoom":"yes","elementor_lightbox_enable_share":"yes","elementor_lightbox_title_src":"title","elementor_lightbox_description_src":"description"},"editorPreferences":[]},"post":{"id":1070,"title":"Ofertas gastron\u00f3micas \u2013 Caracas \u2013 Experiencias BOD","excerpt":"","featuredImage":false},"user":{"roles":["administrator"]}};
</script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/frontend.js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/jquery.js"></script>
<script type="text/javascript" src="/wp-content/themes/customify/v1/assets/wpforms.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wpforms_settings = {"val_required":"Este campo es obligatorio.","val_url":"Por favor, introduce una URL v\u00e1lida.","val_email":"Por favor, introduce una direcci\u00f3n de correo electr\u00f3nico v\u00e1lida.","val_email_suggestion":"\u00bfQuer\u00edas decir {suggestion}?","val_email_suggestion_title":"Haz clic para aceptar esta sugerencia.","val_number":"Por favor, introduce un n\u00famero v\u00e1lido.","val_confirm":"Los valores del campo no coinciden.","val_fileextension":"El tipo de archivo no est\u00e1 permitido.","val_filesize":"El archivo supera el tama\u00f1o m\u00e1ximo permitido. El archivo no se subi\u00f3.","val_time12h":"Por favor, introduce la hora en formato de 12 horas AM\/PM (ej.: 8:45 AM).","val_time24h":"Por favor, introduce la hora en formato de 24 horas (ej.: 22:45).","val_requiredpayment":"El pago es obligatorio.","val_creditcard":"Por favor introduce un n\u00famero de tarjeta de cr\u00e9dito v\u00e1lido.","val_post_max_size":"El tama\u00f1o total de {totalSize} Mb de los archivos seleccionados excede el l\u00edmite permitido de {maxSize} Mb.","val_checklimit":"Has excedido el n\u00famero de selecciones permitidas: {#}.","val_limit_characters":"{count} de {limit} m\u00e1ximo de caracteres.","val_limit_words":"{count} de {limit} m\u00e1ximo de palabras.","val_recaptcha_fail_msg":"Ha fallado la verificaci\u00f3n de Google reCAPTCHA, por favor, int\u00e9ntalo de nuevo m\u00e1s tarde.","post_max_size":"419430400","uuid_cookie":"","locale":"es","wpforms_plugin_url":"https:\/\/localhost\/wp-content\/plugins\/wpforms-lite\/","gdpr":"","ajaxurl":"https:\/\/localhost\/wp-admin\/admin-ajax.php","mailcheck_enabled":"1","mailcheck_domains":[],"mailcheck_toplevel_domains":["dev"]}
/* ]]> */
</script>

        <style id="pum-admin-bar-styles">
            /* Layer admin bar over popups. */
            #wpadminbar {
                z-index: 999999999999;
            }

            #wp-admin-bar-popup-maker > .ab-item::before {
                background: url("https://localhost/wp-content/plugins/popup-maker//assets/images/admin/icon-info-21x21.png") center center no-repeat transparent !important;
                top: 3px;
                content: "";
                width: 20px;
                height: 20px;
            }

            #wp-admin-bar-popup-maker:hover > .ab-item::before {
                background-image: url("https://localhost/wp-content/plugins/popup-maker//assets/images/admin/icon-info-21x21.png") !important;
            }
        </style>
        <script id="pum-admin-bar-tools" type="text/javascript">
            /**
             * CssSelectorGenerator
             */
            (function () {
                var CssSelectorGenerator, root,
                    indexOf = [].indexOf || function (item) {
                        for (var i = 0, l = this.length; i < l; i++) {
                            if (i in this && this[i] === item) return i;
                        }
                        return -1;
                    };

                CssSelectorGenerator = (function () {
                    CssSelectorGenerator.prototype.default_options = {
                        selectors: ['id', 'class', 'tag', 'nthchild']
                    };

                    function CssSelectorGenerator(options) {
                        if (options == null) {
                            options = {};
                        }
                        this.options = {};
                        this.setOptions(this.default_options);
                        this.setOptions(options);
                    }

                    CssSelectorGenerator.prototype.setOptions = function (options) {
                        var key, results, val;
                        if (options == null) {
                            options = {};
                        }
                        results = [];
                        for (key in options) {
                            val = options[key];
                            if (this.default_options.hasOwnProperty(key)) {
                                results.push(this.options[key] = val);
                            } else {
                                results.push(void 0);
                            }
                        }
                        return results;
                    };

                    CssSelectorGenerator.prototype.isElement = function (element) {
                        return !!((element != null ? element.nodeType : void 0) === 1);
                    };

                    CssSelectorGenerator.prototype.getParents = function (element) {
                        var current_element, result;
                        result = [];
                        if (this.isElement(element)) {
                            current_element = element;
                            while (this.isElement(current_element)) {
                                result.push(current_element);
                                current_element = current_element.parentNode;
                            }
                        }
                        return result;
                    };

                    CssSelectorGenerator.prototype.getTagSelector = function (element) {
                        return this.sanitizeItem(element.tagName.toLowerCase());
                    };

                    CssSelectorGenerator.prototype.sanitizeItem = function (item) {
                        var characters;
                        characters = (item.split('')).map(function (character) {
                            if (character === ':') {
                                return "\\" + (':'.charCodeAt(0).toString(16).toUpperCase()) + " ";
                            } else if (/[ !"#$%&'()*+,.\/;<=>?@\[\\\]^`{|}~]/.test(character)) {
                                return "\\" + character;
                            } else {
                                return escape(character).replace(/\%/g, '\\');
                            }
                        });
                        return characters.join('');
                    };

                    CssSelectorGenerator.prototype.getIdSelector = function (element) {
                        var id, sanitized_id;
                        id = element.getAttribute('id');
                        if ((id != null) && (id !== '') && !(/\s/.exec(id)) && !(/^\d/.exec(id))) {
                            sanitized_id = "#" + (this.sanitizeItem(id));
                            if (element.ownerDocument.querySelectorAll(sanitized_id).length === 1) {
                                return sanitized_id;
                            }
                        }
                        return null;
                    };

                    CssSelectorGenerator.prototype.getClassSelectors = function (element) {
                        var class_string, item, result;
                        result = [];
                        class_string = element.getAttribute('class');
                        if (class_string != null) {
                            class_string = class_string.replace(/\s+/g, ' ');
                            class_string = class_string.replace(/^\s|\s$/g, '');
                            if (class_string !== '') {
                                result = (function () {
                                    var k, len, ref, results;
                                    ref = class_string.split(/\s+/);
                                    results = [];
                                    for (k = 0, len = ref.length; k < len; k++) {
                                        item = ref[k];
                                        results.push("." + (this.sanitizeItem(item)));
                                    }
                                    return results;
                                }).call(this);
                            }
                        }
                        return result;
                    };

                    CssSelectorGenerator.prototype.getAttributeSelectors = function (element) {
                        var attribute, blacklist, k, len, ref, ref1, result;
                        result = [];
                        blacklist = ['id', 'class'];
                        ref = element.attributes;
                        for (k = 0, len = ref.length; k < len; k++) {
                            attribute = ref[k];
                            if (ref1 = attribute.nodeName, indexOf.call(blacklist, ref1) < 0) {
                                result.push("[" + attribute.nodeName + "=" + attribute.nodeValue + "]");
                            }
                        }
                        return result;
                    };

                    CssSelectorGenerator.prototype.getNthChildSelector = function (element) {
                        var counter, k, len, parent_element, sibling, siblings;
                        parent_element = element.parentNode;
                        if (parent_element != null) {
                            counter = 0;
                            siblings = parent_element.childNodes;
                            for (k = 0, len = siblings.length; k < len; k++) {
                                sibling = siblings[k];
                                if (this.isElement(sibling)) {
                                    counter++;
                                    if (sibling === element) {
                                        return ":nth-child(" + counter + ")";
                                    }
                                }
                            }
                        }
                        return null;
                    };

                    CssSelectorGenerator.prototype.testSelector = function (element, selector) {
                        var is_unique, result;
                        is_unique = false;
                        if ((selector != null) && selector !== '') {
                            result = element.ownerDocument.querySelectorAll(selector);
                            if (result.length === 1 && result[0] === element) {
                                is_unique = true;
                            }
                        }
                        return is_unique;
                    };

                    CssSelectorGenerator.prototype.getAllSelectors = function (element) {
                        var result;
                        result = {
                            t: null,
                            i: null,
                            c: null,
                            a: null,
                            n: null
                        };
                        if (indexOf.call(this.options.selectors, 'tag') >= 0) {
                            result.t = this.getTagSelector(element);
                        }
                        if (indexOf.call(this.options.selectors, 'id') >= 0) {
                            result.i = this.getIdSelector(element);
                        }
                        if (indexOf.call(this.options.selectors, 'class') >= 0) {
                            result.c = this.getClassSelectors(element);
                        }
                        if (indexOf.call(this.options.selectors, 'attribute') >= 0) {
                            result.a = this.getAttributeSelectors(element);
                        }
                        if (indexOf.call(this.options.selectors, 'nthchild') >= 0) {
                            result.n = this.getNthChildSelector(element);
                        }
                        return result;
                    };

                    CssSelectorGenerator.prototype.testUniqueness = function (element, selector) {
                        var found_elements, parent;
                        parent = element.parentNode;
                        found_elements = parent.querySelectorAll(selector);
                        return found_elements.length === 1 && found_elements[0] === element;
                    };

                    CssSelectorGenerator.prototype.testCombinations = function (element, items, tag) {
                        var item, k, l, len, len1, ref, ref1;
                        ref = this.getCombinations(items);
                        for (k = 0, len = ref.length; k < len; k++) {
                            item = ref[k];
                            if (this.testUniqueness(element, item)) {
                                return item;
                            }
                        }
                        if (tag != null) {
                            ref1 = items.map(function (item) {
                                return tag + item;
                            });
                            for (l = 0, len1 = ref1.length; l < len1; l++) {
                                item = ref1[l];
                                if (this.testUniqueness(element, item)) {
                                    return item;
                                }
                            }
                        }
                        return null;
                    };

                    CssSelectorGenerator.prototype.getUniqueSelector = function (element) {
                        var found_selector, k, len, ref, selector_type, selectors;
                        selectors = this.getAllSelectors(element);
                        ref = this.options.selectors;
                        for (k = 0, len = ref.length; k < len; k++) {
                            selector_type = ref[k];
                            switch (selector_type) {
                            case 'id':
                                if (selectors.i != null) {
                                    return selectors.i;
                                }
                                break;
                            case 'tag':
                                if (selectors.t != null) {
                                    if (this.testUniqueness(element, selectors.t)) {
                                        return selectors.t;
                                    }
                                }
                                break;
                            case 'class':
                                if ((selectors.c != null) && selectors.c.length !== 0) {
                                    found_selector = this.testCombinations(element, selectors.c, selectors.t);
                                    if (found_selector) {
                                        return found_selector;
                                    }
                                }
                                break;
                            case 'attribute':
                                if ((selectors.a != null) && selectors.a.length !== 0) {
                                    found_selector = this.testCombinations(element, selectors.a, selectors.t);
                                    if (found_selector) {
                                        return found_selector;
                                    }
                                }
                                break;
                            case 'nthchild':
                                if (selectors.n != null) {
                                    return selectors.n;
                                }
                            }
                        }
                        return '*';
                    };

                    CssSelectorGenerator.prototype.getSelector = function (element) {
                        var all_selectors, item, k, l, len, len1, parents, result, selector, selectors;
                        all_selectors = [];
                        parents = this.getParents(element);
                        for (k = 0, len = parents.length; k < len; k++) {
                            item = parents[k];
                            selector = this.getUniqueSelector(item);
                            if (selector != null) {
                                all_selectors.push(selector);
                            }
                        }
                        selectors = [];
                        for (l = 0, len1 = all_selectors.length; l < len1; l++) {
                            item = all_selectors[l];
                            selectors.unshift(item);
                            result = selectors.join(' > ');
                            if (this.testSelector(element, result)) {
                                return result;
                            }
                        }
                        return null;
                    };

                    CssSelectorGenerator.prototype.getCombinations = function (items) {
                        var i, j, k, l, ref, ref1, result;
                        if (items == null) {
                            items = [];
                        }
                        result = [[]];
                        for (i = k = 0, ref = items.length - 1; 0 <= ref ? k <= ref : k >= ref; i = 0 <= ref ? ++k : --k) {
                            for (j = l = 0, ref1 = result.length - 1; 0 <= ref1 ? l <= ref1 : l >= ref1; j = 0 <= ref1 ? ++l : --l) {
                                result.push(result[j].concat(items[i]));
                            }
                        }
                        result.shift();
                        result = result.sort(function (a, b) {
                            return a.length - b.length;
                        });
                        result = result.map(function (item) {
                            return item.join('');
                        });
                        return result;
                    };

                    return CssSelectorGenerator;

                })();

                if (typeof define !== "undefined" && define !== null ? define.amd : void 0) {
                    define([], function () {
                        return CssSelectorGenerator;
                    });
                } else {
                    root = typeof exports !== "undefined" && exports !== null ? exports : this;
                    root.CssSelectorGenerator = CssSelectorGenerator;
                }

            }).call(this);

            (function ($) {
                var selector_generator = new CssSelectorGenerator;

                $(document).on('click', '#wp-admin-bar-pum-get-selector', function (event) {

                    alert("Después de hacer clic en OK, haz clic en el elemento para el que quieres un selector.");

                    event.preventDefault();
                    event.stopPropagation();

                    $(document).one('click', function (event) {
                        // get reference to the element user clicked on
                        var element = event.target,
                            // get unique CSS selector for that element
                            selector = selector_generator.getSelector(element);

                        alert("Selector: " + selector);

                        event.preventDefault();
                        event.stopPropagation();
                    });
                });
            }(jQuery));
        </script>	<!--[if lte IE 8]>
		<script type="text/javascript">
			document.body.className = document.body.className.replace( /(^|\s)(no-)?customize-support(?=\s|$)/, '' ) + ' no-customize-support';
		</script>
	<![endif]-->
	<!--[if gte IE 9]><!-->
		<script type="text/javascript">
			(function() {
				var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

						request = true;
		
				b[c] = b[c].replace( rcs, ' ' );
				// The customizer requires postMessage and CORS (if the site is cross domain)
				b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
			}());
		</script>
	<!--<![endif]-->
		<script>function wpmobile_read_cookie(k) {
    return(document.cookie.match('(^|; )'+k+'=([^;]*)')||0)[2]
	}
	var isIOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
	var isAndroid = /(android)/i.test(navigator.userAgent);

	var packageAndroid = 'appexperienciasbodcom.wpapp';
	var textAndroid = 'En Google Play';
	var linkAndroid = 'https://play.google.com/store/apps/details?id=appexperienciasbodcom.wpapp';

	var packageIOS = '1495444288';
	var textIOS = 'En App Store';
	var linkIOS = 'https://itunes.apple.com/app/id1495444288';
	</script>	<style type="text/css">
	#wpappninja_banner {
		display: none;
		height: 66px;
		z-index: 2147483647;
		background: #ffffff;
		border-bottom: 1px solid #f9f9f9;
	    box-shadow: 0 0 1px #999;
	    padding: 3px 0;
		position: absolute;
		top: 0;
		width: 100%;
		text-align: center;
	}
	#wpappninja_banner .wpappninja_banner_close {
		color: gray;
		font-size: 14px;
		vertical-align: top;
		display: inline-block;
		margin: 19px 0 0 0;
	}
	#wpappninja_banner .wpappninja_banner_logo {
	    vertical-align: top;
	    display: inline-block;
	    margin: 6px 12px;
	    width: 48px;
	    height: 48px;
	    padding: 3px;
		border-radius: 8px;
		background: ;
	}
	#wpappninja_banner .wpappninja_banner_text {
		color: #333;
		line-height: 10px;
		font-size: 13px;
		text-align: left;
		vertical-align: top;
		display: inline-block;
		margin: 10px 0px 0 0;
		width: Calc(100% - 200px);
	    max-height: 55px;
	    overflow: hidden;
	    padding-top: 2px;
	}
	#wpappninja_banner .wpappninja_banner_text span {
		color:#696969;
		font-size:11px;
	}
	#wpappninja_banner .wpappninja_banner_click {
		display: inline-block;
		background: #979797;
		padding: 3px 10px;
		font-size: 16px;
		color: white;
		vertical-align: top;
		margin: 16px 0px 0 10px;
	}
	#wpappninja_banner .wpappninja_banner_click img {
	    width: 20px;
		vertical-align: middle;
	}
	</style>
	
	<div id="wpappninja_banner">
		<div class="wpappninja_banner_close" onclick="document.cookie = 'wpappninja_disable_banner=true;expires=Tue, 21 Apr 2020 16:03:08 +0000;path=/';document.getElementById('wpappninja_banner').style.display = 'none';document.body.style.marginTop = '0px';" src="https://localhost/wp-content/plugins/wpappninja/assets/images/close_icon.png">
			✕
		</div>
		<div class="wpappninja_banner_logo">
			<img src="/wp-content/themes/customify/v1/assets/fav-icon-grand.png" width="48" height="48">
		</div>
		<div class="wpappninja_banner_text">
			<b>Experiencias BOD </b><br><br>
			<span>GRATIS<br></span>
			<span id="wpmobile_banner_text"></span>
		</div>
		<div class="wpappninja_banner_click">
			VER		</div>
	</div>
	
	<script>
	if (isAndroid && packageAndroid != "" && wpmobile_read_cookie("wpappninja_disable_banner") != "true") {
		jQuery("#wpmobile_banner_text").text(textAndroid);
		jQuery(".wpappninja_banner_click").on('click', function() {document.location = linkAndroid;});
		jQuery("#wpappninja_banner").css('display', 'block');
		jQuery("body").css('margin-top', '66px');
	}

	if (isIOS && packageIOS != "" && packageIOS != "xxx" && wpmobile_read_cookie("wpappninja_disable_banner") != "true") {
		jQuery("#wpmobile_banner_text").text(textIOS);
		jQuery(".wpappninja_banner_click").on('click', function() {document.location = linkIOS;});
		jQuery("#wpappninja_banner").css('display', 'block');
		jQuery("body").css('margin-top', '66px');
	}
	</script>
	
	


</body></html>