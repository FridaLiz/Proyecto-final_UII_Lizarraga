<?php

include("conexion.php");
$con=conectar();

$id=$_POST['idCapacitacion'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$capacitacion=$_POST['capacitacion'];
$correo=$_POST['correo'];
$modo=$_POST['modo'];
$fecha=$_POST['fecha'];

$sql="UPDATE capacitaciones SET  nombre='$nombre',apellido='$apellido',capacitacion='$capacitacion',correo='$correo',modo='$modo',fecha='$fecha' WHERE idCapacitacion='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: capacitaciones.php");
    }
?>