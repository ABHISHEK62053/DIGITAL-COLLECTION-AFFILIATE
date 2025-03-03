<?php require("dashboard/header.php"); ?>
<div class="refer-window">
   <div class="refer-wrapper">
      <div class="header">
         <div class="_2cctd">
            <div class="clearfix">
               <img src="/internal/svg/referspeaker.svg" alt="Refer" width="33" height="33" draggable="false">
            </div>
            <div class="clearfix"><h2>Refer and earn</h2></div>
         </div>
      </div>
      <div class="share-rule">
         <div class="rule-tab1 rulebox">
            <strong>Refer Link</strong>
            <p>Refer or Invite Referer link on your friends</p>
         </div>
         <div class="rule-tab2 rulebox">
            <strong>Register</strong>
            <p>Register your friends referer link through</p>
         </div>
         <div class="rule-tab3 rulebox">
            <strong>Earn <?=$_ENV["REFERER_BONUS"];?> Coins</strong>
            <p>You will earned <?=$_ENV["REFERER_BONUS"];?> coins</p>
         </div>
      </div>
      <div class="link-compound">
         <div style="display:flex;align-items:center;gap:8px;"><svg width="25" heiht="25" viewBox="0 0 640 512"><path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"></path></svg><h2 style="font-size:20px;">Refer Link</h2></div>
         <p>Copy below referer link or invite your friends and earn unlimited coins</p><br/>
         <div class="_3edref">
            <div class="refgen">
               <div class="referer-link">
                  <input type="text" id="referLink" value="<?="https://".$_SERVER["HTTP_HOST"]."/signup?referer=$encrypted_email&key=$hashed_key&charset=UTF-8";?>" autocomplete="off" readonly>
               </div>
               <div class="clearfix"><div class="copy-link"></div></div>
            </div>
            <div class="or" style="padding:13px 0;">OR</div>
            <div class="refbutton">
               <button class="refer-button">
                  <div class="_3FExye">
                  <svg width="21" height="21" fill="currentColor" viewBox="0 0 448 512"><path d="M352 224c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96c0 4 .2 8 .7 11.9l-94.1 47C145.4 170.2 121.9 160 96 160c-53 0-96 43-96 96s43 96 96 96c25.9 0 49.4-10.2 66.6-26.9l94.1 47c-.5 3.9-.7 7.8-.7 11.9c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-25.9 0-49.4 10.2-66.6 26.9l-94.1-47c.5-3.9 .7-7.8 .7-11.9s-.2-8-.7-11.9l94.1-47C302.6 213.8 326.1 224 352 224z"></path></svg>
                  </div>
                  <span>Refer Now</span>
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="/functions/referer.js" defer></script>
<?php require("dashboard/footer.php"); ?>