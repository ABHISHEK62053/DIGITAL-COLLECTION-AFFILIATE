<?php require("headers/auth-header.php"); ?>
<div class="wrap-manager wm _3yeou">
   <div class="_3FeoyyFe">
      <div class="prefix">
         <img src="/internal/icon/dca_logo.png" alt="DIGITAL COLLECTION AFFILIATE" draggable="false">
      </div>
   </div>
   <div class="form-ui">
      <header><h1>Two-Factor Authentication</h1></header>
      <form action="/server/auth/?privacy_token=$2y$10$gGkPJziLVHTZIW.tIeGoaegxdBbcULk1KcDH0nXSaXNrCOcT8lCqu" method="post" id="authenticationForm">
         <div class="_2inFiye _1Frrr">
            <input type="text" name="login-code" id="loginCode" autocomplete="off" autofocus="1" class="_2fe-req" required>
            <span class="placeholder">Login code required</span>
            <span class="error"></span>
            <a href="/resend/?server=PHPMailer" class="forglnk hover-underline"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>Resend code?</a>
         </div>
         <!-- SSD -->
         <span>
            <input type="hidden" name="privacy_token" value="$2y$10$gGkPJziLVHTZIW.tIeGoaegxdBbcULk1KcDH0nXSaXNrCOcT8lCqu">
            <input type="hidden" name="timestamp" value="<?=time();?>">
         </span>
         <!-- SSD -->
         <div class="_2inFiye">
            <button type="submit" id="continueButton" data-value="Continue"></button>
         </div>
      </form>
      <div class="_4Fyexo _2inFiye">OR</div>
      <div class="help support">
         <a href="/cookies/cancel.authentication?auth=<?=$encoder->encrypt($email);?>&_yeXor=<?=$_COOKIE["_yeXor"];?>">
            <button style="font-weight:600;font-size:16px;color:#564c4c;">Cancel Authentication</button>
         </a>
      </div>
   </div>
</div>
<?php require("core/network-alert.php"); ?>
<?php require("footer.php"); ?>