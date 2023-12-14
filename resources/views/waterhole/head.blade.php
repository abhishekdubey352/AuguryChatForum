{{--
|--------------------------------------------------------------------------
| Document Head
|--------------------------------------------------------------------------
|
| HTML added to this template will show up in the <head> tag on every page.
| This is a great place to add any custom <link> and <meta> tags.
|
| If you're looking to add a favicon, this is a great resource:
| https://evilmartians.com/chronicles/how-to-favicon-in-2021-six-files-that-fit-most-needs
|
--}}
<!-- Favicon Start -->
<!-- For general browsers -->
<link rel="icon" href="https://images.squarespace-cdn.com/content/5d13d8961022d6000116bb04/a1802e02-7e5f-4f17-b769-efbf588aa95e/AuguryAlphaLogo.png?content-type=image%2Fpng" type="image/png">
<link rel="icon" type="image/png" sizes="16x16" href="https://images.squarespace-cdn.com/content/5d13d8961022d6000116bb04/a1802e02-7e5f-4f17-b769-efbf588aa95e/AuguryAlphaLogo.png?content-type=image%2Fpng">
<link rel="icon" type="image/png" sizes="32x32" href="https://images.squarespace-cdn.com/content/5d13d8961022d6000116bb04/a1802e02-7e5f-4f17-b769-efbf588aa95e/AuguryAlphaLogo.png?content-type=image%2Fpng">

<!-- For Android Chrome -->
<link rel="icon" type="image/png" sizes="192x192" href="https://images.squarespace-cdn.com/content/5d13d8961022d6000116bb04/a1802e02-7e5f-4f17-b769-efbf588aa95e/AuguryAlphaLogo.png?content-type=image%2Fpng">
<link rel="icon" type="image/png" sizes="512x512" href="https://images.squarespace-cdn.com/content/5d13d8961022d6000116bb04/a1802e02-7e5f-4f17-b769-efbf588aa95e/AuguryAlphaLogo.png?content-type=image%2Fpng">

<!-- For Apple devices -->
<link rel="apple-touch-icon" href="https://images.squarespace-cdn.com/content/5d13d8961022d6000116bb04/a1802e02-7e5f-4f17-b769-efbf588aa95e/AuguryAlphaLogo.png?content-type=image%2Fpng">

<!-- Web manifest for modern browsers -->
<!-- Note: If the manifest references icons, make sure to update those paths as well. -->
<link rel="manifest" href="/path_to_your_directory/site.webmanifest">

<!-- Faviocon End -->

<!-- Hotjar Start -->
<!-- Hotjar Tracking Code for auguryinvest.chat -->
<script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 3675130,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>
<!-- Hotjar End-->

<!--- Spiffy Checkout --->
<!--- 
<script>
    "use strict";
    ! function(i, t) {
        var e = t.spiffy = t.spiffy || [];
        if (!e.init) {
            if (e.invoked) return void(t.console && console.error && console.warn("Spiffy Elements included twice."));
            e.invoked = !0, e.methods = ["identify", "config", "debug", "off", "on"], e.factory = function(i) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        return t.unshift(i), e.push(t), e
                    }
                },
                e.methods.forEach(function(i) {
                    spiffy[i] = e.factory(i)
                }), e.load = function(t) {
                    if (!spiffy.ACCOUNT) {
                        spiffy.ACCOUNT = t;
                        var e = i.createElement("script");
                        e.type = "text/javascript", e.async = !0,
                            e.crossorigin = "anonymous", e.src = "https://js.static.spiffy.co/spiffy.js?a=" + t;
                        var n = i.getElementsByTagName("script")[0];
                        n.parentNode.insertBefore(e, n)
                    }
                }
        }
    }(document, window),
    spiffy.SNIPPET_VERSION = "1.0.3";

    spiffy.load("augury");
</script>
--->
<!--- Spiffy Checkout End--->