﻿

<!DOCTYPE html>

<html lang="en">
<head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>
	Secugen-Demo3 - SecuGen Corporation
</title><script src="/Scripts/modernizr-2.6.2.js"></script>
<link href="/Content/bootstrap.css" rel="stylesheet"/>
<link href="/Content/Site.css" rel="stylesheet"/>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" /></head>
<body onload="setFormAction();">
    <form method="post" action="./Demo3" id="ctl01">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="Zw6MzePzGNU9FUzQTaqh0ho88DrqqFfJ3tAEjoQ4ewMKyWgdrbIVASR1yi9F/fkhcoAGLhZXUW5/M1eZ3vsURudY6vSfEKQIFlT9aj0Rboia35Y84KuO52JXYImB2sqaI5kyqI/ZiJUQvCcsasKyoYLGTD2Z+WwbF49mPP5RtK6k2hJdkDKb5no+F/xTGeriS1R5weJPxXs/YfgDWoIAEg==" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['ctl01'];
if (!theForm) {
    theForm = document.ctl01;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>



<script src="/bundles/MsAjaxJs?v=c42ygB2U07n37m_Sfa8ZbLGVu4Rr2gsBo7MvUEnJeZ81" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="Scripts/jquery-1.10.2.js" type="text/javascript"></script>
<script src="Scripts/bootstrap.js" type="text/javascript"></script>
<script src="Scripts/respond.js" type="text/javascript"></script>
<script src="/bundles/WebFormsJs?v=AAyiAYwMfvmwjNSBfIMrBAqfU5exDukMVhrRuZ-PDU01" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="5F8B7D8B" />
</div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ctl08', 'ctl01', [], [], [], 90, 'ctl00');
//]]>
</script>


        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="./" class="navbar-brand">SecuGen WebAPI</a>
                </div>
                <div class="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="./docs/SECUGEN_WEB_SERVICE_API_DOC.pdf">WebAPI Doc</a></li>
                        <li><a href="./download/SGI_BWAPI_WIN_64bit.exe">Win64b WebAPI</a></li>
                        <li><a href="./download/SGI_BWAPI_WIN_32bit.exe">Win32b WebAPI</a></li>
                        <li><a href="Demo1.aspx">Demo 1</a></li>
                        <li><a href="Demo2.aspx">Demo 2</a></li>
                        <li><a href="Demo3.aspx">Demo 3</a></li>
                        <li><a href="Enroll.aspx">Enroll</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container body-content">
            


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Demo3</title>
</head>
<body>
    <div class="row">
        <h3><b>Demonstration of Fingerprint Matching</b></h3>
        <div class="col-md-10">
            <p>
                <b>This demo scans 2 fingerprints for matching, compares them with each other, and returns a matching score.</b>
            </p>
            <table width="1012" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td class="auto-style2" align="right" valign="top">
               	    <b>Input parameters</b>
                    <br><br>
		             Match Score<input type='text' id=quality size=10 value="100"> <br><br>
                </td>
                <td class="style3" align="left">
                    <span class="download_href"> 
                    <center>
		                <img border="2" id="FPImage1" alt="Fingerpint Image" height=300 width=210 src=".\Images\PlaceFinger.bmp" > 
		                <img border="2" id="FPImage2" alt="Fingerpint Image" height=300 width=210 src=".\Images\PlaceFinger2.bmp" > <br>
		                <input type="button" value="Click to Scan" onclick="CallSGIFPGetData(SuccessFunc1, ErrorFunc)"> 
		                <input type="button" value="Click to Scan" onclick="CallSGIFPGetData(SuccessFunc2, ErrorFunc)"> <br><br>
		                <input type="button" value="Click to Match" onclick="matchScore(succMatch, failureFunc)"> <br><br>
		                <div style=" color:black; padding:20px;">
		                    <p id="result1"> </p>
		                    <p id="result2"> </p>
		                </div>
		            </center>
                    </span>
                </td>
                <td>&nbsp;</td>
            </tr>
            </table>
        </div>
    </div>
</body>
<script type="text/javascript">
    var template_1 = "";
    var template_2 = "";

    function SuccessFunc1(result) {
        if (result.ErrorCode == 0) {
            /* 	Display BMP data in image tag
                BMP data is in base 64 format 
            */
            if (result != null && result.BMPBase64.length > 0) {
                document.getElementById('FPImage1').src = "data:image/bmp;base64," + result.BMPBase64;
            }
            template_1 = result.TemplateBase64;
        }
        else {
            alert("Fingerprint Capture Error Code:  " + result.ErrorCode + ".\nDescription:  " + ErrorCodeToString(result.ErrorCode) + ".");
        }
    }

    function SuccessFunc2(result) {
        if (result.ErrorCode == 0) {
            /* 	Display BMP data in image tag
                BMP data is in base 64 format 
            */
            if (result != null && result.BMPBase64.length > 0) {
                document.getElementById('FPImage2').src = "data:image/bmp;base64," + result.BMPBase64;
            }
            template_2 = result.TemplateBase64;
        }
        else {
            alert("Fingerprint Capture Error Code:  " + result.ErrorCode + ".\nDescription:  " + ErrorCodeToString(result.ErrorCode) + ".");
        }
    }

    function ErrorFunc(status) {
        /* 	
            If you reach here, user is probabaly not running the 
            service. Redirect the user to a page where he can download the
            executable and install it. 
        */
        alert("Check if SGIBIOSRV is running; status = " + status + ":");
    }

    function CallSGIFPGetData(successCall, failCall) {
        var uri = "https://localhost:8443/SGIFPCapture";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                fpobject = JSON.parse(xmlhttp.responseText);
                successCall(fpobject);
            }
            else if (xmlhttp.status == 404) {
                failCall(xmlhttp.status)
            }
        }
        xmlhttp.onerror = function () {
            failCall(xmlhttp.status);
        }
        var params = "Timeout=" + "10000";
        params += "&Quality=" + "50";
        params += "&licstr=" + encodeURIComponent(secugen_lic);
        params += "&templateFormat=" + "ISO";
        xmlhttp.open("POST", uri, true);
        xmlhttp.send(params);
    }

    function matchScore(succFunction, failFunction) {
        if (template_1 == "" || template_2 == "") {
            alert("Please scan two fingers to verify!!");
            return;
        }
        var uri = "https://localhost:8443/SGIMatchScore";

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                fpobject = JSON.parse(xmlhttp.responseText);
                succFunction(fpobject);
            }
            else if (xmlhttp.status == 404) {
                failFunction(xmlhttp.status)
            }
        }

        xmlhttp.onerror = function () {
            failFunction(xmlhttp.status);
        }
        var params = "template1=" + encodeURIComponent(template_1);
        params += "&template2=" + encodeURIComponent(template_2);
        params += "&licstr=" + encodeURIComponent(secugen_lic);
        params += "&templateFormat=" + "ISO";
        xmlhttp.open("POST", uri, false);
        xmlhttp.send(params);
    }

    function succMatch(result) {
        var idQuality = document.getElementById("quality").value;
        if (result.ErrorCode == 0) {
            if (result.MatchingScore >= idQuality)
                alert("MATCHED ! (" + result.MatchingScore + ")");
            else
                alert("NOT MATCHED ! (" + result.MatchingScore + ")");
        }
        else {
            alert("Error Scanning Fingerprint ErrorCode = " + result.ErrorCode);
        }
    }

    function failureFunc(error) {
        alert ("On Match Process, failure has been called");
    }

</script>
</html>

            <hr />
            <footer>
                <p>&copy; 2018 - SecuGen Corporation</p>
            </footer>
        </div>
    </form>
<script type="text/javascript">
    // nice global area, so that only 1 location, contains this information
    //    var secugen_lic = "hE/78I5oOUJnm5fa5zDDRrEJb5tdqU71AVe+/Jc2RK0=";   // webapi.secugen.com
    var secugen_lic = "";

    function ErrorCodeToString(ErrorCode) {
        var Description;
        switch (ErrorCode) {
            // 0 - 999 - Comes from SgFplib.h
            // 1,000 - 9,999 - SGIBioSrv errors 
            // 10,000 - 99,999 license errors
            case 51:
                Description = "System file load failure";
                break;
            case 52:
                Description = "Sensor chip initialization failed";
                break;
            case 53:
                Description = "Device not found";
                break;
            case 54:
                Description = "Fingerprint image capture timeout";
                break;
            case 55:
                Description = "No device available";
                break;
            case 56:
                Description = "Driver load failed";
                break;
            case 57:
                Description = "Wrong Image";
                break;
            case 58:
                Description = "Lack of bandwidth";
                break;
            case 59:
                Description = "Device Busy";
                break;
            case 60:
                Description = "Cannot get serial number of the device";
                break;
            case 61:
                Description = "Unsupported device";
                break;
            case 63:
                Description = "SgiBioSrv didn't start; Try image capture again";
                break;
            default:
                Description = "Unknown error code or Update code to reflect latest result";
                break;
        }
        return Description;
    }

</script>
</body>
</html>
