<?php
 //Algunas funciones de String

	$str = "Hola mundo, ya no esta nevando";
	var_dump($str);
	print_r(explode(" ",$str));
	
	//Money_Format
	echo "$".money_format("%i",1000.9)."\n";

	//str_replace
	$vocales = array("a","e","i","o","u");
	
	$cadena = "Esto es una prueba para reemplazar variables";
	$soloConsonantes = str_replace($vocales,"",$cadena);
	echo $soloConsonantes."\n";

	$frase = "Deberias de comer frutas, verduras y fibra todos los dias";
	$salud = array("frutas","verduras","fibra");
	$rico = array("pizza","cerveza","whisky");

	$nuevaFrase = str_replace($salud,$rico,$frase);
	echo $nuevaFrase."\n";
	
	//Hash_crypt

	$password = "admin123";
	$hash = crypt($password);
	echo $password." = ".$hash;
	echo "\n";
	$hash = crypt($password,"juwehfhkjsdhikhffkjsdhkfjhskeu");
	echo $password." = ".$hash;
	echo "\n";

	//md5
	$str = 'apple';
	echo md5($str);
	if (md5($str)== ''){
		echo "bien encriptado";

	};

	//trim

	$str = "   Prueba de string con espacios    ";
	echo trim($str);
	echo "\n";

	$str = "Hello world";
	$trimmed= trim($str,"HdWr");
	echo $trimmed;
	echo "\n"; 



?>
