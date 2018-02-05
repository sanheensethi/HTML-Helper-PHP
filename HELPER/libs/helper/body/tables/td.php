<?php
	function td($x=1,array $attrs=[]){ // for return type x = 1
		if($x==1){
			return "<td ".conv($attrs).">";
		}else if($x==0){
			return "</td>";
		}else{
			echo "Parameter in th() Must be in 0 and 1";
		}
	}
?>