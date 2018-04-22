<?php 
$link = file_get_contents("https://api.apify.com/v1/D2snxaPr7CjCRFeza/crawlers/D9bWvatbohKE49Yjc?token=iaD2HTg7i3HQ6MKNRrZacbZLw");

$url = json_decode($link, true);

echo "Settings URL: ".$url['settingsUrl']."<br>";
echo "Execution List URL: ".$url['executionsListUrl']."<br>";
echo "Last Execution Fixed Details URL:".$url['lastExecutionFixedDetailsUrl']."<br>";
echo "Last Execution Fixed Result URL:".$url['lastExecutionFixedResultsUrl']."<br>";
// var_dump($url);
?>