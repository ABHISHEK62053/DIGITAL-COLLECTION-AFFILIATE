<?php require("headers/checkpoint-header.php"); ?>
<span data-tsid="userinfo" id="jsondata" hidden><?=json_encode($exports);?></span>
<div class="hidden-nav">
   <div class="weblogo">
      <a href="<?=$_SERVER["REQUEST_URI"];?>">
         <img src="/internal/icon/dca_logo.png" alt="Digital Collection Affliate" draggable="false">
      </a>
   </div>
   <div class="_ekd">
      <div class="prosec">
         <img src="<?=$allrecords["prosrc"];?>" alt="<?=$allrecords["firstname"];?>" class="user-profile" draggable="false">
         <strong><?=$allrecords["firstname"];?></strong>
      </div>
      <div class="logged-section">
         <a href="/log/">Logout</a>
      </div>
   </div>
</div>
<div class="cpwrapper content cpwindow cplayout" id="content">
   <?php require("pages/checkpointRootpageLayout.php"); ?>
</div>
<script>$("#infolist").text($("#jsondata").text()); $("#jsondata").remove();
function popupcloser(){ $(".destpopup").remove()}
</script>
<?php require("footer.php"); ?>