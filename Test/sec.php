<?php
function CallSGIFPGetData($successCall, $failCall) {
    // 8.16.2017 - At this time, only SSL client will be supported.
    $uri = 'https://localhost:8443/SGIFPCapture';

    $xmlhttp = new XMLHttpRequest();
    $xmlhttp.onreadystatechange = function () {
        if ($xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            fpobject = JSON.parse(xmlhttp.responseText);
            successCall($fpobject);
        }
        else if ($xmlhttp.status == 404) {
            failCall($xmlhttp.status)
        }
    }
    $params = 'Timeout=' + '10000';
    $params += '&Quality=' + '50';
    $params += '&licstr=' + encodeURIComponent(secugen_lic);
    $params += '&templateFormat=' + 'ISO';
    $console.log
    $xmlhttp.open('POST', $uri, $true);
    $xmlhttp.send($params);

    $xmlhttp.onerror = function () {
        failCall($xmlhttp.statusText);
    }
    echo"<input type='button' onclick='CallSGIFPGetData()'>";
?>