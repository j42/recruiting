// used for non-streamlined sites

function cpa_click(defaultCID) {
    var clck;
    var cid;
    var s1;
    var website = window.location.hostname.replace('www.', '');

    if (urlParams['clck'] != undefined) {
        clck = urlParams['clck'];
    }
    else {
        clck = getCookie('clck', -1);
    }
    if (urlParams['c'] != undefined) {
        cid = urlParams['c'];
    }
    else {
        cid = getCookie('cid', defaultCID);
    }
    if (urlParams['s1'] != undefined) {
        s1 = urlParams['s1'];
    }
    else {
        s1 = getCookie('s1', '');
    }

    if (clck > 0) {
        var ifrm = document.createElement("IFRAME");
        ifrm.setAttribute("src", ('https:' == document.location.protocol ? 'https:' : 'http:') + "//www.securepaths.com/pixel.cgi?org=zurkj8a7yimev4r0y9i0&rt=click&s=" + clck + "&p=" + cid + "&a=" + s1 + "&cmp=" + website + "&rf=" + encodeURIComponent(document.referrer));
        ifrm.style.width = 1 + "px";
        ifrm.style.height = 1 + "px";
        ifrm.frameBorder = 0;
        document.body.appendChild(ifrm);
    }
}

function cpa_conv(defaultCID, rto) {
    var leadid;
    var clck = getCookie('clck', -1);
    var cid = getCookie('cid', defaultCID);
    var s1 = getCookie('s1', '');
    var website = window.location.hostname.replace('www.', '');
    var vb = '/nc.asmx/CPADetect';

    if (rto == 1) {
        vb = '/ajax.asmx/CPADetect';
    }

    if (clck > 0) {

        if (urlParams['l'] != undefined) {
            leadid = urlParams['l'];
        }
        else {
            leadid = getCookie('leadid', -1);
        }

        var j = JSON.stringify({
            clickID: clck,
            campaignID: cid,
            subId1: s1,
            site: website,
            leadID: leadid
        });

        $.ajax({
            type: "POST",
            url: vb,
            data: j,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            async: false
        });
    }
}