<?php require("headers/verify-header.php"); ?>
<div class="wrap-manager wm _3yeou">
   <div class="_3FeoyyFe">
      <div class="prefix">
         <img src="/internal/icon/dca_logo.png" alt="DIGITAL COLLECTION AFFILIATE" draggable="false">
      </div>
   </div>
   <div class="form-ui">
      <header><h1>OTP-Verification</h1></header>
      <form action="<?=ACTION;?>?privacy_token=<?=TOKEN;?>" id="verificatonForm" method="post">
         <div class="_2inFiye _1Frrr">
            <input type="text" name="otp" id="otp" autocomplete="off" required autofocus="1" class="_2fe-req">
            <span class="placeholder">Enter OTP</span>
            <span class="error"></span>
            <a href="/resend/?<?=QUERY;?>=PHPMailer" class="forglnk hover-underline"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>Resend otp?</a>
         </div>
         <!-- SSD -->
         <span>
            <input type="hidden" name="timestamp" id="timestamp" value="<?=time();?>">
            <input type="hidden" name="privacy_token" id="_2pv06Yeo" value="<?=TOKEN;?>">
         </span>
         <!-- SSD -->
         <div class="_2inFiye">
            <button type="submit" data-value="Continue" id="vButton"></button>
         </div>
      </form>
      <div class="_4Fyexo _2inFiye">OR</div>
      <div class="help support">
         <a href="/cookies/cancel.verification?auth=<?=$_COOKIE["_auth"] ?? "skip_verification";?>">
            <button style="font-weight:600;font-size:16px;color:#564c4c;" name="cancel">Cancel Verification</button>
         </a>
      </div>
   </div>
</div>
<?php require("core/network-alert.php"); ?>
<?php require("footer.php"); ?>