
<!DOCTYPE html>
<html dir="ltr" lang="bg-BG">

<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
		<script data-cfasync="false" data-no-defer="1" data-no-minify="1" data-no-optimize="1">var ewww_webp_supported=!1;function check_webp_feature(A,e){var w;e=void 0!==e?e:function(){},ewww_webp_supported?e(ewww_webp_supported):((w=new Image).onload=function(){ewww_webp_supported=0<w.width&&0<w.height,e&&e(ewww_webp_supported)},w.onerror=function(){e&&e(!1)},w.src="data:image/webp;base64,"+{alpha:"UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA=="}[A])}check_webp_feature("alpha");</script><script data-cfasync="false" data-no-defer="1" data-no-minify="1" data-no-optimize="1">var Arrive=function(c,w){"use strict";if(c.MutationObserver&&"undefined"!=typeof HTMLElement){var r,a=0,u=(r=HTMLElement.prototype.matches||HTMLElement.prototype.webkitMatchesSelector||HTMLElement.prototype.mozMatchesSelector||HTMLElement.prototype.msMatchesSelector,{matchesSelector:function(e,t){return e instanceof HTMLElement&&r.call(e,t)},addMethod:function(e,t,r){var a=e[t];e[t]=function(){return r.length==arguments.length?r.apply(this,arguments):"function"==typeof a?a.apply(this,arguments):void 0}},callCallbacks:function(e,t){t&&t.options.onceOnly&&1==t.firedElems.length&&(e=[e[0]]);for(var r,a=0;r=e[a];a++)r&&r.callback&&r.callback.call(r.elem,r.elem);t&&t.options.onceOnly&&1==t.firedElems.length&&t.me.unbindEventWithSelectorAndCallback.call(t.target,t.selector,t.callback)},checkChildNodesRecursively:function(e,t,r,a){for(var i,n=0;i=e[n];n++)r(i,t,a)&&a.push({callback:t.callback,elem:i}),0<i.childNodes.length&&u.checkChildNodesRecursively(i.childNodes,t,r,a)},mergeArrays:function(e,t){var r,a={};for(r in e)e.hasOwnProperty(r)&&(a[r]=e[r]);for(r in t)t.hasOwnProperty(r)&&(a[r]=t[r]);return a},toElementsArray:function(e){return e=void 0!==e&&("number"!=typeof e.length||e===c)?[e]:e}}),e=(l.prototype.addEvent=function(e,t,r,a){a={target:e,selector:t,options:r,callback:a,firedElems:[]};return this._beforeAdding&&this._beforeAdding(a),this._eventsBucket.push(a),a},l.prototype.removeEvent=function(e){for(var t,r=this._eventsBucket.length-1;t=this._eventsBucket[r];r--)e(t)&&(this._beforeRemoving&&this._beforeRemoving(t),(t=this._eventsBucket.splice(r,1))&&t.length&&(t[0].callback=null))},l.prototype.beforeAdding=function(e){this._beforeAdding=e},l.prototype.beforeRemoving=function(e){this._beforeRemoving=e},l),t=function(i,n){var o=new e,l=this,s={fireOnAttributesModification:!1};return o.beforeAdding(function(t){var e=t.target;e!==c.document&&e!==c||(e=document.getElementsByTagName("html")[0]);var r=new MutationObserver(function(e){n.call(this,e,t)}),a=i(t.options);r.observe(e,a),t.observer=r,t.me=l}),o.beforeRemoving(function(e){e.observer.disconnect()}),this.bindEvent=function(e,t,r){t=u.mergeArrays(s,t);for(var a=u.toElementsArray(this),i=0;i<a.length;i++)o.addEvent(a[i],e,t,r)},this.unbindEvent=function(){var r=u.toElementsArray(this);o.removeEvent(function(e){for(var t=0;t<r.length;t++)if(this===w||e.target===r[t])return!0;return!1})},this.unbindEventWithSelectorOrCallback=function(r){var a=u.toElementsArray(this),i=r,e="function"==typeof r?function(e){for(var t=0;t<a.length;t++)if((this===w||e.target===a[t])&&e.callback===i)return!0;return!1}:function(e){for(var t=0;t<a.length;t++)if((this===w||e.target===a[t])&&e.selector===r)return!0;return!1};o.removeEvent(e)},this.unbindEventWithSelectorAndCallback=function(r,a){var i=u.toElementsArray(this);o.removeEvent(function(e){for(var t=0;t<i.length;t++)if((this===w||e.target===i[t])&&e.selector===r&&e.callback===a)return!0;return!1})},this},i=new function(){var s={fireOnAttributesModification:!1,onceOnly:!1,existing:!1};function n(e,t,r){return!(!u.matchesSelector(e,t.selector)||(e._id===w&&(e._id=a++),-1!=t.firedElems.indexOf(e._id)))&&(t.firedElems.push(e._id),!0)}var c=(i=new t(function(e){var t={attributes:!1,childList:!0,subtree:!0};return e.fireOnAttributesModification&&(t.attributes=!0),t},function(e,i){e.forEach(function(e){var t=e.addedNodes,r=e.target,a=[];null!==t&&0<t.length?u.checkChildNodesRecursively(t,i,n,a):"attributes"===e.type&&n(r,i)&&a.push({callback:i.callback,elem:r}),u.callCallbacks(a,i)})})).bindEvent;return i.bindEvent=function(e,t,r){t=void 0===r?(r=t,s):u.mergeArrays(s,t);var a=u.toElementsArray(this);if(t.existing){for(var i=[],n=0;n<a.length;n++)for(var o=a[n].querySelectorAll(e),l=0;l<o.length;l++)i.push({callback:r,elem:o[l]});if(t.onceOnly&&i.length)return r.call(i[0].elem,i[0].elem);setTimeout(u.callCallbacks,1,i)}c.call(this,e,t,r)},i},o=new function(){var a={};function i(e,t){return u.matchesSelector(e,t.selector)}var n=(o=new t(function(){return{childList:!0,subtree:!0}},function(e,r){e.forEach(function(e){var t=e.removedNodes,e=[];null!==t&&0<t.length&&u.checkChildNodesRecursively(t,r,i,e),u.callCallbacks(e,r)})})).bindEvent;return o.bindEvent=function(e,t,r){t=void 0===r?(r=t,a):u.mergeArrays(a,t),n.call(this,e,t,r)},o};d(HTMLElement.prototype),d(NodeList.prototype),d(HTMLCollection.prototype),d(HTMLDocument.prototype),d(Window.prototype);var n={};return s(i,n,"unbindAllArrive"),s(o,n,"unbindAllLeave"),n}function l(){this._eventsBucket=[],this._beforeAdding=null,this._beforeRemoving=null}function s(e,t,r){u.addMethod(t,r,e.unbindEvent),u.addMethod(t,r,e.unbindEventWithSelectorOrCallback),u.addMethod(t,r,e.unbindEventWithSelectorAndCallback)}function d(e){e.arrive=i.bindEvent,s(i,e,"unbindArrive"),e.leave=o.bindEvent,s(o,e,"unbindLeave")}}(window,void 0),ewww_webp_supported=!1;function check_webp_feature(e,t){var r;ewww_webp_supported?t(ewww_webp_supported):((r=new Image).onload=function(){ewww_webp_supported=0<r.width&&0<r.height,t(ewww_webp_supported)},r.onerror=function(){t(!1)},r.src="data:image/webp;base64,"+{alpha:"UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",animation:"UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"}[e])}function ewwwLoadImages(e){if(e){for(var t=document.querySelectorAll(".batch-image img, .image-wrapper a, .ngg-pro-masonry-item a, .ngg-galleria-offscreen-seo-wrapper a"),r=0,a=t.length;r<a;r++)ewwwAttr(t[r],"data-src",t[r].getAttribute("data-webp")),ewwwAttr(t[r],"data-thumbnail",t[r].getAttribute("data-webp-thumbnail"));for(var i=document.querySelectorAll("div.woocommerce-product-gallery__image"),r=0,a=i.length;r<a;r++)ewwwAttr(i[r],"data-thumb",i[r].getAttribute("data-webp-thumb"))}for(var n=document.querySelectorAll("video"),r=0,a=n.length;r<a;r++)ewwwAttr(n[r],"poster",e?n[r].getAttribute("data-poster-webp"):n[r].getAttribute("data-poster-image"));for(var o,l=document.querySelectorAll("img.ewww_webp_lazy_load"),r=0,a=l.length;r<a;r++)e&&(ewwwAttr(l[r],"data-lazy-srcset",l[r].getAttribute("data-lazy-srcset-webp")),ewwwAttr(l[r],"data-srcset",l[r].getAttribute("data-srcset-webp")),ewwwAttr(l[r],"data-lazy-src",l[r].getAttribute("data-lazy-src-webp")),ewwwAttr(l[r],"data-src",l[r].getAttribute("data-src-webp")),ewwwAttr(l[r],"data-orig-file",l[r].getAttribute("data-webp-orig-file")),ewwwAttr(l[r],"data-medium-file",l[r].getAttribute("data-webp-medium-file")),ewwwAttr(l[r],"data-large-file",l[r].getAttribute("data-webp-large-file")),null!=(o=l[r].getAttribute("srcset"))&&!1!==o&&o.includes("R0lGOD")&&ewwwAttr(l[r],"src",l[r].getAttribute("data-lazy-src-webp"))),l[r].className=l[r].className.replace(/\bewww_webp_lazy_load\b/,"");for(var s=document.querySelectorAll(".ewww_webp"),r=0,a=s.length;r<a;r++)e?(ewwwAttr(s[r],"srcset",s[r].getAttribute("data-srcset-webp")),ewwwAttr(s[r],"src",s[r].getAttribute("data-src-webp")),ewwwAttr(s[r],"data-orig-file",s[r].getAttribute("data-webp-orig-file")),ewwwAttr(s[r],"data-medium-file",s[r].getAttribute("data-webp-medium-file")),ewwwAttr(s[r],"data-large-file",s[r].getAttribute("data-webp-large-file")),ewwwAttr(s[r],"data-large_image",s[r].getAttribute("data-webp-large_image")),ewwwAttr(s[r],"data-src",s[r].getAttribute("data-webp-src"))):(ewwwAttr(s[r],"srcset",s[r].getAttribute("data-srcset-img")),ewwwAttr(s[r],"src",s[r].getAttribute("data-src-img"))),s[r].className=s[r].className.replace(/\bewww_webp\b/,"ewww_webp_loaded");window.jQuery&&jQuery.fn.isotope&&jQuery.fn.imagesLoaded&&(jQuery(".fusion-posts-container-infinite").imagesLoaded(function(){jQuery(".fusion-posts-container-infinite").hasClass("isotope")&&jQuery(".fusion-posts-container-infinite").isotope()}),jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").imagesLoaded(function(){jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").isotope()}))}function ewwwWebPInit(e){ewwwLoadImages(e),ewwwNggLoadGalleries(e),document.arrive(".ewww_webp",function(){ewwwLoadImages(e)}),document.arrive(".ewww_webp_lazy_load",function(){ewwwLoadImages(e)}),document.arrive("videos",function(){ewwwLoadImages(e)}),"loading"==document.readyState?document.addEventListener("DOMContentLoaded",ewwwJSONParserInit):("undefined"!=typeof galleries&&ewwwNggParseGalleries(e),ewwwWooParseVariations(e))}function ewwwAttr(e,t,r){null!=r&&!1!==r&&e.setAttribute(t,r)}function ewwwJSONParserInit(){"undefined"!=typeof galleries&&check_webp_feature("alpha",ewwwNggParseGalleries),check_webp_feature("alpha",ewwwWooParseVariations)}function ewwwWooParseVariations(e){if(e)for(var t=document.querySelectorAll("form.variations_form"),r=0,a=t.length;r<a;r++){var i=t[r].getAttribute("data-product_variations"),n=!1;try{for(var o in i=JSON.parse(i))void 0!==i[o]&&void 0!==i[o].image&&(void 0!==i[o].image.src_webp&&(i[o].image.src=i[o].image.src_webp,n=!0),void 0!==i[o].image.srcset_webp&&(i[o].image.srcset=i[o].image.srcset_webp,n=!0),void 0!==i[o].image.full_src_webp&&(i[o].image.full_src=i[o].image.full_src_webp,n=!0),void 0!==i[o].image.gallery_thumbnail_src_webp&&(i[o].image.gallery_thumbnail_src=i[o].image.gallery_thumbnail_src_webp,n=!0),void 0!==i[o].image.thumb_src_webp&&(i[o].image.thumb_src=i[o].image.thumb_src_webp,n=!0));n&&ewwwAttr(t[r],"data-product_variations",JSON.stringify(i))}catch(e){}}}function ewwwNggParseGalleries(e){if(e)for(var t in galleries){var r=galleries[t];galleries[t].images_list=ewwwNggParseImageList(r.images_list)}}function ewwwNggLoadGalleries(e){e&&document.addEventListener("ngg.galleria.themeadded",function(e,t){window.ngg_galleria._create_backup=window.ngg_galleria.create,window.ngg_galleria.create=function(e,t){var r=$(e).data("id");return galleries["gallery_"+r].images_list=ewwwNggParseImageList(galleries["gallery_"+r].images_list),window.ngg_galleria._create_backup(e,t)}})}function ewwwNggParseImageList(e){for(var t in e){var r=e[t];if(void 0!==r["image-webp"]&&(e[t].image=r["image-webp"],delete e[t]["image-webp"]),void 0!==r["thumb-webp"]&&(e[t].thumb=r["thumb-webp"],delete e[t]["thumb-webp"]),void 0!==r.full_image_webp&&(e[t].full_image=r.full_image_webp,delete e[t].full_image_webp),void 0!==r.srcsets)for(var a in r.srcsets)nggSrcset=r.srcsets[a],void 0!==r.srcsets[a+"-webp"]&&(e[t].srcsets[a]=r.srcsets[a+"-webp"],delete e[t].srcsets[a+"-webp"]);if(void 0!==r.full_srcsets)for(var i in r.full_srcsets)nggFSrcset=r.full_srcsets[i],void 0!==r.full_srcsets[i+"-webp"]&&(e[t].full_srcsets[i]=r.full_srcsets[i+"-webp"],delete e[t].full_srcsets[i+"-webp"])}return e}check_webp_feature("alpha",ewwwWebPInit);</script>				<script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
			<title>Марки | icepoint.eu</title>
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	
		<!-- All in One SEO 4.9.5.1 - aioseo.com -->
	<meta name="robots" content="max-image-preview:large" />
	<meta name="google-site-verification" content="9A7eRajdBZAVj-upIHGHE0ndktrZ7g7VQ8WK2Gst5JM" />
	<link rel="canonical" href="https://icepoint.eu/brands/" />
	<meta name="generator" content="All in One SEO (AIOSEO) 4.9.5.1" />
		<script type="application/ld+json" class="aioseo-schema">
			{"@context":"https:\/\/schema.org","@graph":[{"@type":"BreadcrumbList","@id":"https:\/\/icepoint.eu\/brands\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/icepoint.eu#listItem","position":1,"name":"Home","item":"https:\/\/icepoint.eu","nextItem":{"@type":"ListItem","@id":"https:\/\/icepoint.eu\/brands\/#listItem","name":"\u041c\u0430\u0440\u043a\u0438"}},{"@type":"ListItem","@id":"https:\/\/icepoint.eu\/brands\/#listItem","position":2,"name":"\u041c\u0430\u0440\u043a\u0438","previousItem":{"@type":"ListItem","@id":"https:\/\/icepoint.eu#listItem","name":"Home"}}]},{"@type":"Organization","@id":"https:\/\/icepoint.eu\/#organization","name":"icepoint.eu","description":"\u041e\u0444\u0438\u0446\u0438\u0430\u043b\u0435\u043d \u043f\u0440\u0435\u0434\u0441\u0442\u0430\u0432\u0438\u0442\u0435\u043b \u043d\u0430 BOGNER, SPORTALM, LA REVECHE \u0438 MONCLER \u0437\u0430 \u0411\u044a\u043b\u0433\u0430\u0440\u0438\u044f","url":"https:\/\/icepoint.eu\/","logo":{"@type":"ImageObject","url":"https:\/\/icepoint.eu\/wp-content\/uploads\/2016\/11\/cropped-ice-point-logo-black@2x-1.png","@id":"https:\/\/icepoint.eu\/brands\/#organizationLogo","width":400,"height":89},"image":{"@id":"https:\/\/icepoint.eu\/brands\/#organizationLogo"},"sameAs":["https:\/\/www.facebook.com\/profile.php?id=100063623227729","https:\/\/www.instagram.com\/ice___point\/"]},{"@type":"WebPage","@id":"https:\/\/icepoint.eu\/brands\/#webpage","url":"https:\/\/icepoint.eu\/brands\/","name":"\u041c\u0430\u0440\u043a\u0438 | icepoint.eu","inLanguage":"bg-BG","isPartOf":{"@id":"https:\/\/icepoint.eu\/#website"},"breadcrumb":{"@id":"https:\/\/icepoint.eu\/brands\/#breadcrumblist"},"datePublished":"2016-12-08T13:09:32+02:00","dateModified":"2022-11-08T10:45:17+02:00"},{"@type":"WebSite","@id":"https:\/\/icepoint.eu\/#website","url":"https:\/\/icepoint.eu\/","name":"icepoint.eu","description":"\u041e\u0444\u0438\u0446\u0438\u0430\u043b\u0435\u043d \u043f\u0440\u0435\u0434\u0441\u0442\u0430\u0432\u0438\u0442\u0435\u043b \u043d\u0430 BOGNER, SPORTALM, LA REVECHE \u0438 MONCLER \u0437\u0430 \u0411\u044a\u043b\u0433\u0430\u0440\u0438\u044f","inLanguage":"bg-BG","publisher":{"@id":"https:\/\/icepoint.eu\/#organization"}}]}
		</script>
		<!-- All in One SEO -->

<link rel="alternate" type="application/rss+xml" title="icepoint.eu &raquo; Поток" href="https://icepoint.eu/feed/" />
<link rel="alternate" type="application/rss+xml" title="icepoint.eu &raquo; поток за коментари" href="https://icepoint.eu/comments/feed/" />
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/icepoint.eu\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.5"}};
/*! This file is auto-generated */
!function(s,n){var o,i,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),a=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===a[t]})}function u(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);for(var n=e.getImageData(16,16,1,1),a=0;a<n.data.length;a++)if(0!==n.data[a])return!1;return!0}function f(e,t,n,a){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!a(e,"\ud83e\udedf")}return!1}function g(e,t,n,a){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):s.createElement("canvas"),o=r.getContext("2d",{willReadFrequently:!0}),i=(o.textBaseline="top",o.font="600 32px Arial",{});return e.forEach(function(e){i[e]=t(o,e,n,a)}),i}function t(e){var t=s.createElement("script");t.src=e,t.defer=!0,s.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",i=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){s.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+g.toString()+"("+[JSON.stringify(i),f.toString(),p.toString(),u.toString()].join(",")+"));",a=new Blob([e],{type:"text/javascript"}),r=new Worker(URL.createObjectURL(a),{name:"wpTestEmojiSupports"});return void(r.onmessage=function(e){c(n=e.data),r.terminate(),t(n)})}catch(e){}c(n=g(i,f,p,u))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<style id='wp-emoji-styles-inline-css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<style id='classic-theme-styles-inline-css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<link rel='stylesheet' id='aioseo/css/src/vue/standalone/blocks/table-of-contents/global.scss-css' href='https://icepoint.eu/wp-content/plugins/all-in-one-seo-pack/dist/Lite/assets/css/table-of-contents/global.e90f6d47.css?ver=4.9.5.1' media='all' />
<style id='mypos-checkout-style-inline-css'>
.wp-block-mypos-checkout{}

</style>
<link rel='stylesheet' id='jquery-selectBox-css' href='https://icepoint.eu/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0' media='all' />
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css' href='//icepoint.eu/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css?ver=3.1.6' media='all' />
<link rel='stylesheet' id='yith-wcwl-main-css' href='https://icepoint.eu/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css?ver=4.13.0' media='all' />
<style id='yith-wcwl-main-inline-css'>
 :root { --rounded-corners-radius: 16px; --add-to-cart-rounded-corners-radius: 16px; --color-headers-background: #F4F4F4; --feedback-duration: 3s } 
 :root { --rounded-corners-radius: 16px; --add-to-cart-rounded-corners-radius: 16px; --color-headers-background: #F4F4F4; --feedback-duration: 3s } 
</style>
<style id='global-styles-inline-css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--neve-link-color: var(--nv-primary-accent);--wp--preset--color--neve-link-hover-color: var(--nv-secondary-accent);--wp--preset--color--nv-site-bg: var(--nv-site-bg);--wp--preset--color--nv-light-bg: var(--nv-light-bg);--wp--preset--color--nv-dark-bg: var(--nv-dark-bg);--wp--preset--color--neve-text-color: var(--nv-text-color);--wp--preset--color--nv-text-dark-bg: var(--nv-text-dark-bg);--wp--preset--color--nv-c-1: var(--nv-c-1);--wp--preset--color--nv-c-2: var(--nv-c-2);--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-neve-link-color-color{color: var(--wp--preset--color--neve-link-color) !important;}.has-neve-link-hover-color-color{color: var(--wp--preset--color--neve-link-hover-color) !important;}.has-nv-site-bg-color{color: var(--wp--preset--color--nv-site-bg) !important;}.has-nv-light-bg-color{color: var(--wp--preset--color--nv-light-bg) !important;}.has-nv-dark-bg-color{color: var(--wp--preset--color--nv-dark-bg) !important;}.has-neve-text-color-color{color: var(--wp--preset--color--neve-text-color) !important;}.has-nv-text-dark-bg-color{color: var(--wp--preset--color--nv-text-dark-bg) !important;}.has-nv-c-1-color{color: var(--wp--preset--color--nv-c-1) !important;}.has-nv-c-2-color{color: var(--wp--preset--color--nv-c-2) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-neve-link-color-background-color{background-color: var(--wp--preset--color--neve-link-color) !important;}.has-neve-link-hover-color-background-color{background-color: var(--wp--preset--color--neve-link-hover-color) !important;}.has-nv-site-bg-background-color{background-color: var(--wp--preset--color--nv-site-bg) !important;}.has-nv-light-bg-background-color{background-color: var(--wp--preset--color--nv-light-bg) !important;}.has-nv-dark-bg-background-color{background-color: var(--wp--preset--color--nv-dark-bg) !important;}.has-neve-text-color-background-color{background-color: var(--wp--preset--color--neve-text-color) !important;}.has-nv-text-dark-bg-background-color{background-color: var(--wp--preset--color--nv-text-dark-bg) !important;}.has-nv-c-1-background-color{background-color: var(--wp--preset--color--nv-c-1) !important;}.has-nv-c-2-background-color{background-color: var(--wp--preset--color--nv-c-2) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-neve-link-color-border-color{border-color: var(--wp--preset--color--neve-link-color) !important;}.has-neve-link-hover-color-border-color{border-color: var(--wp--preset--color--neve-link-hover-color) !important;}.has-nv-site-bg-border-color{border-color: var(--wp--preset--color--nv-site-bg) !important;}.has-nv-light-bg-border-color{border-color: var(--wp--preset--color--nv-light-bg) !important;}.has-nv-dark-bg-border-color{border-color: var(--wp--preset--color--nv-dark-bg) !important;}.has-neve-text-color-border-color{border-color: var(--wp--preset--color--neve-text-color) !important;}.has-nv-text-dark-bg-border-color{border-color: var(--wp--preset--color--nv-text-dark-bg) !important;}.has-nv-c-1-border-color{border-color: var(--wp--preset--color--nv-c-1) !important;}.has-nv-c-2-border-color{border-color: var(--wp--preset--color--nv-c-2) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='woo-product-category-discount-css' href='https://icepoint.eu/wp-content/plugins/woo-product-category-discount/public/css/woo-product-category-discount-public.css?ver=5.15' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css' href='https://icepoint.eu/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=10.5.3' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='https://icepoint.eu/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=10.5.3' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css' href='https://icepoint.eu/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=10.5.3' media='all' />
<style id='woocommerce-inline-inline-css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='woo-bg-css-frontend-css' href='https://icepoint.eu/wp-content/plugins/bulgarisation-for-woocommerce/dist/styles/frontend.min.css?ver=6.8.5' media='all' />
<link rel='stylesheet' id='trp-language-switcher-style-css' href='https://icepoint.eu/wp-content/plugins/translatepress-multilingual/assets/css/trp-language-switcher.css?ver=3.1.3' media='all' />
<link rel='stylesheet' id='megamenu-css' href='https://icepoint.eu/wp-content/uploads/maxmegamenu/style.css?ver=c8d9c5' media='all' />
<link rel='stylesheet' id='dashicons-css' href='https://icepoint.eu/wp-includes/css/dashicons.min.css?ver=6.8.5' media='all' />
<style id='dashicons-inline-css'>
[data-font="Dashicons"]:before {font-family: 'Dashicons' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
</style>
<link rel='stylesheet' id='woo-variation-swatches-css' href='https://icepoint.eu/wp-content/plugins/woo-variation-swatches/assets/css/frontend.min.css?ver=2.2.3' media='all' />
<style id='woo-variation-swatches-inline-css'>
:root {
--wvs-tick:url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 2px rgb(0 0 0 / .8))' xmlns='http://www.w3.org/2000/svg'  viewBox='0 0 30 30'%3E%3Cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M4 16L11 23 27 7'/%3E%3C/svg%3E");

--wvs-cross:url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 5px rgb(255 255 255 / .6))' xmlns='http://www.w3.org/2000/svg' width='72px' height='72px' viewBox='0 0 24 24'%3E%3Cpath fill='none' stroke='%23ff3a3a' stroke-linecap='round' stroke-width='0.6' d='M5 5L19 19M19 5L5 19'/%3E%3C/svg%3E");
--wvs-single-product-item-width:30px;
--wvs-single-product-item-height:30px;
--wvs-single-product-item-font-size:16px}
</style>
<link rel='stylesheet' id='neve-woocommerce-css' href='https://icepoint.eu/wp-content/themes/neve/assets/css/woocommerce.min.css?ver=4.2.2' media='all' />
<link rel='stylesheet' id='neve-style-css' href='https://icepoint.eu/wp-content/themes/neve/style-main-new.min.css?ver=4.2.2' media='all' />
<style id='neve-style-inline-css'>
.is-menu-sidebar .header-menu-sidebar { visibility: visible; }.is-menu-sidebar.menu_sidebar_slide_left .header-menu-sidebar { transform: translate3d(0, 0, 0); left: 0; }.is-menu-sidebar.menu_sidebar_slide_right .header-menu-sidebar { transform: translate3d(0, 0, 0); right: 0; }.is-menu-sidebar.menu_sidebar_pull_right .header-menu-sidebar, .is-menu-sidebar.menu_sidebar_pull_left .header-menu-sidebar { transform: translateX(0); }.is-menu-sidebar.menu_sidebar_dropdown .header-menu-sidebar { height: auto; }.is-menu-sidebar.menu_sidebar_dropdown .header-menu-sidebar-inner { max-height: 400px; padding: 20px 0; }.is-menu-sidebar.menu_sidebar_full_canvas .header-menu-sidebar { opacity: 1; }.header-menu-sidebar .menu-item-nav-search:not(.floating) { pointer-events: none; }.header-menu-sidebar .menu-item-nav-search .is-menu-sidebar { pointer-events: unset; }@media screen and (max-width: 960px) { .builder-item.cr .item--inner { --textalign: center; --justify: center; } }
.nv-meta-list li.meta:not(:last-child):after { content:"/" }.nv-meta-list .no-mobile{
			display:none;
		}.nv-meta-list li.last::after{
			content: ""!important;
		}@media (min-width: 769px) {
			.nv-meta-list .no-mobile {
				display: inline-block;
			}
			.nv-meta-list li.last:not(:last-child)::after {
		 		content: "/" !important;
			}
		}
 :root{ --container: 748px;--postwidth:100%; --primarybtnbg: var(--nv-primary-accent); --primarybtnhoverbg: var(--nv-primary-accent); --primarybtncolor: #fff; --secondarybtncolor: var(--nv-primary-accent); --primarybtnhovercolor: #fff; --secondarybtnhovercolor: var(--nv-primary-accent);--primarybtnborderradius:3px;--secondarybtnborderradius:3px;--secondarybtnborderwidth:3px;--btnpadding:13px 15px;--primarybtnpadding:13px 15px;--secondarybtnpadding:calc(13px - 3px) calc(15px - 3px); --bodyfontfamily: Arial,Helvetica,sans-serif; --bodyfontsize: 15px; --bodylineheight: 1.6; --bodyletterspacing: 0px; --bodyfontweight: 400; --h1fontsize: 36px; --h1fontweight: 700; --h1lineheight: 1.2; --h1letterspacing: 0px; --h1texttransform: none; --h2fontsize: 28px; --h2fontweight: 700; --h2lineheight: 1.3; --h2letterspacing: 0px; --h2texttransform: none; --h3fontsize: 24px; --h3fontweight: 700; --h3lineheight: 1.4; --h3letterspacing: 0px; --h3texttransform: none; --h4fontsize: 20px; --h4fontweight: 700; --h4lineheight: 1.6; --h4letterspacing: 0px; --h4texttransform: none; --h5fontsize: 16px; --h5fontweight: 700; --h5lineheight: 1.6; --h5letterspacing: 0px; --h5texttransform: none; --h6fontsize: 14px; --h6fontweight: 700; --h6lineheight: 1.6; --h6letterspacing: 0px; --h6texttransform: none;--formfieldborderwidth:2px;--formfieldborderradius:3px; --formfieldbgcolor: var(--nv-site-bg); --formfieldbordercolor: #dddddd; --formfieldcolor: var(--nv-text-color);--formfieldpadding:10px 12px; } .nv-index-posts{ --borderradius:0px; } .single-post-container .alignfull > [class*="__inner-container"], .single-post-container .alignwide > [class*="__inner-container"]{ max-width:718px } .single-product .alignfull > [class*="__inner-container"], .single-product .alignwide > [class*="__inner-container"]{ max-width:718px } .nv-meta-list{ --avatarsize: 20px; } .single .nv-meta-list{ --avatarsize: 20px; } .nv-post-cover{ --height: 250px;--padding:40px 15px;--justify: flex-start; --textalign: left; --valign: center; } .nv-post-cover .nv-title-meta-wrap, .nv-page-title-wrap, .entry-header{ --textalign: left; } .nv-is-boxed.nv-title-meta-wrap{ --padding:40px 15px; --bgcolor: var(--nv-dark-bg); } .nv-overlay{ --opacity: 50; --blendmode: normal; } .nv-is-boxed.nv-comments-wrap{ --padding:20px; } .nv-is-boxed.comment-respond{ --padding:20px; } .single:not(.single-product), .page{ --c-vspace:0 0 0 0;; } .scroll-to-top{ --color: var(--nv-text-dark-bg);--padding:8px 10px; --borderradius: 3px; --bgcolor: var(--nv-primary-accent); --hovercolor: var(--nv-text-dark-bg); --hoverbgcolor: var(--nv-primary-accent);--size:16px; } .global-styled{ --bgcolor: var(--nv-site-bg); } .header-top{ --rowbcolor: var(--nv-light-bg); --color: var(--nv-text-color); --bgcolor: var(--nv-site-bg); } .header-main{ --rowbcolor: var(--nv-light-bg); --color: var(--nv-text-color); --bgcolor: var(--nv-site-bg); } .header-bottom{ --rowbcolor: var(--nv-light-bg); --color: var(--nv-text-color); --bgcolor: var(--nv-site-bg); } .header-menu-sidebar-bg{ --justify: flex-start; --textalign: left;--flexg: 1;--wrapdropdownwidth: auto; --color: var(--nv-text-color); --bgcolor: var(--nv-site-bg); } .header-menu-sidebar{ width: 360px; } .builder-item--logo{ --maxwidth: 120px; --fs: 24px;--padding:10px 0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--nav-icon,.header-menu-sidebar .close-sidebar-panel .navbar-toggle{ --borderradius:0; } .builder-item--nav-icon{ --label-margin:0 5px 0 0;;--padding:10px 15px;--margin:0; } .builder-item--primary-menu{ --hovercolor: var(--nv-secondary-accent); --hovertextcolor: var(--nv-text-color); --activecolor: var(--nv-primary-accent); --spacing: 20px; --height: 25px;--padding:0;--margin:0; --fontsize: 1em; --lineheight: 1.6em; --letterspacing: 0px; --fontweight: 500; --texttransform: none; --iconsize: 1em; } .hfg-is-group.has-primary-menu .inherit-ff{ --inheritedfw: 500; } .builder-item--header_search_responsive{ --iconsize: 20px; --formfieldfontsize: 14px;--formfieldborderwidth:2px;--formfieldborderradius:2px; --height: 40px;--padding:0 10px;--margin:0; } .builder-item--header_cart_icon{ --iconsize: 20px; --labelsize: 15px;--padding:0 10px;--margin:0; } .footer-top-inner .row{ grid-template-columns:1fr 1fr 1fr; --valign: flex-start; } .footer-top{ --rowbcolor: var(--nv-light-bg); --color: var(--nv-text-color);--bgimage:url("https://icepoint.eu/wp-content/uploads/2021/07/sp-mountains-footer.jpg");--bgposition:50% 50%;;--bgoverlayopacity:0.5; } .footer-main-inner .row{ grid-template-columns:1fr 1fr 1fr; --valign: flex-start; } .footer-main{ --rowbcolor: var(--nv-light-bg); --color: var(--nv-text-color); --bgcolor: var(--nv-site-bg); } .footer-bottom-inner .row{ grid-template-columns:1fr; --valign: flex-start; } .footer-bottom{ --rowbwidth:0px; --rowbcolor: #000000; --color: #010101; --bgcolor: #fafafa; } .builder-item--footer-one-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--footer-two-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--footer-three-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--footer-four-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } @media(min-width: 576px){ :root{ --container: 992px;--postwidth:100%;--btnpadding:13px 15px;--primarybtnpadding:13px 15px;--secondarybtnpadding:calc(13px - 3px) calc(15px - 3px); --bodyfontsize: 16px; --bodylineheight: 1.6; --bodyletterspacing: 0px; --h1fontsize: 38px; --h1lineheight: 1.2; --h1letterspacing: 0px; --h2fontsize: 30px; --h2lineheight: 1.2; --h2letterspacing: 0px; --h3fontsize: 26px; --h3lineheight: 1.4; --h3letterspacing: 0px; --h4fontsize: 22px; --h4lineheight: 1.5; --h4letterspacing: 0px; --h5fontsize: 18px; --h5lineheight: 1.6; --h5letterspacing: 0px; --h6fontsize: 14px; --h6lineheight: 1.6; --h6letterspacing: 0px; } .single-post-container .alignfull > [class*="__inner-container"], .single-post-container .alignwide > [class*="__inner-container"]{ max-width:962px } .single-product .alignfull > [class*="__inner-container"], .single-product .alignwide > [class*="__inner-container"]{ max-width:962px } .nv-meta-list{ --avatarsize: 20px; } .single .nv-meta-list{ --avatarsize: 20px; } .nv-post-cover{ --height: 320px;--padding:60px 30px;--justify: flex-start; --textalign: left; --valign: center; } .nv-post-cover .nv-title-meta-wrap, .nv-page-title-wrap, .entry-header{ --textalign: left; } .nv-is-boxed.nv-title-meta-wrap{ --padding:60px 30px; } .nv-is-boxed.nv-comments-wrap{ --padding:30px; } .nv-is-boxed.comment-respond{ --padding:30px; } .single:not(.single-product), .page{ --c-vspace:0 0 0 0;; } .scroll-to-top{ --padding:8px 10px;--size:16px; } .header-menu-sidebar-bg{ --justify: flex-start; --textalign: left;--flexg: 1;--wrapdropdownwidth: auto; } .header-menu-sidebar{ width: 360px; } .builder-item--logo{ --maxwidth: 120px; --fs: 24px;--padding:10px 0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--nav-icon{ --label-margin:0 5px 0 0;;--padding:10px 15px;--margin:0; } .builder-item--primary-menu{ --spacing: 20px; --height: 25px;--padding:0;--margin:0; --fontsize: 1em; --lineheight: 1.6em; --letterspacing: 0px; --iconsize: 1em; } .builder-item--header_search_responsive{ --formfieldfontsize: 14px;--formfieldborderwidth:2px;--formfieldborderradius:2px; --height: 40px;--padding:0 10px;--margin:0; } .builder-item--header_cart_icon{ --padding:0 10px;--margin:0; } .footer-bottom{ --rowbwidth:0px; } .builder-item--footer-one-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--footer-two-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--footer-three-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--footer-four-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } }@media(min-width: 960px){ :root{ --container: 1170px;--postwidth:50%;--btnpadding:13px 15px;--primarybtnpadding:13px 15px;--secondarybtnpadding:calc(13px - 3px) calc(15px - 3px); --bodyfontsize: 16px; --bodylineheight: 1.7; --bodyletterspacing: 0px; --h1fontsize: 40px; --h1lineheight: 1.1; --h1letterspacing: 0px; --h2fontsize: 32px; --h2lineheight: 1.2; --h2letterspacing: 0px; --h3fontsize: 28px; --h3lineheight: 1.4; --h3letterspacing: 0px; --h4fontsize: 24px; --h4lineheight: 1.5; --h4letterspacing: 0px; --h5fontsize: 20px; --h5lineheight: 1.6; --h5letterspacing: 0px; --h6fontsize: 16px; --h6lineheight: 1.6; --h6letterspacing: 0px; } body:not(.single):not(.archive):not(.blog):not(.search):not(.error404) .neve-main > .container .col, body.post-type-archive-course .neve-main > .container .col, body.post-type-archive-llms_membership .neve-main > .container .col{ max-width: 100%; } body:not(.single):not(.archive):not(.blog):not(.search):not(.error404) .nv-sidebar-wrap, body.post-type-archive-course .nv-sidebar-wrap, body.post-type-archive-llms_membership .nv-sidebar-wrap{ max-width: 0%; } .neve-main > .archive-container .nv-index-posts.col{ max-width: 100%; } .neve-main > .archive-container .nv-sidebar-wrap{ max-width: 0%; } .neve-main > .single-post-container .nv-single-post-wrap.col{ max-width: 70%; } .single-post-container .alignfull > [class*="__inner-container"], .single-post-container .alignwide > [class*="__inner-container"]{ max-width:789px } .container-fluid.single-post-container .alignfull > [class*="__inner-container"], .container-fluid.single-post-container .alignwide > [class*="__inner-container"]{ max-width:calc(70% + 15px) } .neve-main > .single-post-container .nv-sidebar-wrap{ max-width: 30%; } .archive.woocommerce .neve-main > .shop-container .nv-shop.col{ max-width: 70%; } .archive.woocommerce .neve-main > .shop-container .nv-sidebar-wrap{ max-width: 30%; } .single-product .neve-main > .shop-container .nv-shop.col{ max-width: 100%; } .single-product .alignfull > [class*="__inner-container"], .single-product .alignwide > [class*="__inner-container"]{ max-width:1140px } .single-product .container-fluid .alignfull > [class*="__inner-container"], .single-product .alignwide > [class*="__inner-container"]{ max-width:calc(100% + 15px) } .single-product .neve-main > .shop-container .nv-sidebar-wrap{ max-width: 0%; } .nv-meta-list{ --avatarsize: 20px; } .single .nv-meta-list{ --avatarsize: 20px; } .nv-post-cover{ --height: 400px;--padding:60px 40px;--justify: flex-start; --textalign: left; --valign: center; } .nv-post-cover .nv-title-meta-wrap, .nv-page-title-wrap, .entry-header{ --textalign: left; } .nv-is-boxed.nv-title-meta-wrap{ --padding:60px 40px; } .nv-is-boxed.nv-comments-wrap{ --padding:40px; } .nv-is-boxed.comment-respond{ --padding:40px; } .single:not(.single-product), .page{ --c-vspace:0 0 0 0;; } .scroll-to-top{ --padding:8px 10px;--size:16px; } .header-menu-sidebar-bg{ --justify: flex-start; --textalign: left;--flexg: 1;--wrapdropdownwidth: auto; } .header-menu-sidebar{ width: 360px; } .builder-item--logo{ --maxwidth: 200px; --fs: 24px;--padding:10px 0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--nav-icon{ --label-margin:0 5px 0 0;;--padding:10px 15px;--margin:0; } .builder-item--primary-menu{ --spacing: 20px; --height: 25px;--padding:0;--margin:0; --fontsize: 20px; --lineheight: 1.6em; --letterspacing: 0px; --iconsize: 20px; } .builder-item--header_search_responsive{ --formfieldfontsize: 14px;--formfieldborderwidth:2px;--formfieldborderradius:2px; --height: 40px;--padding:0 10px;--margin:0; } .builder-item--header_cart_icon{ --padding:0 10px;--margin:0; } .footer-bottom{ --rowbwidth:1px; } .builder-item--footer-one-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--footer-two-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--footer-three-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } .builder-item--footer-four-widgets{ --padding:0;--margin:0; --textalign: left;--justify: flex-start; } }.nv-content-wrap .elementor a:not(.button):not(.wp-block-file__button){ text-decoration: none; }.scroll-to-top {right: 20px; border: none; position: fixed; bottom: 30px; display: none; opacity: 0; visibility: hidden; transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out; align-items: center; justify-content: center; z-index: 999; } @supports (-webkit-overflow-scrolling: touch) { .scroll-to-top { bottom: 74px; } } .scroll-to-top.image { background-position: center; } .scroll-to-top .scroll-to-top-image { width: 100%; height: 100%; } .scroll-to-top .scroll-to-top-label { margin: 0; padding: 5px; } .scroll-to-top:hover { text-decoration: none; } .scroll-to-top.scroll-to-top-left {left: 20px; right: unset;} .scroll-to-top.scroll-show-mobile { display: flex; } @media (min-width: 960px) { .scroll-to-top { display: flex; } }.scroll-to-top { color: var(--color); padding: var(--padding); border-radius: var(--borderradius); background: var(--bgcolor); } .scroll-to-top:hover, .scroll-to-top:focus { color: var(--hovercolor); background: var(--hoverbgcolor); } .scroll-to-top-icon, .scroll-to-top.image .scroll-to-top-image { width: var(--size); height: var(--size); } .scroll-to-top-image { background-image: var(--bgimage); background-size: cover; }:root{--nv-primary-accent:#080a0c;--nv-secondary-accent:#6e6f70;--nv-site-bg:#ffffff;--nv-light-bg:#ededed;--nv-dark-bg:#14171c;--nv-text-color:#393939;--nv-text-dark-bg:#ffffff;--nv-c-1:#77b978;--nv-c-2:#f37262;--nv-fallback-ff:Arial, Helvetica, sans-serif;}
:root{--e-global-color-nvprimaryaccent:#080a0c;--e-global-color-nvsecondaryaccent:#6e6f70;--e-global-color-nvsitebg:#ffffff;--e-global-color-nvlightbg:#ededed;--e-global-color-nvdarkbg:#14171c;--e-global-color-nvtextcolor:#393939;--e-global-color-nvtextdarkbg:#ffffff;--e-global-color-nvc1:#77b978;--e-global-color-nvc2:#f37262;}
</style>
<link rel='stylesheet' id='elementor-icons-css' href='https://icepoint.eu/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.48.0' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://icepoint.eu/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=4.0.0' media='all' />
<style id='elementor-frontend-inline-css'>
.elementor-kit-19506{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1140px;}.e-con{--container-max-width:1140px;}.elementor-widget:not(:last-child){margin-block-end:20px;}.elementor-element{--widgets-spacing:20px 20px;--widgets-spacing-row:20px;--widgets-spacing-column:20px;}{}h1.entry-title{display:var(--page-title-display);}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}.e-con{--container-max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}.e-con{--container-max-width:767px;}}
.elementor-widget-image .widget-image-caption{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-1463 .elementor-element.elementor-element-0340737 > .elementor-widget-container{border-style:solid;border-width:1px 1px 1px 1px;}.elementor-1463 .elementor-element.elementor-element-f2eee1a{margin-top:5%;margin-bottom:5%;}.elementor-1463 .elementor-element.elementor-element-9913fac > .elementor-widget-container{border-style:solid;border-width:1px 1px 1px 1px;}.elementor-1463 .elementor-element.elementor-element-9913fac{text-align:center;}.elementor-1463 .elementor-element.elementor-element-b9da522{margin-top:5%;margin-bottom:5%;}.elementor-1463 .elementor-element.elementor-element-1160bcc > .elementor-widget-container{border-style:solid;border-width:1px 1px 1px 1px;}.elementor-1463 .elementor-element.elementor-element-1160bcc{text-align:center;}.elementor-1463 .elementor-element.elementor-element-d62f612{margin-top:5%;margin-bottom:5%;}.elementor-1463 .elementor-element.elementor-element-377a14a > .elementor-widget-container{border-style:solid;border-width:1px 1px 1px 1px;}.elementor-1463 .elementor-element.elementor-element-377a14a{text-align:center;}
</style>
<link rel='stylesheet' id='font-awesome-5-all-css' href='https://icepoint.eu/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=4.0.0' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='https://icepoint.eu/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=4.0.0' media='all' />
<link rel='stylesheet' id='widget-image-css' href='https://icepoint.eu/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=4.0.0' media='all' />
<link rel='stylesheet' id='eael-general-css' href='https://icepoint.eu/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min.css?ver=6.5.13' media='all' />
<link rel='stylesheet' id='bdt-uikit-css' href='https://icepoint.eu/wp-content/plugins/bdthemes-prime-slider-lite/assets/css/bdt-uikit.css?ver=3.21.7' media='all' />
<link rel='stylesheet' id='prime-slider-site-css' href='https://icepoint.eu/wp-content/plugins/bdthemes-prime-slider-lite/assets/css/prime-slider-site.css?ver=4.1.11' media='all' />
<link rel='stylesheet' id='elementor-gf-local-roboto-css' href='https://icepoint.eu/wp-content/uploads/elementor/google-fonts/css/roboto.css?ver=1742244518' media='all' />
<link rel='stylesheet' id='elementor-gf-local-robotoslab-css' href='https://icepoint.eu/wp-content/uploads/elementor/google-fonts/css/robotoslab.css?ver=1742244522' media='all' />
<script src="https://icepoint.eu/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script src="https://icepoint.eu/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script src="https://icepoint.eu/wp-content/plugins/woo-product-category-discount/public/js/woo-product-category-discount-public.js?ver=5.15" id="woo-product-category-discount-js"></script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.10.5.3" id="wc-jquery-blockui-js" data-wp-strategy="defer"></script>
<script id="wc-add-to-cart-js-extra">
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"\u041f\u0440\u0435\u0433\u043b\u0435\u0434 \u043d\u0430 \u043a\u043e\u043b\u0438\u0447\u043a\u0430\u0442\u0430","cart_url":"https:\/\/icepoint.eu\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
</script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=10.5.3" id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.10.5.3" id="wc-js-cookie-js" defer data-wp-strategy="defer"></script>
<script id="woocommerce-js-extra">
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_password_show":"\u041f\u043e\u043a\u0430\u0437\u0432\u0430\u043d\u0435 \u043d\u0430 \u043f\u0430\u0440\u043e\u043b\u0430\u0442\u0430","i18n_password_hide":"\u0421\u043a\u0440\u0438\u0432\u0430\u043d\u0435 \u043d\u0430 \u043f\u0430\u0440\u043e\u043b\u0430\u0442\u0430"};
</script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=10.5.3" id="woocommerce-js" defer data-wp-strategy="defer"></script>
<script src="https://icepoint.eu/wp-content/plugins/translatepress-multilingual/assets/js/trp-frontend-compatibility.js?ver=3.1.3" id="trp-frontend-compatibility-js"></script>
<script src="https://icepoint.eu/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=4.0.0" id="font-awesome-4-shim-js"></script>
<script src="https://icepoint.eu/wp-content/plugins/bdthemes-prime-slider-lite/assets/js/bdt-uikit.min.js?ver=3.21.7" id="bdt-uikit-js"></script>
<link rel="https://api.w.org/" href="https://icepoint.eu/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://icepoint.eu/wp-json/wp/v2/pages/1463" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://icepoint.eu/xmlrpc.php?rsd" />

<link rel='shortlink' href='https://icepoint.eu/?p=1463' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://icepoint.eu/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ficepoint.eu%2Fbrands%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://icepoint.eu/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ficepoint.eu%2Fbrands%2F&#038;format=xml" />
<link rel="alternate" hreflang="bg-BG" href="https://icepoint.eu/brands/"/>
<link rel="alternate" hreflang="en-GB" href="https://icepoint.eu/en/brands/"/>
<link rel="alternate" hreflang="bg" href="https://icepoint.eu/brands/"/>
<link rel="alternate" hreflang="en" href="https://icepoint.eu/en/brands/"/>
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Elementor 4.0.0; features: additional_custom_breakpoints; settings: css_print_method-internal, google_font-enabled, font_display-auto">
			<style>
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
					background-image: none !important;
				}
				@media screen and (max-height: 1024px) {
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
				@media screen and (max-height: 640px) {
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
			</style>
			<link rel="icon" href="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-32x32.png" sizes="32x32" />
<link rel="icon" href="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-180x180.png" />
<meta name="msapplication-TileImage" content="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-270x270.png" />
		<style id="wp-custom-css">
			/*button.single_add_to_cart_button.button.alt.disabled.wc-variation-selection-needed {
	    padding: 6% 12%;
	background: #fe506c!important;
	color: #fff;
}
button.single_add_to_cart_button.button.alt.disabled.wc-variation-selection-needed:hover { 
	background: #fff!important;
	color: #fe506c!important;
	border: 2px solid #fe506c
}*/
.container { 
    max-width: 90%;
}
li#mega-menu-item-3110  a {
    color: red!important; 
}
li#mega-menu-item-3110 ul li a {
    color: #000!important; 
} 
.component-wrap p {
    width: 70%;
    float: left;
    text-align: left;
}
.footer--row-inner.footer-bottom-inner.footer-content-wrap .component-wrap {
    display: none!important;
}
span.dev { 
    width: 30%;
}
footer#site-footer {
    border-top: 1px solid;
}
li#mega-menu-item-20360 a, li#mega-menu-item-20358 a{
	height: auto!important;
}
li#bdt-slideshow-0-item-0 .bdt-ps-button {
    color: #000!important;
    margin-top: -60px!important;
}
/*li#bdt-slideshow-0-item-0 .bdt-ps-button-text {
	color: #fff!important;
	padding: 5px 15px;
    border: 2px solid #000;
    background: #000!important;
    font-weight: bold!important;
	border-radius: 20px;
}*/
@media screen and (max-width: 600px) {
.bdt-ps-button-text {
    font-size: 22px;
}
	h1.bdt-title-tag {
		font-size: 44px;
	}
	.component-wrap p {
    width: 100%;
    border-top: 1px solid;
		margin-bottom: 5px; 
}
	span.dev {
    width: 100%;
    text-align: left!important;
    float: left;
}
	.hfg-grid.nv-footer-content.hfg-grid-top.row--wrapper.row {
		display: block!important;
		    padding-top: 20%;
	}
}
/*@media screen and (min-width: 969px) {
button.single_add_to_cart_button.button.alt.disabled.wc-variation-selection-needed {
    padding: 15%!important;
    margin-left: 15%;
    margin-top: 15%;
}
}*/		</style>
		<style type="text/css">/** Mega Menu CSS: fs **/</style>

	</head>

<body  class="wp-singular page-template-default page page-id-1463 wp-custom-logo wp-theme-neve theme-neve woocommerce-no-js translatepress-bg_BG mega-menu-primary woo-variation-swatches wvs-behavior-blur wvs-theme-neve wvs-show-label wvs-tooltip  nv-blog-grid nv-sidebar-full-width menu_sidebar_slide_left elementor-default elementor-kit-19506 elementor-page elementor-page-1463" id="neve_body"  >
<div class="wrapper">
	
	<header class="header"  >
		<a class="neve-skip-link show-on-focus" href="#content" >
			Продължете към съдържанието		</a>
		<div id="header-grid"  class="hfg_header site-header">
	
<nav class="header--row header-main hide-on-mobile hide-on-tablet layout-full-contained nv-navbar header--row"
	data-row-id="main" data-show-on="desktop">

	<div
		class="header--row-inner header-main-inner">
		<div class="container">
			<div
				class="row row--wrapper"
				data-section="hfg_header_layout_main" >
				<div class="hfg-slot left"><div class="builder-item desktop-left"><div class="item--inner builder-item--logo"
		data-section="title_tagline"
		data-item-id="logo">
	
<div class="site-logo">
	<a class="brand" href="https://icepoint.eu/" aria-label="icepoint.eu Официален представител на BOGNER, SPORTALM, LA REVECHE и MONCLER за България" rel="home"><img width="400" height="89" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="neve-site-logo skip-lazy ewww_webp" alt="" data-variant="logo" decoding="async" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1w" sizes="(max-width: 400px) 100vw, 400px" data-src-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png" data-src-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp" data-srcset-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp 400w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp 300w" data-srcset-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w" data-eio="j" /><noscript><img width="400" height="89" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="neve-site-logo skip-lazy ewww_webp" alt="" data-variant="logo" decoding="async" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1w" sizes="(max-width: 400px) 100vw, 400px" data-src-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png" data-src-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp" data-srcset-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp 400w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp 300w" data-srcset-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w" data-eio="j" /><noscript><img width="400" height="89" src="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png" class="neve-site-logo skip-lazy" alt="" data-variant="logo" decoding="async" srcset="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w" sizes="(max-width: 400px) 100vw, 400px" /></noscript></noscript></a></div>
	</div>

</div></div><div class="hfg-slot right"><div class="builder-item has-nav hfg-is-group has-primary-menu"><div class="item--inner builder-item--primary-menu has_menu"
		data-section="header_menu_primary"
		data-item-id="primary-menu">
	<div class="nv-nav-wrap">
	<div role="navigation" class="nav-menu-primary"
			aria-label="Основно меню">

		<div id="mega-menu-wrap-primary" class="mega-menu-wrap"><div class="mega-menu-toggle"><div class="mega-toggle-blocks-left"></div><div class="mega-toggle-blocks-center"></div><div class="mega-toggle-blocks-right"><div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-0' id='mega-toggle-block-0'><button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button" aria-haspopup="true" aria-expanded="false" aria-controls="mega-menu-primary">
                  <span class="mega-toggle-animated-box">
                    <span class="mega-toggle-animated-inner"></span>
                  </span>
                </button></div></div></div><ul id="mega-menu-primary" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="hover_intent" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="0" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="959" data-unbind="true" data-mobile-state="collapse_all" data-mobile-direction="vertical" data-hover-intent-timeout="300" data-hover-intent-interval="100"><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-497" id="mega-menu-item-497"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/" aria-expanded="false" aria-controls="mega-sub-menu-497">Мъже<span class="mega-indicator" aria-hidden="true"></span></a>
<ul class="mega-sub-menu" id='mega-sub-menu-497'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-549" id="mega-menu-item-549"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/jackets_m/">Якета</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-550" id="mega-menu-item-550"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/pants_m/">Панталони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-5095" id="mega-menu-item-5095"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/thermal-underwear_m/">Термо Блузи</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-553" id="mega-menu-item-553"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/sport-suits_m/">Спортни екипи</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-554" id="mega-menu-item-554"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/t-shirts_m/">Тениски</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-721" id="mega-menu-item-721"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/vest_m/">Елеци</a></li></ul>
</li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-496" id="mega-menu-item-496"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/" aria-expanded="false" aria-controls="mega-sub-menu-496">Жени<span class="mega-indicator" aria-hidden="true"></span></a>
<ul class="mega-sub-menu" id='mega-sub-menu-496'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-501" id="mega-menu-item-501"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/jackets/">Якета</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-502" id="mega-menu-item-502"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/pants/">Панталони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-716" id="mega-menu-item-716"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/tights/">Клинове</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-503" id="mega-menu-item-503"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/thermal-underwear/">Термо Блузи</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-714" id="mega-menu-item-714"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/catsuit/">Гащеризони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-9150" id="mega-menu-item-9150"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/overall_f/">Оверали</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-506" id="mega-menu-item-506"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/t-shirts/">Блузи</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-715" id="mega-menu-item-715"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/vest/">Елеци</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-505" id="mega-menu-item-505"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/sport-suits/">Спортни екипи</a></li></ul>
</li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-1083" id="mega-menu-item-1083"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/shoes/" aria-expanded="false" aria-controls="mega-sub-menu-1083">Обувки<span class="mega-indicator" aria-hidden="true"></span></a>
<ul class="mega-sub-menu" id='mega-sub-menu-1083'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-1085" id="mega-menu-item-1085"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/shoes/shoes_m/">Мъже</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-1084" id="mega-menu-item-1084"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/shoes/shoes_f/">Жени</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-1086" id="mega-menu-item-1086"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/shoes/shoes_c/">Деца</a></li></ul>
</li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-498" id="mega-menu-item-498"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/" aria-expanded="false" aria-controls="mega-sub-menu-498">Аксесоари<span class="mega-indicator" aria-hidden="true"></span></a>
<ul class="mega-sub-menu" id='mega-sub-menu-498'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-561" id="mega-menu-item-561"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/gloves/">Ръкавици</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-562" id="mega-menu-item-562"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/hats/">Шапки</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-5912" id="mega-menu-item-5912"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/ushanki/">Ушанки</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-564" id="mega-menu-item-564"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/helmets/">Каски</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-712" id="mega-menu-item-712"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/leather/">Кожа</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-565" id="mega-menu-item-565"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/bag/">Чанти</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-563" id="mega-menu-item-563"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/glassess/">Очила</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-711" id="mega-menu-item-711"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/backpack/">Раници</a></li></ul>
</li><li class="mega-outlet mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-menu-megamenu mega-menu-grid mega-align-bottom-left mega-menu-grid mega-menu-item-3110 outlet" id="mega-menu-item-3110"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/" aria-expanded="false" aria-controls="mega-sub-menu-3110">Промоции<span class="mega-indicator" aria-hidden="true"></span></a>
<ul class="mega-sub-menu" role='presentation' id='mega-sub-menu-3110'>
<li class="mega-menu-row" id="mega-menu-3110-0">
	<ul class="mega-sub-menu" style='--columns:12' role='presentation'>
<li class="mega-menu-column mega-menu-columns-3-of-12" style="--columns:12; --span:3" id="mega-menu-3110-0-0">
		<ul class="mega-sub-menu">
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-menu-item-3111" id="mega-menu-item-3111"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/">Мъже<span class="mega-indicator" aria-hidden="true"></span></a>
			<ul class="mega-sub-menu" id='mega-sub-menu-3111'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-5905" id="mega-menu-item-5905"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_jackets_m/">Якета</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3112" id="mega-menu-item-3112"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_swimsuit_m/">Бански</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3113" id="mega-menu-item-3113"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_bermudas_m/">Бермуди</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3116" id="mega-menu-item-3116"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_pants_m/">Панталони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3118" id="mega-menu-item-3118"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_softshell_m/">Софтшели</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3120" id="mega-menu-item-3120"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_t-shirts_m/">Тениски</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-4290" id="mega-menu-item-4290"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_fleece_m/">Полари</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3114" id="mega-menu-item-3114"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_vest_m/">Елеци</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3115" id="mega-menu-item-3115"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_coats_m/">Палта</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3119" id="mega-menu-item-3119"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_sport-suits_m/">Спортни екипи</a></li>			</ul>
</li>		</ul>
</li><li class="mega-menu-column mega-menu-columns-3-of-12" style="--columns:12; --span:3" id="mega-menu-3110-0-1">
		<ul class="mega-sub-menu">
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-menu-item-3121" id="mega-menu-item-3121"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/">Жени<span class="mega-indicator" aria-hidden="true"></span></a>
			<ul class="mega-sub-menu" id='mega-sub-menu-3121'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-5906" id="mega-menu-item-5906"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_jackets_w/">Якета</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3122" id="mega-menu-item-3122"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_swimsuits_w/">Бански</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3123" id="mega-menu-item-3123"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_catsuit_w/">Гащеризони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3124" id="mega-menu-item-3124"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_vest_w/">Елеци</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3125" id="mega-menu-item-3125"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_tights_w/">Клинове</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3127" id="mega-menu-item-3127"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_pants_w/">Панталони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3126" id="mega-menu-item-3126"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_coats_w/">Палта</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3131" id="mega-menu-item-3131"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_softshell_w/">Софтшели</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3132" id="mega-menu-item-3132"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_sport-suits_w/">Спортни екипи</a></li>			</ul>
</li>		</ul>
</li><li class="mega-menu-column mega-menu-columns-3-of-12" style="--columns:12; --span:3" id="mega-menu-3110-0-2">
		<ul class="mega-sub-menu">
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-menu-item-14058" id="mega-menu-item-14058"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_shoes/">Обувки<span class="mega-indicator" aria-hidden="true"></span></a>
			<ul class="mega-sub-menu" id='mega-sub-menu-14058'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-14061" id="mega-menu-item-14061"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_shoes/o_shoes_m/">Мъже</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-14060" id="mega-menu-item-14060"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_shoes/o_shoes_f/">Жени</a></li>			</ul>
</li>		</ul>
</li><li class="mega-menu-column mega-menu-columns-3-of-12 mega-hide-on-mobile mega-hide-on-desktop" style="--columns:12; --span:3" id="mega-menu-3110-0-3">
		<ul class="mega-sub-menu">
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-hide-on-desktop mega-hide-on-mobile mega-menu-item-8942" id="mega-menu-item-8942"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/">Деца<span class="mega-indicator" aria-hidden="true"></span></a>
			<ul class="mega-sub-menu" id='mega-sub-menu-8942'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8943" id="mega-menu-item-8943"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_overall/">Оверал</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8944" id="mega-menu-item-8944"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_pants_c/">Панталони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8945" id="mega-menu-item-8945"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_fleece_k/">Полари</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8946" id="mega-menu-item-8946"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_sweaters_c/">Пуловери</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8947" id="mega-menu-item-8947"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_sport-suits_c/">Спортни екипи</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8948" id="mega-menu-item-8948"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_t-shirts_c/">Тениски</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8949" id="mega-menu-item-8949"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_thermal-underwear_c/">Термо бельо</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8950" id="mega-menu-item-8950"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_jackets_c/">Якета</a></li>			</ul>
</li>		</ul>
</li>	</ul>
</li></ul>
</li><li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-25380" id="mega-menu-item-25380"><a class="mega-menu-link" href="https://icepoint.eu/media/">Видео</a></li><li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-628" id="mega-menu-item-628"><a class="mega-menu-link" href="https://icepoint.eu/contacts/">Контакти</a></li><li class="mega-trp-language-switcher-container mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-language_switcher mega-current-language-menu-item mega-align-bottom-left mega-menu-flyout mega-menu-item-20360 trp-language-switcher-container" id="mega-menu-item-20360"><a class="mega-menu-link" href="https://icepoint.eu/brands/"><span data-no-translation><img class="trp-flag-image" src="https://icepoint.eu/wp-content/plugins/translatepress-multilingual/assets/images/flags/bg_BG.png" width="18" height="12" alt="bg_BG" title="Bulgarian"></span></a></li><li class="mega-trp-language-switcher-container mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-language_switcher mega-align-bottom-left mega-menu-flyout mega-menu-item-20358 trp-language-switcher-container" id="mega-menu-item-20358"><a class="mega-menu-link" href="https://icepoint.eu/en/brands/"><span data-no-translation><img class="trp-flag-image" src="https://icepoint.eu/wp-content/plugins/translatepress-multilingual/assets/images/flags/en_GB.png" width="18" height="12" alt="en_GB" title="English"></span></a></li></ul></div>	</div>
</div>

	</div>

<div class="item--inner builder-item--header_cart_icon"
		data-section="header_cart_icon"
		data-item-id="header_cart_icon">
	
<div class="component-wrap">
	<div class="responsive-nav-cart menu-item-nav-cart
	dropdown cart-is-empty	">
		<a href="https://icepoint.eu/cart/" class="cart-icon-wrapper">
						<span class="nv-icon nv-cart"><svg width="15" height="15" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M704 1536q0 52-38 90t-90 38-90-38-38-90 38-90 90-38 90 38 38 90zm896 0q0 52-38 90t-90 38-90-38-38-90 38-90 90-38 90 38 38 90zm128-1088v512q0 24-16.5 42.5t-40.5 21.5l-1044 122q13 60 13 70 0 16-24 64h920q26 0 45 19t19 45-19 45-45 19h-1024q-26 0-45-19t-19-45q0-11 8-31.5t16-36 21.5-40 15.5-29.5l-177-823h-204q-26 0-45-19t-19-45 19-45 45-19h256q16 0 28.5 6.5t19.5 15.5 13 24.5 8 26 5.5 29.5 4.5 26h1201q26 0 45 19t19 45z"/></svg></span>			<span class="screen-reader-text">
				Количка			</span>
			<span class="cart-count">
				0			</span>
					</a>
				<div class="nv-nav-cart widget">

			<div class="widget woocommerce widget_shopping_cart"> <div class="hide_cart_widget_if_empty"><div class="widget_shopping_cart_content"></div></div></div>		</div>
			</div>
</div>


	</div>

<div class="item--inner builder-item--header_search_responsive"
		data-section="header_search_responsive"
		data-item-id="header_search_responsive">
	<div class="nv-search-icon-component" >
	<div  class="menu-item-nav-search canvas">
		<a aria-label="Търсачка" href="#" class="nv-icon nv-search" >
				<svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z" /></svg>
			</a>		<div class="nv-nav-search" aria-label="search">
			<div class="form-wrap container responsive-search">
				
<form role="search"
	method="get"
	class="search-form"
	action="https://icepoint.eu/">
	<label>
		<span class="screen-reader-text">Търсене на...</span>
	</label>
	<input type="search"
		class="search-field"
		aria-label="Търсачка"
		placeholder="Търсене на..."
		value=""
		name="s"/>
	<button type="submit"
			class="search-submit nv-submit"
			aria-label="Търсачка">
					<span class="nv-search-icon-wrap">
				<span class="nv-icon nv-search" >
				<svg width="15" height="15" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z" /></svg>
			</span>			</span>
			</button>
	</form>
			</div>
							<div class="close-container container responsive-search">
					<button  class="close-responsive-search" aria-label="Затваряне"
												>
						<svg width="50" height="50" viewBox="0 0 20 20" fill="#555555"><path d="M14.95 6.46L11.41 10l3.54 3.54l-1.41 1.41L10 11.42l-3.53 3.53l-1.42-1.42L8.58 10L5.05 6.47l1.42-1.42L10 8.58l3.54-3.53z"/></svg>
					</button>
				</div>
					</div>
	</div>
</div>
	</div>

</div></div>							</div>
		</div>
	</div>
</nav>


<nav class="header--row header-main hide-on-desktop layout-full-contained nv-navbar has-center header--row"
	data-row-id="main" data-show-on="mobile">

	<div
		class="header--row-inner header-main-inner">
		<div class="container">
			<div
				class="row row--wrapper"
				data-section="hfg_header_layout_main" >
				<div class="hfg-slot left"><div class="builder-item tablet-left mobile-left"><div class="item--inner builder-item--logo"
		data-section="title_tagline"
		data-item-id="logo">
	
<div class="site-logo">
	<a class="brand" href="https://icepoint.eu/" aria-label="icepoint.eu Официален представител на BOGNER, SPORTALM, LA REVECHE и MONCLER за България" rel="home"><img width="400" height="89" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="neve-site-logo skip-lazy ewww_webp" alt="" data-variant="logo" decoding="async" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1w" sizes="(max-width: 400px) 100vw, 400px" data-src-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png" data-src-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp" data-srcset-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp 400w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp 300w" data-srcset-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w" data-eio="j" /><noscript><img width="400" height="89" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="neve-site-logo skip-lazy ewww_webp" alt="" data-variant="logo" decoding="async" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1w" sizes="(max-width: 400px) 100vw, 400px" data-src-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png" data-src-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp" data-srcset-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp 400w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp 300w" data-srcset-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w" data-eio="j" /><noscript><img width="400" height="89" src="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png" class="neve-site-logo skip-lazy" alt="" data-variant="logo" decoding="async" srcset="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w" sizes="(max-width: 400px) 100vw, 400px" /></noscript></noscript></a></div>
	</div>

</div></div><div class="hfg-slot center"><div class="builder-item tablet-left mobile-left hfg-is-group"><div class="item--inner builder-item--header_search_responsive"
		data-section="header_search_responsive"
		data-item-id="header_search_responsive">
	<div class="nv-search-icon-component" >
	<div  class="menu-item-nav-search canvas">
		<a aria-label="Търсачка" href="#" class="nv-icon nv-search" >
				<svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z" /></svg>
			</a>		<div class="nv-nav-search" aria-label="search">
			<div class="form-wrap container responsive-search">
				
<form role="search"
	method="get"
	class="search-form"
	action="https://icepoint.eu/">
	<label>
		<span class="screen-reader-text">Търсене на...</span>
	</label>
	<input type="search"
		class="search-field"
		aria-label="Търсачка"
		placeholder="Търсене на..."
		value=""
		name="s"/>
	<button type="submit"
			class="search-submit nv-submit"
			aria-label="Търсачка">
					<span class="nv-search-icon-wrap">
				<span class="nv-icon nv-search" >
				<svg width="15" height="15" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z" /></svg>
			</span>			</span>
			</button>
	</form>
			</div>
							<div class="close-container container responsive-search">
					<button  class="close-responsive-search" aria-label="Затваряне"
												>
						<svg width="50" height="50" viewBox="0 0 20 20" fill="#555555"><path d="M14.95 6.46L11.41 10l3.54 3.54l-1.41 1.41L10 11.42l-3.53 3.53l-1.42-1.42L8.58 10L5.05 6.47l1.42-1.42L10 8.58l3.54-3.53z"/></svg>
					</button>
				</div>
					</div>
	</div>
</div>
	</div>

<div class="item--inner builder-item--nav-icon"
		data-section="header_menu_icon"
		data-item-id="nav-icon">
	<div class="menu-mobile-toggle item-button navbar-toggle-wrapper">
	<button type="button" class=" navbar-toggle"
			value="Навигационно меню"
					aria-label="Навигационно меню "
			aria-expanded="false" onclick="if('undefined' !== typeof toggleAriaClick ) { toggleAriaClick() }">
					<span class="bars">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</span>
					<span class="screen-reader-text">Навигационно меню</span>
	</button>
</div> <!--.navbar-toggle-wrapper-->


	</div>

</div></div><div class="hfg-slot right"></div>							</div>
		</div>
	</div>
</nav>

<div
		id="header-menu-sidebar" class="header-menu-sidebar tcb menu-sidebar-panel slide_left hfg-pe"
		data-row-id="sidebar">
	<div id="header-menu-sidebar-bg" class="header-menu-sidebar-bg">
				<div class="close-sidebar-panel navbar-toggle-wrapper">
			<button type="button" class="hamburger is-active  navbar-toggle active" 					value="Навигационно меню"
					aria-label="Навигационно меню "
					aria-expanded="false" onclick="if('undefined' !== typeof toggleAriaClick ) { toggleAriaClick() }">
								<span class="bars">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</span>
								<span class="screen-reader-text">
			Навигационно меню					</span>
			</button>
		</div>
					<div id="header-menu-sidebar-inner" class="header-menu-sidebar-inner tcb ">
						<div class="builder-item has-nav"><div class="item--inner builder-item--primary-menu has_menu"
		data-section="header_menu_primary"
		data-item-id="primary-menu">
	<div class="nv-nav-wrap">
	<div role="navigation" class="nav-menu-primary"
			aria-label="Основно меню">

		<div id="mega-menu-wrap-primary" class="mega-menu-wrap"><div class="mega-menu-toggle"><div class="mega-toggle-blocks-left"></div><div class="mega-toggle-blocks-center"></div><div class="mega-toggle-blocks-right"><div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-0' id='mega-toggle-block-0'><button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button" aria-haspopup="true" aria-expanded="false" aria-controls="mega-menu-primary">
                  <span class="mega-toggle-animated-box">
                    <span class="mega-toggle-animated-inner"></span>
                  </span>
                </button></div></div></div><ul id="mega-menu-primary" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="hover_intent" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="0" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="959" data-unbind="true" data-mobile-state="collapse_all" data-mobile-direction="vertical" data-hover-intent-timeout="300" data-hover-intent-interval="100"><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-497" id="mega-menu-item-497"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/" aria-expanded="false" aria-controls="mega-sub-menu-497">Мъже<span class="mega-indicator" aria-hidden="true"></span></a>
<ul class="mega-sub-menu" id='mega-sub-menu-497'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-549" id="mega-menu-item-549"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/jackets_m/">Якета</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-550" id="mega-menu-item-550"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/pants_m/">Панталони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-5095" id="mega-menu-item-5095"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/thermal-underwear_m/">Термо Блузи</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-553" id="mega-menu-item-553"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/sport-suits_m/">Спортни екипи</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-554" id="mega-menu-item-554"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/t-shirts_m/">Тениски</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-721" id="mega-menu-item-721"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/men/vest_m/">Елеци</a></li></ul>
</li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-496" id="mega-menu-item-496"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/" aria-expanded="false" aria-controls="mega-sub-menu-496">Жени<span class="mega-indicator" aria-hidden="true"></span></a>
<ul class="mega-sub-menu" id='mega-sub-menu-496'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-501" id="mega-menu-item-501"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/jackets/">Якета</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-502" id="mega-menu-item-502"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/pants/">Панталони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-716" id="mega-menu-item-716"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/tights/">Клинове</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-503" id="mega-menu-item-503"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/thermal-underwear/">Термо Блузи</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-714" id="mega-menu-item-714"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/catsuit/">Гащеризони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-9150" id="mega-menu-item-9150"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/overall_f/">Оверали</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-506" id="mega-menu-item-506"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/t-shirts/">Блузи</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-715" id="mega-menu-item-715"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/vest/">Елеци</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-505" id="mega-menu-item-505"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/women/sport-suits/">Спортни екипи</a></li></ul>
</li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-1083" id="mega-menu-item-1083"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/shoes/" aria-expanded="false" aria-controls="mega-sub-menu-1083">Обувки<span class="mega-indicator" aria-hidden="true"></span></a>
<ul class="mega-sub-menu" id='mega-sub-menu-1083'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-1085" id="mega-menu-item-1085"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/shoes/shoes_m/">Мъже</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-1084" id="mega-menu-item-1084"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/shoes/shoes_f/">Жени</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-1086" id="mega-menu-item-1086"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/shoes/shoes_c/">Деца</a></li></ul>
</li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-498" id="mega-menu-item-498"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/" aria-expanded="false" aria-controls="mega-sub-menu-498">Аксесоари<span class="mega-indicator" aria-hidden="true"></span></a>
<ul class="mega-sub-menu" id='mega-sub-menu-498'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-561" id="mega-menu-item-561"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/gloves/">Ръкавици</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-562" id="mega-menu-item-562"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/hats/">Шапки</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-5912" id="mega-menu-item-5912"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/ushanki/">Ушанки</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-564" id="mega-menu-item-564"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/helmets/">Каски</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-712" id="mega-menu-item-712"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/leather/">Кожа</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-565" id="mega-menu-item-565"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/bag/">Чанти</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-563" id="mega-menu-item-563"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/glassess/">Очила</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-711" id="mega-menu-item-711"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/accessories/backpack/">Раници</a></li></ul>
</li><li class="mega-outlet mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-menu-megamenu mega-menu-grid mega-align-bottom-left mega-menu-grid mega-menu-item-3110 outlet" id="mega-menu-item-3110"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/" aria-expanded="false" aria-controls="mega-sub-menu-3110">Промоции<span class="mega-indicator" aria-hidden="true"></span></a>
<ul class="mega-sub-menu" role='presentation' id='mega-sub-menu-3110'>
<li class="mega-menu-row" id="mega-menu-3110-0">
	<ul class="mega-sub-menu" style='--columns:12' role='presentation'>
<li class="mega-menu-column mega-menu-columns-3-of-12" style="--columns:12; --span:3" id="mega-menu-3110-0-0">
		<ul class="mega-sub-menu">
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-menu-item-3111" id="mega-menu-item-3111"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/">Мъже<span class="mega-indicator" aria-hidden="true"></span></a>
			<ul class="mega-sub-menu" id='mega-sub-menu-3111'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-5905" id="mega-menu-item-5905"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_jackets_m/">Якета</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3112" id="mega-menu-item-3112"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_swimsuit_m/">Бански</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3113" id="mega-menu-item-3113"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_bermudas_m/">Бермуди</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3116" id="mega-menu-item-3116"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_pants_m/">Панталони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3118" id="mega-menu-item-3118"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_softshell_m/">Софтшели</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3120" id="mega-menu-item-3120"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_t-shirts_m/">Тениски</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-4290" id="mega-menu-item-4290"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_fleece_m/">Полари</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3114" id="mega-menu-item-3114"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_vest_m/">Елеци</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3115" id="mega-menu-item-3115"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_coats_m/">Палта</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3119" id="mega-menu-item-3119"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_man/o_sport-suits_m/">Спортни екипи</a></li>			</ul>
</li>		</ul>
</li><li class="mega-menu-column mega-menu-columns-3-of-12" style="--columns:12; --span:3" id="mega-menu-3110-0-1">
		<ul class="mega-sub-menu">
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-menu-item-3121" id="mega-menu-item-3121"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/">Жени<span class="mega-indicator" aria-hidden="true"></span></a>
			<ul class="mega-sub-menu" id='mega-sub-menu-3121'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-5906" id="mega-menu-item-5906"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_jackets_w/">Якета</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3122" id="mega-menu-item-3122"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_swimsuits_w/">Бански</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3123" id="mega-menu-item-3123"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_catsuit_w/">Гащеризони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3124" id="mega-menu-item-3124"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_vest_w/">Елеци</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3125" id="mega-menu-item-3125"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_tights_w/">Клинове</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3127" id="mega-menu-item-3127"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_pants_w/">Панталони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3126" id="mega-menu-item-3126"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_coats_w/">Палта</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3131" id="mega-menu-item-3131"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_softshell_w/">Софтшели</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-3132" id="mega-menu-item-3132"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_sport-suits_w/">Спортни екипи</a></li>			</ul>
</li>		</ul>
</li><li class="mega-menu-column mega-menu-columns-3-of-12" style="--columns:12; --span:3" id="mega-menu-3110-0-2">
		<ul class="mega-sub-menu">
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-menu-item-14058" id="mega-menu-item-14058"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_shoes/">Обувки<span class="mega-indicator" aria-hidden="true"></span></a>
			<ul class="mega-sub-menu" id='mega-sub-menu-14058'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-14061" id="mega-menu-item-14061"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_shoes/o_shoes_m/">Мъже</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-14060" id="mega-menu-item-14060"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_shoes/o_shoes_f/">Жени</a></li>			</ul>
</li>		</ul>
</li><li class="mega-menu-column mega-menu-columns-3-of-12 mega-hide-on-mobile mega-hide-on-desktop" style="--columns:12; --span:3" id="mega-menu-3110-0-3">
		<ul class="mega-sub-menu">
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-hide-on-desktop mega-hide-on-mobile mega-menu-item-8942" id="mega-menu-item-8942"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/">Деца<span class="mega-indicator" aria-hidden="true"></span></a>
			<ul class="mega-sub-menu" id='mega-sub-menu-8942'>
<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8943" id="mega-menu-item-8943"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_overall/">Оверал</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8944" id="mega-menu-item-8944"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_pants_c/">Панталони</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8945" id="mega-menu-item-8945"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_fleece_k/">Полари</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8946" id="mega-menu-item-8946"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_sweaters_c/">Пуловери</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8947" id="mega-menu-item-8947"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_sport-suits_c/">Спортни екипи</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8948" id="mega-menu-item-8948"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_t-shirts_c/">Тениски</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8949" id="mega-menu-item-8949"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_women/o_thermal-underwear_c/">Термо бельо</a></li><li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-8950" id="mega-menu-item-8950"><a class="mega-menu-link" href="https://icepoint.eu/produkt-kategoriya/sale/o_children/o_jackets_c/">Якета</a></li>			</ul>
</li>		</ul>
</li>	</ul>
</li></ul>
</li><li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-25380" id="mega-menu-item-25380"><a class="mega-menu-link" href="https://icepoint.eu/media/">Видео</a></li><li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-628" id="mega-menu-item-628"><a class="mega-menu-link" href="https://icepoint.eu/contacts/">Контакти</a></li><li class="mega-trp-language-switcher-container mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-language_switcher mega-current-language-menu-item mega-align-bottom-left mega-menu-flyout mega-menu-item-20360 trp-language-switcher-container" id="mega-menu-item-20360"><a class="mega-menu-link" href="https://icepoint.eu/brands/"><span data-no-translation><img class="trp-flag-image" src="https://icepoint.eu/wp-content/plugins/translatepress-multilingual/assets/images/flags/bg_BG.png" width="18" height="12" alt="bg_BG" title="Bulgarian"></span></a></li><li class="mega-trp-language-switcher-container mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-language_switcher mega-align-bottom-left mega-menu-flyout mega-menu-item-20358 trp-language-switcher-container" id="mega-menu-item-20358"><a class="mega-menu-link" href="https://icepoint.eu/en/brands/"><span data-no-translation><img class="trp-flag-image" src="https://icepoint.eu/wp-content/plugins/translatepress-multilingual/assets/images/flags/en_GB.png" width="18" height="12" alt="en_GB" title="English"></span></a></li></ul></div>	</div>
</div>

	</div>

</div>					</div>
	</div>
</div>
<div class="header-menu-sidebar-overlay hfg-ov hfg-pe" onclick="if('undefined' !== typeof toggleAriaClick ) { toggleAriaClick() }"></div>
</div>
	</header>

	<style>.nav-ul li:focus-within .wrap.active + .sub-menu { opacity: 1; visibility: visible; }.nav-ul li.neve-mega-menu:focus-within .wrap.active + .sub-menu { display: grid; }.nav-ul li > .wrap { display: flex; align-items: center; position: relative; padding: 0 4px; }.nav-ul:not(.menu-mobile):not(.neve-mega-menu) > li > .wrap > a { padding-top: 1px }</style>

	
	<main id="content" class="neve-main">

<div class="container single-page-container">
	<div class="row">
				<div class="nv-single-page-wrap col">
			<div class="nv-page-title-wrap nv-big-title" >
	<div class="nv-page-title ">
				<h1>Марки</h1>
					</div><!--.nv-page-title-->
</div> <!--.nv-page-title-wrap-->
	<div class="nv-content-wrap entry-content">		<div data-elementor-type="wp-page" data-elementor-id="1463" class="elementor elementor-1463">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-c1f08c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c1f08c3" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4bdea22" data-id="4bdea22" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-0340737 elementor-widget elementor-widget-image" data-id="0340737" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="https://icepoint.eu/produkt-kategoriya/bogner/">
							<img loading="lazy" decoding="async" width="300" height="153" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="attachment-medium size-medium wp-image-19802 ewww_webp" alt="" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1w" sizes="(max-width: 300px) 100vw, 300px" data-src-img="https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner-300x153.jpg" data-src-webp="https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner-300x153.jpg.webp" data-srcset-webp="https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner-300x153.jpg.webp 300w, https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner-18x9.jpg.webp 18w, https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner.jpg.webp 450w" data-srcset-img="https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner-300x153.jpg 300w, https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner-18x9.jpg 18w, https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner.jpg 450w" data-eio="j" /><noscript><img loading="lazy" decoding="async" width="300" height="153" src="https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner-300x153.jpg" class="attachment-medium size-medium wp-image-19802" alt="" srcset="https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner-300x153.jpg 300w, https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner-18x9.jpg 18w, https://icepoint.eu/wp-content/uploads/2021/08/logo_brand_bogner.jpg 450w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>								</a>
															</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-f2eee1a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f2eee1a" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-09eec3b" data-id="09eec3b" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-9913fac elementor-widget elementor-widget-image" data-id="9913fac" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="https://icepoint.eu/produkt-kategoriya/sportalm/">
							<img loading="lazy" decoding="async" width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="attachment-medium size-medium wp-image-23424 ewww_webp" alt="" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1w" sizes="(max-width: 300px) 100vw, 300px" data-src-img="https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-300x300.png" data-src-webp="https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-300x300.png.webp" data-srcset-webp="https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-300x300.png.webp 300w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-150x150.png.webp 150w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-12x12.png.webp 12w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-570x570.png.webp 570w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-100x100.png.webp 100w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-50x50.png.webp 50w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector.png.webp 652w" data-srcset-img="https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-300x300.png 300w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-150x150.png 150w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-12x12.png 12w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-570x570.png 570w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-100x100.png 100w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-50x50.png 50w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector.png 652w" data-eio="j" /><noscript><img loading="lazy" decoding="async" width="300" height="300" src="https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-300x300.png" class="attachment-medium size-medium wp-image-23424" alt="" srcset="https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-300x300.png 300w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-150x150.png 150w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-12x12.png 12w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-570x570.png 570w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-100x100.png 100w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector-50x50.png 50w, https://icepoint.eu/wp-content/uploads/2022/11/sportalm-kitzbuehel-logo-vector.png 652w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>								</a>
															</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-b9da522 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b9da522" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-narrow">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cdabfe8" data-id="cdabfe8" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1160bcc elementor-widget elementor-widget-image" data-id="1160bcc" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="#">
							<img loading="lazy" decoding="async" width="300" height="133" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="attachment-medium size-medium wp-image-23422 ewww_webp" alt="" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1w" sizes="(max-width: 300px) 100vw, 300px" data-src-img="https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-300x133.png" data-src-webp="https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-300x133.png.webp" data-srcset-webp="https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-300x133.png.webp 300w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-1024x454.png.webp 1024w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-768x340.png.webp 768w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-18x8.png.webp 18w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-570x253.png.webp 570w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c.png.webp 1200w" data-srcset-img="https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-300x133.png 300w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-1024x454.png 1024w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-768x340.png 768w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-18x8.png 18w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-570x253.png 570w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c.png 1200w" data-eio="j" /><noscript><img loading="lazy" decoding="async" width="300" height="133" src="https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-300x133.png" class="attachment-medium size-medium wp-image-23422" alt="" srcset="https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-300x133.png 300w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-1024x454.png 1024w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-768x340.png 768w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-18x8.png 18w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c-570x253.png 570w, https://icepoint.eu/wp-content/uploads/2022/11/613622a8f5966900044cbf5c.png 1200w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>								</a>
															</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-d62f612 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d62f612" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b2cbd8b" data-id="b2cbd8b" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-377a14a elementor-widget elementor-widget-image" data-id="377a14a" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="#">
							<img decoding="async" src="https://icepoint.eu/wp-content/uploads/2021/08/lareveche.jpg" title="" alt="" loading="lazy" />								</a>
															</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				</div>
		</div>		</div>
			</div>
</div>

</main><!--/.neve-main-->

<button tabindex="0" id="scroll-to-top" class="scroll-to-top scroll-to-top-right  scroll-show-mobile icon" aria-label="Плъзгане нагоре"><svg class="scroll-to-top-icon" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"><rect width="15" height="15" fill="none"/><path fill="currentColor" d="M2,8.48l-.65-.65a.71.71,0,0,1,0-1L7,1.14a.72.72,0,0,1,1,0l5.69,5.7a.71.71,0,0,1,0,1L13,8.48a.71.71,0,0,1-1,0L8.67,4.94v8.42a.7.7,0,0,1-.7.7H7a.7.7,0,0,1-.7-.7V4.94L3,8.47a.7.7,0,0,1-1,0Z"/></svg></button><footer class="site-footer" id="site-footer"  >
	<div class="hfg_footer">
		<div class="footer--row footer-top hide-on-mobile hide-on-tablet layout-full-contained"
	id="cb-row--footer-desktop-top"
	data-row-id="top" data-show-on="desktop">
	<div
		class="footer--row-inner footer-top-inner footer-content-wrap">
		<div class="container">
			<div
				class="hfg-grid nv-footer-content hfg-grid-top row--wrapper row "
				data-section="hfg_footer_layout_top" >
				<div class="hfg-slot left"><div class="builder-item desktop-left tablet-left mobile-left"><div class="item--inner builder-item--footer-one-widgets"
		data-section="neve_sidebar-widgets-footer-one-widgets"
		data-item-id="footer-one-widgets">
		<div class="widget-area">
		<div id="media_image-3" class="widget widget_media_image"><img width="300" height="67" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="image wp-image-19580  attachment-medium size-medium ewww_webp" alt="" style="max-width: 100%; height: auto;" decoding="async" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1w" sizes="(max-width: 300px) 100vw, 300px" data-src-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png" data-src-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp" data-srcset-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp 300w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp 400w" data-srcset-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w" data-eio="j" /><noscript><img width="300" height="67" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="image wp-image-19580  attachment-medium size-medium ewww_webp" alt="" style="max-width: 100%; height: auto;" decoding="async" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1w" sizes="(max-width: 300px) 100vw, 300px" data-src-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png" data-src-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp" data-srcset-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp 300w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp 400w" data-srcset-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w" data-eio="j" /><noscript><img width="300" height="67" src="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png" class="image wp-image-19580  attachment-medium size-medium" alt="" style="max-width: 100%; height: auto;" decoding="async" srcset="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w" sizes="(max-width: 300px) 100vw, 300px" /></noscript></noscript></div><div id="custom_html-3" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><p>
	Официален представител на BOGNER и SPORTALM за България.
</p></div></div>	</div>
	</div>

</div></div><div class="hfg-slot c-left"><div class="builder-item desktop-left tablet-left mobile-left"><div class="item--inner builder-item--footer-two-widgets"
		data-section="neve_sidebar-widgets-footer-two-widgets"
		data-item-id="footer-two-widgets">
		<div class="widget-area">
		<div id="nav_menu-3" class="widget widget_nav_menu"><p class="widget-title">Полезни връзки</p><div class="menu-footer-navigation-container"><ul id="menu-footer-navigation" class="menu"><li id="menu-item-19591" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-19591"><a href="https://icepoint.eu/">Начало</a></li>
<li id="menu-item-4297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4297"><a href="https://icepoint.eu/about-us/">За нас</a></li>
<li id="menu-item-19880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19880"><a href="https://icepoint.eu/shop/">Магазин</a></li>
<li id="menu-item-19593" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19593"><a href="https://icepoint.eu/tablica-s-razmeri/">ТАБЛИЦА С РАЗМЕРИ</a></li>
<li id="menu-item-19881" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1463 current_page_item menu-item-19881"><a href="https://icepoint.eu/brands/" aria-current="page">Марки</a></li>
<li id="menu-item-19882" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19882"><a href="https://icepoint.eu/my-account/">Моят профил</a></li>
<li id="menu-item-19883" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19883"><a href="https://icepoint.eu/order-tracking/">Проследяване на поръчка</a></li>
<li id="menu-item-19879" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19879"><a href="https://icepoint.eu/lyubimi-produkti/">Любими продукти</a></li>
<li id="menu-item-987" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-987"><a href="https://icepoint.eu/terms-conditions/">Общи условия</a></li>
<li id="menu-item-19595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19595"><a href="https://icepoint.eu/contacts/">За контакти</a></li>
</ul></div></div>	</div>
	</div>

</div></div><div class="hfg-slot center"><div class="builder-item desktop-left tablet-left mobile-left"><div class="item--inner builder-item--footer-three-widgets"
		data-section="neve_sidebar-widgets-footer-three-widgets"
		data-item-id="footer-three-widgets">
		<div class="widget-area">
		<div id="custom_html-4" class="widget_text widget widget_custom_html"><p class="widget-title">Връзка с нас</p><div class="textwidget custom-html-widget">	<p><i class="fa fa-envelope-o"></i>
		<a href="mailto: icepointconcept@gmail.com"> icepointconcept@gmail.com</a><br>
	<i class="fa fa-phone"></i>
		<a href="tel:+359897954208"> +359897 954 208</a>
	</p>
	<p><i class="fa fa-map-marker"></i>
		гр.София, 
бул. "Черни връх" №69 <br>
<i class="fa fa-phone"></i>
		<a href="tel:+359896717501"> +359896 717 501</a> </p>
<p>
<i class="fa fa-map-marker"></i> гр.Банско, 
ул. "Гоце Делчев" №"5
	<br><i class="fa fa-phone"></i>
		<a href="tel:+359878916493"> +359878 916 493</a>
	<br><i class="fa fa-phone"></i>
		<a href="tel:+359897954208"> +35989 795 4208</a>
	</p>
<p>
<i class="fa fa-map-marker"></i> к.к. Боровец, х-л Роял Плаза
	<br><i class="fa fa-phone"></i>
		<a href="tel:+359896717501"> +359896 717 501</a> 
	<br><i class="fa fa-phone"></i>
	<a href="tel:+359897954208"> +35989 795 4208</a>
	</p>
<p>
<i class="fa fa-map-marker"></i> к.к Слънчев бряг,Роял Бийч Мол Барсело
	<br><i class="fa fa-phone"></i>
		<a href="tel:+359896717501"> +359896 717 501</a> 
	<br><i class="fa fa-phone"></i>
	<a href="tel:+359897954208"> +35989 795 4208</a>
	</p></div></div>	</div>
	</div>

</div></div>							</div>
		</div>
	</div>
</div>

<div class="footer--row footer-bottom hide-on-mobile hide-on-tablet layout-full-contained"
	id="cb-row--footer-desktop-bottom"
	data-row-id="bottom" data-show-on="desktop">
	<div
		class="footer--row-inner footer-bottom-inner footer-content-wrap">
		<div class="container">
			<div
				class="hfg-grid nv-footer-content hfg-grid-bottom row--wrapper row "
				data-section="hfg_footer_layout_bottom" >
				<div class="hfg-slot left"><div class="builder-item desktop-left tablet-left mobile-left"><div class="item--inner builder-item--footer-four-widgets"
		data-section="neve_sidebar-widgets-footer-four-widgets"
		data-item-id="footer-four-widgets">
		<div class="widget-area">
		<div id="text-5" class="widget widget_text">			<div class="textwidget"><p>Copyright © 2024 <a href="https://icepoint.eu/">icepoint.eu</a> <span class="sep">| </span>Всички права запазени. | Дизайн и изработка: <a href="https://esaiti.com" target="_blank" rel="noopener">S.I.T Solutions Ltd.</a></p>
</div>
		</div>	</div>
	</div>

</div><div class="builder-item cr"><div class="item--inner"><div class="component-wrap"><div><p>©{current_year}  Copyright Сноу Фешън ЕООД. Всички права запазени. </p>
<span class="dev"> Изработка: <a href="https://esaiti.com">S.I.T. Solutions Ltd.</a></span></div></div></div></div></div>							</div>
		</div>
	</div>
</div>

<div class="footer--row footer-top hide-on-desktop layout-full-contained"
	id="cb-row--footer-mobile-top"
	data-row-id="top" data-show-on="mobile">
	<div
		class="footer--row-inner footer-top-inner footer-content-wrap">
		<div class="container">
			<div
				class="hfg-grid nv-footer-content hfg-grid-top row--wrapper row "
				data-section="hfg_footer_layout_top" >
				<div class="hfg-slot left"><div class="builder-item desktop-left tablet-left mobile-left"><div class="item--inner builder-item--footer-one-widgets"
		data-section="neve_sidebar-widgets-footer-one-widgets"
		data-item-id="footer-one-widgets">
		<div class="widget-area">
		<div id="media_image-3" class="widget widget_media_image"><img width="300" height="67" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="image wp-image-19580  attachment-medium size-medium ewww_webp" alt="" style="max-width: 100%; height: auto;" decoding="async" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1w" sizes="(max-width: 300px) 100vw, 300px" data-src-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png" data-src-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp" data-srcset-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp 300w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp 400w" data-srcset-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w" data-eio="j" /><noscript><img width="300" height="67" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="image wp-image-19580  attachment-medium size-medium ewww_webp" alt="" style="max-width: 100%; height: auto;" decoding="async" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1w" sizes="(max-width: 300px) 100vw, 300px" data-src-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png" data-src-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp" data-srcset-webp="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png.webp 300w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png.webp 400w" data-srcset-img="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w" data-eio="j" /><noscript><img width="300" height="67" src="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png" class="image wp-image-19580  attachment-medium size-medium" alt="" style="max-width: 100%; height: auto;" decoding="async" srcset="https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1-300x67.png 300w, https://icepoint.eu/wp-content/uploads/2016/11/cropped-ice-point-logo-black@2x-1.png 400w" sizes="(max-width: 300px) 100vw, 300px" /></noscript></noscript></div><div id="custom_html-3" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><p>
	Официален представител на BOGNER и SPORTALM за България.
</p></div></div>	</div>
	</div>

</div></div><div class="hfg-slot c-left"><div class="builder-item desktop-left tablet-left mobile-left"><div class="item--inner builder-item--footer-two-widgets"
		data-section="neve_sidebar-widgets-footer-two-widgets"
		data-item-id="footer-two-widgets">
		<div class="widget-area">
		<div id="nav_menu-3" class="widget widget_nav_menu"><p class="widget-title">Полезни връзки</p><div class="menu-footer-navigation-container"><ul id="menu-footer-navigation-1" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-19591"><a href="https://icepoint.eu/">Начало</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4297"><a href="https://icepoint.eu/about-us/">За нас</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19880"><a href="https://icepoint.eu/shop/">Магазин</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19593"><a href="https://icepoint.eu/tablica-s-razmeri/">ТАБЛИЦА С РАЗМЕРИ</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1463 current_page_item menu-item-19881"><a href="https://icepoint.eu/brands/" aria-current="page">Марки</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19882"><a href="https://icepoint.eu/my-account/">Моят профил</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19883"><a href="https://icepoint.eu/order-tracking/">Проследяване на поръчка</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19879"><a href="https://icepoint.eu/lyubimi-produkti/">Любими продукти</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-987"><a href="https://icepoint.eu/terms-conditions/">Общи условия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19595"><a href="https://icepoint.eu/contacts/">За контакти</a></li>
</ul></div></div>	</div>
	</div>

</div></div><div class="hfg-slot center"><div class="builder-item desktop-left tablet-left mobile-left"><div class="item--inner builder-item--footer-three-widgets"
		data-section="neve_sidebar-widgets-footer-three-widgets"
		data-item-id="footer-three-widgets">
		<div class="widget-area">
		<div id="custom_html-4" class="widget_text widget widget_custom_html"><p class="widget-title">Връзка с нас</p><div class="textwidget custom-html-widget">	<p><i class="fa fa-envelope-o"></i>
		<a href="mailto: icepointconcept@gmail.com"> icepointconcept@gmail.com</a><br>
	<i class="fa fa-phone"></i>
		<a href="tel:+359897954208"> +359897 954 208</a>
	</p>
	<p><i class="fa fa-map-marker"></i>
		гр.София, 
бул. "Черни връх" №69 <br>
<i class="fa fa-phone"></i>
		<a href="tel:+359896717501"> +359896 717 501</a> </p>
<p>
<i class="fa fa-map-marker"></i> гр.Банско, 
ул. "Гоце Делчев" №"5
	<br><i class="fa fa-phone"></i>
		<a href="tel:+359878916493"> +359878 916 493</a>
	<br><i class="fa fa-phone"></i>
		<a href="tel:+359897954208"> +35989 795 4208</a>
	</p>
<p>
<i class="fa fa-map-marker"></i> к.к. Боровец, х-л Роял Плаза
	<br><i class="fa fa-phone"></i>
		<a href="tel:+359896717501"> +359896 717 501</a> 
	<br><i class="fa fa-phone"></i>
	<a href="tel:+359897954208"> +35989 795 4208</a>
	</p>
<p>
<i class="fa fa-map-marker"></i> к.к Слънчев бряг,Роял Бийч Мол Барсело
	<br><i class="fa fa-phone"></i>
		<a href="tel:+359896717501"> +359896 717 501</a> 
	<br><i class="fa fa-phone"></i>
	<a href="tel:+359897954208"> +35989 795 4208</a>
	</p></div></div>	</div>
	</div>

</div></div>							</div>
		</div>
	</div>
</div>

<div class="footer--row footer-bottom hide-on-desktop layout-full-contained"
	id="cb-row--footer-mobile-bottom"
	data-row-id="bottom" data-show-on="mobile">
	<div
		class="footer--row-inner footer-bottom-inner footer-content-wrap">
		<div class="container">
			<div
				class="hfg-grid nv-footer-content hfg-grid-bottom row--wrapper row "
				data-section="hfg_footer_layout_bottom" >
				<div class="hfg-slot left"><div class="builder-item desktop-left tablet-left mobile-left"><div class="item--inner builder-item--footer-four-widgets"
		data-section="neve_sidebar-widgets-footer-four-widgets"
		data-item-id="footer-four-widgets">
		<div class="widget-area">
		<div id="text-5" class="widget widget_text">			<div class="textwidget"><p>Copyright © 2024 <a href="https://icepoint.eu/">icepoint.eu</a> <span class="sep">| </span>Всички права запазени. | Дизайн и изработка: <a href="https://esaiti.com" target="_blank" rel="noopener">S.I.T Solutions Ltd.</a></p>
</div>
		</div>	</div>
	</div>

</div><div class="builder-item cr"><div class="item--inner"><div class="component-wrap"><div><p>©{current_year}  Copyright Сноу Фешън ЕООД. Всички права запазени. </p>
<span class="dev"> Изработка: <a href="https://esaiti.com">S.I.T. Solutions Ltd.</a></span></div></div></div></div></div>							</div>
		</div>
	</div>
</div>

	</div>
</footer>

</div><!--/.wrapper-->
		<script type="text/javascript">
			window.__webpack_public_path__ = 'https://icepoint.eu/wp-content/plugins/bulgarisation-for-woocommerce/dist/';
		</script>
		<template id="tp-language" data-tp-language="bg_BG"></template><script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/neve\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
			<script>
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>
				<script>
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	
<div id="photoswipe-fullscreen-dialog" class="pswp" tabindex="-1" role="dialog" aria-modal="true" aria-hidden="true" aria-label="Full screen image">
	<div class="pswp__bg"></div>
	<div class="pswp__scroll-wrap">
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--zoom" aria-label="Приближи/отдалечи"></button>
				<button class="pswp__button pswp__button--fs" aria-label="Активиране цял екран"></button>
				<button class="pswp__button pswp__button--share" aria-label="Сподели"></button>
				<button class="pswp__button pswp__button--close" aria-label="Затвори (Esc)"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div>
			</div>
			<button class="pswp__button pswp__button--arrow--left" aria-label="Назад (стрелка наляво)"></button>
			<button class="pswp__button pswp__button--arrow--right" aria-label="Напред (стрелка надясно)"></button>
			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>
		</div>
	</div>
</div>
<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p role="alert">Продуктът не е наличен. Изберете друга комбинация</p>
</script>
<link rel='stylesheet' id='wc-blocks-style-css' href='https://icepoint.eu/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-10.5.3' media='all' />
<link rel='stylesheet' id='photoswipe-css' href='https://icepoint.eu/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min.css?ver=10.5.3' media='all' />
<link rel='stylesheet' id='photoswipe-default-skin-css' href='https://icepoint.eu/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min.css?ver=10.5.3' media='all' />
<script src="https://icepoint.eu/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0" id="jquery-selectBox-js"></script>
<script src="//icepoint.eu/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6" id="wc-prettyPhoto-js" data-wp-strategy="defer"></script>
<script id="jquery-yith-wcwl-js-extra">
var yith_wcwl_l10n = {"ajax_url":"\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","yith_wcwl_button_position":"add-to-cart","multi_wishlist":"","hide_add_button":"1","enable_ajax_loading":"","ajax_loader_url":"https:\/\/icepoint.eu\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg","remove_from_wishlist_after_add_to_cart":"1","is_wishlist_responsive":"1","time_to_close_prettyphoto":"3000","fragments_index_glue":".","reload_on_found_variation":"1","mobile_media_query":"768","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies on your browser are enabled.","added_to_cart_message":"<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem","load_mobile_action":"load_mobile","delete_item_action":"delete_item","save_title_action":"save_title","save_privacy_action":"save_privacy","load_fragments":"load_fragments"},"nonce":{"add_to_wishlist_nonce":"f788fb2b07","remove_from_wishlist_nonce":"11d5082868","reload_wishlist_and_adding_elem_nonce":"3a51c98a4c","load_mobile_nonce":"458ba3cf52","delete_item_nonce":"7e623237ee","save_title_nonce":"e2f570a0a3","save_privacy_nonce":"861119f211","load_fragments_nonce":"8301a505f8"},"redirect_after_ask_estimate":"","ask_estimate_redirect_url":"https:\/\/icepoint.eu"};
</script>
<script src="https://icepoint.eu/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min.js?ver=4.13.0" id="jquery-yith-wcwl-js"></script>
<script src="https://icepoint.eu/wp-content/plugins/bulgarisation-for-woocommerce/dist/frontend-9ac69f295cea65e41c1a.min.js" id="woo-bg-js-frontend-js"></script>
<script id="awdr-main-js-extra">
var awdr_params = {"ajaxurl":"https:\/\/icepoint.eu\/wp-admin\/admin-ajax.php","nonce":"e85469f522","enable_update_price_with_qty":"show_when_matched","refresh_order_review":"0","custom_target_simple_product":"","custom_target_variable_product":"","js_init_trigger":"","awdr_opacity_to_bulk_table":"","awdr_dynamic_bulk_table_status":"0","awdr_dynamic_bulk_table_off":"on","custom_simple_product_id_selector":"","custom_variable_product_id_selector":""};
</script>
<script src="https://icepoint.eu/wp-content/plugins/woo-discount-rules/v2/Assets/Js/site_main.js?ver=2.6.14" id="awdr-main-js"></script>
<script src="https://icepoint.eu/wp-content/plugins/woo-discount-rules/v2/Assets/Js/awdr-dynamic-price.js?ver=2.6.14" id="awdr-dynamic-price-js"></script>
<script src="https://icepoint.eu/wp-includes/js/underscore.min.js?ver=1.13.7" id="underscore-js"></script>
<script id="wp-util-js-extra">
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
</script>
<script src="https://icepoint.eu/wp-includes/js/wp-util.min.js?ver=6.8.5" id="wp-util-js"></script>
<script id="wp-api-request-js-extra">
var wpApiSettings = {"root":"https:\/\/icepoint.eu\/wp-json\/","nonce":"0c29560c64","versionString":"wp\/v2\/"};
</script>
<script src="https://icepoint.eu/wp-includes/js/api-request.min.js?ver=6.8.5" id="wp-api-request-js"></script>
<script src="https://icepoint.eu/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
<script src="https://icepoint.eu/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script src="https://icepoint.eu/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="https://icepoint.eu/wp-includes/js/dist/url.min.js?ver=c2964167dfe2477c14ea" id="wp-url-js"></script>
<script id="wp-api-fetch-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2025-06-26 09:35:39+0000","generator":"GlotPress\/4.0.3","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"bg"},"An unknown error occurred.":["\u0412\u044a\u0437\u043d\u0438\u043a\u043d\u0430 \u043d\u0435\u043e\u0447\u0430\u043a\u0432\u0430\u043d\u0430 \u0433\u0440\u0435\u0448\u043a\u0430."],"The response is not a valid JSON response.":["\u041e\u0442\u0433\u043e\u0432\u043e\u0440\u044a\u0442 \u043d\u0435 \u0435 \u0432\u0430\u043b\u0438\u0434\u0435\u043d JSON \u043e\u0442\u0433\u043e\u0432\u043e\u0440."],"Media upload failed. If this is a photo or a large image, please scale it down and try again.":["\u041a\u0430\u0447\u0432\u0430\u043d\u0435\u0442\u043e \u043d\u0430 \u043c\u0435\u0434\u0438\u0439\u043d\u0438\u0442\u0435 \u0444\u0430\u0439\u043b\u043e\u0432\u0435 \u0435 \u043d\u0435\u0443\u0441\u043f\u0435\u0448\u043d\u043e. \u0410\u043a\u043e \u0442\u043e\u0432\u0430 \u0435 \u0441\u043d\u0438\u043c\u043a\u0430 \u0438\u043b\u0438 \u0433\u043e\u043b\u044f\u043c\u043e \u0438\u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u0438\u0435, \u043c\u043e\u043b\u044f \u043d\u0430\u043c\u0430\u043b\u0435\u0442\u0435 \u0440\u0430\u0437\u043c\u0435\u0440\u0430 \u0438 \u043e\u043f\u0438\u0442\u0430\u0439\u0442\u0435 \u043e\u0442\u043d\u043e\u0432\u043e."],"You are probably offline.":["\u0412\u044a\u0437\u043c\u043e\u0436\u043d\u043e \u0435 \u0434\u0430 \u043d\u044f\u043c\u0430\u0442\u0435 \u0432\u0440\u044a\u0437\u043a\u0430 \u0441 \u0438\u043d\u0442\u0435\u0440\u043d\u0435\u0442."]}},"comment":{"reference":"wp-includes\/js\/dist\/api-fetch.js"}} );
</script>
<script src="https://icepoint.eu/wp-includes/js/dist/api-fetch.min.js?ver=3623a576c78df404ff20" id="wp-api-fetch-js"></script>
<script id="wp-api-fetch-js-after">
wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "https://icepoint.eu/wp-json/" ) );
wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware( "0c29560c64" );
wp.apiFetch.use( wp.apiFetch.nonceMiddleware );
wp.apiFetch.use( wp.apiFetch.mediaUploadMiddleware );
wp.apiFetch.nonceEndpoint = "https://icepoint.eu/wp-admin/admin-ajax.php?action=rest-nonce";
</script>
<script id="woo-variation-swatches-js-extra">
var woo_variation_swatches_options = {"show_variation_label":"1","clear_on_reselect":"","variation_label_separator":":","is_mobile":"","show_variation_stock":"","stock_label_threshold":"5","cart_redirect_after_add":"no","enable_ajax_add_to_cart":"yes","cart_url":"https:\/\/icepoint.eu\/cart\/","is_cart":""};
</script>
<script src="https://icepoint.eu/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min.js?ver=2.2.3" id="woo-variation-swatches-js"></script>
<script id="neve-script-js-extra">
var NeveProperties = {"ajaxurl":"https:\/\/icepoint.eu\/wp-admin\/admin-ajax.php","nonce":"0c29560c64","isRTL":"","isCustomize":""};
</script>
<script src="https://icepoint.eu/wp-content/themes/neve/assets/js/build/modern/frontend.js?ver=4.2.2" id="neve-script-js" async></script>
<script id="neve-script-js-after">
	var html = document.documentElement;
	var theme = html.getAttribute('data-neve-theme') || 'light';
	var variants = {"logo":{"light":{"src":"https:\/\/icepoint.eu\/wp-content\/uploads\/2016\/11\/cropped-ice-point-logo-black@2x-1.png","srcset":"https:\/\/icepoint.eu\/wp-content\/uploads\/2016\/11\/cropped-ice-point-logo-black@2x-1.png 400w, https:\/\/icepoint.eu\/wp-content\/uploads\/2016\/11\/cropped-ice-point-logo-black@2x-1-300x67.png 300w","sizes":"(max-width: 400px) 100vw, 400px"},"dark":{"src":"https:\/\/icepoint.eu\/wp-content\/uploads\/2016\/11\/cropped-ice-point-logo-black@2x-1.png","srcset":"https:\/\/icepoint.eu\/wp-content\/uploads\/2016\/11\/cropped-ice-point-logo-black@2x-1.png 400w, https:\/\/icepoint.eu\/wp-content\/uploads\/2016\/11\/cropped-ice-point-logo-black@2x-1-300x67.png 300w","sizes":"(max-width: 400px) 100vw, 400px"},"same":true}};

	function setCurrentTheme( theme ) {
		var pictures = document.getElementsByClassName( 'neve-site-logo' );
		for(var i = 0; i<pictures.length; i++) {
			var picture = pictures.item(i);
			if( ! picture ) {
				continue;
			};
			var fileExt = picture.src.slice((Math.max(0, picture.src.lastIndexOf(".")) || Infinity) + 1);
			if ( fileExt === 'svg' ) {
				picture.removeAttribute('width');
				picture.removeAttribute('height');
				picture.style = 'width: var(--maxwidth)';
			}
			var compId = picture.getAttribute('data-variant');
			if ( compId && variants[compId] ) {
				var isConditional = variants[compId]['same'];
				if ( theme === 'light' || isConditional || variants[compId]['dark']['src'] === false ) {
					picture.src = variants[compId]['light']['src'];
					picture.srcset = variants[compId]['light']['srcset'] || '';
					picture.sizes = variants[compId]['light']['sizes'];
					continue;
				};
				picture.src = variants[compId]['dark']['src'];
				picture.srcset = variants[compId]['dark']['srcset'] || '';
				picture.sizes = variants[compId]['dark']['sizes'];
			};
		};
	};

	var observer = new MutationObserver(function(mutations) {
		mutations.forEach(function(mutation) {
			if (mutation.type == 'attributes') {
				theme = html.getAttribute('data-neve-theme');
				setCurrentTheme(theme);
			};
		});
	});

	observer.observe(html, {
		attributes: true
	});
function toggleAriaClick() { function toggleAriaExpanded(toggle = 'true') { document.querySelectorAll('button.navbar-toggle').forEach(function(el) { if ( el.classList.contains('caret-wrap') ) { return; } el.setAttribute('aria-expanded', 'true' === el.getAttribute('aria-expanded') ? 'false' : toggle); }); } toggleAriaExpanded(); if ( document.body.hasAttribute('data-ftrap-listener') ) { return; } document.body.setAttribute('data-ftrap-listener', 'true'); document.addEventListener('ftrap-end', function() { toggleAriaExpanded('false'); }); }

			(function($){
				$('body').on( 'added_to_cart', function(){
					var responsiveCart = document.querySelector( '.responsive-nav-cart' );
					if ( responsiveCart ) {
						responsiveCart.classList.remove('cart-is-empty');
					}
				});
			})(jQuery);
		
</script>
<script id="neve-scroll-to-top-js-extra">
var neveScrollOffset = {"offset":"0"};
</script>
<script src="https://icepoint.eu/wp-content/themes/neve/assets/js/build/modern/scroll-to-top.js?ver=4.2.2" id="neve-scroll-to-top-js" async></script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=10.5.3" id="sourcebuster-js-js"></script>
<script id="wc-order-attribution-js-extra">
var wc_order_attribution = {"params":{"lifetime":1.0000000000000000818030539140313095458623138256371021270751953125e-5,"session":30,"base64":false,"ajaxurl":"https:\/\/icepoint.eu\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","utm_source_platform":"current.plt","utm_creative_format":"current.fmt","utm_marketing_tactic":"current.tct","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};
</script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=10.5.3" id="wc-order-attribution-js"></script>
<script src="https://icepoint.eu/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=4.0.0" id="elementor-webpack-runtime-js"></script>
<script src="https://icepoint.eu/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=4.0.0" id="elementor-frontend-modules-js"></script>
<script src="https://icepoint.eu/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
<script id="elementor-frontend-js-extra">
var EAELImageMaskingConfig = {"svg_dir_url":"https:\/\/icepoint.eu\/wp-content\/plugins\/essential-addons-for-elementor-lite\/assets\/front-end\/img\/image-masking\/svg-shapes\/"};
</script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"\u0421\u043f\u043e\u0434\u0435\u043b\u044f\u043d\u0435 \u0432\u044a\u0432 Facebook","shareOnTwitter":"\u0421\u043f\u043e\u0434\u0435\u043b\u044f\u043d\u0435 \u0432 Twitter","pinIt":"\u0417\u0430\u0441\u0442\u043e\u043f\u043e\u0440\u044f\u0432\u0430\u043d\u0435","download":"\u0418\u0437\u0442\u0435\u0433\u043b\u044f\u043d\u0435","downloadImage":"\u0418\u0437\u0442\u0435\u0433\u043b\u044f\u043d\u0435 \u043d\u0430 \u0438\u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u0438\u0435","fullscreen":"\u0426\u044f\u043b \u0435\u043a\u0440\u0430\u043d","zoom":"\u041c\u0430\u0449\u0430\u0431\u0438\u0440\u0430\u043d\u0435","share":"\u0421\u043f\u043e\u0434\u0435\u043b\u044f\u043d\u0435","playVideo":"\u041f\u0443\u0441\u043a\u0430\u043d\u0435 \u043d\u0430 \u0432\u0438\u0434\u0435\u043e\u0442\u043e","previous":"\u041f\u0440\u0435\u0434\u0438\u0448\u043d\u0430","next":"\u0421\u043b\u0435\u0434\u0432\u0430\u0449\u0430","close":"\u0417\u0430\u0442\u0432\u0430\u0440\u044f\u043d\u0435","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"\u041b\u0430\u043f\u0442\u043e\u043f","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"\u0428\u0438\u0440\u043e\u043a \u0435\u043a\u0440\u0430\u043d","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"4.0.0","is_static":false,"experimentalFeatures":{"additional_custom_breakpoints":true,"landing-pages":true,"global_classes_should_enforce_capabilities":true,"e_variables":true,"e_opt_in_v4_page":true,"e_components":true,"e_interactions":true,"e_widget_creation":true,"import-export-customization":true},"urls":{"assets":"https:\/\/icepoint.eu\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/icepoint.eu\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/icepoint.eu\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"989975d11f","atomicFormsSendForm":"66be7fbd07"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1463,"title":"%D0%9C%D0%B0%D1%80%D0%BA%D0%B8%20%7C%20icepoint.eu","excerpt":"","featuredImage":false}};
</script>
<script src="https://icepoint.eu/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=4.0.0" id="elementor-frontend-js"></script>
<script id="eael-general-js-extra">
var localize = {"ajaxurl":"https:\/\/icepoint.eu\/wp-admin\/admin-ajax.php","nonce":"73b97338b2","i18n":{"added":"Added ","compare":"Compare","loading":"Loading..."},"eael_translate_text":{"required_text":"is a required field","invalid_text":"Invalid","billing_text":"Billing","shipping_text":"Shipping","fg_mfp_counter_text":"of"},"page_permalink":"https:\/\/icepoint.eu\/brands\/","cart_redirectition":"no","cart_page_url":"https:\/\/icepoint.eu\/cart\/","el_breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"\u041b\u0430\u043f\u0442\u043e\u043f","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"\u0428\u0438\u0440\u043e\u043a \u0435\u043a\u0440\u0430\u043d","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}};
</script>
<script src="https://icepoint.eu/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min.js?ver=6.5.13" id="eael-general-js"></script>
<script src="https://icepoint.eu/wp-includes/js/hoverIntent.min.js?ver=1.10.2" id="hoverIntent-js"></script>
<script src="https://icepoint.eu/wp-content/plugins/megamenu/js/maxmegamenu.js?ver=3.8.1" id="megamenu-js"></script>
<script src="https://icepoint.eu/wp-content/plugins/bdthemes-prime-slider-lite/assets/js/prime-slider-site.min.js?ver=4.1.11" id="prime-slider-site-js"></script>
<script id="wc-cart-fragments-js-extra">
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_356ef0c3eefe92666af0630650638fa2","fragment_name":"wc_fragments_356ef0c3eefe92666af0630650638fa2","request_timeout":"5000"};
</script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=10.5.3" id="wc-cart-fragments-js" defer data-wp-strategy="defer"></script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21-wc.10.5.3" id="wc-zoom-js" defer data-wp-strategy="defer"></script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js?ver=2.7.2-wc.10.5.3" id="wc-flexslider-js" defer data-wp-strategy="defer"></script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1-wc.10.5.3" id="wc-photoswipe-js" defer data-wp-strategy="defer"></script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1-wc.10.5.3" id="wc-photoswipe-ui-default-js" defer data-wp-strategy="defer"></script>
<script id="wc-add-to-cart-variation-js-extra">
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"\u041d\u044f\u043c\u0430 \u043f\u0440\u043e\u0434\u0443\u043a\u0442\u0438 \u043e\u0442\u0433\u043e\u0432\u0430\u0440\u044f\u0449\u0438 \u043d\u0430 \u0432\u0430\u0448\u0435\u0442\u043e \u0442\u044a\u0440\u0441\u0435\u043d\u0435. \u0418\u0437\u0431\u0435\u0440\u0435\u0442\u0435 \u0434\u0440\u0443\u0433\u0430 \u043a\u043e\u043c\u0431\u0438\u043d\u0430\u0446\u0438\u044f.","i18n_make_a_selection_text":"\u041f\u044a\u0440\u0432\u043e \u0438\u0437\u0431\u0435\u0440\u0435\u0442\u0435 \u043e\u043f\u0446\u0438\u0438 \u043d\u0430 \u043f\u0440\u043e\u0434\u0443\u043a\u0442\u0430 \u043f\u0440\u0435\u0434\u0438 \u0434\u0430 \u0433\u043e \u0434\u043e\u0431\u0430\u0432\u0438\u0442\u0435 \u0432 \u043a\u043e\u043b\u0438\u0447\u043a\u0430\u0442\u0430.","i18n_unavailable_text":"\u041f\u0440\u043e\u0434\u0443\u043a\u0442\u044a\u0442 \u043d\u0435 \u0435 \u043d\u0430\u043b\u0438\u0447\u0435\u043d. \u0418\u0437\u0431\u0435\u0440\u0435\u0442\u0435 \u0434\u0440\u0443\u0433\u0430 \u043a\u043e\u043c\u0431\u0438\u043d\u0430\u0446\u0438\u044f","i18n_reset_alert_text":"Your selection has been reset. Please select some product options before adding this product to your cart."};
</script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=10.5.3" id="wc-add-to-cart-variation-js" defer data-wp-strategy="defer"></script>
<script id="wc-single-product-js-extra">
var wc_single_product_params = {"i18n_required_rating_text":"\u0418\u0437\u0431\u0435\u0440\u0435\u0442\u0435 \u0441\u0442\u043e\u0439\u043d\u043e\u0441\u0442","i18n_rating_options":["1 \u043e\u0442 5 \u0437\u0432\u0435\u0437\u0434\u0438","2 \u043e\u0442 5 \u0437\u0432\u0435\u0437\u0434\u0438","3 of 5 stars","4 of 5 stars","5 \u043e\u0442 5 \u0437\u0432\u0435\u0437\u0434\u0438"],"i18n_product_gallery_trigger_text":"View full-screen image gallery","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
</script>
<script src="https://icepoint.eu/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js?ver=10.5.3" id="wc-single-product-js" defer data-wp-strategy="defer"></script>
</body>

</html>
