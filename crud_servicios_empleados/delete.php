<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM servicios_empleados  WHERE idServicios='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: servicios_empleados.php");
    }
?>
