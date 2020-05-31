<?php
/*	echo "<div>";
	$path = "../torrents/";
	$diretorio = dir($path);
	$cont = 0;
	echo "<div class=\"titulo\">ADDED</div>";
	while($arquivo = $diretorio -> read()){
			if (($arquivo != "..") && ($arquivo != ".")) {
			        echo $arquivo."<br />";
			        $cont++;
			}
	}
	if ($cont == 0) {
			echo "empty";
	}
	$diretorio -> close();
	echo "</div><hr>";
	//------------------------------------------------------------------------
	echo "<div>";
	$path = "../incomplete/";
	$diretorio = dir($path);
	$cont = 0;
	echo "<div class=\"titulo\">INCOMPLETE</div>";
	while($arquivo = $diretorio -> read()){
			if (($arquivo != "..") && ($arquivo != ".")) {
			        echo $arquivo."<br />";
			        $cont++;
			}
	}
	if ($cont == 0) {
			echo "empty";
	}
	$diretorio -> close();
	echo "</div><hr>";
 */

	//------------------------------------------------------------------------
	echo "
		<div>
			<table class=\"tbl_default\">	
	";
			echo shell_exec('../scripts/dadosTransmission.sh');
	echo "
			</table>
		</div><hr>
	";
	//------------------------------------------------------------------------

	/*atencao: em caso de erro 500 executar (ln -s /mnt/storage/finish/ /srv/http/storage) */	

	echo "<div>";
	$cont=0;
	$path = "../storage";
	$diretorio = dir($path);
	echo "<div class=\"titulo\">FINISHED</div>";
	while($arquivo = $diretorio -> read()){
			if (($arquivo != "..") && ($arquivo != ".")) {
			        echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
			        $cont++;
			}
	}
	if ($cont == 0) {
			echo "empty";
	}
	$diretorio -> close();
	echo "
	</div><hr>
	<div class=\"divBotoes\">
		<div class=\"botao\">
			<a class=\"various fancybox.iframe\" href=\"paginas/upload.php\">Add File</a>
		</div>
	</div>
	";
?>
