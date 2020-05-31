<?php
        echo "<div class=\"titulo\">";
        echo shell_exec('date');
        echo "</div>";
		
		
	$led = shell_exec("cat /var/rkm/ledRGB/color");
        if ($led == 1){$color = "blue";}
        elseif ($led == 10) {$color = "green";}
        elseif ($led == 11){$color = "cyan";}
        elseif ($led == 100){$color = "red";}
        elseif ($led == 101){$color = "magenta";}
        elseif ($led == 110){$color = "yellow";}
        elseif ($led == 111){$color = "white";}
        else {$color = "black";}
		
	echo "
		<div style=\"border-color:$color;\" id=\"divLed\">
			<div style=\"background-color:$color;\" id=\"led\"></div>
		</div>
	";
?>
