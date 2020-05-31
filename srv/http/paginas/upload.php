<DOCTYPE html>
<html>
	<head>
        	<meta charset="UTF-8">
                <script src="../scripts/jquery-2.2.3.min.js"></script>
                <link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen" />
    	</head>

    	<body>
        	<?php
    		$chave = $_GET["k"];

		echo "<div class=\"titulo\" id=\"titulo_upload\">ADD</div>";

    		if ($chave == 0) {
			AdicionarArquivo();
    		} else if ($chave == 1) {
			TestarArquivo();
		}

		function AdicionarArquivo (){
			echo "
			<div>
			<form class=\"various fancybox.iframe\" action=\"upload.php?k=1\" method=\"post\" enctype=\"multipart/form-data\">
        			<input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\">
		        	<br><br>
        			<input type=\"submit\" value=\"upload\" name=\"submit\">
			</form>
			</div><hr>
			";
		}

		function TestarArquivo (){
                	$target_dir = "../torrents/";
			$file = basename($_FILES["fileToUpload"]["name"]);
                	$target_file = $target_dir . $file;
                	$uploadError = 0;
                	$alerta = "";
                	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
			if ($file == "") {
				$uploadError = 1;
				$alerta = "Nenhum arquivo selecionado.";
                	}else if (file_exists($target_file)) {
                        	$uploadError = 1;
                        	$alerta = "O arquivo já foi adicionad anteriormente.";
                	} else if ($fileType != "torrent") {
                        	$uploadError = 1;
                        	$alerta = "Tipo de arquivo incorreto.";
                	} else if ($uploadError == 0) {
                        	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                	$uploadError = 0;
                        		$alerta = "Arquivo adicionado com sucesso.";
                        	} else {
                                	$uploadError = -1;
                        		$alerta = "Falha no upload.";
            			}
                	}

                	echo "
			<div id=\"alertaUpload\">
                		<br>" . $alerta . "<br><br>
                		<a id=\"addFile\" href=\"\" onclick=\"window.top.ReloadDadosTorrent()\">Ok</a>
                	</div>
			";
		}
		?>
	</body>
</html>
