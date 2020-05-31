<?php
        $tempMax = 50;
        $statusCooler = "";
        $temp = shell_exec('awk \'{printf "%3.1f", $1/1000}\' /sys/class/thermal/thermal_zone0/temp');
        $cooler = shell_exec("cat /var/rkm/cooler");

        if ($cooler == 0){ 
			$statusCooler = "Cooler Off";
		} else {
			$statusCooler = "Cooler On";
		}

        if ($temp >= $tempMax) {
                echo "<div class=\"alerta\">";
        }
        else {
                echo "<div>";
        }

        echo "Temp: " . $temp . " C - " . $statusCooler;

        echo "</div>";
?>
