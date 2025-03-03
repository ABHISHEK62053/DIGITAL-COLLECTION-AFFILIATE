<?php require("headers/identify-header.php"); ?>
<div class="wrap-manager wm _3yeou">
   <div class="_3FeoyyFe">
      <div class="prefix">
         <img src="/internal/icon/dca_logo.png" alt="DIGITAL COLLECTION AFFILIATE" draggable="false">
      </div>
   </div>
   <div class="form-ui">
      <header><h1>Find your Account</h1></header>
      <form action="/server/recover/?privacy_token=$2y$10$dLcfAyYSEJso8orGHWouz.vb3RpDtafKQpHuMhokZGy27W4PA/RbW" id="identifyForm" method="post">
         <div class="_2inFiye _1Frrr">
            <input type="text" name="email" id="email" autocomplete="on" autofocus="1" class="_2fe-req" value="<?=$user_email;?>" required>
            <span class="placeholder">Enter email address</span>
            <span class="error"></span>
         </div>
         <!-- SSD -->
         <span>
            <input type="hidden" name="privacy_token" value="$2y$10$dLcfAyYSEJso8orGHWouz.vb3RpDtafKQpHuMhokZGy27W4PA/RbW">
            <input type="hidden" name="timestamp" value="<?=time();?>">
         </span>
         <!-- SSD -->
         <div class="_2inFiye">
            <button type="submit" id="continueButton" data-value="Continue"></button>
         </div>
      </form>
      <div class="_4Fyexo _2inFiye">OR</div>
      <div class="_2soclnk _2inFiye">
         <p>Back to login page?
            <a href="/login" class="hover-underline">Log In</a>
         </p>
      </div>
      <div class="help support">
         <a href="">
            <button><img src="/internal/images/youtube.png" alt="Youtube"><span>Get YouTube Help</span></button>
         </a>
      </div>
   </div>
</div>
<?php require("core/network-alert.php"); ?>
<?php require("footer.php"); ?>