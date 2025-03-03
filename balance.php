<?php require("dashboard/header.php"); ?>
<div class="converter-window">
    <div class="convcontent _MoExye xilrit">
        <div class="tab noflex wallet-tab">
          <div class="wallet">
            <svg width="30" height="30" fill="currentColor" viewBox="0 0 512 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H80c-8.8 0-16-7.2-16-16s7.2-16 16-16H448c17.7 0 32-14.3 32-32s-14.3-32-32-32H64zM416 272a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
          </div>
          <div class="wallet-content" style="padding-left:11px;flex-grow:1;">
            <div class="label mrg-5"><strong>Wallet Balance</strong></div>
            <div class="value mrg-5">
              <svg width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z"></path>
              </svg>
              <strong><?=$primary_data["balance"];?></strong>
            </div>
          </div>
          <div class="add">
            <button class="addcash" onclick="$('._1Cctmc').click();">
              <div class="clearfix">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path></svg>
              </div>
              <div class="clearfix"><span>Add Cash</span></div>
            </button>
          </div>
        </div>
        <div class="_2EyeYe flex1">
          <ul>
            <li onclick="$('._1Ctransh').click();">
              <div class="clearfix"><div class="logo history"></div></div>
              <div class=""><span>Transaction History</span></div>
            </li>
            <li onclick="$('._1Ctransm').click();">
              <div class="clearfix"><div class="logo withdraw"></div></div>
              <div class=""><span>Withdraw</span></div>
            </li>
            <li onclick="$('._1Csaec').click();">
              <div class="clearfix"><div class="logo share"></div></div>
              <div class=""><span>Share and earns</span></div>
            </li>
            <li onclick="$('.COINS').click();">
              <div class="clearfix"><div class="logo coins"></div></div>
              <div class=""><span>Your saved coins</span></div>
            </li>
          </ul>
        </div>
        <div class="_2EyeYe nmrg" style="margin:0;">
          <div class="dsc">
            <span><span class="hg">Notice:</span>&nbsp;<span style="font-weight:initial;font-size:14px;">Illigible for adding your cash if your coins value greater than <?=$_ENV["RS"];?> else earn coins. Withdraw amount ciriteria miminum <?=$_ENV["MIN_WITHDRAW"];?> and maximum amount <?=$_ENV["MAX_WITHDRAW"];?> withdraw. </span></span>
          </div>
        </div>
    </div>
</div>
<?php require("dashboard/footer.php"); ?>