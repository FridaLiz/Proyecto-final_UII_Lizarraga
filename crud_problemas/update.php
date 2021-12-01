<?php

include("conexion.php");
$con=conectar();

$id=$_POST['idProblema'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$tipo=$_POST['tipo'];
$personal=$_POST['personal'];
$fecha=$_POST['fecha'];

$sql="UPDATE problemas SET  nombre='$nombre',apellido='$apellido',correo='$correo',tipo='$tipo',personal='$personal',fecha='$fecha' WHERE idProblema='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: problemas.php");
    }
?>