var fullQS;
var urlParams = {};

(function () {
    var e,
        a = /\+/g,  // Regex for replacing addition symbol with a space
        r = /([^&=]+)=?([^&]*)/g,
        d = function (s) { return decodeURIComponent(s.replace(a, " ")); },
        q = window.location.search.substring(1);
    fullQS = q;
    while (e = r.exec(q))
        urlParams[d(e[1])] = d(e[2]);
})();

function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString()) + '; path=/';
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name, def) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    var value;
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            value = unescape(y);
        }
    }
    if (value == undefined) {
        value = def;
    }
    return value;
}

String.prototype.toProperCase = function () {
    return this.replace(/\w\S*/g, function (txt) { return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase(); });
};

function isValidZip(str) {
    return /^\d{5}(-\d{4})?$/.test(str);
}

function isValidEmail(str) {
    //return /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z])+$/.test(str);
    return /^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$/.test(str);
}

function isValidPhone(str) {
    //return /^[2-9]\d{2}\d{3}\d{4}$/.test(str);
    return /^\D?([2-9]\d{2})\D?\D?(\d{3})\D?(\d{4})$/.test(str);
}

function isValidDate(str) {
    return /^([0]?[1-9]|[1][0-2])[./-]([0]?[1-9]|[1|2][0-9]|[3][0|1])[./-]([0-9]{4}|[0-9]{2})$/.test(str);
}

function isValidPct(str) {
    return /^-?[0-9]{0,2}(\.[0-9]{1,2})?$|^-?(100)(\.[0]{1,2})?$/.test(str);
}

function getToday() {
    var mydate = new Date();
    var year = mydate.getYear();

    if (year < 1000) {
        year += 1900;
    }

    var day = mydate.getDay();
    var month = mydate.getMonth();
    var daym = mydate.getDate();

    if (daym < 10) {
        daym = "0" + daym;
    }

    var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    var montharray = new Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");

    //return dayarray[day] + " " + montharray[month] + "/" + daym + "/" + year;
    return montharray[month] + "/" + daym + "/" + year;
}

function isMobile(m) {
    var w = 1000;
    var path = '/m';

    if (window.innerWidth != null) {
        w = window.innerWidth;
    }
    if (window.screen != null) {
        w = window.screen.availWidth;
    }
    if (document.body != null) {
        w = document.body.clientWidth;
    }

    //true is screen width is less than 1000px and is one of these user agents, want to try and avoid sending old desktops to the mobile ver
    if (w < 1000) {
        if (navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            || navigator.userAgent.match(/Opera Mini/i)
            || navigator.userAgent.match(/IEMobile/i)
            || navigator.userAgent.match(/Windows Phone/i)) {

            if (m != undefined) {
                path = m;
            }

            if (window.location.search) {
                window.location.href = path + '/' + window.location.search;
            }
            else {
                if (urlParams['c'] != undefined) {
                    window.location.href = path + '/?c=' + urlParams['c'];
                }
                else {
                    window.location.href = path + '/?c=' + getCookie('cid', defaultCID);
                }
            }
        }
    }
}

function isMobileChk() {
    var w = 1000;
    var m = false;
    
    if (window.innerWidth != null) {
        w = window.innerWidth;
    }
    if (window.screen != null) {
        w = window.screen.availWidth;
    }
    if (document.body != null) {
        w = document.body.clientWidth;
    }

    //true is screen width is less than 1000px and is one of these user agents, want to try and avoid sending old desktops to the mobile ver
    if (w < 1000) {
        if (navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            || navigator.userAgent.match(/Opera Mini/i)
            || navigator.userAgent.match(/IEMobile/i)
            || navigator.userAgent.match(/Windows Phone/i)) {

            m = true;
        }
    }

    return m;
}

function radioChecked(frmName, rbGroupName) {
    var radios = document[frmName].elements[rbGroupName];
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            return true;
        }
    }
    return false;
}

function radioValue(frmName, rbGroupName) {
    var radios = document[frmName].elements[rbGroupName];
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            return radios[i].value;
        }
    }
    return '';
}

function openPrivacy(url) {
    window.open(url, 'priv', 'width=600,height=500,menubar=no,scrollbars=yes,toolbar=no,top=10,left=10');
    return false;
}

function blank(a) {
    if (a.value == a.defaultValue) a.value = "";
}

function unblank(a) {
    if (a.value == "") a.value = a.defaultValue;
}

function addCommas(n) {
    n += '';
    x = n.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

