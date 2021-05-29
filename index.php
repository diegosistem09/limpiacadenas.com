<?php

ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . './session'));
session_start();



?>


 <!DOCTYPE html>
<html>
<head>
	<title>Limpiarcadena.com</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="author" content="">     
<!--<meta http-equiv="refresh" content="5" />-->
   
    <link rel="shortcut icon" href="../images/favicon.ico">    
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/modern-business.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


  
</head>

<body>


    
    <header>
    	
    </header>

<div class="container">
  <div class="row">
    <div class="col-md-12"><br></div>
  </div>
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Iniciar sesión</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Regístrate ahora</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="validar.php" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="usuario" id="username" tabindex="1" class="form-control" placeholder="Usuario"  required="true">
                  </div>
                  <div class="form-group">
                    <input type="password" name="contrasena" id="password" tabindex="2" class="form-control" placeholder="Contraseña" required="true">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Recordarme</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar sesión">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
             <!--   <form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar contraseña">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Crear cuenta">
                      </div>
                    </div>
                  </div>
                </form>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<footer>  
</footer>
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script language="Javascript">
document.oncontextmenu = function(){return false}
</script>
<script>
$(document).ready(function(){
    $("#myModal").modal();    
});
</script>
</body>
</html>
<!--Desarrollado POr Diego Mauricio Poveda-->