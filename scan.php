<?php
session_start();
$hash_key="";
if (!(isset($_SESSION["cradential"]) &&
	isset($_GET["key"]) && password_verify($_GET["key"], $hash_key))) {
	header("HTTP/1.1 Bad Request");
	die("Bad Request");
}

$payment_id = session_create_id();
$_SESSION["timestamp"]=time();
$_SESSION["payment_id"]=$payment_id;

$hash_id = password_hash($payment_id, PASSWORD_DEFAULT);


header("location:/status?payment_id={$hash_id}");
exit();
?>