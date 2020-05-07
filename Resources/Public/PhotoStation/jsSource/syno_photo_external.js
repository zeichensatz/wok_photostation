/* Copyright (c) 2016 Synology Inc. All rights reserved. */
window.PhotoStation = {
    IFRAME_BACKGROUND: "rgba(0,0,0,0.85)",
    apply: function(d, c) {
        for (var e in c) {
            if (c.hasOwnProperty(e)) {
                d[e] = c[e]
            }
        }
        return d
    },
    transit: function(c, f, e) {
        var b = ["left", "top", "width", "height"];
        var d = document.createElement("div");
        document.body.appendChild(d);
        d.transitedProperties = b.length;
        PhotoStation.apply(PhotoStation.apply(d.style, f), {
            background: PhotoStation.IFRAME_BACKGROUND,
            position: "absolute",
            transitionProperty: "all",
            transitionDuration: "0.5s"
        });
        d.addEventListener("transitionend", function a(g) {
            --d.transitedProperties;
            if (d.transitedProperties <= 0) {
                document.body.removeChild(d);
                c.iframe.style.visibility = "visible";
                c.window.postMessage("transitionend", c.origin)
            }
        });
        setTimeout(function() {
            PhotoStation.apply(d.style, e)
        }, 100)
    },
    lightbox: function(a) {
        var c = PhotoStation.targets[a];
        var b = c.iframe;
        PhotoStation.apply(c, {
            left: b.offsetLeft,
            top: b.offsetTop,
            width: b.offsetWidth,
            height: b.offsetHeight
        });
        PhotoStation.transit(c, {
            left: "" + c.left + "px",
            top: "" + c.top + "px",
            width: "" + c.width + "px",
            height: "" + c.height + "px"
        }, {
            left: "0",
            top: "0",
            width: "100%",
            height: "100%"
        });
/* Höhe und Breite des Browserwindows feststellen */
  var wh = window.innerHeight;
  var ww = window.innerWidth;
/* Y-Position auf der Seite feststellen */
  var wy = window.pageYOffset;
        PhotoStation.apply(b.style, {
            background: PhotoStation.IFRAME_BACKGROUND,
            border: "0",
            height: "100%",
/* Höhee des Bildschirms für lightbox festlegen */
            height: "" + wh + "px",
            left: "0",
            position: "absolute",
            top: "0",
            top: "" + wy + "px",
            visibility: "hidden",
            width: "100%",
/* Breite des Bildschirms für lightbox festlegen */
            width: "" + ww + "px"
        })
    },
    slideshow: function(a) {
        var b = PhotoStation.targets[a];
        PhotoStation.transit(b, {
            left: "0",
            top: "0",
            width: "100%",
            height: "100%"
        }, {
            left: "" + b.left + "px",
            top: "" + b.top + "px",
            width: "" + b.width + "px",
            height: "" + b.height + "px"
        });
        PhotoStation.apply(b.iframe.style, {
            background: "",
            border: "",
            height: "",
            left: "",
            position: "",
            top: "",
            visibility: "hidden",
            width: ""
        })
    },
    handleMessage: function(a) {
        var b = a.data;
        switch (b.action) {
        case "toggle":
            if (b.slideshow) {
                PhotoStation.slideshow(b.index)
            } else {
                PhotoStation.lightbox(b.index)
            }
            break;
        default:
            console.error("Unknown action: " + b.action);
            break
        }
    },
    ready: function() {
        window.addEventListener("message", PhotoStation.handleMessage);
        function g(j, i) {
            j.addEventListener("load", function() {
                var k = PhotoStation.targets[i];
                k.window.postMessage({
                    origin: location.origin,
                    index: i
                }, k.origin)
            })
        }
        function a(j) {
            var i = document.createElement("a");
            i.href = j;
            return ( i.protocol + "//" + i.hostname)
        }
        var f = document.querySelectorAll("iframe[photostation]");
        var b = [];
        for (var c = 0, h = f.length; c < h; ++c) {
            var d = f[c];
            g(d, c);
            var e = {};
            e.iframe = d;
            e.window = d.contentWindow;
            e.origin = a(d.src);
            b.push(e)
        }
        PhotoStation.targets = b
    }
};
(function() {
    document.addEventListener("DOMContentLoaded", PhotoStation.ready)
})();
