/**
 * Parallax Background version 1.3
 * https://github.com/erensuleymanoglu/parallax-background
 *
 * by Eren Suleymanoglu
 */
! function(a) {
  "use strict";

  function e() {
    return !(!/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) && !/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4)))
  }! function() {
    for (var a = 0, e = ["ms", "moz", "webkit", "o"], t = 0; t < e.length && !window.requestAnimationFrame; ++t) window.requestAnimationFrame = window[e[t] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[e[t] + "CancelAnimationFrame"] || window[e[t] + "CancelRequestAnimationFrame"];
    window.requestAnimationFrame || (window.requestAnimationFrame = function(e) {
      var t = (new Date).getTime(),
        i = Math.max(0, 16 - (t - a)),
        r = window.setTimeout(function() {
          e(t + i)
        }, i);
      return a = t + i, r
    }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function(a) {
      clearTimeout(a)
    })
  }(), a.fn.isOnScreen = function() {
    var e = a(window),
      t = {
        top: e.scrollTop(),
        left: e.scrollLeft()
      };
    t.right = t.left + e.width(), t.bottom = t.top + e.height();
    var i = this.offset();
    return i.right = i.left + this.outerWidth(), i.bottom = i.top + this.outerHeight(), !(t.right < i.left || t.left > i.right || t.bottom < i.top || t.top > i.bottom)
  }, a.fn.parallaxBackground = function(t) {
    return this.each(function() {
      function i(a) {
        return x = a.outerWidth(), s = a.outerHeight(), v = A.height(), D = A.width(), e() && (j = 2), "left" !== R.parallaxDirection && "right" !== R.parallaxDirection || (x += j * Math.ceil(D * parseFloat(R.parallaxSpeed))), "up" !== R.parallaxDirection && "down" !== R.parallaxDirection || (s += j * Math.ceil(v * parseFloat(R.parallaxSpeed))), [x, s]
      }

      function r(a, e) {
        switch (w = parseInt(a.css("padding-left").replace("px", "")), f = parseInt(a.css("padding-right").replace("px", "")), u = parseInt(a.css("padding-top").replace("px", "")), h = parseInt(a.css("padding-bottom").replace("px", "")), b = (e[1] - a.outerHeight()) / 2, k = (e[0] - a.outerWidth()) / 2, R.parallaxDirection) {
          case "up":
          case "down":
            S = -w, q = -(b + u), B = 0;
            break;
          case "left":
          case "right":
            S = -(k + w), q = -u, B = 0
        }
        return [S, q, B]
      }

      function n(a) {
        switch (z = a.offset(), R.parallaxDirection) {
          case "up":
            z = z.top;
            break;
          case "down":
            z = z.top + a.outerHeight();
            break;
          case "left":
            z = z.left + a.outerWidth();
            break;
          case "right":
            z = z.left
        }
        return parseFloat(z)
      }

      function o(a) {
        return A.scrollTop() - a
      }
      var l, p, c, s, d, m, g, x, u, h, w, f, b, k, v, D, z, y, F = a(this),
        A = a(window),
        S = 0,
        q = 0,
        B = 0,
        T = 0,
        j = 1,
        I = {
          parallaxBgImage: "",
          parallaxBgPosition: "center center",
          parallaxBgRepeat: "no-repeat",
          parallaxBgSize: "cover",
          parallaxSpeed: .5,
          parallaxDirection: "up"
        },
        H = F.data(),
        R = a.extend({}, I, t, H);
      R.parallaxSpeed > 1 ? R.parallaxSpeed = 1 : R.parallaxSpeed < 0 && (R.parallaxSpeed = 0), F.find(".parallax-inner").length < 1 && F.prepend('<div class="parallax-inner"></div>'), l = F.find(".parallax-inner"), p = i(F), c = r(F, p), F.css({
        position: "relative",
        background: "transparent",
        overflow: "hidden",
        "z-index": "1"
      }), l.css({
        position: "absolute",
        "background-image": "url(" + R.parallaxBgImage + ")",
        "background-position": R.parallaxBgPosition,
        "background-repeat": R.parallaxBgRepeat,
        "background-size": R.parallaxBgSize,
        width: p[0],
        height: p[1],
        transform: "translate3d(" + c[0] + "px, " + c[1] + "px, " + c[2] + "px)",
        transition: "transform 100ms",
        "z-index": "-1"
      }), A.on("resize", function() {
        p = i(F), c = r(F, p), l.css({
          width: p[0],
          height: p[1],
          transform: "translate3d(" + c[0] + "px, " + c[1] + "px, " + c[2] + "px)"
        })
      }), "left" !== R.parallaxDirection && "right" !== R.parallaxDirection || (d = 0, m = c[0]), "up" !== R.parallaxDirection && "down" !== R.parallaxDirection || (d = 0, m = c[1]), y = A.scrollTop(), A.on("scroll", function() {
        y > 0 && (T = o(y)), y = A.scrollTop(), F.isOnScreen() ? (d = T * (parseFloat(R.parallaxSpeed) / 4), "up" === R.parallaxDirection && n(F) > n(l) + 50 && (m += -d, g = "translate3d(" + c[0] + "px, " + m + "px, " + c[2] + "px)"), "down" === R.parallaxDirection && n(F) + 50 < n(l) && (m += d, g = "translate3d(" + c[0] + "px, " + m + "px, " + c[2] + "px)"), "left" === R.parallaxDirection && n(F) + 50 < n(l) && (g = "translate3d(" + (m += d) + "px, " + c[1] + "px, " + c[2] + "px)"), "right" === R.parallaxDirection && n(F) > n(l) + 50 && (g = "translate3d(" + (m += -d) + "px, " + c[1] + "px, " + c[2] + "px)"), l.css({
          width: p[0],
          height: p[1],
          transform: g
        })) : ("up" !== R.parallaxDirection && "down" !== R.parallaxDirection || (m = c[1]), "left" !== R.parallaxDirection && "right" !== R.parallaxDirection || (m = c[0]), l.css({
          width: p[0],
          height: p[1],
          transform: "translate3d(" + c[0] + "px, " + c[1] + "px, " + c[2] + "px)"
        }))
      })
    })
  }
}(jQuery);
