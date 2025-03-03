<?php require("headers/recover-header.php"); ?>
<div class="wrap-manager wm _3yeou">
   <div class="_3FeoyyFe">
      <div class="prefix">
         <img src="/internal/icon/dca_logo.png" alt="DIGITAL COLLECTION AFFILIATE" draggable="false">
      </div>
   </div>
   <div class="form-ui">
      <header><h1>create new password</h1></header>
      <form action="/server/recover/" method="post" id="passwordUpdaterForm">
         <div class="_2inFiye _1Frrr">
            <input type="password" class="_2fe-req" name="password" id="password" autocomplete="off" autofocus="1" required>
            <span class="placeholder">Create new password</span>
            <span class="error"></span>
            <div class="show-hide  psh">
               <div class="eyeon psh icon-eye"></div>
               <div class="eyeoff psh icon-eye"></div>
            </div>
         </div>
         <!-- SSD -->
         <span>
            <input type="hidden" name="timestamp" value="<?=time();?>">
         </span>
         <!-- SSD -->
         <div class="_2inFiye _1Frrr">
            <input type="password" class="_2fe-req" name="conf-password" id="repassword" autocomplete="off" required>
            <span class="placeholder">Re-enter password</span>
            <span class="error"></span>
         </div>
         <div class="_2inFiye">
            <button type="submit" id="updateButton" data-value="Update Password"></button>
         </div>
      </form>
      <div class="_4Fyexo _2inFiye">OR</div>
      <div class="help support">
         <a href="/server/skip/"><button>Skip Now</button></a>
      </div>
   </div>
</div>
<?php require("core/network-alert.php"); ?>
<?php require("footer.php"); ?>