<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$area=$_POST['area'];
$servicio=$_POST['servicio'];
$fecha=$_POST['fecha'];


$sql="INSERT INTO servicios_empleados  (nombre, apellido,  correo, area, servicio, fecha) VALUES('$nombre','$apellido','$correo','$area','$servicio','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: servicios_empleados.php");
    
}else {
}
?>