<?php
ob_start();
session_start();
if (!isset($_SESSION["UNSUPPORT_BROWSER"])) { header("location:/"); die(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
   <meta name="robots" content="noindex, nofollow" />
   <link rel="shortcut icon" href="/internal/icon/dca_favicon.ico" type="image/x-icon">
   <title>Browser Not Support</title>
   <link rel="stylesheet" href="/static/default-ui.css">
</head>
<body style="width:100%;height:100%;position:absolute;background:#ec2042;padding:4em 2em;text-align:center;">
   <div style="width:100%;max-width:700px;padding:22px;margin:0 auto;border-radius:5px;margin-bottom:8px;">
      <h1 style="color:#fff;font-size:25px;font-weight:600;margin-bottom:18px;">Unsupport Browser</h1>
      <strong style="margin-bottom:22px;font-weight:600;color:#ebe6e6;line-height:8px;font-size:15px;">This browser may be stricted or old version please upgrage or change another browser</strong>
      <br><br>
      <div style="border:1px solid #978888;padding:11px;border-radius:5px;background:#979090;">
         <p>Browser not Support stricted from Digital Collection affiliate because some features and disign not showing or working properly. so which this browser are not support please try another browser like Chrome, Opera, Edge famous browsers this browser are stricted.</p>
      </div>
   </div>
</body>
</html>