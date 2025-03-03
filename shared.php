<?php require("dashboard/header.php"); require("private/shared.php"); ?>
<div class="dashboard-home">
   <div class="pro">
      <div class="clearfix" onclick="professionProfile();">
         <img src="<?=$primary_data["profilesrc"];?>" alt="<?=$primary_data["firstname"]." ".$primary_data["surname"];?>" draggable="false" width="40" height="40" class="proOverview">
      </div>
      <div class="_2yxxe"><?=$primary_data["firstname"]." ".$primary_data["surname"];?></div>
      <div class="total">Total Shared <?=$totalsharedcount;?></div>
   </div>
</div>
<div class="dashboard-home shared-tab">
   <ul class="mediabox"><?=$sharedlist;?></ul>
   <script>
      if (!$(".__sharedmedia_gridbox").length) {
         $("#delsl").hide();
         $(".mediabox").append("<h1 style='font-size:24px;'>No Shared Media Found</h1>");
      }
   </script>
</div>
<?php require("dashboard/footer.php"); ?>