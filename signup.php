<?php require("headers/signup-header.php"); global $ADDRPicker; ?>
<div class="_3yEoe wrap-manager">
   <div class="_3FeoyyFe" style="user-select:none;">
      <div class="prefix">
         <img src="/internal/icon/dca_logo.png" alt="DIGITAL COLLECTION AFFILIATE" draggable="false">
      </div>
   </div>
   <div class="form-ui">
      <header><h1>welcome signup</h1></header>
      <form action="/server/signup/?privacy_token=$2y$10$eyxGUzZ5mFh0eMImS5Rj5eM7HQ91yzRNBmUNmuD/2pIZc6ODX45HG&<?=$_SERVER["QUERY_STRING"];?>" method="POST" id="signup_form" onsubmit="">
         <!-- SSD -->
         <span>
            <input type="hidden" name="timestamp" id="timestamp" value="<?=time();?>">
            <input type="hidden" name="privacy_token" id="_2pv06Yeo" value="$2y$10$eyxGUzZ5mFh0eMImS5Rj5eM7HQ91yzRNBmUNmuD/2pIZc6ODX45HG">
         </span>
         <!-- SSD -->
         <div class="group">
            <div class="_2inFiye _1Frrr mr-7">
               <input type="text" name="firstname" id="firstname" class="_2fe-req" required>
               <span class="placeholder">First name</span>
               <span class="error"></span>
            </div>
            <div class="_2inFiye _1Frrr ml-7">
               <input type="text" name="surname" id="surname" class="_2fe-req" required>
               <span class="placeholder">Surname</span>
               <span class="error"></span>
            </div>
         </div>
         <div class="_2inFiye _1Frrr">
            <input type="text" name="email" id="email" class="_2fe-req" autocomplete="off" required>
            <span class="placeholder">Email address</span>
            <span class="error"></span>
         </div>
         <div class="_2inFiye _1Frrr">
            <input type="password" name="password" id="password" class="_2fe-req" autocomplete="off" required>
            <span class="placeholder">Password</span>
            <div class="show-hide  psh">
               <div class="eyeon psh icon-eye"></div>
               <div class="eyeoff psh icon-eye"></div>
            </div>
            <span class="error"></span>
         </div>
         <div class="group">
            <div class="_2inFiye _1flx mr-7">
               <select name="state" id="state">
                  <option value="Bihar">Bihar</option>
               </select>
               <span class="error"></span>
            </div>
            <div class="_2inFiye _1flx ml-7 _3YeeUU">
               <select name="distict" id="distict"><?=$ADDRPicker->distict_opt;?></select>
               <span class="error"></span>
            </div>
         </div>
         <div class="_2inFiye _1flx _3YeeUU">
            <select name="block" id="block"><?=$ADDRPicker->block_opt;?></select>
            <span class="error"></span>
         </div>
         <div class="_2inFiye">
            <select name="gender" id="gender">
               <option value="0">Select your Gender</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Others">Others</option>
            </select>
            <span class="error"></span>
         </div>
         <div class="tc">
            <input type="checkbox" name="term" id="term">
            <span>If you agree check term & condition 
               <a href="privacy" target="_blank" class="hover-underline">Privacy & Policy</a>
            </span>
            <span class="error"></span>
         </div>
         <div class="_2inFiye">
            <button type="submit" name="signup-button" id="signupButton" data-value="Sign Up"></button>
         </div>
      </form>
      <div class="_4Fyexo _2inFiye">OR</div>
      <div class="_2soclnk _2inFiye">
         <p>Already have an account?
            <a href="login" class="hover-underline">Log In</a>
         </p>
      </div>
      <div class="help support">
         <a href="/login">
            <button><img src="/internal/images/youtube.png" alt="Youtube"><span>Get YouTube Help</span></button>
         </a>
      </div>
   </div>
</div>
<?php require("core/network-alert.php"); ?>
<?php require("footer.php"); ?>