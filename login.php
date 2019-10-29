<?php

require_once("config/db.php");
require_once("classes/Login.php");
require_once ("config/conexion.php");
$login = new Login();
if ($login->isUserLoggedIn() == true) {
   header("location: index.php");

} else {
    ?>
<!doctype html>
<html lang="es" class="fullscreen-bg">

<head>
<head>
  <meta charset="utf-8">
  <title>Electoral</title>
  <meta content="width=device-width, initial-scale=1.0,user-scalable=no" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="subjetc" content="Tupro Creativo Publicidad y Marketing">
  <meta name="robots" content="Index, Follow">
  <meta content="Tupro Creativo Publicidad y Marketing" name="author">
  <meta content="Diseno,Web,Publicidad,Marketing,Creatividad,Negocio,Incremento,Ventas,Tupro,Creativo" name="keywords">
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/Efect.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="../Abbott/Imagenes/<?php echo $Icono; ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="../Abbott/Imagenes/<?php echo $Icono; ?>">
    <link rel="stylesheet" href="lib/font-awesome/css/fontawesome-all.css" media="none"
        onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="lib/animate/animate.min.css" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="lib/owlcarousel/assets/owl.carousel.min.css" media="none"
        onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="lib/lightbox/css/lightbox.min.css" media="none" onload="if(media!='all')media='all'">
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
</head>

<body>
	<!-- WRAPPER -->
	<div class='col-md-6 offset-md-3'>
				<div class="card shadow-sm p-3 mb-5 bg-white rounded">

					<div class="card-body">
					<form method="post" accept-charset="utf-8" action="login.php" name="loginform" autocomplete="off" role="form" class="form-signin">
							<?php
				if (isset($login)) {
					if ($login->errors) {
						?>
						<div class="alert alert-danger alert-dismissible" role="alert">
						    <strong>Error!</strong> 
						
						<?php 
						foreach ($login->errors as $error) {
							echo $error;
						}
						?>
						</div>
						<?php
					}
					if ($login->messages) {
						?>
						<div class="alert alert-success alert-dismissible" role="alert">
						    <strong>Aviso!</strong>
						<?php
						foreach ($login->messages as $message) {
							echo $message;
						}
						?>
						</div> 
						<?php 
					}
				}
				?>
				
				<p class="lead">Ingrese a su cuenta</p>
					<div class="form-group">
								<label for="signin-email" class="control-label sr-only">Nit</label>
								<input type="Text" class="form-control" id="signin-email" name="user_name" value="" placeholder="Nit o Numero de Documento" autofocus="" required>
							</div>
							<div class="form-group">
								<label for="signin-password" class="control-label sr-only">Contraseña</label>
								<input type="password" class="form-control" id="signin-password" value="" placeholder="Contraseña" name="user_password" autocomplete="off" required>
							</div>
							<button type="submit" class="btn btn-primary btn-lg btn-block" name="login" id="submit">INICIAR SESIÓN</button>
							
						</form>
					
					</div>
				</div>
				</div>
	
	<!-- END WRAPPER -->
</body>

</html>
	<?php
}