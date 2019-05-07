<!DOCTYPE html>
<html>
<head>
	<title>Title of the document</title>
</head>

<body>
	<?php echo $doc."</br>";?>
	<button onclick="PagSeguroLightbox('<?php echo $tokie; ?>')">ClickHere</button>

</body>

<footer>
	<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
	<script type="text/javascript"
			src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
	</script>
</footer>

</html>
