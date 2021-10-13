<?php 

$hostname ="localhost";
$usuario= "root";
$pass="";
$bd_name="equipogestion";

$con=mysqli_connect($hostname,$usuario,$pass,$bd_name);

if ($con === false) {
	echo "Ha habido un error <br>".mysqli_connect_error();
} else {
	echo 'Conectado a la base de datos';
}

//
  ?>




