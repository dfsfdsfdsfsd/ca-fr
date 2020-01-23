<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = 'caj496';

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


<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>blvkvelial</title><meta name="author" content="blvkvelial"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://blvkvelial.appspot.com/"/>
<meta property="og:site_name" content="blvkvelial"/>
<meta property="og:title" content="Luxury Hair Extensions"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/2qGjYb"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="blvkvelial"/>
<meta name="twitter:description" content="Luxury Hair Extensions"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/2qGjYb"/>
<meta name="twitter:image:alt" content="blvkvelial"/>
<meta name="theme-color" content="#f3f3f2"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js" crossorigin></script>
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
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
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
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/21ab7b79-933e-44d1-9834-1ef6bc90c3dc/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/21ab7b79-933e-44d1-9834-1ef6bc90c3dc/gpub/d9d36ea8367e0b72/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-s{padding-top:40px}}@media (max-width: 767px){.x .c1-t{padding-bottom:40px}}@media (max-width: 767px){.x .c1-1m{width:auto}}@media (max-width: 767px){.x .c1-4i > :nth-child(n){margin-bottom:16px}}@media (max-width: 767px){.x .c1-4j  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-5r{font-size:12px}}@media (max-width: 767px){.x .c1-7p{display:flex}}@media (max-width: 767px){.x .c1-7q{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/21ab7b79-933e-44d1-9834-1ef6bc90c3dc/gpub/e0eab878c306bd82/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/21ab7b79-933e-44d1-9834-1ef6bc90c3dc/gpub/906d7cf274464f61/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-15{width:1160px}}@media (min-width: 1280px){.x .c1-2e{font-size:32px}}@media (min-width: 1280px){.x .c1-3c{font-size:22px}}@media (min-width: 1280px){.x .c1-3o{font-size:18px}}@media (min-width: 1280px){.x .c1-5z{font-size:14px}}@media (min-width: 1280px){.x .c1-6d{font-size:44px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-16{width:1280px}}@media (min-width: 1536px){.x .c1-2f{font-size:36px}}@media (min-width: 1536px){.x .c1-3d{font-size:24px}}@media (min-width: 1536px){.x .c1-3p{font-size:20px}}@media (min-width: 1536px){.x .c1-60{font-size:16px}}@media (min-width: 1536px){.x .c1-6e{font-size:48px}}</style>
<style type="text/css">.page-inner { background-color: rgb(22, 22, 22); min-height: 100vh; }</style></head>
<body class="x  x-fonts-cabin" context="[object Object]"><div id="layout-21-ab-7-b-79-933-e-44-d-1-9834-1-ef-6-bc-90-c-3-dc" class="layout layout-layout layout-layout-layout-16 locale-en-US lang-en"><div data-ux="Page" id="page-5751" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="ced54656-c919-42ab-bfbd-a0ab06a66b61" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-q c1-r c1-b c1-c c1-s c1-t c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-u c1-b c1-c c1-d c1-v c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" id="header_parallax5753" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-1"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Container" class="x-el x-el-nav c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-13 c1-d c1-14 c1-e c1-15 c1-f c1-16 c1-g x-d-ux"></nav><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-17 c1-18 c1-11 c1-19 c1-4 c1-b c1-c c1-13 c1-d c1-14 c1-1a c1-e c1-15 c1-f c1-16 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1b c1-1c c1-1d c1-1e c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-3 c1-1l c1-c c1-1m c1-1n c1-1o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="f8d310f2-5283-489d-b490-45f0bd45c0eb" title="blvkvelial" href="/" class="x-el x-el-a c1-1p c1-1q c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-1x c1-1y c1-1z c1-b c1-20 c1-c c1-21 c1-22 c1-23 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.5754.click,click"><div id="bs-2"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-5755" logoText="blvkvelial" class="x-el x-el-h3 c1-1b c1-1c c1-1s c1-1t c1-24 c1-25 c1-26 c1-27 c1-28 c1-10 c1-18 c1-29 c1-2a c1-1e c1-2b c1-2c c1-2d c1-2e c1-2f x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-1b c1-1c c1-1d c1-4 c1-29 c1-2g c1-21 c1-2h c1-1e c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-aid x-d-route">blvkvelial</span></h3></div></a></div></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" id="header_parallax5756" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-3"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-11 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-11 c1-2j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg5757" role="img" data-guac-image="loading" data-ux="Background" data-route="hasMedia:mediaData" data-aid="BACKGROUND_IMAGE_RENDERED" overlay="none" treatment="Fill" data-ht="Fill" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-2k c1-2l c1-2m c1-2n c1-2o c1-4 c1-2p c1-2q c1-2r c1-b c1-c c1-d c1-2s c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-route x-d-aid x-d-ht"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/2qGjYb/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg5757'),{"shouldMarkVisuallyComplete":true})</script></div></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-2t c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-2u c1-2v c1-2w c1-2x c1-18 c1-2y c1-2z c1-30 c1-b c1-c c1-d c1-31 c1-e c1-f c1-g x-d-ux"><h1 typography="BodyBeta" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-1s c1-1t c1-32 c1-25 c1-26 c1-27 c1-28 c1-10 c1-33 c1-b c1-34 c1-35 c1-36 c1-37 c1-38 c1-39 c1-3a c1-v c1-3b c1-3c c1-3d x-d-ux x-d-aid x-d-route">Luxury Hair Extensions</h1><div id="bs-4"><div data-ux="Element" id="tagline-container-5758" class="x-el x-el-div c1-1 c1-2 c1-1s c1-1t c1-24 c1-u c1-b c1-c c1-d c1-3e c1-e c1-f c1-g x-d-ux"><h1 typography="BodyBeta" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-1s c1-1t c1-32 c1-25 c1-26 c1-27 c1-28 c1-3f c1-10 c1-1d c1-4 c1-c c1-b c1-34 c1-36 c1-d c1-38 c1-39 c1-3a c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Luxury Hair Extensions</h1><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-5758" class="x-el x-el-span c1-1b c1-1c c1-3g c1-3h c1-33 c1-3i c1-3j c1-3k c1-35 c1-1e c1-37 c1-3b c1-3c c1-3d x-d-ux x-d-size x-d-scaler-id">Luxury Hair Extensions</span><span data-ux="Element" data-size="mlarge" data-scaler-id="scaler-tagline-container-5758" class="x-el x-el-span c1-1b c1-1c c1-3g c1-3h c1-33 c1-3i c1-3j c1-3k c1-3l c1-1e c1-3m c1-3n c1-3o c1-3p x-d-ux x-d-size x-d-scaler-id">Luxury Hair Extensions</span><span data-ux="Element" data-size="medium" data-scaler-id="scaler-tagline-container-5758" class="x-el x-el-span c1-1b c1-1c c1-3g c1-3h c1-33 c1-3i c1-3j c1-3k c1-c c1-1e c1-d c1-e c1-f c1-g x-d-ux x-d-size x-d-scaler-id">Luxury Hair Extensions</span></div></div></div></div></section> </div></div></div></div><div id="ef71f416-fc42-4b66-8549-1ea744b0869c" class="widget widget-about widget-about-about-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-s c1-t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-b c1-c c1-13 c1-d c1-14 c1-e c1-15 c1-f c1-16 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1b c1-1c c1-1s c1-1t c1-3q c1-25 c1-26 c1-27 c1-3r c1-2i c1-18 c1-1e c1-29 c1-2a c1-2b c1-2c c1-1a c1-2d c1-2e c1-2f x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About Us</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-2u c1-3s c1-3t c1-3u c1-27 c1-3v c1-3w c1-3x c1-b c1-c c1-3y c1-3z c1-40 c1-41 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2j c1-42 c1-43 c1-10 c1-44 c1-45 c1-46 c1-47 c1-b c1-c c1-48 c1-49 c1-4a c1-4b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-2u c1-3s c1-3t c1-3u c1-27 c1-3v c1-28 c1-3x c1-2x c1-b c1-c c1-3y c1-3z c1-4c c1-41 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2j c1-42 c1-43 c1-10 c1-44 c1-45 c1-4d c1-47 c1-2u c1-2x c1-2w c1-b c1-c c1-4e c1-4f c1-48 c1-49 c1-4g c1-4b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="0" id="7d8eb39a-8073-426d-996d-13e130feb8de" class="x-el x-el-div x-el c1-1 c1-2 c1-2u c1-2v c1-4 c1-4h c1-2w c1-18 c1-2y c1-2z c1-b c1-c c1-4i c1-4j c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-1s c1-1t c1-32 c1-25 c1-26 c1-27 c1-28 c1-b c1-4k c1-35 c1-36 c1-37 c1-3b c1-3c c1-3d x-d-ux x-d-aid x-d-field-id x-d-field-route">Welcome to blvkvelial</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1t c1-4l c1-27 c1-28 c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-b c1-34 c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-5i c1-5j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Is your old haircut taking too long to grow out? Are you experiencing hair loss or thinning? Just looking for a change? You've come to the right place! We know a woman's hair is an extension of her identity so our goal is to help you feel your best. Whether it's a whole new look or just enhancing your natural beauty, we've got you covered!</span></p><p style="margin:0"><span class="x-el x-el-span c1-5i c1-5j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">We do lashes, too! If you're looking for fuller, lush lashes, look no further!&nbsp;</span></p></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><a typography="ButtonAlpha" data-ux="Button" data-aid="ABOUT_CTA_BTN_RENDERED0" href="#" target="" data-tccl="ux2.ABOUT.about2.Content.Default.Button.Default.5759.click,click" class="x-el x-el-a c1-5k c1-2 c1-1h c1-1i c1-1j c1-1k c1-5l c1-5m c1-1d c1-18 c1-1r c1-1v c1-1t c1-1s c1-10 c1-4 c1-b c1-4k c1-2b c1-2o c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 x-d-ux x-d-aid x-d-tccl">Book Online</a></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2j c1-42 c1-43 c1-10 c1-44 c1-45 c1-46 c1-47 c1-b c1-c c1-48 c1-49 c1-4a c1-4b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-2u c1-3s c1-3t c1-3u c1-27 c1-3v c1-28 c1-3x c1-2x c1-b c1-c c1-3y c1-3z c1-4c c1-41 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2j c1-42 c1-43 c1-10 c1-44 c1-45 c1-4d c1-47 c1-2u c1-2x c1-2w c1-b c1-c c1-4e c1-4f c1-48 c1-49 c1-4g c1-4b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="1" id="0b2774a1-418a-46b8-a693-482f52d50f43" class="x-el x-el-div x-el c1-1 c1-2 c1-2u c1-2v c1-4 c1-4h c1-2w c1-18 c1-2y c1-2z c1-b c1-c c1-4i c1-4j c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-1s c1-1t c1-32 c1-25 c1-26 c1-27 c1-28 c1-b c1-4k c1-35 c1-36 c1-37 c1-3b c1-3c c1-3d x-d-ux x-d-aid x-d-field-id x-d-field-route">Only the Best</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1t c1-4l c1-27 c1-28 c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-b c1-34 c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Not only do we offer the best products, made from real, human hair, we also ensure we're using the latest methods and techniques through ongoing education. Our top of the line products and extensive experience will help you reach your hair goals!</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2j c1-42 c1-43 c1-10 c1-44 c1-45 c1-46 c1-47 c1-b c1-c c1-48 c1-49 c1-4a c1-4b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-2u c1-3s c1-3t c1-3u c1-27 c1-3v c1-28 c1-3x c1-2x c1-b c1-c c1-3y c1-3z c1-4c c1-41 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2j c1-42 c1-43 c1-10 c1-44 c1-45 c1-4d c1-47 c1-2u c1-2x c1-2w c1-b c1-c c1-4e c1-4f c1-48 c1-49 c1-4g c1-4b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="2" id="c39ef9d7-882f-4e1c-88fc-14958d0f0c4c" class="x-el x-el-div x-el c1-1 c1-2 c1-2u c1-2v c1-4 c1-4h c1-2w c1-18 c1-2y c1-2z c1-b c1-c c1-4i c1-4j c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-1s c1-1t c1-32 c1-25 c1-26 c1-27 c1-28 c1-b c1-4k c1-35 c1-36 c1-37 c1-3b c1-3c c1-3d x-d-ux x-d-aid x-d-field-id x-d-field-route">Just What You Need</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1t c1-4l c1-27 c1-28 c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-b c1-34 c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>If you've never had extensions before or just aren't quite sure what you need, don't be overwhelmed! Come in for a free consultation, check out our products and share your vision with us. Together, we'll create your haircare plan!</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="149ef955-c14d-4048-b8a4-71a7becc78b6" class="widget widget-subscribe widget-subscribe-subscribe-3"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-61 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="guacBg5760" role="img" data-ux="Background" data-aid="SECTION_BACKGROUND" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-62 c1-2l c1-2m c1-2n c1-63 c1-2q c1-64 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><section data-ux="SectionBanner" class="x-el x-el-section c1-1 c1-2 c1-65 c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-s c1-t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-b c1-c c1-13 c1-d c1-14 c1-e c1-15 c1-f c1-16 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-66 c1-b c1-c c1-d c1-67 c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1b c1-1c c1-1s c1-1t c1-24 c1-25 c1-26 c1-27 c1-68 c1-18 c1-1e c1-69 c1-6a c1-2b c1-6b c1-6c c1-6d c1-6e x-d-ux x-d-aid x-d-route">Keep in Touch</h2><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="149ef955-c14d-4048-b8a4-71a7becc78b6-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-2u c1-3s c1-3t c1-3u c1-27 c1-3v c1-28 c1-3x c1-b c1-c c1-3y c1-3z c1-4c c1-41 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3s c1-2j c1-42 c1-6f c1-10 c1-44 c1-45 c1-4d c1-47 c1-b c1-c c1-6g c1-6h c1-6i c1-48 c1-49 c1-4g c1-4b c1-d c1-6j c1-6k c1-6l c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1t c1-4l c1-27 c1-6m c1-18 c1-b c1-69 c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Be the first to hear about upcoming sales, hot new hairstyles, and new arrivals.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-28 c1-2u c1-2v c1-2x c1-2w c1-18 c1-2o c1-b c1-c c1-d c1-31 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-6n c1-4 c1-b c1-c c1-d c1-6o c1-6p c1-3a c1-6q c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-11 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-11 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input5761" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-6r c1-6s c1-4 c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-b c1-69 c1-5n c1-36 c1-73 c1-5p c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-5t c1-5y c1-5z c1-60 x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input5761" class="x-el x-el-label c1-1 c1-2 c1-1s c1-1t c1-3j c1-7c c1-7d c1-7e c1-7f c1-b c1-69 c1-5n c1-36 c1-5t c1-5y c1-5z c1-60 x-d-ux">Email</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-6p c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-11 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-5k c1-2 c1-1h c1-1i c1-1j c1-1k c1-7g c1-5m c1-1d c1-18 c1-1r c1-1v c1-1t c1-1s c1-10 c1-4 c1-b c1-7h c1-2b c1-2o c1-5n c1-7i c1-5p c1-7j c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></div></div></div></div></section><script>new guacImage('//img1.wsimg.com/isteam/stock/JGbxdeb/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg5760'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%)"]})</script></div> </div></div></div><div id="cc6ef865-9820-472b-8c1a-5e99f0500e09" class="widget widget-footer widget-footer-footer-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-s c1-t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-b c1-c c1-13 c1-d c1-14 c1-e c1-15 c1-f c1-16 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-18 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1t c1-4l c1-27 c1-6n c1-b c1-7k c1-5n c1-36 c1-5t c1-5y c1-5z c1-60 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 blvkvelial - All Rights Reserved.</span></p></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-18 c1-1l c1-b c1-c c1-13 c1-d c1-14 c1-e c1-15 c1-f c1-16 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-7l c1-44 c1-7m c1-4d c1-7n c1-27 c1-26 c1-28 c1-25 c1-7o c1-b c1-c c1-7p c1-7q c1-d c1-e c1-f c1-g x-d-ux"></ul></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-7r c1-p c1-71 c1-27 c1-6n c1-7s c1-w c1-x c1-7t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"/><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1t c1-4l c1-27 c1-28 c1-b c1-7k c1-5n c1-36 c1-5t c1-5y c1-5z c1-60 x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-1p c1-1q c1-1r c1-1s c1-1t c1-1u c1-1v c1-b c1-7u c1-5n c1-21 c1-7v c1-7w c1-5t c1-5y c1-5z c1-60 x-d-ux" data-tccl="ux2.FOOTER.footer1.Layout.Default.Link.Default.5762.click,click">Website Builder</a></span></p></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.53.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/834b85c7682516cb/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/70b94c42ef48f212/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["cabin","default",""],"colors":["#f3f3f2"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"f8d310f2-5283-489d-b490-45f0bd45c0eb":{"isFlyoutMenu":false,"active":true,"pageId":"f8d310f2-5283-489d-b490-45f0bd45c0eb","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme16"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"speed":-2,"uniqueId":"header_parallax5753","noTransform":true,"widgetId":"ced54656-c919-42ab-bfbd-a0ab06a66b61","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"ced54656-c919-42ab-bfbd-a0ab06a66b61","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2581f5affd7417b5/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"center","fontSize":"xlarge","color":"highlight"},"logo":{"logoText":"blvkvelial"},"fontPackLogoId":null,"widgetId":"ced54656-c919-42ab-bfbd-a0ab06a66b61","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"ced54656-c919-42ab-bfbd-a0ab06a66b61","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"speed":-2,"uniqueId":"header_parallax5756","widgetId":"ced54656-c919-42ab-bfbd-a0ab06a66b61","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"ced54656-c919-42ab-bfbd-a0ab06a66b61","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9024daa7fc990e3a/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","children":"Luxury Hair Extensions","noWrapper":true,"scaledFontSizes":["large","mlarge","medium"],"style":{},"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"ced54656-c919-42ab-bfbd-a0ab06a66b61","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"ced54656-c919-42ab-bfbd-a0ab06a66b61","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/136f3b5331be8020/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-149ef955-c14d-4048-b8a4-71a7becc78b6-bootstrap-container'] = {"renderMode":"PUBLISH","fonts":["cabin","default",""],"colors":["#f3f3f2"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"f8d310f2-5283-489d-b490-45f0bd45c0eb":{"isFlyoutMenu":false,"active":true,"pageId":"f8d310f2-5283-489d-b490-45f0bd45c0eb","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme16"};</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/21ab7b79-933e-44d1-9834-1ef6bc90c3dc/gpub/6890105305dee510/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-5751').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"21ab7b79-933e-44d1-9834-1ef6bc90c3dc"}),_trfd.push({"pd":"2020-01-23T16:04:37.128Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
