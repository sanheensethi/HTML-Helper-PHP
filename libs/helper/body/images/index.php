<?php
$files = scandir("./");

foreach($files as $file){
	$k=explode(".",$file);
	if($file!="." && $file!=".." && $file!="index.php" && end($k)=="php"){
		require_once $file;
	}
}

?>