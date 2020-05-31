<?php
	$botoesEnergia = "
	<div class=\"titulo\">O que deseja fazer?</div>
	<br><hr><br>
	<div class=\"divBotoes\">
             	<div class=\"botao\">
                	<a onclick=\"window.top.$.fancybox.close();\" href=\"\">Cancelar</a>
	       	</div>
	        <div class=\"botao\">
	       	        <a href=\"comandosWeb.php?c=3xr\">Reiniciar</a>
	       	</div>
	        <div class=\"botao\">
	       	        <a href=\"comandosWeb.php?c=3xh\">Desligar</a>
	       	</div>
       	</div>";

	$desligar = "<div class=\"titulo\">Desligando...</div>";
	$reiniciar = "<div class=\"titulo\">Reiniciando...</div>";
	
	$confirmacao = "
	<br><hr><br>
	<div class=\"divBotoes\">
             	<div class=\"botao\">
                	<a onclick=\"window.top.$.fancybox.close();\" href=\"\">OK</a>
	       	</div>
	</div>";
?>

<!DOCTYPE html>
<html>
        <head>
	        <meta charset="UTF-8">
        	<title>.</title>
        </head>

        <script src="scripts/jquery-2.2.3.min.js"></script>
	<link rel="stylesheet" href="../styles/style_min981.css" type="text/css" media="only screen">
	<link rel="stylesheet" href="../styles/style_default.css" type="text/css" media="only screen">
        <script src="scripts/scripts.js"></script>

        <body style="text-align: center;">
		<br>
		<?php 
		if ($_GET['c'] == "energia") {
			echo $botoesEnergia;
		} elseif ($_GET['c'] == "3xh") {
			echo $desligar;
			echo $confirmacao;
			shell_exec('echo 1 > /var/rkm/comandosWeb');
		} elseif ($_GET['c'] == "3xr") {
			echo $reiniciar;
			echo $confirmacao;
			shell_exec('echo 2 > /var/rkm/comandosWeb');
        	}
		?>
        </body>
</html>

