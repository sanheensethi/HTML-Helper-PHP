<?php
function conv(array $attrs){
	if(!empty($attrs)){
			$data=[];
				foreach($attrs as $key=>$attr){
					$data[]=$key.'='.'"'.$attr.'"';
			}
				return implode(" ",$data);
			}else{	
			return False;
		}
}
?>