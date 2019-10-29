<?php 
session_start();
require_once ("config/db.php");
require_once ("config/conexion.php");
  $Usuario = $_SESSION['Identificacion'];
    $sql =  "UPDATE archivos set Usuario ='',Estado='Pendiente' where Usuario ='$Usuario' and Estado='Asignado' ";
    $query_update = mysqli_query($con,$sql);

    $sql="SELECT count(*) FROM archivos where Usuario='';";
    $query = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($query);
    $Cantidad=$row[0];
    if ($Cantidad!=0){ 

      $sql="SELECT Id,Nombre FROM archivos where Usuario='' limit  1;";
      $query = mysqli_query($con, $sql);
      $row=mysqli_fetch_array($query);
      $Id=$row[0];
      $Archivo=$row[1];
    
      
      
            $sql =  "UPDATE archivos set Usuario ='$Usuario',Estado='Asignado' where Id =$Id";
          
                        $query_update = mysqli_query($con,$sql);
                        if ($query_update) {
                          echo '!Correcto!';
                          $_SESSION['Archivo']=$Archivo;
    
                        } else {
                          echo $sql.'Error';
                        }
    }else{
      echo '!Fin!';
    }


  
  ?>

  