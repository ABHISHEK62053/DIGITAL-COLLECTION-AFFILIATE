<?php require("dashboard/header.php"); ?>
<style>#ajaxContent{padding:0!important;}</style>
<div class="fswindow">
   <div class="tsdwindow">
      <div class="htext">
         <h2>Privacy Checkup</h2>
         <div>We'll guide you through some settings so that you can make the right choices for your account. What topic do you want to start with?</div>
      </div>
      <div class="main-data">
         <div class="__minimal-ui">
            <div class="resetwidth">
               <div class="ftab" onclick="window.location.href='/shared';">
                  <div class="figset">
                     <div class="fig">
                        <img src="/internal/images/qsharethumb.jpg" alt="figs" draggable="false">
                     </div>
                     <div class="figtext">
                        <span>Who can see what you share</span>
                     </div>
                  </div>
               </div>
               <div class="ftab">
                  <div class="figset">
                     <div class="fig">
                        <img src="/internal/images/ExyetyeotuxFethumb.jpg" alt="figs" draggable="false">
                     </div>
                     <div class="figtext">
                        <span>Who can see what you share</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="__minimal-ui">
            <div class="resetwidth">
               <div class="ftab">
                  <div class="figset">
                     <div class="fig">
                        <img src="/internal/images/securitythumb.jpg" alt="figs" draggable="false">
                     </div>
                     <div class="figtext">
                        <span>Who can review feeds you account</span>
                     </div>
                  </div>
               </div>
               <div class="ftab">
                  <div class="figset">
                     <div class="fig">
                        <img src="/internal/images/datasettingsthumb.jpg" alt="figs" draggable="false">
                     </div>
                     <div class="figtext">
                        <span>Who can see what you share</span>
                     </div>
                  </div>
               </div>
               <div class="ftab" onclick="window.location.href='/settings/review?review_id=<?=$primary_data["uid"];?>';">
                  <div class="figset">
                     <div class="fig">
                        <img src="/internal/svg/security_checkup.svg" alt="figs" draggable="false">
                     </div>
                     <div class="figtext">
                        <span>Check your important security settings</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div>
         <span>You can check more privacy settings on Digital collection affiliate in <a class="hover-underline" style="font-weight:500;" href="/settings/">Settings</a></span>
      </div>
   </div>
</div>
<script src="/scripts/privacy_checkup.js" defer></script>
<?php require("dashboard/footer.php"); ?>