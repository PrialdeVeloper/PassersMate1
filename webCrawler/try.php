<?php
$cmd='C:\xampp\php\php.exe C:\xampp\htdocs\passersmate\webcrawler\hello.php';  // PHP is an executable ... right?
echo $qwe = pclose(popen("start /B ".$cmd, 'r'));
// if (substr(php_uname(), 0, 7) == "Windows"){
//      pclose(popen("start /B". $dir, "r")); 
// }
// else {
//      exec($cmd . " > /dev/null &");
// }

?>