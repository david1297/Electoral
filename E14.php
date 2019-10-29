<?php 
session_start();
if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
  header("location: login.php");
exit;
}  ?>
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
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nuevo</a>
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
$Usuario = $_SESSION['Identificacion'];
$sql="SELECT Nombre FROM archivos where Usuario='$Usuario' and Estado='Asignado';";
$query = mysqli_query($con, $sql);
$row=mysqli_fetch_array($query);
$Archivo=$row[0];

$Pagina ='5';
$directorio='E14';

				
				
?>
<div class='container-fluid'>
  <div class='row'>
    <div class='col-md-6'>
          <form class="form-horizontal col-sm-12" method="post" id="Guardar_E14" name="Guardar_E14">
          <input type="text" class="form-control" id="Archivo" name="Archivo" value='<?php echo $Archivo;?>' onkeypress='return validaNumericos(event)'readonly ='readonly'>
            <div class="form-group">
                <label for="Tachaduras">Hay Tachaduras</label>
                <select id="Tachaduras" name="Tachaduras" class="form-control">
                    <option selected>Seleccione..</option>
                    <option value='Si'>Si</option>
                    <option value='No'>No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Firmas">Faltan Firmas</label>
                <select id="Firmas" name="Firmas" class="form-control">
                    <option selected>Seleccione..</option>
                    <option value='Si'>Si</option>
                    <option value='No'>No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Notas">Hay Notas</label>
                <select id="Notas" name="Notas" class="form-control">
                    <option selected>Seleccione..</option>
                    <option value='Si'>Si</option>
                    <option value='No'>No</option>
                </select>
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="SOLOLISTA">SOLO POR LA LISTA</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="SOLOLISTA" name="SOLOLISTA" placeholder="SOLO POR LA LISTA" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="HARVY">HARVY MOSQUERA</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="HARVY" name="HARVY" placeholder="HARVY MOSQUERA" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="RODRIGO">RODRIGO MOLANO GONZALEZ</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="RODRIGO" name="RODRIGO" placeholder="RODRIGO MOLANO GONZALEZ" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="BRENDA">BRENDA LIZETH MURILLO BARCO</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="BRENDA" name="BRENDA" placeholder="BRENDA LIZETH MURILLO BARCO" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="GUILLERMO">GUILLERMO RODRIGUEZ LONDOÑO</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="GUILLERMO" name="GUILLERMO" placeholder="GUILLERMO RODRIGUEZ LONDOÑO" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="DORIAN">DORIAN MARULANDA TONUZCO</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="DORIAN" name="DORIAN" placeholder="DORIAN MARULANDA TONUZCO" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="ENILSE">ENILSE LOPERA OCAMPO</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="ENILSE" name="ENILSE" placeholder="ENILSE LOPERA OCAMPO" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="VALENTINA">VALENTINA CAPACHO FLOREZ</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="VALENTINA" name="VALENTINA" placeholder="VALENTINA CAPACHO FLOREZ" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="GUSTAVO">GUSTAVO NOREÑA QUINCHIA</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="GUSTAVO" name="GUSTAVO" placeholder="GUSTAVO NOREÑA QUINCHIA" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="RUBEN">RUBEN DARIO PALACIO MOSQUERA</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="RUBEN" name="RUBEN" placeholder="RUBEN DARIO PALACIO MOSQUERA" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="JUANPABLO">JUAN PABLO ATEHORTUA BEDOYA</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="JUANPABLO" name="JUANPABLO" placeholder="JUAN PABLO ATEHORTUA BEDOYA" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="LUISALBERTO">LUIS ALBERTO PRADO CABEZAS</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="LUISALBERTO" name="LUISALBERTO" placeholder="LUIS ALBERTO PRADO CABEZAS" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="ALEJANDRO">ALEJANDRO CAICEDO CORTES</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="ALEJANDRO" name="ALEJANDRO" placeholder="ALEJANDRO CAICEDO CORTES" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="NATHALIA">NATHALIA CANO OSORIO</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="NATHALIA" name="NATHALIA" placeholder="NATHALIA CANO OSORIO" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="ROLLINSON">ROLLINSON RIASCO GUERRERO</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="ROLLINSON" name="ROLLINSON" placeholder="ROLLINSON RIASCO GUERRERO" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="LESLIE">LESLIE MAYOLIS POSSO MORENO</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="LESLIE" name="LESLIE" placeholder="LESLIE MAYOLIS POSSO MORENO" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="OLMEDO">OLMEDO MUÑOZ LOPEZ</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="OLMEDO" name="OLMEDO" placeholder="OLMEDO MUÑOZ LOPEZ" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="ALFREDO">ALFREDO PINEDA TORRES</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="ALFREDO" name="ALFREDO" placeholder="ALFREDO PINEDA TORRES" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="PEDRO">PEDRO PABLO ARIAS CASTILLO</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="PEDRO" name="PEDRO" placeholder="PEDRO PABLO ARIAS CASTILLO" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="OLGA">OLGA MATILDE CHAUX LOZANO</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="OLGA" name="OLGA" placeholder="OLGA MATILDE CHAUX LOZANO" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="ANGELA">ANGELA GUERRERO JARAMILLO</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="ANGELA" name="ANGELA" placeholder="ANGELA GUERRERO JARAMILLO" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="DEIBY">DEIBY ALEXANDER TENORIO</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="DEIBY" name="DEIBY" placeholder="DEIBY ALEXANDER TENORIO" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Brenda")'>
              </div>  
            </div>

















            <div class="form-group row">
              <div class='col-md-3'>
                <label for="Blanco">Votos en Blanco</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="Blanco" name="Blanco" placeholder="Votos en Blanco" onkeypress='return validaNumericos(event)' onkeyup='quitarValidacion("Blanco")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="Nulos">Votos  Nulos</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="Nulos" name="Nulos" placeholder="Votos  Nulos" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("Nulos")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="NoMarcados">Votos no Marcados</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="NoMarcados" name="NoMarcados" placeholder="Votos no Marcados" onkeypress='return validaNumericos(event)'onkeyup='quitarValidacion("NoMarcados")'>
              </div>  
            </div>
            <div class="form-group row">
              <div class='col-md-3'>
                <label for="Total">Total de Votos</label>
              </div>
              <div class='col-md-9'>
                <input type="text" class="form-control" id="Total" name="Total" placeholder="Total de Votos" onkeypress='return validaNumericos(event)' onkeyup='quitarValidacion("Total")'>
              </div>  
            </div>
           
            
            <button type="button" class="btn btn-success" id='Guardar'>Guardar</button>
            <button type="button" class="btn btn-danger" id='Cancelar'>Cancelar</button>
          </form>
    </div>
    <div class='col-md-6'>
        <embed src="<?php echo $Archivo;?>#page=<?php echo $Pagina;?>&zoom=50" type="application/pdf" width="100%" height="2100px" />
       
    </div>
</div>
   <div id='Resuesta'></div>

</div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="js/jquery.js"></script>   
<script>
function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
}
$("#Guardar").click(function( event ) {

  if ($('#Tachaduras').val()!='Seleccione..'){
    $('#Tachaduras').removeClass("is-invalid");
		$('#Tachaduras').addClass("is-valid");
    if ($('#Firmas').val()!='Seleccione..'){
      $('#Firmas').removeClass("is-invalid");
		  $('#Firmas').addClass("is-valid");
      if ($('#Notas').val()!='Seleccione..'){
        $('#Notas').removeClass("is-invalid");
		    $('#Notas').addClass("is-valid");
        if ($('#Brenda').val()!=''){
          $('#Brenda').removeClass("is-invalid");
		      $('#Brenda').addClass("is-valid");
          if ($('#Blanco').val()!=''){
            $('#Blanco').removeClass("is-invalid");
		        $('#Blanco').addClass("is-valid");
            if ($('#Nulos').val()!=''){
              $('#Nulos').removeClass("is-invalid");
		          $('#Nulos').addClass("is-valid");
              if ($('#NoMarcados').val()!=''){
                $('#NoMarcados').removeClass("is-invalid");
		            $('#NoMarcados').addClass("is-valid");
                if ($('#Total').val()!=''){
                $('#Total').removeClass("is-invalid");
		            $('#Total').addClass("is-valid");
                var r = confirm("Desea Enviar el Formulario E14");
                  if (r == true) {
                    $( "#Guardar_E14" ).submit();
                  } 
                }else{
                  $('#Total').removeClass("is-valid");
		              $('#Total').addClass("is-invalid");
		              $('#Total').focus();
                }
              }else{
                $('#NoMarcados').removeClass("is-valid");
		            $('#NoMarcados').addClass("is-invalid");
		            $('#NoMarcados').focus();
              }
            }else{
              $('#Nulos').removeClass("is-valid");
		          $('#Nulos').addClass("is-invalid");
		          $('#Nulos').focus();
            }
          }else{
            $('#Blanco').removeClass("is-valid");
		        $('#Blanco').addClass("is-invalid");
		        $('#Blanco').focus();
          }
        }else{
          $('#Brenda').removeClass("is-valid");
		      $('#Brenda').addClass("is-invalid");
		      $('#Brenda').focus();
        }
      }else{
        $('#Notas').removeClass("is-valid");
		    $('#Notas').addClass("is-invalid");
		    $('#Notas').focus();
      }
    }else{
      $('#Firmas').removeClass("is-valid");
		  $('#Firmas').addClass("is-invalid");
		  $('#Firmas').focus();
    }
  }else{
    $('#Tachaduras').removeClass("is-valid");
		$('#Tachaduras').addClass("is-invalid");
		$('#Tachaduras').focus();
  }
})

function quitarValidacion(id){
  
  $('#'+id).removeClass("is-valid");
	$('#'+id).removeClass("is-invalid");
}

	$( "#Guardar_E14" ).submit(function( event ) {
 		var parametros = $(this).serialize();
	 	$.ajax({
			type: "POST",
			url: "Guardar_E14.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#Resuesta").html("Mensaje: Cargando...");
			  },
			success: function(datos){
       
        var Res = datos.split('!');

        if (Res[1]=='Correcto'){
          alert('Datos Del Formulario almacenado Correctamente');
          location.href='index.php';
          $("#Resuesta").html('');
        }else{
          $("#Resuesta").html(Res[1]);
        }
			
			
		  }
	});
  event.preventDefault();
})
</script>


 

</body>

</html>