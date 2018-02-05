<?php
foreach (scandir(dirname(__FILE__)) as $filename) {
   	 $file = dirname(__FILE__) . '/' . $filename;
   if(is_file($file) && $file!=dirname(__FILE__)."/"."." && $file!=dirname(__FILE__)."/".".." && $file!=dirname(__FILE__) . '/index.php') {
        require $file;
    }
}
?>