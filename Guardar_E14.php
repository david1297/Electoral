
<?php 
session_start();
require_once ("config/db.php");
require_once ("config/conexion.php");
  $Tachaduras = $_POST['Tachaduras'];
  $Firmas = $_POST['Firmas'];
  $Notas = $_POST['Notas'];
  $Brenda = $_POST['Brenda'];
  $Blanco = $_POST['Blanco'];
  $Nulos = $_POST['Nulos'];
  $NoMarcados = $_POST['NoMarcados'];
  $Archivo = $_POST['Archivo'];
  $Total = $_POST['Total'];
  $Usuario = $_SESSION['Identificacion'];
  
        $sql =  "INSERT INTO  e14(Archivo,Usuario,Total,NoMarcados,Nulos,Blanco,Brenda,Notas,Firmas,Tachaduras) VALUES
      
        ('".$Archivo."', '".$Usuario."', '$Total','$NoMarcados','$Nulos','$Blanco','$Brenda','".$Notas."','".$Firmas."','".$Tachaduras."');";
                    $query_update = mysqli_query($con,$sql);
                    if ($query_update) {
                      echo '!Correcto!';
                      $_SESSION['Archivo']='';
                      $sql =  "UPDATE archivos set Estado='Realizado' where Usuario ='$Usuario'";
        
                      $query_update = mysqli_query($con,$sql);
                    } else {
                      echo $sql.'Error';
                    }
  ?>
  