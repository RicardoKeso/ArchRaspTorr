<?php

	$caminho = "/mnt/storage";

	shell_exec("echo 3 > /var/rkm/comandosWeb");

	sleep(5);

	$file = shell_exec("ls -1 $caminho/bkp/* | tr \"\n\" \"@\" | sed 's/@//g'");

	if (file_exists($file)) {
		header('Content-Description: File Transfer');
	        header('Content-Type: application/octet-stream');
	        header('Content-Disposition: attachment; filename="'.basename($file).'"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		readfile($file);
		exit;
	}
?>
