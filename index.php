
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width,initial-scale-1.0">
	<title>USANDO O JSON EM CADASTRO</title>
	<link rel="stylesheet" type="text/css" href="Css\estilo_cadatro.css">
</head>

<body>
	<header>
		<h2></h2>
	</header>
	<div id="central_pricipal">
		<h1>Cleintes cadastrados</h1>
		<form id="registro">
			<div class="caixa_cheia">
				<label for="email"> E-mail </label>
				<input type="email" name="email" id="email" placeholder="digite aqui seu E-mail">
			</div>
				<div class="metade_caixa, espaco">
				<label for="name"> Nome </label>
				<input type="text" name="name" id="name" placeholder="digite aqui seu Nome">
			</div>
				<div class="metade_caixa">
				<label for="lastname"> SobreNome </label>
				<input type="text" name="lastname" id="lastname" placeholder="digite aqui seu SobreNome">
			</div>
				<div class="metade_caixa, espaco">
				<label for="password"> Senha </label>
				<input type="password" name="password" id="password" placeholder="digite aqui sua Senha">
			</div>
				<div class="metade_caixa">
				<label for="passconfirmation"> Confirme sua Senha </label>
				<input type="password" name="password" id="password" placeholder="confirme sua Senha">
			</div>
				<div class="caixa_cheia">
				<input type="checkbox" name="agreement" id="agreement">
				<label for="agreement"> Confirmo meu cadastro <a href="">Regras de Uso</a></label>
			</div>
				<div class="caixa_cheia">
				<input type="submit" id="btn-submit" value="Regitrar">
				
			</div>
		</form>
	</div>
	<p class="Erro de Validação"></p>
<script>
	
	Var cadastro=`{
	"cadastro":"Cadastro",
	"E-mail":"E-mail",
	"Nome":"Nome",
	"Sobrenome":"Sobrenome",
	"Senha": ,
	"Confirmar Senha":  ,

}`
console.log(cadastro);
</script>

<?php
try{
$coneccao = new PDO('mysql:local=127.0.0.1;dbname=informacao',' root ','  ');
 
$coneccao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$coneccao -> exec('set names utf8');

} catch(PDOException $e) {
	die('erro ao conectar c/ Mysql: ' . $e->getMessage());
}
try {
	$statement = $coneccao->prepare('SELECT  E-mail, nome, SobreNome from clientes');
$statement->execute();

$Cliente = $statement -> fetchAll(PDO :: FETCH_OBJ);
var_dump(Cliente);

} catch (PDOException $e) {
	die('erro ao manipular os dados: ' . $e->getMessage());
}

?>

<?php

foreach ($clientes as $clientes ) {
	
	echo $clientes->E-mail;
}




?>

</body>
