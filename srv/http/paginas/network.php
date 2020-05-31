<?php
	echo "<div>";
	echo shell_exec('ip a | grep "inet " | grep -v "127.0.0.1" | awk \'{print $2 " - ip " $7}\' | sed \':a;$!N;s/\n/<br>/g;ta\'');
	echo "</div>";
?>
