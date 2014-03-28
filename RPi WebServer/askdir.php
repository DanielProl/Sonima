<?php

header('Content-Type: application/json');
$request = $_REQUEST['dir'];

//$dir = new DirectoryIterator(dirname(__FILE__));
$dir = new DirectoryIterator(dirname($request));
foreach ($dir as $fileinfo) {
    if ($fileinfo->isDir() && $fileinfo!="." && $fileinfo!="..") {
        //echo $fileinfo->getBasename() . "\n";
        $return_array[]= $fileinfo->getBasename();
    }
}
/*
if (empty($return_array)){
	echo json_encode("empty folder");
}
*/

echo json_encode($return_array);


?>

