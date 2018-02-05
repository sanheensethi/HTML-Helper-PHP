<?php
// style link

	function st_link(array $attrs=[]){
		return "<link ".conv($attrs)."></link>";
	}
// style write 

	function style($data){
		return "<style>".$data."</style>";
	}
?>