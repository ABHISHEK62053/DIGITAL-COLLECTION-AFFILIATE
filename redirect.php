<?php
$redirect="";
if (!(isset($_GET["tab"])&&isset($_GET["timestamp"])&&isset($_GET["ext"]))) {
   $redirect = "/";
}
$timestamp = $_GET["timestamp"];
$timestamp = $timestamp / 1000;
$timestamp = $timestamp >= 1 && $timestamp <= 10 ? $timestamp : 5;
$root_dir = $_SERVER["DOCUMENT_ROOT"];
$pagetab = preg_replace("/^(\\|\/)/", "k", $_GET["tab"]).".".$_GET["ext"];
if (file_exists($pagetab)) {
   $redirect=$pagetab;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Redirecting...</title>
   <link rel="shortcut icon" href="/internal/icon/dca_favicon.ico" type="image/x-icon">
   <link rel="apple-touch-icon" href="/internal/icon/dca_logo.png">
   <link rel="stylesheet" href="static/redirect.css">
   <meta http-equiv="refresh" content="<?=$timestamp;?>; url=<?=$redirect;?>">
</head>
<body>
   <header>
      <h1>Checking for secure connection</h1>
   </header>
   <div class="loader">
      <svg width="40" height="40" viewBox="0 0 46 46">
         <circle cx="23" cy="23" r="19" stroke-width="7"></circle>
      </svg>
   </div>
   <footer>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <a href="">Learn more</a></p>
   </footer>
</body>
</html>