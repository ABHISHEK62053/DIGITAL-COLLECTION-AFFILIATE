<?php require("headers/about-header.php"); ?>
<div class="primarynav">
   <section>
      <div class="rainbow"></div>
      <nav>
         <div class="clearfix">
            <a href="">
               <div class="img">
                  <img src="/internal/icon/dca_logo.png" alt="DIGITAL COLLECTION AFFILIATE" draggable="false">
               </div>
               <div class="text">About configure</div>
            </a>
         </div>
         <div class="clearfix">
            <a href="" class="hover-underline anclog">Login</a>
         </div>
      </nav>
   </section>
</div>
<div id="content">
   <?php
      $IP = $_SERVER["SERVER_ADDR"];
      $IP = $IP === "::1" ? "127.0.0.1" : $IP;
      $PORT = $_SERVER["SERVER_PORT"];
      $redirect_status = $_SERVER["REDIRECT_STATUS"];
   ?>
   <table>
      <tr>
         <th>Webapplication name</th>
         <td>Digital Collection Affiliate</td>
      </tr>
      <tr>
         <th>Domain</th>
         <td><a id="origin" class="hover-underline" target="_blank"></a></td>
      </tr>
      <tr>
         <th>Connection</th>
         <td id="connection"></td>
      </tr>
      <tr>
         <th>Protocol</th>
         <td id="protocol"></td>
      </tr>
      <tr>
         <th>Server Host</th>
         <td><a class="hover-underline" id="host" target="_blank"></a></td>
      </tr>
      <tr>
         <th>IP Address</th>
         <td><?=$IP;?></td>
      </tr>
      <tr>
         <th>PORT</th>
         <td><?=$PORT;?></td>
      </tr>
      <tr>
         <th>PHP Version</th>
         <td><?=phpversion();?></td>
      </tr>
      <tr>
         <th>Web Version</th>
         <td>25.3.23</td>
      </tr>
      <tr>
         <th>Redirect status</th>
         <td><?=$redirect_status;?></td>
      </tr>
      <tr>
         <th>Background fetching</th>
         <td>XHR</td>
      </tr>
      <tr>
         <th>Autoloader</th>
         <td>Created new Websocket</td>
      </tr>
   </table>
</div>
<script>
   var connElem = document.getElementById("connection");
   var hostElem = document.getElementById("host");
   var originElem = document.getElementById("origin");
   var protoElem = document.getElementById("protocol");

   var origin = window.location.origin;
   originElem.innerHTML = originElem.href = origin;

   var connstatus = ["Not\x20secure", "Secure"];
   var protocol = "http:" || window.location.protocol;
   var rprotocol = /^http(s|):$/;
   var connection = protocol.replace(rprotocol, function(_matcher, i) {
      return connstatus[i.length];
   });
   connElem.innerHTML = connection;
   protoElem.innerHTML = protocol.slice(0,-1).toUpperCase();
   hostElem.innerHTML = hostElem.href = window.location.host;
</script>
<?php require("footer.php"); ?>