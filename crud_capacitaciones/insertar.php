<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$capacitacion=$_POST['capacitacion'];
$correo=$_POST['correo'];
$modo=$_POST['modo'];
$fecha=$_POST['fecha'];


$sql="INSERT INTO capacitaciones  (nombre, apellido, capacitacion, correo, modo, fecha) VALUES('$nombre','$apellido','$capacitacion','$correo','$modo','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: capacitaciones.php");
    
}else {
}
?>