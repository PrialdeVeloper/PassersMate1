<?php
$var = '15131002020597';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.apify.com/v1/D2snxaPr7CjCRFeza/crawlers/D9bWvatbohKE49Yjc?token=iaD2HTg7i3HQ6MKNRrZacbZLw");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"customId\": \"PassersMate\",
  \"comments\": \"Online Job Marketplace for technical and vocational education\",
  \"startUrls\": [
    {
      \"key\": \"\",
      \"value\": \"http://www.tesda.gov.ph/Rwac/Result2?CurrentFilter=&CertFilter=$var&QualFilter=\"
    }
  ],
  \"crawlPurls\": null,
  \"pageFunction\": \"function pageFunction(context) {\\nvar $ = context.jQuery;\\nvar result = [];\\nresult.push({\\nName: $('table tr:eq(1) td:eq(0)').text().trim(),\\nCertificate_number: $('table tr:eq(1) td:eq(1)').text().trim(),\\nNational_Cerficate: $('table tr:eq(1) td:eq(2)').text().trim(),\\nLink: 'http://www.tesda.gov.ph'+$('table tr:eq(1) td:eq(3) a').attr('href')});\\nreturn result;}\",
  \"clickableElementsSelector\": \"a[href]\",
  \"interceptRequest\": \"function interceptRequest(context, newRequest) {return newRequest;}\",
  \"considerUrlFragment\": true,
  \"loadImages\": true,
  \"loadCss\": true,
  \"injectJQuery\": true,
  \"injectUnderscoreJs\": false,
  \"ignoreRobotsTxt\": false,
  \"skipLoadingFrames\": false,
  \"verboseLog\": false,
  \"disableWebSecurity\": false,
  \"maxCrawledPages\": null,
  \"maxOutputPages\": null,
  \"maxCrawlDepth\": null,
  \"timeout\": null,
  \"resourceTimeout\": null,
  \"pageLoadTimeout\": null,
  \"pageFunctionTimeout\": null,
  \"maxInfiniteScrollHeight\": null,
  \"randomWaitBetweenRequests\": null,
  \"maxCrawledPagesPerSlave\": null,
  \"maxParallelRequests\": 1,
  \"customHttpHeaders\": null,
  \"customProxies\": \"null\",
  \"proxyGroups\": [
    \"DEFAULT\"
  ],
  \"cookiesPersistence\": \"PER_PROCESS\",
  \"customData\": \"null\",
  \"finishWebhookUrl\": null,
  \"finishWebhookData\": null
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);