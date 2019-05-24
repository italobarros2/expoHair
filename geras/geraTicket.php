<?php 
 include("geras/mpdf60/mpdf.php");

 $html ='
 
<div width="50%" style="float: left"><img src="logo.jpg"/></div>
<div class="infob" width="50%" height="68" style="text-align: right; float: right; padding-top: 20px">Único.<br/>E-ticket - Basta apresentar na portaria do evento.</div>
</div>
<table class="ngev" style="margin-top: 20px" cellpadding="5">
<tr>
<td width="65%" class="ncinza" height="150">
<strong>Evento:</strong>Congresso ExpoHair Sobral - 2019<br/><strong>Titular:</strong>  Gabriel Dantas Martins<br/><br/>
<div class="infob">Data: 08/05/2019<br/>
Local: Centro de Convenções | Sobral - CE</div><br/>
<div class="infoing"><strong>Ingresso - Sábado 13/07 - Meia</strong></div>R$110,00 - 1ª Lote<br/><br/>
<div class="infobb">Gerado em: 23/03/2019 às 17:03:35 | PDV: Site</div>
</td>
<td width="5%" class="ngev" style="color: #fff" align="center"></td>
<td width="30%" class="nwhite" align="center">
<div class="infonum">12345678925</div>
<img src="http://chart.apis.google.com/chart?cht=qr&chl=AQUI.É.O.CONTEUDO.DO.QRCODE&chs=200x200"/> <!-- Essa linha gera o QR Code -->
</td>
</tr>
</table>
 ';

 $mpdf=new mPDF(); 
 $mpdf->SetDisplayMode('fullpage');
 $mpdf->WriteHTML($html);
 $mpdf->Output();

 exit;
