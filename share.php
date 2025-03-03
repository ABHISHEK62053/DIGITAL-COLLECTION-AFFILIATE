<?php require("dashboard/header.php"); ?>
<div class="dashboard-home">
   <div class="pro">
      <div class="clearfix" onclick="professionProfile();">
         <img src="<?=$primary_data["profilesrc"];?>" alt="<?=$primary_data["firstname"]." ".$primary_data["surname"];?>" draggable="false" width="40" height="40">
      </div>
      <div class="_2yxxe"><?=$primary_data["firstname"]." ".$primary_data["surname"];?></div>
      <div class="total">Total Media <span class="totalcount"></span></div>
   </div>
</div>
<div class="dashboard-home shared-tab">
   <ul class="mediabox"><?php require("private/fetchedmedia.php"); ?></ul>
</div>
<script src="/functions/sharemedia.js"></script>
<script>function resetCounter(){ var total=$(".total .totalcount").text(); var count=$(".mediabox button:disabled").parent().length; $(".mediabox button:disabled").parent().remove(); total=+total - count; $(".total .totalcount").text(total);}
resetCounter();
</script>
<?php require("dashboard/footer.php"); ?>