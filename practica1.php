<?php 
	//one line
	/*
	todo lo que se escriba
	*/
	print('hola');
	echo '\n';

	echo 'Hola Mundo';
	
//	$boolean True; // True or TRUE
//	$boolean False; // False or FALSE

//	$int1 12;
//	$int2 12;



//	unset($int1);

//	var_dump($float);
//	var_dump($int4);


	$sum = 1+ 1;
	$res = 5 - 2;
	$mul = 5*3;
	$div = 20/4;

	var_dump($sum);

	$num = 0;
	$num = 1;

	echo $num;//1
	echo ++$num;//2

	//String
	$num = 5;
	$varString = '$num';
	echo $varString;
	$varString = "El valor de la variable num = $sum \n";
	echo $varString;

	$var2 = "Otra forma de incluir variables {$num} \n";
	echo $var2;
	
	$var2 = "Otra 2 forma de incluir variables $${num} \n";
	echo $var2;


	$stringMul= <<<'END'
Multi line
string
END;

	echo $stringMul;
	
	echo 'este es un '.' string \n';
	echo 'multiples',' parametros',' en echo \n';

	//Constantes, por estandar se pone un guien bajo al principio.

	define("_FOO","algo");

	echo _FOO;

	echo "este es el valor de la constante FOO ="._FOO;







	
 ?>
