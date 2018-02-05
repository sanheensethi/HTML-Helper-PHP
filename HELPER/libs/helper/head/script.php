<?php
	// script load
	
	function sc_link(array $attrs=[]){
		return "<script ".conv($attrs)."></script>";
	}
	
	// script write
	
	function script($data,array $attrs=[]){
		return "<script ".conv($attrs).">".$data."</script>";
	}
?>