<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Checkout Mirror Fashion</title>
	<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
	<div class="jumbotron">
	<div class="container">
		<h1>Ótima escolha!</h1>
		<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a comnpra
		</p>

		<h2>Sua compra</h2>
		<dl>
			<dt>Cor</dt>
			<dd><?=$_POST["cor"] ?></dd>
			
			<dt>Tamanho</dt>
			<dd><?=$_POST["tamanho"] ?></dd>

			<dt>Produto</dt>
			<dd><?=$_POST["nome"] ?></dd>

			<dt>Preço</dt>
			<dd><?=$_POST["preco"] ?></dd>			
		</dl>
	</div>
</div>
</body>

</html>