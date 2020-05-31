<?php
	$atual = shell_exec("cat /var/rkm/cooler");
	if ($atual == 0 ? $atual=1 : $atual=0); 
	shell_exec("echo $atual > /var/rkm/cooler");
?>
