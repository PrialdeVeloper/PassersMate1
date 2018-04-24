<?php
$var = '13170403002178';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.apify.com/v1/D2snxaPr7CjCRFeza/crawlers/D9bWvatbohKE49Yjc?token=iaD2HTg7i3HQ6MKNRrZacbZLw");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"startUrls\": [
    {
      \"key\": \"\",
      \"value\": \"http://www.tesda.gov.ph/Rwac/Result2?CurrentFilter=&CertFilter=$var&QualFilter=\"
    }
  ]
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);