<?php

include("conexion.php");
$con=conectar();

$id=$_POST['idServicios'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$area=$_POST['area'];
$servicio=$_POST['servicio'];
$fecha=$_POST['fecha'];

$sql="UPDATE servicios_empleados SET  nombre='$nombre',apellido='$apellido',correo='$correo',area='$area',servicio='$servicio',fecha='$fecha' WHERE idServicios='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: servicios_empleados.php");
    }
?>