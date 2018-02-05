<?php
$files=['base','head','meta','noscript','script','style','title'];
foreach($files as $file){
	$f=__DIR__."/".$file.".php";
	if(file_exists($f))
	{
	require_once $f;
	}else{
	echo "File : ".$f." Not Found<br>";
	}
}
?>