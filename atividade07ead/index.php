<?php
session_start();
$_SESSION["pontuacao"] = 0;
$_SESSION["pontuacaocomp"] = 0;
$_SESSION["jog"] = "";


?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina inicial</title>
	<style>
		form{
			text-align: center;
		}

	</style>
</head>
<body bgcolor="grey">
	<form action="pag01.php" method="POST"> 
	<img src="img/jok.jpg" width="300px" height="300px">
	<h1>Pedra, Papel e Tesoura</h1>
	<br>
	<h4><p>Papel, tesoura ou pedra, também chamado em algumas regiões do Brasil de jokempô é um jogo de mãos recreativo e simples para duas ou mais pessoas, que não requer equipamentos nem habilidade. O jogo é frequentemente empregado como método de seleção, assim como lançar moedas, jogar dados, entre outros.</p></h4>
	<br>
	<input type="submit" value="Começar">
	</form>
</body>
</html>