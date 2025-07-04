var _statcounter = function(_1) {
  var _2 = false;

  function is_in(_3, _4) {
    for (var i = 0; i < _4.length; i++) {
      if (_4[i] == _3) {
        return true
      }
    }
    return false
  }

  function is_admin_project(_6) {
    return is_in(_6, [12225189, 11548023, 11878871, 12214659, 981359, 9560334, 6709687, 9879613, 4124138, 204609, 10776808, 11601825])
  }
  try {
    var _7;
    var _8 = 1;
    if (typeof _1 !== "undefined" && _1.record_pageview) {
      _7 = _1;
      _8 = _7._get_script_num() + 1
    } else {
      if (typeof _1 === "undefined") {
        _7 = function() {};
        _7._pending_tags = {}
      } else {
        if (_1.start_recording) {
          _7 = _1;
          if (_1._pageview_tags_in) {
            _1 = _1._pageview_tags_in
          }
        } else {
          _7 = function() {}
        }
        if (Object.prototype.toString.call(_1) === "[object Array]") {
          _7._pending_tags = _1
        } else {
          _7._pending_tags = {}
        }
      }
      _7._session_increment_calculated = {};
      _7._returning_values = {};
      _7._security_codes = {}
    }
    _7.push = function(_9) {
      _7._pending_tags = [_9]
    };
    var _a = false;
    if (typeof performance !== "undefined") {
      try {
        _a = Math.round(performance.now())
      } catch (ex) {
        _a = false
      }
    }
    var _b = false;
    var _c = false;
    if (document.currentScript && document.currentScript.src) {
      try {
        _b = document.currentScript
      } catch (ignore) {
        var _d = document.getElementsByTagName("script");
        if (_d.length) {
          for (var z = _d.length - 1; z >= 0; z--) {
            if (_d[z].src.indexOf("/counter") !== -1) {
              _b = _d[z];
              break
            }
          }
        }
      }
      if (_b) {
        try {
          if (new URL(_b.src).host.replace("www.", "") === "statcounter.com") {
            _c = _b.src
          } else {}
        } catch (ignore) {}
      }
    }
    var _f = -1;
    var _10 = "";
    var _11 = "statcounter.com";
    var _12 = "";
    var _13 = "cookie";
    var _14 = false;
    var _15 = "7z|aac|avi|csv|doc|docx|exe|flv|gif|gz|jpe?g|js|mp(3|4|e?g)|mov|pdf|phps|png|ppt|rar|sit|tar|torrent|txt|wma|wmv|xls|xlsx|xml|zip";
    if (typeof(window.sc_download_type) === "string") {
      _15 = window.sc_download_type
    }
    var _16 = false;
    if (typeof(window.sc_exit_link_detect) === "string") {
      _16 = new RegExp(sc_exit_link_detect, "i")
    }
    if (window.sc_client_storage) {
      _13 = window.sc_client_storage
    }
    if (typeof window.sc_first_party_cookie != "undefined" && sc_first_party_cookie == "0") {
      _13 = "disabled"
    }
    if (window.sc_click_stat) {
      _f = window.sc_click_stat
    }
    if (window.sc_local) {
      _10 = sc_local
    } else {
      if (_f == -1) {
        _f = 1
      }
      _10 = "https://c." + _11 + "/"
    }
    if (window.sc_project) {
      _2 = parseInt(window.sc_project, 10);
      if (window.sc_security) {
        _7._security_codes[_2] = sc_security
      } else {
        if (_7._security_codes[_2] === undefined) {
          _7._security_codes[_2] = ""
        }
      }
    }

    function safer_writeln(_17, _18) {
      if (needs_document_write()) {
        document.writeln(_17)
      } else {
        _b.insertAdjacentHTML("afterend", _17)
      }
    }

    function needs_document_write(_19) {
      if (_19 === "invisible") {
        return false
      }
      return _b === false || !_b.insertAdjacentHTML
    }

    function apply_new_methodology_fixes(_1a) {
      var _1b = 9000000;
      return (is_in(_1a, [4344864, 4124138, 204609]) || _1a > _1b)
    }

    function use_performance_tags(_1c) {
      return is_in(_1c, [204609, 4124138])
    }

    function need_project_config(_1d) {
      var ret = true;
      try {
        if (!(typeof JSON == "object" && JSON && typeof JSON.stringify == "function" && typeof JSON.parse == "function" && "sessionStorage" in window && "withCredentials" in new XMLHttpRequest())) {
          ret = false
        }
        if (_sessionStorageGetConfig("sc_project_config_" + _1d) === 1 && _sessionStorageGetConfig("sc_project_time_difference_" + _1d) !== null) {
          ret = false
        }
        if (_sessionStorageGetConfig("sc_block_project_config_" + _1d) !== null) {
          ret = false
        }
        if (ret) {
          var suc = _sessionStorageSetConfig("sc_project_config_" + _1d, -1);
          if (suc) {
            _20 = "good"
          } else {
            _20 = "bad"
          }
          var val = _sessionStorageGetConfig("sc_project_config_" + _1d);
          ret = val === -1;
          _20 += val
        }
      } catch (ignore) {
        ret = false
      }
      return ret
    }
    var _22 = [30, 60, 120, 180, 360, 720, 1440, 2880, 10080];
    var _23 = "ntd";
    var _24 = "ntd";
    var _20 = "ntd";
    _7.get_top_window = function() {
      var _25 = window;
      while (_25.parent && _25.parent !== _25) {
        try {
          var _26 = _25.parent.document;
          _25 = _25.parent
        } catch (err) {
          break
        }
      }
      return _25
    };
    var _27 = _7.get_top_window();
    var _28 = _27.document;

    function get_referrer() {
      var _29 = "" + _28.referrer;
      if (typeof sc_referer_scr08 !== "undefined") {
        _29 = sc_referer_scr08
      }
      return _29
    }
    _7.get_referrer = get_referrer;
    var _2a = 0;
    _7.inject_script = function(url, _2c) {
      if (url === undefined || !url.match(/^https?:\/\/(?:[^\/]+\.)?statcounter\.com/)) {
        return
      }
      var scr = document.createElement("script");
      scr.type = "text/javascript";
      scr.async = true;
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(scr, s);
      if (_2c) {
        scr.onload = _2c;
        scr.onreadystatechange = function() {
          if (this.readyState == "complete") {
            _2c()
          }
        }
      }
      scr.src = url
    };

    function get_page_title() {
      var _2f = "" + _28.title;
      _2f = _2f.substring(0, 300);
      if (encodeURIComponent) {
        _2f = encodeURIComponent(_2f)
      } else {
        _2f = escape(_2f)
      }
      return _2f
    }

    function get_page_url() {
      var _30 = "" + _28.location;
      if (_30 == "about:srcdoc") {
        _30 = "" + document.baseURI
      }
      _30 = _30.substring(0, 300);
      _30 = escape(_30);
      return _30
    }

    function get_screen_width() {
      return _27.screen.width
    }

    function get_screen_height() {
      return _27.screen.height
    }

    function get_performance_url_params(_31) {
      if (_2a == 0) {
        var _32 = "";
        var _33 = "";
        var _34 = "";
        try {
          if (typeof performance !== "undefined") {
            var _35 = Math.round(performance.now());
            _32 = "&sc_rum_e_s=" + _a + "&sc_rum_e_e=" + _35;
            var _36 = _35 - _a;
            _33 = get_performance_tags(_31, _36)
          }
        } catch (ex) {
          _32 = "";
          _33 = ""
        }
        try {
          if (typeof performance !== "undefined") {
            var _37 = performance.getEntriesByType("resource");
            for (var i = 0; i < _37.length; i++) {
              var _39 = _37[i];
              if (_39.name.includes("statcounter.com/counter/counter.js") || _39.name.includes("statcounter.com/counter/counter_test.js")) {
                _34 = "&sc_rum_f_s=" + Math.round(_39.requestStart) + "&sc_rum_f_e=" + Math.round(_39.responseEnd);
                break
              }
            }
          }
        } catch (ex) {
          _34 = ""
        }
        return _32 + _33 + _34
      }
      return ""
    }

    function get_performance_tags(_3a, _3b) {
      var _3c = "";
      if (use_performance_tags(_3a) && typeof performance !== "undefined") {
        var _3d = document.getElementById("sc-ttfb-bd");
        var _3e = "-1";
        if (_3d) {
          _3e = _3d.textContent
        }
        var _3f = performance.timing.responseStart - performance.timing.connectStart;
        var _40 = document.getElementById("sc-perf-wh");
        var _41 = 0;
        if (_40) {
          _41 = _40.textContent
        }
        var _42 = document.getElementById("sc-perf-pn");
        var _43 = 0;
        if (_42) {
          _43 = _42.textContent
        }
        var _44 = document.getElementById("sc-perf-db");
        var _45 = 0;
        if (_44) {
          _45 = _44.textContent
        }
        _3c = "&sc_ev_scperf_js_exec=" + _3b + "&sc_ev_scperf_ttfb_frontend=" + _3f + "&sc_ev_scperf_ttfb_backend=" + _3e + "&sc_ev_scperf_ws=" + _41 + "&sc_ev_scperf_pn=" + _43 + "&sc_ev_scperf_db=" + _45
      }
      return _3c
    }

    function strip_tags(_46, _47) {
      _47 = (((_47 || "") + "").toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join("");
      var _48 = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
        _49 = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
      return _46.replace(_49, "").replace(_48, function($0, $1) {
        return _47.indexOf("<" + $1.toLowerCase() + ">") > -1 ? $0 : ""
      })
    }

    function sanitise_tags(_4c) {
      for (var i = 0; i < _4c.length; i++) {
        _4c[i] = ("" + _4c[i]).trim()
      }
      return _4c
    }

    function validate_tags(_4e) {
      var _4f = 10;
      var _50 = 1;
      var _51 = 300;
      var _52 = [];
      if (!(_4e.length % 2 == 0)) {
        _52.push("Every tag must have a name and value.")
      } else {
        if (_4e.length / 2 > _4f) {
          _52.push("No more than " + _4f + " tags can be passed - " + _4e.length / 2 + " passed.")
        }
        for (var i = 0; i < _4e.length; i++) {
          var _54 = ("" + _4e[i]).length;
          if (_54 < _50 || _54 > _51) {
            _52.push("Tag names and values must be between " + _50 + " and " + _51 + " characters in length ('" + _4e[i] + "' is " + _4e[i].length + " characters long).")
          }
        }
        for (var i = 0; i < _4e.length; i++) {
          if (strip_tags("" + _4e[i]) != "" + _4e[i]) {
            _52.push("Tag names and values may not contain HTML tags.")
          }
        }
      }
      if (_52.length != 0) {
        for (var i = 0; i < _52.length; i++) {}
        return false
      }
      return true
    }

    function get_tag_qs(_55) {
      function _56(obj, _58) {
        var _59 = obj.__proto__ || obj.constructor.prototype;
        return (_58 in obj) && (!(_58 in _59) || _59[_58] !== obj[_58])
      }
      if (Object.prototype.hasOwnProperty) {
        var _56 = function(obj, _5b) {
          return obj.hasOwnProperty(_5b)
        }
      }
      var _5c = {};
      if (_56(_55, "tags") && typeof _55.tags === "object") {
        var _5d = [];
        for (var tag in _55.tags) {
          _5d[_5d.length] = tag;
          _5d[_5d.length] = _55.tags[tag]
        }
        if (validate_tags(_5d)) {
          _5d = sanitise_tags(_5d);
          for (var i = 0; i < _5d.length; i = i + 2) {
            _5c["sc_ev_" + encodeURIComponent(_5d[i])] = encodeURIComponent(_5d[i + 1])
          }
        }
      }
      return _5c
    }
    var _60 = [];
    var _61 = 256;
    var _62 = 6;
    var _63 = 52;
    var _64 = Math.pow(_61, _62),
      _65 = Math.pow(2, _63),
      _66 = _65 * 2,
      _67 = _61 - 1;
    var _68;
    var _69 = function(_6a, _6b) {
      var key = [];
      var _6d = mixkey(flatten(_6b ? [_6a, tostring(_60)] : 0 in arguments ? _6a : autoseed(), 3), key);
      var _6e = new ARC4(key);
      mixkey(tostring(_6e.S), _60);
      _68 = function() {
        var n = _6e.g(_62),
          d = _64,
          x = 0;
        while (n < _65) {
          n = (n + x) * _61;
          d *= _61;
          x = _6e.g(1)
        }
        while (n >= _66) {
          n /= 2;
          d /= 2;
          x >>>= 1
        }
        return (n + x) / d
      };
      return _6d
    };

    function ARC4(key) {
      var t, _74 = key.length,
        me = this,
        i = 0,
        j = me.i = me.j = 0,
        s = me.S = [];
      if (!_74) {
        key = [_74++]
      }
      while (i < _61) {
        s[i] = i++
      }
      for (i = 0; i < _61; i++) {
        s[i] = s[j = _67 & (j + key[i % _74] + (t = s[i]))];
        s[j] = t
      }(me.g = function(_79) {
        var t, r = 0,
          i = me.i,
          j = me.j,
          s = me.S;
        while (_79--) {
          t = s[i = _67 & (i + 1)];
          r = r * _61 + s[_67 & ((s[i] = s[j = _67 & (j + t)]) + (s[j] = t))]
        }
        me.i = i;
        me.j = j;
        return r
      })(_61)
    }

    function flatten(obj, _7d) {
      var _7e = [],
        typ = (typeof obj)[0],
        _80;
      if (_7d && typ == "o") {
        for (_80 in obj) {
          try {
            _7e.push(flatten(obj[_80], _7d - 1))
          } catch (e) {}
        }
      }
      return (_7e.length ? _7e : typ == "s" ? obj : obj + "\x00")
    }

    function mixkey(_81, key) {
      var _83 = _81 + "",
        _84, j = 0;
      while (j < _83.length) {
        key[_67 & j] = _67 & ((_84 ^= key[_67 & j] * 19) + _83.charCodeAt(j++))
      }
      return tostring(key)
    }

    function autoseed(_86) {
      try {
        window.crypto.getRandomValues(_86 = new Uint8Array(_61));
        return tostring(_86)
      } catch (e) {
        return [+new Date, window, window.navigator.plugins, window.screen, tostring(_60)]
      }
    }

    function tostring(a) {
      return String.fromCharCode.apply(0, a)
    }
    mixkey(Math.random(), _60);

    function detectBrowserFeatures() {
      var _88 = [];
      var i;
      var _8a;
      var _8b = {
        pdf: "application/pdf",
        qt: "video/quicktime",
        realp: "audio/x-pn-realaudio-plugin",
        wma: "application/x-mplayer2",
        dir: "application/x-director",
        fla: "application/x-shockwave-flash",
        java: "application/x-java-vm",
        gears: "application/x-googlegears",
        ag: "application/x-silverlight"
      };
      var _8c = (new RegExp("Mac OS X.*Safari/")).test(navigator.userAgent) ? window.devicePixelRatio || 1 : 1;
      if (!((new RegExp("MSIE")).test(navigator.userAgent))) {
        if (navigator.mimeTypes && navigator.mimeTypes.length) {
          for (var i in _8b) {
            if (Object.prototype.hasOwnProperty.call(_8b, i)) {
              _8a = navigator.mimeTypes[_8b[i]];
              _88.push((_8a && _8a.enabledPlugin) ? "1" : "0")
            }
          }
        }
        if (typeof navigator.javaEnabled !== "unknown" && typeof navigator.javaEnabled !== "undefined" && navigator.javaEnabled()) {
          _88.push("java")
        }
        if (typeof window.GearsFactory === "function") {
          _88.push("gears")
        }
      }
      _88.push(screen.width * _8c + "x" + screen.height * _8c);
      return _88.join("")
    }

    function generate_uuid(_8d) {
      var now = new Date();
      var _8f = false;
      if (_8d === undefined) {
        _8d = 32;
        if (_8f) {
          _8d = 36
        }
      }
      var _90 = Math.round(now.getTime() / 1000) + now.getMilliseconds();
      var _91 = (navigator.userAgent || "") + (navigator.platform || "") + detectBrowserFeatures() + now.getTimezoneOffset() + window.innerWidth + window.innerHeight + window.screen.colorDepth + document.URL + _90;
      _69(_91);
      var _92 = "0123456789ABCDEF".split(""),
        _93 = new Array(_8d),
        rnd = 0,
        r;
      for (var i = 0; i < _8d; i++) {
        if (_8f && (i == 8 || i == 13 || i == 18 || i == 23)) {
          _93[i] = "-"
        } else {
          if ((i == 12 && !_8f) || (i == 14 && _8f)) {
            _93[i] = "4"
          } else {
            if ((i == 13 && !_8f) || (i == 15 && _8f)) {
              _93[i] = "F"
            } else {
              if (rnd <= 2) {
                rnd = 33554432 + (_68() * 16777216) | 0
              }
              r = rnd & 15;
              rnd = rnd >> 4;
              _93[i] = _92[(i == 19) ? (r & 3) | 8 : r]
            }
          }
        }
      }
      return _93.join("")
    }
    var _97;
    if (typeof window.sc_cookie_domain == "undefined") {
      _97 = _28.location.host.replace(/^www\./, "")
    } else {
      _97 = window.sc_cookie_domain
    }
    if (_97.substring(0, 1) != ".") {
      _97 = "." + _97
    }

    function _localStorageAvailable() {
      var _98 = false;
      if ("localStorage" in window) {
        try {
          _98 = window["localStorage"] !== null
        } catch (e) {
          if (!e.name || e.name.toLowerCase().replace(/_/g, "").substring(0, 16) !== "quotaexceedederr") {
            if (!e.number || parseInt(e.number, 10) !== -2147024891) {
              throw e
            }
          }
        }
      }
      return _98
    }

    function _setLocalStorage(_99, _9a, _9b) {
      if (_localStorageAvailable()) {
        try {
          if (_99 === "is_visitor_unique") {
            localStorage.setItem("statcounter.com/localstorage/", _9a)
          } else {
            localStorage.setItem("statcounter_" + _99, _9a)
          }
        } catch (e) {
          if (!e.name || e.name.toLowerCase().replace(/_/g, "").substring(0, 16) !== "quotaexceedederr") {
            if (!e.number || parseInt(e.number, 10) !== -2147024891) {
              throw e
            }
          }
          return false
        }
        return true
      }
      return false
    }

    function setLocal(_9c, _9d, _9e, _9f, _a0, _a1) {
      if (typeof _9d === "string") {
        _9d = [_9d]
      }
      if (_9f === undefined) {
        _9f = ""
      }
      if (_a0 === undefined) {
        _a0 = 30
      }
      var _a2 = false;
      if (_13 == "localStorage") {
        _a2 = _setLocalStorage(_9c, _9f + _9d.join("-"), _9e);
        if (!_a2) {
          _a2 = _writeCookie(_9c, _9f + _9d.join("-"), _9e, undefined, _a1)
        } else {
          if (_readCookie(_9c) !== null) {
            _removeCookie(_9c, _9e)
          }
        }
      } else {
        var _a3 = _9d.slice(0, _a0).join("-");
        _a2 = _writeCookie(_9c, _9f + _a3, _9e, undefined, _a1);
        if (!_a2) {
          _a2 = _setLocalStorage(_9c, _9f + _9d.join("-"), _9e)
        } else {
          if (_9d.length > _a0) {
            _setLocalStorage(_9c, "mx" + _9d.slice(_a0).join("-"), _9e)
          } else {
            _removeLocalStorage(_9c)
          }
        }
      }
      return _a2
    }

    function getLocal(_a4, _a5) {
      var val = null;
      if (_localStorageAvailable()) {
        if (_a4 === "is_visitor_unique") {
          val = localStorage.getItem("statcounter.com/localstorage/")
        } else {
          val = localStorage.getItem("statcounter_" + _a4)
        }
      }
      if (_13 == "localStorage" && val !== null && val.substring(0, 2) == "rx") {
        return val
      }
      var _a7 = _readCookie(_a4, _a5);
      if (val !== null) {
        if (_a7 === null && val.substring(0, 2) == "rx") {
          return val
        } else {
          if (_a7 !== null && val.substring(0, 2) == "mx") {
            _a7 += "-" + val.substring(2)
          }
        }
      }
      return _a7
    }

    function _removeLocalStorage(_a8) {
      if (_localStorageAvailable()) {
        if (_a8 === "is_visitor_unique") {
          localStorage.removeItem("statcounter.com/localstorage/")
        }
        localStorage.removeItem("statcounter_" + _a8)
      }
    }

    function removeLocal(_a9, _aa) {
      _removeLocalStorage(_a9);
      if (_readCookie(_a9)) {
        _removeCookie(_a9, _aa)
      }
    }

    function _readCookie(_ab, _ac) {
      var _ad = "sc_" + _ab + "=";
      var ret = null;
      if (_28.cookie) {
        var ca = _28.cookie.split(";");
        for (var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == " ") {
            c = c.substring(1, c.length)
          }
          if (c.indexOf(_ad) == 0) {
            var _b2 = c.substring(_ad.length, c.length);
            if (ret && _ac !== undefined && ret.indexOf("" + _ac + ".") !== -1 && _b2.indexOf("" + _ac + ".") === -1) {} else {
              ret = _b2
            }
          }
        }
      }
      return ret
    }

    function _writeCookie(_b3, _b4, _b5, _b6, _b7) {
      var _b8 = false;
      if (_b6 === undefined) {
        _b8 = 1000 * 60 * 60 * 24 * 365 * 2
      } else {
        if (_b6 !== "session") {
          _b8 = 1000 * _b6
        }
      }
      var _b9 = "";
      if (_b8 !== false) {
        var _ba = new Date();
        _ba.setTime(_ba.getTime() + _b8);
        _b9 = "; expires=" + _ba.toGMTString()
      }
      var _bb = 3050;
      if (_b4.length > _bb - 50 && _b4.substring(0, _bb).indexOf("-") !== -1) {
        _b4 = _b4.substring(0, _b4.substring(0, _bb).lastIndexOf("-"))
      }
      var _bc = "; SameSite=Lax";
      _28.cookie = "sc_" + _b3 + "=" + _b4 + _b9 + "; domain=" + _b5 + "; path=/" + _bc;
      var rc = _readCookie(_b3, _b7);
      if (rc !== null && rc === _b4) {
        return true
      } else {
        return false
      }
    }

    function _removeCookie(_be, _bf) {
      if (_28.location.host == "www" + _bf) {
        _28.cookie = "sc_" + _be + "=; expires=Thu, 01 Jan 1970 00:00:01 GMT; domain=.www" + _bf + "; path=/; SameSite=Lax"
      }
      _28.cookie = "sc_" + _be + "=; expires=Thu, 01 Jan 1970 00:00:01 GMT; domain=" + _bf + "; path=/; SameSite=Lax"
    }

    function _getConfigDataStructureFromSession() {
      var _c0 = {};
      try {
        if (sessionStorage.getItem("statcounter_config") !== null) {
          _c0 = JSON.parse(sessionStorage.getItem("statcounter_config"))
        }
      } catch (ignore) {
        _c0 = {}
      }
      return _c0
    }

    function _sessionStorageGetConfig(key) {
      if (!("sessionStorage" in window)) {
        return null
      }
      var _c2 = _getConfigDataStructureFromSession();
      if (_c2[key] !== undefined) {
        return _c2[key]
      }
      var _c3 = null;
      try {
        _c3 = sessionStorage.getItem(key)
      } catch (ignore) {
        return null
      }
      if (_c3 !== null) {
        _sessionStorageSetConfig(key, _c3);
        sessionStorage.removeItem(key);
        return _c3
      }
      return null
    }
    _7.getSessionConfig = _sessionStorageGetConfig;

    function _sessionStorageSetConfig(key, _c5) {
      if (!("sessionStorage" in window)) {
        console.log("returning false");
        return false
      }
      var _c6 = _getConfigDataStructureFromSession();
      try {
        _c6[key] = _c5;
        return sessionStorage.setItem("statcounter_config", JSON.stringify(_c6))
      } catch (ignore) {
        return false
      }
    }
    if (_7._recording_initiated === undefined) {
      _7._recording_initiated = {}
    }
    var _c7 = function(_c8) {
      if (_7._recording_initiated[_c8]) {
        return
      }
      var _c9 = _sessionStorageGetConfig("record_" + _c8);
      if (!_c9 || !_c9.match(/(^on$|test$|wsdev$|^dev[0-9]*)/)) {
        return
      }
      if (isLegacyIE()) {
        return
      }
      if (!_7._session_increment_calculated[_c8]) {
        return
      }
      if (!_sessionStorageGetConfig("sc_project_time_difference_" + _c8)) {
        return
      }
      if (window !== _27) {
        if (_27.sc_top_reg === undefined) {
          _27.sc_top_reg = {}
        }
        if (_27.sc_top_reg[_c8] === 2) {
          return
        }
        _27.sc_top_reg[_c8] = 2
      }
      if (_7.start_recording) {
        _7.start_recording(_c8, _c9, _14)
      } else {
        var _ca = "https://www.statcounter.com/counter/recorder.js";
        if (_c) {
          _ca = _c.replace(/\/counter([^\/])/, "/recorder$1").replace("_xhtml", "");
          _ca = _ca.replace(/^http:\/\//, "https://")
        }
        if (_c9.indexOf("test") != -1) {
          _ca = _ca.replace(/\/recorder(.[^t])/, "/recorder_test$1")
        }
        if (_c9.indexOf("_") != -1) {
          _ca = _ca.replace(/\.js/, "_" + _c9.split("_")[1] + ".js")
        }
        if (_c9.substring(0, 3) == "dev" && _c9 !== "dev") {
          _ca = _ca.replace(/\/\/(www\.|secure\.)?/, "//" + _c9.split("_")[0].replace(/\//g, "").replace("test", "").replace("wsdev", "") + ".")
        } else {
          _ca = _ca.replace(/\/\/(secure\.)?statcounter\./, "//www.statcounter.")
        }
        _7.inject_script(_ca, function() {
          _statcounter.start_recording(_c8, _c9, _14)
        })
      }
      _7._recording_initiated[_c8] = true
    };
    _7.get_config = function(_cb, _cc) {
      var _cd = false;
      if (_cb.match(/sc_project=[0-9]+/)) {
        _cd = parseInt(_cb.match(/sc_project=([0-9]+)/)[1], 10)
      }
      if (_cb.substring(0, 1) == "?") {
        var url = _10 + "t.php" + _cb
      } else {
        var url = _cb
      }
      url = url + "&get_config=true";
      if (_cd !== false) {
        do_xhr(url, _cc, function(_cf) {
          _sessionStorageSetConfig("sc_block_project_config_" + _cd, 1)
        })
      } else {
        do_xhr(url, _cc)
      }
    };

    function xhr_ping(_d0, _d1, _d2) {
      if (_d1.substring(0, 1) == "?") {
        var url = _10 + "t.php" + _d1
      } else {
        var url = _d1
      }
      url = url + "&xhr_request=true";
      do_xhr(url, _d2)
    }

    function do_xhr(url, _d5, _d6) {
      var _d7 = new XMLHttpRequest();
      _d7.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var _d8 = JSON.parse(this.responseText);
          _d5(_d8)
        }
      };
      if (_d6 !== undefined) {
        _d7.addEventListener("error", _d6)
      }
      _d7.withCredentials = true;
      _d7.open("GET", url, true);
      _d7.send()
    }

    function config_ping(_d9, _da, _db) {
      _7.get_config(_da, function(_dc) {
        _sessionStorageSetConfig("sc_project_config_" + _d9, 1);
        var suc = _sessionStorageSetConfig("sc_project_time_difference_" + _d9, parseInt(_dc["time_difference"]));
        if (suc) {
          _24 = "true"
        } else {
          _24 = "false"
        }
        _23 = _dc["time_difference"];
        if (_dc["visitor_recording"] === 1) {
          _7.record(_d9)
        } else {
          if (_dc["visitor_recording"] === 2) {
            _7.record(_d9, "test")
          } else {
            var _de = _sessionStorageGetConfig("record_" + _d9);
            if (_de && _de.indexOf("dev") !== -1) {
              _c7(_d9)
            }
          }
        }
        if (_dc["visitor_recording_unmask"] !== undefined) {
          _sessionStorageSetConfig("sc_unmask_" + _d9, _dc["visitor_recording_unmask"])
        }
        if (typeof _db !== "undefined") {
          _db(_dc)
        }
      })
    }
    var _df = {
      "google": null,
      "bing": ["q"],
      "search.yahoo": null,
      "m.yahoo": null,
      "m2.yahoo": null,
      "baidu": ["wd", "word"],
      "yandex": ["text"],
      "ya.ru": ["text"],
      "haosou": ["q"],
      "so.com": ["q"],
      "360.cn": ["q"],
      "360sou": ["q"],
      "aol": ["query", "q"],
      "duckduckgo": null,
      "ask.com": ["q", "QUERYT"],
      "mail.ru": ["words"],
      "sogou": ["q", "query"]
    };
    var _e0 = {
      "fb": ["facebook.com", "fb.me"],
      "pi": ["pinterest.com"],
      "tw": ["twitter.com", "t.co"],
      "ln": ["linkedin.com"],
      "in": ["instagram.com"],
      "rd": ["reddit.com"],
      "tb": ["tumblr.com"],
      "st": ["stumbleupon.com"],
      "yt": ["youtube.com"],
      "gp": ["plus.google.com", "plus.url.google.com"]
    };

    function check_root_domains_match(a, b) {
      var _e3 = a.split(".");
      var _e4 = b.split(".");
      var _e5 = Math.min(_e3.length, _e4.length);
      var _e6 = 2;
      if (_e3.length > 1 && ((_e3[_e3.length - 2].length <= 3 && _e3[_e3.length - 1] in {
          "at": 1,
          "au": 1,
          "br": 1,
          "es": 1,
          "hu": 1,
          "il": 1,
          "nz": 1,
          "tr": 1,
          "uk": 1,
          "us": 1,
          "za": 1
        }) || _e3[_e3.length - 1] == "kr" || _e3[_e3.length - 1] == "ru" || (_e3[_e3.length - 1] == "au" && _e3[_e3.length - 2] in {
          "csiro": 1
        }) || (_e3[_e3.length - 1] == "at" && _e3[_e3.length - 2] in {
          "priv": 1
        }) || (_e3[_e3.length - 1] == "fr" && _e3[_e3.length - 2] in {
          "avocat": 1,
          "aeroport": 1,
          "veterinaire": 1
        }) || (_e3[_e3.length - 1] == "hu" && _e3[_e3.length - 2] in {
          "film": 1,
          "lakas": 1,
          "ingatlan": 1,
          "sport": 1,
          "hotel": 1
        }) || (_e3[_e3.length - 1] == "nz" && _e3[_e3.length - 2] in {
          "geek": 1,
          "kiwi": 1,
          "maori": 1,
          "school": 1,
          "govt": 1,
          "health": 1,
          "parliament": 1
        }) || (_e3[_e3.length - 1] == "il" && _e3[_e3.length - 2] in {
          "muni": 1
        }) || (_e3[_e3.length - 1] == "za" && _e3[_e3.length - 2] in {
          "school": 1
        }) || (_e3[_e3.length - 1] == "tr" && _e3[_e3.length - 2] in {
          "name": 1
        }) || (_e3[_e3.length - 1] == "uk" && _e3[_e3.length - 2] in {
          "police": 1
        }))) {
        _e6 = 3
      }
      for (var i = 1; i <= _e5; i++) {
        if (_e3[_e3.length - i] != _e4[_e4.length - i]) {
          return false
        }
        if (i >= _e6) {
          return true
        }
      }
      return _e3.length == _e4.length
    }

    function classify_referrer(_e8, r) {
      if (r == "") {
        return "d"
      }
      var _ea = r.split("/")[2].replace(/^www\./, "");
      var _eb = _28.location.host.replace(/^www\./, "");
      if (apply_new_methodology_fixes(_e8)) {
        if (_eb == _ea) {
          return "internal"
        }
        if (check_root_domains_match(_ea, _eb)) {
          return "internal"
        }
      }
      if (r.search(/\bgoogle\..*\?.*adurl=http/) !== -1) {
        return "p"
      }
      var _ec = ["utm_source=bing", "?gclid=", "&gclid=", "utm_medium=cpc", "utm_medium=paid-media", "utm_medium=ppc"];
      for (var i = 0; i < _ec.length; i++) {
        if (_28.location.search.indexOf(_ec[i]) !== -1) {
          return "p"
        }
      }
      var _ee = ["utm_medium=email"];
      for (var i = 0; i < _ee.length; i++) {
        if (_28.location.search.indexOf(_ee[i]) !== -1) {
          return "e"
        }
      }
      if (!apply_new_methodology_fixes(_e8)) {
        if (_eb == _ea) {
          return "internal"
        }
      }
      for (var _ef in _df) {
        if (_ea.replace(_ef, "#").split(".").indexOf("#") !== -1) {
          if (_df[_ef] === null) {
            return _ef
          }
          for (var i = 0; i < _df[_ef].length; i++) {
            var _f0 = _df[_ef][i];
            if (r.indexOf("?" + _f0 + "=") !== -1 || r.indexOf("&" + _f0 + "=") !== -1) {
              return _ef
            }
          }
        }
      }
      for (var _f1 in _e0) {
        for (var i = 0; i < _e0[_f1].length; i++) {
          var _ef = _e0[_f1][i];
          if (_ea.replace(_ef, "#").split(".").indexOf("#") !== -1) {
            return _f1
          }
        }
      }
      return _ea
    }

    function categorize_class(cls) {
      if (cls == "d" || cls == "p" || cls == "e" || cls == "internal") {
        return cls
      }
      if (cls in _df) {
        return "o"
      }
      if (cls in _e0) {
        return "s"
      }
      return "r"
    }
    var _f3 = escape(get_referrer());
    _7.record_pageview = function(_f4, _f5) {
      var _f6 = "invisible";
      if (typeof _f4 === "undefined") {
        if (_2 === false) {
          if (window.usr) {
            _f4 = 999
          } else {
            console.error("Need to define a global `var sc_project` and `var security code`, or else call record_pageview with these arguments");
            safer_writeln("Statcounter code invalid. Insert a fresh copy.", _f4);
            return
          }
        } else {
          _f4 = _2
        }
        if (window.sc_invisible && window.sc_invisible == 1) {
          _f6 = "invisible"
        } else {
          if (window.sc_text) {
            _f6 = "text"
          } else {
            _f6 = "image"
          }
        }
      } else {
        _f4 = parseInt(_f4, 10);
        if (isNaN(_f4)) {
          console.error("Please call record_pageview with your statcounter project id");
          return
        } else {
          if (typeof _f5 === "string") {
            _7._security_codes[_f4] = _f5
          } else {
            if (_7._security_codes[_f4] === undefined) {
              console.error("Please include the security code for project " + _f4 + " as the second argument to record_pageview");
              return
            }
          }
        }
      }
      if (_7._security_codes[_f4] === undefined) {
        _7._security_codes[_f4] = ""
      }
      var _f7 = 0;
      if (_f4 == 4135125 || _f4 == 6169619 || _f4 == 6222332 || _f4 == 5106510 || _f4 == 6311399 || _f4 == 6320092 || _f4 == 5291656 || _f4 == 7324465 || _f4 == 6640020 || _f4 == 4629288 || _f4 == 1480088 || _f4 == 2447031) {
        if (Math.floor(Math.random() * 6) != 1) {
          _f7 = 1
        }
      }
      var _f8 = false;
      try {
        if (navigator.userAgentData && navigator.userAgentData.getHighEntropyValues && navigator.userAgentData.platform && navigator.userAgentData.platform === "Windows" && !needs_document_write(_f6)) {
          _f8 = "[pending]";
          navigator.userAgentData.getHighEntropyValues(["platformVersion"]).then(function(ua) {
            _f8 = parseInt(ua.platformVersion.split(".")[0])
          })["catch"](function(_fa) {
            if (is_admin_project(_f4)) {
              throw _fa
            }
          })
        }
      } catch (pve) {
        if (is_admin_project(_f4)) {
          throw pve
        }
      }
      if (_f7 == 1) {} else {
        if (_28.webkitVisibilityState == "prerender") {
          if (_8 == 1) {
            function delayed_send_pageview() {
              if (_28.webkitVisibilityState != "prerender") {
                for (var _fb in _7._security_codes) {
                  send_pageview(parseInt(_fb, 10), "invisible", {
                    "p": 2,
                    "pv": _f8
                  })
                }
                _28.removeEventListener("webkitvisibilitychange", delayed_send_pageview, false)
              }
            }
            _28.addEventListener("webkitvisibilitychange", delayed_send_pageview, false)
          }
          gen_counter(_f4, _f6, false, {}, {
            "p": 1
          })
        } else {
          if (_f8 == "[pending]") {
            setTimeout(function() {
              send_pageview(_f4, _f6, {
                "p": 0,
                "pv": _f8
              })
            }, 1)
          } else {
            send_pageview(_f4, _f6, {
              "p": 0
            })
          }
        }
      }
    };

    function generateCounterImageHtml(_fc) {
      if (window.sc_counter_width && window.sc_counter_height) {
        var _fd = " width=\"" + sc_counter_width + "\" height=\"" + sc_counter_height + "\""
      }
      var _fe = "StatCounter - Free Web Tracker and Counter";
      if (window.sc_remove_alt) {
        _fe = ""
      }
      return "<img src=\"" + _fc + "\" alt=\"" + _fe + "\" border=\"0\"" + _fd + ">"
    }
    var _ff = {};

    function send_pageview(_100, mode, _102) {
      var _103 = {};
      _103["u1"] = "za";
      var _104 = need_project_config(_100);
      try {
        _14 = Date.now()
      } catch (e) {}
      _ff[_100] = (new Date()).getTime();
      if (window !== _27) {
        if (_27.sc_top_reg === undefined) {
          _27.sc_top_reg = {}
        }
        if (_27.sc_top_reg[_100] === undefined) {
          _27.sc_top_reg[_100] = 1
        } else {
          _c7(_100);
          return
        }
      }
      var _105 = {};
      if (!apply_new_methodology_fixes(_100)) {
        var rdom = classify_referrer(_100, _f3);
        var rcat = categorize_class(rdom);
        if (rdom != "internal") {
          _105["rcat"] = rcat;
          _105["rdom"] = rdom
        }
      }
      var _108 = Math.round((new Date()).getTime() / 1000);
      if (_13 != "disabled") {
        if (apply_new_methodology_fixes(_100)) {
          var rdom = classify_referrer(_100, _f3);
          var rcat = categorize_class(rdom);
          if (rdom != "internal") {
            _105["rcat"] = rcat;
            _105["rdom"] = rdom
          }
        }
        try {
          var _109 = JSON.parse(localStorage.getItem("sc_medium_source"));
          if (_109 == null) {
            _109 = {}
          }
          var _10a = null;
          var _10b = null;
          var _10c = null;
          var msl = 0;
          for (var k in _109) {
            if (_10a === null || _109[k] > _109[_10a]) {
              _10a = k
            }
            var kcat = categorize_class(k);
            if (rcat == kcat && (_10b === null || _109[k] > _109[_10b])) {
              _10b = k
            }
            if (kcat == "r" && (_10c === null || _109[k] < _109[_10c])) {
              _10c = k
            }
            msl += 1
          }
          if (msl > 30 && _10c !== null) {
            delete _109[_10c]
          }
          if (sessionStorage.getItem("statcounter_bounce")) {
            sessionStorage.removeItem("statcounter_bounce");
            _105["bb"] = 0
          }
          var _110 = 30;
          if (!apply_new_methodology_fixes(_100)) {
            _110 = 15
          }
          if (rdom == "d" && _10a !== null && _10a != "d" && (_108 - _109[_10a]) < 60 * _110) {
            rdom = "internal"
          }
          if (apply_new_methodology_fixes(_100)) {
            if (sessionStorage.getItem("statcounter_session") && (_108 - parseInt(sessionStorage.getItem("statcounter_session"), 10)) < 60 * 30) {
              rdom = "internal"
            }
            sessionStorage.setItem("statcounter_session", _108)
          }
          if (!apply_new_methodology_fixes(_100)) {
            if (rcat == "r" && sessionStorage.getItem("statcounter_exit_domain") == rdom) {
              rdom = "internal"
            }
          }
          if (rdom == "internal") {
            if (_10a !== null) {
              _105["rcat"] = categorize_class(_10a);
              if (_105["rdom"] !== undefined) {
                delete _105["rdom"]
              }
              _105["rdomo"] = _10a;
              _105["rdomg"] = _108 - _109[_10a];
              _109[_10a] = _108
            }
          } else {
            var _111 = false;
            if (rdom in _109) {
              if (rdom == _10a) {
                if (_105["rdom"] !== undefined) {
                  _105["rdomo"] = _105["rdom"];
                  delete _105["rdom"]
                }
              }
              _105["rdomg"] = _108 - _109[rdom];
              if (_108 - _109[rdom] < 60 * 30) {
                _111 = true
              }
            } else {
              _105["rdomg"] = "new"
            }
            if (_105["bb"] === undefined && !_111) {
              sessionStorage.setItem("statcounter_bounce", "1");
              _105["bb"] = 1
            }
            if (_10b !== null && (!(rdom in _109) || rdom != _10b)) {
              _105["rcatg"] = _108 - _109[_10b]
            }
            _109[rdom] = _108
          }
          try {
            localStorage.setItem("sc_medium_source", JSON.stringify(_109))
          } catch (maybe_not_enough_space) {
            if (apply_new_methodology_fixes(_100)) {
              _105 = {}
            }
          }
        } catch (e) {
          if (apply_new_methodology_fixes(_100)) {
            _105 = {}
          }
        }
        for (var arg in _105) {
          _102[arg] = _105[arg]
        }
        if (_105["rdom"] !== undefined) {
          var _113 = true
        } else {
          var _113 = false
        }
        var _114 = _7.update_cookie(_100, _108, _113);
        if (_114["session_incremented"]) {
          var _115 = _sessionStorageGetConfig("record_" + _100);
          if (_115 && !_115.match(/(^test$|wsdev$|^dev[0-9]*)/)) {
            _104 = true;
            _sessionStorageSetConfig("sc_project_time_difference_" + _100, false)
          }
        }
        _7._session_increment_calculated[_100] = true;
        _102["jg"] = _114["jg"];
        _102["rr"] = _114["rr"];
        if (_114["u1"] !== undefined) {
          _103["u1"] = _114["u1"]
        }
      } else {}
      if (Object.prototype.toString.call(_7._pending_tags) === "[object Array]") {
        var _116 = _7._pending_tags.length;
        if (_116 >= 1) {
          var _117 = get_tag_qs(_7._pending_tags[0]);
          for (var arg in _117) {
            _102[arg] = _117[arg]
          }
        }
      }
      _7._pending_tags = {};
      gen_counter(_100, mode, _104, _103, _102);
      _f3 = get_page_url();
      _c7(_100)
    }

    function gen_counter(_118, mode, _11a, _11b, _11c) {
      _11b["java"] = 1;
      _11b["security"] = _7._security_codes[_118];
      _11b["sc_snum"] = _8;
      _11b["sess"] = _7.version();
      var _11d = _10;
      if (mode == "text") {
        _11d += "text.php?"
      } else {
        _11d += "t.php?"
      }
      if (_118 !== 999) {
        _11d += "sc_project=" + _118
      } else {
        if (window.usr) {
          _11d += "usr=" + window.usr
        }
      }
      for (var arg in _11b) {
        _11d += "&" + arg + "=" + _11b[arg]
      }
      _11c["resolution"] = get_screen_width();
      _11c["h"] = get_screen_height();
      _11c["camefrom"] = _f3.substring(0, 600);
      _11c["u"] = get_page_url();
      _11c["t"] = get_page_title();
      if (mode == "invisible") {
        _11c["invisible"] = "1"
      } else {
        if (mode == "text") {
          _11c["text"] = window.sc_text
        }
      }
      var _11f = "";
      for (var arg in _11c) {
        _11f += "&" + arg + "=" + _11c[arg]
      }
      if (mode == "invisible") {
        var _120 = false;
        if (_12 != "" && typeof JSON == "object" && JSON && typeof JSON.stringify == "function" && "sessionStorage" in window) {
          _120 = true
        }
        var _121 = false;
        if (_120) {
          try {
            var _122 = sessionStorage.getItem("statcounter_pending");
            if (!_122) {
              var _123 = {}
            } else {
              try {
                var _123 = JSON.parse(_122)
              } catch (ignore) {
                var _123 = {}
              }
            }
            if (_123[_118] === undefined) {
              _123[_118] = {}
            }
            var now = new Date().getTime();
            _123[_118][now] = _11f;
            while (true) {
              _122 = JSON.stringify(_123);
              if (_122 == "{}") {
                sessionStorage.removeItem("statcounter_pending");
                break
              }
              var _125 = _122.split(/:.{20}/).length - 1;
              if (_125 < 20) {
                var _126 = true;
                try {
                  sessionStorage.setItem("statcounter_pending", _122)
                } catch (e) {
                  if (!e.name || e.name.toLowerCase().replace(/_/g, "").substring(0, 16) !== "quotaexceedederr") {
                    throw e
                  }
                  _126 = false
                }
                if (_126) {
                  break
                }
              }
              var _127 = false;
              var _128 = false;
              var _129 = false;
              for (var _12a in _123) {
                for (var _12b in _123[_12a]) {
                  var _12c = /jg=(\d+)/.exec(_123[_12a][_12b]);
                  if (_12c !== null) {
                    var _12d = parseInt(_12c[1])
                  } else {
                    var _12d = false
                  }
                  if (_127 === false || (_12d !== false && _12d < _127)) {
                    if (_12d !== false) {
                      _127 = _12d
                    }
                    _128 = _12a;
                    _129 = _12b
                  }
                }
              }
              if (_129 === false) {
                break
              }
              delete _123[_128][_129];
              if (JSON.stringify(_123[_128]) == "{}") {
                delete _123[_128]
              }
            }
            for (var ts in _123[_118]) {
              (function(_12f, _130) {
                var _131 = _123[_130][_12f];

                function post_hit_pending_cleanup() {
                  if (_123[_130] !== undefined) {
                    delete _123[_130][_12f];
                    if (JSON.stringify(_123[_130]) == "{}") {
                      delete _123[_130]
                    }
                  }
                  var _132 = JSON.stringify(_123);
                  if (_132 == "{}") {
                    sessionStorage.removeItem("statcounter_pending")
                  } else {
                    sessionStorage.setItem("statcounter_pending", _132)
                  }
                }
                var _133 = _11d + _131;
                if (_12f != now) {
                  _133 += "&pg=" + Math.round((now - _12f) / 1000)
                } else {
                  _121 = true;
                  _133 += get_performance_url_params(_118)
                }
                if (_11a) {
                  config_ping(_118, _133, function(_134) {
                    post_hit_pending_cleanup()
                  })
                } else {
                  if (!navigator.sendBeacon) {
                    var _135 = new Image();
                    _135.onload = function() {
                      post_hit_pending_cleanup()
                    };
                    _135.src = _133 + "&sc_random=" + Math.random()
                  } else {
                    navigator.sendBeacon(_133, "");
                    post_hit_pending_cleanup()
                  }
                }
              })(parseInt(ts, 10), _118)
            }
          } catch (e) {}
        }
        if (!_120 || !_121) {
          var _136 = _11d + get_performance_url_params(_118) + _11f;
          if (_11a) {
            config_ping(_118, _136)
          } else {
            if (!navigator.sendBeacon) {
              var _137 = new Image();
              _137.src = _136 + "&sc_random=" + Math.random()
            } else {
              navigator.sendBeacon(_136, "")
            }
          }
        }
      } else {
        var _136 = _11d + get_performance_url_params(_118) + _11f;
        var _138 = "sc_counter_" + _118;
        if (_8 != 1) {
          _138 += "_" + _8
        }
        if (mode == "text") {
          var _139 = function(_13a) {
            if (_13a["text"]) {
              document.getElementById(_138).innerHTML = _13a["text"]
            } else {
              if (_13a["counter_image"]) {
                var _13b = generateCounterImageHtml(_13a["counter_image"]);
                document.getElementById(_138).innerHTML = _13b
              }
            }
          };
          if (_11a) {
            safer_writeln("<span class=\"statcounter\" id=\"" + _138 + "\"></span>", _118);
            config_ping(_118, _136, _139)
          } else {
            safer_writeln("<span class=\"statcounter\" id=\"" + _138 + "\"></span>", _118);
            xhr_ping(_118, _136, _139)
          }
        } else {
          if (window.sc_remove_link) {
            var _13c = "";
            var _13d = ""
          } else {
            var _13c = "<a id=\"" + _138 + "\" class=\"statcounter\" href=\"https://www." + _11 + "/\" target=\"_blank\">";
            var _13d = "</a>"
          }
          if (_11a) {
            safer_writeln("<span class=\"statcounter\">" + _13c + "Statcounter" + _13d + "</span>", _118);
            config_ping(_118, _136, function(_13e) {
              var _13f = generateCounterImageHtml(_13e["counter_image"]);
              document.getElementById(_138).innerHTML = _13f
            })
          } else {
            _136 += "&sc_random=" + Math.random();
            safer_writeln("<span class=\"statcounter\">" + _13c + generateCounterImageHtml(_136.replace(/&/g, "&amp;")) + _13d + "</span>", _118)
          }
        }
      }
      _2a++
    }

    function sc_process_anchor(_140) {
      var _141 = function() {
        for (var _142 in _7._security_codes) {
          sc_clickstat_call(parseInt(_142, 10), this)
        }
        return true
      };
      if (_140.addEventListener) {
        _140.addEventListener("mousedown", _141)
      } else {
        if (_140.attachEvent) {
          _140.attachEvent("onmousedown", _141)
        }
      }
    }

    function sc_none() {
      return
    }

    function sc_delay() {
      if (window.sc_click_stat) {
        var d = window.sc_click_stat
      } else {
        var d = 0
      }
      var n = new Date();
      var t = n.getTime() + d;
      while (n.getTime() < t) {
        var n = new Date()
      }
    }

    function sc_clickstat_call(_146, _147, _148) {
      var _149 = "https?|ftp|telnet|ssh|ssl|mailto|spotify|zoommtg|zoomus|slack|skype|callto|bitcoin|gtalk|tel";
      var _14a = "ac|co|gov|ltd|me|mod|net|nic|nhs|org|plc|police|sch|com";
      var dl = new RegExp("\\.(" + _15 + ")$", "i");
      var lnk = new RegExp("^(" + _149 + "):", "i");
      var _14d = new RegExp("^(" + _14a + ")$", "i");
      var _14e = location.host.replace(/^www\./i, "");
      var _14f = _14e.split(".");
      var _150 = _14f.pop();
      var _151 = _14f.pop();
      if (_14d.test(_151)) {
        _150 = _151 + "." + _150;
        _151 = _14f.pop()
      }
      _150 = _151 + "." + _150;
      var _152 = "^https?://(.*)(" + _150 + "|webcache.googleusercontent.com)";
      var _153 = new RegExp(_152, "i");
      if (_147) {
        var _154 = 0;
        if (lnk.test(_147)) {
          if ((_153.test(_147))) {
            if (dl.test(_147)) {
              _154 = 1
            } else {
              if (_16 !== false && _16.test(_147)) {
                _154 = 2
              } else {
                if (_f == 2) {
                  _154 = 2
                }
              }
            }
          } else {
            _154 = 2
          }
        } else {
          if (_148 === true) {
            _154 = 2
          }
        }
        if (_154 != 0) {
          var _155 = escape(_147);
          if (_155.length > 0) {
            if (!apply_new_methodology_fixes(_146)) {
              if (_154 == 2 && _13 != "disabled" && lnk.test(_147)) {
                try {
                  sessionStorage.setItem("statcounter_exit_domain", _155.split("/")[2].replace(/^www\./, ""))
                } catch (ignore) {}
              }
            }
            var _156 = _10 + "click.gif?sc_project=" + _146 + "&security=" + _7._security_codes[_146] + "&c=" + _155 + "&m=" + _154 + "&u=" + get_page_url() + "&t=" + get_page_title() + "&sess=" + _7.version() + "&rand=" + Math.random();
            var _157 = Math.round((new Date()).getTime() / 1000);
            var _158 = _7.update_cookie(_146, _157);
            if (_158["u1"] !== undefined) {
              _156 += "&u1=" + _158["u1"]
            }
            _156 += "&jg=" + _158["jg"];
            _156 += "&rr=" + _158["rr"];
            var _159 = new Image();
            _159.onload = sc_none;
            _159.src = _156;
            if (_7._add_recording_event) {
              _7._add_recording_event(_154 == 1 ? "download" : _154 == 2 ? "exit" : "unknown", {
                "link": unescape(_155)
              })
            }
            sc_delay()
          }
        }
      }
    }
    _7.record_click = function(_15a, _15b) {
      _15a = parseInt(_15a, 10);
      if (isNaN(_15a)) {
        console.error("Please call record_click with your statcounter project id");
        return
      } else {
        if (_7._security_codes[_15a] === undefined) {
          console.error("Please set up security codes (e.g. by calling record_pageview) prior to record_click");
          return
        }
      }
      sc_clickstat_call(_15a, _15b, true)
    };
    var _15c = "googlesyndication.com|ypn-js.overture.com|ypn-js.ysm.yahoo.com|googleads.g.doubleclick.net";
    var _15d = "^aswift_[0-9]+$";
    var _15e;
    var _15f;
    var _160;
    var _161;

    function sc_adsense_click(_162, _163) {
      if (_163.src.match(_15c)) {
        var _164 = escape(_163.src)
      } else {
        var _164 = escape("Google Adsense " + _163.width + "x" + _163.height)
      }
      var _165 = _10 + "click.gif?sc_project=" + _162 + "&security=" + _7._security_codes[_162] + "&c=" + _164 + "&m=2&u=" + get_page_url() + "&t=" + get_page_title() + "&sess=" + _7.version() + "&rand=" + Math.random();
      var _166 = Math.round((new Date()).getTime() / 1000);
      var _167 = _7.update_cookie(_162, _166);
      if (_167["u1"] !== undefined) {
        _165 += "&u1=" + _167["u1"]
      }
      _165 += "&jg=" + _167["jg"];
      _165 += "&rr=" + _167["rr"];
      if (!navigator.sendBeacon) {
        var i = new Image();
        i.src = _165;
        sc_delay()
      } else {
        navigator.sendBeacon(_165, "")
      }
      if (_7._add_recording_event) {
        _7._add_recording_event("adsense", {
          "link": unescape(_164)
        })
      }
    }

    function sc_adsense_init(cdoc) {
      var _16a = cdoc.defaultView;
      var _16b = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
      var _16c = /Firefox/.test(navigator.userAgent) && /Android/.test(navigator.userAgent);
      if (_16b || _16c) {
        var el = cdoc.getElementsByTagName("iframe");
        for (var i = 0; i < el.length; i++) {
          if (el[i].id.substring(0, 6) == "aswift") {
            el[i].addEventListener("mouseenter", function(e) {
              for (var _170 in _7._security_codes) {
                sc_adsense_click(parseInt(_170, 10), this)
              }
            })
          }
        }
      } else {
        if (cdoc.all && typeof window.opera == "undefined") {
          var el = cdoc.getElementsByTagName("iframe");
          for (var i = 0; i < el.length; i++) {
            if (el[i].src.match(_15c) || el[i].id.match(_15d)) {
              el[i].onfocus = function() {
                for (var _171 in _7._security_codes) {
                  sc_adsense_click(parseInt(_171, 10), this)
                }
              }
            }
          }
        } else {
          if (typeof window.addEventListener !== "undefined") {
            var _172 = "unload";
            _172 = "beforeunload";
            if (_16a) {
              _16a.focus();
              _16a.addEventListener("blur", function() {
                var _173 = cdoc.activeElement;
                _160 = _173;
                _161 = new Date().getTime()
              });
              _16a.addEventListener(_172, sc_exitpage, false);
              _16a.addEventListener("mousemove", sc_getmouse, true)
            }
          }
        }
      }
    }

    function isLegacyIE() {
      var ua = navigator.userAgent;
      var msie = ua.indexOf("MSIE ");
      if (msie > 0) {
        return 10 >= parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10)
      }
      var _176 = ua.indexOf("Trident/");
      if (_176 > 0) {
        var rv = ua.indexOf("rv:");
        return 11 >= parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10)
      }
      return false
    }

    function sc_getmouse(e) {
      if (typeof e.pageX == "number") {
        _15e = e.pageX;
        _15f = e.pageY
      } else {
        if (typeof e.clientX == "number") {
          _15e = e.clientX;
          _15f = e.clientY;
          if (_28.body && (_28.body.scrollLeft || _28.body.scrollTop)) {
            _15e += _28.body.scrollLeft;
            _15f += _28.body.scrollTop
          } else {
            if (_28.documentElement && (_28.documentElement.scrollLeft || _28.documentElement.scrollTop)) {
              _15e += _28.documentElement.scrollLeft;
              _15f += _28.documentElement.scrollTop
            }
          }
        }
      }
    }

    function sc_findy(obj) {
      var y = 0;
      while (obj) {
        y += obj.offsetTop;
        obj = obj.offsetParent
      }
      return (y)
    }

    function sc_findx(obj) {
      var x = 0;
      while (obj) {
        x += obj.offsetLeft;
        obj = obj.offsetParent
      }
      return (x)
    }

    function sc_exitpage(e) {
      var ad = _28.getElementsByTagName("iframe");
      if (typeof _15e != "undefined") {
        for (var i = 0; i < ad.length; i++) {
          var _180 = sc_findx(ad[i]);
          var _181 = sc_findy(ad[i]);
          var adW = parseInt(_180, 10) + parseInt(ad[i].width, 10) + 15;
          var adH = parseInt(_181, 10) + parseInt(ad[i].height, 10) + 10;
          var _184 = (_15e > (_180 - 10) && _15e < adW);
          var _185 = (_15f > (_181 - 10) && _15f < adH);
          if (_185 && _184) {
            if (ad[i].src.match(_15c) || ad[i].id.match(_15d)) {
              for (var _186 in _7._security_codes) {
                sc_adsense_click(parseInt(_186, 10), ad[i])
              }
            }
          }
        }
      }
      if (typeof _160 != "undefined" && _160.id.substring(0, 6) == "aswift") {
        var _187 = new Date().getTime() - _161;
        if (_187 < 300) {
          for (var _186 in _7._security_codes) {
            sc_adsense_click(parseInt(_186, 10), _160)
          }
        }
      }
    }

    function detect_dynamically_created_anchors(cdoc) {
      var _189 = false;
      for (var _18a in _7._security_codes) {
        var _18b = parseInt(_18a, 10);
        if (is_admin_project(_18b) || _18b == 12718861 || _18b == 12537497) {
          _189 = true
        }
      }
      if (_189) {
        try {
          var _18c = function(_18d) {
            try {
              if (_18d.tagName.toLowerCase() == "a") {
                sc_process_anchor(_18d)
              } else {
                if (_18d.tagName.toLowerCase() == "area") {
                  if (typeof _18d.hasAttribute === "function" && _18d.hasAttribute("href")) {
                    sc_process_anchor(_18d)
                  }
                }
              }
              if (_18d.hasChildNodes()) {
                _18d.childNodes.forEach(function(_18e) {
                  _18c(_18e)
                })
              }
            } catch (ei) {}
          };
          var _18f = new MutationObserver(function(_190) {
            try {
              _190.forEach(function(_191) {
                _191.addedNodes.forEach(_18c)
              })
            } catch (ei) {}
          });
          _18f.observe(cdoc.body, {
            subtree: true,
            childList: true
          })
        } catch (ei) {}
      }
    }

    function initiate_click_detection(cdoc) {
      var _193 = cdoc.defaultView;
      var _194 = function() {
        sc_adsense_init(cdoc)
      };
      var _195 = cdoc.getElementsByTagName("a");
      var _196 = cdoc.getElementsByTagName("area");
      for (var i = 0; i < _195.length; i++) {
        var _198 = _195[i];
        sc_process_anchor(_198)
      }
      for (var i = 0; i < _196.length; i++) {
        var _198 = _196[i];
        if (typeof _198.hasAttribute === "function" && _198.hasAttribute("href")) {
          sc_process_anchor(_198)
        }
      }
      detect_dynamically_created_anchors(cdoc);
      if (typeof window.addEventListener != "undefined") {
        _193.addEventListener("load", _194, false)
      } else {
        if (typeof cdoc.addEventListener != "undefined") {
          cdoc.addEventListener("load", _194, false)
        } else {
          if (typeof window.attachEvent != "undefined") {
            _193.attachEvent("onload", _194)
          } else {
            if (typeof window.onload == "function") {
              var _199 = onload;
              _193.onload = function() {
                _199();
                _194()
              }
            } else {
              _193.onload = _194
            }
          }
        }
      }
    }
    _7.update_cookie = function(_19a, _19b, _19c) {
      if (_19b === undefined) {
        _19b = Math.round((new Date()).getTime() / 1000)
      }
      var _19d = _sessionStorageGetConfig("sc_project_time_difference_" + _19a);
      var ret = {};
      var _19f = "1.1.1.1.1.1.1.1.1";
      var _1a0 = "is_visitor_unique";
      try {
        var _1a1 = getLocal(_1a0, _19a)
      } catch (e) {
        var _1a1 = false;
        _12 = ".ex"
      }
      var _1a2 = [];
      var _1a3 = [];
      if (_1a1 && _1a1.substring(0, 2) == "rx") {
        removeLocal(_1a0, _97);
        var _1a4 = _1a1.substring(2);
        _1a2 = _1a4.split("-");
        var _1a5 = false;
        var _1a6 = false;
        for (var i = 0; i < _1a2.length; i++) {
          var _1a8 = _1a2[i].split(".");
          if (parseInt(_1a8[0], 10) == _19a) {
            _1a5 = true;
            var _1a9 = parseInt(_1a8[1], 10);
            _7._returning_values[_19a] = [];
            var _1aa = 2;
            if (_1a8[2].length == 32) {
              _12 = "." + _1a8[2];
              _1aa = 3
            } else {
              _12 = _1a6
            }
            for (var ir = 0; ir < _22.length; ir++) {
              var rval = parseInt(_1a8[ir + _1aa], 10);
              if (isNaN(rval)) {
                rval = 1
              }
              _7._returning_values[_19a].push(rval)
            }
            ret["jg"] = _19b - _1a9;
            for (var ir = 0; ir < _22.length; ir++) {
              if (_19c) {
                _7._returning_values[_19a][ir]++
              } else {
                if (_19b > (_1a9 + 60 * _22[ir])) {
                  if (_22[ir] * 60 === _19d) {
                    ret["session_incremented"] = true
                  }
                  _7._returning_values[_19a][ir]++
                }
              }
            }
            ret["rr"] = _7._returning_values[_19a].join(".");
            _1a3.push("" + _19a + "." + _19b + _12 + "." + _7._returning_values[_19a].join("."))
          } else {
            _1a3.push(_1a2[i]);
            if (i == 0 && _1a8[2].length == 32 && _12 == "") {
              _12 = "." + _1a8[2]
            }
          }
          if (i == 0) {
            _1a6 = _12
          }
        }
        if (!_1a5) {
          if (_1a3.length == 0 && _12 == "") {
            _12 = "." + generate_uuid()
          }
          _1a3.push("" + _19a + "." + _19b + _12 + "." + _19f);
          _7._returning_values[_19a] = _19f.split(".");
          ret["jg"] = "new";
          ret["rr"] = _19f
        }
        _1a3.sort(function(a, b) {
          return parseInt(b.split(".")[1], 10) - parseInt(a.split(".")[1], 10)
        });
        for (var iv = 1; iv < _1a3.length; iv++) {
          _1a3[iv] = _1a3[iv].replace("." + _1a3[0].split(".")[2] + ".", ".")
        }
        var _1b0 = setLocal(_1a0, _1a3, _97, "rx", 3, _19a);
        if (!_1b0) {}
      } else {
        if (_12 != ".ex") {
          _12 = "." + generate_uuid();
          _1a3 = ["" + _19a + "." + _19b + _12 + "." + _19f];
          var _1b1 = setLocal(_1a0, _1a3, _97, "rx", 3, _19a);
          if (_1b1) {
            _7._returning_values[_19a] = _19f.split(".");
            ret["jg"] = "new";
            ret["rr"] = _19f
          } else {
            _12 = ".na"
          }
        }
      }
      if (_12 != "") {
        ret["u1"] = _12.substring(1)
      }
      return ret
    };
    _7.get_visitor_id = function() {
      if (_12.length > 1) {
        return _12.substring(1)
      }
      return "x-no-visitor"
    };
    _7.get_session_num = function(_1b2) {
      var _1b3 = _sessionStorageGetConfig("sc_project_time_difference_" + _1b2);
      if (_1b3 != false && _7._session_increment_calculated[_1b2] && _7._returning_values[_1b2].length == _22.length) {
        for (var i = 0; i < _22.length; i++) {
          if (_22[i] * 60 == parseInt(_1b3)) {
            return _7._returning_values[_1b2][i]
          }
        }
      }
      var _1b5 = "-" + _23 + "-" + _1b2 + "-" + _24 + "-" + _20;
      if (_1b3 === null) {
        return "x-no-session-num-99" + Math.round(1000 * Math.random()) + _1b5
      } else {
        if (!_7._session_increment_calculated[_1b2]) {
          return "x-no-session-num-98" + Math.round(1000 * Math.random()) + _1b5
        } else {
          if (_7._returning_values[_1b2].length !== _22.length) {
            return "x-no-session-num-97" + Math.round(1000 * Math.random()) + _1b5
          } else {
            if (_1b3 == false) {
              return "x-no-session-num-96" + Math.round(1000 * Math.random()) + _1b5
            }
          }
        }
      }
      return "x-no-session-num-95" + _1b3 + _1b5
    };
    _7.version = function() {
      return "a8f3c4"
    };
    _7.get_tab_session = function() {
      var _1b6 = false;
      try {
        _1b6 = sessionStorage.getItem("statcounter_tab_session");
        if (!_1b6) {
          _1b6 = generate_uuid(8);
          try {
            sessionStorage.setItem("statcounter_tab_session", _1b6)
          } catch (e) {
            _1b6 = false
          }
        }
      } catch (e) {
        _1b6 = false
      }
      if (_1b6 === false) {
        session_tab_id = "x-no-session-storage-" + Math.round(100000 * Math.random())
      } else {
        return _1b6
      }
    };
    _7.record = function(_1b7, _1b8) {
      if (_1b8 === undefined) {
        _1b8 = "on"
      } else {}
      if (_1b7 === undefined || _1b7 === "on" || _1b7 === "dev") {
        if (_2 !== false) {
          console.log("Turning on session recording for p" + _2);
          _1b7 = _2
        } else {
          return
        }
      } else {
        if (parseInt(_1b7, 10) + "" == _1b7) {
          _1b7 = parseInt(_1b7, 10)
        } else {
          return
        }
      }
      _sessionStorageSetConfig("record_" + _1b7, _1b8);
      if (!_sessionStorageGetConfig("sc_project_time_difference_" + _1b7)) {
        _sessionStorageSetConfig("sc_project_time_difference_" + _1b7, 1800)
      }
      _c7(_1b7)
    };
    _7._get_script_num = function() {
      return _8
    };
    if (_8 == 1) {
      if (_f > 0) {
        var _1b9 = [];
        _1b9.push.apply(_1b9, _28.getElementsByTagName("frame"));
        _1b9.push.apply(_1b9, _28.getElementsByTagName("iframe"));
        while (_1b9.length) {
          var _1ba = _1b9.pop(0);
          try {
            var fdoc = _1ba.contentDocument;
            initiate_click_detection(fdoc);
            _1b9.push.apply(_1b9, fdoc.getElementsByTagName("frame"));
            _1b9.push.apply(_1b9, fdoc.getElementsByTagName("iframe"))
          } catch (ignore) {}
        }
        initiate_click_detection(_28)
      }
      try {
        var _1bc = _28.getElementsByTagName("title");
        if (_1bc.length) {
          var _1bd = _28.title;
          var _1be = _28.location.href.split("#")[0];
          var _1bf = new MutationObserver(function() {
            var _1c0 = _28.location.href.split("#")[0];
            if (_28.title != _1bd && _1c0 != _1be) {
              for (var _1c1 in _7._security_codes) {
                var _1c2 = parseInt(_1c1, 10);
                if (_ff[_1c2] === undefined || (new Date().getTime() - _ff[_1c2] > 1000)) {
                  setTimeout(function(_1c3) {
                    if (_ff[_1c3] === undefined || (new Date().getTime() - _ff[_1c3] > 1000)) {
                      if (_27.sc_top_reg !== undefined) {
                        _27.sc_top_reg[_1c3] = undefined
                      }
                      _7.record_pageview(_1c3)
                    }
                  }, 200, _1c2)
                }
              }
              if (_7._add_recording_event) {
                _7._add_recording_event("history-pageload", {
                  "referrer": _1be,
                  "href": _1c0
                })
              }
              _1bd = _28.title;
              _1be = _1c0
            }
          });
          _1bf.observe(_1bc[0], {
            childList: true,
            attributes: false,
            subtree: false
          })
        }
      } catch (ei) {}
    }
    _7._generate_uuid = generate_uuid;
    return _7
  } catch (e) {
    if (_2 != false && is_admin_project(_2)) {
      if (typeof encodeURIComponent != "function") {
        encodeURIComponent = function(s) {
          return escape(s)
        }
      }
      var _1c5 = "";
      for (var prop in e) {
        _1c5 += "property: " + prop + " value: [" + e[prop] + "]\n"
      }
      _1c5 += "toString(): " + " value: [" + e.toString() + "]\n";
      var _1c7 = new Image();
      _1c7.src = "https://statcounter.com/feedback/?email=javascript@statcounter.com&page_url=" + encodeURIComponent(_28.location.protocol + "//" + _28.location.host + _28.location.pathname + _28.location.search + _28.location.hash) + "&name=Auto%20JS&feedback_username=statcounter&pid=" + _2 + "&fake_post&user_company&feedback=consistent%20uniques%20js%20exception:%20" + encodeURIComponent(_1c5)
    }
  }
}(_statcounter);
_statcounter.record_pageview();
