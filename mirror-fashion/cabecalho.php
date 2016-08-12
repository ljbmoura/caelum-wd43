<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php print $cabecalho_title;?></title>

<!--<link rel="stylesheet" type="text/css" href="css\normalize.css">-->
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/mobile.css"
	media="(max-width: 939px)">
<!-- É necessário importar o JQuery antes dos demais JS para que estes tenham visibilidade naquele   -->
<script type="text/javascript" src="js/jquery.js"></script>
<link href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script" rel="stylesheet">


<?php print @$cabecalho_css; ?>
</head>
<header class="container">
	<h1>
		<img src="img/logo.png" alt="Mirror Fashion">
	</h1>
	<p class="sacola">Nenhum item na sacola de compras</p>
	<nav class="menu-opcoes">
		<ul>
			<li><a href="#">Sua Conta</a></li>
			<li><a href="#">Lista de Desejos</a></li>
			<li><a href="#">Cartão Fidelidade</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="#">Ajuda</a></li>
		</ul>
	</nav>
</header>
<body>