<?php 
if (isset($_GET)) {
	
	$cadena1 = $_GET['cadena1'];
	$cadena2 = $_GET['cadena2'];
	$cadena3 = $_GET['cadena3'];
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Limpiarcadena.com</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">    
    <link href="../css/modern-business.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<label>Formulario para limpiar cadena de texto</label>
				<form action="limpiar.php" method="post">
					<div class="form-group">
                    	<input type="text" name="cadena" class="form-control" placeholder="Cadena"  required="true">
                  	</div>
                  	<div class="col-sm-12 col-sm-offset-3">
                        <input type="submit"  class="form-control btn btn-primary" value="Limpiar cadena">
                      </div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="col-md-12"></div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<table border="1">
						<thead>
							<th>Cadena 1</th>
							<th>Cadena 2</th>
							<th>Cadena 3</th>
						</thead>				
						<tbody>
							<tr>
								<td><?php echo $cadena1; ?></td> 
								<td><?php echo $cadena2 ?></td> 
								<td><?php echo $cadena3 ?></td>
							</tr>

						</tbody>
					</table>
				</div>
				<div class="col-md-4">				
				</div>
			</div>
			<div class="col-md-12"></div>
			<div class="row">
				<div class="col-md-12"></div>
				<div class="col-md-12">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<label>Cadenas  registradas en la base de datos</label>

					<table border="1">
						<thead>
							<th>Cadena 1</th>
							<th>Cadena 2</th>
							<th>Cadena 3</th>
						</thead>
							<?php 
							if ($cadena1) 
							{
								$nombre_fichero ='../database/cadenasdb.txt';
							   	//abrimos el archivo de texto y obtenemos el identificador
								$fichero_texto = fopen ($nombre_fichero, "r");
								//obtenemos los datos del archivo	 
								$contenido_fichero = fread($fichero_texto, filesize($nombre_fichero));   

								//se limpia la cadena y se obtiene un array
								$datos  = explode(',', $contenido_fichero);
																
							}
						 ?>
						<tbody>
						<tr>
							<td><?php echo $datos[0] ?></td>
							<td><?php echo $datos[1] ?></td>
							<td><?php echo $datos[2] ?></td>
						</tr>							
						</tbody>
					</table>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>