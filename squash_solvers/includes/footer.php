<div class='footer row'>
                    <div class='footer_link col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12' id='footer_link'>
                         Want Offerlink? <a style='color:white;' href=''>Click <b>HERE</b></a> to get FidelityAgent ONE
                    </div>
                    <div class='footer_copyright_content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12' id='footer_text'>
                         &#169; 2021 Offerlink Powered by FidelityAgent ONE. All rights reserved.
                    </div>
                    <div class='footer_copyright_content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12' id='footer_text_sub' style='display:none;'>
                         &#169; 2017 FidelityAgent ONE.All rights reserved.
                    </div>
          </div>

<script type="text/javascript" src="<?php echo $Conn->http_site_path; ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $Conn->http_site_path; ?>assets/js/bootstrap-datepicker.min.js"></script>

         
     </footer>    
</div>
</body>
</html>

<script type="text/javascript" src="<?php echo $Conn->http_site_path; ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $Conn->http_site_path; ?>assets/js/bootstrap-datepicker.min.js"></script>

<script language="JavaScript" type="text/javascript" src="<?php echo $Conn->http_site_path;?>assets/js/jquery.toast.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $Conn->http_site_path;?>assets/js/bootstrap-slider.min.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $Conn->http_site_path;?>assets/js/slick.min.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $Conn->http_site_path;?>assets/js/bootstrap.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $Conn->http_site_path;?>assets/js/bootstrap-select.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $Conn->http_site_path;?>assets/js/bootstrap-select.min.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $Conn->http_site_path;?>assets/js/jquery-ui.min.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $Conn->http_site_path;?>assets/js/moment.min.js"></script>

<script>
     var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
     
function ViewToastPopupFun(Action, Title, Message){
     if(Action == "Success"){
          $.toast({heading:"<b>"+Title+"</b>", text:Message, showHideTransition:"slide", bgColor:"#039906", loaderBg:"#052b06", textColor:"#FFFFFF", stack:5, icon:"success", position:"bottom-right"});
     }else if(Action == "Failed"){
          $.toast({heading:"<b>"+Title+"</b>", text:Message, showHideTransition:"slide", bgColor:"#d40808", loaderBg:"#570404", textColor:"#FFFFFF", stack:10, icon:"error", position:"bottom-right"});
     }else if(Action == "Warning"){
          $.toast({heading:"<b>"+Title+"</b>", text:Message, showHideTransition:"slide", bgColor:"#ad8905", loaderBg:"#7a6105", textColor:"#FFFFFF", stack:10, icon:"warning", position:"bottom-right"});
     }else{
          $.toast({
               heading: "Failed",
               text: "Failed. Please try again!",
               showHideTransition: "slide",
               icon: "error",
               position: "bottom-right",
          })
     }
}
</script>
