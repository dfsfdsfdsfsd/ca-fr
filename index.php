<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = 'gb580k';

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
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>















<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>holdacafr</title><meta name="author" content="holdacafr"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://holdacafr.appspot.com/"/>
<meta property="og:site_name" content="holdacafr"/>
<meta property="og:title" content="Welcome to holdacafr"/>
<meta property="og:description" content="Let&#39;s make our community a better place!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/672"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="holdacafr"/>
<meta name="twitter:description" content="Welcome to holdacafr"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/672"/>
<meta name="twitter:image:alt" content="holdacafr"/>
<meta name="theme-color" content="#efceb1"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2a4f73fcd74c5421/script.js" crossorigin></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function logTcclEvent(){var t=this.getAttribute("data-tccl");if(window._trfq&&t)try{for(var e=t.split(","),r=e[0],d=e[1],n=e.splice(2),c=[],o=0;o<n.length;o+=2)c.push([n[o],n[o+1]]);window._trfq.push(["cmdLogEvent",d,r,c])}catch(e){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",e.toString()],["data",t]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var r=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(r[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
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
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhquylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhruylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
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
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_FQftx9897sxZ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_Gwftx9897g.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjxAwXiWtFCfQ7A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjx4wXiWtFCc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/7d66039c-7abc-4f39-aa59-425371979d3b/gpub/5c2b28b7ec7cfd8c/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/7d66039c-7abc-4f39-aa59-425371979d3b/gpub/fcd532dfcafdf8ac/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-n{padding-top:32px}}@media (max-width: 767px){.x .c1-o{padding-bottom:32px}}@media (max-width: 767px){.x .c1-19{position:relative}}@media (max-width: 767px){.x .c1-2k{width:100%}}@media (max-width: 767px){.x .c1-2l{display:flex}}@media (max-width: 767px){.x .c1-2m{justify-content:center}}@media (max-width: 767px){.x .c1-4m{max-width:100%}}@media (max-width: 767px){.x .c1-4n{margin-bottom:8px}}@media (max-width: 767px){.x .c1-4o{word-wrap:break-word}}@media (max-width: 767px){.x .c1-4p{overflow-wrap:break-word}}@media (max-width: 767px){.x .c1-62{width:auto !important}}@media (max-width: 767px){.x .c1-6y{margin-bottom:24px}}@media (max-width: 767px){.x .c1-79 > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-7a  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-8a{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/7d66039c-7abc-4f39-aa59-425371979d3b/gpub/b929ca8e0d3c6698/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/7d66039c-7abc-4f39-aa59-425371979d3b/gpub/8b8572b1804a02f1/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-1p{width:1160px}}@media (min-width: 1280px){.x .c1-3a{font-size:22px}}@media (min-width: 1280px){.x .c1-4t{font-size:62px}}@media (min-width: 1280px){.x .c1-53{font-size:44px}}@media (min-width: 1280px){.x .c1-58{font-size:32px}}@media (min-width: 1280px){.x .c1-8h{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-1q{width:1280px}}@media (min-width: 1536px){.x .c1-3b{font-size:24px}}@media (min-width: 1536px){.x .c1-4u{font-size:70px}}@media (min-width: 1536px){.x .c1-54{font-size:48px}}@media (min-width: 1536px){.x .c1-59{font-size:36px}}@media (min-width: 1536px){.x .c1-8i{font-size:16px}}</style>
<style type="text/css">.page-inner { background-color: rgb(0, 0, 0); min-height: 100vh; }</style></head>
<body class="x  x-fonts-cabin" context="[object Object]"><div id="layout-7-d-66039-c-7-abc-4-f-39-aa-59-425371979-d-3-b" class="layout layout-layout layout-layout-layout-17 locale-en-US lang-en"><div data-ux="Page" id="page-63975" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="eea13c04-2c15-41df-b3ff-3d3d25c4dab9" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div> <section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-i c1-j c1-k c1-l c1-m c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-q c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" id="header_parallax63978" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-1"></div><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-r c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg63979" role="img" data-guac-image="loading" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" data-field-id="background" overlay="category" treatment="Fill" data-ht="Fill" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-t c1-u c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-d c1-14 c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-field-id x-d-ht"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-15 c1-4 c1-b c1-c c1-d c1-16 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-r c1-17 c1-4 c1-18 c1-b c1-c c1-19 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-r c1-1b c1-1c c1-1d c1-18 c1-b c1-c c1-d c1-1e c1-1f c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-y c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-1x c1-1y c1-b c1-c c1-1z c1-20 c1-21 c1-22 c1-d c1-23 c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-24 c1-25 c1-1k c1-26 c1-27 c1-28 c1-29 c1-y c1-2a c1-2b c1-b c1-c c1-2c c1-2d c1-2e c1-2f c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2g c1-2h c1-2i c1-2j c1-1k c1-c c1-2k c1-2l c1-2m c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="28d8f729-fa84-40aa-ab32-39c146c4b422" title="holdacafr" href="/" class="x-el x-el-a c1-2o c1-2p c1-2q c1-2r c1-2b c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-b c1-2y c1-c c1-2z c1-30 c1-31 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.63982.click,click"><div id="bs-2"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-63983" logoText="holdacafr" class="x-el x-el-h3 c1-2g c1-2h c1-2r c1-2b c1-32 c1-33 c1-34 c1-1u c1-1w c1-1k c1-2j c1-35 c1-36 c1-37 c1-38 c1-39 c1-3a c1-3b x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-2g c1-2h c1-2i c1-4 c1-35 c1-3c c1-2z c1-3d c1-2j c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-field-id x-d-field-route">holdacafr</span></h3></div></a></div></div></div><div data-ux="Grid" id="n-6397663985-navBarId" class="x-el x-el-div c1-1 c1-2 c1-3e c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-1x c1-3f c1-1y c1-26 c1-28 c1-b c1-c c1-1z c1-20 c1-21 c1-22 c1-d c1-3g c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-24 c1-3h c1-3i c1-26 c1-27 c1-28 c1-29 c1-y c1-1y c1-3f c1-b c1-c c1-2c c1-2d c1-2e c1-2f c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2g c1-2h c1-2i c1-2j c1-1k c1-c c1-2k c1-2l c1-2m c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="28d8f729-fa84-40aa-ab32-39c146c4b422" title="holdacafr" href="/" class="x-el x-el-a c1-2o c1-2p c1-2q c1-2r c1-2b c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-b c1-2y c1-c c1-2z c1-30 c1-31 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.63986.click,click"><div id="bs-3"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-63987" logoText="holdacafr" class="x-el x-el-h3 c1-2g c1-2h c1-2r c1-2b c1-32 c1-33 c1-34 c1-1u c1-1w c1-1k c1-2j c1-35 c1-36 c1-37 c1-38 c1-39 c1-3a c1-3b x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-2g c1-2h c1-2i c1-4 c1-35 c1-3c c1-2z c1-3d c1-2j c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-field-id x-d-field-route">holdacafr</span></h3></div></a></div></div></div></div></nav></div></div></div><div data-ux="Block" id="header_parallax63988" class="x-el x-el-div c1-1 c1-2 c1-4 c1-s c1-3e c1-3j c1-z c1-3f c1-1u c1-1w c1-26 c1-b c1-c c1-d c1-3k c1-3l c1-3g c1-e c1-f c1-g x-d-ux"><div id="bs-4"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-33 c1-34 c1-1i c1-1j c1-1k c1-b c1-c c1-1n c1-d c1-1o c1-3g c1-3m c1-3n c1-3o c1-3p c1-3q c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-3r c1-b c1-c c1-3s c1-3t c1-3u c1-3v c1-3w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-3x c1-3y c1-1k c1-r c1-3z c1-4 c1-b c1-c c1-1n c1-3s c1-3t c1-40 c1-3u c1-3v c1-3w c1-41 c1-42 c1-d c1-1o c1-43 c1-44 c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-2c c1-2e c1-d c1-45 c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-3z c1-46 c1-47 c1-28 c1-b c1-c c1-48 c1-2e c1-49 c1-4a c1-4b c1-4c c1-4d c1-d c1-3p c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-33 c1-34 c1-4e c1-4f c1-1k c1-4g c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-2g c1-2h c1-2r c1-2b c1-32 c1-33 c1-34 c1-1u c1-1w c1-4h c1-4i c1-4j c1-28 c1-3e c1-2j c1-4k c1-4l c1-37 c1-4m c1-4n c1-4o c1-4p c1-4q c1-2e c1-4r c1-q c1-4s c1-4t c1-4u x-d-ux x-d-aid x-d-route">Welcome to holdacafr</h1><div id="bs-5"><div data-ux="Element" typography="HeadingAlpha" id="tagline-container-63989" class="x-el x-el-div c1-2g c1-2h c1-2r c1-2b c1-32 c1-p c1-4l c1-2j c1-4k c1-37 c1-4r c1-23 c1-4s c1-4t c1-4u x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-2g c1-2h c1-2r c1-2b c1-32 c1-33 c1-34 c1-1u c1-1w c1-4v c1-2i c1-4 c1-4h c1-4i c1-4j c1-28 c1-4l c1-2j c1-4k c1-37 c1-4m c1-4n c1-4o c1-4p c1-4q c1-2e c1-4r c1-4s c1-4t c1-4u x-d-ux x-d-aid x-d-route">Welcome to holdacafr</h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-63989" class="x-el x-el-span c1-2g c1-2h c1-4w c1-3e c1-4x c1-4y c1-4z c1-4l c1-2j c1-4r c1-4s c1-4t c1-4u x-d-ux x-d-size x-d-scaler-id">Welcome to holdacafr</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-63989" class="x-el x-el-span c1-2g c1-2h c1-4w c1-3e c1-4x c1-4y c1-4z c1-50 c1-2j c1-51 c1-52 c1-53 c1-54 x-d-ux x-d-size x-d-scaler-id">Welcome to holdacafr</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-63989" class="x-el x-el-span c1-2g c1-2h c1-4w c1-3e c1-4x c1-4y c1-4z c1-55 c1-2j c1-56 c1-57 c1-58 c1-59 x-d-ux x-d-size x-d-scaler-id">Welcome to holdacafr</span></div></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-2r c1-2b c1-5a c1-1u c1-1w c1-5b c1-5c c1-5d c1-5e c1-b c1-4k c1-35 c1-5f c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Let's make our community a better place!</span></p></div><div id="bs-6" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="/" target="" data-tccl="ux2.header.cta_button.click,click" data-page="28d8f729-fa84-40aa-ab32-39c146c4b422" class="x-el x-el-a c1-5k c1-2 c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-2i c1-2a c1-2q c1-2t c1-2b c1-2r c1-1k c1-4 c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-b c1-5y c1-37 c1-x c1-c c1-5z c1-60 c1-61 c1-62 c1-63 c1-d c1-1e c1-1f c1-64 c1-65 c1-66 c1-67 c1-e c1-68 c1-69 c1-6a c1-f c1-g x-d-ux x-d-aid x-d-tccl x-d-page">Get Involved</a></div></div></div></div></div></div></div><div data-ux="Block" id="header_parallax63990" class="x-el x-el-div c1-1 c1-2 c1-4 c1-s c1-y c1-3j c1-z c1-3f c1-1u c1-1w c1-26 c1-b c1-c c1-d c1-3k c1-3l c1-23 c1-e c1-f c1-g x-d-ux"><div id="bs-7"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-33 c1-34 c1-1i c1-1j c1-1k c1-b c1-c c1-1n c1-d c1-1o c1-3g c1-3m c1-3n c1-3o c1-3p c1-3q c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-3r c1-b c1-c c1-3s c1-3t c1-3u c1-3v c1-3w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-3x c1-3y c1-1k c1-r c1-3z c1-4 c1-b c1-c c1-1n c1-3s c1-3t c1-40 c1-3u c1-3v c1-3w c1-41 c1-42 c1-d c1-1o c1-43 c1-44 c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-2c c1-2e c1-d c1-45 c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-3z c1-46 c1-47 c1-28 c1-b c1-c c1-48 c1-2e c1-49 c1-4a c1-4b c1-4c c1-4d c1-d c1-3p c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-33 c1-34 c1-4e c1-4f c1-1k c1-4g c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-2g c1-2h c1-2r c1-2b c1-32 c1-33 c1-34 c1-1u c1-1w c1-4h c1-4i c1-4j c1-28 c1-3e c1-2j c1-4k c1-4l c1-37 c1-4m c1-4n c1-4o c1-4p c1-4q c1-2e c1-4r c1-q c1-4s c1-4t c1-4u x-d-ux x-d-aid x-d-route">Welcome to holdacafr</h1><div id="bs-8"><div data-ux="Element" typography="HeadingAlpha" id="tagline-container-63991" class="x-el x-el-div c1-2g c1-2h c1-2r c1-2b c1-32 c1-p c1-4l c1-2j c1-4k c1-37 c1-4r c1-23 c1-4s c1-4t c1-4u x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-2g c1-2h c1-2r c1-2b c1-32 c1-33 c1-34 c1-1u c1-1w c1-4v c1-2i c1-4 c1-4h c1-4i c1-4j c1-28 c1-4l c1-2j c1-4k c1-37 c1-4m c1-4n c1-4o c1-4p c1-4q c1-2e c1-4r c1-4s c1-4t c1-4u x-d-ux x-d-aid x-d-route">Welcome to holdacafr</h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-63991" class="x-el x-el-span c1-2g c1-2h c1-4w c1-3e c1-4x c1-4y c1-4z c1-4l c1-2j c1-4r c1-4s c1-4t c1-4u x-d-ux x-d-size x-d-scaler-id">Welcome to holdacafr</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-63991" class="x-el x-el-span c1-2g c1-2h c1-4w c1-3e c1-4x c1-4y c1-4z c1-50 c1-2j c1-51 c1-52 c1-53 c1-54 x-d-ux x-d-size x-d-scaler-id">Welcome to holdacafr</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-63991" class="x-el x-el-span c1-2g c1-2h c1-4w c1-3e c1-4x c1-4y c1-4z c1-55 c1-2j c1-56 c1-57 c1-58 c1-59 x-d-ux x-d-size x-d-scaler-id">Welcome to holdacafr</span></div></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-2r c1-2b c1-5a c1-1u c1-1w c1-5b c1-5c c1-5d c1-5e c1-b c1-4k c1-35 c1-5f c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Let's make our community a better place!</span></p></div><div id="bs-9" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="/" target="" data-tccl="ux2.header.cta_button.click,click" data-page="28d8f729-fa84-40aa-ab32-39c146c4b422" class="x-el x-el-a c1-5k c1-2 c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-2i c1-2a c1-2q c1-2t c1-2b c1-2r c1-1k c1-4 c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-b c1-5y c1-37 c1-x c1-c c1-5z c1-60 c1-61 c1-62 c1-63 c1-d c1-1e c1-1f c1-64 c1-65 c1-66 c1-67 c1-e c1-68 c1-69 c1-6a c1-f c1-g x-d-ux x-d-aid x-d-tccl x-d-page">Get Involved</a></div></div></div></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage("//img1.wsimg.com/isteam/stock/672/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc",document.getElementById('guacBg63979'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.25) 0%, rgba(22, 22, 22, 0.25) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div></div></section> </div></div></div><div id="bbbde5e6-ee9f-47a3-a1f8-14403d51f435" class="widget widget-introduction widget-introduction-introduction-5"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div> <div id="guacBg63992" role="img" data-ux="Background" dataAid="IMAGE_RENDERED" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-6b c1-u c1-v c1-w c1-6c c1-12 c1-6d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><section data-ux="SectionBanner" class="x-el x-el-section c1-1 c1-2 c1-18 c1-j c1-k c1-6e c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="CardBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-y c1-1y c1-3f c1-z c1-1c c1-1d c1-6f c1-b c1-c c1-1n c1-d c1-1o c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="CardBannerBlock" class="x-el x-el-div c1-1 c1-2 c1-s c1-2a c1-26 c1-28 c1-3h c1-b c1-c c1-d c1-3g c1-6u c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingEpsilon" data-ux="CardBannerHeading" data-aid="SECTION_TITLE_RENDERED" data-route="sectionTitle" data-promoted-from="2" data-order="0" class="x-el x-el-h1 c1-2g c1-2h c1-2r c1-2b c1-6v c1-33 c1-34 c1-1u c1-1w c1-2j c1-4k c1-50 c1-37 c1-51 c1-52 c1-53 c1-54 x-d-ux x-d-aid x-d-route x-d-promoted-from x-d-order">Caring for our Neighbors</h1></div></div></div></section><script>new guacImage("//img1.wsimg.com/isteam/stock/3518/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc",document.getElementById('guacBg63992'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%)"]})</script></div> </div></div></div><div id="443de3f7-3331-48c7-8c6e-95563339672e" class="widget widget-about widget-about-about-8"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-h c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-2g c1-2h c1-2r c1-2b c1-6w c1-33 c1-34 c1-1u c1-6x c1-l c1-3z c1-2j c1-35 c1-36 c1-37 c1-6y c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-2g c1-2h c1-2j c1-35 c1-38 c1-39 c1-3a c1-3b x-d-ux">About Us</span><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-2g c1-2h c1-6z c1-70 c1-71 c1-5w c1-1w c1-4 c1-2j c1-35 c1-38 c1-39 c1-3a c1-3b x-d-ux"/></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-y c1-1r c1-1s c1-72 c1-1u c1-1v c1-73 c1-1x c1-3f c1-b c1-c c1-1z c1-20 c1-74 c1-22 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-24 c1-75 c1-1k c1-26 c1-27 c1-5m c1-29 c1-b c1-c c1-2c c1-2d c1-76 c1-2f c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" id="a4dcda3d-7f6e-457f-b1c9-c5a84b5ba623" class="x-el x-el-div x-el c1-1 c1-2 c1-r c1-y c1-z c1-3j c1-3z c1-11 c1-4 c1-77 c1-78 c1-47 c1-b c1-c c1-79 c1-7a c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-2r c1-2b c1-7b c1-33 c1-34 c1-1u c1-1w c1-b c1-36 c1-35 c1-5f c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-field-id x-d-field-route">How We&#x27;re Helping</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-2r c1-2b c1-5a c1-1u c1-1w c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-b c1-84 c1-c c1-5f c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>We are a community-based organization focused on helping make the world around us a better, happier place. With the help of our tireless staff, we organize fundraisers, exciting community-building events, and in-depth training sessions for our volunteers.</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-24 c1-75 c1-1k c1-26 c1-27 c1-5m c1-29 c1-b c1-c c1-85 c1-86 c1-2c c1-2d c1-76 c1-2f c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" id="7952db13-6b4f-4517-aa53-885b339bb3cc" class="x-el x-el-div x-el c1-1 c1-2 c1-r c1-y c1-z c1-3j c1-3z c1-11 c1-4 c1-77 c1-78 c1-47 c1-b c1-c c1-79 c1-7a c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-2r c1-2b c1-7b c1-33 c1-34 c1-1u c1-1w c1-b c1-36 c1-35 c1-5f c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-field-id x-d-field-route">Get Involved</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-2r c1-2b c1-5a c1-1u c1-1w c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-b c1-84 c1-c c1-5f c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Are you passionate about what we're doing? Let us know! We are always looking for volunteers to help us make our vision a reality. We'll help you find a way to volunteer that best suits you. We're excited to have you join the team!</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-24 c1-75 c1-1k c1-26 c1-27 c1-5m c1-29 c1-b c1-c c1-85 c1-86 c1-2c c1-2d c1-76 c1-2f c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" id="1aa3d5cf-34cd-46e0-b1e8-d9818e124ed2" class="x-el x-el-div x-el c1-1 c1-2 c1-r c1-y c1-z c1-3j c1-3z c1-11 c1-4 c1-77 c1-78 c1-47 c1-b c1-c c1-79 c1-7a c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-2r c1-2b c1-7b c1-33 c1-34 c1-1u c1-1w c1-b c1-36 c1-35 c1-5f c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-field-id x-d-field-route">Thank You</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-2r c1-2b c1-5a c1-1u c1-1w c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-b c1-84 c1-c c1-5f c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Whether you help through monetary donations, volunteering your time, or spreading our mission through word-of-mouth, thank you. We couldn't accomplish our goals without the help of supporters like you.&nbsp;</span></p></div></div></div></div></div></section> </div></div></div><div id="814b4be4-c186-497b-9a5f-807bb9546016" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-h c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-2a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-1d c1-b c1-c c1-o c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-2a c1-87 c1-k c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-88 c1-26 c1-4f c1-28 c1-4e c1-1u c1-34 c1-1w c1-33 c1-89 c1-b c1-c c1-2l c1-8a c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="BodyAlpha" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-1 c1-2 c1-2r c1-2b c1-5a c1-1u c1-5x c1-37 c1-b c1-36 c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">holdacafr</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-y c1-1r c1-1s c1-72 c1-1u c1-34 c1-1w c1-33 c1-1y c1-2a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-24 c1-75 c1-1k c1-26 c1-4f c1-28 c1-4e c1-b c1-c c1-d c1-8b c1-8c c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-2r c1-2b c1-5a c1-1u c1-1w c1-b c1-8d c1-8e c1-5f c1-8f c1-6u c1-8g c1-8h c1-8i x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 holdacafr - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-24 c1-75 c1-1k c1-26 c1-4f c1-28 c1-4e c1-b c1-c c1-d c1-8b c1-8c c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-2r c1-2b c1-5a c1-8j c1-1w c1-b c1-8d c1-8e c1-5f c1-8f c1-8k c1-3k c1-8g c1-8h c1-8i x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-2o c1-2p c1-2q c1-2r c1-2b c1-2s c1-2t c1-8j c1-b c1-2y c1-8e c1-2z c1-30 c1-31 c1-8f c1-8k c1-3k c1-8g c1-8h c1-8i x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.63993.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.57.24.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2b97fc2ae0bd1912/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/5e0ba6eef4ff7e41/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1']={"renderMode":"PUBLISH","fonts":["cabin","default",""],"colors":["#efceb1"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"28d8f729-fa84-40aa-ab32-39c146c4b422":{"isFlyoutMenu":false,"active":true,"pageId":"28d8f729-fa84-40aa-ab32-39c146c4b422","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"tags":[],"rel":"","type":"page","showInFooter":false}},"theme":"Theme17"};</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-1',
          componentName:'Parallax',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"speed":-1.5,"uniqueId":"header_parallax63978","noTransform":true,"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/5779b489fe78b803/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-2',
          componentName:'LogoText',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"logo":{"logoText":"holdacafr","selectedMutatorType":"TEXT","logoAlign":"left"},"fontPackLogoId":null,"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"alt","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-3',
          componentName:'LogoText',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"logo":{"logoText":"holdacafr","selectedMutatorType":"TEXT","logoAlign":"left"},"fontPackLogoId":null,"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"alt","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-4',
          componentName:'Parallax',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax63988","widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/6460aefc733799a1/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-5',
          componentName:'DynamicTagline',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"style":{"borderBottomWidth":0,"borderBottomStyle":"solid","borderColor":"highContrastOverlay","paddingBottom":0,"@sm":{"borderBottomWidth":0,"paddingBottom":0},"@xs-only":{"maxWidth":"100%","marginBottom":"xsmall","wordWrap":"break-word","overflowWrap":"break-word"}},"typography":"HeadingAlpha","children":"Welcome to holdacafr","tag":"h1","data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-6',
          componentName:'CTAButton',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"ctaButton":{"enabled":true,"label":"Get Involved","pageId":"28d8f729-fa84-40aa-ab32-39c146c4b422","widgetId":"","url":"","target":""},"data-aid":"HEADER_CTA_BTN","data-field-id":"ctaButton","data-field-route":"\u002FctaButton","style":{"marginVertical":"small","display":"inline-block","@md":{"marginBottom":"xsmall"},"@xs-only":{"width":"auto !important"}},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-7',
          componentName:'Parallax',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax63990","widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-8',
          componentName:'DynamicTagline',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"style":{"borderBottomWidth":0,"borderBottomStyle":"solid","borderColor":"highContrastOverlay","paddingBottom":0,"@sm":{"borderBottomWidth":0,"paddingBottom":0},"@xs-only":{"maxWidth":"100%","marginBottom":"xsmall","wordWrap":"break-word","overflowWrap":"break-word"}},"typography":"HeadingAlpha","children":"Welcome to holdacafr","tag":"h1","data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-9',
          componentName:'CTAButton',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"ctaButton":{"enabled":true,"label":"Get Involved","pageId":"28d8f729-fa84-40aa-ab32-39c146c4b422","widgetId":"","url":"","target":""},"data-aid":"HEADER_CTA_BTN","data-field-id":"ctaButton","data-field-route":"\u002FctaButton","style":{"marginVertical":"small","display":"inline-block","@md":{"marginBottom":"xsmall"},"@xs-only":{"width":"auto !important"}},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript">document.getElementById('page-63975').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"7d66039c-7abc-4f39-aa59-425371979d3b"}),_trfd.push({"pd":"2020-04-17T17:18:18.080Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE){setTimeout(addTccl,500)}else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js");document.body.appendChild(t)}}addTccl();_trfd.push({"meta.widgetCount":2,"meta.theme":"layout17","meta.headerMediaType":"Image","meta.hasOLS":false,"meta.hasOLA":false,"meta.hasMembership":false})</script></body></html>
