
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" />  
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
        <a class="nav-link" href="SubirArchivos.php">SubirArchivos</a>
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
?>
<div class='container'>
<canvas id="chartjs-1" class="chartjs" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
 <script src="js/jquery.js"></script>   
<script>
<?php
  $sql="select sum(Brenda)Brenda,sum(Nulos)Nulos,sum(NoMarcados)NoMarcados,sum(Blanco)Blanco from e14 ";
  $query = mysqli_query($con, $sql);
  $row=mysqli_fetch_array($query);
  
  
?>

  new Chart(document.getElementById("chartjs-1"),{
    "type":"bar",
    "data":{
      "labels":[
        "Brenda",
        "Nulos",
        "No Marcados",
        "En Blanco"
      ],
      "datasets":[{
        "label":
          "Numero de Votos",
          "data":[
            <?php echo $row[0];?>,<?php echo $row[1];?>,<?php echo $row[2];?>,<?php echo $row[3];?>
          ],"fill":false,
          "backgroundColor":[
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)"
          ],
          "borderColor":[
            "rgb(255, 99, 132)",
            "rgb(255, 159, 64)",
            "rgb(255, 205, 86)",
            "rgb(75, 192, 192)"
          ],
          "borderWidth":1
      }]
    },"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});</script>








<script>
function NuevoE14(){
  $.ajax({
			type: "POST",
			url: "SeleccionarE14.php",
			 beforeSend: function(objeto){
				$("#Resuesta").html("Mensaje: Cargando...");
			  },
			success: function(datos){
        var Res = datos.split('!');

        if (Res[1]=='Correcto'){
          location.href='E14.php';
        }else{
          if (Res[1]=='Fin'){
            alert('Ya se Completaron los formularios');
          }else{
            alert(datos);
          }

         
        }
			
			
		  }
	});


  
  event.preventDefault();
}
</script> 



 

</body>

</html>