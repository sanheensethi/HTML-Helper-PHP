<?php
	function p($data,array $attrs=[]){
		return "<p ".conv($attrs).">".$data."</p>";
	}
?>