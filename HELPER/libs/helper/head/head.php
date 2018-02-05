<?php
function head($x=1){
		if($x==1){
			return "<head>";
		}else if($x==0){
			return "</head>";
		}
		else{
			return "parameters should be 0 or 1 in head(), 1 is by default";
		}
	}
?>