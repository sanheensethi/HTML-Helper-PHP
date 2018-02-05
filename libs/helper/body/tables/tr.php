<?php
	function tr($x=1,array $attrs=[]){ // for return type x = 1
		if($x==1){
			return "<tr ".conv($attrs).">";
		}else if($x==0){
			return "</tr>";
		}else{
			echo "Parameter in tr() Must be in 0 and 1";
		}
	}
?>