<?php
function html($x=1){
		if($x==1){
			return "<html>";
		}else if($x==0){
			return "</html>";
		}
		else{
			return "parameters should be 0 or 1 in html() , 1 is by default";
		}
	}
?>