<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php echo $pageTitle; ?></title>

  <meta name="description" content="<?php echo $pageDescription; ?>">
  <meta name="keywords" content="<?php echo $pageKeywords; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

  <link href="<?php echo $assets?>/css/fonts.css?v=2" rel="stylesheet">

  <meta name="robots" content="noindex,nofollow"/>

  <?php $cssVersion = "9" ?>

  <link rel="stylesheet" href="<?php echo $assets; ?>/css/normalize.css">
  <link rel="stylesheet" href="bower_components/jQuery-ui-Slider-Pips/dist/jquery-ui-slider-pips.css">
  <link rel="stylesheet" href="<?php echo $assets; ?>/css/style.css?v=<?php echo date('his'); ?>">

  <link rel="shortcut icon" href="<?php echo $favIcon; ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo $favIcon; ?>" type="image/x-icon">

  <script src="<?php echo $assets; ?>/../bower_components/jquery/dist/jquery.min.js"></script>

  <script>

  /*! grunt-grunticon Stylesheet Loader - v2.1.2 | https://github.com/filamentgroup/grunticon | (c) 2015 Scott Jehl, Filament Group, Inc. | MIT license. */

  (function(e){function t(t,n,r,o){"use strict";function a(){for(var e,n=0;u.length>n;n++)u[n].href&&u[n].href.indexOf(t.replace(/\.+\//g,''))>-1&&(e=!0);e?i.media=r||"all":setTimeout(a)}var i=e.document.createElement("link"),l=n||e.document.getElementsByTagName("script")[0],u=e.document.styleSheets;return i.rel="stylesheet",i.href=t,i.media="only x",i.onload=o||null,l.parentNode.insertBefore(i,l),a(),i}var n=function(r,o){"use strict";if(r&&3===r.length){var a=e.navigator,i=e.Image,l=!(!document.createElementNS||!document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||e.opera&&-1===a.userAgent.indexOf("Chrome")||-1!==a.userAgent.indexOf("Series40")),u=new i;u.onerror=function(){n.method="png",n.href=r[2],t(r[2])},u.onload=function(){var e=1===u.width&&1===u.height,a=r[e&&l?0:e?1:2];n.method=e&&l?"svg":e?"datapng":"png",n.href=a,t(a,null,null,o)},u.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",document.documentElement.className+=" grunticon"}};n.loadCSS=t,e.grunticon=n})(this);(function(e,t){"use strict";var n=t.document,r="grunticon:",o=function(e){if(n.attachEvent?"complete"===n.readyState:"loading"!==n.readyState)e();else{var t=!1;n.addEventListener("readystatechange",function(){t||(t=!0,e())},!1)}},a=function(e){return t.document.querySelector('link[href$="'+e+'"]')},c=function(e){var t,n,o,a,c,i,u={};if(t=e.sheet,!t)return u;n=t.cssRules?t.cssRules:t.rules;for(var l=0;n.length>l;l++)o=n[l].cssText,a=r+n[l].selectorText,c=o.split(");")[0].match(/US\-ASCII\,([^"']+)/),c&&c[1]&&(i=decodeURIComponent(c[1]),u[a]=i);return u},i=function(e){var t,o,a;o="data-grunticon-embed";for(var c in e)if(a=c.slice(r.length),t=n.querySelectorAll(a+"["+o+"]"),t.length)for(var i=0;t.length>i;i++)t[i].innerHTML=e[c],t[i].style.backgroundImage="none",t[i].removeAttribute(o);return t},u=function(t){"svg"===e.method&&o(function(){i(c(a(e.href))),"function"==typeof t&&t()})};e.embedIcons=i,e.getCSS=a,e.getIcons=c,e.ready=o,e.svgLoadedCallback=u,e.embedSVG=u})(grunticon,this);

  grunticon(["<?php echo $assets?>/css/icons.data.svg.css?v=10", "<?php echo $assets?>/css/icons.data.png.css?v=10", "<?php echo $assets?>/css/icons.fallback.css?v=10"]);

  </script>
  <noscript><link href="<?php echo $assets?>/css/icons.fallback.css?v=10" rel="stylesheet"></noscript>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
