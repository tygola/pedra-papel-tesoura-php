<?php
session_start();
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Junkenpo</title>
	<style>
		div{
			display: block;
			height: 430px;
			width: 500px;
			margin-left:  auto;
			margin-right: auto;
			border-radius: 30px;
			border:5px solid black;
			font-size: 16pt;
			padding: 10px 20px;
			background-color: rgba(255,255,255,0.6);
			color: black;
			outline: none;
			text-align: center;
}

		form{
			text-align: center;
		}

	</style>
</head>
<body bgcolor="grey">	
	<form action="" method="POST">
		<h1>Junkenpo</h1>
            <hr>
		<h4>Escolha:</h4>

		<img src="img/pedra.png" width="30" width="30">
		<input type="radio" value="pedra" name="jog">
		<label>Pedra</label>

        <img src="img/papel.png" width="30" width="30">
		<input type="radio" value="papel" name="jog">
		<label>Papel</label>

        <img src="img/tesoura.png" width="30" width="30">
		<input type="radio" value="tesoura" name="jog">
		<label>Tesoura</label>

	<p>
		<input type="submit" name="btnenviar">
	</p>
	</form>
	<hr>
		<?php
		if(isset($_POST["btnenviar"]) && !(empty($_POST["jog"])) ) {

		$jog = $_POST['jog'];
        $escolha = array('pedra', 'papel', 'tesoura');
        $aleatorio = rand(0,2);
        $Computador = $escolha[$aleatorio];
        
    

	    echo "<div>";
	    echo "<br>";
	    echo "<br>";
	    echo "<br>";
	    echo 'Você jogou: '. $jog;
	    echo "<br>";
	    echo "<br>";
	    echo 'O computador jogou: '. $Computador;
	    echo "<br>";


    if($jog == $Computador){
    	echo "<br>";
    }
    if ($jog == $Computador){
    	echo "<br>";
    	echo "<img src='em.jpg' width='120px' height='120px'>";
    	echo "<br>";
        echo "<br>";
        echo ' Empate!  ';
        echo "<br>";
    }
    else if($jog == 'pedra' && $Computador == 'tesoura'){
    	echo "<img src='img/pedra.png' width='90px' height='90px'>";
    	echo "<img src='img/tesoura.png' width='90px' height='90px'>";
    	echo "<br>";
    	echo "<br>";
     	echo ' Você Ganhou! ';
        $_SESSION["pontuacao"]++;
}
    else if($jog == 'pedra' && $Computador == 'papel'){
    	echo "<img src='img/pedra.png' width='90px' height='90px'>";
    	echo "<img src='img/papel.png' width='90px' height='90px'>";
    	echo "<br>"; 	
    	echo "<br>";
    	echo  ' Você Perdeu! ';
        $_SESSION["pontuacaocomp"]++;
}
    else if($jog == 'tesoura' && $Computador == 'pedra'){
    	echo "<img src='img/tesoura.png' width='90px' height='90px'>";
    	echo "<img src='img/pedra.png' width='90px' height='90px'>";
    	echo "<br>";
       	echo "<br>";
    	echo  ' Você Perdeu! ';
        $_SESSION["pontuacaocomp"]++;
}
    else if($jog == 'tesoura' && $Computador == 'papel'){
    	echo "<img src='img/tesoura.png' width='90px' height='90px'>";
    	echo "<img src='img/papel.png' width='90px' height='90px'>";
    	echo "<br>";
    	echo "<br>";
    	echo ' Você Ganhou! ' ;
        $_SESSION["pontuacao"]++;
}
    else if($jog == 'papel' && $Computador == 'pedra'){
    	echo "<img src='img/papel.png' width='90px' height='90px'>";
    	echo "<img src='img/pedra.png' width='90px' height='90px'>";
    	echo "<br>";
    	echo "<br>";
    	echo ' Você Ganhou! ';
        $_SESSION["pontuacao"]++;
}
    else if($jog == 'papel' && $Computador == 'tesoura'){
    	echo "<img src='img/papel.png' width='90px' height='90px'>";
    	echo "<img src='img/tesoura.png' width='90px' height='90px'>";
    	echo "<br>";
    	echo "<br>";
    	echo ' Você Perdeu! ' ;
        $_SESSION["pontuacaocomp"]++;
}

                    echo "Pontos Jogador = " . $_SESSION["pontuacao"];
                    echo "<br>";
                    echo "Pontos Maquina = " . $_SESSION["pontuacaocomp"];
		
  }
	echo "<br>";

		echo "</div>";

   
		?>
</body>
</html>