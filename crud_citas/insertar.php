<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$uso=$_POST['uso'];
$fecha=$_POST['fecha'];
$tiempo=$_POST['tiempo'];


$sql="INSERT INTO citas  (nombre, apellido, correo, uso, fecha, tiempo) VALUES('$nombre','$apellido','$correo','$uso','$fecha','$tiempo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: citas.php");
    
}else {
}
?>