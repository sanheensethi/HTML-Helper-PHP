<?php
	//Table	
	
	function table($x=1,array $attrs=[]){ // for return type x = 1
		if($x==1){
			return "<table ".conv($attrs).">";
		}else if($x==0){
			return "</table>";
		}else{
			echo "Parameter in table() Must be in 0 : close and 1 : open ( default ! not required )";
		}
	}
?>