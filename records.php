<?php
require("headers/records-header.php");
$records = "";
$fetch=false;
if (!isset($_GET["q"])) {
   header("location:/");
   die();
} else {
   require("server/recognize/index.php");
   if ($fetch) {
      foreach($fetch as $index=>$data) {
         $records .= '<div class="user-list"><div class="clearfix"><img src="'.$data["prosrc"].'" alt="'.$data["firstname"].'&nbsp;'.$data["surname"].'" draggable="false"></div><div class="user-name"><div class="_3yyyeo"><strong>'.$data["firstname"].'&nbsp;'.$data["surname"].'</strong></div></div><div class="_3Yeoxe"><a href="/identify?person='.$data["email"].'"><button>This was Me</button></a></div></div>';
      }
   } else {
      $records = '<div class="nofound"><h1>Not Result Found</h1></div>';
   }
}
?>
<div class="primary-nav">
   <section>
      <nav>
         <div class="weblogo _3Yexy">
            <a href="/records">
               <img src="/internal/icon/dca_logo.png" alt="DIGITAL COLLECTION AFFILIATE" draggable="false">
            </a>
         </div>
         <div class="uri _3Yexy"><a href="/login" class="hover-underline">Login</a></div>
      </nav>
   </section>
</div>
<div class="wrap-manager" style="padding:2em;min-height:100%;">
   <div class="all-result"><?=$records;?></div>
</div>
<?php require("footer.php"); ?>