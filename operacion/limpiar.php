<?php 
//recivo la cadena por metodo POST
$cadena = $_POST['cadena'];
//instacia caracter especial
$caracter = "_";
//buscamos que la cadena contenga el caracter especial
$pos = strpos($cadena, $caracter);
//validamos si no existe
if($pos ===false)
{
	//redireccionamos al formulario
	echo '<script type="text/javascript">
    alert("LA cadena no contiene El caracter epecial (_)");
    window.location="http://localhost/limpiarcadena.com/operacion/form.php";
   	</script> ';	 
}
else
{
	//ejecuto funcion con su parametro
	accionCadena($cadena);
}

function accionCadena ($cadena)
{	
	//obtengo cadenas por espacio
	$datoC = explode(' ', $cadena);	

	//cantidad cadenas
	$cantidad_cadena = count($datoC);
	//instacia cadena 1
	$cadena1 = $datoC[0];
	$can_carac_C1 = strlen($cadena1);
	
	//instacia cadena 2
	$cadena2 = $datoC[2];
	$can_carac_C2 = strlen($cadena2);	
	//instacia cadena 3
	$cadena3 = $datoC[3];
	$can_carac_C3 = strlen($cadena3);

	if ($can_carac_C2 <11) 
	{
		echo '<script type="text/javascript">
    		alert("La cadena 2 deben ser mayor a 11");
    		window.location="http://localhost/limpiarcadena.com/operacion/form.php";
   		</script> ';	
	}
	
	if ($can_carac_C3 <11) 
	{
		echo '<script type="text/javascript">
    		alert("La cadena 3 deben ser mayor a 11");
    		window.location="http://localhost/limpiarcadena.com/operacion/form.php";
   		</script> ';	
	}

	//validacion cantidad de cadenas
	if($can_carac_C1 >11 &&$can_carac_C2>11 && $can_carac_C3 >11)
	{
		//obtengo la primera cadena
		$datoscadena1 = explode('_', $cadena1);
		//obtengo la segunda cadena
		$datoscadena2 = explode('_', $cadena2);
		//obtengo la tercera cadena
		$datoscadena3 = explode('_', $cadena3);
		
		//se obtiene los datos de la cadena uno en la primera pocision
		$cantidaC1_1 = strlen($datoscadena1[0]);
		//se obtiene los datos de la cadena uno en la segunda pocision
		$cantidaC1_2 = strlen($datoscadena1[1]);
		//se obtiene los datos de la cadena uno en la tercera pocision
		$cantidaC1_3 = strlen($datoscadena1[2]);

		//inicio validacion primer numero cadena uno
		if ($cantidaC1_1 >1 && $cantidaC1_1 >3) 
		{

			echo '<script type="text/javascript">
    		alert("El primer número de la cadena 1 es mayor al requerido");
    		window.location="http://localhost/limpiarcadena.com/operacion/form.php";
   			</script> ';
		}
		elseif ($cantidaC1_2 >1 && $cantidaC1_2 >3) {
			echo '<script type="text/javascript">    		
    		window.location="http://localhost/limpiarcadena.com/operacion/form.php";
   			</script> ';
		}
		elseif ($cantidaC1_3 >1 && $cantidaC1_3 >3) {
			echo '<script type="text/javascript">
    		alert("El Tercer número de la cadena 1 es mayor al requerido");
    		window.location="http://localhost/limpiarcadena.com/operacion/form.php";
   			</script> ';
		}
		else
		{
			$cadena1_lim = $datoscadena1[0]." ".$datoscadena1[1]." ".$datoscadena1[2];
			$cadena2_lim = $datoscadena2[0]." ".$datoscadena2[1]." ".$$datoscadena2[3]." ".$datoscadena2[4];
			$cadena3_lim = $datoscadena3[0]." ".$datoscadena3[1]." ".$datoscadena3[2];	


		

			$archivo  ='../database/cadenasdb.txt';
			$file = fopen($archivo,"a");
			
			if(!fwrite($file,$cadena1_lim.','.$cadena2_lim.','.$cadena3_lim.PHP_EOL)){
				echo "Error a almacenar el registro";
				exit;
			}else
			{
				echo "Registro almacenado ";
			}
      		//Cierro el archivo


			echo '<script type="text/javascript">    		
    		window.location="http://localhost/limpiarcadena.com/operacion/form.php?cadena1='.$cadena1_lim.'&cadena2='.$cadena2_lim.'&cadena3='.$cadena3_lim.'";
   			</script> ';
		}
		/**********************/
		/*
		trabajando la cadena 2
		*/
		//se obtiene los datos de la cadena dos en la primera pocision
		$cantidaC2_1 = strlen($datoscadena2[0]);
		

		//se obtiene los datos de la cadena dos en la segunda pocision
		$cantidaC2_2 = strlen($datoscadena2[1]);
		//se obtiene los datos de la cadena dos en la tercera pocision
		$cantidaC2_3 = strlen($datoscadena2[2]);

		//se obtiene los datos de la cadena tercera en la primera pocision
		$cantidaC3_1 = strlen($datoscadena2[0]);
		//se obtiene los datos de la cadena tercera en la segunda pocision
		$cantidaC3_2 = strlen($datoscadena2[1]);
		//se obtiene los datos de la cadena tercera en la tercera pocision
		$cantidaC3_3 = strlen($datoscadena2[2]);
		
		
	}
	else
	{
		echo '<script type="text/javascript">
    		alert("La cadena 1 deben ser mayor a 11");
    		window.location="http://localhost/limpiarcadena.com/operacion/form.php";
   		</script> ';
	}

	
}


?>