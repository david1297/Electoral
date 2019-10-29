
<?php 
session_start();
require_once ("config/db.php");
require_once ("config/conexion.php");
  $Tachaduras = $_POST['Tachaduras'];
  $Firmas = $_POST['Firmas'];
  $Notas = $_POST['Notas'];
  $Blanco = $_POST['Blanco'];
  $Nulos = $_POST['Nulos'];
  $NoMarcados = $_POST['NoMarcados'];
  $Archivo = $_POST['Archivo'];
  $Total = $_POST['Total'];
  $Usuario = $_SESSION['Identificacion'];

  $SOLOLISTA = $_POST['SOLOLISTA'];
  $HARVY = $_POST['HARVY'];
  $RODRIGO = $_POST['RODRIGO'];
  $BRENDA = $_POST['BRENDA'];
  $GUILLERMO = $_POST['GUILLERMO'];
  $DORIAN = $_POST['DORIAN'];
  $ENILSE = $_POST['ENILSE'];
  $VALENTINA = $_POST['VALENTINA'];
  $GUSTAVO = $_POST['GUSTAVO'];
  $RUBEN = $_POST['RUBEN'];
  $JUANPABLO = $_POST['JUANPABLO'];
  $LUISALBERTO = $_POST['LUISALBERTO'];
  $ALEJANDRO = $_POST['ALEJANDRO'];
  $NATHALIA = $_POST['NATHALIA'];
  $ROLLINSON = $_POST['ROLLINSON'];
  $LESLIE = $_POST['LESLIE'];
  $OLMEDO = $_POST['OLMEDO'];
  $ALFREDO = $_POST['ALFREDO'];
  $PEDRO = $_POST['PEDRO'];
  $OLGA = $_POST['OLGA'];
  $ANGELA = $_POST['ANGELA'];
  $DEIBY = $_POST['DEIBY'];

  
        $sql =  "INSERT INTO  e14(Archivo,Usuario,Total,NoMarcados,Nulos,Blanco,Notas,Firmas,Tachaduras,
        SOLOLISTA,
HARVY,
RODRIGO,
BRENDA,
GUILLERMO,
DORIAN, 
ENILSE, 
VALENTINA, 
GUSTAVO, 
RUBEN, 
JUANPABLO, 
LUISALBERTO, 
ALEJANDRO, 
NATHALIA, 
ROLLINSON, 
LESLIE, 
OLMEDO, 
ALFREDO, 
PEDRO, 
OLGA, 
ANGELA, 
DEIBY   ) VALUES
      
        ('".$Archivo."', '".$Usuario."', '$Total','$NoMarcados','$Nulos','$Blanco','".$Notas."','".$Firmas."','".$Tachaduras."'
        ,'$SOLOLISTA'
        ,'$HARVY'
        ,'$RODRIGO'
        ,'$BRENDA'
        ,'$GUILLERMO'
        ,'$DORIAN'
        ,'$ENILSE'
        ,'$VALENTINA'
        ,'$GUSTAVO'
        ,'$RUBEN'
        ,'$JUANPABLO'
        ,'$LUISALBERTO'
        ,'$ALEJANDRO'
        ,'$NATHALIA'
        ,'$ROLLINSON'
        ,'$LESLIE'
        ,'$OLMEDO'
        ,'$ALFREDO'
        ,'$PEDRO'
        ,'$OLGA'
        ,'$ANGELA'
        ,'$DEIBY'
        
        
        
        
        
        
        );";
      
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
  