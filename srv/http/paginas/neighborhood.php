<?php
	echo "<hr><b>Neighborhood</b><br>";
	$rede = shell_exec('ip a | grep "inet " | grep -v "127.0.0.1" | awk \'{print $2}\' | cut -d. -f1,2,3 | tail -n 1 | awk \'{print $1".0/24"}\'');
	
	echo shell_exec('rkm_vizinhanca ' . $rede);
	echo shell_exec('date');
?>
