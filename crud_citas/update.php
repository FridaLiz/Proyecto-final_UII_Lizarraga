<?php

include("conexion.php");
$con=conectar();

$id=$_POST['idCita'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$uso=$_POST['uso'];
$fecha=$_POST['fecha'];
$tiempo=$_POST['tiempo'];

$sql="UPDATE citas SET  nombre='$nombre',apellido='$apellido',correo='$correo',uso='$uso',fecha='$fecha',tiempo='$tiempo' WHERE idCita='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: citas.php");
    }
?>