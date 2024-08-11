<?php
     require("conexion/conexion.php");
      $usuario=$_POST['txtusuario'];
      $contrase=$_POST['txtPass'];

      $datos=mysqli_query($conexion,"CALL `loging`('$usuario','$contrase')");
      $datosUser=mysqli_fetch_array($datos);
      
      
      
      
      if($usuario == $datosUser[0] && $contrase == $datosUser[1]){
          session_start();
          $_SESSION['idCargo']=$datosUser[8];
          $_SESSION['nombre']=$datosUser[2]. ' ' .$datosUser[3];
          $_SESSION['RFC']=$datosUser[5];
          $_SESSION['tel']=$datosUser[6];
          $_SESSION['direccion']=$datosUser[7];
          $_SESSION['Cargo']=$datosUser[9];

          header("Location:index.php");

      }else{

          echo "<h3>Verifique los datos que sean correctos </h3>";
          echo "<h5><a href='loging.php'> Regresar</a> </h5>";
      }
?>