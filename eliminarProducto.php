<?php
require("conexion/conexion.php");
$claveprod=$_GET['clave'];
$delete="DELETE from producto WHERE clave_producto = 'claveprod'";
$query=mysqli_query($conexion,$delete);
if(!$query){
    echo "error al eliminar ";
}else {
    echo " producto con clave $claveprod eliminado";
}
?>