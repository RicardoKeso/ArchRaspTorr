<?php
	echo "<div>";
	echo shell_exec('df -h | grep storage | awk \'{print "Avail Storage: " $4 " - Used: " $5}\'');
	echo "<br>";
	echo shell_exec('df -h | grep root | awk \'{print "Avail System: " $4 " - Used: " $5}\'');
//	echo shell_exec('cat ../dados/armazenamento.dat');
	echo "</div>";
?>
