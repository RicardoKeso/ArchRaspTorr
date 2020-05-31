<?php	
	echo "
	<div class=\"titulo\">WiFi Networks Registered</div>
	<div>
	";
	echo shell_exec('ls -1 /etc/netctl/ | grep wlan | sed \':a;N;s/\n/<br>/g;ta\'');
	echo "
	<hr>
	</div>
	<div class=\"divBotoes\">
		<div class=\"botao\">
			<a class=\"various fancybox.iframe\"href=\"paginas/addWifi.php?addW=0\">Add Network</a>	
		</div>
	</div>
	";
?>
