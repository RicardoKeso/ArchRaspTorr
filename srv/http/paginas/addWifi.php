<DOCTYPE html>
<html>
	<head>
        	<meta charset="UTF-8">
                <script src="../scripts/jquery-2.2.3.min.js"></script>
                <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
    	</head>

    	<body id="body_addWifi">
		
		<div class="titulo">ADD WiFi Network</div>
		
		<?php
		function ParametrosWiFi() {
			echo "	
			<form action=\"addWifi.php?addW=1\" method=\"post\" enctype=\"multipart/form-data\">
	                        <table id=\"tb_addWifi\">
                        	        <tr>
                	                        <td><label for=\"\">Essid:</label></td>
        	                                <td><input name=\"essid\" id=\"essid\"></td>
	                                </tr>
                                	<tr>
                        	                <td><label for=\"\">Pass:</label></td>
                	                        <td><input name=\"pass\" id=\"pass\"></td>
        	                        </tr>
	                                <tr>
                                        	<td><label for=\"\">Interface:</label></td>
                                	        <td><input name=\"interface\" id=\"interface\"></td>
                        	        </tr>
                	                <tr>
        	                                <td><label for=\"\">Hidden:</label></td>
	                                        <td>
                                                	<input type=\"checkbox\" name=\"hidden\" id=\"hidden\">
                                        	        <input type=\"submit\" value=\"Create\" name=\"submit\" cheched=\"false\">
                                	        </td>
                        	        </tr>
                	        </table>
        	        </form>
			";
		}
	
		$chave = $_GET["addW"];

    		if ($chave == 0) {
			ParametrosWiFi();	
	    	} else if ($chave == 1) {

			if ($_REQUEST['hidden'] == "on") {
				$hidden = "yes";
			}else{
				$hidden = "no";
			}

			shell_exec('../scripts/configWifi.sh "' 
				. $_REQUEST['essid'] . '" "' 
				. $_REQUEST['pass'] . '" "'
				. $_REQUEST['interface'] . '" "'
				. $hidden . '"'
			);
			echo "Configurao de Rede Adicionada com Sucesso!<br><br>";
			echo "<a id=\"addFile\" href=\"\" onclick=\"window.top.ReloadRedesWifi()\">Ok</a>";
		}
		?>
	</body>
</html>
