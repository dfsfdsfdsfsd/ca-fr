<?php
$GLOBALS['_ta_campaign_key'] = 'b4139e33d506890472044baad2d293a7';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=b4139e33d506890472044baad2d293a7' parameter

require 'bootloader.php';

$campaign_id = 'qh13b2';

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

<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>pradatwok</title><meta name="author" content="pradatwok"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://pradatwok.appspot.com/"/>
<meta property="og:site_name" content="pradatwok"/>
<meta property="og:title" content="pradatwok"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/ip/302b5393-4bbb-4bb4-b94a-78b27980464d/josh-hemsley-1577538-unsplash.jpg"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="pradatwok"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/ip/302b5393-4bbb-4bb4-b94a-78b27980464d/josh-hemsley-1577538-unsplash.jpg"/>
<meta name="twitter:image:alt" content="pradatwok"/>
<meta name="theme-color" content="#273250"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
Copyright 2017 The Playfair Display Project Authors (https://github.com/clauseggers/Playfair-Display), with Reserved Font Name "Playfair Display".

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgEM86xQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWoe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWEe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWAe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lW4e5j5hNKc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lWoe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lWEe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lWAe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lW4e5j5hNKc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2011 The Quicksand Project Authors (https://github.com/andrew-paglinawan/QuicksandFamily), with Reserved Font Name Quicksand.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJFQNYuDyP7bh.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJVQNYuDyP7bh.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hK1QNYuDyPw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJFQNYuDyP7bh.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJVQNYuDyP7bh.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hK1QNYuDyPw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/18fd757c-cd75-4806-9282-a4d202d4e129/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/18fd757c-cd75-4806-9282-a4d202d4e129/gpub/c3d8f0c5f7c6f6ba/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-r{padding-top:32px}}@media (max-width: 767px){.x .c1-s{padding-bottom:32px}}@media (max-width: 767px){.x .c1-3d > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-3e  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-7m > p > ul{margin-left:0}}@media (max-width: 767px){.x .c1-7n > p > ul{margin-right:0}}@media (max-width: 767px){.x .c1-7o > p > ul{padding-left:24px}}@media (max-width: 767px){.x .c1-8d{display:flex}}@media (max-width: 767px){.x .c1-8e{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/18fd757c-cd75-4806-9282-a4d202d4e129/gpub/8d99dafa4ec23bbf/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/18fd757c-cd75-4806-9282-a4d202d4e129/gpub/84865375dd093b82/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:14px}}@media (min-width: 1280px){.x .c1-18{width:1160px}}@media (min-width: 1280px){.x .c1-2y{font-size:13px}}@media (min-width: 1280px){.x .c1-4x{font-size:29px}}@media (min-width: 1280px){.x .c1-52{font-size:20px}}@media (min-width: 1280px){.x .c1-5e{font-size:16px}}@media (min-width: 1280px){.x .c1-6r{width:100%}}@media (min-width: 1280px){.x .c1-82{font-size:11px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:16px}}@media (min-width: 1536px){.x .c1-19{width:1280px}}@media (min-width: 1536px){.x .c1-2z{font-size:14px}}@media (min-width: 1536px){.x .c1-4y{font-size:32px}}@media (min-width: 1536px){.x .c1-53{font-size:22px}}@media (min-width: 1536px){.x .c1-5f{font-size:17px}}@media (min-width: 1536px){.x .c1-83{font-size:13px}}</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style></head>
<body class="x  x-fonts-playfair-display" context="[object Object]"><div id="layout-18-fd-757-c-cd-75-4806-9282-a-4-d-202-d-4-e-129" class="layout layout-layout layout-layout-layout-27 locale-en-US lang-en"><div data-ux="Page" id="page-1901" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="b72f58c7-5daf-4ab9-962a-bfc90e5a43ee" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-n c1-o c1-p c1-q c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-u c1-b c1-c c1-v c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-w c1-b c1-c c1-d c1-x c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContainerFluid" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-13 c1-b c1-c c1-d c1-14 c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-4 c1-b c1-c c1-15 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-16 c1-d c1-17 c1-e c1-18 c1-f c1-19 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-b c1-c c1-d c1-1m c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-1t c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED" class="x-el x-el-nav c1-1 c1-2 c1-12 c1-1u c1-1a c1-1d c1-1v c1-1w c1-b c1-c c1-d c1-1x c1-e c1-f c1-g x-d-ux x-d-aid"><ul data-ux="List" id="n-19021903-navId" class="x-el x-el-ul c1-1 c1-2 c1-1h c1-1j c1-1k c1-1i c1-1y c1-1z c1-20 c1-t c1-21 c1-1f c1-22 c1-1e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><li data-ux="ListItemInline" class="x-el x-el-li c1-1 c1-2 c1-23 c1-1k c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-t c1-2a c1-b c1-c c1-2b c1-2c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-1"><script>var n=document.querySelector('[data-aid="HEADER_NAV_RENDERED"]');n.offsetHeight>0&&n.offsetWidth>0&&(Number(window.vctElements)||(window.vctElements=0),window.vctElements++);</script><a rel="" typography="NavAlpha" data-ux="NavLinkDropdown" data-toggle-ignore="true" id="1905" data-aid="NAV_MORE" ignoreCloseAttr="data-ignore-close" data-edit-interactive="true" href="#" class="x-el x-el-a c1-2d c1-2e c1-2f c1-2g c1-2h c1-1a c1-2i c1-1b c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q c1-b c1-2r c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-2y c1-2z x-d-ux x-d-toggle-ignore x-d-aid x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.Default.Link.Dropdown.1906.click,click"><div style="pointer-events:none;display:flex;align-items:center" data-aid="NAV_DROPDOWN"><span style="margin-right:4px">More</span><svg viewBox="0 0 24 24" fill="currentColor" width="16px" height="16px" data-ux="Icon" class="x-el x-el-svg c1-1 c1-2 c1-30 c1-25 c1-31 c1-32 c1-t c1-b c1-2s c1-2w c1-2x c1-2y c1-2z x-d-ux"><path fill-rule="evenodd" d="M19.774 7.86c.294-.335.04-.839-.423-.84L4.538 7c-.447-.001-.698.48-.425.81l7.204 8.693a.56.56 0 0 0 .836.011l7.621-8.654z"></path></svg></div></a></div></li></ul></nav></div></div></div></nav></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1a c1-b c1-c c1-d c1-33 c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-4 c1-b c1-c c1-15 c1-d c1-e c1-f c1-g x-d-ux"></nav></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-21 c1-22 c1-1h c1-1j c1-b c1-c c1-16 c1-d c1-17 c1-e c1-18 c1-f c1-19 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-34 c1-35 c1-36 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-37 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><figure data-ux="WrapperImage" class="x-el x-el-figure c1-1 c1-2 c1-t c1-25 c1-1h c1-1i c1-1j c1-1k c1-4 c1-b c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-route"><img src="//img1.wsimg.com/isteam/ip/302b5393-4bbb-4bb4-b94a-78b27980464d/josh-hemsley-1577538-unsplash.jpg/:/" alt="image15" data-ux="Image" data-ht="Fit" data-aid="BACKGROUND_IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-12 c1-4 c1-y c1-z c1-1h c1-1j c1-38 c1-39 c1-b c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-ht x-d-aid"/><script>(function(){Number(window.vctElements)||(window.vctElements=0),window.vctElements++;var i=new Image();i.onload=window.markVisuallyComplete;i.srcset="//img1.wsimg.com/isteam/ip/302b5393-4bbb-4bb4-b94a-78b27980464d/josh-hemsley-1577538-unsplash.jpg/:/";i.src="//img1.wsimg.com/isteam/ip/302b5393-4bbb-4bb4-b94a-78b27980464d/josh-hemsley-1577538-unsplash.jpg/:/";})()</script></figure></div></div></div></div></section> </div></div></div></div><div id="dcc11ee9-e387-400c-8ac2-50075efa3d17" class="widget widget-about widget-about-about-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-16 c1-d c1-17 c1-e c1-18 c1-f c1-19 c1-g x-d-ux"><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-3a c1-3b c1-3c c1-1k c1-1i c1-b c1-c c1-3d c1-3e c1-3f c1-3g c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-1a c1-3h c1-3i c1-3j c1-1h c1-3k c1-3l c1-3m c1-b c1-c c1-3n c1-3o c1-3p c1-3q c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3h c1-1c c1-3r c1-3s c1-12 c1-21 c1-3t c1-22 c1-3u c1-1a c1-3v c1-3c c1-b c1-c c1-3w c1-3x c1-3y c1-3z c1-40 c1-41 c1-d c1-42 c1-43 c1-e c1-f c1-g x-d-ux"><div id="guacBg1907" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/0" index="0" treatmentData="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-1a c1-44 c1-1b c1-3a c1-1d c1-4 c1-45 c1-46 c1-47 c1-48 c1-49 c1-4a c1-4b c1-1v c1-1w c1-4c c1-4d c1-4e c1-1c c1-4f c1-b c1-c c1-3d c1-3e c1-d c1-4g c1-4h c1-4i c1-4j c1-4k c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-4l c1-49 c1-4m c1-4n c1-4o c1-4p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h1 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" data-promoted-from="3" data-order="0" class="x-el x-el-h1 c1-4q c1-2 c1-2g c1-2h c1-4r c1-1k c1-1i c1-1h c1-1j c1-4s c1-4t c1-4u c1-2t c1-4v c1-4w c1-4x c1-4y x-d-ux x-d-aid x-d-route x-d-field-route x-d-promoted-from x-d-order">Real Estate Consulting</h1><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-2g c1-2h c1-4r c1-1h c1-1j c1-1c c1-4o c1-b c1-4t c1-4z c1-2t c1-50 c1-51 c1-52 c1-53 x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-59 c1-5a c1-b c1-5b c1-5c c1-5d c1-5e c1-5f x-d-ux">You probably have questions. When is the best time to buy or sell? How much house can I afford? How much is my house worth? It might seem intimidating, but our experienced group is here to help!&nbsp;</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3h c1-1c c1-3r c1-3s c1-12 c1-21 c1-3t c1-22 c1-3u c1-1a c1-3v c1-3c c1-b c1-c c1-3w c1-3x c1-3y c1-3z c1-40 c1-41 c1-d c1-42 c1-43 c1-e c1-f c1-g x-d-ux"><div id="guacBg1908" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/1" index="1" treatmentData="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-1a c1-44 c1-1b c1-3a c1-1d c1-4 c1-45 c1-46 c1-47 c1-48 c1-49 c1-4a c1-4b c1-1v c1-1w c1-4c c1-4d c1-4e c1-1c c1-4f c1-b c1-c c1-3d c1-3e c1-d c1-4g c1-4h c1-4i c1-4j c1-4k c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-4l c1-49 c1-4m c1-4n c1-4o c1-4p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h3 c1-4q c1-2 c1-2g c1-2h c1-4r c1-1k c1-1i c1-1h c1-1j c1-4s c1-4t c1-4u c1-2t c1-4v c1-4w c1-4x c1-4y x-d-ux x-d-aid x-d-route x-d-field-route">Credit and Legal Assistance</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-2g c1-2h c1-4r c1-1h c1-1j c1-1c c1-4o c1-b c1-4t c1-4z c1-2t c1-50 c1-51 c1-52 c1-53 x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-59 c1-5a c1-b c1-5b c1-5c c1-5d c1-5e c1-5f x-d-ux">If you have questions about credit or legal matters, buying or selling, you can trust us to find you what you need fast. We'll make sure you feel confident and supported every step of the way. &nbsp;&nbsp;<br>
</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3h c1-1c c1-3r c1-3s c1-12 c1-21 c1-3t c1-22 c1-3u c1-1a c1-3v c1-3c c1-b c1-c c1-3w c1-3x c1-3y c1-3z c1-40 c1-41 c1-d c1-42 c1-43 c1-e c1-f c1-g x-d-ux"><div id="guacBg1909" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/2" index="2" treatmentData="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-1a c1-44 c1-1b c1-3a c1-1d c1-4 c1-45 c1-46 c1-47 c1-48 c1-49 c1-4a c1-4b c1-1v c1-1w c1-4c c1-4d c1-5g c1-1c c1-4f c1-b c1-c c1-3d c1-3e c1-d c1-5h c1-4h c1-5i c1-4j c1-5j c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-4l c1-49 c1-4m c1-4n c1-4o c1-4p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h3 c1-4q c1-2 c1-2g c1-2h c1-4r c1-1k c1-1i c1-1h c1-1j c1-4s c1-4t c1-4u c1-2t c1-4v c1-4w c1-4x c1-4y x-d-ux x-d-aid x-d-route x-d-field-route">Find the Right Investment Project</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-2g c1-2h c1-4r c1-1h c1-1j c1-1c c1-4o c1-b c1-4t c1-4z c1-2t c1-50 c1-51 c1-52 c1-53 x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-59 c1-5a c1-b c1-5b c1-5c c1-5d c1-5e c1-5f x-d-ux">Looking for large or small, condo or family home, fixer-upper or luxury? We will find it and get it for you at the price that's right. We also help with staging, flipping, building, and more.&nbsp;</span></p></div></div></div></div></div></section> </div></div></div><div id="02140096-5013-433c-b450-a9ea01144a0a" class="widget widget-gallery widget-gallery-gallery-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-16 c1-d c1-17 c1-e c1-18 c1-f c1-19 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-5k c1-2e c1-2g c1-2h c1-5l c1-1k c1-1i c1-1h c1-u c1-5m c1-5n c1-b c1-c c1-5o c1-2t c1-5p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">recent rebuilds</span></h2></div><div id="bs-2"><div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-16 c1-d c1-17 c1-e c1-18 c1-f c1-19 c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1a c1-3h c1-3i c1-3j c1-1h c1-3k c1-3l c1-3m c1-b c1-c c1-3n c1-3o c1-3p c1-3q c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3h c1-1c c1-3r c1-3s c1-12 c1-21 c1-3t c1-1g c1-3u c1-b c1-c c1-3y c1-5q c1-5r c1-5s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Carousel" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div class="carousel" style="width:100%;height:auto"><div class="carousel-container-inner" style="width:100%;height:auto;margin-bottom:0"><div class="carousel-viewport" style="width:100%;height:600px"><ul class="carousel-track" style="line-height:0;transform:translateX(NaNpx);transition:none"><li style="margin-left:5px;height:600px;width:inherit;overflow-y:hidden;min-height:600px;overflow-x:hidden;min-width:inherit;opacity:0.3" data-index="-2" class="carousel-slide carousel-slide-loading"></li><li style="margin-left:5px;height:600px;width:inherit;overflow-y:hidden;min-height:600px;overflow-x:hidden;min-width:inherit;opacity:0.3" data-index="-1" class="carousel-slide carousel-slide-loading"></li><li style="margin-left:5px;height:600px;width:inherit;overflow-y:hidden;min-height:600px;overflow-x:hidden;min-width:inherit;opacity:1" data-index="0" class="carousel-slide carousel-slide-selected carousel-slide-loading"></li><li style="margin-left:5px;height:600px;width:inherit;overflow-y:hidden;min-height:600px;overflow-x:hidden;min-width:inherit;opacity:0.3" data-index="1" class="carousel-slide carousel-slide-loading"></li><li style="margin-left:5px;height:600px;width:inherit;overflow-y:hidden;min-height:600px;overflow-x:hidden;min-width:inherit;opacity:0.3" data-index="2" class="carousel-slide carousel-slide-loading"></li><li style="margin-left:5px;height:600px;width:inherit;overflow-y:hidden;min-height:600px;overflow-x:hidden;min-width:inherit;opacity:0.3" data-index="3" class="carousel-slide carousel-slide-loading"></li><li style="margin-left:5px;height:600px;width:inherit;overflow-y:hidden;min-height:600px;overflow-x:hidden;min-width:inherit;opacity:0.3" data-index="4" class="carousel-slide carousel-slide-loading"></li><li style="margin-left:5px;height:600px;width:inherit;overflow-y:hidden;min-height:600px;overflow-x:hidden;min-width:inherit;opacity:0.3" data-index="5" class="carousel-slide carousel-slide-loading"></li><li style="margin-left:5px;height:600px;width:inherit;overflow-y:hidden;min-height:600px;overflow-x:hidden;min-width:inherit;opacity:1" data-index="6" class="carousel-slide  carousel-slide-loading"></li><li style="margin-left:5px;height:600px;width:inherit;overflow-y:hidden;min-height:600px;overflow-x:hidden;min-width:inherit;opacity:0.3" data-index="7" class="carousel-slide carousel-slide-loading"></li></ul></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5t c1-5u c1-b c1-c c1-5v c1-d c1-e c1-f c1-g x-d-ux"><button data-ux="CarouselButtonPrevious" data-aid="GALLERY_SCROLL_LEFT_ARROW" class="x-el x-el-button c1-1 c1-2 c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-2s c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-b c1-6e c1-2w c1-6f c1-6g c1-6h c1-6i c1-2x c1-2y c1-2z x-d-ux x-d-aid"><svg viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px" data-ux="Icon" data-edit-interactive="true" class="x-el x-el-svg c1-1 c1-2 c1-30 c1-25 c1-b c1-2s c1-2w c1-2x c1-2y c1-2z x-d-ux x-d-edit-interactive"><path fill-rule="evenodd" d="M15.836 19.774c.335.294.84.04.84-.423l.02-14.813c.001-.447-.48-.698-.81-.425l-8.693 7.204a.56.56 0 0 0-.01.836l8.653 7.621z"></path></svg></button><button data-ux="CarouselButtonNext" data-aid="GALLERY_SCROLL_RIGHT_ARROW" class="x-el x-el-button c1-1 c1-2 c1-6j c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-2s c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-b c1-6e c1-2w c1-6f c1-6g c1-6h c1-6i c1-2x c1-2y c1-2z x-d-ux x-d-aid"><svg viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px" data-ux="Icon" data-edit-interactive="true" class="x-el x-el-svg c1-1 c1-2 c1-30 c1-25 c1-b c1-2s c1-2w c1-2x c1-2y c1-2z x-d-ux x-d-edit-interactive"><path fill-rule="evenodd" d="M7.861 4.125c-.335-.293-.84-.039-.84.424L7 19.362c0 .446.481.697.811.424l8.693-7.203a.56.56 0 0 0 .011-.836L7.861 4.125z"></path></svg></button></div></div></div></div></div></div></div></div></div></section> </div></div></div><div id="7fc60090-b699-4e6a-9e0b-813f01d37d73" class="widget widget-about widget-about-about-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-16 c1-d c1-17 c1-e c1-18 c1-f c1-19 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-5k c1-2e c1-2g c1-2h c1-5l c1-1k c1-1i c1-1h c1-u c1-5m c1-5n c1-b c1-c c1-5o c1-2t c1-5p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Our Team</span></h2><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-3a c1-1d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-1a c1-3h c1-3i c1-3j c1-1h c1-3k c1-3l c1-3m c1-b c1-c c1-3n c1-3o c1-3p c1-3q c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3h c1-1c c1-3r c1-3s c1-12 c1-21 c1-3t c1-1g c1-3u c1-1a c1-b c1-c c1-3w c1-3x c1-3y c1-5q c1-5r c1-5s c1-d c1-42 c1-43 c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-1a c1-44 c1-1b c1-3a c1-1d c1-4 c1-45 c1-46 c1-47 c1-1c c1-4f c1-1w c1-21 c1-b c1-c c1-3d c1-3e c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-6k c1-2 c1-2g c1-2h c1-4r c1-1k c1-1i c1-1h c1-1j c1-4 c1-28 c1-6l c1-b c1-4t c1-4z c1-2t c1-50 c1-51 c1-52 c1-53 x-d-ux x-d-aid x-d-route x-d-field-route">Angela Y</h4><div data-ux="ContentCardWrapperImage" data-route="cards.imageProperties" data-field-route="/card/0/image" class="x-el x-el-div c1-1 c1-2 c1-25 c1-y c1-z c1-3a c1-6m c1-4 c1-6n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><img src="//img1.wsimg.com/isteam/stock/nppm1EP/:/cr=t:4.32%25,l:46.52%25,w:37.45%25,h:56.18%25/rs=w:365,h:365,cg:true,m" srcSet="//img1.wsimg.com/isteam/stock/nppm1EP/:/cr=t:4.32%25,l:46.52%25,w:37.45%25,h:56.18%25/rs=w:365,h:365,cg:true,m,
//img1.wsimg.com/isteam/stock/nppm1EP/:/cr=t:4.32%25,l:46.52%25,w:37.45%25,h:56.18%25/rs=w:547.5,h:547.5,cg:true,m 1.5x,
//img1.wsimg.com/isteam/stock/nppm1EP/:/cr=t:4.32%25,l:46.52%25,w:37.45%25,h:56.18%25/rs=w:730,h:730,cg:true,m 2x,
//img1.wsimg.com/isteam/stock/nppm1EP/:/cr=t:4.32%25,l:46.52%25,w:37.45%25,h:56.18%25/rs=w:1095,h:1095,cg:true,m 3x" alt="image16" data-ux="ContentCardImageThumbnail" data-aid="ABOUT_IMAGE_RENDERED0" class="x-el x-el-img c1-1 c1-2 c1-12 c1-4 c1-y c1-z c1-1h c1-1j c1-38 c1-39 c1-6o c1-6p c1-b c1-c c1-d c1-6q c1-e c1-6r c1-f c1-g x-d-ux x-d-aid"/></div><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-2g c1-2h c1-6s c1-1h c1-1j c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-1c c1-28 c1-6l c1-b c1-7l c1-c c1-2t c1-7m c1-7n c1-7o c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-59 c1-5a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Angela has been a real estate agent for the last 30 years. She assembled the team when she realized our community needed a one-stop-shop for real estate needs.&nbsp;</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3h c1-1c c1-3r c1-3s c1-12 c1-21 c1-3t c1-1g c1-3u c1-1a c1-b c1-c c1-3w c1-3x c1-3y c1-5q c1-5r c1-5s c1-d c1-42 c1-43 c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-1a c1-44 c1-1b c1-3a c1-1d c1-4 c1-45 c1-46 c1-47 c1-1c c1-4f c1-1w c1-21 c1-b c1-c c1-3d c1-3e c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-6k c1-2 c1-2g c1-2h c1-4r c1-1k c1-1i c1-1h c1-1j c1-4 c1-28 c1-6l c1-b c1-4t c1-4z c1-2t c1-50 c1-51 c1-52 c1-53 x-d-ux x-d-aid x-d-route x-d-field-route">Jake M</h4><div data-ux="ContentCardWrapperImage" data-route="cards.imageProperties" data-field-route="/card/1/image" class="x-el x-el-div c1-1 c1-2 c1-25 c1-y c1-z c1-3a c1-6m c1-4 c1-6n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><img src="//img1.wsimg.com/isteam/stock/Dx5xrEK/:/cr=t:0%25,l:28.3%25,w:66.43%25,h:100%25/rs=w:365,h:365,cg:true" srcSet="//img1.wsimg.com/isteam/stock/Dx5xrEK/:/cr=t:0%25,l:28.3%25,w:66.43%25,h:100%25/rs=w:365,h:365,cg:true,
//img1.wsimg.com/isteam/stock/Dx5xrEK/:/cr=t:0%25,l:28.3%25,w:66.43%25,h:100%25/rs=w:547.5,h:547.5,cg:true 1.5x,
//img1.wsimg.com/isteam/stock/Dx5xrEK/:/cr=t:0%25,l:28.3%25,w:66.43%25,h:100%25/rs=w:730,h:730,cg:true 2x,
//img1.wsimg.com/isteam/stock/Dx5xrEK/:/cr=t:0%25,l:28.3%25,w:66.43%25,h:100%25/rs=w:1095,h:1095,cg:true 3x" alt="image17" data-ux="ContentCardImageThumbnail" data-aid="ABOUT_IMAGE_RENDERED1" class="x-el x-el-img c1-1 c1-2 c1-12 c1-4 c1-y c1-z c1-1h c1-1j c1-38 c1-39 c1-6o c1-6p c1-b c1-c c1-d c1-6q c1-e c1-6r c1-f c1-g x-d-ux x-d-aid"/></div><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-2g c1-2h c1-6s c1-1h c1-1j c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-1c c1-28 c1-6l c1-b c1-7l c1-c c1-2t c1-7m c1-7n c1-7o c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-59 c1-5a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Jake has a keen talent for flipping houses. He has a knack for finding the properties whose value has the potential to increase exponentially!&nbsp;</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3h c1-1c c1-3r c1-3s c1-12 c1-21 c1-3t c1-1g c1-3u c1-1a c1-b c1-c c1-3w c1-3x c1-3y c1-5q c1-5r c1-5s c1-d c1-42 c1-43 c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-1a c1-44 c1-1b c1-3a c1-1d c1-4 c1-45 c1-46 c1-47 c1-1c c1-4f c1-1w c1-21 c1-b c1-c c1-3d c1-3e c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-6k c1-2 c1-2g c1-2h c1-4r c1-1k c1-1i c1-1h c1-1j c1-4 c1-28 c1-6l c1-b c1-4t c1-4z c1-2t c1-50 c1-51 c1-52 c1-53 x-d-ux x-d-aid x-d-route x-d-field-route">Mara Z</h4><div data-ux="ContentCardWrapperImage" data-route="cards.imageProperties" data-field-route="/card/2/image" class="x-el x-el-div c1-1 c1-2 c1-25 c1-y c1-z c1-3a c1-6m c1-4 c1-6n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><img src="//img1.wsimg.com/isteam/stock/kVKNZd1/:/cr=t:7.57%25,l:10.72%25,w:53.76%25,h:80.65%25/rs=w:365,h:365,cg:true,m" srcSet="//img1.wsimg.com/isteam/stock/kVKNZd1/:/cr=t:7.57%25,l:10.72%25,w:53.76%25,h:80.65%25/rs=w:365,h:365,cg:true,m,
//img1.wsimg.com/isteam/stock/kVKNZd1/:/cr=t:7.57%25,l:10.72%25,w:53.76%25,h:80.65%25/rs=w:547.5,h:547.5,cg:true,m 1.5x,
//img1.wsimg.com/isteam/stock/kVKNZd1/:/cr=t:7.57%25,l:10.72%25,w:53.76%25,h:80.65%25/rs=w:730,h:730,cg:true,m 2x,
//img1.wsimg.com/isteam/stock/kVKNZd1/:/cr=t:7.57%25,l:10.72%25,w:53.76%25,h:80.65%25/rs=w:1095,h:1095,cg:true,m 3x" alt="image18" data-ux="ContentCardImageThumbnail" data-aid="ABOUT_IMAGE_RENDERED2" class="x-el x-el-img c1-1 c1-2 c1-12 c1-4 c1-y c1-z c1-1h c1-1j c1-38 c1-39 c1-6o c1-6p c1-b c1-c c1-d c1-6q c1-e c1-6r c1-f c1-g x-d-ux x-d-aid"/></div><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-2g c1-2h c1-6s c1-1h c1-1j c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-1c c1-28 c1-6l c1-b c1-7l c1-c c1-2t c1-7m c1-7n c1-7o c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-59 c1-5a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Mara is our financial wizard. She will be with you every step of the way, from pre-qualifying to getting the best mortgage rates, or making the most out of your asking price.&nbsp;</span></p></div></div></div></div></div></section> </div></div></div><div id="f280dcfa-b933-4175-b8e2-108ba6f7be62" class="widget widget-footer widget-footer-footer-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-7p c1-7q c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Divider" class="x-el x-el-div c1-1 c1-2 c1-3 c1-7r c1-1g c1-13 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-16 c1-d c1-17 c1-e c1-18 c1-f c1-19 c1-g x-d-ux"><hr data-ux="DividerHR" class="x-el x-el-hr c1-1 c1-2 c1-7s c1-4d c1-7t c1-1h c1-1j c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"/></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-16 c1-d c1-17 c1-e c1-18 c1-f c1-19 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1a c1-3h c1-3i c1-3j c1-1h c1-1i c1-1j c1-1k c1-1b c1-3a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3h c1-7u c1-3r c1-3s c1-12 c1-21 c1-1f c1-22 c1-1e c1-b c1-c c1-d c1-1x c1-7v c1-e c1-f c1-g x-d-ux"><div typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-7w c1-2e c1-2g c1-2h c1-6s c1-1h c1-1j c1-b c1-7x c1-7y c1-2t c1-7z c1-80 c1-81 c1-82 c1-83 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 pradatwok - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-3h c1-7u c1-3r c1-3s c1-12 c1-21 c1-1f c1-22 c1-1e c1-b c1-c c1-d c1-1x c1-7v c1-e c1-f c1-g x-d-ux"><p typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-7w c1-2e c1-2g c1-2h c1-6s c1-84 c1-1j c1-b c1-7x c1-7y c1-2t c1-7z c1-85 c1-1q c1-81 c1-82 c1-83 x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-86 c1-87 c1-2f c1-2g c1-2h c1-88 c1-2i c1-84 c1-b c1-5o c1-7y c1-89 c1-2u c1-8a c1-7z c1-85 c1-1q c1-81 c1-82 c1-83 x-d-ux" data-tccl="ux2.FOOTER.footer2.Layout.Default.Link.Default.1910.click,click">Website Builder</a></span></p></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-3a c1-8b c1-b c1-c c1-16 c1-d c1-17 c1-e c1-18 c1-f c1-19 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-8c c1-21 c1-1f c1-22 c1-1e c1-1h c1-1i c1-1j c1-1k c1-1l c1-b c1-c c1-8d c1-8e c1-d c1-e c1-f c1-g x-d-ux"></ul></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.43.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/fd48016b4bd944dd/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/3397e3407828c5a2/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["playfair-display","quicksand",""],"colors":["#273250"],"fontScale":"small","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"8799db7d-f0f2-4fa4-b15f-cc64114d2ea8":{"isFlyoutMenu":false,"active":true,"pageId":"8799db7d-f0f2-4fa4-b15f-cc64114d2ea8","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme27"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'NavOverflow',props:props,context:context,contextKey:'context-bs-1'});
})({"style":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"activeStyle":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"label":"More","parentId":"n-19021903-navId","toggleId":"1904-moreId","navigation":[],"widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Nav","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2c614d495492da0e/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-2'] = {"renderMode":"PUBLISH","fonts":["playfair-display","quicksand",""],"colors":["#273250"],"fontScale":"small","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"8799db7d-f0f2-4fa4-b15f-cc64114d2ea8":{"isFlyoutMenu":false,"active":true,"pageId":"8799db7d-f0f2-4fa4-b15f-cc64114d2ea8","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme27"};</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/18fd757c-cd75-4806-9282-a4d202d4e129/gpub/b53c6d42f2ea4e51/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-1901').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"18fd757c-cd75-4806-9282-a4d202d4e129"}),_trfd.push({"pd":"2020-01-10T18:41:08.633Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
