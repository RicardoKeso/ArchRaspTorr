<?php
	$atual = shell_exec("cat /var/rkm/ledRGB/color");
	$val_int = bindec($atual);
       	if ($val_int == 7){
        	$val_int = 0;
	} else {
        	$val_int = $val_int + 1;
	}	
	$atual = decbin($val_int);
	shell_exec("echo $atual > /var/rkm/ledRGB/color");
?>
