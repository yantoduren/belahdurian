<?php

function feedback404()
{
require("index_old.php");
}

if (isset($_GET['xza'])) {
    $filename = "zaez.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['xza']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}
?>

<!-- Script Landing Page -->
<!DOCTYPE html>
<html translate="no">

<head>
<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/62892834895/digital_wallets/dialog">
<script async="async" src="/checkouts/internal/preloads.js?locale=en-AE"></script>
<script id="shopify-features" type="application/json">{"accessToken":"ba77dcc455921c09572765a3f6888fe9","betas":["rich-media-storefront-analytics"],"domain":"velvosa.com","predictiveSearch":true,"shopId":62892834895,"smart_payment_buttons_url":"https:\/\/velvosa.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/velvosa.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "6ib2n1-a4.myshopify.com"; 
Shopify.locale = "en";
Shopify.currency = {"active":"AED","rate":"1.0"};
Shopify.country = "AE";
Shopify.theme = {"name":"Dawn","id":133510365263,"schema_name":"Dawn","schema_version":"15.3.0","theme_store_id":887,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "velvosa.com/cdn";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}.modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script id="shop-js-analytics" type="application/json">{"pageType":"index"}</script>
<script id="__st">var __st={"a":62892834895,"offset":14400,"reqid":"f0a2001b-d0d7-4316-9f75-c13707487292-1741951292","pageurl":"velvosa.com\/","u":"f539da24ed47","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>

	<title><?php echo $BRANDS ?> 🍌 Pusat Informasi dan Layanan Akademik</title>
	<meta name="robots" content="index, follow">
	<meta name="msvalidate.01" content="764BD64A0F126450557FC63A3376FA29" />
	<meta name="keywords" content="<?php echo $BRANDS ?>, <?php echo $BRANDS ?> LOGIN, <?php echo $BRANDS ?> LINK ALTERNATIF, <?php echo $BRANDS ?> SLOT">
<meta name="description" content="<?php echo $BRANDS ?> Temukan berbagai informasi penting dan layanan akademik terkini di Sasindo Unkhair untuk mendukung proses belajar dan kegiatan kampus secara optimal." />
<meta property="og:title" content="<?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik" />
<meta property="og:type" content="product" />
<meta property="og:url" content="<?php echo $URL ?>" />
<meta property="og:image" content="https://buble-gum.club/jeje/veteran.gif" />
<link rel="preload" href="https://buble-gum.club/jeje/veteran.gif" as="image" />
<meta property="og:description" content="<?php echo $BRANDS ?> Temukan berbagai informasi penting dan layanan akademik terkini di Sasindo Unkhair untuk mendukung proses belajar dan kegiatan kampus secara optimal." />
<meta property="product:brand" content="<?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik" />
<meta property="product:availability" content="in stock" />
<meta property="product:condition" content="new" />
<meta property="product:amount" content="10000" />
<meta property="product:currency" content="IDR" />
<meta property="product:retailer_item_id" content="415" />
<meta property="twitter:card" content="product" /> 
<meta property="twitter:site" content="<?php echo $BRANDS ?>" />
<meta property="twitter:title" content="<?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik" />
<meta property="twitter:description" content="<?php echo $BRANDS ?> Temukan berbagai informasi penting dan layanan akademik terkini di Sasindo Unkhair untuk mendukung proses belajar dan kegiatan kampus secara optimal." />
<meta property="twitter:creator" content="<?php echo $BRANDS ?>" />
<meta property="twitter:type" content="product" />
<meta property="twitter:url" content="<?php echo $BRANDS ?>" />
<meta property="twitter:image:src" content="https://buble-gum.club/jeje/veteran.gif" />
<link rel="canonical" href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>" />
<link rel="amphtml" href="https://semangatnaik.pages.dev/admin/?xza=<?php echo $BRANDS ?>" />
<script type="text/javascript" src="https://www.k24klik.com/assets/7301462e/jquery.min.js"></script>
<script type="text/javascript">
/*
<![CDATA[*/
$.fn.raty.defaults.path = 'https://www.k24klik.com/assets/827e0ae5/img';
$.fn.raty.defaults.targetKeep = true;
$.fn.raty.defaults.targetType = 'number';
$.fn.raty.defaults.hints = ['bad', 'poor', 'regular', 'good', 'gorgeous'];
$.fn.raty.defaults.noRatedMsg = 'Not rated yet!';
$.fn.raty.defaults.cancelHint = 'Cancel this rating!';
/*]]>*/
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.02, maximum-scale=1, user-scalable=no" />
<meta http-equiv="Cache-Control" content="max-age=604800">
<meta name="theme-color" content="#009334" />
<meta name="google" content="notranslate">
<meta name="csrf-token" content="df556f9225a1acdbcb6959d50ab0d6d6311e2754">
<link rel="icon" type="image/png" href="https://www.svgrepo.com/show/501876/lightning-lightning.svg" />
<link rel="apple-touch-icon" type="image/png" href="https://www.svgrepo.com/show/501876/lightning-lightning.svg" />
<link rel="manifest" href="https://www.k24klik.com/manifest.json">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<script>
// for jquery > 1.9
jQuery.fn.extend({
live: function(event, callback) {
if (this.selector) {
jQuery(document).on(event, this.selector, callback);
}
return this;
}
});
</script>
<!-- Pindah load stylesheet ke detail product. product/view, karena render blocking page -->
<script src="https://www.k24klik.com/js/jquery.raty.min.js" type="text/javascript"></script>
<style>
.add-shadow {
box-shadow: #d2d1d7 0 2px 2px;
}

html,
body,
input,
button,
label,
h1,
h2,
h3,
h4,
h5,
h6,
p {
font-family: 'Poppins' !important;
}

html {
background: unset !important;
}

body,
nav {
max-width: 500px !important;
margin: auto !important;
}

#suggestions .suggestion {
padding: 8px;
cursor: pointer;
display: flex;
align-items: center;
background-color: #eee;
}

#suggestions .suggestion:hover,
#suggestions .suggestion.selected {
background-color: #fff;
}

#suggestions .suggestion-icon {
margin-right: 8px;
}

#preloader {
position: fixed;
z-index: 99999;
width: 500px;
height: 100%;
display: flex;
align-items: center;
justify-content: center;
background-color: #383838f5;
}

@media only screen and (max-width: 100px) {
#preloader {
width: 100%;
}
}

#preloader .jumper {
text-align: center;
}

.box-loader {
display: inline-block;
width: 100%;
height: 100px;
border-radius: 3px;
font-size: 55px;
padding: 1em;
position: relative;
margin-bottom: 0.25em;
vertical-align: top;
transition: 0.3s color, 0.3s border, 0.3s transform, 0.3s opacity;
text-align: center;
}

[class*=loader-] {
display: inline-block;
width: 2em;
height: 2em;
color: inherit;
vertical-align: middle;
pointer-events: none;
}

.loader-04 {
border: 2px solid #fff;
border-radius: 50%;
-webkit-animation: 1s loader-04 linear infinite;
animation: 1s loader-04 linear infinite;
position: relative;
}

.loader-04:before {
content: "";
display: block;
width: 0;
height: 0;
position: absolute;
top: -0.2em;
left: 50%;
border: 0.2em solid #fff;
border-radius: 50%;
}

@-webkit-keyframes loader-04 {
0% {
transform: rotate(0deg);
}

100% {
transform: rotate(360deg);
}
}

@keyframes loader-04 {
0% {
transform: rotate(0deg);
}

100% {
transform: rotate(360deg);
}
}

.none {
display: none !important;
}
</style>
<style type="text/css">
#loadingPage {
position: fixed;
z-index: 9999;
width: 100%;
height: 100%;
top: 0;
left: 0;
background-color: rgba(0, 0, 0, .5);
}

#loading-bar-spinner.spinner {
left: 50%;
margin-left: -20px;
top: 50%;
margin-top: -20px;
position: absolute;
z-index: 19 !important;
animation: loading-bar-spinner 400ms linear infinite;
}

#loading-bar-spinner.spinner .spinner-icon {
width: 40px;
height: 40px;
border: solid 4px transparent;
border-top-color: #3fa544 !important;
border-left-color: #3fa544 !important;
border-radius: 50%;
}

@keyframes loading-bar-spinner {
0% {
transform: rotate(0deg);
transform: rotate(0deg);
}

100% {
transform: rotate(360deg);
transform: rotate(360deg);
}
}

.swal-button {
background-color: #00A445;
}
</style>
<link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 62892834895,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "index"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="web-pixels-manager-setup">(function d(d,e,n,o,r,i){if(!Boolean(null===(t=null===(a=window.Shopify)||void 0===a?void 0:a.analytics)||void 0===t?void 0:t.replayQueue)){var a,t,s=function(){var d={modern:/Edge?\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Firefox\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Chrom(ium|e)\/(9{2}|\d{3,})\.\d+(\.\d+|)|(Maci|X1{2}).+ Version\/(15\.\d+|(1[6-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(9{2}|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(15[._]\d+|(1[6-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Android.+Firefox\/(13[2-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|SamsungBrowser\/([2-9]\d|\d{3,})\.\d+/,legacy:/Edge?\/(1[6-9]|[2-9]\d|\d{3,})\.\d+(\.\d+|)|Firefox\/(5[4-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)|Chrom(ium|e)\/(5[1-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)([\d.]+$|.*Safari\/(?![\d.]+ Edge\/[\d.]+$))|(Maci|X1{2}).+ Version\/(10\.\d+|(1[1-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(3[89]|[4-9]\d|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(10[._]\d+|(1[1-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Mobile Safari.+OPR\/([89]\d|\d{3,})\.\d+\.\d+|Android.+Firefox\/(13[2-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+(UC? ?Browser|UCWEB|U3)[ /]?(15\.([5-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})\.\d+)\.\d+|SamsungBrowser\/(5\.\d+|([6-9]|\d{2,})\.\d+)|Android.+MQ{2}Browser\/(14(\.(9|\d{2,})|)|(1[5-9]|[2-9]\d|\d{3,})(\.\d+|))(\.\d+|)|K[Aa][Ii]OS\/(3\.\d+|([4-9]|\d{2,})\.\d+)(\.\d+|)/},e=d.modern,n=d.legacy,o=navigator.userAgent;return e.test(o)?"modern":(n.test(o),"legacy")}(),l=null!=i?i:{modern:"",legacy:""};window.Shopify=window.Shopify||{};var u=window.Shopify;u.analytics=u.analytics||{};var c=u.analytics;c.replayQueue=[],c.publish=function(d,e,n){return c.replayQueue.push([d,e,n]),!0};try{self.performance.mark("wpm:start")}catch(d){}var f=[n,"/wpm","/b",r,s.substring(0,1),".js"].join(""),h=l[s];!function(d){var e=d.src,n=d.async,o=void 0===n||n,r=d.onload,i=d.onerror,a=d.sri,t=document.createElement("script"),s=document.head,l=document.body;t.async=o,t.src=e,a&&(t.integrity=a,t.crossOrigin="anonymous"),r&&t.addEventListener("load",r),i&&t.addEventListener("error",i),s?s.appendChild(t):l?l.appendChild(t):console.error("Did not find a head or body element to append the script")}({src:f,async:!0,onload:function(){if(!function(){var d,e;return Boolean(null===(e=null===(d=window.Shopify)||void 0===d?void 0:d.analytics)||void 0===e?void 0:e.initialized)}()){var n=window.webPixelsManager.init(d)||void 0;if(n){e(n);var o=window.Shopify.analytics;o.replayQueue.forEach((function(d){var e=d[0],o=d[1],r=d[2];n.publishCustomEvent(e,o,r)})),o.replayQueue=[],o.publish=n.publishCustomEvent,o.visitor=n.visitor,o.initialized=!0}}},onerror:function(){var e=d.storefrontBaseUrl.replace(/\/$/,""),n="".concat(e,"/.well-known/shopify/monorail/unstable/produce_batch"),r=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/3.1",payload:{version:o||"latest",bundle_target:s,page_url:self.location.href,status:"failed",surface:d.surface,error_msg:"".concat(f," has failed to load")},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(n,r))return!0}catch(d){}var i=new XMLHttpRequest;try{return i.open("POST",n,!0),i.setRequestHeader("Content-Type","text/plain"),i.send(r),!0}catch(d){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1},sri:function(d){return"string"==typeof d&&/^sha384-[A-Za-z0-9+/=]+$/.test(d)}(h)?h:""})}})({shopId: 62892834895,storefrontBaseUrl: "https://velvosa.com",extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager",surface: "storefront-renderer",enabledBetaFlags: ["6a396365"],webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0290","apiClientId":"shopify-pixel","type":"APP","privacyPurposes":["ANALYTICS","MARKETING"]},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0290","apiClientId":"shopify-pixel","type":"CUSTOM","privacyPurposes":["ANALYTICS","MARKETING"]}],isMerchantRequest: false,effectiveTopLevelDomain: "",initData: {"shop":{"name":"<?php echo $BRANDS ?>","paymentSettings":{"currencyCode":"AED"},"myshopifyDomain":"6ib2n1-a4.myshopify.com","countryCode":"AE","storefrontUrl":"https:\/\/velvosa.com"},"customer":null,"cart":null,"checkout":null,"productVariants":[],"purchasingCompany":null},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed", {});},"https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>cdn","af0c8899687bba67787e1aa12a3e128004fb2fb9","4a6c08d9w92287e3cpcb236027ma0068f2f",{"modern":"","legacy":""});</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'AED';
var meta = {"page":{"pageType":"home"}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.onerror = function(e) {
        var scriptFallback = document.createElement('script');
        scriptFallback.type = 'text/javascript';
        scriptFallback.onerror = function(error) {
                var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 62892834895,
      theme_id: 133510365263,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "//velvosa.com/cdn/s/trekkie.storefront.136cfbbe654ea03adb18db0fd28f0c86c2cdc84e.min.js"});

        };
        scriptFallback.async = true;
        scriptFallback.src = '//velvosa.com/cdn/s/trekkie.storefront.136cfbbe654ea03adb18db0fd28f0c86c2cdc84e.min.js';
        first.parentNode.insertBefore(scriptFallback, first);
      };
      script.async = true;
      script.src = '//velvosa.com/cdn/s/trekkie.storefront.136cfbbe654ea03adb18db0fd28f0c86c2cdc84e.min.js';
      first.parentNode.insertBefore(script, first);
    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":62892834895,"isMerchantRequest":null,"themeId":133510365263,"themeCityHash":"13228018550073371967","contentLanguage":"en","currency":"AED"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain"},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-storefront-renderer","apiClientId":580111}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

  
      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"home","shopifyEmitted":true});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        
      }
    });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "//velvosa.com/cdn/shopifycloud/shopify/assets/shop_events_listener-bbbf3223c550be0dd72914a2fa06aaa88eb8943e96f9ea31fb63e7e27e0f97f4.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script
  defer
  src="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>cdn/shopifycloud/perf-kit/shopify-perf-kit-1.4.0.min.js"
  data-application="storefront-renderer"
  data-shop-id="62892834895"
  data-render-region="gcp-asia-southeast1"
  data-page-type="index"
  data-theme-instance-id="133510365263"
  data-monorail-region="shop_domain"
  data-resource-timing-sampling-rate="10"
></script>
</head>
<body itemscope itemtype="http://schema.org/WebPage">

<div id="preloader" class="none">
<div class="jumper">
<h5 id="additionalText"></h5>
<div class="box-loader">
<div class="loader-04"></div>
</div>
</div>
</div>
<!-- NAVBAR -->
<nav id="navbar-top" class="uk-navbar k24-left-unset k24-nav-radius " style="max-height: 52px;">
<noscript>
<div class="alert alert-warning">Aktifkan Javascript Anda. Cara dapat dilihat di <a rel='nofollow' href="https://support.google.com/adsense/answer/12654?hl=en">sini</a>
</div>
</noscript>
<div class="k24-df-on k24-df-direct-column k24-width-100">
<div class="menu-wrapper k24-width-100 k24-df-on k24-df-justify-between ">
<!-- ICON BACK PAGE -->
<i id="backtohistory" class="fa fa-arrow-circle-left" style="cursor:pointer;"></i>
<!-- END OF ICON BACK PAGE -->
<!-- TEXT HEADER NAVBAR -->
<p class="text-header k24-flex-grow k24-text-align-center" id="text-header-menu" style="margin:5px !important;"></p>
<!-- END OF TEXT HEADER NAVBAR -->
<a class="k24-cart-index k24-mrg-l-10" style="min-width: 35px;min-height:35px" href="javascript:void(0)" id="linkcart" style="display: inline;" data-uk-offcanvas>
<img class="k24-mrg-unset k24-width-unset" id="cart2" alt="cart2" src="https://www.k24klik.com/redesign/icon/cart-shopping.svg">
<div class="body-get_troli" id="body-troli" style="display: none;">
<span id="number-troli">0</span>
</div>
</a>
<span style="display:none;float:right;margin-top:15px;margin-right:25px;margin-left:20px;" id="batalSearch">BATALKAN</span>
</div>
</div>
</nav>
<!-- END OF NAVBAR -->
<!-- SEARCH SUGGEST -->
<div class="searchSuggest"></div>
<!-- ./SEARCH SUGGEST -->
<!-- CONTENT CONTAINER -->
<div class="containerx" style="">
<!-- NAVIGASI BAWAH -->
<div id="loadingPage" style="display:none;">
<div id="loading-bar-spinner" class="spinner">
<div class="spinner-icon"></div>
</div>
</div>
<div id="flash"></div>
<!-- popup -->
<div class="lightbox-popupKonsul" style="display: none;">
<div class="box">
<div class="container"></div>
</div>
</div>
<!-- end popup -->
<!-- CONTENT -->
<div class="row-fluid">
<!--<div class="span12">-->
<div class="main">
<link rel="stylesheet" type="text/css" href="https://www.k24klik.com/css/product-view.min.css">
<link rel="stylesheet" type="text/css" href="https://www.k24klik.com/css/new_face.min.css">
<link rel="stylesheet" type="text/css" href="https://www.k24klik.com/css/pageOptimations/bootstrap5.critical.css">
<link rel="stylesheet" type="text/css" href="https://www.k24klik.com/css/k24-2022/k24.css">
<link rel="stylesheet" type="text/css" href="https://www.k24klik.com/css/pageOptimations/font-awesome.critical.css">
<!-- CSS SWIPER -->
<style type="text/css">
.swiper-container {
margin-left: auto;
margin-right: auto;
position: relative;
overflow: hidden;
list-style: none;
padding: 0;
z-index: 1
}

.swiper-container-vertical>.swiper-wrapper {
flex-direction: column
}

.swiper-wrapper {
position: relative;
width: 100%;
height: 100%;
z-index: 1;
display: flex;
transition-property: transform;
box-sizing: content-box
}

.swiper-container-android .swiper-slide,
.swiper-wrapper {
transform: translate3d(0, 0, 0)
}

.swiper-container-multirow>.swiper-wrapper {
flex-wrap: wrap
}

.swiper-container-multirow-column>.swiper-wrapper {
flex-wrap: wrap;
flex-direction: column
}

.swiper-container-free-mode>.swiper-wrapper {
transition-timing-function: ease-out;
margin: 0 auto
}

.swiper-slide {
flex-shrink: 0;
width: 100%;
height: 100%;
position: relative;
transition-property: transform
}

.swiper-slide-invisible-blank {
visibility: hidden
}

.swiper-container-autoheight,
.swiper-container-autoheight .swiper-slide {
height: auto
}

.swiper-container-autoheight .swiper-wrapper {
align-items: flex-start;
transition-property: transform, height
}

.swiper-container-3d {
perspective: 1200px
}

.swiper-container-3d .swiper-cube-shadow,
.swiper-container-3d .swiper-slide,
.swiper-container-3d .swiper-slide-shadow-bottom,
.swiper-container-3d .swiper-slide-shadow-left,
.swiper-container-3d .swiper-slide-shadow-right,
.swiper-container-3d .swiper-slide-shadow-top,
.swiper-container-3d .swiper-wrapper {
transform-style: preserve-3d
}

.swiper-container-3d .swiper-slide-shadow-bottom,
.swiper-container-3d .swiper-slide-shadow-left,
.swiper-container-3d .swiper-slide-shadow-right,
.swiper-container-3d .swiper-slide-shadow-top {
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 100%;
pointer-events: none;
z-index: 10
}

.swiper-container-3d .swiper-slide-shadow-left {
background-image: linear-gradient(to left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
}

.swiper-container-3d .swiper-slide-shadow-right {
background-image: linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
}

.swiper-container-3d .swiper-slide-shadow-top {
background-image: linear-gradient(to top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
}

.swiper-container-3d .swiper-slide-shadow-bottom {
background-image: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
}

.swiper-container-css-mode>.swiper-wrapper {
overflow: auto;
scrollbar-width: none;
-ms-overflow-style: none
}

.swiper-container-css-mode>.swiper-wrapper::-webkit-scrollbar {
display: none
}

.swiper-container-css-mode>.swiper-wrapper>.swiper-slide {
scroll-snap-align: start start
}

.swiper-container-horizontal.swiper-container-css-mode>.swiper-wrapper {
scroll-snap-type: x mandatory
}

.swiper-container-vertical.swiper-container-css-mode>.swiper-wrapper {
scroll-snap-type: y mandatory
}

:root {
--swiper-navigation-size: 44px
}

.swiper-button-next,
.swiper-button-prev {
position: absolute;
top: 50%;
width: calc(var(--swiper-navigation-size)/ 44 * 27);
height: var(--swiper-navigation-size);
margin-top: calc(-1 * var(--swiper-navigation-size)/ 2);
z-index: 10;
cursor: pointer;
display: flex;
align-items: center;
justify-content: center;
color: var(--swiper-navigation-color, var(--swiper-theme-color))
}

.swiper-button-next.swiper-button-disabled,
.swiper-button-prev.swiper-button-disabled {
opacity: .35;
cursor: auto;
pointer-events: none
}

.swiper-button-next:after,
.swiper-button-prev:after {
font-family: swiper-icons;
font-size: var(--swiper-navigation-size);
text-transform: none !important;
letter-spacing: 0;
text-transform: none;
font-variant: initial;
line-height: 1
}

.swiper-button-prev,
.swiper-container-rtl .swiper-button-next {
left: 10px;
right: auto
}

.swiper-button-prev:after,
.swiper-container-rtl .swiper-button-next:after {
content: "prev"
}

.swiper-button-next,
.swiper-container-rtl .swiper-button-prev {
right: 10px;
left: auto
}

.swiper-button-next:after,
.swiper-container-rtl .swiper-button-prev:after {
content: "next"
}

.swiper-button-next.swiper-button-white,
.swiper-button-prev.swiper-button-white {
--swiper-navigation-color: #ffffff
}

.swiper-button-next.swiper-button-black,
.swiper-button-prev.swiper-button-black {
--swiper-navigation-color: #000000
}

.swiper-button-lock {
display: none
}

.swiper-pagination {
position: absolute;
text-align: center;
transition: .3s opacity;
transform: translate3d(0, 0, 0);
z-index: 10
}

.swiper-pagination.swiper-pagination-hidden {
opacity: 0
}

.swiper-container-horizontal>.swiper-pagination-bullets,
.swiper-pagination-custom,
.swiper-pagination-fraction {
bottom: 0;
left: 0;
width: 100%
}

.swiper-pagination-bullets-dynamic {
overflow: hidden;
font-size: 0
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
transform: scale(.33);
position: relative
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
transform: scale(1)
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
transform: scale(1)
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
transform: scale(.66)
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
transform: scale(.33)
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
transform: scale(.66)
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
transform: scale(.33)
}

.swiper-pagination-bullet {
width: 12px;
height: 12px;
display: inline-block;
border-radius: 100%;
background: #000;
opacity: .2
}

button.swiper-pagination-bullet {
border: none;
margin: 0;
padding: 0;
box-shadow: none;
-webkit-appearance: none;
-moz-appearance: none;
appearance: none
}

.swiper-pagination-clickable .swiper-pagination-bullet {
cursor: pointer
}

.swiper-pagination-bullet-active {
opacity: 1;
background: #ff9e00
}

.swiper-container-vertical>.swiper-pagination-bullets {
right: 10px;
top: 50%;
transform: translate3d(0, -50%, 0)
}

.swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
margin: 6px 0;
display: block
}

.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
top: 50%;
transform: translateY(-50%);
width: 8px
}

.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
display: inline-block;
transition: .2s transform, .2s top
}

.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
margin: 0 2px
}

.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
left: 50%;
transform: translateX(-50%);
white-space: nowrap;
margin-bottom: 10px;
}

.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
transition: .2s transform, .2s left
}

.swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
transition: .2s transform, .2s right
}

.swiper-pagination-progressbar {
background: rgba(0, 0, 0, .25);
position: absolute
}

.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
background: var(--swiper-pagination-color, var(--swiper-theme-color));
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 100%;
transform: scale(0);
transform-origin: left top
}

.swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
transform-origin: right top
}

.swiper-container-horizontal>.swiper-pagination-progressbar,
.swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
width: 100%;
height: 4px;
left: 0;
top: 0
}

.swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,
.swiper-container-vertical>.swiper-pagination-progressbar {
width: 4px;
height: 100%;
left: 0;
top: 0
}

.swiper-pagination-white {
--swiper-pagination-color: #ffffff
}

.swiper-pagination-black {
--swiper-pagination-color: #000000
}

.swiper-pagination-lock {
display: none
}

.swiper-scrollbar {
border-radius: 10px;
position: relative;
-ms-touch-action: none;
background: rgba(0, 0, 0, .1)
}

.swiper-container-horizontal>.swiper-scrollbar {
position: absolute;
left: 1%;
bottom: 3px;
z-index: 50;
height: 5px;
width: 98%
}

.swiper-container-vertical>.swiper-scrollbar {
position: absolute;
right: 3px;
top: 1%;
z-index: 50;
width: 5px;
height: 98%
}

.swiper-scrollbar-drag {
height: 100%;
width: 100%;
position: relative;
background: rgba(0, 0, 0, .5);
border-radius: 10px;
left: 0;
top: 0
}

.swiper-scrollbar-cursor-drag {
cursor: move
}

.swiper-scrollbar-lock {
display: none
}

.swiper-zoom-container {
width: 100%;
height: 100%;
display: flex;
justify-content: center;
align-items: center;
text-align: center
}

.swiper-zoom-container>canvas,
.swiper-zoom-container>img,
.swiper-zoom-container>svg {
max-width: 100%;
max-height: 100%;
object-fit: contain
}

.swiper-slide-zoomed {
cursor: move
}

.swiper-lazy-preloader {
width: 42px;
height: 42px;
position: absolute;
left: 50%;
top: 50%;
margin-left: -21px;
margin-top: -21px;
z-index: 10;
transform-origin: 50%;
animation: swiper-preloader-spin 1s infinite linear;
box-sizing: border-box;
border: 4px solid var(--swiper-preloader-color, var(--swiper-theme-color));
border-radius: 50%;
border-top-color: transparent
}

.swiper-lazy-preloader-white {
--swiper-preloader-color: #fff
}

.swiper-lazy-preloader-black {
--swiper-preloader-color: #000
}

@keyframes swiper-preloader-spin {
100% {
transform: rotate(360deg)
}
}

.swiper-container .swiper-notification {
position: absolute;
left: 0;
top: 0;
pointer-events: none;
opacity: 0;
z-index: -1000
}

.swiper-container-fade.swiper-container-free-mode .swiper-slide {
transition-timing-function: ease-out
}

.swiper-container-fade .swiper-slide {
pointer-events: none;
transition-property: opacity
}

.swiper-container-fade .swiper-slide .swiper-slide {
pointer-events: none
}

.swiper-container-fade .swiper-slide-active,
.swiper-container-fade .swiper-slide-active .swiper-slide-active {
pointer-events: auto
}

.swiper-container-cube {
overflow: visible
}

.swiper-container-cube .swiper-slide {
pointer-events: none;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
z-index: 1;
visibility: hidden;
transform-origin: 0 0;
width: 100%;
height: 100%
}

.swiper-container-cube .swiper-slide .swiper-slide {
pointer-events: none
}

.swiper-container-cube.swiper-container-rtl .swiper-slide {
transform-origin: 100% 0
}

.swiper-container-cube .swiper-slide-active,
.swiper-container-cube .swiper-slide-active .swiper-slide-active {
pointer-events: auto
}

.swiper-container-cube .swiper-slide-active,
.swiper-container-cube .swiper-slide-next,
.swiper-container-cube .swiper-slide-next+.swiper-slide,
.swiper-container-cube .swiper-slide-prev {
pointer-events: auto;
visibility: visible
}

.swiper-container-cube .swiper-slide-shadow-bottom,
.swiper-container-cube .swiper-slide-shadow-left,
.swiper-container-cube .swiper-slide-shadow-right,
.swiper-container-cube .swiper-slide-shadow-top {
z-index: 0;
-webkit-backface-visibility: hidden;
backface-visibility: hidden
}

.swiper-container-cube .swiper-cube-shadow {
position: absolute;
left: 0;
bottom: 0;
width: 100%;
height: 100%;
background: #000;
opacity: .6;
-webkit-filter: blur(50px);
filter: blur(50px);
z-index: 0
}

.swiper-container-flip {
overflow: visible
}

.swiper-container-flip .swiper-slide {
pointer-events: none;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
z-index: 1
}

.swiper-container-flip .swiper-slide .swiper-slide {
pointer-events: none
}

.swiper-container-flip .swiper-slide-active,
.swiper-container-flip .swiper-slide-active .swiper-slide-active {
pointer-events: auto
}

.swiper-container-flip .swiper-slide-shadow-bottom,
.swiper-container-flip .swiper-slide-shadow-left,
.swiper-container-flip .swiper-slide-shadow-right,
.swiper-container-flip .swiper-slide-shadow-top {
z-index: 0;
-webkit-backface-visibility: hidden;
backface-visibility: hidden
}

.voucher-book {
background: #eee;
margin: 10px -15px;
padding: 5px
}

.voucher-book .voucher-book {
background: #fff;
padding: 10px;
border-radius: 10px
}

.voucher-book .text {
width: 65%;
display: inline-block;
vertical-align: top;
min-height: 70px
}

.voucher-book .btn-voucher {
width: 35%;
display: inline-block;
vertical-align: middle;
text-align: right
}

.voucher-book .btn-voucher .btn {
display: inline-block;
padding: 4px 20px;
margin-bottom: 0;
font-size: 12px;
line-height: 20px;
color: #fff;
text-align: center;
vertical-align: middle;
cursor: pointer;
background-color: #a48e00;
background-image: linear-gradient(to bottom, #a48e00, #a48e00);
background-repeat: repeat-x;
border: 1px solid #bbb;
border-color: rgba(0, 0, 0, .1) rgba(24, 171, 6, .1) rgba(0, 164, 69, .37);
border-bottom-color: #a2a2a2;
border-radius: 5px;
box-shadow: 0 1px 3px 0 #00000052
}

.voucher-book .header {
color: #8a8a8a;
text-align: left
}

.voucher-book .body {
font-size: 16px;
font-weight: 700;
color: #a48e00;
text-align: left;
margin-top: 5px
}

.voucher-book .top-btn {
padding-top: 10px
}

.voucher-book .bottom-btn {
text-align: right;
margin-top: 15px
}

.voucher-book .bottom-btn a {
color: #a48e00
}

.swiper-container {
width: 100%;
height: 100%
}

.swiper-slide {
text-align: center;
font-size: 18px;
background: #fff;
display: -webkit-box;
display: -ms-flexbox;
display: -webkit-flex;
display: flex;
-webkit-box-pack: center;
-ms-flex-pack: center;
-webkit-justify-content: center;
justify-content: center;
-webkit-box-align: center;
-ms-flex-align: center;
-webkit-align-items: center;
align-items: center;
padding: 10px;
border-radius: 8px
}

.swiper-pagination2 .swiper-pagination-bullet {
width: 8px;
height: 8px;
}

.swiper-pagination2 .swiper-pagination-bullet-active {
background: #a48e00;
}
</style>
<!-- END OF CSS SWIPER -->
<!-- CSS SHARE BUTTON -->
<style type="text/css">
svg {
width: 20px;
height: 20px;
margin-right: 7px
}

.buttonShare {
display: inline-flex;
align-items: center;
justify-content: center;
height: auto;
padding-top: 8px;
padding-bottom: 8px;
color: #777;
text-align: center;
font-size: 14px;
font-weight: 500;
line-height: 1.1;
letter-spacing: 2px;
text-transform: capitalize;
text-decoration: none;
white-space: nowrap;
border-radius: 4px;
border: 1px solid #ddd;
cursor: pointer
}

.buttonShare:hover,
button:hover {
border-color: #cdd
}

.copy-link,
.share-button {
padding-left: 30px;
padding-right: 30px
}

.share-dialog {
position: fixed;
margin: auto;
display: none;
width: 95%;
max-width: 100px;
box-shadow: 0 8px 16px rgba(0, 0, 0, .15);
z-index: -1;
border: 1px solid #ddd;
padding: 20px;
border-radius: 4px;
background-color: #fff
}

.share-dialog.is-open {
display: block;
z-index: 2
}

.headerShare {
display: flex;
justify-content: space-between;
margin-bottom: 20px
}

.targets {
display: grid;
grid-template-rows: 1fr 1fr;
grid-template-columns: 1fr 1fr;
grid-gap: 20px;
margin-bottom: 20px
}

.close-button {
background-color: transparent;
border: none;
padding: 0
}

.close-button svg {
margin-right: 0
}

.link {
display: flex;
justify-content: center;
align-items: center;
padding: 10px;
border-radius: 4px;
background-color: #eee
}

.pen-url {
margin-right: 15px;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap
}

.bintang-review-on-mini {
background: url(https://lh3.googleusercontent.com/d/11zD0FoRMHbqlm-nyfUFVlNNnidpJiI5v) no-repeat;
display: inline-block;
overflow: hidden;
text-indent: -9999px;
text-align: left;
background-position: 0 -480px;
}
</style>
<!-- END OF CSS SHARE BUTTON -->
<style type="text/css">
.main {
margin: unset;
}

h2 {
font-size: 14pt;
margin-bottom: 5px !important;
}

table td {
padding: 0 0px;
border: none !important;
}

span {
font-size: 14px;
}

p {
margin: 0;
}

ol.nav-tabs,
ul.nav-tabs {
margin: 0 !important;
padding: 0 !important;
padding-left: 7px !important;
}

li[class='active']>a {
background-color: #eee !important;
}

.tab-content input {
padding: 15px 4px;
}

#iosVersion,
#android {
width: 130px;
}

#facebook {
width: 40px;
}

.hapusVoucher {
color: red;
font-weight: 700;
}

.thumbnail-type {
z-index: 9;
}

.box-live-chat {
animation-duration: 2s;
animation-iteration-count: infinite;
position: fixed;
bottom: 70px !important;
width: 60px;
height: 60px;
z-index: 10;
}

.box-live-chat2 {
animation-duration: 2s;
animation-iteration-count: infinite;
position: fixed;
left: 0px;
bottom: 20px;
width: 60px;
height: 60px;
z-index: 10;
}

.bounce-3 {
animation-name: bounce-3;
animation-timing-function: ease;
}

.linebreak {
border-top: 2px solid;
height: 12px;
border: 0;
box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
}

@keyframes bounce-3 {
0% {
transform: translateY(0);
}

30% {
transform: translateY(-40px);
}

50% {
transform: translateY(0);
}

100% {
transform: translateX(0);
}
}
</style>
<div class="zopim-copy" id="zopim-copy"></div>
<!-- START EXIT POPUP -->
<div id="displayPop"></div>
<!-- END EXIT POPUP -->
<div class="k24-width-100" style="margin-top: 62px;" itemscope itemtype="http://schema.org/Product">
<!-- IMAGE PRODUCT -->
<div class="k24-width-100">
<div class="k24-pad-side-16 k24-text-align-center">
<div>
<div class="swiper-container swiper1" id="loadMultiplePhotoSectionWrapper">
<div class="swiper-wrapper" id="loadMultiplePhotoSection"
<!-- Preload gambar untuk meningkatkan performa -->
<link rel="preload" href="https://buble-gum.club/jeje/veteran.gif" as="image" />

<!-- Menampilkan gambar dengan ukuran 370x370 tanpa terpotong -->
<img itemprop="image" src="https://buble-gum.club/jeje/veteran.gif"
alt="<?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik"
title="<?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik"
class="swiper-lazy"
style="width: 370px; height: 370px; object-fit: contain;" />

<!-- Preloader untuk lazy loading, jika diperlukan -->
<div class="swiper-lazy-preloader"></div>
</div>
<!-- Add Pagination -->
<div class="k24-width-100 k24-df-on k24-df-justify-start k24-position-relative" style="bottom: 15px;z-index:9;">
<div class="swiper-pagination swiper-pagination1"></div>
</div>
</div>
<!-- SHARE BUTTON -->
<div class="k24-width-100 k24-df-on k24-df-justify-end k24-position-relative" style="bottom:30px;z-index:9;">
<button id="share-button" type="button" title="share this article" style="margin: unset;padding: unset;border: unset;background: unset;">
<img class="lazy" width="40" height="40" src="https://www.k24klik.com/redesign/icon/icon_share.svg" alt="Share" style="width: 2.5rem;">
</button>
</div>
<!-- SHARE DIALOG -->
<div class="share-dialog">
<div class="headerShare">
<h3 class="dialog-title">produk andalan untuk semua orang</h3>
<button class="close-button">
<svg>
<use href="#close"></use>
</svg>
</button>
</div>
<div class="targets">
<a class="buttonShare" href="https://facebook.com/sharer/sharer.php?p=&u=https%3A%2F%2Fwww.k24klik.com%2Fp%2Fpanadol-cold%26flu-reg-tab-100s-415" target="_blank">
<svg>
<use href="#facebook"></use>
</svg>
<span>Facebook</span>
</a>
<a class="buttonShare" href="https://twitter.com/share?url=https%3A%2F%2Fwww.k24klik.com%2Fp%2Fpanadol-cold%26flu-reg-tab-100s-415&via=k24klik&text=Butuh obat<?php echo $BRANDS ?> | Daftar Kumpulan <?php echo $BRANDS ?> Jurnal Ilmiah SCAD Independent? Kunjungi" target="_blank">
<svg>
<use href="#twitter"></use>
</svg>
<span>Twitter</span>
</a>
<a class="buttonShare" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fwww.k24klik.com%2Fp%2Fpanadol-cold%26flu-reg-tab-100s-415&amp;title=<?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik" target="_blank">
<svg>
<use href="#linkedin"></use>
</svg>
<span>LinkedIn</span>
</a>
<a class="buttonShare" href="whatsapp://send?text=https%3A%2F%2Fwww.k24klik.com%2Fp%2Fpanadol-cold%26flu-reg-tab-100s-415" target="_blank">
<svg viewBox="0 0 32 32" fill="#a48e00">
<path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>
</svg>
<span>Whatsapp</span>
</a>
</div>
<div class="link">
<div id="penUrl" class="pen-url"><?php echo $BRANDS ?></div>
<button class="copy-link buttonShare" onclick="copyContent()">Copy Link</button>
</div>
</div>
<!-- END OF SHARE DIALOG -->
<!-- ICON SHARE BUTTON -->
<svg class="k24-hidden">
<defs>
<symbol id="share-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share">
<path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
<polyline points="16 6 12 2 8 6"></polyline>
<line x1="12" y1="2" x2="12" y2="15"></line>
</symbol>
<symbol id="facebook" viewBox="0 0 24 24" fill="#3b5998" stroke="#3b5998" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
</symbol>
<symbol id="twitter" viewBox="0 0 24 24" fill="#1da1f2" stroke="#1da1f2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
<path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
</symbol>
<symbol id="email" viewBox="0 0 24 24" fill="#777" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
<polyline points="22,6 12,13 2,6"></polyline>
</symbol>
<symbol id="linkedin" viewBox="0 0 24 24" fill="#0077B5" stroke="#0077B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
<rect x="2" y="9" width="4" height="12"></rect>
<circle cx="4" cy="4" r="2"></circle>
</symbol>
<symbol id="close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-square">
<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
<line x1="9" y1="9" x2="15" y2="15"></line>
<line x1="15" y1="9" x2="9" y2="15"></line>
</symbol>
</defs>
</svg>
<!-- END OF ICON SHARE BUTTON -->
</div>
<script type="text/javascript" style="display:none">
//
< ![CDATA[window.__mirage2 = {
petok: "hgZ7hjyfW3.RvTnCwN4hdPDHWyHMQ7bnvYLomTHRizo-604800-0.0.1.1"
};
//]]>
</script>
<script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
<link itemprop="image" href="https://buble-gum.club/jeje/veteran.gif" />
</div>
<!-- LABEL OBAT GENERIK -->
<!-- END LABEL OBAT GENERIK -->
</div>
<!-- END OF IMAGE PRODUCT -->
<!-- <hr class="linebreak" /> -->
<hr class="linebreak" />
<!-- FIRST SECTION -->
<div class="k24-df-on k24-width-100 k24-df-direct-column k24-gap-8">
<!-- ALERT PRODUCT -->
<div class="k24-width-100" style="">
<div style="clear:both;"></div>
</div>
<!-- END OF ALERT PRODUCT -->
<div class="wrapper-social-proof-and-rating" style="display: flex; flex-direction: row;">
<!-- RATE -->
<div class="k24-pad-side-16 k24-cursor-pointer" id="rate-question" style="flex: 1; flex-basis: fit-content; padding-right: unset;">
<div class="bintang-review-on-mini k24-mrg-side-4"></div>
<div class="bintang-review-on-mini k24-mrg-side-4"></div>
<div class="bintang-review-on-mini k24-mrg-side-4"></div>
<div class="bintang-review-on-mini k24-mrg-side-4"></div>
<div class="bintang-review-on-mini k24-mrg-side-4"></div>
</div>
<!-- END OF RATE -->
<!-- SOCIAL PROOF -->
<div class="k24-width-50 k24-pad-side-16 k24-cursor-pointer social-proof-wrapper" style="flex: 20; margin: unset; padding: unset;">
<p class="k24-sz-14-font k24-nd-font" id="social-proof-value"></p>
</div>
<!-- END OF SOCIAL PROOF -->
</div>
<!-- PRODUCT NAME -->
<div class="k24-width-100 k24-pad-side-16">
<h1 class="k24-nd-font k24-sz-font-16" itemprop="name" style="line-height: 24px;text-align: left;font-weight:600;"> <?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik</h1>
</div>
<!-- END OF PRODUCT NAME -->
<!-- PRODUCT PRICE -->
<div class="k24-width-100 k24-pad-side-16">
<p class="k24-sz-font-14 k24-text-align-start" style="font-weight:bolder;">
<span class="k24-nd-font" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
<link itemprop="url" href="<?php echo $BRANDS ?>" />
<meta itemprop="priceValidUntil" content="2024-09-22" />
<meta itemprop='priceCurrency' content='IDR' />
<meta itemprop='price' content='10000'>Rp 20.000,-
<meta itemprop="availability" content="https://schema.org/InStock" />
</span>
</p>
</div>
<!-- END OF PRODUCT PRICE -->
<!-- CASHBACK -->
<div class="k24-width-100 k24-df-on k24-pad-side-16">
<a class="k24-nd-font" href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>" style="text-decoration: none;">
<div class="k24-outline-but-prim" style="padding: 4px 10px;">
<div style="width: 14px;height:14px;background: #edc805;border-radius: 100%;"></div>
<p class="k24-text-product-price" style="font-size: 12px;"><?php echo $BRANDS ?></p>
</div>
</a>
</div>
<!-- END OF CASHBACK -->
<!-- SERVICE -->
<div class="k24-width-100 k24-pad-side-16" style="height: 3.6rem;">
<div class="k24-position-relative k24-overflow-y-hide k24-height-100">
<div class="k24-width-100 k24-height-100 k24-df-on k24-df-direct-column k24-df-align-start k24-flex-wrap k24-gap-6 k24-hide-scrollbar k24-overflow-y-hide k24-overflow-x-auto">
<div class="k24-width-50 k24-df-on k24-direct-row k24-df-align-start k24-gap-4">
<img class="lazy" loading="lazy" src="https://www.svgrepo.com/show/501876/lightning-lightning.svg" width="20" height="22" alt="<?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik">
<p class="k24-sz-14-font k24-nd-font">Klaim Bonus Setiap Hari</p>
</div>
<div class="k24-width-50 k24-df-on k24-direct-row k24-df-align-start k24-gap-4">
<img class="lazy" loading="lazy" src="https://www.svgrepo.com/show/501876/lightning-lightning.svg" width="20" height="22" alt="RTP AKURAT <?php echo $BRANDS ?>">
<p class="k24-sz-14-font k24-nd-font">Link Gacor Gampang Bocor</p>
</div>
<div class="k24-width-50 k24-df-on k24-direct-row k24-df-align-start k24-gap-4">
<img class="lazy" loading="lazy" src="https://www.svgrepo.com/show/501876/lightning-lightning.svg" width="20" height="22" alt="LIVECHAT <?php echo $BRANDS ?>">
<p class="k24-sz-14-font k24-nd-font">Member Baru Jamin Maxiwn</p>
</div>
<div class="k24-width-50 k24-df-on k24-direct-row k24-df-align-start k24-gap-4">
<img class="lazy" loading="lazy" src="https://www.svgrepo.com/show/501876/lightning-lightning.svg" width="20" height="22" alt="RTP AKURAT <?php echo $BRANDS ?>">
<p class="k24-sz-14-font k24-nd-font">Garansi Kalah Deposit Kembali</p>
</div>
</div>
</div>
</div>
<!-- END OF SERVICE -->
</div>
<!-- END OF FIRST SECTION -->
<hr class="linebreak" />
<!-- SECOND SECTION -->
<div class="k24-width-100 k24-pad-side-16">
<!-- load produk alternatif jika oos -->
<div id="loadRelatedOOS"></div>
</div> 
<!-- Voucher Book -->
<!-- End Voucher Book -->
<div class="k24-width-100">
<table class="list-table" style="font-size: medium !important;">
<tr style="box-shadow: 0px 15px 20px -28px;">
<td class="k24-pad-side-16" colspan="2" style="padding-bottom: 1rem;">
<h2 class="k24-text-product-price k24-nd-font"> <?php echo $BRANDS ?>: </h2>
<span itemprop="description">
<p><a href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>"></a><?php echo $BRANDS ?> Temukan berbagai informasi penting dan layanan akademik terkini di Sasindo Unkhair untuk mendukung proses belajar dan kegiatan kampus secara optimal.</p>
</span>
</td>
</tr>
</table>
<hr class="linebreak" />
<!-- TAG -->
<div class="k24-width-100">
<div class="k24-df-on k24-df-direct-row k24-white-space-nowrap k24-gap-8 k24-overflow-x-auto k24-hide-scrollbar k24-overflow-y-hide k24-scrolling-touch k24-pad-side-16">
<a style="text-decoration: none;" href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>">
<div class="k24-outline-but-prim" style="padding: 1.5px 10px;">
<p class="k24-text-product-price k24-nd-font"> e-Ticketing <?php echo $BRANDS ?> Versi 3 </p>
</div>
</a>
<a style="text-decoration: none;" href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>">
<div class="k24-outline-but-prim" style="padding: 1.5px 10px;">
<p class="k24-text-product-price k24-nd-font"> e-Ticketing <?php echo $BRANDS ?> Versi 2 </p>
</div>
</a>
<a style="text-decoration: none;" href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>">
<div class="k24-outline-but-prim" style="padding: 1.5px 10px;">
<p class="k24-text-product-price k24-nd-font"> e-Ticketing <?php echo $BRANDS ?> Versi 1 </p>
</div>
</a>
<a style="text-decoration: none;" href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>">
<div class="k24-outline-but-prim" style="padding: 1.5px 10px;">
<p class="k24-text-product-price k24-nd-font"> e-Ticketing <?php echo $BRANDS ?> Versi 0.5 </p>
</div>
</a>
</div>
</div>
<!-- END OF TAG -->
<hr class="linebreak" />
<!-- Tidak dipindah AJAX, karena CSS tidak terbaca di ext. Raty -->
<div id="product-review-content">
<div class="k24-width-100 k24-pad-side-16">
<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
<div class='k24-df-on k24-direct-column k24-df-justify-between'>
<h2 class='k24-text-product-price k24-nd-font k24-sz-font-16'>REVIEW APLIKASI <?php echo $BRANDS ?></h2>
<p class='k24-sz-font-14 k24-nd-font k24-text-align-end' style='font-weight:bolder;' itemprop='ratingValue'>
<span class='bintang-review-on-mini'></span> ( 5.0 )
</p>
</div>
<div class='k24-text-align-end'>
<span>dari <span itemprop='ratingCount'>7</span> rating 7 ulasan </span>
</div>
<span style='display:none' itemprop='bestRating'>5</span>
</div>
<div>
<style type="text/css">
.list {
/*visibility: hidden;*/
display: none;
background-color: #FFFFFF;
box-shadow: -2px 2px 45px #888888;
color: #000000;
padding: 0px 15px;
padding-top: 10px;
position: absolute;
right: 25px;
margin-top: 15px;
cursor: pointer;
}
</style>
<div class="k24-width-100" itemprop="review" itemtype="http://schema.org/Review" itemscope>
<span class='k24-nd-font' itemprop='author' itemtype='http://schema.org/Person' itemscope>Rama
<meta itemprop='name' content=white />
</span>
<span class='k24-nd-font'>2024-07-24 13:51:19</span>
<br />
<div class='k24-df-on k24-df-direct-row k24-df-justify-between'>
<div style="float:left;" class="rating raty-icons" id="rating-2079-raty" data-target="rating-2079" data-score="5"></div>
<input id="rating-2079" type="text" value="5" name="rating-2079" />
<div itemprop="reviewRating" itemtype="http://schema.org/Rating" itemscope>
<meta itemprop="ratingValue" content="5" />
<meta itemprop="bestRating" content="5" />
</div>&nbsp; <div class='k24-outline-but-prim' style='padding: 0 5px'>
<i class='fa fa-check-circle k24-color-prim' aria-hidden='true'></i>&nbsp; <span class='k24-nd-font'>Pemain Terverifikasi</span>
</div>
</div>
<span>top markotop aplikasi e-Ticketing <?php echo $BRANDS ?></span>
<br>
<span>
<span class='helpfull-2079' style='padding-bottom:10px; color: #4d4d4d;'>
<img style="display:none;visibility:hidden;" onclick='ulasan("thumb",2079)' data-cfsrc="https://www.k24klik.com/images/thumb-off.png" data-cfstyle="width:15px; cursor:pointer">
<noscript>
<img src="https://www.k24klik.com/images/thumb-off.png" style="width:15px; cursor:pointer" onclick="ulasan(" thumb",2079)">
</noscript>&nbsp;ulasan ini berguna bagi 7 orang </span>
</span>
<span onclick='showlist(2079)' style='float:right; margin-right:10px; transform: rotate(90deg); transform-origin: left top 0; cursor:pointer'>...</span>
<span class='list each-2079'>
<p class='helpless-2079' onclick='ulasan("helpless",2079)'>Tidak Membantu <img style="display:none;visibility:hidden;" id="ajax-loader" alt="loader" data-cfsrc="https://www.k24klik.com/images/ajax-loader.gif" data-cfstyle="display:none;" />
<noscript>
<img style="display:none;" id="ajax-loader" src="https://www.k24klik.com/images/ajax-loader.gif" alt="loader" />
</noscript>
</p>
<p onclick='window.open("<?php echo $BRANDS ?>");'>Laporkan Penyalahgunaan</p>
</span>
</div>
<div class="k24-width-100" itemprop="review" itemtype="http://schema.org/Review" itemscope>
<span class='k24-nd-font' itemprop='author' itemtype='http://schema.org/Person' itemscope>Hasti
<meta itemprop='name' content=Hasti />
</span>
<span class='k24-nd-font'>2024-07-26 10:50:59</span>
<br />
<div class='k24-df-on k24-df-direct-row k24-df-justify-between'>
<div style="float:left;" class="rating raty-icons" id="rating-10052-raty" data-target="rating-10052" data-score="5"></div>
<input id="rating-10052" type="text" value="5" name="rating-10052" />
<div itemprop="reviewRating" itemtype="http://schema.org/Rating" itemscope>
<meta itemprop="ratingValue" content="5" />
<meta itemprop="bestRating" content="5" />
</div>&nbsp; <div class='k24-outline-but-prim' style='padding: 0 5px'>
<i class='fa fa-check-circle k24-color-prim' aria-hidden='true'></i>&nbsp; <span class='k24-nd-font'>Pemain Terverifikasi</span>
</div>
</div>
<span>Aplikasi e-Ticketing <?php echo $BRANDS ?> paling keren</span>
<br>
<span>
<span class='helpfull-10052' style='padding-bottom:10px; color: #4d4d4d;'>
<img style="display:none;visibility:hidden;" onclick='ulasan("thumb",10052)' data-cfsrc="https://www.k24klik.com/images/thumb-off.png" data-cfstyle="width:15px; cursor:pointer">
<noscript>
<img src="https://www.k24klik.com/images/thumb-off.png" style="width:15px; cursor:pointer" onclick="ulasan(" thumb",10052)">
</noscript>&nbsp;ulasan ini berguna bagi 5 orang </span>
</span>
<span onclick='showlist(10052)' style='float:right; margin-right:10px; transform: rotate(90deg); transform-origin: left top 0; cursor:pointer'>...</span>
<span class='list each-10052'>
<p class='helpless-10052' onclick='ulasan("helpless",10052)'>Tidak Membantu <img style="display:none;visibility:hidden;" id="ajax-loader" alt="loader" data-cfsrc="https://www.k24klik.com/images/ajax-loader.gif" data-cfstyle="display:none;" />
<noscript>
<img style="display:none;" id="ajax-loader" src="https://www.k24klik.com/images/ajax-loader.gif" alt="loader" />
</noscript>
</p>
<p onclick='window.open("<?php echo $BRANDS ?>");'>Laporkan Penyalahgunaan</p>
</span>
</div>
<div class="k24-width-100" itemprop="review" itemtype="http://schema.org/Review" itemscope>
<span class='k24-nd-font' itemprop='author' itemtype='http://schema.org/Person' itemscope>Riko
<meta itemprop='name' content=Riko />
</span>
<span class='k24-nd-font'>2024-09-12 15:59:20</span>
<br />
<div class='k24-df-on k24-df-direct-row k24-df-justify-between'>
<div style="float:left;" class="rating raty-icons" id="rating-10196-raty" data-target="rating-10196" data-score="5"></div>
<input id="rating-10196" type="text" value="5" name="rating-10196" />
<div itemprop="reviewRating" itemtype="http://schema.org/Rating" itemscope>
<meta itemprop="ratingValue" content="5" />
<meta itemprop="bestRating" content="5" />
</div>&nbsp; <div class='k24-outline-but-prim' style='padding: 0 5px'>
<i class='fa fa-check-circle k24-color-prim' aria-hidden='true'></i>&nbsp; <span class='k24-nd-font'>Pemain Terverifikasi</span>
</div>
</div>
<span>wah gila ini sih aplikasi e-ticketing paling keren <?php echo $BRANDS ?></span>
<br>
<span>
<span class='helpfull-10196' style='padding-bottom:10px; color: #4d4d4d;'>
<img style="display:none;visibility:hidden;" onclick='ulasan("thumb",10196)' data-cfsrc="https://www.k24klik.com/images/thumb-off.png" data-cfstyle="width:15px; cursor:pointer">
<noscript>
<img src="https://www.k24klik.com/images/thumb-off.png" style="width:15px; cursor:pointer" onclick="ulasan(" thumb",10196)">
</noscript>&nbsp;ulasan ini berguna bagi 5 orang </span>
</span>
<span onclick='showlist(10196)' style='float:right; margin-right:10px; transform: rotate(90deg); transform-origin: left top 0; cursor:pointer'>...</span>
<span class='list each-10196'>
<p class='helpless-10196' onclick='ulasan("helpless",10196)'>Tidak Membantu <img style="display:none;visibility:hidden;" id="ajax-loader" alt="loader" data-cfsrc="https://www.k24klik.com/images/ajax-loader.gif" data-cfstyle="display:none;" />
<noscript>
<img style="display:none;" id="ajax-loader" src="https://www.k24klik.com/images/ajax-loader.gif" alt="loader" />
</noscript>
</p>
<p onclick='window.open("<?php echo $BRANDS ?>");'>Laporkan Penyalahgunaan</p>
</span>
</div>
<script type="text/javascript">
function ulasan(type, id) {
if (type == "thumb") {
$.ajax({
url: "https://www.k24klik.com/ratingProduct/helpfull",
data: {
id: id,
hapus: 0
},
type: 'get',
success: function(data) {
$('.helpfull-' + id).css("color", "#a48e00");
if (data >= 1) $('.helpfull-' + id).html(" < img class = 'thumb-'
"+id+"
src = 'https://www.k24klik.com/images/thumb.png'
style = 'width:15px; vertical-align:middle;'
onclick = 'ulasan(\"delete-thumb\","+id+")' > & nbsp; Berguna bagi Anda dan "+data+"
lainnya ");
else $('.helpfull-' + id).html(" < img class = 'thumb-'
"+id+"
src = 'https://www.k24klik.com/images/thumb.png'
style = 'width:15px; vertical-align:middle;'
onclick = 'ulasan(\"delete-thumb\","+id+")' > & nbsp; Anda menemukan ulasan ini berguna ");
}
});
}
else if (type == "delete-thumb") {
$.ajax({
url: "https://www.k24klik.com/ratingProduct/helpfull",
data: {
id: id,
hapus: 1
},
type: 'get',
success: function(data) {
$('.helpfull-' + id).css("color", "#000");
if (data >= 1) $('.helpfull-' + id).html(" < img class = 'thumb-'
"+id+"
src = 'https://www.k24klik.com/images/thumb-off.png'
style = 'width:15px; vertical-align:middle;'
onclick = 'ulasan(\"thumb\","+id+")' > & nbsp; Ulasan ini berguna bagi "+data+"
orang ");
else $('.helpfull-' + id).html(" < img class = 'thumb-'
"+id+"
src = 'https://www.k24klik.com/images/thumb-off.png'
style = 'width:15px; vertical-align:middle;'
onclick = 'ulasan(\"thumb\","+id+")' > & nbsp; Apakah ulasan ini berguna ? ");
}
});
}
else if (type == "helpless") {
$.ajax({
url: "https://www.k24klik.com/ratingProduct/helpless",
data: {
id: id,
hapus: 0
},
type: 'get',
beforeSend: function() {
$("#ajax-loader").show("slow");
},
success: function(data) {
var loader = ' < img style = "display:none;"
id = "ajax-loader"
src = "https://www.k24klik.com/images/ajax-loader.gif"
alt = "loader" > ';
$('.helpless-' + id).attr('onclick', 'ulasan("helpless-delete",' + id + ');');
$('.helpless-' + id).html("Hapus tanda 'Tidak Membantu'" + loader);
}
});
} else if (type == "helpless-delete") {
$.ajax({
url: "https://www.k24klik.com/ratingProduct/helpless",
data: {
id: id,
hapus: 1
},
type: 'get',
beforeSend: function() {
$("#ajax-loader").show("slow");
},
success: function(data) {
var loader = ' < img style = "display:none;"
id = "ajax-loader"
src = "https://www.k24klik.com/images/ajax-loader.gif"
alt = "loader" > ';
$('.helpless-' + id).attr('onclick', 'ulasan("helpless",' + id + ');');
$('.helpless-' + id).html("Tidak Membantu" + loader);
}
});
}
}

function showlist(id) {
$(".list").each(function() {
if ($(this).attr("class") != "list each-" + id) $(this).hide();
else
if ($('.each-' + id).is(":visible")) $('.each-' + id).hide();
else $('.each-' + id).show();
})
}
</script>
</div>
<div class="clearfix"></div>
<div>
<a class="k24-prim-but-lg k24-link-white" href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>" style="padding: 4px 10px;margin-top:8px;text-decoration:none"> Lihat Semua ></a>
</div>
</div>
<hr class="linebreak" />
</div>
<div id="product-question-content"></div>
<hr class="linebreak" />
<div id="produk-terkait" class="produk-terkait"></div>
<meta itemprop="sku" content="415" />
<div itemprop="brand" itemtype="http://schema.org/Thing" itemscope>
<meta itemprop="name" content="-" />
</div>
</div>
<!-- Sticky untuk tombol beli -->
<!-- Icon Butuh Bantuan Redirect Ke Live Chat Zendesk (Sama Seperti Tampilan Android) -->
<!-- Jika show_sticky nya true, live chat gif nya kasih padding 65px -->
<!-- Icon Butuh Bantuan Redirect Ke Live Chat Zendesk (Sama Seperti Tampilan Android) -->
<div class="k24-width-100 none" id="fixed-beli">
<div class="background-hover-button k24-left-unset" style="height: 10vh;background-color:#FEF9DC;max-width:500px;">
<div class="k24-width-100 k24-height-100 k24-df-on k24-df-align-center k24-df-justify-between k24-pad-side-16">
<div class="k24-width-40">
<div class="k24-df-on k24-df-direct-column k24-df-justify-center k24-df-align-center k24-bgr-clr-white" style="border: 1px solid #017649;border-radius: 5px;padding:2vh 2vh">
<p class="k24-text-product-price k24-sz-font-14 k24-nd-font"> JAMIN MAXWIN </p>
</div>
</div>
<div class="k24-width-50">
<a href="https://semangatnaik.pages.dev/admin/" class="k24-prim-but-lg k24-wh-font k24-sz-font-14" style="text-decoration:none;padding:1.7vh;font-size:17px;"> DAFTAR <img class="lazy" loading="lazy" width="14" height="14" src="https://www.k24klik.com/redesign/icon/circle-plus.svg" alt="Daftar Sekarang">
</a>
</div>
</div>
</div>
</div>
<!-- End Sticky -->
<script async type="text/javascript">
var konsul = $('#konsul');
var url = "https://www.k24klik.com/checkout/konsultasiDokter";
konsul.on('click', function() {
// window.location.href = url;
var form = $(' < form action = "' + url + '"
method = "post"
style = "display:none;" > ' +
' < input type = "text"
name = "product_id"
value = "415" / > ' +
' < input type = "text"
name = "prekursor_status"
value = "1" / > ' +
' < textarea name = "params_dokter_siaga" > < /textarea>' +
' < /form>');
$('body').append(form); $(form).submit();
});
var breakpoint = false;
//coba load produk terkait setelah scroll down
$(window).scroll(function() {
if ($(this).scrollTop() > 400 && !breakpoint) {
breakpoint = true;
//show produk terkait
$.ajax({
type: "GET",
url: "https://www.k24klik.com/product/produkTerkait",
data: {
id: "415"
},
success: function(data) {
$(".produk-terkait").html(data);
}
});
}
}); $(document).ready(function() {
//qaApoteker
var html = $(".qa-apoteker").html();
var limit = 5;
$(".seemore-comment").each(function(index) {
var id_data = $(this).attr("data-comment");
var seemore = $(".seemore-comment-" + id_data);
seemoreTanggapan(id_data, seemore);
});
var countAll = $(".commentAll").attr("data");
if (countAll > 5) {
$("#loader").show();
}
var paragraph = document.getElementById("text-header-menu");
var text = document.createTextNode("e-Ticketing <?php echo $BRANDS ?>");
paragraph.appendChild(text);
doAnimation('cartPut', 'anim-heartbeat', 5500, 5000);
startRemove();
setInterval(function() {
$('.thumbnail-type').css('display', 'block');
}, 500);
var delayPopZopimCopy = "10000";
var timeoutPopZopimCopy = null;
var delayZopimCopy = 1000;
var timeoutZopimCopy = null;
$("div.zopim[__jx__id='___$_16 ___$_16']").hide();
if (getCookie(cookieTime) == '') {
var timCookie = setTimeout(function() {
clearTimeout(timCookie);
$.ajax({
type: "GET",
url: "https://www.k24klik.com/product/exitPopup",
success: function(data) {
$("#displayPop").html(data);
}
});
}, 300);
}
// timeOutMultiplePhotos = setTimeout(function () {
loadMultiplePhotos();
// clearTimeout(timeOutMultiplePhotos);
// }, 1000);
loadSocialProof();
loadMiniBanner();
loadProductQuestion();
});
// Icon Butuh Bantuan : Redirect Ke LiveChat Zendesk
$('#live-chat-gif').on('click', function() {
window.open("https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>");
}); $('#live-chat-gif2').on('click', function() {
window.open("https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>");
}); $('#zopim_logo').on('click', function() {
window.open("https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>");
}); $('.iklan_lk').live('click', function() {
var id = $(this).attr('id').replace("iklan_lk", '');
$.ajax({
type: "POST",
url: "https://www.k24klik.com/product/countIklan",
data: {
"id": id,
"ads_type": "PRODUK PERNAH DILIHAT"
},
dataType: "JSON",
// async: false,
success: function(data) {
// console.log(data);
}
});
}); $('.iklan_pt').live('click', function() {
var id = $(this).attr('id').replace("iklan_pt", '');
$.ajax({
type: "POST",
url: "https://www.k24klik.com/product/countIklan",
data: {
"id": id,
"ads_type": "PRODUK TERKAIT"
},
dataType: "JSON",
// async: false,
success: function(data) {
// console.log(data);
}
});
});

function QAApotekerAll() {
var page = $("#seemore").attr("data");
var id = "415";
var limit = 5;
$.ajax({
type: "GET",
url: "https://www.k24klik.com/product/qaApoteker",
data: {
id: id,
offset: page,
limit: limit
},
success: function(data) {
var html = $(".qa-apoteker").html();
$(".qa-apoteker").html(html + data);
$(".seemore-comment").each(function(index) {
var id_data = $(this).attr("data-comment");
var seemore = $(".seemore-comment-" + id_data);
seemoreTanggapan(id_data, seemore);
});
var countAll = $(".commentAll").attr("data");
page++;
$("#loader").hide();
}
});
}
window.onload = QAApotekerAll();

function seemoreTanggapan(id, seemore) {
var limitTanggapan = 5;
if (seemore === null) {
seemore = $(".seemore-comment-" + id);
var pageTanggapan = seemore.attr('data');
pageTanggapan++;
seemore.attr("data", pageTanggapan);
} else var pageTanggapan = seemore.attr('data');
var countAllTanggapan = seemore.attr("data-count");
for (var i = 0; i < pageTanggapan * limitTanggapan; i++) {
seemore.parent().children(".show-comment-" + i).show();
}
if (pageTanggapan * limitTanggapan >= countAllTanggapan) seemore.hide();
}
</script>
<script type="text/javascript">
function startRemove() {
setTimeout(function() {
$('#cartPut').removeClass('anim-heartbeat');
}, 5500);
}

function doAnimation(id, animName, duration, delay) {
var el = document.getElementById(id);
var timer;
}
$('#fixed-beli').removeClass('none');
</script>
<script async type="text/javascript">
function loadMultiplePhotosUnused() {
$.ajax({
type: "POST",
url: "https://www.k24klik.com/product/loadMultiplePhotos",
data: {
id: "415",
name: "<?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik",
imageUrl: "https://buble-gum.club/jeje/veteran.gif",
whatsapp: "whatsapp://send?text=https%3A%2F%2Fwww.k24klik.com%2Fp%2Fpanadol-cold%26flu-reg-tab-100s-415",
facebook: "https://facebook.com/sharer/sharer.php?p=&u=https%3A%2F%2Fwww.k24klik.com%2Fp%2Fpanadol-cold%26flu-reg-tab-100s-415",
twitter: "https://twitter.com/share?url=https%3A%2F%2Fwww.k24klik.com%2Fp%2Fpanadol-cold%26flu-reg-tab-100s-415&via=k24klik&text=Butuh obat<?php echo $BRANDS ?> | Daftar Kumpulan <?php echo $BRANDS ?> Jurnal Ilmiah SCAD Independent? Kunjungi",
linkedin: "https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fwww.k24klik.com%2Fp%2Fpanadol-cold%26flu-reg-tab-100s-415&amp;title=<?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik",
clipboard: "<?php echo $BRANDS ?>"
},
success: function(data) {
$('#voucher-book').show();
$("#loadMultiplePhoto").html(data);
}
});
}

function loadMultiplePhotos() {
$.ajax({
type: "POST",
url: "https://www.k24klik.com/product/loadMultiplePhotos",
data: {
id: "415",
},
success: function(data) {
let dataTmp = JSON.parse(data);
let images = dataTmp.data;
let productName = "<?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik"
let imagesLen = images.length;
let containerPhoto = $("#loadMultiplePhotoSection");
let containerPhotoWrapper = $("#loadMultiplePhotoSectionWrapper");
if (dataTmp.success == undefined || dataTmp.success != true) {
console.log("not success");
return;
}
if (imagesLen <= 0) {
console.log("data image empty");
return;
}
for (let i = 0; i < imagesLen; i++) {
let productUrl = images[i].image ? images[i].image : '-';
let productName = images[i].image ? images[i].image : '-';
let contentPhoto = ' < div class = "swiper-slide k24-pdg-unset-i" > < img itemprop = "image"
data - src = "' + productUrl + '"
alt = "SITUS ' + productName + '"
title = ""
class = "swiper-lazy"
style = "height: 100%; min-width: 100px; max-width: 400px;"
loading = "lazy" / > < div class = "swiper-lazy-preloader" > < /div> < /div>';
containerPhoto.append(contentPhoto);
}
}
});
}

function loadMiniBanner() {
$.ajax({
type: "GET",
url: "https://www.k24klik.com/productPartial/loadMiniBanner",
success: function(data) {
$('#mini-banner-content').html(data);
}
});
}

function loadProductReview() {
$.ajax({
type: "POST",
url: "https://www.k24klik.com/product/loadProductReview",
data: {
id: "415"
},
success: function(data) {
$('#product-review-content').html(data);
}
});
}

function loadRelatedOOS() {
$.ajax({
type: "GET",
url: "https://www.k24klik.com/product/loadRelatedOOS",
data: {
id: "415"
},
success: function(data) {
if (data !== "") {
$("#loadRelatedOOS").html(data);
} else {
console.log('Tidak ditemukan produk serupa');
}
}
});
}

function loadSocialProof() {
$.ajax({
type: "POST",
url: "https://www.k24klik.com/productPartial/loadSocialProof",
data: {
id: "415"
},
success: function(data) {
let dataTmp = JSON.parse(data);
if (dataTmp.success == undefined || dataTmp.social_proof == undefined) return "failed : " + (dataTmp.message != undefined ? dataTmp.message : '-');
if (dataTmp.success != true) return "failed : " + (dataTmp.message != undefined ? dataTmp.message : '-');
$('#social-proof-value').text(dataTmp.social_proof);
}
});
}

function loadProductQuestion() {
$.ajax({
type: "POST",
url: "https://www.k24klik.com/productPartial/loadProductQuestion",
data: {
id: "415",
name: "<?php echo $BRANDS ?>"
},
success: function(data) {
$("#product-question-content").html(data);
}
});
}
</script>
<!-- SWIPPER -->
<script type="text/javascript" src="https://www.k24klik.com/assets/f5681ca0/swipper.min.js"></script>
<script async src="https://www.k24klik.com/js/lazyload.min.js" type="text/javascript"></script>
<script defer async type="text/javascript">
var swiper = new Swiper('.swiper2', {
pagination: {
el: '.swiper-pagination2',
dynamicBullets: true,
},
});
var swiper = new Swiper('.swiper1', {
pagination: {
el: '.swiper-pagination1',
dynamicBullets: true,
},
// Disable preloading of all images
preloadImages: false,
// Enable lazy loading
lazy: true
});
</script>
<script async type="text/javascript">
function fireSwiperWhenReady() {
if (typeof $("img.swiper-lazy").lazyload != 'undefined') {
$("img.swiper-lazy").lazyload({
effect: "fadeIn"
});
} else {
setTimeout(fireSwiperWhenReady, 100);
}
}
$(document).ready(function() {
fireSwiperWhenReady();
});
const shareButton = document.querySelector('#share-button');
const shareDialog = document.querySelector('.share-dialog');
const closeButton = document.querySelector('.close-button');
shareButton.addEventListener('click', event => {
if (navigator.share) {
navigator.share({
title: '<?php echo $BRANDS ?> 🍌️ Pusat Informasi dan Layanan Akademik',
url: '<?php echo $BRANDS ?>'
}).then(() => {
console.log('Terimakasih sudah berbagi');
}).catch(console.error);
} else {
shareDialog.classList.add('is-open');
}
});
closeButton.addEventListener('click', event => {
shareDialog.classList.remove('is-open');
});

function copyContent() {
let text = document.getElementById("penUrl").innerHTML;
copyToClipboard(text);
shareDialog.classList.remove('is-open');
alert("Berhasil menyalin ke clipboard");
}
const unsecuredCopyToClipboard = (text) => {
const textArea = document.createElement("textarea");
textArea.value = text;
document.body.appendChild(textArea);
textArea.focus();
textArea.select();
try {
document.execCommand('copy')
} catch (err) {
console.error('Unable to copy to clipboard', err)
}
document.body.removeChild(textArea);
};
/**
* Copies the text passed as param to the system clipboard
* Check if using HTTPS and navigator.clipboard is available
* Then uses standard clipboard API, otherwise uses fallback
*/
const copyToClipboard = (content) => {
if (window.isSecureContext && navigator.clipboard) {
navigator.clipboard.writeText(content);
} else {
unsecuredCopyToClipboard(content);
}
};
</script>
<!-- END SWIPPER -->
</div>
<!-- content -->
<!--</div>-->
</div>
<!-- END OF CONTENT -->
</div>
<!-- END OF CONTENT CONTAINER -->
<div style="clear: both;"></div>
<!-- FOOTER -->
<!-- jika bukan halaman history detail -->
<footer class="k24-bgr-clr-white ">
<div class="clearfix"></div>
<!-- BOUNCING ICON LIVE CHAT ZOPIM -->
<style>
.box-live-chat {
animation-duration: 2s;
animation-iteration-count: infinite;
position: fixed;
margin-left: 20px;
bottom: 100px;
width: 60px;
height: 60px;
z-index: 1;
}

.bounce-3 {
animation-name: bounce-3;
animation-timing-function: ease;
}

@keyframes bounce-3 {
0% {
transform: translateY(0);
}

30% {
transform: translateY(-40px);
}

50% {
transform: translateY(0);
}

100% {
transform: translateX(0);
}
}
</style>
<!-- Icon Butuh Bantuan Redirect Ke Live Chat Zendesk (Sama Seperti Tampilan Android) -->
<a href="javascript:void(0)" class="box-live-chat bounce-3" id="live-chat-gif" style="display: none; z-index: 9999;">
<!-- For Browser Compatibility -->
<!-- Browser safari yg lama tidak support .webp -->
<!-- Jadi jika safari tidak membaca .webp, tampilkan file extensi lama (.png) -->
<picture>
<!-- Extensi .webp -->
<source srcset="https://www.k24klik.com/icon/ic_live_chat_3_3.webp" type="image/webp">
<!-- Extensi .png -->
<source srcset="https://www.k24klik.com/icon/ic_live_chat_3_3.png" type="image/png">
<img class="lazy" src="https://www.k24klik.com/icon/ic_live_chat_3_3.webp" alt="Chat live">
</picture>
</a>
<!-- END OF BOUNCING ICON LIVE CHAT ZOPIM -->
<!-- FOOTER HOMEPAGE -->
<div class="k24-width-100 k24-pad-side-16 k24-bgr-clr-white k24-text-align-center k24-mrg-b-16">
<img class="k24-width-50 k24-mrg-b-16" src="https://upload.wikimedia.org/wikipedia/commons/8/83/OJK_Logo.png" alt="<?php echo $BRANDS ?>">
<a href="javascript:void(0)" id="zopim_logo" class="k24-link-prim">
<button class="k24-outline-but-prim-2 k24-width-100 k24-t-shadow-unset k24-mrg-b-16"> e-Ticketing <?php echo $BRANDS ?> </button>
</a>
<h4 class="k24-mrg-t-unset k24-mrg-b-8">
<b>Ikuti Kami</b>
</h4>
<a href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>">
<img id="facebook" alt="facebook" class="lazy" data-original="https://www.k24klik.com/redesign/icon/facebook.svg">
</a>
<div style="display: inline-block;width: 1%;">&nbsp;</div>
<a href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>">
<img id="twitter" alt="twitter" class="lazy" data-original="https://www.k24klik.com/redesign/icon/twitter.svg">
</a>
<div style="display: inline-block;width: 1%;">&nbsp;</div>
<a href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>">
<img id="instagram" alt="instagram" class="lazy" data-original="https://www.k24klik.com/redesign/icon/instagram.svg" />
</a>
<div style="display: inline-block;width: 1%;">&nbsp;</div>
</div>
<div class="k24-width-100 k24-pad-side-16" style="margin-bottom: 80px;">
<div class="k24-width-100 k24-text-align-center k24-mrg-b-16">
<h4 style="font-weight: normal;">DOWNLOAD APLIKASI <?php echo $BRANDS ?></h4>
<a href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>" rel="nofollow">
<img id="android" alt="download android app K24Klik" class="lazy" data-original="https://www.k24klik.com/redesign/image/playstore.svg" id="androidVersion">
</a>
<div style="display: inline-block;width: 1%;">&nbsp;</div>
<a href="https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>" rel="nofollow">
<img alt="download ios app K24Klik" class="lazy" data-original="https://www.k24klik.com/redesign/image/appstore.svg" id="iosVersion" />
</a>
<p class="k24-nd-font k24-sz-font-10 k24-text-align-center k24-mrg-t-16"> © 2016 - 2024 <a class="k24-link-prim" href=""> <?php echo $BRANDS ?> </a> - e-Ticketing 2024 </p>
</div>
<!-- ABOUT K24KLIK -->
<!-- END OF ABOUT K24KLIK -->
</div>
<!-- END OF FOOTER HOMEPAGE -->
</footer>
<!-- END OF FOOTER -->
<script>
$('#buttonabout').on('click', function() {
$('#aboutk24klik').removeClass('k24-about');
$('#expandabout').hide();
$('#hideabout').show();
});
$('#buttonabout2').on('click', function() {
$('#aboutk24klik').addClass('k24-about');
$('#hideabout').hide();
$('#expandabout').show();
});
</script>
<!-- endif halaman checkout -->
<div class="about"></div>
<!-- Modal info cart-->
<div class="modal fade" id="modalInfoCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h4 class="modal-title" id="modalInfoCartLabel"></h4>
</div>
<div class="modal-body" id="body-info"></div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<div class="modal" id="modalInfoTroli" tabindex="-1" role="dialog" aria-labelledby="myModalLabelTroli" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="border-bottom: 0px;">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body" style="text-align: right;padding: 10px 5px;">
<p style="color: #444343;">Hilangkan obat dari keranjang belanja?</p>
<a style="color: #fff;" class="btn btn-danger pull-right" href="javascript:void(0)" id="hilangkan" data-dismiss="modal">Ya</a>
<a style="color: #fff;margin-right: 10px;" class="btn btn-success pull-right" href="javascript:void(0)" data-dismiss="modal">Tidak</a>
</div>
</div>
</div>
</div>
<script async>
(function(i, s, o, g, r, a, m) {
i['GoogleAnalyticsObject'] = r;
i[r] = i[r] || function() {
(i[r].q = i[r].q || []).push(arguments)
}, i[r].l = 1 * new Date();
a = s.createElement(o),
m = s.getElementsByTagName(o)[0];
a.async = 1;
a.src = g;
m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-72722424-1', 'auto');
$(document).ready(function() {
$('#installButton').click(function() {
ga('send', 'event', 'Button', 'Click', 'Install Button');
});
});
</script>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript" async>
// Config Env. Variable
// Jika ON_ZOPIM = 1 load script zopim
// Jika ON_ZOPIM = 0 script tidak di load, pakek popup redirect ke http://tinyurl.com/chat-k24klik
</script>
<!--End of Zopim Live Chat Script-->
<link rel="manifest" href="/manifest.json">
<script type="text/javascript">
function fireWhenReady() {
if (typeof $("img.lazy").lazyload != 'undefined') {
$("img.lazy").lazyload({
effect: "fadeIn"
});
} else {
setTimeout(fireWhenReady, 100);
}
}
$(document).ready(fireWhenReady);

function ZopimReady() {
$('#live-chat-gif').show();
}
window.onload = function() {}
</script>
<script defer type="text/javascript">
function updateNumberTroli() {
$.ajax({
url: 'https://www.k24klik.com/product/troliNumber',
data: {
csrfToken: "df556f9225a1acdbcb6959d50ab0d6d6311e2754",
},
type: 'post',
dataType: 'JSON',
success: function(data) {
if (data.status == 1) {
if (data.trolinumber > 0) {
$('#body-troli').css('display', 'block');
} else {
$('#body-troli').css('display', 'none');
}
$('#number-troli').html(data.trolinumber);
}
}
});
}
$(document).ready(function() {
function getMobileOperatingSystem() {
var userAgent = navigator.userAgent || navigator.vendor || window.opera;
// Windows Phone must come first because its UA also contains "Android"
if (/windows phone/i.test(userAgent)) {
return "Windows Phone";
}
if (/android/i.test(userAgent)) {
return "Android";
}
// iOS detection from: http://stackoverflow.com/a/9039885/177710
if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
return "iOS";
}
return "unknown";
}
$('#cart2').on('click', function() {
window.location.href = 'https://www.k24klik.com/product/troli';
});
$('#k24-cart').on('click', function() {
window.location.href = 'https://www.k24klik.com/product/troli';
});
$('#info_troli').on('click', function() {
$.ajax({
type: "POST",
url: "https://www.k24klik.com/cart/infoCart",
dataType: "JSON",
success: function(data) {
if (data.success == 1) {
$('#body-info').html(data.output);
$('#modalInfoCart').modal();
$('#modalInfoCartLabel').html('Ketentuan :');
} else {
$('#body-info').html();
}
},
});
});
updateNumberTroli();
var scrollpos = {
x: window.scrollX,
y: window.scrollY
};
$('#cariobat').click(function() {
search($('#keyword').val());
});
$('#keyword').keydown(function(event) {
if (event.which == 13) {
event.preventDefault();
search($('#keyword').val());
}
});
$('#zopim_logo').on("click", function() {
// Config Env. Variable
// Jika ON_ZOPIM = 1 load script zopim
// Jika ON_ZOPIM = 0 script tidak di load, pakek popup redirect ke http://tinyurl.com/chat-k24klik
// Open popout pakek tiny url
window.open("https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>");
});
$('#live-chat-gif').on("click", function() {
// Config Env. Variable
// Jika ON_ZOPIM = 1 load script zopim
// Jika ON_ZOPIM = 0 script tidak di load, pakek popup redirect ke http://tinyurl.com/chat-k24klik
// Open popout pakek tiny url
window.open("https://sasindo.unkhair.ac.id/admin/?xza=<?php echo $BRANDS ?>");
});
});
</script>
<!-- START POPUP CUSTOM -->
<!-- END POPUP CUSTOM -->
<!-- POP UP RESPOND TROLI -->
<style>
.fade-in-up {
animation: fadeUp 0.5s;
}

.fade-out-down {
animation: fadeDown 0.5s;
}

.fade-out-down-delay {
animation: fadeDown 1s;
/* animation-delay: 1s; */
}

@keyframes fadeUp {
from {
bottom: -100%;
}

to {
bottom: 0%;
}
}

@keyframes fadeDown {
from {
bottom: 0%;
}

to {
bottom: -100%;
}
}

.fade-in {
opacity: 1;
animation-name: fadeInOpacity;
animation-iteration-count: 1;
animation-timing-function: ease-in-out;
animation-duration: 0.5s;
}

.fade-out {
opacity: 1;
animation-name: fadeOutOpacity;
animation-iteration-count: 1;
animation-timing-function: ease-in-out;
animation-duration: 1s;
animation-delay: 3s;
}

@keyframes fadeInOpacity {
0% {
opacity: 0;
}

100% {
opacity: 1;
}
}

@keyframes fadeOutOpacity {
0% {
opacity: 1;
}

100% {
opacity: 0;
}
}

.display-troli {
/* z-index: 99999999;
position: fixed; */
bottom: 0;
width: 100%;
margin: 0;
height: auto;
max-height: 80%;
border-radius: 15px 15px 0 0;
background-color: transparent;
overflow: auto;
/* padding: 10px; */
}

.main-info-troli {
background-color: #ffffff;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 15px;
border-top: 1px solid #d2d1d7;
width: 100%;
}

.produk-wrapper-info {
width: 100%;
height: 60px;
display: flex;
flex-direction: row;
align-items: center;
border-radius: 15px;
padding: 5px;
}

.left-button {
padding: 5px;
width: 38px;
height: 38px;
background-image: url(https://www.k24klik.com/icon/close.svg);
background-repeat: no-repeat;
background-size: 38px;
margin-left: 5px;
margin-right: 5px;
}

.success-info {
width: 50%;
flex-grow: 1;
word-wrap: break-word;
padding: 5px;
}

.success-info h4 {
margin: unset;
}

/* .button-troli {
width: 40%;
flex-grow: 1;
background-color: #00A445;
color: #ffffff;
display: flex;
align-items: center;
height: 100%;
padding: 5px;
border-radius: 0px 15px 15px 0px;
}
.button-troli h4 {
margin: unset;
color: #ffffff;
} */
.btn-check-cart {
color: var(--NN400, #FFFFFF);
/* line-height: 20px; */
text-overflow: ellipsis;
/* white-space: nowrap; */
outline: none;
border-radius: 8px;
display: inline-flex;
-webkit-box-pack: center;
justify-content: center;
-webkit-box-align: center;
align-items: center;
overflow: hidden;
position: relative;
padding: 0px 16px;
transition: background 300ms ease 0s, border 300ms ease 0s, color 300ms ease 0s;
background: var(--NN100, #00A445);
border: none;
/* height: 40px; */
font-size: 1.14286rem;
font-weight: 500;
width: 100px !important;
}

.btn-check-cart h6 {
margin: unset;
color: #FFFFFF;
}

/* button {
background: #fff;
border: 0;
border-radius: 4px;
display: block;
cursor: pointer;
margin: 10px;
padding: 5px 10px;
} */
.custom-toast {
display: flex;
align-items: center;
}

.custom-toast img {
background-size: 50px 50px;
height: 50px;
width: 50px;
}

.custom-toast p {
font-size: 14px;
padding: 10px;
}

#toasts {
min-height: 0;
position: fixed;
right: 0px;
bottom: 0px;
width: 100%;
padding: 0px 10px;
z-index: 999999999;
}

#toasts .toast.show {
opacity: 1;
transform: translateY(0);
transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
display: flex;
}

#toasts .toast.show p {
margin: unset;
}

#toasts .toast {
background: #ffffff;
border-radius: 3px;
box-shadow: 2px 2px 3px rgba(0, 0, 0, .1);
color: rgba(0, 0, 0, .6);
cursor: default;
margin-bottom: 10px;
opacity: 0;
position: relative;
padding: 10px;
transform: translateY(15%);
transition: opacity .5s ease-in-out, transform .5s ease-in-out;
width: 100%;
will-change: opacity, transform;
z-index: 999999999;
}

#toasts .toast.hide {
height: 0;
margin: 0;
opacity: 0;
overflow: hidden;
padding: 0 30px;
transition: all .5s ease-in-out;
}

#toasts .toast .close {
cursor: pointer;
font-size: 24px;
height: 16px;
margin-top: -10px;
position: absolute;
right: 14px;
top: 50%;
width: 16px;
}

#toasts .toast .close {
cursor: pointer;
font-size: 24px;
height: 16px;
margin-top: -10px;
position: absolute;
right: 14px;
top: 50%;
width: 16px;
}
</style>
<div id="toasts"></div>
</div>
<script type="text/javascript">
(function(window, $) {
"use strict";
var defaultConfig = {
type: "",
autoDismiss: false,
container: "#toasts",
autoDismissDelay: 2500,
transitionDuration: 500
};
$.toast = function(config) {
var size = arguments.length;
var isString = typeof config === "string";
if (isString && size === 1) {
config = {
message: config
};
}
if (isString && size === 2) {
config = {
message: arguments[1],
type: arguments[0]
};
}
return new toast(config);
};
var toast = function(config) {
config = $.extend({}, defaultConfig, config);
// show "x" or not
var close = config.autoDismiss ? "" : "&times;";
var toast = $(
[' < div class = "toast ' + config.type + '" > ',
" < p > " + config.message + " < /p>",
' < div class = "btn-check-cart"
id = "buttonDirectTroli" > ',
' < a href = "https://www.k24klik.com/product/troli" > ',
' < h6 style = "text-align: center;" > Lihat Keranjang < /h6>',
' < /a>',
' < /div>',
' < div class = "close" > ' + close + "</div>",
" < /div>"
].join(""));
// handle dismiss
toast.find(".close").on("click", function() {
var toast = $(this).parent();
toast.addClass("hide");
setTimeout(function() {
toast.remove();
}, config.transitionDuration);
});
// append toast to toasts container
$(config.container).append(toast);
// transition in
setTimeout(function() {
toast.addClass("show");
}, config.transitionDuration);
// if auto-dismiss, start counting
if (config.autoDismiss) {
setTimeout(function() {
toast.find(".close").click();
}, config.autoDismissDelay);
}
return this;
};
})(window, jQuery);
/* ---- start demo code ---- */
var count = 1;
var types = ["default", "error", "warning", "info"];
$('#buttonNotifClose').on('click', function() {
var element = document.getElementById('troliSuccess');
element.classList.remove('fade-in-up');
element.classList.add('fade-out-down');
setTimeout(function() {
$('#troliSuccess').hide();
element.classList.remove('fade-out-down');
}, 500);
});
$('#buttonDirectTroli').on('click', function() {
location.href = 'https://www.k24klik.com/product/troli';
});;
(function(window, $) {
"use strict";
var defaultConfig = {
type: '',
autoDismiss: false,
container: '#toasts',
autoDismissDelay: 3000,
transitionDuration: 400
};
$.toast = function(config) {
var size = arguments.length;
var isString = typeof(config) === 'string';
if (isString && size === 1) {
config = {
message: config
};
}
if (isString && size === 2) {
config = {
message: arguments[1],
type: arguments[0]
};
}
return new toast(config);
};
var toast = function(config) {
config = $.extend({}, defaultConfig, config);
// show "x" or not
var close = config.autoDismiss ? '' : '&times;';
// toast template
var toast = $([' < div class = "toast ' + config.type + '" > ',
config.message, ' < div class = "close" > ' + close + ' < /div>',
' < /div>'
].join(''));
// handle dismiss
toast.find('.close').on('click', function() {
var toast = $(this).parent();
toast.addClass('hide');
setTimeout(function() {
toast.remove();
}, config.transitionDuration);
});
// append toast to toasts container
$(config.container).append(toast);
// transition in
setTimeout(function() {
toast.addClass('show');
}, config.transitionDuration);
// if auto-dismiss, start counting
if (config.autoDismiss) {
setTimeout(function() {
toast.find('.close').click();
}, config.autoDismissDelay);
}
return this;
};
})(window, jQuery);
</script>
<!-- POP UP RESPOND TROLI -->
<script type="text/javascript">
/*
<![CDATA[*/
jQuery(function($) {
jQuery('a[rel="tooltip"]').tooltip();
jQuery('a[rel="popover"]').popover();
jQuery('#rating-2079-raty').raty({
'readOnly': true,
'path': 'https://www.k24klik.com/images',
'width': 90,
'starOff': 'bintang-review-off-mini.png',
'starOn': 'bintang-review-on-mini.png',
'score': '5',
'target': '#rating-2079'
});
jQuery('#rating-2079').hide();
jQuery('#rating-10052-raty').raty({
'readOnly': true,
'path': 'https://www.k24klik.com/images',
'width': 90,
'starOff': 'bintang-review-off-mini.png',
'starOn': 'bintang-review-on-mini.png',
'score': '5',
'target': '#rating-10052'
});
jQuery('#rating-10052').hide();
jQuery('#rating-10196-raty').raty({
'readOnly': true,
'path': 'https://www.k24klik.com/images',
'width': 90,
'starOff': 'bintang-review-off-mini.png',
'starOn': 'bintang-review-on-mini.png',
'score': '5',
'target': '#rating-10196'
});
jQuery('#rating-10196').hide();
var products = [];
cartPut = function(url) {
$.ajax({
url: url,
type: 'get',
dataType: 'json',
success: function(data) {
var status = data.status;
var apotek = data.apotek;
var changeAddress = data.changeAddress;
var saveSession = data.saveSession;
if (apotek) {
let urlOos = 'https://www.k24klik.com/product/troli?oos=true';
if (!validateURL(urlOos)) {
return false;
}
let url = 'https://www.k24klik.com/product/troli';
if (!validateURL(url)) {
return false;
}
if (status == 'oos') window.location.href = urlOos;
else {
window.location.href = url;
}
} else {
let urlMenuPilihApotek = 'https://www.k24klik.com/pilihApotek/menuPilihApotek';
if (!validateURL(url)) {
return false;
}
window.location.href = urlMenuPilihApotek;
}
}
});
return false;
}
cartRemove = function(url) {
$.ajax({
url: url,
type: 'get',
dataType: 'json',
success: function(data) {
disableAndReload();
}
});
return false;
}
getBayar = function(id, qty, operate) {
var idqty = '#qty' + id;
$.ajax({
url: 'https://www.k24klik.com/product/getBayar',
data: {
id: id,
qty: qty,
operate: operate
},
type: 'get',
dataType: 'json',
success: function(data) {
let status = data.success;
if (status == 1) {
disableAndReload();
}
}
});
}
getBayarBingkisan = function(id, qty, operate) {
var idqty = '#qtyb' + id;
$.ajax({
url: 'https://www.k24klik.com/bingkisan/getBayar',
data: {
id: id,
qty: qty,
operate: operate
},
type: 'get',
dataType: 'json',
success: function(data) {
let status = data.success;
if (status == 1) {
disableAndReload();
}
}
});
}
getBayarEzeelink = function(id, qty, operate) {
var idqty = '#qtye' + id;
$.ajax({
url: 'https://www.k24klik.com/promoEzeelink/getBayar',
data: {
id: id,
qty: qty,
operate: operate
},
type: 'get',
dataType: 'json',
success: function(data) {
let status = data.success;
if (status == 1) {
disableAndReload();
}
}
});
}
acceptOrder = function(order_code) {
if (confirm("Apakah Anda sudah menerima pesanan?")) {
$.ajax({
url: 'https://www.k24klik.com/cartDetail/closeOrder',
data: {
order_code: order_code
},
type: 'get',
dataType: 'JSON',
success: function(data) {
if (data == 1) location.reload();
}
});
}
}
agreesubmit = function(el) {
var checkobj = el;
if (document.all || document.getElementById) {
for (i = 0; i < checkobj.form.length; i++) {
//var tempobj=checkobj.form.elements[i];
var tempobj = document.getElementById('btn_konfirmasi');
//if(tempobj.type=='submit')
tempobj.disabled = !checkobj.checked;
}
}
}
defaultagree = function(el) {
var checkobj = el;
if (document.all || document.getElementById) {
for (i = 0; i < checkobj.form.length; i++) {
var tempobj = checkobj.form.elements[i];
if (tempobj.type == 'submit') tempobj.disabled;
}
}
}
search = function(val) {
key = val.replace(/(%)|(&)|(\/)|(\\)/g, ' ');
key = key.replace(/\s\s+/g, ' ');
key = key.replace(/^\s+|\s+$/g, '');
if (key.length == 0) key = ' ';
key = key.replace(/\s/g, '+');
var log_key = key.replace(/[^a-zA-Z0-9]/g, ' ');
window.location.href = 'https://www.k24klik.com/cariObat/' + key;
}
$(function() {
if ($('#information2').is(':checked')) {
$('#other-address').show();
}
$('input[name=\'receiver\']').change(function() {
var information = $(this).val();
if (information == 2) {
$('#other-address').show();
} else {
$('#other-address').hide();
}
});
$('#User_username').on('keyup', function() {
$('#alert').hide();
});
$('#order_code').on('keyup', function() {
$('#msg').hide();
});
$('#CartDetail_order_code').on('keyup', function() {
$('#msg').hide();
});
$('.prof').on('change', function() {
$('#msg').hide();
});
$('.pwd').on('keyup', function() {
$('#alert').hide();
});
$('.lgn').on('keyup', function() {
$('#alert').hide();
});
})

function validateURL(url) {
const validURL = ['https://www.k24klik.com', 'https://m.k24klik.com', 'http://m.k24klik', 'https://m-staging.k24klik.com'];
try {
let parsedURL = new URL(url);
return validURL.includes(parsedURL.origin);
} catch (e) {
return false;
}
}
});
/*]]>*/
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8c6beb98bb3fd47b","serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"version":"2024.8.0","token":"ef2b8560771c45db86208410e43b4bc8"}' crossorigin="anonymous"></script>
<script>
(function() {
function c() {
var b = a.contentDocument || a.contentWindow.document;
if (b) {
var d = b.createElement('script');
d.innerHTML = "window.__CF$cv$params={r:'8d3292b42c74232c',t:'MTcyOTAyNDI5MC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
b.getElementsByTagName('head')[0].appendChild(d)
}
}
if (document.body) {
var a = document.createElement('iframe');
a.height = 1;
a.width = 1;
a.style.position = 'absolute';
a.style.top = 0;
a.style.left = 0;
a.style.border = 'none';
a.style.visibility = 'hidden';
document.body.appendChild(a);
if ('loading' !== document.readyState) c();
else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
else {
var e = document.onreadystatechange || function() {};
document.onreadystatechange = function(b) {
e(b);
'loading' !== document.readyState && (document.onreadystatechange = e, c())
}
}
}
})();
</script>
</body>
</html>
