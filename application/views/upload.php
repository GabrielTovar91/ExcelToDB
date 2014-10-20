<!DOCTYPE html>
<html>
    <head>
	    <title>Subir un Archivo de Excel a Database</title>
    </head>
    <body> 
		<!--PROBAR SI CONECTA A SERVIDOR DE BASE DE DATOS-->
		<?php
	 		$db_usr = 'alpla';
			$db_pass = 'alpla';
			$db_server = 'GABRIEL-PC';
			$db_name = 'Alpla2';
			$db_info = array('Database'=>$db_name, 'UID'=>$db_usr, 'PWD'=>$db_pass);
			$db_link = sqlsrv_connect($db_server, $db_info);
			if(!$db_link){
				die( print_r( sqlsrv_errors(), true));
			}
			echo 'Conectado';
		?>
		<!--FIN-->
    	<?=form_open_multipart('upload/upload_file')?>
		<?=form_upload('file')?>
		<?=form_submit('submit', 'Upload')?>
    	<?=form_close()?>
    </body>
</html>

