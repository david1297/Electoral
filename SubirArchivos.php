
<!DOCTYPE html>
<html lang="es">

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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>

<body style="padding-top: 0px;padding-bottom: 0px;">  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="img/logo.png" class='img-fluid'alt="" style="width:50px!important"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav my-2 my-lg-0 ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Resultados.php">Resultados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php?logout">Cerrar Sesion</a>
      </li>
      
    </ul>
  </div>
</nav>
<?php 
require_once ("config/db.php");
require_once ("config/conexion.php");
if (@$_POST['Subir']=='Subir'){
  $directorio = $_POST['Ruta'];
	if ($dir = opendir($directorio)){
    while ($archivo = readdir($dir)) {
      if ($archivo != '.' && $archivo != '..' && substr($archivo, 0, 2) !='._'){
        
        $Nombre=$directorio.'/'.$archivo;
      
        $sql =  "INSERT INTO  archivos(Nombre,Usuario,Estado) VALUES
      
        ('".$Nombre."', '', 'Pendiente');";
                    $query_update = mysqli_query($con,$sql);
                    if ($query_update) {
                      echo '<div class="col-sm-3 col-xs-12">';
                      echo "Archivo Subido: <strong>$Nombre</strong><br />";
                    
                    echo '</div>';
                    } else {
                      echo '<div class="col-sm-3 col-xs-12">';
                      echo "Error al subir Archivo: <strong>$Nombre</strong><br />";
                    
                    echo '</div>';
                    }
        
       
      }
    }
  }
  ?>
  <a href="SubirArchivos.php" class='btn btn-danger'>Volver</a><?php 
}else{
  ?>
  <div class='container-fluid'>
    <div class='row'>
      <div class='col-md-12'>
        <form class="form-horizontal col-sm-8" method="post" action="SubirArchivos.php"  id="Guardar_E14" name="Guardar_E14">    
          <div class="form-group row">
            <div class='col-md-3'>
              <label for="Ruta">Ruta</label>
            </div>
            <div class='col-md-9'>
              <input type="text" class="form-control" id="Ruta" name="Ruta" placeholder="Ruta" value='E14' >
              <input type="text" class="form-control hidden" id="Subir" name="Subir" value='Subir' hidden>
            </div>  
          </div>        
          <button type="submit" class="btn btn-success" id='Guardar'>Subir</button>    
        </form>
      </div>
    </div>
  </div>
  <?php 
}
?>


				
				


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script>
function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
}
$("#Guardar").click(function( event ) {

			var r = confirm("Desea Subir Los Archivos");
  		if (r == true) {
				$( "#Guardar_E14" ).submit();
  		} 
	
})

	$( "#Guardar_E14" ).submit(function( event ) {
 		var parametros = $(this).serialize();
	 	$.ajax({
			type: "POST",
			url: "Componentes/Ajax/Guardar_E14.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			
		  }
	});
  event.preventDefault();
})
</script>


 

</body>

</html>