<?php
$cmd='C:\xampp\php\php.exe C:\xampp\htdocs\passersmate\webcrawler\firsttest.php';  // PHP is an executable ... right?
$qwe = pclose(popen("start /B ".$cmd, 'r'));

?>