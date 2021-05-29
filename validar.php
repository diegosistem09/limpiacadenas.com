<?php 
//recibimos los datos del formulario
$usuario = $_POST['usuario'];
$pasword = $_POST['contrasena'];

//validamos los campos recibidos
if($pasword !='' && $usuario !=''){
	//ejecutamos funcion validar
	validar($usuario,$pasword);
}

//declaro la funcion validar que lee un archivo txt para verificar los datos del usuario
function validar($usuario,$pasword)
{
	$nombre_fichero ='database/db.txt';
	   //abrimos el archivo de texto y obtenemos el identificador
	$fichero_texto = fopen ($nombre_fichero, "r");
	//obtenemos los datos del archivo	 
	$contenido_fichero = fread($fichero_texto, filesize($nombre_fichero));   

	//se limpia la cadena y se obtiene un array
	$datos  = explode(',', $contenido_fichero);
	//instacia de usuario 
	$usuariodb = $datos[0];
	//instacia de password 
	$paswordadmin = $datos[1];

	   
	   if ($usuario == $usuariodb && $paswordadmin == $pasword ) 
	   {	   	
	   		echo '<script type="text/javascript">
       		alert("Bienvenido");
      		window.location="http://localhost/limpiarcadena.com/operacion/form.php";
    		</script> ';	 
	   }
	   else
	   {
	   		echo '<script type="text/javascript">
       		alert("Datos InCorrectos");
      		window.location="http://localhost/limpiarcadena.com/index.php";
    		</script> ';
	   }
	   
}
 ?>