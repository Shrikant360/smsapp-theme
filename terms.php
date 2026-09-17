<?php
/*
Template Name: terms new
*/

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="en-US" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->
<head><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>class RocketLazyLoadScripts{constructor(){this.v="1.2.3",this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this._triggerListener.bind(this),this.touchStartHandler=this._onTouchStart.bind(this),this.touchMoveHandler=this._onTouchMove.bind(this),this.touchEndHandler=this._onTouchEnd.bind(this),this.clickHandler=this._onClick.bind(this),this.interceptedClicks=[],window.addEventListener("pageshow",t=>{this.persisted=t.persisted}),window.addEventListener("DOMContentLoaded",()=>{this._preconnect3rdParties()}),this.delayedScripts={normal:[],async:[],defer:[]},this.trash=[],this.allJQueries=[]}_addUserInteractionListener(t){if(document.hidden){t._triggerListener();return}this.triggerEvents.forEach(e=>window.addEventListener(e,t.userEventHandler,{passive:!0})),window.addEventListener("touchstart",t.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",t.touchStartHandler),document.addEventListener("visibilitychange",t.userEventHandler)}_removeUserInteractionListener(){this.triggerEvents.forEach(t=>window.removeEventListener(t,this.userEventHandler,{passive:!0})),document.removeEventListener("visibilitychange",this.userEventHandler)}_onTouchStart(t){"HTML"!==t.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),t.target.addEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"onclick","rocket-onclick"),this._pendingClickStarted())}_onTouchMove(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),t.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"rocket-onclick","onclick"),this._pendingClickFinished()}_onTouchEnd(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}_onClick(t){t.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"rocket-onclick","onclick"),this.interceptedClicks.push(t),t.preventDefault(),t.stopPropagation(),t.stopImmediatePropagation(),this._pendingClickFinished()}_replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach(t=>{t.target.dispatchEvent(new MouseEvent("click",{view:t.view,bubbles:!0,cancelable:!0}))})}_waitForPendingClicks(){return new Promise(t=>{this._isClickPending?this._pendingClickFinished=t:t()})}_pendingClickStarted(){this._isClickPending=!0}_pendingClickFinished(){this._isClickPending=!1}_renameDOMAttribute(t,e,r){t.hasAttribute&&t.hasAttribute(e)&&(event.target.setAttribute(r,event.target.getAttribute(e)),event.target.removeAttribute(e))}_triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}_preconnect3rdParties(){let t=[];document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(e=>{if(e.hasAttribute("src")){let r=new URL(e.src).origin;r!==location.origin&&t.push({src:r,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}}),t=[...new Map(t.map(t=>[JSON.stringify(t),t])).values()],this._batchInjectResourceHints(t,"preconnect")}async _loadEverythingNow(){this.lastBreath=Date.now(),this._delayEventListeners(this),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async);try{await this._triggerDOMContentLoaded(),await this._triggerWindowLoad()}catch(t){console.error(t)}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this._waitForPendingClicks().then(()=>{this._replayClicks()}),this._emptyTrash()}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)})}async _transformScript(t){return new Promise((await this._littleBreath(),navigator.userAgent.indexOf("Firefox/")>0||""===navigator.vendor)?e=>{let r=document.createElement("script");[...t.attributes].forEach(t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),r.setAttribute(e,t.nodeValue))}),t.text&&(r.text=t.text),r.hasAttribute("src")?(r.addEventListener("load",e),r.addEventListener("error",e)):(r.text=t.text,e());try{t.parentNode.replaceChild(r,t)}catch(i){e()}}:async e=>{function r(){t.setAttribute("data-rocket-status","failed"),e()}try{let i=t.getAttribute("data-rocket-type"),n=t.getAttribute("data-rocket-src");t.text,i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",function r(){t.setAttribute("data-rocket-status","executed"),e()}),t.addEventListener("error",r),n?(t.removeAttribute("data-rocket-src"),t.src=n):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}catch(s){r()}})}async _loadScriptsFromList(t){let e=t.shift();return e&&e.isConnected?(await this._transformScript(e),this._loadScriptsFromList(t)):Promise.resolve()}_preloadAllScripts(){this._batchInjectResourceHints([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}_batchInjectResourceHints(t,e){var r=document.createDocumentFragment();t.forEach(t=>{let i=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(i){let n=document.createElement("link");n.href=i,n.rel=e,"preconnect"!==e&&(n.as="script"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),r.appendChild(n),this.trash.push(n)}}),document.head.appendChild(r)}_delayEventListeners(t){let e={};function r(t,r){!function t(r){!e[r]&&(e[r]={originalFunctions:{add:r.addEventListener,remove:r.removeEventListener},eventsToRewrite:[]},r.addEventListener=function(){arguments[0]=i(arguments[0]),e[r].originalFunctions.add.apply(r,arguments)},r.removeEventListener=function(){arguments[0]=i(arguments[0]),e[r].originalFunctions.remove.apply(r,arguments)});function i(t){return e[r].eventsToRewrite.indexOf(t)>=0?"rocket-"+t:t}}(t),e[t].eventsToRewrite.push(r)}function i(t,e){let r=t[e];Object.defineProperty(t,e,{get:()=>r||function(){},set(i){t["rocket"+e]=r=i}})}r(document,"DOMContentLoaded"),r(window,"DOMContentLoaded"),r(window,"load"),r(window,"pageshow"),r(document,"readystatechange"),i(document,"onreadystatechange"),i(window,"onload"),i(window,"onpageshow")}_delayJQueryReady(t){let e;function r(r){if(r&&r.fn&&!t.allJQueries.includes(r)){r.fn.ready=r.fn.init.prototype.ready=function(e){return t.domReadyFired?e.bind(document)(r):document.addEventListener("rocket-DOMContentLoaded",()=>e.bind(document)(r)),r([])};let i=r.fn.on;r.fn.on=r.fn.init.prototype.on=function(){if(this[0]===window){function t(t){return t.split(" ").map(t=>"load"===t||0===t.indexOf("load.")?"rocket-jquery-load":t).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=t(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach(e=>{let r=arguments[0][e];delete arguments[0][e],arguments[0][t(e)]=r})}return i.apply(this,arguments),this},t.allJQueries.push(r)}e=r}r(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){r(t)}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._littleBreath(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._littleBreath(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._littleBreath(),window.dispatchEvent(new Event("rocket-load")),await this._littleBreath(),window.rocketonload&&window.rocketonload(),await this._littleBreath(),this.allJQueries.forEach(t=>t(window).trigger("rocket-jquery-load")),await this._littleBreath();let t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this._littleBreath(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}_handleDocumentWrite(){let t=new Map;document.write=document.writeln=function(e){let r=document.currentScript;r||console.error("WPRocket unable to document.write this: "+e);let i=document.createRange(),n=r.parentElement,s=t.get(r);void 0===s&&(s=r.nextSibling,t.set(r,s));let a=document.createDocumentFragment();i.setStart(a,0),a.appendChild(i.createContextualFragment(e)),n.insertBefore(a,s)}}async _littleBreath(){Date.now()-this.lastBreath>45&&(await this._requestAnimFrame(),this.lastBreath=Date.now())}async _requestAnimFrame(){return document.hidden?new Promise(t=>setTimeout(t)):new Promise(t=>requestAnimationFrame(t))}_emptyTrash(){this.trash.forEach(t=>t.remove())}static run(){let t=new RocketLazyLoadScripts;t._addUserInteractionListener(t)}}RocketLazyLoadScripts.run();</script>

 <!-- Google Tag Manager -->
<script type="rocketlazyloadscript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MP4GG7G2');</script>
<!-- End Google Tag Manager -->	
<!-- Google tag (gtag.js) added by shivam -->
<script type="rocketlazyloadscript" async data-rocket-src="https://www.googletagmanager.com/gtag/js?id=G-3L49KM5KJ4"></script>
<script type="rocketlazyloadscript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-3L49KM5KJ4');
</script>
<meta name="msvalidate.01" content="0C1762AF7C2536EFC2F53A0F6BC5A04B" />
    <meta name="google-site-verification" content="QQtN8omDpc2hzU4CYIMz9gbRIl5tkLll9yJ42DeGk_k" />
    <meta name="p:domain_verify" content="720aa08f1e0162ac6aeb43207ff703e4" />

    <script type="rocketlazyloadscript">
		 (function(){ window.ldfdr = window.ldfdr || {}; (function(d, s, ss, fs){ fs = d.getElementsByTagName(s)[0]; function ce(src){ var cs = d.createElement(s); cs.async = true; cs.src = src; setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1); } ce(ss); })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_kn9Eq4Rmqql7RlvP.js'); })(); 


	</script>

<link rel="preload" fetchpriority="high" as="image" href="https://360smsapp.com/wp-content/uploads/2024/02/BGG.webp">

	<link data-minify="1" rel="stylesheet" href="https://360smsapp.com/wp-content/cache/min/1/ajax/libs/font-awesome/5.15.3/css/all.min.css?ver=1767963786">

	
	
	<!-- google adword script-->
	<script type="rocketlazyloadscript">
	function getParam(p) {
  var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
  return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}

function getExpiryRecord(value) {
  var expiryPeriod = 90 * 24 * 60 * 60 * 1000;

  var expiryDate = new Date().getTime() + expiryPeriod;
  return {
    value: value,
    expiryDate: expiryDate
  };
}

function addGclid() {
  var gclidParam = getParam('gclid');
  var gclidFormFields = ['00N4N00000IVjck'];
  var gclidRecord = null;
  var currGclidFormField;

  var gclsrcParam = getParam('gclsrc');
  var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;

  gclidFormFields.forEach(function (field) {
    if (document.getElementById(field)) {
      currGclidFormField = document.getElementById(field);
    }
  });

  if (gclidParam && isGclsrcValid) {
    gclidRecord = getExpiryRecord(gclidParam);
    localStorage.setItem('gclid', JSON.stringify(gclidRecord));
  }

  var gclid = gclidRecord || JSON.parse(localStorage.getItem('gclid'));
  var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;

  if (currGclidFormField && isGclidValid) {
    currGclidFormField.value = gclid.value;
  }
}

window.addEventListener('load', addGclid);
	
	</script>
	
	<!-- Google Analytics Goal Script -->
    <script type="rocketlazyloadscript">
		setTimeout(() => {
  	let b1 = document.querySelector("#sales360");
  	if(b1) {
      b1.addEventListener("click", () => {
        gtag('event', 'Click button', {
            'event_category': 'Salesforce Appexchange US',
            'event_label': 'Salesforce Appexchange Button',
        });
      	console.log("anchor12")
    });
    }
  
  	a5 = document.querySelector("#logo360");
  	if(a5) {
    	a5.addEventListener("click", () => {
          gtag('event', 'Clicks', {
              'event_category': 'Landing Page US',
              'event_label': 'total clicks on logo',
          });
          console.log("anchor12")
      });
    }
  	
  	let b2 = document.querySelector("#call360");
  	if(b2) {
      b2.addEventListener("click", () => {
          gtag('event', 'Click number', {
              'event_category': 'Landing Page USA Number',
              'event_label': 'USA Number',
          });
          console.log("anchor12")
      });
    }
  	
  
  	let a = document.querySelector(".gem-contacts-item.gem-contacts-phone a:nth-of-type(1)");
  	if(a) {
    	a.addEventListener("click", () => {
          gtag('event', 'USA Number', {
              'event_category': 'Click Number',
              'event_label': 'USA Number - Top Bar',
          });
          console.log("anchor11")
      });
    }
  	
  	let a2 = document.querySelector("#slide-9-layer-8");
    if(a2) {
    	a2.addEventListener("click", () => {
          gtag('event', 'button Click', {
              'event_category': 'app Exchange',
              'event_label': 'try It Free - Home',
          });
          console.log("anchor2")
      });
    }
    
  
    let a3 = document.querySelector("#GDlNZAZ-1566979358244");
    if(a3) {
    	a3.addEventListener("click", () => {
          gtag('event', 'Button Click', {
              'event_category': 'Tawk.to Chat',
              'event_label': 'Chat on 360 SMS App',
          });
          console.log("click2")
    	});
    }
  	
  	let a4 = document.querySelector(".gem-contacts-item.gem-contacts-phone a:nth-of-type(1)");
  	if(a4) {
    	a4.addEventListener("click", () => {
          gtag('event', 'USA Number', {
              'event_category': 'Click Number',
              'event_label': 'USA Number - Top Bar',
          });
          console.log("click2")
      });
    }   
  	
  	
  	let a6 = document.querySelector(".gem-contacts-item.gem-contacts-phone a:nth-of-type(1)");
  	if(a6) {
        a6.addEventListener("click", () => {
          gtag('event', 'USA Number', {
              'event_category': 'Click Number',
              'event_label': 'USA Number - Top Bar',
          });
          console.log("anchor12")
      });
    }
  	
  	
  	let a7 = document.querySelector(".gem-contacts-item.gem-contacts-phone a:nth-of-type(2)");
  	if(a7) {
      a7.addEventListener("click", () => {
        gtag('event', 'AUS Number', {
            'event_category': 'Number Clicks',
            'event_label': 'AUS Number - Top Bar',
        });
      	console.log("anchor12")
    });
    }
  	
  
  	let a8 = document.querySelector(".gem-contacts-item.gem-contacts-phone a:nth-of-type(3)");
  	if(a8) {
        a8.addEventListener("click", () => {
          gtag('event', 'AUS Number', {
              'event_category': 'Number Clicks',
              'event_label': 'AUS Number - Top Bar',
          });
          console.log("anchor12")
      });
    }
  	
  
 	let a9 = document.querySelector(".gem-contacts-item.gem-contacts-email a");
  	if(a9) {
       a9.addEventListener("click", () => {
          gtag('event', 'UK Number', {
              'event_category': 'Number Clicks',
              'event_label': 'UK Number - Top Bar',
          });
          console.log("anchor12")
      });
    }
  	
  
  	let a10 = document.querySelector(".top-area-button a");
  	if(a10) {
       a10.addEventListener("click", () => {
          gtag('event', 'Button Clicks', {
              'event_category': 'Salesforce Consulting',
              'event_label': 'Salesforce Button - Top Bar',
          });
          console.log("anchor12")
      });
    }
  	
  
  	let a11 = document.querySelector(".ssb-btns-right a");
  	if(a11) {
    	a11.addEventListener("click", () => {
          gtag('event', 'Click Button', {
              'event_category': 'Contact Form',
              'event_label': 'Contact Button - Hover',
          });
          console.log("anchor12")
      });
    }
  	
    
    let a12 = document.querySelector("#logo-au");
  	if(a12) {
    	a12.addEventListener("click", () => {
          gtag('event', 'Clicks', {
              'event_category': 'AUS Logo',
              'event_label': 'Click on Logo',
          });
          console.log("anchor12")
      });
    }
  
    
  let a13 = document.querySelector("#call-au");
  	if(a13) {
    	a13.addEventListener("click", () => {
          gtag('event', 'Number Clicks', {
              'event_category': 'AUS Number',
              'event_label': 'Clicks on AUS Number',
          });
          console.log("anchor13")
      });
    }
  
  
  let a14 = document.querySelector("#sales-au");
  	if(a14) {
    	a14.addEventListener("click", () => {
          gtag('event', 'Clicks on link', {
              'event_category': 'AUS Appexchange',
              'event_label': 'AUS Landing Page Link',
          });
          console.log("anchor14")
      });
    }
  
  	
  let a15 = document.querySelector("#logo-emea");
  	if(a15) {
    	a15.addEventListener("click", () => {
          gtag('event', 'Clicks on logo', {
              'event_category': 'EMEA Logo',
              'event_label': 'EMEA Landing Page Logo',
          });
          console.log("anchor12")
      });
    }
  
  
   let a16 = document.querySelector("#call-emea");
  	if(a16) {
    	a16.addEventListener("click", () => {
          gtag('event', 'Clicks on number', {
              'event_category': 'EMEA Number L.P',
              'event_label': 'EMEA Number clicks',
          });
          console.log("anchor12")
      });
    }
  
  
}, 5000);
	</script>
	<script type="rocketlazyloadscript" scr="https://360smsapp.com/wp-content/themes/thegem-child/js/jquery-1.12.4.min.js" async></script>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="https://360smsapp.com/xmlrpc.php">
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<!-- This site is optimized with the Yoast SEO plugin v20.10 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Terms of service - 360 SMS App</title>
	<meta name="description" content="Read our Terms of Service to understand user rights, app usage policies, and legal guidelines for using 360 SMS solutions." />
	<link rel="canonical" href="https://360smsapp.com/terms-of-service/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Terms of service - 360 SMS App" />
	<meta property="og:description" content="Read our Terms of Service to understand user rights, app usage policies, and legal guidelines for using 360 SMS solutions." />
	<meta property="og:url" content="https://360smsapp.com/terms-of-service/" />
	<meta property="og:site_name" content="360 SMS App" />
	<meta property="article:modified_time" content="2026-01-09T13:32:35+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="108 minutes" />
	
	<!-- / Yoast SEO plugin. -->



<link rel="alternate" type="application/rss+xml" title="360 SMS App &raquo; Feed" href="https://360smsapp.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="360 SMS App &raquo; Comments Feed" href="https://360smsapp.com/comments/feed/" />
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/360smsapp.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.3"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){p.clearRect(0,0,i.width,i.height),p.fillText(e,0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(t,0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(p&&p.fillText)switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!s("\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!s("\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
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
	<style type="text/css" media="all">
.wpautoterms-footer{background-color:#ffffff;text-align:center;}
.wpautoterms-footer a{color:#000000;font-family:Arial, sans-serif;font-size:14px;}
.wpautoterms-footer .separator{color:#cccccc;font-family:Arial, sans-serif;font-size:14px;}</style>
<link data-minify="1" rel='stylesheet' id='thegem-preloader-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/css/thegem-preloader.css?ver=1767963786' type='text/css' media='all' />
<style id='thegem-preloader-inline-css' type='text/css'>

		body:not(.compose-mode) .gem-icon-style-gradient span,
		body:not(.compose-mode) .gem-icon .gem-icon-half-1,
		body:not(.compose-mode) .gem-icon .gem-icon-half-2 {
			opacity: 0 !important;
			}
</style>
<link data-minify="1" rel='stylesheet' id='thegem-reset-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/css/thegem-reset.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='thegem-grid-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/css/thegem-grid.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='thegem-header-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/css/thegem-header.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='thegem-style-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/style.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='thegem-child-style-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem-child/style.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='thegem-widgets-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/css/thegem-widgets.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='thegem-new-css-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/css/thegem-new-css.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='perevazka-css-css-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/css/thegem-perevazka-css.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" crossorigin="anonymous" rel='stylesheet' id='thegem-google-fonts-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/uploads/omgf/thegem-google-fonts/thegem-google-fonts.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='thegem-custom-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem-child/css/custom-8iVusr9D.css?ver=1767963786' type='text/css' media='all' />
<style id='thegem-custom-inline-css' type='text/css'>
.vc_custom_1641996435621{margin-bottom: 0px !important;padding-bottom: 20px !important;background-color: #e9e9e9 !important;}.vc_custom_1642070256497{padding-top: 40px !important;padding-bottom: 10px !important;}.vc_custom_1641999616331{padding-top: 40px !important;padding-bottom: 10px !important;}.vc_custom_1647505980210{padding-left: 10px !important;}.vc_custom_1644231408267{margin-top: 20px !important;}.vc_custom_1642069590953{margin-top: -2px !important;}.vc_custom_1764238173981{margin-bottom: 0.8em !important;padding-left: 10px !important;}.vc_custom_1764237782005{padding-left: 10px !important;}.vc_custom_1629902298981{margin-top: 20px !important;}.vc_custom_1647929837996{padding-left: 10px !important;}.vc_custom_1649952722813{margin-top: 20px !important;}.vc_custom_1746705387747{padding-top: 10px !important;padding-bottom: 10px !important;}.foot_menu ul.menu{border:none !important} div#socialwidth {
    margin-top: 10px;
}  .socials-list .socials-item {
   padding: 0px !important;
    border: none;}
.menues-footer ul li a {
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    line-height: 25px;
    font-family: Montserrat;
}


@media (min-width: 1212px) {
   .customer-footer .container {
        
    }

.foot_menu ul.menu li.menu-item{
    border:none !important;
    width:calc(100% / 2 - 6px) !important;
    float:left !important;
    
}
.cus-line-height{
    line-height:35px;
}
.foot_menu ul.menu li.menu-item a{
    border:none !important;
    color:#f5f5f5 !important;
    padding:12px 5px 12px 5px !important;
} 
#mobilerow
{
  display: none;
} 
.footerform .input-mail
{
    /*background-color: rgb(244 246 247 / 0%);*/
    /*padding: 6px 11px;*/
    /*width: 100%;*/
    background-color: rgb(244 246 247 / 0%);
    padding: 6px 11px !important;
    width: 169.95px !important;
    max-width: 100%;
    font-size: 15px;
    border: 1px solid #fff;
    color: #fff;
    height: 40px;
    margin-top: 20px !important;
    margin-left: 0px !important;
    
} 
.footerform form{
    width:100%;
}
.d-flex {
    display: -webkit-box!important;
    display: -ms-flexbox!important;
    display: flex!important;
}
.footerform .input-subs{
    background-color: rgb(108 193 222);
	position: relative;
    display: inline-block;
    text-align: center;
    text-transform: uppercase;
    white-space: nowrap;
    border: 0 none;
    vertical-align: middle;
    height: 40px;
    line-height: 40px;
    padding: 0 17px;
    font-size: 14px;margin-bottom:5px;
    /* margin: 10px; */
    -o-transition: all .3s;
    -webkit-transition: all .3s;
    transition: all .3s;
    border-radius: 3px;
    margin-top: 20px;
    width:42% !important;
	}
.footerform h5
{
	color: #fff;
    font-size: 17px;
}
.footerform .vc_column-inner, div#p-desk-0 .vc_column-inner {
	padding-left:0px;
	padding-right:0px;
}
@media only screen and (max-width:768px){
    .footerform{
        padding:0px 0px!important;
    } 
    .footer{   
        background-color: #181828;
}
    .footerform .input-mail{
        width: 125.95px !important;
    }
}
.socials-item-icon{
    font-size:36px;
}

@media only screen and (max-width: 600px){
  #desktoprow{
    display: none;
  }
  #mobilerow{
    display: block;
        padding-left: 4%;

  }
}
.footerform .input-mail{
    background-color: rgb(244 246 247 / 0%);
    padding: 6px 11px;
    width: 100%;
    max-width: 100%;
    font-size: 15px;
    border-radius: unset;
}
.footerform form{
    background:none;
    padding:0px;
}
.footerform .input-subs{
    background-color: rgb(108 193 222);
	position: relative;
    display: inline-block;
    text-align: center;
    text-transform: uppercase;
    white-space: nowrap;
    border: 0 none;
    vertical-align: middle;
    height: 40px;
    line-height: 40px;
    padding: 0 17px;
    font-size: 14px;
    /* margin: 10px; */
    -o-transition: all .3s;
    -webkit-transition: all .3s;
    transition: all .3s;
    border-radius: 3px;
    margin-top: 20px;
    border-radius: unset;
    
}
.footerform h5{
	color: #fff;
    font-size: 17px
    
}
footer.custom-footer p {
    font-size: 16px;
    color: #fff;
}
.footerform .vc_column-inner {
	padding-left:0px;
	padding-right:0px;
}
.otherbtn a {
    width: 100%;
    max-width: 298px;
    margin-left: -24px !important;
    font-size: 16px !important;
    font-weight: 600;
    letter-spacing: 0px;
    /* font-family: fantasy; */
    font-family: Montserrat;
}
@media only screen and (max-width: 1024px) {
.otherbtn a {
    width: 100%;
    max-width: 270px;
    margin-left: 0px !important;
	font-size: 10px !important;
    }
}
@media screen and (min-device-width: 750px) and (max-device-width: 800px){
.footerlogo1 {
    width: 80% !important;
    height: 75%;
}
    .text-left768{
       margin-right: 3em;
    }
}
.responsivebtn a{
	width: 100%;
    max-width: 300px;
    font-size: 16px;
    FONT-WEIGHT: 600;
    LETTER-SPACING: 1PX;font-family: Montserrat;
}
div#footerfourlogo {
    max-width: 750px !important;
    margin: 0 auto;
}
div#footerfourlogo .vc_column_container > .vc_column-inner {
    padding-left: 5px;
    padding-right: 5px;
}
@media only screen and (min-width:768px){
   #desktoprow{
    display: flex;
    margin: auto 2%;
  }
  #mobilerow{
    display: none;
  }   
}
@media screen and (max-width:760px) and (min-width:280px){
  #desktoprow{
    display: none;
  }
  #mobilerow{
    display: block;
  }
}

.wpb_text_column ul.check-dots li:before{
    background:none !important;
}
#page-title {background-color: #333144FF;padding-top: 80px;padding-bottom: 80px;}#page-title h1,#page-title .title-rich-content {color: #FFFFFFFF;}.page-title-excerpt {color: #FFFFFFFF;margin-top: 18px;}#page-title .page-title-title {margin-top: 0px;}#page-title .page-title-title .styled-subtitle.light,#page-title .page-title-excerpt .styled-subtitle.light{ font-family: var(--thegem-to-light-title-font-family); font-style: normal; font-weight: normal;}#page-title .page-title-title .title-main-menu,#page-title .page-title-excerpt .title-main-menu{ font-family: var(--thegem-to-menu-font-family); font-style: var(--thegem-to-menu-font-style); font-weight: var(--thegem-to-menu-font-weight); text-transform: var(--thegem-to-menu-text-transform); font-size: var(--thegem-to-menu-font-size); line-height: var(--thegem-to-menu-line-height); letter-spacing: var(--thegem-to-menu-letter-spacing, 0);}#page-title .page-title-title .title-main-menu.light,#page-title .page-title-excerpt .title-main-menu.light{ font-family: var(--thegem-to-light-title-font-family); font-style: normal; font-weight: normal;}#page-title .page-title-title .title-body,#page-title .page-title-excerpt .title-body{ font-family: var(--thegem-to-body-font-family); font-style: var(--thegem-to-body-font-style); font-weight: var(--thegem-to-body-font-weight); text-transform: var(--thegem-to-body-text-transform, none); font-size: var(--thegem-to-body-font-size); line-height: var(--thegem-to-body-line-height); letter-spacing: var(--thegem-to-body-letter-spacing);}#page-title .page-title-title .title-body.light,#page-title .page-title-excerpt .title-body.light{ font-family: var(--thegem-to-light-title-font-family); font-style: normal; font-weight: normal;}#page-title .page-title-title .title-tiny-body,#page-title .page-title-excerpt .title-tiny-body{ font-family: var(--thegem-to-body-tiny-font-family); font-style: var(--thegem-to-body-tiny-font-style); font-weight: var(--thegem-to-body-tiny-font-weight); text-transform: var(--thegem-to-body-tiny-text-transform, none); font-size: var(--thegem-to-body-tiny-font-size); line-height: var(--thegem-to-body-tiny-line-height); letter-spacing: var(--thegem-to-body-tiny-letter-spacing);}#page-title .page-title-title .title-tiny-body.light,#page-title .page-title-excerpt .title-tiny-body.light{ font-family: var(--thegem-to-light-title-font-family); font-style: normal; font-weight: normal;}.page-title-inner,body .breadcrumbs{padding-left: 0px;padding-right: 0px;}body .page-title-block .breadcrumbs-container{	text-align: center;}.page-breadcrumbs{	position: relative;	display: flex;	width: 100%;	align-items: center;	min-height: 70px;	z-index: 1;}.fullwidth-content > .page-breadcrumbs {	padding-left: 21px;	padding-right: 21px;}.page-breadcrumbs.page-breadcrumbs--left{	justify-content: flex-start;	text-align: left;}.page-breadcrumbs.page-breadcrumbs--center{	justify-content: center;	text-align: center;}.page-breadcrumbs.page-breadcrumbs--right{	justify-content: flex-end;	text-align: right;}.page-breadcrumbs ul{	display: flex;	flex-wrap: wrap;	padding: 0;	margin: 0;	list-style-type: none;}.page-breadcrumbs ul li{	position: relative;}.page-breadcrumbs ul li:not(:last-child){	padding-right: 20px;	margin-right: 5px;}.page-breadcrumbs ul li:not(:last-child):after{	font-family: 'thegem-icons';	content: '\e601';	position: absolute;	right: 0;	top: 50%;	transform: translateY(-50%);	line-height: 1;}.page-breadcrumbs ul li a,.page-breadcrumbs ul li:not(:last-child):after{	color: #99A9B5FF;}.page-breadcrumbs ul li{	color: #3C3950FF;}.page-breadcrumbs ul li a:hover{	color: #3C3950FF;}.block-content {padding-top: 135px;}.block-content:last-of-type {padding-bottom: 110px;}#top-area {	display: block;}@media (max-width: 991px) {#page-title {padding-top: 80px;padding-bottom: 80px;}.page-title-inner, body .breadcrumbs{padding-left: 0px;padding-right: 0px;}.page-title-excerpt {margin-top: 18px;}#page-title .page-title-title {margin-top: 0px;}.block-content {}.block-content:last-of-type {}#top-area {	display: block;}}@media (max-width: 767px) {#page-title {padding-top: 80px;padding-bottom: 80px;}.page-title-inner,body .breadcrumbs{padding-left: 0px;padding-right: 0px;}.page-title-excerpt {margin-top: 18px;}#page-title .page-title-title {margin-top: 0px;}.block-content {}.block-content:last-of-type {}#top-area {	display: none;}}
</style>
<link data-minify="1" rel='stylesheet' id='js_composer_front-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='thegem_js_composer_front-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/css/thegem-js_composer_columns.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='thegem-additional-blog-1-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/css/thegem-additional-blog-1.css?ver=1767963786' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-fancybox-css' href='https://360smsapp.com/wp-content/themes/thegem/js/fancyBox/jquery.fancybox.min.css?ver=5.7.2' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='thegem-vc_elements-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/css/thegem-vc_elements.css?ver=1767963786' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css' href='https://360smsapp.com/wp-includes/css/dist/block-library/style.min.css?ver=6.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='classic-theme-styles-css' href='https://360smsapp.com/wp-includes/css/classic-themes.min.css?ver=6.2.3' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link data-minify="1" rel='stylesheet' id='wpautoterms_css-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/plugins/auto-terms-of-service-and-privacy-policy/css/wpautoterms.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='cookie-law-info-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-public.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='cookie-law-info-gdpr-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-gdpr.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='wp-faq-schema-jquery-ui-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/plugins/faq-schema-for-pages-and-posts/css/jquery-ui.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='dashicons-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-includes/css/dashicons.min.css?ver=1767963786' type='text/css' media='all' />
<link rel='stylesheet' id='post-views-counter-frontend-css' href='https://360smsapp.com/wp-content/plugins/post-views-counter/css/frontend.min.css?ver=1.3.13' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='parent-style-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem/style.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='child-style-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem-child/style.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-icons-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=1767963786' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://360smsapp.com/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.17.2' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='swiper-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=1767963786' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-59539-css' href='https://360smsapp.com/wp-content/uploads/elementor/css/post-59539.css?ver=1755843205' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css' href='https://360smsapp.com/wp-content/uploads/elementor/css/global.css?ver=1755843205' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='malinky-ajax-pagination-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/plugins/malinky-ajax-pagination1/css/style.css?ver=1767963786' type='text/css' media='all' />
<link data-minify="1" crossorigin="anonymous" rel='stylesheet' id='google-fonts-1-css' href='https://360smsapp.com/wp-content/cache/min/1/wp-content/uploads/omgf/google-fonts-1/google-fonts-1.css?ver=1767963786' type='text/css' media='all' />
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">function fullHeightRow() {
			var fullHeight,
				offsetTop,
				element = document.getElementsByClassName('vc_row-o-full-height')[0];
			if (element) {
				fullHeight = window.innerHeight;
				offsetTop = window.pageYOffset + element.getBoundingClientRect().top;
				if (offsetTop < fullHeight) {
					fullHeight = 100 - offsetTop / (fullHeight / 100);
					element.style.minHeight = fullHeight + 'vh'
				}
			}
		}</script><script type="rocketlazyloadscript" data-rocket-type='text/javascript' data-rocket-src='https://360smsapp.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.4' id='jquery-core-js'></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' data-rocket-src='https://360smsapp.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0' id='jquery-migrate-js'></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' data-rocket-src='https://360smsapp.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2' id='wp-polyfill-inert-js'></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' data-rocket-src='https://360smsapp.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11' id='regenerator-runtime-js'></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' data-rocket-src='https://360smsapp.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' data-rocket-src='https://360smsapp.com/wp-includes/js/dist/dom-ready.min.js?ver=392bdd43726760d1f3ca' id='wp-dom-ready-js'></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' data-rocket-src='https://360smsapp.com/wp-content/cache/min/1/wp-content/plugins/auto-terms-of-service-and-privacy-policy/js/base.js?ver=1767963786' id='wpautoterms_base-js'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/html5.js?ver=5.7.2' id='html5-js'></script>
<![endif]-->
<script type='text/javascript' id='cookie-law-info-js-extra'>
/* <![CDATA[ */
var Cli_Data = {"nn_cookie_ids":[],"cookielist":[],"non_necessary_cookies":[],"ccpaEnabled":"","ccpaRegionBased":"","ccpaBarEnabled":"","strictlyEnabled":["necessary","obligatoire"],"ccpaType":"gdpr","js_blocking":"1","custom_integration":"","triggerDomRefresh":"","secure_cookies":""};
var cli_cookiebar_settings = {"animate_speed_hide":"500","animate_speed_show":"500","background":"#000000","border":"#444","border_on":"","button_1_button_colour":"#000","button_1_button_hover":"#000000","button_1_link_colour":"#fff","button_1_as_button":"1","button_1_new_win":"","button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#444","button_2_as_button":"","button_2_hidebar":"","button_3_button_colour":"#000","button_3_button_hover":"#000000","button_3_link_colour":"#fff","button_3_as_button":"1","button_3_new_win":"","button_4_button_colour":"#000","button_4_button_hover":"#000000","button_4_link_colour":"#fff","button_4_as_button":"1","button_7_button_colour":"#1e73be","button_7_button_hover":"#185c98","button_7_link_colour":"#fff","button_7_as_button":"1","button_7_new_win":"","font_family":"inherit","header_fix":"","notify_animate_hide":"","notify_animate_show":"","notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"bottom","scroll_close":"","scroll_close_reload":"1","accept_close_reload":"1","reject_close_reload":"1","showagain_tab":"1","showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#ffffff","show_once_yn":"","show_once":"10000","logging_on":"","as_popup":"","popup_overlay":"1","bar_heading_text":"","cookie_bar_as":"banner","popup_showagain_position":"bottom-right","widget_position":"left"};
var log_object = {"ajax_url":"https:\/\/360smsapp.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' data-rocket-src='https://360smsapp.com/wp-content/cache/min/1/wp-content/plugins/cookie-law-info/legacy/public/js/cookie-law-info-public.js?ver=1767963786' id='cookie-law-info-js'></script>
<script type='text/javascript' id='webinar-filter-js-extra'>
/* <![CDATA[ */
var webinar = {"ajaxurl":"https:\/\/360smsapp.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' data-rocket-src='https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem-child/js/webinar-ajax.js?ver=1767963786' id='webinar-filter-js'></script>
<link rel="https://api.w.org/" href="https://360smsapp.com/wp-json/" /><link rel="alternate" type="application/json" href="https://360smsapp.com/wp-json/wp/v2/pages/61422" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://360smsapp.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://360smsapp.com/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 6.2.3" />
<link rel='shortlink' href='https://360smsapp.com/?p=61422' />
<link rel="alternate" type="application/json+oembed" href="https://360smsapp.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2F360smsapp.com%2Fterms-of-service%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://360smsapp.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2F360smsapp.com%2Fterms-of-service%2F&#038;format=xml" />
<!-- start Simple Custom CSS and JS -->
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
/* Default comment here */ 

 document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#sticky-banner .close-banner")
      .addEventListener("click", function () {
        document.getElementById("sticky-banner").style.display = "none";
      });
  });</script>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
 
  var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
 
  Tawk_API.onChatStarted = function(){
    dataLayer.push({
      event: 'tawk_chat_started'
    });
  };
 
  Tawk_API.onMessageSent = function(){
    dataLayer.push({
      event: 'tawk_message_sent'
    });
  };
 
  Tawk_API.onChatEnded = function(){
    dataLayer.push({
      event: 'tawk_chat_ended'
    });
  };
 
  (function(){
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/58c10cbca8edb309face0ad7/1e4oevt2u';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
 </script>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
// jQuery(document).ready(function () {
//     // Check if the URL does not have a trailing slash
//     if (window.location.pathname.slice(-1) !== "/") {
//         // Redirect to the same URL with a trailing slash
//         window.location.href = window.location.pathname + "/" + window.location.search + window.location.hash;
//     }
// });</script>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
jQuery(document).ready(function( $ ){

 



    var links = document.getElementsByTagName('a');

var utm = /(utm_source=.*)&(utm_medium=.*)&(utm_campaign=.*)/gi.exec(window.location.href);



for(var i=0;i<links.length;i++){



  console.log(links[i].href = links[i].href + "?" + utm[0]);

}

});

</script>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
/* Add your CSS code here.

For example:
.example {
    color: red;
}

For brushing up on your CSS knowledge, check out http://www.w3schools.com/css/css_syntax.asp

End of comment */ 

   #sticky-banner {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: none;
    text-align: center;
    z-index: 9999;
    padding: 0;
/*     box-shadow: 0 -2px 6px rgba(0,0,0,0.2); */
  }

  #sticky-banner img {
    max-width: 100%;
    height: auto;
    display: none; /* hide by default */
  }

  /* Show desktop banner */
  #sticky-banner img.desktop-banner {
    display: block;
  }

  /* On small devices, hide desktop banner and show mobile banner */
  @media (max-width: 768px) {
    #sticky-banner img.desktop-banner {
      display: none;
    }
    #sticky-banner img.mobile-banner {
      display: block;
    }
	  #sticky-banner .close-banner{
	position: absolute;
    top: 8px;       /* adjust to your liking */
	left: 10px;
	  }
  }

  #sticky-banner .close-banner {
	  
position: absolute;
  top: 2px;       /* adjust to your liking */
  left: 2px;    /* keep it top-right */
  background: rgba(0,0,0,0.6);
  color: #fff;
  border: none;
  font-size: 20px;
  cursor: pointer;
  border-radius: 50%;
  width: 25px;    /* circle width */
  height: 25px;   /* circle height */
  display: flex;  /* flexbox for centering */
  align-items: center;  /* vertical center */
  justify-content: center; /* horizontal center */
  line-height: 1; /* removes extra spacing */
  }</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
.know-more-butn::after, .know-more-butn h3::after{
	display:none;
}
.know-more-butn {
    padding: 25px 0;
}

.numbers-content h2 {
    color: #ffffff;
}

.trail-content h2 {
    color: #ffffff;
}

@media (max-width: 576px) {
    .accordianmobile .features-para {
        text-align: center;
        font-size: 13px;
        height: auto;
    }
}
</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
#nav-main .documents-items3{ 
	    position: absolute;
    transform: translate(-110%, -30%);
}
#nav-main .documents-items22 {
    position: absolute;
    transform: translate(-110%, -52%);
}
#nav-main .documents-items33{
	 position: absolute;
    transform: translate(-110%, -52%)
}
#nav-main .documents-items11{
	 position: absolute;
    transform: translate(-110%, -10%)
}

.formwidth.dev p.btnRefresh img {
    width: 42px;
    height: 40px;
}
</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
.page-id-61303 div#message {
    padding: 25px 0px;
}

.page-id-61303 .wpb_column.vc_column_container.vc_col-sm-10.thegem-custom-67d02980768df3063 {
    margin-bottom: -27px;
    overflow: hidden;
}
div#zalo_lleftmain {
    height: 186px;  
	display: flex
;
    justify-content: center;
    align-items: center;
    background: #181d45;
}
 

.page-id-61303 .block-content {
    padding-bottom: 0px !important;
}
.page-id-61303 #message h6 b {
font-size: 21px !important;
    line-height: 26px;
}
.page-id-61303 div#maximizeroi {
    padding: 20px 0px !important;
}
.page-id-61303 #message h6 {
    font-size: 18px;
    padding-bottom: 7px;
}

.page-id-61303 div#automate {
    display: none;
}

.page-id-61303 .vc_column-inner.thegem-custom-inner-67d027807897d {
    padding: 0px !important; 
}
 

@media(max-width:767px){
	.page-id-61303  div#bannerheading.vc_row {
        padding: 0 20px 20px !important;
        height: 600px !important;
    }
	p#eagletext {
    padding-bottom: 16px;
}
	div#zalo_lleftmain {
    height: 100px;
    display: flex
;
    justify-content: center;
    align-items: center;
    background: #181d45;
    margin-bottom: 36px;
}
	
}</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
.page-id-61202 div#main .block-content {
    background: #f9fafa;
    padding: 56px 0px;
}

.page-id-61216 h5{
	font-family: 'Source Sans Pro', sans-serif;
}

.page-id-61216 div#page-title {
    margin-bottom: 0;
}

.menus-footer ul li a:hover {
    color: #ffffff;
}


.page-id-61216 .block-content {
    background: #f9fafa;
    padding-top: 42px;
    padding-bottom: 32px;
}

.page-id-61202 .block-content:last-of-type {
    padding-bottom: 50px;
    padding-top: 0px;
}

.page-id-31911 .vc_custom_1570532950915 {
    background-color: #f9fafa !important;
}


.page-id-31911 div#vc_row-67c72c2cca8b2 {
   
    margin-bottom: 0px !important;
    background: #f9fafa !important;
}

.page-id-31911 .block-content {
    background: #f9fafa !important;
}

.page-id-31911 .block-content {
    padding-top: 19px !important;
}


</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
div#cookie-law-info-bar {
    display: none !important;
}

@media (min-width:1200px) and (max-width:1400px){
.product-nav .product-events {
    position: absolute;
    z-index: 9999;
    transform: translate(-29%, 12%);
 
}
}
@media (min-width:1024px) and (max-width:1199px){
.product-nav .product-events {
    position: absolute;
    z-index: 9999;
    transform: translate(-20%, 12%);
 
}
}

@media (max-width:576px){
	section.features.mobilefeatured {
    max-width: 100% !important;
}
	
	.hero-1-content h2, .hero-2-content h2, .hero-3-content h2 {
           font-size: 17px !important;
        line-height: 25px !important;
}
	 .features-para {
   text-align: center;
        font-size: 13px;
        height: 85px;
    }
	.hero-h1 {
        font-size: 20px !important;
        line-height: 1;
    }
	h2.heading-primary.title-h3.text-center.py-4 {
            font-size: 21px;
        margin: 25px auto 0;
        line-height: 31px;
}
	.hero-1.flex_banner.row .hero-1-content h1.hero-h1 {
    height: 83px;
}
}</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
div#wpforms-60622 {

    width: 100%;

}



#formModal .modal-content {

 box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

    background-image: url(https://360smsapp.com/wp-content/uploads/2024/08/10_mini-1.jpg);

    background-repeat: no-repeat;

    background-size: cover;

    color: #ffffff;

    border: none;

}

.wpforms-container .wpforms-field {

    float: none;

    clear: both;

    padding: 7px 0 7px;

}

.wpforms-field-label {

    color: #ffffff !important;

}



label.wpforms-field-sublabel.after {

    color: #ffffff;

}



button#wpforms-submit-60622 {

    background: #DA5E46;

}









.wpforms-field-row.wpforms-field-medium {

    width: 100%;

    max-width: 100% !important;

}



input#wpforms-60622-field_2 {

    max-width: 100% !important;

}



input#wpforms-60622-field_4 {

    max-width: 100%;

}



.wpforms-submit-container {

    text-align: center;

}



#formModal h2, label.wpforms-field-sublabel.after {

    margin-bottom: 0px;margin-top: 19px;

    text-align: center;color:#ffffff !important;

}







/* modal csss */

div#myBtnPopup_pt, div#myBtnPopup_ptt {

 background: #0576bc;

    border-radius: 50px;

    padding: 15px 67px;

    background: #00BCD4;

    border-radius: 5px;

}

div#watchinner {

    display: flex;

    justify-content: left;

    align-items: center;

}

.autoncenter{

    text-align: center;

}

 

.page-id-59549 .popup-heading h2 {

    padding: 0px;

    margin: 0;

    font-size: 26px;

    font-family: 'Poppins';

    font-weight: 600;

}



.page-id-59549 .form-control {

    margin: 0;

    width: 100%;

    height: 40px;

    border: 2px solid #e3e3e3;

     background: #ffffff;

    font-size: 15px;

}



div#getconslt_inner {

    max-width: 100%;

    width: 100%;

}



div#getconslt_inner .elementor-widget-wrap.elementor-element-populated {

    width: 50%;

    text-align: right;

    display: flex;

    justify-content: center;



}



input#phone_code2_pt {

    width: 100% !important;

}



.page-id-59549 .intl-tel-input {

    width: 100%;

}



.page-id-59549 .formBack {

    display: flex;

    gap: 10px;

	justify-content: space-between;

}

input#email2_popup {

    text-indent: 12px;

}



.page-id-59549 div#myModalPopup {

    position: fixed;

    z-index: 999;

    padding-top: 30px;

    left: 0;

    top: 0;

    width: 100%;

    height: 100%;

    overflow: auto;

    background-color: rgb(0, 0, 0);

    background-color: rgba(0, 0, 0, 0.4);

}

.page-id-59549 .modal-content {

    background-color: #fefefe;

    max-width: 533px;

    margin: 0 auto;

}

.page-id-59549 .modal-content {

    position: relative;

    display: flex;

    flex-direction: column;

    width: 100%;

    pointer-events: auto;

    background-color: #fff;

    background-clip: padding-box;

    border: 1px solid rgba(0, 0, 0, .2);

    border-radius: .3rem;

    outline: 0;

}

.btndesign {

    cursor: pointer;

}

.page-id-59549 .popup-heading {

    text-align: center;

    padding: 15px 22px 10px 22px;

    border-radius: 5px;

}

.page-id-59549 .form-part {

    background-color: #ffffff;

    padding: 5px 50px 10px 25px; 

}

 .close:hover, .close:focus {

    color: #fff;

    text-decoration: none;

    cursor: pointer; 

}

.page-id-59549 .form-flex-popup {

    text-align:left;

    align-items: center;

    justify-content: space-between;

    gap: 15px;

    padding: 8px 0;

}

.border_fot_app .elementor-widget-container {

   

    display: flex;

    align-content: center;

    align-items: center;

    margin: 0 !IMPORTANT;

}



@media (min-width: 1029px) and (max-width: 1379px){

    #font_btn span.elementor-button-text {

        font-size: 16px !important;

        padding: 9px;

    }

}



.page-id-59549 .form-control {

 

    border-radius: 5px !important;

}



.page-id-59549 input#phone_code2_popup {

    padding-left: 92px ! IMPORTANT;

}





.page-id-59549 div#myBtnPopup {

       padding: 16px 45px !important;

    color: white ! IMPORTANT;

    background: #DA5E46 ! IMPORTANT;

    border-radius: 22px ! IMPORTANT;

   

    border-radius: 5px !important;

}

span.elementor-button-text.book_Demo {

   font-size: 17px ! IMPORTANT;

    font-weight: 500;

    font-family: 'Poppins';

    

} 

.book_demo_email .d-flex {

    display: flex !important;

    justify-content: center;

}

.book_demo_email span.elementor-button-text.book_Demo {

    color: #1d3b71;font-weight:800;

}

div#textcolor p {

    color: #000000;

}



.book_demo_email div#myBtnPopup_pt {

    background: white;

    padding: 18px 12px;

    margin-top: 89px;

}

.book_a_demo .d-flex {

    display: flex !important;

    justify-content: center;

}

.book_a_demo span.elementor-button-text.book_Demo {

    padding: 6px 45px;

    color: white;

    font-weight: 800;

}

.book_a_demo div#myBtnPopup_ptt {

    background: #03538c;

    border-radius: 26px;

}

div#myModalpt {

    position: fixed;

    z-index: 999;

    padding-top: 30px;

    left: 0;

    top: 0;

    width: 100%;

    height: 100%;

    overflow: auto;

    background-color: rgb(0, 0, 0);

    background-color: rgba(0, 0, 0, 0.4);

}

input#phone_code2_pt {

    padding-left: 82px ! IMPORTANT;

}

div#myModalptt {

    position: fixed;

    z-index: 999;

    padding-top: 30px;

    left: 0;

    top: 0;

    width: 100%;

    height: 100%;

    overflow: auto;

    background-color: rgb(0, 0, 0);

    background-color: rgba(0, 0, 0, 0.4);

}

span.close {

    color: white;

}

span.close {

    color: white;

    font-size: 26px;

    font-weight: 900;

}

/* 23-04-2024 */



.shap::after {

    content: "";

    position: absolute;

    bottom: -84px;

    width: 0;

    height: 0;

    border-left: 156px solid transparent;

    border-right: 160px solid transparent;

    border-top: 88px solid white;

    margin-left: 39px;

    border-radius: 0;

}



.clone_page {

    width: 90%;

    margin-right: auto;

    margin-left: auto;

    margin-top: -137px !important;

}



@media (min-width:767px) and (max-width:992px){

	div#scheduledemo_filesync {

		margin:0px;

	}



}



@media (max-width:767px){

	div#scheduledemo_filesync {

    margin: 18px auto 0;

    text-align: center;

}

}</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
#gradient_banner{

background: rgb(0,70,119);

background: linear-gradient(90deg, rgba(0,70,119,1) 52%, rgba(6,112,186,1) 100%);

}



.counter_growth .elementor-counter-number-wrapper {

    background: #ffffff;

    border-radius: 50%;

    height: 153px;

    width: 153px;

    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;

    display: flex;

    justify-content: center;

    align-items: center;

  

    margin: 15px auto 22px;

}





.page-id-59549 section#desktopheader {

    display: none;

}

.backtext {

    width: fit-content !important;

}

.page-id-59549 .intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3 {

    width: 100%;

}

.selected-flag {

    height: 38px !important;

}

.page-id-59549 .intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2 {

    width: 100%;

}

.yearboxes .elementor-image-box-content {

    margin-top: -42px;

}

.boxes_unveiling h3.elementor-image-box-title {

    position: relative;

    left: 70px;

}

.boxes_unveiling .elementor-image-box-img{

	position:absolute;

}



.form_page_Growth {

    padding: 50px;

    border-radius: 20px;

	background:#ffffff;

}



.form_page_Growth input {

    padding: 6px;

}



.form_page_Growth button {

    padding: 17px;

    font-weight: bold;

}



.boxes_unveiling{

	box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;

    background: #ffffff;

    position: relative;padding: 35px;

    border-radius: 20px;

}

.imageboxusersms {

	box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;

    background: #ffffff;

    position: relative;

    padding: 65px 30px 30px;

    text-align: center;

    border-radius: 30px;

}



.imageboxusersms figure.elementor-image-box-img img {

    position: absolute;

    top: -60px;

    margin: auto;

    left: 0;

    right: 0;



    align-items: center;

    width: 130px;

    height: 130px;

}





.bgcahllengbothering {

    background-size: 100% 123%;

    background-position: bottom !important;

}

.border_boxesCR {

     border: 2px dashed #116eb7;

    background: #ffffff;

    border-radius: 10px;

    text-align: center;

    height: 100%;

    padding: 0px 9px;

    display: flex;

    align-items: center;justify-content:center;

}



.page-id-59549 div#page-title {

    display: none;

}

.page-id-59549 footer.custom-footer {

    display: none;

}

.page-id-59549 footer#footer-nav {

    display: none;

}

.backtext{

	background:#008fba;

}

@media (max-width:992px){

	.form_page_Growth {

    padding: 10px;



}

}



@media (max-width:768px){

	.elementor-element.elementor-element-72e1bb1 {

    margin: auto;

}

	.bgcahllengbothering {

    background-size: 100% 100%;

    background-position: bottom !important;

}

	.backtext {

  margin: auto;

}

	.form_page_Growth {

 margin: 20px 10px 0px;

}

	.codeimgdevp {

    padding: 0;

    margin-left: 23px;

}

	

}</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
.nav-top-fixed {

        position: fixed;



}</style>
<!-- end Simple Custom CSS and JS -->

        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@graph": [
                {
                  "@type": "WebPage",
                    "name": "Terms of service",
                    "url": "https://360smsapp.com/terms-of-service/",
                    "description": "Read our Terms of Service to understand user rights, app usage policies, and legal guidelines for using 360 SMS solutions.",
                  "isPartOf": {
                    "@type": "WebSite",
                    "name": "360 SMS App",
                    "url": "https://360smsapp.com/"
            },
            "publisher": {
            "@id": "https://360smsapp.com/#organization"
            }
            },
            {
            "@type": "Organization",
            "@id": "https://360smsapp.com/#organization",
            "name": "360 SMS App",
            "description": "Salesforce sms messaging solution by 360 sms App. Now businesses can send SMS From Salesforce to communicate effectively with clients",
            "url": "https://360smsapp.com/",
            "logo": "https://360smsapp.com/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
            "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": [
                "+44 740 327 9473",
                "+61 48885 3632",
                "+91 806 902 7849",
                 "+1 323 641 4417"
              ],
                    "contactType": "customer service",
                    "email": "care@360smsapp.com",
                    "contactOption": "",
                    "areaServed": "",
                    "availableLanguage": null
                },
                "address": {
                    "@type": "PostalAddress",
                    "addressCountry": "US",
                    "addressLocality": "1968 S. Coast Hwy #1412, Laguna Beach ",
                    "addressRegion": "California",
                    "postalCode": "92651",
                    "streetAddress": "1968 S. Coast Hwy #1412, Laguna Beach CA 92651"
                },
            "founder": {
            "@type": "Person",
            "name": "Siddharth Sehgal",
            "url": "https://www.linkedin.com/in/sid360degreecloud/"
            },
                  "parentOrganization": {
            "@type": "Organization",
            "name": "360 Degree Cloud",
            "url": "https://360degreecloud.com/",
            "description": "360 Degree Cloud is a registered Salesforce Summit and ISV Partner with 12+ years of experience in delivering Salesforce solutions.",
            "sameAs": [
            "https://www.facebook.com/360DegreeCloud/",
            "https://x.com/360degreecloud",
            "https://in.linkedin.com/company/360-degree-cloud",
            "https://www.instagram.com/360_degreecloud/?igshid=YmMyMTA2M2Y%3D",
            "https://www.youtube.com/@360degreecloud6"
            ]
            },
                  "owns": {
                    "@type": "Product",
                   "name": "Terms of service",
                   "url": "https://360smsapp.com/terms-of-service/",
                   "description": "Read our Terms of Service to understand user rights, app usage policies, and legal guidelines for using 360 SMS solutions.",
                    "Category": "SMS/Messaging App",
                    "aggregateRating": {
                      "@type": "AggregateRating",
                      "ratingValue": "4.89",
                      "ratingCount": "1241",
                      "bestRating": "5",
                      "worstRating": "1"
                    }
                  }
                }
              ]
            }
            </script>

      <meta name="generator" content="Elementor 3.17.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<!-- There is no amphtml version available for this URL. --><link rel="icon" href="https://360smsapp.com/wp-content/uploads/2019/07/logo_pngformat-1-1_7c0a185dc0de148590dccb02f4b91907.png" sizes="32x32" />
<link rel="icon" href="https://360smsapp.com/wp-content/uploads/2019/07/logo_pngformat-1-1_7c0a185dc0de148590dccb02f4b91907.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://360smsapp.com/wp-content/uploads/2019/07/logo_pngformat-1-1_7c0a185dc0de148590dccb02f4b91907.png" />
<meta name="msapplication-TileImage" content="https://360smsapp.com/wp-content/uploads/2019/07/logo_pngformat-1-1_7c0a185dc0de148590dccb02f4b91907.png" />
<script type="rocketlazyloadscript">if(document.querySelector('[data-type="vc_custom-css"]')) {document.head.appendChild(document.querySelector('[data-type="vc_custom-css"]'));}</script>		<style type="text/css" id="wp-custom-css">
			 .homew {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url(/wp-content/uploads/2024/02/BGG.webp);
}
.page-id-15987 #formFirstLead img {
    width: 46px;
}
.page-id-15987 p.country {
    margin: 0;
    color: #ffffff;
}

.vc_row[data-vc-full-width].vc_hidden {
    opacity: 1 !important;
}
.webinarc {
    text-align: center;
    margin: 38px;
    font-size: 32px;
}
img.small {
    width: 100%;
    height: 100%;
}
footer.custom-footer {
   
    background-color: #181828;

}
@media(max-width: 767px){
.single-post h2 span, .single-post h2{
	line-height:40px;
}
	.entry-content.post-content ,.post-metas.date-color, .category-below-one, .tags-below-one{
    padding: 10px 10px 10px 10px !important;
}
a.cattag-name{
    font-size: 14px !important;
}
}
#accordian_custom .vc_tta-panel, .sp-easy-accordion>.sp-ea-single {
    border-bottom: 2px solid #e4e4e4 !important;
    margin-bottom: 10px;
    padding-bottom: 10px;
}
.spcollapse p {
    border-left: 5px solid #e06e5a;
    margin-left: 20px;
    padding-left: 25px;
}
@media(max-width:767px){
	.single-manual h2{
		line-height: 35px;
	}
}
.cky-notice-des p{
	 font-size: 20px !important;
}
.cky-consent-bar{
	padding:12px 24px !important;
}
@media (max-width:767px){
	.headers .slide-out-menu .menu-panel ul~.menu-panel.is-active[data-menu="Additional Features"] ul, .headers .slide-out-menu .menu-panel ul~.menu-panel.is-active
[data-menu="Channels"] ul {
    overflow-y: scroll;
    height: 70vh;
	}
	.headers .slide-out-menu .menu-panel {
    max-width: 291px;
	}
}

/*28-05*/
.custom-footer #desktoprow .socials-item {
    margin-right: 0;
}
.custom-footer #desktoprow .socials-item i {
    font-size: 36px;
}
.custom-footer #desktoprow .text-white p:last-child span {
    display: block;
	  margin-left: 9px !important;
}
@media (min-width:1100px){
.product-nav div.product-events{height:550px; overflow-y:scroll;}
}

/* Dreamforce page */
.page-id-61916 h1,.page-id-61916 h2,.page-id-61916 h3,.page-id-61916 h4,.page-id-61916 h5,.page-id-61916 h6{
	text-transform:none;
}

/* dreamforce New form CSS */

	.page-id-61916 .formcontainer {
		max-width: 464px;
		background: #fff;
		border-radius: 10px;
		padding: 25px 30px;
		box-shadow: 0 4px 12px rgba(0,0,0,0.1);
		text-align: left;
	}

	.page-id-61916 .formheader {
		font-size: 20px;
		font-weight: 500;
		color: #000;
		line-height: 1.4;
		margin-bottom: 25px;
	}
	.page-id-61916 .formheader span {
		color: #0084ff;
		font-weight: 700;
	}
	.page-id-61916 .formheader b {
		font-weight: 700;
	}

	.page-id-61916 .formcontainer form {
		border: none;
		padding: 0;
	}

	.page-id-61916 .formcontainer form div {
		margin-bottom: 20px;
		display: flex;
		flex-direction: column;
	}

	.page-id-61916 .formcontainer form div label {
		font-size: 14px;
		font-weight: 600;
		color: #333;
		margin-bottom: 6px;
	}

	.page-id-61916 .formcontainer form div input {
		width: 100%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 5px;
		font-size: 14px;
		box-sizing: border-box;
		margin:0px;
		background-color:white;
		height: 40px;
	}

	.page-id-61916 .formcontainer form div input:focus {
		outline: none;
		border-color: #0084ff;
		box-shadow: 0 0 0 2px rgba(0,132,255,0.15);
	}

	.page-id-61916 .confirmbtn {
		background: linear-gradient(180deg, #ec6b5e, #d35447);
		border: none;
		border-radius: 30px;
		color: #fff;
		font-weight: 600;
		font-size: 15px;
		padding: 12px;
		width: 100%;
		cursor: pointer;
		transition: background 0.3s ease;
		box-shadow: 0 4px 8px rgba(0,0,0,0.1);
	}

	.page-id-61916 .confirmbtn:hover {
		background: linear-gradient(180deg, #d35447, #c24638);
	}

	.page-id-61916 .msg2 {
		font-size: 18px;
		color: #4cc74c;
		line-height: 1.4;
		text-align: center;
		margin-bottom: 20px;
	}
.page-id-61916 html {
  scroll-behavior: smooth;
}
 #page {
    overflow: visible !important;
}
/* Dreamforce end */
 /*New design code by sk*/   
       .feature-number{
        font-size: 50px !important;
        -webkit-text-stroke: 1px #000 !important;
        color: transparent !important;
        opacity: 0.3 !important;
        }
        .feature-item div h5{
        font-weight: 700 !important;
        font-size: 16px !important;
        margin-bottom: 5px !important;

        }
        .feature-item p {
        font-size: 13px !important;
        color: #555 !important;
        margin: 0 !important;
        }
        .feature-item {
        margin-bottom: 5px !important;
        }
        .image-section img {
        max-width: 100% !important;
        }
        .me-3 {
            margin-right: 2rem !important;
            margin-top: 20px;
        }
        .features-bottom
         {
            padding: 40px 0 0 0 !important;
        }
        @media screen and (max-width:600px){
         .mb-bottom{
             margin-bottom:0px !important;
         }
         h3.FUTURE-READY{
             font-size:20px;
         }
        }
#btn_gad{
	margin-top:5px !important;
}
.page-id-61916
{
	overflow-x: hidden;
}
div.sipost_s2_content.img-responsive p span a img{
	max-width:100%;
}
.page-template-archive-webinar-php .top-header.desktoprow .link a{
	margin-top:0px !important;
}
.single.single-webinar p.btnRefresh img{
	width:40px !important;
}
.singlepost-template iframe{
  max-width: 100%;
  height: 400px;
  display: block;
}		</style>
		<noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
  
<noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript><style id="wpforms-css-vars-root">
				:root {
					--wpforms-field-border-radius: 3px;
--wpforms-field-border-style: solid;
--wpforms-field-border-size: 1px;
--wpforms-field-background-color: #ffffff;
--wpforms-field-border-color: rgba( 0, 0, 0, 0.25 );
--wpforms-field-border-color-spare: rgba( 0, 0, 0, 0.25 );
--wpforms-field-text-color: rgba( 0, 0, 0, 0.7 );
--wpforms-field-menu-color: #ffffff;
--wpforms-label-color: rgba( 0, 0, 0, 0.85 );
--wpforms-label-sublabel-color: rgba( 0, 0, 0, 0.55 );
--wpforms-label-error-color: #d63637;
--wpforms-button-border-radius: 3px;
--wpforms-button-border-style: none;
--wpforms-button-border-size: 1px;
--wpforms-button-background-color: #066aab;
--wpforms-button-border-color: #066aab;
--wpforms-button-text-color: #ffffff;
--wpforms-page-break-color: #066aab;
--wpforms-background-image: none;
--wpforms-background-position: center center;
--wpforms-background-repeat: no-repeat;
--wpforms-background-size: cover;
--wpforms-background-width: 100px;
--wpforms-background-height: 100px;
--wpforms-background-color: rgba( 0, 0, 0, 0 );
--wpforms-background-url: none;
--wpforms-container-padding: 0px;
--wpforms-container-border-style: none;
--wpforms-container-border-width: 1px;
--wpforms-container-border-color: #000000;
--wpforms-container-border-radius: 3px;
--wpforms-field-size-input-height: 43px;
--wpforms-field-size-input-spacing: 15px;
--wpforms-field-size-font-size: 16px;
--wpforms-field-size-line-height: 19px;
--wpforms-field-size-padding-h: 14px;
--wpforms-field-size-checkbox-size: 16px;
--wpforms-field-size-sublabel-spacing: 5px;
--wpforms-field-size-icon-size: 1;
--wpforms-label-size-font-size: 16px;
--wpforms-label-size-line-height: 19px;
--wpforms-label-size-sublabel-font-size: 14px;
--wpforms-label-size-sublabel-line-height: 17px;
--wpforms-button-size-font-size: 17px;
--wpforms-button-size-height: 41px;
--wpforms-button-size-padding-h: 15px;
--wpforms-button-size-margin-top: 10px;
--wpforms-container-shadow-size-box-shadow: none;

				}
			</style>	<script type="rocketlazyloadscript">	function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setDate(date.getDate() + 1);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}</script>
		
	<style>
		.mobile_whatsapp {position: fixed;
    top: 70%;
    right: 0;
    z-index: 500;
    padding: 5px 6px;
    background-color: #595c71;
    color: #fff;
    border-radius: 4px;
    transition: 0.3s;
    font-weight: 900;
	height: 40px;    margin: 0;}
	.footerform input.input-mail {
    background-color: rgb(244 246 247 / 0%);
    padding: 6px 11px;
    width: 169.95px;
    max-width: 100%;
    font-size: 15px;
    border: 1px solid #fff;
    color: #fff;
    height: 40px;
    margin-top: 20px;
} .footerform .input-subs {
    background-color: rgb(108 193 222);
    position: relative;
    display: inline-block;
    text-align: center;
    text-transform: uppercase;
    white-space: nowrap;
    border: 0 none;
    vertical-align: middle;
    height: 40px;
    line-height: 40px;
    padding: 0 17px;
    font-size: 14px;
    / margin: 10px; /
    -o-transition: all .3s;
    -webkit-transition: all .3s;
    transition: all .3s;
    border-radius: 3px;
    margin-top: 20px;
    margin-left: 0px;
}</style> <script type="rocketlazyloadscript">
    jQuery(function() {
  // Set
  var main = jQuery('div.mm-dropdown .textfirst')
  var li = jQuery('div.mm-dropdown > ul > li.input-option')
  var inputoption = jQuery("div.mm-dropdown .option")
  var default_text = '<img width="30" height="16" alt="United States Flag" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2030%2016'%3E%3C/svg%3E"style="width:19px; height:14px;" data-lazy-src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4-1.png"><noscript><img width="30" height="16" alt="United States Flag" src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4-1.png"style="width:19px; height:14px;"></noscript><span class="ml-10">US</span><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-down-b-128.png" width="10" height="10" class="down" alt="Downward arrow icon"/>';

  // Animation
  main.click(function() {
    main.html(default_text);
    li.toggle('fast');
  });

  // Insert Data
  li.click(function() {
    // hide
    li.toggle('fast');
    var livalue = jQuery(this).data('value');
	 // alert(livalue);
    var lihtml = jQuery(this).html();
    main.html(lihtml);
    inputoption.val(livalue);
	  if(livalue == 1){
		 jQuery('.inp-num').html('+1 323 6414417'); jQuery('.inp-num').attr('href','tel:+1 323 6414417');
	  }
	   if(livalue == 2){
		  
jQuery('.inp-num').html('+44 740 327 9473'); 
		   jQuery('.inp-num').attr('href','tel:+44 740 327 9473');
	  } 
	   if(livalue == 3){
		 jQuery('.inp-num').html('+61 4 8885 6713'); jQuery('.inp-num').attr('href','tel:+61 4 8885 6713');
	  } 
	   if(livalue == 4){
		 jQuery('.inp-num').html('+91 8069027849'); jQuery('.inp-num').attr('href','tel:+91 8069027849');
	  }
//  if(livalue == 5){
// 		  jQuery('.inp-num').html('+91 9871096860'); jQuery('.inp-num').attr('href','tel:+91 9871096860');
// 	  }
  });
});
</script>
	<!-- Begin Inspectlet Asynchronous Code -->
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
(function() {
window.__insp = window.__insp || [];
__insp.push(['wid', 1766580799]);
var ldinsp = function(){
if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=1766580799&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
setTimeout(ldinsp, 0);
})();
</script>
<!-- End Inspectlet Asynchronous Code -->
<script type="rocketlazyloadscript" data-rocket-type="text/javascript"> _linkedin_partner_id = "3571402"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript"> (function (l) { if (!l) { window.lintrk = function (a, b) { window.lintrk.q.push([a, b]) }; window.lintrk.q = [] } var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript"; b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s); })(window.lintrk); </script>
    <noscript> <img height="1" width="1" style="display:none;" alt=""
            src="https://px.ads.linkedin.com/collect/?pid=3571402&fmt=gif" /> </noscript>
		
</head>


<body class="page-template-default page page-id-61422 wpb-js-composer js-comp-ver-6.10.0 vc_responsive elementor-default elementor-kit-59539 elementor-page elementor-page-61422">
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MP4GG7G2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!--  ClickCease.com tracking-->
      <script type="rocketlazyloadscript" data-rocket-type='text/javascript'>var script = document.createElement('script');
      script.async = true; script.type = 'text/javascript';
      var target = 'https://www.clickcease.com/monitor/stat.js';
      script.src = target;var elem = document.head;elem.appendChild(script);
      </script>
      <noscript>
      <a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com' alt='ClickCease'/></a>
      </noscript>
      <!--  ClickCease.com tracking-->
        

 

	<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		var gemSettings = {"isTouch":"","forcedLasyDisabled":"","tabletPortrait":"1","tabletLandscape":"","topAreaMobileDisable":"","parallaxDisabled":"","fillTopArea":"","themePath":"https:\/\/360smsapp.com\/wp-content\/themes\/thegem","rootUrl":"https:\/\/360smsapp.com","mobileEffectsEnabled":"","isRTL":""};
		(function() {
    function isTouchDevice() {
        return (('ontouchstart' in window) ||
            (navigator.MaxTouchPoints > 0) ||
            (navigator.msMaxTouchPoints > 0));
    }

    window.gemSettings.isTouch = isTouchDevice();

    function userAgentDetection() {
        var ua = navigator.userAgent.toLowerCase(),
        platform = navigator.platform.toLowerCase(),
        UA = ua.match(/(opera|ie|firefox|chrome|version)[\s\/:]([\w\d\.]+)?.*?(safari|version[\s\/:]([\w\d\.]+)|$)/) || [null, 'unknown', 0],
        mode = UA[1] == 'ie' && document.documentMode;

        window.gemBrowser = {
            name: (UA[1] == 'version') ? UA[3] : UA[1],
            version: UA[2],
            platform: {
                name: ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android)/) || platform.match(/mac|win|linux/) || ['other'])[0]
                }
        };
            }

    window.updateGemClientSize = function() {
        if (window.gemOptions == null || window.gemOptions == undefined) {
            window.gemOptions = {
                first: false,
                clientWidth: 0,
                clientHeight: 0,
                innerWidth: -1
            };
        }

        window.gemOptions.clientWidth = window.innerWidth || document.documentElement.clientWidth;
        if (document.body != null && !window.gemOptions.clientWidth) {
            window.gemOptions.clientWidth = document.body.clientWidth;
        }

        window.gemOptions.clientHeight = window.innerHeight || document.documentElement.clientHeight;
        if (document.body != null && !window.gemOptions.clientHeight) {
            window.gemOptions.clientHeight = document.body.clientHeight;
        }
    };

    window.updateGemInnerSize = function(width) {
        window.gemOptions.innerWidth = width != undefined ? width : (document.body != null ? document.body.clientWidth : 0);
    };

    userAgentDetection();
    window.updateGemClientSize(true);

    window.gemSettings.lasyDisabled = window.gemSettings.forcedLasyDisabled || (!window.gemSettings.mobileEffectsEnabled && (window.gemSettings.isTouch || window.gemOptions.clientWidth <= 800));
})();
		(function() {
    if (window.gemBrowser.name == 'safari') {
        try {
            var safariVersion = parseInt(window.gemBrowser.version);
        } catch(e) {
            var safariVersion = 0;
        }
        if (safariVersion >= 9) {
            window.gemSettings.parallaxDisabled = true;
            window.gemSettings.fillTopArea = true;
        }
    }
})();
		(function() {
    var fullwithData = {
        page: null,
        pageWidth: 0,
        pageOffset: {},
        fixVcRow: true,
        pagePaddingLeft: 0
    };

    function updateFullwidthData() {
        fullwithData.pageOffset = fullwithData.page.getBoundingClientRect();
        fullwithData.pageWidth = parseFloat(fullwithData.pageOffset.width);
        fullwithData.pagePaddingLeft = 0;

        if (fullwithData.page.className.indexOf('vertical-header') != -1) {
            fullwithData.pagePaddingLeft = 45;
            if (fullwithData.pageWidth >= 1600) {
                fullwithData.pagePaddingLeft = 360;
            }
            if (fullwithData.pageWidth < 980) {
                fullwithData.pagePaddingLeft = 0;
            }
        }
    }

    function gem_fix_fullwidth_position(element) {
        if (element == null) {
            return false;
        }

        if (fullwithData.page == null) {
            fullwithData.page = document.getElementById('page');
            updateFullwidthData();
        }

        /*if (fullwithData.pageWidth < 1170) {
            return false;
        }*/

        if (!fullwithData.fixVcRow) {
            return false;
        }

        if (element.previousElementSibling != null && element.previousElementSibling != undefined && element.previousElementSibling.className.indexOf('fullwidth-block') == -1) {
            var elementParentViewportOffset = element.previousElementSibling.getBoundingClientRect();
        } else {
            var elementParentViewportOffset = element.parentNode.getBoundingClientRect();
        }

        /*if (elementParentViewportOffset.top > window.gemOptions.clientHeight) {
            fullwithData.fixVcRow = false;
            return false;
        }*/

        if (element.className.indexOf('vc_row') != -1) {
            var elementMarginLeft = -21;
            var elementMarginRight = -21;
        } else {
            var elementMarginLeft = 0;
            var elementMarginRight = 0;
        }

        var offset = parseInt(fullwithData.pageOffset.left + 0.5) - parseInt((elementParentViewportOffset.left < 0 ? 0 : elementParentViewportOffset.left) + 0.5) - elementMarginLeft + fullwithData.pagePaddingLeft;
        var offsetKey = window.gemSettings.isRTL ? 'right' : 'left';

        element.style.position = 'relative';
        element.style[offsetKey] = offset + 'px';
        element.style.width = fullwithData.pageWidth - fullwithData.pagePaddingLeft + 'px';

        if (element.className.indexOf('vc_row') == -1) {
            element.setAttribute('data-fullwidth-updated', 1);
        }

        if (element.className.indexOf('vc_row') != -1 && element.className.indexOf('vc_section') == -1 && !element.hasAttribute('data-vc-stretch-content')) {
            var el_full = element.parentNode.querySelector('.vc_row-full-width-before');
            var padding = -1 * offset;
            0 > padding && (padding = 0);
            var paddingRight = fullwithData.pageWidth - padding - el_full.offsetWidth + elementMarginLeft + elementMarginRight;
            0 > paddingRight && (paddingRight = 0);
            element.style.paddingLeft = padding + 'px';
            element.style.paddingRight = paddingRight + 'px';
        }
    }

    window.gem_fix_fullwidth_position = gem_fix_fullwidth_position;

    document.addEventListener('DOMContentLoaded', function() {
        var classes = [];

        if (window.gemSettings.isTouch) {
            document.body.classList.add('thegem-touch');
        }

        if (window.gemSettings.lasyDisabled && !window.gemSettings.forcedLasyDisabled) {
            document.body.classList.add('thegem-effects-disabled');
        }
    });

    if (window.gemSettings.parallaxDisabled) {
        var head  = document.getElementsByTagName('head')[0],
            link  = document.createElement('style');
        link.rel  = 'stylesheet';
        link.type = 'text/css';
        link.innerHTML = ".fullwidth-block.fullwidth-block-parallax-fixed .fullwidth-block-background { background-attachment: scroll !important; }";
        head.appendChild(link);
    }
})();

(function() {
    setTimeout(function() {
        var preloader = document.getElementById('page-preloader');
        if (preloader != null && preloader != undefined) {
            preloader.className += ' preloader-loaded';
        }
    }, window.pagePreloaderHideTime || 1000);
})();
	</script>
	


<div id="page" class="layout-fullwidth header-style-3">

	
	
							<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link data-minify="1" rel="stylesheet" href="https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem-child/css/smsappstyle.css?ver=1767963786" />
<!-- <link href='//360smsapp.com/wp-content/uploads/omgf/omgf-stylesheet-55/omgf-stylesheet-55.css?ver=1737537983' rel='stylesheet'> -->
<style>
	.boldmenu a {
    font-weight: 800 !important;
    color: #0d9dda !important;

}
.product-events {
    position: absolute;
    z-index: 9999;
    transform: translate(-30%, 12%);
  
}
.product-events ul li {
    padding: 2px 5px !important;
}
.product-events h4 {
    padding-bottom: 5px !important;
}
div#custom_industry {
    transform: translate(-40%,40%) !important;
}
 	
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap');
    	@media(min-width:1100px){	
        .nav-fixed {	
            margin-top: 50px;	
        }	
        .nav-top-fixed {	
        position: fixed;	
        top: 0;	
        z-index: 99999999;	
        width: 100%;	
        height: 60px !important;	
        padding-top: 15px;	
        }	
    }
</style>
<link rel="stylesheet" href="https://360smsapp.com/wp-content/themes/thegem-child/css/owl.carousel.min.css" />
<section id="desktopheader">
    <!---------------------------------TOP HEADER SECTION START----------------------------->

        <!-- ------------------------------@@  --------desktop view country part header starts here------------------------------@@@@@@@@  -->
    <header id="head" class="top-area-style-default top-area-alignment-center top-area">
        <div class="container">
            <div class="top-header desktoprow">
                <div class="top-header-left">
                    <div class="link d-con">
                        <a href="tel:+1 323 641 4417">
                            <img width="45" height="24" src="https://360smsapp.com/wp-content/uploads/2021/10/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4.png"
                                loading="lazy" alt="360 Sms App United States Flag" class="ml-14-6"
                                style="width: 30px; height: 16px;" />
                        </a>
                        <div>
                            <p style="margin-bottom: 0px;"><a href="tel:+1 323 641 4417">+1 323 641 4417</a></p>
                        </div>
                    </div>
                    <div class="link d-con">
                        <a href="tel:+44 740 327 9473">
                            <img width="30" height="16" src="https://360smsapp.com/wp-content/uploads/2021/10/255px-Flag_of_the_United_Kingdom.svg-p40ox2lqtrvrzswj9j46agsmbnoyte81twc2r30n4w.png"
                                loading="lazy" alt="360 Sms App United Kingdom Flag" class="ml-14-6"
                                style="width: 30px; height: 16px;" />
                        </a>
                        <div>
                            <p style="margin-bottom: 0px;"><a href="tel:+44 740 327 9473">+44 740 327 9473</a></p>
                        </div>
                    </div>
                    <div class="link d-con">
                        <a href="tel:+61 4 8885 6713">
                            <img width="255" height="128" src="https://360smsapp.com/wp-content/uploads/2021/10/255px-Flag_of_Australia_converted.png"
                                loading="lazy" alt="360 Sms App Australia Flag" style="width: 30px; height: 16px;"
                                class="ml-14-6" />
                        </a>
                        <div>
                            <p style="margin-bottom: 0px;"><a href="tel:+61488853632">+61 48885 3632</a></p>
                        </div>
                    </div>
                    <div class="link d-flex">
                        <a href="tel:8069027849">
                            <img width="255" height="170" src="https://360smsapp.com/wp-content/uploads/2021/10/255px-Flag_of_India.png" loading="lazy"
                                alt="360 Sms App India Flag" style="width: 30px; height: 16px; margin-left: 23px;" />
                        </a>
                        <div style="margin-top: 0px;">
                  <p style="margin-bottom: 0px;"><a href="tel:+918069027849">+91 806 902 7849</a></p>
                        </div>
                    </div>
                    <div class="link m-hov-1">
                        <a href="mailto:care@360smsapp.com" class="wrapper-blue-img">
                            <img width="100" height="100" src="https://360smsapp.com/wp-content/uploads/2021/10/email-1.webp" loading="lazy" title="email" alt="email"
                                style="width: 16px; height: 16px;" /> <span
                                style="margin-top: 7px;">care@360smsapp.com</span>
                        </a>
                    </div>
                    <div class="button2">
                        <a href="https://360smsapp.com/contact-us/" class="button2" style="
    background-color: #0D4B78;
    border: 1px solid black;
    border-radius: 5px;
    padding: 5px 12px;
    color: white;
">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
 <!-- ------------------------------@@  --------desktop view country part header ends------------------------------@@@@@@@@  -->
<!-- ------------------------------@@  --------DESKTOP VIEW MENU part header STARTS HERE------------------------------@@@@@@@@   -->
    <nav class="nav-101" id="nav-main">
        <div class="container">
            <div class="n-head nav-container" id="custom-nav">
                <div class="icon">
                    <a href="https://360smsapp.com/"><img width="167" height="71" src="https://360smsapp.com/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp" loading="lazy" alt="360 Sms App Logo " /> </a>
                </div>
                <div class="nav-items">
                    <ul>
                    <li class="product items product-nav">
                            <a href="#">PRODUCT</a>
                            <div class="product-events">
                                <div class="d-flex prod-2">
                                    <ul class="w-50" style="margin:0px 10px;">
                                         <h4 style="font-size:14px;">CORE FEATURES</h4>
                                         <li><a href="https://360smsapp.com/salesforce-texting/" class="icon-angle_bf">Salesforce Texting</a></li>
                                          <li><a href="https://360smsapp.com/salesforce-chatbot/" class="icon-angle_bf">Salesforce Chatbot</a></li>
                                          
                                        <h4 style="font-size:14px;">CHANNELS SALESFORCE</h4>
                                        <li><a href="https://360smsapp.com/salesforce-sms/" class="icon-angle_bf">Salesforce SMS</a></li>
                                        <li><a href="https://360smsapp.com/salesforce-mms/" class="icon-angle_bf">Salesforce MMS</a></li>
                       			        <li><a href="https://360smsapp.com/salesforce-computer-telephony-integration/" class="icon-angle_bf">Salesforce Telephony Integration</a><button class="buttonnew">NEW</button></li>
                                        <li><a href="https://360smsapp.com/salesforce-whatsapp/" class="icon-angle_bf">Salesforce WhatsApp</a></li>
                                        <li><a href="https://360smsapp.com/salesforce-ringless-voicemail/" class="icon-angle_bf">Salesforce Ringless Voicemail</a></li>
                                        <li><a href="https://360smsapp.com/salesforce-facebook-messenger/" class="icon-angle_bf">Salesforce Facebook Messenger</a></li>
                                        <li><a href="https://360smsapp.com/salesforce-wechat/" class="icon-angle_bf">Salesforce We Chat</a></li>
                                        <li><a href="https://360smsapp.com/salesforce-viber/" class="icon-angle_bf">Salesforce Viber</a></li>
                                        <li><a href="https://360smsapp.com/salesforce-kakao/" class="icon-angle_bf">Salesforce Kakao</a></li>
                                        <li><a href="https://360smsapp.com/salesforce-zalo/" class="icon-angle_bf">Salesforce Zalo</a></li>

                                        <li><a href="https://360smsapp.com/salesforce-line/" class="icon-angle_bf">Salesforce Line</a></li>
                                        <li><a href="https://360smsapp.com/salesforce-instagram/" class="icon-angle_bf">Salesforce Instagram</a></li>
                                        
                                    </ul>
                                    <ul class="w-50" style="margin:0px 10px;">
                                        <h4 style="font-size:14px;">ADDITIONAL FEATURES</h4>
                                        <li><a href="https://360smsapp.com/privacy-by-design/" class="icon-angle_bf">Privacy By Design</a> </li>
                                        <li><a href="https://360smsapp.com/automated-messaging/" class="icon-angle_bf">Automated-Messaging</a></li>
                                        <li><a href="https://360smsapp.com/itext" class="icon-angle_bf">Itext</a></li>
                                        <li><a href="https://360smsapp.com/conversation-manager/" class="icon-angle_bf">Conversation-Manager</a></li>
                                        <li><a href="https://360smsapp.com/bulk-batch-scheduled-sms-texting/" class="icon-angle_bf">Bulk-Batch-Scheduled-sms-texting</a></li>
                                        <li><a href="https://360smsapp.com/bring-your-own-number/" class="icon-angle_bf">Bring-your-own-number</a></li>
                                        <li><a href="https://360smsapp.com/link-tracking/" class="icon-angle_bf">Link-tracking</a></li>
                                        <li><a href="https://360smsapp.com/drip-campaigns/" class="icon-angle_bf">Drip-campaigns</a></li>
                                        <li><a href="https://360smsapp.com/one-on-one-conversations/" class="icon-angle_bf">One-on-one-conversations</a></li>
                                        <li><a href="https://360smsapp.com/cti-call-auto-forwarding/" class="icon-angle_bf">Cti-call-auto-forwarding</a></li>
                                        <li><a href="https://360smsapp.com/sticky-sender/" class="icon-angle_bf">Sticky-sender</a></li>
                                        <li><a href="https://360smsapp.com/appointments-and-rescheduling/" class="icon-angle_bf">Appointments-and-rescheduling</a></li>
                                        <li><a href="https://360smsapp.com/multiple-language-support/" class="icon-angle_bf">Multiple-language-support</a></li>
                                    </ul>
                                    <ul class="w-50" style="margin:0px 10px;">
                                        <h4 style="font-size:14px;">CONNECTIVITY</h4>
                                        <li><a href="https://360smsapp.com/shared-short-codes" class="icon-angle_bf">Shared short codes</a></li>
                                        <li><a href="https://360smsapp.com/short-codes/" class="icon-angle_bf">Short codes</a></li>
                                        <h4 style="font-size:14px;">ADD-ONS</h4>

                                        <li><a href="https://360smsapp.com/digital-engagement-on-steroids-webpage/" class="icon-angle_bf">Digital Engagement On Steroids</a></li>
                                        <li><a href="https://360smsapp.com/marketing-cloud-integration/" class="icon-angle_bf">Marketing Cloud integration</a></li>
                                        <li><a href="https://360smsapp.com/verify-the-phone/" class="icon-angle_bf">Verify the Phone</a></li>

<h4 style="font-size:14px;">CHANNELS ZOHO</h4>
                                        <li><a href="https://360smsapp.com/sms-messaging-app-zoho-crm/" class="icon-angle_bf">SMS App For Zoho</a><button class="buttonnew">NEW</button></li>

                                    </ul>
                                   
 
                                </div>
                            </div>
                        </li>

                        <li class="product items">
                            <a href="#">INDUSTRY</a>
                            <div class="product-events" id="custom_industry">
                                <div class="d-flex prod-2">
                                    <ul style="width: 34%;">
                                        <li><a href="https://360smsapp.com/education-academics/" class="icon-angle_bf">Education & Academics</a></li>
                                        <li><a href="https://360smsapp.com/finance/" class="icon-angle_bf">Finance</a></li>
                                        <li><a href="https://360smsapp.com/healthcare-wellness/" class="icon-angle_bf">Healthcare & Wellness</a></li>
                                        <li><a href="https://360smsapp.com/non-profit/" class="icon-angle_bf">Non Profit</a></li>
                                        <li><a href="https://360smsapp.com/internet-service-providers/" class="icon-angle_bf">ISP</a></li>
                                    </ul>
                                    <ul style="width: 33%;">
                                        <li><a href="https://360smsapp.com/mortgage/" class="icon-angle_bf">Mortgage</a></li>
                                        <li><a href="https://360smsapp.com/insurance/" class="icon-angle_bf">Insurance</a></li>
                                        <li><a href="https://360smsapp.com/real-estate/" class="icon-angle_bf">Real Estate</a></li>
                                        <li><a href="https://360smsapp.com/recruitment/" class="icon-angle_bf">Recruitment</a></li>
                                        <li><a href="https://360smsapp.com/legal/" class="icon-angle_bf">Legal</a></li>
                                    </ul>
                                    <ul style="width: 33%;">
                                        <li><a href="https://360smsapp.com/sales/" class="icon-angle_bf">Sales</a></li>
                                        <li><a href="https://360smsapp.com/service/" class="icon-angle_bf">Service</a></li>
                    <li><a href="https://360smsapp.com/marketing/" class="icon-angle_bf">Marketing</a></li>
                                        <li><a href="https://360smsapp.com/professional-services/" class="icon-angle_bf">Professional Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <!--  <li class="items item-home boldmenu"><a target="_blank" href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation"> SALESFORCE APPEXCHANGE. </a></li> -->

                        <li class="items item-home"><a href="https://360smsapp.com/success-stories/">SUCCESS STORIES</a></li>


                        <li class="items document">
                            <a href="#">RESOURCES</a>
                            <div class="documents-con">
                                <ul class="documents-events">
                                 <li><a href="https://360smsapp.com/webinar/mission-ai-possible-finale/">Webinar</a></li>
                                    <li><a href="https://360smsapp.com/manuals/">Manuals</a></li>
                                    <li class="show-doc">
                                        <a href="#" class="icon-angle">Documents</a>
                                        <div class="documents-items3">
                                            <ul class="documents-events2">
                                                <li class="show-doc-1">
                                                    <a href="#" class="icon-angle-1 ">Customization Guides</a>
                          <div class="documents-items11">
                                                        <ul class="documents-events2">
                                                            <li><a href="https://360smsapp.com/360-sms-configuration-user-guide/">360 SMS Configuration and User Guide</a></li>
                                                            <li><a href="https://360smsapp.com/sending-sms-through-process-builder/">Sending SMS through Process Builder</a></li>
                                                            <li><a href="https://360smsapp.com/batch-texting-techniques/">Batch Texting Techniques</a></li>
                                                            <li><a href="https://360smsapp.com/360-sms-email-to-sms-configuration/">360 SMS-Email to SMS Configuration</a></li>
                                                            <li><a href="https://360smsapp.com/360-sms-pardot-integration-3/">360 SMS Pardot Integration</a></li>
                                                            <li><a href="https://360smsapp.com/360-email-sync-user-guide/">Email Sync</a></li>
                                                            <li><a href="https://360smsapp.com/360-file-sync-user-guide/">File Sync</a></li>
                                                            <li><a href="https://360smsapp.com/360-mass-mailer-user-guide/">Mass mailer</a></li>
                                                            <li><a href="https://360smsapp.com/360-sms-ai/" class="">360 SMS: AI</a></li>
                                                            <li><a href="https://360smsapp.com/360-sms-open-api-guide/">Open API</a></li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="show-doc-2 ">
                                                    <a href="#" class="icon-angle-2 ">Guidelines</a>
                          <div class="documents-items22">
                                                        <ul class="documents-events2">
                                                            <li><a href="https://360smsapp.com/how-to-avoid-sending-spam-messages-through-360-sms-app/">Guidelines
                                                                    For Avoiding Spam Messages In 360 SMS App</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                
                                                <li>
                                                    <a href="/release-notes">Release Notes</a>
                                                </li>
                                                
                                                <li class="show-doc-3 devsms">
                                                    <a href="#" class="icon-angle-3">SMS Channel-Wise</a>
                          <div class="documents-items33">
                                                        <ul class="documents-events2 devsmsinner">
                                                            <li><a href="https://360smsapp.com/viber-user-guide/">Viber User Guide</a></li>
                                                            <li><a href="https://360smsapp.com/facebook-user-guide/">Facebook User Guide</a></li>
                                                            <li><a href="https://360smsapp.com/kakao-talk-user-guide/">Kakao Talk User Guide</a></li>
                                                       </ul>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="https://360smsapp.com/texting-for-pros/">Pro Tips</a></li>
																

                                    <li><a href="https://360smsapp.com/blog/">Blogs</a></li>
                                    <li class="show-doc-3">
                                                    <a href="#" class="icon-angle-3">Case Study</a>
                          <div class="documents-items33">
                                                        <ul class="documents-events2">
                                                            <li><a href="https://360smsapp.com/211-san-diego/">211 San Diego</a></li>
                                                            <li><a href="https://360smsapp.com/mountainside/">Mountainside</a></li>
                                                            <li><a href="https://360smsapp.com/logistics-industry/">Logistics Industry</a></li>
                                                            <li><a href="https://360smsapp.com/hospitality-industry/">Hospitality Industry</a></li>
                                                            <li><a href="https://360smsapp.com/educational-industry/">Educational Industry</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
											
									
									
                </ul>
                            </div>
                        </li>



                        <div class="inner-events">
                            <ul>
                                <li><a href="https://360smsapp.com/education-academics/">Education & Academics</a></li>
                                <li><a href="https://360smsapp.com/finance/">Finance</a></li>
                                <li><a href="https://360smsapp.com/healthcare-wellness/">Healthcare & Wellness</a></li>
                                <li><a href="https://360smsapp.com/non-profit/">Non Profit</a></li>
                                <li><a href="https://360smsapp.com/real-estate/">Real Estate</a></li>
                                <li><a href="https://360smsapp.com/recruitment/">Recruitment</a></li>
                            </ul>
                        </div>
                        

                       


            <li class="items document">
                            <a href="#">COMPANY</a>
                            <div class="documents-con documents-con1" id="company-cust">
                                <ul class="documents-events">
                                    <li><a href="https://360smsapp.com/about-us/">About Us</a></li>
                                    <li><a href="https://360smsapp.com/careers/">Careers</a></li>
                  <li><a href="https://360smsapp.com/partner-with-us/">Partners</a></li>
                                    <li class="eventsicon">
                                        <a href="#" class="icon-angle-4">Events</a>
                                        <div class="documents-items3 documents-items4">
                                            <ul class="documents-events2">
                                                <li><a href=" https://360smsapp.com/360-sms-monsoon-bash/">360 SMS MONSOON BASH</a></li>
                                                <li><a href="https://360smsapp.com/webinar/">WEBINAR</a></li>
                                                <li><a href="https://360smsapp.com/previous-webinar/">OUR PREVIOUS WEBINAR</a></li>
                                                 <li><a href="https://360smsapp.com/dreamforce-2022/">DREAMFORCE 2022</a></li>
                                                <li><a href="https://360smsapp.com/dreamforce-2019/">DREAMFORCE 2019</a></li>
                                                <li><a href="https://360smsapp.com/salesforce-world-tour-los-angeles-2019/">SALESFORCE WORLD TOUR LOS ANGELS 2019</a></li>
                                                <li><a href="https://360smsapp.com/salesforce-world-tour-london-2019/">SALESFORCE WORLD TOUR LONDON 2019</a></li>
                                                <li><a href="https://360smsapp.com/salesforce-tour-sydney/">SALESFORCE WORLD TOUR SYDNEY 2019</a></li>
                                            </ul>
                                        </div>
                                    </li>
                        <!--            <li class="custom_dropdown custom_dropdownss">-->
                        <!--                <a href="#" class="icon-angle-5">News</a>-->
                        <!--                <div class="documents-items3 documents-items4">-->
                        <!--                    <ul class="documents-events2">-->
                        <!--<li><a href="https://360smsapp.com/360-sms-app-now-enabled-with-appexchange-chat/">AppExchange Chat</a></li>-->
                        <!--                        <li><a href="https://360smsapp.com/1-percent-pledge/">1% Pledge</a></li>-->
                        <!--                        <li><a href="https://360smsapp.com/we-are-now-salesforce-platinum-partner/">Summit Partner</a></li>-->
                        <!--                    </ul>-->
                        <!--                </div>-->
                        <!--            </li>-->
      <li class="show-doc-2 custom_dropdown custom_dropdownss"> 
                                                    <a href="#" class="icon-angle-2 customcls">News</a>
                          <div class="documents-items22 documents-items22sss">
                                                        <ul class="documents-events2">
                        <li><a href="https://360smsapp.com/360-sms-app-now-enabled-with-appexchange-chat/">AppExchange Chat</a></li>
                                                <li><a href="https://360smsapp.com/1-percent-pledge/">1% Pledge</a></li>
                                                <li><a href="https://360smsapp.com/we-are-now-salesforce-platinum-partner/">Summit Partner</a></li>
                                            </ul>
                                                    </div>
                                                </li>
                                    <li><a href="https://360smsapp.com/contact-us/">Contact Us</a></li>
                                </ul>
                            </div>
                        </li>
                        <!--           <li class="items item-home"><a href="https://360smsapp.com/partner-with-us/">PARTNERSHIP</a></li> -->






                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--------------------------------TOP HEADER SECTION END-------------------------------->
<!--------------------------------NAVIGATION BAR START-------------------------------->
<!-- ------------------------------@@  --------DESKTOP VIEW MENU part header ENDS HERE------------------------------@@@@@@@@   -->
<!--------------------------------NAVIGATION BAR START END-------------------------------->
<!-----------------------------MENU BAR NAV CONTENT START-------------------------------->
 <!-----------------------------MENU BAR NAV CONTENT END------------------------------>
</section>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-src="https://360smsapp.com/wp-content/cache/min/1/jquery-3.2.1.slim.min.js?ver=1767963818"
    crossorigin="anonymous"></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-src="https://360smsapp.com/wp-content/cache/min/1/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js?ver=1767963818"
    crossorigin="anonymous"></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-src="https://360smsapp.com/wp-content/cache/min/1/bootstrap/4.0.0/js/bootstrap.min.js?ver=1767963818"
    crossorigin="anonymous"></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-src="https://360smsapp.com/wp-content/cache/min/1/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js?ver=1767963818"
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="rocketlazyloadscript" data-rocket-src="https://360smsapp.com/wp-content/themes/thegem-child/js/jquery2.min.js"></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-src="https://360smsapp.com/wp-content/cache/min/1/jquery.slick/1.5.0/slick.min.js?ver=1767963818"></script>
<script type="rocketlazyloadscript">
    $('body').on('click tap', 'button#menu-toggle', function () {
        if ($('.headers').hasClass('active')) {
            $('.headers').removeClass('active');
        } else {
            $('.headers').addClass('active');
        }

    });

    $('body').click(function (e) {
        if (!$(e.target).is('button#menu-toggle')) {
            $('.headers').removeClass('active');
            //new change 
            $('.primary-menu-panel').show();
            $('div.menu-panel').removeClass('is-active');
        }
    });

    $('div.slide-out-menu').click(function (e) {
        e.stopPropagation();
    });

    $('button.menu-link').click(function () {
        $('div.menu-panel').removeClass('is-active');
        $('.primary-menu-panel').show(); // new change
        if ($(this).data('ref')) {
            var targetRef = $(this).data('ref');
            var $target = $('div.menu-panel[data-menu="' + targetRef + '"]');
            $('.primary-menu-panel').hide();// new change
            $target.addClass('is-active');
        }
    });
</script>
<script type="rocketlazyloadscript">
    $(function () {

        $('.dropdown > .caption').on('click', function () {
            $(this).parent().toggleClass('open');
        });

        $('.dropdown > .list > .item').on('click', function () {
            $('.dropdown > .list > .item').removeClass('selected');
            $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text($(this).text());
        });

        $(document).on('keyup', function (evt) {
            if ((evt.keyCode || evt.which) === 27) {
                $('.dropdown').removeClass('open');
            }
        });

        $(document).on('click', function (evt) {
            if ($(evt.target).closest(".dropdown > .caption").length === 0) {
                $('.dropdown').removeClass('open');
            }
        });

    });
</script>
<script type="rocketlazyloadscript">
    const Menubar = document.getElementById("menu-bar");
    const MenuContent = document.getElementById("menu-content");
  /*   Menubar.addEventListener("click", function () {
        if (MenuContent.style.display == "block") {
            MenuContent.style.display = "none";
        } else {
            MenuContent.style.display = "block"
        }
    })*/
    const Navtop = document.getElementById("head")
    const Nav = document.getElementById("nav-main")
    const navheight = Navtop.getBoundingClientRect().height;
    //console.log(navheight);
    window.addEventListener('scroll', function () {
        const scrollheight = window.pageYOffset;
        // console.log(scrollheight);
 
        if (scrollheight > navheight) {
            Nav.classList.add('nav-fixed');
            Nav.classList.remove('nav-101');
             Navtop.classList.add('nav-top-fixed');
        }
        else {
            Nav.classList.remove('nav-fixed');
            Nav.classList.add('nav-101');
             Navtop.classList.remove('nav-top-fixed');
        }
    })
</script>
<style>a.icon-angle-2.customcls:after {
    position: absolute;
    width: 9px;
    height: 16px;
    top: 74%;
    font-weight: normal;
    font-family: 'thegem-icons';
    content: '\e601';
    font-size: 16px;
    line-height: 16px;
    right: 16px;
} .documents-items22sss {
    position: absolute;
    transform: translate(-110%, -12%);
}</style>


	<link data-minify="1" rel="stylesheet" href="https://360smsapp.com/wp-content/cache/min/1/wp-content/themes/thegem-child/css/all.min.css?ver=1767963786">		<div id="site-header-wrapper"  class=" "  style="display:none;">

			
			
			<header id="site-header" class="site-header animated-header mobile-menu-layout-default" role="banner">
								
								<div class="container">
					<div class="header-main logo-position-left header-layout-default header-style-3">
													<div class="site-title">
										<div class="site-logo" style="width:167px;">
			<a href="https://360smsapp.com/" rel="home">
									<span class="logo"><img width="167" height="71" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20167%2071'%3E%3C/svg%3E" data-lazy-srcset="https://360smsapp.com/wp-content/uploads/thegem-logos/logo_678e9655a3d20b781d55de849ff5dc76_1x.png 1x,https://360smsapp.com/wp-content/uploads/thegem-logos/logo_678e9655a3d20b781d55de849ff5dc76_2x.png 2x,https://360smsapp.com/wp-content/uploads/thegem-logos/logo_678e9655a3d20b781d55de849ff5dc76_3x.png 3x" alt="360 SMS App" style="width:167px;" class="tgp-exclude default" data-lazy-src="https://360smsapp.com/wp-content/uploads/thegem-logos/logo_678e9655a3d20b781d55de849ff5dc76_1x.png"/><noscript><img width="167" height="71" src="https://360smsapp.com/wp-content/uploads/thegem-logos/logo_678e9655a3d20b781d55de849ff5dc76_1x.png" srcset="https://360smsapp.com/wp-content/uploads/thegem-logos/logo_678e9655a3d20b781d55de849ff5dc76_1x.png 1x,https://360smsapp.com/wp-content/uploads/thegem-logos/logo_678e9655a3d20b781d55de849ff5dc76_2x.png 2x,https://360smsapp.com/wp-content/uploads/thegem-logos/logo_678e9655a3d20b781d55de849ff5dc76_3x.png 3x" alt="360 SMS App" style="width:167px;" class="tgp-exclude default"/></noscript><img width="133" height="57" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20133%2057'%3E%3C/svg%3E" data-lazy-srcset="https://360smsapp.com/wp-content/uploads/thegem-logos/logo_c3c9f696237d5bee453b386df8967425_1x.png 1x,https://360smsapp.com/wp-content/uploads/thegem-logos/logo_c3c9f696237d5bee453b386df8967425_2x.png 2x,https://360smsapp.com/wp-content/uploads/thegem-logos/logo_c3c9f696237d5bee453b386df8967425_3x.png 3x" alt="360 SMS App" style="width:133px;" class="tgp-exclude small" data-lazy-src="https://360smsapp.com/wp-content/uploads/thegem-logos/logo_c3c9f696237d5bee453b386df8967425_1x.png"/><noscript><img width="133" height="57" src="https://360smsapp.com/wp-content/uploads/thegem-logos/logo_c3c9f696237d5bee453b386df8967425_1x.png" srcset="https://360smsapp.com/wp-content/uploads/thegem-logos/logo_c3c9f696237d5bee453b386df8967425_1x.png 1x,https://360smsapp.com/wp-content/uploads/thegem-logos/logo_c3c9f696237d5bee453b386df8967425_2x.png 2x,https://360smsapp.com/wp-content/uploads/thegem-logos/logo_c3c9f696237d5bee453b386df8967425_3x.png 3x" alt="360 SMS App" style="width:133px;" class="tgp-exclude small"/></noscript></span>
							</a>
		</div>
									</div>
							<div class="mobilerows">	
            <div class="d-flex call-num">
              <div class="mm-dropdown">
                  <div class="textfirst"><img width="30" height="16" alt="United States Flag" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2030%2016'%3E%3C/svg%3E"style="width:19px; height:14px;" data-lazy-src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4-1.png"><noscript><img width="30" height="16" alt="United States Flag" src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4-1.png"style="width:19px; height:14px;"></noscript><span class="ml-10">US</span><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2010%2010'%3E%3C/svg%3E" width="10" height="10" class="down" alt="Downward arrow icon" data-lazy-src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-down-b-128.png" /><noscript><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-down-b-128.png" width="10" height="10" class="down" alt="Downward arrow icon" /></noscript></div>
                  <ul>

                    <li class="input-option" data-value="1">
                      <img width="30" height="16" alt="United States Flag" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2030%2016'%3E%3C/svg%3E" style="width:19px;height:14px;" data-lazy-src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4-1.png"><noscript><img width="30" height="16" alt="United States Flag" src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4-1.png" style="width:19px;height:14px;"></noscript><span class="ml-10"> US</span>
                    </li>

                    <li class="input-option" data-value="2">
                      <img width="30" height="16" src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_the_United_Kingdom.svg-p40ox2lqtrvrzswj9j46agsmbnoyte81twc2r30n4w.png" title="255px-Flag_of_the_United_Kingdom.svg" alt="255px-Flag_of_the_United_Kingdom.svg" style="width:19px; height:14px;"><span class="ml-10"> UK</span>
                    </li>

                    <li class="input-option" data-value="3">
                      <img width="255" height="128" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20255%20128'%3E%3C/svg%3E" title="255px-Flag_of_Australia_(converted).svg" alt="255px-Flag_of_Australia_(converted).svg"style="width:19px;height:14px;" data-lazy-src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_Australia_converted.svg.png"><noscript><img width="255" height="128" src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_Australia_converted.svg.png" title="255px-Flag_of_Australia_(converted).svg" alt="255px-Flag_of_Australia_(converted).svg"style="width:19px;height:14px;"></noscript><span class="ml-10"> AU</span>
                    </li>

                    <li class="input-option" data-value="4">
                      <img width="255" height="170" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20255%20170'%3E%3C/svg%3E" title="255px-Flag_of_India.svg" alt="255px-Flag_of_India.svg" style="width:19px; height:14px;" data-lazy-src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_India.svg-1.png"><noscript><img width="255" height="170" src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_India.svg-1.png" title="255px-Flag_of_India.svg" alt="255px-Flag_of_India.svg" style="width:19px; height:14px;"></noscript><span class="ml-10">IN</span>
                    </li>

                    <li class="input-option" data-value="5">
                      <img width="255" height="170" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20255%20170'%3E%3C/svg%3E" title="255px-Flag_of_India.svg" alt="255px-Flag_of_India.svg" style="width:19px; height:14px;" data-lazy-src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_India.svg-1.png"><noscript><img width="255" height="170" src="https://360smsapp.com/wp-content/uploads/2021/07/255px-Flag_of_India.svg-1.png" title="255px-Flag_of_India.svg" alt="255px-Flag_of_India.svg" style="width:19px; height:14px;"></noscript><span class="ml-10"> IN</span>
                    </li>
                  </ul>
                 
                </div>
				<a href="tel:+1 323 641 4417" class="inp-num">+1 323 641 4417</a>
               
                <span class="phone-icon"><i class="fas fa-phone"></i></span>
            <!--   <div class="m-hov-2">
                    <a href="#" class="wrapper-blue-img-2">
                        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-lazy-src="images/call -bl.svg"/><noscript><img src="images/call -bl.svg"/></noscript>
                    +1 323 6414417</a>
                </div>-->
                </div>
					</div>
																								<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
										<button class="menu-toggle dl-trigger">Primary Menu<span class="menu-line-1"></span><span class="menu-line-2"></span><span class="menu-line-3"></span></button>										<ul id="primary-menu" class="nav-menu styled no-responsive dl-menu"><li id="menu-item-38054" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38054 megamenu-first-element"><a href="#">Resources</a><span class="menu-item-parent-toggle"></span>
<ul class="sub-menu styled dl-submenu">
	<li id="menu-item-38059" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38059 megamenu-first-element"><a href="https://360smsapp.com/blog/">Blog</a></li>
	<li id="menu-item-38060" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38060 megamenu-first-element"><a href="#">Documents</a><span class="menu-item-parent-toggle"></span>
	<ul class="sub-menu styled dl-submenu">
		<li id="menu-item-38065" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38065 megamenu-first-element"><a href="#">Customization Guides</a><span class="menu-item-parent-toggle"></span>
		<ul class="sub-menu styled dl-submenu">
			<li id="menu-item-38066" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38066 megamenu-first-element"><a href="https://360smsapp.com/360-sms-configuration-user-guide/">360 SMS  Configuration &#038; User Guide</a></li>
			<li id="menu-item-38067" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38067 megamenu-first-element"><a href="/sending-sms-through-process-builder/">Sending SMS through Process Builder</a></li>
			<li id="menu-item-38068" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38068 megamenu-first-element"><a href="https://360smsapp.com/batch-texting-techniques/">Batch Texting Techniques</a></li>
			<li id="menu-item-38069" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38069 megamenu-first-element"><a href="https://360smsapp.com/360-sms-email-to-sms-configuration/">360 SMS – Email to SMS Configuration</a></li>
			<li id="menu-item-38070" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38070 megamenu-first-element"><a href="https://360smsapp.com/360-sms-pardot-integration-3/">360 SMS Pardot Integration</a></li>
		</ul>
</li>
		<li id="menu-item-38071" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38071 megamenu-first-element"><a href="#">Guidelines</a><span class="menu-item-parent-toggle"></span>
		<ul class="sub-menu styled dl-submenu">
			<li id="menu-item-38072" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38072 megamenu-first-element"><a href="https://360smsapp.com/how-to-avoid-sending-spam-messages-through-360-sms-app/">Guidelines For Avoiding Spam Messages In 360 SMS App</a></li>
		</ul>
</li>
		<li id="menu-item-38073" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38073 megamenu-first-element"><a href="#">Case Study</a><span class="menu-item-parent-toggle"></span>
		<ul class="sub-menu styled dl-submenu">
			<li id="menu-item-38074" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38074 megamenu-first-element"><a href="https://360smsapp.com/211-san-diego/">211 San Diego</a></li>
			<li id="menu-item-38076" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38076 megamenu-first-element"><a href="https://360smsapp.com/mountainside/">Mountainside</a></li>
			<li id="menu-item-38075" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38075 megamenu-first-element"><a href="https://360smsapp.com/logistics-industry/">Logistics Industry</a></li>
			<li id="menu-item-38078" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38078 megamenu-first-element"><a href="https://360smsapp.com/hospitality-industry/">Hospitality Industry</a></li>
			<li id="menu-item-38077" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38077 megamenu-first-element"><a href="https://360smsapp.com/educational-industry/">Educational Industry</a></li>
		</ul>
</li>
	</ul>
</li>
	<li id="menu-item-38061" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38061 megamenu-first-element"><a href="https://360smsapp.com/manuals/">Manuals</a></li>
</ul>
</li>
<li id="menu-item-38055" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38055 megamenu-first-element"><a href="#">Industries</a><span class="menu-item-parent-toggle"></span>
<ul class="sub-menu styled dl-submenu">
	<li id="menu-item-38079" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38079 megamenu-first-element"><a href="https://360smsapp.com/education-academics/">Education &#038; Academics</a></li>
	<li id="menu-item-38080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38080 megamenu-first-element"><a href="https://360smsapp.com/finance/">Finance</a></li>
	<li id="menu-item-38081" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38081 megamenu-first-element"><a href="https://360smsapp.com/healthcare-wellness/">Healthcare &#038; Wellness</a></li>
	<li id="menu-item-38082" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38082 megamenu-first-element"><a href="https://360smsapp.com/non-profit/">Non Profit</a></li>
	<li id="menu-item-38083" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38083 megamenu-first-element"><a href="https://360smsapp.com/real-estate/">Real Estate</a></li>
	<li id="menu-item-38084" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38084 megamenu-first-element"><a href="https://360smsapp.com/recruitment/">Recruitment</a></li>
	<li id="menu-item-38085" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38085 megamenu-first-element"><a href="https://360smsapp.com/legal/">Legal</a></li>
	<li id="menu-item-38086" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38086 megamenu-first-element"><a href="/internet-service-providers/">ISP</a></li>
	<li id="menu-item-38087" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38087 megamenu-first-element"><a href="https://360smsapp.com/mortgage/">Mortgage</a></li>
	<li id="menu-item-38126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38126 megamenu-first-element"><a href="https://360smsapp.com/insurance/">Insurance</a></li>
</ul>
</li>
<li id="menu-item-38057" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38057 megamenu-enable megamenu-style-default megamenu-first-element"><a href="#">Product</a><span class="menu-item-parent-toggle"></span>
<ul class="sub-menu styled megamenu-empty-right megamenu-empty-top megamenu-empty-bottom megamenu-masonry dl-submenu" data-megamenu-columns="3"  style="padding-left:20px; padding-right:0px; padding-top:0px; padding-bottom:0px; ">
	<li id="menu-item-38062" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38062 megamenu-first-element" style="width: 300px;" ><span class="megamenu-column-header"><a href="#">Channels</a></span><span class="menu-item-parent-toggle"></span>
	<ul class="sub-menu styled megamenu-masonry dl-submenu">
		<li id="menu-item-38117" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38117"><a href="https://360smsapp.com/salesforce-sms/">SMS</a></li>
		<li id="menu-item-38116" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38116"><a href="https://360smsapp.com/salesforce-mms/">MMS</a></li>
		<li id="menu-item-38121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38121"><a href="https://360smsapp.com/salesforce-computer-telephony-integration/">Computer Telephony  Integration</a></li>
		<li id="menu-item-38120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38120"><a href="https://360smsapp.com/salesforce-whatsapp/">WhatsApp</a></li>
		<li id="menu-item-38125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38125"><a href="https://360smsapp.com/salesforce-ringless-voicemail/">Ringless Voicemail</a></li>
		<li id="menu-item-38122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38122"><a href="https://360smsapp.com/salesforce-facebook-messenger/">Facebook Messenger</a></li>
		<li id="menu-item-38119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38119"><a href="https://360smsapp.com/salesforce-wechat/">WeChat</a></li>
		<li id="menu-item-38118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38118"><a href="https://360smsapp.com/salesforce-viber/">Viber</a></li>
	</ul>
</li>
	<li id="menu-item-38063" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38063" style="width: 300px;" ><span class="megamenu-column-header"><a href="#">Additional Features</a></span><span class="menu-item-parent-toggle"></span>
	<ul class="sub-menu styled megamenu-masonry dl-submenu">
		<li id="menu-item-38104" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38104"><a href="https://360smsapp.com/privacy-by-design/">Privacy By Design</a></li>
		<li id="menu-item-38105" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38105"><a href="https://360smsapp.com/automated-messaging/">Automated-Messaging</a></li>
		<li id="menu-item-38110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38110"><a href="https://360smsapp.com/itext/">Itext</a></li>
		<li id="menu-item-38108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38108"><a href="https://360smsapp.com/conversation-manager/">Conversation-Manager</a></li>
		<li id="menu-item-38107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38107"><a href="https://360smsapp.com/bulk-batch-scheduled-sms-texting/">Bulk-Batch-Scheduled-sms-texting</a></li>
		<li id="menu-item-38106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38106"><a href="https://360smsapp.com/bring-your-own-number/">Bring-your-own-number</a></li>
		<li id="menu-item-38111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38111"><a href="https://360smsapp.com/link-tracking/">Link-tracking</a></li>
		<li id="menu-item-38109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38109"><a href="https://360smsapp.com/drip-campaigns/">Drip Campaigns</a></li>
		<li id="menu-item-38133" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38133"><a href="https://360smsapp.com/one-on-one-conversations/">One-on-one-conversations</a></li>
		<li id="menu-item-38134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38134"><a href="https://360smsapp.com/cti-call-auto-forwarding/">CTI Call  Auto Forwarding</a></li>
		<li id="menu-item-38113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38113"><a href="https://360smsapp.com/sticky-sender/">Sticky Sender</a></li>
		<li id="menu-item-38114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38114"><a href="https://360smsapp.com/appointments-and-rescheduling/">Appointments and Rescheduling</a></li>
		<li id="menu-item-38115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38115"><a href="https://360smsapp.com/multiple-language-support/">Multiple Language Support</a></li>
	</ul>
</li>
	<li id="menu-item-38064" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38064" style="width: 300px;" ><span class="megamenu-column-header"><a href="#">Connectivity</a></span><span class="menu-item-parent-toggle"></span>
	<ul class="sub-menu styled megamenu-masonry dl-submenu">
		<li id="menu-item-38102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38102"><a href="https://360smsapp.com/shared-short-codes/">Shared Short Codes</a></li>
		<li id="menu-item-38103" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38103"><a href="https://360smsapp.com/short-codes/">Short Codes</a></li>
	</ul>
</li>
	<li class="megamenu-new-row"></li><li id="menu-item-38100" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38100 megamenu-first-element" style="width: 300px;" ><span class="megamenu-column-header"><a href="#">ADD-ONS</a></span><span class="menu-item-parent-toggle"></span>
	<ul class="sub-menu styled megamenu-masonry dl-submenu">
		<li id="menu-item-38101" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38101"><a href="https://360smsapp.com/digital-engagement-on-steroids-webpage/">DEOS</a></li>
		<li id="menu-item-38123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38123"><a href="https://360smsapp.com/verify-the-phone/">VTP</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-38056" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38056"><a href="#">Company</a><span class="menu-item-parent-toggle"></span>
<ul class="sub-menu styled dl-submenu">
	<li id="menu-item-38089" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38089"><a href="https://360smsapp.com/about-us/">About Us</a></li>
	<li id="menu-item-38090" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38090"><a href="https://360smsapp.com/careers/">Careers</a></li>
	<li id="menu-item-38091" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38091"><a href="#">Events</a><span class="menu-item-parent-toggle"></span>
	<ul class="sub-menu styled dl-submenu">
		<li id="menu-item-38204" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38204"><a href="https://360smsapp.com/360-sms-monsoon-bash/">360 SMS Monsoon Bash</a></li>
		<li id="menu-item-38093" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38093"><a href="https://360smsapp.com/webinar/">Webinar</a></li>
		<li id="menu-item-38094" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38094"><a href="https://360smsapp.com/previous-webinar/">Our Previous Webinars</a></li>
		<li id="menu-item-38095" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38095"><a href="https://360smsapp.com/dreamforce-2019/">Dreamforce 2019</a></li>
		<li id="menu-item-38098" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38098"><a href="https://360smsapp.com/salesforce-world-tour-los-angeles-2019/">Salesforce World Tour Los Angeles 2019</a></li>
		<li id="menu-item-38097" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38097"><a href="https://360smsapp.com/salesforce-world-tour-london-2019/">Salesforce World Tour London 2019</a></li>
		<li id="menu-item-38096" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38096"><a href="https://360smsapp.com/salesforce-tour-sydney/">Salesforce World Tour Sydney 2019</a></li>
	</ul>
</li>
	<li id="menu-item-38130" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-38130"><a href="#">News</a><span class="menu-item-parent-toggle"></span>
	<ul class="sub-menu styled dl-submenu">
		<li id="menu-item-38131" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38131"><a href="https://360smsapp.com/360-sms-app-now-enabled-with-appexchange-chat/">AppExchange Chat</a></li>
		<li id="menu-item-38144" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38144"><a href="https://360smsapp.com/1-percent-pledge/">1% Pledge</a></li>
	</ul>
</li>
	<li id="menu-item-38092" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38092"><a href="https://360smsapp.com/contact-us/">Contact Us</a></li>
</ul>
</li>
<li id="menu-item-38058" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38058"><a href="https://360smsapp.com/success-stories/">Success Stories</a></li>
</ul>																			</nav>
																										</div>
				</div>
							</header><!-- #site-header -->
					</div><!-- #site-header-wrapper -->

	<style>
	.sixcolumn img{
	max-width:100px !important;
} 
div#bannerheading {
    padding-right: 60% !important;
	height:65vh;
}
@media only screen and (max-width:768px){
	.mobilerows{
		display:block;
	}
	div#bannerheading {
    padding-right: 30% !important;
   
}
}
#mobilerow h5{
	color:#fff;
}

#primary-navigation .menu-toggle{
	margin-left: -13px;
}


	
	#menu-new_footer-menu-1 li:nth-child(odd){
		width:51%!important;	
		margin-left:17px;
	}
	#menu-new_footer-menu-1 li:nth-child(even){
		width:42%!important;	
		
	}

#p-desk-0 .vc_column-inner{
		padding-right:0px!important;
	} 
	#menu-new_footer-menu-1 li:nth-child(odd){
		width:51%!important;	
		margin-left:17px;
	}
	#menu-new_footer-menu-1 li:nth-child(even){
		width:42%!important;	
		
	}

#p-desk-0 ul{
	margin-top:-20px;
}
/*Added on 15june */
.sixcolumn img{
	max-width:100px !important;
} 
@media only screen and (max-width: 400px) {
.textjustify p , .textjustifydiv div{
	text-align:justify; 
	}  div#btnmargin a {
    margin-top: 0px;
    margin-bottom: 50px;
} 
div#bannerheading {
       height: 55vh !important;
	padding-right: 0% !important;
}
	div#bannerheading h1 {
    font-size: 29px !important;
    line-height: 34px !important;
}
	.page-id-34927 div#bannerheading {
    height: 84vh !important;
    padding-right: 0% !important;
}
}

@media only screen and (max-width:768px) and (min-width:600px){
	#socialwidth .vc_col-sm-6{
		width:100%;
	}
	.footerform {
		margin-left: 0px!important;
	}
	.d-flex.footerform {
		padding-left: 21px!important;
		padding-right: 0px!important;
	}
	.footerform .input-subs{
		padding:0px 9px!important;
	}
}

@media only screen and (max-width:600px){
	.d-flex.menues-footer ul{
		padding-left:0px;
		margin-top:0px;
	}
	.socials-item i {
		font-size: 42px!important;
	}
	.socials-list.socials-alignment-center {
		margin-left:0px!important;
	}
	.footerlogoimg img{
		width:200px;
	}
	.text-white{
		margin-left: 16px;
		margin-bottom: 45px!important;
	}
}
@media only screen and (max-width: 600px){
  .d-flex.menues-footer ul li{
      text-align: left;
  }
  .d-flex.menues-footer ul{
    width: 50%;
    float: left;
  }
}
strong{
	line-height:26px;
}
@media only screen and (max-width: 600px){
	#mobilerow .footerform {
		 padding: 0px 0px!important;
	}
}
@media only screen and (max-width: 420px){
div#bannerheading {
    padding-right: 15% !important;
	}}


#menu-item-33845 ul{
    width: 750px !important;
    top: 0px;
    transform: translate(40%, 0%) !important;
	background-color: #f4f6f7 !important;
	display: grid;
    grid-template-columns: 1fr 1fr 1fr;
	column-fill:balance;
	
}
 
#menu-item-33845 ul li{
	border-style: none !important;
}

#menu-item-33845 ul li a:hover {
    background-color: rgb(0, 188, 212) !important;
	color:#fff !important;
}
#menu-item-33845 ul li a:before {
    display: inline-block;
    font-family: FontAwesome;
    content: "\f105";
    font-size: 14px;
    vertical-align: baseline;
	width: 25px;
    text-align: left;
    margin-left: -13px;
    padding-left: 4px;
    position: absolute;
 }
#menu-item-33845 ul li a{
	padding:9px 30px !important;
}
@media only screen and (max-width: 768px){
	#menu-item-33845 ul{
		column-count: 1 !important;
		transform: translate(0%, 0%) !important;
		width: 750px !important;
	}
	#menu-item-33845 ul li a:before {
    content: " " !important;
    
 }
}
@media only screen and (max-width: 425px){
	#menu-item-33845 ul{
		column-count: 1 !important;
		transform: translate(0%, 0%) !important;
		 width: 600px !important;
	}
	#menu-item-33845 ul li a:before {
    content: " " !important;
    
 }
}
@media only screen and (max-width: 375px){
	#menu-item-33845 ul{
		column-count: 1 !important;
		transform: translate(0%, 0%) !important;
		 width: 600px !important;
	}
	#menu-item-33845 ul li a:before {
    content: " " !important;
    
 }
}
@media only screen and (max-width: 360px){
	#menu-item-33845 ul{
		column-count: 1 !important;
		transform: translate(0%, 0%) !important;
		 width: 600px !important;
	}
	#menu-item-33845 ul li a:before {
    content: " " !important;
    
 }
}
@media only screen and (max-width: 320px){
	#menu-item-33845 ul{
		column-count: 1 !important;
		transform: translate(0%, 0%) !important;
		 width: 600px !important;
	}
	#menu-item-33845 ul li a:before {
    content: " " !important;
    
 }
} div#centerbuttons .wpb_wrapper {
    text-align: center;
	} 
.single-post div#comments {
    display: none;
}
	</style>
	<div id="main" class="site-main">
<div id="main-content" class="main-content">

<div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 ">
						
						
						
						
						
						<div class="container"><div class="page-title-inner"><div class="page-title-title"><h1 style="color:#FFFFFFFF;">  Terms of service</h1></div></div></div>
						
					</div>
<div class="block-content">
	<div class="container">
		<div class="panel row">

			<div class="panel-center col-xs-12">
				<article id="post-61422" class="post-61422 page type-page status-publish">

					<div class="entry-content post-content">
						
						    
						
								<div data-elementor-type="wp-page" data-elementor-id="61422" class="elementor elementor-61422">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-77e05c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="77e05c3" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4214422" data-id="4214422" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6f48118 elementor-widget elementor-widget-html" data-id="6f48118" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Left Side Tab Menu</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      color:#000000;
    }

    .container_tab {
      display: flex
;
    gap: 30px;
      
    }

    .sidebar {

        width: 30%;
      background-color: #f4f4f4;
      padding-top: 20px;
      border-right: 1px solid #ccc;
      max-height: 450px;
      overflow-y: auto;
    }
    .sidebar-container::-webkit-scrollbar {
  display: none; /* Chrome, Safari */
}
    .sidebar button {
      display: flex;
      align-items: center;
      background: none;
      border: none;
      padding: 4px 4px 4px 20px;
      margin-bottom: 8px;
      text-align: left;
      width: 100%;    justify-content: space-between;
      cursor: pointer;
      font-size: 14px;
      transition: background-color 0.3s ease;
    }
    .block-content:last-of-type {
    padding-bottom: 110px;
    
}

    .sidebar button:hover {
      background-color: transparent;
      text-decoration: underline;
    }
    button:focus {
    outline: none;
}
    .sidebar button.active {
      background-color: #00bcd4;
    font-weight: 600;
    color: #ffffff;
    }
ul {
    padding-left: 22px;
    list-style: none;
}

    .arrow {
      margin-right: 8px;display: none;
      transition: transform 0.3s;
    }

    .sidebar button.active .arrow {
      transform: rotate(90deg);
    }

    .content {
      flex-grow: 1;  
    padding: 20px;
    overflow-y: auto;
    width: 70%;
    }
    p {
    font-size: 14px;
}
    .container_tab h2, h3 {
      font-size:19px;
    line-height: 36px;
    padding-bottom: 13px;
}
    .tab-content {
      display: none;
    }

    .tab-content.active {
      display: block;
    }
  </style>
</head>
<body>

  <div class="container_tab">
    <div class="sidebar">
      <button class="tablink active" onclick="openTab(event, 'tab20')"><b>TERMS & CONDITIONS</b> <span class="arrow">►</span></button>
<!-- Always Visible Nested List -->
<ul style="list-style: none; padding-left: 20px; margin-top: 5px;">

  <li>      <button class="tablink" id="tab-btn-21" onclick="openTab(event, 'tab21')">ACCEPTABLE USE OF POLICY<span class="arrow">►</span></button>
  </li>
  <li>      <button class="tablink" id="tab-btn-2" onclick="openTab(event, 'tab2')">INTELLECTUAL PROPERTY RIGHTS <span class="arrow">►</span></button>
  </li>
  <li>      <button class="tablink" id="tab-btn-7" onclick="openTab(event, 'tab7')">SECURITY OVERVIEW <span class="arrow">►</span></button>
  </li>
  <li>      <button class="tablink" id="tab-btn-22" onclick="openTab(event, 'tab22')">DATA PROTECTION ADDENDUM <span class="arrow">►</span></button>
  </li>

  </ul>

  <button class="tablink"><b>TYPES OF SERVICES </b><span class="arrow" style="
    transform: rotate(90deg);">►</span></button>

<ul>
  <li>
    <button class="tablink" onclick="openTab(event, 'tab1')"> AI AGENT <span class="arrow">►</span></button></li>
    <li>     <button class="tablink" onclick="openTab(event, 'tab4')"> RINGLESS VOICEMAL<span class="arrow">►</span></button></li>
    <li>  <button class="tablink" onclick="openTab(event, 'tab5')"> CTI<span class="arrow">►</span></button></li>
    <li>   
      <button class="tablink" onclick="openTab(event, 'tab6')"> LOCAL TIMEZONE FINDER <span class="arrow">►</span></button></li>
    <li>    <button class="tablink" onclick="openTab(event, 'tab8')"> EMAIL SYNC <span class="arrow">►</span></button></li>
    <li> 
  
      <button class="tablink" onclick="openTab(event, 'tab9')"> EMAIL UNSUBSCRIBE/OPT-OUT<span class="arrow">►</span></button></li>
  

    <li>
      <button class="tablink" onclick="openTab(event, 'tab10')"> WHATSSYNC <span class="arrow">►</span></button></li>
 

    <li>      <button class="tablink" onclick="openTab(event, 'tab12')"> HIGHLIGHTER <span class="arrow">►</span></button></li>
   

    <li>      <button class="tablink" onclick="openTab(event, 'tab13')"> SMS SERVICE  <span class="arrow">►</span></button></li>
    <li>
      <button class="tablink" onclick="openTab(event, 'tab14')"> LINE<span class="arrow">►</span></button></li>
      <li>
        <button class="tablink" onclick="openTab(event, 'tab15')"> FILE SYNC <span class="arrow">►</span></button></li>
        <li>   <button class="tablink" onclick="openTab(event, 'tab16')"> WHATSAPP BUSINESS <span class="arrow">►</span></button></li>
        <li>  <button class="tablink" onclick="openTab(event, 'tab17')"> MASS EMAIL<span class="arrow">►</span></button></li>
        <li>     <button class="tablink" onclick="openTab(event, 'tab18')"> MERGE DUPLICATES  <span class="arrow">►</span></button></li>
        <li><button class="tablink" onclick="openTab(event, 'tab19')"> VTM & VTP  <span class="arrow">►</span></button></li>
        <li><button class="tablink" onclick="openTab(event, 'tab23')"> TEXTOLIC  <span class="arrow">►</span></button></li>
</ul>






 

      <!-- <button class="tablink" onclick="openTab(event, 'tab11')">360 NPO SERVICE <span class="arrow">►</span></button> -->


   
    
 
    </div>

    <div class="content">
      <div id="tab1" class="tab-content"><h2>AI AGENT SERVICE LEVEL AGREEMENT</h2>
      
        <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer”, Client or "You") for the provision of AI Agent Service, as outlined below. By using our AI Agent service, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definition</p>
      <p>“AI Agent” refers to the artificial intelligence-based system provided by 360 Degree Cloud designed to assist with customer interactions, data processing, automated responses, virtual assistance, and other AI-driven services. “Natural Language Processing (NLP) technology” is a field of artificial intelligence that enables computers to understand, interpret, and generate human language, encompassing tasks like sentiment analysis, machine translation, and text summarization. “Output” The output refers to the results or responses that the AI Agent provides based on the processed input. “Input” The input refers to the data or information that the AI Agent receives or processes.</p>  
    <p>2. Scope of Services</p>
    <p>2.1 360 Degree Cloud AI Agent shall enable automated interactions with end users through voice and chat-based interfaces. 2.2 The AI Agent will leverage NLP technology to interpret and respond to customer inquiries in a conversational manner, improving the user experience. 2.3 The Customer may configure the AI Agent’s behaviors, responses, and personality to align with business needs, subject to the available features.</p>
    <p>3. Customer Responsibility</p>
    <p>3.1 Customers are responsible for any text, images, or other content you upload or submit to the AI (“Input”) as well as the text, images, or other content generated by the AI Agent based on your Input (“Output”). Customer will ensure that their use of the AI Agent, including Input and Output, complies with applicable law. 
       <p><b>3.2 AI Features</b><br>
The Services may include or integrate third-party artificial intelligence (<b>“AI”</b>) features or models (including but not limited to OpenAI’s ChatGPT or similar generative AI technologies) to provide text generation, predictive, analytical, or other automated functionalities (<b>“AI Features”</b>). The disclaimer made in clause <b>5.6</b> shall be applicable in all AI features.</p>

<p><b>3.2.1 Nature of AI Outputs</b><br>
The Client acknowledges and agrees that the AI Features generate responses based on algorithmic and probabilistic patterns derived from training data and user inputs. Such AI-generated content (<b>“AI Output”</b>) is produced automatically and may contain factual inaccuracies, omissions, or inappropriate information. The AI Output is not guaranteed to be accurate, complete, or free of error.</p>

<p><b>3.2.2 Client Responsibility</b><br>
The Client shall be solely responsible for: reviewing and independently verifying all AI Outputs before relying upon or using them; ensuring that the AI Output is appropriate and compliant with applicable laws and regulations; and refraining from using AI Outputs as the sole basis for critical, financial, legal, medical, or other professional decisions.</p>

<p><b>3.2.3 Disclaimer of Liability</b><br>
The Company makes no representations or warranties, express or implied, regarding the accuracy, reliability, or suitability of any AI Output. The AI Features are provided <b>“as is”</b> and <b>“as available”</b>. To the fullest extent permitted by applicable law, the Company shall not be liable for any claim, loss, damage, or liability arising out of or in connection with: (a) any Client Input or prompt submitted to the AI Features; (b) any use or reliance upon AI Outputs by the Client or its users; or (c) any error, omission, or result generated by the AI Features.</p>

<p><b>3.2.4 Third-Party Technology</b><br>
Where the AI features are provided by third-party providers (such as OpenAI), such features shall also be governed by the respective provider’s terms of use and privacy policy, and the Client agrees to comply with the same. The Company disclaims responsibility for the operation, performance, or outputs of any third-party AI technology.</p>
 
     <p> 3.3 The Customer shall ensure that any content used within the AI Agent’s interactions is lawful, does not infringe on third-party intellectual property rights, and is not defamatory, offensive, or in violation of any laws. 3.4 The Customer is solely responsible for obtaining all necessary consents from individuals whose data is processed by the AI Agent, including explicit consent for recording conversations and the processing of personal data.</p>
      </div>
      <div id="tab2" class="tab-content"><h2>INTELLECTUAL PROPERTY RIGHTS</h2>
      
        <p>1. Property Rights</p>
<p style="color: #000000;">Notwithstanding anything herein to the contrary, Customer acknowledge that 360 Degree Cloud owns the Software and Licensed Property and may own or otherwise control certain generic or proprietary information, inventions, software, strategies, processes, know-how, trade secrets, improvements, other intellectual property and other assets that are owned or controlled by 360 Degree Cloud as of the Effective Date or that are acquired or developed by 360 Degree Cloud after the Effective Date and independently of 360 Degree Cloud’s performance of Services under this Agreement or any Appendix and without access to, or use of, any Customer’s Confidential Information (collectively “360 Degree Cloud Property''). Customer and 360 Degree Cloud agree that any 360 Degree Cloud Property or improvements, modifications or enhancements specific thereto that are developed by 360 Degree Cloud are the sole and exclusive property of 360 Degree Cloud. To the extent that any Services IP provided by 360 Degree Cloud or any of its Affiliates or representatives to Customer or its Affiliates hereunder consists of 360 Degree Cloud Property, 360 Degree Cloud hereby grants to Customer and its Affiliates a non-exclusive, perpetual, fully paid-up, royalty-free, irrevocable, worldwide license, with the right to grant sublicenses, to use such 360 Degree Cloud Property in connection with Customer’s business. For the avoidance of doubt, the Parties agree that Customers Confidential Information and any data or information generated, conceived or derived from Customer’s Confidential Information shall not be 360 Degree Cloud Property.</p>

<p style="color: #000000;">All original works of authorship which are generated by 360 Degree Cloud (solely or jointly with others) within the scope of any Appendix and which are protectable by copyright shall be deemed “works made for hire,” as that term is defined in the United States Copyright Act, 17 U.S.C. § 101 except to the extent that they consist of 360 Degree Cloud Property or any rights therein that have been reserved by third parties, in each case, as permitted by and in accordance with, this Section.</p>

<p>2. Trade Secrets.</p>
<p style="color: #000000;">Customers agree that the Software and all associated trade secrets, including but not limited to the Licensed Property, its configurations, architecture, communications and
performance benchmarks, are the exclusive property of 360 Degree Cloud. Customer agrees not to disclose, disseminate, transmit via any medium whatsoever, or make available the Software, Licensed Property or any associated trade secrets to any third party without 360 Degree Cloud prior written consent.</p>
<p>3. Provision of Licensed Property</p>
<p style="color: #000000;">Subject to the observance by Customer of the terms and conditions of this Agreement, 360 Degree Cloud hereby grants to Customer and its Affiliates a perpetual, non-exclusive, non-transferable license to use the Licensed Property solely for Customer and its Affiliates’ b usiness purposes.</p>
<p style="color: #000000;">The availability of the Licensed Property is ninety-nine percent (99%) per calendar year (“Availability”), excluding scheduled updating and scheduled maintenance work (“Scheduled Maintenance”). In addition to all other Customer’s termination rights set forth herein, if the downtime, other than Scheduled Maintenance exceeds the guaranteed Availability level, then 360 Degree Cloud agrees to credit towards the next invoice’s fees a prorated amount equal to the fees attributable to such downtime (an “Availability Credit”). 360 Degree Cloud will endeavor to provide Customers with a calendar of all Scheduled Maintenance. Should a calendar not be available, 360 Degree Cloud shall inform the Customer of the Scheduled Maintenance times at least 7 days prior to the start of Scheduled Maintenance via email or any other electronic method of communication. Scheduled Maintenance will be carried out by 360 Degree Cloud during non-business hours of the Customer. 360 Degree Cloud’s right to take suitable measures at any time to defend against specific risks to the security and integrity of the systems, even without notice, remains unaffected. When calculating Availability, restrictions of Availability due to such security measures and/or Scheduled Maintenance are to be deducted.</p>
<p style="color: #000000;">360 Degree Cloud shall provide support services to Customer when the Licensed Property does not fulfill the agreed functions. The Customer shall report function failures, disruptions or impairments of the Licensed Property to 360 Degree Cloud as precisely as possible, whether verbally or in writing via e-mail. 360 Degree Cloud carries out support services during the customer business hours.</p>


      </div>
      <div id="tab3" class="tab-content"><h2>360 DEGREE TEXTOLIC SERVICE LEVEL AGREEMENT</h2>
      
        <p align="justify"><span style="color: #000d25;"><span style="font-size: medium;"><span lang="en-US">This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and (“Customer”, "Client" or "You") for the provision of Textolic Services, as outlined below.</span></span></span></p>
        <p align="justify"><span style="color: #000d25;"><span style="font-size: medium;"><span lang="en-US">By using our Textolic services, the Customer agrees to the terms and conditions outlined in this Agreement. </span></span></span></p>
        
        <ol style="padding: 0px;">
           <li>
        <p align="justify"><span style="color: #000d25;"><span style="font-size: medium;"><b>Definition </b></span></span></p>
        </li>
        </ol>
        <p align="justify"><span style="color: #000000;">“<span style="font-size: medium;"><span lang="en-US"><i><b>Textolic service”</b></i></span></span></span><span style="color: #000000;"><span style="font-size: medium;"><span lang="en-US"> is a comprehensive communication solution that enhances customer engagement within Salesforce. This application directly integrates SMS, WhatsApp, and other messaging platforms into Salesforce, enabling businesses to manage communications efficiently.</span></span></span></p>
        <p align="justify">“<span style="font-size: medium;"><span lang="en-US"><i><b>Salesforce Platform”</b></i></span></span><span style="font-size: medium;"><span lang="en-US"> refers to the third-party platform on which the Company’s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</span></span></p>
        
        <ol style="padding: 0px;" start="2">
           <li>
        <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><b>Account Registration and Usage</b></span></span></p>
        </li>
        </ol>
        <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><span lang="en-US">2.1 Customers are responsible for maintaining the confidentiality of their account credentials.</span></span></span></p>
        <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><span lang="en-US">2.2 Customer agree to use the service in compliance with applicable laws and regulations.</span></span></span></p>
        
        <ol style="padding: 0px;" start="3">
           <li>
        <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><b>Message Limits and Delivery</b></span></span></p>
        </li>
        </ol>
        <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><b>3.1 </b></span></span><span style="color: #000000;"><span style="font-size: medium;">The service may have limits on the number of messages that can be sent or received, depending on the plan selected.</span></span></p>
        <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><span lang="en-US">3.2 Textolic makes no guarantees regarding the delivery of messages, as factors beyond our control (e.g., network issues, carrier limitations) can affect message delivery.</span></span></span></p>
        
        <ol style="padding: 0px;" start="4">
           <li>
        <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><b>Prohibited Use</b></span></span></p>
        </li>
        </ol>
        <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><span lang="en-US">The user shall be prohibited from sending unsolicited marketing messages, violating any applicable laws or third-party rights and interfering with or disrupting the services or networks connected to the service.</span></span></span></p>
      
      </div>
      <div id="tab4" class="tab-content"><h2>RINGLESS VOICEMAL SERVICE LEVEL AGREEMENT</h2>
      
        <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or</p>
<p>"Us") and ("Customer&rdquo;, Client or "You") for the provision of RVM Service, as outlined below.</p>
<p>By using our RVM service, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
<p>1. Definitions</p>
<p>&ldquo;RVM Services&rdquo; refers to the Recorded Voice Messaging service provided by 360 Degree Cloud, which allows for the delivery of pre-recorded voice messages to a list of recipients through automated systems, including but not limited to messaging campaigns, appointment reminders, notifications, and other customer communications.</p>
<p>&ldquo;Salesforce Platform&rdquo; refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
<p>2. Scope of Services</p>
<p>360 Degree Cloud shall provide the Customer with access to the Recorded Voice Messaging (RVM) services.</p>
<p>2.1 The RVM Services are designed to integrate with Salesforce CRM and other customer relationship management systems as required by the Customer. This integration allows for enhanced targeting, reporting, and management of campaigns within the Customer&rsquo;s existing workflow.</p>
<p>2.2 The ability to deliver pre-recorded voice messages to multiple recipients via automated systems. These messages may include appointment reminders, notifications, alerts, surveys, and other customer communications.</p>
<p>2.3 The ability to create, configure, and execute customizable voice messaging campaigns for specific purposes, including but not limited to marketing campaigns, reminders, or information dissemination.</p>
<p>2.4 The ability to personalize voice messages by incorporating recipient-specific data such as name, location, or other custom attributes. 3. Customer Responsibilities</p>
<p>3.1 The Customer agrees to comply with all applicable laws and regulations, including but not limited to the Telephone Consumer Protection Act (TCPA), the National Do Not Call Registry (NDNC), and any other local, state, and national regulations governing the use of</p>
<p>automated voice messaging systems.</p>
<p>3.2 The Customer is responsible for obtaining and maintaining proper consent from recipients prior to initiating any recorded or automated calls, as required by applicable regulations.</p>
<p>4. Prohibitions</p>
<p>4.1 The Customer agrees not to use the RVM Services for any unlawful, fraudulent, or malicious activity, including violating telecommunications laws, data protection laws, or the rights of third parties.</p>
<p>4.2 The customer shall not use the Services in a manner that could damage, disrupt, or interfere with the functionality or security of the Services, or the infrastructure or network used to provide the Services.</p>
<p>4.3 The customer agrees not to use the Services to deliver unsolicited or unauthorized communications (e.g., spam, robocalls, or telemarketing calls in violation of applicable laws).</p>



      </div>
      <div id="tab5" class="tab-content"><h2>CTI SERVICE LEVEL AGREEMENT</h2>
      
        <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and (&ldquo;Customer&rdquo;, "Client" or "You") for the provision of CTI Services, as outlined below.</p>
<p>By using our CTI services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
<p>1. Definition</p>
<p>Computer Telephony Integration (CTI): CTI is a technology that integrates telecommunication services with computer systems and software applications. It enables users to integrate their telephone systems with Salesforce, allowing them to manage calls and customer interactions directly from their Salesforce environment.</p>
<p>&ldquo;Salesforce Platform&rdquo; refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
<p>2. Service provided</p>
<p>The 360 Degree Cloud offers a CTI solution integrating telephony systems with customer relationship management (CRM) software. The Services include the Integration of telephone systems with CRM platforms, Automated call management features (e.g., call logging, screen pop-ups), Real-time reporting and analytics, Customizable call routing and features, and Ongoing maintenance and support.</p>
<p>SMS App CTI Credit Usage Terms</p>
<p>No Expiration &amp; Service Conditions: Purchased credits do not expire and may be used at your convenience. No refunds will be issued for unused credits. In the event of nonpayment, partial payment, or delayed payment, 360 Degree Cloud reserves the right to disconnect services and recover the outstanding amount without prior notice. Interest of 1% per month, compounded half-yearly, will be charged on delayed payments.</p>
<p>Dispute Resolution: You must notify 360 Degree Cloud in writing within 45 days of the billing date for any fee/rate dispute. After this period, the invoice will be deemed accepted. You must act in good faith and cooperate diligently with 360 Degree Cloud to resolve the issue. We will not charge late fees or suspend services for unpaid disputed fees unless you fail to cooperate, or the dispute is deemed unreasonable or not in good faith. It is the customer's responsibility to verify invoices before payment. Once invoice term of 45 days is expired, it cannot be disputed or adjusted against future payments.</p>
<p>Itemized Billing Reports: Requests for detailed usage reports beyond 60 days from the initial share date will not be entertained to preserve data integrity.</p>
<p>Usage Clarification: Refer to the usage summary shared via email for clarification.</p>
<p>Fees: You agree to pay the fees outlined in the appendix. If you use services not listed in the appendix, you will be charged at the applicable rates communicated via email from time to time.</p>
<p>Taxes &amp; Surcharges: You agree to pay all applicable taxes, communication surcharges (e.g., pass-through carrier fees), 10DLC charges, fines, and penalties incurred due to your use of our services. These will be listed as separate line items on your invoice for transparency.</p>
<p>Credit Deduction Policy:</p>
<p>1 call credit per call up to 60 seconds.</p>
<p>Special rates will be apply for service usage outside the specified country or service usage outside scope of non-provided rates.</p>
<p>Security &amp; Liability Disclaimer</p>
<p>Client&rsquo;s Responsibility for Security: You are solely responsible for securing your systems. The application is listed on Salesforce, and your data remains within your Salesforce environment. 360 Degree Cloud does not access or store your data.</p>
<p>No Liability for System Breaches: We are not responsible for any security breaches or associated costs/fraudulent activities in your systems.</p>
<p>No Security Training Provided: 360 Degree Cloud does not provide technical training for preventing breaches. It is your sole responsibility to implement and maintain your system&rsquo;s security.</p>
<p>Client Accountability: Per our contract, the Client is solely responsible for all use of the Services under their account, including securing their environment. This is a reasonable and enforceable clause.</p>
<p>By continuing to use our services, you agree to these Terms of Service, including your obligations regarding usage, payments, disputes, system security, and service conditions.</p>
      
      
      </div>
      <div id="tab6" class="tab-content"><h2>LOCAL TIMEZONE FINDER SERVICE LEVEL AGREEMENT</h2>
      
        <p>This Service Level Agreement ("SLA") is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer," "Client," or "You") for the provision of Local Timezone Finder service as outlined below.</p>
        <p>By using our Local Timezone Finder service, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
        <p>1. Definitions</p>
        <p>"Local Time Zone Finder Service" is a tool or software solution integrated in Salesforce, designed to assist businesses and organizations in optimizing their scheduling, communication, and outreach by identifying and aligning with the local time zones of their customers, clients, or team members.</p>
        <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
        <p>2. Scope of Services</p>
        <p>2.1 360 Degree Cloud agrees to provide the Local Timezone Finder Service, enabling businesses to optimize their scheduling, outreach, and communication efforts by leveraging time zone-based scheduling. This service aims to reduce meeting cancellations, enhance user engagement, and ensure that interactions occur during optimal times for all parties involved. The Service will automatically detect and adjust for the recipient's local time zone, improving the overall efficiency and success of communications.</p>
        <p>2.2 The service is designed to help businesses build a positive brand image by respecting and accommodating customers' non-working hours. By adhering to the time zone of each customer or client, businesses can create a more considerate and respectful customer experience. This will lead to improved customer relationships, greater customer satisfaction, and enhanced brand reputation.</p>
        <p>2.3 The service provides alignment of outreach activities, such as marketing campaigns, sales calls, and customer communications, with the recipient&rsquo;s local time, the Local Timezone Finder Service maximizes the effectiveness of these efforts. The Service helps businesses increase Return on Investment (ROI) and drive higher conversion rates by ensuring that all communications occur at times that are most likely to result in engagement. This time-sensitive approach increases the likelihood of success in business outreach efforts.</p>
        <p>3. Customer Responsibilities</p>
        <p>3.1 Customer agrees to provide accurate, complete, and up-to-date time zone information for the contacts you wish to schedule communications with.</p>
        <p>3.2 Customer shall not use the Service for unlawful purposes and shall use the Service in accordance with applicable local laws, regulations, and industry standards.</p>
      
      </div>
      <div id="tab7" class="tab-content"><h2>SECURITY OVERVIEW</h2>
        <p>This Security Overview (&ldquo;Security Overview&rdquo;) is incorporated into and made a part of the agreement between 360 degree and Customer covering Customer&rsquo;s use of the Services (as defined below), including any terms applicable to the processing of personal data set forth therein (collectively, &ldquo;Agreement&rdquo;). Any capitalized term used but not defined has the meaning provided in the Agreement.</p>
        <p>1. Definitions</p>
        <p>&ldquo;Customer Data&rdquo; means any data (a) provided by Customer, or any user of the Services, including via any products and services provided by Customer, to 360 Degree in connection with Customer&rsquo;s use of the Services or (b) generated for Customer&rsquo;s use as part of the Services.</p>
        <p>&ldquo;Segment Services&rdquo; means any services or application programming interfaces branded as &ldquo;Segment&rdquo;, &ldquo;360 Degree Segment&rdquo;, or &ldquo;360 Degree Engage&rdquo;.</p>
        <p>&ldquo;SendGrid Services&rdquo; means any services or application programming interfaces branded as &ldquo;SendGrid&rdquo; or &ldquo;360 Degree SendGrid&rdquo;.</p>
        <p>&ldquo;Services&rdquo; means, collectively, the 360 degree Services (as defined below), SendGrid Services, and Segment Services.</p>
        <p>&ldquo;360 DEGREE Services&rdquo; means any services or application programming interfaces branded as &ldquo;360 DEGREE&rdquo;.</p>
        <p>2. Purpose</p>
        <p>This Security Overview describes 360 DEGREE&rsquo;s security program, including 360 Degree&rsquo;s security certifications and self-attestations and technical and organizational security controls to protect in accordance with industry best practices. As such, 360 Degree reserves the right to update this Security Overview from time to time; provided, This Security Overview does not apply to any (a) Services that are identified as alpha, beta, not generally available, limited release, developer preview, or any similar Services offered by 360 DEGREE or (b) any services provided by telecommunications providers.</p>
        <p>3. People Security and Onboarding</p>
        <p>360 DEGREE (a) maintains comprehensive policies, procedures, and controls that are regularly updated to align with industry best practices and (b) makes such policies and procedures readily accessible to all 360 degree employees. All 360 degree employees are subject to the following minimum security measures:</p>
        <p>(i) Performance of a background check that is administered by a recognized third-party background check provider on all new 360 degree employees prior to hiring in accordance with applicable local laws, including education and employment verification and reference checks, and where permitted by local law and applicable to the job role, criminal, credit, and right-to-work verification;</p>
        <p>(ii) Execution of a confidentiality agreement;</p>
        <p>(iii) Annual completion of mandatory security and privacy training, with extended deadlines available for 360 degree employees on leaves of absence;</p>
        <p>(iv) Maintenance and continuous monitoring of an anonymous hotline for 360 degree employees to report any unethical behavior where anonymous reporting is legally permitted;</p>
        <p>(v) Raising awareness of emerging security threats through various mediums, including simulated security-related incidents (e.g. phishing campaigns); and</p>
        <p>(vi) Controlled and limited access of Customer Data strictly to authorized 360 degree employees only in accordance with Section 10.1 (Provisioning Access) and 360 degree&rsquo;s internal standard operating procedures governing such Customer Data&rsquo;s processing and protection.</p>
        <p>4. Physical Security</p>
        <p>360 degree maintains strong physical security controls at its offices, which are guided by a physical security policy that is regularly reviewed. 360 degree&rsquo;s physical security policy establishes baseline physical security controls necessary for preventing unauthorized access to 360 degree&rsquo;s offices and for the safeguarding of 360 degree&rsquo;s physical assets. 360 degree&rsquo;s physical security policy covers areas such as access controls, employee and contractor badge requirements, securing IT equipment, and after hours monitoring.</p>
        <p>5. Third Party Vendor Management</p>
          <p>360 DEGREE may use third party vendors to provide the Services. 360 degree has implemented a comprehensive vendor management program that applies the appropriate technical and organizational security controls that is proportional to the type of service the third-party vendor is providing and any associated security-related risks. Prospective third-party vendors are thoroughly vetted through a process that ensures they comply with, and will continue to comply with, 360 DEGREE&rsquo;s rigorous confidentiality, security, and privacy requirements for the duration of their relationship with 360 DEGREE. For the avoidance of doubt, telecommunication providers are not considered third-party vendors or sub-processors of 360 DEGREE. 360 Degree shall not be held liable for any security breaches or incidents occurring as a result of actions or failures on the part of third parties. Furthermore, 360 Degree&rsquo;s liability is limited to the services provided as a native-built application. The customer acknowledges that 360 Degree is solely responsible for the performance of its native application and disclaims responsibility for any security risks arising from third-party services or any external factors beyond the control of 360 Degree.</p>
        <p>6. Security Certifications and Attestations</p>
        <p>360 DEGREE holds the following security-related certifications and attestations:</p>
        <p>7. Access Controls</p>
        <p>7.1 Provisioning Access. 360 degree follows the principles of least privilege through a team-based access control mechanism when provisioning system access to minimize the risk of unauthorized access or any breach. 360 degree employees&rsquo; access to Customer Data must be approved before it is granted and is restricted based on if their job role or job responsibilities specifically require it. Access rights to the production environment of the Services that are not time-based are reviewed at least
        quarterly. An employee&rsquo;s or contractor&rsquo;s access to Customer Data is promptly removed upon termination of employment. In order to access the production environment of the Services, an authorized user must have a unique username and password and multi-factor authentication enabled. Before an authorized user is granted access to the production environment of the Services, access must be approved by management. Additionally, the authorized user is required to complete internal training for such access, including training on the proper use of the relevant systems that interface with or permit access to the production environment of the Services. 360 degree logs high risk actions and changes in the production environment of the Services. 360 degree leverages automation to identify any deviation from internal technical standards that could indicate anomalous and/or unauthorized activity to raise an alert within minutes of a configuration change.</p>
        <p>7.2 Password Controls. At a minimum, 360 degree's password management policy for 360 degree employees follows the guidance and requires the use of longer character lengths, special characters, and multi-factor authentication. Additionally, when a customer logs into its account, 360 degree hashes the credentials of the user before it is stored. A customer must also require its users to add another layer of security to their account by using two-factor authentication (2FA).</p>
        <p>8. Vulnerability Management</p>
          <p> 360 DEGREE maintains controls and policies to mitigate the risk of security vulnerabilities in a measurable time frame that balances risk and the business and operational requirements. 360 DEGREE uses third-party tooling to conduct vulnerability scans regularly to assess vulnerabilities in 360 DEGREE&rsquo;s hosting environment and corporate systems. Critical software patches are evaluated, tested, and applied proactively. Operating system patches are applied through the regeneration of a base virtual-machine image and deployed to all nodes in the 360 DEGREE cluster over a predefined schedule. For high-risk patches, 360 DEGREE will deploy directly to existing nodes through internally developed orchestration tools.</p>
        <p>9. Penetration Testing</p>
          <p> 360 DEGREE performs penetration tests and engages independent, recognized third parties to conduct application-level penetration tests. Security threats and vulnerabilities that are detected are prioritized, triaged, and remediated promptly. Additionally, 360 DEGREE maintains a Bug Bounty Program through Bug Crowd, which allows independent security researchers to report security threats and vulnerabilities on an ongoing basis.</p>
        <p>10. Security Incident Management</p>
        <p>10.1 Prevention Measures. 360 degree maintains security incident management policies and procedures in accordance with NIST SP 800-61. 360 DEGREE&rsquo;s Security Incident Response Team (T-SIRT) assesses relevant security threats and vulnerabilities and establishes appropriate remediation and mitigation actions. 360 DEGREE retains security logs for one hundred and eighty (180) days. Access to these security logs is limited to T-SIRT. 360 DEGREE utilizes third-party tools to detect, mitigate, and prevent Distributed Denial of Service (DDoS) attacks.</p>
        <p>10.2 Incident Response. 360 DEGREE will promptly investigate a Security Incident upon discovery (as defined in the Agreement). To the extent permitted by applicable law or regulation, 360 DEGREE will notify Customer of a Security Incident in
        accordance with the Agreement. Security Incident notifications will be provided to Customer via email to the email address designated by Customer in its account. 360 DEGREE has a defined set of policies, procedures, standards, and tooling that guide its subsequent responses, with adherence to applicable law or regulation. This includes customer notifications where mandated, coordination with law enforcement, and declarations to applicable privacy and other regulatory bodies where appropriate.</p>
        <p>11. Resilience and Service Continuity</p>
        <p>11.1 Resilience. 360 Degree utilizes multiple geographically diverse regions within its infrastructure providers and has configured multiple fault-independent availability zones within each of those regions to ensure that a failure in any single data center does not affect the availability of the Services. This allows 360 Degree to detect and route around issues experienced by hosts or even whole data centers in real time and employ orchestration tooling that is able to regenerate hosts, building them from the latest backup.</p>
        <p>11.2 Service Continuity. 360 DEGREE leverages specialized tools available within the hosting infrastructure of the Services to monitor server performance, data, and traffic load capacity within each availability zone and colocation data center. If suboptimal server performance or overloaded capacity is detected on a server within an availability zone or colocation data center, these specialized tools increase the capacity or shift traffic to relieve any suboptimal server performance or capacity overload. 360 DEGREE is also immediately notified in the event of any suboptimal server performance or overloaded capacity.</p>
      </div>
      <div id="tab8" class="tab-content"><h2>EMAIL SYNC SERVICE LEVEL AGREEMENT</h2>
      
        <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer&rdquo;, Client or "You") for the provision of Email Sync Services, as outlined below.</p>
        <p>By using our Email Sync services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
        <p>1. Definition</p>
        <p>&ldquo;Email Sync&rdquo; is a service provided by 360 Degree that integrates with platforms like Salesforce, allowing for automatic synchronization of emails, tasks, and calendars, creating a comprehensive view of customer interactions.</p>
        <p>&ldquo;Salesforce Platform&rdquo; refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
        <p>2. Account Registration and Security</p>
        <p>To use the Email Sync Service, the Customer may need to register for an account with 360 Degree. Customers are responsible for maintaining the confidentiality of their account credentials (such as email login details) and agree to notify us immediately if they suspect any unauthorized use of their account.</p>
        <p>3. Customer&rsquo;s Responsibilities</p>
        <p>3.1 Customer agrees to use the services in a manner provided by the applicable law and as per the terms of the service.</p>
        <p>3.2 Customer agrees not to use the Service for illegal, fraudulent, or harmful purposes, including spamming or sending unsolicited emails.</p>
        <p>4. Third Party</p>
        <p>The Email Sync Service may interact with third-party email providers (e.g., Gmail, Outlook). By using the Service, you acknowledge and agree to the third-party terms of service for these providers. 360 Degree is not responsible for the functionality, availability, or security of third-party services. Customer must comply with all third-party terms of service related to your email account(s).</p>
        <p>5. Maintenance</p>
        <p>While 360 degree strives to provide uninterrupted access to the Email Sync Service, we cannot guarantee that the Service will always be available without interruption or errors. The Service may be temporarily unavailable due to maintenance, technical issues, or other operational reasons. 360 degree will notify you in advance whenever possible.</p>
        <p>360 Degree is not responsible for any disruptions in service, loss of data, or any other issues caused by technical problems or outages beyond our control.</p>
      </div>
      <div id="tab9" class="tab-content"><h2>EMAIL UNSUBSCRIBE/OPT-OUT SERVICE LEVEL AGREEMENT</h2>
      
        <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer&rdquo;, Client or "You") for the provision of Email Unsubscribe/ Opt Out service, as outlined below.</p>
        <p>By using our Email Unsubscribe/ Opt Out service, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
        <p>1. Definition</p>
        <p>"Email Unsubscribe/Opt-Out Service" refers to the integrated solution within Salesforce that enables efficient management, tracking, and processing of unsubscribe or opt-out requests from recipients of email communications, ensuring compliance with relevant laws and regulations such as CAN-SPAM Act, GDPR, and other email marketing standards.</p>
        <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
        <p>"Opt-Out" refers to the action taken by a recipient to unsubscribe or stop receiving further communications from an organization, often through clicking a link or button in an email campaign.</p>
        <p>"Unsubscribe Page" refers to a page provided by 360 Degree Cloud to customize the recipient's unsubscribe experience, allowing users to opt-out of receiving further communications, with branding and customization options available for the customer.</p>
        <p>"Analytics Dashboard" is a feature of the Service that provides detailed metrics and insights into the unsubscribe process, including the reasons for unsubscribing, trends, and other analytics to help improve future campaigns.</p>
        <p>"Service Downtime" refers to a period when the Service is unavailable due to technical issues, maintenance, or other reasons.</p>
        <p>2. Scope of Service</p>
        <p>2.1 The Service provides an easy, single-click option for recipients to opt-out from email communications.</p>
        <p>2.2 Customers can personalize the unsubscribe page with your brand's logo, colors, and design elements, ensuring a seamless user experience.</p>
        <p>2.3 The Service allows the customer to capture reasons why recipients opt out of your email campaigns. This data can be used to improve content or identify areas of low value.</p>
        <p>2.4 The Service includes an analytical dashboard where the Customer can monitor unsubscribe rates, track reasons for unsubscribes, and gain insights to refine future email campaigns.</p>
        <p>3. Customer Responsibilities</p>
        <p>3.1 Customer shall be responsible for ensuring that all information provided in connection with the Service (including email lists and preferences) is accurate, current, and complete.</p>
        <p>3.2 Customers agree to use the Service in compliance with all applicable laws, including data protection and privacy laws, and ensure that their email campaigns respect the rights of recipients to opt-out and manage their email preferences.</p>
        <p>3.3 Customer will use the Service only to process legitimate opt-out requests and will not use the Service for any illegal or unethical purposes, including sending unsolicited marketing communications.</p>
        <p>4. Customization and Branding</p>
        <p>4.1 You can customize the unsubscribe page to reflect your organization&rsquo;s branding, ensuring that the design aligns with your company's aesthetics and enhances the user experience.</p>
        <p>4.2 You agree that any custom branding will comply with our guidelines and will not violate any third-party intellectual property rights.</p>
        <p>5. Service Liability</p>
        <p>5.1 360 Degree Cloud agrees to make reasonable efforts to ensure that opt-out requests are processed accurately.</p>
        <p>5.2 We strive to maintain the Service&rsquo;s availability, but we cannot guarantee uninterrupted access. In the event of downtime or issues with the Service, we will work promptly to resolve the matter.</p>
      
      
      
      </div>
      <div id="tab10" class="tab-content"><h2>WHATSSYNC SERVICE LEVEL AGREEMENT</h2>
      
       <style>
  .sla-text{
    color:#000;
    font-family: Arial, serif;
    font-size: small;
    line-height: 1.5;
  }
  .sla-text h3, .sla-text h4{ margin: 14px 0 8px; }
  .sla-text p{ margin: 0 0 10px; }
  .sla-text ul{ margin: 0 0 10px 18px; }
</style>

<div class="sla-text" lang="en-GB">
  <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer”, Client or "You") for the provision of WhatsApp Personal Sync Services, as outlined below.</p>

  <p>By using our WhatsApp Personal Sync services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>

  <p>The Terms of Use (“Terms”) set out herein shall apply to the WhatsApp services (“Services”) being procured by the Customer under an order form/ purchase order (“Order Form”) executed between the Customer and 360 Degree. It is understood and acknowledged that the Services are a solution owned and controlled by Meta Platforms Ireland, formerly known as Facebook Ireland Limited (“Meta Platforms”). It is further understood that the Customer has subscribed to the Services, the pricing, payment terms and duration of such service subscription as detailed in the Customer’s Order Form.</p>

  <h3>1. Definition</h3>

  <p><strong>“Customer”</strong> shall mean the entity or person availing the services under the agreement.</p>

  <p><strong>“WhatsApp Personal Sync Service”</strong> WhatsApp Personal Sync is a technology solution that enables users to synchronize and integrate conversations, media files, and data from their standard individual WhatsApp accounts with external systems like CRM platforms (particularly Salesforce) or across multiple devices.</p>

  <p>Unlike WhatsApp Business API solutions, WhatsApp Personal Sync works with regular personal WhatsApp accounts and allows Customers to:</p>

  <p>● Transfer selected WhatsApp messages and attachments to business systems</p>
  <p>● Connect client conversations happening in personal WhatsApp to formal CRM records</p>
  <p>● Create searchable archives of important customer interactions</p>
  <p>● Share relevant client communications with team members</p>
  <p>● Maintain privacy by selectively choosing which conversations to sync</p>
  <p>● Access WhatsApp conversation history across multiple devices</p>
  <p>● Enable real-time updates between WhatsApp and connected systems</p>
<p>Do not send or trigger any test messages after connecting the WhatsApp number via WhatSync. This includes:
      Internal validation messages such as “Test”, “Hi”, or “Hello”
      Messages triggered from workflows, automations, or system actions</p>
  <p>WhatsApp may identify such behaviour as system-generated or abnormal, which can lead to number restriction or permanent blocking.</p>

  <p><strong>Allowed:</strong> Only genuine, customer-initiated, or legitimate business conversations.</p>

  <p><strong>“Downtime”</strong> is the period when an application is unavailable or experiences disruptions, potentially due to maintenance, technical issues, or outages, impacting user access and potentially causing financial and reputational damage.</p>

  <p><strong>“Uptime”</strong> is the percentage of time a system, application, or service is operational and available to users.</p>

  <p><strong>“Third Party”</strong> refers to the service provider or platform that offers services or infrastructure related to the provisions of WhatsApp messaging i.e., META and other communication services.</p>

  <h3>2. Scope of Service</h3>

  <p>This SLA covers the following services provided to the Customer:</p>

  <p>2.1 Configuration of WhatsApp accounts within the Salesforce environment.</p>

  <p>2.2 The 360 Degree will charge a one-time setup fee for the integration services. The exact amount of the setup fee will be determined based on the complexity and specific requirements of the Client, as agreed upon by both parties in writing before the commencement of the services.</p>

  <p>2.3 Any services requested by the Client beyond the initial setup and integration will be considered additional services. These services will be charged separately, with fees and payment terms to be mutually agreed upon in writing by both parties on a case-by-case basis.</p>

  <p>2.4 The 360 degree’s responsibilities do not include support or maintenance of the WhatsApp and Meta services post-integration unless separately agreed upon. The Client will be responsible for any charges levied by WhatsApp and Meta for their services.</p>

  <h3>3. Service Availability</h3>

  <p>3.1 Service Uptime Guarantee: We commit to providing 99% uptime for the WhatsApp Business services, subject to the third-party services. It shall also exclude planned maintenance.</p>

  <p>3.2 Scheduled Maintenance: Any scheduled maintenance that might affect the availability of services will be communicated to the Client at least 48 hours in advance.</p>

  <p>3.3 Downtime: In case of service downtime is caused by system failure or network issues due to Meta, 360 Degree shall have no liability for recovery.</p>

  <p>3.4 Timely Payment: The Customer shall make timely payments for the Services as per the Order Form, failing which, 360 degree reserves the right to suspend the usage of the Services.</p>

  <p>3.5 Revised Price: Subject to any fluctuations or changes in the pricing structure of Meta Platforms, 360 reserves the right to modify the agreed-upon pricing. In the event of such adjustments, 360 shall provide prior written notice to the customer. Such changes will be effective as per the terms outlined in the notice.</p>

  <h3>4. Customer Responsibilities</h3>

  <p>4.1 Customer shall always be responsible for the creation of the content and creatives of the WhatsApp messages it proposes to send as part of the Services. The customer will always be liable for the consequences arising from the Content.</p>

  <p>4.2 Customer shall ensure that the Content is not infringing, libellous, defamatory, obscene, pornographic, abusive, harmful, threatening, harassing, stalking, embarrassing tortuous, offensive, hateful, or racially, ethnically or otherwise objectionable, misleading or violating any law or rules laid down by statute or any right of any individual or third party.</p>

  <p>4.3 Customer shall obtain prior permission from its end recipients and keep a record of their valid opt-in proofs before starting the process of sending the WhatsApp messages. 360 Degree shall be entitled to reimbursement of all costs and expenses incurred by it to defend any claims or address any complaints made by a recipient, or by Meta Platforms, or any other party or entity, for sending unsolicited WhatsApp messages.</p>

  <p>4.4 The Customer will not (a) resell the WhatsApp solution or allow third parties to integrate with, access or use the WhatsApp solution, unless otherwise permitted by 360 degree in writing or (b) use any of the Meta Platforms or WhatsApp names and trademarks in any way (unless permitted under another agreement between the User and Meta Platforms) or (c) transfer any of its rights or obligations under these Terms to anyone else without User and Meta Platforms’ consent.</p>

  <p>4.5 WhatSync is Strictly: - No Promotional or Marketing Messages</p>

  <p>WhatSync must not be used for: Promotions, Campaigns, Offers, Discounts, Marketing or bulk outreach. Sending promotional or marketing content through WhatSync is a major policy violation and may result in immediate WhatsApp number suspension.</p>

  <p>Examples of NOT allowed messages: “Check out our latest offer”, “Limited-time discount available”, “Special promotion just for you”</p>

  <p><strong>Allowed:</strong> Transactional, support-based, or customer-initiated communication only.</p>

  <p>4.6 The Customer Avoid Messaging Unknown or Unverified Contacts</p>

  <p>Avoid initiating conversations with unknown or unverified contacts.</p>

  <p>If messaging an unknown contact is unavoidable: Ensure there is a valid business context, keep the message purely informational or support-related, do not include any promotional or sales-driven content.</p>

  <p>Sending unsolicited messages is one of the primary reasons customers block WhatsApp numbers, which can directly impact the connected account.</p>

  <p>4.7 No Automation or Bulk Messaging: - WhatSync should not be connected to automated workflows that trigger messages without manual control.</p>

  <p>Bulk messaging or repetitive patterns may be detected as spam by WhatsApp.</p>

  <p>Recommendation: Use WhatSync strictly for one-to-one, human-driven conversations. High message frequency, repetitive copy-paste replies across multiple chats, or identical responses sent to multiple users in a short time span can be marked as spam, recommended to avoid.</p>

  <h3>5. WhatsSync Compliance</h3>

  <p>5.1 Our Service is not affiliated with, authorized by, endorsed by, or in any way officially connected with WhatsApp Inc. or any of its subsidiaries or affiliates.</p>

  <p>5.2 The use of our Service must comply with WhatsApp's Terms of Service.</p>

  <p>5.3 We may modify our Service at any time to maintain compliance with WhatsApp's policies or technical requirements.</p>

  <p>5.4 If an end customer blocks the WhatsApp number or reports the conversation, WhatsApp may: restrict the number, temporarily suspend access, permanently ban the number.</p>

  <p>These actions are enforced by WhatsApp and are outside our control. Once blocked, recovery may not be possible.</p>

  <p>We do not guarantee the availability, continuity, or recoverability of Whatsync or any connected WhatsApp number.</p>

  <p>In the event of any restriction, suspension, or ban imposed by WhatsApp or Meta, we are unable to intervene or raise appeals on the customer’s behalf.</p>

  <p>Any actions taken by WhatsApp or Meta are outside our control and responsibility.</p>

  <p><strong>Compliance Responsibility</strong></p>

  <p>Adherence to these guidelines is the sole responsibility of the end user using the WhatSync feature.</p>

  <p>Any violation may result in: WhatSync functionality being disabled, WhatsApp number blocking or suspension, service disruption without recovery options.</p>

  <h4 class="western" align="left"><strong>Unavoidable Legal Stuff</strong></h4>

  <p align="left">
    THE SERVICE AND ANY OTHER SERVICE AND CONTENT INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SERVICE ARE PROVIDED TO YOU ON AN AS IS OR AS AVAILABLE BASIS WITHOUT ANY REPRESENTATIONS OR WARRANTIES OF ANY KIND. WE DISCLAIM ANY AND ALL WARRANTIES AND REPRESENTATIONS (EXPRESS OR IMPLIED, ORAL OR WRITTEN) WITH RESPECT TO THE SERVICE AND CONTENT INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SERVICE WHETHER ALLEGED TO ARISE BY OPERATION OF LAW, BY REASON OF CUSTOM OR USAGE IN THE TRADE, BY COURSE OF DEALING OR OTHERWISE. IN NO EVENT WILL 360 Degree Cloud/SMS APP BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY SPECIAL, INDIRECT, INCIDENTAL, EXEMPLARY OR CONSEQUENTIAL DAMAGES OF ANY KIND ARISING OUT OF OR IN CONNECTION WITH THE SERVICE OR ANY OTHER SERVICE AND/OR CONTENT INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SERVICE, REGARDLESS OF THE FORM OF ACTION, WHETHER IN CONTRACT, TORT, STRICT LIABILITY OR OTHERWISE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES OR ARE AWARE OF THE POSSIBILITY OF SUCH DAMAGES. OUR TOTAL LIABILITY FOR ALL CAUSES OF ACTION AND UNDER ALL THEORIES OF LIABILITY WILL BE LIMITED TO THE AMOUNT YOU PAID TO 360 Degree Cloud. THIS SECTION WILL BE GIVEN FULL EFFECT EVEN IF ANY REMEDY SPECIFIED IN THIS AGREEMENT IS DEEMED TO HAVE FAILED OF ITS ESSENTIAL PURPOSE. You agree to defend, indemnify and hold us harmless from and against any and all costs, damages, liabilities, and expenses (including attorneys' fees, costs, penalties, interest and disbursements) we incur in relation to, arising from, or for the purpose of avoiding, any claim or demand from a third party relating to your use of the Service or the use of the Service by any person using your account, including any claim that your use of the Service violates any applicable law or regulation, or the rights of any third party, and/or your violation of these Terms.
  </p>
</div>

      
      </div>
      <div id="tab11" class="tab-content"><h2>360 DEGREE NPO SERVICE LEVEL AGREEMENT</h2>
      
        <p>This Service Level Agreement (SLA) is made between 360 Degree ("Provider," "We," or</p>
        <p>"Us") and ("Customer&rdquo;, Client or "You") for the provision of NPO Service, as outlined below.</p>
        <p>By using our NPO service, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
        <p>1. Definitions</p>
        <p>&ldquo;NPO&rdquo; is a tool and solution tailored to help organizations to manage their missions more effectively, including managing donors, volunteers, campaigns, and fundraising activities. Through Salesforce Nonprofit Cloud, these organizations can centralize their data, automate processes, and build strong relationships with supporters to increase their impact.</p>
        <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
        <p>2. Scope of Services</p>
        <p>2.1 The Non-Profit Success Package offers comprehensive solutions to manage donor relations, automate processes, streamline fundraising campaigns, and centralize data.</p>
        <p>2.2 The service includes tailored payment systems integrated into Salesforce to facilitate donations, event payments, and fundraising efforts.</p>
        <p>2.3 It helps in automated workflows, trigger-based emails, flows, and scheduled processes designed to automate personalised donor communication, engagement, and campaign targeting.</p>
        <p>2.4 360 NPO service provides custom configurations of Salesforce Sales Cloud to optimize donor and volunteer management, including custom components and data centralization.</p>
        <p>3. Customer Responsibilities</p>
        <p>3.1 Customer shall provide accurate and timely information to ensure proper integration and automation of your systems, including donor data and fundraising event information.</p>
        <p>3.2 Customer shall ensure all activities related to payment processing, donor information, and fundraising comply with applicable laws and regulations, including data privacy laws.</p>
        <p>3.3 Customer shall abide by all guidelines provided by 360 degree for the use of custom Salesforce components and integrations, including training and technical support as needed.</p>
        <p>4. Service Availability</p>
        <p>360 Degree Cloud will make efforts to provide maximum service uptime, but there are certain limitations. These limitations could include factors such as network capacity or events beyond their control (e.g., internet failures, power outages, third-party service disruptions)</p>
        <p>but not limited to external factors outlined in the terms on 360 degree website, 360 Degree Cloud will use commercially reasonable efforts to ensure the 360 NPO Service meets the Target Availability, which ensures the maximum uptime of the Service, excluding the exclusions defined below.</p>
        <p>5. Exclusions</p>
        <p>The Target Availability does not apply during periods of unavailability caused by the following reasons</p>
        <p>5.1 Any unavailability resulting from the Customer&rsquo;s use of the 360 NPO Service in a manner not authorized by the terms.</p>
        <p>5.2 General internet problems, force majeure events, or any factors outside the reasonable control of 360 Degree Cloud, including but not limited to denial of service attacks or third-party service outages.</p>
        <p>5.3 Issues related to the Customer&rsquo;s equipment, software, network connections, utilities, or other infrastructure.</p>
        <p>5.4 Scheduled maintenance or emergency maintenance, whether planned or unplanned.</p>
        <p>5.5 This Agreement does not apply to any version of the 360 NPO Service that is no longer available or supported.</p>
        <p>6. Scheduled Maintenance</p>
        <p>6.1 For all scheduled maintenance intended to achieve Target Availability, 360 Degree Cloud will use commercially reasonable efforts to notify the Customer at least five (5) business days prior to beginning such maintenance via email.</p>
        <p>6.2 Scheduled maintenance will be conducted, to the extent practicable, during weekend hours to minimize disruption.</p>
        <p>6.3 In the event of unavailability due to scheduled or unscheduled maintenance, 360 Degree Cloud will make reasonable efforts to minimize disruptions, inaccessibility, or inoperability of the 360 NPO Service, and will ensure the service is restored as promptly as possible.</p>
        <p>7. Updates</p>
        <p>360 degree may update this 360 degree SLA from time to time. The then-current version of this 360 degree SLA is available at&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</p>
      
      </div>
      <div id="tab12" class="tab-content"><h2>HIGHLIGHTER</h2>
        
        <p>This Service Level Agreement ("SLA") is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer," "Client," or "You") for the provision of Highlighter services, as outlined below.</p>
        <p>By using our Highlighter services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
        <p>1. Definitions</p>
        <p>"360 Highlighter Service" refers to a specialized Salesforce-integrated solution that enables highlighting, annotation, and tagging of key information within Salesforce records, thereby enhancing visibility, efficiency, and usability of critical data.</p>
        <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
        <p>2. Scope of Service</p>
        <p>2.1 360 Degree Cloud agrees to provide the Customer with access to the 360 Highlighter Service, designed to assist the Customer in enhancing visibility and managing critical information within Salesforce records through the use of highlighting, annotations, and tagging. These annotations can be customized based on predefined or customer-configured rules.</p>
        <p>2.2 The Service provides real-time highlighting and annotations, enabling the Customer to view and interact with changes as they occur within the Salesforce system.</p>
        <p>3. Service Availability</p>
        <p>360 Degree Cloud will make efforts to provide maximum service uptime, there are certain limitations. These limitations could include factors such as network capacity or events beyond their control (e.g., internet failures, power outages, third-party service disruptions) but not limited to external factors outlined in the terms on 360 degree website, 360 Degree Cloud will use commercially reasonable efforts to ensure the 360 Highlighter Service meets the Target Availability, which ensures the maximum uptime of the Service, excluding the exclusions defined below.</p>
        <p>4. Exclusions</p>
        <p>The Target Availability does not apply during periods of unavailability caused by the following reasons:</p>
        <p>4.1 Any unavailability resulting from the Customer&rsquo;s use of the 360 Highlighter Service in a manner not authorized by the terms.</p>
        <p>4.2 General internet problems, force majeure events, or any factors outside the reasonable control of 360 Degree Cloud, including but not limited to denial of service attacks or third-party service outages.</p>
        <p>4.3 Issues related to the Customer&rsquo;s equipment, software, network connections, utilities, or other infrastructure.</p>
        <p>4.4 Scheduled maintenance or emergency maintenance, whether planned or unplanned.</p>
        <p>4.5 This Agreement does not apply to any version of the 360 Highlighter Service that is no longer available or supported.</p>
        <p>5. Customer Responsibilities</p>
        <p>5.1 The Customer understands and agrees that any annotations, highlights, or tags applied using this Service are permanent actions and may not be reversible.</p>
        <p>5.2 The Customer is responsible for ensuring the data uploaded to or integrated with the 360 Highlighter Service is accurate, complete, and legally authorized for use.</p>
        <p>5.3 The Customer shall use the Service in compliance with all applicable laws, including but not limited to data privacy laws, personal data protection regulations, and any contractual obligations related to data protection.</p>
        <p>6. Scheduled Maintenance</p>
        <p>6.1 For all scheduled maintenance intended to achieve Target Availability, 360 Degree Cloud will use commercially reasonable efforts to notify the Customer at least five (5) business days prior to beginning such maintenance via email.</p>
        <p>6.2 Scheduled maintenance will be conducted, to the extent practicable, during weekend hours to minimize disruption.</p>
        <p>6.3 In the event of unavailability due to scheduled or unscheduled maintenance, 360 Degree Cloud will make reasonable efforts to minimize disruptions, inaccessibility, or inoperability of the 360 Highlighter Service, and will ensure the service is restored as promptly as possible.</p>
      
      
      
      </div>


      <div id="tab13" class="tab-content"><h2>SMS SERVICE LEVEL AGREEMENT</h2> 
      
        <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and (&ldquo;Customer&rdquo;, "Client" or "You") for the provision of SMS Services, as outlined below.</p>
        <p>By using our SMS services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
        <p>1. Definition - The following defined terms apply to this service level agreement for the SMS services.</p>
        <p>&ldquo;SMS Messaging Service&rdquo; means the service for transforming, formatting and delivering an SMS Message from the Gateway to the relevant mobile GSM network.</p>
        <p>&ldquo;Opt-out&rdquo; means the information on whether the receiver has opted out of all the Communications from the Sender ID.</p>
        <p>&ldquo;SMS Content&rdquo; means the message content of SMS.</p>
        <p>&ldquo;SMS Aggregators&rdquo; means the agents that deliver messages to subscriber handsets through the operator.</p>
        <p>&ldquo;Credits&rdquo; means the currency the customer needs to purchase to send messages.</p>
        <p>2. SMS Services</p>
        <p>2.1 SMS service enables integration with (CRM) data and enables users to send messages from the CRM to the user&rsquo;s contacts, leads and accounts and other object records.</p>
        <p>2.2 Message transmission requests will proceed as soon as reasonably possible. 360 Degree Cloud shall make all reasonable endeavours to ensure uninterrupted and continued use of the SMS Services, however, the delivery of messages is largely dependent on the effective functioning of Network Operators&rsquo; and Platform Operators&rsquo; communications networks, network coverage and the message recipient&rsquo;s mobile handset and operating system etc.</p>
        <p>2.3 360 Degree Cloud does not and cannot guarantee the availability of any Service, the delivery of any messages or the compatibility between any message or content format and any particular mobile handsets or mobile operating systems, etc.</p>
        <p>3. Payment and Usage of Credit Terms</p>
        <p>3.1 Credit Validity &amp; Usage</p>
        <p>Customer agrees that purchased credits do not expire and may be used at the Customer&rsquo;s convenience. All purchases shall be final, and no refunds will be issued for unused credits.</p>
        <p>3.2 Late Payment Charges</p>
        <p>The Customer agrees that any delayed payments shall accrue interest at the rate of one per cent (1%) per month, compounded half-yearly, from the due date until the outstanding balance is paid in full.</p>
        <p>Any dispute relating to billing amounts or applicable rates must be communicated to 360 Degree Cloud in writing within forty-five (45) days from the date of the invoice. Invoices not disputed within this period shall be deemed accurate, accepted in full, and no longer subject to adjustment, setoff, or challenge.</p>
        <p>During the pendency of a good faith billing dispute, 360 Degree Cloud shall not impose late payment charges or suspend Services with respect to the disputed portion of the invoice, provided that the Customer acts reasonably, promptly, and in good faith to resolve the matter. Failure by the Customer to cooperate in the resolution process, or the assertion of a dispute that is determined by 360 Degree Cloud in its reasonable discretion to be frivolous, unreasonable, or not made in good faith, shall entitle 360 Degree Cloud to impose applicable late payment charges and to suspend or terminate the affected Services.</p>
        <p>It shall be the sole responsibility of the Customer to verify and confirm the accuracy of all invoice details prior to making payment. Requests for itemised billing data or detailed usage reports must be submitted within sixty (60) days from the date such data or reports were originally provided. 360 Degree Cloud shall have no obligation to provide historical billing or usage data beyond this retention period, and requests submitted outside this timeframe shall not be entertained.</p>
        <p>SMS App Text Credit Usage Terms</p>
        <p>No Expiration &amp; Service Conditions: Purchased credits do not expire and may be used at your convenience. No refunds will be issued for unused credits. In the event of nonpayment, partial payment, or delayed payment, 360 Degree Cloud reserves the right to disconnect services and recover the outstanding amount without prior notice. Interest of 1% per month, compounded half-yearly, will be charged on delayed payments.</p>
        <p>Dispute Resolution: You must notify 360 Degree Cloud in writing within 45 days of the billing date for any fee/rate dispute. After this period, the invoice will be deemed accepted. You must act in good faith and cooperate diligently with 360 Degree Cloud to resolve the issue. We will not charge late fees or suspend services for unpaid disputed fees unless you fail to cooperate, or the dispute is deemed unreasonable or not in good faith. It is the customer's responsibility to verify invoices before payment. Once invoice term of 45 days is expired, it cannot be disputed or adjusted against future payments.</p>
        <p>Itemized Billing Reports: Requests for detailed usage reports beyond 60 days from the initial share date will not be entertained to preserve data integrity.</p>
        <p>Usage Clarification: Refer to the usage summary shared via email for clarification.</p>
        <p>Fees: You agree to pay the fees outlined in the appendix. If you use services not listed in the appendix, you will be charged at the applicable rates communicated via email from time to time.</p>
        <p><strong>Taxes & Surcharges:</strong>You agree to pay all applicable taxes, communication surcharges (e.g., pass-through carrier fees), 10DLC charges, fines, and penalties incurred due to your use of our services. These will be listed as separate line items on your invoice for transparency.</p>

<p>360 Degree Cloud shall levy a <strong>10% administrative markup on all carrier charges</strong> as an admin fee for reporting and operational support. This fee is <strong>included within the billed carrier charges,</strong> and by availing the Services, the Customer agrees to pay the same without dispute.</p>
        <p>Credit Deduction Policy:</p>
        <p>1 SMS credit per SMS up to 160 English characters (1 segment).</p>
        <p>1 call credit per call up to 60 seconds.</p>
        <p>Special rates will be apply for service usage outside the specified country or service usage outside scope of non-provided rates.</p>
        <p>Unicode (non-English) messages: 70 characters per credit (per segment).</p>
        <p>Messages over 160 characters are treated as long messages, with 1 credit deducted for every 153 characters.</p>
        <p>Security &amp; Liability Disclaimer</p>
        <p>Client&rsquo;s Responsibility for Security: You are solely responsible for securing your systems. The application is listed on Salesforce, and your data remains within your Salesforce environment. 360 Degree Cloud does not access or store your data.</p>
        <p>No Liability for System Breaches: We are not responsible for any security breaches or associated costs/fraudulent activities in your systems.</p>
        <p>No Security Training Provided: 360 Degree Cloud does not provide technical training for preventing breaches. It is your sole responsibility to implement and maintain your system&rsquo;s security.</p>
        <p>Client Accountability: Per our contract, the Client is solely responsible for all use of the Services under their account, including securing their environment. This is a reasonable and enforceable clause.</p>
        <p>By continuing to use our services, you agree to these Terms of Service, including your obligations regarding usage, payments, disputes, system security, and service conditions.</p>
        <p>     
      </div>
      <div id="tab14" class="tab-content"><h2>LINE SERVICE LEVEL AGREEMENT</h2>
      
        <p>This Service Level Agreement ("SLA") is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer," "Client," or "You") for the provision of 360 Line Japan services, as outlined below.</p>
        <p>By using our 360 Line Japan services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
        <p>1. Definitions:</p>
        <p>"360 Line Japan Service" refers to a comprehensive cloud-based solution enabling businesses to integrate and manage their LINE communications efficiently within the Salesforce environment. This service facilitates seamless customer engagement through LINE messaging, specifically designed for the Japanese market.</p>
        <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
        <p>2. Scope of Services</p>
        <p>2.1 360 degree will integrate the Salesforce Application with the Customer&rsquo;s Salesforce instance, enabling seamless communication with customers through the LINE platform.</p>
        <p>2.2 360 degree shall customise the Salesforce Application to meet the specific business needs of the Customer, including branding, messaging, and automated workflows.</p>
        <p>2.3 360 degree shall provide ongoing technical support for the Salesforce LINE Native Application, including troubleshooting, upgrades, and enhancements as part of the service package.</p>
        <p>2.4 360 Degree will provide training materials and sessions to ensure the Customer&rsquo;s team is proficient in using the Salesforce Application effectively.</p>
        <p>2.5 360 Degree will offer consultation services for strategy and optimization of customer engagement and communication, with a focus on the Japanese market.</p>
        <p>2. Availability and Reliability</p>
        <p>Subject to the concurrent throughput limits, including but not limited to external factors as outlined in the 360 Degree LINE Japan Documentation, 360 Degree Cloud will use commercially reasonable efforts to meet the Target Availability for the 360 Degree LINE Japan Service.</p>
        <p>3. Exclusions</p>
        <p>The Target Availability excludes any unavailability of the 360 Degree LINE Japan Service for the following reasons:</p>
        <p>1. Customer's use of the 360 Degree LINE Japan Service in a manner not authorized in the service documentation or any written agreement between the Customer and 360 Degree regarding the Customer&rsquo;s use of the service.</p>
        <p>2. General Internet problems, force majeure events, or factors outside of the reasonable control of 360 Degree, such as denial of service attacks or third-party service outages</p>
        <p>3. Customer&rsquo;s equipment, software, network connections, utilities, or other infrastructure</p>
        <p>4. Scheduled Maintenance or emergency maintenance, whether planned or unplanned.</p>
        <p>This Service Level Agreement (SLA) will not apply to any version of the 360 Degree LINE Japan Service that is (i) no longer available or supported, or (ii) identified as alpha, beta, limited release, or any similar early access service.</p>
        <p>4. Scheduled Maintenance</p>
        <p>For all scheduled maintenance to achieve the Target Availability, 360 Degree will use commercially reasonable efforts to notify the Customer at least five (5) business days prior to beginning such maintenance via email. Scheduled maintenance will be scheduled, to the extent practicable, during weekend hours.</p>
        <p>In the event of unavailability due to scheduled or unscheduled maintenance, 360 Degree will make reasonable efforts to minimize disruptions, inaccessibility, and/or inoperability of the 360 Degree LINE Japan Service, ensuring the service is restored as promptly as possible.</p>
        <p>5. Customer Responsibilities</p>
        <p>The Customer agrees to use the 360 Degree LINE Japan Service in accordance with the Terms. Any misuse or failure to adhere to the terms outlined in the documentation may result in a reduction in service availability or suspension of access to the service.</p>
      
      
      </div>
      <div id="tab15" class="tab-content"><h2>FILE SYNC SERVICE LEVEL AGREEMENT</h2>
        
        
        
        <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or</p>
        <p>"Us") and ("Customer&rdquo;, Client or "You") for the provision of File Sync Services, as outlined below.</p>
        <p>By using our File Sync services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
        <p>1. Definition</p>
        <p>&ldquo;Filesync service&rdquo; is a solution that enables users to efficiently manage and access files by syncing them between the Salesforce Platform and external storage platforms like Google Drive, SharePoint, and others, optimizing storage and enhancing collaboration.</p>
        <p>&ldquo;Salesforce Platform&rdquo; refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
        <p>2. User Responsibilities</p>
        <p>Customer agree to use the Service in a manner that complies with all applicable laws and regulations. Specifically, the customer agrees not to:</p>
        <p>● Upload, sync, or share the files that violate the rights of any third party, including intellectual property rights.</p>
        <p>● Use the Service for illegal, fraudulent, or malicious purposes.</p>
        <p>● Upload, sync, or share files that contain viruses, malware, or other harmful code.</p>
        <p>● Attempt to gain unauthorized access to the Service or interfere with its functionality.</p>
        <p>3. By syncing files with external storage platforms through the Service, Customer grants 360 Degree Cloud the necessary permissions to access, transfer, and store your files in Customer&rsquo;s Salesforce storage. However, Customers are solely responsible for the content customer store and sync via the Service. We do not claim ownership of your files. 360 Degree Cloud does not store, retain or detain any data.</p>
        <p>4. 360 Degree Cloud strives to provide reliable and uninterrupted access to the Service. However, with due notice of maintenance and technical issues or operational reasons, the</p>
        <p>Service may be temporarily unavailable. 360 degree is not responsible for any disruptions in service or for the loss of data resulting from such outages.</p>
      
      
      </div>
      <div id="tab16" class="tab-content"><h2>WHATSAPP BUSINESS SERVICE LEVEL AGREEMENT</h2>
      
        <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Client" or "You") for the provision of WhatsApp Business Services, as outlined below.</p>
<p>By using our WhatsApp Business services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
<p>The Terms of Use (&ldquo;Terms&rdquo;) set out herein shall apply to the WhatsApp services (&ldquo;Services&rdquo;) being procured by the Customer under an order form/ purchase order (&ldquo;Order Form&rdquo;) executed between the Customer and 360 Degree. It is understood and acknowledged that the Services are a solution owned and controlled by Meta Platforms Ireland, formerly known as Facebook Ireland Limited (&ldquo;Meta Platforms&rdquo;). It is further understood that the Customer has subscribed to the Services, the pricing, payment terms and duration of such service subscription as detailed in the Customer&rsquo;s Order Form.</p>
<p>1. Definition</p>
<p>&ldquo;Customer&rdquo; shall mean the entity or person availing the services under the agreement.</p>
<p>&ldquo;WhatsApp Business Service &rdquo; 360 degree shall provide a tool or platform that enables businesses to engage with customers through messaging on a large scale.</p>
<p>&ldquo;Downtime&rdquo; is the period when an application is unavailable or experiences disruptions, potentially due to maintenance, technical issues, or outages, impacting user access and potentially causing financial and reputational damage.</p>
<p>&ldquo;Uptime&rdquo; is the percentage of time a system, application, or service is operational and available to users.</p>
<p>&ldquo;Third Party&rdquo; refers to the service provider or platform that offers services or infrastructure related to the provisions of WhatsApp messaging, i.e., META and other communication services.</p>
<p>2. Scope of Service</p>
<p>2.1 Configuration of WhatsApp accounts within the Salesforce environment.</p>
<p>2.2 The 360 degree will charge a one-time setup fee for the integration services. The exact amount of the setup fee will be determined based on the complexity and specific requirements of the Client, as agreed upon by both parties in the order form before the commencement of the services.</p>
<p>2.3 Any services requested by the Client beyond the initial setup and integration will be considered additional services. These services will be charged separately, with fees and payment terms to be mutually agreed upon in writing by both parties on a case-by-case basis.</p>
<p>2.4 The 360 degree&rsquo;s responsibilities do not include support or maintenance of the WhatsApp and Meta services post-integration. The Client will be responsible for any charges levied by WhatsApp and Meta for their services.</p>
<p>3. Service Availability</p>
<p>3.1 Service Uptime Guarantee: We commit to providing 99% uptime for the WhatsApp Business services, subject to third-party services. It shall also exclude planned maintenance.</p>
<p>3.2 Scheduled Maintenance: Any scheduled maintenance that might affect the availability of services will be communicated to the Client at least 48 hours in advance.</p>
<p>3.3 Downtime: In case of service downtime is caused by system failure or network issues due to Meta, 360 Degree shall have no liability for recovery.</p>
<p>3.4 Timely Payment: The Customer shall make timely payments for the Services as per the Order Form, failing which, 360 degree reserves the right to suspend the usage of the Services.</p>
<p>3.5 Revised Price: Subject to any fluctuations or changes in the pricing structure of Meta Platforms, 360 reserves the right to modify the agreed-upon pricing. In the event of such adjustments, 360 shall provide prior written notice to the customer. Such changes will be effective as per the terms outlined in the notice.</p>
<p>4. Customer Responsibilities</p>
<p>4.1 Customer shall at all times be responsible for the creation of the content and creatives of the WhatsApp messages it proposes to send as part of the Services. The customer will at all times be liable for the consequences arising from the Content.</p>
<p>4.2 Customer shall ensure that the Content is not infringing, libellous, defamatory, obscene, pornographic, abusive, harmful, threatening, harassing, stalking, embarrassing tortuous, offensive, hateful, or racially, ethnically or otherwise objectionable, misleading or violating any law or rules laid down by statute or any right of any individual or third party.</p>
<p>4.3 Customer shall obtain prior permission from its end recipients and keep a record of their valid opt-in proofs before starting the process of sending the WhatsApp messages. 360 degree shall be entitled to reimbursement of all costs and expenses incurred by it to</p>
<p>defend any claims or address any complaints made by a recipient, or by Meta Platforms, or any other party or entity, for sending unsolicited WhatsApp messages.</p>
<p>4.4 The Customer will not (a) resell the WhatsApp solution or allow third parties to integrate with, access or use the WhatsApp solution, unless otherwise permitted by 360 degree in writing or (b) use any of the Meta Platforms or WhatsApp names and trademarks in any way (unless permitted under another agreement between the User and Meta Platforms) or (c) transfer any of its rights or obligations under these Terms to anyone else without User and Meta Platforms&rsquo; consent.</p>
<p>5. WhatsApp Compliance</p>
<p>5.1 Our Service is not affiliated with, authorized by, endorsed by, or in any way officially connected with WhatsApp Inc. or any of its subsidiaries or affiliates.</p>
<p>5.2. The use of our Service must comply with WhatsApp's Terms of Service.</p>
<p>5.3. We may modify our Service at any time to maintain compliance with WhatsApp's policies or technical requirements.</p>
      
      
      </div>
      <div id="tab17" class="tab-content"><h2>MASS EMAIL SERVICE LEVEL AGREEMENT</h2>
      
      
        <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or</p>
<p>"Us") and ("Customer&rdquo;, Client or "You") for the provision of Mass Mail Services, as outlined below.</p>
<p>By using our Mass Mail services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
<p>1. Definition</p>
<p>&ldquo;360 Degree Mass Mailer&rdquo; is a comprehensive tool designed to facilitate the sending of bulk emails to large audiences efficiently and securely. This service is built specifically for Salesforce users, offering seamless integration and a host of advanced features tailored to enhance email marketing efforts. The Service includes, but is not limited to, features such as streamlined email marketing, automation, Salesforce integration, email personalization, email tracking, and email reputation management. The Service allows users to create, send, and manage mass email campaigns directly through Salesforce.</p>
<p>&ldquo;Salesforce Platform&rdquo; refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
<p>&ldquo;Opt-out/Unsubscribe&rdquo; refers to the process by which an individual withdraws their consent to receive further communications, typically marketing emails, from a business or service. In the context of email marketing, opt-out allows a recipient to stop receiving promotional, newsletter, or marketing-related emails, while still potentially receiving other types of communications, such as transactional or support-related emails.</p>
<p>&ldquo;Recipient&rdquo; refers to an individual or entity that receives a message, communication, or piece of content, such as an email, letter, or notification.</p>
<p>2. Subject to these Terms, the 360 Degree Cloud grants Customer a non-exclusive, non-transferable, revocable license to access and use the Service for its intended purpose, solely for your business or personal use.</p>
<p>3. Use of the Service</p>
<p>Customer agree to use the Service in compliance with all applicable laws and regulations. Customer shall not:</p>
<p>● Violate the rights of any third party, including intellectual property rights or privacy rights.</p>
<p>● Use the Service for any unlawful purpose, including spamming or sending unsolicited emails.</p>
<p>● Engage in activities that could harm or interfere with the operation of the Service or its infrastructure.</p>
<p>4. Customer Responsibility: As a Customer of 360 Mass Mailer, Customers are responsible for the content, management, and distribution of any email campaigns you create using the Service. Customers agree to ensure that all email campaigns comply with applicable laws, including but not limited to the CAN-SPAM Act, GDPR, and other email marketing regulations. This includes obtaining appropriate consent for the emails sent and managing opt-outs and unsubscribes as required by law.</p>
<p>5. Automated emails: If the Customer chooses to use 360 Mass Mailer&rsquo;s automated features (such as email journeys or sequences), the Customer must ensure that all automated campaigns honor opt-out requests. This means that if a recipient unsubscribes from one email within a series, they should be automatically unsubscribed from all future marketing communications. You are responsible for configuring your campaigns to adhere to these requirements.</p>
      </div>
      <div id="tab23" class="tab-content"><h2>TEXTOLIC SERVICE LEVEL AGREEMENT </h2>
        <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud  ("Provider," "We," or "Us") and  (“Customer”, "Client" or "You") for the provision of Textolic Services, as outlined below.</p>
        <p>By using our Textolic services, the Customer agrees to the terms and conditions outlined in this Agreement. </p>
        <p>1.	Definition </p>
        <p>“Textolic service” is a comprehensive communication solution that enhances customer engagement within Salesforce. This application directly integrates SMS, WhatsApp, and other messaging platforms into Salesforce, enabling businesses to manage communications efficiently.</p>
        <p>“Salesforce Platform” refers to the third-party platform on which the Company’s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
        <p>2.	Account Registration and Usage</p>
        <p>2.1 Customers are responsible for maintaining the confidentiality of their account credentials.</p>
        <p>2.2  Customer agree to use the service in compliance with applicable laws and regulations.</p>
        <p>3.	Message Limits and Delivery</p>
        <p>3.1 The service may have limits on the number of messages that can be sent or received, depending on the plan selected.</p>
        <p>3.2 Textolic makes no guarantees regarding the delivery of messages, as factors beyond our control (e.g., network issues, carrier limitations) can affect message delivery.</p>
        <p>4.	Prohibited Use</p>
        <p>The user shall be prohibited from sending unsolicited marketing messages, violating any applicable laws or third-party rights and interfering with or disrupting the services or networks connected to the service.</p>
      </div>
      <div id="tab18" class="tab-content"><h2>MERGE DUPLICATES SERVICE LEVEL AGREEMENT</h2>
        
        <p>This Service Level Agreement ("SLA") is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer," "Client," or "You") for the provision of Merge Duplicates services, as outlined below.</p>
        <p>By using our Merge Duplicates services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
        <p>1. Definitions</p>
        <p>"Merge Duplicates Service" refers to a specialized cloud-based solution designed for identifying, managing, and merging duplicate records within the Salesforce environment to maintain data integrity and accuracy.</p>
        <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
        <p>2. Scope of Service</p>
        <p>2.1 360 Degree agrees to provide the Customer with access to the Merge Duplicate Service, which is designed to assist the Customer in identifying, filtering, and merging duplicate records within Salesforce. The Service will automatically identify and merge duplicate records in Salesforce based on predefined criteria or rules set by the Customer.</p>
        <p>2.2 The Service will provide the capability to identify duplicate records within the Customer&rsquo;s Salesforce instance, utilizing predefined or custom filter rules as configured by the Customer. The Service will enable the Customer to filter out and eliminate duplicate records from the Salesforce database by applying custom filters and deduplication logic.</p>
        <p>2.3 The Service will provide real-time deduplication, allowing duplicate records to be identified and merged as they are entered into the Salesforce system.</p>
        <p>2.4 The Service includes access to a User-Friendly Dashboard that provides an intuitive interface for the Customer to perform deduplication tasks, including the identification, filtering, and merging of duplicate records.</p>
        <p>3. Service Availability</p>
        <p>Subject to the throughput limits and factors outside of the Provider's control, including but not limited to external factors as outlined in the terms on website, 360 Degree Cloud will use commercially reasonable efforts to ensure the Merge Duplicate Service meets the Target Availability which means 360 degree ensures to provide the Service maximum time, excluding exclusions as defined below.</p>
        <p>4. Exclusions</p>
        <p>The Target Availability does not apply during periods of unavailability caused by any of the following reasons:</p>
        <p>4.1 Any unavailability resulting from the Customer&rsquo;s use of the Merge Duplicate Service in a manner not authorized by the service documentation or any other written agreement between the Customer and 360 Degree Cloud regarding the Customer&rsquo;s use of the Service.</p>
        <p>4.2 General internet problems, force majeure events, or any factors outside of the reasonable control of 360 Degree Cloud, including but not limited to denial of service attacks or third-party service outages.</p>
        <p>4.3 Issues related to the Customer&rsquo;s equipment, software, network connections, utilities, or other infrastructure.</p>
        <p>4.4 Scheduled maintenance or emergency maintenance, whether planned or unplanned.</p>
        <p>4.5 This Agreement does not apply to any version of the Merge Duplicate Service that is no longer available or supported</p>
        <p>5. Customer Responsibility</p>
        <p>5.1 The Customer is responsible for utilizing the dashboard to configure and manage deduplication tasks, and for ensuring that appropriate permissions are set for those who have access to the dashboard.</p>
        <p>5.2 The Customer understands and agrees that any merges performed using this functionality are permanent actions and may not be reversible.</p>
        <p>5.3 The Customer shall ensure that backups of all relevant data are performed before utilizing the auto-merge functionality to avoid unintentional data loss.</p>
        <p>5.7 The Customer acknowledges that the auto-merge functionality is designed to streamline the deduplication process, but it is the responsibility of the Customer to configure and verify the criteria for merging duplicates.</p>
        <p>5.8 The Customer is responsible for determining and configuring the appropriate criteria for identifying duplicate records within their Salesforce instance.</p>
        <p>5.9 The Customer acknowledges that the effectiveness of the identification of duplicates is contingent on the accuracy of the criteria set and the data provided.</p>
        <p>5.10 Ensure that the data you upload or integrate into the App is accurate, complete, and owned or legally authorized for use by you</p>
        <p>5.11 The Customer shall use the App in compliance with all applicable laws, including but not limited to data privacy laws, regulations regarding the use of personal information, and any contractual obligations related to data protection.</p>
        <p>6. Scheduled Maintenance</p>
        <p>6.1 For all scheduled maintenance intended to achieve Target Availability, 360 Degree Cloud will use commercially reasonable efforts to notify the Customer at least five (5) business days prior to beginning such maintenance via email.</p>
        <p>6.2 Scheduled maintenance will be conducted, to the extent practicable, during weekend hours to minimize disruption.</p>
        <p>6.3 In the event of unavailability due to scheduled or unscheduled maintenance, 360 Degree Cloud will make reasonable efforts to minimize disruptions, inaccessibility, or inoperability of the Merge Duplicate Service, and will ensure the service is restored as promptly as possible.</p>
      
      
      </div>
      <div id="tab19" class="tab-content"><h2>VTM & VTP SERVICE LEVEL AGREEMENT</h2>
        
        <p>This Service Level Agreement ("SLA") is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer", "Client" or "You") for the provision of Virtual Telephony Manager (VTM) and Virtual Telephony Platform (VTP) services, as outlined below.</p>
        <p>By using our VTM &amp; VTP services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
        <p>1. Definitions:</p>
        <p>"Verify The Mail (VTM)" refers to a comprehensive cloud-based telephony management solution integrated within Salesforce to validate and confirm the authenticity of email addresses. This tool helps businesses and individuals ensure the accuracy of email addresses, improve email deliverability, reduce bounce rates, and maintain a strong sender reputation.</p>
        <p>"Verify The Phone (VTP)" is a feature that ensures the accuracy of phone numbers directly within Salesforce. It validates numbers in real-time at the point of entry, guaranteeing that only valid and accurate data is recorded. VTP supports both bulk and manual verification, helping maintain clean data for improved communication and targeted outreach.</p>
        <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
        <p>&ldquo;Uptime&rdquo; is the period during which a system, service, or website is operational and accessible.</p>
        <p>&ldquo;Downtime&rdquo; is the period during which a system, service, or website is unavailable or experiencing problems.</p>
        <p>2. Scope of Services</p>
        <p>360 Degree Cloud shall provide the following services under VTM &amp; VTP services</p>
        <p>1. The configuration and integration of telephony systems within the Salesforce environment.</p>
        <p>2. The implementation of automated call management systems, including but not limited to advanced Interactive Voice Response (IVR) systems, voicemail integration, and call routing capabilities.</p>
        <p>3. The provision of real-time analytics and the establishment of comprehensive reporting functionalities.</p>
        <p>4. 360 degree shall provide maintenance, support, and the provision of periodic updates as agreed between the parties.</p>
        <p>3. Service Availability:</p>
        <p>3.1 Service Uptime Guarantee: We commit to providing maximum uptime for the VTM &amp; VTP services, excluding planned maintenance.</p>
        <p>3.2 Scheduled Maintenance: Scheduled maintenance affecting the service availability will be communicated to the Client at least 48 hours in advance.</p>
        <p>3.3 Downtime: 360 Degree Cloud Technology shall have no liability for service downtime caused by system failure or network issues beyond its direct control.</p>
        <p>3.4 Timely Payment: The Customer shall make timely payments for the Services as per the Order Form, failing which, 360 degree reserves the right to suspend the usage of the Services.</p>
        <p>4. Customer Responsibilities:</p>
        <p>4.1 The Customer shall maintain the confidentiality of all account credentials and shall not disclose such credentials without prior written consent from 360 Degree Cloud. The Customer shall be solely responsible for any activities conducted under their account.</p>
        <p>4.2 The Customer shall use the services in full compliance with all applicable local, state, national, and international laws, regulations, and industry standards, including but not limited to data privacy and telecommunications regulations.</p>
        <p>4.3 The Customer shall obtain and maintain the necessary consents and permissions from all recipients before initiating any recorded or automated calls, in compliance with all applicable laws, including, but not limited to, the Telephone Consumer Protection Act (TCPA) and other relevant regulations.</p>
        <p>4.5 The Customer agrees and undertakes that, while using 360 Degree Cloud's services, it shall not utilize the services for any unlawful, fraudulent, or malicious purposes.</p>
      
      
      
      </div>

      <div id="tab20" class="tab-content active"><h2>TERMS AND CONDITIONS FOR ALL SERVICES</h2>
        
      
        <p>It is important that you review and understand these terms before using our services. All the terms are legally
          binding. </p>
        <p>Our services are generally intended for business or professional use only. </p>
        <p><em>These terms are effective on the date you accept them. This includes any additional terms that are referenced in
            these terms and available at hyperlinks and any order forms that you may execute with 360 Degree. </em></p>
        <p><em>PLEASE REVIEW THESE “360 DEGREE” TERMS OF SERVICE CAREFULLY. </em></p>
        <p>These 360 DEGREE CLOUD Terms of Service (“<strong><em>Agreement</em></strong>”) set forth the terms for your use of
          the Services and are effective as of the date you accept or otherwise agree to the terms of 360 Degree Cloud
          agreement. This consists of these 360 DEGREE Terms of Service, and terms referenced in these Terms of Service which
          are available at hyperlinks, and any applicable Order Form(s) (as defined below). This is between the applicable 360
          DEGREE entity identified below (“<strong><em>360 Degree</em></strong>” or “<strong>360 Degree Cloud</strong>”) and you
          or the organization on whose behalf you are accepting or otherwise agreeing to the terms of this Agreement
          (“<strong><em>you</em></strong><em>"</em>,<em> "</em><strong><em>your</em></strong><em>"</em>,<em>
            "</em><strong><em>yours</em></strong><em>"</em>, or<em> "</em><strong><em>Customer</em></strong>”)</p>
        <p><em>These terms might change. We will let you know at least 30 days before we make any significant changes that
            impact you or your use of our services, unless we are unable to because of changes in laws, regulations, or carrier
            requirements. The updated version of these terms will be posted on this page.</em></p>
        <p><em>If you keep using our services after these terms have changed and gone into effect, that means you have accepted
            those changes and they are legally binding on you. If you do not agree with the changed terms, you must stop using
            our services immediately.</em></p>
        <h3><a id="_uizhskpvyeml"></a><a id="_Toc2034475966"></a><strong>1. Definitions</strong></h3>
        <p><strong><em>Affiliate</em></strong>” means any entity that directly or indirectly controls or is controlled by, or is
          under common control with, the party specified. For purposes of this definition, “control” means direct or indirect
          ownership of more than fifty percent (50%) of the voting interests of the subject entity.</p>
        <p>“<strong><em>Customer Data</em></strong>” means any data (a) provided by you or your End Users (as defined below) to
          360 Degree in connection with your use of the Services or (b) generated for your use as part of the Services. Customer
          Data excludes any 360 Degree Data (as defined below).</p>
        <p>“<strong><em>Customer Services</em></strong>” means any software application or other products and services provided
          by you and used in connection with your use of the Services under this Agreement.</p>
        <p>“<strong><em>Documentation</em></strong>” means 360 Degree’s documentation, including any usage guides and policies,
          for the Services.</p>
        <p>“<strong><em>End User</em></strong>” means any user of the Services, including via any Customer Services.</p>
        <p>“<strong><em>Malicious Code</em></strong>” means code, files, scripts, agents, or programs intended to do harm,
          including, for example, viruses, worms, time bombs and Trojan horses.</p>
        <p>“<strong><em>Order Form</em></strong>” means an ordering document between you and 360 Degree, or any of their
          Affiliates, that specifies mutually agreed upon rates for certain Services and any commercial terms related thereto.
        </p>
        <p>“<strong><em>Services</em></strong>” means the products and services provided by 360 Degree or its Affiliates, as
          applicable, including all updates, modifications, or improvements thereto, that you purchase pursuant to an Order Form
          or otherwise use. Services exclude any Customer Services.</p>
        <p>"<strong><em>360 Degree Acceptable Use Policy</em></strong>" means certain terms relating to the use of the Services,
          including the Service and Country Specific Requirements set forth therein, the current version of which is available
          at <a href="#" style="color:#00bcd4;" onclick="openTab(event, 'tab21', 'tab-btn-21')">"<strong><em>360 Degree Acceptable Use Policy</em></strong>"</a></p>
        <p>"<strong><em>360 degree intellectual property rights</em></strong>" means certain terms relating to the use of the
          Services, including the Service and Country Specific Requirements set forth therein, the current version of which is
          available at <a href="#" style="color:#00bcd4;" onclick="openTab(event, 'tab2', 'tab-btn-2')"><strong><em>360 degree intellectual property rights </em>
          </strong></a></p>
        <p>"<strong><em> 360 degree security overview</em></strong>" means certain terms relating to the use of the Services,
          including the Service and Country Specific Requirements set forth therein, the current version of which is available
          at <a href="#" style="color:#00bcd4;" onclick="openTab(event, 'tab7', 'tab-btn-7')"><strong><em>360 degree security overview</em></strong></a></p>
        <p>“<strong><em>360 Degree Data</em></strong>” means any data that is (a) derived or generated from the use or provision
          of the Services that does not identify you, your End Users, or any natural person or is anonymized, de-identified,
          and/or aggregated such that it can no longer identify you, your End Users, or any natural person or (b) if applicable,
          any Customer Data that is anonymized, de-identified, and/or aggregated by 360 Degree in accordance with this
          Agreement.</p>
        <p>“<strong><em>360 Degree Data Protection Addendum</em></strong>” means the personal data processing-related terms for
          the Services, the current version of which is available at <a href="#" style="color:#00bcd4;" onclick="openTab(event, 'tab22', 'tab-btn-22')">
            <strong><em>360 Degree Data Protection Addendum</em></strong>
          </a>
          </p>
        <p><strong><em>“Intellectual Property Rights”</em></strong> means patents, trademarks, service marks, trade names,
          design rights, copyright, database rights, semi-conductor topography rights, know-how and other intellectual property
          rights (of whatever nature and wherever arising) whether registered or unregistered including applications for the
          grant of any such rights.</p>
        <h3><a id="_uizhskpvyeml"></a><a id="_Toc2034475966"></a><strong>2. SERVICES</strong></h3>
        <p><em>We will make our services available to you according to our published documentation on our website and our
            service level agreement</em>s<em>. </em></p>
        <p>2.1 Provision of the Services. </p>
        <p>360 degree will: (a) provide the Services to you pursuant to this Agreement, the applicable Documentation, and any
          applicable Order Form(s); (b) comply with the applicable 360 degree SLA; (c) comply with the security terms for the
          Services as set forth in the 360 degree Security Overview; (d) provide the Services in accordance with laws applicable
          to 360 degree’s provision of the Services to its customers generally (i.e., without regard for your particular use of
          the Services), subject to your use of the Services in accordance with this Agreement, the applicable Documentation,
          and any applicable Order Form(s); (e) make commercially reasonable efforts to use industry standard measures designed
          to scan, detect, and delete Malicious Code, and (f) use commercially reasonable efforts to provide you with applicable
          support for the Services as described in the applicable Support Terms.</p>
        <p>2.2 Customer Responsibilities. </p>
        <p>Customer shall: (a) be solely responsible for all use of the Services and Documentation under your account and the Customer Services; (b) not transfer, resell, lease, license, or otherwise make available the Services to third parties (except to make the Services available to your End Users) or offer them on a standalone basis; (c) use the Services only in accordance with this Agreement, the 360 degree Acceptable Use Policy, the applicable Documentation, any applicable Order Form(s), and applicable law or regulation; (d) be solely responsible for all acts, omissions, and activities of your End Users, including their compliance with this Agreement, the 360 degree   Acceptable Use Policy, the applicable Documentation, any applicable Order Form(s), and applicable law or regulation; (e) use commercially reasonable efforts to prevent unauthorized access to or use of the Services and notify 360 degree promptly of any such unauthorized access or use; (f) provide reasonable cooperation regarding information requests from law enforcement, regulators, or telecommunications providers; and (g) comply with your representations and warranties set forth in Section 5 (Representations, Warranties, and Disclaimer).The Customer is solely responsible for implementing, managing, and honoring all communication preferences including SMS opt-outs, call preferences, and unsubscribe requests as required under applicable laws. The Customer shall maintain verifiable records of opt-ins and opt-outs and must promptly process all opt-out requests to ensure no further unsolicited communications are sent. Failure to comply may result in suspension or termination of Services as outlined in the Acceptable Use Policy. 360 Degree Cloud disclaims any liability arising from the Customer’s failure to manage consent and opt-outs properly.</p>
        <p>2.3 Suspension of Services</p>
        <p>360 Degree may suspend the Services upon written notice to you if 360 Degree, in good faith, determines: (a) that you
          or your End Users materially breach (or 360 Degree, in good faith, believes that you or your End Users have materially
          breached) the 360 Degree Acceptable Use Policy; (b) there is an unusual and material spike or increase in your use of
          the Services and that such traffic or use is fraudulent or materially and negatively impacting the operating
          capability of the Services; (c) that its provision of the Services is prohibited by applicable law or regulation; (d)
          there is any use of the Services by you or your End Users that threatens the security, integrity, or availability of
          the Services; or (e) that information in your account is untrue, inaccurate, or incomplete. You remain responsible for
          the Fees (as defined in Section 3.3 (Payment Terms)).</p>
        <p>2.4 Changes to the Services. </p>
        <p>You acknowledge that the features and functions of the Services may change over time; provided, however, 360 Degree
          will not materially decrease the overall functionality of the Services. It is your responsibility to ensure that the
          Customer Services are compatible with the Services. 360 Degree endeavours to avoid changes to the Services that are
          not backwards compatible, However, if any such changes become necessary, 360 degrees will use commercially reasonable
          efforts to notify you at least thirty (30) days before implementation. In the event 360 Degree makes a non-backwards
          compatible change to certain Services and such change materially and negatively impacts your use of the Services
          (“<strong><em>Adverse Change</em></strong>”), (a) you will notify 360 Degree of the Adverse Change and (b) 360 degree
          may agree to work with you to resolve or otherwise address the Adverse Change, except where 360 degree, in its sole
          discretion, has determined that an Adverse Change is required for security reasons, by telecommunications providers,
          or to comply with applicable law or regulation.</p>
        <h3><a id="_uizhskpvyeml"></a><a id="_Toc2034475966"></a><strong>3. FEES AND PAYMENT TERMS</strong></h3>
        <p>3.1 Fees</p>
        <p>Customers agree to pay the fees for the specified services set forth in the applicable signed Order Form(s).</p>
        <p>3.2 Invoicing </p>
        <p>The invoice shall raise, except as otherwise set forth in the applicable Order Form(s), (a) invoices will be sent to
          you each month via email to the email address(es) you designate in your account and (b) you will pay the Fees due
          within thirty (30) days of the date of the invoice. Except as otherwise set forth in the applicable Order Form(s) or
          an invoice to the extent you procure the Services without any applicable Order Form(s), the Fees are payable in United
          States dollars/ the currency as may be decided on case-to-case basis. If you fail to pay the Fees, then 360 degree may
          (i) assess and you will pay a late fee of 1.5% per month and (ii) suspend the provision of the Services to all of your
          accounts until the Fees due are paid in full. </p>
        <p>3.3 Payment Disputes. </p>
        <p>You will notify 360 degree in writing within 15 days of the date 360 degree bills you for any Fees that you wish to
          dispute. You may withhold the disputed Fees until the dispute is resolved. Where you are disputing any Fees, you must
          act reasonably and in good faith and will cooperate diligently with 360 degree to resolve the dispute. 360 degree will
          not charge you a late fee or suspend the provision of the Services for unpaid Fees that are in dispute, unless you
          fail to cooperate diligently with 360 degree or 360 degree determines the dispute is not reasonable or brought in good
          faith by you.</p>
        <p>Customer shall be solely responsible to verify the accuracy and completeness of invoice details prior to making the
          payment. Any dispute relating to an invoice, whether partially or fully paid, must be raised in writing within sixty
          (60) days from the invoice date. Failure to do so shall constitute acceptance of the invoice in full and waiver of any
          right to dispute it thereafter. 360 Degree Cloud shall have no obligation or liability to make any adjustments, issue
          refunds, or provide compensation for any claims made thereafter.</p>
        <p>In the event that the Services are suspended due to the Customer’s non-compliance with the terms of the Agreement, or
          any breach thereof, 360 Degree shall not be obligated to issue any refund or provide any adjustment to payments
          received, regardless of whether such payments have been made in full, in part, or on a proportional basis relative to
          the total contract value. All payments made prior to such suspension shall be deemed non-refundable and shall not be
          credited toward any future services.</p>
        <p>360 Degree shall not, under any circumstances, be held liable for any loss, damage, cost, or expense whether direct,
          indirect, incidental, special, or consequential incurred by the Customer as a result of such suspension of Services
          due to Client’s or any third party’s fault. The Customer expressly acknowledges and agrees that any such suspension is
          undertaken at the Customer’s sole risk and that 360 Degree Cloud shall have no responsibility or liability in
          connection therewith.</p>
        <p>3.4 Taxes and Communications Surcharges</p>
        <p>3.4.1 Taxes. </p>
        <p>All fees are exclusive of any applicable taxes, levies, duties, or other similar exactions imposed by a legal,
          governmental, or regulatory authority in any applicable jurisdiction, including, without limitation, sales, use,
          value-added, consumption, communications, or withholding taxes (collectively, “<em>Taxes</em>”). You will pay all
          Taxes in connection with this Agreement, excluding any taxes based on 360 degrees’ net income, property, or employees.
          If you are required by applicable law to withhold any Taxes from payments owed to 360 degree, you will reduce or
          eliminate such withheld Taxes upon receipt of the appropriate tax certificate or document provided by 360 degree. You
          will provide 360 degree with proof of payment of any withheld Taxes to the appropriate authority. Taxes will be shown
          as a separate line item on an invoice.</p>
        <p>3.4.2 Communications Charges. </p>
        <p>If applicable, all fees are exclusive of any applicable communications service or telecommunication provider (e.g.,
          carrier) fees or surcharges (collectively, “<em>Communications Surcharges</em>”). You will pay all Communications
          Surcharges in connection with your use of the Services. Communications Surcharges will be shown as a separate line
          item on an invoice. You will pay all costs, fines, or penalties that are imposed on 360 degree by a government or
          regulatory body or a telecommunications provider as a result of your or your End Users’ use of the Services.</p>
        <h3><a id="_o0lxls39t2j0"></a><a id="_Toc609313972"></a><strong>4. Ownership, Customer Data, and
            Confidentiality</strong></h3>
        <p>4.1 Ownership Rights. As between the parties, 360 Degree exclusively owns and reserves all rights, titles, and
          interests in and to the Services, 360 Degree's Confidential Information, 360 degree Data, as well as any feedback or
          suggestions you or your End Users provide regarding the Services. As between the parties, you exclusively own and
          reserve all rights, titles, and interest in and to the Customer Services, your Confidential Information, and Customer
          Data, subject to 360 degree’s rights to access Customer Data as per this Agreement. </p>
        <p>4.2 Customer Data. You grant 360 degree and its Affiliates the right to access Customer Data as necessary to provide
          the Services in a manner that is consistent with this Agreement, if applicable. As 360 degree does not retain, restore
          and detain any data, therefore the customer will solely responsible for its data. You are responsible for the quality
          and integrity of Customer Data. </p>
        <p>360 Degree operates as an organization within the customer's Salesforce environment. All data processing and
          operations occur entirely within the customer’s Salesforce instance. 360 Degree does not store, or retain any customer
          data or access any customer data outside of what is strictly necessary for operational purposes. The only data
          elements that may be shared or referenced by 360 Degree are limited to billing information and the associated email
          address. No other customer data is stored, processed, or retained by 360 Degree.</p>
        <p>4.3 Confidentiality</p>
        <p>4.3.1 Definition. “<em>Confidential Information</em>” means any information or data, regardless of whether it is in
          tangible form, disclosed by either party (“<strong><em>Disclosing Party</em></strong>”) to the other party
          (“<strong><em>Receiving Party</em></strong>”) that is marked or otherwise designated as confidential or proprietary or
          that should otherwise be reasonably understood to be confidential given the nature of the information and the
          circumstances surrounding the disclosure, including, without limitation, this Agreement, Order Form(s), Customer
          Data(if any stored by 360 degree), security reports and attestations, audit reports, customer lists, pricing,
          concepts, processes, plans, designs and other strategies, “know how”, inventions, and financial, technical, or other
          business information and materials of Disclosing Party and its Affiliates. Confidential Information does not include
          any information which: (a) is publicly available through no breach of this Agreement or fault of Receiving Party; (b)
          was properly known by Receiving Party, and to its knowledge, without any restriction, prior to disclosure by
          Disclosing Party; (c) was properly disclosed to Receiving Party, and to its knowledge, without any restriction, by
          another person without violation of Disclosing Party's rights; or (d) is independently developed by Receiving Party
          without use of or reference to the Confidential Information of Disclosing Party.</p>
        <p>4.3.2 Use and Disclosure. Except as otherwise authorized under Section 4.3.3 (Compelled Disclosure), under the 360
          Degree Data Protection Addendum, or by Disclosing Party in writing, Receiving Party will not (a) use any Confidential
          Information of Disclosing Party for any purpose outside of exercising Receiving Party’s rights or fulfilling its
          obligations under this Agreement and (b) disclose or make Confidential Information of Disclosing Party available to
          any party, except to Receiving Party's Affiliates, and Receiving Party's and its Affiliates’ respective employees,
          legal counsel, accountants, contractors, and in 360 degree’s case, subcontractors (collectively,
          “<strong><em>Representatives</em></strong>”) who have a “need to know” as necessary for Receiving Party to exercise
          its rights or fulfill its obligations under this Agreement. Receiving Party will be responsible for its
          Representatives’ compliance with this Section 4.3. Representatives will be legally bound to protect Confidential
          Information of Disclosing Party under terms of confidentiality that are at least as protective as the terms of this
          Section 4.3. Receiving Party will protect the confidentiality of Confidential Information of Disclosing Party using
          the same degree of care that it uses to protect the confidentiality of its own confidential information but in no
          event less than reasonable care.</p>
        <p>4.3.3 Compelled Disclosure</p>
        <p>Receiving Party may disclose Confidential Information of Disclosing Party if so required pursuant to a request from a
          regulator or pursuant to regulation, law, subpoena, or court order (collectively, “<strong><em>Compelled
              Disclosures</em></strong>”), provided Receiving Party gives Disclosing Party written notice of a Compelled
          Disclosure to the extent (a) legally permitted and (b) where, when 360 degree is Receiving Party, it determines that
          such Compelled Disclosure will not unduly interfere with an ongoing investigation into potential illegal activity. The
          receiving Party will provide reasonable cooperation to the Disclosing Party in connection with a Compelled Disclosure
          at the Disclosing Party’s sole expense.</p>
        <p>4.3.4 Injunctive Relief. </p>
        <p>The parties expressly acknowledge and agree that no adequate remedy may exist at law for an actual or threatened
          breach of this Section 4.3 and that, in the event of an actual or threatened breach of the provisions of this Section
          4.3, the non-breaching party will be entitled to seek immediate injunctive and other equitable relief, without waiving
          any other rights or remedies available to it.</p>
        <p>4.4 Use of Marks. </p>
        <p>You grant 360 Degree the right to use and display your name, logo, and a description of your use case(s) on 360
          Degree’s website, in earnings releases and calls, and in marketing and promotional materials, subject to your standard
          trademark usage guidelines that you expressly provide to 360 degree.</p>
        <h3><a id="_si5pun80qqbw"></a><a id="_Toc659978099"></a><strong>5. Representations, Warranties, and Disclaimer</strong>
        </h3>
        <p>5.1 Power and Authority Representation. Each party represents and warrants that it has validly accepted or entered
          into this Agreement and has the legal power to do so.</p>
        <p>5.2 Anti-Corruption and International Trade Laws. </p>
        <p>Each party (a) warrants that it will comply with all applicable anti-corruption, anti-money laundering, economic and
          trade sanctions, export controls, and other international trade laws, regulations, and governmental orders
          (collectively, “<strong><em>Anti-Corruption and Trade Laws</em></strong>”) in the jurisdictions that apply directly or
          indirectly to the Services, including, without limitation, the United States, India , Europe, Brazil, Japan etc. , and
          (b) represents that it has not made, offered, promised to make, or authorized any payment or anything of value in
          violation of Anti-Corruption and Trade Laws. You will promptly notify 360 Degree in writing of any actual or potential
          violation of Anti-Corruption and Trade Laws in connection with the use of the Services and take all appropriate steps
          to remedy or resolve such violations, including any steps requested by 360 Degree. If applicable, you represent that
          you have obtained, and warrant that you will continue to obtain, all licenses or other authorizations required to
          transfer the Services. Each party represents that it (and in your case, also your End Users) is not on any government
          prohibited, denied, or unverified-party, sanctions, debarment, or exclusion list or export-controlled related
          restricted party list (collectively, “<strong><em>Sanctions Lists</em></strong>”). You will immediately (i)
          discontinue your use of the Services if you become placed on any Sanctions List and (ii) remove your End Users’ access
          to the Services if your End Users become placed on any Sanctions List. You represent that you have not, and warrant
          that you will not, export, re-export, or transfer the Services to an entity on any Sanctions List without prior
          authorization from the applicable governmental authority. Notwithstanding anything to the contrary in this Agreement,
          either party may terminate this Agreement immediately upon written notice to the other party if the other party is in
          breach of its obligations in Section 5.2. If your account is blocked because it is operating in a country or region
          prohibited under Section 5.2, you will receive notice of your account being inoperable when you attempt to log into
          your account in such a prohibited country or region.</p>
        <p>5.3 Consents and Permissions. </p>
        <p>You represent and warrant that you have provided, and will continue to provide, adequate notices, and that you have
          obtained, and will continue to obtain, the necessary permissions and consents required to enable 360 Degree to perform
          its obligations to provide the Services or as permitted by this Agreement.</p>
        <p>DISCLAIMER. WITHOUT LIMITING A PARTY’S EXPRESS WARRANTIES AND OBLIGATIONS HEREUNDER, AND EXCEPT AS EXPRESSLY PROVIDED
          HEREIN, THE SERVICES ARE PROVIDED “AS IS,” AND NEITHER PARTY MAKES ANY WARRANTY OF ANY KIND, WHETHER EXPRESS, IMPLIED,
          STATUTORY, OR OTHERWISE, AND EACH PARTY SPECIFICALLY DISCLAIMS ALL IMPLIED WARRANTIES, INCLUDING ANY IMPLIED WARRANTY
          OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT TO THE FULLEST EXTENT PERMITTED BY LAW. 360
          DEGREE ADDITIONALLY DISCLAIMS ALL WARRANTIES RELATED TO TELECOMMUNICATIONS PROVIDERS. YOU ACKNOWLEDGE THE INTERNET AND
          TELECOMMUNICATIONS PROVIDERS’ NETWORKS ARE INHERENTLY INSECURE AND THAT 360 DEGREE WILL HAVE NO LIABILITY FOR ANY
          CHANGES TO, INTERCEPTION OF, WHILE IN TRANSIT VIA THE INTERNET OR A TELECOMMUNICATIONS PROVIDER’S NETWORK. </p>
        <p>5.4 AI Features Disclaimer</p>
        <p>Certain features of the Services may incorporate Artificial Intelligence (“AI”) technologies, including but not limited to ChatGPT-based solutions. AI-generated outputs are provided for informational purposes only and may contain inaccuracies or incomplete information. Clients acknowledge that they are solely responsible for independently verifying the accuracy, completeness, and suitability of any AI outputs before relying on them, and 360 Degree Cloud expressly disclaims liability for any loss or damage resulting from reliance on such outputs.</p>
        <h3><a id="_si5pun80qqbw"></a><a id="_Toc659978099"></a><strong>6. Mutual Indemnification</strong>
        </h3>
        <p>6.1 Indemnification by 360 Degree</p>
        <p>360 Degree will have no liability or obligation under this Section 6.1 with respect to any 360 Degree Indemnifiable
          Claim arising out of (a) your use of the Services in breach of this Agreement; (b) the combination, operation, or use
          of the Services with other applications, portions of applications, products, or services, including, without
          limitation, the Customer Services or Third Party Services, where the Services would not by themselves be infringing;
          or (c) Services for which there is no charge.</p>
        <p>6.2 Indemnification by Customer. </p>
        <p>You will defend 360 Degree, its Affiliates, and each of their directors, officers, and employees (collectively,
          “<strong><em>360 Degree Indemnified Parties</em></strong>”) from and against any claim, demand, suit, or proceeding
          made or brought against a 360 Degree Indemnified Party by a third party alleging or arising out of: (a) your or your
          End Users’ breach of Section 2.2 (Customer Responsibilities) or (b) any Customer Services infringing or
          misappropriating such third party’s intellectual property rights (collectively, “<strong><em>Customer Indemnifiable
              Claims</em></strong>”). You will indemnify 360 Degree from any fines, penalties, damages, attorneys’ fees, and
          costs awarded against a 360 Degree Indemnified Party or for settlement amounts that you approve for a Customer
          Indemnifiable Claim. The Customer agrees to indemnify, defend, and hold harmless 360 Degree from and against any
          penalties, fines, charges, or regulatory fees, including any associated costs, incurred by 360 Degree as a result of
          the Customer's use of the services or due to the Customer’s failure to comply with any applicable laws, regulations,
          or industry standards, whether local, national, or international. </p>
        <p>6.3 Conditions of Indemnification. </p>
        <p>As a condition of the foregoing indemnification obligations: (a) the indemnified party (“<strong><em>Indemnified
              Party</em></strong>”) will promptly notify the indemnifying party (“<strong><em>Indemnifying Party</em></strong>”)
          of any Customer Indemnifiable Claim or 360 Degree Indemnifiable Claim (individually or collectively referred to herein
          as a “<strong><em>Claim</em></strong>”)in writing; provided, however, that the failure to give prompt written notice
          will not relieve Indemnifying Party of its obligations hereunder, except to the extent that Indemnifying Party was
          actually and materially prejudiced by such failure; (b) Indemnifying Party will have the sole authority to defend or
          settle a Claim; and (c) Indemnified Party will reasonably cooperate with Indemnifying Party in connection with
          Indemnifying Party’s activities hereunder, at Indemnifying Party’s expense. The Indemnified Party reserves the right,
          at its own expense, to participate in the defense of a Claim. Notwithstanding anything herein to the contrary, the
          Indemnifying Party will not settle any Claim for which it has an obligation to indemnify under this Section 6
          admitting liability or fault on behalf of the Indemnified Party, nor create any obligation on behalf of the
          Indemnified Party without the Indemnified Party’s prior written consent, which will not be unreasonably withheld,
          conditioned, or delayed.</p>
        <p>6.4 Exclusive Remedy. This Section 6 states the Indemnifying Party’s sole liability to, and the Indemnified Party’s
          exclusive remedy against, the other party for any third-party claims. 360 Degree shall not be held liable for any
          loss, disruption, or hindrance in Client’s Salesforce Platform that arises due to technical issues, failures, or
          problems inherent in the Salesforce platform itself or any third-party platform upon which the services depend.</p>
        <h3><a id="_nri7hls8lsz6"></a><a id="_Toc94352194"></a><strong>7. Limitation of Liability</strong></h3>
        <p>7.1 LIMITATION ON INDIRECT, CONSEQUENTIAL, AND RELATED DAMAGES. </p>
        <p>IN NO EVENT WILL EITHER PARTY OR ITS AFFILIATES HAVE ANY LIABILITY ARISING OUT OF OR RELATED TO THIS AGREEMENT FOR
          ANY LOST PROFITS, REVENUES, GOODWILL, OR INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL, COVER, LOST DATA, BUSINESS
          INTERRUPTION, OR PUNITIVE DAMAGES, WHETHER AN ACTION IS IN CONTRACT OR TORT AND REGARDLESS OF THE THEORY OF LIABILITY,
          EVEN IF A PARTY OR ITS AFFILIATES HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES OR IF A PARTY’S OR ITS
          AFFILIATES’ REMEDY OTHERWISE FAILS OF ITS ESSENTIAL PURPOSE. THE FOREGOING DISCLAIMER WILL NOT APPLY TO THE EXTENT
          PROHIBITED BY LAW. </p>
        <p>360 Degree shall not be liable in the event that any unauthorised/unapproved and similar/ identical platform is
          developed independently by any third party. The Client acknowledges that 360 Degree is not responsible for monitoring,
          preventing, or restricting the creation of similar platforms.</p>
        <p> 7.2 LIMITATION OF LIABILITY. </p>
        <p>IN NO EVENT WILL THE AGGREGATE LIABILITY OF EITHER PARTY TOGETHER WITH ALL OF ITS AFFILIATES ARISING OUT OF OR
          RELATED TO THIS AGREEMENT EXCEED THE AMOUNTS PAID OR PAYABLE BY YOU AND YOUR AFFILIATES HEREUNDER FOR THE SERVICES
          GIVING RISE TO THE LIABILITY THE FOREGOING LIMITATION WILL APPLY WHETHER AN ACTION IS IN CONTRACT OR TORT AND
          REGARDLESS OF THE THEORY OF LIABILITY.</p>
        <p>7.3 EXCEPTIONS TO THE LIMITATION OF LIABILITY. </p>
        <p>NOTWITHSTANDING ANYTHING TO THE CONTRARY IN SECTION 7.1 (LIMITATION ON INDIRECT, CONSEQUENTIAL, AND RELATED DAMAGES)
          AND SECTION 7.2 (LIMITATION OF LIABILITY), THE LIMITATIONS IN SECTION 7.1 AND SECTION 7.2 DO NOT APPLY TO (a) YOUR
          BREACH OF SECTION 2.2 (CUSTOMER RESPONSIBILITIES); (b) YOUR AND YOUR AFFILIATES’ BREACH OF SECTION 3 (FEES AND PAYMENT
          TERMS); OR (c) AMOUNTS PAYABLE PURSUANT TO A PARTY’S INDEMNIFICATION OBLIGATIONS UNDER SECTION 6 (MUTUAL
          INDEMNIFICATION).</p>
        <h3><a id="_uizhskpvyeml"></a><a id="_Toc2034475966"></a><strong>8. Term, Termination, and Survival</strong></h3>
        <p>8.1 Agreement Term. This Agreement will commence on the
      Effective Date and continue until terminated in accordance with Section 8.2 (Termination) (“<em>Term</em>”).</p>
        <p>The Customer in the initial one year subscription term with 360 degree, no refund shall be made to the customer. The
          term shall automatically renew for successive one (1) year terms unless the Customer provides written notice of
          cancellation at least thirty (30) days prior to the end of the one year term.</p>
        <p>Auto-renewal applies unless terminated in writing 30 days prior; fees may increase annually and will be informed to
          client in written.<br>Any Early termination by client without any cause of breach will incurs 100% of the remaining
          contract value as a penalty and client hereby agree to pay the remaining contract value.</p>
        <p>8.2 Termination</p>
        <p>8.2.1 For Convenience. </p>
        <p>Either party may terminate this Agreement for convenience by providing the other party with at least thirty (30) days
          prior written notice. Notwithstanding the preceding sentence, if there are any Order Form(s) in effect, this Agreement
          will not terminate until all such Order Form(s) have expired or have been terminated in accordance with the terms
          therein.</p>
        <p>8.2.2 Material Breach. </p>
        <p>Either party may terminate this Agreement (including all Order Form(s) and Services that are in effect) in the event
          the other party commits any material breach of this Agreement and fails to remedy such breach within fifteen (15) days
          of the date of written notice of such breach. For the avoidance of doubt, a breach of the 360 Degree Acceptable Use
          Policy will be considered a material breach of this Agreement. If 360 Degree terminates this Agreement because of your
          material breach, then 360 Degree will also close your accounts.</p>
        <p>8.2.3 Insolvency. </p>
        <p> Subject to applicable law, either party may terminate this Agreement immediately by providing written notice in the
          event of the other party’s liquidation, commencement of dissolution proceedings, or any other proceeding relating to a
          receivership, failure to continue business, assignment for the benefit of creditors, or becoming the subject of
          insolvency or bankruptcy.</p>
        <p>8.3 Survival. </p>
        <p>Upon termination of this Agreement, the terms of this Section 8.3 and the terms of the following Sections will
          survive: Section 2.1(c) (regarding the 360 Degree Security Overview), Section 3 (Fees and Payment Terms), Section 4
          (Ownership, Customer Data if any stored by 360 degree, and Confidentiality), Section 5.5 (Disclaimer), Section 6
          (Mutual Indemnification), Section 7 (Limitation of Liability), Section 9 (General), and any applicable terms in
          Section 10 (Additional Terms).</p>
        <p>8.4 Payment Obligation</p>
        <p>Upon termination, Customer will pay 360 Degree Cloud any unpaid Subscription Fees, Professional Services Fees, and
          other amounts that have accrued prior to the effective date of the termination. In no event will termination relieve
          the Customer of its obligation to pay any undisputed fees payable to 360 Degree Cloud for the period prior to the
          effective date of termination.</p>
        <h3><a id="_ktekk258iplw"></a><a id="_Toc829177376"></a><strong>9. General</strong></h3>
        <p>9.1 Affiliates of Customer </p>
        <p>Your Affiliates may use the Services under and in accordance with the terms of this Agreement. You represent and
          warrant that you have sufficient rights and the authority to make this Agreement binding upon each of your Affiliates.
          You and each of your Affiliates will be jointly and severally liable for the acts and omissions of such Affiliate in
          connection with this Agreement and such Affiliate’s use of the Services. Only you will bring any claim against 360
          Degree on behalf of your Affiliates.</p>
        <p>9.1.1 Affiliates of 360 Degree. An Affiliate of 360 Degree may provide the Services, or a portion thereof, to you or
          your Affiliates, as applicable, in accordance with this Agreement and any applicable Order Form(s) with such Affiliate
          of 360 Degree. 360 Degree will (a) be responsible for the Services its Affiliates provide and (b) not be relieved of
          its obligations under this Agreement if its Affiliates provide the Services or a portion thereof. 360 Degree will
          enforce the terms of this Agreement relating to the Services its Affiliates provide. Notwithstanding anything to the
          contrary in this Agreement, an Affiliate of 360 Degree may directly bill you or your Affiliates, as applicable, (i)
          for the Services it provides or (ii) solely as a billing agent for 360 Degree or the Affiliate of 360 Degree providing
          the Services, as applicable.</p>
        <p>9.2 Assignment </p>
        <p>Neither party may assign or otherwise transfer this Agreement or any applicable Order Form(s), in whole or in part,
          whether by operation of law or otherwise, without the other party’s prior written consent (not to be unreasonably
          withheld or delayed) Notwithstanding the foregoing, either party may assign this Agreement or any applicable Order
          Form(s), in whole or in part, without consent to (a) merger, acquisition, a successor to all or part of its assets or
          business or (b) an Affiliate. Any attempted assignment or transfer by either party in violation hereof will be void.
          Subject to the foregoing, this Agreement and any applicable Order Form(s) will be binding on the parties and their
          respective successors and permitted assigns. </p>
        <p>9.3 Relationship </p>
        <p>Each party is an independent contractor in the performance of each and every part of this Agreement. Nothing in this
          Agreement is intended to create or will be construed as creating an employer-employee relationship or a partnership,
          agency, joint venture, or franchise. Each party will be solely responsible for all of its employees and agents and its
          labor costs and expenses arising in connection therewith and for any and all claims, liabilities, damages, or debts of
          any type whatsoever that may arise on account of its activities, or those of its employees and agents, in the
          performance of this Agreement. Neither party has the authority to commit the other party in any way and will not
          attempt to do so or imply that it has the right to do so.</p>
        <p>9.4 No Third-Party Beneficiaries. This Agreement does not confer any benefits on any third party (including your End
          Users or an Affiliate) unless it expressly states that it does.</p>
        <p>9.5 Notices. Notices to 360 Degree will be provided via email to <a href="mailto:legal@360degreecloud.com"
            target="_blank" rel="noopener noreferrer">legal@360degreecloud.com</a> All notices to you will be provided via email
          to the relevant contact(s) you designate in your account.</p>
        <p>9.6 Governing Law and Attorneys’ Fees. </p>
        <p>This Agreement will be governed by and interpreted according to the laws of the applicable state or country
          identified below without regard to conflicts of laws and principles that would cause the application of the laws of
          another jurisdiction. This Agreement will not be governed by the United Nations Convention on Contracts for the
          International Sale of Goods. Except as provided in Section 9.7 (Dispute Resolution), any legal suit, action, or
          proceeding arising out of or relating to this Agreement or the Services will be instituted in the applicable courts
          identified below and the parties hereby consent to the personal jurisdiction of these courts. In the event of any
          adjudication of any dispute under this Agreement, the prevailing party in such a legal suit, action, or proceeding
          will be entitled to reimbursement of its attorneys’ fees and related costs by the non-prevailing party.</p>
        <table>
          <tbody>
            <tr>
              <td>
                <p><strong>If you are domiciled in:</strong></p>
              </td>
              <td>
                <p><strong>Governing law:</strong></p>
              </td>
              <td>
                <p><strong>Courts with personal jurisdiction:</strong></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>United States of America </p>
              </td>
              <td>
                <p>State of California</p>
              </td>
              <td>
                <p>State or federal courts of San Francisco, California, United States of America</p>
              </td>
            </tr>
            <tr>
              <td>
                <p>Any country within the European Economic Area the United Kingdom or Switzerland, </p>
              </td>
              <td>
                <p>England and Wales</p>
              </td>
              <td>
                <p>Courts of London, England, United Kingdom</p>
              </td>
            </tr>
            <tr>
              <td>
                <p>Any country within the Asia-Pacific region, other than India</p>
              </td>
              <td>
                <p>Singapore</p>
              </td>
              <td>
                <p>Courts of Singapore</p>
              </td>
            </tr>
            <tr>
              <td>
                <p>India</p>
              </td>
              <td>
                <p>Indian Laws</p>
              </td>
              <td>
                <p>Faridabad District Court</p>
              </td>
            </tr>
            <tr>
              <td>
                <p>Canada </p>
              </td>
              <td>
                <p>Canadian Laws </p>
              </td>
              <td>
                <p>Courts of Canada </p>
              </td>
            </tr>
          </tbody>
        </table>
        <p> </p>
        <p>9.7 Dispute Resolution</p>
        <p>In the event of any dispute, claim, or controversy in connection with this Agreement (other than for disputes,
          claims, or controversies related to the intellectual property of a party) (collectively,
          “<strong><em>Disputes</em></strong>”), each party’s senior representatives will, in good faith, attempt to resolve a
          Dispute. If the parties are unable to resolve a Dispute within thirty (30) days or within such other time period as
          the parties may agree in writing, then the parties may commence binding arbitration under JAMS’ Comprehensive
          Arbitration Rules and Procedures. If the parties are in the territories of India, then parties may commence binding
          arbitration under the Arbitration and Conciliation Act,1996. The parties will share equally the fees and expenses of
          the JAMS arbitrator or Indian Arbitrator. The arbitration will be conducted by a sole arbitrator mutually agreed to
          between the parties or, failing that, under the then prevailing rules. Judgment on the award rendered by the
          arbitrator may be entered in any court of competent jurisdiction. The arbitrator will have the authority to grant
          specific performance or any other equitable or legal remedy, including provisional remedies. Each party will be
          responsible for its own incurred expenses arising out of any dispute resolution procedure. Any arbitration proceedings
          will take place in the English language in (a) San Francisco, California, if you are domiciled in United States of
          America (b) London, England, if you are domiciled in any European Economic Area, United Kingdom or Switzerland, (c)
          Singapore, if you are domiciled in Australia, Japan, China and Indonesia, (d) Faridabad, if you are domiciled in
          India. (e) Toronto, if you are domiciled in Canada.</p>
        <p>9.8 Force Majeure. </p>
        <p>No failure, delay, or default in the performance of any obligation of a party will constitute an event of default or
          breach of this Agreement to the extent that such failure to perform, delay, or default arises out of a cause, existing
          or future, that is beyond the control and without negligence of such party, including action or inaction of
          governmental, civil or military authority, fire, strike, lockout, or other labour dispute, flood, terrorist act, war,
          riot, theft, earthquake, or other natural disasters (collectively, “<strong><em>Force Majeure Events</em></strong>”).
          The party affected by a Force Majeure Event will take all reasonable actions to minimize the consequences of any such
          event.</p>
        <p>9.9 Waiver and Order of Precedence. </p>
        <p>No failure or delay by either party in exercising any right or enforcing any provision under this Agreement will
          constitute a waiver of that right or provision, or any other provision. Titles and headings of sections of this
          Agreement are for convenience only and will not affect the construction of any provision of this Agreement. In the
          event of any conflict or inconsistency among the following documents, the order of precedence will be: (1) the
          applicable Order Form(s), (2) the 360 Degree Data Protection Addendum, (3) the terms set forth in the body of this 360
          Degree Terms of Service, (4) the 360 Degree Acceptable Use Policy, (5) any other terms incorporated by reference
          herein or any other exhibits or attachments hereto, and (6) the applicable Documentation.</p>
        <p>9.10 Severability</p>
        <p>If any provision of this Agreement is held by a court or other tribunal of competent jurisdiction to be
          unenforceable, such provision will be limited or eliminated to the minimum extent necessary to render such provision
          enforceable and, in any event, the remainder of this Agreement will continue in full force and effect.</p>
        <p>9.11 Data Storage</p>
        <p><b>9.11.1. No Access to Message Content or Recipient Information</b><br>
360 Degree Cloud does not access, view, record, or retain the content of any messages, calls, or communications transmitted through its platform. The Company does not know what message has been sent or to whom. Message content and recipient data remain fully contained within the Customer’s Salesforce environment or the communication network provider’s infrastructure.</p>

<p><b>9.11.2 Limited System-Level Data Access</b><br>
The Company’s systems may process and temporarily access non-personal, system-level metadata (such as message counts, timestamps, or delivery status) solely for billing, support, or service performance monitoring (<b>“Permitted Technical Data”</b>). Such metadata is not linked to any identifiable person or communication content.</p>

<p><b>9.11.3 No Retention or External Storage</b><br>
The Company does not store Customer Data or message content on any external servers. All Customer Data remains within the Customer’s Salesforce environment. Any access to Permitted Technical Data is transient and automatically deleted once the purpose (such as billing or error resolution) is fulfilled.</p>

<p><b>9.11.4 Compliance and Legal Framework</b><br>
The Company acts as a Data Processor and intermediary under applicable Indian laws, including the Digital Personal Data Protection Act, 2023. Under the DPDP Act, the Company’s role and liability are limited strictly to the extent of processing basic personal data necessary for legitimate business operations, including Client name, contact number, and billing-related details. Such data is collected, used, and retained solely for billing, support, and account management purposes, and is handled in compliance with the principles of lawful, fair and transparent purpose limitation, data minimization, and storage limitation under the DPDP Act.</p>

<p>The Company does not process or store any communication content, recipient details, or other personal data transmitted through its platform. The Company does not engage in any profiling, data analytics, or secondary use of Client Data.</p>

<p>The Company is further entitled to safe-harbour protection under the Information Technology Act, 2000, as it does not initiate, select, modify, or determine the transmission of any message or data. Its functions are limited to automated routing and performance of services as configured within the Customer’s Salesforce environment.</p>

<p><b>9.11.5 Customer Ownership and Control</b></p>
<p>(a) The Customer shall be solely responsible for the configuration, operation, and management of the Services within its Salesforce environment, including the accuracy, integrity, and protection of all Customer Data processed or transmitted through the platform.</p>
<p>(b) The Client shall implement and maintain appropriate technical and organizational measures to ensure the security, confidentiality, and lawful processing of personal data, including adequate access controls, encryption, data retention policies, and user authentication mechanisms.</p>
<p>(c) The Client acknowledges that 360 Degree Cloud acts only as a technology intermediary and shall not be responsible or liable for any data loss, unauthorized access, corruption, disclosure, or destruction of Customer Data occurring within the client’s Salesforce environment or due to third-party systems, integrations, or networks.</p>

<p><b>9.11.6 Limitation of Liability and Indemnity</b></p>
<p>(a) The Customer acknowledges that it is solely responsible for the accuracy, integrity, and security of its data within its Salesforce environment.</p>
<p>(b) 360 Degree Cloud shall not be liable for any data loss, unauthorized access, corruption, or disclosure of Customer Data occurring within the Customer’s Salesforce environment or due to third-party systems, integrations, or networks.</p>
<p>(c) The Customer shall be solely responsible for implementing adequate data backup, access controls, and security measures within its Salesforce instance.</p>
<p>(d) 360 Degree Cloud shall not be liable for any direct, indirect, incidental, consequential, or special damages, including but not limited to loss of data, business interruption, goodwill, or profits, arising from or in connection with the use of its Services.</p>
<p>(e) The Customer agrees to indemnify, defend, and hold harmless 360 Degree Cloud, its affiliates, officers, and employees from and against any and all third-party claims, damages, liabilities, costs, and expenses (including legal fees) arising out of or relating to (i) the Customer’s data, (ii) its use of the Services, or (iii) any breach of this Agreement or applicable law.</p>

<p><b>9.12 Entire Agreement</b><br>
This Agreement will constitute the entire agreement between the parties with respect to the subject matter hereof and supersedes all prior and contemporaneous understandings, proposals, statements, sales materials, presentations, or non-disclosure or other agreements, whether oral or written. No oral or written information or advice given by 360 Degree, its agents, or its employees will create a warranty or in any way increase the scope of the warranties or obligations in this Agreement. The parties agree that any term or condition stated in your vendor registration form or registration portal or in any purchase order document or similar document will be construed solely as evidence of your internal business processes and the terms and conditions contained therein will be void and have no effect with regard to this Agreement, even if accepted by 360 Degree or executed by the parties after the Effective Date.</p>

<p><b>9.13 Beta offerings</b><br>
360 degree does not provide Beta or trial services unless expressly written and agreed upon by both parties. If both parties agree regarding the beta service, 360 degree cloud Technology is provided <b>“as-is”</b>, without any warranty. The 360 degree reserves the right, at its sole discretion, to modify, suspend, or discontinue any Beta or trial services at any time, without prior notice. Furthermore, 360 Degree shall not be responsible for providing training to the Client’s personnel on the use of the platform unless expressly agreed to in writing.</p>

        <h3><a id="_ikjyp3ersj62"></a><a id="_Toc643404327"></a><strong>10. Additional Terms</strong></h3>
        <p>10.1 United States - if you are domiciled in USA the following terms will apply </p>
        <p>10.1.1 Governing Law. </p>
        <p>Section 9.6 (Governing Law and Attorneys’ Fees) of this Agreement is hereby deleted in its entirety and replaced with
          the following: </p>
        <p><em>Governing Law. This Agreement will be governed by and interpreted according to (a) United States Federal law, if
            you are a United States Federal entity, or (b) the laws of the state in which you are located without regard to
            conflicts of laws and principles that would cause the application of the laws of another jurisdiction, if you are
            not a United States Federal entity. This Agreement will not be governed by the United Nations Convention on
            Contracts for the International Sale of Goods. </em></p>
        <p>10.1.2 Dispute Resolution. Section 9.7 (Dispute Resolution) of this Agreement is hereby deleted in its entirety and
          replaced with the following: </p>
        <p><em>Except as otherwise specified in applicable law, in the event of a dispute, claim, or controversy arising out of
            or in connection with this Agreement or the breach, termination, enforcement, interpretation, or validity thereof
            (other than for disputes, claims, or controversies related to the intellectual property of a party) (collectively,
            “Disputes”), each party’s senior representatives will engage in good faith negotiations with the other party’s
            senior representatives to amicably resolve a Dispute. If the parties are unable to resolve a Dispute within thirty
            (30) days after the first request to engage in good faith negotiations or within such other time period as the
            parties may agree to in writing, then either party may seek relief as set forth in Section 9.6 (Governing Law and
            Attorneys’ Fees). </em></p>
        <p>10.2 European Electronic Communications Code. </p>
        <p>If you are a microenterprise, small enterprise, or not for profit organisation, and 360 degree provides you the
          Services within the European Economic Area or United Kingdom, you agree you have read and accept the European
          Electronic Communications Code Rights Waiver available at </p>
        <p>10.3 Brazil. If you are domiciled in Brazil, the following terms apply:</p>
        <p>10.3.1 Dispute Resolution. Section 9.7 (Dispute Resolution) of this Agreement is hereby deleted in its entirety and
          replaced with the following: </p>
        <p><em>In the event of a dispute, claim, or controversy arising out of or in connection with this Agreement or the
            breach, termination, enforcement, interpretation, or validity thereof (collectively, “Disputes”), each party’s
            senior representatives will engage in good faith negotiations with the other party’s senior representatives to
            amicably resolve a Dispute. If the parties are unable to resolve a Dispute within thirty (30) days after the first
            request to engage in good faith negotiations or within such other time period as the parties may agree to in
            writing, then either party may commence (a) litigation proceedings if the amounts being sought are less than two
            hundred thousand dollars ($200,000 USD) or (b) binding arbitration under the Rules of CAM-CCBC if the amounts being
            sought are greater than or equal to two hundred thousand dollars ($200,000 USD). To the extent a Dispute is
            submitted for arbitration, the parties will share equally the fees and expenses of the CAM-CCBC arbitrator. The
            arbitration will be conducted by a sole arbitrator chosen by the mutual agreement of the parties or, failing that,
            by CAM-CCBC under its then prevailing rules. Judgment on the award rendered by the arbitrator may be entered in any
            court of competent jurisdiction. The arbitrator will have the authority to grant specific performance or any other
            equitable or legal remedy, including provisional remedies. Each party will be responsible for its own incurred
            expenses arising out of any dispute resolution procedure. Any arbitration proceedings will take place in the English
            language in the City and State of São Paulo, Brazil.</em></p>
        <p>10.4 Japan. If you are domiciled in Japan, the following terms apply:</p>
        <p>10.4.1 Intended Use. The Services are intended for business use by corporate or business entities, and you agree that
          you will not use the Services for any personal or individual use.</p>
        <p>10.4.2 Required Information and Verification Process. Depending on the Services you use, you may be required to
          submit copies of government-issued ID documents to 360 degree and/or complete verification processes (e.g., via post)
          as required under applicable law or regulation, including, without limitation, the Act on Prevention of Transfer of
          Criminal Proceeds and the Telecommunications Business Act.</p>
        <p>10.4.3 Taxes and Communications Surcharges. Taxes, as defined in Section 3.4 (Taxes) of this Agreement, will include
          Japanese consumption tax. The universal service fee and the telephone relay service fee charged by telecommunication
          providers (e.g., carriers) will be borne by you as part of the Communications Surcharges set forth in Section 3.4
          (Communications Surcharges) of this Agreement.</p>
        <p>10.4.4 Currency. All Fees are payable in Japanese Yen, except as otherwise set forth in writing, including in an
          applicable Order Form(s) or an invoice to the extent you procure the Services without an Order Form.</p>
        <p>10.4.5 Intellectual Property Rights. Any intellectual property rights vested by 360 degree under this Agreement will
          include the rights set forth in Article 27 (Right of Adaptation) and 28 (Original Author’s Right in Derivative Works)
          of the Copyright Act of Japan, Act No. 48 of May 6, 1970. Further, you agree not to exercise against 360 degree, or
          any other third parties designated by 360 degree, any moral rights you may have in any contents, including, without
          limitation, the feedback or suggestions you or your End Users provide regarding the Services that 360 degree is
          entitled to exploit under this Agreement.</p>
        <p>10.4.6 Anti-Social Forces. Each party represents and warrants that it (a) is not an anti-social force (meaning here
          and hereinafter, gangsters, right-wing groups, anti-social forces, and others equivalent thereto) and (b) does not
          have any exchange or involvement with anti-social forces, such as cooperation or involvement in the maintenance,
          operation, or management of anti-social forces, through funding, or other means.</p>
        <p>10.4.7 Dispute Resolution. Section 9.7 (Dispute Resolution) of this Agreement is hereby deleted in its entirety and
          replaced with the following:</p>
        <p><em>In the event of a dispute, claim, or controversy arising out of or in connection with this Agreement or the
            breach, termination, enforcement, interpretation, or validity thereof (other than for disputes, claims, or
            controversies related to the intellectual property of a party) (collectively, “Disputes”), each party’s senior
            representatives will engage in good faith negotiations with the other party’s senior representatives to amicably
            resolve a Dispute. If the parties are unable to resolve a Dispute within thirty (30) days after the first request to
            engage in good faith negotiations or within such other time period as the parties may agree to in writing, then
            either party may seek relief as set forth in Section 9.6 (Governing Law and Attorneys’ Fees).</em></p>
        <p>10.4.8 Conflict. In the event of any conflict between this Section 10.4 and any other terms of this Agreement, this
          Section 10.4 will prevail.</p>  
  
      
      
      </div>


      <div id="tab21" class="tab-content"><h2 style="text-transform: uppercase;">ACCEPTABLE USE OF POLICY</h2>
        
  
        <p>This Acceptable Use Policy (“<em>AUP</em>”) describes rules that apply to any party (“<em>you</em>”, “<em>your</em>”,
            “<em>yours</em>”, or “<em>Customer</em>”) using any products and services provided by 360 Degree or any of its
            affiliates (“<em>Services</em>”) and any user of the Services, including via any products and services provided by
            Customer (“<em>End User</em>”). 360 Degree together with its affiliates will be referred to as <em>"360 Degree"
            </em>in this AUP. </p>
        <h2>GENERAL TERMS</h2>
        <p>I.The Customer agrees to provide timely and complete responses to any requests made by 360 Degree Cloud for
            documentation, data, or clarification in connection with the Customer’s or End Users’ use of the Services. Both
            parties shall maintain compliance with all applicable laws, rules, regulations, and directives issued by relevant
            governmental or regulatory authorities, including but not limited to the Department of Telecommunications (DoT),
            Telecom Regulatory Authority of India (TRAI), and other agencies with jurisdiction over the Services. 360 Degree
            Cloud shall obtain and maintain all permits, licenses, and approvals required to legally provide its Services, and
            both parties shall promptly notify each other of any regulatory changes that may materially impact the Services.</p>
        <p>II. The Customer further agrees to abide by this Acceptable Use Policy ("AUP"), which may be amended by 360 Degree
            Cloud from time to time upon reasonable notice via email, the Customer’s account dashboard, or by posting an updated
            version on the Company’s website. The Customer is solely responsible for ensuring that its End Users are aware of
            and comply with the terms of this AUP. Violations by End Users shall be deemed violations by the Customer.</p>
        <p>III. The Services may not be used to store, transmit, or facilitate access to content or communications that are
            illegal, harmful, unwanted, inappropriate, or otherwise objectionable, including without limitation content that 360
            Degree Cloud, at its sole discretion, deems to be false or misleading; inciting or promoting hate or violence; or
            posing a threat to public safety. Use of the Services by or on behalf of hate groups or to promote such content is
            strictly prohibited.</p>
        <p>IV. The Customer shall not use the Services to engage in any activity that is unlawful, deceptive, infringes on the
            rights of others, or is otherwise damaging to the operations, security, or reputation of 360 Degree Cloud.
            Prohibited conduct includes but is not limited to: violations of applicable laws or telecommunications guidelines,
            including regulations requiring consent to record, collect, or transmit communications; failure to honor opt-out or
            unsubscribe requests; falsification of identity or origin in any message or transmission; and unauthorized access to
            or use of the Services.</p>
        <p>V. The Customer shall not attempt to bypass, disable, or exploit service limitations, security mechanisms, or
            filtering tools. Attempts to perform denial-of-service (DoS) attacks, exploit vulnerabilities, or introduce harmful
            code, malware, bots, or automated systems into the Services are expressly prohibited. Any such conduct shall be
            considered a material breach of this Agreement and may result in immediate suspension or termination of Services
            without further notice.</p>
        <p>VI. The Customer is solely responsible for evaluating whether the Services provide sufficient technical and legal
            safeguards for the Customer’s intended use, including but not limited to compliance with any data protection or
            privacy laws prior to transmitting, processing, or permitting End Users to transmit or process any data via the
            Services.</p>
        <p>360 Degree Cloud reserves the right to suspend or restrict access to the Services if the Customer or its End Users
            are found to be in breach of any term set forth herein. The Customer understands and agrees that continued use of
            the Services is contingent upon ongoing compliance with all applicable laws, this Agreement, and all incorporated
            policies, including this AUP.</p>
        <p>Opt-Out Compliance Responsibility Clause</p>
        <p> In the event that any end-user client opts out of receiving messages or calls from the Client’s texting or calling, it shall be the sole responsibility of the Client to ensure that no further communications are sent to such end-user. The Client must implement and maintain appropriate mechanisms to honor all opt-out requests in a timely and effective manner.
          Should any issue arise, or if a breach of this obligation is discovered, the Client is required to notify 360 Degree Cloud immediately upon such discovery. 360 Degree Cloud shall bear no liability or responsibility for any non-compliance or breach resulting from the Client’s failure to adhere to opt-out requests or failure to notify 360 Degree Cloud of such incidents.</p>
        <h2>INDIA</h2>
        <p>I.The Customer agrees that all services availed from 360 Degree Cloud shall be used solely for lawful and valid
            business purposes. In case of SMS, Whatsapp and other services the Customer shall not use the services to generate
            or transmit any calls or SMS messages that violate applicable laws, including but not limited to, laws governing
            unsolicited commercial communications or any other relevant telecom regulations.For the purposes of this clause,
            “valid purpose” shall mean that calls or SMS messages are sent exclusively to recipients with whom the Customer has
            conducted some form of business or transactional engagement, and where the Customer possesses valid, verifiable
            opt-in proof for such communication. This opt-in proof must clearly demonstrate the recipient’s consent and must not
            be older than six (6) months from the date of communication.</p>
        <p>II.The Customer further agrees that, upon request by 360 Degree Cloud, such opt-in proof shall be furnished within
            forty-eight (48) hours. Failure to provide valid proof may result in suspension or termination of services at the
            sole discretion of 360 Degree Cloud.</p>
        <p>III. In the event that the Customer fails to comply with the aforementioned requirements, the Customer shall, in each
            instance of non-compliance, be liable to bear the penalty as determined at the sole discretion of 360 Degree.</p>
        <p><strong>COUNTRIES OTHER THAN INDIA </strong>- The Customer acknowledges and agrees to comply with all applicable
            regulations, industry standards, and 360 Degree Cloud’s policies regarding the use of messaging services, including
            but not limited to the 10DLC (10-Digit Long Code) messaging framework under the North American Numbering Plan
            (NANP). The Customer further agrees to ensure that its End Users adhere to the same standards and obligations:</p>
        <p>I. The Customer shall not use, nor permit any Message Sender or End User to use, any 10-digit NANP telephone number
            for messaging purposes unless such number has been verified and assigned to the Customer or its authorized End User.
            In the event messages are sent prior to such verification, a penalty of <strong>$10,000 (USD)</strong> shall be
            levied per violation.</p>
        <p>II. The Customer shall not engage in or facilitate any activity that constitutes evasion of 10DLC messaging rules,
            including but not limited to snowshoeing, dynamic routing to obscure origin, spam filter evasion, or use of
            unregistered or unapproved messaging campaigns. Each instance of such evasion shall result in a penalty of
            <strong>$1,000 (USD)</strong>.</p>
        <p>III. The Customer agrees to refrain from transmitting, enabling, or permitting the transmission of any content that
            violates applicable laws, industry content standards, or the policies of 360 Degree Cloud, including but not limited
            to content that is false, misleading, phishing-related, spam, or falls under SHAFT categories (Sex, Hate, Alcohol,
            Firearms, Tobacco). Upon a third and each subsequent content violation by the same Content Provider, a penalty of
            <strong>$10,000 (USD)</strong> shall apply per incident.</p>
      
      
      </div>
<div id="tab22" class="tab-content">
<h2>HOW 360 DEGREE CLOUD IS PREPARING TO PROTECT YOUR DATA</h2>
       <h2>OVERVIEW</h2>
    <p>At 360 Degree Cloud, customer trust is our top priority. We deliver services to hundreds of active customers, including small and medium enterprises in India and abroad. Our customers trust us with some of their most sensitive information.</p>
    
    <p>360 Degree Cloud continually monitors the evolving privacy regulatory and legislative landscape to identify changes and determine what tools our customers might need to meet their compliance needs depending upon their applications. We recommend that customers with questions regarding 360 Degree Cloud data privacy or its data protection regulations contact their account manager first. 360 Degree Cloud is not in the position to provide legal advice, and we recommend that customers consult their legal counsel if they have legal questions.</p>
    
    <p>This Policy establishes the 360 Degree Cloud group's approach to compliance with applicable data protection laws when processing Personal Data <strong>solely as a Data Processor on behalf of its customers</strong>.</p>
    
    <p>The standards described in the Policy are worldwide standards that apply to all Group Members when processing any personal data as a controller. As such, this Policy applies regardless of the origin of the personal data that we process, the country in which we process personal data, or the country in which a Group Member is established.</p>
    
    <h2>USEFUL DEFINITIONS</h2>
    
    <p><strong>"Controller"</strong> means the natural or legal person, public authority, agency or other body which, alone or jointly with others, determines the purposes and means of the Processing of Personal Data.</p>
    
    <p><strong>"Data Protection Law"</strong> means all applicable legislation relating to data protection and privacy including without limitation the EU Data Protection Directive 95/46/EC and all local laws and regulations which amend or replace any of them, including the GDPR, together with any national implementing laws in any Member State of the European Union or, to the extent applicable, in any other country, as amended, repealed, consolidated or replaced from time to time.</p>
    
    <p><strong>"Data Subject"</strong> means the individual to whom Personal Data relates.</p>
    
    <p><strong>"Instruction"</strong> means the written, documented instruction, issued by the Controller to the Processor, and directing the same to perform a specific action regarding Personal Data (including, but not limited to, depersonalizing, blocking, deletion, making available).</p>
    
    <p><strong>"Personal Data"</strong> means any information relating to an identified or identifiable individual where such information is contained within Customer Data and is protected similarly as personal data or personally identifiable information under applicable Data Protection Law.</p>
    
    <p><strong>"Personal Data Breach"</strong> means a breach of security leading to accidental or unlawful destruction, loss, alteration, unauthorized disclosure of, or access to, Personal Data transmitted, stored or otherwise processed.</p>
    
    <p><strong>"Processing"</strong> means any operation or set of operations which is performed on Personal Data, encompassing the collection, recording, organization, structuring, storage, adaptation or alteration, retrieval, consultation, use, disclosure by transmission, dissemination or otherwise making available, alignment or combination, restriction or erasure of Personal Data.</p>
    
    <p><strong>"Processor"</strong> means a natural or legal person, public authority, agency or other body which processes Personal Data on behalf of the Controller.</p>
    
    <h2>What is 360 Degree Cloud doing to get compliance ready?</h2>
    
    <p><strong>360 Degree Cloud has been working on a dedicated product roadmap that places customer consent, information security and data minimization at the very core of its service platform.</strong></p>
    
    <p><strong>We know that customers care deeply about privacy and data security. That's why 360 Degree Cloud gives you ownership and control over your content through simple, powerful tools that allow you to determine where your content will be stored, secure your content in transit and at rest, and manage your access to 360 Degree Cloud services and resources for your users. We also implement responsible and sophisticated technical and physical controls that are designed to prevent unauthorized access to or disclosure of your content.</strong></p>
    
    <p>We use appropriate security measures to protect the security of your personal information both online and offline. These measures vary based on the sensitivity of the personal information we collect, process and store and the current state of technology. We also take measures to ensure service providers that process personal data on our behalf also have appropriate security controls in place.</p>
    
    <p>Where Customers provide Personal Data, 360 Degree Cloud processes such Personal Data strictly on documented instructions of the Customer and solely for the purpose of providing the contracted services or meeting applicable legal or regulatory requirements imposed on the Customer.</p>
    
    <p>This section describes the technical and organisational measures implemented by 360 Degree Cloud to protect Personal Data against unauthorised access, disclosure, alteration, or misuse.</p>
    
    <p>If you want to know why/what data is collected and what will be use of your data, please visit our Privacy policy - <a href="https://360smsapp.com/privacy-policy/" target="_blank">https://360smsapp.com/privacy-policy/</a></p>
    
    <p>While no system can be completely risk-free, 360 Degree Cloud implements and continuously reviews appropriate technical and organisational measures in accordance with GDPR Article 32 to ensure a level of security appropriate to the risk, including protection against unauthorised or unlawful processing and against accidental loss, destruction or damage.</p>
    
    <p>But 360 Degree Cloud assures to protect the confidentiality of your data and protect from unauthorized use of your data. Additionally, you must keep your account password and not disclose them publicly or to unauthorized individuals - this includes accidentally distributing them in a binary or checking them into source control.</p>
    
    <h3>Three Core Parts of Our Communication Platform</h3>
    <h4>1. Customer Consent</h4>
    <p>Ensuring clear and specific consent for data collection and processing</p>
    <h4>2. Data Minimization</h4>
    <p>Holding only the bare minimum personal information needed</p>
    <h4>3. Information Security</h4>
    <p>Implementing robust security measures to protect your data</p>
    
    <h2>1) CUSTOMER CONSENT</h2>
    <p>If we collect and/or process personal information such as telephone numbers, IP Addresses, email ids, etc., then we must ensure that we do so only with clear and specific consent of our users.</p>
    
    <p>The onus is on us to ensure that our users know exactly what they are signing up for, so consider simplifying the language of your Terms of Service, clearly spelling out what personal data we intend to hold and process. Don't have that checkbox preselected and implement double opt-in for marketing communication.</p>
    
    <h3>Rights Granted to Every Client:</h3>
    <ol>
        <li>The right to be informed about what personal data you intend to maintain, why access to that data is required, and how you intend to process it.</li>
        <li>The right to access the personal data that you hold about them, at no extra cost.</li>
        <li>The right of rectify inaccuracies in their personal information.</li>
        <li>The right to erasure personal information from your systems, and third-party systems to which this data may have been propagated.</li>
        <li>The right to restrict processing of their personal data.</li>
        <li>The right to data portability</li>
        <li>The right to object to further processing of their personal data.</li>
        <li>Rights regarding automated decision making</li>
    </ol>
    
    <h2>2) DATA MINIMIZATION</h2>
    <p>A key theme that runs across all compliance is 'Data Minimization'. We should only hold the bare minimum personal information needed by us to offer your services effectively.</p>
    
    <p>360 Degree Cloud processes Personal Data strictly on a transient basis and does not persistently retain Customer Content or End-User Personal Data. Data minimisation controls are implemented by Customers within their own environments.</p>
    
    <p>Today, data storage is inexpensive, as a result, modern systems and products tend to maintain data in excess, and for longer periods of time. Also, we make sure to do a thorough audit of our data systems and logging strategy.</p>
    
    <h2>3) INFORMATION SECURITY</h2>
    <p>The policy requires businesses to take necessary measures to ensure a high level of information security.</p>
    
    <p>Where 360 Degree Cloud transiently processes Personal Data, appropriate technical and organisational safeguards are applied in accordance with GDPR Article 32.</p>
    
    <p>Access logs are maintained for operations carried out on the personal data of every client. Any data breach is communicated to impacted users quickly and transparently.</p>
    
    <p>We conduct regular vulnerability tests and annual penetration testing as part of our audits. We make sure suitable security measures are in place to ensure the confidentiality, integrity, and availability of Information. We also use pseudonymization through encryption and hashing to make sure all personal data is protected. We are taking appropriate technical and organizational measures to adequately protect Personal Data against accidental or unlawful destruction, loss, alteration, unauthorized disclosure, or access to Personal Data.</p>
    
    <p><strong>Data Protection Officers (DPO):</strong></p>
    <p>1) Mr. Rajeev Khare</p>
    <p>2) Prateek Narayan is our DPO’s</p>
    <p><strong>Being compliant to data privacy, here are the key initiatives and product features and details on how we are preparing to be compliant:</strong></p>
    
    <h2>KEY INITIATIVES AND PRODUCT FEATURES</h2>
    
    <h3>ENCRYPTED STORAGE FOR RECORDINGS AND TRANSCRIPTS</h3>
    <p>Where recordings or transcripts are processed as part of a service request, such data is handled in encrypted form and only within the duration required to execute the Customer's instructions. 360 Degree Cloud does not persistently store recordings or transcripts and processes such data solely in transient memory or Customer-controlled environments.</p>
    
    <h3>ARCHIVAL PROCESS</h3>
    <p>We shall also maintain Billing Detail Records (BDRs), Agreements, Work order records in its transactional databases for a period of 5 years only for the purpose of billing, accounting, etc. After 5 years, we shall delete the data that was not business critical and are archived for much longer time periods in 360 Degree Cloud's data warehouse.</p>
    
    <h3>PAYMENT DETAILS</h3>
    <p>360 Degree Cloud does not store, process or transmit any cardholder data. All payment transactions are handled exclusively by PCI-DSS compliant third-party payment service providers. 360 Degree Cloud receives only transaction confirmation references and does not have access to full payment credentials at any time.</p>
    
    <h3>KIDS' PRIVACY</h3>
    <p>We do not address anyone under the age of 13. Customers are responsible for ensuring lawful processing of children's Personal Data in accordance with applicable law. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
    
    <h3>FOR HOW LONG WE KEEP YOUR DATA</h3>
    <ol>
        <li>360 Degree Cloud does not define or control retention periods for Customer Personal Data. All retention, archival and deletion of Personal Data are determined and executed exclusively by the Customer within their own systems and third-party platforms selected by them.</li>
        <li>360 Degree Cloud processes Personal Data only on a transient basis and does not persistently retain Customer Content or End-User Personal Data beyond the duration necessary to execute the Customer's instructions.</li>
        <li>Where 360 Degree Cloud is required to maintain limited non-identifiable transactional or compliance records under applicable law (such as financial reconciliation references), such records do not contain Personal Data.</li>
    </ol>
    
    <h2>YOU CAN MANAGE YOUR OWN ACCOUNT</h2>
    <p>You can make various choices about your salesforce account data through the salesforce.com login account portal, such as accessing it, correcting it, deleting it, or updating your choices about how it is used, when you log into your sales force account.</p>
    
    <h3>1. Closing Your Account and Deletion</h3>
    <p>To request closure or deletion of your 360 Degree Cloud data, you can email us at <a href="mailto:legal@360degreecloud.com">legal@360degreecloud.com</a> or contact customer support. You should know that closure and/or deletion of your 360 Degree Cloud data will result in you permanently losing access to your data in the 360 Degree cloud database. Customers are solely responsible for deleting Personal Data from their own systems and third-party platforms. 360 Degree cloud does not take any responsibility for change in any data or application security at salesforce.com. Similarly, data, including personal information, associated with your 360 Degree Cloud's account we are required to maintain for legal purposes or for necessary business operations will be retained after service closure until no longer needed.</p>
    
    <h3>2. Promotional Communications</h3>
    <p>You can choose not to receive promotional emails from 360 Degree Cloud by following the unsubscribe/opt-out instructions in those emails. You can also opt-out by contacting Customer Support. Please note that even if you opt out of promotional communications, we may still send you non-promotional messages relating to things like updates to our terms of service or privacy notices, security alerts, billing and other notices relating to your access to or use of our products and services.</p>
    
    <h3>3. Cookies and Tracking Technologies</h3>
    <p>How you make choices about cookies and other tracking technologies depends on the type of cookie or tracking technology being used. We use "Cookies" to identify the areas of our website that you have visited. A Cookie is a small piece of data stored on your computer or mobile device by your web browser. We use Cookies to personalize the Content that you see on our website. Most web browsers can be set to disable the use of Cookies. However, if you disable Cookies, you may not be able to access functionality on our website correctly or at all. We never place Personally Identifiable Information in Cookies.</p>
    
    <p><strong>Note -</strong> If you are an end user of an application built on 360 Degree Cloud's platform and not a direct client of 360 Degree Cloud, you should direct requests relating to your personal information to the relevant application provider in accordance with the application provider's own privacy policy and cookies policy <a href="https://360degreecloud.com/cookie-policy" target="_blank">https://360degreecloud.com/cookie-policy</a>.</p>
    
    <h2>WE DON'T SHARE YOUR END USERS' PERSONAL DATA</h2>
    <p>We do not sell or allow your Data to be used by third parties for their own marketing purposes, unless you ask us to do this or give us your consent to do this. Further, we do not sell your or your end users' personal information (whether contained in Customer Usage Data or Customer Content). And we do not share it with third parties for their own marketing or other purposes, unless you instruct us to do so.</p>
    
    <h2>LOCATION OF YOUR DATA</h2>
    <p>360 Degree Cloud is in India, and our affiliated companies are located throughout the world. Depending on the scope of your interactions with 360 Degree Cloud, your personal information may be stored in or accessed from multiple countries, including India. Whenever we transfer personal information to other jurisdictions, we will ensure that the information is transferred in accordance with this Privacy Notice and as permitted by applicable data protection laws.</p>
    
    <h2>ACCESS AND CHOICE</h2>
    <p>As 360 Degree Cloud acts solely as a Data Processor, all decisions regarding the collection, use, disclosure, and configuration of Personal Data are determined exclusively by the Customer in their capacity as Data Controller. End Users should exercise their data protection rights directly with the relevant Customer in accordance with that Customer's privacy policy. 360 Degree Cloud will provide reasonable assistance to Customers to enable them to comply with applicable data protection obligations.</p>
    
    <h2>ACCOUNT DELETION PROCESS</h2>
    <p>Upon termination or closure of a Customer account, 360 Degree Cloud will disable access to the Services.</p>
    
    <p>360 Degree Cloud does not independently retain or archive Customer Personal Data. Customers remain solely responsible for deleting or retaining Personal Data within their own systems, and third-party platforms selected by them. Where required by applicable law, 360 Degree Cloud may retain limited non-identifiable operational or financial reference records that do not contain Personal Data.</p>
    
    <h2>COMPLAINT HANDLING</h2>
    <p>Enable individuals to raise data protection complaints and concerns via email at <a href="mailto:legal@360degreecloud.com">legal@360degreecloud.com</a>. 360 Degree Cloud will acknowledge receipt of a question, concern or complaint to the individual concerned within fifteen (15) working days, investigating and making a substantive response within one (1) month.</p>
    
    <h2>AUDIT AND INSPECTION RIGHTS & DUTIES</h2>
    <p>We have created our own internal process on how we respond and resolve complaints and requests from individuals related to concern or requirements. These rights include the right to information, right to rectification, right to access, right to erasure, right to restrict processing, right to data portability, right to object or right not to be subject to automated decision-making, including profiling.</p>
    
    <h2>COOPERATION WITH COMPETENT DATA PROTECTION AUTHORITIES</h2>
    <p>Where required, 360 Degree Cloud will make the necessary personnel available for dialogue with a competent data protection authority in relation to the Policies.</p>
    
    <h2>INTERNAL COMPLIANCE DEDICATED TO POLICY</h2>
    
    <h3>1. APPROPRIATE STAFF AND SUPPORT</h3>
    <p>Having appropriate staff and support to ensure and oversee privacy compliance throughout the business. The major responsibilities of that core team include:</p>
    <ol>
        <li>Ensuring that the Policies and other privacy-related policies, objectives and standards are defined and communicated.</li>
        <li>Providing clear and visible senior management support and resources for the Policies and for privacy objectives and initiatives in general.</li>
        <li>Evaluating, approving and prioritizing remedial actions consistent with the requirements of the Policies, strategic plans, business objectives and regulatory requirements.</li>
        <li>Periodically assessing privacy initiatives, accomplishments, and resources to ensure continued effectiveness and improvement.</li>
    </ol>
    
    <h3>2. PRIVACY TRAINING</h3>
    <p>To ensure that the staff is educated about the need to protect personal data in accordance with the controller and Processes. 360 Degree Cloud's Privacy team has overall responsibility for privacy training at 360 Degree Cloud, with input from colleagues from other functional areas, including Legal, Information Security, Data Compliance, HR and other departments, as appropriate. The Privacy team will review training from time to time to ensure it addresses all relevant aspects of the Policies and that it is appropriate for individuals who have permanent or regular access to personal data, who are involved in the processing of personal data or in the development of tools to process personal data.</p>
    
    <h3>3. DATA PROTECTION IMPACT ASSESSMENT (DPIA)</h3>
    <p>DPIA is conducted to review proposed processing activity of data subjects' personal data. This is to review the purpose, necessity, and proportionality of personal data considering risk to data subjects. It is generally carried out every 3 years. Carry out DPIA whenever the processing of personal data is likely to result in a high risk to the rights and freedoms of individuals. 360 Degree Cloud shall carry out DPIA prior to processing personal data which contain at least the following:</p>
    <ol>
        <li>A systematic description of the processing operations and the purposes of the processing.</li>
        <li>An assessment of the necessity and proportionality of the processing operations in relation to the purposes.</li>
        <li>An assessment of risks to the privacy rights of individuals.</li>
        <li>The measures envisaged to address the risks include safeguards, security measures, and mechanisms to ensure the protection of personal data and demonstrate compliance with applicable data protection laws.</li>
    </ol>
    
    <h3>4. DOCUMENTATION</h3>
    <p>360 Degree Cloud documents each thing related to your personal data and its processing, and the information on how personal data flows through the system.</p>
    
    <h3>5. A SEPARATE DATA COMPLIANCE DEPARTMENT / PRIVACY TEAM</h3>
    <p>Incorporating members of Legal and Information Security teams ensures appropriate independence and oversight of duties relating to all aspects of 360 Degree Cloud's data protection compliance.</p>
    
    <p>The Privacy Team is accountable for managing and implementing 360 Degree Cloud's data privacy program internally (including the Policies) and for ensuring that effective data privacy controls are in place for any third-party service provider 360 Degree Cloud engages. In this way, the Privacy Team is actively engaged in addressing matters relating to 360 Degree Cloud's privacy compliance on a routine, day-to-day basis.</p>
    
    <h2>CHANGES TO OUR POLICY</h2>
    <p>If we decide to change our policy, we will post those changes on this page, and/or update the Policy modification date below.</p>
    
    <h2>CONCLUSION</h2>
    <p>As your service provider, we understand that our compliance with data protection is critical for your business. We are making all the efforts to ensure your customer data stays safe, while also being mindful about keeping things simple for developers. It is not a onetime effort. It's a continuous process and we will be making sure we review our processes regularly to make sure we do not breach any obligations set forth and also closely follow more updates to the regulation. If your business processes the personal data of any subject and you want to run that data through 360 Degree Cloud, we've got you covered.</p>
    
    <h2>YOUR CONSENT</h2>
    <p>By using our site, registering an account, or making a purchase of services, you consent to this Policy.</p>
    
    <p><strong>Disclaimer:</strong> None of the content above is legal advice. Please seek legal counsel for specific recommendations related to compliance.</p>
    


    </div>
  </div>

  <!-- <script>
    function openTab(evt, tabId) {
      document.querySelectorAll(".tab-content").forEach(el => el.classList.remove("active"));
      document.querySelectorAll(".tablink").forEach(btn => btn.classList.remove("active"));
      document.getElementById(tabId).classList.add("active");
      evt.currentTarget.classList.add("active");
    }
  </script> -->

<script>
  function openTab(evt, tabId, buttonId = null) {
  // Hide all tab content
  const tabContents = document.querySelectorAll(".tab-content");
  tabContents.forEach(tc => tc.classList.remove("active"));

  // Remove 'active' class from all tab links
  const tabLinks = document.querySelectorAll(".tablink");
  tabLinks.forEach(tl => tl.classList.remove("active"));

  // Show the selected tab content
  document.getElementById(tabId).classList.add("active");

  // If a button ID is provided, activate that button
  if (buttonId) {
    const targetButton = document.getElementById(buttonId);
    if (targetButton) targetButton.classList.add("active");
  } else if (evt.currentTarget.classList.contains("tablink")) {
    evt.currentTarget.classList.add("active");
  }
}

</script>


</body>
</html>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
							</div>
							</div><!-- .entry-content -->

					
					
					
					
					
				</article><!-- #post-## -->

			</div>

			
		</div>

	</div>
</div><!-- .block-content -->

</div><!-- #main-content -->

<div class="post_outer"><span class="post_loader show"></span></div>

<style>
    .whatsapp-content {
        position: fixed;
        top: 70%;
        right: 0;
        z-index: 500;
    }

    .whatsapp-content div {
        padding: 6px 5px;
        background-color: #595c71;
        color: #fff;
        border-radius: 4px;
        transition: 0.3s;
        font-weight: 900;
    }

    .whatsapp-content div {
        font-size: 16px;
    }


    .single-calen .block-content:last-of-type {
        padding-bottom: 0px;
    }

    .single-calen .block-content {
        padding-top: 0px;
    }

    @media only screen and (max-width: 1300px) {
        .single-calen h1 {
            font-size: 36px;
        }

        .single-calen .cus-b {
            margin-bottom: 25px;
        }
    }

    @media only screen and (max-width: 600px) {
        .single-calen h1 {
            font-size: 26px;
        }

        .single-calen h1 span {
            line-height: 38px !important;
        }

    }

    .post_outer.show {
        display: block;
    }

    .post_outer {
        position: fixed;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999999999;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        border-radius: 4px;
        display: none;
    }

    .post_loader.show {
        display: block;
        position: absolute;
        z-index: 1001;
        opacity: 1;
        left: 50%;
        bottom: 0;
        right: 0;
        top: 50%;
        border: 8px solid #f3f3f3;
        border-radius: 50%;
        border-top: 8px solid #3498db;
        width: 40px;
        height: 40px;
        -webkit-animation: spins 2s linear infinite;/ Safari / animation: spins 2s linear infinite;
    }

    / Safari / @-webkit-keyframes spins {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spins {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<script>



    jQuery(document).ready(function () {

        // Select and loop the container element of the elements you want to equalise
        jQuery('#testingpros').each(function () {
            console.log('dfdfdfdf');
            // Cache the highest
            var highestBox = 0;

            // Select and loop the elements you want to equalise
            jQuery('.card-content-user-contact span', this).each(function () {

                // If this box is higher than the cached highest then store it
                if (jQuery(this).height() > highestBox) {
                    highestBox = jQuery(this).height();
                }

            });

            // Set the height of all those children to whichever was highest 
            jQuery('.card-content-user-contact span', this).height(highestBox);

        });

    });
    function validateForm2() {
        var hasError = false;
        //e.preventDefault();				

        var email = document.querySelector('#emails').value;


        var errorArr = document.querySelectorAll(".error");
        for (var i = 0; i < errorArr.length; i++) {
            var element = errorArr[i];
            element.parentNode.removeChild(element);
        }



        if (email.trim() == '') {
            document.querySelector('#erroradd').appendChild(errorElement('Required Field'));
            hasError = true;
        } else {
            var regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var validEmail = regEx.test(email);
            if (!validEmail) {
                document.querySelector('#erroradd').appendChild(errorElement('Enter a valid email'));
                hasError = true;
            }
        }

        return !hasError;

    }
    function validateForm22() {
        var hasError = false;
        //e.preventDefault();				

        var email = document.querySelector('#emails2').value;


        var errorArr = document.querySelectorAll(".error");
        for (var i = 0; i < errorArr.length; i++) {
            var element = errorArr[i];
            element.parentNode.removeChild(element);
        }



        if (email.trim() == '') {
            document.querySelector('#erroradd2').appendChild(errorElement('Required Field'));
            hasError = true;
        } else {
            var regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var validEmail = regEx.test(email);
            if (!validEmail) {
                document.querySelector('#erroradd2').appendChild(errorElement('Enter a valid email'));
                hasError = true;
            }
        }

        return !hasError;

    }
    function errorElement(text) {
        var newSpan = document.createElement("SPAN");
        newSpan.classList.add("error");
        var newContent = document.createTextNode(text);
        newSpan.appendChild(newContent);
        return newSpan;
    }
    jQuery(document).ready(function () {

        // Select and loop the container element of the elements you want to equalise
        jQuery('#sameheight').each(function () {

            // Cache the highest
            var highestBox = 0;

            // Select and loop the elements you want to equalise
            jQuery('.gem-textbox-content', this).each(function () {

                // If this box is higher than the cached highest then store it
                if (jQuery(this).height() > highestBox) {
                    highestBox = jQuery(this).height();
                }

            });

            // Set the height of all those children to whichever was highest 
            jQuery('.gem-textbox-content', this).height(highestBox);

        });

    });
</script>


    <div class="whatsapp-content">
        <a onclick="dataLayer.push({
    event: 'whatsapp_click',
                button_type: 'desktop'
            })" target="_blank" href="https://api.whatsapp.com/send?phone=12028038488&text=Hello,%20I%20need%20help">
            <div>
                <img src="https://360smsapp.com/wp-content/uploads/2022/02/ezgif-3-ce6bf46dd917-1-2.webp" width="30"
                    height="30" alt="logo">
                <span>WhatsApp Live Chat</span>
            </div>
        </a>

    </div>


     <!-- mobile stictky whtsapp button -->




<script type="text/javascript">
    /*   jQuery(function(){
           jQuery('#cb-close-notice').click(function(){
               jQuery("#coronabar").hide();
           })
          setTimeout(function(){
                       if(jQuery("#moove_gdpr_cookie_info_bar").hasClass('moove-gdpr-info-bar-hidden')){
                       console.log('mobile bottom');
                       jQuery("#coronabar.cb-position-bottom").css("bottom","0px");
                       }
                       else if(jQuery('#moove_gdpr_cookie_info_bar' ).not(".moove-gdpr-info-bar-hidden" )){
                            console.log('mobile top');
                           jQuery("#coronabar.cb-position-bottom").css("bottom",jQuery("#moove_gdpr_cookie_info_bar").height()+"px");
                       }
                   },2000)  
           
          
           jQuery('.moove-gdpr-button-holder button.mgbutton').click(function(){
               jQuery("#coronabar.cb-position-bottom").css("bottom","0px");
           })
       })*/
</script>



</div><!-- #main -->
<div id="lazy-loading-point"></div>

                        <footer
                class="custom-footer">
                                    <div class="container" style="max-width:100% !important; width:100%;"><section class="wpb-content-wrapper"><div class="vc_row-full-width-before"></div><div id="vc_row-69610603dbc14" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1641996435621 thegem-custom-69610603dbc01136 vc_row-has-fill"><script type="text/javascript">if (typeof(gem_fix_fullwidth_position) == "function") { gem_fix_fullwidth_position(document.getElementById("vc_row-69610603dbc14")); }</script><div class="wpb_column vc_column_container vc_col-sm-12 thegem-custom-69610603dfebf4808"><div class="vc_column-inner thegem-custom-inner-69610603dfec2 "><div class="wpb_wrapper thegem-custom-69610603dfebf4808">
	
		<div class="wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-69610603dffbe6805"  >
			<div class="wpb_wrapper">
				<h2 class="footerh2" style="text-align: center; font-weight: 900; color: #3c3950; font-size: 32px !important; text-transform: none !important; line-height: 36px; letter-spacing: .05em;">Our Certifications</h2>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603dffbe6805{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603dffbe6805{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603dffbe6805{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603dffbe6805{position: relative !important;}}</style>
		</div>
	
<div id="footerfourlogo" class="vc_row wpb_row vc_inner vc_row-fluid thegem-custom-69610603e2e669809 vc_row-o-equal-height vc_row-flex custom-inner-column-69610603e2e70"><div class="wpb_column vc_column_container vc_col-sm-12 thegem-custom-69610603e52f75613"><div class="vc_column-inner thegem-custom-inner-69610603e52f9 "><div class="wpb_wrapper thegem-custom-69610603e52f75613">
	
	<div  class="wpb_single_image wpb_content_element vc_align_center   footerlogo1a" >
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1060" height="203" src="https://360smsapp.com/wp-content/uploads/2023/05/000122-2-1.png" class="vc_single_image-img attachment-full" alt="000122 2 1" decoding="async" title="000122 2 1" srcset="https://360smsapp.com/wp-content/uploads/2023/05/000122-2-1.png 1060w, https://360smsapp.com/wp-content/uploads/2023/05/000122-2-1-300x57.png 300w, https://360smsapp.com/wp-content/uploads/2023/05/000122-2-1-1024x196.png 1024w, https://360smsapp.com/wp-content/uploads/2023/05/000122-2-1-768x147.png 768w" sizes="(max-width: 1060px) 100vw, 1060px" /></div>
		</figure>
	</div>
	
</div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row-full-width-before"></div><div id="desktoprow" data-vc-full-width="true" data-vc-full-width-init="false"  data-disable_effects_tablet="disable"  class="vc_row wpb_row vc_row-fluid vc_custom_1642070256497 thegem-custom-69610603e633c6010 gem-interactions-enabled"><script type="text/javascript">if (typeof(gem_fix_fullwidth_position) == "function") { gem_fix_fullwidth_position(document.getElementById("desktoprow")); }</script><div class="wpb_column vc_column_container vc_col-sm-4 thegem-custom-69610603e64a58438"><div class="vc_column-inner thegem-custom-inner-69610603e64a7 "><div class="wpb_wrapper thegem-custom-69610603e64a58438">
	
	<div  class="wpb_single_image wpb_content_element vc_align_left" >
		
		<figure class="wpb_wrapper vc_figure">
			<a href="https://360smsapp.com/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="https://360smsapp.com/wp-content/uploads/2026/01/360-SMS-logo-white-150x64.png" width="150" height="64" alt="360-SMS-logo-white" title="360-SMS-logo-white" /></a>
		</figure>
	</div>
	

	
		<div class="wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-69610603e6cf42253"  >
			<div class="wpb_wrapper">
				<div class="text-white" style="text-align: left; margin-top: 20px;">
<p style="margin-bottom: 0px;">Sales Contact</p>
<p><i class="fas fa-envelope" style="transform: translate(-6px, -3px); font-size: 12px; color: #ccc;"></i>Email: sales@360smsapp.com</p>
<p style="margin-bottom: 0px;"><i class="fas fa-phone" style="transform: translate(-6px, -3px); font-size: 12px; color: #ccc;"></i>USA : +1 323 641 4417</p>
<p><i class="fas fa-map-marker-alt" style="transform: translate(-6px, -3px); font-size: 12px; color: #ccc;"></i>Address : 1968 S. COAST HWY 1412, LAGUNA BEACH, CA 92651</p>
<p style="margin-bottom: 0px;"><i class="fas fa-phone" style="transform: translate(-6px, -3px); font-size: 12px; color: #ccc;"></i>UK : +44 740 327 9473</p>
<p><i class="fas fa-map-marker-alt" style="transform: translate(-6px, -3px); font-size: 12px; color: #ccc;"></i>Address : Plaza Suite 8, KD Tower, Cotterells,<br />
<span style="margin-left: 12px;">Hemel Hempstead, Herts, HP1 1FW, United Kingdom</span></p>
</div>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e6cf42253{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e6cf42253{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e6cf42253{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e6cf42253{position: relative !important;}}</style>
		</div>
	
<div class="socials socials-list socials-colored-hover socials-rounded socials-alignment-left"><a class="socials-item" target="_blank" href="https://www.facebook.com/360SMSApp/" style="color: #ffffff;"><i class="socials-item-icon facebook" style="font-size: 30px"></i></a><a class="socials-item" target="_blank" href="https://twitter.com/360smsapp" style="color: #ffffff;"><i class="socials-item-icon twitter" style="font-size: 30px"></i></a><a class="socials-item" target="_blank" href="https://www.linkedin.com/company/360smsapp/" style="color: #ffffff;"><i class="socials-item-icon linkedin" style="font-size: 30px"></i></a><a class="socials-item" target="_blank" href="https://www.instagram.com/360smsapp/?hl=en" style="color: #ffffff;"><i class="socials-item-icon instagram" style="font-size: 30px"></i></a><a class="socials-item" target="_blank" href="https://www.youtube.com/@360smsapp8" style="color: #ffffff;"><i class="socials-item-icon youtube" style="font-size: 30px"></i></a></div></div></div></div><div class="foot_menu wpb_column vc_column_container vc_col-sm-4 thegem-custom-69610603e6e613608" id="p-desk-0"><div class="vc_column-inner thegem-custom-inner-69610603e6e62 "><div class="wpb_wrapper thegem-custom-69610603e6e613608"><div class="vc_empty_space"   style="height: 86px"><span class="vc_empty_space_inner"></span></div><div class="vc_row wpb_row vc_inner vc_row-fluid thegem-custom-69610603e70148311 custom-inner-column-69610603e701a"><div class="wpb_column vc_column_container vc_col-sm-4 thegem-custom-69610603e71196915"><div class="vc_column-inner thegem-custom-inner-69610603e711a "><div class="wpb_wrapper thegem-custom-69610603e71196915">
	
		<div class="wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-69610603e71c41615"  >
			<div class="wpb_wrapper">
				<div class="menues-footer" style="justify-content: space-around;">
<ul class="check-dots">
<li class="cus-line-height"><a href="https://360smsapp.com/">Home</a></li>
<li class="cus-line-height"><a href="https://360smsapp.com/blog/">Blog</a></li>
<li class="cus-line-height"><a href="https://360smsapp.com/industries/">Industries</a></li>
<li class="cus-line-height"><a href="https://360smsapp.com/about-us/">About us</a></li>
<li class="cus-line-height"><a href="https://360smsapp.com/contact-us/" target="_blank" rel="noopener noreferrer">Contact us</a></li>
<li class="cus-line-height"><a href="https://360smsapp.com/terms-and-conditions/" target="_blank" rel="noopener noreferrer">Terms and Conditions</a></li>
</ul>
</div>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e71c41615{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e71c41615{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e71c41615{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e71c41615{position: relative !important;}}</style>
		</div>
	
</div></div></div><div class="sec-menues-footer wpb_column vc_column_container vc_col-sm-8 thegem-custom-69610603e72c24755"><div class="vc_column-inner thegem-custom-inner-69610603e72c3 "><div class="wpb_wrapper thegem-custom-69610603e72c24755">
	
		<div class="wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-69610603e7368808"  >
			<div class="wpb_wrapper">
				<div class="menues-footer" style="justify-content: space-around;">
<ul class="mar-30 check-dots">
<li class="cus-line-height"><a href="https://360smsapp.com/success-stories/">Success Stories</a></li>
<li class="cus-line-height"><a href="https://360smsapp.com/salesforce-chatbot/" target="_blank" rel="noopener noreferrer">Salesforce Chatbot</a></li>
<li class="cus-line-height"><a href="https://360smsapp.com/salesforce-sms/" target="_blank" rel="noopener noreferrer">Salesforce SMS</a></li>
<li class="cus-line-height"><a href="https://360smsapp.com/salesforce-whatsapp/" target="_blank" rel="noopener noreferrer">Whatsapp Salesforce Integration</a></li>
<li class="cus-line-height"><a href="https://360smsapp.com/salesforce-texting/" target="_blank" rel="noopener noreferrer">Text marketing for Salesforce</a></li>
<li class="cus-line-height"><a href="https://360smsapp.com/salesforce-computer-telephony-integration/" target="_blank" rel="noopener noreferrer">CTI salesforce integration</a></li>
</ul>
</div>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e7368808{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e7368808{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e7368808{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e7368808{position: relative !important;}}</style>
		</div>
	
</div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid thegem-custom-69610603e748c6410 custom-inner-column-69610603e7490"><div class="wpb_column vc_column_container vc_col-sm-12 thegem-custom-69610603e755d3487"><div class="vc_column-inner thegem-custom-inner-69610603e755e "><div class="wpb_wrapper thegem-custom-69610603e755d3487"></div></div></div></div></div></div></div><div class="footerform wpb_column vc_column_container vc_col-sm-4 thegem-custom-69610603e76573216"><div class="vc_column-inner thegem-custom-inner-69610603e7658 "><div class="wpb_wrapper thegem-custom-69610603e76573216"><div class="vc_empty_space"   style="height: 62px"><span class="vc_empty_space_inner"></span></div><h5 style="text-align: left" class="vc_custom_heading vc_custom_1647505980210" >GLOBALLY LOCAL</h5>
	
		<div class="wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-69610603e7d9c3020"  >
			<div class="wpb_wrapper">
				<p><a style="color: #fff; font-size: 14px; font-weight: bold; line-height: 25px; font-family: 'Montserrat'; margin-left: 3%;" href="/aus/">Australia</a></p>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e7d9c3020{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e7d9c3020{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e7d9c3020{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e7d9c3020{position: relative !important;}}</style>
		</div>
	

	
		<div class="wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-69610603e7e269968"  >
			<div class="wpb_wrapper">
				<p><a style="color: #fff; font-size: 14px; font-weight: bold; line-height: 25px; font-family: 'Montserrat'; margin-left: 3%;" href="/uk/">United Kingdom</a></p>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e7e269968{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e7e269968{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e7e269968{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e7e269968{position: relative !important;}}</style>
		</div>
	

	
		<div class="wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-69610603e7e99789"  >
			<div class="wpb_wrapper">
				<p><a style="color: #fff; font-size: 14px; font-weight: bold; line-height: 25px; font-family: 'Montserrat'; margin-left: 3%;" href="#">United States</a></p>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e7e99789{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e7e99789{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e7e99789{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e7e99789{position: relative !important;}}</style>
		</div>
	
<div id="socialwidth" class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1644231408267 thegem-custom-69610603e7f513306 custom-inner-column-69610603e7f58"><div class="wpb_column vc_column_container vc_col-sm-12 thegem-custom-69610603e804a1854"><div class="vc_column-inner thegem-custom-inner-69610603e804b vc_custom_1642069590953"><div class="wpb_wrapper thegem-custom-69610603e804a1854">
	
	<div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1764238173981" >
		
		<figure class="wpb_wrapper vc_figure">
			<a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="https://360smsapp.com/wp-content/uploads/2025/11/market-partner3-195x62.png" width="195" height="62" alt="market-partner3" title="market-partner3" /></a>
		</figure>
	</div>
	

	
	<div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1764237782005" >
		
		<figure class="wpb_wrapper vc_figure">
			<a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&amp;utm_source=SEO&amp;utm_medium=website&amp;utm_campaign=navigation" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="https://360smsapp.com/wp-content/uploads/2025/11/appexchange_logo-195x62.png" width="195" height="62" alt="appexchange_logo" title="appexchange_logo" /></a>
		</figure>
	</div>
	
</div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div id="mobilerow"  data-disable_effects_desktop="disable" data-disable_effects_mobile="disable"  class="vc_row wpb_row vc_row-fluid footer vc_custom_1641999616331 thegem-custom-69610603e91023167 gem-interactions-enabled"><div class="wpb_column vc_column_container vc_col-sm-4 thegem-custom-69610603e92336418"><div class="vc_column-inner thegem-custom-inner-69610603e9234 "><div class="wpb_wrapper thegem-custom-69610603e92336418">
	
	<div  class="wpb_single_image wpb_content_element vc_align_left   footerlogoimg" >
		
		<figure class="wpb_wrapper vc_figure">
			<a href="https://360smsapp.com/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="300" height="128" src="https://360smsapp.com/wp-content/uploads/2019/10/thumbnail_large-300x128.png" class="vc_single_image-img attachment-medium" alt="thumbnail large" decoding="async" title="thumbnail large" srcset="https://360smsapp.com/wp-content/uploads/2019/10/thumbnail_large-300x128.png 300w, https://360smsapp.com/wp-content/uploads/2019/10/thumbnail_large.png 550w" sizes="(max-width: 300px) 100vw, 300px" /></a>
		</figure>
	</div>
	

	
		<div class="wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-69610603e9a799637"  >
			<div class="wpb_wrapper">
				<div class="text-white" style="text-align: left; margin-top: 20px;">
<p style="margin-bottom: 0px;"><i class="fas fa-phone-alt" style="transform: translate(-6px, -3px); font-size: 12px; color: #ccc;"></i>USA : +1 323 641 4417</p>
<p><i class="fas fa-map-marker-alt" style="transform: translate(-6px, -3px); font-size: 12px; color: #ccc;"></i>Address : 1968 S. Coast Hwy #1412,<br />
<span style="margin-left: 12px;"> Laguna Beach CA 92651</span></p>
<p style="margin-bottom: 0px;"><i class="fas fa-phone-alt" style="transform: translate(-6px, -3px); font-size: 12px; color: #ccc;"></i>UK : +44 740 327 9473</p>
<p><i class="fas fa-map-marker-alt" style="transform: translate(-6px, -3px); font-size: 12px; color: #ccc;"></i>Address : Plaza Suite 8, KD Tower, Cotterells,<span style="margin-left: 12px;">Hemel Hempstead, Herts, HP1 1FW, United Kingdom</span></div>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e9a799637{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e9a799637{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e9a799637{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e9a799637{position: relative !important;}}</style>
		</div>
	
<h5 style="text-align: center" class="vc_custom_heading footerform" >GET IN TOUCH</h5>
	<div class="wpb_raw_code wpb_content_element wpb_raw_html footerform" >
		<div class="wpb_wrapper">
			<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
<!--  If necessary, please modify the charset parameter to specify the        -->
<!--  character set of your HTML page.                                        -->
<!--  ----------------------------------------------------------------------  -->

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
<!--  ----------------------------------------------------------------------  -->

  <form id="formFirstLeadfooter">
                           	<input type="hidden" name="oid" value="00D61000000cnSO">
<input type=hidden name="retURL" value="https://360smsapp.com/thank-you/">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
<!--  <input type="hidden" name="debug" value=1>                              -->
<!--  <input type="hidden" name="debugEmail"                                  -->
<!--  value="rohit@360degreecloud.com">                                       -->
<!--  ----------------------------------------------------------------------  -->

<div class="d-flex">   <input maxlength="80" name="last_name" value="Get In Touch" type="hidden" size="20">
                                <input maxlength="40" name="company" value="360smsapp" type="hidden" size="20">
                                  <input maxlength="80" name="lead_source" value="Get In Touch" type="hidden" size="20">
 <input onblur="verify_emailad2(this.value)" type="email" id="emailfirst1" style="color: #fff;" name="email" placeholder="Your email here" class="input-mail"><br>

<input class="input-subs" id="input-subs2" type="submit" value="Submit" name="Notify me">
</div>
</form> <span id="email_error3" style="color:red;    width: 100%;
                      display: block;
                      text-align: left;"></span><span class="ldremailchk text-center" style="color:#FFF;display: none !important;">
                                    <h4 style="font-size:1rem;"><b>Loading......</b></h4>
                                </span>
		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 thegem-custom-69610603e9d4c1283" id="p-0"><div class="vc_column-inner thegem-custom-inner-69610603e9d4e "><div class="wpb_wrapper thegem-custom-69610603e9d4c1283">
	
		<div class="wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-69610603e9e316488"  >
			<div class="wpb_wrapper">
				<div class="d-flex menues-footer" style="justify-content: space-around;">
<ul class="">
<li><a href="https://360smsapp.com/">Home</a></li>
<li><a href="https://360smsapp.com/blog/">Blog</a></li>
<li><a href="https://360smsapp.com/industries/">Industries</a></li>
<li><a href="https://360smsapp.com/about-us/">About us</a></li>
<li><a href="https://360smsapp.com/contact-us/" target="_blank" rel="noopener noreferrer">Contact us</a></li>
</ul>
<ul class="">
<li><a href="https://360smsapp.com/success-stories/">Success Stories</a></li>
<li><a href="https://360smsapp.com/salesforce-chatbot/" target="_blank" rel="noopener noreferrer">Salesforce Chatbot</a></li>
<li><a href="https://360smsapp.com/salesforce-sms/" target="_blank" rel="noopener noreferrer">Salesforce SMS</a></li>
<li><a href="https://360smsapp.com/salesforce-whatsapp/" target="_blank" rel="noopener noreferrer">Whatsapp Salesforce Integration</a></li>
<li><a href="https://360smsapp.com/salesforce-texting/" target="_blank" rel="noopener noreferrer">Text marketing for Salesforce</a></li>
<li><a href="https://360smsapp.com/salesforce-computer-telephony-integration/" target="_blank" rel="noopener noreferrer">CTI salesforce integration</a></li>
</ul>
</div>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e9e316488{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e9e316488{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e9e316488{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e9e316488{position: relative !important;}}</style>
		</div>
	
<h5 style="color: #ffffff;text-align: left" class="vc_custom_heading vc_custom_1647929837996" >GLOBALLY LOCAL</h5>
	
		<div class="wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-69610603e9fb07499"  >
			<div class="wpb_wrapper">
				<p><a style="color: #fff; font-size: 14px; font-weight: bold; line-height: 25px; font-family: 'Montserrat'; margin-left: 3%;" href="/aus/">Australia</a></p>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e9fb07499{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e9fb07499{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603e9fb07499{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603e9fb07499{position: relative !important;}}</style>
		</div>
	

	
		<div class="wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-69610603ea02c2496"  >
			<div class="wpb_wrapper">
				<p><a style="color: #fff; font-size: 14px; font-weight: bold; line-height: 25px; font-family: 'Montserrat'; margin-left: 3%;" href="/uk/">United Kingdom</a></p>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603ea02c2496{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603ea02c2496{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603ea02c2496{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603ea02c2496{position: relative !important;}}</style>
		</div>
	
</div></div></div><div class="footerform wpb_column vc_column_container vc_col-sm-4 thegem-custom-69610603ea10c2872"><div class="vc_column-inner thegem-custom-inner-69610603ea10d "><div class="wpb_wrapper thegem-custom-69610603ea10c2872"><div class="vc_btn3-container vc_btn3-center vc_custom_1649952722813" ><a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-info" href="https://360degreecloud.com/?utm_source=360SMSApp&#038;utm_medium=website&#038;utm_campaign=smsappref" title="" target="_blank">Salesforce Consulting Services</a></div><div class="socials socials-list socials-colored-hover socials-rounded socials-alignment-center"><a class="socials-item" target="_blank" href="https://www.facebook.com/360SMSApp/" style="color: #ffffff;"><i class="socials-item-icon facebook" style="font-size: px"></i></a><a class="socials-item" target="_blank" href="https://twitter.com/360smsapp" style="color: #ffffff;"><i class="socials-item-icon twitter" style="font-size: px"></i></a><a class="socials-item" target="_blank" href="https://www.linkedin.com/company/360smsapp/" style="color: #ffffff;"><i class="socials-item-icon linkedin" style="font-size: px"></i></a><a class="socials-item" target="_blank" href="https://www.instagram.com/360smsapp/?hl=en" style="color: #ffffff;"><i class="socials-item-icon instagram" style="font-size: px"></i></a></div></div></div></div></div><div id="vc_row-69610603ea3a9" class="vc_row wpb_row vc_row-fluid footer thegem-custom-69610603ea39f9408"><div class="wpb_column vc_column_container vc_col-sm-12 thegem-custom-69610603ea49c1827"><div class="vc_column-inner thegem-custom-inner-69610603ea49d "><div class="wpb_wrapper thegem-custom-69610603ea49c1827"><div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text"><span class="vc_sep_holder vc_sep_holder_l"><span  style="border-color:rgb(255,255,255);border-color:rgba(255,255,255,0.22);" class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  style="border-color:rgb(255,255,255);border-color:rgba(255,255,255,0.22);" class="vc_sep_line"></span></span>
</div>
	
		<div class="wpb_text_column wpb_content_element  vc_custom_1746705387747 thegem-vc-text thegem-custom-69610603ea8ba1430"  >
			<div class="wpb_wrapper">
				<p style="text-align: center; font-size: 18px;">© Copyrights 360 SMS App 2025 | <a style="color: #0f75bb;" href="/privacy-policy/">Privacy Policy</a> | <a style="color: #0f75bb;" href="/terms-of-service/">Terms of Use</a><br />
Powered By 360 DEGREE CLOUD TECHNOLOGIES PRIVATE LIMITED</p>

			</div>
			<style>@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603ea8ba1430{display: block!important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603ea8ba1430{display: block!important;}}@media screen and (max-width: 1023px) {.thegem-vc-text.thegem-custom-69610603ea8ba1430{position: relative !important;}}@media screen and (max-width: 767px) {.thegem-vc-text.thegem-custom-69610603ea8ba1430{position: relative !important;}}</style>
		</div>
	
</div></div></div></div>
</section></div>
                            </footer>
                    
                
</div><!-- #page -->


<!--googleoff: all--><div id="cookie-law-info-bar" data-nosnippet="true"><span>We use cookies to enhance your browsing experience, serve personalized ads or content, and analyze our traffic. By clicking "Accept All", you consent to our use of cookies. <a role='button' data-cli_action="accept" id="cookie_action_close_header" class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button wt-cli-accept-btn" style="display:inline-block">Accept</a> <a role='button' id="cookie_action_close_header_reject" class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header_reject cli_action_button wt-cli-reject-btn" data-cli_action="reject">Reject</a> <a role='button' class="medium cli-plugin-button cli-plugin-main-button cli_settings_button">Settings</a> <br />
</span></div><div id="cookie-law-info-again" style="display:none" data-nosnippet="true"><span id="cookie_hdr_showagain">Privacy &amp; Cookies Policy</span></div><div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog" aria-labelledby="cliSettingsPopup" aria-hidden="true">
  <div class="cli-modal-dialog" role="document">
	<div class="cli-modal-content cli-bar-popup">
		  <button type="button" class="cli-modal-close" id="cliModalClose">
			<svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"></path><path d="M0 0h24v24h-24z" fill="none"></path></svg>
			<span class="wt-cli-sr-only">Close</span>
		  </button>
		  <div class="cli-modal-body">
			<div class="cli-container-fluid cli-tab-container">
	<div class="cli-row">
		<div class="cli-col-12 cli-align-items-stretch cli-px-0">
			<div class="cli-privacy-overview">
				<h4>Privacy Overview</h4>				<div class="cli-privacy-content">
					<div class="cli-privacy-content-text">This website uses cookies to improve your experience while you navigate through the website. Out of these, the cookies that are categorized as necessary are stored on your browser as they are essential for the working of basic functionalities of the website. We also use third-party cookies that help us analyze and understand how you use this website. These cookies will be stored in your browser only with your consent. You also have the option to opt-out of these cookies. But opting out of some of these cookies may affect your browsing experience.</div>
				</div>
				<a class="cli-privacy-readmore" aria-label="Show more" role="button" data-readmore-text="Show more" data-readless-text="Show less"></a>			</div>
		</div>
		<div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
												<div class="cli-tab-section">
						<div class="cli-tab-header">
							<a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="necessary" data-toggle="cli-toggle-tab">
								Necessary							</a>
															<div class="wt-cli-necessary-checkbox">
									<input type="checkbox" class="cli-user-preference-checkbox"  id="wt-cli-checkbox-necessary" data-id="checkbox-necessary" checked="checked"  />
									<label class="form-check-label" for="wt-cli-checkbox-necessary">Necessary</label>
								</div>
								<span class="cli-necessary-caption">Always Enabled</span>
													</div>
						<div class="cli-tab-content">
							<div class="cli-tab-pane cli-fade" data-id="necessary">
								<div class="wt-cli-cookie-description">
									Necessary cookies are absolutely essential for the website to function properly. This category only includes cookies that ensures basic functionalities and security features of the website. These cookies do not store any personal information.								</div>
							</div>
						</div>
					</div>
																	<div class="cli-tab-section">
						<div class="cli-tab-header">
							<a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="non-necessary" data-toggle="cli-toggle-tab">
								Non-necessary							</a>
															<div class="cli-switch">
									<input type="checkbox" id="wt-cli-checkbox-non-necessary" class="cli-user-preference-checkbox"  data-id="checkbox-non-necessary" checked='checked' />
									<label for="wt-cli-checkbox-non-necessary" class="cli-slider" data-cli-enable="Enabled" data-cli-disable="Disabled"><span class="wt-cli-sr-only">Non-necessary</span></label>
								</div>
													</div>
						<div class="cli-tab-content">
							<div class="cli-tab-pane cli-fade" data-id="non-necessary">
								<div class="wt-cli-cookie-description">
									Any cookies that may not be particularly necessary for the website to function and is used specifically to collect user personal data via analytics, ads, other embedded contents are termed as non-necessary cookies. It is mandatory to procure user consent prior to running these cookies on your website.								</div>
							</div>
						</div>
					</div>
										</div>
	</div>
</div>
		  </div>
		  <div class="cli-modal-footer">
			<div class="wt-cli-element cli-container-fluid cli-tab-container">
				<div class="cli-row">
					<div class="cli-col-12 cli-align-items-stretch cli-px-0">
						<div class="cli-tab-footer wt-cli-privacy-overview-actions">
						
															<a id="wt-cli-privacy-save-btn" role="button" tabindex="0" data-cli-action="accept" class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">SAVE &amp; ACCEPT</a>
													</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
<div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
<div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
<!--googleon: all-->  <script type="text/javascript">
    function fetch123(){
   //jQuery('#datafetch').html( 'datahhhh' );
   jQuery('.post_outer').addClass('show');
   jQuery.ajax({
     url: 'https://360smsapp.com/wp-admin/admin-ajax.php',
     type: 'post',
     data: { action: 'data_fetch', keyword: jQuery('#searchform').val() },
     success: function(data) {
      jQuery('.post_outer').removeClass('show');
      jQuery('#datafetch').html(data);
    }
  });

 }
</script>

  <script>
    jQuery(document).ready(function(){
  
      jQuery(".myBtnsPopup").click(function(){
        jQuery("#myModalPopup").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalPopup").hide();
      });

      //-----------------2ndpopup----------
      jQuery(".myBtnspt").click(function(){
        jQuery("#myModalpt").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalpt").hide();
      });

      //-----------------3rdpopup----------
      jQuery(".myBtnsptt").click(function(){
        jQuery("#myModalptt").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalptt").hide();
      });
      //-----------------4th-popup----------
      jQuery(".myBtnsforth").click(function(){
        jQuery("#myModalforth").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalforth").hide();
      });



    });
  
    let modalPopup = document.getElementById("myModalPopup");
    let btnPopup   = document.getElementsByClassName("myBtnsPopup")[0];
    let spanPopup = document.getElementsByClassName("close")[0];
  
    a.onclick = function() {
      modalPopup.style.display = "block";
    }
    
    spanPopup.onclick = function() 
    {
      modalPopup.style.display = "none";
    }
  
    window.onclick = function(event) {
      if (event.target == modalPopup) {
        modalPopup.style.display = "none"; 
      }
    }

    //---------------------------2nd----------------------
    let modalpt = document.getElementById("myModalpt");
    let btnpt   = document.getElementsByClassName("myBtnspt")[0];
    let spanpt = document.getElementsByClassName("close")[0];
    a.onclick = function() {
      modalpt.style.display = "block";
    }
    
    spanpt.onclick = function() 
    {
      modalpt.style.display = "none";
    }
  
    window.onclick = function(event) {
      if (event.target == modalpt) {
        modalpt.style.display = "none"; 
      }
    }

    //---------------------------3rd----------------------
    let modalptt = document.getElementById("myModalptt");
    let btnptt   = document.getElementsByClassName("myBtnsptt")[0];
    let spanptt = document.getElementsByClassName("close")[0];
    a.onclick = function() {
      modalptt.style.display = "block";
    }
    spanptt.onclick = function() 
    {
      modalptt.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modalptt) {
        modalptt.style.display = "none"; 
      }
    }
    //---------------------------4th----------------------
    let modalforth = document.getElementById("myModalforth");
    let btnforth   = document.getElementsByClassName("myBtnsforth")[0];
    let spanforth = document.getElementsByClassName("close")[0];
    a.onclick = function() {
      modalforth.style.display = "block";
    }
    spanforth.onclick = function() 
    {
      modalforth.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modalforth) {
        modalforth.style.display = "none"; 
      }
    }
  </script>
  <script type="text/html" id="wpb-modifications"></script><link rel='stylesheet' id='icons-fontawesome-css' href='https://360smsapp.com/wp-content/themes/thegem/css/icons-fontawesome.css?ver=5.7.2' type='text/css' media='all' />
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/thegem-form-elements.js?ver=5.7.2' id='thegem-form-elements-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/jquery.easing.js?ver=5.7.2' id='jquery-easing-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/SmoothScroll.js?ver=5.7.2' id='SmoothScroll-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/jquery.dlmenu.js?ver=5.7.2' id='jquery-dlmenu-js'></script>
<script type='text/javascript' id='thegem-menu-init-script-js-extra'>
/* <![CDATA[ */
var thegem_dlmenu_settings = {"ajax_url":"https:\/\/360smsapp.com\/wp-admin\/admin-ajax.php","backLabel":"Back","showCurrentLabel":"Show this page"};
/* ]]> */
</script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/thegem-menu_init.js?ver=5.7.2' id='thegem-menu-init-script-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/thegem-header.js?ver=5.7.2' id='thegem-header-js'></script>
<script type='text/javascript' id='thegem-scripts-js-extra'>
/* <![CDATA[ */
var thegem_scripts_data = {"ajax_url":"https:\/\/360smsapp.com\/wp-admin\/admin-ajax.php","ajax_nonce":"2c92d73913"};
/* ]]> */
</script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/functions.js?ver=5.7.2' id='thegem-scripts-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/fancyBox/jquery.mousewheel.pack.js?ver=5.7.2' id='jquery-mousewheel-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/fancyBox/jquery.fancybox.min.js?ver=5.7.2' id='jquery-fancybox-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/fancyBox/jquery.fancybox-init.js?ver=5.7.2' id='fancybox-init-script-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-includes/js/jquery/ui/accordion.min.js?ver=1.13.2' id='jquery-ui-accordion-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/plugins/faq-schema-for-pages-and-posts/js/frontend.js?ver=2.0.0' id='wp-faq-schema-frontend-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/plugins/wplegalpages/admin/js/jquery.cookie.min.js?ver=3.3.2' id='wp-legal-pages-jquery-cookie-js'></script>
<script type='text/javascript' id='rocket-browser-checker-js-after'>
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
<script type='text/javascript' id='rocket-preload-links-js-extra'>
/* <![CDATA[ */
var RocketPreloadLinksConfig = {"excludeUris":"\/salesforce-texting\/|\/mobile-privacy-policy\/|\/salesforce-computer-telephony-integration\/|\/360-cti-us\/|\/cti-us\/|\/salesforce-sms-uk\/|\/360-cti\/|\/salesforce-sms-us\/|\/whatsapp-integration\/|\/spark-conversation\/|\/education-summit\/|\/top-7-cti-apps-for-call-center-integration-with-salesforce-in-2025\/|\/restrict-domain\/api_new.php\/|\/restrict-domain\/|\/restrict-domain\/db.php\/|\/test-homepage\/|\/blogs\/|\/terms-of-service-2\/|\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/360smsapp.com","onHoverDelay":"100","rateThrottle":"3"};
/* ]]> */
</script>
<script type='text/javascript' id='rocket-preload-links-js-after'>
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
</script>
<script type='text/javascript' id='custom-own-js-extra'>
/* <![CDATA[ */
var myVars = {"blockedDomains":["gmail.com","yahoo.com","rediff.com","outlook.com","hotmail.com","webinar.com","business.com","test.xyz","prateek.com","icloud.com","qq.com","google.com","qualys.com","fire.com","gmfl.com","gm.com","testing.com","manualtest.com"]};
/* ]]> */
</script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem-child/js/customs-own.js' id='custom-own-js'></script>
<script type='text/javascript' id='malinky-ajax-pagination-main-js-js-extra'>
/* <![CDATA[ */
var malinkySettings = {"1":{"theme_defaults":"Twenty Sixteen","posts_wrapper":"#youtubevideo","post_wrapper":".videocontent","pagination_wrapper":".navigation","next_page_selector":"a.next","paging_type":"load-more","infinite_scroll_buffer":"20","ajax_loader":"<img src=\"https:\/\/360smsapp.com\/wp-content\/plugins\/malinky-ajax-pagination1\/img\/loader.gif\" alt=\"AJAX Loader\" \/>","load_more_button_text":"Load More Videos","loading_more_posts_text":"Loading...","callback_function":""}};
/* ]]> */
</script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/plugins/malinky-ajax-pagination1/js/main.js' id='malinky-ajax-pagination-main-js-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-includes/js/wp-embed.min.js?ver=6.2.3' id='wp-embed-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.10.0' id='wpb_composer_front_js-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/rellax.min.js?ver=5.7.2' id='thegem-rellax-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/themes/thegem/js/interactions.js?ver=5.7.2' id='thegem-interactions-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.17.2' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.17.2' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.17.2","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"additional_custom_breakpoints":true,"e_swiper_latest":true,"landing-pages":true,"e_global_styleguide":true},"urls":{"assets":"https:\/\/360smsapp.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":61422,"title":"Terms%20of%20service%20-%20360%20SMS%20App","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='https://360smsapp.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.17.2' id='elementor-frontend-js'></script>


<script type="text/javascript">
    adroll_adv_id = "JFPTTGG7D5H4ZFAX5XWXJ5";
    adroll_pix_id = "NUDXHQL3GBAFFJFIH6FMSU";

    (function () {
        var _onload = function () {
            if (document.readyState && !/loaded|complete/.test(document.readyState)) { setTimeout(_onload, 10); return }
            if (!window.__adroll_loaded) { __adroll_loaded = true; setTimeout(_onload, 50); return }
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) { window.addEventListener('load', _onload, false); }
        else { window.attachEvent('onload', _onload) }
    }());

    /* VTM VTP jquery for all page..Not for home */

    function verify_email_contactus(email) {
        if (email != '') {
            if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error').html('Invalid Email');


            } else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error').html('Invalid Email');


            }

            else if (myVars.blockedDomains.includes(email.split('@')[1])) {
                jQuery('#email_error').html('Please enter your business email address. This form does not accept addresses from public/free domains.');
            }

            else {
                jQuery('#email_error').html(' ');
                // jQuery('span.ldremailchk').show();
                // var email_check = email.trim();
                // var pageid = jQuery("input#pageid").val();
                // var baseURL = 'https://360smsapp.com/wp-content/themes/thegem-child/verifyEmail.php?id='+pageid;
                // jQuery.ajax({
                //   crossDomain: true,
                //   url: baseURL,
                //   method: 'POST',
                //   data: "email="+email_check,
                //   success: function(response) {
                //    jQuery('span.ldremailchk').hide();
                //    res = JSON.parse(response);
                //    if(res.status == false){

                //     jQuery('#email_error').html('Invalid Email');
                //             //   jQuery('#email').val('');
                //             jQuery('#ever').val('0');
                //           }
                //           else if(res.status == true){
                //            jQuery('#email_error').html('<span style="color:green">Valid Email</span>');                                  jQuery('#ever').val('1'); 
                //          }
                //        }
                //      });
            }
        } else {
            jQuery('#email_error').html(' ');
            jQuery('#email_error').html('Email Required');
        }
    }




    function verify_phone_contactus(phone) {
        var selval = jQuery('.selected-dial-code').val();

        if (selval != '' && phone != "" && phone.length < 10) {
            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
        } else if (selval == '') {
            jQuery('#phone_error').html(' ');

        } else if (phone == "") {

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
        } else {
            jQuery('#phone_error').html(' ');
        }

    }
    //     	jQuery('select#phone_code').on('change', function() {
    //    jQuery('span#phone_error').html(' ');
    //        //jQuery("input#phone").val('');
    //        var selval = jQuery('.selected-dial-code').val();
    //        var phone = jQuery("input#phone").val();
    //        if(selval == ''){
    //         console.log('1');
    //       //alert('sdasdasd');
    //       jQuery('span#country_error').html('Please select country code');
    //   }else if( selval == '' && phone.length < 10){
    //       jQuery('#phone_error').html('');   
    //       jQuery('span#country_error').html(' ');
    //       jQuery('span#country_error').html('Invalid Number');
    //   } else if( selval != '' && phone.length < 10 && phone != ""){
    //    console.log('2');
    //    jQuery('#phone_error').html('');   
    //    jQuery('span#country_error').html(' ');
    //    jQuery('span#country_error').html('Invalid Number');
    // }else{
    //     console.log('no');

    //     jQuery('span#country_error').html('');
    //     if(phone!= '' && selval!= '' && phone.length >= 10){
    //       console.log('3');
    //       jQuery('span.ldrphone').show();
    //       var phone_check = phone.trim();
    //       var ever = jQuery('#ever').val();
    //       var phone_code = jQuery('#phone_code').val();
    //       var pageid = jQuery("input#pageid").val();
    //        var baseURL = 'https://360smsapp.com/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
    //       jQuery.ajax({
    //         crossDomain: true,
    //         url: baseURL,
    //         method: 'POST',
    //         data: {"phone_code":phone_code,"phone":phone_check},
    //         success: function(response) {
    //            jQuery('span.ldrphone').hide();
    //            res = JSON.parse(response);
    //            if(res.status == false){ 
    //              jQuery('#phone_error').html(' ');   
    //              jQuery('span#country_error').html('');
    //              jQuery('#phone_error').html('Invalid Number');

    //              if(ever == "1" || ever == 1 ){  
    //                          // alert(ever);
    //                        }else{ //alert(ever);
    //                         jQuery('#phone_error').html('');   
    //                         jQuery('span#country_error').html('');
    //                         jQuery('#phone_error').html('Invalid Number'); 

    //                         //   jQuery('#phone').val('');  
    //                     }
    //                 }
    //                 else if(res.status == true){
    //                  jQuery('span#country_error').html('');
    //                  jQuery('#phone_error').html(' ');
    //                  jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
    //                  jQuery('#pver').val('1'); 
    //              }
    //          }
    //      });
    //   }
    // }
    // });


    jQuery("input#phone").keypress(function () {
        var selval = jQuery('.selected-dial-code').val();
        var phone = jQuery("input#phone").val();
        if (selval == '') {
            jQuery('span#phone_error').html('');
            jQuery('span#country_error').html('Please select country code');
            jQuery("input#phone").val(' ');
        } else {
            if (phone != '' && selval != '') {
                jQuery('span#country_error').html('');
            }
        }

    });

    jQuery(document).ready(function () {
        jQuery("p.btnRefresh").click(function () {
            var rand = Math.random() + new Date().getTime();
            var pageid = jQuery("input#pageid").val();
            jQuery("img.codeImg").attr('src', 'https://360smsapp.com/wp-content/themes/thegem-child/cap2.php?p=img&rand=' + rand + '&id=' + pageid);
        });
        jQuery("#webtoLeadFormOne").click(function (e) {
            e.preventDefault();
            var ids = ['last_name', 'email', 'company', 'vercode'];

            var last_name = jQuery('#last_name').val();
            var email = jQuery('#email').val();
            var company = jQuery('#company').val();
            var vercode = jQuery('#vercode').val();
            var description = jQuery('#description').val();
            var phone = jQuery('#phone').val();
            var selval = jQuery('#formFirstLead .selected-dial-code').text();
            var phone_contact = jQuery('#phone_code').val();


            var mergedVal = selval + phone_contact;
            jQuery('#merged_phone').val(mergedVal);


            removeValidations(ids);
            if (last_name == "" || email == "" || company == "" || vercode == "" || phone_contact == "") {

                if (last_name == "") {
                    jQuery("#last_name_error").html('Required Field');
                }
                if (email == "") {
                    jQuery("#email_error").html('Required Field');
                }
                if (company == "") {
                    jQuery("#company_error").html('Required Field');
                }
                if (vercode == "") {
                    jQuery("#vercode_error").html('Required Field');
                }
                if (phone_contact == "") {
                    jQuery("#phone_error").html('Required Field');
                }


                return false;
            }
            else if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error').html('Invalid Email');
                jQuery('#email').focus();
                return false;
            }
            else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error').html('Invalid Email');
                jQuery('#email').focus();
                return false;
            }


            else if (jQuery('span#phone_error').text() == 'Invalid Number' && jQuery('#phone_code').val() != '') {
                return false;
            }

            ///////
            else if (jQuery('#phone_code').val() == '') {
                return false;
            }
            else if (jQuery('#email_error').text() == 'Invalid Email') {
                return false;
            }
            else if (jQuery('#email_error').text().includes('Please enter your business email address')) {
                return false;
            }
            else if (myVars.blockedDomains.includes(email.split('@')[1])) {
                jQuery('#email_error').html('Please enter your business email address. This form does not accept addresses from public/free domains.');
            }

            else {
                $('.post_outer').addClass('show');

                // var baseURL12 =  'https://360smsapp.com/wp-content/themes/thegem-child/vwebtolead.php';
                var baseURL = 'https://360smsapp.com/wp-content/themes/thegem-child/server-check.php';
                var form = jQuery('#formFirstLead');


                var currentUrl = location.href;
                var formData = form.serialize();
                formData += '&c_url=' + encodeURIComponent(currentUrl);
                jQuery.ajax({
                    url: baseURL,
                    method: 'post',
                    data: formData,
                    success: function (response) {
                        $('.post_outer').removeClass('show');
                        var res = JSON.parse(response);
                        if (res.st === parseInt(1)) {
                            if (res["webinar"] === true) {
								    
								    const urlParams = new URLSearchParams(window.location.search);
    const isUpcomingSubmit = urlParams.get('id') === 'upcoming_submit';

                                   var redirectUrl = "https://360smsapp.com/webinar-level-3/?webinar_id=61422";

    // ✅ CASE 1: URL has ?id=upcoming_submit → show image
    if (isUpcomingSubmit) {

        var form = jQuery("#div_replace");

        form.fadeOut(300, function () {
            jQuery(this).replaceWith(`
                <div class="thank-you-message text-center" style="color:#000">
                    <img
                        src="https://360smsapp.com/wp-content/uploads/2025/12/Thanks-You-Popup-1.webp"
                        style="width:80%; display:block;"
                    />
                </div>
            `);
        });
		return;
    } 
    // ✅ CASE 2: URL does NOT have query → redirect
    else {
        window.location.replace(redirectUrl);
        return;
    }
                            } else if (res.url && res.url !== "" && res.url !== "undefined") {
                                // ✅ For all other pages — redirect as before
                                location.href = res.url;
                            }
                        } else if (res.st === parseInt(2)) {
                            jQuery("#vercode_error").html(res.msg);
                            return false;
                        } else if (res.st === parseInt(3)) {
                            jQuery("#last_name_error").html(res.msg);
                            return false;
                        } else if (res.st === parseInt(4)) {
                            jQuery("#email_error").html(res.msg);
                            return false;
                        } else if (res.st === parseInt(5)) {
                            jQuery("#company_error").html(res.msg);
                            return false;
                        } else if (res.st === parseInt(6)) {
                            jQuery("#phone_error").html(res.msg);
                            return false;
                        } else if (res.st === parseInt(8)) {
                            jQuery("#all_error").html(res.msg);
                            return false;
                        }
                        else if (res.st === parseInt(0)) {
                            jQuery("#all_error").html(res.msg);
                            return false;
                        }
                        else {
                            jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
                            return false;

                        }


                    }
                });
            }


        });

    });

    function removeValidations(ids) {
        jQuery(ids).each(function (index, key) {
            jQuery("#" + key).keyup(function () {
                jQuery("#" + key + "_error").html('');
            });
        });
    }
    //  function  verify_emailad1(email){   
    //     if(email != ''){
    //        if(email.indexOf("@", 0) < 0){     
    //      jQuery('#email_error1').html('Invalid Email');      

    //      }
    //      else if(email.indexOf(".", 0) < 0){
    //       jQuery('#email_error1').html('Invalid Email');


    //     }else if (email.toLowerCase().slice(email.length - 9) == 'gmail.com') {
    //                 jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from gmail.com.');
    //             } else if (email.toLowerCase().slice(email.length - 9) == 'yahoo.com') {
    //                 jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from yahoo.com.');
    //             } else if (email.toLowerCase().slice(email.length - 10) == 'rediff.com') {
    //                 jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from rediff.com.');
    //             } else if (email.toLowerCase().slice(email.length - 11) == 'outlook.com') {
    //                 jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from outlook.com.');
    //             } else if (email.toLowerCase().slice(email.length - 11) == 'hotmail.com') {
    //                 jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from hotmail.com.');
    //             }else {
    //       jQuery('#email_error1').html(' ');
    //       jQuery('span.ldremailchk').show();
    //       var email_check = email.trim();

    //       var baseURL =  'https://360smsapp.com/wp-content/themes/thegem-child/new-checkdata-footer.php';
    //       jQuery.ajax({
    //         crossDomain: true,
    //         url: baseURL,
    //         method: 'POST',
    //         data: "email="+email_check,
    //         success: function(response) {
    //          jQuery('span.ldremailchk').hide();
    //          res = JSON.parse(response);
    //          if(res.status == false){

    //           jQuery('#email_error1').html('Invalid Email');
    //                     //   jQuery('#emailfirst').val('');
    //                       //jQuery('#ever').val('0');
    //                     }
    //                     else if(res.status == true){
    //                      jQuery('#email_error1').html('<span style="color:green">Valid Email</span>');

    //                        // jQuery('#ever').val('1'); 
    //                      }
    //                    }
    //                  });
    //     }


    //      }else{
    //         jQuery('#email_error1').html(' ');  
    //        jQuery('#email_error1').html('Email Required');  
    //      }

    //   }

    // New verify email homenewsletter

    function verify_emailad1(email) {
        if (email != '') {
            if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error1').html('Invalid Email');


            }
            else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error1').html('Invalid Email');


            } else if (email.toLowerCase().slice(email.length - 9) == 'gmail.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from gmail.com.');

            } else if (email.toLowerCase().slice(email.length - 9) == 'yahoo.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from yahoo.com.');
            } else if (email.toLowerCase().slice(email.length - 8) == 'yahoo.in') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from yahoo.in.');
                return false;
            } else if (email.toLowerCase().slice(email.length - 10) == 'rediff.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from rediff.com.');
            } else if (email.toLowerCase().slice(email.length - 11) == 'outlook.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from outlook.com.');
            } else if (email.toLowerCase().slice(email.length - 11) == 'hotmail.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from hotmail.com.');
            } else {
                jQuery('#email_error1').html(' ');
            }
        } else {
            jQuery('#email_error1').html(' ');
            jQuery('#email_error1').html('Email Required');
        }
    }

    function verify_emailad2(email) {
        if (email != '') {
            if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error3').html('Invalid Email');

            }
            else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error3').html('Invalid Email');


            } else {
                jQuery('#email_error3').html(' ');
                jQuery('span.ldremailchk').show();
                var email_check = email.trim();

                var baseURL = 'https://360smsapp.com/wp-content/themes/thegem-child/verifyfooteremail.php';
                jQuery.ajax({
                    crossDomain: true,
                    url: baseURL,
                    method: 'POST',
                    data: "email=" + email_check,
                    success: function (response) {
                        jQuery('span.ldremailchk').hide();
                        res = JSON.parse(response);
                        if (res.status == false) {

                            jQuery('#email_error3').html('Invalid Email');
                            //   jQuery('#emailfirst').val('');
                            //jQuery('#ever').val('0');
                        }
                        else if (res.status == true) {
                            jQuery('#email_error3').html('<span style="color:green">Valid Email</span>');

                            // jQuery('#ever').val('1'); 
                        }
                    }
                });
            }


        } else {
            jQuery('#email_error3').html(' ');
            jQuery('#email_error3').html('Email Required');
        }

    }
    jQuery(document).ready(function () {
        console.log("ready!");

        jQuery("#input-subs1").click(function (e) {
            e.preventDefault();
            var ids = ['emailfirst'];
            var email = jQuery('#emailfirst').val();
            removeValidations(ids);
            if (email == "") {
                jQuery("#email_error2").html('Required Field');
                return false;
            } else {
                jQuery(this).attr('disabled', true);
                jQuery('.post_outer').addClass('show');
                // var baseURL =  'https://360smsapp.com/wp-content/themes/thegem-child/vwebtolead.php';
                var baseURL = 'https://360smsapp.com/wp-content/themes/thegem-child/new-checkdata-footer.php';
                var form = jQuery('#formFirstLeadfooter');
                jQuery.ajax({
                    url: baseURL,
                    method: 'post',
                    data: form.serialize(),
                    success: function (response) {
                        jQuery('.post_outer').removeClass('show');
                        var res = JSON.parse(response);
                        if (res.st === parseInt(1)) {
                            location.href = res.url;

                        } else if (res.st === parseInt(11)) {

                            jQuery("#email_error2").html(res.msg);
                            return false;
                        }

                        else {
                            jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
                            return false;

                        }


                    }
                });
            }


        });


        jQuery("#input-subs2").click(function (e) {

            e.preventDefault();
            var ids = ['emailfirst1'];


            var email = jQuery('#emailfirst1').val();

            removeValidations(ids);
            if (email == "") {

                jQuery("#email_error3").html('Required Field');
                return false;
            } else if (jQuery('span#email_error3').text() != '') {
                return false;
            } else {
                jQuery(this).attr('disabled', true);
                // var baseURL =  'https://360smsapp.com/wp-content/themes/thegem-child/vwebtolead.php';
                var baseURL = 'https://360smsapp.com/wp-content/themes/thegem-child/checkdatafooter.php';
                var form = jQuery('#formFirstLeadfooter');
                jQuery.ajax({
                    url: baseURL,
                    method: 'post',
                    data: form.serialize(),
                    success: function (response) {
                        var res = JSON.parse(response);
                        if (res.st === parseInt(1)) {
                            location.href = res.url;

                        } else if (res.st === parseInt(11)) {
                            jQuery("#email_error3").html(res.msg);
                            return false;
                        }

                        else {
                            jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
                            return false;

                        }


                    }
                });
            }


        });


    });
    function verify_emaila2(email) {

        if (email != '') {
            if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error2').html('Invalid Email');


            }
            else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error2').html('Invalid Email');


            } else if (email.toLowerCase().slice(email.length - 9) == 'gmail.com') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from gmail.com.');

            } else if (email.toLowerCase().slice(email.length - 9) == 'yahoo.com') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from yahoo.com.');
            } else if (email.toLowerCase().slice(email.length - 8) == 'yahoo.in') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from yahoo.in.');
                return false;
            } else if (email.toLowerCase().slice(email.length - 10) == 'rediff.com') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from rediff.com.');
            } else if (email.toLowerCase().slice(email.length - 11) == 'outlook.com') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from outlook.com.');
            } else if (email.toLowerCase().slice(email.length - 11) == 'hotmail.com') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from hotmail.com.');
            } else {
                jQuery('#email_error2').html(' ');
            }
        } else {
            jQuery('#email_error2').html(' ');
            jQuery('#email_error2').html('Email Required');
        }
    }

</script>

<style>
    span.loaderclasss.text-center h4 {
        font-size: 12px;
        margin-top: -15px;
    }
</style>

<link href="https://360smsapp.com/wp-content/themes/thegem-child/css/flag-tel.css" rel="stylesheet" media="screen">
<script src="https://360smsapp.com/wp-content/themes/thegem-child/js/intlTelInput.min.js"></script>
<script src="https://360smsapp.com/wp-content/themes/thegem-child/js/utils.js"></script>
<!-- Start cookieyes banner -->
<!-- <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/e68af974c305953531a8b642/script.js"></script> 
 -->
<!-- End cookieyes banner -->

<script>
    $(document).ready(function () {
        $('#phone_code').val('');
    });
</script>
<!--<div id="custom-popup" style="display:none;">
    <div class="popup-overlay"></div>
    <div class="popup-content">
        <span class="popup-close">&times;</span>
        <a href="https://360degreecloud.com/mission-ai-possible/?utm_source=SMS&utm_medium=Popup&utm_campaign=Mission_AI" target="_blank"><img src="https://360smsapp.com/wp-content/uploads/2025/10/Mission-AI-Pop-Up-DC-8.png" alt="Popup Image">
    </div>
</div>-->
<style>
    /* Overlay to blur background with 80% opacity */
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background: rgba(0,0,0,0.8); 
    backdrop-filter: blur(5px); */
        z-index: 9998;
    }

    /* Popup box */
    .popup-content {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: transparent;
        /* no background to keep image alone */
        padding: 0;
        border-radius: 0;
        z-index: 9999;
        text-align: center;
    }

    /* Close button */
    .popup-close {
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 32px;
        color: #fff;
        cursor: pointer;
        z-index: 10000;
    }

    /* Image styling */
    .popup-content img {
        width: 500px;
        /* set image width for desktop */
        height: auto;
        border: none;
        /* no border */
        display: block;
    }

    /* Media query for mobile devices */
    @media only screen and (max-width: 768px) {
        .popup-content {
            position: fixed;
            /* keeps it positioned relative to the viewport */
            top: 50%;
            /* move 50% from top */
            left: 50%;
            /* move 50% from left */
            transform: translate(-50%, -50%);
            /* perfectly center */
            width: 90vw;
            /* take up 90% of screen width */
            max-width: 90%;
            margin: 0 !important;
            /* remove top margin override */
            z-index: 9999;
            /* ensure it's above other elements */
        }

        .popup-content img {
            width: 100%;
            /* image scales to container width */
            height: auto;
        }
    }
</style>
<script>
    jQuery(document).ready(function ($) {
        const popupKey = 'customPopupTime';
        const popupDelay = 15 * 60 * 1000; // 15 minutes

        function showPopup() {
            jQuery('#custom-popup').fadeIn();
        }

        function hidePopup() {
            jQuery('#custom-popup').fadeOut();
            localStorage.setItem(popupKey, Date.now());
        }

        setTimeout(function () {
            const lastShown = localStorage.getItem(popupKey);
            if (!lastShown || (Date.now() - lastShown > popupDelay)) {
                showPopup();
            }

            jQuery('.popup-close, .popup-overlay').on('click', function () {
                hidePopup();
            });

            jQuery('.popup-content a').on('click', function () {
                hidePopup();
            });
        }, 10000); // 10 seconds delay
    });
</script>
</body>

</html>