<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Checkout Mirror Fashion</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-flatly.css">
<link rel="stylesheet" type="text/css" href="css/checkout.css">
</head>

<body>

	<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha!</h1>
			<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados
				para efetivar a comnpra</p>

		</div>
	</div>
	<div class="container">
		<div class="row">

			<div class="col-sm-4 col-lg-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h2 class="panel-title">Sua compra</h2>
					</div>
					<div class="panel-body">
						<img
							src="img/produtos/foto<?=$_POST['id']?>-
						<?=$_POST['cor']?>
						.png"
							class="img-thumbnail img-responsive hidden-xs">
						<dl>
							<dt>Produto</dt>
							<dd>
								<?=$_POST["nome"] ?>
							</dd>

							<dt>Cor</dt>
							<dd>
								<?=$_POST["cor"] ?>
							</dd>

							<dt>Tamanho</dt>
							<dd>
								<?=$_POST["tamanho"] ?>
							</dd>

							<dt>Preço</dt>
							<dd id="preco">
								<?=$_POST["preco"] ?>
							</dd>
						</dl>
						<div class="form-group">
							<label for="qt">Quantidade</label> <input id="qt"
								class="form-control" type="number" min="0" max="99" value="1">
						</div>
						<div class="form-group">
							<label for="total">Total</label>
							<output id="total" for="qt preco" class="form-control">
								<?=$_POST["preco"] ?>
							</output>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-8 col-lg-9">
				<form action="">
					<div class="row">
						<fieldset class="col-md-6">
							<legend>Dados Pessoais</legend>
							<div class="form-group">
								<label for="nome">Nome Completo</label> <input type="text"
									class="form-control" id="nome" name="nome"
									autofocus="autofocus" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<div class="input-group">
									<span class="input-group-addon">@</span> <input type="email"
										class="form-control" id="email" name="email" required
										placeholder="email@exemplo.com">
								</div>
							</div>
							<div class="form-group">
								<label for="cpf">CPF</label> <input type="text"
									class="form-control" id="cpf" name="cpf"
									placeholder="000.000.000-00" required="required">
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="sim"
									checked="checked" id="spam" name="spam">Quero receber
									Spam da Mirror fashion</label>
							</div>
						</fieldset>

						<fieldset class="col-md-6">
							<legend>Cartão de Crédito</legend>
							<div class="form-group">
								<label for="numero-cartao">Número - CVV </label> <input
									type="text" class="form-control" id="numero-cartao"
									name="numero-cartao">
							</div>
							<div class="form-group">
								<label for="bandeira-cartao">Bandeira</label> <select
									name="bandeira-cartao" id="bandeira-cartao"
									class="form-control">
									<option value="mastercard">Mastercard</option>
									<option value="visa">Visa</option>
									<option value="amex">American Express</option>
								</select>
							</div>
							<div class="form-group">
								<label for="validade-cartao">Validade</label> <input
									type="month" class="form-control" id="validade-cartao"
									name="validade-cartao">
							</div>
						</fieldset>

					</div>
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-thumbs-up btn-lg pull-right"></span>
					</button>
				</form>
			</div>

		</div>
	</div>

	<script src="js/total.js"></script>
	<scri
</body>

</html>