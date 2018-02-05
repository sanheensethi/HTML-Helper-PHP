<?php
$files = ['html','head','body','conv'];
foreach($files as $file){
	$f=__DIR__."/".$file."/index.php";
	if(file_exists($f))
	 {
	 	require_once $f;
	 }else{
	 	echo "File : ".$f." Not Found<br>";
	 }
}

?>