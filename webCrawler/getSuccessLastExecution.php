<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			text-align: center;
		}
	</style>
</head>
<body>

	<?php 

$qwe = file_get_contents("https://api.apify.com/v1/D2snxaPr7CjCRFeza/crawlers/D9bWvatbohKE49Yjc/lastExec/results?token=SDQ8LguNHxfd7bzcrAmsKgQLw");

$res = json_decode($qwe,true);

foreach ($res as $r) {
	foreach ($r['pageFunctionResult'] as $result) {
		echo "<br>";
		echo "Name: ".$result['Name']."<br>";
		echo "Certificate Number: ".$result['Certificate_number']."<br>";
		echo "National Cerficate: ".$result['National_Cerficate']."<br>";
		echo "Link: ".$result['Link']."<br>";
	}
}

?>

</body>
</html>
