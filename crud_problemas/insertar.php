<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$tpo=$_POST['tipo'];
$personal=$_POST['personal'];
$fecha=$_POST['fecha'];


$sql="INSERT INTO problemas  (nombre, apellido, correo, tipo, personal, fecha) VALUES('$nombre','$apellido','$correo','$tipo','$personal','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: problemas.php");
    
}else {
}
?>