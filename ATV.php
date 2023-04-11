<?php
	$operando2='';
	
	if(isset($_GET['conta'])) 
	{
        	$n0=$_GET['valor0'];
        	$n1=$_GET['valor1'];
        	$operando=$_GET['conta'];

		switch($operando) 
		{
			case 'somar':
				$resultado=$n0+$n1;
				break;
			case 'subtrair':
				$resultado=$n0-$n1;
				break;
			case 'multiplicar':
				$resultado=$n0*$n1;
				break;
			case 'dividir':
				if($n1!=0)
				{
					$resultado=$n0/$n1;
				}
				else
				{
					echo"<p>divisao por 0 = indefinido</p>";
				}
				break;
		}
	}
	if(isset($_GET['conta2']))
	{
		$n2=$_GET['valor2'];
        	$operando2=$_GET['conta2'];
	
		switch($operando2) 
		{
			case 'raiz':
				$resultado2=sqrt($n2);
				break;
			case 'cosseno':
				$radiano=($n2*(M_PI))/180;//para calcular o seno e cosseno é precisa converter o angula para radiano
				$resultado2=cos($radiano);
				break;
			case 'seno':
				$radiano=($n2*(M_PI))/180;
				$resultado2=sin($radiano);
				break;
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
	</head>
	<body>
		<h1>Calculadora 3DAW!</h1>
		<p>Insira dois números nos campos abaixo:</p>
		<form method="get">
			<label for="valor0"></label>
			<input type="number" name="valor0" id="valor0">
			<label for="valor1"></label>
			<input type="number" name="valor1" id="valor1"><br><br>
			<input type="radio" name="conta" value="somar">Soma
			<input type="radio" name="conta" value="subtrair">Subtração
			<input type="radio" name="conta" value="multiplicar">Multiplicação
			<input type="radio" name="conta" value="dividir">Divisão
			<br><br>
			<input type="submit" value="Calcular">
			<?php
			if(isset($resultado)) 
			{
				echo "<p>Resultado: $resultado</p>";
			}
			?>
		</form>
		<p>Insira um numero:</p>
		<form method="get">
			<label for="valor2"></label>
			<input type="number" name="valor2" id="valor2"><br><br>
			<input type="radio" name="conta2" value="raiz">Raiz
			<input type="radio" name="conta2" value="cosseno">Cosseno
			<input type="radio" name="conta2" value="seno">Seno<br><br>
			<input type="submit" value="Calcular">
			<?php
			if(isset($resultado2)) 
			{
				echo "<p>Resultado: $resultado2</p>";
			}
			?>
		</form>
	</body>
</html>
