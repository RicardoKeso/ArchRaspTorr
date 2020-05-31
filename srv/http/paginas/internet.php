<?php
	echo "<div>";

	$resposta = shell_exec('cat /var/rkm/internetOn');
	
	if ($resposta == 0) {
		echo "<div class='alerta'>ATENCAO - Sem internet.</div>";
	} else {
		$ipPublico = shell_exec('cat /var/rkm/ipPublico');
		echo "<div> " . $ipPublico . " - ip public </div>";
	}
	echo "</div>";
?>
