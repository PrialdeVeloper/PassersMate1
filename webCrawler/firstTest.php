<?php 
	ini_set('max_execution_time', 0);

	getSuccess();

	function startExecution(){
		$link = file_get_contents('https://api.apify.com/v1/D2snxaPr7CjCRFeza/crawlers/D9bWvatbohKE49Yjc/execute?token=m8C63hi8779uJSWsmQZeSywYx');
		if($link){
			getSuccess();
		}
	}
	
	function getSuccess(){
		do {
			$link = file_get_contents('https://api.apify.com/v1/D2snxaPr7CjCRFeza/crawlers/D9bWvatbohKE49Yjc/lastExec?token=SDQ8LguNHxfd7bzcrAmsKgQLw');
			$url = json_decode($link,true);
		} 
		while ($url['status'] !== 'SUCCEEDED');
		getResult();
		}

		
		// after
		// getResult();
	function getResult(){
		$a;
		$b;
		$c;
		$d;
		$var = null;
			$link = file_get_contents('https://api.apify.com/v1/D2snxaPr7CjCRFeza/crawlers/D9bWvatbohKE49Yjc/lastExec/results?token=SDQ8LguNHxfd7bzcrAmsKgQLw');
			$url = json_decode($link,true);
				foreach ($url as $errCode) {
					$var = $errCode['loadErrorCode'];
				}
				if($var != null){
					usleep(3000);
					startExecution();
				}
				else{
					foreach ($errCode['pageFunctionResult'] as $result) {
						// echo "<br>";
						// echo "Name: ".$result['Name']."<br>";
						// echo "Certificate Number: ".$result['Certificate_number']."<br>";
						// echo "National Cerficate: ".$result['National_Cerficate']."<br>";
						// echo "Link: ".$result['Link']."<br>";
						$a = $result['Name'];
						$b = $result['Certificate_number'];
						$c = $result['National_Cerficate'];
						$d = $result['Link'];
					}
							try {
								$con = new PDO("mysql: host=localhost; dbname=test",'root','');
							} catch (PDOException $e) {
								$e->getMessage();
							}

							$sql = "insert into data(name,cno,nc,link) values ('$a','$b','$c','$d')";
							$con->exec($sql);

				}
		}
?>