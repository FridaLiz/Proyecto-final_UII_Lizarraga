<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM capacitaciones  WHERE idCapacitacion='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: capacitaciones.php");
    }
?>
