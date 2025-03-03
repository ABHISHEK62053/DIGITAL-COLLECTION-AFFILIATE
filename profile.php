<?php require("dashboard/header.php"); ?>
<div class="dashboard-profile">
   <div class="__content">
      <style>#ajaxContent{max-width:inherit;padding:0px;}.autoplay-nav{display:none;}</style>
      <div class="prohub"></div>
      <div class="procontent">
         <div class="clearfix">
            <div class="profile _2eyFe07">
               <img src="<?=$primary_data["profilesrc"];?>" alt="<?=$primary_data["firstname"]." ".$primary_data["surname"];?>" draggable="false" width="160" height="160" data-type="profile">
            </div>
         </div>
         <div class="userName"><h1>
            <?=$primary_data["firstname"]." ".$primary_data["surname"];?></h1>
            <strong><span>Status</span> <span>online</span></strong>
            <strong><span>Active:&nbsp;</span> <code><?=$DEVICE;?></code></strong>
         </div>
      </div>
      <div class="editzone">
         <button class="pro__edit"><img src="/internal/images/edit.png" alt="Edit" draggable="false"><span>Edit profile</span></button>
      </div>
   </div>
   <script>
      $("._2eyFe07").on("click", function() {
         $(".secondry-popup").addClass("show");
         const div = document.createElement("div");
         const image = new Image();
         image.onload = function() {
            image.style.borderRadius = "50%";
            image.width = image.height = 250;
            image.draggable = false;
            div.appendChild(image);
            $(div).css({display:"flex", alignItems: "center"});
            $("#secondry_popup_content").html(div);
            const timeout = setTimeout(function() {image.style.transform = "scale(1)";},300);
         };
         image.src = $(".profile img").attr("src");
      });
   </script>
</div>
<script src="/functions/edit-profile.js" defer></script>
<?php require("dashboard/footer.php"); ?>