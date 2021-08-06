

<!DOCTYPE html>

<html lang="en">
<head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>
	Secugen-Enroll - SecuGen Corporation
</title><script src="/Scripts/modernizr-2.6.2.js"></script>
<link href="/Content/bootstrap.css" rel="stylesheet"/>
<link href="/Content/Site.css" rel="stylesheet"/>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" /></head>
<body onload="setFormAction();">
    <form method="post" action="./Enroll" id="ctl01">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="gV1lqeqG25pJ6n2OsaOlpmhZfSQFX+QW692Ouz2DlwlE63ZLnzLnSbhSCeLbasZQeZzP0DfXBoo4D6KGA7hxTngqHObIAf4I0PMFY20ViT7u0TCqNuvU77/pi/mMMTRa4imQ0bNylDXIsLs8gEdONpiFwho519qnE+GgQE423c9GRc/7uzsB94nxhVHlO9aFLV4pscHKkWlDKqnU+kci3A==" />
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

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="00D82C35" />
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
    <title>Enroll</title>
</head>
<body>
  <div class="row">
    <h3><b>Demonstration of JavaScript access to SecuGen Fingerprint device.</b></h3>
    <div class="col-md-10">
	    <b>Captures 1 to 10 fingerprints, checks for duplicates and returns JSON object containing ISO template for each fingerprint and respective NFIQ value.  A lower NFIQ score indicates a higher fingerprint image quality.</b>
	    <center>
	            <table>
	                <tr>
		                <td>
			                <img id="LEFT_THUMB" border="1"  onclick="captureFP(0)" alt="LEFT_THUMB" height=200 width=150 src=".\images\hands\left_hand_6.png" > <br>
			                <Center> <input type="button" value="Scan" id="BTN_LEFT_THUMB" onclick="captureFP(0)"></input> </Center> 
		                </td>
		                <td>
			                <img id="LEFT_INDEX" border="1" alt="LEFT_INDEX" height=200 width=150 src=".\images\hands\left_hand_7.png" > <br>
			                <Center> <input type="button" value="Scan" id="BTN_LEFT_INDEX" onclick="captureFP(1)"></input> </Center>
		                </td>
		                <td>
			                <img id="LEFT_MIDDLE" border="1" alt="LEFT_MIDDLE" height=200 width=150 src=".\images\hands\left_hand_8.png" > <br>
			                <Center> <input type="button" value="Scan" id="BTN_LEFT_MIDDLE" onclick="captureFP(2)"></input> </Center>
		                </td>
		                <td>
			                <img id="LEFT_RING" border="1" alt="LEFT_RING" height=200 width=150 src=".\images\hands\left_hand_9.png" > <br>
			                <Center> <input type="button" value="Scan" id="BTN_LEFT_RING" onclick="captureFP(3)"></input> </Center>
		                </td>
		                <td>
			                <img id="LEFT_LITTLE" border="1" alt="LEFT_LITTLE" height=200 width=150 src=".\images\hands\left_hand_10.png" > <br>
			                <Center> <input type="button" value="Scan" id="BTN_LEFT_LITTLE" onclick="captureFP(4)"></input> </Center>
		                </td>
	                </tr>
	                <tr>
		                <td> 	
			                <p id="LEFT_THUMB_INFO"> </p> 
		                </td>
		                <td> 
			                <p id="LEFT_INDEX_INFO"> </p>
		                </td>
		                <td> 
			                <p id="LEFT_MIDDLE_INFO"> </p>
		                </td>
		                <td> 
			                <p id="LEFT_RING_INFO"> </p>
		                </td>
		                <td> 
			                <p id="LEFT_LITTLE_INFO"> </p>
		                </td>
	                </tr>
	                <tr>
		                <td>
			                <img id="RIGHT_THUMB" border="1"  alt="RIGHT_THUMB" height=200 width=150 src=".\images\hands\right_hand_1.png" > <br>
			                <Center> <input type="button" value="Scan" id="BTN_RIGHT_THUMB" onclick="captureFP(5)"></input> </Center>
		                </td>
		                <td>
			                <img id="RIGHT_INDEX" border="1" alt="RIGHT_INDEX" height=200 width=150 src=".\images\hands\right_hand_2.png" > <br>
			                <Center> <input type="button" value="Scan" id="BTN_RIGHT_INDEX" onclick="captureFP(6)"></input> </Center>
		                </td>
		                <td>
			                <img id="RIGHT_MIDDLE" border="1" alt="RIGHT_MIDDLE" height=200 width=150 src=".\images\hands\right_hand_3.png" > <br>
			                <Center> <input type="button" value="Scan" id="BTN_RIGHT_MIDDLE" onclick="captureFP(7)"></input> </Center>
		                </td>
		                <td>
			                <img id="RIGHT_RING" border="1" alt="RIGHT_RING" height=200 width=150 src=".\images\hands\right_hand_4.png" > <br>
			                <Center> <input type="button" value="Scan" id="BTN_RIGHT_RING" onclick="captureFP(8)"></input> </Center>
		                </td>
		                <td>
			                <img id="RIGHT_LITTLE" border="1" alt="RIGHT_LITTLE" height=200 width=150 src=".\images\hands\right_hand_5.png" > <br>
			                <Center> <input type="button" value="Scan" id="BTN_RIGHT_LITTLE" onclick="captureFP(9)"></input> </Center>
		                </td>
	                </tr>
	                <tr>
		                <td> 
			                <p id="RIGHT_THUMB_INFO"> </p>
		                </td>
		                <td> 
			                <p id="RIGHT_INDEX_INFO"> </p>
		                </td>
		                <td> 
			                <p id="RIGHT_MIDDLE_INFO"> </p>
		                </td>
		                <td> 
			                <p id="RIGHT_RING_INFO"> </p>
		                </td>
		                <td> 
			                <p id="RIGHT_LITTLE_INFO"> </p>
		                </td>
	                </tr>
	            </table>
	            <div id="footer">
                    <input type="button" value="Show Data" id="BTN_SHOW_DATA" onclick="showResult()"></input>  
		            <input type="button" value="Restart/New" id="BTN_RESTART" onclick="Restart()"></input><br>
		            <p class="small" id="timetaken"> </p> 
	            </div>
	            </br>
	    </Center>
    </div>
  </div>
</body>
<script type="text/javascript">

	var	fingerpos = ["LEFT_THUMB", "LEFT_INDEX", "LEFT_MIDDLE", "LEFT_RING", "LEFT_LITTLE",
				"RIGHT_THUMB", "RIGHT_INDEX", "RIGHT_MIDDLE", "RIGHT_RING", "RIGHT_LITTLE" ];
	var	service_handle = "";
	var	ENROLL_OBJ; 
	var cdate = new Date();
	var TotalEnrollments = 0;


	function Restart()
	{
	    TotalEnrollments = 0;
		location.reload(true);
	}
	function showResult()
	{
	    var i = 0;
		var result = "";
		if (ENROLL_OBJ)
		{
		    for (i = 0; i < TotalEnrollments; i++)
		    {
		        result += i + ".  " + ENROLL_OBJ.EnrollData.Templates[i].fpos + "; NFIQ[";
		        result += ENROLL_OBJ.EnrollData.Templates[i].nfiq + "]; TemplateBase64 [\n";
		        result += ENROLL_OBJ.EnrollData.Templates[i].TemplateBase64 + "]\n";
		    }
			alert(result);
		}
	}
	function UpdateDuration()
	{
		ndate = new Date();
		var duration = Math.abs(ndate - cdate );
		var mins =	Math.floor(duration / 1000 / 60);
		duration = duration - (mins * 60 * 1000);
		var secs =	Math.floor(duration / 1000) ;
		duration = duration / 1000;
		document.getElementById("timetaken").innerHTML = "Time Taken " +  mins + " Mins " + secs + " Seconds";
	}
	function captureFP( arridx ) 
	{
		var	imgid = fingerpos[arridx];
		if ( ENROLL_OBJ && ENROLL_OBJ.length > arridx  && ENROLL_OBJ.EnrollData[arridx].na >= 3 )
		{
			alert("Maximum Attempts Over!");
			return;
		}
		document.getElementById(imgid).src = ".\Images\wait.gif";
		CallSGIFPGetData( arridx,  SuccessFunc, ErrorFunc);
	}
	/* 
		This functions is called if the service sucessfully returns some data in JSON object
		Always check for ErrorCode 
	 */
	function	SuccessFunc( arridx, fpdata )
	{
		var	imgid = fingerpos[arridx];
		var	val  = imgid + "_INFO";
		if ( fpdata.ErrorCode == 0 )
		{
			if ( service_handle != "" && fpdata.SerHandle != service_handle )
			{
				alert("Session Timeout you will need to restart");
				Restart();
				return;
			}
			service_handle = fpdata.SerHandle;
			if ( fpdata.Result == 2 )
			{
				alert("Duplicate Finger!");
			}
			else if ( fpdata.Result == 1 )
			{
				alert("Higher or same NFIQ than earlier rejecting");
				document.getElementById(val).innerHTML = "Attempts = " + fpdata.Attempts + 
					" NFIQ = " + fpdata.NFIQ;
			}
			/*
				Successful execuation gets the JSON object with all the templates  currently scanned
			*/
			else if ( fpdata.Result == 0 )
			{
				if ( fpdata.BMPBase64.length > 0   )
				{
					document.getElementById(imgid).src = "data:image/bmp;base64," + fpdata.BMPBase64;
				}
				document.getElementById(val).innerHTML = "Attempts = " + fpdata.Attempts + 
					" NFIQ = " + fpdata.NFIQ;
			}
			if ( fpdata.Attempts >= 3 || fpdata.NFIQ == 1 )
			{
				var btnid = "BTN_" + imgid;
				document.getElementById(btnid).disabled = true;
			}
		}
		else 
		{
		    TotalEnrollments--;
		    alert("Fingerprint Capture Error Code:  " + fpdata.ErrorCode + ".\nDescription:  " + ErrorCodeToString(fpdata.ErrorCode) + ".");
		}
		UpdateDuration();
	}

	function	ErrorFunc ( status )
	{
		
		/* 	
			If you reach here, user is probabaly not running the 
			service. Redirect the user to a page where he can download the
			executable and install it. 
		*/

	    alert("Check if SGIBIOSRV is running; If NOT installed, then install at top of page; status = " + status + ":");
	}
	function	CallSGIFPGetData( arridx, successCall, failCall )
	{
		var	sgifpdata;
		var	uri 	= "https://localhost:8443/SGIFPEnroll";
		var	params 	= "timeout=" + "10000";
	       		params  += "&quality=" + "40";
	       		params  += "&srvhandle=" + service_handle;
	       		params  += "&FingerPos=" + fingerpos[arridx];

			
		var	xmlhttp = new XMLHttpRequest();
		xmlhttp.open("POST", uri, true );
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			    TotalEnrollments++;
				fpobject = JSON.parse(xmlhttp.responseText);
				ENROLL_OBJ = fpobject;
				successCall( arridx, fpobject);
			}
			else if ( xmlhttp.status == 404 )
			{
				failCall(xmlhttp.status)
			}
		}
		xmlhttp.onerror=function()
		{
			failCall(xmlhttp.status);
		}
		xmlhttp.send(params);
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
