<?php
	function th($x=1,array $attrs=[]){ // for return type x = 1
		if($x==1){
			return "<th ".conv($attrs).">";
		}else if($x==0){
			return "</th>";
		}else{
			echo "Parameter in th() Must be in 0 and 1";
	}
	}
?>