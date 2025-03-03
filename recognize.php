<?php require("headers/recognize-header.php"); ?>
<div class="primary-nav">
   <section>
      <nav>
         <div class="weblogo _3Yexy">
            <a href="/recognize">
               <img src="/internal/icon/dca_logo.png" alt="DIGITAL COLLECTION AFFILIATE" draggable="false">
            </a>
         </div>
         <div class="uri _3Yexy">
            <a href="/login" class="hover-underline">Login</a>
         </div>
      </nav>
   </section>
</div>
<div class="wrap-manager">
   <div class="search-wrapper">
      <form action="/server/recognize/" method="post">
         <input type="text" name="search" id="search" placeholder="Enter username or email address" value="<?=isset($query)?$query:"";?>">
         <button type="submit"><div></div></button>
      </form>
   </div>
   <div class="result <?=$visibility;?>">
      <span class="list"><?=$list;?></span>
      <div class="see-all" style="display:<?=$display;?>;">
         <a href="/q={$query}" class="hover-underline">See All</a>
      </div>
   </div>
</div>
<?php session_destroy(); require("footer.php"); ?>