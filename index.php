<?php
$display_htmlerror = '<main style="position: relative; z-index: 11; height: 100%;"><div class="page---error---handler"><div data-fix="debug"><img src="/internal/images/toolbot.svg" draggable="false"></div><div><h3>This page isn\'t available at the moment</h3></div><div><span>This may be because of a technical error that we\'re working to fix. Please try reloading this page.</span></div><button>Reload page</button></div></main>';

if (isset($_COOKIE["_auth"])&&isset($_COOKIE["_sc"])&&isset($_COOKIE["_ts"])&&isset($_COOKIE["_ts"])) {
   require_once($_SERVER["DOCUMENT_ROOT"]."/classes/vendor/autoload.php");
   require_once($_SERVER["DOCUMENT_ROOT"]."/env-configure/envconfig.php");
   require_once("connection/c86b748b99b6f0bdced667b483271ac70c221562.php");

   $encryptDecrypt = new encryptDecrypt();
   $auth = $encryptDecrypt->decrypt($_COOKIE["_auth"]);
   $sessoin_code = $_COOKIE["_sc"];
   $timestamp = $_COOKIE["_ts"]; # timestamp

   $cookies = new Cookies(60*60*24);

   $fetchData = $conn->prepare("SELECT * FROM `users` WHERE `email` = ? OR `tfa_email` = ?");
   $fetchData->bindParam(1, $auth, PDO::PARAM_STR);
   $fetchData->bindParam(2, $auth, PDO::PARAM_STR);
   $fetchData->execute();

   if ($fetchData->rowCount()>0) {
      $data = $fetchData->fetch(PDO::FETCH_ASSOC); # fetching logged data from Database
      $auth = $data["email"];

      $EXPSESS=true;
      // Handle If Account has been suspe nded
      if ($data["suspend"]) {
         $cookies->set("suspended", $encryptDecrypt->encrypt($auth));
         (isset($_POST["rel"]) || isset($_GET["rel"])) && die($display_htmlerror);
         header("location:/suspend");
         die();
      }

      // Handle If Account has been blocked
      if ($data["blocked"]) {
         $cookies->set("blocked", $encryptDecrypt->encrypt($auth));
         (isset($_POST["rel"]) || isset($_GET["rel"])) && die($display_htmlerror);
         header("location:/blocked");
         die();
      }

      // Handle If Account has been going on checkpoint
      $cp = $conn->prepare("SELECT * FROM `checkpoint` WHERE `email` = ?");
      $cp->bindParam(1, $auth, PDO::PARAM_STR);
      $cp->execute();
      if ($cp->rowCount()>0) {
         $fetch = $cp->fetch(PDO::FETCH_ASSOC);
         if ($fetch["cpstatus"]==303 && $fetch["cpstate"]===sha1("ACP")) {
            $cookies->set("locked", $encryptDecrypt->encrypt($auth));
            (isset($_POST["rel"]) || isset($_GET["rel"])) && die($display_htmlerror);
            header("location:/locked");
            die();
         }
      }

      $logged_device = json_decode($data["logged_device"]);
      foreach($logged_device as $index=>$stdClass) {
         if ($stdClass->_ts==$timestamp&&$sessoin_code===$stdClass->_sc&&$encryptDecrypt->decrypt($stdClass->_auth)) {
            $EXPSESS=false;
            require_once("dashboard/index.php");
            die();
         }
      }

      $EXPSESS && (isset($_POST["rel"]) || isset($_GET["rel"])) && die($display_htmlerror);
   }
}
if (isset($_POST["rel"]) || isset($_GET["rel"])) {
   die($display_htmlerror);
} else {
   require_once("rootpage.php"); # including root index login page
}
?>