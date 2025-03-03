<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.digitalcollectionaffiliate.com/cronjob/recoveryMail/send.preventing.mail.php");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($ch);
echo "success";
curl_close($ch);
?>