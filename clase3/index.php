<?php
$numeroIngresado=357;
$contador=0;

for ($i=2; $i < $numeroIngresado ; $i++) { 
	//echo "<br>hola</br>";
	
	if($numeroIngresado%$i==0) {
	  echo "<br>El $numeroIngresado es divisible por $i</br>";
	  $contador++;
	
	}
}

if ($contador==0) {
	echo "<br>el numero es primo</br>";
}

else{

	echo "<br>el numero no es primo</br>";

} 

	

 









?>