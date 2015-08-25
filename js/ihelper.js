var defaultCID = 904;

var exit_bg_click = 0;

function basic_load() {
    if (urlParams['l'] != undefined) {
        $('#leadid').val(urlParams["l"]);
        if (urlParams['tpk'] != undefined) {
            $("#tpk").val(urlParams['tpk']);
            setCookie('tpk', urlParams['tpk'], 7);
        } else {
            $('#tpk').val(getCookie("tpk", -1));
        }
	initRates();
    }
    //else {
    //    window.location.href = '/?c=' + defaultCID;
    //}
}

function basic_submit(id, n) {
    registerValue(id, n);
    $('#form1').submit();
}

function health_submit(n) {
    if (n == 'Poor') {
        $('#redir').val('history.aspx');
    }
    $('#YourHealth').val(n);
    $('#form1').submit();
}

function history_submit() {
    var n = '';

    $('div#health input[type=checkbox]').each(function () {
        if ($(this).is(':checked')) {
            n += $(this).val() + ',';
        }
    });

    $('#HealthConditions').val(n);
}

function height_submit() {
    var err = 0;

    if (isNaN($('#heightft').val()) || $('#heightft').val() == '') {
        $('#heightft').attr('class', 'input-block-level required'); err = 1;
    }
    else {
        $('#heightft').attr('class', 'input-block-level');
    }
    if (isNaN($('#heightin').val()) || $('#heightin').val() == '') {
        $('#heightin').attr('class', 'input-block-level required'); err = 1;
    }
    else {
        $('#heightin').attr('class', 'input-block-level');
    }
    if (isNaN($('#weightlb').val()) || $('#weightlb').val() == '') {
        $('#weightlb').attr('class', 'input-block-level required'); err = 1;
    }
    else {
        $('#weightlb').attr('class', 'input-block-level');
    }

    if (err > 0) {
        return false;
    }
}

function registerValue(id, n) {
    $('#' + id).val(n);
}



function index_submit() {
    var zip = $('#zip').val();
    setCookie('zip', zip, 2);

    if (isValidZip(zip)) {
        $.ajax({
            type: "POST",
            url: "ajax.asmx/GetLoc",
            data: "{'zip':'" + zip + "','defaultLoc':''}",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (r) {
                setCookie('loc', r.d, 2);
                window.location = 'gender';
            },
            error: function (r) {
                window.location = 'gender';
            }
        });
    }
    else {
        alert('Please enter a valid U.S. zip code');
        return false;
    }
}

function email_submit() {
    if (!isValidEmail($("#email").val())) {
        alert("Please enter a correct email address");
        return false;
    } else {
        setCookie('email', $("#email").val(), 7);
        window.location = 'register.aspx?l=-1&tpk=' + urlParams['tpk'];
    }
}

function reg_load() {
    basic_load();

    $("#cid").val(getCookie('cid', defaultCID));
    $("#zip").val(getCookie('zip', ''));
    $("#email").val(getCookie('email', ''));

    $("#phone").mask("(999) 999-9999");
    $("#lead_birthdate").mask("99/99/9999");

    $('#useragent').val(navigator.userAgent);

    if ($("#zip").val() != "") {
        var redir = $("#redir").val();
        $("#redir").val(redir + "?zipcode=" + $("#zip").val());
    }
}

function reg_submit() {
    var err = 0;

    err += validate('first', '');
    err += validate('last', '');
    err += validate('address', '');

    if (!isValidPhone($('#phone').val())) {
        $('#phone').attr('class', 'input-block-level required'); err = 1;
    }
    else {
        $('#phone').attr('class', 'input-block-level');
    }

    if (!isValidDate($('#lead_birthdate').val())) {
        $('#lead_birthdate').attr('class', 'input-block-level required'); err = 1;
    }
    else {
        $('#lead_birthdate').attr('class', 'input-block-level');
    }

    if (err > 0) {
        return false;
    }
}

function rates_load() {
    ratesTable();
}

function thankyou_load() {

    if (urlParams["l"] != undefined) {
        cpa_conv(defaultCID, 1);

        $('#pxl').attr("src", "http://hittrkr.com/x.aspx?c=" + getCookie('cid', defaultCID) + "&l=" + urlParams["l"]);

        var j = JSON.stringify({
            LeadID: urlParams['l']
        });

        $.ajax({
            type: "POST",
            url: "/ajax.asmx/LifeInsuranceSubmit",
            data: j,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            async: false,
            success: function (r) {
                if (r.d != '') {
                    $('#msg').html(r.d);
                }
            }
        });

    }

    if (getCookie('cid', defaultCID) != defaultCID) {
        ratesTable();
    }
    else {
        $('#sh').hide();
    }

}

function ratesTable() {
    $.ajax({
        type: "POST",
        url: "/ajax.asmx/LifeInsuranceRates",
        data: "{ 'zip':'" + getCookie('zip', '') + "', 'state':'" + getCookie('propertyStateCode', '') + "', 'max':'8', 'var1':'ins' }",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (r) {
            $('#clickwall').html(r.d);
        },
        error: function (r) {
            var e = r.responseText;
        }
    });
}

function wallgo(url) {
    window.location = url;
}

function initRates() {
    if (getCookie('ep', '') != 'n') {
        etime = $.now();

        if (!('ontouchstart' in document.documentElement)) {
            $(document).mousemove(function (e) {
                if (e.pageY <= 8 && $.now() - etime > 3000 && exit_bg_click == 0) {
                    $("#exitp").modal('show');
                    exit_bg_click = 1;
                }
            });
        }
    }
}

function validate(field, invalidresponse, minlen) {
    var r = 0;
    if ($('#' + field).val() == invalidresponse) {
        r = 1;
        $('#' + field).attr('class', 'input-block-level required');
    }
    else {
        if (minlen) {
            if ($('#' + field).val().length < minlen) {
                r = 1;
                $('#' + field).attr('class', 'input-block-level required');
            }
            else {
                $('#' + field).attr('class', 'input-block-level');
            }
        }
        else {
            $('#' + field).attr('class', 'input-block-level');
        }
    }
    return r;
}