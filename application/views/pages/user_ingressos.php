<html>

<head>

	<title>Congresso e Shows ExpoHair - Ingressos</title>
	<meta charset="UTF-8">
	<style>
		.ngev {
			font-family: Calibri;
			background-color: #410e32;
			padding: 20px;
		}
		.ngevv {
			font-family: Calibri;
			font-size: 12pt;
			background-color: #eaeaea;
		}
		.ncinza {
			background-color: #fff;
		}
		.nwhite {
			background-color:white;

		}
		.infoc {
			font-size: 11pt;
		}
		.nabo {
			font-family: Calibri;
		}
		.infoing {
			font-size: 13pt;
		}
		.infonum {
			font-size: 16pt;
			position: relative;
			top: 10px;
			font-weight: bolder;
		}
		.infob {
			font-size: 9pt;
			font-family: Calibri;
		}
		.infobb {
			font-size: 7pt;
		}
		.logo{
			width: 150px;
		}

		.ticket{
			margin-bottom: 150px;
		}

	</style>

</head>

<body>

<?php

foreach ($queries as $query){
	$txt = '';
	switch($query->lote[0]){
		case 1:
			$lote = '1';
			break;
		case 2:
			$lote = '2';
			break;
		case 3:
			$lote = '3';
			break;
	}
	if($query->preco == 120){
		$txt = '(preço do combo)';
	}
	echo '
<div class="ticket">
	<div class="infob" width="30%" height="68" style="text-align: right; float: right; padding-top: 20px">Único.<br/>E-ticket - Basta apresentar na portaria do evento.</div>
	<table class="ngev" style="margin-top: 20px" cellpadding="5">
		<tr>
			<td width="65%" class="ncinza" height="150">
				<div class="card" style="display: inline-block; padding-left: 5px">
					<strong>EVENTO: </strong>'.$query->nome_show.'<br/><strong>Titular: </strong>'.$query->Nome.'<br/><br/>
					<div class="infob">'.mdate('%d/%m/%Y', mysql_to_unix($query->data_show)).'<br/>
						Local: Centro de Convenções | Sobral - CE</div><br/>
					<div class="infoing"><strong>Ingresso - Meia</strong></div>R$'.$query->preco.'.00 - '.$lote.'º Lote<br/><span style="font-size: 11px">'.$txt.'</span><br/><br/>
					<div class="infobb">Gerado em: '.mdate('%d/%m/%Y', now('America/Fortaleza')).' às '.mdate('%G:%i:%s',now('America/Fortaleza')).' | PDV: Site</div>
				</div>
				<div class="img-logo" style="display: inline-block; float: right; padding-right: 20px">
					<img style="height: 70px" src="https://www.congressoexpohair.com.br/static/img/logo-TH.png"/>
				</div>

			</td>
			<td width="5%" class="ngev" style="color: #fff" align="center"></td>
			<td width="30%" class="nwhite" align="center">
				<div class="infonum">'.$query->token.'</div>
				<img src="http://chart.apis.google.com/chart?cht=qr&chl='.sha1($query->token.'#'.$query->cpf).'&chs=200x200"/> <!-- Essa linha gera o QR Code -->
			</td>
		</tr>
	</table>
</div>';
	
}

?>

</body>

</html>
