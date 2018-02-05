<?php
$files=['block_inline','body','br','buttons','forms','headings','hr','iframe','images','layout','links','lists','paragraphs','Quotations_Citations','space','tables','text_formatting'];
foreach($files as $file){
	$f = __DIR__."/".$file."/"."index.php";
		require_once $f;
}
//require_once __DIR__."/block_inline/index.php";
?>