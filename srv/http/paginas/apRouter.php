<?php

	$wlan_1 = shell_exec("ip a | grep wlan_1 | grep UP");

	if ($wlan_1 != ""){
		echo "ON";
#		shell_exec("systemctl start ap");
	} else {
		echo "OFF";
#		shell_exec("systemctl stop ap");
	}


?>
