<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = '6ba9h7';

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











<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>nextcafr</title><meta name="author" content="nextcafr"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://nextcafr.appspot.com/"/>
<meta property="og:site_name" content="nextcafr"/>
<meta property="og:title" content="Cooking Up Your New Cravings"/>
<meta property="og:description" content="Join us for great home-style cooking!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/99133"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="nextcafr"/>
<meta name="twitter:description" content="Cooking Up Your New Cravings"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/99133"/>
<meta name="twitter:image:alt" content="nextcafr"/>
<meta name="theme-color" content="#ebe7e0"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
Copyright (c) 2011 by Brian J. Bonislawsky DBA Astigmatic (AOETI) (astigma@astigmatic.com), with Reserved Font Name "Righteous"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Righteous';
  font-style: normal;
  font-weight: 400;
  src: local('Righteous'), local('Righteous-Regular'), url(https://img1.wsimg.com/gfonts/s/righteous/v8/1cXxaUPXBpj2rGoU7C9WhnGFq8Kk1doH.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Righteous';
  font-style: normal;
  font-weight: 400;
  src: local('Righteous'), local('Righteous-Regular'), url(https://img1.wsimg.com/gfonts/s/righteous/v8/1cXxaUPXBpj2rGoU7C9WiHGFq8Kk1Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2010 The Josefin Sans Project Authors (https://github.com/ThomasJockin/JosefinSansFont-master), with Reserved Font Name "Josefin Sans".

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3aZQNVED7rKGKxtqIqX5EUAnx4Vn8siqM7.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3aZQNVED7rKGKxtqIqX5EUA3x4Vn8siqM7.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3aZQNVED7rKGKxtqIqX5EUDXx4Vn8sig.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Josefin Sans SemiBold'), local('JosefinSans-SemiBold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5Ec0lhtdF0hoJky_MiS.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Josefin Sans SemiBold'), local('JosefinSans-SemiBold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5Ec0lhtdV0hoJky_MiS.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Josefin Sans SemiBold'), local('JosefinSans-SemiBold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5Ec0lhte10hoJky_A.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Josefin Sans Bold'), local('JosefinSans-Bold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5EctlltdF0hoJky_MiS.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Josefin Sans Bold'), local('JosefinSans-Bold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5EctlltdV0hoJky_MiS.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Josefin Sans Bold'), local('JosefinSans-Bold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5Ectllte10hoJky_A.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/305f2875-f0e5-46cb-b5a2-e8af089ea1e2/gpub/5c2b28b7ec7cfd8c/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/305f2875-f0e5-46cb-b5a2-e8af089ea1e2/gpub/1ce6e1d965c0e672/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-l{padding-top:40px}}@media (max-width: 767px){.x .c1-m{padding-bottom:40px}}@media (max-width: 767px){.x .c1-1z{width:100%}}@media (max-width: 767px){.x .c1-20{display:flex}}@media (max-width: 767px){.x .c1-21{justify-content:center}}@media (max-width: 767px){.x .c1-80{padding-bottom:32px}}@media (max-width: 767px){.x .c1-84{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/305f2875-f0e5-46cb-b5a2-e8af089ea1e2/gpub/24858a95580856e/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/305f2875-f0e5-46cb-b5a2-e8af089ea1e2/gpub/60c3144f62ddcef5/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-2q{font-size:32px}}@media (min-width: 1280px){.x .c1-3y{width:1160px}}@media (min-width: 1280px){.x .c1-4c{font-size:44px}}@media (min-width: 1280px){.x .c1-4n{font-size:22px}}@media (min-width: 1280px){.x .c1-5j{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-2r{font-size:36px}}@media (min-width: 1536px){.x .c1-3z{width:1280px}}@media (min-width: 1536px){.x .c1-4d{font-size:48px}}@media (min-width: 1536px){.x .c1-4o{font-size:24px}}@media (min-width: 1536px){.x .c1-5k{font-size:16px}}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(0, 0, 0); min-height: 100vh; }</style></head>
<body class="x  x-fonts-righteous" context="[object Object]"><div id="layout-305-f-2875-f-0-e-5-46-cb-b-5-a-2-e-8-af-089-ea-1-e-2" class="layout layout-layout layout-layout-layout-9 locale-en-US lang-en"><div data-ux="Page" id="page-6567" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="f88320ef-767e-442f-83b2-951257b081b8" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div> <section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-h c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-n c1-b c1-c c1-d c1-o c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-p c1-q c1-r c1-s c1-3 c1-b c1-c c1-d c1-t c1-u c1-v c1-w c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-17 c1-18 c1-19 c1-1a c1-1b c1-1c c1-b c1-c c1-1d c1-1e c1-1f c1-1g c1-d c1-1h c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1i c1-1j c1-1k c1-11 c1-1l c1-1m c1-1n c1-1o c1-14 c1-1p c1-1q c1-b c1-c c1-1r c1-1s c1-1t c1-1u c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1v c1-1w c1-1x c1-1y c1-11 c1-c c1-1z c1-20 c1-21 c1-22 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="7f6ca330-6457-421c-a3b2-83a1ec9a3e78" title="nextcafr" href="/" class="x-el x-el-a c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-b c1-2e c1-c c1-2f c1-2g c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.6571.click,click"><div id="bs-1"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-6572" logoText="nextcafr" class="x-el x-el-h3 c1-1 c1-2 c1-26 c1-27 c1-2i c1-2j c1-2k c1-18 c1-1a c1-11 c1-b c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-23 c1-24 c1-1x c1-4 c1-2m c1-2s c1-2f c1-2t c1-b c1-2o c1-2p c1-2q c1-2r x-d-ux x-d-aid x-d-field-id x-d-field-route">nextcafr</span></h3></div></a></div></div></div><div data-ux="Grid" id="n-65686574-navBarId" class="x-el x-el-div c1-1 c1-2 c1-2u c1-15 c1-16 c1-2v c1-18 c1-19 c1-1a c1-1b c1-b c1-c c1-1d c1-1e c1-1f c1-1g c1-d c1-2w c1-2x c1-2y c1-2z c1-30 c1-31 c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1i c1-1j c1-32 c1-33 c1-1l c1-1m c1-1n c1-1o c1-14 c1-1c c1-34 c1-1p c1-b c1-c c1-1r c1-1s c1-1t c1-1u c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1v c1-1w c1-1x c1-1y c1-11 c1-c c1-1z c1-20 c1-21 c1-22 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="7f6ca330-6457-421c-a3b2-83a1ec9a3e78" title="nextcafr" href="/" class="x-el x-el-a c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-b c1-2e c1-c c1-2f c1-2g c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.6575.click,click"><div id="bs-2"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-6576" logoText="nextcafr" class="x-el x-el-h3 c1-1 c1-2 c1-26 c1-27 c1-2i c1-2j c1-2k c1-18 c1-1a c1-11 c1-b c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-23 c1-24 c1-1x c1-4 c1-2m c1-2s c1-2f c1-2t c1-b c1-2o c1-2p c1-2q c1-2r x-d-ux x-d-aid x-d-field-id x-d-field-route">nextcafr</span></h3></div></a></div></div></div></div></nav></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-14 c1-p c1-35 c1-b c1-c c1-36 c1-d c1-37 c1-38 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-14 c1-39 c1-3a c1-1i c1-3b c1-3c c1-p c1-b c1-c c1-d c1-3d c1-e c1-f c1-g x-d-ux"><div id="guacBg6577" role="img" data-guac-image="loading" data-ux="Background" data-ht="Fill" data-aid="BACKGROUND_IMAGE_RENDERED" data-field-id="background" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-3e c1-3f c1-3g c1-3h c1-3i c1-p c1-4 c1-3j c1-3k c1-3l c1-3m c1-b c1-c c1-d c1-37 c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-ht x-d-aid x-d-field-id"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/99133/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg6577'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-2v c1-18 c1-2k c1-1a c1-2j c1-h c1-1l c1-b c1-c c1-d c1-3d c1-3n c1-3o c1-30 c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1i c1-1j c1-3p c1-11 c1-1l c1-3q c1-1n c1-3r c1-14 c1-36 c1-3s c1-34 c1-b c1-c c1-d c1-3t c1-3u c1-3v c1-3n c1-30 c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-3w c1-d c1-3x c1-e c1-3y c1-f c1-3z c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-40 c1-41 c1-3r c1-3q c1-42 c1-43 c1-b c1-c c1-d c1-44 c1-45 c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-1p c1-b c1-c c1-d c1-46 c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2j c1-2k c1-3r c1-3q c1-11 c1-47 c1-b c1-c c1-3w c1-d c1-3x c1-e c1-3y c1-f c1-3z c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1v c1-1w c1-26 c1-27 c1-2i c1-2j c1-2k c1-18 c1-1a c1-2u c1-1y c1-48 c1-49 c1-2n c1-4a c1-o c1-4b c1-4c c1-4d x-d-ux x-d-aid x-d-route">Cooking Up Your New Cravings</h1><div id="bs-3"><div data-ux="Element" typography="HeadingAlpha" id="tagline-container-6578" class="x-el x-el-div c1-1v c1-1w c1-26 c1-27 c1-2i c1-n c1-1y c1-48 c1-49 c1-2n c1-4a c1-1h c1-4b c1-4c c1-4d x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1v c1-1w c1-26 c1-27 c1-2i c1-2j c1-2k c1-18 c1-1a c1-4e c1-1x c1-4 c1-49 c1-1y c1-48 c1-2n c1-4a c1-4b c1-4c c1-4d x-d-ux x-d-aid x-d-route">Cooking Up Your New Cravings</h1><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-6578" class="x-el x-el-span c1-1v c1-1w c1-4f c1-4g c1-2u c1-4h c1-4i c1-4j c1-49 c1-1y c1-4a c1-4b c1-4c c1-4d x-d-ux x-d-size x-d-scaler-id">Cooking Up Your New Cravings</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-6578" class="x-el x-el-span c1-1v c1-1w c1-4f c1-4g c1-2u c1-4h c1-4i c1-4j c1-2m c1-1y c1-2o c1-2p c1-2q c1-2r x-d-ux x-d-size x-d-scaler-id">Cooking Up Your New Cravings</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-6578" class="x-el x-el-span c1-1v c1-1w c1-4f c1-4g c1-2u c1-4h c1-4i c1-4j c1-4k c1-1y c1-4l c1-4m c1-4n c1-4o x-d-ux x-d-size x-d-scaler-id">Cooking Up Your New Cravings</span></div></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4p c1-4q c1-1a c1-4r c1-4s c1-4t c1-4u c1-4v c1-b c1-4k c1-2n c1-4l c1-4m c1-4n c1-4o x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Join us for great home-style cooking!</span></p></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-51 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-4" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="/#1dca7283-f4b1-4058-9874-04432e4b61b5" target="" data-tccl="ux2.header.cta_button.click,click" data-page="7f6ca330-6457-421c-a3b2-83a1ec9a3e78" data-section-jump="1dca7283-f4b1-4058-9874-04432e4b61b5" class="x-el x-el-a c1-52 c1-1w c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-1x c1-1p c1-25 c1-29 c1-27 c1-26 c1-11 c1-4 c1-b c1-59 c1-4x c1-3i c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-t c1-u c1-5g c1-5h c1-5i c1-5j c1-5k x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Reserve Now</a></div></div></div></div></div></div></div></div></section> </div></div></div><div id="e50fceb8-ce97-4729-aa61-e254044694b0" class="widget widget-gallery widget-gallery-gallery-7"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-3w c1-d c1-3x c1-e c1-3y c1-f c1-3z c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-1v c1-1w c1-26 c1-27 c1-5l c1-2j c1-2k c1-18 c1-5m c1-39 c1-1p c1-1y c1-49 c1-2l c1-2n c1-4a c1-46 c1-4b c1-4c c1-4d x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Photo Gallery</span></h2><div id="bs-5"><div style="width:1px;height:1px;visibility:hidden"></div></div></div></section> </div></div></div><div id="e71fe04a-d346-4829-a8dd-50e4ec9acb2f" class="widget widget-reservation widget-reservation-reservation-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-5n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-5n c1-i c1-j c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-3w c1-d c1-3x c1-e c1-3y c1-f c1-3z c1-g x-d-ux"><div data-ux="Intro" class="x-el x-el-div x-el c1-1 c1-2 c1-5m c1-5o c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="RESERVATION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1v c1-1w c1-26 c1-27 c1-5l c1-2j c1-2k c1-18 c1-1a c1-39 c1-1p c1-1y c1-49 c1-5p c1-2n c1-4a c1-46 c1-5q c1-4b c1-4c c1-4d x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Reserve a Table</span></h2></div><div data-ux="Grid" data-aid="res" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-2v c1-18 c1-19 c1-1a c1-1b c1-b c1-c c1-1d c1-1e c1-1f c1-1g c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1i c1-1j c1-5r c1-11 c1-1l c1-1m c1-1n c1-1o c1-b c1-c c1-5s c1-5t c1-5u c1-1r c1-1s c1-1t c1-1u c1-d c1-3t c1-3u c1-3v c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3 c1-z c1-10 c1-53 c1-54 c1-1p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><span typography="BodyAlpha" data-ux="Text" data-aid="RESERVATION_MESSAGE_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-26 c1-27 c1-4p c1-18 c1-1a c1-5v c1-b c1-c c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-aid">We&#x27;re still setting up OpenTable integration. Check back soon!</span></div></div></div></div></section> </div></div></div><div id="1dca7283-f4b1-4058-9874-04432e4b61b5" class="widget widget-contact widget-contact-contact-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-p c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-3w c1-d c1-3x c1-e c1-3y c1-f c1-3z c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1v c1-1w c1-26 c1-27 c1-5l c1-2j c1-2k c1-18 c1-5m c1-39 c1-1p c1-1y c1-49 c1-2l c1-2n c1-4a c1-46 c1-4b c1-4c c1-4d x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Visit Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="1dca7283-f4b1-4058-9874-04432e4b61b5-bootstrap-container"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-2v c1-18 c1-19 c1-1a c1-1b c1-b c1-c c1-1d c1-1e c1-1f c1-1g c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1i c1-1j c1-5r c1-11 c1-1l c1-1m c1-1n c1-1o c1-b c1-c c1-5s c1-5t c1-5u c1-1r c1-1s c1-1t c1-1u c1-d c1-3t c1-3u c1-3v c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-34 c1-1p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c1-1 c1-2 c1-26 c1-27 c1-5w c1-2j c1-2k c1-18 c1-5x c1-b c1-5y c1-4k c1-2n c1-4l c1-4m c1-4n c1-4o x-d-ux x-d-aid x-d-route x-d-field-route">Contact Us </h4><form data-ux="Form" aria-live="polite" formFieldVariationOptions="[object Object]" formTitle="Contact Us " formFields="[object Object],[object Object],[object Object],[object Object],[object Object]" formSubmitHost="https://contact.apps-api.instantpage.secureserver.net" recaptchaType="V3" domainName="nextcafr.godaddysites.com" formSuccessMessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteId="305f2875-f0e5-46cb-b5a2-e8af089ea1e2" pageId="7f6ca330-6457-421c-a3b2-83a1ec9a3e78" accountId="cb0b43cf-5d4f-11ea-81ba-3417ebe725e0" staticContent="[object Object]" emailOptInMessage="Sign up for our email list for updates, promotions, and more." emailConfirmationMessage="We&#x27;ve sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c1-1 c1-2 c1-1a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><input type="text" name="_app_id" autoComplete="off" tabindex="-1" style="display:none" value=""/><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input6579" value="" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c1-1 c1-2 c1-5n c1-5z c1-4 c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-b c1-6a c1-5a c1-2n c1-6b c1-5c c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-5f c1-5i c1-5j c1-5k x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input6579" class="x-el x-el-label c1-1 c1-2 c1-26 c1-27 c1-4i c1-6k c1-6l c1-6m c1-6n c1-b c1-6a c1-5a c1-2n c1-5f c1-5i c1-5j c1-5k x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="Phone" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input6580" value="" data-aid="Phone" class="x-el x-el-input c1-1 c1-2 c1-5n c1-5z c1-4 c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-b c1-6a c1-5a c1-2n c1-6b c1-5c c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-5f c1-5i c1-5j c1-5k x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input6580" class="x-el x-el-label c1-1 c1-2 c1-26 c1-27 c1-4i c1-6k c1-6l c1-6m c1-6n c1-b c1-6a c1-5a c1-2n c1-5f c1-5i c1-5j c1-5k x-d-ux">Phone</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input6581" value="" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c1-1 c1-2 c1-5n c1-5z c1-4 c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-b c1-6a c1-5a c1-2n c1-6b c1-5c c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-5f c1-5i c1-5j c1-5k x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input6581" class="x-el x-el-label c1-1 c1-2 c1-26 c1-27 c1-4i c1-6k c1-6l c1-6m c1-6n c1-b c1-6a c1-5a c1-2n c1-5f c1-5i c1-5j c1-5k x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="5" aria-label="How can we serve you?" data-ux="InputTextArea" placeholder="How can we serve you?" data-aid="How can we serve you?" class="x-el x-el-textarea c1-1 c1-2 c1-5n c1-5z c1-4 c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-53 c1-6o c1-68 c1-69 c1-6p c1-b c1-6a c1-5a c1-2n c1-6b c1-5c c1-6i c1-6j c1-5f c1-5i c1-5j c1-5k x-d-ux x-d-aid"></textarea></div></div><div style="width:1px;height:1px;visibility:hidden"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/4" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c1-52 c1-1w c1-53 c1-54 c1-55 c1-56 c1-6q c1-58 c1-1x c1-1p c1-25 c1-29 c1-27 c1-26 c1-11 c1-4 c1-b c1-6r c1-4x c1-3i c1-5a c1-6s c1-5c c1-6t c1-5e c1-5f c1-t c1-u c1-5g c1-5h c1-5i c1-5j c1-5k x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div></form></div></div></div></div></div><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-2v c1-18 c1-19 c1-6u c1-1b c1-b c1-c c1-1d c1-1e c1-6v c1-1g c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1i c1-1j c1-5r c1-11 c1-1l c1-1m c1-s c1-1o c1-b c1-c c1-5s c1-5t c1-5u c1-1r c1-1s c1-6w c1-1u c1-d c1-3t c1-3u c1-3v c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-6x c1-1p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-1 c1-2 c1-26 c1-27 c1-5w c1-2j c1-2k c1-18 c1-5x c1-b c1-5y c1-4k c1-2n c1-4l c1-4m c1-4n c1-4o x-d-ux x-d-aid x-d-route">Special Requests?</h4><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4p c1-18 c1-5x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-b c1-7q c1-c c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Do you have dietary concerns? Questions about an upcoming event? Drop us a line, and we'll get back to you soon!</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-26 c1-27 c1-5w c1-2j c1-2k c1-18 c1-5x c1-b c1-5y c1-4k c1-2n c1-4l c1-4m c1-4n c1-4o x-d-ux x-d-aid x-d-route">nextcafr</h4></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-7r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-route="hoursTitle" data-aid="CONTACT_HOURS_TITLE_REND" data-field-route="/hours" class="x-el x-el-h4 c1-1 c1-2 c1-26 c1-27 c1-5w c1-2j c1-2k c1-18 c1-5x c1-b c1-5y c1-4k c1-2n c1-4l c1-4m c1-4n c1-4o x-d-ux x-d-route x-d-aid x-d-field-route">Hours</h4><div data-ux="Block" data-aid="CONTACT_HOURS_REND" data-route="structuredHours" data-field-route="/hours" class="x-el x-el-div c1-1 c1-2 c1-5x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route"><div id="bs-6"><table style="border-spacing:0;text-align:left;display:inline-table"><tr data-aid="CONTACT_HOURS_COLLAPSED_REND" style="cursor:pointer"><td style="padding-right:medium"><p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_LABEL" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4p c1-18 c1-1a c1-b c1-7q c1-c c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-aid">Open today</p></td><td><p typography="BodyAlpha" data-ux="ContentText" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4p c1-18 c1-1a c1-7s c1-7t c1-b c1-7q c1-c c1-2n c1-d c1-e c1-f c1-g x-d-ux"><span rel="" typography="LinkAlpha" data-ux="Link" data-aid="CONTACT_HOURS_COLLAPSED_HR_LABEL" class="x-el x-el-span c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-b c1-2e c1-c c1-2f c1-2g c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-tccl="ux2.CONTACT.contact3.Content.Default.Link.Default.6582.click,click">09:00 am – 05:00 pm</span></p></td><td><p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_ARROW" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4p c1-18 c1-1a c1-b c1-7q c1-c c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><span rel="" typography="LinkAlpha" data-ux="Link" class="x-el x-el-span c1-23 c1-24 c1-25 c1-26 c1-27 c1-14 c1-29 c1-7u c1-b c1-2e c1-c c1-2f c1-2g c1-2h c1-d c1-e c1-f c1-g x-d-ux" data-tccl="ux2.CONTACT.contact3.Group.Default.Link.Default.6583.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px" data-ux="Icon" class="x-el x-el-svg c1-1 c1-2 c1-2s c1-1x c1-7v c1-7w c1-7x c1-p c1-7y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><path fill-rule="evenodd" d="M18.605 7l-6.793 7.024-6.375-7.002L4 8.467 11.768 17l.485-.501L20 8.489z"></path></svg></span></p></td></tr></table></div></div><div typography="BodyAlpha" data-ux="ContentText" data-route="hoursCustomMessage" data-aid="CONTACT_HOURS_CUST_MSG_REND" data-field-route="/hours" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4p c1-18 c1-1a c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-b c1-7q c1-c c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid x-d-field-route x-rt"><p style="margin:0"><span>Monday - Friday: 11am - 9pm</span></p><p style="margin:0"><span>Saturday: 11am - 11pm</span></p><p style="margin:0"><span>Sunday: Closed</span></p></div></div></div></div></div></div></div></div></section> </div></div></div><div id="a6cae965-6436-4e71-9516-b3164addbca2" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-7z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-7z c1-i c1-j c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-3w c1-d c1-3x c1-e c1-3y c1-f c1-3z c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-s c1-b c1-c c1-80 c1-3w c1-d c1-3x c1-e c1-3y c1-f c1-3z c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-1p c1-81 c1-82 c1-b c1-c c1-3w c1-d c1-3x c1-e c1-3y c1-f c1-3z c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-83 c1-1l c1-3q c1-1n c1-3r c1-18 c1-2k c1-1a c1-2j c1-b c1-c c1-20 c1-84 c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="BodyAlpha" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4p c1-18 c1-85 c1-4x c1-b c1-86 c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">nextcafr</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-2v c1-18 c1-2k c1-1a c1-2j c1-1c c1-1p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1i c1-1j c1-3p c1-11 c1-1l c1-3q c1-1n c1-3r c1-b c1-c c1-d c1-87 c1-88 c1-e c1-f c1-g x-d-ux"><div typography="BodyAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4p c1-18 c1-1a c1-b c1-89 c1-c c1-2n c1-d c1-8a c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 nextcafr - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1i c1-1j c1-3p c1-11 c1-1l c1-3q c1-1n c1-3r c1-b c1-c c1-d c1-87 c1-88 c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4p c1-8b c1-1a c1-b c1-89 c1-c c1-2n c1-d c1-8c c1-8d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-8b c1-b c1-8e c1-c c1-2f c1-8f c1-8g c1-d c1-8c c1-8d c1-e c1-f c1-g x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.6584.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.84.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/b847a2a6bad08a8d/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1d60b452de0e239d/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","fonts":["righteous","default",""],"colors":["#ebe7e0"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"7f6ca330-6457-421c-a3b2-83a1ec9a3e78":{"isFlyoutMenu":false,"active":true,"pageId":"7f6ca330-6457-421c-a3b2-83a1ec9a3e78","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme9","paintJob":"MVP"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"nextcafr"},"fontPackLogoId":null,"widgetId":"f88320ef-767e-442f-83b2-951257b081b8","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"f88320ef-767e-442f-83b2-951257b081b8","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"nextcafr"},"fontPackLogoId":null,"widgetId":"f88320ef-767e-442f-83b2-951257b081b8","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"f88320ef-767e-442f-83b2-951257b081b8","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e374870201fcd502/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","typography":"HeadingAlpha","children":"Cooking Up Your New Cravings","scaledFontSizes":["xxlarge","xlarge","large"],"style":{},"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"f88320ef-767e-442f-83b2-951257b081b8","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"f88320ef-767e-442f-83b2-951257b081b8","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Reserve Now","pageId":"7f6ca330-6457-421c-a3b2-83a1ec9a3e78","widgetId":"1dca7283-f4b1-4058-9874-04432e4b61b5"},"data-aid":"HEADER_CTA_BTN","data-field-id":"ctaButton","data-field-route":"\u002FctaButton","data-tccl":"ux2.header.cta_button.click,click","widgetId":"f88320ef-767e-442f-83b2-951257b081b8","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"f88320ef-767e-442f-83b2-951257b081b8","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/8f0cc076da309bca/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-5'] = {"renderMode":"PUBLISH","fonts":["righteous","default",""],"colors":["#ebe7e0"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"7f6ca330-6457-421c-a3b2-83a1ec9a3e78":{"isFlyoutMenu":false,"active":true,"pageId":"7f6ca330-6457-421c-a3b2-83a1ec9a3e78","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme9"};</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/305f2875-f0e5-46cb-b5a2-e8af089ea1e2/gpub/441efe946da8bcc7/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/f4db9a7a498eeadb/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/305f2875-f0e5-46cb-b5a2-e8af089ea1e2/gpub/8cb482321c422371/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2f76d8ff4bd4eba1/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/305f2875-f0e5-46cb-b5a2-e8af089ea1e2/gpub/53aedfc4ea2868d0/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-6567').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"305f2875-f0e5-46cb-b5a2-e8af089ea1e2"}),_trfd.push({"pd":"2020-03-03T13:08:30.713Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
