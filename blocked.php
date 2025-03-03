<?php require("headers/blocked-header.php"); ?>
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
   <div class="clearfix">
      <div class="ban-logo prevent-logo">
         <img src="/internal/images/blocked.png" alt="Blocked" draggable="false">
         <img src="<?=$prosource;?>" alt="<?=$firstname;?>" class="user-profile _3xyFf" draggable="false">
      </div>
   </div>
   <div class="text-content">
      <header>
         <h1>Hii <?=$firstname;?>, your account has been temporarily blocked</h1>
      </header>
      <div class="text">
         <p>We've seen unusual activity on your account. This may mean that someone has used your account without your knowledge. If your are main owner of this account and you wanna to unblock this account then click Request Unblock Account button and pass the rule then unblock your account.</p>
      </div>
   </div>
   <div class="outer-info">
      <div class="details-info">
         <div class="clearfix"><div class="lock-icon">
         <svg width="18" height="18" fill="currentColor" viewBox="0 0 448 512"><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"></path></svg>
         </div></div>
         <div class="info-text">
            <strong>Account Blocked on <?=$onblocked;?></strong>
            <p>Dear <?=$firstname." ".$surname;?>, your account has been blocked on <?=$onblocked;?> So i can't give permission access your account and you can't login account. Because we secure your account. If you wanna to unblocked your account and recover account. so please identify some options.</p>
         </div>
      </div>
   </div>
   <div class="_24Yd">
      We'll take you through some steps to unlock you account.
   </div>
   <div class="_1BtnYee">
      <button onclick="window.location.href='/prevented';">Request Unblock Account</button>
   </div>
</div>
<?php require("footer.php"); ?>