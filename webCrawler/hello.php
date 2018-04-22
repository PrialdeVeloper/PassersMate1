<?php 

stry();

function stry(){
	try {
	$con = new PDO("mysql: host=localhost; dbname=test",'root','');
} catch (PDOException $e) {
	$e->getMessage();
}

// echo "hello";
$sql = "insert into data(name) values ('try')";
$con->exec($sql);
}
?>