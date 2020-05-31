<!DOCTYPE html>
<html>
        <head>
	        <meta charset="UTF-8">
        	<title>. : rpi : .</title>
        </head>

        <script src="scripts/jquery-2.2.3.min.js"></script>
        <link rel="stylesheet" href="styles/jquery.fancybox.css?v2.1.5" type="text/css" media="screen" />
	<!--link rel="stylesheet" href="styles/style_min981.css" type="text/css" media="only screen and (min-width: 981px)"-->
	<!--link rel="stylesheet" href="styles/style_max980.css" type="text/css" media="only screen and (max-width: 980px)"-->
	<link rel="stylesheet" href="styles/style_min981.css" type="text/css" media="only screen">
	<link rel="stylesheet" href="styles/style_max980.css" type="text/css" media="only screen and (width: 980px)">
	<link rel="stylesheet" href="styles/style_default.css" type="text/css" media="only screen">
        <script src="scripts/scripts.js"></script>
        <script src="scripts/jquery.fancybox.pack.js?v=2.1.5"></script>

        <body>
		<div id="principal">
		transmission-remote -t 1 -rad<br>
		verificar pq vizinhanca esta sem MACs<br>
		dnsspoof<br>
		arpspoof<br>
		fazer cabos<br>
		roteamento - acesso a internet apenas por 1 interface<br>
		desabilitar o script conexoesWifi<br>
		backupWeb<br>
		interfaceWeb<br><br>
               	<?php

			/* 
			porta = 2607
			url: ip:2607/?t=60&k=keso
			t = tempo em segundos para o postback (vazio nao executa o postback)
			k = chave para visualizar as redes wifi cadastradas
			*/

			header("Refresh: " . $_GET["t"]);
			//------------------------------------------------------------------------
			echo "
                        <div class=\"areas\">
                                <div id=\"dataHora\"></div>
                                <div id=\"temperatura\"></div>
                                <div id=\"armazenamento\"></div>
                                <div id=\"network\"></div>
                                <div id=\"internet\"></div>
                        </div>
                        ";
			//------------------------------------------------------------------------
                        $divDadosTorrent = "
                        <div class=\"areas\">
                                <div id=\"dadosTorrent\"></div>
                        </div>
                        ";
			if ($_GET['k1'] == "keso") {echo $divDadosTorrent;}
			//------------------------------------------------------------------------   
			$divRedesWifi = "
                        <div class=\"areas\">
                                <div id=\"redesWifi\"></div>
                        </div>
                        ";
			if ($_GET['k1'] == "keso") {echo $divRedesWifi;}			
			//------------------------------------------------------------------------   
			$divConfiguracoes = "
                        <div class=\"areas\">
                                <div id=\"configuracoes\">|</div>
                        </div>
                        ";
			if ($_GET['k0'] == "keso") {echo $divConfiguracoes;}
			//------------------------------------------------------------------------  
		?>

			<div class="divBotoes"> 
				<div class="botao">
					<a href="" onclick="Resolucao()" id="addFile">HxW</a>
				</div> 
				<div class="botao">
					<a href="" onclick="Resolucao()" id="addFile">HxW</a>
				</div>

			</div>

			<!--div style="color: white;">
        	                kingbradley - S1gmUndF!
                	</div-->
		</div>
        </body>
</html>
