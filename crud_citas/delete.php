<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM citas  WHERE idCita='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: citas.php");
    }
?>
