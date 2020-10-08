<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Checkout Mirror Fashion</title>
<meta name="viewport" content="width=device-width">
</head>
<body>
<h1>Ótima escolha!</h1>
<p>Obrigado por comprar na Mirror Fashion!
Preencha seus dados para efetivar a compra.</p>
<form action="checkout.php" method="POST">
	<dl>
	<dt>Cor</dt>
				<dd><?= $_POST['cor'] ?> </dd>
				<dt>Tamanho</dt>
				<dd><?= $_POST['tamanho'] ?> </dd>
            </dl>
        </form>
</body>
</html>
